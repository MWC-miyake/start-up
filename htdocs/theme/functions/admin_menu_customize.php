<?php
/***********************************************************
* 管理画面メニューのカスタマイズ
***********************************************************/
// 投稿をコラムに
function change_post_menu_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'コラム';
  $submenu['edit.php'][5][0] = 'コラム一覧';
}

function change_post_object_label() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'コラム';
  $labels->singular_name = 'コラム';
  $labels->add_new = _x('追加', 'コラム');
  $labels->add_new_item = '新規追加';
  $labels->edit_item = '編集';
  $labels->new_item = '新規コラム';
  $labels->view_item = 'コラムを表示';
  $labels->search_items = 'コラムを検索';
  $labels->not_found = '記事が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

// タグを非表示
function hide_taxonomy_from_menu() {
  global $wp_taxonomies;

  if ( !empty( $wp_taxonomies['post_tag']->object_type ) ) {
    foreach ( $wp_taxonomies['post_tag']->object_type as $i => $object_type ) {
      if ( $object_type == 'post' ) {
        unset( $wp_taxonomies['post_tag']->object_type[$i] );
      }
    }
  }
  return true;
}
add_action( 'init', 'hide_taxonomy_from_menu' );