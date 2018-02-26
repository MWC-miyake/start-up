<?php

// カスタム画面のスタイル
function my_admin_style() {
  echo '<style>
  .customize-control-title {
    margin-top: 24px;
  }
  .customize-control-description p {
    font-style: normal;
    color: #000;
    margin: 0px;
  }
  #_customize-input-my_theme_options_thumb_dummy,
  #_customize-input-my_theme_options_thumb_dummy2 {
    display: none;
  }
  </style>'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');

// テーマカスタマイズ
function my_theme_customize_register( $wp_customize ) {
  
  //カラー設定 ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_color', array(
    'title' => 'カラー設定',
    'priority' => 550,
  ) );
  
  // メインカラー
  $wp_customize->add_setting( 'color_main',array(
    'default' => '#222'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_main', array(
    'label' => 'メインカラー',
    'description' => '帯、切り替えタブ、ナビゲーション、カテゴリータグ、アイコン',
    'section' => 'my_theme_color',
    'settings' => 'color_main',
  ) ) );
  // サブカラー
  $wp_customize->add_setting( 'color_sub',array(
    'default' => '#adb8bf'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_sub', array(
    'label' => 'サブカラー',
    'description' => '各ページ見出し、リンクホバー',
    'section' => 'my_theme_color',
    'settings' => 'color_sub',
  ) ) );
  // ボタンカラー
  $wp_customize->add_setting( 'color_btn',array(
    'default' => '#1877ff'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_btn', array(
    'label' => 'ボタンカラー',
    'description' => '検索ボタン、ページネーション',
    'section' => 'my_theme_color',
    'settings' => 'color_btn',
  ) ) );
  // メインビジュアルカラー
  $wp_customize->add_setting( 'color_slider',array(
    'default' => '#222222'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_slider', array(
    'label' => 'メインビジュアルカラー',
    'section' => 'my_theme_color',
    'settings' => 'color_slider',
  ) ) );
  // グローバルナビカラー
  $wp_customize->add_setting( 'color_navi',array(
    'default' => '#222222'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_navi', array(
    'label' => 'グローバルナビカラー',
    'section' => 'my_theme_color',
    'settings' => 'color_navi',
  ) ) );
  // ハンバーガーメニューカラー
  $wp_customize->add_setting( 'color_menu_sp',array(
    'default' => '#222222'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_menu_sp', array(
    'label' => 'ハンバーガーメニューカラー',
    'section' => 'my_theme_color',
    'settings' => 'color_menu_sp',
  ) ) );
  
  //ヘッダー ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_header', array(
    'title' => 'ヘッダー',
    'priority' => 600,
  ) );
  
  // ロゴ
  $wp_customize->add_setting( 'my_theme_options[header_logo]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'my_theme_options_header_logo', array(
    'label' => 'ロゴ',
    'description' => '推奨最大サイズ：W290,H60',
    'section' => 'my_theme_header',
    'settings' => 'my_theme_options[header_logo]',
  ) ) );
  
  // 検索窓内のテキスト
  $wp_customize->add_setting( 'my_theme_options[header_place]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_header_place', array(
    'settings' => 'my_theme_options[header_place]',
    'label' => '検索窓内のテキスト',
    'section' => 'my_theme_header',
    'type' => 'text',
  ) );
  
  // Facebook
  $wp_customize->add_setting( 'my_theme_options[header_fb]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_header_fb', array(
    'settings' => 'my_theme_options[header_fb]',
    'label' => 'Facebook',
    'description' => 'URLを入力してください',
    'section' => 'my_theme_header',
    'type' => 'text',
  ) );
  
  // Twitter
  $wp_customize->add_setting( 'my_theme_options[header_tw]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_header_tw', array(
    'settings' => 'my_theme_options[header_tw]',
    'label' => 'twitter',
    'description' => 'URLを入力してください',
    'section' => 'my_theme_header',
    'type' => 'text',
  ) );
  
  // Instagram
  $wp_customize->add_setting( 'my_theme_options[header_insta]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_header_insta', array(
    'settings' => 'my_theme_options[header_insta]',
    'label' => 'Instagram',
    'description' => 'URLを入力してください',
    'section' => 'my_theme_header',
    'type' => 'text',
  ) );
  
  //トップページ ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_front', array(
    'title' => 'トップページ',
    'priority' => 700,
  ) );
  
  // h1
  $wp_customize->add_setting( 'my_theme_options[front_h1]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_h1', array(
    'settings' => 'my_theme_options[front_h1]',
    'label' => 'トップページのh1',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  
  // スライダー
  $wp_customize->add_setting( 'my_theme_options[front_slider]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_slider', array(
    'settings' => 'my_theme_options[front_slider]',
    'label' => 'スライダーに表示させるカテゴリー',
    'section' => 'my_theme_front',
    'type' => 'text',
    'description' => 'スライダーに表示させるカテゴリーIDを入力してください（半角数字）。複数ある場合は、カンマ区切りで入力してください。（例：1,3）'
  ) );
  
  // 店舗検索欄
  $wp_customize->add_setting( 'my_theme_options[front_search]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_search', array(
    'settings' => 'my_theme_options[front_search]',
    'label' => '検索欄見出し',
    'description' => 'こちらが未入力の場合、検索欄ごと非表示となります。',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_search_check1]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_search_check1', array(
    'settings' => 'my_theme_options[front_search_check1]',
    'label' => '検索カテゴリー１を表示する',
    'section' => 'my_theme_front',
    'type' => 'checkbox',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_search_check2]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_search_check2', array(
    'settings' => 'my_theme_options[front_search_check2]',
    'label' => '検索カテゴリー２を表示する',
    'section' => 'my_theme_front',
    'type' => 'checkbox',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_search_check3]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_search_check3', array(
    'settings' => 'my_theme_options[front_search_check3]',
    'label' => '検索カテゴリー３を表示する',
    'section' => 'my_theme_front',
    'type' => 'checkbox',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_search_check4]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_search_check4', array(
    'settings' => 'my_theme_options[front_search_check4]',
    'label' => '検索カテゴリー４を表示する',
    'section' => 'my_theme_front',
    'type' => 'checkbox',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_search_check5]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_search_check5', array(
    'settings' => 'my_theme_options[front_search_check5]',
    'label' => '検索カテゴリー５を表示する',
    'section' => 'my_theme_front',
    'type' => 'checkbox',
  ) );
  
  // 最新の記事
  $wp_customize->add_setting( 'my_theme_options[front_new]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_new', array(
    'settings' => 'my_theme_options[front_new]',
    'label' => '最新の記事タイトル',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );

  // ランダム記事１
  $wp_customize->add_setting( 'my_theme_options_front_rand', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
  ) );
  $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'my_theme_options_front_rand', array(
    'label' => 'ランダム記事',
    'section' => 'my_theme_front',
    'customizer_repeater_title_control' => true,
    'customizer_repeater_subtitle_control' => true,
  ) ) );
  
  // セレクト記事１
  $wp_customize->add_setting( 'my_theme_options[front_select1]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_select1', array(
    'settings' => 'my_theme_options[front_select1]',
    'label' => 'セレクト記事１',
    'description' => '<p>タブ</p>',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_select1_cat]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_select1_cat', array(
    'settings' => 'my_theme_options[front_select1_cat]',
    'description' => '<p>カテゴリーID</p>',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  // セレクト記事２
  $wp_customize->add_setting( 'my_theme_options[front_select2]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_select2', array(
    'settings' => 'my_theme_options[front_select2]',
    'label' => 'セレクト記事２',
    'description' => '<p>タブ</p>',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_select2_cat]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_select2_cat', array(
    'settings' => 'my_theme_options[front_select2_cat]',
    'description' => '<p>カテゴリーID</p>',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  // セレクト記事３
  $wp_customize->add_setting( 'my_theme_options[front_select3]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_select3', array(
    'settings' => 'my_theme_options[front_select3]',
    'label' => 'セレクト記事３',
    'description' => '<p>タブ</p>',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_select3_cat]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_select3_cat', array(
    'settings' => 'my_theme_options[front_select3_cat]',
    'description' => '<p>カテゴリーID</p>',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  // セレクト記事４
  $wp_customize->add_setting( 'my_theme_options[front_select4]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_select4', array(
    'settings' => 'my_theme_options[front_select4]',
    'label' => 'セレクト記事４',
    'description' => '<p>タブ</p>',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[front_select4_cat]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_front_select4_cat', array(
    'settings' => 'my_theme_options[front_select4_cat]',
    'description' => '<p>カテゴリーID</p>',
    'section' => 'my_theme_front',
    'type' => 'text',
  ) );
  
  // サイド ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_side', array(
    'title' => 'サイド',
    'priority' => 710,
  ) );
  // トピックス
  $wp_customize->add_setting( 'my_theme_options[side_topics]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_topics', array(
    'settings' => 'my_theme_options[side_topics]',
    'label' => 'トピックス',
    'description' => '<p>タイトル</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_topics_cat]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_topics_cat', array(
    'settings' => 'my_theme_options[side_topics_cat]',
    'description' => '<p>カテゴリーID</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  // セレクト記事１
  $wp_customize->add_setting( 'my_theme_options[side_select1]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_select1', array(
    'settings' => 'my_theme_options[side_select1]',
    'label' => 'セレクト記事１',
    'description' => '<p>タイトル</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_select1_cat]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_select1_cat', array(
    'settings' => 'my_theme_options[side_select1_cat]',
    'description' => '<p>カテゴリーID</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  // セレクト記事２
  $wp_customize->add_setting( 'my_theme_options[side_select2]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_select2', array(
    'settings' => 'my_theme_options[side_select2]',
    'label' => 'セレクト記事２',
    'description' => '<p>タイトル</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_select2_cat]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_select2_cat', array(
    'settings' => 'my_theme_options[side_select2_cat]',
    'description' => '<p>カテゴリーID</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  // ランキング
  $wp_customize->add_setting( 'my_theme_options[side_rank1]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank1', array(
    'settings' => 'my_theme_options[side_rank1]',
    'label' => 'ランキング',
    'description' => '<div><span>記事IDを入力してください</span></div><p>1</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank2]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank2', array(
    'settings' => 'my_theme_options[side_rank2]',
    'description' => '<p>2</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank3]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank3', array(
    'settings' => 'my_theme_options[side_rank3]',
    'description' => '<p>3</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank4]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank4', array(
    'settings' => 'my_theme_options[side_rank4]',
    'description' => '<p>4</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank5]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank5', array(
    'settings' => 'my_theme_options[side_rank5]',
    'description' => '<p>5</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank6]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank6', array(
    'settings' => 'my_theme_options[side_rank6]',
    'description' => '<p>6</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank7]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank7', array(
    'settings' => 'my_theme_options[side_rank7]',
    'description' => '<p>7</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank8]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank8', array(
    'settings' => 'my_theme_options[side_rank8]',
    'description' => '<p>8</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank9]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank9', array(
    'settings' => 'my_theme_options[side_rank9]',
    'description' => '<p>9</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_rank10]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_rank10', array(
    'settings' => 'my_theme_options[side_rank10]',
    'description' => '<p>10</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  // カテゴリー
  $wp_customize->add_setting( 'my_theme_options[side_cat_title]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_cat_title', array(
    'settings' => 'my_theme_options[side_cat_title]',
    'label' => 'カテゴリー',
    'description' => '<p>見出し</p>',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_cat_id]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_cat_id', array(
    'settings' => 'my_theme_options[side_cat_id]',
    'label' => '表示させるカテゴリーID（半角）',
    'description' => '複数ある場合は、カンマ","で区切ってください。',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  $wp_customize->add_setting( 'my_theme_options[side_cat_hierarchy]', array(
    'type' => 'option',
  ) );
  $wp_customize->add_control( 'my_theme_options_side_cat_hierarchy', array(
    'settings' => 'my_theme_options[side_cat_hierarchy]',
    'label' => '表示させる階層（半角）',
    'section' => 'my_theme_side',
    'type' => 'text',
  ) );
  
  
  // フッター ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_footer', array(
    'title' => 'フッター',
    'priority' => 800,
  ) );
  
  // ロゴ
  $wp_customize->add_setting( 'my_theme_options[footer_logo]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'my_theme_options_footer_logo', array(
    'label' => 'ロゴ',
    'description' => 'W290,H90',
    'section' => 'my_theme_footer',
    'settings' => 'my_theme_options[footer_logo]',
  ) ) );
  // フッターナビ
  $wp_customize->add_setting( 'my_theme_options_footer_navi', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
  ) );
  $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'my_theme_options_footer_navi', array(
    'label' => 'フッターナビ',
    'section' => 'my_theme_footer',
    'customizer_repeater_title_control' => true,
    'customizer_repeater_subtitle_control' => true,
  ) ) );
  // コピーライト
  $wp_customize->add_setting( 'my_theme_options[footer_copyright]', array(
    'default' => '',
    'type' => 'option',
    // 'transport' => 'postMessage',
  ) );
  $wp_customize->add_control( 'my_theme_options_footer_copyright', array(
    'settings' => 'my_theme_options[footer_copyright]',
    'label' => 'コピーライト',
    'section' => 'my_theme_footer',
    'type' => 'text',
  ) );
  
  
  // 広告バナー ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_banner', array(
    'title' => '広告バナー',
    'priority' => 900,
  ) );
  
  // ヘッダー
  $wp_customize->add_setting( 'my_theme_options[banner_header]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control( 'my_theme_options_banner_header', array(
    'label' => 'ヘッダー',
    'description' => 'W468px,H60px',
    'section' => 'my_theme_banner',
    'settings' => 'my_theme_options[banner_header]',
    'type' => 'textarea',
  ) );
  
  // サイド１
  $wp_customize->add_setting( 'my_theme_options[banner_side1]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control( 'my_theme_options_banner_side1', array(
    'label' => 'サイド１',
    'description' => '横最大300px',
    'section' => 'my_theme_banner',
    'settings' => 'my_theme_options[banner_side1]',
    'type' => 'textarea',
  ) );
  // サイド２
  $wp_customize->add_setting( 'my_theme_options[banner_side2]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control( 'my_theme_options_banner_side2', array(
    'label' => 'サイド２',
    'description' => '横最大300px',
    'section' => 'my_theme_banner',
    'settings' => 'my_theme_options[banner_side2]',
    'type' => 'textarea',
  ) );
  
  // フッター
  $wp_customize->add_setting( 'my_theme_options[banner_footer]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control( 'my_theme_options_banner_footer', array(
    'label' => 'フッター',
    'description' => '横最大300px,縦最大300px',
    'section' => 'my_theme_banner',
    'settings' => 'my_theme_options[banner_footer]',
    'type' => 'textarea',
  ) );
  
  // コンテンツ下部１
  $wp_customize->add_setting( 'my_theme_options[banner_content1]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control( 'my_theme_options_banner_content1', array(
    'label' => 'コンテンツ下部１',
    'description' => '横最大300px,縦最大300px',
    'section' => 'my_theme_banner',
    'settings' => 'my_theme_options[banner_content1]',
    'type' => 'textarea',
  ) );
  // コンテンツ下部２
  $wp_customize->add_setting( 'my_theme_options[banner_content2]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control( 'my_theme_options_banner_content2', array(
    'label' => 'コンテンツ下部２',
    'description' => '横最大300px,縦最大300px',
    'section' => 'my_theme_banner',
    'settings' => 'my_theme_options[banner_content2]',
    'type' => 'textarea',
  ) );
  
  
  // h1、パンくず ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_bread', array(
    'title' => 'h1、パンくず',
    'priority' => 1000,
  ) );
  // パンくず基本設定
  $wp_customize->add_setting( 'my_theme_options[bread_top]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_top', array(
    'label' => 'パンくず基本設定',
    'description' => 'パンくずの最高階層に表示するテキストを入力してください。',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_top]',
    'type' => 'text'
  ) );
  // 一覧ページ
  $wp_customize->add_setting( 'my_theme_options[bread_archive_h1]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_h1', array(
    'label' => '全記事一覧ページ',
    'description' => '<p>h1</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_h1]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread1]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread1', array(
    'description' => '<p>パンくず階層１</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread1]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread1_link]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread1_link', array(
    'description' => '<p>パンくず階層１リンク</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread1_link]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread2]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread2', array(
    'description' => '<p>パンくず階層２</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread2]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread2_link]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread2_link', array(
    'description' => '<p>パンくず階層２リンク</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread2_link]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread3]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread3', array(
    'description' => '<p>パンくず階層３</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread3]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread3_link]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread3_link', array(
    'description' => '<p>パンくず階層３リンク</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread3_link]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread4]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread4', array(
    'description' => '<p>パンくず階層４</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread4]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread4_link]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread4_link', array(
    'description' => '<p>パンくず階層４リンク</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread4_link]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread5]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread5', array(
    'description' => '<p>パンくず階層５</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread5]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread5_link]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread5_link', array(
    'description' => '<p>パンくず階層５リンク</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread5_link]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread6]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread6', array(
    'description' => '<p>パンくず階層６</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread6]',
    'type' => 'text'
  ) );
  $wp_customize->add_setting( 'my_theme_options[bread_archive_bread6_link]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_archive_bread6_link', array(
    'description' => '<p>パンくず階層６リンク</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_archive_bread6_link]',
    'type' => 'text'
  ) );
  
  // 記事検索ページ
  $wp_customize->add_setting( 'my_theme_options[bread_search_h1]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_search_h1', array(
    'label' => '記事検索ページ',
    'description' => '<p>h1</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_search_h1]',
    'type' => 'text'
  ) );
  // 店舗検索ページ
  $wp_customize->add_setting( 'my_theme_options[bread_shop_h1]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_shop_h1', array(
    'label' => '店舗検索ページ',
    'description' => '<p>h1</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_shop_h1]',
    'type' => 'text'
  ) );
  // エリア検索ページ
  $wp_customize->add_setting( 'my_theme_options[bread_area_h1]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_bread_area_h1', array(
    'label' => 'エリア検索ページ',
    'description' => '<p>h1</p>',
    'section' => 'my_theme_bread',
    'settings' => 'my_theme_options[bread_area_h1]',
    'type' => 'text'
  ) );
  
  
  // サムネイル表示設定 ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_thumb', array(
    'title' => 'サムネイル表示設定',
    'priority' => 1100,
  ) );
  // ダミータイトル
  $wp_customize->add_setting( 'my_theme_options[thumb_dummy2]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_dummy2', array(
    'label' => 'トップページおよびサイドメニューでサムネイルを非表示にする箇所をチェックしてください。',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_dummy2]',
    'type' => 'text'
  ) );
  // 最新の記事
  $wp_customize->add_setting( 'my_theme_options[thumb_top_news]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_top_news', array(
    'label' => '最新の記事',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_top_news]',
    'type' => 'checkbox'
  ) );
  // ランダム記事
  $wp_customize->add_setting( 'my_theme_options[thumb_top_rand]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_top_rand', array(
    'label' => 'ランダム記事',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_top_rand]',
    'type' => 'checkbox'
  ) );
  // サイドトピックス
  $wp_customize->add_setting( 'my_theme_options[thumb_side_topics]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_side_topics', array(
    'label' => 'サイドトピックス',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_side_topics]',
    'type' => 'checkbox'
  ) );
  // サイドセレクト記事
  $wp_customize->add_setting( 'my_theme_options[thumb_side_select]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_side_select', array(
    'label' => 'サイドセレクト記事',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_side_select]',
    'type' => 'checkbox'
  ) );
  // ダミータイトル
  $wp_customize->add_setting( 'my_theme_options[thumb_dummy]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_dummy', array(
    'label' => '下層ページでサムネイルを非表示にする箇所をチェックしてください。',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_dummy]',
    'type' => 'text'
  ) );
  // 投稿ページ
  $wp_customize->add_setting( 'my_theme_options[thumb_post]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_post', array(
    'label' => '投稿ページ',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_post]',
    'type' => 'checkbox'
  ) );
  // 投稿ページネーション
  $wp_customize->add_setting( 'my_theme_options[thumb_post_pagenation]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_post_pagenation', array(
    'label' => '投稿ページネーション',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_post_pagenation]',
    'type' => 'checkbox'
  ) );
  // 投稿関連記事
  $wp_customize->add_setting( 'my_theme_options[thumb_post_other]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_post_other', array(
    'label' => '投稿関連記事',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_post_other]',
    'type' => 'checkbox'
  ) );
  // 店舗ページネーション
  $wp_customize->add_setting( 'my_theme_options[thumb_shop_pagenation]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_shop_pagenation', array(
    'label' => '店舗ページネーション',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_shop_pagenation]',
    'type' => 'checkbox'
  ) );
  // 店舗関連記事
  $wp_customize->add_setting( 'my_theme_options[thumb_shop_other]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_shop_other', array(
    'label' => '店舗関連記事',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_shop_other]',
    'type' => 'checkbox'
  ) );
  // 固定ページ
  $wp_customize->add_setting( 'my_theme_options[thumb_page]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_page', array(
    'label' => '固定ページ',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_page]',
    'type' => 'checkbox'
  ) );
  // 記事一覧ページ
  $wp_customize->add_setting( 'my_theme_options[thumb_archive]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_archive', array(
    'label' => '記事一覧ページ',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_archive]',
    'type' => 'checkbox'
  ) );
  // 店舗一覧ページ
  $wp_customize->add_setting( 'my_theme_options[thumb_shop]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_thumb_shop', array(
    'label' => '店舗一覧ページ',
    'section' => 'my_theme_thumb',
    'settings' => 'my_theme_options[thumb_shop]',
    'type' => 'checkbox'
  ) );
  
  // 日付表示設定 ----------------------------------------------------------------------
  $wp_customize->add_section( 'my_theme_date', array(
    'title' => '日付表示設定',
    'priority' => 1200,
  ) );
  // 最新の記事
  $wp_customize->add_setting( 'my_theme_options[date_check]',array(
    'type' => 'option',
  ));
  $wp_customize->add_control('my_theme_options_date_check', array(
    'label' => '日付を非表示にする',
    'section' => 'my_theme_date',
    'settings' => 'my_theme_options[date_check]',
    'type' => 'checkbox'
  ) );
}
add_action( 'customize_register', 'my_theme_customize_register' );