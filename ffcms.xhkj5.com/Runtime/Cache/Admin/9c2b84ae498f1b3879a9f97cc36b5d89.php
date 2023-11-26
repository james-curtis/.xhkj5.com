<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>内容模块配置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
</head>
<body class="body">
<div class="title">
	<div class="left">视频、文章初始值配置</div>
</div>
<div class="add">  
	<form action="?s=Admin-Config-Update-type-model" method="post" name="myform" id="myform">              
  <ul><li class="left">视频片头广告时长：</li>
    <li class="right"><input  type="text" name="config[play_second]" value="<?php echo ($play_second); ?>" class="w120 ct" maxlength="2" title="设为0则不启用">&nbsp; </li>
  </ul>
  <ul><li class="left">默认文章扩展分类：</li>
    <li class="right"><input type="text" name="config[news_type]" id="news_type" value="<?php echo ($news_type); ?>" maxlength="250" class="w400">&nbsp;</li>
  </ul>  
  <ul><li class="left">默认视频扩展分类：</li>
    <li class="right"><input type="text" name="config[play_type]" id="play_type" value="<?php echo ($play_type); ?>" maxlength="250" class="w400">&nbsp;</li>    
  </ul>    
  <ul><li class="left">默认视频资源列表：</li>
    <li class="right"><input type="text" name="config[play_state]" id="play_state" value="<?php echo ($play_state); ?>" maxlength="250" class="w400">&nbsp;</li>    
  </ul>    
  <ul><li class="left">默认视频地区列表：</li>
    <li class="right"><input type="text" name="config[play_area]" id="play_area" value="<?php echo ($play_area); ?>" maxlength="250" class="w400">&nbsp;</li>    
  </ul> 
  <ul><li class="left">默认视频年代列表：</li>
    <li class="right"><input type="text" name="config[play_year]" id="play_year" value="<?php echo ($play_year); ?>" maxlength="250" class="w400">&nbsp;</li>    
  </ul>
  <ul><li class="left">默认视频对白列表：</li>
    <li class="right"><input type="text" name="config[play_language]" id="play_language" value="<?php echo ($play_language); ?>" maxlength="250" class="w400">&nbsp;</li>    
  </ul>
  <ul><li class="left">默认视频版本列表：</li>
    <li class="right"><input type="text" name="config[play_version]" id="play_version" value="<?php echo ($play_version); ?>" maxlength="250" class="w400">&nbsp;</li>    
  </ul>
  <ul><li class="left">默认视频周期列表：</li>
    <li class="right"><input type="text" name="config[play_weekday]" id="play_weekday" value="<?php echo (($play_weekday)?($play_weekday):'一,二,三,四,五,六,日'); ?>" maxlength="250" class="w400">&nbsp;</li>    
  </ul>
   <ul><li class="left">节目缓冲广告地址：</li>
    <li class="right"><input type="text" name="config[play_playad]" id="play_playad" value="<?php echo ($play_playad); ?>" maxlength="150" class="w400"></li>
  </ul>
  <ul><li class="left">云播放器调用地址：</li>
    <li class="right"><input type="text" name="config[play_cloud]" id="play_cloud" value="<?php echo ($play_cloud); ?>" maxlength="150" class="w400">&nbsp;<label>留空则使用本地播放器，推荐使用云播放器。<a href="http://cdn.feifeicms.co/server/v3/jump.php?id=3&version=<?php echo L("feifeicms_version");?>" target="_blank" style="color:red">云播放器使用说明</a></label></li>
  </ul>  
  <ul><li class="left">视频解析服务地址：</li>
    <li class="right"><input type="text" name="config[play_jiexi]" id="play_jiexi" value="<?php echo ($play_jiexi); ?>" maxlength="250" class="w400">&nbsp;<label>留空则使用官方站外分享代码播放（无版权风险）播放器变量：{name}</label></li>
  </ul>    
  <ul><li class="left">下载服务器组前缀：<br /><font color="red">前缀名称$$$对应地址</font><br />(一行一个)</li>
    <li class="right" style="height:150px"><textarea name="config[play_server]" id="play_server" style="height:133px"><?php if(is_array($play_server)): $i = 0; $__LIST__ = $play_server;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php echo ($key); ?>$$$<?php echo ($feifei); ?><?php echo(chr(13)); ?><?php endforeach; endif; else: echo "" ;endif; ?></textarea></li>
  </ul>
  <ul class="footer">
    <input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置">
  </ul>
  </form>
</div>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>