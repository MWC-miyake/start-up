<?php
/**
* 抜粋文字数制限
*/
function limit_excerpt($limit = 40) { 
  global $post;
  $excerpt = get_the_excerpt( $post->ID );
  
  if( mb_strlen( $excerpt ) > $limit) {
    $excerpt= mb_substr( $excerpt , 0 , $limit ) ;
    $show_excerpt = $excerpt. '…' ;
  } else {
    $show_excerpt = $excerpt;
  }

  return $show_excerpt;
}

/**
* エディタがなく、カスタムフィールドで文章を作っている場合
*/
function limit_custom_excerpt($limit = 40) {
  if( have_rows('content') ){
    while ( have_rows('content') ){
      the_row();

      if( get_row_layout() == 'content_text' ) {
        $excerpt = get_sub_field('content_text_text');
        $excerpt = strip_tags( $excerpt ); // タグ除去
        break;
      }
    }
  }

  if( $excerpt && mb_strlen( $excerpt ) > $limit) {
    $excerpt= mb_substr( $excerpt , 0 , $limit ) ;
    $show_excerpt = $excerpt. '…' ;
  } else {
    $show_excerpt = $excerpt;
  }

  return $show_excerpt;
}