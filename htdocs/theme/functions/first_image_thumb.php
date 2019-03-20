<?php

/***********************************************************
* 最初の画像をサムネイルとして使う関数
***********************************************************/
function my_first_image_thumb(){
  global $post;
  $img_url = '';
  //デフォルト画像の設定
  $defaute_url = get_stylesheet_directory_uri(). '/images/default.png';

  //最初の画像を取得してIDを取得
  preg_match_all('/<img.+?class=".+?wp-image-(.+).*?".*?>/i', $post->post_content, $matches);
  if(isset($matches[1][0])){
    $img_id = ($matches[1][0]);
  }

  //最初の画像があれば分岐
  if(!empty($img_id)){
    //最初の画像IDからサムネイルのパスを取得してセット
    $img_url = my_wp_get_attachment_medium_url($img_id);
  } else {
    //最初の画像がない場合、デフォルト画像のパスをセット
    $img_url = $defaute_url;
  }
  return $img_url;
}

//画像IDからサムネイルサイズのパスを取得
function my_wp_get_attachment_medium_url( $id ) {
  $thumbnail_array = image_downsize( $id, 'thumbnail' );
  $thumbnail_path = $thumbnail_array[0];
  return $thumbnail_path;
}