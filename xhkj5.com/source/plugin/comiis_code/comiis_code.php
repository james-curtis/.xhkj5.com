<?php

/**
 * 
 * ���׳�Ʒ ������Ʒ
 * ������ƹ����� ��Ȩ���� http://www.Comiis.com
 * רҵ��̳��ҳ���������, ҳ���������, ���ݰ��/����, ������ο���, ��վЧ��ͼ���, ҳ���׼DIV+CSS����, �������С����ҵ��վ���...
 * ����������Ϊ��ҵ�ṩ������վ���衢��վ�ƹ㡢��վ�Ż������򿪷�������ע�ᡢ���������ȷ���
 * һ����ƺͽ������Ϊ��ҵ��������ʺ��Լ��������վ��Ӫƽ̨������޶ȵ�ʹ��ҵ����Ϣʱ�����������̻���
 *
 *   �绰: 0668-8810200
 *   �ֻ�: 13450110120  15813025137
 *    Q Q: 21400445  8821775  11012081  327460889
 * E-mail: ceo@comiis.com
 *
 * ����ʱ��: ��һ����������09:00-11:00, ����03:00-05:00, ����08:30-10:30(����������Ϣ)
 * ��������û�����Ⱥ: ��Ⱥ83667771 ��Ⱥ83667772 ��Ⱥ83667773 ��Ⱥ110900020 ��Ⱥ110900021 ��Ⱥ70068388 ��Ⱥ110899987
 * 
 */
 
if(!defined('IN_DISCUZ')) {exit('Access Denied');}
$plugindata = array();
$comiis_code_view = $recomiis_code = '';
if(isset($_GET['code']) && $_GET['code'] == substr(md5($_G['tid']), 8, 16) && $_G['basescript'] == 'forum' && CURMODULE == 'viewthread'){
	$plugindata = $_G['cache']['plugin']['comiis_code'];
	loadcache('comiis_code_view');
	$comiis_code_view = intval($_G['cache']['comiis_code_view']) + 1;
	savecache('comiis_code_view', $comiis_code_view);
	$plugindata['comiis_code_mob_view'] = str_replace("{views}", "<span>". $comiis_code_view. "</span>", $plugindata['comiis_code_mob_view']);
	$recomiis_code = '<style>
	.comiis_mob_code {width:100%;margin:0 auto;padding-bottom:15px;background:#fff url(source/plugin/comiis_code/comiis_img/comiis_mob_x.gif) repeat-x bottom;text-align:center;}
	.comiis_mob_code .comiis_mob_wz{padding:10px 10px 4px 40px; background:#fff url(source/plugin/comiis_code/comiis_img/comiis_mob_logo.gif) no-repeat 0px 14px;text-align:left;margin:0px auto;display:inline-block;}
	.comiis_mob_code .comiis_mob_wz .comiis_mob_titleunec{font-size:16px;display:block;}
	.comiis_mob_code .comiis_mob_wz .comiis_mob_viewsllai{color:#999;font-size:12px;height:12px;line-height:12px;display:block;}
	.comiis_mob_code .comiis_mob_wz .comiis_mob_viewsllai span{margin:0px 6px;color:#333;}
	.comiis_mob_code .comiis_mob_wz .comiis_mob_viewsllai img{margin-left:4px;vertical-align:bottom;}
	</style>				
	<div class="comiis_mob_code">
	<div class="comiis_mob_wz">
	<p class="comiis_mob_titleunec">'.$plugindata['comiis_code_mob_title'].'</p>
	<p class="comiis_mob_viewsllai">'.$plugindata['comiis_code_mob_view'].'</p>
	</div>
	</div>';
}
?>