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
get_header();
?>

<main role="main">
	<div class="swiper-container banner-swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<a href="#">
					<img src="/wp-content/uploads/2020/12/WechatIMG10307.jpeg" alt="">
				</a>
			</div>
			<div class="swiper-slide">
				<a href="#">
					<img src="/wp-content/uploads/2020/12/WechatIMG10308.jpeg" alt="">
				</a>
			</div>
		</div>
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
		<div class="swiper-pagination swiper-button-white"></div>
	</div>
	<script>
		new Swiper('.banner-swiper', {
			autoplay: 4000,
			pagination : '.banner-swiper .swiper-pagination',
			prevButton:'.banner-swiper .swiper-button-prev',
			nextButton:'.banner-swiper .swiper-button-next',
		})
	</script>
	<div class="section-container white-bg ">
		<div class="container">
			<div class="section-header">
				<h2>三大核心战略</h2>
				<small>Three core strategies</small>
			</div>
			<div class="row">
			<?php query_posts('cat=6&showposts=3'); //cat是要调用的分类ID,showposts是需要显示的文章数量 ?>
				<?php while (have_posts()): the_post();?>
													<div class="col-md-4">
														<div class="idea-thumbnail" style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0] ?>)">
														<a class="sr-only" href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
														</div>
														<div class="idea-title">
															<h3><span><?php the_title();?></span></h3>
														</div>
														<div class="idea-excerpt">
															<?php the_content();?>
														</div>
													</div>
													<?php endwhile;
wp_reset_query();?>
			</div>
		</div>
	</div>
	<div class="section-cover-bg">
		<div class="section-container">
			<div class="container">
				<div class="section-header">
					<h2>专业态度，创造恒久价值。</h2>
					<small>Professional attitude, to create lasting value</small>
				</div>
				<div class="content">
					<p>江苏金牛生态建材有限公司综合竞争力的体现，内敛于管理、外露于产品。公司按照ISO9001要求建立一套完整的质量保证体系和监督管理体系，</p>
					<p>并开展形成多样的质量管理、现场管理活动，从原料采购进厂、投料生产、工艺制造、性能检测、产品出厂试验全过程的监控，并将生产过程分解为一组有序的过程和子过程，</p>
					<p>每个工序制订了强制性执行规范，要求员工严格按照规范进行操作，防止质量问题的发生。</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section-container white-bg">
		<div class="container">
			<div class="section-header">
				<h2>产品中心</h2>
				<small>Products</small>
			</div>
			<div class="swiper-container product-swiper">
				<div class="swiper-wrapper">
			<?php query_posts('cat=5&showposts=3'); //cat是要调用的分类ID,showposts是需要显示的文章数量 ?>
				<?php while (have_posts()): the_post();?>
							<div class="swiper-slide product-item" class="idea-thumbnail" style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0] ?>)">
							<a href="<?php esc_url( the_permalink() ); ?>"></a>
							</div>
							<?php endwhile;
wp_reset_query();?>
				</div>
				<div class="swiper-button-prev swiper-button-black"></div>
    		<div class="swiper-button-next swiper-button-black"></div>
			</div>
		</div>
	</div>
	<script>
		new Swiper('.product-swiper', {
			initialSlide: 1,
			effect : 'coverflow',
			slidesPerView: 3,
			centeredSlides: true,
			prevButton:'.product-swiper .swiper-button-prev',
			nextButton:'.product-swiper .swiper-button-next',
			coverflow: {
				rotate: 30,
				stretch: 10,
				depth: 60,
				modifier: 2,
				slideShadows : true
			}
		});
	</script>
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets');?>

<?php
get_footer();
