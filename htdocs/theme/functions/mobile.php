<?php
/***********************************************************
* is_mobile()関数の定義　PC/タブレット or スマホの分岐ができる。
* wp_is_mobile()は、PC or タブレット/スマホ
***********************************************************/
function is_mobile(){
$useragents = array(
  'iPhone', // iPhone
  'iPod', // iPod touch
  'Android.*Mobile', // 1.5+ Android *** Only mobile
  'Windows.*Phone', // *** Windows Phone
  'dream', // Pre 1.5 Android
  'CUPCAKE', // 1.5+ Android
  'blackberry9500', // Storm
  'blackberry9530', // Storm
  'blackberry9520', // Storm v2
  'blackberry9550', // Storm v2
  'blackberry9800', // Torch
  'webOS', // Palm Pre Experimental
  'incognito', // Other iPhone browser
  'webmate' // Other iPhone browser
);
$pattern = '/'.implode('|', $useragents).'/i';
return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}