<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>首页</title>
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
<?php $pass="<font color=green><strong>√</strong></font>";$error="<font color=red><strong>×</strong></font>"; ?>
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead>
<th colspan="2" style="text-align:left"><span><a href="?s=Admin-Index-Phpinfo" target="_blank">详细>></a></span>系统基本信息</th>
</thead>
<tbody>
  <tr>
    <td class="tl">技术支持/BUG反馈：</td>
    <td class="tr"><a href="mailto:271513820@qq.com" target="_blank">271513820@qq.com</a></td>
  </tr>
  <tr>
    <td class="tl">服务器 (IP/端口)：</td>
    <td class="tr"><?php echo $_SERVER['SERVER_NAME'].' ('.$_SERVER['SERVER_ADDR'].':'.$_SERVER['SERVER_PORT'].')' ?></td>
  </tr>
  <tr>
    <td class="tl">站点安装目录：</td>
    <td class="tr"><?php echo C("site_path");?></td>
  </tr>
  <tr>
    <td class="tl">服务器操作系统：</td>
    <td class="tr"><?php echo $_SERVER['SERVER_SOFTWARE'] ?></td>
  </tr>  
  <tr>
    <td class="tl">PHP版本：</td>
    <td class="tr"><?php echo PHP_VERSION ?>&nbsp;&nbsp;<span style="color:#999999;">>5.30</span></td>
  </tr>
  <tr>
    <td class="tl">脚本解释引擎：</td>
    <td class="tr"><?php echo PHP_SAPI ?></td>
  </tr>
  <tr>
    <td class="tl">mysql数据库支持：</td>
    <td class="tr"><?php echo function_exists(@mysql_close) ? mysql_get_client_info() : $error;?>&nbsp;&nbsp;<span style="color: #999999;">>4.20</span></td>
  </tr> 
  <tr>
    <td class="tl">allow_url_fopen支持：</td>
    <td class="tr"><?php echo ini_get("allow_url_fopen") ? $pass : $error;?></td>
  </tr>
  <tr>
    <td class="tl">file_get_contents支持：</td>
    <td class="tr"><?php echo function_exists(@file_get_contents) ? $pass : $error;?></td>
  </tr>
  <tr>
    <td class="tl">允许上传文件最大值：</td>
    <td class="tr"><?php echo get_cfg_var("file_uploads") ? get_cfg_var("upload_max_filesize") : $error;?></td>
  </tr> 
  <tr>
    <td class="tl">GD图形处理扩展库版本：</td>
    <td class="tr"><?php $gd = @gd_info(); echo $gd['GD Version'] ? $gd['GD Version'] : $error;?>&nbsp;&nbsp;<span style="color: #999999;">>=2.0.34</span></td>
  </tr> 
  <tr>
    <td class="tl">程序最新版本检测：</td>
    <td class="tr"><script>var version="<?php echo L("feifeicms_version");?>";</script><script type="text/javascript" src="<?php echo L("feifeicms_version_js");?>"></script></td>
  </tr> 
</tbody>
</table>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>