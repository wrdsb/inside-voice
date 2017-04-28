<!-- Tabs -->
<div class="mdl-layout__tab-bar mdl-js-ripple-effect" aria-label="<?php esc_attr_e( 'Groups directory main navigation', 'buddypress' ); ?>">
        <a href="<?php bp_groups_directory_permalink(); ?>" class="mdl-layout__tab is-active">All Groups (<?php echo bp_get_total_group_count(); ?>)</a>
        <?php if ( bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) : ?>
        <a href="<?php echo bp_loggedin_user_domain() . bp_get_groups_slug() . '/my-groups/'; ?>" class="mdl-layout__tab">My Groups (<?php echo bp_get_total_group_count_for_user( bp_loggedin_user_id() ); ?>)</a>
        <?php endif; ?>
        <a href="/groups/create/" class="mdl-layout__tab">Create a Group</a>
</div>
</header>
<?php get_template_part( 'drawer' ); ?>

<div id="content" class="site-content">
        <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

