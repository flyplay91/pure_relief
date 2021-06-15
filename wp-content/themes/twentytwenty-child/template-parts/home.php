<?php
/**
 * Template Name: Home Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="home-page">

<!---- Start Static Homepage Hero -->
    <?php get_template_part( 'template-parts/homepage-hero-style1' ); ?>
<!---- End Static Homepage Hero -->
    
<!---- Start Homepage Hero - Rev Slider -->
<?php //get_template_part( 'template-parts/home-hero-slider' ); ?>

<!---- End Homepage Hero - Rev Slider -->

    <?php if( have_rows('brands_group')) :
        $home_brands_group = get_field('brands_group');
        $home_brands_title = $home_brands_group['title'];
        while ( have_rows('brands_group')): the_row(); ?>
        <section class="home-brands">
            <div class="home-brands__inner inner-section-1470">
                <h1><?php echo $home_brands_title ?></h1>
                <div class="home-brand-items">
                    <?php if( have_rows('brands_repeater') ) :
                        while( have_rows('brands_repeater') ) : the_row();
                        $brand_img_url = get_sub_field('brand_image')['url'];
                        $brand_img_alt = get_sub_field('brand_image')['alt'];
                    ?>
                        <img src="<?php echo $brand_img_url ?>" alt="<?php echo $brand_img_alt ?>">
                    <?php endwhile;
                endif; ?>
                </div>
            </div>
        </section>
        <?php endwhile;
    endif; ?>

    <section class="home-reviews">

        <h3>Our Happy Customers</h3>

        <div style="min-height:400px;" class="yotpo yotpo-reviews-carousel" 
            data-background-color="transparent" 
            data-mode="top_rated" 
            data-type="both" 
            data-count="9" 
            data-show-bottomline="1" 
            data-autoplay-enabled="1" 
            data-autoplay-speed="3000" 
            data-show-navigation="1">&nbsp;
        </div>

    </section>

    <?php if( have_rows('product_group')) :
        $home_product_group = get_field('product_group');
        $home_product_heading = $home_product_group['heading'];
        $home_product_subheading = $home_product_group['sub_heading'];
        while ( have_rows('product_group')): the_row(); ?>
            <section class="home-products">
                <div class="home-products__inner inner-section-1310">
                    <h1><?php echo $home_product_heading ?></h1>
                    <h2><?php echo $home_product_subheading ?></h2>
                    <div class="home-product-items">
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
                                $productPrice = '<label>$' . $from_product_price . '</label><span>$' . $to_product_price . '</span>';

                                if ($from_product_price > $to_product_price) {
                                    $sale_badge = true;
                                }

                            } else {
                                if (($product_sale_price != null) && ($product_regular_price > $product_sale_price)) {
                                    $productPrice = '<label>$'.$product_regular_price.'</label> <span>$'.$product_sale_price.'</span>';
                                    $sale_badge = true;
                                } else {
                                    $productPrice = $product_price;
                                }
                            }
                        ?>
                            <div class="home-product-item">
                                <a href="<?php echo $product_url ?>">
                                    <?php if ($sale_badge == true) { ?>
                                        <span class="onsale">Sale!</span>
                                    <?php
                                    } ?>
                                    
                                    <img src="<?php  echo $product_image[0]; ?>">
                                    <h3><?php echo $product_title ?></h3>
                                    <div class="home-product-price">
                                        <?php echo $productPrice ?>                                        
                                    </div>
                                    <a class="btn-shop" href="<?php echo $product_url ?>">Shop Now</a>
                                </a>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile;
    endif; ?>

    <?php if( have_rows('category_group')) :
        $home_category_group = get_field('category_group');
        $home_category_heading = $home_category_group['heading'];
        $home_category_subheading = $home_category_group['sub_heading'];
        while ( have_rows('category_group')): the_row(); ?>
            <section class="home-collections">
                <div class="home-collections__inner inner-section-1470">
                    <h1><?php echo $home_category_heading ?></h1>
                    <label><?php echo $home_category_subheading ?></label>
                    <div class="home-collections-items">
                        <?php if( have_rows('category_repeater') ) :
                            while( have_rows('category_repeater') ) : the_row();
                            $category_link = get_sub_field('link');
                            $category_img_url = get_sub_field('image')['url'];
                            $category_img_alt = get_sub_field('image')['alt'];
                            $category_title = get_sub_field('title');
                            $category_text = get_sub_field('text');
                            ?>
                            <div class="home-collection-item">
                                <a href="<?php echo $category_link ?>">
                                    <div class="home-collection-img">
                                        <img src="<?php echo $category_img_url ?>" alt="<?php echo $category_img_alt ?>">
                                    </div>
                                    <div class="home-collection-content">
                                        <h3><?php echo $category_title ?></h3>
                                        <p><?php echo $category_text ?></p>
                                        <span>Shop Now</span>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile;
    endif; ?>

    <?php if( have_rows('what_group')) :
        $home_what_group = get_field('what_group');
        $home_what_img_url = $home_what_group['background_image']['url'];
        $home_what_img_alt = $home_what_group['background_image']['alt'];
        $home_what_title = $home_what_group['title'];
        $home_what_text = $home_what_group['text'];
        $home_what_button_title = $home_what_group['button_title'];
        $home_what_button_link = $home_what_group['button_link'];
        while ( have_rows('what_group')): the_row(); ?>
        <section class="home-what" style="background-image: url(<?php echo $home_what_img_url ?>)">
            <div class="home-what__inner">
                <div></div>
                <div class="home-what-content">
                    <h2><?php echo $home_what_title ?></h2>
                    <p><?php echo $home_what_text ?></p>
                    <a href="<?php echo $home_what_button_link ?>"><?php echo $home_what_button_title ?></a>
                </div>
            </div>
        </section>
        <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>