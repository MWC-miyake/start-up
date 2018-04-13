<?php
function customizer_color() {
$color_main = get_theme_mod( 'color_main', '#222');
$color_sub = get_theme_mod( 'color_sub', '#adb8bf');
$color_btn = get_theme_mod( 'color_btn', '#1877ff');
$color_slider = get_theme_mod( 'color_slider', '#222222');
$color_navi = get_theme_mod( 'color_navi', '#222222');
$color_menu_sp = get_theme_mod( 'color_menu_sp', '#222222');

$color_slider_rgb = preg_replace("/#/", "", $color_slider);
$color_menu_sp_rgb = preg_replace("/#/", "", $color_menu_sp);
 
$slider_rgb["red"] = hexdec(substr($color_slider_rgb, 0, 2));
$slider_rgb["green"] = hexdec(substr($color_slider_rgb, 2, 2));
$slider_rgb["blue"] = hexdec(substr($color_slider_rgb, 4, 2));
$menu_sp_rgb["red"] = hexdec(substr($color_menu_sp_rgb, 0, 2));
$menu_sp_rgb["green"] = hexdec(substr($color_menu_sp_rgb, 2, 2));
$menu_sp_rgb["blue"] = hexdec(substr($color_menu_sp_rgb, 4, 2));
?>

<style>
  /* メインカラー */
  #global_menu > ul,
  .sideTab,
  .clmAnker,
  .searchListClm,
  #searchArea .sCharaList li,
  #footer_wrap {
    border-color: <?php echo $color_main; ?>;
  }
  .sideTab li.active span,
  .changeTab li span:hover,
  .changeTab li.active span,
  .sideTab li span:hover,
  .postListChild .colorCat,
  .singleCatList li a,
  .post ol li:before,
  .clmHeading,
  .singleH2Area,
  #copyright {
    background-color: <?php echo $color_main; ?>;
  }
  .searchTitle:before,
  .post ul li:before,
  .clmAnker p:before,
  .sSingleH3,
  #searchArea .sCharaList li {
    color: <?php echo $color_main; ?>;
  }
  /* サブカラー */
  .headline1 {
    border-left-color: <?php echo $color_sub; ?>;
  }
  a:hover {
    color: <?php echo $color_sub; ?>;
  }
  .post h1,
  .post h2,
  .post h3,
  .post h4,
  .post h6,
  #global_menu nav > ul {
    border-color: <?php echo $color_sub; ?>;
  }
  .post h5,
  #global_menu nav > ul > li a:hover,
  #global_menu li.active > a,
  #sub_slider .item:hover,
  #sub_slider .item.slick-current,
  .changeTab li:not(.active) span:hover,
  .sideTab li:not(.active) span:hover {
    background-color: <?php echo $color_sub; ?>;
  }
  .post ul:not(.check) li {
    background: linear-gradient(transparent 70%, <?php echo $color_sub; ?> 70%);
  }
  /* ボタン */
  .search_area #search_button input,
  .pageNation li.active,
  .pageNation li a:hover {
    background-color: <?php echo $color_btn; ?>;
  }
  /* グローバルナビ */
  #global_menu nav > ul > li > a {
    background-color: <?php echo $color_navi; ?>;
  }
  /* ハンバーガーメニュー */
  #global_menu_sp a {
    background-color: rgba(<?php echo $menu_sp_rgb["red"];?>,<?php echo $menu_sp_rgb["green"];?>,<?php echo $menu_sp_rgb["blue"];?>,0.9);
  }
  /* メインビジュアル */
  #sub_slider .item {
    background-color: <?php echo $color_slider; ?>;
  }
  #sub_slider .item:hover,
  #sub_slider .item.slick-current {
    background-color: rgba(<?php echo $slider_rgb["red"];?>,<?php echo $slider_rgb["green"];?>,<?php echo $slider_rgb["blue"];?>,0.8);
  }
  
  
</style>
<?php
}
add_action( 'wp_head', 'customizer_color');