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

	<?php if( have_rows('related_product_group')) :
        while ( have_rows('related_product_group')): the_row(); ?>
			<div class="product-recommendation">
				<div class="product-recommendation__inner inner-section-1170">
					<h2>Customers who shopped for <?php echo $product_title ?> also shopped for:</h2>
					<div class="product-recommendation-items">
						<?php if( have_rows('product_repeater') ) :
                            while( have_rows('product_repeater') ) : the_row();
                            $product_obj = get_sub_field('product_item');
                            $product_id = $product_obj->ID;
                            $product = wc_get_product($product_id);
                            $product_type = $product->get_type();
                            $product_url = get_permalink( $product_id );
                            $product_image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
                            $product_title = get_the_title($product_id);
                            $product_regular_price = $product->get_regular_price();
                            $product_sale_price = $product->get_sale_price();
                            $product_price = $product->get_price();
                            $sale_badge = false;
                            if ($product_type == "variable") {
                                $product_available_variations = $product->get_available_variations();
                                $from_product_price = $product_available_variations[0]['display_regular_price'];
                                $to_product_price = $product_available_variations[0]['display_price'];
                                $productPrice = '<label>' . $from_product_price . '</label><span>' . $to_product_price . '</span>';

                                if ($from_product_price > $to_product_price) {
                                    $sale_badge = true;
                                }

                            } else {
                                if (($product_sale_price != null) && ($product_regular_price > $product_sale_price)) {
                                    $productPrice = '<label>'.$product_regular_price.'</label><span>'.$product_sale_price.'</span>';
                                    $sale_badge = true;
                                } else {
                                    $productPrice = $product_price;
                                }
                            }
                        ?>
						<div class="product-recommendation-item">
							<a href="<?php echo $product_url ?>">
								<?php if ($sale_badge == true) { ?>
									<span class="onsale">Sale!</span>
								<?php
								} ?>
								<img src="<?php  echo $product_image[0]; ?>">
								<h3><?php echo $product_title ?></h3>
							</a>
							<div class="home-product-price">
								<?php echo $productPrice ?>                                        
							</div>
							<a class="btn-recommendation-shop" href="<?php echo $product_url ?>">Shop Now</a>
						</div>
							<?php endwhile;
    					endif; ?>
					</div>
				</div>
			</div>
		<?php endwhile;
    endif; ?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
