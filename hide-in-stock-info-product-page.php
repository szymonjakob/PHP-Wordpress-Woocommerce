<?php
add_filter( 'woocommerce_get_stock_html', 'hide_in_stock_message', 10, 2 );
function mhide_in_stock_message( $html, $product ) {
    if ( $product->is_in_stock() ) {
        return '';
    }
    return $html;
}
