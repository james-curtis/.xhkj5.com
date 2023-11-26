<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加友情链接</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#myform").submit(function(){
		if($feifeicms.form.empty('myform','link_name') == false){
			return false;
		}
		if($feifeicms.form.empty('myform','link_url') == false){
			return false;
		}		
	});
});
</script>
</head>
<body class="body">
<!--图片预览框-->
<div id="showpic" class="showpic" style="display:none;"><img name="showpic_img" id="showpic_img" width="120" height="160"></div>
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<div class="title">
	<div class="left"><?php echo ($tpltitle); ?>友情链接</div>
    <div class="right"><a href="?s=Admin-Link-Show">友情链接管理</a></div>
</div>
<div class="add">
<form action="?s=Admin-Link-Update" method="post" name="myform" id="myform">
<?php if(($link_id)  >  "0"): ?><input type="hidden" name="link_id" value="<?php echo ($link_id); ?>"><?php endif; ?>
<ul><li class="left">网站名称：</li>
  <li class="right"><input type="text" name="link_name" id="link_name" value="<?php echo ($link_name); ?>" class="w250" error="* 请填写网站名称!"><span id="link_name_error">*</span></li>
</ul>
<ul><li class="left">链接地址：</li>
  <li class="right"><input type="text" name="link_url" id="link_url" value="<?php echo (($link_name)?($link_name):'http://'); ?>" class="w250" error="* 请填写链接地址!"><span id="link_url_error">*</span></li>
</ul>
<ul><li class="left">Logo链接：</li>
  <li class="right"><input type="text" name="link_logo" id="link_logo" value="<?php echo ($link_logo); ?>" class="w250" onMouseOver="if(this.value)showpic(event, this.value, '<?php echo C("upload_path");?>/');" onMouseOut="hiddenpic();">&nbsp;</li>
    <li class="left" style="width:80px;">上传图片：</li>
    <li class="right"><iframe src="?s=Admin-Upload-Show-sid-link-fileback-link_logo" scrolling="no" width="350" height="28" marginwidth="0" marginheight="0" frameborder="0" align="left" style="margin-top:5px"></iframe></li>
</ul> 
<ul><li class="left">连接排序：</li>
  <li class="right"><input type="text" name="link_order" id="link_order" value="<?php echo ($link_order); ?>" class="w70">&nbsp;</li>
</ul>
<ul><li class="left">连接类型：</li>
  <li class="right"><select name="link_type"><option value="1">文字链接</option><option value="2" <?php if(($list_type)  ==  "2"): ?>selected<?php endif; ?>>图片链接</option></select>&nbsp;</li>
</ul>
<ul class="footer"><input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置"></ul>
</form>
</div>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>