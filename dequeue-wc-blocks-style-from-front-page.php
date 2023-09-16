<?php
// If you dont use woocommerce blocks dequeue woocommerce blocks style which affect on performance.
add_action( 'wp_enqueue_scripts', 'disable_woocommerce_block_styles' );

function disable_woocommerce_block_styles() {
    if ( is_front_page() ) {    
        wp_dequeue_style( 'wc-blocks-style' );
    }   
}
