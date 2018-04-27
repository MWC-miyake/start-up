<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title( '｜', true, 'right' ); bloginfo('name');?></title>
<?php if(is_front_page()): ?>
<meta name="description" content="<?php bloginfo('description'); ?>"/>
<?php endif; ?>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
