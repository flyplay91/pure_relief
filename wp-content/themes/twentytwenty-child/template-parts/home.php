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
    <?php if( have_rows('hero_group')) : 
        $hero_group = get_field('hero_group');
        $hero_bg_img_url = $hero_group['background_image']['url'];
        $hero_bg_img_alt = $hero_group['background_image']['alt'];
        $hero_title = $hero_group['title'];
        $hero_description = $hero_group['description'];
        $hero_button_1_title = $hero_group['button_1_title'];
        $hero_button_1_link = $hero_group['button_1_link'];
        $hero_button_2_title = $hero_group['button_2_title'];
        $hero_button_2_link = $hero_group['button_2_link'];
        $hero_product_img_url = $hero_group['product_image']['url'];
        $hero_product_img_alt = $hero_group['product_image']['alt'];
        $hero_price_1_title = $hero_group['price_1_title'];
        $hero_price_1_link = $hero_group['price_1_link'];
        $hero_price_2_title = $hero_group['price_2_title'];
        $hero_price_2_link = $hero_group['price_2_link'];
        $hero_promotion_text = $hero_group['promotion_text'];
        $hero_disclaimer_text = $hero_group['disclaimer_text'];
        ?>
        <?php while ( have_rows('hero_group')): the_row(); ?>
        <section class="home-hero" style="background-image: url(<?php echo $hero_bg_img_url ?>);">
            <div class="home-hero__inner">
                <div class="home-hero-top">
                    <div class="home-hero-top-left">
                        <h1><?php echo $hero_title ?></h1>
                        <p><?php echo $hero_description ?></p>
                        <div class="home-hero-btns">
                            <a href="<?php echo $hero_button_1_link ?>"><?php echo $hero_button_1_title ?></a>
                            <a href="<?php echo $hero_button_2_link ?>"><?php echo $hero_button_2_title ?></a>
                        </div>
                    </div>
                    <div class="home-hero-top-right">
                        <img src="<?php echo $hero_product_img_url ?>" alt="<?php echo $hero_product_img_alt ?>">
                        <a href="<?php echo $hero_price_1_link ?>">
                            <span><?php echo $hero_price_1_title ?></span>
                        </a>
                        <a href="<?php echo $hero_price_2_link ?>">
                            <span><?php echo $hero_price_2_title ?></span>
                        </a>
                    </div>
                </div>
                <div class="home-hero-bottom">
                    <p><?php echo $hero_promotion_text ?></p>
                    <p><?php echo $hero_disclaimer_text ?></p>
                </div>
            </div>
        </section>
        <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>