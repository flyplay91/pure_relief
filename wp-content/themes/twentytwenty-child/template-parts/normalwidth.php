<?php
/**
 * Template Name: Normal Width Page
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<!--- Template Parts > home.php -->



<!---- Start Static Homepage Hero -->
    <?php //get_template_part( 'template-parts/homepage-hero-style1' ); ?>
<!---- End Static Homepage Hero -->
    

    
<main id="site-content inner-section-1470" role="main">

<?php

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );
    }
}

?>

</main><!-- #site-content -->


<?php get_footer(); ?>