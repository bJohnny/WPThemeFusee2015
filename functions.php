<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Header image */
require_once( 'library/custom-header.php' );

/** Add Breadcrumbs */
require_once( 'library/breadcrumbs.php' );

/** Import all necessary plugins */
/* comment the following line to get acces to the ACF Admin Panel in the BE */
define( 'ACF_LITE', true );

/** Add Advanced Custom Fields */
require_once( 'plugin/advanced-custom-fields/acf.php' );
require_once( 'plugin/advanced-custom-fields-font-awesome/acf-font-awesome.php' );

/** Add a post type Marketing Boxes */
require_once( 'plugin/marketing-boxes/marketing-boxes.php' );

/** Add a post type orbit Slider */
require_once( 'plugin/orbit-slider.php' );

/** Add a post type team members */
require_once( 'plugin/team-profile.php' );

/** Add a post type Examples */
require_once( 'plugin/fusee-examples.php' );

/** Create all custom fields */
require_once( 'library/fusee2015-custom-types-acfs.php' );