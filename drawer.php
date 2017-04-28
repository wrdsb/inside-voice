<div class="mdl-layout__drawer">
	<span class="mdl-layout-title"><?php echo get_ivoice_member_name(); ?></span>
	<nav class="mdl-navigation">
		<!--
		<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/"><i class="material-icons">home</i>&nbsp;&nbsp;&nbsp;Home</a>
		<a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo get_ivoice_member_url('places'); ?>"><i class="material-icons">place</i>&nbsp;&nbsp;&nbsp;My Places</a>
		<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/groups/"><i class="material-icons">group</i>&nbsp;&nbsp;&nbsp;Groups</a>
		<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/services/"><i class="material-icons">account_balance</i>&nbsp;&nbsp;&nbsp;Services</a>
		<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/guides/"><i class="material-icons">import_contacts</i>&nbsp;&nbsp;&nbsp;Guides</a>
		<a class="mdl-navigation__link mdl-typography--text-uppercase" href="/members"><i class="material-icons">contacts</i>&nbsp;&nbsp;&nbsp;411</a>
		<div class="insidevoice-drawer-separator"></div>
		-->
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('notifications'); ?>"><i class="material-icons">notifications</i>&nbsp;&nbsp;&nbsp;Notifications</a>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('messages'); ?>"><i class="material-icons">message</i>&nbsp;&nbsp;&nbsp;Messages</a>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('activity'); ?>"><i class="material-icons">message</i>&nbsp;&nbsp;&nbsp;Activity</a>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('news'); ?>"><i class="material-icons">announcement</i>&nbsp;&nbsp;&nbsp;News</a>
		<div class="insidevoice-drawer-separator"></div>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('friends'); ?>"><i class="material-icons">contacts</i>&nbsp;&nbsp;&nbsp;My Connections</a>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('groups'); ?>"><i class="material-icons">group</i>&nbsp;&nbsp;&nbsp;My Groups</a>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('forums'); ?>"><i class="material-icons">forum</i>&nbsp;&nbsp;&nbsp;My Forums</a>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('blogs'); ?>"><i class="material-icons">place</i>&nbsp;&nbsp;&nbsp;My Places</a>
		<div class="insidevoice-drawer-separator"></div>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('profile'); ?>"><i class="material-icons">account_circle</i>&nbsp;&nbsp;&nbsp;My Profile</a>
		<a class="mdl-navigation__link" href="<?php echo get_ivoice_member_url('edit'); ?>"><i class="material-icons">settings</i>&nbsp;&nbsp;&nbsp;My Settings</a>
		<a class="mdl-navigation__link" href="<?php echo wp_logout_url(); ?>"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;&nbsp;Log out</a>
	</nav>
</div>
