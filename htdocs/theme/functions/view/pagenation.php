<?php
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