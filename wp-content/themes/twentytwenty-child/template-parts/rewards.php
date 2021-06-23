<?php
/**
 * Template Name: Rewards Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<!--- Template Parts > rewards.php -->
<main id="main" class="rewards-page">

  <?php global $current_user; wp_get_current_user(); ?>
  
  <?php if( have_rows('banner_group')) : 
    $banner = get_field('banner_group');
  ?>
  <section class="section hero pos-rel anim fade up slow">
    <div class="w-100 fs-0 bg-snow">
      <?php if (isset($banner['banner_image_desktop']) || isset($banner['banner_image_mobile'])) : ?>
      <picture>
        <source media="(min-width:1025px)" srcset="<?php echo $banner['banner_image_desktop']['url'] ?>">
        <source media="(max-width:1024px)" srcset="<?php echo $banner['banner_image_mobile']['url'] ?>">
        <img class="w-100" src="<?php echo $banner['banner_image_desktop']['url'] ?>" />
      </picture>
      <?php endif; ?>
    </div>
    <div class="pos-abs w-100 h-100 pos-t md:w-100 md:h-1/2 md:pos-t-1/2">
      <div class="pos-rel w-1/2 v-center text-center md:w-100">
        <?php if (isset($banner['title']) || isset($banner['subtitle'])) : ?>
        <h2 class="section-title text-upper"><?php echo $banner['subtitle'] ?><br><span class="section-title-em"><?php echo $banner['title'] ?></span></h2>
        <?php endif; ?>
        <?php if (isset($banner['text'])) : ?>
        <p class="section-subtitle"><i><?php echo $banner['text'] ?></i></p>
        <?php endif; ?>
        
        <div class="section-action">
          <?php if ( !is_user_logged_in() ) : ?>
            <?php if (isset($banner['button_1_link']) && isset($banner['button_1_label'])) : ?>
            <a href="<?php echo $banner['button_1_link'] ?>" class="btn anim fade left" role="button"><?php echo $banner['button_1_label'] ?></a>
            <?php endif; ?>
            <?php if (isset($banner['button_2_link']) && isset($banner['button_2_label'])) : ?>
            <a href="<?php echo $banner['button_2_link'] ?>" class="btn anim fade right" role="button"><?php echo $banner['button_2_label'] ?></a>
            <?php endif; ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ( is_user_logged_in() ) : ?>
    <section class="section balance hidden">
      <div class="w-1/2 mx-auto text-center md:w-100">
        <h2 class="section-title text-upper">Hi, <?php echo $current_user->user_login ?>, <br>You Have <span class="point-balance">0</span> Points</h2>
        <div class="section-action">
          <a href="/cart" class="btn anim fade left slow" role="button">Redeem Now</a>
          <!-- <a href="#" class="btn anim fade left slow" role="button">Rewards History</a> -->
          <a class="swell-history-link btn anim fade left slow" href="javascript:void(0)">Rewards History</a>
        </div>
      </div>
    </section>
  <?php endif; ?>


  
  <div class="referral-link-wrapper text-center">

  <br /><p>Share By Link:<br /><a href="" class="referral-link"></a></p>

  </div>

  <?php if (have_rows('hiw_group')) :
    $hiw = get_field('hiw_group');
  ?>
  <section class="section hiw text-center">
    <h2 class="section-title text-upper anim fade up"><?php echo $hiw['title'] ?></h2>
    <div class="container f f-a-i-center f-wrap">
      <div class="w-1/4 md:w-100 md:order-1">
        <?php if (isset($hiw['steps'][0])): ?>
        <div class="hiw-widget <?php echo $hiw['steps'][0]['step_type'] ?> anim fade left">
          <h3 class="hiw-widget-title"><?php echo $hiw['steps'][0]['step_title'] ?></h3>
          <p class="m-0"><?php echo $hiw['steps'][0]['step_text'] ?></p>
        </div>
        <?php endif; ?>
      </div>
      <div class="w-1/2 md:w-100 md:order-0">
        <?php if (isset($hiw['image'])): ?>
        <img class="w-100 anim fade center" src="<?php echo $hiw['image']['url'] ?>" />
        <?php endif; ?>
      </div>
      <div class="w-1/4 f f-col f-j-c-around md:w-100 md:order-2">
        <?php if (isset($hiw['steps'][1])): ?>
        <div class="hiw-widget <?php echo $hiw['steps'][1]['step_type'] ?> anim fade right">
          <h3 class="hiw-widget-title"><?php echo $hiw['steps'][1]['step_title'] ?></h3>
          <p class="m-0"><?php echo $hiw['steps'][1]['step_text'] ?></p>
        </div>
        <?php endif; ?>
        <?php if (isset($hiw['steps'][2])): ?>
        <div class="hiw-widget <?php echo $hiw['steps'][2]['step_type'] ?> anim fade right">
          <h3 class="hiw-widget-title"><?php echo $hiw['steps'][2]['step_title'] ?></h3>
          <p class="m-0"><?php echo $hiw['steps'][2]['step_text'] ?></p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if (have_rows('features_group')) :
    $features = get_field('features_group');
  ?>
  <section class="section point text-center">
    <?php if (isset($features['title'])) : ?>
    <h2 class="section-title text-upper anim fade down"><?php echo $features['title'] ?></h2>
    <?php endif; ?>
    <?php if (isset($features['subtitle'])) : ?>
    <p class="section-subtitle text-center"><?php echo $features['subtitle'] ?></p>
    <?php endif; ?>
    <div class="f f-wrap bg-surface">
      <?php foreach ($features['features'] as $i => $feature): 
        $dir = 'down';
        if ($i < 4) $dir = 'up';
        if ($i % 4 == 0) $dir = 'left';
        if ($i % 4 == 3) $dir = 'right';
        $border = 'br';
        if ($i % 4 == 3) $border = str_replace('r', '', $border);
        if ($i >= 4) $border = str_replace('b', '', $border);
        $border = 'border-' . $border;
      ?>
      <div class="w-1/4 md:w-1/2">
        <div class="point-card <?php echo $border ?> anim fade <?php echo $dir ?>">
          <div class="point-card-icon">
            <?php if (isset($feature['feature_icon'])) : ?>
            <img src="<?php echo $feature['feature_icon'] ?>" />
            <?php endif; ?>
            <?php if (isset($feature['feature_svg'])) echo $feature['feature_svg'] ?>
          </div>
          <?php if (isset($feature['feature_title'])) : ?>
          <h4 class="point-card-title"><?php echo $feature['feature_title'] ?></h4>
          <?php endif; ?>
          <?php if (isset($feature['feature_text'])) : ?>
          <p class="point-card-subtitle"><?php echo $feature['feature_text'] ?></p>
          <?php endif; ?>
          <?php if (isset($feature['feature_action_label']) && isset($feature['feature_action_link'])) : ?>
          <a href="<?php echo $feature['feature_action_link'] ?>" class="point-card-action"><?php echo $feature['feature_action_label'] ?></a>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>

  <?php if (have_rows('vip_features_group')) :
    $vip_features = get_field('vip_features_group');
  ?>
  <section class="section vips">
    <?php if (isset($vip_features['title'])) : ?>
    <h2 class="section-title text-center text-upper"><?php echo $vip_features['title'] ?></h2>
    <?php endif; ?>
    <?php if (isset($vip_features['subtitle'])) : ?>
    <p class="section-subtitle text-center"><?php echo $vip_features['subtitle'] ?></p>
    <?php endif; ?>
    <div class="vips-carousel">
      <?php foreach ($vip_features['vip_types'] as $type): ?>
        <img src="<?php echo $type['image']['url'] ?>" />
      <?php endforeach; ?>
    </div>
    <div class="bg-surface">
      <div class="container xl f f-a-i-center f-wrap">
        <div class="vips-text w-2/5 border-r md:w-100 md:border-b text-center anim fade left">
          <div class="vips-text-wrapper inline-block text-left md:text-center">
            <?php if (isset($vip_features['redeem_title'])) : ?>
            <h3 class="vips-text-title text-upper"><i>REDEEM FOR DISCOUNTS</i></h3>
            <?php endif; ?>
            <?php if (isset($vip_features['redeem_text'])) : ?>
            <p>Redeeming your hard-earned points is easy!<br>Simply apply your points for a discount in your cart!</p>
            <?php endif; ?>
            <?php if (isset($vip_features['redeem_formula'])) : ?>
            <h4 class="vips-text-subtitle"><i>Every 100 Points = $10</i></h4>
            <?php endif; ?>
          </div>
        </div>
        <div class="vips-examples w-3/5 f f-a-i-center f-wrap md:w-100 anim fade right">
          <?php foreach ($vip_features['redeem_features'] as $i => $feature): 
            $border = 'border-r md:border-b';
            if ($i == count($vip_features['redeem_features']) - 1) $border = '';
          ?>
          <div class="vips-example <?php echo $border ?>">
            <?php if (isset($feature['redeem_feature_off'])) : ?>
            <h3 class="vips-example-title"><i><?php echo $feature['redeem_feature_off'] ?></i></h3>
            <?php endif; ?>
            <?php if (isset($feature['redeem_feature_points'])) : ?>
            <h5 class="vips-example-subtitle"><i><?php echo $feature['redeem_feature_points'] ?></i></h5>
            <?php endif; ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>



  
  <?php endif; ?>
</main>

<?php
get_footer();