<?php

add_action( 'wp_enqueue_scripts', 'pr_parent_styles' );
function pr_parent_styles() {
    wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri().'/slick.css' );
    wp_enqueue_style( 'magnific-popup-style', get_stylesheet_directory_uri().'/magnific-popup.css' );
 	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}


add_filter( 'woocommerce_loop_add_to_cart_link', 'misha_before_after_btn', 10, 3 );
function misha_before_after_btn( $add_to_cart_html, $product, $args ){
	
	$url = $product->get_permalink();

	$before = ''; // Some text or HTML here
	//$after = '<a class="prod-viewmore" href="' . $url . '">Product Details</a>'; // Add some text or HTML here as well

	return $before . $add_to_cart_html . $after;
}



add_filter('woocommerce_get_availability_text', 'themeprefix_change_soldout', 10, 2 );

	/**
	* Change Sold Out Text to Something Else
	*/
	function themeprefix_change_soldout ( $text, $product) {
	if ( !$product->is_in_stock() ) {
	$text = '<div class="soldouttext">Currently <span>SOLD OUT</span> - ETA 1-2 weeks</div>';
	}
	return $text;
}





if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Header & Footer Logo',
		'menu_title'	=> 'Header & Footer Logo',
		'menu_slug' 	=> 'theme-header-footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Social Menu',
		'menu_title'	=> 'Social Menu',
		'menu_slug' 	=> 'theme-social-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Announcement Bar',
		'menu_title'	=> 'Announcement Bar',
		'menu_slug' 	=> 'theme-banner-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Footer Options',
		'menu_title'	=> 'Footer Options',
		'menu_slug' 	=> 'theme-footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


/* Upload SVG Files */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');



//Add Redeem CTA to cart page

add_action('woocommerce_cart_collaterals', 'debounce_add_jscript_checkout');

function debounce_add_jscript_checkout()
{
    ?>

<div id="cartredeemcta">
  	<div class="elementor-column-wrap  elementor-element-populated">
    	<div class="elementor-widget-wrap">
	      	<div class="elementor-element elementor-element-4ef6b9e9 elementor-widget elementor-widget-heading"
		        data-id="4ef6b9e9" data-element_type="widget" data-widget_type="heading.default">
		        <div class="elementor-widget-container">
		          	<h1 class="elementor-heading-title elementor-size-default">redeem for discounts</h1>
		        </div>
      		</div>
	      	<div class="elementor-element elementor-element-b961cdc elementor-widget elementor-widget-text-editor"
	        data-id="b961cdc" data-element_type="widget" data-widget_type="text-editor.default">
	        	<div class="elementor-widget-container">
	          		<div class="elementor-text-editor elementor-clearfix">Redeeming your hard-earned points is easy!<br>
	            		Simply apply your points for a discount at checkout!
	            	</div>
	        	</div>
	      	</div>
      		<div class="elementor-element elementor-element-194ebfcc elementor-widget elementor-widget-heading" data-id="194ebfcc" data-element_type="widget" data-widget_type="heading.default">
        		<div class="elementor-widget-container">
          			<h1 class="elementor-heading-title elementor-size-default">Every 100 Points = $10</h1>
        		</div>
      		</div>
	      	<div class="elementor-element elementor-element-57acf06 elementor-widget elementor-widget-divider"
	        data-id="57acf06" data-element_type="widget" data-widget_type="divider.default">
		        <div class="elementor-widget-container">
		          	<div class="elementor-divider">
		            	<span class="elementor-divider-separator"></span>
		          	</div>
		        </div>
	      	</div>
	      	<div class="elementor-element elementor-element-2b1651e elementor-widget elementor-widget-html" data-id="2b1651e"
	        data-element_type="widget" data-widget_type="html.default">
	        	<div class="elementor-widget-container">
	          		<ul class="rewardsfooter">
	            		<li>
			              	<h1> $10 off</h1>
			              	<span>100 Points</span>
	            		</li>
						<li>
	              			<h1> $15 off</h1>
	              			<span>150 Points</span>
	            		</li>
						<li>
	              			<h1> $20 off</h1>
	              			<span>200 Points</span>
	            		</li>
		          	</ul>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

<?php
}

