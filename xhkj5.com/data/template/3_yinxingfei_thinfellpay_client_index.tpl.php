<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
0
|| checktplrefresh('./source/plugin/yinxingfei_thinfellpay_client/template/index.htm', './source/plugin/yinxingfei_thinfellpay_client/template/thinfellpay_left.htm', 1524362740, 'yinxingfei_thinfellpay_client', './data/template/3_yinxingfei_thinfellpay_client_index.tpl.php', './source/plugin/yinxingfei_thinfellpay_client/template', 'index')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><em>&raquo;</em><a href="plugin.php?id=yinxingfei_thinfellpay_client:recharge">���ֳ�ֵ</a>
</div>
</div>
</div>
<link rel="stylesheet" href="source/plugin/yinxingfei_thinfellpay_client/assets/css/app.css?<?php echo VERHASH;?>" />
<div class="tpay-inde-main">
<div class="wp">
<div class="tpay-inde-main-wp"><div class="tpay-inde-main-l">
<div class="tpay-inde-main-l-avatar"><?php echo avatar($_G['uid'],middle);?><a href="home.php?mod=spacecp&amp;ac=profile" target="_blank"><div class="tpay-left-mask"></div></a>
</div>
<div class="tpay-inde-main-l-box">
<div class="tpay-inde-main-l-username">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank"><?php echo $_G['username'];?></a>
</div>
<div class="tpay-inde-main-l-group">
<div class="tpay-inde-main-l-fl">�û��飺</div>
<div class="tpay-inde-main-l-fl"><a href="home.php?mod=spacecp&amp;ac=usergroup" target="_blank"><?php echo $_G['group']['grouptitle'];?></a></div>
</div>
<div class="tpay-inde-main-l-credit">
<div class="tpay-inde-main-l-fl">ӵ��<?php echo $setextcredittitle;?>��</div>
<div class="tpay-inde-main-l-fl"><b><?php echo getuserprofile('extcredits'.$setextcredit);?></b><?php echo $setextcreditunit;?></div>
</div>
<div class="tpay-inde-main-l-more">
<a href="home.php?mod=spacecp&amp;ac=credit" target="_blank">�鿴�������</a>
</div>
</div>
<div class="tpay-left-info-line">
<span class="tpay-left-top-icon"></span>
<span class="tpay-left-bottom-icon"></span>
</div>
</div><form method="post" id="thinfell_pay_form" autocomplete="off" target="_blank">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="ratio" id="ratio" value="<?php echo $setratio;?>" />
<input type="hidden" name="min" id="min" value="<?php echo $setmin;?>" />
<input type="hidden" name="max" id="max" value="<?php echo $setmax;?>" />
<input type="hidden" name="tpaysubmit" value="true">
<div class="tpay-inde-main-r">
<ul class="tpay-inde-main-r-nav">
<li class="on"><a href="plugin.php?id=yinxingfei_thinfellpay_client:recharge&amp;do=index" >���ֳ�ֵ</a></li>
<li ><a href="plugin.php?id=yinxingfei_thinfellpay_client:recharge&amp;do=record">�ҵĶ���</a></li>
</ul>
<div class="tpay-inde-main-r-box">
<div class="tpay-inde-main-r-box-h">����<?php echo $setextcredittitle;?>��ֵ��Χ<b><?php echo $setmin;?>&nbsp;-&nbsp;<?php echo $setmax;?></b>֮�䣬1Ԫ=<?php echo $setratio;?><?php echo $setextcredittitle;?></div>
<div>
<input type="text" name="number" id="number" class="tpay-input" autocomplete="off" autocapitalize="off" placeholder="��������Ҫ��ֵ��<?php echo $setextcredittitle;?>����">
</div>
<div class="tpay-tprmb">
<span id="tprmb"></span>
</div>
<div>
<a href="javascript:;" class="tpay-button" onclick="return checkepay();"><i class="tpay-leftBorder"></i>����֧��</a>
</div>
</div>
<script>var lang06 = '���������',lang_yuan = 'Ԫ',lang30 = '��ֵ�ɹ�',lang31 = 'ϵͳ��⣺δ�ɹ�֧�����������´����м������֧��',lang32 = '��ֵ��������С��',lang33 = '��ֵ�������ܴ���';</script>
<script src="source/plugin/yinxingfei_thinfellpay_client/assets/js/jquery.min.js" type="text/javascript" type="text/javascript"></script>
<script src="source/plugin/yinxingfei_thinfellpay_client/assets/js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="source/plugin/yinxingfei_thinfellpay_client/assets/js/app.js?<?php echo VERHASH;?>" type="text/javascript" type="text/javascript"></script>
<div class="tpay_dialog_alert">
<div class="tpay_mask"></div>
<div class="tpay_dialog">
<div class="tpay_dialog_hd"><strong class="tpay_dialog_title">��ܰ��ʾ</strong></div>
<div class="tpay_dialog_bd"></div>
<div class="tpay_dialog_ft">
<a href="javascript:;" class="tpay_dialog_ft_primary" id="tp_queding">ȷ��</a>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="wp"><?php include template('common/footer'); ?>