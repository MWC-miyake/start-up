<?php
// Add Theme Supports
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Include Functions
get_template_part('functions/editor');
get_template_part('functions/menu');
get_template_part('functions/mobile');
get_template_part('functions/short_code');
get_template_part('functions/widgets');
get_template_part('functions/category_list');
get_template_part('functions/new');
get_template_part('functions/pagenation');
get_template_part('functions/thumbnails');
get_template_part('functions/title');

// Theme Customizer
// get_template_part('customizer/customize');
// get_template_part('customizer/style');
// get_template_part('customizer/customizer-repeater/functions');
// get_template_part('customizer/repeater');