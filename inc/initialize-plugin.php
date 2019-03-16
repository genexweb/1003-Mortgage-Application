<?php
/**
 * This file is responsible to bootstrap the plugin. It also responsible to load only that particular section's files/code which is being used right now.
 *
 * @link       https://lenderd.com
 * @since      1.0.0
 *
 * @package    mortgage_application
*/
// If this file is called directly, abort.
defined('ABSPATH') OR die("Access denied!");
/* include action file. */
require_once(MORTGAGE_APP_BASE_PATH . 'inc/actions.php');
/* include action-callback(functions) file. */
require_once(MORTGAGE_APP_BASE_PATH . 'inc/functions/functions.php');
