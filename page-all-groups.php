<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inside_Voice
 */
?>

<?php get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/discussion-example.jpg" width="100%" />

<?php get_footer();
