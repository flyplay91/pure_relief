<?php
/**
 * Template Name: Lab Results
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<!--- Template Parts > home.php -->

<main class="about-page labresults-page">

<!---- Start Static Homepage Hero -->
    <?php //get_template_part( 'template-parts/homepage-hero-style1' ); ?>
<!---- End Static Homepage Hero -->
    

    
        <section class="about-us">
            <div class="aboutus-whoispr__inner inner-section-1170">
                
                <h1>Pure Relief Lab Results</h1>
                <h2>
                    At Pure Relief, we are strongly committed to quality and transparency. That is why all our products are tested by a third-party laboratory to ensure we meet the highest standards for purity, safety, and overall quality. We encourage you to look through our lab results to see what makes us one of the most trusted CBD brands in the country.
                    </p>
                                
            </div>
    
            <div class="aboutus-whoispr__inner inner-section-1170">


             <!-- Tab links -->
<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'CBDOIL')">CBD Oils</button>
  <button class="tablinks" onclick="openCity(event, 'CBDTOPICALS')">CBD Topicals</button>
  <button class="tablinks" onclick="openCity(event, 'RAWHEMPFLOWER')">Raw Hemp Flower</button>
  <button class="tablinks" onclick="openCity(event, 'EDIBLES')">CBD Edibles</button>
</div>

<!-- Tab content -->
<div id="CBDOIL" class="tabcontent" style="display:block;">
<?php echo do_shortcode( '[products category="cbd-oils"]' );?>
</div>

<div id="CBDTOPICALS" class="tabcontent">
<?php echo do_shortcode( '[products category="cbd-topicals"]' );?>
</div>

<div id="RAWHEMPFLOWER" class="tabcontent">
<?php echo do_shortcode( '[products category="cbd-hemp-flower"]' );?>
</div> 

<div id="EDIBLES" class="tabcontent">
<?php echo do_shortcode( '[products category="cbd-edibles"]' );?>
</div> 

                     

            </div>
	</section>
  

   


 <script>
 function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} 
</script>
   
</main>

<?php get_footer(); ?>