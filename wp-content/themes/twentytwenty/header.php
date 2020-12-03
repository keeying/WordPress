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
	<link rel="stylesheet" href="/wp-content/themes/twentytwenty/assets/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body <?php body_class();?>>
		<header id="site-header" class="header-footer-group" role="banner">
			<div class="header-inner section-inner">
				<div class="container">
					<div class="row">
					<div class="header-titles col-6">
						<?php twentytwenty_site_logo();?>
					</div><!-- .header-titles -->
					</div>
					<div class="col-6">
						
					</div>
				</div>
			</div><!-- .header-inner -->
		</header><!-- #site-header -->
		<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
