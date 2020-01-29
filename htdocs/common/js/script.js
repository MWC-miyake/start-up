$(function(){
  // When Document Ready
  smoothScroll();
  changeTypeTel();
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
  if ($(window).width() < 750) {
    headerHeight = $('.headerSp').outerHeight();
  }
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
 * MW WP Form
 */
function changeTypeTel() {
  $('.mw_wp_form_input input[name="tel"]').attr('type','tel');
}