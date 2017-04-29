<?php
/**
 * BuddyPress - Groups
 *
 * @package BuddyPress
 * @subpackage inside-voice
 */
?>
<?php get_template_part( 'header', 'groups' ); ?>
<div class="mdl-grid">
<div class="mdl-cell mdl-cell--8-col">
<div id="buddypress">
		<h2 class="bp-screen-reader-text"><?php
			/* translators: accessibility text */
			_e( 'Groups directory', 'buddypress' );
		?></h2>

		<div id="groups-dir-list" class="groups dir-list">
			<?php bp_get_template_part( 'groups/groups-loop' ); ?>
		</div><!-- #groups-dir-list -->

		<?php wp_nonce_field( 'directory_groups', '_wpnonce-groups-filter' ); ?>

</div><!-- #buddypress -->
</div>
<div class="mdl-cell mdl-cell--4-col">
<?php bp_get_template_part( 'common/search/dir-search-form' ); ?>
</div>
</div>

