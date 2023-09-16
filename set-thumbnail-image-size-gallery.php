<?php
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
    return array(
    'width' => 100,
    'height' => 100,
    'crop' => 1,
    );
} );
