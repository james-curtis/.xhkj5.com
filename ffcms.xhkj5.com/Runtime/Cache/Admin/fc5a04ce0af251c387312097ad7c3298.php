<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>文章管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<style>
.select a{ font-size:14px; margin-right:5px;}
.select a.list-son{ display:none; line-height:30px; color:#666}
.select a.active{color:#F00; font-weight:400;}
.select .wd{ color:#666}
.select .all{color: #00F; letter-spacing:2px; font-weight:bold}
</style>
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script type="text/javascript">
var createhtml = function(id){
	ff_dialog('?s=Admin-Create-news_detail_id-ids-'+id,'生成HTML','100%','300');
}
var news_select = function($id){
	$.get("./?s=admin-news-select-id-"+$id, function(data){
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
	$('#stars-<?php echo ($stars); ?>').addClass('active');
	$('#order-<?php echo ($type); ?>').addClass('active');
	//
	news_select('get');
	$('.select .all').on('click',function(){
		news_select($(this).attr('data-id'));
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
    <th colspan="2"><span style="float:left">文章筛选</span>
    <span class="right"><a href="?s=Admin-News-Add" style="float:right">添加文章</a></span>
    </th>
  </tr>
  </thead>
  <tr>
    <td class="l pd" width="80">文章搜索：</td>
    <td class="r pd">
    <form action="?s=Admin-News-Show" method="post">
    <input type="text" class="w200 wd" name="wd" maxlength="30" value="<?php echo (urldecode(($wd)?($wd):'标题、副标、摘要')); ?>" onClick="this.select();">
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
    <?php $item_list = ff_mysql_list('sid:2;limit:0;order:list_pid asc,list_oid;sort:asc'); ?>
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
    <?php $params["tag_list"] = 'news_type'; ?>
    <a id="tags-<?php echo md5(1);?>" href="?<?php echo (http_build_query($params)); ?>">全部</a>
    <?php if(($cid)  <  "1"): ?><?php $_result=explode(',',C('news_type'));if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): ++$i;$mod = ($i % 2 )?><?php $params["tag_name"] = $val; ?>
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
    <?php $params["type"] = 'addtime'; ?>
    <a id="order-addtime" href="?<?php echo (http_build_query($params)); ?>">按更新时间</a>
    </td>
  </tr>
</table>
<form action="?s=Admin-News-Show" method="post" name="myform" id="myform">
<table border="0" cellpadding="0" cellspacing="0" class="table">
  <thead>
    <tr class="ct">
      <th class="r" width="20">ID</th>
      <th class="l" ><span style="float:left; padding-top:7px"><?php if(($orders)  ==  "news_id desc"): ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-id-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按ID升序排列"></a><?php else: ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-id-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按ID降序排列"></a><?php endif; ?></span>文章标题</th>
      <th class="l" width="70">分类</th>
      <th class="l" width="60">人气<?php if(($orders)  ==  "news_hits desc"): ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-hits-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按人气升序排列"></a><?php else: ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-hits-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按人气降序排列"></a><?php endif; ?></th>
      <th class="l" width="60">评分<?php if(($orders)  ==  "news_gold desc"): ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-gold-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按评分升序排列"></a><?php else: ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-gold-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按评分降序排列"></a><?php endif; ?></th>
      <th class="l" width="80">文章权重<?php if(($orders)  ==  "news_stars desc"): ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-stars-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按星级升序排列"></a><?php else: ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-stars-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按星级降序排列"></a><?php endif; ?></th>
      <th class="l" width="80">更新时间<?php if(($orders)  ==  "news_addtime desc"): ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-addtime-order-asc"><img src="__PUBLIC__/images/admin/up.gif" border="0" alt="点击按时间升序排列"></a><?php else: ?><a href="?s=Admin-News-Show-cid-<?php echo ($cid); ?>-stars-<?php echo ($stars); ?>-status-<?php echo ($status); ?>-type-addtime-order-desc"><img src="__PUBLIC__/images/admin/down.gif" border="0" alt="点击按时间降序排列"></a><?php endif; ?></th>
      <th class="r" width="100">相关操作</th>
    </tr>
  </thead>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tbody>
  <tr>
    <td class="r ct"><input name='ids[]' type='checkbox' value='<?php echo ($feifei["news_id"]); ?>' class="noborder"></td>
    <td class="l pd">
    <span style="float:left"><span style="color:#666666"><?php echo ($feifei["news_id"]); ?>、</span><?php if(C('url_html') > 0): ?><a href="javascript:createhtml('<?php echo ($feifei["news_id"]); ?>');" id="html_<?php echo ($feifei["news_id"]); ?>"><font color="green">生成</font></a><?php endif; ?> 『<a href="<?php echo ($feifei["list_url"]); ?>"><?php echo ($feifei["list_name"]); ?></a>』<a href="<?php echo ($feifei["news_url"]); ?>" target="_blank"><?php echo (msubstr($feifei["news_name"],0,40,'utf-8',true)); ?></a> <span id="ct_<?php echo ($feifei["news_id"]); ?>"><?php if(($feifei['news_continu'])  !=  "0"): ?><sup onClick="setcontinu(<?php echo ($feifei["news_id"]); ?>,'<?php echo ($feifei["news_continu"]); ?>');" class="navpoint"><?php echo ($feifei["news_continu"]); ?></sup><?php else: ?><img src="__PUBLIC__/images/admin/ct.gif" style="margin-top:10px" class="navpoint" onClick="setcontinu(<?php echo ($feifei["news_id"]); ?>,'<?php echo ($feifei["news_continu"]); ?>');"><?php endif; ?></span></span>
    </td>
    <td class="l ct"><a href="<?php echo ($feifei["list_url"]); ?>"><?php echo (ff_list_find($feifei["news_cid"])); ?></a></td>
    <td class="l ct"><?php echo ($feifei["news_hits"]); ?></td>
    <td class="l ct"><?php echo ($feifei["news_gold"]); ?></td>
    <td class="l ct"><?php if(is_array($feifei['news_starsarr'])): $i = 0; $__LIST__ = $feifei['news_starsarr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ajaxstar): ++$i;$mod = ($i % 2 )?><img src="__PUBLIC__/images/admin/star<?php echo ($ajaxstar); ?>.gif" onClick="setstars('News',<?php echo ($feifei["news_id"]); ?>,<?php echo ($i); ?>);" id="star_<?php echo ($feifei["news_id"]); ?>_<?php echo ($i); ?>" class="navpoint"><?php endforeach; endif; else: echo "" ;endif; ?></td>
    <td class="l ct"><?php echo (date('Y-m-d',$feifei["news_addtime"])); ?></td>
    <td class="r ct"><a href="?s=Admin-News-Add-cid-<?php echo ($feifei["news_cid"]); ?>-id-<?php echo ($feifei["news_id"]); ?>" title="点击修改影片">编辑</a> <a href="?s=Admin-News-Del-id-<?php echo ($feifei["news_id"]); ?>" onClick="return confirm('确定删除该文章吗?')" title="点击删除影片">删除</a> <?php if(($feifei["news_status"])  ==  "1"): ?><a href="?s=Admin-News-Status-id-<?php echo ($feifei["news_id"]); ?>-value-0" title="点击隐藏文章">隐藏</a><?php else: ?><a href="?s=Admin-News-Status-id-<?php echo ($feifei["news_id"]); ?>-value-1" title="点击显示文章"><font color="red">显示</font></a><?php endif; ?></td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
      <td colspan="9" class="r pages"><?php echo ($pages); ?></td>
    </tr>   
  <tfoot>
    <tr>
      <td colspan="9" class="r"><input type="button" value="全选" class="submit" onClick="checkall('all');"> <input name="" type="button" value="反选" class="submit" onClick="checkall();"> <?php if((C("url_html"))  ==  "1"): ?><input type="button" value="生成静态" name="createhtml" id="createhtml" class="submit" onClick="post('?s=Admin-News-Create');"/><?php endif; ?> <input type="button" value="批量删除" class="submit" onClick="if(confirm('删除后将无法还原,确定要删除吗?')){post('?s=Admin-News-Delall');}else{return false;}"> <input type="button" value="批量移动" class="submit" onClick="$('#psetcid').show();"> <span style="display:none" id="psetcid"><select name="pestcid"><option value="">选择目标分类</option><?php $_result=ff_mysql_list('sid:2;limit:0;order:list_pid asc,list_oid;sort:asc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei["list_id"]); ?>" <?php if(($feifei["list_id"])  ==  $cid): ?>selected<?php endif; ?>><?php echo ($feifei["list_name"]); ?></option><?php if(is_array($feifei['list_son'])): $i = 0; $__LIST__ = $feifei['list_son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($feifei["list_id"]); ?>" <?php if(($feifei["list_id"])  ==  $cid): ?>selected<?php endif; ?>>├ <?php echo ($feifei["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select> <input type="button" class="submit" value="确定转移" onClick="post('?s=Admin-News-Pestcid');"/></span></td>
    </tr>  
  </tfoot>
</table>
</form>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>