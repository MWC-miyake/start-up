$(function(){
  // When Document Ready
  $(document).on('click','[href^="#"]' + '[href!="#"]' ,scroll_func);
  $(document).on('click', '#pageTop', function () { scroll_func('top'); });
  
  changeTypeTel();
});
$(window).on('load',function(){
  // When Window Load
});

/*
 * Smooth Scroll
 */
var scroll_func = function (top) {
  var headerHeight = $('#header').outerHeight(); // 数値にしてもいい
  var speed = 500;
	if(top=="top"){
		$('html,body').scrollTop(800).stop().animate({ scrollTop: 0 }, speed,'swing');
	}else{
		$('html,body').animate({ scrollTop: $($(this).attr('href')).offset().top - headerHeight }, speed,'swing');
	}
	return false;
}

/*
 * MW WP Form
 */
function changeTypeTel() {
  $('.mw_wp_form_input input[name="tel"]').attr('type','tel');
}