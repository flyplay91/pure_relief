<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
global $product;
$product_title = $product->get_name();

?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="product-img-summary">
		<div class="product-img-summary__inner inner-section-1170">
			<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>
			<div class="summary entry-summary product-summary">			
				<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
				?>
			</div>
		</div>
	</div>

	<div class="product-extra">
		<div class="product-extra__inner inner-section-1170">
			<?php if( have_rows('about_group')) :
				while ( have_rows('about_group')): the_row(); ?>
					<div class="product-about">
						<h2>About <?php echo $product_title ?></h2>
						<div class="product-about-texts">
							<?php if( have_rows('about_repeater') ) :
								while( have_rows('about_repeater') ) : the_row();
								$about_title = get_sub_field('title');
								$about_description = get_sub_field('description');
							?>
								<div class="product-about-text">
									<h3><?php echo $about_title ?></h3>
									<?php echo $about_description ?>
								</div>
								<?php endwhile;
							endif; ?>
						</div>
						<div class="product-about-imgs">
							<?php if( have_rows('about_repeater') ) :
								while( have_rows('about_repeater') ) : the_row();
									$about_img_url = get_sub_field('image')['url'];
									$about_img_alt = get_sub_field('image')['alt'];
								?>
									<img class="product-about-img" src="<?php echo $about_img_url ?>" alt="<?php echo $about_img_alt ?>" />
								<?php endwhile;
							endif; ?>
						</div>
					</div>
				<?php endwhile;
			endif; ?>

			<?php if( have_rows('instructions_group')) :
				$instructions_group = get_field('instructions_group');
				$instructions_description = $instructions_group['description'];
				while ( have_rows('instructions_group')): the_row(); ?>
				<div class="product-instructions">
					<h3>Instructions to <?php echo $product_title ?></h3>
					<?php echo $instructions_description ?>
				</div>
				<?php endwhile;
			endif; ?>

			<div class="product-ingredients-facts">
				<?php if( have_rows('ingredients_group')) :
					$ingredients_group = get_field('ingredients_group');
					$instructions_description = $ingredients_group['description'];
					while ( have_rows('ingredients_group')): the_row(); ?>
						<div class="product-ingredients">
							<h3>Ingredients of <?php echo $product_title ?></h3>
							<div class="product-ingredients-facts-text">
								<?php echo $instructions_description ?>
							</div>
						</div>
					<?php endwhile;
				endif; ?>

				<?php if( have_rows('facts_group')) :
					$facts_group = get_field('facts_group');
					$instructions_description = $facts_group['description'];
					while ( have_rows('facts_group')): the_row(); ?>
						<div class="product-facts">
							<h3>Nutrition Facts</h3>
							<div class="product-ingredients-facts-text">
								<?php echo $instructions_description ?>
							</div>
						</div>
					<?php endwhile;
				endif; ?>	
			</div>
		</div>
	</div>

	<div class="product-recommendation">
		<div class="product-recommendation__inner inner-section-1170">
			<h2>Customers who shopped for <?php echo $product_title ?> also shopped for:</h2>
			<div class="product-recommendation-items">
				<div class="product-recommendation-item">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/test-product-1.jpg" alt="">
						<h3>Day & Night Gummies Bundle</h3>
					</a>
					<div class="recommendation-price">
						<span>$119.99</span>
						<label>$97.99</label>
					</div>
					<a href="" class="btn-recommendation-shop">Shop Now</a>
				</div>
				<div class="product-recommendation-item">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/test-product-1.jpg" alt="">
						<h3>Day & Night Gummies Bundle</h3>
					</a>
					<div class="recommendation-price">
						<span>$119.99</span>
						<label>$97.99</label>
					</div>
					<a href="" class="btn-recommendation-shop">Shop Now</a>
				</div>
				<div class="product-recommendation-item">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/test-product-1.jpg" alt="">
						<h3>Day & Night Gummies Bundle</h3>
					</a>
					<div class="recommendation-price">
						<span>$119.99</span>
						<label>$97.99</label>
					</div>
					<a href="" class="btn-recommendation-shop">Shop Now</a>
				</div>
				<div class="product-recommendation-item">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/test-product-1.jpg" alt="">
						<h3>Day & Night Gummies Bundle</h3>
					</a>
					<div class="recommendation-price">
						<span>$119.99</span>
						<label>$97.99</label>
					</div>
					<a href="" class="btn-recommendation-shop">Shop Now</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
