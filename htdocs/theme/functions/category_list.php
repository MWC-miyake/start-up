<?php
/***********************************************************
* 一覧とか詳細にその記事のカテゴリーを表示させるやつ
* 引数に区切り文字を使用できる
* 例：show_category('/');
***********************************************************/
function show_category( $delimiter = null ) {
  $cats = get_the_category();
  $tmp = $cats;

  if( !$cats ) {
    return false;
  }
  
  foreach( $cats as $cat) {
    $cat_id = $cat->term_id;
    $cat_link = get_category_link( $cat_id );
    
    // 出力部分
    echo '<a href="' .$cat_link. '">' .$cat->name. '</a>';
    if( $delimiter && next($tmp) ) {
      echo $delimiter;
    }
  }
}

/***********************************************************
* タクソノミーバージョン
* 引数はタクソノミー、区切り文字
* 例：show_terms('cat_hoge', '/');
***********************************************************/
function show_terms( $taxonomy = null, $delimiter = null ) {
  global $post;
  $cats = get_the_terms( $post->ID, $taxonomy );
  $tmp = $cats;
  if( !$cats || !$taxonomy ) {
    return false;
  }
  
  foreach( $cats as $cat) {
    $cat_id = $cat->term_id;
    $cat_link = get_category_link( $cat_id );
    
    // 出力部分
    echo '<a href="' .$cat_link. '">' .$cat->name. '</a>';
    if( $delimiter && next($tmp) ) {
      echo $delimiter;
    }
  }
}