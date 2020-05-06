<?php
/*【管理画面】ACF Options Page の設定 */
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'カレンダー用PDF', // ページタイトル
    'menu_title' => 'カレンダー用PDF', // メニュータイトル
    'menu_slug' => 'schedule-pdf', // メニュースラッグ
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}