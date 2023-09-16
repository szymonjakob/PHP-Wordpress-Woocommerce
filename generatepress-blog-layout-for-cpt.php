<?php
// enable blog columns layout for custom post type
add_filter( 'generate_blog_columns', function( $columns ) {
    if ( 'POST TYPE SLUG' === get_post_type() && ! is_singular() ) {
        return true;
    }
    return $columns;
} );
