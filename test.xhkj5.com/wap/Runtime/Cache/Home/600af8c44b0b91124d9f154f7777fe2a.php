<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title><?php echo ($vod_name); ?> - <?php echo ($vod_jiname); ?> - <?php echo ($vod_playername); ?>高清在线观看 - 正在播放－<?php echo ($sitename); ?></title>
<meta name="keywords" content="<?php echo ($vod_name); ?><?php echo ($vod_jiname); ?>在线观看,<?php echo ($vod_name); ?><?php echo ($vod_jiname); ?><?php echo ($vod_playname); ?>高清在线观看" />
<meta name="description" content="<?php echo ($vod_name); ?><?php echo ($vod_jiname); ?>免费观看,<?php echo ($vod_name); ?><?php echo ($vod_jiname); ?><?php echo ($vod_playname); ?>高清在线观看,<?php echo ($vod_content); ?>..." />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta http-equiv="Cache-Control" content="no-transform">
<meta content="<?php echo ($title); ?>" name="apple-mobile-web-app-title">
<link href="/favicon.ico" type="image/x-icon" rel="icon">
<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="<?php echo ($tpl); ?>style/global.css" rel="stylesheet" type="text/css">
<link href="<?php echo ($tpl); ?>style/search.css" rel="stylesheet" type="text/css">
<link href="<?php echo ($tpl); ?>style/index.css" rel="stylesheet" type="text/css">
<link href="<?php echo ($tpl); ?>style/tv.detail.css" rel="stylesheet" type="text/css">
<script language="javascript">var Root='<?php echo ($root); ?>';var Sid='<?php echo ($sid); ?>';var Cid='<?php echo ($list_id); ?>';<?php if($sid == 1): ?>var Id='<?php echo ($vod_id); ?>';<?php else: ?>var Id='<?php echo ($news_id); ?>';<?php endif; ?></script>
<script charset="utf-8" src="<?php echo ($tpl); ?>js/jquery-1.7.2.min.js"></script>
<script charset="utf-8" src="<?php echo ($tpl); ?>js/jquery.autocomplete-1.1.js"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/home.js"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/zepto.js"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/iscroll.js"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/index.min.js"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/jquery.lazyload.min.js"></script>
<script>
function nofind(e){ 
	return e.src='<?php echo ($tpl); ?>images/default.png';
}
</script>
<style>
.FF #topleft { display: none; }
.FF #topright { display: none; }
</style>
</head>
<body>
<div class="wrapper">
<div class="mask" id="mask_box"></div>
<header class="header clearfix">
  <p class="headLeft"><a href="/" class="aLogo"></a></p>
  <p class="headRight"> <a class="aHome" href="/" target="_self"><span>首页</span></a> <a href="javascript:void(0);" class="aNav"><span>导航</span></a> <a href="javascript:void(0);" class="aSearch"><span>搜索</span></a> <a href="javascript:void(0);" target="_self" class="aUnLogin"><span id="unameHeader">历史</span></a> </p>
  <section id="ls_box" class="searchMenu" style="display: none;">
    <div class="hisBox fn-left">
      <div class="looked-box" id="history"> </div>
    </div>
  </section>
</header>
<section id="search_box" class="searchMenu" style="display: none;">
  <form action="/index.php?s=vod-search" method="post" id="search_form">
    <div class="searchFormCon globalPadding">
      <p class="pSearchForm">
        <input type="text" class="searchTxt searchTxtBlur ac_input" name="wd" id="wd" autocomplete="off" >
        <input type="submit" value="" class="searchBtn">
        <i class="clearSearchBtn"><em></em></i> </p>
    </div>
  </form>
  <div class="search_hotkey"><?php echo ($hotkey); ?></div>
</section>
<nav class="subNav globalPadding index_menu_top" id="nav_menu">
  <div class="con clearfix">     <p>
      <?php $cidarr=array(2,1,3,4,35,51,52); ?>
      <?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><a href="<?php echo getlistname($ppcid,'list_url');?>"  target="_self"><?php echo getlistname($ppcid);?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    </p></div>
