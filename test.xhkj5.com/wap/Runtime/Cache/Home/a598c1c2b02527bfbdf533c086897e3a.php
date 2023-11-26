<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title><?php echo ($title); ?>_2015最新最热的的电影电视剧，免费在线观看，高清下载</title>
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
<meta name="keywords" content="<?php echo ($keywords); ?>">
<meta name="description" content="<?php echo ($description); ?>">
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
</head>
<body>
<div class="wrapper"> <div class="mask" id="mask_box"></div>
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
 <div class="mod_a globalPadding">
      
      <div class="tb_a">
        <ul class="picTxt picTxtA clearfix" id="data_list">
          <?php $focus=ff_mysql_vod('limit:6;stars:5;vod_addtime desc') ?>
          <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
              <div class="con"> <a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_self">
                <div class="picsize"> <img  data-src="<?php echo (getpicurl_s($ppvod["vod_pic"])); ?>" src="<?php echo ($tpl); ?>images/default.png" onerror="nofind(this,'<?php echo (getpicurl($ppvod["vod_pic"])); ?>');" alt="<?php echo ($ppvod["vod_name"]); ?>"><span class="sNum">
                  <?php if(!empty($ppvod["vod_title"])): ?><?php echo ($ppvod["vod_title"]); ?>
                    <?php else: ?>
                    <?php if(empty($ppvod["vod_continu"])): ?>全集
                      <?php else: ?>
                      第<?php echo ($ppvod["vod_continu"]); ?>集<?php endif; ?><?php endif; ?>
                  </span> </div>
                <span class="sTit"><?php echo ($ppvod["vod_name"]); ?></span> <span class="sDes"><?php echo ($ppvod["vod_actor"]); ?></span> </a> </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="mod_a globalPadding">
      <div class="th_a"><span class="sMark"><i class="iPoint"></i>同步热播剧</span><a href="<?php echo getlistname(2,'list_url');?>" class="aMore" target="_blank"><i class="moreArrow"></i></a></div>
      <div class="tb_a">
        <ul class="picTxt picTxtA clearfix" id="data_list">
          <?php $focus=ff_mysql_vod('limit:1,6;cid:2;order:vod_addtime desc') ?>
          <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
              <div class="con"> <a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_self">
                <div class="picsize"> <img  data-src="<?php echo (getpicurl_s($ppvod["vod_pic"])); ?>" src="<?php echo ($tpl); ?>images/default.png" onerror="nofind(this,'<?php echo (getpicurl($ppvod["vod_pic"])); ?>');" alt="<?php echo ($ppvod["vod_name"]); ?>"><span class="sNum">
                  <?php if(!empty($ppvod["vod_title"])): ?><?php echo ($ppvod["vod_title"]); ?>
                    <?php else: ?>
                    <?php if(empty($ppvod["vod_continu"])): ?>全集
                      <?php else: ?>
                      第<?php echo ($ppvod["vod_continu"]); ?>集<?php endif; ?><?php endif; ?>
                  </span> </div>
                <span class="sTit"><?php echo ($ppvod["vod_name"]); ?></span> <span class="sDes"><?php echo ($ppvod["vod_actor"]); ?></span> </a> </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="mod_a globalPadding">
      <div class="th_a"><span class="sMark"><i class="iPoint"></i>电影热播</span><a href="<?php echo getlistname(1,'list_url');?>" class="aMore" target="_blank"><i class="moreArrow"></i></a></div>
      <div class="tb_a">
        <ul class="picTxt picTxtA clearfix" id="data_list">
          <?php $focus=ff_mysql_vod('limit:1,6;cid:1;order:vod_addtime desc') ?>
          <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
              <div class="con"> <a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_self">
                <div class="picsize"> <img  data-src="<?php echo (getpicurl_s($ppvod["vod_pic"])); ?>" src="<?php echo ($tpl); ?>images/default.png" onerror="nofind(this,'<?php echo (getpicurl($ppvod["vod_pic"])); ?>');" alt="<?php echo ($ppvod["vod_name"]); ?>"><span class="sNum"> <em class="emScore"><?php echo ($ppvod["vod_gold"]); ?></em>分 </span> </div>
                <span class="sTit"><?php echo ($ppvod["vod_name"]); ?></span> <span class="sDes"><?php echo ($ppvod["vod_actor"]); ?></span> </a> </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="mod_a globalPadding">
      <div class="th_a"><span class="sMark"><i class="iPoint"></i>动漫精选</span><a href="<?php echo getlistname(3,'list_url');?>" class="aMore" target="_blank"><i class="moreArrow"></i></a></div>
      <div class="tb_a">
        <ul class="picTxt picTxtA clearfix" id="data_list">
          <?php $focus=ff_mysql_vod('limit:1,6;cid:3;order:vod_addtime desc') ?>
          <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
              <div class="con"> <a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_self">
                <div class="picsize"><img  data-src="<?php echo (getpicurl_s($ppvod["vod_pic"])); ?>" src="<?php echo ($tpl); ?>images/default.png" onerror="nofind(this,'<?php echo (getpicurl($ppvod["vod_pic"])); ?>');" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="sNum">
                  <?php if(!empty($ppvod["vod_title"])): ?><?php echo ($ppvod["vod_title"]); ?>
                    <?php else: ?>
                    <?php if(empty($ppvod["vod_continu"])): ?>全集
                      <?php else: ?>
                      第<?php echo ($ppvod["vod_continu"]); ?>集<?php endif; ?><?php endif; ?>
                  </span> </div>
                <span class="sTit"><?php echo ($ppvod["vod_name"]); ?></span> <span class="sDes"><?php echo ($ppvod["vod_actor"]); ?></span> </a> </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="mod_a globalPadding">
      <div class="th_a"><span class="sMark"><i class="iPoint"></i>热门综艺</span><a href="<?php echo getlistname(4,'list_url');?>" class="aMore" target="_blank"><i class="moreArrow"></i></a></div>
      <div class="tb_a">
        <ul class="picTxt picTxtA clearfix" id="data_list">
          <?php $focus=ff_mysql_vod('limit:1,6;cid:4;order:vod_addtime desc') ?>
          <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
              <div class="con"> <a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_self">
                <div class="picsize"> <img  data-src="<?php echo (getpicurl_s($ppvod["vod_pic"])); ?>" src="<?php echo ($tpl); ?>images/default.png" onerror="nofind(this,'<?php echo (getpicurl($ppvod["vod_pic"])); ?>');" alt="<?php echo ($ppvod["vod_name"]); ?>"><span class="sNum">
                  <?php if(!empty($ppvod["vod_title"])): ?><?php echo ($ppvod["vod_title"]); ?>
                    <?php else: ?>
                    <?php if(empty($ppvod["vod_continu"])): ?>全集
                      <?php else: ?>
                      更新<?php echo ($ppvod["vod_continu"]); ?>期<?php endif; ?><?php endif; ?>
                  </span> </div>
                <span class="sTit"><?php echo ($ppvod["vod_name"]); ?></span> <span class="sDes"><?php echo ($ppvod["vod_actor"]); ?></span> </a> </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="mod_a globalPadding">
      <div class="th_a"><span class="sMark"><i class="iPoint"></i>微电影精选</span><a href="<?php echo getlistname(35,'list_url');?>" class="aMore" target="_blank"><i class="moreArrow"></i></a></div>
      <div class="tb_a">
        <ul class="picTxt picTxtA clearfix" id="data_list">
          <?php $focus=ff_mysql_vod('limit:1,6;cid:35;order:vod_addtime desc') ?>
          <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
              <div class="con"> <a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_self">
                <div class="picsize"> <img  data-src="<?php echo (getpicurl_s($ppvod["vod_pic"])); ?>" src="<?php echo ($tpl); ?>images/default.png" onerror="nofind(this,'<?php echo (getpicurl($ppvod["vod_pic"])); ?>');" alt="<?php echo ($ppvod["vod_name"]); ?>"><span class="sNum">
                  <?php if(!empty($ppvod["vod_title"])): ?><?php echo ($ppvod["vod_title"]); ?>
                    <?php else: ?>
                    <?php if(empty($ppvod["vod_continu"])): ?><?php else: ?>
                      第<?php echo ($ppvod["vod_continu"]); ?>集<?php endif; ?><?php endif; ?>
                  </span> </div>
                <span class="sTit"><?php echo ($ppvod["vod_name"]); ?></span> <span class="sDes"><?php echo ($ppvod["vod_actor"]); ?></span> </a> </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </section>
</div>
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
// 重置图片尺寸
resizeImgCommon('data_list');
$(window).on('resize',function(){resizeImgCommon('data_list');});
</script>
</body>
</html>