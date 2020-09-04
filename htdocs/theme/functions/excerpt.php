<?php
/**
* 抜粋文字数制限
*/
function limit_excerpt( $limit = 40 ) {
  global $post;

  // 「抜粋」フィールドに内容があるかの判定
  $content = $post->post_excerpt;
  if( $content ) {
    $excerpt = $content;
  } else {
    $excerpt = get_the_content( $post->ID );
    $excerpt = strip_shortcodes( $excerpt );
    $excerpt = strip_tags( $excerpt );
    $excerpt = str_replace( '&nbsp;', '', $excerpt );
    $excerpt = preg_replace( '/\n+/', '', $excerpt);
  }

  // 設定文字数以上ならトリミング
  if( mb_strlen( $excerpt ) > $limit) {
    $excerpt = mb_substr( $excerpt , 0 , $limit ) ;
    $show_excerpt = $excerpt. '…' ;
  } else {
    $show_excerpt = $excerpt;
  }

  return $show_excerpt;
}

/**
* エディタがなく、カスタムフィールドで文章を作っている場合
* 中身はカスタムフィールドの構造により適宜修正すること
*/
function limit_custom_excerpt($limit = 40) {
  // カスタムフィールドから内容を取得する処理
  if( have_rows('content') ){
    while ( have_rows('content') ){
      the_row();

      if( get_row_layout() == 'content_text' ) {
        $excerpt = get_sub_field('content_text_text');
        $excerpt = strip_tags( $excerpt );
        $excerpt = str_replace( '&nbsp;', '', $excerpt );
        $excerpt = preg_replace( '/\n+/', '\n', $excerpt);
        break;
      }
    }
  }

  // 設定文字数以上ならトリミング
  if( $excerpt && mb_strlen( $excerpt ) > $limit) {
    $excerpt= mb_substr( $excerpt , 0 , $limit ) ;
    $show_excerpt = $excerpt. '…' ;
  } else {
    $show_excerpt = $excerpt;
  }

  return $show_excerpt;
}

/**
* カスタムフィールドからの抜粋
*/
function limit_field( $limit = 40, $field ) {

  if( $field ) {
    $excerpt = get_field( $field );
    if( $excerpt ) {
      $excerpt = strip_shortcodes( $excerpt );
      $excerpt = strip_tags( $excerpt );
      $excerpt = str_replace( '&nbsp;', '', $excerpt );
      $excerpt = preg_replace( '/\n+/', '', $excerpt);
    } else {
      return '';
    }
  } else {
    return '';
  }

  // 設定文字数以上ならトリミング
  if( mb_strlen( $excerpt ) > $limit) {
    $excerpt = mb_substr( $excerpt , 0 , $limit ) ;
    $show_excerpt = $excerpt. '…' ;
  } else {
    $show_excerpt = $excerpt;
  }

  return $show_excerpt;
}