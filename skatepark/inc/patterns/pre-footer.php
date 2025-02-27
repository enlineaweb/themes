<?php
/**
 * Pre Footer.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Footer', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"className":"pre-footer"} -->
	<div class="wp-block-group alignwide pre-footer" style="padding-top:60px;padding-bottom:60px"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"large"} /-->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">' . esc_html__( "Skatepark's coaches will work with you to develop and improve your skating abilities.", 'skatepark' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--custom--color--foreground)","className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"http://twitter.com","service":"twitter"} /-->

		<!-- wp:social-link {"url":"http://facebook.com","service":"facebook"} /-->

		<!-- wp:social-link {"url":"http://instagram.com","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"14px"}}} -->
		<h3 style="font-size:14px;"><strong>' . esc_html__( 'More info', 'skatepark' ) . '</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:navigation {"overlayMenu":"never","__unstableLocation":"primary","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"typography":{"textDecoration":"underline"}},"fontSize":"small"} /--></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"14px"}}} -->
		<h3 style="font-size:14px"><strong>' . esc_html__( 'Search', 'skatepark' ) . '</strong></h3><!-- /wp:heading --><!-- wp:search {"label":"' . esc_html__( 'Search', 'skatepark' ) . '","showLabel":false,"buttonText":"' . esc_html__( 'Search', 'skatepark' ) . '","buttonPosition":"button-inside"} /--></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);
