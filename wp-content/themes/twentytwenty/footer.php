<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
				<div class="section-inner container">
					<div class="row">
					<div class="col-md-10">
						<p class="footer-copyright">&copy;
							<?php
echo date_i18n(
    /* translators: Copyright date format, see https://www.php.net/date */
    _x('Y', 'copyright date format', 'twentytwenty')
);
?>
							<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name');?></a>
						</p><!-- .footer-copyright -->
					</div><!-- .footer-credits -->
					<a class="to-the-top col-md-2" href="#site-header">
						<span class="to-the-top-long">
							<?php
/* translators: %s: HTML character for up arrow. */
printf(__('To the top %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
/* translators: %s: HTML character for up arrow. */
printf(__('Up %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->
					</div>
				</div><!-- .section-inner -->
			</footer><!-- #site-footer -->
			<div class="kefu-container">
				<div class="kefu-item phone">
					<img src="/wp-content/uploads/2020/12/telphone.png" alt="联系电话">
					<span>电话咨询</span>
					<div class="phone-number">
						<h5>客服热线</h5>
						<span>400-435-00788</span>
					</div>
				</div>
				<div class="kefu-item qq">
					<img src="/wp-content/uploads/2020/12/aht_25.png" alt="QQ">
					<span>QQ咨询</span>
				</div>
				<div class="kefu-item wechat">
					<img src="/wp-content/uploads/2020/12/wechat.png" alt="微信">
					<span>扫码关注</span>
					<div class="qr-code">
						<img src="/wp-content/uploads/2020/12/5702751a051884172d3643847b7bef77.png" alt="扫码关注嘛嘛来了">
						<span>扫码关注嘛嘛来了</span>
					</div>
				</div>
			</div>
		<?php wp_footer();?>
	</body>
</html>
