<?php
add_action( 'woocommerce_cart_totals_after_shipping', 'add_free_shipping_progress_bar' );
add_action( 'woocommerce_before_checkout_form', 'add_free_shipping_progress_bar', 10 );


function add_free_shipping_progress_bar() {
   $cart_subtotal = WC()->cart->subtotal;
   $free_shipping_min_amount = 200; // minimalna wartość zamówienia dla darmowej wysyłki
   $discount_total = WC()->cart->get_discount_total();

   $remaining_amount = $free_shipping_min_amount - ($cart_subtotal - $discount_total);
   $percentage = ( $cart_subtotal - $discount_total ) / $free_shipping_min_amount * 100;
   
   if ( $remaining_amount > 0 ) {
      echo '<div class="free-shipping-progress-bar">';
      echo '<span class="progress-bar-text">' . __('Brakuje Ci') . ' ' . wc_price( $remaining_amount ) . ' ' . __('do darmowej dostawy.') . '</span>';
      echo '<div class="progress-bar-container">';
      echo '<div class="progress-bar" style="width:' . $percentage . '%;"></div>';
      echo '</div>';
      echo '<a href="' . esc_url( wc_get_page_permalink( 'shop' ) ) . '" class="back-to-shopping-btn">' . __('Kontynuuj zakupy') . '</a>';
      echo '</div>';
   }
}
