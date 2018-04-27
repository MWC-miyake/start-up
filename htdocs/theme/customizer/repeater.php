<?php
function repeater_labels( $string, $id, $control ) {
  if ( $id === 'my_theme_options_front_rand' ) {
    if ( $control === 'customizer_repeater_title_control' ) {
      return "タイトル";
    }
    if ( $control === 'customizer_repeater_subtitle_control' ) {
      return "カテゴリーID";
    }
  }
  if ( $id === 'my_theme_options_footer_content1_repeat' || $id === 'my_theme_options_footer_content2_repeat' || $id === 'my_theme_options_footer_content3_repeat' || $id === 'my_theme_options_footer_navi') {
    if ( $control === 'customizer_repeater_title_control' ) {
      return "テキスト";
    }
    if ( $control === 'customizer_repeater_subtitle_control' ) {
      return "リンク";
    }
  }
  return $string;
}
add_filter( 'repeater_input_labels_filter','repeater_labels', 10 , 3 );