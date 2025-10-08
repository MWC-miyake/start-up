<?php
// Yoast SEOの追加設定。
// Yoast SEOのターム用設定を反映させるためには、パーマリンク設定内の「カスタムタクソノミーのアーカイブに、 post_type クエリーを追加。」のチェックをはずし（CPT Permalinksを使用している場合）、taxonomy用のテンプレートを作成する必要がある。

// 編集者以下の権限ではメニューに表示させない
add_action( 'admin_menu', 'remove_yoast_seo_menu', 99 );
function remove_yoast_seo_menu() {
  if ( ! current_user_can( 'administrator' ) ) {
    remove_menu_page( 'wpseo_dashboard' );
    remove_menu_page( 'wpseo_workouts' );
  }
}

// 各カスタム投稿アーカイブページのtitle,description,OGP title, OGP description, OGP画像を設定する
// OGP画像は基本設定からデフォルト画像を登録しないとフックが働かないので注意
function get_custom_yoast_arrays( $array_name ) {
  $site_name = get_bloginfo('name');

  // titleの配列
  $custom_yoast_titles = array(
    'voice' => ''. $site_name,
    'staff' => ''. $site_name,
  );
  // descriptionの配列
  $custom_yoast_descriptions = array(
    'voice' => '',
    'staff' =>  '',
  );
  // OGP Imageの配列
  $custom_yoast_ogp_images = array(
    'voice' => '',
    'staff' => '',
  );

  if ( $array_name == 'title' ) {
    return $custom_yoast_titles;
  } elseif ( $array_name == 'description' ) {
    return $custom_yoast_descriptions;
  } elseif ( $array_name == 'ogp_image' ) {
    return $custom_yoast_ogp_images;
  }
}

// 各カスタム投稿アーカイブページのtitle,description,OGP title, OGP description, OGP画像を出力する
add_filter('wpseo_title', 'custom_wpseo_title');
function custom_wpseo_title($title) {
  $custom_yoast_titles = get_custom_yoast_arrays( 'title' );

  foreach ($custom_yoast_titles as $custom_yoast_title => $custom_yoast_title_value) {
    if (is_post_type_archive($custom_yoast_title)) {
      return $custom_yoast_title_value;
    }
  }

  return $title;
}

add_filter('wpseo_metadesc', 'custom_wpseo_metadesc');
function custom_wpseo_metadesc($metadesc) {
  $custom_yoast_descriptions = get_custom_yoast_arrays( 'description' );

  foreach ($custom_yoast_descriptions as $custom_yoast_description => $custom_yoast_description_value) {
    if (is_post_type_archive($custom_yoast_description)) {
      return $custom_yoast_description_value;
    }
  }

  return $metadesc;
}

add_filter('wpseo_opengraph_title', 'custom_wpseo_opengraph_title');
function custom_wpseo_opengraph_title($title) {
  $custom_yoast_titles = get_custom_yoast_arrays( 'title' );

  foreach ($custom_yoast_titles as $custom_yoast_title => $custom_yoast_title_value) {
    if (is_post_type_archive($custom_yoast_title)) {
      return $custom_yoast_title_value;
    }
  }

  return $title;
}

add_filter('wpseo_opengraph_desc', 'custom_wpseo_opengraph_desc');
function custom_wpseo_opengraph_desc($desc) {
  $custom_yoast_descriptions = get_custom_yoast_arrays( 'description' );

  foreach ($custom_yoast_descriptions as $custom_yoast_description => $custom_yoast_description_value) {
    if (is_post_type_archive($custom_yoast_description)) {
      return $custom_yoast_description_value;
    }
  }

  return $desc;
}

add_filter( 'wpseo_opengraph_image', 'custom_wpseo_opengraph_image', 10, 1 );
function custom_wpseo_opengraph_image($desc) {
  $custom_yoast_images = get_custom_yoast_arrays( 'ogp_image' );

  foreach ($custom_yoast_images as $custom_yoast_image => $custom_yoast_image_value) {
    if (is_post_type_archive($custom_yoast_image)) {
      return $custom_yoast_image_value;
    }
  }

  return $desc;
}
