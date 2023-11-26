<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>批量替换</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script type="text/javascript">
function showfields(){
	var exptable = $('#exptable').val();
	$.ajax({
		url: '?s=Admin-Data-Ajaxfields-id-'+exptable+'',
		success: function(res){
			$('#fields').html(res);
		}
	});
} 
function rpfield(v){
	$('#rpfield').val(v); 
}
</script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead><tr><th colspan="2" class="r"><span style="float:left">数据批量替换</span><span style="float:right">程序用于批量替换数据库中某字段的内容，此操作极为危险，请小心使用。</span></th></tr></thead>
<form action="?s=Admin-Data-Upreplace" method="post" id="myform" name="myform">
  <tbody> 
  <tr>
  	<td class="l pd" width="200">选择数据表与字段：</td>
    <td class="r pd" style="padding:5px;">
    <div style="float:left;width:80%">
    <select name="exptable" id="exptable" size="12" style="height:150px;width:100%; font-size:13px;" onChange="showfields()">
    <?php if(is_array($list_table)): $i = 0; $__LIST__ = $list_table;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei); ?>"><?php echo ($feifei); ?> (<?php echo (ff_table_name($feifei)); ?>)</option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    </div>
  	<div id="fields" style="float:left; clear:both; width:80%; padding:10px 0;"></div>
  	</td>
  </tr> 
  <tr>
  	<td class="l pd">要替换的字段：</td>
    <td class="r pd"><input name="rpfield" type="text" id="rpfield" style="width:80%;"/> *</td>
  </tr>
  <tr>
  	<td class="l pd">被替换的内容：</td>
    <td class="r pd" style="padding:5px"><textarea name="rpstring" id="rpstring" style="width:80%;height:80px"></textarea> *</td>
  </tr>
  <tr>
  	<td class="l pd">替换为的内容：</td>
    <td class="r pd" style="padding:5px"><textarea name="tostring" id="tostring" class="alltxt" style="width:80%;height:80px"></textarea> *</td>
  </tr>
  <tr>
  	<td class="l pd">选择替换条件：</td>
    <td class="r pd"><input name="condition" type="text" id="condition" style="width:80%; color:#696969;" title="留空则全部替换,请遵循SQL的条件语句规则 如vod_id=888 vod_id&gt;888"/></td>
  </tr>   
  </tbody>
  </volist>
  <tfoot>
    <tr>
      <td colspan="6" class="r"><input class="submit" type="submit" name="submit" value="提交" onClick="return confirm('一旦执行后将无法恢复，请确定条件语句正确无误，或者备份好数据库以防万一!')"> <input class="submit" type="reset" name="Input" value="重置" ></td>
    </tr>  
  </tfoot> 
</form>            
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>