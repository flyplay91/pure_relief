<?php
/**
 * Template Name: Apply for Wholesale
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<!--- Template Parts > home.php -->

<main class="about-page applyforwholesale-page">

<!---- Start Static Homepage Hero -->
    <?php //get_template_part( 'template-parts/homepage-hero-style1' ); ?>
<!---- End Static Homepage Hero -->
    

        <!-- Row -->
        <div class="aboutus-contentcontainer">
            <div class="aboutcontent-column">
                    <div class="aboutcontent-column-wrap">
                        
                 
                        
                        <h2>Join our Family bringing thousands Relief through our Wholesale Program</h2>

                        
                    </div>
            </div>

            <div class="aboutcontent-column" style="background:url(/wp-content/uploads/2021/06/sale_placeholder.jpg);background-position:center;background-size:cover;">
                    
            </div>

        </div>
        <!-- End Row -->

        <!-- Row -->
        <div class="aboutus-contentcontainer wholesale-header">
                    
            <div class="aboutpr-logo1">
                <img class="aboutpr-logo" src="https://www.purerelief.com/wp-content/uploads/2019/10/logo.svg" class="attachment-full size-full" alt="" loading="lazy">	
            </div>

            <hr />
            
            <h1>Wholesale Program</h1>
			        
        </div>
    
     
        <!-- End Row -->

            <!-- Row -->
                <div class="aboutus-contentcontainer inner-section-1170">

                    <div class="aboutcontent-column applywholesale-col">
                        <h4>APPLY FOR WHOLESALE</h4>
                        <p>Please fill the necessary information that will make for an easy and quick approval of your wholesale account. Thank you for your time and interest in Pure Relief. We are looking forward to having you as a part of the family!</p> 
                    </div>

                    <div class="aboutcontent-column gcform-col">
                        
                            
                           <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="49"]'); ?>
                            
                        
                    </div>

                </div>
            <!-- End Row -->

            <!-- Row -->
            <div class="aboutus-contentcontainer">

                  

                    <div class="wholesale-icons">
                        
                            
                            <ul>
                                <li><a href="/cbd-oils/"><img src="/wp-content/uploads/2021/06/CBD-Oils.svg" /><br />Oils</a></li>
                                <li><a href="/cbd-hemp-flower/"><img src="/wp-content/uploads/2021/06/CBD-Flowers.svg" /><br />CBD Flower</a></li>
                                <li><a href="/cbd-topicals/"><img src="/wp-content/uploads/2021/06/CBD-Creams-CBD-Topicals.svg" /><br />Creams</a></li>
                                <li><a href="/cbd-edibles/"><img src="/wp-content/uploads/2021/06/CBD-Edibles.svg" /><br />Edibles</a></li>
                                <li><a href="/apparel/"><img src="/wp-content/uploads/2021/06/PureRelief-Apparel.svg" /><br />Apparel</a></li>
                            </ul>
                            
                        
                    </div>

            </div>
            <!-- End Row -->

                <!-- Row -->
                <div class="aboutus-contentcontainer">
                        <div class="aboutcontent-column">
                                <div class="aboutcontent-column-wrap text-align-left">
                                    
                            
                                    
                                    <h3>Why Choose Pure Relief?</h3>

                                    <p>All <a href="https://www.purerelief.com/">Pure Relief products</a> are created using supercritical CO2 extraction to ensure purity and potency. Our Hemp products are manufactured from organic industrial hemp plants, and utilize the finest natural ingredients to produce healthy and effective final products that are consistently pure and potent.</p>

                                    
                                </div>
                        </div>

                        <div class="aboutcontent-column why-choose" style="background:url(/wp-content/uploads/2021/06/new-image.jpg);background-position:center;background-size:cover;">
                                
                        </div>

                </div>
                <!-- End Row -->

             
	</section>
  
 
   
</main>

<?php get_footer(); ?>