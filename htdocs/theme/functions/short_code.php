<?php
/***********************************************************
* [t_url],[home_url]
***********************************************************/
function my_wp_kses_allowed_html( $tags, $context ) {
	$tags['source']['srcset'] = true;
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );

function tempUrl() {
	return get_template_directory_uri();
}
add_shortcode('t_url', 'tempUrl');
function homeUrl() {
	return home_url();
}
add_shortcode('h_url', 'homeUrl');
function Url() {
	return site_url();
}
add_shortcode('url', 'Url');

/***********************************************************
* テンプレートをショートコードで呼び出す
* ex: [myphp file='my-template']
***********************************************************/
/*
function my_php_Include( $params = array() ) {
  extract( shortcode_atts(array('file' => 'default'), $params ) );
  ob_start();
  get_template_part( $file );
  return ob_get_clean();
 }
 add_shortcode('myphp','my_php_Include');
*/