<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="author" content="Tania Rascia">
	<meta name="description" content="Minimalist web design and development blog.">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Tania Rascia</title>

	<link href="<?php bloginfo('template_directory');?>/css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" title="blue" href="<?php bloginfo('template_directory');?>/css/style.min.css">
	<link rel="alternate stylesheet" type="text/css" title="pink" href="<?php bloginfo('template_directory');?>/css/newmoon.css	">
	
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<?php wp_head(); ?>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42068444-1', 'auto');
  ga('send', 'pageview');
	</script>
	
</head>

<body onload="set_style_from_cookie()">
	<header>
			<div class="flex vertical">
				<div class="box">
					<a href="<?php bloginfo('wpurl');?>"><img src="<?php bloginfo('template_directory');?>/images/tr.png" class="logo-image"></a>
				</div>
				<div class="box social">
					<a href="https://twitter.com/taniarascia"><img src="<?php bloginfo('template_directory');?>/images/twitter.png" class="darken"></a>&nbsp;
					<a href="https://github.com/taniarascia"><img src="<?php bloginfo('template_directory');?>/images/github-dark.png" class="darken"></a>&nbsp;
					<a href="<?php bloginfo('wpurl');?>/feed"><img src="<?php bloginfo('template_directory');?>/images/rss.png" class="darken"></a>
				</div>
			</div>
	</header>
	
	<?php if (is_front_page()) { ?>
<div class="center">
	<a class="button" href="<?php bloginfo('wpurl');?>/category/tutorials">Tutorials</a><a class="button no-left-border" href="<?php bloginfo('wpurl');?>/category/snippets">Snippets</a>
</div>
	<div class="break"></div>
	<?php } ?>