<?php
  

function strategy_assets() {
  
    
  wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css?ver='.time(), array(), false, 'all' );
  
  wp_enqueue_style( 'vendor', get_template_directory_uri() . '/assets/css/vendor.css?ver='.time(), array(), false, 'all' );
  
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js?ver=9999', array(), '20151215', true );
}

add_filter('style_loader_tag', 'development_disable_style_caching');
function development_disable_style_caching($tag){
  return str_replace(get_bloginfo('version'), time(), $tag);
}

add_action( 'wp_enqueue_scripts', 'strategy_assets' );
add_theme_support( 'post-thumbnails', array( 'post' ) );

show_admin_bar(false);


function custom_excerpt_length( $length ) {
    return 40; // заменить 20 на нужное количество слов
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Настройки темы',
        'menu_title'    => 'Глобальные настройки',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_filter('wpcf7_autop_or_not', '__return_false');



add_action('wp_ajax_filter_products', 'filter_products');
add_action('wp_ajax_nopriv_filter_products', 'filter_products');

function filter_products() {
    $data = json_decode(file_get_contents('php://input'), true);

    $args = [
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'order'          => 'ASC',   // ASC — по возрастанию
        'meta_query'     => ['relation' => 'AND'],
        'tax_query'      => ['relation' => 'AND'],
    ];

    // Фильтр по категории (если передан category ID)
    if (!empty($data['category'])) {
        $args['tax_query'][] = [
            'taxonomy' => 'product_cat',
            'field'    => 'slug', // Используем slug
            'terms'    => sanitize_text_field($data['category']),
        ];
    }

    // Фильтр по этажности
    if (!empty($data['floor'])) {
        $args['meta_query'][] = [
            'key'     => 'floor',
            'value'   => sanitize_text_field($data['floor']),
            'compare' => '=',
        ];
    }

    // Фильтр по размеру
    if (!empty($data['size_min']) || !empty($data['size_min2'])) {
        // Получаем все товары
        $all_products = get_posts([
            'post_type' => 'product',
            'numberposts' => -1,
            'fields' => 'ids', // Получаем только ID товаров
        ]);

        $filtered_products = [];

        foreach ($all_products as $product_id) {
            $size = get_post_meta($product_id, 'size', true); // Предположим, что размер хранится в метаполе 'size'

            if ($size) {
                // Разбиваем размер на две части (например, "8x10" -> [8, 10])
                $size_parts = array_map('floatval', explode('x', $size));

                // Проверяем, соответствует ли размер фильтру
                $width_match = true;
                $height_match = true;

                // Проверка по ширине
                if (!empty($data['size_min'])) {
                    $width_match = $width_match && ($size_parts[0] == floatval($data['size_min']));
                }
                if (!empty($data['size_max'])) {
                    $width_match = $width_match && ($size_parts[0] == floatval($data['size_max']));
                }

                // Проверка по высоте
                if (!empty($data['size_min2'])) {
                    $height_match = $height_match && ($size_parts[1] == floatval($data['size_min2']));
                }
                if (!empty($data['size_max2'])) {
                    $height_match = $height_match && ($size_parts[1] == floatval($data['size_max2']));
                }

                // Если размер подходит, добавляем товар в отфильтрованный список
                if ($width_match && $height_match) {
                    $filtered_products[] = $product_id;
                }
            }
        }

        // Если есть отфильтрованные товары, добавляем их в аргументы запроса
        if (!empty($filtered_products)) {
            $args['post__in'] = $filtered_products;
        } else {
            // Если товаров не найдено, возвращаем пустой результат
            wp_send_json([]);
            return;
        }
    }

    // Фильтр по цене
    if (!empty($data['min_price']) || !empty($data['max_price'])) {
        $price_query = ['relation' => 'AND'];

        if (!empty($data['min_price'])) {
            $price_query[] = [
                'key'     => '_price',
                'value'   => intval($data['min_price']),
                'compare' => '>=',
                'type'    => 'NUMERIC',
            ];
        }
        if (!empty($data['max_price'])) {
            $price_query[] = [
                'key'     => '_price',
                'value'   => intval($data['max_price']),
                'compare' => '<=',
                'type'    => 'NUMERIC',
            ];
        }

        $args['meta_query'][] = $price_query;
    }

    // Выполняем запрос
    $query = new WP_Query($args);
    $products = [];

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            global $product;

            $products[] = [
                'name'  => get_the_title(),
                'permalink' => get_permalink(),
                'image' => get_field('item-img') ?: wc_placeholder_img_src(),
                'price' => $product->get_price(),
                'size'  => get_post_meta(get_the_ID(), 'size', true) ?: '',
                'floor' => get_post_meta(get_the_ID(), 'floor', true) ?: '',
            ];
        }
        wp_reset_postdata();
    }

    wp_send_json($products);
}



add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}












