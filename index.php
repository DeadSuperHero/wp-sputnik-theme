<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sputnik
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="article_grid">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text">
						<?php single_post_title(); ?>
					</h1>

				</header>
				<?php
			endif;
			/* Start the Loop */
			$i = 1; while ( have_posts() && $i < 7):
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (wget_template_part( 'template-parts/content', 'preview');here ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'preview');
			$i++; endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>

			<?php
			get_template_part( 'template-parts/content', 'list');
			?>

			<?php
			the_posts_navigation();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
