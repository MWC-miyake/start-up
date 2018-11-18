<?php
/***********************************************
 * active_pref();
 * ACFの都道府県から選択されているやつだけを取り出す
 ***********************************************/
function active_pref() {
  $active_pref = array();

  // とりあえず全部回して、配列に値をつっこんだ後重複を削除
  $wp_query = new WP_Query();
  $param = array(
    'posts_per_page' => '-1',
    'post_type' => 'works',
  );
  $wp_query->query($param);
  if($wp_query->have_posts()){
    while($wp_query->have_posts()){
      $wp_query->the_post();
      $works_pref = get_field('acf_works_pref', $post->ID );
      $active_pref[] = $works_pref;
    }
  }
  wp_reset_query();

  $active_pref_unique = array_unique( $active_pref );
  $active_pref_values = array_values( $active_pref_unique );

  return $active_pref_values;
}

/***********************************************
 * all_area();
 * 地域用の配列作成
 ***********************************************/
function all_area() {
  $active_pref = active_pref();
  $all_area = array();

  foreach( $active_pref as $data ) {
  // 該当する都道府県があったら、各地域の配列に入れる
    if( $data == '北海道' ) {
      $area_tohoku[] = array('北海道','hokkaido');
    }
    if( $data == '青森県' ) {
      $area_tohoku[] = array('青森県','aomori');
    }
    if( $data == '岩手県' ) {
      $area_tohoku[] = array('岩手県','iwate');
    }
    if( $data == '宮城県' ) {
      $area_tohoku[] = array('宮城県','miyagi');
    }
    if( $data == '秋田県' ) {
      $area_tohoku[] = array('秋田県','akita');
    }
    if( $data == '山形県' ) {
      $area_tohoku[] = array('山形県','yamagata');
    }
    if( $data == '福島県' ) {
      $area_tohoku[] = array('福島県','fukushima');
    }
    if( $data == '茨城県' ) {
      $area_kanto[] = array('茨城県','ibaraki');
    }
    if( $data == '栃木県' ) {
      $area_kanto[] = array('栃木県','tochigi');
    }
    if( $data == '群馬県' ) {
      $area_kanto[] = array('群馬県','gunnma');
    }
    if( $data == '埼玉県' ) {
      $area_kanto[] = array('埼玉県','saitama');
    }
    if( $data == '千葉県' ) {
      $area_kanto[] = array('千葉県','chiba');
    }
    if( $data == '東京都' ) {
      $area_kanto[] = array('東京都','tokyo');
    }
    if( $data == '神奈川県' ) {
      $area_kanto[] = array('神奈川県','kanagawa');
    }
    if( $data == '新潟県' ) {
      $area_chubu[] = array('新潟県','niigata');
    }
    if( $data == '富山県' ) {
      $area_chubu[] = array('富山県','toyama');
    }
    if( $data == '石川県' ) {
      $area_chubu[] = array('石川県','ishikawa');
    }
    if( $data == '福井県' ) {
      $area_chubu[] = array('福井県','fukui');
    }
    if( $data == '山梨県' ) {
      $area_chubu[] = array('山梨県','yamanashi');
    }
    if( $data == '長野県' ) {
      $area_chubu[] = array('長野県','nagano');
    }
    if( $data == '岐阜県' ) {
      $area_chubu[] = array('岐阜県','gifu');
    }
    if( $data == '静岡県' ) {
      $area_chubu[] = array('静岡県','shizuoka');
    }
    if( $data == '愛知県' ) {
      $area_chubu[] = array('愛知県','aichi');
    }
    if( $data == '三重県' ) {
      $area_kinki[] = array('三重県','mie');
    }
    if( $data == '滋賀県' ) {
      $area_kinki[] = array('滋賀県','shiga');
    }
    if( $data == '京都府' ) {
      $area_kinki[] = array('京都府','kyoto');
    }
    if( $data == '大阪府' ) {
      $area_kinki[] = array('大阪府','osaka');
    }
    if( $data == '兵庫県' ) {
      $area_kinki[] = array('兵庫県','hyogo');
    }
    if( $data == '奈良県' ) {
      $area_kinki[] = array('奈良県','nara');
    }
    if( $data == '和歌山県' ) {
      $area_kinki[] = array('和歌山県','wakayama');
    }
    if( $data == '鳥取県' ) {
      $area_chugoku[] = array('鳥取県','tottori');
    }
    if( $data == '島根県' ) {
      $area_chugoku[] = array('島根県','shimane');
    }
    if( $data == '岡山県' ) {
      $area_chugoku[] = array('岡山県','okayama');
    }
    if( $data == '広島県' ) {
      $area_chugoku[] = array('広島県','hiroshima');
    }
    if( $data == '山口県' ) {
      $area_chugoku[] = array('山口県','yamaguchi');
    }
    if( $data == '徳島県' ) {
      $area_shikoku[] = array('徳島県','tokushima');
    }
    if( $data == '香川県' ) {
      $area_shikoku[] = array('香川県','kagawa');
    }
    if( $data == '愛媛県' ) {
      $area_shikoku[] = array('愛媛県','ehime');
    }
    if( $data == '高知県' ) {
      $area_shikoku[] = array('高知県','kouchi');
    }
    if( $data == '福岡県' ) {
      $area_kyusyu[] = array('福岡県','fukuoka');
    }
    if( $data == '佐賀県' ) {
      $area_kyusyu[] = array('佐賀県','saga');
    }
    if( $data == '長崎県' ) {
      $area_kyusyu[] = array('長崎県','nagasaki');
    }
    if( $data == '熊本県' ) {
      $area_kyusyu[] = array('熊本県','kumamoto');
    }
    if( $data == '大分県' ) {
      $area_kyusyu[] = array('大分県','ooita');
    }
    if( $data == '宮崎県' ) {
      $area_kyusyu[] = array('宮崎県','miyagi');
    }
    if( $data == '鹿児島県' ) {
      $area_kyusyu[] = array('鹿児島県','kagoshima');
    }
    if( $data == '沖縄県' ) {
      $area_kyusyu[] = array('沖縄県','okinawa');
    }
  }

  // 各エリア、各都道府県をまとめた最終的な配列'$all_area'
  if( isset($area_tohoku) ) {
    $all_area['北海道・東北地方'] = $area_tohoku;
  }
  if( isset($area_kanto) ) {
    $all_area['関東地方'] = $area_kanto;
  }
  if( isset($area_chubu) ) {
    $all_area['中部地方'] = $area_chubu;
  }
  if( isset($area_kinki) ) {
    $all_area['近畿地方'] = $area_kinki;
  }
  if( isset($area_chugoku) ) {
    $all_area['中国地方'] = $area_chugoku;
  }
  if( isset($area_shikoku) ) {
    $all_area['四国地方'] = $area_shikoku;
  }
  if( isset($area_kyusyu) ) {
    $all_area['九州地方'] = $area_kyusyu;
  }

  return $all_area;
}

/***********************************************
 * sub_area();
 * 都道府県のみの配列作成
 ***********************************************/
function sub_area() {
  $all_area = all_area();
  $sub_area = array();

  foreach( $all_area as $key => $value ) {
    foreach( $value as $child ) {
      $sub_area[$child[0]] = $child[1];
    }
  }

  return $sub_area;
}

/***********************************************
 * pref_lists();
 * 出力部分
 ***********************************************/
function pref_lists() {
  $all_area = all_area();
  $html = '';

  foreach( $all_area as $key => $value ) {
    $length = count( $value ); // 都道府県が何個あるか
    
    if( $length > 4 ) { // 5つ以上で2カラムに
      $html .= '<dl class="clm2">';
    } else {
      $html .= '<dl>';
    }
    $html .= '<dt>'.$key.'</dt>';
    $html .= '<dd>';
    foreach( $value as $child ) {
      $html .= '<div><span data-pref="'.$child[1].'">'.$child[0].'</span></div>';
    }
    $html .= '</dd>';
    $html .= '</dl>';
  }
  return $html;
}