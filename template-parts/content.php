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

	<div id="share_bar">
		<div class="share">
	      <label class="dex-btn wo-text diaspora" title="Share this page on Diaspora" for="diaspora-share">
	        <svg role="img" class="dex-icon" width="50" height="50">
	          <use xlink:href="#icon-diaspora"></use>
	        </svg>
	      </label>
	      <input name="popup" id="diaspora-share" class="hidden" type="radio">
	      <span class="popup">
	        <label for="overlay"></label>
	        <input name="podurl" value="" placeholder="Diaspora URL (nerdpol.ch)" type="text"><button class="share-btn" type="submit" value="diaspora">OK</button>
	      </span>
	    </div>
	    <div class="share">
	      <label class="dex-btn wo-text mastodon" title="Share this page on Mastodon" for="mastodon-share">
	        <svg role="img" class="dex-icon" width="50" height="50">
	          <use xlink:href="#icon-mastodon"></use>
	        </svg>
	      </label>
	      <input name="popup" id="mastodon-share" class="hidden" type="radio">
	      <span class="popup">
	        <label for="overlay"></label>
	        <input name="podurl" value="" placeholder="Mastodon URL (witches.town)" type="text"><button class="share-btn" type="submit"  value="mastodon">OK</button>
	      </span>
	    </div>
	    <div class="share">
	      <label class="dex-btn wo-text hubzilla" title="Share this page on Hubzilla" for="hubzilla-share">
	        <svg role="img" class="dex-icon" width="50" height="50">
	          <use xlink:href="#icon-hubzilla"></use>
	        </svg>
	      </label>
	      <input name="popup" id="hubzilla-share" class="hidden" type="radio">
	      <span class="popup">
	        <label for="overlay"></label>
	        <input name="podurl" value="" placeholder="Hubzilla URL (gerzilla.de)" type="text"><button class="share-btn" type="submit"  value="hubzilla">OK</button>
	      </span>
	    </div>
	    <div class="share">
	      <label class="dex-btn wo-text gnusocial" title="Share this page on GNU Social" for="gnusocial-share">
	        <svg role="img" class="dex-icon" width="50" height="50">
	          <use xlink:href="#icon-gnusocial"></use>
	        </svg>
	      </label>
	      <input name="popup" id="gnusocial-share" class="hidden" type="radio">
	      <span class="popup">
	        <label for="overlay"></label>
	        <input name="podurl" value="" placeholder="GNU Social URL (quitter.se)" type="text"><button class="share-btn" type="submit"  value="gnusocial">OK</button>
	      </span>
	    </div>
	    <div class="share">
	      <label class="dex-btn wo-text friendica" title="Share this page on Friendica" for="friendica-share">
	        <svg role="img" class="dex-icon" width="50" height="50">
	          <use xlink:href="#icon-friendica"></use>
	        </svg>
	      </label>
	      <input name="popup" id="friendica-share" class="hidden" type="radio">
	      <span class="popup">
	        <label for="overlay"></label>
	        <input name="podurl" value="" placeholder="Friendica URL (libranet.de)" type="text"><button class="share-btn" type="submit"  value="friendica">OK</button>
	      </span>
	    </div>
	    <div class="share">
	      <label class="dex-btn wo-text socialhome" title="Share this page on Socialhome" for="socialhome-share">
	        <svg role="img" class="dex-icon" width="50" height="50">
	          <use xlink:href="#icon-socialhome"></use>
	        </svg>
	      </label>
	      <input name="popup" id="socialhome-share" class="hidden" type="radio">
	      <span class="popup">
	        <label for="overlay"></label>
	        <input name="podurl" value="" placeholder="Socialhome URL (socialhome.network)" type="text"><button class="share-btn" type="submit" value="socialhome">OK</button>
	      </span>
	    </div>
	</div>
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
		sputnik_posted_by();
		sputnik_posted_on();
		?>
	</div><!-- .entry-meta -->
	<?php sputnik_post_thumbnail(); ?>

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
	</div>

	<footer class="entry-footer">
		<?php sputnik_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
