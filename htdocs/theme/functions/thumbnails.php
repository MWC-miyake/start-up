<?php
/***********************************************************
* サムネイルサイズの追加
***********************************************************/
//add_image_size( 'list-thumbnail', 176, 100, true );

/***********************************************************
* いろんなページのサムネイル表示
* 引数を入れないと動かない
* show_thumbnail( 'archive' )
***********************************************************/
function show_thumbnail( $tmp = null ) {
  global $post;
  
  switch ( $tmp ) {
    case 'archive':
      if( has_post_thumbnail() ) {
        echo '<div class="articleList__thumb"><a href="' .get_permalink(). '" class="hoverImg">' .get_the_post_thumbnail( $post->ID , 'arhive-thumbnail' ). '</a></div>';
      } else {
        echo '<div class="articleList__thumb"><a href="' .get_permalink(). '" class="hoverImg"><img src="' .get_bloginfo('template_directory') .'/common/img/noimage/no_image-438x289.png" alt="NO IMAGE"/></a></div>';
      }
      break;
      
    default:
      return false;
  }

}