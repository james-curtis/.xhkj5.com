<?php

/**
 * Copyright 2001-2099 1314学习网.
 * This is NOT a freeware, use is subject to license terms
 * $Id: changelog.inc.php 983 2017-10-03 16:25:51Z zhuge $
 * 应用售后问题：http://www.1314study.com/services.php?mod=issue
 * 应用售前咨询：QQ 15326940
 * 应用定制开发：QQ 643306797
 * 本插件为 1314学习网（www.1314study.com） 独立开发的原创插件, 依法拥有版权。
 * 未经允许不得公开出售、发布、使用、修改，如需购买请联系我们获得授权。
 */
/*
 * This is NOT a freeware, use is subject to license terms
 * From www.1314study.com ver 2.0
 */
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
exit('Access Denied');
}
define('STUDYADDONS_FEEDBACK_URL', 'http'.($_G['isHTTPS'] ? 's' : '').'://addon.1314study.com/changelog/index.php');
require_once ('pluginvar.func.php');
$wlvemtk5 = "本插件为 1314学习网（www.1314study.com） 独立开发的原创插件, 依法拥有版权";
require_once DISCUZ_ROOT.'./source/discuz_version.php';//www_discuz_1314study_com
$data = 'pid='.$plugin['identifier'].'&siteurl='.rawurlencode($_G['siteurl']).'&sitever='.DISCUZ_VERSION.'/'.DISCUZ_RELEASE.'&sitecharset='.CHARSET.'&pversion='.rawurlencode($plugin[version]);splugin_thinks($plugin['identifier'],0);
$param = 'data='.rawurlencode(base64_encode($data));#版权：www.1314study.com
$param .= '&md5hash='.substr(md5($data.TIMESTAMP), 8, 8).'&timestamp='.TIMESTAMP;//www_discuz_1314study_com
s_addon_stat($plugin,'changelog');
?>
