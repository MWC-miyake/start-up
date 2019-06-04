'use strict';

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
  const headerHight = 0;
  // const headInner = $("#headInner");
  // const headerHight = headInner.innerHeight();
	$('a[href^="#"]').click(function(){
		const speed = 500;
		const href= $(this).attr("href");
		const target = $(href == "#" || href == "" ? 'html' : href);
		const position = target.offset().top - headerHight;
		$("html, body").animate({ scrollTop:position }, speed, "swing");
		return false;
  });
}

/*
 * MW WP Form
 */
function changeTypeTel() {
  $('.mw_wp_form_input input[name="tel"]').attr('type','tel');
}