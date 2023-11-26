<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>视频管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<style>
.select a{ font-size:14px; margin-right:5px;}
.select a.list-son{ display:none; line-height:30px; color:#666}
.select a.active{color:#F00; font-weight:400;}
.select .wd{ color:#666}
.select .all{color: #00F; letter-spacing:2px; font-weight:bold}
label.vod_ids{ margin:0px 5px;}
label.vod_play {float:right; color:#666; margin-right:5px}
label sup {color:#990000;cursor:pointer;font-size:13px; margin-left:5px;}
</style>
<script type="text/javascript">
var createhtml = function(id){
	ff_dialog('?s=Admin-Create-vod_detail_id-ids-'+id,'生成HTML','100%','300');
}
var vod_select = function($id){
	$.get("./?s=admin-vod-select-id-"+$id, function(data){
		if(data == 1){
			$('.select tr').show();
			$('.select .all').val('收起^').attr('data-id','null');
		}else{
			$('.select tr').eq(2).nextAll().hide();
			$('.select .all').val('展开+').attr('data-id','set');
		}
	});
}
$(document).ready(function(){
	$feifeicms.show.table();
	//
	$('.list-pid-<?php echo ($cid); ?>').show();
	if($('.list-<?php echo ($cid); ?>').eq(0).attr('data-pid')){
		$pid = $('.list-<?php echo ($cid); ?>').eq(0).attr('data-pid');
		$('.list-pid-'+$pid).show();
	}
	$('#tags-<?php echo (md5(($tag_name)?($tag_name):1)); ?>').addClass('active');
	$('#status-<?php echo ($status); ?>').addClass('active');
	$('#isend-<?php echo ($isend); ?>').addClass('active');
	$('#stars-<?php echo ($stars); ?>').addClass('active');
	$('#state-<?php echo (md5(($state)?($state):全部)); ?>').addClass('active');
	$('#order-<?php echo ($type); ?>').addClass('active');
	//
	$('.vod-isend sup').on("click", function(){
		setcontinu($(this).attr('data-id'),$(this).attr('data-continu'));
	});
	//
	vod_select('get');
	$('.select .all').on('click',function(){
		vod_select($(this).attr('data-id'));
 	});
});
</script>
</head>
<body class="body">
<!--生成静态预览框-->
<div id="htmltags" style="position:absolute;display:none;" class="htmltags"></div>
<!--图片预览框-->
<div id="showpic" class="showpic" style="display:none;"><img name="showpic_img" id="showpic_img" width="120" height="160"></div>
<!--背景灰色变暗-->
<div id="showbg" style="position:absolute;left:0px;top:0px;filter:Alpha(Opacity=0);opacity:0.0;background-color:#fff;z-index:8;"></div>
<table border="0" cellpadding="0" cellspacing="0" class="table select">
  <thead>
  <tr>
    <th colspan="2"><span style="float:left">视频筛选</span>
    <span class="right"><a href="?s=Admin-Vod-Add" style="float:right">添加视频</a></span>
    </th>
  </tr>
  </thead>
  <tr>
    <td class="l pd" width="80">视频搜索：</td>
    <td class="r pd">
    <form action="?s=Admin-Vod-Show" method="post">
    <input type="text" class="w200 wd" name="wd" maxlength="30" value="<?php echo (urldecode(($wd)?($wd):'片名、主演、导演')); ?>" onClick="this.select();">
    <input type="submit" value="搜索" class="submit">
    <input type="button" value="展开+" class="submit all" data-id="set">
    </form>
    </td>
  </tr>  
  <tr>
    <td class="l pd" width="80">分类筛选：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["cid"] = '0'; ?>
    <?php if(($cid)  <  "1"): ?><a class="active" href="<?php echo (http_build_query($params)); ?>">全部</a>
    <?php else: ?>
   		<a href="?<?php echo (http_build_query($params)); ?>">全部</a><?php endif; ?>
    <?php $params = $admin; ?>
    <?php $item_list = ff_mysql_list('sid:1;limit:0;order:list_pid asc,list_oid;sort:asc'); ?>
    <?php if(is_array($item_list)): $i = 0; $__LIST__ = $item_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php $params["cid"] = $feifei["list_id"]; ?>
    <?php if(($feifei["list_id"])  ==  $cid): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei["list_name"]); ?></a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei["list_name"]); ?></a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
    <br />
    <!--二级分类展示 -->
    <?php if(is_array($item_list)): $i = 0; $__LIST__ = $item_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(is_array($feifei['list_son'])): $i = 0; $__LIST__ = $feifei['list_son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeison): ++$i;$mod = ($i % 2 )?><?php $params["cid"] = $feifeison["list_id"]; ?>
    <?php if(($feifeison["list_id"])  ==  $cid): ?><a class="active list-<?php echo ($feifeison["list_id"]); ?> list-pid-<?php echo ($feifeison["list_pid"]); ?>" data-pid="<?php echo ($feifeison["list_pid"]); ?>" href="?<?php echo (http_build_query($params)); ?>">├ <?php echo ($feifeison["list_name"]); ?></a>
    <?php else: ?>
    <a class="list-son list-<?php echo ($feifeison["list_id"]); ?> list-pid-<?php echo ($feifeison["list_pid"]); ?>" data-pid="<?php echo ($feifeison["list_pid"]); ?>" href="?<?php echo (http_build_query($params)); ?>">├ <?php echo ($feifeison["list_name"]); ?></a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
    </td>
  </tr>
	<tr>
    <td class="l pd" width="80">扩展分类：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["tag_name"] = ''; ?>
    <?php $params["tag_list"] = 'vod_type'; ?>
    <a id="tags-<?php echo md5(1);?>" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php if(($cid)  <  "1"): ?><?php $_result=explode(',',C('play_type'));if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): ++$i;$mod = ($i % 2 )?><?php $params["tag_name"] = $val; ?>
        <a id="tags-<?php echo md5($val);?>" href="?<?php echo (http_build_query($params)); ?>"><?php echo ($val); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    <?php else: ?>
    	<?php $json_extend = ff_list_find($cid, 'list_extend'); ?>
      <?php $_result=explode(',',$json_extend['type']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): ++$i;$mod = ($i % 2 )?><?php $params["tag_name"] = $val; ?>
        <a id="tags-<?php echo md5($val);?>" href="?<?php echo (http_build_query($params)); ?>"><?php echo ($val); ?></a><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?>
    </td>
  </tr>   
  <tr>
    <td class="l pd" width="80">审核状态：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["status"] = ''; ?>
    <a id="status-" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php $params["status"] = '1'; ?>
    <a id="status-1" href="?<?php echo (http_build_query($params)); ?>">已审核</a>
    <?php $params["status"] = '2'; ?>
    <a id="status-2" href="?<?php echo (http_build_query($params)); ?>">未审核</a>
    <?php $params["status"] = '3'; ?>
    <a id="status-3" href="?<?php echo (http_build_query($params)); ?>">待验证</a>
    </td>
  </tr>  
  <tr>
    <td class="l pd" width="80">连载状态：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["isend"] = ''; ?>
    <a id="isend-" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php $params["isend"] = '1'; ?>
    <a id="isend-1" href="?<?php echo (http_build_query($params)); ?>">连载中</a>
    <?php $params["isend"] = '2'; ?>
    <a id="isend-2" href="?<?php echo (http_build_query($params)); ?>">已完结</a>
    </td>
  </tr>
  <tr>
    <td class="l pd" width="80">权重状态：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["stars"] = ''; ?>
    <a id="stars-" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php $params["stars"] = '1'; ?>
    <a id="stars-1" href="?<?php echo (http_build_query($params)); ?>">一星</a>
    <?php $params["stars"] = '2'; ?>
    <a id="stars-2" href="?<?php echo (http_build_query($params)); ?>">二星</a>
    <?php $params["stars"] = '3'; ?>
    <a id="stars-3" href="?<?php echo (http_build_query($params)); ?>">三星</a>
    <?php $params["stars"] = '4'; ?>
    <a id="stars-4" href="?<?php echo (http_build_query($params)); ?>">四星</a>
    <?php $params["stars"] = '5'; ?>
    <a id="stars-5" href="?<?php echo (http_build_query($params)); ?>">五星</a>
    </td>
  </tr> 
  <tr>
    <td class="l pd" width="80">更新周期：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["weekday"] = ''; ?>
    <?php if(empty($weekday)): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>">全部</a><?php endif; ?>
    <?php $_result=explode(',',C('play_weekday'));if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php $params["weekday"] = $feifei; ?>
    <?php if(($feifei)  ==  $weekday): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei); ?></a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei); ?></a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
    </td>
  </tr>   
  <tr>
    <td class="l pd" width="80">视频版本：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["state"] = ''; ?>
    <?php if(empty($state)): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>">全部</a><?php endif; ?>
    <?php $_result=explode(',',C('play_state'));if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php $params["state"] = $feifei; ?>
    <?php if(($feifei)  ==  $state): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei); ?></a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei); ?></a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
    </td>
  </tr>
  <tr>
    <td class="l pd" width="80">出产地区：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["area"] = ''; ?>
    <?php if(empty($area)): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>">全部</a><?php endif; ?>
    <?php $_result=explode(',',C('play_area'));if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php $params["area"] = $feifei; ?>
    <?php if(($feifei)  ==  $area): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei); ?></a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei); ?></a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
    </td>
  </tr>
  <tr>
    <td class="l pd" width="80">播放来源：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["player"] = ''; ?>
    <?php if(empty($player)): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>">全部</a><?php endif; ?>
    <?php $_result=F('_feifeicms/player');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php $params["player"] = $key; ?>
    <?php if(($key)  ==  $player): ?><a class="active" href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei[0]); ?></a>
    <?php else: ?>
    <a href="?<?php echo (http_build_query($params)); ?>"><?php echo ($feifei[0]); ?></a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
    </td>
  </tr>   
  <tr>
    <td class="l pd" width="80">排序方式：</td>
    <td class="r pd">
    <?php $params = $admin; ?>
    <?php $params["type"] = 'hits'; ?>
    <a id="order-hits" href="?<?php echo (http_build_query($params)); ?>">按人气</a>
    <?php $params["type"] = 'gold'; ?>
    <a id="order-gold" href="?<?php echo (http_build_query($params)); ?>">按评分</a>
    <?php $params["type"] = 'stars'; ?>
    <a id="order-stars" href="?<?php echo (http_build_query($params)); ?>">按权重</a>
    <?php $params["type"] = 'id'; ?>
    <a id="order-id" href="?<?php echo (http_build_query($params)); ?>">按入库ID</a>
    <?php $params["type"] = 'filmtime'; ?>
    <a id="order-filmtime" href="?<?php echo (http_build_query($params)); ?>">按上映时间</a>
    <?php $params["type"] = 'addtime'; ?>
    <a id="order-addtime" href="?<?php echo (http_build_query($params)); ?>">按更新时间</a>
    </td>
  </tr>
