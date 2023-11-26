<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?>-最新最全影视免费观看</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<meta name="application-name" content="九头蛇影院" />

<base target="_blank" />
<meta name="application-name" content="九头蛇影院 - 最新最全影视免费观看" />
<script language="javascript">
<!-- 
 window.onerror=function(){return true;} 
// -->
</script>
<script type="text/javascript">var Root='/';var Sid='';var Cid='';var Id='';</script>
<link rel="shortcut icon" href="/favicon.ico" charset="utf-8" />
<script language="javascript">
<!-- 
 window.onerror=function(){return true;} 
// -->
</script>
<script type="text/javascript">var Root='<?php echo ($root); ?>';var Sid='<?php echo ($sid); ?>';var Cid='<?php echo ($list_id); ?>';<?php if($sid == 1): ?>var Id='<?php echo ($vod_id); ?>';<?php else: ?>var Id='<?php echo ($news_id); ?>';<?php endif; ?></script>
<link type="text/css" rel="stylesheet" href="<?php echo ($root); ?>style/css/index.css" />
<link rel="shortcut icon" href="<?php echo ($root); ?>favicon.ico" charset="utf-8" />


<script type="text/javascript">
	// Skin
	$(function () {
		var $li = $("#skin li"); 
		$li.click(function (){ 
			switchSkin(this.id);
		});
		// Save Cookie
		var cookie_skin = $.cookie("MyCssSkin");
		if (cookie_skin) {                       
			switchSkin(cookie_skin); 
		}
	});
	function switchSkin(skinName) {   
		$("#" + skinName).addClass("selected") 
			.siblings().removeClass("selected"); 
		$("#cssfile").attr("href", "/style/css/" + skinName + ".css");
		$.cookie("MyCssSkin", skinName, { path: '/', expires: 10 }); 
	}
</script>
<?php
$s_area=explode(',',C('play_area'));
$s_language=explode(',',C('play_language'));
$s_year=explode(',',C('play_year'));
$s_picm=array('1','2');
$s_letter=(range(A,Z));
$s_order=array('addtime','hits','gold');
$mov_id = 1;
$tv_id = 2;
$dm_id = 3;
$zy_id = 4;
$wei_id = 35;
$path=C('site_path');
if(C('url_rewrite')){
$useurl= C('site_path');
$vodlist="vod-show-id";
}
else{
$useurl="?s=";
$vodlist="?s=vod-show-id";
}
?>
<link href="<?php echo ($tpl); ?>css/user.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ($tpl); ?>css/header.css" rel="stylesheet" type="text/css" />
<script src="<?php echo ($tpl); ?>js/top_js.js" type="text/javascript"></script>
<script src="<?php echo ($tpl); ?>js/zhnew.js" type="text/javascript"></script>
<script type="text/javascript">uaredirect("");</script>
<link href="<?php echo ($tpl); ?>css/index.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ($tpl); ?>css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var ie6Load=false;</script>



<link rel="stylesheet" href="style/zhibo/css/aspku.css">

<link rel="stylesheet" type="text/css" href="style/zhibo/js/lightbox/themes/default/jquery.lightbox.css" />
<!--[if IE 6]>
  <link rel="stylesheet" type="text/css" href="style/zhibo/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
  <![endif]-->
<script type="text/javascript" src="style/zhibo/js/lightbox/jquery.lightbox.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($){
      $('.lightbox').lightbox();
    });
  </script>




</head>



<body>

<!-- header -->
<div class="eb-headnav eb-headnav-xklong">
	<b class="eb-headnav-bg"></b>
	 <div class="eb-headnav-top g-clear"> 
	<a href="<?php echo ($root); ?>" class="eb-headnav-logo" target="_self"></a>
	<form class='js-eb-search eb-search eb-search-xklong' id="search" name="search"  method="POST" action="" onSubmit="return qrsearch();">
     <div class='js-eb-suggest eb-suggest  eb-suggest-xklong g-clear' id='js-eb-suggest'>
    <input class='eb-suggest-query js-query' type="text" id="wd" name="wd" value="请在此处输入影片片名或演员名称。" onfocus="if(this.value=='请在此处输入影片片名或演员名称。'){this.value='';}" onblur="if(this.value==''){this.value='请在此处输入影片片名或演员名称。';};" />
    <div class='eb-suggest-wrap js-wrap' style='display:none'>
        <div class='eb-suggest-bg'></div>
        <ul class='js-list'></ul>
    </div>
