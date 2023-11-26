<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo C("site_name");?> - 用户登录</title>
<meta name="keywords" content="<?php echo C("site_keywords");?>">
<meta name="description" content="<?php echo C("site_description");?>">
<link href="__ROOT__/Public/user/css/base.css" type="text/css" rel="stylesheet">
<link href="__ROOT__/Public/user/css/qirebox.css" type="text/css"rel="stylesheet">
<script src="__ROOT__/Public/user/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="__ROOT__/Public/user/js/formValidator-4.0.1.js"type="text/javascript"></script>
</head>
<?php
$path=C('site_path');
if(C('url_rewrite')){
$useurl= C('site_path');
}
else{
$useurl="$path?s=";
}
?>
<body>
	<div class="layout" id="sign-header">
		<div id="sign-logo">
			<a href="<?php echo C("site_url");?>"><img src="__ROOT__/Public/user/images/logo.png" alt=""></a>
		</div>
	</div>
	<!-- // sign-header end -->
	<div class="layout" id="sign-content">
		<div class="ui-box ui-qire sign-focus" id="login-box">
			<div class="ui-title fn-clear">
				<span>还没有<?php echo C("site_name");?>会员帐号？请<a href="<?php echo $useurl; ?>User-Center-reg">注册成为<?php echo C("site_name");?>会员</a></span>
                <h2><?php echo C("site_name");?>会员登录</h2>
             </div>
			<div class="ui-cnt fn-clear">
				<form id="loginform_web" action="" method="post">
					<div class="ui-form" id="sign-primary">
						<div class="ui-form-item fn-clear">
							<label for="username" class="ui-label w100">您的帐号：</label>
                            <input type="text" id="username" name="username" class="ui-input w220" value="" value=""><p class="onError ui-message" id="usernameTip">你输入的用户名或者Email非法,请确认</p>
						</div>
						<div class="ui-form-item fn-clear">
							<label for="password" class="ui-label w100">密码：</label>
                            <input value="" type="password" id="password" name="password" maxlength="20" class="ui-input w220" value=""><p class="onError ui-message" id="passwordTip">密码不能为空,请确认</p>
						</div>
						<div class="ui-form-item ui-form-checkbox fn-clear">
							<label class="ui-label w100">&nbsp;</label>
							<div class="ui-form-block w220">
								<label for="agreement" class="ui-label-checkbox"><input type="checkbox" name="cookietime" id="cookietime" checked="checked" value="2592000">下次自动登录 </label><a href="<?php echo $useurl; ?>User-Center-forgetpwd">忘记密码了？</a>
							</div>
						</div>
						<div class="ui-form-item fn-clear">
							<label class="ui-label w100">&nbsp;</label>
							<input type="submit" id="loginbt" class="ui-button w220" value="登录">
							<input type="hidden" name="dosubmit" id="dosubmit" value="1">
							<input type="hidden" name="forward"  value="<?php echo ($forward); ?>" id="forward">
						</div>
					</div>
					<!-- // ui-form#sign-primary end -->
				</form>
 <div id="sign-app">
      	<div class="sign-app-list">
      		<h5>你还可以用以下方式直接登录：</h5>
      		<ul class="item login-list clear blue"> 
	            <?php if($qq_appid || $qq_appkey) { ?>
	      			<li style="margin-right:14px;">
						<a href="<?php echo $useurl; ?>User-Center-qqlogin" target="_blank" style="background-image:url(__ROOT__/Public/user/images/qq_16_16.png)">腾讯QQ登录</a>
					</li>
	 			<?php } ?>
	 			<?php if($qq_skey || $qq_akey) { ?>
	      			<li style="margin-right:14px;">
						<a href="<?php echo $useurl; ?>User-Center-qqweibologin"  target="_blank" style="background-image:url(__ROOT__/Public/user/images/qq_16_16.png)">腾讯微博登录</a>
					</li>
	 			<?php } ?>
	 			<?php if($sina_skey || $sina_akey) { ?>
	      			<li>
	                	<a href="<?php echo $useurl; ?>User-Center-sinaweibologin"  target="_blank" style="background-image:url(__ROOT__/Public/user/images/sina_16_16.png)">新浪微博登录</a>
	               	</li>
	 			<?php } ?>    
			</ul>
      	</div>
      </div>
				<!-- // sign-app end -->
			</div>
		</div>
		<!-- // sign-box#regbox end -->
		<script type="text/javascript">
			$.formValidator.initConfig({
				formID : "loginform_web",
				debug : false,
				submitOnce : false,
				onSuccess : function() {
					$("#loginform_web").qiresub({
						curobj : $("#loginform_web #loginbt"),
						txt : '数据提交中,请稍后...',
						onsucc : function(result) {
							$.hidediv(result);
						}
					}).post({
						url : '<?php echo $useurl; ?>User-Center-login'
					});
					return false;
				},
				onError : function(msg, obj, errorlist) {
					$("#errorlist").empty();
					$.map(errorlist, function(msg) {
						$("#errorlist").append("<li>" + msg + "</li>")
					});
				},
				submitAfterAjaxPrompt : '有数据正在异步验证，请稍等...'
			});
			$("#loginform_web #username").formValidator({
				onShow : "请输入正确的用户名或者email",
				onFocus : "至少4个字符",
				onCorrect : "填写正确"
			}).inputValidator({
				min : 4,
				onError : "你输入的用户名或者Email非法,请确认"
			});
			$("#loginform_web #password").formValidator({
				onShow : "请输入密码",
				onFocus : "至少6个长度",
				onCorrect : "密码合法"
			}).inputValidator({
				min : 6,
				empty : {
					leftEmpty : false,
					rightEmpty : false,
					emptyError : "密码两边不能有空符号"
				},
				onError : "密码不能为空,请确认"
			});
		</script>
	</div>
	<!-- // sign-content end -->
<script language="javascript" src="__ROOT__/Public/user/js/qireobj.js" type="text/javascript"></script>
<script type="text/javascript" src="__ROOT__/Public/user/js/focus.js"></script>
﻿<div class="footer">
  <div class="layout">
     <div class="foot-nav"><a class="color" href="/style/banzhu/" target="_blank" title="使用帮助">常见问题</a>-<a href="<?php echo ff_mytpl_url('my_new.html');?>" target="_blank" title="最新更新">最新更新</a>-<a href="<?php echo ff_mytpl_url('sitemap.html');?>" target="_blank" title="网站地图">网站地图</a>-<?php echo C("site_tongji");?></div>
    <!-- // foot-nav End -->
    <div class="copyright">
<?php echo C("site_copyright");?>
    </div>
    <!-- // copyright End -->
    <!-- // maxBox End -->
  </div>
</div>
<!-- // footer end -->
<script language="javascript" src="<?php echo ($root); ?>Public/user/js/qireobj.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo ($root); ?>Public/user/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo ($root); ?>Public/user/js/jquery.vod.js"></script>
	<!-- // footer end -->
</body>
</html>