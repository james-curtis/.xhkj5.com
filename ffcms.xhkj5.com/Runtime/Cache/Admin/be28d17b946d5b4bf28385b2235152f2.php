<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加幻灯广告</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#myform").submit(function(){
		if($feifeicms.form.empty('myform','slide_name') == false){
			return false;
		}
		if($feifeicms.form.empty('myform','slide_url') == false){
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
	<div class="left"><?php echo ($tpltitle); ?>轮播贴片</div>
    <div class="right"><a href="?s=Admin-Slide-Show">返回幻灯管理</a></div>
</div>
<div class="add">
<form action="?s=Admin-Slide-Update" method="post" name="myform" id="myform">
  <?php if(($slide_id)  >  "0"): ?><input type="hidden" name="slide_id" value="<?php echo ($slide_id); ?>"><?php endif; ?> 
  <ul><li class="left">幻灯名称：</li>
    <li class="right"><input type="text" name="slide_name" id="slide_name" value="<?php echo ($slide_name); ?>" class="w300" error="* 请填写幻灯片名称!"><span id="slide_name_error">*</span></li>
  </ul>
  <ul><li class="left">链接地址：</li>
    <li class="right"><input type="text" name="slide_url" id="slide_url" value="<?php echo ($slide_url); ?>" class="w300" error="* 请填写幻灯片链接地址!"><span id="slide_url_error">*</span></li>
  </ul>
   <ul><li class="left">小图：</li>
    <li class="right"><input type="text" name="slide_logo" id="slide_logo" maxlength="255" value="<?php echo ($slide_logo); ?>" class="w300" onMouseOver="if(this.value)showpic(event, this.value,'<?php echo C("upload_path");?>/');" onMouseOut="hiddenpic();">&nbsp;</li>
      <li class="left" style="width:94px">上传图片：</li>
      <li class="right"><iframe src="?s=Admin-Upload-Show-sid-slide-fileback-slide_logo" scrolling="no" topmargin="0" width="270" height="26" marginwidth="0" marginheight="0" frameborder="0" align="left" style="margin-top:4px"></iframe></li>
  </ul>   
  <ul><li class="left">大图：</li>
    <li class="right"><input type="text" name="slide_pic" id="slide_pic" maxlength="255" value="<?php echo ($slide_pic); ?>" class="w300" onMouseOver="if(this.value)showpic(event, this.value,'<?php echo C("upload_path");?>/');" onMouseOut="hiddenpic();">&nbsp;</li>
      <li class="left" style="width:94px">上传图片：</li>
      <li class="right"><iframe src="?s=Admin-Upload-Show-sid-slide-fileback-slide_pic" scrolling="no" topmargin="0" width="270" height="26" marginwidth="0" marginheight="0" frameborder="0" align="left" style="margin-top:4px"></iframe></li>
  </ul>
  <ul><li class="left">排序：</li>
    <li class="right"><input name="slide_oid" type="text" value="<?php echo ($slide_oid); ?>" maxlength="3" title="越小越前面" class="w50"> <span id="slide_oid">*</span></li>
  </ul>
  <ul><li class="left">分类：</li>
    <li class="right"><input name="slide_cid" type="text" value="<?php echo (($slide_cid)?($slide_cid):'1'); ?>" maxlength="3" class="w50"> 自定义幻灯分类ID，便于前台分类判断指定的幻灯</li>
  </ul>       
  <ul><li class="left">状态：</li>
    <li><select name="slide_status"><option value="1">显示</option><option value="0" <?php if(($slide_status)  ==  "0"): ?>selected<?php endif; ?>>隐藏</option></select>&nbsp;</li>
  </ul>   
  <ul><li class="left">简介：</li>
    <li class="right" style="height:140px;"><textarea name="slide_content" style="width:650px;height:120px" title="支持html语法"><?php echo ($slide_content); ?></textarea></li>  
  </ul>     
  <ul class="footer"><input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置"> <?php if(($admin_id)  >  "0"): ?>注：不修改密码请留空<?php endif; ?></ul>
</form>
</div>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>