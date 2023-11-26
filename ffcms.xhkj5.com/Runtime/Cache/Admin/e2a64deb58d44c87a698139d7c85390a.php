<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>幻灯管理</title>
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
<tr>
<th colspan="4" class="r"><span style="float:left">轮播贴片管理</span><span style="float:right"><a href="?s=Admin-Slide-Add">添加轮播贴片</a></span></th>
</tr>
</thead>
<tbody> 
<?php if(is_array($list_slide)): $i = 0; $__LIST__ = $list_slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tr>
  <td class="l ct" width="280" style="padding:10px 0px">
  	<a href="<?php echo ($feifei["slide_pic"]); ?>" target="_blank"><img src="<?php echo (ff_url_img($feifei["slide_pic"])); ?>" width="250px" height="125px" alt="查看原图" style="border:1px solid #CCCCCC;padding:1px;"></a>
  </td>
  <td class="l pd" style="color:#333">
  <h3><a href="<?php echo ($feifei["slide_url"]); ?>" target="_blank"><?php echo ($feifei["slide_name"]); ?></a></h3>
  <p><?php echo ($feifei["slide_content"]); ?></p>
  </td>
  <td class="l ct" width="120"><h4>分类<?php echo ($feifei["slide_cid"]); ?></h4></td>
  <td class="r ct" width="150"><h3><a href="?s=Admin-Slide-Add-id-<?php echo ($feifei["slide_id"]); ?>">修改</a> <a href="?s=Admin-Slide-Del-id-<?php echo ($feifei["slide_id"]); ?>" onClick="return confirm('确定删除该幻灯片吗?')" title="点击删除幻灯片">删除</a>  <?php if(($feifei["slide_status"])  ==  "1"): ?><a href="?s=Admin-Slide-Status-id-<?php echo ($feifei["slide_id"]); ?>-sid-2" title="点击隐藏幻灯">点击隐藏</a><?php else: ?><a href="?s=Admin-Slide-Status-id-<?php echo ($feifei["slide_id"]); ?>-sid-1" title="点击显示幻灯片"><font color="red">点击显示</font></a><?php endif; ?></h3></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?> 
</tbody>       
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>