<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>用户管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$feifeicms.show.table();
	//排序
	$('.ff-order').on('click',function(){
		$order = $(this).attr('data-order');
		$sort = $(this).attr('data-sort');
		$url = "<?php echo ($link); ?>".replace("FFLINK",1).replace("<?php echo ($order); ?>",$order);
		if($(this).attr('data-sort') == "desc"){
			$url = $url.replace("desc","asc");
		}else{
			$url = $url.replace("asc","desc");
		}
		self.location.href = $url;
	});
	//排序图标
	$("img.ff-order").each(function(i){
		if($(this).attr('data-order') == '<?php echo ($order); ?>'){
			if($(this).attr('data-sort') == 'desc'){
				$(this).attr('src','__PUBLIC__/images/admin/down.gif').addClass('active');
			}else{
				$(this).attr('src','__PUBLIC__/images/admin/up.gif').addClass('active');
			}
			return false;
		}
	});
});
</script>
</head>
<body class="body">
<form action="?s=Admin-Admin-Delall" method="post" name="myform" id="myform"> 
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead><tr><th class="r"><span style="float:left">订单搜索</span></th></tr></thead>
  <tr>
    <td class="tr">
    <select name="ispay" class="w100"><option value="99">支付状态</option><option value="0" <?php if(($ispay)  ==  "0"): ?>selected<?php endif; ?>>未付款</option><option value="1" <?php if(($ispay)  ==  "1"): ?>selected<?php endif; ?>>付款中</option><option value="2" <?php if(($ispay)  ==  "2"): ?>selected<?php endif; ?>>已付款</option></select>&nbsp;
    <input type="text" name="wd" id="wd" class="w300" value="<?php echo (urldecode($wd)); ?>" placeholder="可搜索(订单编号、订单备注)" onClick="this.select();">
    <input type="button" value="搜索" class="submit" onClick="post('?s=Admin-Orders-Show');"></td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="table">
  <thead>
    <tr class="ct">
      <th class="l" width="80"><img class="ff-order" data-order="order_id" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">ID</th>
      <th class="l">订单编号</th>
      <th class="l" width="90"><img class="ff-order" data-order="order_money" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">订单金额</th>
      <th class="l" width="80">支付状态</th>
      <th class="l" width="80">订单状态</th>
      <th class="l" width="120"><img class="ff-order" data-order="order_addtime" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">下单时间</th>
      <th class="l" width="120"><img class="ff-order" data-order="order_paytime" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">支付时间</th>
      <th class="l" width="80">用户名</th>
      <th class="r" width="80">相关操作</th>
    </tr>
  </thead>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tbody>
  <tr>
    <td class="l ct"><input name='ids[]' type='checkbox' value='<?php echo ($feifei["order_id"]); ?>' class="noborder"><?php echo ($feifei["order_id"]); ?></td>
    <td class="l pd"><?php echo ($feifei["order_sign"]); ?></td>
    <td class="l ct"><?php echo ($feifei["order_money"]); ?></td>
    <td class="l ct"><?php switch($feifei["order_ispay"]): ?><?php case "1":  ?>付款中<?php break;?><?php case "2":  ?><font color="green">已付款</font><?php break;?><?php default: ?>未付款<?php endswitch;?></td>
    <td class="l ct"><?php switch($feifei["order_status"]): ?><?php case "1":  ?>已确认<?php break;?><?php case "2":  ?>已取消<?php break;?><?php case "3":  ?>无效<?php break;?><?php case "4":  ?>退货<?php break;?><?php default: ?>未确认<?php endswitch;?></td>
    <td class="l ct"><?php echo (date('Y-m-d H:i',$feifei["order_addtime"])); ?></td>
    <td class="l ct"><?php echo (date('Y-m-d H:i',$feifei["order_paytime"])); ?></td>
    <td class="l ct"> <a href="?s=Admin-Orders-Show-uid-<?php echo ($feifei["order_uid"]); ?>"><?php echo (msubstr(remove_xss($feifei["user_name"]),0,4,true)); ?></a></td>
    <td class="r ct">
    <a href="?s=Admin-Orders-Pay-sign-<?php echo ($feifei["order_sign"]); ?>" title="人工补单">补单</a>
    <a href="?s=Admin-Orders-Del-ids-<?php echo ($feifei["order_id"]); ?>" onClick="return confirm('确定删除?')">删除</a>
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
      <input type="button" value="删除" class="submit" onClick="post('?s=Admin-Orders-Del');">
      </td>
    </tr>  
  </tfoot>
</table>
</form>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>