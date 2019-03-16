<?php
/**
 * This file is responsible to application form front view.
 *
 * @link        https://lenderd.com
 * @since       1.0.0
 *
 * @package     mortgage_application
 * @sub-package mortgage_application/inc/templates
*/
// If this file is called directly, abort.
defined('ABSPATH') OR die("Access denied!");
?>
<div class="mortgage-form-main-container">
	<div class="mortgage-Progress-bar">
    	<span class="bar"></span>
    </div>
    <div class="mortgage-form-container">
    	<form action="#" method="post" enctype="multipart/form-data" class="mortgage-form">
        	<fieldset>
                <label for="type_of_loan">Type of Loan:<label>
                <select name="" id="type_of_loan">
                    <option value="">Select One</option>
                    <option value="refi">Home Refinance</option>
                    <option value="purch">Home Purchase</option>
                </select>
             </fieldset>
            <fieldset class="action">
            	<input type="button" class="button" value="Next"/>
            </fieldset>
        </form>
    </div>
</div>