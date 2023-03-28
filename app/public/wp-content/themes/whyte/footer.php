<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whyte
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer">
			<div class="logo_text_footer">
				<div class="logo_footer">
					<?php the_custom_logo( ) ?>
				</div>
				<div class="text_footer">
					<?php the_field('text_footer'); ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
