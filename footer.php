<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IBL_Education
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-columns d-flex flex-wrap container-5">
		<div class="footer-column-1 col-md-3">
			<?php dynamic_sidebar('footer-area-1'); ?>
		</div>
		<div class="footer-column-2 col-md-3">
			<?php dynamic_sidebar('footer-area-2'); ?>
		</div>
		<div class="footer-column-3 col-md-3">
			<?php dynamic_sidebar('footer-area-3'); ?>
		</div>
		<div class="footer-column-4 col-md-3">
			<?php the_custom_logo(); ?>
		</div>
	</div>
	<div class="site-bottom-container container-5 ">
		<?php dynamic_sidebar('footer-bottom-area'); ?>
		<!-- <div class="site-info">
			<a href="<?php //echo esc_url(__('https://wordpress.org/', 'ibl-education')); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf(esc_html__('Proudly powered by %s', 'ibl-education'), 'WordPress');
				?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			//printf(esc_html__('Theme: %1$s by %2$s.', 'ibl-education'), 'ibl-education', '<a href="http://underscores.me/">IBL Education</a>');
			?>
		</div>.site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<script>

const closeButton = document.querySelector('.close-menu');
const siteNavigation = document.getElementById( 'site-navigation' );

closeButton.addEventListener('click', function(){
		siteNavigation.classList.remove( 'toggled' );
})

</script>

<?php wp_footer(); ?>

</body>

</html>