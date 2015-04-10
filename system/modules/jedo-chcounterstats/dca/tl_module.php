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
 * @copyright  Leo Feyer 2005-2009
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Memberlist
 * @license    LGPL
 * @filesource
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['chcounter'] = '{title_legend},name,headline,type;{chCounterpath_legend},chcounter_path,chc_invisible;{chCountersettings_legend},chc_total,chc_today,chc_yesterday,chc_perday,chc_maxperday, chc_maxperdaydate,chc_online, chc_maxonline, chc_maxonlinedate, chc_totalpageviews, chc_pageviewstoday, chc_pageviewsyesterday,chc_pageviewsperday,chc_maxpageviewsperday,chc_maxpageviewsperdaydate,chc_pageviewsthispage,chc_pageviewscurrentvisitor,chc_pageviewspervisitor,chc_javascriptactivated,chc_counterstart,chc_stats
;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['chcounter_path'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['chCounter Path'],
	'exclude'                 	=> true,
	'inputType'               => 'text',
	'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_invisible'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Invisible'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_total'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Total Visitors'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_today'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Visitors today'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_yesterday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Visitors yesterday'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_perday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Visitors per day'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxperday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max. visitors per day'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxperdaydate'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max. visitors per day date'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);


$GLOBALS['TL_DCA']['tl_module']['fields']['chc_online'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Curently online'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxonline'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max. online'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);


$GLOBALS['TL_DCA']['tl_module']['fields']['chc_totalpageviews'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Total page views'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewstoday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views today'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewsyesterday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views yesterday'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewsperday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views per day'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxpageviewsperday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max. page views per day'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxpageviewsperdaydate'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max. page views per day date'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewsthispage'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views of current page'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewscurrentvisitor'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views of current visitor'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewsyesterday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views per visitor'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_javascriptactivated'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Javascript activated'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_counterstart'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Counterstart'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_stats'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Statistics'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50')
);

?>