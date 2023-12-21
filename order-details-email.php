// Add apaczka shipping details to order emails
add_filter('woocommerce_email_order_meta_fields', 'custom_add_email_meta', 10, 3 );
function custom_add_email_meta( $fields, $sent_to_admin, $order ) {

    if ( $delivery_point = $order->get_meta('apaczka_delivery_point') ) {
        $fields['apaczka_delivery_point'] = array(
        'label' => 'Punkt odbioru',
        'value' => esc_attr( $delivery_point['apm_supplier'] ) . ' ' . esc_attr( $delivery_point['apm_access_point_id'] )
        );
    }

    return $fields;
}
