<!doctype html>

<!--[if lt IE 9]> <html class="no-js lte9 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!-->
<html>
	<head>
		<title><?php wp_title("::", "true", "right");?> <?php bloginfo('name'); ?></title>
		<?php wp_head();?>
	</head>
	<body <?php body_class( 'class-name' ); ?>>
		<header class="main-header">
			<hgroup>
				<h1><?php bloginfo('name'); ?></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</hgroup>
		</header>