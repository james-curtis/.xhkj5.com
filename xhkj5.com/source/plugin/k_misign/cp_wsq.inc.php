<?php

/**

 * 

 * 信偶网出品 必属精品

 * 信偶网源码论坛 全网首发 http://www.5dzy.cc

 * 感谢支持！您的支持是我们最大的动力！永久免费下载本站所有资源！

 * 欢迎大家来访获得最新更新的优秀资源！更多VIP特色资源不容错过！！

 * 信偶网用户交流群: ①群303954994

 * 永久域名：http://www.5dzy.cc/ (请收藏备用!)

 * 

 */

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {

	exit('Access Denied');

}

loadcache('plugin');

$setting = $_G['cache']['plugin']['k_misign'];

require_once DISCUZ_ROOT.'./source/plugin/wechat/wechat.lib.class.php';

if(submitcheck('wsqsubmit')) {

	if($_GET['hook_forumdisplay_topBar_status'] == 1){

		$data[] = array('forumdisplay_topBar' => array('plugin' => 'k_misign', 'include' => 'wsq.class.php', 'class' => 'k_misign_wsq_api', 'method' => 'forumdisplay_topBar'));

	}else{

		$data[] = array('forumdisplay_topBar' => array('plugin' => 'k_misign', 'include' => '', 'class' => '', 'method' => ''));

	}

	if($_GET['hook_forumdisplay_headerBar_status'] == 1){

		$data[] = array('forumdisplay_headerBar' => array('plugin' => 'k_misign', 'include' => 'wsq.class.php', 'class' => 'k_misign_wsq_api', 'method' => 'forumdisplay_headerBar'));

	}else{

		$data[] = array('forumdisplay_headerBar' => array('plugin' => 'k_misign', 'include' => '', 'class' => '', 'method' => ''));

	}

	if($_GET['hook_forumdisplay_mobilesign_status'] == 1){

		$data[] = array('forumdisplay_mobilesign' => array('plugin' => 'k_misign', 'include' => 'wsq.class.php', 'class' => 'k_misign_wsq_api', 'method' => 'forumdisplay_mobilesign'));

	}else{

		$data[] = array('forumdisplay_mobilesign' => array('plugin' => 'k_misign', 'include' => '', 'class' => '', 'method' => ''));

	}

	WeChatHook::updateAPIHook($data);

	cpmsg(lang('plugin/k_misign', 'success'), "action=plugins&operation=config&do=".$do."&identifier=k_misign&pmod=cp_wsq", 'succeed');

}else{

	$apihook = WeChatHook::getAPIHook('k_misign');

	showtips(lang('plugin/k_misign', 'wsqcp_tips'));

	showformheader('plugins&operation=config&do='.$pluginid.'&identifier=k_misign&pmod=cp_wsq', 'enctype');

	showtableheader(lang('plugin/k_misign', 'wsq_hook_reg_status'));

	showsetting(lang('plugin/k_misign', 'topBar'), 'hook_forumdisplay_topBar_status', (($apihook['forumdisplay']['topBar']['k_misign']['allow'] == 1) ? 1 : 0), 'radio');

	showsetting(lang('plugin/k_misign', 'headerBar'), 'hook_forumdisplay_headerBar_status', (($apihook['forumdisplay']['headerBar']['k_misign']['allow'] == 1) ? 1 : 0), 'radio');

	showsetting(lang('plugin/k_misign', 'mobilesign'), 'hook_forumdisplay_mobilesign_status', (($apihook['forumdisplay']['mobilesign']['k_misign']['allow'] == 1) ? 1 : 0), 'radio');

	showsubmit('wsqsubmit', 'submit');

	showtablefooter();

	showformfooter();

}

//From:www_lbw3_co

?>
