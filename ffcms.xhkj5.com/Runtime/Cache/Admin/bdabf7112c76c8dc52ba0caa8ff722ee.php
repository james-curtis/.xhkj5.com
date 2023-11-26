<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>播放来源管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<style>
textarea{
	color: #666;width:90%;height:40px;margin:5px 0px;
}
</style>
<script>
$(document).ready(function(){
	$feifeicms.show.table();
});
</script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<form action="?s=Admin-Player-Updateall" method="post" name="myform" id="myform">
<thead>
<tr class="ct">
  <th class="l" width="100">播放器排序</th>
  <th class="l" width="100">版权跳转时间</th>
  <th class="l" width="120">播放器名称</th>
  <th class="l" width="120">播放器标识</th>
  <th class="l" width="250">独立解析地址</th>
  <th class="l" >播放器简介</th>
  <th class="r" width="100">相关操作</th>
</tr>
</thead>
<tbody>
<?php if(is_array($list_player)): $i = 0; $__LIST__ = $list_player;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><input name="ids[<?php echo ($feifei["player_id"]); ?>]" type="hidden" value="<?php echo ($feifei["player_id"]); ?>">
<tr>
<td class="l ct"><input name="player_order[<?php echo ($feifei["player_id"]); ?>]" type="text" value="<?php echo ($feifei["player_order"]); ?>" size="5" class="w50"></td>
<td class="l ct"><input name="player_copyright[<?php echo ($feifei["player_id"]); ?>]" type="text" value="<?php echo ($feifei["player_copyright"]); ?>" size="5" class="w50"></td>
<td class="l ct"><input name="player_name_zh[<?php echo ($feifei["player_id"]); ?>]" type="text" value="<?php echo ($feifei["player_name_zh"]); ?>" maxlength="80" class="w100 text-center"></td>
<td class="l ct"><input name="player_name_en[<?php echo ($feifei["player_id"]); ?>]" type="text" value="<?php echo ($feifei["player_name_en"]); ?>" maxlength="50" class="w100 text-center"></td>
<td class="l ct"><input name="player_jiexi[<?php echo ($feifei["player_id"]); ?>]" type="text" value="<?php echo ($feifei["player_jiexi"]); ?>" maxlength="120" class="w250 text-center"></td>
<td class="l ct"><textarea name="player_info[<?php echo ($feifei["player_id"]); ?>]"><?php echo ($feifei["player_info"]); ?></textarea></td>
<td class="r ct"><a href="?s=Admin-Player-Hide-id-<?php echo ($feifei["player_id"]); ?>-status-<?php echo ($feifei['player_status']+1); ?>" title="隐藏后前台将不会显示"><?php if(($feifei["player_status"])  ==  "1"): ?>隐藏<?php else: ?><font color="red">显示</font><?php endif; ?></a> <a href="?s=Admin-Player-Del-id-<?php echo ($feifei["player_id"]); ?>" onClick="return confirm('确定删除该播放来源吗?')" title="点击删除播放器吗？">删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?> 
</tbody>
<tfoot>
<tr>
  <td colspan="7" class="r"><input type="button" class="submit" value="批量修改" onClick="post('?s=Admin-Player-Updateall');"></td>
</tr>  
</tfoot>
</form>       
</table>
<h3 style="text-align:left">添加播放器来源</h3>
<table border="0" cellpadding="0" cellspacing="0" class="table">
<form action="?s=Admin-Player-Insert" method="post" name="playerform" id="playerform">
<thead>
<tr class="ct">
  <th class="l" width="100">播放器排序</th>
  <th class="l" width="100">版权跳转时间</th>
  <th class="l" width="200">播放器名称</th>
  <th class="l" width="200">播放器标识</th>
  <th class="l">播放器简介</th>
  <th class="r" width="100">相关操作</th>
</tr>
</thead>
<tbody>
<tr>
<td class="l ct"><input name="player_order" type="text" value="" size="3" maxlength="5" class="w50"></td>
<td class="l ct"><input name="player_copyright" type="text" value="0" size="3" class="w50"></td>
<td class="l ct"><input name="player_name_zh" type="text" value="" maxlength="128" class="w150"></td>
<td class="l ct"><input name="player_name_en" type="text" value="" maxlength="250" class="w150"></td>
<td class="l ct"><textarea name="player_info"></textarea></td>
<td class="r ct"><input type="submit" class="submit" value="保存"></td>
</tr>
</tbody>
</form>       
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>