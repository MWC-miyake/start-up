<?php
/***********************************************************
* サムネイルサイズの追加
***********************************************************/
add_image_size( 'full_window', 2000, 2000, false );
add_image_size( 'full_content', 1200, 1200, false );

add_image_size( 'top_works_thumb', 310, 200, true );

/***********************************************************
* いろんなページのサムネイル表示
* 引数を入れないと動かない
* get_my_thumbnail( 'archive' )
***********************************************************/
function get_my_thumbnail( $tmp = null ) {
  global $post;

  switch ( $tmp ) {
    case 'top_works':
      $works_thumb = get_field('acf_works_thumb', $post->ID );
      $works_thumb_url = wp_get_attachment_image_src($works_thumb, 'top_works_thumb');

      if( $works_thumb ) {
        $html = $works_thumb_url[0];
      }
      return $html;

      break;

    default:
      return false;
  }

}