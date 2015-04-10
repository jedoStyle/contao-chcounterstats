<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');
/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Copyright &#40;C&#41; 2008 - 2015 jedoStyle. All rights reserved. 
 * @author     jedoStyle 
 * @package    chCounter 
 * @license    GNU/LGPL 
 * @filesource
 */

if (TL_MODE == 'FE'){
	$GLOBALS['TL_CSS'][]  = 'system/modules/jedo-chcounterstats/html/frontend.css';
}

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */
array_insert($GLOBALS['FE_MOD'], 4, array
(
	'miscellaneous' => array
	(
		'chcounter' => 'chCounterStats'
	)
));
?>