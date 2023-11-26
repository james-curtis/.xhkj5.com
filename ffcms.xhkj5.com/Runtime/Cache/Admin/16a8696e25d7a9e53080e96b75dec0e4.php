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
      <th class="l" width="40">删除</th>
      <th class="l" width="40">ID</th>
      <th class="l" width="50">排序</th>
      <th class="l" width="60">子导航</th>
      <th class="l" width="60">编辑</th> 
      <th class="l" width="50">可用</th>     
      <th class="l" width="340">导航名称</th>
      <th class="r">链接地址</th>
    </tr>
  </thead>
  <form action="?s=Admin-Nav-All" method="post" name="myform" id="myform"> 
  <tbody>
  <?php if(is_array($nav_tree)): $i = 0; $__LIST__ = $nav_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tr>
    <td class="l ct"><input name='nav_delid[<?php echo ($feifei["nav_id"]); ?>]' type='checkbox' value='<?php echo ($feifei["nav_id"]); ?>' class="noborder"></td>
    <td class="l ct"><?php echo ($feifei["nav_id"]); ?></td>
    <td class="l ct"><input name="nav_oid[<?php echo ($feifei["nav_id"]); ?>]" type="text" value="<?php echo ($feifei["nav_oid"]); ?>" class="w30"></td>
    <td class="l ct"><a href="?s=Admin-Nav-Add-pid-<?php echo ($feifei["nav_id"]); ?>" title="添加子导航"><img src="__PUBLIC__/images/admin/add.gif" border="0"></a></td>
    <td class="l ct"><a href="?s=Admin-Nav-Add-id-<?php echo ($feifei["nav_id"]); ?>" title="编辑导航"><img src="__PUBLIC__/images/admin/edit.gif" border="0"></a></td>
    <td class="l ct"><input name="nav_status[<?php echo ($feifei["nav_id"]); ?>]" type="checkbox" value="1" <?php if(($feifei["nav_status"])  ==  "1"): ?>checked<?php endif; ?>></td> 
    <td class="l pd"><input name="nav_title[<?php echo ($feifei["nav_id"]); ?>]" type="text" value="<?php echo ($feifei["nav_title"]); ?>" class="w300 pd"></td>
    <td class="r ct"><input name="nav_link[<?php echo ($feifei["nav_id"]); ?>]" type="text" value="<?php echo ($feifei["nav_link"]); ?>" class="pd" style="width:90%"></td>
  </tr>
  <?php if(!empty($feifei["nav_son"])): ?><?php if(is_array($feifei["nav_son"])): $i = 0; $__LIST__ = $feifei["nav_son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeison): ++$i;$mod = ($i % 2 )?><tr>
      <td class="l ct son"><input name='nav_delid[<?php echo ($feifeison["nav_id"]); ?>]' type='checkbox' value='<?php echo ($feifeison["nav_id"]); ?>' class="noborder"></td>
      <td class="l ct son"><?php echo ($feifeison["nav_id"]); ?></td>
      <td class="l ct son"><input name="nav_oid[<?php echo ($feifeison["nav_id"]); ?>]" type="text" value="<?php echo ($feifeison["nav_oid"]); ?>" class="w30"></td>
      <td class="l ct son"><a href="?s=Admin-Nav-Add-pid-<?php echo ($feifeison["nav_id"]); ?>" title="添加子导航"><img src="__PUBLIC__/images/admin/add.gif" border="0"></a></td>
      <td class="l ct son"><a href="?s=Admin-Nav-Add-id-<?php echo ($feifeison["nav_id"]); ?>" title="编辑导航"><img src="__PUBLIC__/images/admin/edit.gif" border="0"></a></td> 
      <td class="l ct"><input name="nav_status[<?php echo ($feifeison["nav_id"]); ?>]" type="checkbox" value="1" <?php if(($feifeison["nav_status"])  ==  "1"): ?>checked<?php endif; ?>></td>
      <td class="l pd son">├─ <input name="nav_title[<?php echo ($feifeison["nav_id"]); ?>]" type="text" value="<?php echo ($feifeison["nav_title"]); ?>" class="w300 pd"></td>
      <td class="r ct son"><input name="nav_link[<?php echo ($feifeison["nav_id"]); ?>]" type="text" value="<?php echo ($feifeison["nav_link"]); ?>" class="pd" style="width:90%"></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="8" class="r"><input type="submit" value="批量操作" class="submit"></td>
    </tr>  
  </tfoot>
  </form>
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>