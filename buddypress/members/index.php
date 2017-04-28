<?php
/**
 * BuddyPress - Members
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */
?>
<?php get_template_part( 'header', 'members' ); ?>

<div class="mdl-grid">
<div class="mdl-cell mdl-cell--8-col">
<div id="buddypress">
		<h2 class="bp-screen-reader-text"><?php
			/* translators: accessibility text */
			_e( 'Members directory', 'buddypress' );
		?></h2>

		<div id="members-dir-list" class="members dir-list">
			<?php bp_get_template_part( 'members/members-loop' ); ?>
		</div><!-- #members-dir-list -->

		<?php

		/**
		 * Fires and displays the members content.
		 *
		 * @since 1.1.0
		 */
		do_action( 'bp_directory_members_content' ); ?>

		<?php wp_nonce_field( 'directory_members', '_wpnonce-member-filter' ); ?>
</div><!-- #buddypress -->
</div>
<div class="mdl-cell mdl-cell--4-col">
	<?php bp_get_template_part( 'common/search/dir-search-form' ); ?>
</div>
</div>