</table>
<form action="?s=Admin-Vod-Show" method="post" name="myform" id="myform">
<table border="0" cellpadding="0" cellspacing="0" class="table">
  <thead>
    <tr class="ct">
      <th class="l" ><span style="float:left">ID <?php if(($orders)  ==  "vod_id desc"): ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-id-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按ID升序排列"></a><?php else: ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-id-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按ID降序排列"></a><?php endif; ?></span>视频名称 服务器组</th>
      <th class="l" width="60">人气<?php if(($orders)  ==  "vod_hits desc"): ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-hits-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按人气升序排列"></a><?php else: ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-hits-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按人气降序排列"></a><?php endif; ?></th>
      <th class="l" width="60">评分<?php if(($orders)  ==  "vod_gold desc"): ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-gold-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按评分升序排列"></a><?php else: ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-gold-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按评分降序排列"></a><?php endif; ?></th>
      <th class="l" width="80">视频权重<?php if(($orders)  ==  "vod_stars desc"): ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-stars-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按星级升序排列"></a><?php else: ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-stars-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按星级降序排列"></a><?php endif; ?></th>
      <th class="l" width="90">更新时间<?php if(($orders)  ==  "vod_addtime desc"): ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-addtime-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按时间升序排列"></a><?php else: ?><a href="?s=Admin-Vod-Show-cid-<?php echo ($cid); ?>-continu-<?php echo ($continu); ?>-player-<?php echo ($player); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-iffilm-<?php echo ($isfilm); ?>-url-<?php echo ($url); ?>-type-addtime-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按时间降序排列"></a><?php endif; ?></th>
      <th class="r" width="120">相关操作</th>
    </tr>
  </thead>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tbody>
  <tr>
    <td class="l pd">
    <label class="fl ids_check"><input name='ids[]' type='checkbox' value='<?php echo ($feifei["vod_id"]); ?>' class="noborder"></label>
    <label class="fl ids_show"><?php echo ($feifei["vod_id"]); ?></label>
    <label class="fl">
    <?php if(C('url_html') > 0): ?>&nbsp;<a href="javascript:createhtml('<?php echo ($feifei["vod_id"]); ?>');"><font color="green">生成</font></a><?php endif; ?>『<a href="<?php echo ($feifei["list_url"]); ?>"><?php echo ($feifei["list_name"]); ?></a>』<a href="<?php echo ($feifei["vod_url"]); ?>" onMouseOver="showpic(event,'<?php echo ($feifei["vod_pic"]); ?>','<?php echo C("upload_path");?>/');" onMouseOut="hiddenpic();" target="_blank"><?php echo ($feifei["vod_name"]); ?><?php if(($feifei["vod_isend"])  ==  "1"): ?><?php if(($feifei["vod_total"])  >  "0"): ?>（全）<?php endif; ?><?php endif; ?></a>
    </label>
    <label class="vod-isend fl" id="isend-<?php echo ($feifei["vod_id"]); ?>">
    <sup data-id="<?php echo ($feifei["vod_id"]); ?>" data-continu="<?php echo ($feifei["vod_continu"]); ?>"><?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'<img src="__PUBLIC__/images/admin/ct.gif">'); ?></sup>
    </label>
    <label class="fr vod_play"><?php echo (str_replace('$$$',' ',$feifei["vod_play"])); ?></label>
    </td>
    <td class="l ct"><?php echo ($feifei["vod_hits"]); ?></td>
    <td class="l ct"><?php echo ($feifei["vod_gold"]); ?></td>
    <td class="l ct"><?php if(is_array($feifei['vod_starsarr'])): $i = 0; $__LIST__ = $feifei['vod_starsarr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ajaxstar): ++$i;$mod = ($i % 2 )?><img src="__PUBLIC__/images/admin/star<?php echo ($ajaxstar); ?>.gif" onClick="setstars('Vod',<?php echo ($feifei["vod_id"]); ?>,<?php echo ($i); ?>);" id="star_<?php echo ($feifei["vod_id"]); ?>_<?php echo ($i); ?>" class="navpoint"><?php endforeach; endif; else: echo "" ;endif; ?></td>
    <td class="l ct"><?php echo (date('Y.m.d',$feifei["vod_addtime"])); ?></td>
    <td class="r ct">
    <a href="?s=Admin-Vod-Add-cid-<?php echo ($feifei["vod_cid"]); ?>-id-<?php echo ($feifei["vod_id"]); ?>" title="点击修改影片">编辑</a>
    <a href="?s=Admin-Vod-Del-id-<?php echo ($feifei["vod_id"]); ?>" onClick="return confirm('确定删除该视频吗?')" title="点击删除影片">删除</a> 
    <?php if(($feifei["vod_status"])  ==  "1"): ?><a href="?s=Admin-Vod-Status-id-<?php echo ($feifei["vod_id"]); ?>-value-0" title="点击隐藏影片">隐藏</a><?php else: ?><a href="?s=Admin-Vod-Status-id-<?php echo ($feifei["vod_id"]); ?>-value-1" title="点击显示影片"><font color="red">显示</font></a><?php endif; ?>
    <?php if(($feifei["vod_inputer"])  !=  "feifeicms"): ?><a href="?s=Admin-Vod-Inputer-id-<?php echo ($feifei["vod_id"]); ?>-value-feifeicms" title="点击锁定后采集的时候将不更新">锁定</a><?php else: ?><a href="?s=Admin-Vod-Inputer-id-<?php echo ($feifei["vod_id"]); ?>-value-" title="点击解锁"><font color="red">解锁</font></a><?php endif; ?>
    </td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
  <tr>
    <td colspan="9" class="r pages"><?php echo ($pages); ?></td>
  </tr>   
  <tfoot>
    <tr>
      <td colspan="9" class="r">
      <input type="button" value="全选" class="submit" onClick="checkall('all');">
      <input name="" type="button" value="反选" class="submit" onClick="checkall();">
      <?php if((C("url_html"))  ==  "1"): ?><input type="button" value="生成静态" name="createhtml" id="createhtml" class="submit" onClick="post('?s=Admin-Vod-Create');"/><?php endif; ?>
      <input type="button" value="批量删除" class="submit" onClick="if(confirm('删除后将无法还原,确定要删除吗?')){post('?s=Admin-Vod-Delall');}else{return false;}">
      <input type="button" value="批量移动" class="submit" onClick="$('#psetcid').show();"><span style="display:none" id="psetcid">
      <select name="pestcid">
      <option value="">选择目标分类</option>
      <?php $_result=ff_mysql_list('sid:1;limit:0;order:list_pid asc,list_oid;sort:asc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei["list_id"]); ?>" <?php if(($feifei["list_id"])  ==  $cid): ?>selected<?php endif; ?>><?php echo ($feifei["list_name"]); ?></option>
      <?php if(is_array($feifei['list_son'])): $i = 0; $__LIST__ = $feifei['list_son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei["list_id"]); ?>" <?php if(($feifei["list_id"])  ==  $cid): ?>selected<?php endif; ?>>├ <?php echo ($feifei["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <input type="button" class="submit" value="确定转移" onClick="post('?s=Admin-Vod-Pestcid');"/>
      </span></td>
    </tr>  
  </tfoot>
</table>
{__NOTOKEN__} 
</form>
<!--模态框 -->
<div class="backdrop" id="ff-dialog-back" style="display:none;"></div>
<div class="modal" id="ff-dialog-box" style="display:none;">
  <div class="inner">
    <div class="head">
      <div class="ff_dialog_title" id="ff_dialog_title">...</div>
      <i class="ff_dialog_close" onClick="javascript:ff_dialog_close();"></i>
    </div>
    <div class="body" id="ff_dialog_body">
    </div>
  </div>
</div>
<!--<a href="#" onclick="ff_dialog('?s=Admin-Vod-Show-tid-<?php echo ($special_id); ?>','添加视频到专题');" title="点击查看内容">收录影视(<?php echo ($countvod); ?>)</a> -->
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>