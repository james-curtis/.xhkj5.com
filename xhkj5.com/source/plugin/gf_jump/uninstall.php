<?php
/**
 *	[�����ض�����ת����(gf_jump.uninstall)] (C)2016-2099 Powered by �������.
 *	Version: V1.0
 *	Date: 2016-1-4 21:07
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF
DROP TABLE IF EXISTS `cdb_gf_jump`;
EOF;

runquery($sql);
$finish = true;
?>