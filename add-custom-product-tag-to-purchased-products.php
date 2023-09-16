<?php
add_action( 'woocommerce_thankyou', 'auto_tag_product_after_purchase' );
function auto_tag_product_after_purchase( $order_id ) {
   $order = wc_get_order( $order_id );
   $auto_tag_id = array( ID ); // ID of your tag here
   foreach ( $order->get_items() as $item_id => $item ) {
      $product = $item->get_product();
      $tags = $product->get_tag_ids();
      if ( ! array_intersect( $tags, $auto_tag_id ) ) {
         $product->set_tag_ids( array_merge( $tags, $auto_tag_id ) );
         $product->save();
      }
   }
}
