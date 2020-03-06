<?php
/**
 * Template part for displaying post previews on the index page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sputnik
 */

?>

<div class="article_list">
  <?php query_posts('offset=6'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="list_excerpt">

    	<div class="list_thumb">
    			<?php the_post_thumbnail('thumb'); ?>
    	</div>

    	<div class="list_description">
    		<header class="list-header">
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
    				sputnik_posted_on();
    				?>

    				<div class="mobile-tags"><?php sputnik_post_tags(); ?></div>

    			</div><!-- .entry-meta -->
    		<?php endif; ?>
    	</header><!-- .entry-header -->
    </div>
  </div>

<?php endwhile; ?>
<?php endif; ?>
</div>