</div><input type="submit" id="searchbutton"  class="eb-search-btn" value="">
</form>

<ul class="eb-headnav-ucenter" id="sign" >
<li  id="loginbarx" class="ucenter-wrap ucenter-my drop-down"><a class="nav-link" id="innermsg" href="/?s=user-center-login.html"><span class="ucenter-item js-my">会员中心</span></a>
<div class="drop-box" id="nav-signin" style="display:none;">
   <p class="drop-box-arrow"></p>
    <form id="loginform" action="/?s=user-center-login.html" method="post" onsubmit="return false;">
    <div class="ui-form ui-signin">
      <div class="ui-form-item ui-form-placeholder">
        <label class="ui-label" for="username">帐号或邮箱</label>
        <input type="text" id="username" name="username" class="ui-input" value="">
      </div>
      <div class="ui-form-item ui-form-placeholder">
        <label class="ui-label" for="password">密码：</label>
        <input type="password" id="password" name="password" maxlength="20" class="ui-input" value="" />
        <a class="ui-icon forgot-psw" title="忘记密码" href="/?s=user-center-forgetpwd.html">忘记密码</a></div>
        <div class="ui-form-item fn-clear">
              <label class="ui-label">&nbsp;</label>
              <label for="agreement" class="ui-label-checkbox">
                <input type="checkbox" value="" name="cookietime" id="cookietime" checked="checked" value="2592000">
                <input type="hidden" name="notforward" id="notforward" value="1">
                <input type="hidden" name="dosubmit" id="dosubmit" value="1">记住我的登录 </label>
              <input type="submit" id="loginbt" class="ui-button" value="登 录">
    </div>
  </div>
  <!-- // ui-signin end -->
  <div class="signin-assist fn-clear"><a class="ui-icon qq-login" href="/?s=user-center-qqlogin.html" >用QQ帐号登录</a>
    <p><a href="/?s=user-center-reg.html" target="_blank" class="reg-btn">还没有账号?</a></p>
  </div>
  <!-- // signin-assist end -->
</form>
</div>
		</li>
	
             <li id="nav-looked" class="ucenter-wrap ucenter-record drop-down">
				<a href="javascript:" class="ucenter-item">观看记录</a>
				<div class="drop-box">
            <p class="drop-box-arrow"></p>
            <div class="looked-list">
              <p><a rel="nofollow" class="close-his" target="_self" href="javascript:;">关闭</a><a class="close-hiss" rel="nofollow" href="javascript:;" id="emptybt" data="1" target="_self">清空播放记录</a></p>
              <ul class="highlight" id="playhistory"></ul>
			<div class="his-todo" id="morelog" style="display:none;"></div>
            
           
            
           <script type="text/javascript">PlayHistoryObj.viewPlayHistory('playhistory');</script>
            <!-- // looked-list end -->
          </div>
        </li>
			<li class="ucenter-wrap ucenter-app">
				<a href="https://item.taobao.com/item.htm?id=526520981822"  target="_blank" class="ucenter-item">本站源码</a>
			</li>
		</ul>
	</div>
	<p class="eb-headnav-line"></p>
	<div class="eb-headnav-bottom g-clear js-nav">
	<div class="eb-headnav-nav js-data">
      <a href="<?php echo ($root); ?>" target="_self" class="nav-item current">首页</a>    
       <a class="nav-item " target="_self" href="<?php echo getlistname(2,'list_url');?>"><i class="navv dianshiju"></i>电视剧</a>
	   <a class="nav-item " target="_self" href="<?php echo getlistname(1,'list_url');?>"><i class="navv dianying"></i>电影</a>
	   <a class="nav-item " target="_self" href="<?php echo getlistname(3,'list_url');?>"><i class="navv dongman"></i>动漫</a>
	   <a class="nav-item " target="_self" href="<?php echo getlistname(4,'list_url');?>"><i class="navv zongyi"></i>综艺</a>
	   <a class="nav-item " target="_self" href="<?php echo getlistname(35,'list_url');?>"><i class="navv weidianying"></i>微电影</a>
           <a class="nav-item " target="_self" href="<?php echo getlistname(51,'list_url');?>"><i class="navv gaoxiaoshipin"></i>搞笑视频</a>
           <a class="nav-item " target="_self" href="<?php echo getlistname(52,'list_url');?>"><i class="navv gaoxiaoshipin"></i>高清MV</a>
	   <a class="nav-item " target="_self" href="<?php echo getlistname(53,'list_url');?>"><i class="navv live"></i>电视直播</a>

            		</div>
		<div class="eb-headnav-subnav">  
                <a href="<?php echo ff_mytpl_url('my_top.html');?>" target="_self" class=" nav-item ">热播榜</a>    
                <a href="<?php echo ff_mytpl_url('my_new.html');?>" target="_self" class=" nav-item ">最近更新</a>    
                 <a href="/style/banzhu/" target="_self" class=" nav-item ">帮助</a> 
                <a href="<?php echo ($url_gbshow); ?>" target="_self" class=" nav-item ">留言</a>    
            	</div>
	</div>
