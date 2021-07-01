<?php
/**
 * Template Name: Reviews
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<!--- Template Parts > page-reviews.php -->

	     <!------ Breadcrumb NavXT --->
		 <div class="breadcrumbs inner-section-1170" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php
                    if(function_exists('bcn_display'))
                    {
                    bcn_display();
                    }?>
                </div>
        <!------ End Breadcrumb NavXT --->

<main class="reviews-page">

<!---- Start Static Homepage Hero -->
    <?php //get_template_part( 'template-parts/homepage-hero-style1' ); ?>
<!---- End Static Homepage Hero -->
    
<div class="reviewspage-wrapper inner-section-1170">

<h1 class="page-title">What Are Pure Relief Customers Saying About CBD?</h1>

          <div id='yotpo-testimonials-custom-tab'
          ></div>
        
</div>
   
</main>

<?php get_footer(); ?>