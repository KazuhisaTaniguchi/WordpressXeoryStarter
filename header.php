<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="UTF-8">
	<title><?php bzb_title(); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">

<?php wp_head(); ?>

<?php echo get_option('analytics_tracking_code');?>
<?php echo get_option('webmaster_tool');?>

</head>

<body <?php body_class();?> itemschope="itemscope" itemtype="http://schema.org/WebPage">

<header id="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<p class="testweb">
	あいうえお
</p>
</header>


<nav id="gnav" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">

</nav>

