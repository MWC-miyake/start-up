<?php
// wp_head()内に、アーカイブページ用OGPを追加する
function add_archive_ogp() {
  if( !is_archive() ) {
    return false;
  }
  echo '<!--アーカイブ用OGP Image-->'."\n";

  if( is_post_type_archive('products') ) {
    echo '<meta property="og:image" content="'.get_template_directory_uri().'img/ogp/ogpimage_hashimotohomes2.jpg" />'."\n";
  } else {
    echo '<meta property="og:image" content="'.get_template_directory_uri().'img/ogp/ogpimage_hashimotohomes1.jpg" />'."\n";
  }
}
add_action('wp_head', 'add_archive_ogp');