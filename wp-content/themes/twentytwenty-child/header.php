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

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.magnific-popup.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/custom-js.js"></script>

		<?php wp_head(); ?>

	</head>

	<?php 
		$announcebar_img_url = get_field('background_image', 'option')['url'];
		$announcebar_title = get_field('title', 'option');
		$announcebar_button_1_text = get_field('button_1_text', 'option');
		$announcebar_button_1_link = get_field('button_1_link', 'option');
		$announcebar_button_2_text = get_field('button_2_text', 'option');
		$announcebar_button_2_link = get_field('button_2_link', 'option');
		
	?>

	<body <?php body_class(); ?>>
		<header class="site-header">
			<div class="header-top" style="background-image: url(<?php echo $announcebar_img_url ?>)">
				<?php if ($announcebar_title) : ?>
					<h3><?php echo $announcebar_title ?></h3>
				<?php endif; ?>
				<?php if ($announcebar_button_1_text): ?>
					<a href="<?php echo $announcebar_button_1_link ?>"><?php echo $announcebar_button_1_text ?></a>
				<?php endif; ?>
				<?php if ($announcebar_button_2_text): ?>
					<a href="<?php echo $announcebar_button_2_link ?>"><?php echo $announcebar_button_2_text ?></a>
					<?php endif; ?>
			</div>

			
		</header>

