<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('76,164,163,78,80,81');?><?php include template('common/header'); ?><header class="header p_header">
<a class="topMenu fl" href="#mainNv">�˵�</a>
<?php if(!$_G['uid'] && !$_G['connectguest']) { ?>
<a class="topLogin fr" href="member.php?mod=logging&amp;action=login"></a>
<?php } else { ?>
<a class="topLogin fr" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1"><?php echo avatar($_G[uid]);?></a>
<?php } ?>
<h1 class="logo"><img  src="template/xhkj5.com_iuni/touch/images/img/logo.png"></h1>
</header>
<div class="container">
<script src="template/xhkj5.com_iuni/touch/images/js/TouchSlide.1.1.js" type="text/javascript" type="text/javascript"></script>

<!--����ͼ-->
<div class="xrSlider" id="xrSlider"><?php block_display('76');?></div>
<script type="text/javascript">
TouchSlide({ 
slideCell:"#xrSlider",
titCell:".sliderNum li",
mainCell:".sliderCon ul", 
effect:"leftLoop",
autoPlay:true //�Զ�����
});
</script>

<!--��������-->
<div class="nvBar">
<div class="subNv">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=90&amp;mobile=2">dz���</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=93&amp;mobile=2">dzģ��</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=94&amp;mobile=2">dz�̳�</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=72&amp;mobile=2">��վԴ��</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=103&amp;mobile=2">wpģ��</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=105&amp;mobile=2">htmlģ��</a></li>
</ul>
</div>
</div>

<!--���²��-->
<div class="pb">
<div class="hdTit cfix">
<h2>���²��</h2>
<span><a href="forum.php?mod=forumdisplay&amp;fid=2&amp;mobile=2">����&gt;&gt;</a></span>
</div>
<div class="newPosts"><?php block_display('164');?></div>
</div>

<!--����ģ��-->
<div class="pb">
<div class="hdTit cfix">
<h2>����ģ��</h2>
</div>
<div class="ausPt cfix" id="ausPt"><?php block_display('163');?></div>
<script type="text/javascript">
TouchSlide({ 
slideCell:"#ausPt",
titCell:".ausPtNum li",
mainCell:".ausPtCon", 
effect:"leftLoop"
});
</script>
</div>

<!--�����Ƽ�-->
<div class="hotPosts cfix pb"><?php block_display('78');?></div>


<!--��������-->
<div class="pb">
<div class="hdTit cfix">
<h2>��������</h2>
<span><a href="forum.php?mod=guide&amp;view=newthread">����&gt;&gt;</a></span>
</div>
<div class="newPosts"><?php block_display('80');?></div>
</div>


<!--��鵼��-->
<div class="pb">
<div class="hdTit cfix">
<h2>��鵼��</h2>
<span><a href="forum.php?forumlist=1&amp;mobile=2">����&gt;&gt;</a></span>
</div>
<div class="coluNv cfix"><?php block_display('81');?></div>
</div>

<?php if(!$_G['uid'] && !$_G['connectguest']) { ?>
<div class="pb indexLogin">
<p>��¼֮�����������๦�ܣ�</p>
<a href="member.php?mod=logging&amp;action=login">������¼</a>
</div>
<?php } ?>
</div><?php include template('common/btfixed'); include template('common/footer'); ?>