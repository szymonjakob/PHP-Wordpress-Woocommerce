<?php
add_filter( 'pre_option_woocommerce_hide_out_of_stock_items', 'hide_out_of_stock_exception_tag' );
function hide_out_of_stock_exception_tag( $hide ) {
   if ( is_product_tag( 'nowa-dostawa' ) ) {
      $hide = 'no';
   }   
   return $hide;
}
