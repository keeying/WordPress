<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article class="news-list-item" id="post-<?php the_ID();?>">
    <div class="row">
        <div class="col-md-3">
        <?php get_template_part('template-parts/featured-image-news');?>
        </div>
        <div class="col-md-9">
    <?php get_template_part('template-parts/entry-header');?>
    <div class="news-excerpt">
      <?php the_excerpt();?>
    </div>
        </div>
    </div>
	<div class="section-inner">
		<?php
wp_link_pages(
    array(
        'before' => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
        'after' => '</nav>',
        'link_before' => '<span class="page-number">',
        'link_after' => '</span>',
    )
);
twentytwenty_the_post_meta(get_the_ID(), 'single-bottom');
if (post_type_supports(get_post_type(get_the_ID()), 'author') && is_single()) {
    get_template_part('template-parts/entry-author-bio');
}
?>
	</div><!-- .section-inner -->
	</article><!-- .post -->
