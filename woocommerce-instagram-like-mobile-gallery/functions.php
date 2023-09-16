<?php
// paste this code into your functions.php of you childtheme/theme

add_filter( 'woocommerce_single_product_carousel_options', 'filter_single_product_carousel_options' );
function filter_single_product_carousel_options( $options ) {
    if ( wp_is_mobile() ) {
        $options['controlNav'] = true; // Option 'thumbnails' by default
    }
    return $options;
}
