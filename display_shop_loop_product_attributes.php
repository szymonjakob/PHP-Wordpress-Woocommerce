<?php
add_action('woocommerce_shop_loop_item_title', 'display_shop_loop_product_attributes');
function display_shop_loop_product_attributes() {
    global $product;
    // Place product attribute taxonomies in the array e.g. pa_size and pa_quantity
    $product_attribute_taxonomies = array( 'pa_size', 'pa_quantity' );
    $attr_output = array(); 
    // Loop through your defined product attribute taxonomies
    foreach( $product_attribute_taxonomies as $taxonomy ){
        if( taxonomy_exists($taxonomy) ){
            $label_name = wc_attribute_label( $taxonomy, $product );
            $term_names = $product->get_attribute( $taxonomy );
            if( ! empty($term_names) ){
                $attr_output[] = '<div class="attribute-'.$taxonomy.'"><span class="attribute-label">'.$label_name.': </span><span class="attribute-value">'.$term_names.'</span></div>';
            }
        }
    }

    // Output
    echo '<div class="product-attributes">'.implode( ' ', $attr_output ).'</div>';
}
