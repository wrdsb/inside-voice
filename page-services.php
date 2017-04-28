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

get_header(); ?>
                        </header>
                        <?php get_template_part( 'drawer' ); ?>

      <main class="mdl-layout__content">
  			<div class="mdl-grid">
  				<div class="mdl-cell mdl-cell--4-col">
  				  <div class="mdl-card mdl-shadow--2dp" style="margin-bottom:20px; width:100%">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Human Resource Services</h2>
              </div>
              <div class="mdl-card__supporting-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris sagittis pellentesque lacus eleifend lacinia...
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Visit HR
                </a>
              </div>
              <div class="mdl-card__menu">
                <button id="hr-service-add-location" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                  <i class="material-icons">add_location</i>
                </button>
                <div class="mdl-tooltip" data-mdl-for="hr-service-add-location">
                  Add to My Places
                </div>
              </div>
            </div>
  				  <div class="mdl-card mdl-shadow--2dp" style="margin-bottom:20px; width:100%">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Communications</h2>
              </div>
              <div class="mdl-card__supporting-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris sagittis pellentesque lacus eleifend lacinia...
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Visit Communications
                </a>
              </div>
              <div class="mdl-card__menu">
                <button id="communications-service-add-location" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                  <i class="material-icons">add_location</i>
                </button>
                <div class="mdl-tooltip" data-mdl-for="communications-service-add-location">
                  Add to My Places
                </div>
              </div>
            </div>
  				</div>
  				<div class="mdl-cell mdl-cell--4-col">
  				  <div class="mdl-card mdl-shadow--2dp" style="margin-bottom:20px; width:100%">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Information Technology Services</h2>
              </div>
              <div class="mdl-card__supporting-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris sagittis pellentesque lacus eleifend lacinia...
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Visit ITS
                </a>
              </div>
              <div class="mdl-card__menu">
                <button id="its-service-add-location" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                  <i class="material-icons">add_location</i>
                </button>
                <div class="mdl-tooltip" data-mdl-for="its-service-add-location">
                  Add to My Places
                </div>
              </div>
            </div>
  				  <div class="mdl-card mdl-shadow--2dp" style="margin-bottom:20px; width:100%">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Procurement Services</h2>
              </div>
              <div class="mdl-card__supporting-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris sagittis pellentesque lacus eleifend lacinia...
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Visit Procurement
                </a>
              </div>
              <div class="mdl-card__menu">
                <button id="procurement-service-add-location" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                  <i class="material-icons">add_location</i>
                </button>
                <div class="mdl-tooltip" data-mdl-for="procurement-service-add-location">
                  Add to My Places
                </div>
              </div>
            </div>
  				</div>
  				<div class="mdl-cell mdl-cell--4-col">
  				  <div class="mdl-card mdl-shadow--2dp" style="margin-bottom:20px; width:100%">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Financial Services</h2>
              </div>
              <div class="mdl-card__supporting-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris sagittis pellentesque lacus eleifend lacinia...
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Visit Finance
                </a>
              </div>
              <div class="mdl-card__menu">
                <button id="finance-service-add-location" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                  <i class="material-icons">add_location</i>
                </button>
                <div class="mdl-tooltip" data-mdl-for="finance-service-add-location">
                  Add to My Places
                </div>
              </div>
            </div>
  				  <div class="mdl-card mdl-shadow--2dp" style="margin-bottom:20px; width:100%">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Learning Services</h2>
              </div>
              <div class="mdl-card__supporting-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris sagittis pellentesque lacus eleifend lacinia...
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Visit Learning Services
                </a>
              </div>
              <div class="mdl-card__menu">
                <button id="ls-service-add-location" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                  <i class="material-icons">add_location</i>
                </button>
                <div class="mdl-tooltip" data-mdl-for="ls-service-add-location">
                  Add to My Places
                </div>
              </div>
            </div>
  				</div>
  			</div>


<?php
get_footer();
