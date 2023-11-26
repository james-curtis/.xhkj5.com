<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>用户评论管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<style>
.ff-order{
	margin-right:5px;
	cursor:pointer;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$feifeicms.show.table();
	//跳转
	$('.submit').on('click',function(){
		if($(this).attr('data-url')){
			self.location.href = $(this).attr('data-url');
		}
	});
	//排序
	$('.ff-order').on('click',function(){
		$url = '?s=Admin-Forum-Show-cid-<?php echo ($cid); ?>-sid-<?php echo ($sid); ?>-uid-<?php echo ($uid); ?>-pid-<?php echo ($pid); ?>-status-<?php echo ($status); ?>-istheme-<?php echo ($istheme); ?>-order-'+$(this).attr('data-order')+'-sort-';
		if($(this).attr('data-sort') == 'desc'){
			$url+= 'asc';
		}else{
			$url+= 'desc';
		}
		self.location.href = $url;
	});
	//排序图标
	$("img.ff-order").each(function(i){
		if($(this).attr('data-order') == '<?php echo ($order); ?>'){
			if($(this).attr('data-sort') == 'desc'){
				$(this).attr('src','__PUBLIC__/images/admin/down.gif').css("border-bottom","2px solid #ff0000");
			}else{
				$(this).attr('src','__PUBLIC__/images/admin/up.gif').css("border-bottom","2px solid #ff0000");
			}
			return false;
		}
	});
});
</script>
</head>
<body class="body">
<form action="?s=Admin-Forum-Show" method="post" name="myform" id="myform">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead><tr><th class="r"><span style="float:left">评论管理</span></th></tr></thead>
  <tr>
    <td class="tr ct" style="height:40px">
    <input type="button" value="全部" class="submit" data-url="?s=Admin-Forum-Show">
    <input type="button" value="未审核" class="submit" data-url="?s=Admin-Forum-Show-status-0">
    <input type="button" value="已审核" class="submit" data-url="?s=Admin-Forum-Show-status-1">
    <input type="button" value="主题贴" class="submit" data-url="?s=Admin-Forum-Show-sid-<?php echo ($sid); ?>-istheme-1">
    <input type="button" value="回复贴" class="submit" data-url="?s=Admin-Forum-Show-sid-<?php echo ($sid); ?>-istheme-0">
    <input type="text" name="wd" id="wd" maxlength="20" value="<?php echo (urldecode(($wd)?($wd):'可搜索(评论内容,用户呢称,用户IP)')); ?>" onClick="this.select();" style="color:#666;width:200px">
    <input type="button" value="搜索" class="submit" onClick="post('?s=Admin-Forum-Show');"></td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="table">
  <thead>
    <tr class="ct">
      <th class="r" width="40"><img class="ff-order" data-order="forum_id" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">ID</th>
      <th class="l" >评论内容</th>
      <th class="l" width="50"><img class="ff-order" data-order="forum_reply" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">回复</th>
      <th class="l" width="50"><img class="ff-order" data-order="forum_report" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">举报</th>
      <th class="l" width="50"><img class="ff-order" data-order="forum_up" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">支持</th>
      <th class="l" width="50"><img class="ff-order" data-order="forum_down" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">反对</th>
      <th class="r" width="90"><img class="ff-order" data-order="forum_addtime" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">发布时间</th>
    </tr>
  </thead>
  <tbody>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tr>
    <td class="r ct"><input name='ids[]' type='checkbox' value='<?php echo ($feifei["forum_id"]); ?>' class="noborder" checked="checked"></td>
    <td class="r pd" style="font-size:14px;">
    	<p style="color:#666;">
      	<strong><?php if(($feifei["forum_pid"])  ==  "0"): ?>主题贴<?php else: ?>回复贴<?php endif; ?></strong>
      	<?php echo (msubstr(htmlspecialchars($feifei["forum_content"]),0,280,'utf-8',true)); ?>
      </p>
    	<p>
      	<a href="?s=Admin-Forum-Show-uid-<?php echo ($feifei["user_id"]); ?>"><?php echo (htmlspecialchars($feifei["user_name"])); ?></a>
        <a href="?s=Admin-Forum-Show-cid-<?php echo ($cid); ?>-wd-<?php echo ($feifei["forum_ip"]); ?>"><?php echo ($feifei["forum_ip"]); ?></a>
        <?php if(($feifei["forum_status"])  ==  "1"): ?><a href="?s=Admin-Forum-Status-ids-<?php echo ($feifei["forum_id"]); ?>-value-0" title="点击隐藏评论"><font color="green">已审核</font></a><?php else: ?><a href="?s=Admin-Forum-Status-ids-<?php echo ($feifei["forum_id"]); ?>-value-1" title="点击显示评论">未审核</a><?php endif; ?>
        <?php if(($feifei["forum_istop"])  ==  "1"): ?><a href="?s=Admin-Forum-Istop-ids-<?php echo ($feifei["forum_id"]); ?>-value-0" title="点击取消置顶"><font color="red">已置顶</font></a><?php else: ?><a href="?s=Admin-Forum-Istop-ids-<?php echo ($feifei["forum_id"]); ?>-value-1" title="点击置顶评论">未置顶</a><?php endif; ?>
        <a href="?s=Admin-Forum-Add-id-<?php echo ($feifei["forum_id"]); ?>" title="点击编辑评论">编辑评论</a>
        <a href="?s=Admin-Forum-Del-ids-<?php echo ($feifei["forum_id"]); ?>" onClick="return confirm('确定删除该评论吗?')" title="点击删除评论">删除评论</a>
      	<a href="<?php echo ff_url('forum/detail',array('id'=>$feifei['forum_id']),true);?>" title="查看评论" target="_blank">查看评论</a>
        <a href="?s=Admin-Forum-Show-pid-<?php echo ($feifei["forum_id"]); ?>" title="查看该讨论的回复贴">查看回复(<?php echo ($feifei["forum_reply"]); ?>)</a>
        <a href="?s=Admin-Forum-Show-sid-<?php echo ($feifei["forum_sid"]); ?>-cid-<?php echo ($feifei["forum_cid"]); ?>" title="查看相同内容ID的评论">内容ID(<?php echo ($feifei["forum_cid"]); ?>)</a>
      </p>
    </td>
    <td class="r ct"><?php echo ($feifei["forum_reply"]); ?></td>
    <td class="r ct"><?php echo ($feifei["forum_report"]); ?></td>
    <td class="r ct"><?php echo ($feifei["forum_up"]); ?></td>
    <td class="r ct"><?php echo ($feifei["forum_down"]); ?></td>
    <td class="r ct"><?php echo (date('Y-m-d',$feifei["forum_addtime"])); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
    <tr>
      <td colspan="8" class="r pages"><?php echo ($pages); ?></td>
    </tr>   
  <tfoot>
    <tr>
      <td colspan="9" class="r">
      <input type="button" value="全选" class="submit" onClick="checkall('all');">
      <input name="" type="button" value="反选" class="submit" onClick="checkall();">
      <input type="button" value="批量审核" class="submit" onClick="post('?s=Admin-Forum-Status-value-1');">
      <input type="button" value="取消审核" class="submit" onClick="post('?s=Admin-Forum-Status-value-0');">
      <input type="button" value="批量删除" class="submit" onClick="if(confirm('删除后将无法还原，确定要删除吗?')){post('?s=Admin-Forum-Del');}else{return false;}">
      <input type="button" value="清空评论" class="submit" onClick="if(confirm('清空后将无法还原，确定要清空吗?')){
      post('?s=Admin-Forum-Clear-sid-<?php echo ($sid); ?>');}else{return false;}"></td>
    </tr>  
  </tfoot>
</table>
</form>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>