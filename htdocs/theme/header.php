<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title( '｜', true, 'right' ); bloginfo('name');?></title>
<?php if(is_home()): ?>
<meta name="description" content="<?php bloginfo('description'); ?>"/>
<?php endif; ?>
<?php if(is_mobile()): ?>
<meta name="viewport" content="target-densitydpi=device-dpi, width=640,maximum-scale=1.0,user-scalable=yes">
<?php else: ?>
<meta name="viewport" content="target-densitydpi=device-dpi, width=1300,maximum-scale=1.0,user-scalable=yes">
<?php endif; ?>
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/common/css/default.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/common/css/style.css">
<!--<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/common/css/responsive.css">-->
<!--<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/common/css/wordpress.css">-->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/common/css/print.css" media="print">
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/common/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/common/js/jquery.autoKana.js"></script>
<script styp="text/javascript" src="<?php bloginfo('template_directory');?>/common/js/zipaddr7.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/common/js/script.js"></script>
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_directory');?>/common/js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/common/js/respond.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/common/js/analytics.js"></script>
<?php wp_head(); ?>
</head>
<body>
