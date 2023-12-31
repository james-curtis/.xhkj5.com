<?php

/**
 *		[Discuz!] (C)2001-2099 Comsenz Inc.
 *		This is NOT a freeware, use is subject to license terms
 *
 *		$Id: DiscuzTips.php 36311 2016-12-19 01:47:34Z nemohou $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class Cloud_Service_DiscuzTips {

	protected static $_instance;

	public static function getInstance() {
		global $_G;

		if (!(self::$_instance instanceof self)) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function show() {
		global $_G;
		if($_G['inajax']) {
			return '';
		}
		if($_G['isHTTPS']) {
			return '';
		}
		$clientVersion = '2';
		$util = Cloud::loadclass('Service_Util');
		include_once DISCUZ_ROOT . '/source/discuz_version.php';
		$release = DISCUZ_RELEASE;
		$fix = DISCUZ_FIXBUG;
		$cloudApi = $util->getApiVersion();
		$isfounder = $util->isfounder($_G['member']);
		$sId = $_G['setting']['my_siteid'];
		$version = $_G['setting']['version'];
		$ts = TIMESTAMP;
		$sig = '';
		$adminId = $_G['adminid'];
		$openId = $_G['member']['conopenid'];
		$uid = $_G['uid'];
		$groupId = $_G['groupid'];

		if ($sId) {
			$params = array(
				's_id' => $sId,
				'product_version' => $version,
				'product_release' => '',
				'fix_bug' => '',
				'is_founder' => $isfounder,
				's_url' => $_G['siteurl'],
				'admin_id' => $adminId,
				'open_id' => $openId,
				'uid' => $uid,
				'group_id' => $groupId,
				'last_send_time' => $_COOKIE['dctips'],
			);
			ksort($params);

			$str = $util->httpBuildQuery($params, '', '&');
			$sig = md5(sprintf('%s|%s|%s', $str, $_G['setting']['my_sitekey'], $ts));
		}

		$jsCode = <<<EOF
EOF;
		echo $jsCode;
	}

}