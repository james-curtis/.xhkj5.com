<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<title>自定义菜单管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
</head>
<body class="body">
 <script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/jquery/jquery-1.7.2.min.js"></script>
<div class="title">
	<div class="left">自定义快捷菜单</div>
</div>
<div class="add">
<form action="?s=Admin-Nav-Update" method="post" name="myform" id="myform"> 
<ul style="padding:10px 0px">
 <textarea name="content" style="width:98%;height:320px"><?php if(is_array($array_nav)): $i = 0; $__LIST__ = $array_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php echo (htmlspecialchars($key)); ?>|<?php echo (htmlspecialchars($ppvod)); ?><?php echo(chr(13)); ?><?php endforeach; endif; else: echo "" ;endif; ?></textarea>
</ul>  
<ul class="footer"><input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置"></ul>
</form>
</div>
<?php if(($_GET['reload'])  ==  "1"): ?><script>window.parent.left.location.reload();</script><?php endif; ?>
﻿﻿<br /><center>&#80;&#111;&#119;&#101;&#114;&#101;&#100;&#32;&#98;&#121;&#32;<a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#98;&#98;&#115;&#46;&#53;&#50;&#106;&#115;&#99;&#110;&#46;&#99;&#111;&#109;" target="_blank" ><font color="#FF0000">&#38182;&#23578;&#20013;&#22269;</font></a>,&#30001;&#39134;&#39134;&#31243;&#24207;&#20108;&#27425;&#24320;&#21457;。&#24403;&#21069;&#29256;&#26412;&#21495;&#12304;&#38182;&#23578;&#20013;&#22269;&#20250;&#21592;&#19987;&#20139;&#29256;&#12305;</center>
</body>
</html>