</div>
<script>
function fav(){
		var url = window.location.href;					 
		try{
			window.external.addFavorite(url,document.title);
		}catch(err){
			try{
				window.sidebar.addPanel(document.title, url,"");
			}catch(err){
				alert("请使用Ctrl+D为您的浏览器添加书签！");
			}
		}
}
	$(document).ready(function(){
		$("#loginbarx").load("<?php echo ($root); ?>index.php?s=User-Center-usernav&forward="+encodeURIComponent(location.href)+"&random"+ new Date().getTime());
	});
 </script>
<div class="eb-headbg"></div>
<!-- //header -->



     <!-- // 加的 -->
<div id="content"><div id="aspku_box">
  <dl>
    <dd>

      <ul>
        <li class="one" id="logo_001"><a href="style/zhibo/html/fengyunzhibo.html?lightbox[iframe]=true&lightbox[width]=990&lightbox[height]=570" class="lightbox"><img src="style/zhibo/img/fengyunzhibo.jpg" width="240" height="120" alt="风云直播"></a><span><a href="#">风云直播</a></span></li>
        <li id="logo_002"><a href="style/zhibo/html/64ma.html?lightbox[iframe]=true&lightbox[width]=980&lightbox[height]=550" class="lightbox"><img src="style/zhibo/img/64ma.jpg" width="240" height="120" alt="64码直播"></a><span><a href="#">64码直播</a></span></li>
        <li id="logo_003"><a href="style/zhibo/html/uusee.html?lightbox[iframe]=true&lightbox[width]=820&lightbox[height]=495" class="lightbox"><img src="style/zhibo/img/uusee.jpg" width="240" height="120" alt="UUSee网络电视"></a><span><a href="#">UUSee网络电视</a></span></li>
        <li class="four" id="logo_004"><a href="style/zhibo/html/imgo.html?lightbox[iframe]=true&lightbox[width]=818&lightbox[height]=490" class="lightbox"><img src="style/zhibo/img/imgo.jpg" width="240" height="120" alt="芒果TV"></a><span><a href="#">芒果TV</a></span></li>
        <li class="one" id="logo_005"><a href="style/zhibo/html/pptv.html?lightbox[iframe]=true&lightbox[width]=820&lightbox[height]=555" class="lightbox"><img src="style/zhibo/img/pptv.jpg" width="240" height="120" alt="pptv直播"></a><span><a href="#">pptv直播</a></span></li>
        <li id="logo_006"><a href="style/zhibo/html/letvlive.html?lightbox[iframe]=true&lightbox[width]=980&lightbox[height]=550" class="lightbox"><img src="style/zhibo/img/letvlive.jpg" width="240" height="120" alt="乐视直播"></a><span><a href="#">乐视直播</a></span></li>
        <li id="logo_007"><a href="style/zhibo/html/ifeng.html?lightbox[iframe]=true&lightbox[width]=820&lightbox[height]=670" class="lightbox"><img src="style/zhibo/img/ifeng.jpg" width="240" height="120" alt="凤凰视频"></a><span><a href="#">凤凰视频</a></span></li>
        <li class="four" id="logo_008"><a href="style/zhibo/html/iqiyi.html?lightbox[iframe]=true&lightbox[width]=820&lightbox[height]=670" class="lightbox"><img src="style/zhibo/img/iqiyi.jpg" width="240" height="120" alt="爱奇艺"></a><span><a href="#">爱奇艺</a></span></li>
        <li class="one" id="logo_009"><a href="style/zhibo/html/sohu.html?lightbox[iframe]=true&lightbox[width]=820&lightbox[height]=620" class="lightbox"><img src="style/zhibo/img/sohu.jpg" width="240" height="120" alt="搜狐"></a><span><a href="#">搜狐</a></span></li>
        <li id="logo_010"><a href="style/zhibo/html/xiami.html?lightbox[iframe]=true&lightbox[width]=760&lightbox[height]=540" class="lightbox"><img src="style/zhibo/img/xiami.jpg" width="240" height="120" alt="虾米音乐"></a><span><a href="#">虾米音乐</a></span></li>
        <li id="logo_011"><a href="style/zhibo/html/duomi.html?lightbox[iframe]=true&lightbox[width]=760&lightbox[height]=540" class="lightbox"><img src="style/zhibo/img/duomi.jpg" width="240" height="120" alt="多米音乐"></a><span><a href="#">多米音乐</a></span></li>
        <li class="four" id="logo_012"><a href="style/zhibo/html/kuwo.html?lightbox[iframe]=true&lightbox[width]=760&lightbox[height]=540" class="lightbox"><img src="style/zhibo/img/kuwo.jpg" width="240" height="120" alt="酷我音乐"></a><span><a href="#">酷我音乐</a></span></li>
        <li class="one" id="logo_013"><a href="style/zhibo/html/kugou.html?lightbox[iframe]=true&lightbox[width]=760&lightbox[height]=540" class="lightbox"><img src="style/zhibo/img/kugou.jpg" width="240" height="120" alt="酷狗音乐"></a><span><a href="#">酷狗音乐</a></span></li>
        <li id="logo_014"><a href="style/zhibo/html/yinyuetai.html?lightbox[iframe]=true&lightbox[width]=760&lightbox[height]=540" class="lightbox"><img src="style/zhibo/img/yinyuetai.jpg" width="240" height="120" alt="音悦TV"></a><span><a href="#">音悦TV</a></span></li>
        <li id="logo_015"><a href="style/zhibo/html/qq.html?lightbox[iframe]=true&lightbox[width]=760&lightbox[height]=540" class="lightbox"><img src="style/zhibo/img/qq.jpg" width="240" height="120" alt="QQ音乐"></a><span><a href="#">QQ音乐</a></span></li>
        <li class="four" id="logo_016"><a href="style/zhibo/html/jiuku.html?lightbox[iframe]=true&lightbox[width]=760&lightbox[height]=540" class="lightbox"><img src="style/zhibo/img/jiuku.jpg" width="240" height="120" alt="九酷听听"></a><span><a href="#">九酷听听</a></span></li>
      </ul>
    </dd>
  </dl>
