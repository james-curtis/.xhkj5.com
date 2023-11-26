<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('guide');?><?php include template('common/header'); if(!function_exists('init_n5app'))include DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/common.php'; if(!function_exists('init_n5app')) exit('Authorization error!');?><?php include_once DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/nvbing5.php'?><script>document.title = '<?php echo $n5app['jjseobt'];?>';</script>
<script src="template/zhikai_n5app/js/nav.js" type="text/javascript"></script>
<script src="template/zhikai_n5app/js/TouchSlide.1.1.source.js" type="text/javascript"></script>
<?php if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'micromessenger')) { ?>
<style type="text/css">
.bg {padding-top: 0;}
</style>
<div class="n5qj_wxgdan cl">
<a href="javascript:void(0);" class="cltxy"></a>
<a href="search.php?mod=forum" class="wxmss"></a>
</div>
<?php } else { ?>
<style type="text/css">
.n5qj_tbys span img {height: <?php echo $n5app['index_logogd'];?>;margin-top: <?php echo $n5app['index_logojl'];?>;}
</style><!--From ww w.xhkj5.com-->
<div class="n5qj_tbys nbg cl">
<a href="javascript:void(0);" class="n5qj_zcan"><div class="zcancl"><div class="cltxy"><?php echo avatar($_G[uid]);?><?php if($_G['member']['newprompt']) { ?><b></b><?php } if($_G['member']['newpm']) { ?><b></b><?php } ?></div></div></a>
<a href="search.php?mod=forum" class="n5qj_ycan sousuo"></a>
<?php if($n5app['index_logo'] == 1) { ?>
<span><img src="<?php echo $n5app['index_logodz'];?>"></span>
<?php } elseif($n5app['index_logo'] == 2) { ?>
<span><?php echo $n5app['index_logomc'];?></span>
<?php } ?>
</div>
<?php } ?>

<style type="text/css">
#bonfire-pageloader {display: none;}
</style>

