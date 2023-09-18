<?php
global $product;

// Get the shared attribute value
$sharedAttributeValue = $product->get_attribute('pa_model');

// Query for the second product with the shared attribute value
$query = new WP_Query(array(
  'post_type' => 'product',
  'tax_query' => array(
    array(
      'taxonomy' => 'pa_model',
      'field' => 'slug',
      'terms' => $sharedAttributeValue,
    ),
  ),
  'posts_per_page' => 1,
  'post__not_in' => array($product->get_id()),
));

// Check if the second product is found
if ($query->have_posts()) {
  $query->the_post();
  $secondProductUrl = get_permalink();
  wp_reset_postdata();
	
		if ( has_term( 'campingbox-mit-tisch', 'product_cat' ) ){
			$buttonText = 'Flex-Version';
		} elseif ( has_term( 'campingbox-flex', 'product_cat' ) ){
			$buttonText = 'PorTable-Version';
			$buttonDesc = 'mit Tisch';
		}
		$buttonIcon = '<svg width="800" height="450" viewBox="0 0 800 450" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M575 0C699.023 0 800 100.879 800 225C800 349.121 699.023 450 575 450H225C101.074 450 0 348.926 0 225C0 101.074 101.074 0 225 0H575ZM225 50C128.027 50 50 128.027 50 225C50 				321.973 128.027 400 225 400C321.973 400 400 321.973 400 225C400 128.027 321.973 50 225 50Z"/>
			</svg>';
		echo '<div class="switch-version">';
		echo '<a class="switch button" href="' . esc_url($secondProductUrl) . '"><span class="gb-icon">' . $buttonIcon . '</span>' . $buttonText . '</a>';
		echo '<p>Zur Campingbox ' . $buttonDesc . ' ' . $buttonText . ' wechseln.</p>';
		echo '</div>';
}
?>
