<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>数据库备份</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script>
$(document).ready(function(){
	$feifeicms.show.table();
});
</script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table" style="width:80%;">
<form action="?s=Admin-Data-Insert" method="post" id="myform" name="myform">
  <thead>
    <tr>
      <th colspan="3" class="l">数据库分卷备份</th>
      </tr>
  </thead>
  <tbody> 
  <?php if(is_array($list_table)): $i = 0; $__LIST__ = $list_table;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tr>
  	<td width="10%" class="l pd"><input type="checkbox" name="ids[]" value="<?php echo ($feifei); ?>" style='border:none' checked><?php echo ($i); ?>、</td>
    <td width="20%" class="l pd">表名：<?php echo ($feifei); ?></td>
    <td class="r pd">描述：<?php echo (ff_table_name($feifei)); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
   </tbody>
  <tfoot>
    <tr>
      <td colspan="3" class="r"><input type="button" value="全选" class="submit" onClick="checkall('all');"> <input name="" type="button" value="反选" class="submit" onClick="checkall();"> <label>每个分卷文件大小：</label><input type="text" name="filesize" value="2048" size="5" class="ct"> K <input type="submit" name="submit" value="开始备份" class="submit"> </td>
    </tr>  
  </tfoot> 
</form>            
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>