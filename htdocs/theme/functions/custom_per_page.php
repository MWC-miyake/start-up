<?php
/**
* 各カスタム投稿のごとにarchiveでのper pageの値を変更
*/
add_filter( 'parse_query', 'custom_per_page' );
function custom_per_page( $query ) {
  if ( is_admin() || is_singular() || !is_main_query() ) { // 管理画面とsingleとメインループじゃない部分は除く
    return false;
  }

  if ( get_query_var( 'post_type' ) == 'event' ) {
      $query->set( 'posts_per_page', '1' );
  }

  if ( get_query_var( 'post_type' ) == 'blog' ) {
    $query->set( 'posts_per_page', '1' );
  }
}