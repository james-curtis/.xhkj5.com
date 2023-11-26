<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>伪静态配置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
</head>
<body class="body">
<div class="title">
	<div class="left">URL优化、伪静态配置</div>
</div>
<div class="add">
	<form action="?s=Admin-Config-Update-type-rewrite" method="post" name="myform" id="myform">
	<ul><li class="left">网站路径后缀：</li>
    <li class="right"><select name="config[url_html_suffix]" class="w128"><option value=".html">.html</option><?php if(($url_html_suffix)  ==  ".htm"): ?><option value=".htm" selected>.htm</option><?php else: ?><option value=".htm">.htm</option><?php endif; ?><?php if(($url_html_suffix)  ==  ".shtml"): ?><option value=".shtml" selected>.shtml</option><?php else: ?><option value=".shtml">.shtml</option><?php endif; ?><?php if(($url_html_suffix)  ==  ".shtm"): ?><option value=".shtm" selected>.shtm</option><?php else: ?><option value=".shtm">.shtm</option><?php endif; ?><?php if(empty($url_html_suffix)): ?><option value="" selected>不需要后缀</option><?php else: ?><option value="">不需要后缀</option><?php endif; ?></select></li> 
  </ul>
	<ul><li class="left">开启伪静态重写：</li>
    <li class="right"><select name="config[url_rewrite]" class="w128"><option value="0" >关闭</option><option value="1" <?php if(($url_rewrite)  ==  "1"): ?>selected<?php endif; ?>>开启</option></select></li> 
  </ul>
  <ul><li class="left">URL自定义开关：</li>
    <li class="right"><select name="config[url_router_on]" class="w128"><option value="0" >关闭</option><option value="1" <?php if(($url_router_on)  ==  "1"): ?>selected<?php endif; ?>>开启</option></select></li> 
  </ul>
	<ul><li class="left">URL自定义规则：</li>
    <li class="right" style="height:450px; text-align:left">
    <textarea name="config[rewrite_route]" id="rewrite_route" style="height:280px; width:700px; font-size:14px"><?php echo ($rewrite_route); ?></textarea>
    <p>请填写简略正则表达式, 每行一条规则, 中间使用 === 隔开, 左边为站点默认 URL 模式, 右边为替换后的 URL 模式</p>
    <p>(:num)代表数字，(:letter)代表字母，(:letternum)代表字母加数字，(:any)代表任意字符 如替换视频详情页规则：</p>
    <p>vod-read-id-(:num)===video/detail/(:num)</p>
    <p>(!) 警告: 使用此功能之前请确定你对替换有所把握, 错误的规则将导致站点不能运行</p>
    <p>模板里面生成对应的URL链接请使用ff_url函数 <a href="http://cdn.feifeicms.co/server/v3/jump.php?id=2&version=<?php echo L("feifeicms_version");?>" target="_blank" style="color:red">获取更多帮助</a></p>
    </li>
  </ul>
  <ul class="footer">
    <input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置">
  </ul>
  </form>
</div>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>