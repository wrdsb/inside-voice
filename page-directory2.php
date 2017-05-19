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

  			<div class="mdl-grid" style="background-color:#E0E0E0;">
  				<div class="mdl-cell mdl-cell--3-col">
  				  <div class="mdl-card mdl-shadow--2dp" style="margin-bottom:20px; width:100%">
              <div class="mdl-card__title mdl-card--expand" style="color: #fff; background-color:#009688;">
                <h2 class="mdl-card__title-text">Somewhere Public School</h2>
              </div>
              <div class="mdl-card__supporting-text">
                This private workspace is automatically assigned to members of the staff at Somewhere Public School.
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/schoolio">
                  Visit Team Workspace
                </a>
              </div>
            </div>
  				</div>
  				<div class="mdl-cell mdl-cell--6-col">
            <ul class="demo-list-three mdl-list">
              <li class="mdl-list__item mdl-list__item--three-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>Bryan Cranston</span>
                  <span class="mdl-list__item-text-body">
                    <span class="wrdsb-contact__phone"><i class="material-icons">phone</i> 123-122-1234 x3456</span>
                    <span class="wrdsb-contact__email"><i class="material-icons">email</i> bryan_cranston@wrdsb.ca</span>
                    <span class="wrdsb-contact__location"><i class="material-icons">location_on</i> ECI</span>
                  </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                  </button>
                  
                  <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                    <li class="mdl-menu__item">Some Action</li>
                    <li class="mdl-menu__item">Another Action</li>
                    <li disabled class="mdl-menu__item">Disabled Action</li>
                    <li class="mdl-menu__item">Yet Another Action</li>
                  </ul>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--three-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons  mdl-list__item-avatar">person</i>
                  <span>Aaron Paul</span>
                  <span class="mdl-list__item-text-body">
                    Aaron Paul played the role of Jesse in Breaking Bad. He also featured in
                    the "Need For Speed" Movie.
                  </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--three-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons  mdl-list__item-avatar">person</i>
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-text-body">
                    Bob Odinkrik played the role of Saul in Breaking Bad. Due to public fondness for the
                    character, Bob stars in his own show now, called "Better Call Saul".
                  </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                </span>
              </li>
            </ul>
          </div>
  				<div class="mdl-cell mdl-cell--3-col">
  				  <div class="mdl-card mdl-shadow--2dp" style="margin-bottom:20px; width:100%">
              <div class="mdl-card__title mdl-card--expand" style="color: #fff; background-color:#9C27B0;">
                <h2 class="mdl-card__title-text">Opt-in Group</h2>
              </div>
              <div class="mdl-card__supporting-text">
                This group is open to all WRDSB staff.
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="">
                  Visit Group
                </a>
              </div>
            </div>
  				</div>
  			</div>

<?php get_footer();
