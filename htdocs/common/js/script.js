$(function(){
  
  //Touch Event
  var _touch = ('ontouchstart' in document) ? 'touchstart' : 'click';
  
  //Smooth Scroll
  var headerHight = 0;
	// var headerHight = $('#headInner').height();
	$('a[href^="#"]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		//var position = target.offset().top;
		var position = target.offset().top-headerHight; 
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
  
  // Responsive Img (img add "_sp")
  $(".spChange").each(function(){
    var break_point = 640; //set break point
    
    var img_url = $(this).attr("src");
    var img_sp = img_url.replace(/^(.+)(\.[a-z]+)$/, "$1_sp$2");
    
    $(this).wrap('<picture>').before('<source media="(max-width: '+ break_point +'px)" srcset="'+ img_sp +'">');
  });
  
  // User Agent
  /*var ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
    // for SP
  } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
    // for TB
  } else {
    // for PC
  }
  
  if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
    $('meta[name="viewport"]').attr('content','target-densitydpi=device-dpi, width=1040,maximum-scale=1.0,user-scalable=yes')
  }*/
  
  //Auto Kana               
  /*$.fn.autoKana('#your-name', '#your-kana', {
    katakana : true  //true：katakana、false：hiragana
  });*/
  
});
