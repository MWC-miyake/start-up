<?php
/**
* タイトル文字数制限
*/
function limit_title($limit = 20) {
  global $post;
  $title = $post->post_title;

  if( mb_strlen( $title ) > $limit) {
    $title= mb_substr( $title , 0 , $limit ) ;
    $show_title = $title. '…' ;
  } else {
    $show_title = $title;
  }

  return $show_title;
}