<?php
/***********************************************************
* 管理画面用CSS
***********************************************************/
function my_admin_style() {
  echo '<style>
  .customize-control-title {
    margin-top: 24px;
  }
  .customize-control-description p {
    font-style: normal;
    color: #000;
    margin: 0px;
  }
  #_customize-input-my_theme_options_thumb_dummy,
  #_customize-input-my_theme_options_thumb_dummy2 {
    display: none;
  }
  </style>'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');