<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body>

<div id="access_nav">
<p><a title="Skip navigation, access key S" accesskey="s" rel="nofollow" href="#main">Skip to the content</a> \ <a title="Accessibility statement, access key 0" accesskey="0" href="http://www.headstar.com/site/scripts/about_us.php">accessibility</a></p>
</div>


<div id="header">

<div id="search">
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<input type="text" size="14" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
		<input src="<?php bloginfo('stylesheet_directory'); ?>/i/button_search.png" value="search" type="image" id="searchsubmit" />
	</form>
</div>

<div id="identity">
<h1><a href="<?php echo get_settings('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
<h2 class="description"><em>
<?php bloginfo('description'); ?></em>
</h2>
</div>

</div>

<div id="primary_nav">

	<ul>
		<li id="a1"><a accesskey="1" title="Homepage, access key 1" href="<?php echo get_settings('home'); ?>/">E-Access Bulletin Live Home</a></li>
		<li><span><a title="Back to Headstar" href="http://www.headstar.com">Headstar.com</a></span></li>
	</ul>

</div>

<div id="wrap">
<div id="container">