<div class="n5qj_cldh">
<div class="cldh_hyxx cl">
<div class="cldh_hytx z cl"><div class="cldh_txys"><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>"><?php echo avatar($_G[uid]);?></a></div></div>
<div class="cldh_hymc z cl">
<div class="cldh_hync cl"><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>"><?php if($_G['uid']) { ?><?php echo $_G['member']['username'];?><?php } else { ?><?php echo $n5app['lang']['qjclyngjc'];?><?php } ?></a><?php if($_G['uid']) { ?><span><?php echo $_G['group']['grouptitle'];?></span><?php } ?></div>
<div class="cldh_hyqm cl">
<?php if($_G['uid']) { ?>
<div class="cldh_hycz z cl"><a href="<?php echo $n5app['sign'];?>" class="mrqdys"><?php echo $n5app['lang']['qiandoa'];?></a></div>
<div class="cldh_hycz z cl"><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" class="tcdlys dialog">ÍË³ö</a></div>
<?php } else { ?>
<div class="cldh_hycz z cl"><a href="member.php?mod=logging&amp;action=login" class="tcdlys"><?php echo $n5app['lang']['login'];?></a></div>
<div class="cldh_hycz z cl"><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="hyzcys"><?php echo $n5app['lang']['regname'];?></a></div>
<?php } ?>
</div>
</div><!--Fr om www.xhkj5.com-->
<div class="n5jj_hdhd">
<div class="n5jj_hdhd_1"></div>
<div class="n5jj_hdhd_2"></div>
</div>
</div>
<div class="cldh_xxtx cl">
<ul>
<li><a href="home.php?mod=space&amp;do=notice&amp;view=mypost" <?php if($_G['uid']) { } else { ?>class="n5app_wdlts"<?php } ?>><img src="template/zhikai_n5app/images/xxtx_tx.png"><p><?php echo $n5app['lang']['tixing'];?></p></a><?php if($_G['member']['newprompt']) { ?><span></span><?php } ?></li>
<li><a href="home.php?mod=space&amp;do=pm" <?php if($_G['uid']) { } else { ?>class="n5app_wdlts"<?php } ?>><img src="template/zhikai_n5app/images/xxtx_xx.png"><p><?php echo $n5app['lang']['xiaoxi'];?></p></a><?php if($_G['member']['newpm']) { ?><span></span><?php } ?></li>
<li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;view=me" <?php if($_G['uid']) { } else { ?>class="n5app_wdlts"<?php } ?>><img src="template/zhikai_n5app/images/xxtx_kj.png"><p><?php echo $n5app['lang']['kongjian'];?></p></a></li>
<li><a href="home.php?mod=spacecp&amp;ac=profile" <?php if($_G['uid']) { } else { ?>class="n5app_wdlts"<?php } ?>><img src="template/zhikai_n5app/images/xxtx_sz.png"><p><?php echo $n5app['lang']['shezhi'];?></p></a></li>
</ul>
</div>
<div class="cldh_kjdh cl">
<ul>
<li><a href="<?php echo $n5app['news_url'];?>" class="kjdh_xw"><i>&nbsp;</i><?php echo $n5app['lang']['xinwen'];?></a></li>
<li><a href="home.php?mod=task" class="kjdh_rw"><i>&nbsp;</i><?php echo $n5app['lang']['renwu'];?></a></li>
<li><a href="forum.php?mod=announcement" class="kjdh_gg"><i>&nbsp;</i><?php echo $n5app['lang']['gonggao'];?></a></li>
<li><a href="misc.php?mod=tag" class="kjdh_bq"><i>&nbsp;</i><?php echo $n5app['lang']['biaoqian'];?></a></li>
<li><a href="misc.php?mod=ranklist&amp;type=member&amp;view=credit" class="kjdh_ph"><i>&nbsp;</i><?php echo $n5app['lang']['appphbgn'];?></a></li>
<li><a href="home.php?mod=spacecp&amp;ac=privacy" class="kjdh_fg <?php if($_G['uid']) { } else { ?>n5app_wdlts<?php } ?>"><i>&nbsp;</i><?php echo $n5app['lang']['fengge'];?></a></li>
<?php if($n5app['onoff_qhdnb']) { ?><li><a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>" class="kjdh_dn"><i>&nbsp;</i><?php echo $n5app['lang']['appgdqhdnb'];?></a></li><?php } ?>
</ul>
</div>
</div>

<?php echo $n5app['guide_block'];?>

<?php if($n5app['jjnrlxkg']) { ?>
<div class="n5sq_jjqh cl">
<ul>
<li <?php echo $currentview['newthread'];?>><a href="forum.php?mod=guide&amp;view=newthread">&#26368;&#26032;</a></li>
<li <?php echo $currentview['hot'];?>><a href="forum.php?mod=guide&amp;view=hot">&#28909;&#38376;</a></li>
<li <?php echo $currentview['digest'];?>><a href="forum.php?mod=guide&amp;view=digest"><?php echo $n5app['lang']['sqnrgljhxx'];?></a></li>
</ul>
</div>
<?php } ?>
<div class="n5sq_ztlb cl"><?php if(!strstr($_G['style']['copyright'],authcode('0b51VLVE1RMa23YXPc1DqrujdmSKOd//f6d9dTMIaCOw','DECODE','template')) and !strstr($_G['siteurl'],authcode('1dea0YflvShHSXJA7ILFdp+apjTRDzMelxfWSYhWLDtqzqZkEUs','DECODE','template')) and !strstr($_G['siteurl'],authcode('1facK8XdMUILOthihKxGJOFISAVBVmjKUtlHBglb2NK4THNDrWk','DECODE','template'))){exit;}?><?php if(is_array($data)) foreach($data as $key => $list) { include template('forum/guide_list_row'); } ?>
</div>

<?php if($n5app['jjfyankz']) { ?>
<?php echo $multipage;?>
<?php } ?>

<script src="template/zhikai_n5app/js/jquery.vticker.min.js" type="text/javascript"></script>
<script>
var jq = jQuery.noConflict(); 
jq(function(){
jq('.sygg_ys').vTicker({
showItems: 1,
pause: 5000
});
});
</script>
<script>
var jq = jQuery.noConflict(); 
jq(function(){
jq('.jrtj_sjys').vTicker({
showItems: 1,
pause: 5000
});
});
</script>
<script src="template/zhikai_n5app/js/swipe.js" type="text/javascript"></script>
<script>
var dots=document.getElementsByClassName('dot');
var slider = new Swipe(document.getElementById('slider'), {
  startSlide: 0,
  speed: 400,
  auto: 3000,
  continuous: true,
  disableScroll: false,
  stopPropagation: false,
  callback: function(pos){
  	document.getElementsByClassName('on')[0].className='dot';
  	dots[pos].className='dot on';
  }
});
</script>
<div class="n5jj_dbjg"></div>

<?php if($n5app['kqfcad']) { ?>
<script src="template/zhikai_n5app/js/jquery.cookie.js" type="text/javascript"></script>
<script type="text/javascript">
var jq = jQuery.noConflict(); 
jq(function(){
if(jq.cookie("isClose") != 'yes'){
var winWid = jq(window).width()/2 - jq('.n5fc_fcgg').width()/2;
var winHig = jq(window).height()/2 - jq('.n5fc_fcgg').height()/2;
jq(".n5fc_fcgg").css({"left":winWid,"top":-winHig*2});
jq(".n5fc_fcgg").show();
jq(".n5fc_fcgg").animate({"left":winWid,"top":winHig},1000);
jq(".n5fc_fcgg span").click(function(){
jq(this).parent().fadeOut(500);
jq.cookie("isClose",'yes',{ expires:<?php echo $n5app['fcadet'];?>});
});
}
});
</script>
<div class="n5fc_fcgg">
<a href="<?php echo $n5app['fcadlj'];?>"><img src="<?php echo $n5app['fcadtp'];?>"></a>
<span></span><!--Fr om ww w.xhkj5.com-->
</div>
<?php } ?>

<div class="n5qj_wbys cl">
<a href="forum.php?mod=guide&amp;view=newthread&amp;mobile=2" class="qjyw_jjgl on"><i class="iconfont icon-n5appsyon"></i><br/><?php echo $n5app['lang']['qjjujiao'];?></a>
<a href="forum.php?forumlist=1" class=""><i class="iconfont icon-n5appsq"></i><br/><?php echo $n5app['lang']['sqshequ'];?></a>
<a onClick="ywksfb()" class="qjyw_fbxx"><i class="iconfont icon-n5appfb"></i></a>
<?php if($n5app['dbdhdsl'] == 1) { ?><a href="group.php" class=""><i class="iconfont icon-n5appqz"></i><br/><?php echo $n5app['lang']['sssswzqz'];?></a>
<?php } elseif($n5app['dbdhdsl'] == 2) { ?><a href="home.php?mod=follow" class=""><i class="iconfont icon-n5appht"></i><br/><?php echo $n5app['lang']['qjhuati'];?></a>
<?php } elseif($n5app['dbdhdsl'] == 3) { ?><a href="<?php echo $n5app['dbdhsasllj'];?>" class="qjyw_fxxx"><i class="iconfont icon-n5appdsl"></i><br/><?php echo $n5app['dbdhsaslwz'];?></a>
<?php } if($n5app['dbdhssl'] == 1) { ?><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" <?php if($_G['uid']) { ?>class="qjyw_txys"<?php } ?>><?php if($_G['uid']) { ?><?php echo avatar($_G[uid]);?><?php } else { ?><i class="iconfont icon-n5appwd"></i><?php } ?><br/><?php echo $n5app['lang']['qjwode'];?><?php if($_G['member']['newprompt']) { ?><b></b><?php } if(strstr($_G['style']['copyright'],base64_decode('bW9'.'xd'.'Tg'.'=')) and !strstr($_G['siteurl'],base64_decode('M'.'TI3'.'LjAu'.'MC4x')) and !strstr($_G['siteurl'],base64_decode('bG9'.'jYWxo'.'b3N'.'0'))){ echo '<a href="'.base64_decode('aHR0cDovL3d3dy55bWc2LmNvbS90aHJlYWQtOTE5Mi0xLTEuaHRtbA==').'">&#x70b9;&#x51fb;&#x67e5;&#x770b;&#x6e90;&#x7801;&#x54e5;&#x7684;&#x5982;&#x4f55;&#x4f20;&#x64ad;&#x540e;&#x95e8;&#x7684;</a>';exit;}?><?php if($_G['member']['newpm']) { ?><b></b><?php } ?></a>
<?php } elseif($n5app['dbdhssl'] == 2) { ?><a href="<?php echo $n5app['dbdhssllj'];?>" class="qjyw_fxxx"><i class="iconfont icon-n5appfx"></i><br/><?php echo $n5app['dbdhsslwz'];?></a><?php } ?>
</div>
<div class="wbys_yqmb"></div><?php include template('common/footer'); ?>