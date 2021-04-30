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

?>

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

	<?php elseif ( is_product_category('cbd-hemp-flower') ) : ?>
		<section class="product-category__hero" style="background-color: #ffe7cd;">
			<div class="category-hero__inner inner-section-1470">
				<div class="category-hero-text">
					<h1>The Best Smokable Hemp Flower for You</h1>
					<p>The best part is that our CBD smokeables are available in numerous strains, some of which you may already be familiar with.</p>
				</div>
				<div class="category-hero-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/smokable-hemp-flower.png" alt="CBD Hemp Flower">
				</div>
			</div>
		</section>
				
	<?php elseif ( is_product_category('cbd-oils') ) : ?>
		<section class="product-category__hero" style="background-color: #ececec;">
			<div class="category-hero__inner inner-section-1470">
				<div class="category-hero-text">
					<h1>FULL-SPECTRUM CBD OIL</h1>
					<p>Like the rest of our CBD products, all Pure Relief oils are formulated with the purest extracts obtained from hemp plants cultivated in the United States.</p>
				</div>
				<div class="category-hero-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/full-spectrum-mint-cbd-oil-100mg.png" alt="Full Spectrum Mint CBD Oil 100mg">
				</div>
			</div>
		</section>

	<?php elseif ( is_product_category('cbd-edibles') ) : ?>
		<section class="product-category__hero" style="background-color: #ffffff;">
			<div class="category-hero__inner inner-section-1470">
				<div class="category-hero-text">
					<h1>PREMIUM VEGAN CBD-INFUSED EDIBLES</h1>
					<p>Pure Relief edible products provide a delicious and familiar way to enjoy all the potential benefits of hemp-derived CBD. Our vegan hemp gummies are an excellent option for beginners or those looking for a convenient way to take their CBD on-the-go.</p>
				</div>
				<div class="category-hero-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cbd-night-time-gummies-900-mg.png" alt="CBD Night Time Gummies 900mg">
				</div>
			</div>
		</section>

	<?php elseif ( is_product_category('bundles') ) : ?>
		<section class="product-category__hero" style="background-color: #ffedd6;">
			<div class="category-hero__inner inner-section-1470">
				<div class="category-hero-text">
					<h1>All the Benefits of CBD in One Easy Order</h1>
					<p>Whether you are searching for the perfect CBD gifts or looking to get all of your favorite products in one purchase, Pure Relief has a CBD bundle for you.</p>
					<p>Our bundles offer all the products you need to enjoy the full benefits of CBD in one easy package to help you save time and money, and enhance your overall CBD experience.</p>
				</div>
				<div class="category-hero-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cbd-in-one-easy-order.png" alt="CBD In One Easy Order">
				</div>
			</div>
		</section>

	<?php elseif ( is_product_category('cbd-topicals') ) : ?>
		<section class="product-category__hero" style="background-color: #e3e8f2;">
			<div class="category-hero__inner inner-section-1470">
				<div class="category-hero-text">
					<h1>The Best CBD Topicals for Complete Relief</h1>
					<p>Our plant-based CBD topicals have been created to provide you with an all-natural solution to everyday discomfort. Pure Relief topicals are the best way to enjoy all the calming topical properties of hemp-derived CBD from muscle and joint support to soothing benefits for your skin.</p>
					<p>All our topical products are made with a blend of natural powerhouse ingredients and the purest CBD extracted from American-grown hemp plants. Additionally, our CBD topicals are tested by third-party laboratories to guarantee the highest standards for quality and purity. You can rest assured that you are getting the best natural CBD topicals for sale on the market today.</p>
					<a href="#">Get Yours</a>
				</div>
				<div class="category-hero-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cbd-rapid-cooling-roll-on.png" alt="CBD Rapid Cooling Roll On">
				</div>
			</div>
		</section>

	<?php elseif ( is_product_category('apparel') ) : ?>
		<section class="product-category__hero" style="background-color: #ffeed1;">
			<div class="category-hero__inner inner-section-1470">
				<div class="category-hero-text">
					<h1>Made for Every Moment</h1>
					<p>Our line of contemporary apparel and accessories was created to rep Pure Relief and all things hemp in style and comfort. These products also make great gifts for the hemp lovers in your life or any of our loyal customers around the world.</p>
				</div>
				<div class="category-hero-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pure-relief-logo-black-t-shirt.png" alt="Pure Relief Logo Black T Shirt">
				</div>
			</div>
		</section>
	
	<?php endif; ?>
	
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

	<?php elseif ( is_product_category('cbd-hemp-flower') ) : ?>
		<div class="product-category__content">
			<div class="product-category__content__inner inner-section-1250">
				<h2>Pure Relief Raw Hemp Flower</h2>
				<p>Our collection of smokable products is the best of its kind in the industry. Pure Relief’s raw hemp flower and pre-rolls allow users to enjoy all the benefits of full-spectrum hemp the way nature intended. Whether you choose our CBD by the gram and decide to roll it yourself or our expertly rolled pre-rolls, you can trust that you are buying a safe, premium-quality product obtained from the finest industrial hemp in the country.</p>
				<h2>Discover the Best Smokable Hemp Flower for You</h2>
				<p>If you are looking to experience hemp in its most natural state, then our organic hemp flower products are for you. The best part is that our CBD smokeables are available in numerous strains, some of which you may already be familiar with. From Banana Punch to Hawaiian Haze, we got a strain for you! Simply browse our collection of hemp flower and rolls to learn more about each of our strains and find the perfect one for your lifestyle.</p>
				<h3>Smokable Hemp Flower</h3>
				<p>If you like to roll and share, then our <a href="https://www.purerelief.com/cbd-hemp-flower-package-3-5g/">Raw CBD flower </a> and 6 strain raw hemp bundle are perfect for you. is perfect for you. With 3.5 grams of full-spectrum hemp flower, our bags are meant to last and be shared with friends. Pure Relief raw hemp flower contains several cannabinoids found naturally in hemp, including: CBD (cannabidiol), CBG (cannabigerol), CBDV (cannabidivarin), CBC (cannabichromene), CBDA (cannabidiolic acid), and less than 0.3% THC (Δ-9 tetrahydrocannabinol).</p>
				<h3>Smokable Pre-Rolled Joints</h3>
				<p>Pure Relief’s best-selling <a href="https://www.purerelief.com/cbd-pre-roll-joints/">Pre rolled joints </a> are made for those who prefer convenience and tradition. These king-sized joints are made with our raw hemp flower rich in CBD and other natural components found in hemp. Pre-rolled and ready to use, the only thing you will need is a lighter.</p>
				<h2>The Best Smokable Hemp on the Market</h2>
				<p>At Pure Relief, we are committed to providing you with the most natural raw hemp flower available today. That is why our smokable CBD products are never produced with artificial or synthetic ingredients. All of our products are uniquely formulated, independently tested by a third-party lab, and made from industrial hemp cultivated in the United States. This helps ensure that you are getting the purest and safest smokable hemp for sale on the market.</p>
				<h2>
					CBD Smokeables FAQ
					<p></p>
				</h2>
				<h2></h2>
				<h3>How Does Smoking CBD Work?</h3>
				<p>Pure Relief Hemp Pre-Rolls and the rest of our CBD smokables deliver the same soothing effects as other non-smokable CBD products. So why choose smokable hemp?</p>
				<p>Smoking organic hemp flower acts faster than other methods, such as edibles and oils. When inhaled, CBD’s effects begin to take effect almost immediately as it quickly assimilates into the brain and lungs. For this reason, smoking hemp benefits those struggling with symptoms that need fast relief.</p>
				<h3>What Is Hemp Flower Good For?</h3>
				<p>Our full-spectrum hemp flower delivers all the benefits you’d expect from any of our other products like <a href="https://www.purerelief.com/cbd-gummies/">CBD oil gummies </a> and topicals. Typically, users report using smokable hemp flower for stress relief, pain management, and sleep support.</p>
				<h3>Are CBD Smokeables Safe?</h3>
				<p>All our hemp flower products are 100% safe. In addition to being made with pure flower from US-grown plants, each of our products goes through a rigorous testing process that ensures our flower meets the highest standards for safety and quality. </p>
				<h3>Is There THC in Raw Hemp Flower?</h3>
				<p>The average consumer might confuse our smokable hemp for marijuana-derived products, but the reality could not be further from the truth. While they both come from cannabis and contain CBD, hemp and marijuana are entirely different strains of the cannabis plant.</p>
				<p>The main difference is that marijuana is rich in THC, the compound responsible for the mind-altering effects associated with cannabis. On the other hand, Hemp flower is rich in CBD and contains virtually no THC (less than 0.03%).</p>
				<h3>Does Hemp Flower Smokable Get You High?</h3>
				<p>Because our flower and joints (and the rest of Pure Relief products) contain less than the legal limit of 0.03% THC, our products make it impossible for consumers to get high from their use.</p>
				<h3>Can Hemp Smokable Flower Make You Fail a Drug Test?</h3>
				<p>All our products are compliant with all rules and regulations surrounding the hemp industry. That means none of our products contain more than 0.03% THC. This amount of THC is virtually untraceable, so you won’t get high or fail any drug tests that check for THC content in your system.</p>
				<h3>In Which States Are CBD Smokables Legal?</h3>
				<p>In 2018, the hemp plant became legal in the United States thanks to the 2018 Farm Bill. Because our CBD products are made with extracts derived from industrial hemp plants, our hemp flower is legal nationwide. All our flower products are tested by independent laboratories to ensure we comply with the highest quality standards.</p>
			</div>
		</div>
	
	<?php elseif ( is_product_category('cbd-oils') ) : ?>
		<div class="product-category__content">
			<div class="product-category__content__inner inner-section-1250">
				<h2>Order Pure Extract Hemp Oil Online</h2>
				<p>Pure Relief is the perfect place to buy hemp oil online. Made with full-spectrum CBD, our oils are available in multiple strengths and flavors so that you can find the one that is right for you. Whether you are looking for stress relief or joint and muscle support, our CBD hemp oils can give you that extra boost you need to make the most out of your days.</p>
				<p>Like the rest of our CBD products, all Pure Relief oils are formulated with the purest extracts obtained from hemp plants cultivated in the United States. Most importantly, all our oil products are tested by independent laboratories to ensure we meet the highest standards for quality and safety. This helps us guarantee the best CBD oil available today, so you can have the peace of mind you deserve when you buy from Pure Relief. </p>
				<h2>Find the CBD Oil That’s Right for You</h2>
				<p>Pure Relief CBD Oils are available in different combinations, you can find here and <a href="https://www.purerelief.com/cbd-oil-extra-strength-2500mg/">extra-strength CBD Oil</a>, and <a href="https://www.purerelief.com/full-spectrum-mint-cbd-oil-1000mg/">Mint CBD Oil</a>. We offer pure CBD oil with its natural, herbal taste and a flavored version made with natural mint flavor. </p>
				<h3>Full-Spectrum CBD Oil</h3>
				<p>Naturally, pure CBD oil extracted from industrial hemp has an earthy taste and aroma reminiscent of how the earth smells after a summer rain. Our natural full-spectrum oil delivers this herbal hemp flavor in two different potencies: 500mg and 1000mg.</p>
				<h3>Full-Spectrum Mint CBD Oil</h3>
				<p>Not a fan of earthy tastes or vegetable-like flavors? Then you might want to try our flavored CBD hemp oil. Pure Relief flavored oil adds a fresh hint of mint to the natural herbal taste of CBD. Our mint flavor is derived naturally, meaning both our flavored and natural oils are 100% natural. Like our natural full-spectrum oils, our mint flavored oil is available in <a href="https://www.purerelief.com/full-spectrum-mint-cbd-oil-1000mg/">1000mg Full-Spectrum Mint CBD Oil </a> and <a href="https://www.purerelief.com/full-spectrum-mint-cbd-oil-1000mg/">500mg Mint CBD Oil. </a></p>
				<h3>CBD Oil Extra Strength</h3>
				<p>If you need extra support to cope with the aches and stress of everyday life, Pure Relief extra strength CBD oils may help. Available in 2500mg, our line offers some of the most <a href="https://www.purerelief.com/cbd-products/">potent CBD products </a> in the industry. It is recommended for the most challenging situations and extremely hectic lifestyles. </p>
				<h2>
					CBD Hemp Oil FAQ
					<p></p>
				</h2>
				<h2></h2>
				<h3>What is full-spectrum CBD hemp oil?</h3>
				<p>Full-Spectrum CBD oil combines the natural benefits of CBD with other compounds also extracted from hemp. When working together, CBD and these compounds called cannabinoids provide greater benefits than what they can individually. This synergistic effect is known as the Entourage Effect. By taking full-spectrum CBD oils, the body experiences this effect and becomes more receptive to CBD’s full range of benefits.</p>
				<p></p>
				<h3>How does CBD oil work?</h3>
				<p>CBD products can promote wellness in a variety of ways by interacting with the body’s endocannabinoid system, a network of receptors responsible for supporting many biological functions. Thanks to this interaction, daily use of CBD oils may provide various potential benefits, which is why our all-natural CBD-infused products are a great addition to your daily routine.</p>
				<h3>How do you use CBD oil?</h3>
				<p>Our CBD oil can be taken sublingually or mixed into your favorite drinks like smoothies and milkshakes. When taken sublingually, you should hold the oil under your tongue for about 30 seconds before swallowing. The benefit of sublingual consumption is that it allows the active compounds in our oil to bypass the digestive system and reach your bloodstream more quickly.</p>
				<h3>Is CBD oil legal?</h3>
				<p>In 2018, the Agriculture Improvement Act legalized the use of industrial hemp at the federal level. Also known as the 2018 Farm Bill, these laws removed hemp from the list of controlled substances and created a framework for the legalization of the plant in the United States.</p>
				<h3>Why Choose Pure Relief CBD Oil?</h3>
				<p>As one of the leading brands of CBD in the nation, we take pride in providing the best CBD hemp oil for sale on the market. Our CBD is extracted from organic hemp plants and formulated using the safest methods available today. Most importantly, all our CBD hemp oil is tested by third-party independent laboratories to ensure we meet the highest quality standards and comply with all industry regulations.</p>
			</div>
		</div>

	<?php elseif ( is_product_category('cbd-edibles') ) : ?>
		<div class="product-category__content">
			<div class="product-category__content__inner inner-section-1250">
				<h2>Premium Vegan CBD-Infused Edibles</h2>
				<p>Pure Relief edible products provide a delicious and familiar way to enjoy all the potential benefits of hemp-derived CBD. Our vegan hemp gummies are an excellent option for beginners or those looking for a convenient way to take their CBD on-the-go.</p>
				<p>Like the rest of Pure Relief products, our edibles are made with the purest extracts obtained from hemp plants grown right here in the United States. Most importantly, all our edible products are tested by third-party laboratories for quality and safety. You can feel 100% confident that you are getting the best CBD on the market when you buy CBD edibles online from Pure Relief.  </p>
				<h2>Find the Perfect CBD Edibles for Your Daily Needs</h2>
				<p>Our CBD edible gummies come in two varieties: our <a href="https://www.purerelief.com/daytime-hemp-gummies/">daytime hemp gummies</a> for your daily on-the-go needs and <a href="https://www.purerelief.com/nighttime-melatonin-gummies/">nighttime melatonin gummies</a> to help you find better and deeper sleep. Both are infused with a moderate dose of 30mg CBD per serving to help get you through your days and nights.</p>
				<h3>Daytime Cannabis CBD Gummies</h3>
				<p>By interacting with receptors in the body’s endocannabinoid system, the <a href="https://www.purerelief.com/cbd-gummies/">CBD gummies</a> can help during the most challenging parts of your day. The daily use of CBD may support healthy focus levels, reduced stress, and overall feelings of relief.</p>
				<h3>Nighttime CBD Edible Gummies</h3>
				<p>Sleep disruption is a real problem among Americans. Lack of sleep can result in all sorts of problems, from less productivity and lack of focus to genuine health concerns. Our nighttime gummies are infused with the natural sleep hormone melatonin designed to help promote healthy sleep cycles. Simply take one before you head to bed and get ready to rest easy.</p>
				<h2>Can’t Find What You Want? Shop More Pure Relief Products</h2>
				<p>If you are looking for something to complement your CBD edibles, browse the rest of our premium collection of CBD products, including oils, smokables, creams, and much more.</p>
				<p>Did you know we have bundle packages to deliver the best CBD experience directly to our consumers? Our CBD bundle packages are designed to provide a more powerful CBD experience with a curated product assortment that works exceptionally well together.</p>
				<h2>
					Pure Relief CBD Edibles FAQ
					<p></p>
				</h2>
				<h2></h2>
				<h3>What Are the Benefits of CBD-Infused Edibles?</h3>
				<p>Our gummy edibles offer all the natural benefits associated with hemp-derived CBD. These may include stress relief, pain management, and sleep support, just to name a few. If you are looking to complement your daily routine in a completely natural way, Pure Relief vegan edibles may help.</p>
				<h3>Daytime Gummies vs. Nighttime Gummies</h3>
				<p><a href="https://www.purerelief.com/">Pure Relief</a> daytime hemp gummy bears and <a href="https://www.purerelief.com/immune-support-gummies/">Immune support gummies</a> are a great way to get your daily CBD dosage in a delicious and convenient way. On the other hand, our nighttime hemp gummy bears contain 5mg of melatonin, which is the hormone responsible for promoting sleep in humans. All three options are vegan and are made with naturally-derived ingredients, offering a healthier alternative to other CBD products available in the market today.</p>
				<h3>Will CBD Edibles Get Me High?</h3>
				<p>CBD will not get you high. Even though CBD comes from cannabis, CBD and marijuana are not the same. Marijuana is a variety of cannabis, as is hemp. CBD is a compound belonging to a larger family of compounds called cannabinoids that all cannabis plants produce in different amounts. Marijuana itself contains CBD though it’s usually at low levels.</p>
				<h3>Are CBD Infused Edibles Legal?</h3>
				<p>The 2018 Farm Bill legalized the use of industrial hemp in the United States. Also known as the Agriculture Improvement Act, this bill eliminated hemp from the federal list of controlled substances. This made hemp-derived products completely legal nationwide.</p>
				<p></p>
				<h3>Why Choose Pure Relief CBD Edibles?</h3>
				<p>Pure Relief’s cannabis edibles for sale, including hemp gummies, are available for purchase right here online. All of our cbd infused edibles are made using CBD extracted from hemp grown in the United States. Pure Relief CBD products have been formulated with the utmost care and are lab-tested by an independent lab for quality assurance.</p>
			</div>
		</div>

	<?php elseif ( is_product_category('bundles') ) : ?>
		<div class="product-category__content">
			<div class="product-category__content__inner inner-section-1250">
				<h2>All the Benefits of CBD in One Easy Order</h2>
				<p>Whether you are searching for the perfect CBD gifts or looking to get all of your favorite products in one purchase, <a href="https://www.purerelief.com/">Pure Relief</a> has CBD bundles with <a href="https://www.purerelief.com/gift-wrap/">gift wrap</a> for you.<br>
					If you are not sure what hemp bundles are right for you, we invite you to start by taking our Pure Relief quiz. Our bundles offer all the products you need to enjoy the full benefits of CBD in one easy package to help you save time and money, and enhance your overall CBD experience.
				</p>
				<h2>Discover the Perfect Hemp Bundle for You</h2>
				<p>We offer CBD bundles for all kinds of users with varying lifestyles, from those leading a physically active life to those who are always on the go, and everything in between. Many of our bundles are also customizable, allowing you to choose from a wide array of flavors, strains, and strengths. Our bundles include different variations of our diverse line of products, such as <a href="https://www.purerelief.com/cbd-oils/">CBD Oils</a>, <a href="https://www.purerelief.com/cbd-topicals/">CBD Topicals</a>, and pure hemp flower, giving you a wide choice of options for your daily routine. </p>
				<h3>CBD Mixed Bundles</h3>
				<p>Many of our hemp bundles come with a combination of different <a href="https://www.purerelief.com/cbd-products/">CBD poducts</a> like oils, creams, and gummies, <a href="https://www.purerelief.com/day-night-gummies-bundle/">including day &amp; night CBD gummies</a>. These mixed bundles are ideal for those wishing to start a more comprehensive CBD routine that covers various aspects of their daily lives, including both mental and physical needs. </p>
				<h3>CBD Smokable Bundles</h3>
				<p>Our smokable bundles were created to allow you to try different strains of full-spectrum CBD conveniently and affordably. Whether you are trying our Peach Kush Mint or Cherry Chocolate Chip, <a href="https://www.purerelief.com/relief-roll-10-pack/">this 10 PACK – Relief Rolls </a> bundles are the best way to enjoy all the benefits of CBD in its most natural state. </p>
				<h3>CBD Starter Bundles</h3>
				<p>If you are new to CBD, then our starter bundle is perfect for you! This bundle comes with our signature CBD oil and our best-selling CBD Roll-On for a complete system that will help you experience all the benefits of CBD for the body and mind.</p>
				<h2>Why Choose Pure Relief CBD Bundles?</h2>
				<p>All the products in our CBD bundles are formulated with the highest-quality extracts obtained from the finest hemp plants grown on American farms. Most importantly, all products go through in-depth testing at third-party laboratories. This helps us guarantee the best CBD oil available today, so you can have the peace of mind you deserve when you buy from Pure Relief. </p>
				<h2>CBD Bundles FAQ</h2>
				<h3>Are you allowed to substitute products in a bundle?</h3>
				<p>Many of our hemp bundles can be customized to meet your individual needs and preferences. Depending on what products are included in each bundle, you may be able to choose from different flavors, strengths, and strains. </p>
				<h3>Is there an option to create your own CBD bundles?</h3>
				<p>We currently don’t offer an option to create your own bundle; however, some hemp bundles allow you to choose what items come in it.</p>
				<h3>How should I know which bundle is for me?</h3>
				<p>If you are not sure which CBD product is for you, we encourage you to take our CBD quiz! With products ranging from oils to raw flower, we guarantee that we’ll have a bundle that is just right for you. </p>
				<h3>Are your CBD bundles beginner-friendly?</h3>
				<p>Yes! Our bundles are perfect for beginners, especially those looking to try different CBD products at discounted prices. We even have a Starter Bundle specifically created for those who are taking their first steps in their CBD journey!</p>
			</div>
		</div>

	<?php elseif ( is_product_category('cbd-topicals') ) : ?>
		<div class="product-category__content">
			<div class="product-category__content__inner inner-section-1250">
				<h2>The Best CBD Topicals for Complete Relief</h2>
				<p>Our plant-based CBD topicals have been created to provide you with an all-natural solution to everyday discomfort. Pure Relief topicals are the best way to enjoy all the calming topical properties of hemp-derived CBD from muscle and joint support to soothing benefits for your skin.</p>
				<p>All our topical products are made with a blend of natural powerhouse ingredients and the purest CBD extracted from American-grown hemp plants. Additionally, our CBD topicals are tested by third-party laboratories to guarantee the highest standards for quality and purity. You can rest assured that you are getting the best natural CBD topicals for sale on the market today. </p>
				<h2> Why Use CBD Topicals: CBD Creams vs. CBD Topical Oils </h2>
				<p>As one of the most powerful ingredients found in nature, hemp-derived CBD has a vast number of benefits for your body and mind. Generally, <a href="https://www.purerelief.com/cbd-oils/">CBD Oils</a> are used for things like stress and brain fog, while CBD topicals may be more effective at providing support for the physically-challenging aspect of your daily routines, such as tired muscles and sore joints. If you have an active lifestyle and the pain and aches of everyday life are holding you back, CBD topicals may be able to provide you with the extra help you need.</p>
				<h3>Pure Relief CBD Cream</h3>
				<p>Pure Relief’s best-selling topical hemp cream combines the soothing properties of full-spectrum CBD with other natural powerhouse ingredients like green tea, camphor, and eucalyptus. This CBD topical for pain makes for a potent solution for your knees, back, ankles, and any overworked joints and muscles that need extra support. Thanks to the nourishing properties of its plant-based ingredients, our CBD topical creams can also help keep your skin feeling hydrated and refreshed, making it a perfect alternative for dryness and irritation.</p>
				<h2>Want the Full CBD Experience? Shop More Pure Relief Products</h2>
				<p>If you are looking for the complete CBD routine, we recommend complementing CBD topicals with Pure Relief oils, gummies, or smokable CBD joints. We even have special bundles to help you save on our most popular products, including our <a href="https://www.purerelief.com/cbd-rapid-cooling-roll-on/">CBD Roll-on</a>. These bundles are designed to give a more balanced CBD experience with a specially curated product selection that works exceptionally well together.</p>
				<h2>CBD Topicals FAQ</h2>
				<h3>I have never tried CBD cream or CBD topicals. What can I expect?</h3>
				<p>If you have never tried topical CBD, you can be confident that our plant-based CBD cream is a great starting place. Our cream is made to deliver all the soothing benefits of CBD and other natural ingredients, including camphor, eucalyptus, aloe, tea tree, and more, commonly used for relief. Our natural formulation ensures fast-acting results and increased absorption so that you get natural relief when you need it the most.</p>
				<h3>What is CBD cream best used for?</h3>
				<p>Thanks to the combination of hemp-derived CBD and other powerhouse ingredients, our natural topical hemp has the potential to provide numerous benefits. Common uses include joint and muscle support, post-workout recovery, and relief for irritated skin.</p>
				<h3>What’s the difference between CBD cream and CBD oil?</h3>
				<p>Our <a href="https://www.purerelief.com/cbd-oils/">CBD hemp oil</a> is more commonly used for mental support, as it may help reduce stress, minimize fatigue, and support sleep. Meanwhile, CBD topical creams provide targeted support to the area where it is applied, making it a better choice for joints, muscles, and skin.</p>
				<h3>Can you apply your topical CBD products to the face?</h3>
				<p>Yes! Pure Relief CBD topical cream contains no irritants or synthetic ingredients that may harm your skin. Our cream is completely plant-based and is safe for the skin on your body and face.</p>
			</div>
		</div>
	
	<?php elseif ( is_product_category('apparel') ) : ?>
		<div class="product-category__content">
			<div class="product-category__content__inner inner-section-1250">
				<h2>Made for Every Moment</h2>
				<p>Our line of contemporary apparel and accessories was created to rep Pure Relief and all things hemp in style and comfort. These products also make great gifts for the hemp lovers in your life or any of our loyal customers around the world.</p>
				<p>All Pure Relief merch is made with simplicity and contemporary style in mind so that you can show off your passion for hemp anytime and anywhere. Browse our Pure relief apparel collection and start repping the best hemp-derived CBD today.</p>
				<h2>Look as Good as You Feel</h2>
				<p>Our mission is to help you feel better every day so that you can be the best version of yourself inside and out. This is why we use the highest quality ingredients and materials to manufacture all our products, including the items in this collection. From our signature <a href="https://www.purerelief.com/pr-shirt/">Pure Relief t-shirt</a> and Father’s <a href="https://www.purerelief.com/fathers-mug/">CBD mug</a> to our best-selling fanny pack, Pure Relief clothing and accessories will help you chase your moment in the most stylish and comfortable fashion.</p>
				<h2>Pure Relief Merch FAQ</h2>
				<h3>When can I expect my orders to be shipped?</h3>
				<p>Processing takes from 24 to 48 hours. You can expect your order to arrive in 3-5 business days.</p>
				<h3>Do you deliver only to specific locations?</h3>
				<p>Currently, we only ship to locations in the United States.</p>
				<h3>Are these products manufactured with hemp?</h3>
				<p>No. While we love hemp and take pride in offering premium CBD products, Pure Relief apparel is not made with hemp.</p>
				<h3>Do you offer free shipping for Pure Relief apparel purchases?</h3>
				<p>We currently do not offer free shipping for Pure Relief apparel items.</p>
			</div>
		</div>
		
	<?php endif; ?>
</main>
<?php
get_footer( 'shop' );
