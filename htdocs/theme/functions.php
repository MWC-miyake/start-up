<?php
// Add Theme Supports
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Include Models
get_template_part('functions/model/editor');
get_template_part('functions/model/menu');
get_template_part('functions/model/mobile');
get_template_part('functions/model/short_code');
get_template_part('functions/model/thumbnails');
get_template_part('functions/model/widgets');

// Include Views
get_template_part('functions/view/category_list');
get_template_part('functions/view/new');
get_template_part('functions/view/pagenation');
get_template_part('functions/view/thumbnails');
get_template_part('functions/view/title');

// Theme Customizer
// get_template_part('customizer/customize');
// get_template_part('customizer/style');
// get_template_part('customizer/customizer-repeater/functions');
// get_template_part('customizer/repeater');