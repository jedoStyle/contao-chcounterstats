-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- --------------------------------------------------------

CREATE TABLE `tl_module` (
  `chcounter_path` varchar(128) NOT NULL default '',
  `chc_invisible` char(1) NOT NULL default '',
  `chc_total` char(1) NOT NULL default '',
  `chc_today` char(1) NOT NULL default '',
  `chc_yesterday` char(1) NOT NULL default '',
  `chc_perday` char(1) NOT NULL default '',
  `chc_maxperday` char(1) NOT NULL default '',
  `chc_maxperdaydate` char(1) NOT NULL default '',
  `chc_online` char(1) NOT NULL default '',
  `chc_maxonline` char(1) NOT NULL default '',
  `chc_maxonlinedate` char(1) NOT NULL default '',
  `chc_totalpageviews` char(1) NOT NULL default '',
  `chc_pageviewstoday` char(1) NOT NULL default '',
  `chc_pageviewsyesterday` char(1) NOT NULL default '',
  `chc_pageviewsperday` char(1) NOT NULL default '',
  `chc_maxpageviewsperday` char(1) NOT NULL default '',
  `chc_maxpageviewsperdaydate` char(1) NOT NULL default '',
  `chc_pageviewsthispage` char(1) NOT NULL default '',
  `chc_pageviewscurrentvisitor` char(1) NOT NULL default '',
  `chc_pageviewspervisitor` char(1) NOT NULL default '',
  `chc_javascriptactivated` char(1) NOT NULL default '',
  `chc_counterstart` char(1) NOT NULL default '',
  `chc_stats` char(1) NOT NULL default ''

) ENGINE=MyISAM DEFAULT CHARSET=utf8;

