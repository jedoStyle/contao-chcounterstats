<?php
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @copyright 	jedoStyle 2011 - 2015
 * @author      	jedoStyle <http://jedo-style.de>
 * @package    	jedo chCounterStats
 * @version     	2.1.0
 */

if (TL_MODE == 'FE') {
	$GLOBALS['TL_CSS'][]  = 'system/modules/jedo-chcounterstats/assets/css/frontend.css';
}

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
 * List all fontend modules and their class names.
 */

// FrontEnd Module
if (!is_array($GLOBALS['FE_MOD']['jedoextensions']))
{
	array_insert($GLOBALS['FE_MOD'], 9, array('jedoextensions' => array()));
}
$GLOBALS['FE_MOD']['jedoextensions']['jedoChCounterStats'] = 'chCounterStats';


