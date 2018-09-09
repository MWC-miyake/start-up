$(function(){
  /*
  * Smooth Scroll
  */
  const headInner = $("#headInner");
  // const headerHight = 0;
  const headerHight = headInner.innerHeight();
	$('a[href^="#"]:not(".noScroll")').click(function(){
		const speed = 500;
		const href= $(this).attr("href");
		const target = $(href == "#" || href == "" ? 'html' : href);
		// var position = target.offset().top;
		const position = target.offset().top - headerHight; 
		$("html, body").animate({ scrollTop:position }, speed, "swing");
		return false;
  });
  
  /*
  * Responsive Img (img add "_sp")
  */
  $(".spChange").each(function(){
    const break_point = 640; //set break point
    
    const img_url = $(this).attr("src");
    const img_sp = img_url.replace(/^(.+)(\.[a-z]+)$/, "$1_sp$2");
    
    $(this).wrap('<picture>').before('<source media="(max-width: '+ break_point +'px)" srcset="'+ img_sp +'">');
  });
  
  if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
    $('meta[name="viewport"]').attr('content','target-densitydpi=device-dpi, width=1080,maximum-scale=1.0,user-scalable=yes')
  }
  
  /*
  * MW WP Form
  */
 $('.mw_wp_form_input input[name="tel"]').attr('type','tel');

  /*
  * Menu and Header
  */
  const menuBtn = $("#menuBtn");
  const gNavi = $("#gNavi");
  const gNaviAnker = $("#gNavi a");
  const header = $("#header");

  menuBtn.on("click",function(){
    $(this).toggleClass("is-active");
    gNavi.slideToggle(300);
  });
  gNaviAnker.on("click",function(){
    menuBtn.removeClass("is-active");
    gNavi.slideUp(300);
  });

  const navHeight = header.height();

  $(window).on("scroll", function() {
    if ($(this).scrollTop() > navHeight) {
      headInner.addClass("is-scroll");
    } else {
      headInner.removeClass("is-scroll");
    }
  });

  /*
  * Slider
  */
  $("#tlSlider").slick({
    slidesToShow: 5
  });

});
