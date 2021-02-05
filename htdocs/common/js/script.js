$(function(){
  // When Document Ready
  smoothScroll();
});
$(window).on('load',function(){
  // When Window Load
});

/*
 * Smooth Scroll
 */
function smoothScroll() {
  // var headerHeight = 0;
  var headerHeight = $('#header').outerHeight();

  var urlHash = location.hash;
  if(urlHash) {
      $('body,html').stop().scrollTop(0);
      setTimeout(function(){
          var target = $(urlHash);
          var position = target.offset().top - headerHeight;
          $('body,html').stop().animate({scrollTop:position}, 200);
      }, 100);
  }
  $('[href^="#"]' + '[href!="#"]').click(function() {
      var href= $(this).attr("href");
      var target = $(href);
      var position = target.offset().top - headerHeight;
      $('body,html').stop().animate({scrollTop:position}, 500);
  });
	return false;
}

/*
 * Go Top
 */
function goTop() {
  var topBtn = $('#goTop');
  topBtn.hide();

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }

    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop();
    footHeight = $(".footerBottom").innerHeight();
    if ( scrollHeight - scrollPosition  <= footHeight ) {
      topBtn.css({
        "position":"absolute",
        "bottom": footHeight + 65
      });
    } else {
      topBtn.css({
      "position":"fixed",
      "bottom": "20px"
    });
    }

  });
}

/*
 * MW WP Form
 */
function changeTypeTel() {
  $('.mw_wp_form_input input[name="tel"]').attr('type', 'tel');
  // $('.mw_wp_form_input input[name="title"],.mw_wp_form_input input[name="area"],.mw_wp_form_input input[name="date"]').attr('readonly',true);
}

/*
* Menu
*/
function menu() {
  $('.menu').on('click', function () {
    $(this).toggleClass('is-close');
    $('.globalNavi__wrapper').fadeToggle(300);
  });
  $('.globalNavi__wrapper a').on('click', function () {
    $('.menu').removeClass('is-close');
    $('.globalNavi__wrapper').fadeOut(300);
  });
}

/*
* Animation
*/
function animation() {
  let windowHeight = $(window).height();

  $(window).on('load scroll', function () {
    let scrollTop = $(this).scrollTop();

    $('.ani-start-scroll').each(function () {
      let targetTop = $(this).offset().top;

      if (scrollTop > targetTop - windowHeight / 1.5) {
        $(this).addClass('is-active');
      }
    });
  });
}