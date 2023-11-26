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
      <th class="r" style="text-align:left; padding-left:10px">ID.分类名称</th>
      <th class="r" width="80">创建</th>
      <th class="r" width="40">状态</th>
      <th class="r" width="40">模型</th>
      <th class="r" width="60">排序</th>
      <th class="r" width="90">中文名</th>
      <th class="r" width="130">英文名</th>
      <th class="r" width="130">使用模板</th>
      <th class="r" width="70">管理操作</th>
    </tr>
  </thead>
  <form action="?s=Admin-List-Updateall" method="post" name="myform" id="myform"> 
  <?php if(is_array($listtree)): $i = 0; $__LIST__ = $listtree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tbody><tr>
    <td class="r pd"><input type='checkbox' name='ids[]' value='<?php echo ($feifei["list_id"]); ?>' class="noborder" checked><?php echo ($feifei["list_id"]); ?>、<?php if(($feifei["list_sid"])  ==  "1"): ?><a href="<?php echo ff_url_vod_show($feifei['list_id'],$feifei['list_dir'],1);?>" target="_blank"><?php else: ?><a href="<?php echo ff_url_news_show($feifei['list_id'],$feifei['list_dir'],1);?>" target="_blank"><?php endif; ?><?php echo ($feifei["list_name"]); ?></a>(<font color="red"><?php echo (ff_list_count($feifei["list_id"])); ?></font>)</td>
    <td class="r ct"><a href="?s=Admin-List-Add-pid-<?php echo ($feifei["list_id"]); ?>-sid-<?php echo ($feifei["list_sid"]); ?>">创建子类</a></td>
    <td class="r ct"><?php if(($feifei["list_status"])  ==  "1"): ?><a href="?s=Admin-List-Status-id-<?php echo ($feifei["list_id"]); ?>-sid-2" title="显示状态,点击隐藏该分类">显示</a><?php else: ?><a href="?s=Admin-List-Status-id-<?php echo ($feifei["list_id"]); ?>-sid-1" title="隐藏状态,点击显示该分类"><font color="red">隐藏</font></a><?php endif; ?></td>
    <td class="r ct"><?php echo (ff_sid2module($feifei["list_sid"])); ?></td>
    <td class="r ct"><input type='text' name='list_oid[<?php echo ($feifei["list_id"]); ?>]' value='<?php echo ($feifei["list_oid"]); ?>' class="w50"></td>
    <td class="r ct"><input type='text' name='list_name[<?php echo ($feifei["list_id"]); ?>]' value='<?php echo ($feifei["list_name"]); ?>' class="w70"></td>
    <td class="r ct"><input type='text' name='list_dir[<?php echo ($feifei["list_id"]); ?>]' value='<?php echo ($feifei["list_dir"]); ?>' class="w120"></td>
    <td class="r ct"><input type='text' name='list_skin[<?php echo ($feifei["list_id"]); ?>]' value='<?php echo ($feifei["list_skin"]); ?>' class="w120"></td>
    <td class="r ct"><a href="?s=Admin-List-Add-id-<?php echo ($feifei["list_id"]); ?>" title="修改分类">编辑</a> <a href="?s=Admin-List-Del-id-<?php echo ($feifei["list_id"]); ?>" onClick="return confirm('确定删除?')" title="删除分类">删除</a> <a href="?s=Admin-List-Add-list_pid-<?php echo ($feifei["list_id"]); ?>" ></td>
  </tr></tbody>
  <?php if(is_array($feifei["list_son"])): $i = 0; $__LIST__ = $feifei["list_son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tbody><tr>
    <td class="r pd">&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ids[]' value='<?php echo ($feifei["list_id"]); ?>' class="noborder" checked><?php echo ($feifei["list_id"]); ?>、<?php echo ($feifei["list_name"]); ?>(<font color="red"><?php echo (ff_list_count($feifei["list_id"])); ?></font>)</td>
    <td class="r ct">&nbsp;</td>
    <td class="r ct"><?php if(($feifei["list_status"])  ==  "1"): ?><a href="?s=Admin-List-Status-id-<?php echo ($feifei["list_id"]); ?>-sid-0" title="显示状态,点击隐藏该分类">显示</a><?php else: ?><a href="?s=Admin-List-Status-id-<?php echo ($feifei["list_id"]); ?>-sid-1" title="隐藏状态,点击显示该分类"><font color="red">隐藏</font></a><?php endif; ?></td>
    <td class="r ct"><?php echo (ff_sid2module($feifei["list_sid"])); ?></td>
    <td class="r ct"><input type='text' name='list_oid[<?php echo ($feifei["list_id"]); ?>]' value='<?php echo ($feifei["list_oid"]); ?>' class="w50"></td>
    <td class="r ct"><input type='text' name='list_name[<?php echo ($feifei["list_id"]); ?>]' value='<?php echo ($feifei["list_name"]); ?>' class="w70"></td>
    <td class="r ct"><input type='text' name='list_dir[<?php echo ($feifei["list_id"]); ?>]' value='<?php echo ($feifei["list_dir"]); ?>' class="w120"></td>
    <td class="r ct"><input type='text' name='list_skin[<?php echo ($feifei["list_id"]); ?>]' value='<?php echo ($feifei["list_skin"]); ?>' class="w120"></td>
    <td class="r ct"><a href="?s=Admin-List-Add-id-<?php echo ($feifei["list_id"]); ?>" title="修改分类">编辑</a> <a href="?s=Admin-List-Del-id-<?php echo ($feifei["list_id"]); ?>" onClick="return confirm('确定删除?')" title="删除分类">删除</a> <a href="?s=Admin-List-Add-list_pid-<?php echo ($feifei["list_id"]); ?>" ></td>
  </tr></tbody><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
  <tfoot>
    <tr>
      <td colspan="9" class="r"><input type="button" value="全选" class="submit" onClick="checkall('all');"> <input name="" type="button" value="反选" class="submit" onClick="checkall();"> <input type="button" value="批量修改" class="submit" onClick="post('?s=Admin-List-Updateall');"> <input type="button" value="批量删除" class="submit" onClick="if(confirm('删除后将无法还原,确定要删除吗?')){post('?s=Admin-List-Delall');}else{return false}"></td>
    </tr>  
  </tfoot>
  </form>
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>