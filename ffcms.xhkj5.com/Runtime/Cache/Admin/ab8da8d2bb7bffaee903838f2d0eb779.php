<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>网站信息配置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<style>
.dir{  color:#006600; font-size:14px;}
.diri{ color:#666666; font-size:14px; }
label{ color:#666666}
#urlhtml1 .left,#urlhtml1 select,#urlrewrites1 .left,#datacache1 .left,#htmlcache1 .left{ color:#444}
</style>
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/jquery/jquery.insertsome.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script>
$(document).ready(function(){
	$("#myform").submit(function(){
		if($feifeicms.form.empty('myform','site_name') == false){
			return false;
		}
		if($feifeicms.form.empty('myform','site_domain') == false){
			return false;
		}
		if($feifeicms.form.empty('myform','site_path') == false){
			return false;
		}	
	});
	$("#tabs>a").click(function(){
		var no = $(this).attr('id');
		var n = $("#tabs>a").length;
		showtab('tabs',no,n);
		$("#tabs>a").removeClass("on");
		$(this).addClass("on");
		return false;
	});
	// 鼠标光标处插入文字
	$('a.dir').on('click', function(e){
		$id = $(this).attr('data-id');
		$text = $(this).text();
		$('#'+$id).focus();
		$('#'+$id).insert({"text":$text});
		return false;
	});
	//
	<?php if(($url_html)  ==  "1"): ?>showtab('htmlfilesuffix',1,1);
	showtab('urlhtml',1,1);<?php endif; ?>
});
function dir_html(id,value){
	if(value){
		$('#'+id).val(value);
	}
}
</script>
</head>
<body class="body">
<form action="?s=Admin-Config-Update-type-base" method="post" name="myform" id="myform">
<div class="title">
	<div class="tabs" id="tabs">
  <a href="javascript:void(0)" class="on" onfocus="this.blur();" id="1">基本配置</a>
  <a href="javascript:void(0)" onfocus="this.blur();" id="2">模板界面</a>
  <a href="javascript:void(0)" onfocus="this.blur();" id="3">SEO优化</a>
 	</div>
</div>
<div class="add">
<div id="tabs1">
  <ul><li class="left">网站名称：</li>
    <li class="right"><input type="text" name="config[site_name]" id="site_name" value="<?php echo ($site_name); ?>" maxlength="50" error="* 网站名称不能为空!"><span id="site_name_error">*</span><label>请填写贵站名字。</label></li>
  </ul>
  <ul><li class="left">网站域名：</li>
    <li class="right"><input type="text" name="config[site_domain]" id="site_domain" value="<?php echo ($site_domain); ?>" maxlength="50" error="* 网站域名不能为空!"><span id="site_url_error">*</span></li>
  </ul>
  <ul><li class="left">移动端子域名：</li>
    <li class="right"><input type="text" name="config[site_domain_m]" id="site_domain_m" value="<?php echo ($site_domain_m); ?>" maxlength="50"> <label>留空则不自动切换到子域名，只支持如demo.feifeicms.com这样的二级子域名</label></li>
  </ul>  
  <ul><li class="left">安装路径：</li>
    <li class="right"><input type="text" name="config[site_path]" id="site_path" value="<?php echo ($site_path); ?>" maxlength="20" error="* 安装路径不能为空!"><span id="site_path_error">*</span><label>网站安装路径，一般不需要修改，结尾必需加斜杆 '/'。</label></li>
  </ul> 
  <ul><li class="left">MYSQL数据库：</li>
    <li class="right"><input type="text" name="config[db_name]" id="db_name" value="<?php echo ($db_name); ?>" maxlength="30" error="* MYSQL数据库名称不能为空!"><span id="db_name_error">*</span><label>已存在的MYSQL数据库。</label></li>
  </ul>
  <ul><li class="left">模板主题方案：</li>
    <li class="right"><select name="config[default_theme]" style="width:208px"><?php if(is_array($dir)): $i = 0; $__LIST__ = $dir;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($admin["filename"]); ?>" <?php if(($admin["filename"])  ==  $default_theme): ?>selected<?php endif; ?>><?php echo ($admin["filename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>&nbsp;</li>
  </ul>
  <ul><li class="left">网站运行方案：</li>
    <li class="right"><select name="config[url_html]" onChange="showtab('urlhtml',this.value,1);" style="width:208px">
    <option value="0">全站动态访问模式</option>
    <option value="1" <?php if(($url_html)  ==  "1"): ?>selected<?php endif; ?>>核心页面生成静态网页</option>
    </select>
    <label>当您的网站流量非常大的时候，建议选择将一些页面生成静态，需要站长手动操作生成相关网页。</label>
    </li>
  </ul>
  <!-- -->
  <div id="urlhtml1" style="display:none;">
    <ul><li class="left">静态网页后缀名：</li>
      <li class="right"><select name="config[html_file_suffix]" style="width:208px"><option value=".html">.html</option><?php if(($html_file_suffix)  ==  ".htm"): ?><option value=".htm" selected>.htm</option><?php else: ?><option value=".htm">.htm</option><?php endif; ?><?php if(($html_file_suffix)  ==  ".shtml"): ?><option value=".shtml" selected>.shtml</option><?php else: ?><option value=".shtml">.shtml</option><?php endif; ?><?php if(($html_file_suffix)  ==  ".shtm"): ?><option value=".shtm" selected>.shtm</option><?php else: ?><option value=".shtm">.shtm</option><?php endif; ?></select></li>         
    </ul>   
    <ul><li class="left">每页生成网页数量：</li>
      <li class="right"><input type="text" name="config[url_number]" id="url_number" maxlength="6" value="<?php echo ($url_number); ?>" class="w200">&nbsp;</li>
    </ul>
     <ul><li class="left">生成网页跳转间隔(秒)：</li>
      <li class="right"><input type="text" name="config[url_time]" id="url_time" maxlength="50" value="<?php echo ($url_time); ?>" class="w200">&nbsp;</li>        
    </ul>      
    <ul><li class="left">视频分类页保存路径：</li>
      <li class="right"><input type="text" name="config[url_vod_list]" id="url_vod_list" maxlength="150" value="<?php echo ($url_vod_list); ?>" class="w300 diri"> <select style="width:150px" onChange="dir_html('url_vod_list',this.value);"><option>常用结构</option><option value="video/{listid}/{page}">1.video/id/</option><option value="video/{md5}/{page}">2.video/md5值/</option></option><option value="video/{listdir}/{page}">3.video/listdir/</option><option value="video/{listid}-{page}">4.video/id<?php echo ($html_file_suffix); ?></option><option value="video/{md5}-{page}">5.video/md5<?php echo ($html_file_suffix); ?></option><option value="video/{listdir}-{page}">6.video/listdir<?php echo ($html_file_suffix); ?></option></select> 变量：<a href="javascript:" title="分类英文名" class="dir" data-id="url_vod_list">{listdir}</a> <a href="javascript:" title="分类ID" class="dir" data-id="url_vod_list">{id}</a> <a href="javascript:" title="影片md5(id)" class="dir" data-id="url_vod_list">{md5}</a> <a href="javascript:;" class="dir" data-id="url_vod_list">{page}</a></li>
    </ul>    
    <ul><li class="left">视频详情页保存路径：</li>
      <li class="right"><input type="text" name="config[url_vod_detail]" id="url_vod_detail" maxlength="150" value="<?php echo ($url_vod_detail); ?>" class="w300 diri"> <select style="width:150px" onChange="dir_html('url_vod_detail',this.value);"><option>常用结构</option><option value="video/{id}/">1.video/id/</option><option value="video/{md5}/">2.video/md5值/</option><option value="video/{pinyin}/">3.video/拼音/</option><option value="video/{id}">4.video/id<?php echo ($html_file_suffix); ?></option><option value="video/{md5}">5.video/md5<?php echo ($html_file_suffix); ?></option><option value="video/{pinyin}">6.video/拼音<?php echo ($html_file_suffix); ?></option><option value="{listid}/{id}">7.listid/id<?php echo ($html_file_suffix); ?></option><option value="{listid}/{id}/">8.listid/id/</option><option value="{listdir}/{pinyin}/">9.listdir/拼音/</option></select> 变量：<a href="javascript:"title="分类ID值" class="dir" data-id="url_vod_detail">{listid}</a> <a href="javascript:;" class="dir" data-id="url_vod_detail">{listdir}</a> <a href="javascript:;" class="dir" data-id="url_vod_detail">{pinyin}</a> <a href="javascript:;" class="dir" data-id="url_vod_detail">{id}</a> <a href="javascript:;" class="dir" data-id="url_vod_detail">{md5}</a></li>
    </ul>
    <ul id="playhtml1"><li class="left">视频播放页保存路径：</li>
      <li class="right"><input type="text" name="config[url_vod_play]" id="url_vod_play" maxlength="150" value="<?php echo ($url_vod_play); ?>" class="w300 diri"> <select style="width:150px" onChange="dir_html('url_vod_play',this.value);"><option>常用结构</option><option value="video/{id}/{sid}-{pid}">1.video/id/sid-pid<?php echo ($html_file_suffix); ?></option><option value="video/{md5}/{sid}-{pid}">2.video/md5值/sid-pid<?php echo ($html_file_suffix); ?></option><option value="video/{pinyin}/{sid}-{pid}">3.video/拼音/sid-pid<?php echo ($html_file_suffix); ?></option><option value="video/{id}-{sid}-{pid}">4.video/id-sid-pid<?php echo ($html_file_suffix); ?></option><option value="video/{md5}-{sid}-{pid}">5.video/md5-sid-pid<?php echo ($html_file_suffix); ?></option><option value="video/{pinyin}-{sid}-{pid}">6.video/拼音-{sid}-{pid}<?php echo ($html_file_suffix); ?></option><option value="{listid}/{id}-{id}-{sid}-{pid}">7.listid/id-sid-pid<?php echo ($html_file_suffix); ?></option><option value="{listdir}/{id}/{sid}-{pid}">8.listdir/id/sid-pid<?php echo ($html_file_suffix); ?></option><option value="{listdir}/{pinyin}/{sid}-{pid}">9.listdir/拼音/sid-pid<?php echo ($html_file_suffix); ?></option></select> 变量：<a href="javascript:;" class="dir" data-id="url_vod_play">{listid}</a> <a href="javascript:;" class="dir" data-id="url_vod_play">{listdir}</a> <a href="javascript:;" class="dir" data-id="url_vod_play">{pinyin}</a> <a href="javascript:;" class="dir" data-id="url_vod_play">{id}</a> <a href="javascript:;" class="dir" data-id="url_vod_play">{pid}</a> <a href="javascript:;" class="dir" data-id="url_vod_play">{sid}</a> <a href="javascript:" title="影片md5(id)" class="dir">{md5}</a></li></ul>
    <ul><li class="left">文章分类页保存路径：</li>
      <li class="right"><input type="text" name="config[url_news_list]" id="url_news_list" value="<?php echo ($url_news_list); ?>" class="w300 diri"> <select style="width:150px" onChange="dir_html('url_news_list',this.value);"><option>常用结构</option><option value="news/channel/{id}/{page}">1.news/channel/id/</option><option value="news/channel/{md5}/{page}">2.news/channel/md5值/</option></option><option value="news/channel/{listdir}/{page}">3.news/channel/listdir/</option><option value="news/channel/{id}-{page}">4.news/channel/id<?php echo ($html_file_suffix); ?></option><option value="news/channel/{md5}-{page}">5.news/channel/md5<?php echo ($html_file_suffix); ?></option><option value="news/channel/{listdir}-{page}">6.news/channel/istdir<?php echo ($html_file_suffix); ?></option></select> 变量：<a href="javascript:" title="分类英文名" class="dir" data-id="url_news_list">{listdir}</a> <a href="javascript:" title="分类ID" class="dir" data-id="url_news_list">{id}</a> <a href="javascript:" title="影片md5(id)" class="dir" data-id="url_news_list">{md5}</a> <a href="javascript:;" class="dir" data-id="url_news_list">{page}</a></li>            
    </ul>  
    <ul><li class="left">文章详情页保存路径：</li>
      <li class="right"><input type="text" name="config[url_news_detail]" id="url_news_detail" value="<?php echo ($url_news_detail); ?>" class="w300 diri"> <select style="width:150px" onChange="dir_html('url_news_detail',this.value);"><option>常用结构</option><option value="news/{id}/{page}">1.news/id/</option><option value="news/{md5}/{page}">2.news/md5值/</option><option value="news/{pinyin}/{page}">3.news/拼音/</option><option value="{listdir}/{pinyin}/{page}">4.{listdir}/拼音/</option><option value="{listdir}/{id}/{page}">5.{listdir}/id/</option><option value="news/{id}-{page}">5.news/id<?php echo ($html_file_suffix); ?></option><option value="news/{md5}-{page}">6.news/md5<?php echo ($html_file_suffix); ?></option><option value="news/{pinyin}-{page}">7.news/拼音<?php echo ($html_file_suffix); ?></option><option value="{listdir}/{pinyin}-{page}">4.{listdir}/拼音.html</option><option value="{listid}/{id}-{page}">8.{listid}/id<?php echo ($html_file_suffix); ?></option></select> 变量：<a href="javascript:;" class="dir" data-id="url_news_detail">{listid}</a> <a href="javascript:;" class="dir" data-id="url_news_detail">{listdir}</a> <a href="javascript:;" class="dir" data-id="url_news_detail">{pinyin}</a> <a href="javascript:;" class="dir" data-id="url_news_detail">{id}</a> <a href="javascript:;" class="dir" data-id="url_news_detail">{md5}</a> <a href="javascript:;" class="dir" data-id="url_news_detail">{page}</a></li>            
    </ul>
    <ul><li class="left">说明：</li>
      <li class="right" style="color:red">以上静态网页保存路径留空则不生成相对应的模块。</li>
    </ul>
  </div>   
  <ul>
  <li class="left">统计代码：</li>
  <li class="right" style="height:115px"><textarea name="config[site_tongji]" id="site_tongji" style="height:100px"><?php echo (htmlspecialchars($site_tongji)); ?></textarea></li>
  </ul>                           
</div>
<div id="tabs2" style="display:none;">
  <ul><li class="left">后台数据管理排序：</li>
    <li class="right">
    <input type="radio" class="radio" name="config[admin_order_type]" value="addtime" <?php if(($admin_order_type)  ==  "addtime"): ?>checked="checked"<?php endif; ?>/>时间
    <input type="radio" class="radio" name="config[admin_order_type]" value="id" <?php if(($admin_order_type)  ==  "id"): ?>checked="checked"<?php endif; ?>/>ID值</li>
  </ul>
  <ul><li class="left">网站备案信息：</li>
    <li class="right"><input type="text" name="config[site_icp]" id="site_icp" value="<?php echo ($site_icp); ?>" class="w120">&nbsp;</li>
  </ul>
  <ul><li class="left">站长联系邮箱：</li>
    <li class="right"><input type="text" name="config[site_email]" id="site_email" value="<?php echo ($site_email); ?>" class="w120">&nbsp;</li>
  </ul>
  <ul><li class="left">广告保存目录：</li>
    <li class="right"><input type="text" name="config[admin_ads_file]" id="admin_ads_file" value="<?php echo ($admin_ads_file); ?>" class="w120">&nbsp;<label>请填写已经创建好的文件夹目录。</label></li>
  </ul> 
  <ul><li class="left">首页轮播间隔（毫秒）：</li>
    <li class="right"><input  type="text" name="config[ui_slide_index]" value="<?php echo (($ui_slide_index)?($ui_slide_index):3000); ?>" class="w120 ct" maxlength="9">&nbsp;<label>1秒等于1000毫秒。</li>
  </ul>  
	<ul><li class="left">分集剧情默认展示集数：</li>
    <li class="right"><input  type="text" name="config[ui_scenario]" value="<?php echo (($ui_scenario)?($ui_scenario):0); ?>" class="w120 ct" maxlength="3">&nbsp;<label>设为0则默认全部展开显示。</li>
  </ul>
	<ul><li class="left">搜索联想最多展示条数：</li>
    <li class="right"><input  type="text" name="config[ui_search_limit]" value="<?php echo ($ui_search_limit); ?>" class="w120 ct" maxlength="2">&nbsp;<label>设为0则不启用搜索联想功能。</li>
  </ul>  
  <ul><li class="left">观看记录最多展示条数：</li>
    <li class="right"><input  type="text" name="config[ui_record]" value="<?php echo (($ui_record)?($ui_record):0); ?>" class="w120 ct" maxlength="3">&nbsp;<label>设为0则不启用观看记录保存功能。</li>
  </ul>
  <ul><li class="left">播放列表最多展示集数：</li>
    <li class="right"><input  type="text" name="config[ui_playurl]" value="<?php echo (($ui_playurl)?($ui_playurl):0); ?>" class="w120 ct" maxlength="3">&nbsp;<label>设为0则不启用，默认全部展示。</li>
  </ul>
  <ul><li class="left">热门搜索 一行一个<br />"|"分隔格式含义如下：<br />视频标题|超链接|超链接打开方式</li>
    <li class="right" style="height:115px"><textarea name="config[site_hot]" id="site_hot" style="height:100px"><?php echo (htmlspecialchars($site_hot)); ?></textarea></li>
  </ul>
  <ul><li class="left">版权信息：</li>
    <li class="right" style="height:115px"><textarea name="config[site_copyright]" id="site_copyright" style="height:100px"><?php echo (htmlspecialchars($site_copyright)); ?></textarea></li>
  </ul>    
</div>
<div id="tabs3" style="display:none;">
  <ul><li class="left">（首页）标题：</li>
    <li class="right"><input type="text" name="config[site_title]" id="site_title" value="<?php echo (htmlspecialchars($site_title)); ?>" maxlength="100" class="w400">&nbsp;</li>
  </ul> 
  <ul><li class="left">（首页）关键字：</li>
    <li class="right"><input type="text" name="config[site_keywords]" id="site_keywords" value="<?php echo (htmlspecialchars($site_keywords)); ?>" maxlength="100" class="w400">&nbsp;</li>
  </ul> 
  <ul><li class="left">（首页）描述：</li>
      <li class="right"><input type="text" name="config[site_description]" id="site_description" value="<?php echo (htmlspecialchars($site_description)); ?>" maxlength="250" class="w400">&nbsp;</li>
  </ul>
  <ul><li class="left">（评论页）标题：</li>
      <li class="right"><input type="text" name="config[forum_seo_title]" id="forum_seo_title" value="<?php echo (htmlspecialchars($forum_seo_title)); ?>" maxlength="100" class="w400">&nbsp;</li>
    </ul>
  <ul><li class="left">（评论页）关键字：</li>
    <li class="right"><input type="text" name="config[forum_seo_keywords]" id="forum_seo_keywords" value="<?php echo (htmlspecialchars($forum_seo_keywords)); ?>" maxlength="150" class="w400">&nbsp;</li>
  </ul>
  <ul><li class="left">（评论页）描述：</li>
      <li class="right" style="text-align:left"><input type="text" name="config[forum_seo_description]" id="forum_seo_description" value="<?php echo (htmlspecialchars($forum_seo_description)); ?>" maxlength="250" class="w400"></li>
  </ul>  
</div>
<!-- -->
<ul class="footer">
	<input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置">
</ul>
</div>
</form>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>