<?php
/**
 * This file is responsible to call actions or add actions.
 *
 * @link        https://lenderd.com
 * @since       1.0.0
 *
 * @package     mortgage_application
 * @sub-package mortgage_application/inc
*/
// If this file is called directly, abort.
defined('ABSPATH') OR die("Access denied!");
/* include classes. */
function mortgage_application_form_callback( $atts = array(), $content = null, $tag = '') {
	// normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
	// override default attributes with user attributes
	$atts = shortcode_atts( array(
		'bar' => true,
		'notification' => true
	), $atts, 'mortgage_application_form' );
	//Turn on output buffering
	ob_start();
	//add form template
	include_once(MORTGAGE_APP_BASE_PATH. 'inc/templates/mortgage_application_form.php');
	// Get current buffer contents and delete current output buffer
	return $result = ob_get_clean();
}