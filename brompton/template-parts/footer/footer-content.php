<footer id="colophon" class="site-footer">
	<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
	<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
		<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'varia' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_class'     => 'footer-menu',
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .footer-navigation -->
	<?php endif; ?>
	<div class="site-info">
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="comma">,</span>
		<?php endif; ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'varia' ) ); ?>" class="imprint">
			<?php
			/* translators: %s: WordPress. */
			printf( __( 'proudly powered by %s.', 'varia' ), 'WordPress' );
			?>
		</a>
		<?php get_template_part( 'template-parts/footer/privacy-policy', '' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
