<?php
/***********************************************************
* いろんなページのサムネイル表示
* 引数を入れないと動かない
* show_thumbnail( 'archive' )
***********************************************************/
function show_thumbnail( $tmp = null ) {
  global $post;
  
  if( !has_post_thumbnail() ) {
    return false;
  }
  
  if( $tmp == 'archive' ) { // 投稿一覧ページ
    echo '<div class="thumb"><a href="' .get_permalink(). '">' .get_the_post_thumbnail( $post->ID , 'list-thumbnail' ). '</a></div>';
  } else {
    return false;
  }

}