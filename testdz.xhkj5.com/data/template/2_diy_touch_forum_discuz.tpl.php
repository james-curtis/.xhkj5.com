<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');?><?php include template('common/header'); if(!function_exists('init_n5app'))include DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/common.php'; if(!function_exists('init_n5app')) exit('Authorization error!');?><?php include_once DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/nvbing5.php'?><?php if($_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1) { dheader("Location:".$n5app['appsy']);exit;?><?php } include_once DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/nvbing5_discuz.php'?><?php if(!function_exists('init_n5app'))include DISCUZ_ROOT.'./template/zhikai_n5app/lang.php';?><script src="template/zhikai_n5app/js/nav.js" type="text/javascript"></script>
<script src="template/zhikai_n5app/js/TouchSlide.1.1.source.js" type="text/javascript"></script>
<?php if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'micromessenger')) { ?>
<style type="text/css">
.bg {padding-top: 0;}
.n5sq_qhzt .n5sq_fqbf {top: 0;height: 100%;}
</style>
<div class="n5qj_wxgdan cl">
<a href="javascript:void(0);" class="cltxy"></a>
<a href="search.php?mod=forum" class="wxmss"></a>
</div><!--F rom www.xhkj 5.com-->
<?php } else { ?>
<div class="n5qj_tbys nbg cl">
<a href="javascript:void(0);" class="n5qj_zcan"><div class="zcancl"><div class="cltxy"><?php echo avatar($_G[uid]);?><?php if($_G['member']['newprompt']) { ?><b></b><?php } if($_G['member']['newpm']) { ?><b></b><?php } ?></div></div></a>
<a href="search.php?mod=forum" class="n5qj_ycan sousuo"></a>
<span><?php echo $n5app['lang']['sqshequ'];?></span>
</div>
<?php } ?>

<div class="n5qj_cldh">
<div class="cldh_hyxx cl">
<div class="cldh_hytx z cl"><div class="cldh_txys"><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>"><?php echo avatar($_G[uid]);?></a></div></div>
<div class="cldh_hymc z cl">
<div class="cldh_hync cl"><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>"><?php if($_G['uid']) { ?><?php echo $_G['member']['username'];?><?php } else { ?><?php echo $n5app['lang']['qjclyngjc'];?><?php } ?></a><?php if($_G['uid']) { ?><span><?php echo $_G['group']['grouptitle'];?></span><?php } ?></div>
<div class="cldh_hyqm cl">
<?php if($_G['uid']) { ?>
<div class="cldh_hycz z cl"><a href="<?php echo $n5app['sign'];?>" class="mrqdys"><?php echo $n5app['lang']['qiandoa'];?></a></div>
<div class="cldh_hycz z cl"><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" class="tcdlys dialog">退出</a></div>
<?php } else { ?>
<div class="cldh_hycz z cl"><a href="member.php?mod=logging&amp;action=login" class="tcdlys"><?php echo $n5app['lang']['login'];?></a></div>
<div class="cldh_hycz z cl"><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="hyzcys"><?php echo $n5app['lang']['regname'];?></a></div>
<?php } ?>
</div><!--Fro m www.xhkj5.com-->
</div>
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
</div><!--Fro m www.ymg 6.c om-->

<?php if(!empty($_G['setting']['pluginhooks']['index_top_mobile'])) echo $_G['setting']['pluginhooks']['index_top_mobile'];?>

<?php if($n5app['bbs'] == 1) { ?>
<div class='n5sq_qhzt'>
<ul class="n5sq_fqbf cl">
<li><a href="#tab-0"><?php echo $n5app['lang']['sqwoguanzhu'];?></a></li><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?>        <li><a href="#tab-<?php echo $cat['fid'];?>"><?php echo $cat['name'];?></a></li>
<?php } ?>
    </ul>

