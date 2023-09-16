<?php
add_action('generate_menu_bar_items', 'add_gp_cart_icon_with_xoo_wsc_cart_plugin' , 20);
function add_gp_cart_icon_with_xoo_wsc_cart_plugin() {
  if ( ! class_exists( 'WooCommerce' ) ) {
      return;
  }
  
  if ( ! isset( WC()->cart ) ) {
      return;
  }
  
  $has_items = false;
  
  if ( ! WC()->cart->is_empty() ) {
      $has_items = 'has-items';
  }
  
  printf(
      '<span class="menu-bar-item wc-menu-item xoo-wsc-cart-trigger %2$s %3$s">
          %1$s
      </span>',
      generatepress_wc_cart_link(),
      is_cart() ? 'current-menu-item' : '',
      $has_items
  );
}
