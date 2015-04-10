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

/***********************************************
 * 	Add palettes to tl_module
 ***********************************************/

$GLOBALS['TL_DCA']['tl_module']['palettes']['jedoChCounterStats'] = '
		{title_legend},name,headline,type;
		{chCounterpath_legend},chcounter_path,chc_invisible;{chCountersettings_legend},chc_total,chc_today,chc_yesterday,chc_perday,chc_maxperday, chc_maxperdaydate,chc_online, chc_maxonline, chc_maxonlinedate, chc_totalpageviews, chc_pageviewstoday, chc_pageviewsyesterday,chc_pageviewsperday,chc_maxpageviewsperday,chc_maxpageviewsperdaydate,chc_pageviewsthispage,chc_pageviewscurrentvisitor,chc_pageviewspervisitor,chc_javascriptactivated,chc_counterstart,chc_stats;
		{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['chcounter_path'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['chCounter Path'],
	'exclude'                 	=> true,
	'inputType'               	=> 'text',
	'eval'                    	=> array('tl_class'=>'w50','mandatory'=>true),
	'sql'                     	=> "varchar(256) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_invisible'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Invisible'],
	'exclude'                 	=> true,
	'inputType'               	=> 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50 m12'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_total'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Total Visitors'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_today'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Visitors today'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_yesterday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Visitors yesterday'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_perday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Visitors per day'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxperday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max visitors per day'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxperdaydate'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max visitors per day date'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_module']['fields']['chc_online'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Curently online'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxonline'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max online'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxonlinedate'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max online Date'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);



$GLOBALS['TL_DCA']['tl_module']['fields']['chc_totalpageviews'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Total page views'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewstoday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views today'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewsyesterday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views yesterday'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewsperday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views per day'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewspervisitor'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views per visitor'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxpageviewsperday'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max page views per day'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_maxpageviewsperdaydate'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Max page views per day date'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewsthispage'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views of current page'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_pageviewscurrentvisitor'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Page views of current visitor'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_javascriptactivated'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Javascript activated'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['chc_counterstart'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Counterstart'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['chc_stats'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['Statistics'],
	'exclude'                 	=> true,
	'inputType'               => 'checkbox',
	'eval'                    	=> array('tl_class'=>'w50'),
	'sql'                     	=> "char(1) NOT NULL default ''"
);

?>