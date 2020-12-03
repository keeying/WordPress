<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
<style  type="text/css">
	.details-header-container{
		background: transparent url(<?php echo $full_image_url[0] ?>) no-repeat center;
	}
</style>
<?php
get_header();
?>

<main id="site-content" role="main">
	<header class="details-header-container">
		<div class="details-header-inner">
			<div class="details-content">
		<?php
if (!is_page()) {
    get_template_part('template-parts/entry-header');
}
?>
	</div>
		</div><!-- .archive-header-inner -->
	</header><!-- .archive-header -->
	<div class="details-content">
	<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', get_post_type());
    }
}?>
</div>
</main><!-- #site-content -->
<?php get_template_part('template-parts/footer-menus-widgets');?>
<?php get_footer();?>
