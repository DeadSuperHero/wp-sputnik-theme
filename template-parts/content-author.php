<?php
/**
 * Template part for displaying post previews on the index page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sputnik
 */

?>
<div class="article_excerpt">
	<p>If you're seeing this, this is the author template.</p>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="article_thumb">
		<?php sputnik_post_thumbnail(); ?>
	</div>

	<div class="article_description">
		<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>


			<div class="entry-meta">
				<?php
				sputnik_posted_by();
				sputnik_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
</div>


</article><!-- #post-<?php the_ID(); ?> -->
	</div>
