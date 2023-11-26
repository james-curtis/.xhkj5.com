<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台用户管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
</head>
<body class="body">
<!--生成静态预览框-->
<div id="htmltags" style="position:absolute;display:none;" class="htmltags"></div>
<!--图片预览框-->
<div id="showpic" class="showpic" style="display:none;"><img name="showpic_img" id="showpic_img" width="120" height="160"></div>
<!--背景灰色变暗-->
<div id="showbg" style="position:absolute;left:0px;top:0px;filter:Alpha(Opacity=0);opacity:0.0;background-color:#fff;z-index:8;"></div>
<form action="?s=Admin-Special-Show" method="post" name="myform" id="myform">
<table border="0" cellpadding="0" cellspacing="0" class="table">
  <thead>
    <tr class="ct">
      <th class="l" width="40">ID <?php if(($orders)  ==  "special_id desc"): ?><a href="?s=Admin-Special-Show-type-id-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按ID升序排列"></a><?php else: ?><a href="?s=Admin-Special-Show-type-id-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按ID降序排列"></a><?php endif; ?></th>
      <th class="l" >专题名称</th>
      <th class="l" width="60">人气<?php if(($orders)  ==  "special_hits desc"): ?><a href="?s=Admin-Special-Show-type-hits-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按人气升序排列"></a><?php else: ?><a href="?s=Admin-Special-Show-type-hits-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按人气降序排列"></a><?php endif; ?></th>
      <th class="l" width="90">更新时间<?php if(($orders)  ==  "special_addtime desc"): ?><a href="?s=Admin-Special-Show-type-addtime-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按时间升序排列"></a><?php else: ?><a href="?s=Admin-Special-Show-type-addtime-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按时间降序排列"></a><?php endif; ?></th>
      <th class="l" width="80">专题权重</th>
      <th class="r" width="100">相关操作</th>
    </tr>
  </thead>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tbody>
  <tr>
    <td class="l pd"><input name='ids[]' type='checkbox' value='<?php echo ($feifei["special_id"]); ?>' class="noborder"><?php echo ($feifei["special_id"]); ?></td>
    <td class="l pd"><a href="<?php echo ($feifei["special_url"]); ?>" target="_blank"><?php echo ($feifei["special_name"]); ?></a></td>
    <td class="l ct"><?php echo ($feifei["special_hits"]); ?></td>
    <td class="l ct"><?php echo (date('Y-m-d',$feifei["special_addtime"])); ?></td>
    <td class="l ct"><?php if(is_array($feifei['special_starsarr'])): $i = 0; $__LIST__ = $feifei['special_starsarr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ajaxstar): ++$i;$mod = ($i % 2 )?><img src="__PUBLIC__/images/admin/star<?php echo ($ajaxstar); ?>.gif" onClick="setstars('Special',<?php echo ($feifei["special_id"]); ?>,<?php echo ($i); ?>);" id="star_<?php echo ($feifei["special_id"]); ?>_<?php echo ($i); ?>" class="navpoint"><?php endforeach; endif; else: echo "" ;endif; ?></td>
    <td class="r ct"><a href="?s=Admin-Special-Add-id-<?php echo ($feifei["special_id"]); ?>" title="点击修改专题">编辑</a> <a href="?s=Admin-Special-Del-id-<?php echo ($feifei["special_id"]); ?>" onClick="return confirm('确定删除该专题吗?')" title="点击删除专题">删除</a>  <?php if(($feifei["special_status"])  ==  "1"): ?><a href="?s=Admin-Special-Status-id-<?php echo ($feifei["special_id"]); ?>-sid-0" title="点击隐藏专题">隐藏</a><?php else: ?><a href="?s=Admin-Special-Status-id-<?php echo ($feifei["special_id"]); ?>-sid-1" title="点击显示专题"><font color="red">显示</font></a><?php endif; ?></td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
      <td colspan="10" class="r pages"><?php echo ($pages); ?></td>
    </tr>  
  <tfoot>
    <tr>
      <td colspan="10" class="r"><input type="button" value="全选" class="submit" onClick="checkall('all');"> <input name="" type="button" value="反选" class="submit" onClick="checkall();"> <input type="button" value="批量删除" class="submit" onClick="if(confirm('删除后将无法还原,确定要删除吗?')){post('?s=Admin-Special-Delall');}else{return false;}"></td>
    </tr>  
  </tfoot>
</table>
{__NOTOKEN__}
</form>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>