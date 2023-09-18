<?php
$icon = '';

if ( function_exists( 'generate_get_svg_icon') ) {
	$icon = generate_get_svg_icon( 'menu-bars' );
}
?>

<span class="slideout-toggle woo-filter-toggle hide-on-mobile has-svg-icon"><a href="#"><?php echo $icon; ?> FILTER</a></span>
<span class="hide-on-mobile"><?php woocommerce_breadcrumb(); ?></span>
