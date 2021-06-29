<?php
/**
 * Template Name: Site Map
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<!--- Template Parts > home.php -->

<main class="about-page sitemap-page">

<!---- Start Static Homepage Hero -->
    <?php //get_template_part( 'template-parts/homepage-hero-style1' ); ?>
<!---- End Static Homepage Hero -->
    
  <!------ Breadcrumb NavXT --->
  <div class="breadcrumbs inner-section-1170" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php
                    if(function_exists('bcn_display'))
                    {
                    bcn_display();
                    }?>
                </div>
        <!------ End Breadcrumb NavXT --->
    
        <section class="about-us">
            <div class="aboutus-whoispr__inner inner-section-1170">
                
            <h1>Sitemap</h1>

            <div class="row display-flex">

                <div class="sitemap-pages">
                    <?php echo do_shortcode('[wp_sitemap_page only="page"]'); ?>

                    <div class="sitemap-products">
                        <?php echo do_shortcode('[wp_sitemap_page only="product"]'); ?>
                    </div>
                    
                </div>
                    
                    

            <div class="sitemap-posts">
                <?php echo do_shortcode('[wp_sitemap_page only="post"]'); ?>
                
                <?php //echo //do_shortcode('[wp_sitemap_page only="category"]'); ?>
            </div>



            </div>
        </section>


  
 
   
</main>

<?php get_footer(); ?>