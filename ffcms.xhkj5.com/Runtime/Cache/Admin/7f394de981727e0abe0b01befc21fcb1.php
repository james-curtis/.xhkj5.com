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
<form action="?s=Admin-Html-Maps" method="post" name="myform" id="myform">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead>
<tr><th style="text-align:left">静态网页生成选项 <?php if(!empty($jumpurl)): ?><a href="<?php echo ($jumpurl); ?>" style="font-weight:bold;color:#FF0000">上一次有生成静态网任务未完成，是否接着生成?</a><?php endif; ?></th>
</thead>
<tr>
  <td class="tr">一键生成全站：
  <input type="button" value="生成全站" class="submit" onClick="post('?s=Admin-Create-Html-action-all-jump-1');" <?php echo ($url_html); ?>/>
  </td>
</tr>
<tr>
  <td class="tr">生成网站首页：
  <input type="button" value="生成首页" class="submit" onClick="post('?s=Admin-Create-Html-action-index');" <?php echo ($url_html); ?>/> 
  </td>
</tr>
<tr>
  <td class="tr">视频内容页按时间：
	<select name="vod_day" class="w120"><option value="1">当天</option><option value="2">1天前</option><option value="3">2天前</option><option value="4">3天前</option><option value="5">4天前</option><option value="6">5天前</option><option value="7">7天前</option><option value="30">30天前</option><option value="100">100天前</option></select>
  <input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Html-action-vod_detail_day');" <?php echo ($url_vod_detail); ?>/>
  </td>
</tr>
<tr>
  <td class="tr">视频内容页按分类：
  <select name="vod_cids" class="w120"><option value="<?php echo ($list_vod_all); ?>">全部影片</option><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(($feifei["list_sid"])  ==  "1"): ?><option value="<?php echo ($feifei["list_id"]); ?>"><?php echo ($feifei["list_name"]); ?></option><?php endif; ?><?php if(is_array($feifei['list_son'])): $i = 0; $__LIST__ = $feifei['list_son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeison): ++$i;$mod = ($i % 2 )?><?php if(($feifeison["list_sid"])  ==  "1"): ?><option value="<?php echo ($feifeison["list_id"]); ?>"><?php echo ($feifeison["list_name"]); ?></option><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>
  <input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Html-action-vod_detail_cids');" <?php echo ($url_vod_detail); ?>/>
  </td>
</tr>
<tr>
  <td class="tr">视频分类页按ID值：
  <select name="vod_list" class="w120"><option value="<?php echo ($list_vod_all); ?>">全部分类</option><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(($feifei["list_sid"])  ==  "1"): ?><option value="<?php echo ($feifei["list_id"]); ?>"><?php echo ($feifei["list_name"]); ?></option><?php endif; ?><?php if(is_array($feifei['list_son'])): $i = 0; $__LIST__ = $feifei['list_son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeison): ++$i;$mod = ($i % 2 )?><?php if(($feifeison["list_sid"])  ==  "1"): ?><option value="<?php echo ($feifeison["list_id"]); ?>"><?php echo ($feifeison["list_name"]); ?></option><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>
  <input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Html-action-vod_list_page');" <?php echo ($url_vod_list); ?>/>
  </td>
</tr>
<tr>
  <td class="tr">文章内容页按时间：
	<select name="news_day" class="w120"><option value="1">当天</option><option value="2">1天前</option><option value="3">2天前</option><option value="4">3天前</option><option value="5">4天前</option><option value="6">5天前</option><option value="7">7天前</option><option value="30">30天前</option><option value="100">100天前</option></select>
  <input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Html-action-news_detail_day');" <?php echo ($url_news_detail); ?>/>
  </td>
</tr>
<tr>
  <td class="tr">文章内容页按分类：
  <select name="news_cids" class="w120"><option value="<?php echo ($list_news_all); ?>">全部分类</option><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(($feifei["list_sid"])  ==  "2"): ?><option value="<?php echo ($feifei["list_id"]); ?>"><?php echo ($feifei["list_name"]); ?></option><?php endif; ?><?php if(is_array($feifei['list_son'])): $i = 0; $__LIST__ = $feifei['list_son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeison): ++$i;$mod = ($i % 2 )?><?php if(($feifeison["list_sid"])  ==  "2"): ?><option value="<?php echo ($feifeison["list_id"]); ?>"><?php echo ($feifeison["list_name"]); ?></option><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>
  <input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Html-action-news_detail_cids');" <?php echo ($url_news_detail); ?>/>
  </td>
</tr>
<tr>
  <td class="tr">文章分类页按ID值：
  <select name="news_list" class="w120"><option value="<?php echo ($list_news_all); ?>">全部分类</option><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(($feifei["list_sid"])  ==  "2"): ?><option value="<?php echo ($feifei["list_id"]); ?>"><?php echo ($feifei["list_name"]); ?></option><?php endif; ?><?php if(is_array($feifei['list_son'])): $i = 0; $__LIST__ = $feifei['list_son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeison): ++$i;$mod = ($i % 2 )?><?php if(($feifeison["list_sid"])  ==  "2"): ?><option value="<?php echo ($feifeison["list_id"]); ?>"><?php echo ($feifeison["list_name"]); ?></option><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>
  <input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Html-action-news_list_page');" <?php echo ($url_news_list); ?>/>
  </td>
</tr>
</table>
</form>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>