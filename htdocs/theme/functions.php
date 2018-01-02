<?php
/***********************************************************
* ショートコード[t_url],[home_url]を使用できる
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
* ページネーション
***********************************************************/
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }
	 if(1 == $pages)
	 {
		
	 }
     if(1 != $pages)
     {
    
	echo "<div class=\"pageBg\">\n";
	echo "<ul class=\"pageNation clearfix\">\n";
     
         if($paged > 1) echo "<li class=\"prev\"><a href=\"".get_pagenum_link($paged - 1)."\"> 前のページへ</a></li>\n";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
    
    if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">次のページへ </a></li>\n";
   	echo "</ul>\n";
    echo "</div>\n";
     }
}

/***********************************************************
* spanタグ有効
***********************************************************/
function my_tiny_mce_before_init( $init_array ) {
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';

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
* is_mobile()関数の定義　PC/タブレット or スマホの分岐ができる。
* wp_is_mobile()は、PC or タブレット/スマホ
***********************************************************/
function is_mobile(){
$useragents = array(
'iPhone', // iPhone
'iPod', // iPod touch
'Android.*Mobile', // 1.5+ Android *** Only mobile
'Windows.*Phone', // *** Windows Phone
'dream', // Pre 1.5 Android
'CUPCAKE', // 1.5+ Android
'blackberry9500', // Storm
'blackberry9530', // Storm
'blackberry9520', // Storm v2
'blackberry9550', // Storm v2
'blackberry9800', // Torch
'webOS', // Palm Pre Experimental
'incognito', // Other iPhone browser
'webmate' // Other iPhone browser
);
$pattern = '/'.implode('|', $useragents).'/i';
return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/***********************************************************
* サムネイル機能の追加
***********************************************************/
//add_theme_support( 'post-thumbnails');
//add_image_size( 'list-thumbnail', 176, 100, true );

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

// ビジュアルエディタ用CSS
add_editor_style('editor-style.css');
 
function custom_editor_settings( $initArray ) {
    $initArray['body_class'] = 'editor-area';
    return $initArray;
}
 
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

?>