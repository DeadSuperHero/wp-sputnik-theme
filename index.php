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
			<div class="index_container">
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
			endif; ?>

	<div class="article_grid">
			<?php $i = 1; while ( have_posts() && $i < 7):
							/* Start the Loop */
				the_post();
			         get_template_part( 'template-parts/content', 'grid');


			$i++; endwhile; ?>
		</div>

			<div class="article_list">
			<?php $i = 1; while ( have_posts() && $i < 6) :
				// output posts 7 + of main query
				the_post();
				get_template_part( 'template-parts/content', 'list');

				$i++; endwhile;
				?>
			</div>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

			<?php
			the_posts_navigation();
			?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
