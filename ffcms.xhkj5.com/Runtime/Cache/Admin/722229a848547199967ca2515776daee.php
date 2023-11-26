<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台用户管理</title>
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
    <tr class="ct">
      <th class="l">标签名称</th>
      <th class="l" width="80">收录数量</th>
      <th class="l" width="80">所属类型</th>
      <th class="r" width="60">相关操作</th>
    </tr>
  </thead>
  <?php if(is_array($list_tag)): $i = 0; $__LIST__ = $list_tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tbody>
  <tr>
    <td class="l pd"><?php echo ($feifei["tag_name"]); ?></td>
    <td class="l ct"><?php echo ($feifei["tag_count"]); ?>条</td>
    <td class="l ct"><?php echo ($feifei["tag_list"]); ?></td>
    <td class="r ct"><a href="<?php echo ($feifei["tag_url"]); ?>" title="查看所标识的具体数据">查看</a> <a href="?s=Admin-Tag-Del-id-<?php echo urlencode($feifei['tag_name']);?>" onClick="return confirm('确定删除?')"  title="删除用户资料">删除</a></td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>   
  <tfoot>
   <tr><td colspan="4" class="r pages"><?php echo ($pages); ?></td></tr>  
  </tfoot>
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>