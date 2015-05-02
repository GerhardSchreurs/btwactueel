<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="wp-content/themes/btwactueel/css/style.css" rel="stylesheet"
	type="text/css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<header>
			<div id="headerTop">
				<div id="logo">
					<div id="btw">BTW</div>
					<div id="actueel">Actueel</div>
				</div>
			</div>
			<div id="headerBot">
				<nav id="topmenu">
					<a href="#" class="seperator">BTW Actueel</a> <a href="#"
						class="seperator">Dossiers</a> <a href="#" class="seperator">Over
						ons</a> <a href="#">Zoeken</a>
				</nav>
			</div>
		</header>