</div></div>
     <!-- // 加的 -->


﻿<div class="footer_nav">
<p class="w1000">
<a href="<?php echo ff_mytpl_url('my_new.html');?>">最近更新</a> - <a href="<?php echo ($url_gbshow); ?>">网站留言</a> - <a href="/style/banzhu/">常见问题</a> - <a href="/">广告投放</a> - <a href="/">免责声明</a> - <a href="/">官方微博</a>-<?php echo ($tongji); ?></a>
</p>
</div>


<div class="footer">
<p class="w1000">
<br>
<a>本网站提供新电视剧和电影资源均系收集于各大视频网站，本网站只提供web页面服务，并不提供影片资源存储，也不参与录制、上传</br>
若本站收录的节目无意侵犯了贵司版权，请给<a href="mailto:<?php echo ($email); ?>"><?php echo ($email); ?></a>邮箱来信，我们将在第一时间处理与回复,谢谢
</br>Copyright &#169; 2006-2016 <a href="<?php echo ($siteurl); ?>"><?php echo ($sitename); ?></a><a href="<?php echo ($siteurl); ?>"><font face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#CC0000">Www.JiuTouShe.Cn</font></font></b></a>.All Rights Reserved .


<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257007139'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1257007139%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>



</p>

<script>

(function(){

    var bp = document.createElement('script');

    bp.src = '//push.zhanzhang.baidu.com/push.js';

    var s = document.getElementsByTagName("script")[0];

    s.parentNode.insertBefore(bp, s);

})();

</script>

</div>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/IE6Top.js"></script>
<div class="back-to-top" id="back-to-top"><a href="javascript:window.scrollTo(0, 0);" target="_self">Back to Top</a></div>
<script language='JavaScript'>
var uigs_para={"uigs_productid":"video","pagetype":"dongmanhome"};
var changeWidth = 1251;
var change980Width = 1024;
</script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/s102466.js"></script>
<script src="<?php echo ($tpl); ?>js/foot_js.js" type="text/javascript"></script>
</body>
</html>