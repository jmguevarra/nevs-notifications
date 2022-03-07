<?php
/**
 * @package Nevs Notifications
 * @version 1.0.0
 */

/*
Plugin Name: Nevs Notifications
Plugin URI: https://github.com/jmguevarra/nevs-notifications
Description: Simple plugin that notify certain users for newly created page/post
Version: 1.0.0
Author: Jaime I. Guevarra Jr.
Author URI: https://github.com/jmguevarra/
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: nevs-notifications
*/

if(  !defined('WPINC') ){
    die;
}

//define variables
define('NEVSNOTIF_PLUGIN_DIR', dirname(__FILE__));
define('NEVSNOTIF_VERSION', '1.0.0');
define('NEVSNOTIF_TDOMAIN', 'nevs-notifications');

require_once 'includes/tools-manager.php';
require_once 'includes/fields-settings.php';



 