<?php
/**
 * Advanced Custom Fields config
 */
define( 'ACF_GENERATED_PHP' , TEMPLATEPATH . '/lib/advanced-custom-fields.php' );
require_once(TEMPLATEPATH . '/lib/advanced-custom-fields/acf.php' );
	
if (defined('ENV_STAGING') || defined('ENV_PRODUCTION')) {
	define( 'ACF_LITE' , true );
	require_once(ACF_GENERATED_PHP);
}
if (defined('ENV_DEVELOPMENT')) {
	require_once(TEMPLATEPATH . '/lib/acf-auto-export.php');
	define( 'ACF_LITE' , false );
}         
