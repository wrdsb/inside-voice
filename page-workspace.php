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
					<!-- Title -->
					<?php if ( is_front_page() || is_home() ) : ?>
						<span class="mdl-layout-title">Home</span>
					<?php else : ?>
						<span class="mdl-layout-title">Schoolio</span>
					<?php endif; ?>
					<div class="mdl-layout-spacer"></div>
					<nav class="mdl-navigation mdl-cell--hide-tablet mdl-cell--hide-phone">
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/"><i class="material-icons">home</i> Home</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo get_ivoice_member_url('places'); ?>"><i class="material-icons">place</i> My Places</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/groups/"><i class="material-icons">group</i> Groups</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/services/"><i class="material-icons">account_balance</i> Services</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/guides/"><i class="material-icons">import_contacts</i> Guides</a>
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/directory"><i class="material-icons">recent_actors</i> 411</a>
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
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
          <a href="#posts" class="mdl-layout__tab is-active">Posts</a>
          <a href="#pages" class="mdl-layout__tab">Pages</a>
          <a href="#discussion" class="mdl-layout__tab">Discussion</a>
          <a href="#calendar" class="mdl-layout__tab">Calendar</a>
          <a href="#files" class="mdl-layout__tab">Files</a>
          <a href="#members" class="mdl-layout__tab">Members</a>
        </div>
			</header>

			<?php get_template_part( 'drawer' ); ?>

			<main id="main" class="mdl-layout__content site-main" role="main" style="background-color:#E0E0E0;">

        <div class="mdl-layout__tab-panel is-active" id="posts">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
              <div id="post-4152" class="mdl-card mdl-shadow--8dp post-4152 post type-post status-publish format-standard hentry category-its category-news" style="width:100%">
                <div class="mdl-card__menu" style="display:flex; box-sizing:border-box; align-items:center; background-color:#009688">
                  <span style="color:white;"><i class="material-icons">info</i></span>
                </div>
                <div class="mdl-card__title mdl-card--expand" style="background-color:#009688">
                  <h2>
                    <div class="mdl-card__title-text" style="color:white">Some Message from School Admin</div>
                    <div class="mdl-card__subtitle-text" style="color:white">April 26, 2017 at 11:51 am</div>
                  </h2>
                </div>
                <div class="mdl-card__supporting-text">
                  <p>This is where the post excerpt goes. It can be kinda long, or short. It might even be the whole content of the post. Then again it may not. That way is a very nice way. It's pleasant down that way too! Of course, people do go both ways. That's the trouble. I can't make up my mind. I haven't got a brain. Only straw [&hellip;]</p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="color:#009688" href="'. get_permalink($post->ID) . '">Read Full Post</a>
                </div>
              </div><!-- #post-## -->
              <p></p>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
              <div id="post-4152" class="mdl-card mdl-shadow--8dp post-4152 post type-post status-publish format-standard hentry category-its category-news" style="width:100%">
                <div class="mdl-card__menu" style="display:flex; box-sizing:border-box; align-items:center; background-color:#E64A19">
                  <span style="color:white;"><i class="material-icons">info</i></span>
                </div>
                <div class="mdl-card__title mdl-card--expand" style="background-color:#E64A19">
                  <h2>
                    <div class="mdl-card__title-text" style="color:white">News from 3rd Floor</div>
                    <div class="mdl-card__subtitle-text" style="color:white">April 26, 2017 at 11:51 am</div>
                  </h2>
                </div>
                <div class="mdl-card__supporting-text">
                  <p>This is where the post excerpt goes. It can be kinda long, or short. It might even be the whole content of the post. Then again it may not. That way is a very nice way. It's pleasant down that way too! Of course, people do go both ways. That's the trouble. I can't make up my mind. I haven't got a brain. Only straw [&hellip;]</p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="color:#E64A19" href="'. get_permalink($post->ID) . '">Read Full Post</a>
                </div>
              </div><!-- #post-## -->
              <p></p>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
              <div id="post-4152" class="mdl-card mdl-shadow--8dp post-4152 post type-post status-publish format-standard hentry category-its category-news" style="width:100%">
                <div class="mdl-card__menu" style="display:flex; box-sizing:border-box; align-items:center; background-color:#673AB7">
                  <span style="color:white;"><i class="material-icons">info</i></span>
                </div>
                <div class="mdl-card__title mdl-card--expand" style="background-color:#673AB7">
                  <h2>
                    <div class="mdl-card__title-text" style="color:white">News from Corp?</div>
                    <div class="mdl-card__subtitle-text" style="color:white">April 26, 2017 at 11:51 am</div>
                  </h2>
                </div>
                <div class="mdl-card__supporting-text">
                  <p>This is where the post excerpt goes. It can be kinda long, or short. It might even be the whole content of the post. Then again it may not. That way is a very nice way. It's pleasant down that way too! Of course, people do go both ways. That's the trouble. I can't make up my mind. I haven't got a brain. Only straw [&hellip;]</p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="color:#673AB7" href="'. get_permalink($post->ID) . '">Read Full Post</a>
                </div>
              </div><!-- #post-## -->
              <p></p>
            </div>
          </div>
        </div>

        <div class="mdl-layout__tab-panel" id="pages">
          <img src="<?php echo get_template_directory_uri(); ?>/page-example.png" width="100%" />
        </div>

        <div class="mdl-layout__tab-panel" id="discussion">
          <img src="<?php echo get_template_directory_uri(); ?>/discussion-example.jpg" width="100%" />
        </div>

        <div class="mdl-layout__tab-panel" id="calendar">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--8-col">
              <img src="<?php echo get_template_directory_uri(); ?>/calendar-example.png" width="100%" />
            </div>
            <div class="mdl-cell mdl-cell--4-col">
              <img src="<?php echo get_template_directory_uri(); ?>/calendar-example.jpg" width="100%" />
            </div>
          </div>
        </div>

        <div class="mdl-layout__tab-panel" id="files">
        </div>

        <div class="mdl-layout__tab-panel" id="members">
        </div>

        <footer class="mdl-mega-footer">
        	<div class="mdl-mega-footer--top-section">
        		<div class="mdl-mega-footer--drop-down-section">
        			<h1 class="mdl-mega-footer--heading">Governance</h1>
        			<ul class="mdl-mega-footer--link-list">
        				<li><a href="/system-memos/">System Memos</a></li>
        				<li><a href="/policyprocedure/?page_id=71">Policies</a></li>
        				<li><a href="/policyprocedure/?page_id=310">Procedures</a></li>
        				<li><a href="/policyprocedure/?page_id=1047">Protocols/Guidelines</a></li>
        				<li><a href="/policyprocedure/?page_id=500">Forms</a></li>
        			</ul>
        		</div>
        		<div class="mdl-mega-footer--drop-down-section">
        			<h1 class="mdl-mega-footer--heading">G Suite (Google Apps)</h1>
        			<ul class="mdl-mega-footer--link-list">
        				<li><a href="https://mail.google.com">Google Mail</a></li>
        				<li><a href="https://calendar.google.com">Google Calendar</a></li>
        				<li><a href="https://drive.google.com">Google Drive</a></li>
        				<li><a href="https://docs.google.com/document/?usp=docs_ald">Google Docs</a></li>
        				<li><a href="https://docs.google.com/spreadsheets/?usp=sheets_ald">Google Sheets</a></li>
        			</ul>
        		</div>
        		<div class="mdl-mega-footer--drop-down-section">
        			<h1 class="mdl-mega-footer--heading">Online Tools</h1>
        			<ul class="mdl-mega-footer--link-list">
        				<li><a href="http://waterworks.wrdsb.on.ca/">Waterworks (Web Version)</a></li>
        				<li><a href="https://ess.wrdsb.ca/ipps">Employee Self-Service Portal</a></li>
        				<li><a href="#">Trillium Report Centre</a></li>
        				<li><a href="http://wrdsb.ebasefm.com/login">Rentals</a></li>
        				<li><a href="/online-tools/">More...</a></li>
        			</ul>
        		</div>
        		<div class="mdl-mega-footer--drop-down-section">
        			<h1 class="mdl-mega-footer--heading">HELP!</h1>
        			<ul class="mdl-mega-footer--link-list">
        				<li><a href="https://msdsmanagement.msdsonline.com/company/ccc3134c-662d-499b-862d-39480a4688ed/">MSDS Quick Search</a></li>
        				<li><a href="http://osbie.wrdsb.ca/">OSBIE Incident Reporting System</a></li>
        				<li><a href="https://itservicedesk.wrdsb.ca/">IT Service Desk (Help Desk)</a></li>
        				<li><a href="http://staff.wrdsb.ca/eguide/">Single Source Resource (eGuide)</a></li>
        				<li><a href="/online-tools/">More...</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="mdl-mega-footer--middle-section">
        		<div class="mdl-mega-footer--drop-down-section">
        			<h1 class="mdl-mega-footer--heading">Links for Teachers</h1>
        			<ul class="mdl-mega-footer--link-list">
        				<li><a href="https://etrillium.wrdsb.ca/twebschool/TWEBATT/ptEntry.action?moduleId=TWEBATT">Web Attendance</a></li>
        				<li><a href="https://etrillium.wrdsb.ca/trillium/">TWEA</a></li>
        				<li><a href="http://portalplus.wrdsb.ca/">Collection Plus</a></li>
        				<li><a href="https://s4s.wrdsb.ca/">Support 4 Students (S4S)</a></li>
        				<li><a href="https://etrillium.wrdsb.ca/twebboard/TWEBESL">ESL Tracker</a></li>
        			</ul>
        		</div>
        		<div class="mdl-mega-footer--drop-down-section">
        			<h1 class="mdl-mega-footer--heading">Training</h1>
        			<ul class="mdl-mega-footer--link-list">
        				<li><a href="http://training.staff.wrdsb.ca/">Online Employee Training Centre</a></li>
        				<li><a href="http://wrdsb.pdplace.com/">PD Place</a></li>
        				<li><a href="https://wrdsb.pdplace.com/resources/1/resource213.pdf">Synervoice Training Guide</a></li>
        				<li><a href="https://staff.wrdsb.ca/training/">All Training Resources</a></li>
        			</ul>
        		</div>
        		<div class="mdl-mega-footer--drop-down-section">
        			<h1 class="mdl-mega-footer--heading">IT Help</h1>
        			<ul class="mdl-mega-footer--link-list">
        				<li><a href="https://mypassword.wrdsb.ca/">Password Reset</a></li>
        				<li><a href="https://itservicedesk.wrdsb.ca/">IT Service Desk (Help Desk)</a></li>
        				<li><a href="http://staff.wrdsb.ca/twea/">TWEA Handbook</a></li>
        				<li><a href="http://staff.wrdsb.ca/wordpress/">WordPress Handbook</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="mdl-mega-footer--bottom-section">
        		<div class="mdl-logo">
        			More Stuff
        		</div>
        		<ul class="mdl-mega-footer--link-list">
        			<li><a href="#">Link</a></li>
        			<li><a href="#">Link</a></li>
        			<li><a href="#">Link</a></li>
        		</ul>
        	</div>
        </footer>
			</main>
		</div> <!-- #page .mdl-layout -->
		<?php wp_footer(); ?>
		<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	</body>
</html>
