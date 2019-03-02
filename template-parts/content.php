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

	<symbol id="icon-mastodon" viewBox="0 0 24 24">
	        <path d="M23.605 10.01v10.205h-4.042v-9.907c0-2.09-.88-3.148-2.636-3.148-1.943 0-2.918 1.256-2.918 3.742v5.422H9.99v-5.42c0-2.487-.973-3.744-2.917-3.744-1.757 0-2.636 1.06-2.636 3.147v9.907H.395V10.008c0-2.085.53-3.742 1.597-4.97 1.1-1.225 2.54-1.853 4.328-1.853 2.07 0 3.635.795 4.67 2.386L12 7.26l1.007-1.69c1.036-1.59 2.604-2.385 4.67-2.385 1.79 0 3.23.63 4.33 1.854 1.066 1.225 1.597 2.883 1.597 4.97"/>
	      </symbol>

	      <symbol id="icon-gnusocial" viewBox="0 0 24 24">
	        <path d="M14.526 18.125l2.147-.12s.418 2.566-4.175 2.387c-2.923-.114-4.832-1.61-4.832-5.965s.537-5.07 4.653-5.25c4.115-.177 4.89 3.34 4.89 3.34h3.4s-.26-2.53-2.213-4.45c1.753-.97 1.715-2.836 1.652-4.02C19.99 2.914 17.594 0 17.036.497c-.56.5.924.986.804 3.432-.05 1.073.27 1.908-1.788 1.908-1.374 0-.805-1.223-2.536-1.223-1.018 0-1.404.65-1.55 1.186-.147-.534-.533-1.184-1.55-1.184-1.73 0-1.163 1.222-2.536 1.222-2.06 0-1.738-.835-1.79-1.91C5.97 1.484 7.453 1 6.895.5c-.555-.497-3.01 1.88-3.01 3.55 0 1.186-.066 3.06 1.68 4.028C3.91 9.694 3.58 11.98 3.612 14.008c.06 3.7 1.61 9.186 8.59 9.544 6.978.36 8.47-5.13 8.47-8.65h-7.335l1.19 3.223z"/>
	      </symbol>

	      <symbol id="icon-friendica" viewBox="0 0 24 24">
	        <path d="M7.525 23.347c-.847-.005-2.535-.86-2.908-3.15-.035-.216 0-15.89 0-15.89S5.2 1.086 8.01.65h11.433v6.37h-7.267v5.087h7.267v4.796h-7.267v6.445s-4.65-.002-4.65 0z"/>
	      </symbol>

	      <symbol id="icon-hubzilla" viewBox="0 0 24 24">
	        <path d="M20.125 1.403c1.26.622 2.423 1.818 3.03 3.11.24.578.492 1.148.44 2.49-.045 1.21-.13 1.686-.507 2.488-.998 2.13-2.962 3.554-5.205 3.7l-1.212.082-.425 1.686c-.357 1.404-.39 1.876-.39 1.876.405.43 1.325.696 1.71 1.692.525 1.015.465 2.456-.206 3.29-1.098 1.36-2.735 1.768-4.176 1.016-1.31-.688-1.997-2.39-1.588-3.88.098-.377-.016-.492-1.588-1.523L8.305 16.3l-.622.508C4.72 19.182.38 17.086.397 13.272c0-2.456 1.95-4.37 4.453-4.355 1.26 0 2.014.278 2.947 1.13l.687.622 1.523-.77 1.54-.753-.164-.54c-.23-.802-.18-2.586.098-3.487.312-1.08 1.278-2.423 2.195-3.094 1.867-1.377 4.42-1.623 6.45-.623zm-11.25 13.88l3.413 2.346s1.036-.873 2.44-.996l.874-3.71s-2.7-.874-3.465-2.77l-3.163 1.5s.748 1.868-.098 3.628z"/>
	      </symbol>

	      <symbol id="icon-socialhome" viewBox="0 0 24 24">
	        <path d="M8.47 8.268h7.044v9.08H8.472v-9.08zm8.177 5.2h4.98v9.74h-4.98v-9.74zm-14.035 3.88H7.27V8.27H2.613l-.002 9.08zm12.94 5.86H2.648l.002-4.762h12.902v4.763zm1.132-14.94h4.98v4.075h-4.98V8.268zm5.836-3.152L12.426.892c-.196-.135-1.392-.135-1.627 0L1.672 5.157c-.287.133-.438.445-.37.755.07.314 1.344 1.205 1.344 1.205h19.02s1.363-.977 1.363-1.352c0-.317-.218-.576-.51-.65z"/>
	      </symbol>

	      <symbol id="icon-postactiv" viewBox="0 0 24 24">
	        <path d="M1.99 1.32h5.345c.446 0 .794.112 1.045.334.265.21.43.473.504.794l1.42 9.712c.126.823.23 1.627.315 2.42.08.782.15 1.57.207 2.363.25-.78.515-1.558.794-2.34.293-.793.62-1.606.98-2.442l3.803-9.623 1.48.006s-4.49-1.22-4.113-1.22h9.712l-.263.173L12.723 22.98h-5.47L1.99 1.32z"/>
	      </symbol>

	      <symbol id="icon-pumpio" viewBox="0 0 24 24">
	        <path d="M7.53.397l12.56 11.617-12.56 11.59c-.54.01-3.297-1.226-3.297-1.226l12.56-10.362L4.234 1.69C4.604 1.444 7.254.398 7.53.397z"/>
	      </symbol>


	<div id="share_bar">
		<div class="share">
	      <label class="dex-btn wo-text diaspora" title="Share this page on Diaspora" for="diaspora-share">
	        <svg role="img" class="dex-icon" width="60" height="60">
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
	        <svg role="img" class="dex-icon" width="60" height="60">
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
	        <svg role="img" class="dex-icon" width="60" height="60">
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
	        <svg role="img" class="dex-icon" width="60" height="60">
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
	        <svg role="img" class="dex-icon" width="60" height="60">
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
	        <svg role="img" class="dex-icon" width="60" height="60">
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
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
