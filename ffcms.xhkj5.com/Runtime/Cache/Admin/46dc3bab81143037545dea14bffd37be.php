<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>邮件系统参数配置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
</head>
<body class="body">
<div class="title">
  <div class="left">SMTP方式发送邮件参数配置</div>
</div>
<div class="add">
  <form action="?s=Admin-Config-Update-type-cache" method="post" name="myform" id="myform">
  <ul><li class="left">SMTP 服务器：</li>
    <li class="right"><input type="text" name="config[email_host]" id="email_host" value="<?php echo ($email_host); ?>"></li>
  </ul> 
	<ul><li class="left">SMTP 帐户：</li>
    <li class="right"><input type="text" name="config[email_username]" id="email_username" value="<?php echo ($email_username); ?>">&nbsp;</li>
  </ul>
  <ul><li class="left">SMTP 密码：</li>
    <li class="right"><input type="password" name="config[email_password]" id="email_password" value="<?php echo ($email_password); ?>">&nbsp;<label>QQ邮箱密码或授权码</label></li>
  </ul>
  <ul><li class="left">SMTP 端口：</li>
    <li class="right"><input type="text" name="config[email_port]" id="email_port" value="<?php echo ($email_port); ?>">
    <label>留空时默认服务器端口为 25，使用 SSL 协议默认端口为 465，详细参数请询问邮箱服务商（QQ邮箱就是465）</label>
    </li>
  </ul>
  <ul><li class="left">安全链接方式：</li>
    <li class="right"><input type="text" name="config[email_secure]" id="email_secure" value="<?php echo ($email_secure); ?>">
    <label>一般为ssl、tls或留空不启用</label>
    </li>
  </ul>
  <ul><li class="left">测试地址：</li>
    <li class="right"><input type="text" name="config[email_usertest]" id="email_usertest" value="<?php echo ($email_usertest); ?>">&nbsp;<label><a href="?s=Admin-Email-test" target="_blank">发送测试邮件（首次配置需提交保存后再测试）</a></label></li>
  </ul>
  <ul><li class="left"></li>
    <li class="right"><label>注：如用启用了用户系统，则必须成功配置邮件发送模块，否则用户不能找回密码。</label></li>
  </ul>
  <!-- -->
  <ul class="footer">
    <input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置">
  </ul>
  </form>
</div>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>