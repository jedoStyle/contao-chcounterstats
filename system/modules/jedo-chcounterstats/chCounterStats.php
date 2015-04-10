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

class chCounterStats extends Module
{
	protected $strTemplate = 'chCounterStats';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### JEDO CHCOUNTER STATS ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'typolight/main.php?do=modules&amp;act=edit&amp;id=' . $this->id;
			return $objTemplate->parse();
		}
		return parent::generate();
	}
	protected function compile()
	{
		$this->loadDataContainer('tl_chcounter');
		$this->listAll();
	}

	protected function listAll()
	{
		$counter_template = '';

	if ( file_exists($this->chcounter_path.'/counter.php') ) {

	if ($this->chc_total) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_TOTAL_VISITORS}</td><td class="chcRightRow">{V_TOTAL_VISITORS}</td></tr>';
	}
	if ($this->chc_today) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_VISITORS_TODAY}</td><td class="chcRightRow">{V_VISITORS_TODAY}</td></tr>';
	}
	if ($this->chc_yesterday) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_VISITORS_YESTERDAY}</td><td class="chcRightRow">{V_VISITORS_YESTERDAY}</td></tr>';
	}
	if ($this->chc_perday) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_VISITORS_PER_DAY}</td><td class="chcRightRow">{V_VISITORS_PER_DAY}</td></tr>';
	}
	if ($this->chc_maxperday) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_MAX_VISITORS_PER_DAY}</td><td class="chcRightRow">{V_MAX_VISITORS_PER_DAY}</td></tr>';
	}
	if ($this->chc_maxperdaydate) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_MAX_VISITORS_PER_DAY_DATE}</td><td class="chcRightRow">{V_MAX_VISITORS_PER_DAY_DATE}</td></tr>';
	}
	if ($this->chc_online) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_VISITORS_CURRENTLY_ONLINE}</td><td class="chcRightRow">{V_VISITORS_CURRENTLY_ONLINE}</td></tr>';
	}
	if ($this->chc_maxonline) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_MAX_VISITORS_ONLINE}</td><td class="chcRightRow">{V_MAX_VISITORS_ONLINE}</td></tr>';
	}
	if ($this->chc_maxonlinedate) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_MAX_VISITORS_ONLINE_DATE}</td><td class="chcRightRow">{V_MAX_VISITORS_ONLINE_DATE}</td></tr>';
	}
	if ($this->chc_totalpageviews) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_TOTAL_PAGE_VIEWS}</td><td class="chcRightRow">{V_TOTAL_PAGE_VIEWS}</td></tr>';
	}
	if ($this->chc_pageviewstoday) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_PAGE_VIEWS_TODAY}</td><td class="chcRightRow">{V_PAGE_VIEWS_TODAY}</td></tr>';
	}
	if ($this->chc_pageviewsyesterday) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_PAGE_VIEWS_YESTERDAY}</td><td class="chcRightRow">{V_PAGE_VIEWS_YESTERDAY}</td></tr>';
	}
	if ($this->chc_pageviewsperday) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_PAGE_VIEWS_PER_DAY}</td><td class="chcRightRow">{V_PAGE_VIEWS_PER_DAY}</td></tr>';
	}
	if ($this->chc_maxpageviewsperday) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_MAX_PAGE_VIEWS_PER_DAY}</td><td class="chcRightRow">{V_MAX_PAGE_VIEWS_PER_DAY}</td></tr>';
	}
	if ($this->chc_maxpageviewsperdaydate) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_MAX_PAGE_VIEWS_PER_DAY_DATE}</td><td class="chcRightRow">{V_MAX_PAGE_VIEWS_PER_DAY_DATE}</td></tr>';
	}
	if ($this->chc_pageviewsthispage) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_PAGE_VIEWS_THIS_PAGE}</td><td class="chcRightRow">{V_PAGE_VIEWS_THIS_PAGE}</td></tr>';
	}
	if ($this->chc_pageviewscurrentvisitor) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_PAGE_VIEWS_OF_CURRENT_VISITOR}</td><td class="chcRightRow">{V_PAGE_VIEWS_OF_CURRENT_VISITOR}</td></tr>';
	}
	if ($this->chc_pageviewspervisitor) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_PAGE_VIEWS_PER_VISITOR}</td><td class="chcRightRow">{V_PAGE_VIEWS_PER_VISITOR}</td></tr>';
	}
	if ($this->chc_javascriptactivated) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_JAVASCRIPT_ACTIVATED}</td><td class="chcRightRow">{V_JS_PERCENTAGE}</td></tr>';
	}
	if ($this->chc_counterstart) {
		$counter_template .= "\n";
		$counter_template .= '<tr><td class="chcLeftRow">{L_COUNTER_START}</td><td class="chcRightRow">{V_COUNTER_START}</td></tr>';
	}
	if ($this->chc_stats) {
		$counter_template .= "\n";
		$counter_template .='<tr><td class="chcA" colspan="2" style="text-align:center; padding-top: 4px;"><a href="{V_COUNTER_URL}/stats/index.php"><img src="{V_COUNTER_URL}/images/stats.png" style="width:15px; height:15px; border: 0px;" alt="counter" title="{L_STATISTICS}" /></a><a href="{V_COUNTER_URL}/stats/index.php">{L_STATISTICS}</a></td></tr>';
	}

	} else {
		$error_template = '<div align="center"><table  class="chcTable"><tr><td>'.$GLOBALS['TL_LANG']['CHCOUNTER']['chCounter Error'].'</td></tr><tr><td>'.$GLOBALS['TL_LANG']['CHCOUNTER']['Could not find the chcounter installation. Please check your settings.'].'</td></tr></table></div>';
	}

$chCounter_template = <<<TEMPLATE
<div style="text-align:center;"><table  class="chcTable">
$counter_template
</table></div>
TEMPLATE;

		$this->Template->invisible = $this->chc_invisible;
		$this->Template->chcounter_path = $this->chcounter_path;
		$this->Template->show = $chCounter_template;
		$this->Template->error = $error_template;
	}
}
?>