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


$email_address = get_field('email_address', 'option');
$facebook_link = get_field('facebook_link', 'option');
$instagram_link = get_field('instagram_link', 'option');
$pinterest_link = get_field('pinterest_link', 'option');
$description_text = get_field('description_text', 'option');
$copyrighter_text = get_field('copyrighter_text', 'option');

?>
			<footer class="site-footer">
				<div class="footer-newsletter">
				<div class="inner-section-1170">
					<h3>Subscribe To Our Newsletter</h3>
					<p>Be the first to know about our newest products and current offers. As a thank you, we’ll give you a 15% Off coupon!</p>

					<div class="klaviyo-newsletter-footer">
							<div class="klaviyo-form-PrFhDR"></div>
					</div>
				</div>

				
				</div>

				<div class="footer-nav">
					<div class="inner-section-1170 footer-nav__inner">
						<div class="footer-contact">
							<h2>Email Us</h2>
							<?php if ($email_address) : ?>
								<a href="mailto:<?php echo $email_address ?>"><?php echo $email_address ?></a>
							<?php endif; ?>
							<h2>Contact Us</h2>
							<ul>
								<?php if ($facebook_link) : ?>
									<li><a href="<?php echo $facebook_link ?>"><i class="fab fa-facebook"></i></a></li>
								<?php endif; ?>
								<?php if ($instagram_link) : ?>
									<li><a href="<?php echo $instagram_link ?>"><i class="fab fa-instagram"></i></a></li>
								<?php endif; ?>
								<?php if ($pinterest_link) : ?>
									<li><a href="<?php echo $pinterest_link ?> "><i class="fab fa-pinterest"></i></a></li>
								<?php endif; ?>
							</ul>
						</div>
						<div class="footer-menu">
							<?php if ( have_rows('menu_repeater', 'option')) :
								while (have_rows('menu_repeater', 'option')) : the_row(); ?>
								<div class="footer-menu--items">
									<h2><?php echo get_sub_field('menu_title', 'option') ?></h2>
									<ul>
										<?php if ( have_rows('menu_item_repeater', 'option')) :
											while (have_rows('menu_item_repeater', 'option')) : the_row(); ?>
											<li><a href="<?php echo get_sub_field('menu_link') ?>"><?php echo get_sub_field('menu_text') ?></a></li>
											<?php endwhile;
										endif; ?>
									</ul>
								</div>
								<?php endwhile;
							endif; ?>
						</div>
					</div>
				</div>

				<div class="footer-copyright">
					<div class="inner-section-1250 footer-copyright__inner">
						<hr>
						<div class="copyright-text">
							<p><?php echo $description_text ?></p>
							<p><?php echo $copyrighter_text ?></p>
						</div>
					</div>
				</div>
			</footer>

		<?php wp_footer(); ?>

		
<!-- Verify Pass -->
<script src="https://cdn.verifypass.com/seller/launcher.js" data-key="a64e6dd89"></script>

<!-- End Verify Pass -->
	
<!-- Push Crew -->
	<script type="text/javascript">!function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//www.rtb123.com/tags/17ED64AC-78CA-912A-7759-1DB19D44F1A2/btp.js";var t=document.getElementsByTagName("head")[0];t?t.appendChild(e,t):(t=document.getElementsByTagName("script")[0]).parentNode.insertBefore(e,t)}();</script>
    
    <script type="text/javascript">
      (function(p,u,s,h){
          p._pcq=p._pcq||[];
          p._pcq.push(['_currentTime',Date.now()]);
          s=u.createElement('script');
          s.type='text/javascript';
          s.async=true;
          s.crossOrigin = 'anonymous';
          s.src='https://cdn.pushcrew.com/js/a492336009f23071c0b5ed0a81b5b89a.js';
          h=u.getElementsByTagName('script')[0];
          h.parentNode.insertBefore(s,h);
      })(window,document);
    </script>
<!-- End Push Crew -->

<!-- Live Chat Inc -->
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 11764125;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/11764125/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

		
	</body>
</html>
