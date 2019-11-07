<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sputnik
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<img class="feneas-logo" src="../images/feneas-small.png">feneas-logo</img>
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'We Distribute is proudly part of', 'sputnik', 'a non-profit organization dedicated to decentralized technologies and federated communication systems. We are working together to provide knowledge and services to help make the fediverse grow!'  ), 'sputnik', '<a href="https://feneas.org">Federated Networks Association ry</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
