<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
	#site-content{
		background-color:#fff;
	}
	.page-header-container{
		height: 240px;
		background: transparent url(<?php echo $full_image_url[0] ?>) no-repeat center;
		background-size: cover;
	}
	.page-title,
	.page-header-inner{
		height: 100%;
		font-size: 48px;
		line-height: 240px;
		text-align: center;
		margin: 0 auto;
		color:#fff;
	}
	.page-header-inner{
		background-color: rgba(0,0,0,.4);
	}
	.page-content{
		margin: 45px auto 65px;
		font-size: 16px;
		line-height: 1.6;
	}
	.page-content img{
		max-width: 100%;
	}
</style>
<?php
get_header();
?>
<main id="site-content" role="main">
		<header class="page-header-container">
			<div class="page-header-inner">
			<h1 class="page-title"><?php the_title();?></h1>
			</div><!-- .archive-header-inner -->
		</header><!-- .archive-header -->
		<article class="container">
		<div class="page-content">
			<?php echo get_post($post->ID)->post_content; ?>
		</div>
		</article>
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets');?>

<?php
get_footer();
