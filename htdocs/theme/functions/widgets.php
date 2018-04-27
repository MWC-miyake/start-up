<?php
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'フッター1',
    'id' => 'footer1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer_headline">',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => 'フッター2',
    'id' => 'footer2',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer_headline">',
    'after_title' => '</h3>'
  ));
  
  register_sidebar(array(
    'name' => 'フッター3',
    'id' => 'footer3',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer_headline">',
    'after_title' => '</h3>'
  ));
}