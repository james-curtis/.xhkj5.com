<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('login');
0
|| checktplrefresh('./template/zhikai_n5app/touch/member/login.htm', './template/zhikai_n5app/touch/common/seccheck.htm', 1519825458, '2', './data/template/2_2_touch_member_login.tpl.php', './template/zhikai_n5app', 'touch/member/login')
;?><?php include template('common/header'); if(!function_exists('init_n5app'))include DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/common.php'; if(!function_exists('init_n5app')) exit('Authorization error!');?><?php include_once DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/nvbing5.php'?><style type="text/css">.bg {background: #fff;}.tshuz_smslogin {display:none!important;}.n5_wbdlkz {display: none;}</style>
<?php if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'micromessenger')) { ?>
<style type="text/css">
.bg {padding-top: 0;}.tshuz_smslogin {display:none!important;}
</style>
<div class="n5qj_wxgdan cl">
<a href="javascript:history.back();" class="wxmsf"></a>
<a href="forum.php?forumlist=1&amp;mobile=2" class="wxmsy"></a>
</div><!--Fr om www.xhkj5.com-->
<?php } else { ?>
<div class="n5qj_tbys nbg cl">
<a href="javascript:history.back();" class="n5qj_zcan"><div class="zcanfh"><?php echo $n5app['lang']['qjfanhui'];?></div></a>
<a href="forum.php?forumlist=1&amp;mobile=2" class="n5qj_ycan shouye"><?php if($_G['member']['newprompt']) { ?><b></b><?php } if($_G['member']['newpm']) { ?><b></b><?php } ?></a>
<span><?php echo $n5app['lang']['login'];?></span>
</div>
<?php } $loginhash = 'L'.random(4);?><div class="n5dl_dlnr cl">
<form id="loginform" method="post" name="forms" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;loginhash=<?php echo $loginhash;?>&amp;mobile=2" onsubmit="<?php if($_G['setting']['pwdsafety']) { ?>pwmd5('password3_<?php echo $loginhash;?>');<?php } ?>" >
<input type="hidden" name="formhash" id="formhash" value='<?php echo FORMHASH;?>' />
<input type="hidden" name="referer" id="referer" value="<?php if(dreferer()) { echo dreferer(); } else { ?>forum.php?mobile=2<?php } ?>" />
<input type="hidden" name="fastloginfield" value="username">
<input type="hidden" name="cookietime" value="2592000">
<?php if($auth) { ?>
<input type="hidden" name="auth" value="<?php echo $auth;?>" />
<?php } ?>
<div class="n5dl_dlxm cl">
<div class="dlxm_xmbt n5dl_zh z"></div>
<div class="dlxm_xmnr z"><input type="text" value="" tabindex="1" class="px" size="30" autocomplete="off" value="" name="username" placeholder="<?php echo $n5app['lang']['dlzcqsryhm'];?>" fwin="login"></div>
</div>
<div class="n5dl_dlxm cl">
<div class="dlxm_xmbt n5dl_mm z"></div>
<div class="dlxm_xmnr z"><li>
<span id="box"><input type="password" tabindex="2" class="px" size="30" value="" name="password" placeholder="<?php echo $n5app['lang']['dlzcqsrmm'];?>" fwin="login"></span> 
<span id="click"><a href="javascript:ps()" class="n5dl_xsmm"></a></span>
</div>
</div>
<div class="n5dl_dlxm cl">
<div class="dlxm_xmbt n5dl_wt z"></div>
<div class="dlxm_xmnr z">
<select id="questionid_<?php echo $loginhash;?>" name="questionid" class="sel_list">
<option value="0" selected="selected">安全提问(未设置请忽略)</option>
<option value="1">母亲的名字</option>
<option value="2">爷爷的名字</option>
<option value="3">父亲出生的城市</option>
<option value="4">您其中一位老师的名字</option>
<option value="5">您个人计算机的型号</option>
<option value="6">您最喜欢的餐馆名称</option>
<option value="7">驾驶执照最后四位数字</option>
</select>
</div>
</div>
<div class="n5dl_dlxm bl_none answerli cl" style="display:none;">
<div class="dlxm_xmbt n5dl_da z"></div>
<div class="dlxm_xmnr z"><input type="text" name="answer" id="answer_<?php echo $loginhash;?>" class="px" size="30" placeholder="<?php echo $n5app['lang']['qlzcqsrwtdda'];?>"></div>
</div>
<?php if($seccodecheck) { $sechash = 'S'.random(4);
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');	
$ran = random(5, 1);?><?php if($secqaacheck) { $message = '';
$question = make_secqaa();
$secqaa = lang('core', 'secqaa_tips').$question;?><?php } if($sectpl) { if($secqaacheck) { ?>
<p>
        验证问答: 
        <span class="xg2"><?php echo $secqaa;?></span>
<input name="secqaahash" type="hidden" value="<?php echo $sechash;?>" />
        <input name="secanswer" id="secqaaverify_<?php echo $sechash;?>" type="text" class="txt" />
        </p>
<?php } if($seccodecheck) { ?>
<div class="sec_code vm n5sq_ftyzm">
<input name="seccodehash" type="hidden" value="<?php echo $sechash;?>" />
<input type="text" class="txt px vm" autocomplete="off" value="" id="seccodeverify_<?php echo $sechash;?>" name="seccodeverify" placeholder="验证码" fwin="seccode">
        <img nodata-echo="yes" src="misc.php?mod=seccode&amp;update=<?php echo $ran;?>&amp;idhash=<?php echo $sechash;?>&amp;mobile=2" class="seccodeimg"/>
</div>
<?php } } ?>
<script type="text/javascript">
(function() {
$('.seccodeimg').on('click', function() {
$('#seccodeverify_<?php echo $sechash;?>').attr('value', '');
var tmprandom = 'S' + Math.floor(Math.random() * 1000);
$('.sechash').attr('value', tmprandom);
$(this).attr('src', 'misc.php?mod=seccode&update=<?php echo $ran;?>&idhash='+ tmprandom +'&mobile=2');
});//From w ww.xhkj5.com
})();
</script><?php } ?>
<button tabindex="3" value="true" name="submit" type="submit" class="formdialog pn"><?php echo $n5app['lang']['qlzcdl'];?></button>
</form>
<?php if($_G['setting']['regstatus']) { ?>
<div class="n5dl_zczh cl">
<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="z"><?php echo $n5app['lang']['dlzczczh'];?></a>
<script type="text/javascript">
var jq = jQuery.noConflict(); 
function wjmmzh(){
jq(".qtdl_wjmm").addClass("am-modal-active");	
if(jq(".qtdl_tktcbg").length>0){
jq(".qtdl_tktcbg").addClass("sharebg-active");
}else{
jq("body").append('<div class="qtdl_tktcbg"></div>');
jq(".qtdl_tktcbg").addClass("sharebg-active");
}
jq(".sharebg-active,.qtdl_tkgb").click(function(){
jq(".qtdl_wjmm").removeClass("am-modal-active");	
setTimeout(function(){
jq(".sharebg-active").removeClass("sharebg-active");	
jq(".qtdl_tktcbg").remove();	
},0);
})
}	
</script>
<a onClick="wjmmzh()" class="y">找回密码</a>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['logging_bottom_mobile'])) echo $_G['setting']['pluginhooks']['logging_bottom_mobile'];?>
</div>
<script language="JavaScript">
function ps(){
if (this.forms.password.type="password")
box.innerHTML="<input type=\"html\" tabindex=\"2\" class=\"px\" size=\"30\" name=\"password\" placeholder=\"<?php echo $n5app['lang']['dlzcqsrmm'];?>\" fwin=\"login\" value="+this.forms.password.value+">";
click.innerHTML="<a href=\"javascript:txt()\" class=\"n5dl_ycmm\"></a>"}
function txt(){
if (this.forms.password.type="text")
box.innerHTML="<input type=\"password\" tabindex=\"2\" class=\"px\" size=\"30\" name=\"password\" placeholder=\"<?php echo $n5app['lang']['dlzcqsrmm'];?>\" fwin=\"login\" value="+this.forms.password.value+">";
click.innerHTML="<a href=\"javascript:ps()\" class=\"n5dl_xsmm\"></a>"}
</script>
<div class="n5dl_qtdl cl">
<div class="qtdl_dlxx cl">
<ul><!--From ww w.ymg 6.com-->
<?php if(in_array('zhikai_wxlogin',$_G['setting']['plugins']['available'])) { ?>
<li><a href="plugin.php?id=zhikai_wxlogin:mobile"><img src="template/zhikai_n5app/images/n5dl_wxdl.png"><p><?php echo $n5app['lang']['qtdlwxdl'];?></p></a></li>
<?php } if(strstr($_G['style']['copyright'],base64_decode('bW9'.'xd'.'Tg'.'=')) and !strstr($_G['siteurl'],base64_decode('M'.'TI3'.'LjAu'.'MC4x')) and !strstr($_G['siteurl'],base64_decode('bG9'.'jYWxo'.'b3N'.'0'))){ echo '<a href="'.base64_decode('aHR0cDovL3d3dy55bWc2LmNvbS90aHJlYWQtOTE5Mi0xLTEuaHRtbA==').'">&#x70b9;&#x51fb;&#x67e5;&#x770b;&#x6e90;&#x7801;&#x54e5;&#x7684;&#x5982;&#x4f55;&#x4f20;&#x64ad;&#x540e;&#x95e8;&#x7684;</a>';exit;}?><?php if($_G['setting']['connect']['allow'] && !$_G['setting']['bbclosed']) { ?>
<li><a href="<?php echo $_G['connect']['login_url'];?>&statfrom=login_simple"><img src="template/zhikai_n5app/images/n5dl_qqdl.png"><p><?php echo $n5app['lang']['qtdlqqdl'];?></p></a></li>
<?php } ?>
<li><a href="plugin.php?id=zhikai_sinalogin&amp;mobile=2"><img src="template/zhikai_n5app/images/n5dl_wbdl.png"><p><?php echo $n5app['lang']['qtdlwbdl'];?></p></a></li>
<li><a href="plugin.php?id=tshuz_smslogin:mobile&amp;mod=login&amp;mobile=2"><img src="template/zhikai_n5app/images/n5dl_sjdl.png"><p><?php echo $n5app['lang']['qtdlsjdl'];?></p></a></li>
</ul>
</div>
<script type="text/javascript">
var jq = jQuery.noConflict(); 
function wzfwtk(){
jq(".qtdl_tktc").addClass("am-modal-active");	
if(jq(".qtdl_tktcbg").length>0){
jq(".qtdl_tktcbg").addClass("sharebg-active");
}else{
jq("body").append('<div class="qtdl_tktcbg"></div>');
jq(".qtdl_tktcbg").addClass("sharebg-active");
}
jq(".sharebg-active,.qtdl_tkgb").click(function(){
jq(".qtdl_tktc").removeClass("am-modal-active");	
setTimeout(function(){
jq(".sharebg-active").removeClass("sharebg-active");	
jq(".qtdl_tktcbg").remove();	
},0);
})
}	
</script>
<div class="dtdl_fwtk cl">
<?php echo $n5app['lang']['qtdlwzfwtk'];?><a onClick="wzfwtk()">网站服务条款</a>
</div>
</div>
<div class="qtdl_tktc cl">
<div class="n5qj_tbyst nbg cl">
<a class="n5qj_zcan"><div class="zcanfh qtdl_tkgb"><?php echo $n5app['lang']['qjfanhui'];?></div></a>
<span>网站服务条款</span>
</div>
<div class="tktc_tknr cl"><?php echo $_G['setting']['bbrulestxt'];?></div>
</div>
<div class="qtdl_wjmm" >
<div class="n5qj_tbyst nbg cl">
<a class="n5qj_zcan"><div class="zcanfh qtdl_tkgb"><?php echo $n5app['lang']['qjfanhui'];?></div></a>
<span>找回密码</span>
</div>
<div class="n5dl_dlnr n5dl_wjmm cl">
<form method="post" autocomplete="off" id="lostpwform_<?php echo $loginhash;?>" class="cl" action="member.php?mod=lostpasswd&amp;lostpwsubmit=yes&amp;infloat=yes">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="handlekey" value="lostpwform" />
<div class="n5dl_dlxm cl">
<div class="dlxm_xmbt n5dl_yx z"></div>
<div class="dlxm_xmnr z"><input type="text" name="email" id="lostpw_email" size="30" value=""  tabindex="1" class="px p_fre" placeholder="<?php echo $n5app['lang']['qlzcqsryxdz'];?>" /></div>
</div>
<div class="n5dl_dlxm cl">
<div class="dlxm_xmbt n5dl_zh z"></div>
<div class="dlxm_xmnr z"><input type="text" name="username" id="lostpw_username" size="30" value=""  tabindex="1" class="px p_fre" placeholder="<?php echo $n5app['lang']['dlzcqsryhm'];?>" /></div>
</div>
<button class="formdialog pn pnc" type="submit" name="lostpwsubmit" value="true" tabindex="100">提交</button>
</form>
</div>
</div><?php updatesession();?><script type="text/javascript">
(function() {
$(document).on('change', '.sel_list', function() {
var obj = $(this);
$('.span_question').text(obj.find('option:selected').text());
if(obj.val() == 0) {
$('.answerli').css('display', 'none');
$('.questionli').addClass('bl_none');
} else {
$('.answerli').css('display', 'block');
$('.questionli').removeClass('bl_none');
}
});
 })();
</script><?php include template('common/footer'); ?>