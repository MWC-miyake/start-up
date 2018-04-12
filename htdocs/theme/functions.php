<?php
/**
* Add Theme Supports
* WordPressのテーマ拡張機能の有効化
*/
// add_theme_support('menus'); // メニュー機能
// add_theme_support('post-thumbnails'); // サムネイル機能


/** 
* Include Functions
* いろんな関数を個々に読み込む
* いらないものはできればコメントアウトしておきたい
* 使わないのに入れておくと邪魔なものは最初からコメントアウトしてある
*/
get_template_part('functions/editor'); // エディターに関するカスタマイズ
// get_template_part('functions/menu'); //メニュー機能のカスタマイズ用
get_template_part('functions/mobile'); // スマホ分岐
get_template_part('functions/short_code'); // ショートコード集
// get_template_part('functions/widgets'); // ウィジェットの設定
get_template_part('functions/category_list'); // カテゴリー表示させたりする
get_template_part('functions/new'); // Newマーク
get_template_part('functions/pagenation'); // ページネーション
// get_template_part('functions/thumbnails'); // サムネイルのあれこれ
get_template_part('functions/title'); // タイトルの文字数制限
get_template_part('functions/body_class'); // bodyのclassの表示


/** 
* Theme Customizer
* テーマカスタマイザーを使うときに。
*/
// get_template_part('customizer/customize'); // カスタマイザーの記述はここ
// get_template_part('customizer/style'); // 色を変えたりするときのstyleの記述
// get_template_part('customizer/customizer-repeater/functions'); // repeaterのプラグイン
// get_template_part('customizer/repeater'); // repeaterのカスタマイズ
