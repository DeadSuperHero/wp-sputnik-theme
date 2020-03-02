<?php
/**
 * The template for displaying author pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sputnik
 */

get_header();
?>


<?php
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div class="author-profile-card">
    <h1><?php echo $curauth->display_name; ?></h1>
    <div class="author-photo">
    <?php echo get_avatar( $curauth->user_email , '200 '); ?>
    </div>
    <div class="author-description"><?php echo $curauth->user_description; ?></div>
    <p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br />
</div>

<div id="author-articles">

<h2><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></i> Published Articles</h2>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="author-thumb">
  <?php the_post_thumbnail('thumb'); ?>
</div>

<div class="author-article-summary">

<h3 class="article-title">
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
    <?php the_title(); ?></a>
</h3>
<div class="article-desc">
  <?php the_excerpt(); ?>
</div>
<p class="posted-on">Posted on: <?php the_time('d M Y'); ?></p>
</div>
<?php endwhile;

// Previous/next page navigation.
the_posts_pagination();


else: ?>
<p><?php _e('No posts by this author.'); ?></p>

<?php endif; ?>
</div>
