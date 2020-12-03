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
 */?>
	<style type="text/css">
		.page-header-container{
			background: transparent url(/wp-content/uploads/2020/12/0144b85c90a16ea8012141689d04ff.jpg@2o.jpg) no-repeat center;
	}
</style>
<?php
get_header();
?>

<main id="site-content" role="main">
	<header class="page-header-container">
			<div class="page-header-inner">
			<h1 class="page-title"><?php echo substr(get_the_archive_title(), 9); ?></h1>
			</div><!-- .archive-header-inner -->
		</header><!-- .archive-header -->
		<div class="section-container">
			<div class="container">
				<div class="row">
				<?php if (have_posts()) {
			while (have_posts()) {
					the_post();
					get_template_part('template-parts/content-product', get_post_type());
			}}?>
				</div>
			</div>
		</div>
	<?php get_template_part('template-parts/pagination');?>
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets');?>

<?php
get_footer();
