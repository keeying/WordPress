<?php
/**
 * Displays the featured image
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0];
?>
	<div class="news-thumbnail">
		<div class="news-thumbnail-inner" style="background-image: url(<?php echo $full_image_url; ?>)">
		</div><!-- .featured-media-inner -->
	</div><!-- .featured-media -->
