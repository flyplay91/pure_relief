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
				<div class="footer-newsletter"></div>

				<div class="footer-nav">
					<div class="inner-section-1150 footer-nav__inner">
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

	</body>
</html>
