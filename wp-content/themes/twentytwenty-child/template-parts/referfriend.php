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
      <?php if (isset($send['title'])) : ?>
        <h2 class="section-title text-center text-upper"><?php echo $send['title'] ?></h2>
      <?php endif; ?>
      <?php if (isset($send['subtitle'])) : ?>
        <p class="section-subtitle text-center"><?php echo $send['subtitle'] ?></p>
      <?php endif; ?>
      <div class="hidden referral-link-wrapper text-center">
        <p>Your Referral Link: <a href="" class="referral-link"></a></p>
      </div>
      <div class="hidden referral-message text-center"></div>
      <?php if (isset($send['send_form_content'])) : ?>
        <div class="send-request">
          <?php if (isset($send['send_form_title'])) : ?>
            <p class="send-request-title text-center"><?php echo $send['send_form_title'] ?></p>
          <?php endif; ?>
          <?php echo $send['send_form_content'] ?>
        </div>
      <?php endif; ?>
      <?php if (isset($send['share_content'])) : ?>
        <div class="share">
          <?php if (isset($send['share_title'])) : ?>
            <p class="share-title text-center"><?php echo $send['share_title'] ?></p>
          <?php endif; ?>
        </div>
        <?php echo $send['share_content'] ?>
      <?php endif; ?>
    </div></section>
  <?php endif; ?>


  <?php if (have_rows('check_balance_group')) : 
    $check = get_field('check_balance_group');
  ?>
    <hr class="container" />

    <section class="section container check"><div class="section-body">
      <?php if (isset($check['title'])) : ?>
        <p class="text-underline text-center"><?php echo $check['title'] ?></p>
      <?php endif; ?>
      <?php if (isset($check['referral_content'])) : ?>
        <div class="referral">
          <?php if (isset($check['referral_title'])) : ?>
          <h2 class="referral-title text-center text-upper"><i><?php echo $check['referral_title'] ?></i></h2>
          <?php endif; ?>
          <?php echo $check['referral_content'] ?>
        </div>
      <?php endif; ?>
      <div class="redeem text-center">
        <?php if (isset($check['redeem_title'])) : ?>
          <h2 class="redeem-title text-center text-upper"><i><?php echo $check['redeem_title'] ?></i></h2>
        <?php endif; ?>
        <?php if (isset($check['redeem_subtitle'])) : ?>
          <p class="text-center"><?php echo $check['redeem_subtitle'] ?></p>
        <?php endif; ?>
        <?php if (isset($check['redeem_button_label']) && isset($check['redeem_button_link'])) : ?>
          <a href="<?php echo $check['redeem_button_link'] ?>" class="btn text-center anim fade left" role="button"><?php echo $check['redeem_button_label'] ?></a>
        <?php endif; ?>
      </div>
    </div></section>
  <?php endif; ?>

</main>

<?php
get_footer();