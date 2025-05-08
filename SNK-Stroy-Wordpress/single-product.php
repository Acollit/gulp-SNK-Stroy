<?php
$product = wc_get_product();
if (has_term('karkasnye-doma', 'product_cat', $product->get_id())) {
    get_template_part('single-product-karkas');
}  elseif (has_term('doma-iz-brusa-pod-klyuch', 'product_cat', $product->get_id())) {
    get_template_part('single-product-doma-klyuch');
} elseif (has_term('doma-iz-brusa-pod-usadku', 'product_cat', $product->get_id())) {
    get_template_part('single-product-doma-usadku');
} elseif (has_term('bani-iz-brusa-pod-klyuch', 'product_cat', $product->get_id())) {
    get_template_part('single-product-ban-klyuch');
} elseif (has_term('bani-iz-brusa-pod-usadku', 'product_cat', $product->get_id())) {
    get_template_part('single-product-ban-usadku');
}  elseif (has_term('karkasnye-bani', 'product_cat', $product->get_id())) {
    get_template_part('single-product-bani-karkas');
} elseif (has_term('a-freym', 'product_cat', $product->get_id())) {
    get_template_part('single-product-a-frame');
} elseif (has_term('doma-iz-gazobetona', 'product_cat', $product->get_id())) {
    get_template_part('single-product-beton');
} elseif (has_term('mobilnye-bani', 'product_cat', $product->get_id())) {
    get_template_part('single-product-ban-mobil');
}  elseif (has_term('dom-v-stile-barnhaus', 'product_cat', $product->get_id())) {
    get_template_part('single-product-barn-hause');
} else {
    get_template_part('single-product-default');
}
?>
