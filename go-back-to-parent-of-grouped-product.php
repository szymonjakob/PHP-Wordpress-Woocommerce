<?php
function get_parent_grouped_id( $children_id ){
    global $wpdb;
    $results = $wpdb->get_col("SELECT post_id FROM {$wpdb->prefix}postmeta
    WHERE meta_key = '_children' AND meta_value LIKE '%$children_id%'");
    // Will only return one product Id or false if there is zero or many
    return sizeof($results) == 1 ? reset($results) : false;
}
global $product;
$product_id = get_the_ID();
$parent_grouped_id = get_parent_grouped_id( $product_id );
if ( $parent_grouped_id && ! $product->is_type( 'grouped' )) {
    $grouped_product_link = get_permalink($parent_grouped_id);
		echo '<div class="come-back-to-parent">';
		echo '<a class="come-back button" href="' . $grouped_product_link . '">< Campingboxauswahl</a>';
		echo '<p>Gehen Sie zurück zur Auswahl des Campingbox-Modells.</p>';
		echo '</div>';
}
?>
