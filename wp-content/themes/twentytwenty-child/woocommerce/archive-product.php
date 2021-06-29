<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

$term_id = get_queried_object()->term_id;
$post_id = 'product_cat_'.$term_id;
$banner_title = get_field('banner_title', $post_id);
$banner_description = get_field('banner_description', $post_id);
$banner_background_color = get_field('banner_background_color', $post_id);
$category_banner_url = get_field('category_banner', $post_id)['url'];
$category_banner_alt = get_field('category_banner', $post_id)['alt'];
$category_bottom_description = get_field('collection_description', $post_id);
?>
<!--- Woocommerce > archive.product -->
<main class="product-category-page">
	<?php if( is_shop() ) : ?>
		<section class="product-category__hero" style="background-color: #e8e0ce;">
			<div class="category-hero__inner inner-section-1470">
				<div class="category-hero-text">
					<h1>Pure Relief is the perfect place to buy hemp oil online</h1>
					<p>Pure Relief oils are formulated with the purest extracts obtained from hemp plants cultivated in the United States.</p>
				</div>
				<div class="category-hero-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Shop-CBD-Products.png" alt="CBD Products">
				</div>
			</div>
		</section>
	
	<?php else : 
		
		?>
		<section class="product-category__hero" style="background-color: <?php echo $banner_background_color ?>">
			<div class="category-hero__inner inner-section-1470">
				<div class="category-hero-text">
					<h1><?php echo $banner_title ?></h1>
					<?php echo $banner_description ?>
				</div>
				<div class="category-hero-img">
					<img src="<?php echo $category_banner_url ?>" alt="<?php echo $category_banner_alt ?>">
				</div>
			</div>
		</section>
				
	<?php endif; ?>

	     <!------ Breadcrumb NavXT --->
		 <div class="breadcrumbs inner-section-1250" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php
                    if(function_exists('bcn_display'))
                    {
                    bcn_display();
                    }?>
                </div>
        <!------ End Breadcrumb NavXT --->

	
	<section class="product-category__products">
		<div class="product-category__products__inner inner-section-1250">
			<div class="product-category__sort">
				<?php
					do_action( 'woocommerce_before_shop_loop' );
				?>
			</div>
			
			<?php
			if ( woocommerce_product_loop() ) { ?>

			<div class="category-products-block">
				<?php
					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();
							do_action( 'woocommerce_shop_loop' );
							wc_get_template_part( 'content', 'product' );
						}
					}
					} else {
						do_action( 'woocommerce_no_products_found' );
					}
				?>
			</div>

			<div class="cat-pagination">
				<?php the_posts_pagination(); ?>    
			</div>
		</div>
	</section>

	<?php if( is_shop() ) : ?>
		<div class="product-category__content">
			<div class="product-category__content__inner inner-section-1250">
				<h2>Pure Relief CBD Products</h2>
				<p>At Pure Relief, our mission is to provide our users with the best CBD products available. Whether you’re into vaping, CBD gummies, oils, or pre-rolls, we have something for everyone. No matter what variety you choose, you can trust that each of our products is uniquely crafted with the utmost care and are tested by an independent lab for quality and safety. </p>
				<p>We offer a comprehensive collection of items designed to meet every customer’s needs and preferences. Our full line of CBD products includes unflavored and flavored CBD oils, CBD gummies, CBD cream, E-Hemp Pens, Relief Rolls, Raw Hemp Flower, and our exclusive line of clothing.</p>
				<h3>High-Quality CBD for Everyone</h3>
				<p>Not only do we take pride in offering the best quality CBD products in the country, but we are continually striving to provide a broader assortment of products than other brands. By having an extensive and diverse collection of hemp CBD products, we ensure the benefits of CBD are accessible to more people. </p>
				<h4>CBD Oils</h4>
				<p>Pure Relief’s full-spectrum oils are infused with several all-natural cannabinoids found in hemp to enhance the potential benefits of CBD. You can find our <a href="https://www.purerelief.com/cbd-oils/">CBD oils</a> in natural and mint flavors and in various strengths, including 500mg, 1000mg, 2500mg, and 5000mg.</p>
				<h4>CBD Gummies</h4>
				<p>Our Daytime Gummies are infused with 900mg broad-spectrum CBD and other natural ingredients. Our <a href="https://www.purerelief.com/cbd-gummies/">CBD edible gummies </a> are also available in a nighttime variety that includes 30mg of CBD per gummy and 5mg of melatonin to promote deeper and better sleep.</p>
				<h4>Raw Hemp Flower</h4>
				<p>Our <a href="https://www.purerelief.com/cbd-hemp-flower-package-3-5g/">Raw hemp CBD flower </a> bags contain 3.5 grams of our premium CBD flower. Our best-selling flower is perfect for those who want to enjoy CBD in its purest form. Our collection of strains include Bubba Kush, Hawaiian Haze, Purple Punch, and Sour Apple.</p>
				<h4>CBD Cream</h4>
				<p>Combining powerful moisturizing ability with natural pain relievers, Pure Relief’s 500mg CBD Cream is formulated using the finest ingredients and full-spectrum CBD for a more potent solution. Our easy to apply CBD products are great for joints, muscles, and skin. </p>
				<h4>CBD Relief Rolls</h4>
				<p style="margin-bottom:15px">Pure Relief’s Rolls are single packs of king-size pre-rolled joints. Our CBD hemp rolls are made with our premium-quality flower and available in multiple strains. Our full collection of CBD joint strains include: </p>
				<ul style="margin-left:25px">
					<li>– Banana Punch</li>
					<li>– Kush Mints</li>
					<li>– Lemon Fuel OG</li>
					<li>– Melonade</li>
					<li>– Pure OG</li>
					<li>– Royalty OG</li>
					<li>– Sherblato</li>
					<li>– Bubba Kush</li>
					<li>– Hawaiian Haze</li>
					<li>– Purple Punch</li>
					<li>– Sour Apple </li>
				</ul>
				<p></p>
				<h4>Palmwoods</h4>
				<p style="margin-bottom:15px">Our signature CBD cigars are hand-crafted and made with CBD-rich hemp flower, rolled into palm leaves, dipped in wax, then rolled in kief. Available in various hemp strains, Palmwoods by Pure Relief offer a pleasant and delicious way to enjoy all the soothing benefits of CBD in a brand new format. The different strains include:</p>
				<ul style="margin-left:25px">
					<li>– Sour Apple</li>
					<li>– Bubba Kush</li>
					<li>– Sour Space Candy</li>
					<li>– Purple Punch</li>
					<li>– Candy Land</li>
					<ul>
						<p></p>
						<h4>Bundles</h4>
						<p style="margin-bottom:15px">Whether you are looking to start your CBD voyage the right way or planning on stacking up on your favorites for a long trip, we have the right bundle for you. We offer 12 different packages designed for every situation. Some of those bundles include: </p>
						<ul style="margin-left:25px">
							<li>– Night Night Bundle</li>
							<li>– Beast Bundle</li>
							<li>– “The Essentials” Bundles</li>
							<li>– CBD Starter Bundle</li>
							<li>– Anna’s Bundle</li>
						</ul>
						<p></p>
						<h4>E- Hemp Pens</h4>
						<p style="margin-bottom:15px">Pure Relief’s Vape Pens combine the power of CBD with the relaxing effect of vaping to bring you quick relief in an easy and convenient method. Our CBD vape pens are prefilled with 200mg of CBD, along with flavonoids and terpenes naturally found in hemp. The flavors include:</p>
						<ul style="margin-left:25px">
							<li>– Gelato</li>
							<li>– Tangie</li>
							<li>– Strawberry Shortcake</li>
						</ul>
						<p></p>
						<h3>Why Buy CBD Products From Pure Relief?</h3>
						<p>The widespread growth of the CBD industry has made it home to many dishonest companies, offering all types of fraudulent products. About 70% of CBD products you find online attempt to deceive the consumer, meaning what’s stated on the label doesn’t match what’s in the actual product.  At Pure Relief, we believe in transparency. The CBD in our products is extracted from industrial hemp cultivated in the U.S. Furthermore, our CO2 extraction method is the industry standard for safe and clean products.</p>
						<h3>What Are the Benefits of CBD Products?</h3>
						<p>Pure Relief CBD hemp products are convenient and easy to incorporate into your daily routine. As many studies have shown, regular use of CBD may have potential benefits because of how the hemp compound interacts with the endocannabinoid system. This system consists of a network of receptors responsible for regulating vital functions like sleep, inflammation, appetite, and stress. CBD may support a healthy endocannabinoid system, which is why thousands are adding CBD to their routines every day.</p>
						<h3>Is CBD Legal?</h3>
						<p>In 2018, hemp became legal in the United States with the passage of the 2018 Farm Bill. Because our CBD is derived from industrial hemp plants, our products are legal nationwide. </p>
						<h3>What Is the Most Potent Oil You Offer?</h3>
						<p>The strongest CBD oil in our collection is the 5000mg unflavored tincture. This oil comes in a 30ml bottle and provides over 167mg of CBD per serving. The second strongest oil is the 2500mg unflavored tincture, offering over 83mg of CBD per serving. Our most potent flavored option is the 1000mg bottle, which provides about 33mg CBD per serving and natural mint flavor.</p>
						<h3>How Much CBD Do I Need?</h3>
						<p>CBD dosage will vary depending on individual wellness needs. What might work for a friend might not work for you. We all have a complex regulatory system in us called the endocannabinoid system and a unique set of cannabinoid receptors that can interact with the CBD compound. Our bodies interact with CBD at different rates. For example, our lowest strength oil might work wonderfully for some people, but may not work at all for you. </p>
						<h3>How Do You Use CBD Products?</h3>
						<p>If you are new to CBD, we suggest starting with the lowest strength to give your body time to adapt. If you are using our oils, gummies, or vape, we recommend daily use for best results. Consistency is key if you’re looking for long-term results. CBD is a remarkable compound that has helped tons of people. Just because it’s taking longer for you doesn’t mean that your body doesn’t have what it takes to react to the compound.</p>
					</ul>
				</ul>
			</div>
		</div>

	<?php else : ?>
		<div class="product-category__content">
			<div class="product-category__content__inner inner-section-1250">
				<?php echo $category_bottom_description ?>
			</div>
		</div>
	<?php endif; ?>
</main>
<?php
get_footer( 'shop' );
