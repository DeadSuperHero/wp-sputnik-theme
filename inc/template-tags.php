<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Sputnik
 */

if ( ! function_exists( 'sputnik_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function sputnik_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'sputnik' ),
			'<span>' . $time_string . '</span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'sputnik_post_tags' ) ) :

	function sputnik_post_tags() {
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ' ', 'sputnik' ) );
			$color = get_term_meta($category[0]->cat_ID, 'color', true);
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__('%s', 'sputnik' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}
		}
	}
endif;

if ( ! function_exists( 'sputnik_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function sputnik_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'sputnik' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_avatar( get_the_author_meta( 'ID' ) ) . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'sputnik_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function sputnik_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( esc_html__( ' ', 'sputnik' ) );
			if ( $tags_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . '<i class="fa fa-tags" aria-hidden="true"></i>' . esc_html__('%s', 'sputnik' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
	}
endif;

if ( ! function_exists ('sputnik_platform_tag') ) :
	function sputnik_platform_tag() {

		$platform = get_field('platform');
		$link =  get_category_link( get_field( 'platform' ) );
		if( $platform ) {
			printf('<a class="platform-tag" href="' . esc_url($link) . '">' . esc_html__('%s', 'sputnik' ) . '</a>', $platform->name);
		}
	}
endif;

if ( ! function_exists( 'sputnik_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function sputnik_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large'); ?>
			<div class="post-thumbnail" style="background: url(<?php echo $featured_img_url ?>) !important; background-size: cover !important; background-position: center !important; min-height: 13em;">
				<?php sputnik_platform_tag(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

				<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>
				<div class="post-thumbnail" style="background: url(<?php echo $featured_img_url ?>) !important; background-size: cover !important; background-position: center !important;">
				</div><!-- .post-thumbnail -->
			</a>

		<?php
		endif; // End is_singular().
	}
endif;
