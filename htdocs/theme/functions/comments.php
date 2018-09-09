<?php
/***********************************************************
* コメント欄の設定
***********************************************************/
// コメントからウェブサイトとEmailを削除
function my_comment_form_remove($arg) {
  $arg['url'] = '';
  $arg['email'] = '';
  return $arg;
}
add_filter('comment_form_default_fields', 'my_comment_form_remove');

// 「メールアドレスが公開されることはありません。 * が付いている欄は必須項目です」の文言を削除
function my_comment_notes_before( $defaults){
  $defaults['comment_notes_before'] = '';
  return $defaults;
}
add_filter( "comment_form_defaults", "my_comment_notes_before");