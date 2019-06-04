<?php
/***********************************************************
* ビジュアルエディタの余計な機能を無効化する
***********************************************************/
function my_tiny_mce_before_init( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';

    return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );

/***********************************************************
* 固定ページのビジュアルエディタ無効
***********************************************************/
function disable_visual_editor_in_page(){
	global $typenow;
	if( $typenow == 'page' ){
		add_filter('user_can_richedit', 'disable_visual_editor_filter');
	}
}
function disable_visual_editor_filter(){
	return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );

/***********************************************************
* ビジュアルエディタ用CSS
***********************************************************/
add_editor_style('editor-style.css');
 
function custom_editor_settings( $initArray ) {
    $initArray['body_class'] = 'editor-area';
    return $initArray;
}
 
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );