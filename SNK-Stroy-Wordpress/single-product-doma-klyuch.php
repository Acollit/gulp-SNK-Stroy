<?php
function get_product_categories() {
    global $product;
    if ($product) {
        return wc_get_product_category_list($product->get_id());
    }
    return '';
}
?>
<?php get_header(); ?>
<main class="main">
    <div class="bread bread--single">
        <div class="container">
          
          <div class="bread__content">
            <div class="bread__wrapper">
            <ul class="list-reset bread__sublist">
              <li class="bread__sublist-item">
                  <a href="/" class="bread__sublist-link">Главная</a>
              </li>

              <?php if (is_product()): ?>
                <?php
                global $post;
                $categories = get_the_terms($post->ID, 'product_cat');

                if (!empty($categories) && !is_wp_error($categories)) {
                    // Убираем категорию "hit", если она есть
                    $categories = array_filter($categories, function ($category) {
                        return $category->slug !== 'hit';
                    });

                    // Берем первую оставшуюся категорию
                    $category = !empty($categories) ? reset($categories) : null;

                    if ($category):
                ?>
                    <li class="bread__sublist-item">
                        <a href="<?php echo esc_url(get_term_link($category)); ?>" class="bread__sublist-link">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    </li>
                <?php endif; ?>
                <?php } ?>
            <?php endif; ?>



              <li class="bread__list-item">
                <a class="bread__list-link">
                    <?php the_title(); ?>
                </a>
              </li>
            </ul>  
          </div>
            <h1 class="bread__title">
              Дом из бруса <?php the_field('size'); ?> <?php the_title(); ?>
            </h1>
            <?php
            $current_post_id = get_the_ID();

            // Получаем товары WooCommerce
            $args = [
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'ASC',
            ];

            $brus_house_posts = get_posts($args);
            $total_posts = count($brus_house_posts);
            $current_post_index = 0;

            // Определяем текущий товар в списке
            foreach ($brus_house_posts as $index => $post) {
                if ($post->ID == $current_post_id) {
                    $current_post_index = $index;
                }
            }

            // Определяем предыдущий и следующий товар
            $previous_post = ($current_post_index > 0) ? $brus_house_posts[$current_post_index - 1] : null;
            $next_post = (isset($brus_house_posts[$current_post_index + 1])) ? $brus_house_posts[$current_post_index + 1] : null;

            // Добавляем класс для отключённых кнопок
            $prev_class = $previous_post ? '' : 'disabled';
            $next_class = $next_post ? '' : 'disabled';

            echo '<a href="' . ($previous_post ? get_permalink($previous_post->ID) : '#') . '" class="btn-reset bread__prev ' . $prev_class . '">
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.3333 9.5H2.66663M2.66663 9.5L6.66663 5.5M2.66663 9.5L6.66663 13.5" stroke="#2D2A38" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Предыдущий</a>';

            echo '<a href="' . ($next_post ? get_permalink($next_post->ID) : '#') . '" class="btn-reset bread__next ' . $next_class . '">Следующий
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.66671 9.5H13.3334M13.3334 9.5L9.33337 5.5M13.3334 9.5L9.33337 13.5" stroke="#2D2A38" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>';

            wp_reset_postdata();
            ?>
          </div>
           
        </div>
    </div>

  <section class="project-inner">
        <div class="container">
          <div class="project-inner__content">
            <div class="project-inner__wrapper">
              
              <div class="swiper project-inner__swiper">
                <div class="swiper-wrapper">
                  <?php if(have_rows('galereya')): ?>
                    <?php while(have_rows('galereya')): the_row(); ?>
                        <div class="swiper-slide">
                          <img loading="lazy" src="<?php the_sub_field('galereya-img'); ?>" class="project-inner__img image" width="759" height="570" alt="img">
                        </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                 
                </div>
                <span class="project-inner__count">

                </span>
                <div class="project-inner__btns">
                  <button class="btn-reset project-inner__prev">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-inner-prev.svg" class="image" width="32" height="32" alt="svg">
                  </button>
                  <button class="btn-reset project-inner__next">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-inner-next.svg" class="image" width="32" height="32" alt="svg">
                  </button>
                </div>
              </div>
              <div class="swiper project-inner__thumbs">
                <div class="swiper-wrapper">
                  
                  <?php if(have_rows('galereya')): ?>
                    <?php while(have_rows('galereya')): the_row(); ?>
                        <div class="swiper-slide">
                          <img loading="lazy" src="<?php the_sub_field('galereya-img'); ?>" class="image" width="148" height="105" alt="img">
                        </div>
                    <?php endwhile; ?>
                  <?php endif; ?>

                </div>
              </div>
            </div>
            <div class="project-inner__box">
              <ul class="list-reset project-inner__list">
                <li class="project-inner__list-item">
                  <span class="project-inner__span">Брус 90х140</span>
                  <span class="project-inner__price"><?php the_field('price-90x140'); ?> ₽</span>
                </li>
                <li class="project-inner__list-item">
                  <span class="project-inner__span">Брус 140х140</span>
                  <span class="project-inner__price"><?php the_field('price-140x140'); ?> ₽</span>
                </li>
                <li class="project-inner__list-item">
                  <span class="project-inner__span">Брус 140х190</span>
                  <span class="project-inner__price"><?php the_field('price-140x190'); ?> ₽</span>
                </li>
              </ul>
              <div class="project-inner__grid">
               <div class="project-inner__grid-item">
                  <p class="project-inner__grid-descr">
                    Размер
                  </p>
                  <p class="project-inner__grid-text">
                    <?php the_field('size'); ?>
                  </p>
               </div>
               <div class="project-inner__grid-item">
                  <p class="project-inner__grid-descr">
                    Площадь
                  </p>
                  <p class="project-inner__grid-text">
                    <?php the_field('width'); ?>
                  </p>
               </div>
               <div class="project-inner__grid-item">
                  <p class="project-inner__grid-descr">
                    Этажи
                  </p>
                  <p class="project-inner__grid-text">
                    <?php the_field('floor'); ?>
                  </p>
               </div>
               <div class="project-inner__grid-item">
                  <p class="project-inner__grid-descr">
                    Дни
                  </p>
                  <p class="project-inner__grid-text">
                    <?php the_field('time'); ?>
                  </p>
               </div>
                
              </div>

              <a href="tel:+79217302466" class="project-inner__phone">8 (921) 730-24-66</a>
              <div class="project-inner__block">
                  <button class="btn-reset project-inner__btn" data-graph-path="modal">Отправить проект
                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.41659 11H14.0833M14.0833 11L10.0833 15M14.0833 11L10.0833 7" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </button>
                  <a href="/materinskiy-capital/" class="project-inner__link">Маткапитал
                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.41659 11H14.0833M14.0833 11L10.0833 15M14.0833 11L10.0833 7" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section class="project-info">
        <div class="container">
          
          <div class="tabs" data-tabs="info">
            <h2 class="project-info__title">
              Комплектация
            </h2>
            <div class="project-info__nav">
              <span class="project-info__key project-info__key--active">Под ключ</span>
              <span class="project-info__ysad">Под усадку</span>
            </div>
            <div class="tabs__wrapper">
              <ul class="list-reset tabs__nav">
                <li class="tabs__nav-item"><button class="btn-reset tabs__nav-btn" type="button">Лайт 90x140</button></li>
                <li class="tabs__nav-item"><button class="btn-reset tabs__nav-btn" type="button">Медиум 140x140</button></li>
                <li class="tabs__nav-item"><button class="btn-reset tabs__nav-btn" type="button">Люкс 190x140</button></li>
                <li class="tabs__nav-item"><button class="btn-reset tabs__nav-btn" type="button">Гарантия</button></li>
                <li class="tabs__nav-item"><button class="btn-reset tabs__nav-btn" type="button">Технология</button></li>
              </ul>      
            </div>
            
            <div class="tabs__content">
              <div class="tabs__panel">
                <div class="project-info__wrapper">
                  
                  <div class="project-info__content">
                    

                    <div class="project-info__row">
                      <p class="project-info__name">
                        Фундамент
                      </p>
                      <p class="project-info__text">
                        По согласованию с Заказчиком (свайно- винтовой (метал сваи); свайно- забивной (ж/б сваи); ленточный или ж/б плита). Гидроизоляция – рубероид в 2 слоя.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обвязка двойная
                      </p>
                      <p class="project-info__text">
                        обрезной  брус хвойных пород древесины, сечением 100х150мм, камерной сушки — 2 ряда,  обрабатываются антисептиком. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Лаги пола
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением  40х150 мм,  камерной сушки (с шагом 59 см).
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Черновые полы
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением 20х100 мм,  камерной сушки. Ветроизоляция –  Ондутис А или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление пола
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100 мм,  минеральная вата Кнауф (Тисма). Пароизоляция - Ондутис  В или аналог, с проклейкой швов.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Чистовые полы
                      </p>
                      <p class="project-info__text">
                        сухая шпунтованная половая доска 36 мм на саморезы ( каждая 5 доска). 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Наружные стены
                      </p>
                      <p class="project-info__text">
                        Профилированный брус хвойных пород древесины, камерной сушки, сечением 90х140+/-5 мм (толщина стены 90 мм). Межвенцовый утеплитель - джут 50 мм. Профиль бруса –  прямой, всего 20 венцов. По согласованию с Заказчиком проф брус может быть сечением 140х140мм, 190х140мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Перегородки
                      </p>
                      <p class="project-info__text">
                        профилированный брус  хвойных пород древесины,  камерной сушки, сечением 90х140 +/-5 мм,  межвенцовый утеплитель - джут 50 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Высота потолков
                      </p>
                      <p class="project-info__text">
                        1 этаж- 2,70 м +/- 5 см; 2 этаж — 2,30 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обшивка потолка 1 и 2 этажей
                      </p>
                      <p class="project-info__text">
                        Вагонка хвойный пород древесины, камерной сушки,  «А-В» класса толщиной 14-16 мм. Допускается стык под раскладку.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление перекрытий
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100 мм минеральная вата  Кнауф-Тисма или аналог (Роквул скандик)  с  пароизоляцией Ондутис смарт А или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Второй этаж (при наличии)
                      </p>
                      <p class="project-info__text">
                         Каркас из бруска хвойных пород древесины, сечением  40х100 мм, камерной сушки с шагом не более 80 см. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Полы
                      </p>
                      <p class="project-info__text">
                        сухая (камерной сушки) шпунтованная половая доска 36 мм. на саморезы (каждая 5 доска)
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обшивка стен 2 этажа
                      </p>
                      <p class="project-info__text">
                        вагонка хвойных пород древесины (камерной сушки) А-В класса толщиной 14-16 мм. Допускается стык под раскладку.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление стен и потолка мансарды
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100мм  минеральная вата Кнауф (Тисма),  с пароизоляцией Ондутис В или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Стропила
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечнием 40х150 мм, камерной сушки с шагом не более 80 см. Межэтажные балки  – обрезная доска 40х150 мм, камерной сушки с шагом не более 80 см. Высота конька  от потолка 1 этажа: 1,5- 3,50м  в зависимости от проекта. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Фронтоны
                      </p>
                      <p class="project-info__text">
                        каркас из бруска хвойных пород древесины, сечением  40х100 мм, камерной сушки с шагом не более 80 см.  Наружная обшивка фронтонов - сухая (камерной сушки) имитация бруса  А-В класса толщиной 20  мм через контррейку 20х40 мм.  Ветровлагоизоляция - Ондутис смарт А или аналог, с проклейкой швов.  Во фронтонах устанавливаются вентиляционные решётки по 3 шт в каждом фронтоне.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обрешетка
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением  20 х100 мм,  камерной сушки с шагом 30 см, укладывается через контррейку 40х40. Ветроизоляция -Ондутис смарт АМ или аналог, с проклейкой швов.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Кровля
                      </p>
                      <p class="project-info__text">
                        металлочерепица отечественного производства, толщиной 0,5 мм, профиль Монтеррей волна. Цвет по желанию Заказчика. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Карнизы и свесы кровли
                      </p>
                      <p class="project-info__text">
                        шириной 45 см, подшиваются  строганой доской толщиной 16-20 мм с зазором 5 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Окна
                      </p>
                      <p class="project-info__text">
                        ПВХ, двойной стеклопакет, поворотно откидные,  белого цвета,  с отливами  подоконниками и москитными сетками. Размеры согласно проекту. Окна устанавливаются в деревянных коробках. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Межкомнатные двери
                      </p>
                      <p class="project-info__text">
                       филенчатые, размер по полотну 0,8х2; 0,7х2; 0,6х2 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Входная дверь
                      </p>
                      <p class="project-info__text">
                        Металлическая Российского производства, с ручками и  врезным замком. Размер по полотну 0,8х2,0 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Заделка углов, стыков, примыканий
                      </p>
                      <p class="project-info__text">
                        хвойный плинтус В класса 45 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Отделка окон и дверей
                      </p>
                      <p class="project-info__text">
                        наличник, шириной 90 мм.с двкх сторон. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Гвозди для крепления деталей
                      </p>
                      <p class="project-info__text">
                        строительные чёрные 6х200, 5х150, 4х100 мм. Для крепления вагонки – оцинкованные 2.5х50 мм, для плинтуса – финишные оцинкованные 1.8х50 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Лестница на 2 этаж деревянная
                      </p>
                      <p class="project-info__text">
                        одномаршевая (двухмаршевая), с поручнями, столбами и балясинами токарного производства. Тетива, ступени  - сухие, заводского производства.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Открытая терраса (при наличии)
                      </p>
                      <p class="project-info__text">
                        Пол - разреженный из строганой доски 40 мм. Ограждения из строганой доски 40 мм.
                      </p>
                    </div>
                    
                  </div>   
                </div>
              </div>
              <div class="tabs__panel">
                <div class="project-info__wrapper">
                  
                  <div class="project-info__content">
                    

                    <div class="project-info__row">
                      <p class="project-info__name">
                        Фундамент
                      </p>
                      <p class="project-info__text">
                        По согласованию с Заказчиком (свайно- винтовой (метал сваи); свайно- забивной (ж/б сваи); ленточный или ж/б плита). Гидроизоляция – рубероид в 2 слоя.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обвязка двойная
                      </p>
                      <p class="project-info__text">
                        обрезной  брус хвойных пород древесины, сечением 100х150мм, камерной сушки — 2 ряда,  обрабатываются антисептиком. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Лаги пола
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением  40х150 мм,  камерной сушки (с шагом 59 см).
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Черновые полы
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением 20х100 мм,  камерной сушки. Ветроизоляция –  Ондутис А или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление пола
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100 мм,  минеральная вата Кнауф (Тисма). Пароизоляция - Ондутис  В или аналог, с проклейкой швов.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Чистовые полы
                      </p>
                      <p class="project-info__text">
                        сухая шпунтованная половая доска 36 мм на саморезы ( каждая 5 доска). 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Наружные стены
                      </p>
                      <p class="project-info__text">
                        Профилированный брус хвойных пород древесины, камерной сушки, сечением 90х140+/-5 мм (толщина стены 90 мм). Межвенцовый утеплитель - джут 50 мм. Профиль бруса –  прямой, всего 20 венцов. По согласованию с Заказчиком проф брус может быть сечением 140х140мм, 190х140мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Перегородки
                      </p>
                      <p class="project-info__text">
                        профилированный брус  хвойных пород древесины,  камерной сушки, сечением 90х140 +/-5 мм,  межвенцовый утеплитель - джут 50 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Высота потолков
                      </p>
                      <p class="project-info__text">
                        1 этаж- 2,70 м +/- 5 см; 2 этаж — 2,30 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обшивка потолка 1 и 2 этажей
                      </p>
                      <p class="project-info__text">
                        Вагонка хвойный пород древесины, камерной сушки,  «А-В» класса толщиной 14-16 мм. Допускается стык под раскладку.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление перекрытий
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100 мм минеральная вата  Кнауф-Тисма или аналог (Роквул скандик)  с  пароизоляцией Ондутис смарт А или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Второй этаж (при наличии)
                      </p>
                      <p class="project-info__text">
                         Каркас из бруска хвойных пород древесины, сечением  40х100 мм, камерной сушки с шагом не более 80 см. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Полы
                      </p>
                      <p class="project-info__text">
                        сухая (камерной сушки) шпунтованная половая доска 36 мм. на саморезы (каждая 5 доска)
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обшивка стен 2 этажа
                      </p>
                      <p class="project-info__text">
                        вагонка хвойных пород древесины (камерной сушки) А-В класса толщиной 14-16 мм. Допускается стык под раскладку.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление стен и потолка мансарды
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100мм  минеральная вата Кнауф (Тисма),  с пароизоляцией Ондутис В или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Стропила
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечнием 40х150 мм, камерной сушки с шагом не более 80 см. Межэтажные балки  – обрезная доска 40х150 мм, камерной сушки с шагом не более 80 см. Высота конька  от потолка 1 этажа: 1,5- 3,50м  в зависимости от проекта. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Фронтоны
                      </p>
                      <p class="project-info__text">
                        каркас из бруска хвойных пород древесины, сечением  40х100 мм, камерной сушки с шагом не более 80 см.  Наружная обшивка фронтонов - сухая (камерной сушки) имитация бруса  А-В класса толщиной 20  мм через контррейку 20х40 мм.  Ветровлагоизоляция - Ондутис смарт А или аналог, с проклейкой швов.  Во фронтонах устанавливаются вентиляционные решётки по 3 шт в каждом фронтоне.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обрешетка
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением  20 х100 мм,  камерной сушки с шагом 30 см, укладывается через контррейку 40х40. Ветроизоляция -Ондутис смарт АМ или аналог, с проклейкой швов.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Кровля
                      </p>
                      <p class="project-info__text">
                        металлочерепица отечественного производства, толщиной 0,5 мм, профиль Монтеррей волна. Цвет по желанию Заказчика. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Карнизы и свесы кровли
                      </p>
                      <p class="project-info__text">
                        шириной 45 см, подшиваются  строганой доской толщиной 16-20 мм с зазором 5 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Окна
                      </p>
                      <p class="project-info__text">
                        ПВХ, двойной стеклопакет, поворотно откидные,  белого цвета,  с отливами  подоконниками и москитными сетками. Размеры согласно проекту. Окна устанавливаются в деревянных коробках. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Межкомнатные двери
                      </p>
                      <p class="project-info__text">
                       филенчатые, размер по полотну 0,8х2; 0,7х2; 0,6х2 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Входная дверь
                      </p>
                      <p class="project-info__text">
                        Металлическая Российского производства, с ручками и  врезным замком. Размер по полотну 0,8х2,0 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Заделка углов, стыков, примыканий
                      </p>
                      <p class="project-info__text">
                        хвойный плинтус В класса 45 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Отделка окон и дверей
                      </p>
                      <p class="project-info__text">
                        наличник, шириной 90 мм.с двкх сторон. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Гвозди для крепления деталей
                      </p>
                      <p class="project-info__text">
                        строительные чёрные 6х200, 5х150, 4х100 мм. Для крепления вагонки – оцинкованные 2.5х50 мм, для плинтуса – финишные оцинкованные 1.8х50 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Лестница на 2 этаж деревянная
                      </p>
                      <p class="project-info__text">
                        одномаршевая (двухмаршевая), с поручнями, столбами и балясинами токарного производства. Тетива, ступени  - сухие, заводского производства.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Открытая терраса (при наличии)
                      </p>
                      <p class="project-info__text">
                        Пол - разреженный из строганой доски 40 мм. Ограждения из строганой доски 40 мм.
                      </p>
                    </div>
                    
                  </div>   
                </div>
              </div>
              <div class="tabs__panel">
                <div class="project-info__wrapper">
                  
                  <div class="project-info__content">
                    

                    <div class="project-info__row">
                      <p class="project-info__name">
                        Фундамент
                      </p>
                      <p class="project-info__text">
                        По согласованию с Заказчиком (свайно- винтовой (метал сваи); свайно- забивной (ж/б сваи); ленточный или ж/б плита). Гидроизоляция – рубероид в 2 слоя.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обвязка двойная
                      </p>
                      <p class="project-info__text">
                        обрезной  брус хвойных пород древесины, сечением 100х150мм, камерной сушки — 2 ряда,  обрабатываются антисептиком. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Лаги пола
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением  40х150 мм,  камерной сушки (с шагом 59 см).
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Черновые полы
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением 20х100 мм,  камерной сушки. Ветроизоляция –  Ондутис А или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление пола
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100 мм,  минеральная вата Кнауф (Тисма). Пароизоляция - Ондутис  В или аналог, с проклейкой швов.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Чистовые полы
                      </p>
                      <p class="project-info__text">
                        сухая шпунтованная половая доска 36 мм на саморезы ( каждая 5 доска). 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Наружные стены
                      </p>
                      <p class="project-info__text">
                        Профилированный брус хвойных пород древесины, камерной сушки, сечением 90х140+/-5 мм (толщина стены 90 мм). Межвенцовый утеплитель - джут 50 мм. Профиль бруса –  прямой, всего 20 венцов. По согласованию с Заказчиком проф брус может быть сечением 140х140мм, 190х140мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Перегородки
                      </p>
                      <p class="project-info__text">
                        профилированный брус  хвойных пород древесины,  камерной сушки, сечением 90х140 +/-5 мм,  межвенцовый утеплитель - джут 50 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Высота потолков
                      </p>
                      <p class="project-info__text">
                        1 этаж- 2,70 м +/- 5 см; 2 этаж — 2,30 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обшивка потолка 1 и 2 этажей
                      </p>
                      <p class="project-info__text">
                        Вагонка хвойный пород древесины, камерной сушки,  «А-В» класса толщиной 14-16 мм. Допускается стык под раскладку.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление перекрытий
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100 мм минеральная вата  Кнауф-Тисма или аналог (Роквул скандик)  с  пароизоляцией Ондутис смарт А или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Второй этаж (при наличии)
                      </p>
                      <p class="project-info__text">
                         Каркас из бруска хвойных пород древесины, сечением  40х100 мм, камерной сушки с шагом не более 80 см. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Полы
                      </p>
                      <p class="project-info__text">
                        сухая (камерной сушки) шпунтованная половая доска 36 мм. на саморезы (каждая 5 доска)
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обшивка стен 2 этажа
                      </p>
                      <p class="project-info__text">
                        вагонка хвойных пород древесины (камерной сушки) А-В класса толщиной 14-16 мм. Допускается стык под раскладку.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Утепление стен и потолка мансарды
                      </p>
                      <p class="project-info__text">
                        толщина утепления 100мм  минеральная вата Кнауф (Тисма),  с пароизоляцией Ондутис В или аналог, с проклейкой швов. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Стропила
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечнием 40х150 мм, камерной сушки с шагом не более 80 см. Межэтажные балки  – обрезная доска 40х150 мм, камерной сушки с шагом не более 80 см. Высота конька  от потолка 1 этажа: 1,5- 3,50м  в зависимости от проекта. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Фронтоны
                      </p>
                      <p class="project-info__text">
                        каркас из бруска хвойных пород древесины, сечением  40х100 мм, камерной сушки с шагом не более 80 см.  Наружная обшивка фронтонов - сухая (камерной сушки) имитация бруса  А-В класса толщиной 20  мм через контррейку 20х40 мм.  Ветровлагоизоляция - Ондутис смарт А или аналог, с проклейкой швов.  Во фронтонах устанавливаются вентиляционные решётки по 3 шт в каждом фронтоне.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Обрешетка
                      </p>
                      <p class="project-info__text">
                        обрезная доска хвойных пород древесины, сечением  20 х100 мм,  камерной сушки с шагом 30 см, укладывается через контррейку 40х40. Ветроизоляция -Ондутис смарт АМ или аналог, с проклейкой швов.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Кровля
                      </p>
                      <p class="project-info__text">
                        металлочерепица отечественного производства, толщиной 0,5 мм, профиль Монтеррей волна. Цвет по желанию Заказчика. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Карнизы и свесы кровли
                      </p>
                      <p class="project-info__text">
                        шириной 45 см, подшиваются  строганой доской толщиной 16-20 мм с зазором 5 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Окна
                      </p>
                      <p class="project-info__text">
                        ПВХ, двойной стеклопакет, поворотно откидные,  белого цвета,  с отливами  подоконниками и москитными сетками. Размеры согласно проекту. Окна устанавливаются в деревянных коробках. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Межкомнатные двери
                      </p>
                      <p class="project-info__text">
                       филенчатые, размер по полотну 0,8х2; 0,7х2; 0,6х2 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Входная дверь
                      </p>
                      <p class="project-info__text">
                        Металлическая Российского производства, с ручками и  врезным замком. Размер по полотну 0,8х2,0 м.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Заделка углов, стыков, примыканий
                      </p>
                      <p class="project-info__text">
                        хвойный плинтус В класса 45 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                        Отделка окон и дверей
                      </p>
                      <p class="project-info__text">
                        наличник, шириной 90 мм.с двкх сторон. 
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Гвозди для крепления деталей
                      </p>
                      <p class="project-info__text">
                        строительные чёрные 6х200, 5х150, 4х100 мм. Для крепления вагонки – оцинкованные 2.5х50 мм, для плинтуса – финишные оцинкованные 1.8х50 мм.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Лестница на 2 этаж деревянная
                      </p>
                      <p class="project-info__text">
                        одномаршевая (двухмаршевая), с поручнями, столбами и балясинами токарного производства. Тетива, ступени  - сухие, заводского производства.
                      </p>
                    </div>
                    <div class="project-info__row">
                      <p class="project-info__name">
                       Открытая терраса (при наличии)
                      </p>
                      <p class="project-info__text">
                        Пол - разреженный из строганой доски 40 мм. Ограждения из строганой доски 40 мм.
                      </p>
                    </div>
                    
                  </div>   
                </div>
              </div>
              <div class="tabs__panel">
                <div class="guarantee">
                  <div class="container">
                    <div class="guarantee__content">
                      <div class="guarantee__inner">
                        <p class="guarantee__subtitle">
                          На строительный объект, дом даётся гарантия 24 месяца
                        </p>
                        <div class="guarantee__item">
                          <p class="guarantee__strong">
                            На протекание кровли
                          </p>
                          <p class="guarantee__text">
                            Не распространяется на временные кровли, выполненные из пергамина, рубероида или аналогичных
                            материалов
                          </p>
                        </div>
                        <div class="guarantee__item">
                          <p class="guarantee__strong">
                            На целостность конструкции
                          </p>
                        </div>
                        <div class="guarantee__box">
                          Гарантия вступает в силу с момента полной оплаты договорной стоимости окончания работ по Договору
                          и не распространяются
                          на ущерб, нанесённый третьими лицами, либо Заказчиком, вследствие изменения проекта и при неправильной
                          эксплуатации
                          сооружения
                        </div>
                      </div>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/guarantee.webp" class="image" width="377" height="433" alt="img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__panel">
                <div class="tech__content">
                  <p class="tech__title">
                    Особенности технологии
                  </p>
                  <div class="tech__wrapper">
                    <div class="tech__line">
                      <div class="tech__box">
                        <p class="tech__box-title">
                          Быстрота строительства
                        </p>
                        <p class="tech__box-text">
                          Каркасный дом можно построить в несколько раз быстрее, чем дом из кирпича или бетона
                        </p>
                      </div>
                      <div class="tech__box">
                        <p class="tech__box-title">
                          Экономичность
                        </p>
                        <p class="tech__box-text">
                          Сниженные затраты на материалы и рабочую силу
                        </p>
                      </div>
                      <div class="tech__box">
                        <p class="tech__box-title">
                          Высокая энергоэффективность
                        </p>
                        <p class="tech__box-text">
                          Хорошая теплоизоляция позволяет экономить на отоплении
                        </p>
                      </div>
                    </div>
                    <div class="tech__line">
                      <div class="tech__box">
                        <p class="tech__box-title">
                          Лёгкость конструкции
                        </p>
                        <p class="tech__box-text">
                        Не требует мощного фундамента
                        </p>
                      </div>
                      <div class="tech__box">
                        <p class="tech__box-title">
                          Возможность реализации сложных архитектурных решений
                        </p>
                        
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="stocs">
        <div class="container">
          <div class="stocs__content">
            <div class="stocs__inner">
              <h2 class="stocs__title">
                Акции
              </h2>
              <p class="stocs__text">
                При заказе проекта вы получите подарки по нашим акциям
              </p>
            </div>
            <div class="swiper stocs__swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/stocs-1.webp" class="image" width="864" height="362" alt="img">
                </div>
                <div class="swiper-slide">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/stocs-2.webp" class="image" width="864" height="362" alt="img">
                </div>
                <div class="swiper-slide">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/stocs-3.webp" class="image" width="864" height="362" alt="img">
                </div>
                <div class="swiper-slide">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/stocs-4.webp" class="image" width="864" height="362" alt="img">
                </div>

              </div>
            </div>
            <button class="btn-reset stocs__prev">
              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.1112 8.84489L0.888962 8.84489M0.888962 8.84489L6.2223 14.1782M0.888962 8.84489L6.2223 3.51156"
                  stroke="#020202" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
            <button class="btn-reset stocs__next">
              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M0.888862 8.84489L15.1111 8.84489M15.1111 8.84489L9.77775 14.1782M15.1111 8.84489L9.77775 3.51156"
                  stroke="#020202" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="stocs__pag">

          </div>
        </div>
      </section>

      <section class="steps">
        <div class="container">
          <h2 class="steps__title">
            Как мы работаем
          </h2>
          <div class="steps__content">
            <div class="steps__item">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/steps-1.svg" class="image" width="28" height="28" alt="svg">
              <p class="steps__text">
                Подготовка участка
              </p>
            </div>
            <div class="steps__item">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/steps-2.svg" class="image" width="28" height="28" alt="svg">
              <p class="steps__text">
                Возведение фундамента
              </p>
            </div>
            <div class="steps__item">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/steps-3.svg" class="image" width="28" height="28" alt="svg">
              <p class="steps__text">
                Сборка «коробки» объекта
              </p>
            </div>
            <div class="steps__item">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/steps-4.svg" class="image" width="28" height="28" alt="svg">
              <p class="steps__text">
                Кровельные работы
              </p>
            </div>
            <div class="steps__item">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/steps-5.svg" class="image" width="28" height="28" alt="svg">
              <p class="steps__text">
                Усадка (для домов из бруса)
              </p>
            </div>
            <div class="steps__item">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/steps-6.svg" class="image" width="28" height="28" alt="svg">
              <p class="steps__text">
                Внутренняя и внешняя отделка
              </p>
            </div>
            <div class="steps__item">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/steps-7.svg" class="image" width="28" height="28" alt="svg">
              <p class="steps__text">
                Благоустройство территории
              </p>
            </div>
            <div class="steps__item">
              <p class="steps__subtitle">
                Готово!
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="form">
        <div class="container">
          <div class="form__content">
            <div class="form__inner">
              <h2 class="form__title">
                Оставьте заявку <br> для <span>бесплатного расчёта</span>
              </h2>
              <p class="form__text">
                Воплотим Ваши уникальные идеи! Выбирайте из нашей коллекции разнообразных проектов или заказывайте
                строительство по
                собственному эскизу
              </p>
              <div class="form__item">
                <p class="form__subtitle">
                  Расчёт стоимости
                </p>
                <button class="btn-reset form__btn" data-graph-path="modal">Заказать звонок</button>
              </div>
            </div>
            <div class="form__box">
              <p class="form__subtitle">
                Отправьте <br> свой проект
              </p>
              <div class="form__wrap">
                <label class="form__label">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.5 21.75C9.50544 21.75 8.55161 21.3549 7.84835 20.6517C7.14509 19.9484 6.75 18.9946 6.75 18V7.5C6.75 6.10761 7.30312 4.77226 8.28769 3.78769C9.27226 2.80312 10.6076 2.25 12 2.25C13.3924 2.25 14.7277 2.80312 15.7123 3.78769C16.6969 4.77226 17.25 6.10761 17.25 7.5V14C17.25 14.1989 17.171 14.3897 17.0303 14.5303C16.8897 14.671 16.6989 14.75 16.5 14.75C16.3011 14.75 16.1103 14.671 15.9697 14.5303C15.829 14.3897 15.75 14.1989 15.75 14V7.5C15.75 6.50544 15.3549 5.55161 14.6517 4.84835C13.9484 4.14509 12.9946 3.75 12 3.75C11.0054 3.75 10.0516 4.14509 9.34835 4.84835C8.64509 5.55161 8.25 6.50544 8.25 7.5V18C8.25 18.5967 8.48705 19.169 8.90901 19.591C9.33097 20.0129 9.90326 20.25 10.5 20.25C11.0967 20.25 11.669 20.0129 12.091 19.591C12.5129 19.169 12.75 18.5967 12.75 18V8.5C12.75 8.30109 12.671 8.11032 12.5303 7.96967C12.3897 7.82902 12.1989 7.75 12 7.75C11.8011 7.75 11.6103 7.82902 11.4697 7.96967C11.329 8.11032 11.25 8.30109 11.25 8.5V16C11.25 16.1989 11.171 16.3897 11.0303 16.5303C10.8897 16.671 10.6989 16.75 10.5 16.75C10.3011 16.75 10.1103 16.671 9.96967 16.5303C9.82902 16.3897 9.75 16.1989 9.75 16V8.5C9.75 7.90326 9.98705 7.33097 10.409 6.90901C10.831 6.48705 11.4033 6.25 12 6.25C12.5967 6.25 13.169 6.48705 13.591 6.90901C14.0129 7.33097 14.25 7.90326 14.25 8.5V18C14.25 18.9946 13.8549 19.9484 13.1517 20.6517C12.4484 21.3549 11.4946 21.75 10.5 21.75Z"
                      fill="white" />
                  </svg>
                  Загрузить
                  <input type="file" class="form__file">
                </label>
                <div class="form__btns">
                  <button class="btn-reset form__btn-two" data-graph-path="modal">Заказать звонок</button>
                  <a href="#" class="form__link">
                    WhatsApp
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.6896 2.35334C12.3469 1.00799 10.5638 0.182938 8.66197 0.0269917C6.76011 -0.128954 4.86468 0.394475 3.31756 1.50287C1.77045 2.61126 0.673499 4.23164 0.224585 6.07175C-0.22433 7.91185 0.00433937 9.85053 0.869346 11.5381L0.0202339 15.6278C0.0114235 15.6685 0.0111739 15.7106 0.0195011 15.7514C0.0278282 15.7922 0.0445526 15.8309 0.0686286 15.865C0.103898 15.9167 0.154244 15.9566 0.212941 15.9792C0.271639 16.0018 0.335895 16.0061 0.397128 15.9915L4.43738 15.0415C6.13364 15.8779 8.07401 16.0902 9.91322 15.6405C11.7524 15.1909 13.3712 14.1084 14.4815 12.5859C15.5917 11.0633 16.1215 9.19929 15.9765 7.32558C15.8315 5.45186 15.0212 3.68994 13.6896 2.35334ZM12.4299 12.3281C11.5009 13.2472 10.3046 13.8538 9.00962 14.0627C7.71465 14.2715 6.38627 14.0719 5.2117 13.492L4.64855 13.2156L2.17161 13.7976L2.17894 13.767L2.69222 11.2937L2.41652 10.7539C1.81636 9.58457 1.60465 8.25679 1.81171 6.96077C2.01877 5.66475 2.63397 4.46699 3.5692 3.53908C4.74433 2.37362 6.33792 1.71891 7.99954 1.71891C9.66116 1.71891 11.2548 2.37362 12.4299 3.53908C12.4399 3.55046 12.4507 3.56116 12.4621 3.57109C13.6227 4.73955 14.2706 6.3158 14.2645 7.95619C14.2585 9.59659 13.599 11.1681 12.4299 12.3281Z"
                        fill="white" />
                      <path
                        d="M12.21 10.5139C11.9064 10.9882 11.4269 11.5687 10.8241 11.7128C9.76823 11.9659 8.14773 11.7215 6.13127 9.85631L6.10634 9.83449C4.33332 8.20355 3.87284 6.84613 3.98429 5.76951C4.04588 5.15845 4.55916 4.60559 4.99179 4.24477C5.06018 4.18686 5.14129 4.14563 5.22862 4.12438C5.31595 4.10312 5.40708 4.10243 5.49473 4.12237C5.58238 4.14231 5.66411 4.18231 5.73338 4.23918C5.80266 4.29606 5.85756 4.36823 5.89369 4.44991L6.54629 5.90481C6.5887 5.99915 6.60442 6.10316 6.59176 6.20568C6.5791 6.30821 6.53854 6.40538 6.47443 6.48677L6.14447 6.9116C6.07367 6.99932 6.03094 7.10605 6.0218 7.21806C6.01265 7.33007 6.03749 7.44223 6.09314 7.54011C6.27792 7.86165 6.72081 8.33449 7.21209 8.77241C7.7635 9.26708 8.37504 9.71955 8.7622 9.87377C8.86579 9.91576 8.97969 9.926 9.08921 9.90318C9.19873 9.88036 9.29885 9.82553 9.37667 9.74574L9.75943 9.3631C9.83328 9.29085 9.92513 9.23932 10.0256 9.21376C10.1261 9.1882 10.2316 9.18953 10.3314 9.21761L11.8815 9.65408C11.967 9.6801 12.0454 9.72518 12.1106 9.78586C12.1759 9.84654 12.2263 9.92122 12.258 10.0042C12.2897 10.0872 12.3018 10.1762 12.2935 10.2646C12.2852 10.3529 12.2566 10.4382 12.21 10.5139Z"
                        fill="white" />
                    </svg>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

                  
      <section class="popular">
        <div class="container">
          
          <h2 class="popular__title">
            Популярные проекты     
          </h2>

          <div class="popular__wrapper">
            <div class="swiper popular__swiper">
              <div class="swiper-wrapper">
                <?php
                  $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'product_cat', // Категории товаров WooCommerce
                            'field'    => 'slug',
                            'terms'    => array('hit'),
                            'operator' => 'AND', // Важно! Означает, что товар должен быть в обеих категориях
                        ),
                    ),
                  );

                  $query = new WP_Query($args);

                  if ($query->have_posts()) : 
                      while ($query->have_posts()) : $query->the_post();
                        global $product;
                          ?>
                          <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>" class="popular__item">
                              <img loading="lazy" src="<?php the_field('item-img'); ?>" class="popular__img image" width="323" height="200" >
                                <div class="popular__info">
                                  <span class="popular__name"><?php the_title(); ?></span>
                                  <div class="popular__size">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/catalog-size.svg" class="popular__size-img image" width="18" height="18" alt="svg">
                                    <?php the_field('size'); ?>
                                  </div>
                                </div>
                                <span class="popular__price"><?php the_field('price-90x140'); ?> ₽</span>
                                <div  class="popular__link">
                                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/catalog-link.svg" class="popular__link-img image" width="28" height="28" alt="Ссылка">
                                </div>
                             
                            </a>
                          </div>
                        <?php
                      endwhile;
                      wp_reset_postdata();
                  endif;
                  ?>  
                
              </div>
            </div>
               
          </div>
          
        </div>
      </section>       
      
</main>

<?php get_footer(); ?>
