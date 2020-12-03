<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes();?>>

	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head();?>
		<script src="/wp-content/themes/twentytwenty/assets/swiper/3.4.2/swiper.min.js"></script>
	<link rel="stylesheet" href="/wp-content/themes/twentytwenty/assets/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wp-content/themes/twentytwenty/assets/swiper/3.4.2/swiper.min.css">
	<style>
		.site-logo a{
			display: inline-block;
		}
		</style>
	</head>
	<body <?php body_class();?>>
		<header id="site-header" class="header-footer-group" role="banner">
			<div class="header-inner section-inner">
				<div class="container">
					<div class="row">
					<div class="col-md-5">
						<div class="row">
							<?php twentytwenty_site_logo();?>
						</div>
					</div><!-- .header-titles -->
					<div class="col-md-7">
						<ul class="nav navbar-nav primary-menu pull-right">
							<?php	wp_nav_menu(
    array(
        'container' => '',
        'items_wrap' => '%3$s',
        'theme_location' => 'primary',
    )
);
?>
						</ul>
					</div>
				</div>
			</div><!-- .header-inner -->
		</header><!-- #site-header -->
		<?php
