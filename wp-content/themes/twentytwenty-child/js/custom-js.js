jQuery(document).on('swell:setup', function () {
  var customerDetails = swellAPI.getCustomerDetails();

  let $reflinkWrapper = $('.referral-link-wrapper');
  if ($reflinkWrapper.length) {
    let refLink = customerDetails.referralLink;
    $reflinkWrapper.find('.referral-link').attr('href', refLink).html(refLink);
    $reflinkWrapper.removeClass('hidden');
  }

  var customerDetails2;

  jQuery.get('https://app.swellrewards.com/api/v2/customers?customer_email=' + customerDetails.email + '&with_referral_code=true&with_history=true&guid=XKnEIZ_Zv_EdmsvT3vl0KA&api_key=7rJyYF0UuEQ1T4mRddaXKgtt', function (data) {
    customerDetails2 = JSON.parse(data);

    let $section = $('.rewards-page .section.balance');
    if ($section.length == 1) {
      $section.find(".point-balance").html(customerDetails2.points_balance);
      $section.removeClass('hidden');
    }
    /* let $reflinkWrapper = $('.referral-link-wrapper');
    if ($reflinkWrapper.length) {
      let refLink = swellAPI.getCustomerDetails().referralLink;
      $reflinkWrapper.find('.referral-link').attr('href', refLink).html(refLink);
      $reflinkWrapper.removeClass('hidden');
    } */
    
  }, 'text');
});


$(document).ready(function () {

  /* let timer = setInterval(() => {
    // get points from swellapi
    if (typeof swellAPI !== 'undefined') {
      let $section = $('.rewards-page .section.balance');
      if ($section.length == 1) {
        $section.find(".point-balance").html(swellAPI.getCustomerDetails().pointsBalance);
        $section.removeClass('hidden');
      }
      clearInterval(timer);
    }
  }, 100); */

  
  $('.rewards-page .vips-carousel').length && $('.rewards-page .vips-carousel').slick({
    infinite: true,
    dots: false,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          dots: true,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          dots: true,
          slidesToShow: 1
        }
      }
    ]
  });

  $('.swell-copy-link').on("click", function() {
    let value = $('.referral-link').text(); //Upto this I am getting value
    let $message = $('.referral-message');

    let $temp = $("<input>");
    $("body").append($temp);
    $temp.val(value).select();
    document.execCommand("copy");
    $temp.remove();

    if ($message.length) {
      $message.text('Your referral link was copied!').addClass('success').removeClass('hidden').show();
      setTimeout(function () {
        $message.slideUp();
      }, 5000);
    }
  });

});


var ticking = false;

window.addEventListener('load', (event) => {
  processAnim(window.scrollY);
});

document.addEventListener('scroll', function(e) {
  lastKnownScrollPosition = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      processAnim(lastKnownScrollPosition);
      ticking = false;
    });
    ticking = true;
  }
});

function processAnim(scrollPos) {
  let elements = document.querySelectorAll('.anim');
  
  elements.forEach(el => {
    let top = offset(el).top;
    let threshold = scrollPos + window.innerHeight;
    if (el.classList.contains('up')) {
      threshold -= el.scrollHeight;
    }
    if (el.classList.contains('down')) {
      threshold += el.scrollHeight;
    }
    if (top < threshold) {
      el.classList.add('done');
    }
  });
}

function offset(el) {
  var rect = el.getBoundingClientRect(),
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}



// When the user scrolls the page, execute Sticky Header
window.onscroll = function() { stickyHeader() };

// Get the navbar
var navbar = document.getElementById("header-menu");
// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyHeader() {
  if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky")
    }
} 