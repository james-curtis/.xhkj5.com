<?php

/**
 * Copyright 2001-2099 1314学习网.
 * This is NOT a freeware, use is subject to license terms
 * $Id: hook.class.php 554 2017-10-03 16:25:51Z zhuge $
 * 应用售后问题：http://www.1314study.com/services.php?mod=issue
 * 应用售前咨询：QQ 15326940
 * 应用定制开发：QQ 643306797
 * 本插件为 1314学习网（www.1314study.com） 独立开发的原创插件, 依法拥有版权。
 * 未经允许不得公开出售、发布、使用、修改，如需购买请联系我们获得授权。
 */
/*
 * This is NOT a freeware, use is subject to license terms
 * From www.1314study.com
 */
if (!defined('IN_DISCUZ')) {
exit('Access Denied');
}
class plugin_freeaddon_particles {
    function global_footer() {
        global $_G;
        $return = '';
        $splugin_setting = $_G['cache']['plugin']['freeaddon_particles'];
        $gids = unserialize($splugin_setting['gids']);
        if (in_array($_G['groupid'], $gids)) {
           include template('freeaddon_particles:particles');
        }
				return $return;
    }
}

//Copyright 2001-2099 1314学习网.
//This is NOT a freeware, use is subject to license terms
//$Id: hook.class.php 999 2017-10-03 08:25:51Z zhuge $
//应用售后问题：http://www.1314study.com/services.php?mod=issue
//应用售前咨询：QQ 15326940
//应用定制开发：QQ 643306797
//本插件为 1314学习网（www.1314study.com） 独立开发的原创插件, 依法拥有版权。
//未经允许不得公开出售、发布、使用、修改，如需购买请联系我们获得授权。