</nav>
<div><?php echo getadsurl('head');?></div>
<section class="main">
  <div class="detailPosterIntro globalPadding clearfix" style="height:auto;width:100%;">
    <ul class="n_js" id="p_1" style="display:block;margin-top: 15px;" >
      <div id="_player" class="player" style="width:100%;" >
        <article class="player" style="margin-bottom:0">
          <div id="play" style="width:100%;" > <?php echo ($vod_player); ?> </div>
        </article>
      </div>
    </ul>
    <br>
  </div>
  <div class="tab globalPadding">
    <ul class="tabNav clearfix">
      <li><span class="cur">剧集</span></li>
      <li><span class="">简介</span></li>
      <li><span class="">评论</span></li>
    </ul>
  </div>
  <div class="tabConList globalPadding">
    <div class="tabCon" style="display: block;"> 
      <script type="text/javascript">
        $(function(){
        var i=0;
        function oooTab (){
        $(this).addClass("current").siblings().removeClass("current").parent().siblings().hide().siblings("."+$(this).attr("id")).show();
        }
        $(".tabt span,.tabt2 span").mouseover(oooTab);
        $(".tabt3 span").click(oooTab);
        });
        </script>
      <dl class="tab2">
        <dt id="tabt3" class="tabt3"> <b class="player_title">播放源</b>
          <?php if(is_array($vod_playlist)): $i = 0; $__LIST__ = $vod_playlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if( $ppvod["playname"] != 'bdhd'&$ppvod["playname"] != 'qvod'&$ppvod["playname"] != 'pvod'&$ppvod["playname"] != 'gvod' &$ppvod["playname"] != 'cool'&$ppvod["playname"] != 'media'&$ppvod["playname"] != 'real'&$ppvod["playname"] != 'qvod'&$ppvod["playname"] != 'swf'&$ppvod["playname"] != 'flv'): ?><span id="<?php echo ($ppvod["playname"]); ?>" 
                <?php if($i==1): ?>class="current"<?php endif; ?>
                > <?php echo ($ppvod["playername"]); ?></span><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
        </dt>
        
        <?php if(is_array($vod_playlist)): $i = 0; $__LIST__ = $vod_playlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if( $ppvod["playname"] != 'bdhd'&$ppvod["playname"] != 'qvod'&$ppvod["playname"] != 'pvod'&$ppvod["playname"] != 'gvod' &$ppvod["playname"] != 'cool'&$ppvod["playname"] != 'media'&$ppvod["playname"] != 'real'&$ppvod["playname"] != 'qvod'&$ppvod["playname"] != 'swf'&$ppvod["playname"] != 'flv'): ?><?php if(($ppvod["playname"])  ==  "down"): ?><dd class="<?php echo ($ppvod["playname"]); ?>"  <?php if($i==1): ?>style="display:block;"<?php endif; ?>>
               <ul class="ulNumList clearfix list_1">
              <li class="yy download">电脑访问本站可直接下载</li>
              </ul>
              </dd>
              <?php else: ?>
              <?php if(($ppvod["playname"])  ==  "disk"): ?><dd class="<?php echo ($ppvod["playname"]); ?>"  <?php if($i==1): ?>style="display:block;"<?php endif; ?>>
                <ul class="ulNumList clearfix list_1">
                  <?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><li class="yy"> <a href="<?php echo ($ppvodson["playpath"]); ?>" class="cur" target="_self" title="<?php echo ($ppvodson["playname"]); ?>" alt="<?php echo ($ppvodson["playname"]); ?>"><?php echo ($ppvodson["playname"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </dd>
                <?php else: ?>
                <dd class="<?php echo ($ppvod["playname"]); ?>" 
                <?php if($i==1): ?>style="display:block;"<?php endif; ?>
                >
                <ul class="ulNumList clearfix list_1">
                  <?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><li class="yy"> <a href="<?php echo ($ppvodson["playurl"]); ?>" class="cur" target="_self" title="<?php echo ($ppvodson["playname"]); ?>" alt="<?php echo ($ppvodson["playname"]); ?>"><?php echo ($ppvodson["playname"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </dd><?php endif; ?><?php endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
      </dl>
    </div>
    <div class="tabCon" style="display: none;">
      <ul class="ulTxt clearfix" id="movie_info_ul">
        <li><span class="sTit">类型：</span>
          <p><em><A class=arrow href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></A></em> </p>
        </li>
        <li><span class="sTit">年代：</span>
          <p><em><?php echo (($vod_year)?($vod_year):'未录入'); ?></em></p>
        </li>
        <li><span class="sTit">地区：</span>
          <p><em><?php echo (($vod_area)?($vod_area):'未知'); ?></em></p>
        </li>
        <li><span class="sTit">语言：</span>
          <p><em><?php echo (($vod_language)?($vod_language):'未知'); ?></em></p>
        </li>
        <li class="liAll"><span class="sTit">导演：</span>
          <p><em>
            <?php if(!empty($vod_director)): ?><?php echo (ff_search_url(msubstr($vod_director,0,10))); ?>
              <?php else: ?>
              未录入<?php endif; ?>
            </em></p>
        </li>
        <li class="liAll"><span class="sTit">主演：</span>
          <p> <em>
            <?php if(!empty($vod_actor)): ?><?php echo (ff_search_url($vod_actor)); ?>
              <?php else: ?>
              未录入<?php endif; ?>
            </em> </p>
        </li>
      </ul>
      <p class="movieintro" id="movie_info_intro_s"><span style="color:#333;">剧情简介：</span><?php echo (msubstr($vod_content,0,500)); ?> </p>
    </div>
    <!--box 影片信息 END-->
    <div class="tabCon" style="display: none;">
      <div class="ui-titlej" style="width:98%; margin-top:10px; padding:5px 1%; font-weight:bold; color:#333;">
        <h3><strong style="color:#F93;"><?php echo ($vod_name); ?></strong> 网友评论</h3>
      </div>
      <div style="width:98%; padding:0 1%;"> 
        <!-- UY BEGIN --> 
        <script type="text/javascript">
              var uyan_config = {
              'title':'《<?php echo ($vod_name); ?>在线观看》 - <?php echo ($sitename); ?>#<?php echo ($vod_name); ?>#', 
              'url':'<?php echo ($siteurl); ?><?php echo ($vod_readurl); ?>', 
              'pic':'<?php echo ($vod_picurl); ?>', 
              'du':'www.ffcms.cn', 
              'su':'<?php echo ($vod_id); ?>' 
              };
          </script>
        <div id="uyan_frame"></div>
        
        <!-- UY END --> 
      </div>
    </div>
    <div class="mod_b">
      <div class="th_b"><span class="sMark">猜你喜欢</span></div>
      <div class="tb_b">
        <ul class="picTxt picTxtA clearfix" id="resize_list">
          <?php $hot_week = ff_mysql_vod('cid:'.$list_id.';limit:6;order:vod_hits_month desc,vod_addtime desc'); ?>
          <?php if(is_array($hot_week)): $i = 0; $__LIST__ = $hot_week;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
              <div class="con"> <a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_self" style="width: 414px; height: 552px;"> <img src="<?php echo (getpicurl_s($ppvod["vod_pic"])); ?>"  onerror="nofind(this,'<?php echo (getpicurl($ppvod["vod_pic"])); ?>');" alt="<?php echo ($vod_name); ?>" style="width: 414px; height: 552px;"/><span class="sNum">
                <?php if(!empty($ppvod["vod_title"])): ?><?php echo ($ppvod["vod_title"]); ?>
                  <?php else: ?>
                  <?php if(empty($ppvod["vod_continu"])): ?><?php if($list_id == 1|$list_id == 8|$list_id == 9|$list_id == 10|$list_id == 11|$list_id == 12|$list_id == 13|$list_id == 14|$list_id == 22|$list_id == 28|$list_id == 30|$list_id == 31): ?><?php else: ?>
                      全集<?php endif; ?>
                    <?php else: ?>
                    <?php if($list_id == 1|$list_id == 8|$list_id == 9|$list_id == 10|$list_id == 11|$list_id == 12|$list_id == 13|$list_id == 14|$list_id == 22|$list_id == 28|$list_id == 30|$list_id == 31): ?><?php echo ($ppvod["vod_continu"]); ?>
                      <?php else: ?>
                      <?php if($list_id == 4): ?>第<?php echo ($ppvod["vod_continu"]); ?>期
                        <?php else: ?>
                        第<?php echo ($ppvod["vod_continu"]); ?>集<?php endif; ?><?php endif; ?><?php endif; ?><?php endif; ?>
                </span> <span class="sTit"><?php echo ($ppvod["vod_name"]); ?></span> </a> </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
﻿<footer class="footer">
  <p class="copyRight">Copyright© 2012-2015请在WIFI下观看-<?php echo ($sitename); ?></p>
</footer>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/common.min.js"></script> 
<script>
// 延迟加载
$('#data_list img').lazyload({data_attribute:'src',threshold:30,effect : "fadeIn"});
</script>
<div style="display:none;"><?php echo getadsurl('tongji');?></script></div> 
<script>
if(PlayHistoryObj){
	var vod_id = "<?php echo ($vod_id); ?>" ;
	var vod_pid = "<?php echo ($vod_pid); ?>" ;
	var vod_sid = "<?php echo ($sid); ?>" ;
	var vod_name="<?php echo ($vod_name); ?>";
	var url_name = " <?php echo ($vod_jiname); ?>" ;
	var json = {
		'vod_id' : vod_id ,
		'vod_pid': vod_pid,
		'vod_sid': vod_sid,
		'vod_name' : vod_name,
		'url_name' : url_name,
	} ;
	PlayHistoryObj.addPlayHistory(json,"<?php echo ($vod_readurl); ?>",window.location.href);
}
</script> 
<script language="javascript">FF.History.Insert('<?php echo ($vod_name); ?>','<?php echo ($vod_readurl); ?>','<?php echo ($vod_title); ?>',10,7,'','');</script> 
</body>
</html>