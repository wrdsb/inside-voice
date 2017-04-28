<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inside_Voice
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'mdl-card mdl-shadow--8dp' ); ?> style="width:100%">
	<div class="mdl-card__menu" style="display:flex; box-sizing:border-box; align-items:center; background-color:#0D47A1">
		<span style="color:white;"><i class="material-icons">info</i></span>
	</div>
	<div class="mdl-card__title mdl-card--expand" style="background-color:#0D47A1">
		<h2>
			<div class="mdl-card__title-text" style="color:white"><?php echo get_the_title() ?></div>
			<div class="mdl-card__subtitle-text" style="color:white"><?php echo get_the_date('F j, Y') .' at '. get_the_time('g:i a') ?></div>
		</h2>
	</div>
	<div class="mdl-card__supporting-text">
		<?php the_excerpt(); ?>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="color:#0D47A1" href="'. get_permalink($post->ID) . '">Read Full Post</a>
	</div>
</div><!-- #post-## -->
<p></p>
