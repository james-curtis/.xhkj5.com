<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>重复影片检测</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script language="javascript">
function changeurl(cid,continu,player,stars,status){
}
$(document).ready(function(){
	$ff84.show.table();
	$('#continu').click(function(){
		changeurl('',1,'','','');
	});	
	$('#selectcid').change(function(){
	   self.location.href="?s=Plus-Check-VideoCheck-check_sub-ok-len-<?php echo ($result['len']); ?>-cid-"+$(this).val();
	});
	$('#selectplayer').change(function(){
		changeurl('','',$(this).val(),'','');
	});
	$('#selectstars').change(function(){
		changeurl('','','',$(this).val(),'');
	});	
});
function createhtml(id){
	var offset = $("#html_"+id).offset();
	var left = (offset.left/2)+50;
	var top = offset.top+15;
	var html = $.ajax({
		url: '?s=Admin-Create-vodid-id-'+id,
		async: false
	}).responseText;
	$("#htmltags").html(html);
	$("#htmltags").css({left:left,top:top,display:""});	
	window.setTimeout(function(){
		$("#htmltags").hide();
	},1000);
}
</script>
<style>
label.vod_input_show{ position:relative;margin-top:5px}
label.vod_ids{ margin:0px 5px;}
label.vod_play {float:right;color:#666;margin-right:5px}
label sup {color:#990000;font-size:13px;}
</style>
</head>
<body class="body">
<!--生成静态预览框-->
<div id="htmltags" style="position:absolute;display:none;" class="htmltags"></div>
<!--图片预览框-->
<div id="showpic" class="showpic" style="display:none;z-index:9;"><img name="showpic_img" id="showpic_img" width="75" height="75"></div>
<!--背景灰色变暗-->
<div id="showbg" style="position:absolute;left:0px;top:0px;filter:Alpha(Opacity=0);opacity:0.0;background-color:#fff;z-index:8;"></div>
<table width="98%" border="0" cellpadding="5" cellspacing="1" class="table">
<thead>
<tr>
  <td class="r"><span class="fl">同名影片检测</td>
</tr>
</thead>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="table">

  <tr>
   <td class="tr ct" style="height:40px"> 
  <form action="?s=Plus-Check-VideoCheck"  method="post">
 <select onchange="location.href=this.value;">
    <option value="index.php?s=Plus-Check-VideoCheck-check_sub-ok-len-<?php echo ($result['len']); ?>-keyword-<?php echo ($result['keyword']); ?>-mod-1" <?php if(($mod)  ==  "1"): ?>selected<?php endif; ?>>智能模式 （显示一部分，匹配率高）</option>
    <option value="index.php?s=Plus-Check-VideoCheck-check_sub-ok-len-<?php echo ($result['len']); ?>-keyword-<?php echo ($result['keyword']); ?>-mod-2" <?php if(($mod)  ==  "2"): ?>selected<?php endif; ?>>增强模式（显示全部结果,搜索关键词效果很准）</option>
 </select> <label>检测长度：</label></span>&nbsp;&nbsp;<input name="len" type="text" id="len" size="2"  maxlength="1" value="<?php echo (($result['len'])?($result['len']):3); ?>">&nbsp;&nbsp;<input type="submit" value="检测"  name='check_sub' class="bginput" title="开始检测" />
</form>
</td>
<td class="tr ct" style="height:40px"> 
<form action="?s=Plus-Check-VideoCheck-check_sub-ok-len-<?php echo ($result['len']); ?>" method="post">
   <select id="selectcid">
<option value="">按分类查看</option><?php if(is_array($list_channel_video)): $i = 0; $__LIST__ = $list_channel_video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>" <?php if(($ppvod["list_id"])  ==  $cid): ?>selected<?php endif; ?>><?php echo ($ppvod["list_name"]); ?></option><?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>" <?php if(($ppvod["list_id"])  ==  $result[cid]): ?>selected<?php endif; ?>>├ <?php echo ($ppvod["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select> <input type="text" name="keyword" id="wd" maxlength="20" value="<?php echo ($result['keyword']); ?>" style="color:#666666"> <input type="submit" value="搜索" class="submit"></form></td>
  </tr>
</table>

<form action="?s=Plus-Check-VideoCheck-check_sub-ok" method="post" name="myform" id="myform">
<table border="0" cellpadding="0" cellspacing="0" class="table">
  <thead>
    <tr class="ct">
      <th class="l" ><span style="float:left">ID <?php if(($orders)  ==  "vod_id desc"): ?><a href="?s=Plus-Check-VideoCheck-check_sub-ok-len-<?php echo ($result['len']); ?>-type-id-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按ID升序排列"></a><?php else: ?><a href="?s=Plus-Check-VideoCheck-check_sub-ok-len-<?php echo ($result['len']); ?>/type-id-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按ID降序排列"></a><?php endif; ?></span>视频名称 服务器组 </th>
            <th class="l" >类型</th>
      <th class="l" >地区</th>
      <th class="l" width="60">导演</th>
      <th class="l" width="90">时间<?php if(($orders)  ==  "vod_addtime desc"): ?><a href="?s=Plus-Check-VideoCheck-check_sub-ok-len-<?php echo ($result['len']); ?>/type-addtime-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按时间升序排列"></a><?php else: ?><a href="?s=Plus-Check-VideoCheck-check_sub-ok-len-<?php echo ($result['len']); ?>/type-addtime-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按时间降序排列"></a><?php endif; ?></th>
      <th class="r" width="100">相关操作</th>
    </tr>
  </thead>
  <?php if(is_array($result["vresult"])): $i = 0; $__LIST__ = $result["vresult"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><tbody>
  <tr>
    <td class="l pd">
    <label class="vod_input_show fl"><input name='ids[]' type='checkbox' value='<?php echo ($ppvod["vod_id"]); ?>' class="noborder" checked></label>
    <label class="fl"><?php echo ($ppvod["vod_id"]); ?></label>
   <label class="fl vod_ids"><?php if(C('url_html') > 0): ?><a href="javascript:createhtml('<?php echo ($ppvod["vod_id"]); ?>');" id="html_<?php echo ($ppvod["vod_id"]); ?>"><font color="green">生成</font></a><?php endif; ?>『<a href="<?php echo ($ppvod["channelurl"]); ?>"><?php echo (getlistname($ppvod["vod_cid"])); ?></a>』
   <a href="<?php echo ($ppvod["videourl"]); ?>" onMouseOver="showpic(event,'<?php echo ($ppvod["vod_pic"]); ?>','<?php echo C("upload_path");?>/');" onMouseOut="hiddenpic();" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></label>
    <label id="ct_<?php echo ($ppvod["vod_id"]); ?>" class="fl"><?php if(($ppvod['vod_continu'])  !=  "0"): ?><sup onClick="setcontinu(<?php echo ($ppvod["vod_id"]); ?>,'<?php echo ($ppvod["vod_continu"]); ?>');" class="navpoint"><?php echo ($ppvod["vod_continu"]); ?></sup><?php else: ?><img src="__PUBLIC__/images/admin/ct.gif" style="margin-top:10px" class="navpoint" onClick="setcontinu(<?php echo ($ppvod["vod_id"]); ?>,'<?php echo ($ppvod["vod_continu"]); ?>');"><?php endif; ?></label>
    <label class="fr vod_play"><?php echo (str_replace('$$$',' ',$ppvod["vod_play"])); ?></label>
    </td>
    <td class="l ct"><?php echo (ff_mcat_admin($ppvod["vod_mcid"],$list_id)); ?></td>
    <td class="l ct"><?php echo ($ppvod["vod_area"]); ?></td>
    <td class="l ct"><?php echo ($ppvod["vod_director"]); ?></td>
    <td class="l ct"><?php echo ($ppvod["vod_year"]); ?></td>
    <td class="r ct"><a href="?s=Admin-Vod-Add-id-<?php echo ($ppvod["vod_id"]); ?>" title="点击修改影片" target="_blank">编辑</a> <a href="?s=Admin-Vod-Del-id-<?php echo ($ppvod["vod_id"]); ?>" onClick="return confirm('确定删除该视频吗?')" title="点击删除影片">删除</a>  <?php if(($ppvod["vod_status"])  ==  "1"): ?><a href="?s=Admin-Vod-Status-id-<?php echo ($ppvod["vod_id"]); ?>-value-0" title="点击隐藏影片">隐藏</a><?php else: ?><a href="?s=Admin-Vod-Status-id-<?php echo ($ppvod["vod_id"]); ?>-value-1" title="点击显示影片"><font color="red">显示</font></a><?php endif; ?></td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
      <td colspan="9" class="r pages"><?php echo ($result['pagelist']); ?></td>
    </tr>   
  <tfoot>
    <tr>
      <td colspan="9" class="r"><input type="button" value="全选" class="submit" onClick="checkall('all');"> <input name="" type="button" value="反选" class="submit" onClick="checkall();"> <?php if((C("url_html"))  ==  "1"): ?><input type="button" value="生成静态" name="createhtml" id="createhtml" class="submit" onClick="post('?s=Admin-Vod-Create');"/><?php endif; ?> <input type="button" value="批量删除" class="submit" onClick="if(confirm('删除后将无法还原,确定要删除吗?')){post('?s=Admin-Vod-Delall');}else{return false;}"></td>
    </tr>  
  </tfoot>
  </form>
</table>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/jquery/jquery.jqmodal.js"></script>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/jquery/jquery.jqmodal.css' />
<style>#dia_title{height:25px;line-height:25px}.jqmWindow{height:200px;}#dia_content{height:100%}</style>
<div class="jqmWindow" id="dialog"> 
<div id="dia_title"><span class="jqmTitle"></span><a href="javascript:void(0)" class="jqmClose" title="关闭窗口"></a></div>
<div id="dia_content"></div>
</div>
<script language="JavaScript" type="text/javascript">
//弹出浮动层 $('#dialog').jqm({modal: true, trigger: 'a.showDialog'});
$('#dialog').jqm({modal: true, trigger: '#window',zIndex: 500});
</script>
<style>#dia_title{height:25px;line-height:25px}.jqmWindow{height:300px;width:500px;}</style>
﻿﻿<br /><center>&#80;&#111;&#119;&#101;&#114;&#101;&#100;&#32;&#98;&#121;&#32;<a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#98;&#98;&#115;&#46;&#53;&#50;&#106;&#115;&#99;&#110;&#46;&#99;&#111;&#109;" target="_blank" ><font color="#FF0000">&#38182;&#23578;&#20013;&#22269;</font></a>,&#30001;&#39134;&#39134;&#31243;&#24207;&#20108;&#27425;&#24320;&#21457;。&#24403;&#21069;&#29256;&#26412;&#21495;&#12304;&#38182;&#23578;&#20013;&#22269;&#20250;&#21592;&#19987;&#20139;&#29256;&#12305;</center>
</body>
</html>