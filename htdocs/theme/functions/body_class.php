<?php
/***********************************************************
* 各ページのbody class
***********************************************************/
function show_body_class( $default = null ) {
  global $post;
  $slug_name = $post->post_name;
  
  if( is_front_page() ){
    $html = '<body class="top">';
  } elseif( is_page_template('page-contact.php') ) {
    $html = '<body class="contact lower">';
  } else {
    $html = '<body class="' .$slug_name. ' lower">';
  }
  
  echo $html;
}