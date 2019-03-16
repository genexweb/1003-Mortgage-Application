<?php
/**
 * @wordpress-plugin
 * Plugin Name:       1003 Mortgage Application
 * Plugin URI:        https://lenderd.com
 * Description:       1003 Mortgage Application provides Affordable Mortgages and Award-Winning Client Service.
 * Version:           1.0.0
 * Author:            Lenderd
 * Author URI:        https://lenderd.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mortgage_app
 * Domain Path:       /languages
 * @link              https://lenderd.com
 * @since             1.0.0
 * @package           mortgage_application
*/
// If this file is called directly, abort.
defined('ABSPATH') OR die("Access denied!");
/* DEFINED CONSTANT */
define('MORTGAGE_APP_BASE_PATH', plugin_dir_path(__FILE__));
define('MORTGAGE_APP_BASE_URL', plugin_dir_url(__FILE__));
/**
* First time initializetion:
*/
include_once(MORTGAGE_APP_BASE_PATH . 'inc\initialize-plugin.php');
