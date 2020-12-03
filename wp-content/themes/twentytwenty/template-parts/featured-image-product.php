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
	<div class="product-thumbnail">
		<div class="product-thumbnail-inner" style="background-image: url(<?php echo $full_image_url; ?>)">
		<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?>></a>
		</div><!-- .featured-media-inner -->
	</div><!-- .featured-media -->
