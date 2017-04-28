<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inside_Voice
 */

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Description of our content.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<!-- Add to homescreen for Chrome on Android -->
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="icon" sizes="192x192" href="images/android-desktop.png">

		<!-- Add to homescreen for Safari on iOS -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="Material Design Lite">
		<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

		<!-- Tile icon for Win8 (144x144 + tile color) -->
		<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
		<meta name="msapplication-TileColor" content="#3372DF">

		<link rel="shortcut icon" href="images/favicon.png">

		<!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
		<!--
		<link rel="canonical" href="http://www.example.com/">
		-->

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-orange.min.css">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<?php //TODO: style this link ?>
			<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'inside-voice' ); ?></a>-->

			<header id="masthead" class="mdl-layout__header" role="banner">
				<div class="mdl-layout__header-row" id="top-header">
					<div class="mdl-layout-spacer"></div>
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/"><i class="material-icons">home</i> Home</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/"><i class="material-icons">place</i> My Places</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/"><i class="material-icons">group</i> Groups</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/"><i class="material-icons">account_balance</i> Services</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/"><i class="material-icons">import_contacts</i> Guides</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/"><i class="material-icons">contacts</i> 411</a>
					</nav>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
							<i class="material-icons">search</i>
						</label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="text" id="search-field">
						</div>
					</div>
				</div>
				<div class="mdl-layout__header-row">
					<!-- Title -->
					<?php if ( is_front_page() && is_home() ) : ?>
						<span class="mdl-layout-title"><?php bloginfo( 'name' ); ?></span>
					<?php else : ?>
						<span class="mdl-layout-title"><?php echo get_the_title(); ?></span>
					<?php endif; ?>
				</div>
			</header>
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title">Your Name</span>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href=""><i class="material-icons">notifications</i>&nbsp;&nbsp;&nbsp;Notifications</a>
					<a class="mdl-navigation__link" href=""><i class="material-icons">message</i>&nbsp;&nbsp;&nbsp;Messages</a>
					<a class="mdl-navigation__link" href=""><i class="material-icons">announcement</i>&nbsp;&nbsp;&nbsp;News</a>
					<div class="insidevoice-drawer-separator"></div>
					<a class="mdl-navigation__link" href=""><i class="material-icons">contacts</i>&nbsp;&nbsp;&nbsp;My Connections</a>
					<a class="mdl-navigation__link" href=""><i class="material-icons">group</i>&nbsp;&nbsp;&nbsp;My Groups</a>
					<a class="mdl-navigation__link" href=""><i class="material-icons">forum</i>&nbsp;&nbsp;&nbsp;My Forums</a>
					<a class="mdl-navigation__link" href=""><i class="material-icons">place</i>&nbsp;&nbsp;&nbsp;My Places</a>
					<div class="insidevoice-drawer-separator"></div>
					<a class="mdl-navigation__link" href=""><i class="material-icons">account_circle</i>&nbsp;&nbsp;&nbsp;My Profile</a>
					<a class="mdl-navigation__link" href=""><i class="material-icons">settings</i>&nbsp;&nbsp;&nbsp;My Settings</a>
					<a class="mdl-navigation__link" href=""><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;&nbsp;Log out</a>
				</nav>
			</div>
