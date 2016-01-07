<?php
/*
Plugin Name: Carbon Fields
Description: WordPress developer-friendly custom fields for post types, taxonomy terms, users, comments, widgets, options and more.
Version: 1.0
Requires at least: 4.0
Tested up to: 4.4
*/

namespace Carbon_Fields;

use Carbon_Fields\Helper\Helper;

define('DIR', dirname(__FILE__));
define('URL', str_replace('\\', '/', str_replace(untrailingslashit(ABSPATH), site_url(), DIR)));

# Initialize helper 
$carbon_helper = new Helper();