// Add Redeem X Points before chart shipping
add_action('woocommerce_cart_totals_before_shipping', 'redeem_checkout');
function redeem_checkout()
{
    ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
	$(document).on("swell:setup", function() {
	  	// default option template
	  	if($('#redemption-options option').length == 1){
	  		swellAPI.populateSelectWithRedemptionOptions("select#redemption-options");
	  		$("#point-Total").html(swellAPI.getCustomerDetails().pointsBalance);
	  	}

	  // depending on your cart/checkout markup the selectors will need to be updated
	})

  $(document.body).on('updated_wc_div', function() {
    if ($('#redemption-options option').length == 1) {
      swellAPI.populateSelectWithRedemptionOptions("select#redemption-options");
      $("#point-Total").html(swellAPI.getCustomerDetails().pointsBalance);
    }
  });

	function applyReward() {
	  	var fillAndSubmitCouponCodeForm = function(couponCode) {
	    	// set the value for the coupon code input
	    	$("#coupon_code").val(couponCode);

	    	// trigger a click on the submit button
	    	$('button[name="apply_coupon"]').click();
	  	};

	  	var redemptionOptionSelect = $("#redemption-options");

	  	var onSuccess = function(redemption) {
	    	fillAndSubmitCouponCodeForm(redemption.couponCode);
	  	};
	  	var onError = function(err) {
	    	console.log(err);
	    	alert("You do not have enough points to redeem this option.");
	  	};

	  	swellAPI.makeRedemption(
	  		{
	      		redemptionOptionId: redemptionOptionSelect.val(),
	      		delayPointDeduction: true
	    	},
	    	onSuccess,
	    	onError
	  	);
	}
	</script>

<?php if (is_user_logged_in()): ?>
	<div class="redeemcart">
		<h4>Redeem Points</h4>
	  	<label>You have <span id='point-Total'>0</span> points</label>
	  	<select id='redemption-options'>
	    	<option value="">Choose Your Reward</option>
	  	</select>
	  	<button onClick='applyReward()'>Redeem</button>
	</div>
<?php else: ?>

	<a class="btn" href="/my-account">Login to Redeem Points</a>

<?php endif ?>


<?php
}


// Remove the Downloads Link in My Account
add_filter ( 'woocommerce_account_menu_items', 'misha_remove_my_account_links' );
function misha_remove_my_account_links( $menu_links ){
	
	//unset( $menu_links['edit-address'] ); // Addresses
	//unset( $menu_links['dashboard'] ); // Remove Dashboard
	//unset( $menu_links['payment-methods'] ); // Remove Payment Methods
	//unset( $menu_links['orders'] ); // Remove Orders
	unset( $menu_links['downloads'] ); // Disable Downloads
	//unset( $menu_links['edit-account'] ); // Remove Account details tab
	//unset( $menu_links['customer-logout'] ); // Remove Logout link
	
	return $menu_links;
}
// Email tracking on thank you order page
add_action( 'woocommerce_thankyou', 'getEmail_tracking_thank_you_page' );
function getEmail_tracking_thank_you_page($order_id) {
    $order = new WC_Order( $order_id );
    $orderId = $order->get_order_number();
    $order_amount = $order->get_total();
?>
<script>geq.trackOrder({ order_number: "<?php echo $orderId ?>", order_amount: "<?php echo $order_amount ?>" })</script>
<?php
}

