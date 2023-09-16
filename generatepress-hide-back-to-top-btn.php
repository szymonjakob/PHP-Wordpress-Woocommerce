<?php
add_filter( 'option_generate_settings','no_mobile_back_to_top' );
function no_mobile_back_to_top( $options ) {
    if ( wp_is_mobile() ) {
        $options['back_to_top'] = 'disable';
    }
    
    return $options;
}
