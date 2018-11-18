<?php
/***********************************************************
* NEWS LIST
***********************************************************/
function show_news_list() {
  global $post;
  $wp_query = new WP_Query();
  $param = array(
    'posts_per_page' => '5',
    'post_type' => 'post'
  );
  $wp_query -> query( $param );
  $html = '<ul class="modListNews">';

  if( $wp_query -> have_posts() ){
    while( $wp_query -> have_posts() ) {
      $wp_query -> the_post();

      // カスタムフィールド呼び出し
      $news_link = get_field('acf_news_link', $post->ID );
      $news_check = get_field('acf_news_check', $post->ID );

      if ( $news_check ) {
        $blank = ' target="_blank"';
      } else {
        $blank = '';
      }
      if ( $news_link ) {
        $a_head = '<a href="' .$news_link. '"' .$blank. '>';
        $a_foot = '</a>';
      } else {
        $a_head = '';
        $a_foot = '';
      }

      // 出力部分
      $html .= '<li' .get_my_new(30). '>';
      $html .= '<p class="date">' .get_the_time('Y.m.j'). '</p>';
      $html .= '<p class="txt">' .$a_head.get_the_title().$a_foot. '</p>';
      $html .= '</li>';
    }
  } else {
    $html .= '<li><p class="txt">現在、お知らせはありません。</p></li>';
  }
  $html .= '</ul>';

  wp_reset_query();

  echo $html;
}