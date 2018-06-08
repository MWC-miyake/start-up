<?php
/***********************************************************
* 抜粋文字数制限
***********************************************************/
function show_limit_excerpt($limit = 40) { 
  global $post;
  $excerpt = get_the_excerpt( $post->ID );
  
  if( mb_strlen( $excerpt ) > $limit) {
    $excerpt= mb_substr( $excerpt , 0 , $limit ) ;
    $show_excerpt = $excerpt. ･･･ ;
  } else {
    $show_excerpt = $excerpt;
  }

  echo $show_excerpt;
}