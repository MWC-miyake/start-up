<?php
/**
* Add Theme Supports
* WordPressのテーマ拡張機能の有効化
*/
add_filter('use_block_editor_for_post', '__return_false'); // Gtenbergの無効化
// add_theme_support('menus'); // メニュー機能
// add_theme_support('post-thumbnails'); // サムネイル機能


/**
* Include Functions
* いろんな関数を個々に読み込む
* いらないものは納品時に削除する
*/
get_template_part('functions/editor'); // エディターに関するカスタマイズ
// get_template_part('functions/menu'); //メニュー機能のカスタマイズ用
get_template_part('functions/mobile'); // スマホ分岐
get_template_part('functions/short_code'); // ショートコード集
get_template_part('functions/preview_add_acf'); // ACFの値もプレビューできるようにする
// get_template_part('functions/widgets'); // ウィジェットの設定
// get_template_part('functions/category_list'); // カテゴリー表示させたりする
// get_template_part('functions/new'); // Newマーク
// get_template_part('functions/news_list'); // NEWS一覧
// get_template_part('functions/pagenation'); // ページネーション
// get_template_part('functions/thumbnails'); // サムネイル表示用
// get_template_part('functions/title'); // タイトルの文字数制限
// get_template_part('functions/excerpt'); // 抜粋の文字数制限
// get_template_part('functions/body_class'); // bodyのclassの表示
// get_template_part('functions/comments'); // コメント欄の設定
// get_template_part('functions/admin_menu_customize'); // 管理画面メニューカスタマイズ
// get_template_part('functions/admin_css'); // 管理画面用CSS
// get_template_part('functions/pref_lists'); // ACFで都道府県を使うとき便利な関数たち
// get_template_part('functions/show_id'); // 投稿一覧IDを表示させる
// get_template_part('functions/custom_search'); // カスタム投稿タイプの検索機能
// get_template_part('functions/first_image_thumb'); // 最初の画像をサムネイルにするときのやりかた
// get_template_part('functions/custom_per_page'); // カスタム投稿タイプごとに表示数を変える
// get_template_part('functions/custom_option_page'); // ACF Option Page
// get_template_part('functions/custom_form'); // フォームプラグインのカスタマイズ
// get_template_part('functions/add_archive_ogp'); // アーカイブページ用にOGP画像を出力する

/**
* Theme Customizer
* テーマカスタマイザーを使うときに。
* 使わないなら削除。
*/
// get_template_part('customizer/customizer-repeater/functions'); // repeaterのプラグイン
// get_template_part('customizer/customize'); // カスタマイザーの記述はここ
// get_template_part('customizer/style'); // 色を変えたりするときのstyleの記述
// get_template_part('customizer/repeater'); // repeaterのカスタマイズ
