<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>图片管理管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$feifeicms.show.table();
});
</script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead>
<tr><th style="text-align:left">附件管理选项</th>
</thead>
<tr>
  <td class="tr">无效图片清理：
  <input type="button" value="清理" class="submit" onclick="ff_dialog('?s=Admin-Pic-Show','无效图片清理','100%','300');"/> 
  </td>
</tr>
<tr>
  <td class="tr">下载封面（视频）：
  <select id="cid-vod-down" name="cid-vod-down" class="w100"><option value="">全部分类</option><?php $_result=ff_mysql_list('sid:1;limit:0;order:list_pid asc,list_oid;sort:asc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei["list_id"]); ?>"><?php echo ($feifei["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>
  <input type="button" value="确定" class="submit" onclick="ff_dialog('?s=Admin-Pic-Down-first-1-sid-vod-cid-'+$('#cid-vod-down').val(),'下载视频封面','100%','300');"/>
  </td>
</tr>
<tr>
  <td class="tr">裁剪封面（视频）：
  <select id="cid-vod-crop" name="cid-vod-crop" class="w100"><option value="">全部分类</option><?php $_result=ff_mysql_list('sid:1;limit:0;order:list_pid asc,list_oid;sort:asc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei["list_id"]); ?>"><?php echo ($feifei["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>
  <input type="button" value="确定" class="submit" onclick="ff_dialog('?s=Admin-Pic-Crop-first-1-sid-vod-cid-'+$('#cid-vod-crop').val(),'生成视频封面缩略图','100%','300');"/> 
  </td>
</tr>
<tr>
  <td class="tr">下载封面（文章）：
  <select id="cid-news-down" name="cid-news-down" class="w100"><option value="">全部分类</option><?php $_result=ff_mysql_list('sid:2;limit:0;order:list_pid asc,list_oid;sort:asc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei["list_id"]); ?>"><?php echo ($feifei["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>
  <input type="button" value="确定" class="submit" onclick="ff_dialog('?s=Admin-Pic-Down-first-1-sid-news-cid-'+$('#cid-news-down').val(),'下载文章封面','100%','300');"/>
  </td>
</tr>
<tr>
  <td class="tr">裁剪封面（文章）：
  <select id="cid-crop" name="cid-crop" class="w100"><option value="">全部分类</option><?php $_result=ff_mysql_list('sid:2;limit:0;order:list_pid asc,list_oid;sort:asc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei["list_id"]); ?>"><?php echo ($feifei["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>
  <input type="button" value="确定" class="submit" onclick="ff_dialog('?s=Admin-Pic-Crop-first-1-sid-news-cid-'+$('#cid-crop').val(),'生成文章封面缩略图','100%','300');"/> 
  </td>
</tr>
</table>
<!-- -->
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead>
<tr><th style="text-align:left">附件管理说明</th>
</thead>
<tr>
  <td class="tr">
  <p>1：裁剪封面功能需要先将远程图片下载到服务器。</p>
  <p>2：第一次采集完需下载的封面很多，此时建议不要选择自动缩略图功能，下载完后再单独生成截图。</p>
  </td>
</tr>
</table>
<!-- -->
<div class="backdrop" id="ff-dialog-back" style="display:none;"></div>
<div class="modal" id="ff-dialog-box" style="display:none;">
  <div class="inner">
    <div class="head">
      <div class="ff_dialog_title" id="ff_dialog_title">...</div>
      <i class="ff_dialog_close" onClick="javascript:ff_dialog_close();location.reload();"></i>
    </div>
    <div class="body" id="ff_dialog_body">
    </div>
  </div>
</div>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>