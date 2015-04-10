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


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'jedoStyle\chCounterStats',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'jedoStyle\chCounterStats\chCounterStats' => 'system/modules/jedo-chcounterstats/modules/chCounterStats.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_chCounterStats' => 'system/modules/jedo-chcounterstats/templates/modules',
));
