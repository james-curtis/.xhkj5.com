<?php if (!defined('THINK_PATH')) exit();?><div class="wrap">
<div class="main">
	<div class="point about">
		<?php echo ($res); ?>
	</div>
</div>
<div class="notic">测试测试</div>
<div class="hidemask">
<div class="hidegaobai">
	<form action="" onsubmit="return false" id="gaobai">
		<p>我要告白<span class="close"><a href="javascript:closes()" class="node">X</a></span></p>
		<p><input type="text" name="email" placeholder="邮箱（必填）" class="his" id="gemail" value="<?php echo (session('email')); ?>"></p>
		<p><input type="text" name="qq" id="qq" placeholder="QQ（用于获取头像）" class="his" value="<?php echo (session('qq')); ?>"></p>
		<p><input type="text" name="realname" placeholder="我的名称..." class="his" id="grealname" value="<?php echo (session('nname')); ?>"></p>
		<p><input type="text" name="towho" placeholder="告白对象..." class="his" id="gtowho"></p>
		<p><textarea name="content" cols="30" rows="5" placeholder="这是我要说的话" class="his" id="gcontent"></textarea></p>
		<p><input type="submit" value="发布" class="hidegaobaisubmit"></p>
	</form>
</div>
</div>
<div class="load">
	<div class="spinner">
	  <div class="rect1"></div>
	  <div class="rect2"></div>
	  <div class="rect3"></div>
	  <div class="rect4"></div>
	  <div class="rect5"></div>
	</div>	
</div>
</div>
</body>
</html>