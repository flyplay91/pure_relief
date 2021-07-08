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

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">





	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" async src="https://cdn.swellrewards.com/loader/XKnEIZ_Zv_EdmsvT3vl0KA.js?guid=XKnEIZ_Zv_EdmsvT3vl0KA"></script>
	<script src="https://kit.fontawesome.com/b1eb609035.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/custom-js.js" defer></script>

	<?php wp_head(); ?>

	<!-- Start WKND tag. Deploy at the beginning of document head. -->
	<script>
		(function(d) {
			var e = d.createElement('script');
			e.src = d.location.protocol + '//tag.wknd.ai/4221/i.js';
			e.async = true;
			d.getElementsByTagName("head")[0].appendChild(e);
		}(document));
	</script>
	<!-- End WKND tag -->



</head>

<?php
$announcebar_img_url = get_field('background_image', 'option')['url'];
$announcebar_title = get_field('title', 'option');
$announcebar_button_1_text = get_field('button_1_text', 'option');
$announcebar_button_1_link = get_field('button_1_link', 'option');
$announcebar_button_2_text = get_field('button_2_text', 'option');
$announcebar_button_2_link = get_field('button_2_link', 'option');

$logo_img = get_field('logo_image', 'option')['url'];
$logo_alt = get_field('logo_image', 'option')['alt'];

?>

<body <?php body_class(); ?>>
	<?php if (function_exists('gtm4wp_the_gtm_tag')) {
		gtm4wp_the_gtm_tag();
	} ?>

	<header class="site-header">



		<!-- Free Shipping Over $100 / box icon -->
		<?php //get_template_part( 'template-parts/announcement-bar-style1' ); 
		?>

		<!-- Free Shipping Over $100 / Shop Now Button -->
		<?php //get_template_part('template-parts/announcement-bar-style2'); ?>

		<!-- Slim 2 buttons to the right-->
		<?php //get_template_part( 'template-parts/announcement-bar-style3' ); 
		?>

		<!-- 3 column - [heading, subtitle, logo/button]-->
		<?php //get_template_part( 'template-parts/announcement-bar-style4' ); 
		?>

		


		<div class="header-nav" id="header-menu">
			<div class="header-logo">
				<a href="/" title="Home">
					<?php if ($logo_img) : ?>
						<img src="<?php echo $logo_img ?>" alt="<?php echo $logo_alt ?>">
					<?php else : ?>
						<h2 class="logo-text">Pure Relief</h2>
					<?php endif; ?>
				</a>
			</div>

			<div class="mobile-menu">
				<label class="menu-icon">
					<span class="navicon"></span>
				</label>
			</div>

			<ul class="header-menu">
				<?php
				if (has_nav_menu('primary')) {

					wp_nav_menu(
						array(
							'container'  => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
						)
					);
				} elseif (!has_nav_menu('expanded')) {

					wp_list_pages(
						array(
							'match_menu_classes' => true,
							'show_sub_menu_icons' => true,
							'title_li' => false,
							'walker'   => new TwentyTwenty_Walker_Page(),
						)
					);
				}
				?>
			</ul>

			<div class="header-search-account-cart">
				<div class="header-search">
					<form>
						<div class="header-search-form">
							<i class="fa fa-search" aria-hidden="true"></i>
							<input placeholder="Search..." class="elementor-search-form__input" type="search" name="s" title="Search" value="">
						</div>
					</form>

				</div>
				<div class="header-account">
					<a href="/my-account/">
						<i aria-hidden="true" class="fas fa-user-circle"></i>
					</a>
				</div>
				<div class="header-cart">
					<a href="/cart/">
						<?php $cart_count = WC()->cart->get_cart_contents_count(); ?>
						<i class="fas fa-shopping-cart"></i>
						<label><?php echo $cart_count ?></label>
					</a>
				</div>
			</div>

			<ul class="mobile-menu-items">
				<?php
				if (has_nav_menu('primary')) {

					wp_nav_menu(
						array(
							'container'  => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
						)
					);
				} elseif (!has_nav_menu('expanded')) {

					wp_list_pages(
						array(
							'match_menu_classes' => true,
							'show_sub_menu_icons' => true,
							'title_li' => false,
							'walker'   => new TwentyTwenty_Walker_Page(),
						)
					);
				}
				?>
			</ul>
		</div>
	</header>