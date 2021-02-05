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

/**
* 柔軟コンテンツの場合
* 中身はカスタムフィールドの構造により適宜修正すること
*/
function get_contentfield_img( $size = NULL ) {
  $thumb = '';
  $thumb_arr = [];

  // カスタムフィールドから内容を取得する処理
  if( have_rows('blog_content') ){
    while ( have_rows('blog_content') ){
      the_row();

      if( get_row_layout() == 'blog_content_img' ) {
        $thumb = get_sub_field( 'blog_content_img_img' );

        if( !$thumb ) {
          $thumb = '';
        } elseif( $size ) {
          $thumb = $thumb['sizes'][$size];
        } else {
          $thumb = $thumb['url'];
        }

        $thumb_arr[] = $thumb;
      }
    }
  }

  return $thumb_arr[0];
}