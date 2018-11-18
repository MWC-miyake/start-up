<?php
/**
* カテゴリーID表示
*/
function addCategoryID($columns){
  $columns['id'] = 'ID';
    return $columns;
  }
  add_filter('manage_edit-category_columns','addCategoryID');
    function addCategoryIDvalue($value, $column_name, $id){
    if($column_name == 'id'){
      echo $id;
    }
  }
  add_action('manage_category_custom_column','addCategoryIDvalue',10,3);

  /**
  * 投稿ID表示
  */
  add_filter('manage_posts_columns', 'posts_columns_id', 5);
  add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
  add_filter('manage_pages_columns', 'posts_columns_id', 5);
  add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);
  function posts_columns_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
  }
  function posts_custom_id_columns($column_name, $id){
    if($column_name === 'wps_post_id'){
      echo $id;
    }
  }