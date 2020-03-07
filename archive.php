<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sputnik
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

		<?php if ( have_posts() ) : ?>

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

			<?php the_posts_navigation(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
