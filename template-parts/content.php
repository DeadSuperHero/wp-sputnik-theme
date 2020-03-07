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

	<div class="featured-thumbnail">
		<?php the_post_thumbnail( 'large' ); ?>
		<?php sputnik_platform_tag(); ?>
	</div>

	<div class="entry-meta">
		<?php
		sputnik_posted_by();
		sputnik_posted_on();
		?>

	</div><!-- .entry-meta -->
	<?php sputnik_entry_footer(); ?>

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

		<footer class="entry-footer">

			<?php
				$tags = wp_get_post_tags($post->ID);
				if ($tags) {
				$tag_ids = array();
				foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

				$args=array(
				'tag__in' => $tag_ids,
				'post__not_in' => array($post->ID),
				'showposts'=>6,  // Number of related posts that will be shown.
				'caller_get_posts'=>1
				);

				$my_query = new wp_query($args);
				if( $my_query->have_posts() ) {
				echo '<div id="relatedposts"><h3>Related Articles</h3><ul>';
				while ($my_query->have_posts()) {
				$my_query->the_post();
				?>

				<?php
				if ( has_post_thumbnail() ) { ?>
				<li class="relatedthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'medium' ); ?><div class="relatedthumb_title"><?php the_title(); ?></div></a></li>
				<?php } else { ?>
				<li class="relatedthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_post_meta($post->ID, 'Image',true) ?>" alt="<?php the_title_attribute(); ?>" /><?php the_title(); ?></a></li>
				<?php }
				?>

				<?php
				}
				echo '</ul>';
				}
				}
				$post = $backup;
				wp_reset_query();
				?>

		</footer><!-- .entry-footer -->

	<?php
		comments_template();
	?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
