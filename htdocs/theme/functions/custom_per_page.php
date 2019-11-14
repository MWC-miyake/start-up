<?php
/**
* 各カスタム投稿ごとにper pageの値を変更
*/
add_filter( 'parse_query', 'custom_per_page' );
function custom_per_page( $query ) {
  if ( is_admin() || is_singular() ) { // 管理画面とsingleは除く
    return false;
  }

  if ( get_query_var( 'post_type' ) == 'modelhouse' ) {
      $query->set( 'posts_per_page', '-1' );
  }
  if ( get_query_var( 'post_type' ) == 'life' ) {
    $query->set( 'posts_per_page', '-1' );
  }
  if ( get_query_var( 'post_type' ) == 'works' ) {
    $query->set( 'posts_per_page', '20' );
  }
}