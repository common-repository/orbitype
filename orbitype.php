<?php
/*
Plugin Name: Orbitype
Plugin URI: https://orbitype.com/
Description: Orbitype is a SEO & Workflow focused external backend ("WP-ADMIN"). Orbitype combines the tools most commonly used by online entrepreneurs to help them work efficiently and smoothly. Your content will be merged with Google SEO data and provide you with clear statistics for each piece of content on your website.
Version: 1.0.0
Requires at least: 5.6
Author: Webentertainer
Author URI: https://orbitype.com/
License: GNU GPLv2 with Commons Clause
License URI: http://www.gnu.org/licenses/gpl-2.0.html

*/

if (!defined('ABSPATH')) {
    exit;
}

include dirname(__FILE__) . '/constants.php';

// load modules
include dirname(__FILE__) . '/modules/login-footer.php';
include dirname(__FILE__) . '/modules/dashboard-widget.php';
include dirname(__FILE__) . '/modules/menu-links.php';
include dirname(__FILE__) . '/modules/row-actions.php';
include dirname(__FILE__) . '/modules/admin-bar.php';
include dirname(__FILE__) . '/modules/rest-api-meta.php';
include dirname(__FILE__) . '/modules/rest-api-plugins-list.php';
