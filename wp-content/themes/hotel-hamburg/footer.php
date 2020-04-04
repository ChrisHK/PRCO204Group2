<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hotel_Hamburg
 */

?>
		</div><!-- .container -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<?php $copyright_message = hotel_hamburg_get_option( 'copyright_message' ); ?>
			<?php if ( ! empty( $copyright_message ) ) : ?>
				<div class="credits">
					<?php echo esc_html( $copyright_message ); ?>
				</div><!-- .credits -->
			<?php endif; ?>
			<div class="site-info">
				
			</div><!-- .site-info -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