// Add track my order button on my account menu
add_filter ( 'woocommerce_account_menu_items', 'woocommerce_myaccount_custom_link' );
function woocommerce_myaccount_custom_link( $menu_links ){
    $new = array( 'custom_tracking_order_link' => 'Track My Order' );
    $menu_links = array_slice( $menu_links, 0, 1, true )
        + $new
        + array_slice( $menu_links, 1, NULL, true );
    return $menu_links;
}
add_filter( 'woocommerce_get_endpoint_url', 'woocommerce_myaccount_custom_hook_endpoint', 10, 4 );
function woocommerce_myaccount_custom_hook_endpoint( $url, $endpoint, $value, $permalink ){
    if( $endpoint === 'custom_tracking_order_link' ) {
        $url = 'https://trackmyorder.purerelief.com/';
    }
    return $url;
}


// Add track referrals button on my account menu
add_filter ( 'woocommerce_account_menu_items', 'woocommerce_myaccount_referrals' );
function woocommerce_myaccount_referrals( $menu_links ){
    $new = array( 'custom_tracking_order_link2' => 'Points & Rewards' );
    $menu_links = array_slice( $menu_links, 0, 1, true )
        + $new
        + array_slice( $menu_links, 1, NULL, true );
    return $menu_links;
}
add_filter( 'woocommerce_get_endpoint_url', 'woocommerce_referrals_custom_hook_endpoint', 11, 5 );
function woocommerce_referrals_custom_hook_endpoint( $url, $endpoint, $value, $permalink ){
    if( $endpoint === 'custom_tracking_order_link2' ) {
        $url = '/rewards/';
    }
    return $url;
}

// Add track referrals button on my account menu
add_filter ( 'woocommerce_account_menu_items', 'woocommerce_myaccount_referrals2' );
function woocommerce_myaccount_referrals2( $menu_links ){
    $new = array( 'custom_tracking_order_link3' => 'Refer a Friend' );
    $menu_links = array_slice( $menu_links, 0, 1, true )
        + $new
        + array_slice( $menu_links, 1, NULL, true );
    return $menu_links;
}
add_filter( 'woocommerce_get_endpoint_url', 'woocommerce_referrals_custom_hook_endpoint2', 11, 5 );
function woocommerce_referrals_custom_hook_endpoint2( $url, $endpoint, $value, $permalink ){
    if( $endpoint === 'custom_tracking_order_link3' ) {
        $url = '/refer-a-friend/';
    }
    return $url;
}
// Add wishlist button on my account menu
add_filter ( 'woocommerce_account_menu_items', 'woocommerce_myaccount_referrals3' );
function woocommerce_myaccount_referrals3( $menu_links ){
    $new = array( 'custom_tracking_order_link4' => 'Wishlist' );
    $menu_links = array_slice( $menu_links, 0, 1, true )
        + $new
        + array_slice( $menu_links, 1, NULL, true );
    return $menu_links;
}
add_filter( 'woocommerce_get_endpoint_url', 'woocommerce_referrals_custom_hook_endpoint3', 12, 5 );
function woocommerce_referrals_custom_hook_endpoint3( $url, $endpoint, $value, $permalink ){
    if( $endpoint === 'custom_tracking_order_link4' ) {
        $url = '/wishlist/';
    }
    return $url;
}

// Add Open Lab Sheets button before Shop Now Button
add_filter('woocommerce_loop_add_to_cart_link', 'pl_before_after_btn', 10, 3);

function pl_before_after_btn($add_to_cart_html, $product, $args)
{
    //get the custom field object
    $images = get_field('lab_sheets_imgs', $product->get_id());
    if ($images) {
        //add a gallery like this <a data-fancy="link-to-image1.jpg,link-to-image2.jpg" href="#">Open Gallery</a>
        $before = '
  			<a data-fancy="' . implode(',', $images) . '" target="_blank" href="' . implode(',', $images) . '" id="myModal" class="btn modal" target="_blank" role="button">
  						
  						<span>Open Lab Sheets</span>
  					</a>
  		'; // Before button
    }

    $after = ''; // After button

    return $before . $add_to_cart_html . $after;
}