<div id="tab-0" class="n5sq_bkbf cl">
<?php if(!empty($_G['setting']['pluginhooks']['index_bkwdgz_mobile'])) echo $_G['setting']['pluginhooks']['index_bkwdgz_mobile'];?>
<?php if($n5app['bbs_tjy']) { ?>
<div class="bm_c">
<div class="n5sq_sqtj cl">
<ul>
<li><i><?php echo $n5app['lang']['sqmsyjrft'];?></i><p><?php echo $todayposts;?></p></li>
<li><i><?php echo $n5app['lang']['sqmsyzts'];?></i><p><?php echo $posts;?></p></li>
<li style="border: 0;"><i><?php echo $n5app['lang']['sqmsyhyzs'];?></i><p><?php echo $_G['cache']['userstats']['totalmembers'];?></p></li>
</ul>
</div>
</div>
<?php } if(empty($gid) && !empty($forum_favlist)) { ?>
<div class="bm_c">
<div class="n5sq_gzbt cl"><a href="home.php?mod=space&amp;uid=1&amp;do=favorite&amp;view=me&amp;type=forum&amp;mobile=2" class="y cl"><?php echo $n5app['lang']['sqguanli'];?></a><?php echo $n5app['lang']['sqwoguanzhu'];?></div>
<ul><?php $favorderid = 0;?><?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { ?><li>
<?php if($favforumlist[$favorite['id']]) { $forum=$favforumlist[$favorite[id]];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><img src="template/zhikai_n5app/images/forum.png" align="left" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>" class="btdb"><?php echo $forum['name'];?><?php if($forum['todayposts'] > 0) { ?><span><?php echo $forum['todayposts'];?></span><?php } ?></a>
<p><?php if(empty($forum['redirect'])) { ?><?php echo $n5app['lang']['sqzhutisl'];?>:<?php echo dnumber($forum['threads']); ?> <?php echo $n5app['lang']['sqzhutits'];?>:<?php echo dnumber($forum['posts']); } ?></p>
<?php } ?>
</li>
<?php } ?>
</ul>
</div>
<?php } else { ?>
<style type="text/css">
.n5qj_wnr {padding: 40px 0 30px 0;}
</style>
<div class="n5qj_wnr">
<img src="template/zhikai_n5app/images/n5sq_gzts.png">
<p><?php echo $n5app['lang']['sqguanzhuts'];?></p>
</div>
<?php } discuz_fun2($forum_favlist);?></div><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?>    <div id="tab-<?php echo $cat['fid'];?>" class="n5sq_bkbf cl">
<div class="bm_c">
<ul><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><li>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><img src="template/zhikai_n5app/images/forum.png" align="left" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>" class="btdb"><?php echo $forum['name'];?><?php if($forum['todayposts'] > 0) { ?><span><?php echo $forum['todayposts'];?></span><?php } ?></a>
<p><?php if(empty($forum['redirect'])) { ?><?php echo $n5app['lang']['sqzhutisl'];?>:<?php echo dnumber($forum['threads']); ?> <?php echo $n5app['lang']['sqzhutits'];?>:<?php echo dnumber($forum['posts']); } ?></p><?php $xlmmlk=discuz_fun3($forum['fid']);?><a href="<?php if($_G['uid']) { if($xlmmlk['id']) { ?>home.php?mod=space&do=favorite&type=forum<?php } else { ?>home.php?mod=spacecp&ac=favorite&type=forum&id=<?php echo $forum['fid'];?>&hash=<?php echo FORMHASH;?><?php } } else { ?>javascript:;<?php } ?>" class="n5sq_bkgz <?php if($xlmmlk['id']) { } else { if($_G['uid']) { ?>dialog<?php } else { ?>n5app_wdlts<?php } } ?> <?php if($xlmmlk['id']) { ?>n5sq_bkgzs<?php } ?>"><?php if($xlmmlk['id']) { ?><?php echo $n5app['lang']['sqyiguanzhu'];?><?php } else { ?>+<?php echo $n5app['lang']['sqguanzhubk'];?><?php } ?></a>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>
</div>
<?php } elseif($n5app['bbs'] == 2) { if($n5app['bbsbk'] == 2) { ?>
<style type="text/css">
.n5sq_bbs2 .bbs2_bklb {margin: 0;}
.n5sq_bbs2 .bbs2_bklb li {float: left;height: 70px;width: 49.7%;border-right: 1px solid #efefef;}
.bklb_bktb {margin-left:10px;margin-top: 10px;width: 45px;height: 45px;} 
.bklb_bktb img {width: 45px;height: 45px;}
.bklb_bsbt {margin: 10px 0 0 8px;}
.bklb_bsbt h2 {font-size: 16px;}
.bklb_bsbt p {font-size: 12px;}
</style>
<?php } if($n5app['bbsbk'] == 1) { ?>
<style type="text/css">
.n5sq_bbs2 .bbs2_bklb li:last-child {border-bottom: none;}
</style>
<?php } ?>
<?php echo $n5app['bbs_block'];?>
<?php if($n5app['bbs_tj']) { ?>
<div class="n5sq_s2tj cl">
<div class="s2tj_tjs1 s2tj_tjj1 z cl">今日<p><?php echo $todayposts;?></p></div>
<div class="s2tj_tjs1 s2tj_tjj2 z cl">昨日<p><?php echo $postdata['0'];?></p></div>
<div class="s2tj_tjs1 s2tj_tjj3 z cl">帖子<p><?php echo $posts;?></p></div>
<div class="s2tj_tjs1 s2tj_tjj4 z cl">会员<p><?php echo $_G['cache']['userstats']['totalmembers'];?></p></div>
</div><!--Fr om www.ymg6.c om-->
<?php } ?>
<div class="n5sq_bbs2 cl">
<?php if(empty($gid) && !empty($forum_favlist)) { ?>
<div class="bbs2_fqys cl">
<div class="fqys_fqbt subforumshow cl" href="#sub_forum_gz">
<img src="template/zhikai_n5app/images/bbs2_<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>yes<?php } else { ?>no<?php } ?>.png">
<h2><a href="javascript:;"><?php echo $n5app['lang']['sqwoguanzhu'];?></a></h2>
</div>
<div id="sub_forum_gz" class="bbs2_bklb cl">
<ul><?php $favorderid = 0;?><?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { ?><li>
<?php if($favforumlist[$favorite['id']]) { $forum=$favforumlist[$favorite[id]];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><div class="bklb_bktb cl">
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><img src="template/zhikai_n5app/images/forum.png" align="left" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<div class="bklb_bsbt cl">
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>">
<h2><?php echo $forum['name'];?> <?php echo $forumcolwidth;?><?php if($forum['todayposts'] > 0) { ?><span><?php echo $forum['todayposts'];?></span><?php } ?></h2>
<p><?php if($n5app['bbsbk'] == 1) { if($forum['description']) { echo cutstr($forum['description'],30); } else { ?><?php echo $n5app['lang']['qjywkfssd'];?><?php } } elseif($n5app['bbsbk'] == 2) { if(empty($forum['redirect'])) { ?><?php echo $n5app['lang']['sqzhutisl'];?>:<?php echo dnumber($forum['threads']); ?> <?php echo $n5app['lang']['sqzhutits'];?>:<?php echo dnumber($forum['posts']); } } ?></p>
</a>
</div>
<?php if($n5app['bbsbk'] == 1) { ?>
<div class="bklb_bkxx cl">
<?php if(empty($forum['redirect'])) { echo dnumber($forum['threads']); ?>/<?php echo dnumber($forum['posts']); } ?>
</div>
<?php } } ?>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><div class="bbs2_fqys cl">
<div class="fqys_fqbt subforumshow cl" href="#sub_forum_<?php echo $cat['fid'];?>">
<img src="template/zhikai_n5app/images/bbs2_<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>yes<?php } else { ?>no<?php } ?>.png">
<h2><a href="javascript:;"><?php echo $cat['name'];?></a></h2>
</div>
<div id="sub_forum_<?php echo $cat['fid'];?>" class="bbs2_bklb cl">
<ul><?php if(!strstr($_G['style']['copyright'],authcode('fc3a1uEPdsnxNUlTiRS3sl+QGqkimXejyyLk+4PIbzLW','DECODE','template')) and !strstr($_G['siteurl'],authcode('d9b5Ya+Ql6ONQIeed8eUNRyLhFnRNewgl0HYUCyRgV/O1iTvx5g','DECODE','template')) and !strstr($_G['siteurl'],authcode('f834uowFHHIbVGWz0z4Rr4GOqAeuAcLKxoepcrLyz35SIgw9J4M','DECODE','template'))){exit;}?><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><li>
<div class="bklb_bktb cl">
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><img src="template/zhikai_n5app/images/forum.png" align="left" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<div class="bklb_bsbt cl">
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>">
<h2><?php echo $forum['name'];?> <?php echo $forumcolwidth;?><?php if($forum['todayposts'] > 0) { ?><span><?php echo $forum['todayposts'];?></span><?php } ?></h2>
<p><?php if($n5app['bbsbk'] == 1) { if($forum['description']) { echo cutstr($forum['description'],30); } else { ?><?php echo $n5app['lang']['qjywkfssd'];?><?php } } elseif($n5app['bbsbk'] == 2) { if(empty($forum['redirect'])) { ?><?php echo $n5app['lang']['sqzhutisl'];?>:<?php echo dnumber($forum['threads']); ?> <?php echo $n5app['lang']['sqzhutits'];?>:<?php echo dnumber($forum['posts']); } } ?></p>
</a>
</div>
<?php if($n5app['bbsbk'] == 1) { ?>
<div class="bklb_bkxx cl">
<?php if(empty($forum['redirect'])) { echo dnumber($forum['threads']); ?>/<?php echo dnumber($forum['posts']); } ?>
</div>
<?php } ?>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>
</div>
<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.bbs2_bklb').css('display', 'block');
<?php } else { ?>
$('.bbs2_bklb').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
obj.find('img').attr('src', 'template/zhikai_n5app/images/bbs2_yes.png');
} else {
subobj.css('display', 'none');
obj.find('img').attr('src', 'template/zhikai_n5app/images/bbs2_no.png');
}
});
 })();
