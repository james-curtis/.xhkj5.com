<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台用户管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
</head>
<body class="body">
 <script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/jquery/jquery-1.7.2.min.js"></script>
<div class="title">
	<div class="left"><?php echo ($tpltitle); ?>类型</div>
    <div class="right"><a href="?s=Admin-Cat-Show">返回类型管理</a></div>
</div>
<div class="add"><?php if(($m_cid)  >  "0"): ?><form action="?s=Admin-Cat-Update" method="post" name="myform" id="myform">
<input type="hidden" name="m_cid" id="m_cid" value="<?php echo ($m_cid); ?>">
<?php else: ?>
<form action="?s=Admin-Cat-Insert" method="post" name="myform" id="myform"><?php endif; ?> 
<ul><li class="left">所属分类：</li>
    <li class="right"><select name="m_list_id" id="m_list_id" class="w120"><option value="0">现有分类</option><?php if(is_array($list_tree)): $i = 0; $__LIST__ = $list_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>" <?php if(($ppvod["list_id"])  ==  $m_list_id): ?>selected<?php endif; ?>><?php echo ($ppvod["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select> * 不选择将成为一级分类</li>
</ul>
<ul><li class="left">栏目排序：</li>
    <li class="right"><input type="text" name="m_order" id="m_order" value="<?php echo ($m_order); ?>" maxlength="3" class="w120"><label>越小越前面</label></li>
</ul>
<ul><li class="left">栏目中文名称：</li>
    <li class="right"><input type="text" name="m_name" id="m_name" value="<?php echo ($m_name); ?>" maxlength="20" error="* 栏目名称不能为空!" class="w120"><span id="list_name_error">*</span></li>
</ul>
<ul class="footer">
<input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置">
</ul>
</div>
</form>
﻿﻿<br /><center>&#80;&#111;&#119;&#101;&#114;&#101;&#100;&#32;&#98;&#121;&#32;<a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#98;&#98;&#115;&#46;&#53;&#50;&#106;&#115;&#99;&#110;&#46;&#99;&#111;&#109;" target="_blank" ><font color="#FF0000">&#38182;&#23578;&#20013;&#22269;</font></a>,&#30001;&#39134;&#39134;&#31243;&#24207;&#20108;&#27425;&#24320;&#21457;。&#24403;&#21069;&#29256;&#26412;&#21495;&#12304;&#38182;&#23578;&#20013;&#22269;&#20250;&#21592;&#19987;&#20139;&#29256;&#12305;</center>
</body>
</html>