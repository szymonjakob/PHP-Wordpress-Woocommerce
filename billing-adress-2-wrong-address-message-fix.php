<?php
// EXPERIMENTAL add billing_adress-2 field from checkout -> CSS display: none -> fix wrong address message in cart if you hide it
add_filter( 'woocommerce_checkout_fields' , 'override_checkout_fields' );
function override_checkout_fields( $fields ) {
     $fields['billing']['billing_address_2']['clear'] = true;
     return $fields;
}
