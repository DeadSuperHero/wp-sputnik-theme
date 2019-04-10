<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sputnik
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="article_insert">

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-meta">
		<?php
		sputnik_posted_on();
		sputnik_posted_by();
		?>
	</div><!-- .entry-meta -->
	<?php sputnik_post_thumbnail(); ?>

	<footer class="entry-footer">
		<?php sputnik_entry_footer(); ?>
	</footer><!-- .entry-footer -->

		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sputnik' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sputnik' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
	<?php
		comments_template();
	?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
