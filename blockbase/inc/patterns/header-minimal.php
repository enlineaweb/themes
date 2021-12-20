<?php
/**
 * Header minimal
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Header minimal', 'blockbase' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"className":"gapless-group","layout":{"inherit":"true"}} -->
	<div class="wp-block-group gapless-group">
	<!-- wp:group {"align":"full","layout":{"inherit":"true"}} -->
	<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","className":"site-header site-header-linear","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"padding":{"bottom":"var(--wp--custom--gap--vertical)","top":"var(--wp--custom--gap--vertical)"}}}} -->
	<div class="wp-block-group site-header site-header-linear alignwide" style="padding-bottom:var(--wp--custom--gap--vertical);padding-top:var(--wp--custom--gap--vertical)">
		
		<!-- wp:group {"className":"site-brand","layout":{"type":"flex"}} -->
		<div class="wp-block-group site-brand">
			<!-- wp:site-logo {"width":64} /-->
		
			<!-- wp:group {"className":"site-words-stack-small","layout":{"type":"flex"}} -->
			<div class="wp-block-group site-words-stack-small">
				<!-- wp:site-title /-->
				<!-- wp:site-tagline {"style":{"typography":{"fontSize":"var(--wp--custom--font-sizes--tiny)"}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		
		<!-- wp:navigation {"className":"blockbase-responsive-navigation-minimal","overlayMenu":"always","__unstableLocation":"primary","__unstableSocialLinks":"social","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /-->
		
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	
	</div>
	<!-- /wp:group -->	
	',
);


