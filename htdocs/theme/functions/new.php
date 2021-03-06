<?php
/***********************************************************
* NEWマーク
* 引数にはマークを表示させたい日数を設定できる
* 例：get_my_new(14)
***********************************************************/
function get_my_new( $limit = 7 ) {
  $days = $limit;
  $today = date_i18n('U');
  $entry = get_the_time('U');
  $kiji = date('U',($today - $entry)) / 86400;

  // 出力部分
  if( $days > $kiji ){
    $html = ' class="new"';
  } else {
    $html = '';
  }
  return $html;
}