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
* 投稿内部で、テンプレートをショートコードで呼び出す
***********************************************************/
/*
function show_graph() {
  ob_start();
  get_template_part('tpl-graph'); 
  return ob_get_clean();
}
add_shortcode('graph', 'show_graph');
*/