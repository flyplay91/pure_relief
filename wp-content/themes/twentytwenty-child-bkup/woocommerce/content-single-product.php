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

	


		<div class="product-extra__inner inner-section-1170 product-tabs">

		
		<!-- Frequently Bought Together -->
		<?php echo do_shortcode('[ywfbt_form]'); ?>


		<!-- Description -->
		<?php if( get_field('products_descritions_tab_title') ): ?>
		<button class="product-accordion active">
			<i class="fas fa-plus"></i>
			<i class="fas fa-minus"></i>
			<?php the_field('products_descritions_tab_title'); ?>
		</button>
		<?php endif; ?>
			
		<div class="tab-panel" <?php if( get_field('products_descritions_tab_title') ): ?>style="display:block;"<?php endif; ?>>
			<div class="product-about">
							<?php if( get_field('title_#1') ): ?>
								<h2>
									<?php the_field('title_#1'); ?>
								</h2>
							<?php endif; ?>
							
							

							<div class="product-about-texts">
									<div class="product-about-text">
										<?php the_field('Description_1'); ?>
									</div>
							</div>

							<?php if( get_field('title_2') ): ?>
								<h2>
									<?php the_field('title_2'); ?>
								</h2>
							<?php endif; ?>
							
							
							<?php if( get_field('Description_2') ): ?>
							<div class="product-about-texts">
									<div class="product-about-text">
										<?php the_field('Description_2'); ?>
									</div>
							</div>
							<?php endif; ?>

							<?php if( get_field('title_3') ): ?>
								<h2>
									<?php the_field('title_3'); ?>
								</h2>
							<?php endif; ?>
							
							

							<?php if( get_field('Description_3') ): ?>
							<div class="product-about-texts">
									<div class="product-about-text">
										<?php the_field('Description_3'); ?>
									</div>
							</div>
							<?php endif; ?>


							<div class="display-flex-center">

							<div class="product-about-imgs">
								<?php $image = get_field('product_image_1'); ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>

							<div class="product-about-imgs">
								<?php $image = get_field('product_image_2'); ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>

							<div class="product-about-imgs">
								<?php $image = get_field('product_image_3'); ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>

							</div>

			</div>
		</div>

		
		<?php if( get_field('product_instructions_title') ): ?>
		<div class="product-accordion-wrapper">
		<button class="product-accordion">
		<i class="fas fa-plus"></i>
			<i class="fas fa-minus"></i>
				<?php the_field('product_instructions_title'); ?></button>
			<div class="tab-panel">
					<div class="product-about-text product-instructions-tab">
						<?php if( get_field('product_instructions_description') ): ?>
							<?php the_field('product_instructions_description'); ?>
						<?php endif; ?>
		
						
			</div>
		</div>
		<?php endif; ?>
		

		<?php if( get_field('product_ingredients_title') ): ?>
		<div class="product-accordion-wrapper">
		<button class="product-accordion">
		<i class="fas fa-plus"></i>
			<i class="fas fa-minus"></i>
			<?php the_field('product_ingredients_title'); ?></button>
			<div class="tab-panel">
					<div class="product-about-text product-instructions-tab">
						<?php if( get_field('product_ingredients_description_') ): ?>
							<?php the_field('product_ingredients_description_'); ?>
						<?php endif; ?>
						
			</div>
		</div>
		<?php endif; ?>

			
					

				
			
		</div>
	</div>

						<script>
						var acc = document.getElementsByClassName("product-accordion");
								var i;

								for (i = 0; i < acc.length; i++) {
								acc[i].addEventListener("click", function() {
									/* Toggle between adding and removing the "active" class,
									to highlight the button that controls the panel */
									this.classList.toggle("active");


									/* Toggle between hiding and showing the active panel */
									var panel = this.nextElementSibling;
									if (panel.style.display === "block") {
									panel.style.display = "none";
									} else {
									panel.style.display = "block";
									}
								});
								} 





						</script>


	
			<div class="product-recommendation inner-section-1170">
				<div class="product-recommendation__inner inner-section-1170">
					<h2 class="text-align-center">Customers who shopped for <?php echo $product_title ?> also shopped for:</h2>
					
					<?php echo do_shortcode('[woo-related]'); ?>
				</div>
			</div>
	

			

			</div>
		
</div>






<?php do_action( 'woocommerce_after_single_product' ); ?>
