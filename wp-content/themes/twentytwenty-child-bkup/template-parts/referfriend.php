<?php
/**
 * Template Name: Refer a friend Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<!--- Template Parts > referafriend.php -->
<main id="main" class="refer-friend-page">

  <?php if (have_rows('banner_group')) : 
    $banner = get_field('banner_group');
  ?>
    <section class="section hero pos-rel anim fade up slow">
      <div class="w-100 fs-0 bg-snow">
        <?php if (isset($banner['banner_image']) || isset($banner['banner_image_mobile'])) : ?>
          <picture>
            <source media="(min-width:1025px)" srcset="<?php echo $banner['banner_image']['url'] ?>">
            <source media="(max-width:1024px)" srcset="<?php echo $banner['banner_image_mobile']['url'] ?>">
            <img class="w-100" src="<?php echo $banner['banner_image']['url'] ?>" />
          </picture>
        <?php endif; ?>
      </div>
      <div class="pos-abs w-100 h-100 pos-t md:w-100 md:h-1/2 md:pos-t-1/2">
        <div class="pos-rel w-1/2 v-center float-right text-center md:w-100">
          <?php if (isset($banner['banner_title'])) : ?>
            <h2 class="section-title text-upper"><i><?php echo $banner['banner_title'] ?></i></h2>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>


  <?php if (have_rows('send_request_group')) : 
    $send = get_field('send_request_group');
  ?>
    <section class="section container refer"><div class="section-body">
      
        
      

      <?php if (is_user_logged_in()): ?>

      

        <div class="referral-link-wrapper text-center">
          
        
    <section class="section balance">
      <div class="mx-auto text-center md:w-100">
        <h4 class="section-title text-upper">Hi, <?php echo $current_user->user_login ?>, <br>You Have <span class="point-balance">0</span> Points</h4>
        <div class="section-action">
          <a href="/cart" class="btn anim fade left slow" role="button">Redeem Now</a>
          <!-- <a href="#" class="btn anim fade left slow" role="button">Rewards History</a> -->
          <a class="swell-history-link btn anim fade left slow" href="javascript:void(0)">Rewards History</a>
        </div>
      </div>
    </section>
 
    <hr />

    <h2 class="section-title text-center text-upper"><?php echo $send['title'] ?></h2>
     
     
        <p class="section-subtitle text-center"><?php echo $send['subtitle'] ?></p>


        <br /><p>Share By Link:<br /><a href="" class="referral-link"></a></p>

        
      </div>


      <div class="hidden referral-message text-center"></div>
      
      <div class="send-request">
       
          <p class="send-request-title text-center">Share By Email<?php //echo $send['send_form_title'] ?></p>
       
        <?php echo $send['send_form_content'] ?>
      </div>
  
    
      <div class="share">
        
          <p class="share-title text-center"><?php echo $send['share_title'] ?></p>
        
      </div>
      <?php echo $send['share_content'] ?>


        <?php else: ?>

          <h2 class="section-title text-center text-upper"><?php echo $send['title'] ?></h2>
     
     
     <p class="section-subtitle text-center"><?php echo $send['subtitle'] ?></p>

        
           <div class="loggedout-referral">
             <p>
               Personal Referral Link * Share on Social Media<br />
               Start Earning Points * Points Tracker<br />
               Redeem Points towards purchases
            </p>
            <a href="/my-account/" class="btn">Create My Account</a>

          </div>

     <?php endif ?> 



      

      
  
    </div></section>
  <?php endif; ?>


  <?php $check = get_field('check_balance_group');
  ?>
    
 
  
      <?php if (is_user_logged_in()): ?>

        <hr class="container" />

        <section class="section container check">
            <div class="section-body">
          
              <p class="text-underline text-center"><?php //echo $check['title'] ?></p>
          
          
              <div class="referral">
                <?php if (isset($check['referral_title'])) : ?>
                <h2 class="referral-title text-center text-upper">
                  <i><?php echo $check['referral_title'] ?></i></h2>
                <?php endif; ?>
                <?php echo $check['referral_content'] ?>
              </div>
          </div>
        </section>
    <?php else: ?>
    <?php endif ?> 


 


      
   <section class="section container check">
      <div class="section-body">

      <div class="redeem text-center">
        
          <h2 class="redeem-title text-center text-upper"><i><?php echo $check['redeem_title'] ?></i></h2>
        
       
          
          <?php if (is_user_logged_in()): ?>
            <p class="text-center"><?php echo $check['redeem_subtitle'] ?></p>
        
        
               <a href="<?php echo $check['redeem_button_link'] ?>" class="btn text-center anim fade left" role="button"><?php echo $check['redeem_button_label'] ?></a>

          <?php else: ?>

            
            <p>Log-in to see Redeem Points on the cart page</p>
            <a href="/my-account/" class="btn text-center anim fade left" role="button">Login</a><br /><br />

            

          <?php endif ?> 



      </div>


    </div></section>

 

</main>

<?php
get_footer();