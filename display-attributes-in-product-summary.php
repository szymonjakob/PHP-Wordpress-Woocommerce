<?php
add_action( 'woocommerce_single_product_summary', 'add_attributes_to_summary', 20 );
function add_attributes_to_summary() {
    global $product;
    wc_display_product_attributes( $product );
}
