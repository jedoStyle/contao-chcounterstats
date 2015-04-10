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
 * Run in a custom namespace, so the class can be replaced
 */

namespace jedoStyle\chCounterStats;

class chCounterStats extends \Module
{

	protected $strTemplate = 'mod_chCounterStats';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### JEDOSTYLE CHCOUNTERSTATS ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

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
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_TOTAL_VISITORS}</div><div class="chcRightRow">{V_TOTAL_VISITORS}</div><div class="clear"></div></div>';
			}
			if ($this->chc_today) {

				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_VISITORS_TODAY}</div><div class="chcRightRow">{V_VISITORS_TODAY}</div><div class="clear"></div></div>';
			}
			if ($this->chc_yesterday) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_VISITORS_YESTERDAY}</div><div class="chcRightRow">{V_VISITORS_YESTERDAY}</div><div class="clear"></div></div>';
			}
			if ($this->chc_perday) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_VISITORS_PER_DAY}</div><div class="chcRightRow">{V_VISITORS_PER_DAY}</div><div class="clear"></div></div>';
			}
			if ($this->chc_maxperday) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_MAX_VISITORS_PER_DAY}</div><div class="chcRightRow">{V_MAX_VISITORS_PER_DAY}</div><div class="clear"></div></div>';
			}
			if ($this->chc_maxperdaydate) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_MAX_VISITORS_PER_DAY_DATE}</div><div class="chcRightRow">{V_MAX_VISITORS_PER_DAY_DATE}</div><div class="clear"></div></div>';
			}
			if ($this->chc_online) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_VISITORS_CURRENTLY_ONLINE}</div><div class="chcRightRow">{V_VISITORS_CURRENTLY_ONLINE}</div><div class="clear"></div></div>';
			}
			if ($this->chc_maxonline) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_MAX_VISITORS_ONLINE}</div><div class="chcRightRow">{V_MAX_VISITORS_ONLINE}</div><div class="clear"></div></div>';
			}
			if ($this->chc_maxonlinedate) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_MAX_VISITORS_ONLINE_DATE}</div><div class="chcRightRow">{V_MAX_VISITORS_ONLINE_DATE}</div><div class="clear"></div></div>';
			}
			if ($this->chc_totalpageviews) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_TOTAL_PAGE_VIEWS}</div><div class="chcRightRow">{V_TOTAL_PAGE_VIEWS}</div><div class="clear"></div></div>';
			}
			if ($this->chc_pageviewstoday) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_PAGE_VIEWS_TODAY}</div><div class="chcRightRow">{V_PAGE_VIEWS_TODAY}</div><div class="clear"></div></div>';
			}
			if ($this->chc_pageviewsyesterday) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_PAGE_VIEWS_YESTERDAY}</div><div class="chcRightRow">{V_PAGE_VIEWS_YESTERDAY}</div><div class="clear"></div></div>';
			}
			if ($this->chc_pageviewsperday) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_PAGE_VIEWS_PER_DAY}</div><div class="chcRightRow">{V_PAGE_VIEWS_PER_DAY}</div><div class="clear"></div></div>';
			}
			if ($this->chc_maxpageviewsperday) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_MAX_PAGE_VIEWS_PER_DAY}</div><div class="chcRightRow">{V_MAX_PAGE_VIEWS_PER_DAY}</div><div class="clear"></div></div>';
			}
			if ($this->chc_maxpageviewsperdaydate) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_MAX_PAGE_VIEWS_PER_DAY_DATE}</div><div class="chcRightRow">{V_MAX_PAGE_VIEWS_PER_DAY_DATE}</div><div class="clear"></div></div>';
			}
			if ($this->chc_pageviewsthispage) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_PAGE_VIEWS_THIS_PAGE}</div><div class="chcRightRow">{V_PAGE_VIEWS_THIS_PAGE}</div><div class="clear"></div></div>';
			}
			if ($this->chc_pageviewscurrentvisitor) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_PAGE_VIEWS_OF_CURRENT_VISITOR}</div><div class="chcRightRow">{V_PAGE_VIEWS_OF_CURRENT_VISITOR}</div><div class="clear"></div></div>';
			}
			if ($this->chc_pageviewspervisitor) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_PAGE_VIEWS_PER_VISITOR}</div><div class="chcRightRow">{V_PAGE_VIEWS_PER_VISITOR}</div><div class="clear"></div></div>';
			}
			if ($this->chc_javascriptactivated) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_JAVASCRIPT_ACTIVATED}</div><div class="chcRightRow">{V_JS_PERCENTAGE}</div><div class="clear"></div></div>';
			}
			if ($this->chc_counterstart) {
				$counter_template .= '<div class="chcRow"><div class="chcLeftRow">{L_COUNTER_START}</div><div class="chcRightRow">{V_COUNTER_START}</div><div class="clear"></div></div>';
			}
			if ($this->chc_stats) {
				$counter_template .='<div class="chcA"><a href="{V_COUNTER_URL}/stats/index.php"><img src="system/modules/jedo-chcounterstats/assets/images/statistics-icon.png" alt="counter" title="{L_STATISTICS}" /> {L_STATISTICS}</a></div>';
			}
		} else {
			$error_template = '<div align="center"><div  class="chcTable error"><h2>'.$GLOBALS['TL_LANG']['CHCOUNTER']['chCounterError'].'</h2><p>'.$GLOBALS['TL_LANG']['CHCOUNTER']['chCounterMSG'].'</p></div></div>';
		}


$chCounter_template = <<<TEMPLATE
			<div class="chcTable">$counter_template</div>
TEMPLATE;

		$this->Template->invisible = $this->chc_invisible;
		$this->Template->chcounter_path = $this->chcounter_path;
		$this->Template->show = $chCounter_template;
		$this->Template->errorMsg = $error_template;
	}
}