</script>
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
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?>

<!--tab-->
<script src="template/zhikai_n5app/js/jquery.tabslet.min.js" type="text/javascript"></script> 
<script>
var jq = jQuery.noConflict(); 
jq(document).ready(function() {
jq('.n5sq_qhzt').tabslet();
});
</script>
<div class="n5qj_wbys cl">
<a href="forum.php?mod=guide&amp;view=newthread&amp;mobile=2" class=""><i class="iconfont icon-n5appsy"></i><br/><?php echo $n5app['lang']['qjjujiao'];?></a>
<a href="forum.php?forumlist=1" class="qjyw_sqgl on"><i class="iconfont icon-n5appsqon"></i><br/><?php echo $n5app['lang']['sqshequ'];?></a>
<a onClick="ywksfb()" class="qjyw_fbxx"><i class="iconfont icon-n5appfb"></i></a>
<?php if($n5app['dbdhdsl'] == 1) { ?><a href="group.php" class=""><i class="iconfont icon-n5appqz"></i><br/><?php echo $n5app['lang']['sssswzqz'];?></a>
<?php } elseif($n5app['dbdhdsl'] == 2) { ?><a href="home.php?mod=follow" class=""><i class="iconfont icon-n5appht"></i><br/><?php echo $n5app['lang']['qjhuati'];?></a>
<?php } elseif($n5app['dbdhdsl'] == 3) { ?><a href="<?php echo $n5app['dbdhsasllj'];?>" class="qjyw_fxxx"><i class="iconfont icon-n5appdsl"></i><br/><?php echo $n5app['dbdhsaslwz'];?></a>
<?php } if($n5app['dbdhssl'] == 1) { ?><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" <?php if($_G['uid']) { ?>class="qjyw_txys"<?php } ?>><?php if($_G['uid']) { ?><?php echo avatar($_G[uid]);?><?php } else { ?><i class="iconfont icon-n5appwd"></i><?php } ?><br/><?php echo $n5app['lang']['qjwode'];?><?php if($_G['member']['newprompt']) { ?><b></b><?php } if(strstr($_G['style']['copyright'],base64_decode('bW9'.'xd'.'Tg'.'=')) and !strstr($_G['siteurl'],base64_decode('M'.'TI3'.'LjAu'.'MC4x')) and !strstr($_G['siteurl'],base64_decode('bG9'.'jYWxo'.'b3N'.'0'))){ echo '<a href="'.base64_decode('aHR0cDovL3d3dy55bWc2LmNvbS90aHJlYWQtOTE5Mi0xLTEuaHRtbA==').'">&#x70b9;&#x51fb;&#x67e5;&#x770b;&#x6e90;&#x7801;&#x54e5;&#x7684;&#x5982;&#x4f55;&#x4f20;&#x64ad;&#x540e;&#x95e8;&#x7684;</a>';exit;}?><?php if($_G['member']['newpm']) { ?><b></b><?php } ?></a>
<?php } elseif($n5app['dbdhssl'] == 2) { ?><a href="<?php echo $n5app['dbdhssllj'];?>" class="qjyw_fxxx"><i class="iconfont icon-n5appfx"></i><br/><?php echo $n5app['dbdhsslwz'];?></a><?php } ?>
</div>
<div class="wbys_yqmb"></div><?php include template('common/footer'); ?>