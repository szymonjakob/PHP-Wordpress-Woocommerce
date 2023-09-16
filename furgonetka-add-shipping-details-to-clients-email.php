<?php
// Add furgonetka shipping details to clients email
add_filter('woocommerce_email_order_meta_fields', 'custom_add_email_meta', 10, 3 );
function custom_add_email_meta( $fields, $sent_to_admin, $order ) {

    $tracking_numbers = $order->get_meta( 'tracking_info' );

    if( ! empty( $tracking_numbers ) ) {
            foreach ( $tracking_numbers as $tracking_number => $package_data ) {

                    $fields[ 'tracking_numbers' ] = array(
                    'label' => 'Numer śledzenia',
                    'value' => '<a style="text-decoration : underline" target="_blank" href="https://furgonetka.pl/zlokalizuj/' . $tracking_number . '">' . $tracking_number . '</a><br>'
                    );              
            }
    }   

    $is_furgonetka_point = $order->get_meta( '_furgonetkaPoint' );

    // we won't display anything if it is not a gift
    if( ! empty( $is_furgonetka_point ) ) {
        $fields[ '_furgonetkaPointName' ] = array(
        'label' => 'Punkt odbioru',
        'value' => ucfirst( $order->get_meta('_furgonetkaService') ) . ' ' . $order->get_meta( '_furgonetkaPointName' )
        );
    }

    return $fields;
}
