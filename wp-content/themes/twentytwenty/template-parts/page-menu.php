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
<div class="page-menu-container container">
  <ul class="page-menu">
    <?php	wp_nav_menu(
    array(
        'container' => '',
        'items_wrap' => '%3$s',
        'theme_location' => 'page',
    )
);?>
  </ul>
</div>