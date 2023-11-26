<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>模板管理</title>
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
      <th class="l"><span style="float:left;">网站模板管理</span>文件夹名/文件名</th>
      <th class="l" width="200">文件描述</th>
      <th class="l" width="80">文件大小</th>
      <th class="l" width="150">修改时间</th>
      <th class="r" width="100">相关操作</th>
    </tr>
  </thead>
<tbody> 
  <?php if(!empty($dirlast)): ?><tr class="firstalt">
  <td colspan="5" class="r pd"><img src="__PUBLIC__/images/file/last.gif"> <a href="?s=Admin-Tpl-Show-id-<?php echo ($dirlast); ?>">上级目录</a> 当前目录: <?php echo ($dirpath); ?></td>
  </tr><?php endif; ?>
  <?php if(is_array($list_dir)): $i = 0; $__LIST__ = $list_dir;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(($feifei["isDir"])  ==  "1"): ?><tr>
  	<td class="l pd"><img src="__PUBLIC__/images/file/folder.gif" width="16" height="16"><a href="?s=Admin-Tpl-Show-id-<?php echo ($feifei["pathfile"]); ?>"> <?php echo ($feifei["filename"]); ?></a></td>
    <td class="l ct">文件夹</td>
    <td class="l ct"><?php echo byte_format(getdirsize($feifei['path'].'/'.$feifei['filename']));?></td>
    <td class="l ct"><?php echo (ff_color_date('Y-m-d H:i:s',$feifei["mtime"])); ?></td>
    <td class="r ct"><a href="?s=Admin-Tpl-Show-id-<?php echo ($feifei["pathfile"]); ?>">下级目录</a></td>
  </tr>
  <?php else: ?>
  <tr>
  	<?php if(in_array(($feifei["ext"]), explode(',',"jpg,gif,js,css,html,htm,php"))): ?><td class="l pd"><img src="__PUBLIC__/images/file/<?php echo ($feifei["ext"]); ?>.gif" width="16" height="16"> <?php echo ($feifei["filename"]); ?></td>
    <?php else: ?>
    <td class="l pd"><img src="__PUBLIC__/images/file/other.gif" width="16" height="16"> <?php echo ($feifei["filename"]); ?></td><?php endif; ?>
    <td class="l ct"><?php echo (ff_tpl_name($feifei["filename"])); ?></td>
    <td class="l ct"><?php echo (byte_format($feifei["size"])); ?></td>
    <td class="l ct"><?php echo (ff_color_date('Y-m-d H:i:s',$feifei["mtime"])); ?></td>
    <?php if(preg_match('/.html|.htm|.txt|.css|.php|.js|.tpl/',$feifei['filename'])): ?><td class="l ct"><a href="?s=Admin-Tpl-Add-id-<?php echo (admin_ff_url_repalce($dirpath,desc)); ?>|<?php echo str_replace('.'.$feifei['ext'],'*'.$feifei['ext'],$feifei['filename']);?>">编辑</a> <a href="?s=Admin-Tpl-Del-id-<?php echo (admin_ff_url_repalce($dirpath,desc)); ?>|<?php echo str_replace('.'.$feifei['ext'],'*'.$feifei['ext'],$feifei['filename']);?>" onClick="return confirm('确定删除该文件吗?')">删除</a></td>
    <?php else: ?>
    <td class="r ct"><a href="<?php echo ($dirpath); ?>/<?php echo ($feifei["filename"]); ?>" target="_blank">浏览</a> <a href="?s=Admin-Tpl-Del-id-<?php echo (admin_ff_url_repalce($dirpath,desc)); ?>|<?php echo str_replace('.'.$feifei['ext'],'*'.$feifei['ext'],$feifei['filename']);?>" onClick="return confirm('确定删除该文件吗?')">删除</a></td><?php endif; ?>
  </tr><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?> 
</tbody>       
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>