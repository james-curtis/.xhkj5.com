<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('picture');
0
|| checktplrefresh('./template/default/ranklist/picture.htm', './template/default/ranklist/side_left.htm', 1526372458, 'diy', './data/template/3_diy_ranklist_picture.tpl.php', './template/comiis_nby', 'ranklist/picture')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="misc.php?mod=ranklist">����</a> <em>&rsaquo;</em>
ͼƬ����
</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--[diy=diyranklisttop]--><div id="diyranklisttop" class="area"></div><!--[/diy]-->

<div class="ct2_a wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<h1 class="mt">ͼƬ����</h1>
<ul class="tb cl">
<li<?php if($_GET['view'] == 'hot') { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=picture&amp;view=hot&amp;orderby=<?php echo $orderby;?>">��ͼ����</a></li>
<?php if($clicks) { if(is_array($clicks)) foreach($clicks as $key => $value) { ?><li<?php if($_GET['view'] == $key) { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=picture&amp;view=<?php echo $key;?>&amp;orderby=<?php echo $orderby;?>"><?php echo $value['name'];?>����</a></li>
<?php } } ?>
<li<?php if($_GET['view'] == 'sharetimes') { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=picture&amp;view=sharetimes&amp;orderby=<?php echo $orderby;?>">��������</a></li>
</ul>
<p id="before" class="tbmu">
<a href="misc.php?mod=ranklist&amp;type=picture&amp;view=<?php echo $_GET['view'];?>&amp;orderby=thismonth" id="2592000" <?php if($orderby == 'thismonth') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=picture&amp;view=<?php echo $_GET['view'];?>&amp;orderby=thisweek" id="604800" <?php if($orderby == 'thisweek') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=picture&amp;view=<?php echo $_GET['view'];?>&amp;orderby=today" id="86400" <?php if($orderby == 'today') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=picture&amp;view=<?php echo $_GET['view'];?>&amp;orderby=all" id="all" <?php if($orderby == 'all') { ?>class="a"<?php } ?> />ȫ��</a>
</p>
<?php if($picturelist) { ?>
<ul class="ptw ml mla cl"><?php if(is_array($picturelist)) foreach($picturelist as $picture) { ?><li class="d">
<div class="c">
<?php if($picture['rank'] <= 3) { ?><img src="<?php echo IMGDIR;?>/rank_<?php echo $picture['rank'];?>.gif" alt="<?php echo $picture['rank'];?>" class="picrank" /><?php } ?>
<a href="home.php?mod=space&amp;uid=<?php echo $picture['uid'];?>&amp;do=album&amp;picid=<?php echo $picture['picid'];?>" title="<?php echo $picture['albumname'];?>" target="_blank"><img src="<?php echo $picture['url'];?>" alt="" /></a>
</div>
<?php if($_GET['view'] == 'hot') { ?><p class="ptm">����: <?php echo $picture['hot'];?></p>
<?php } elseif($_GET['view'] == 'sharetimes') { ?><p class="ptm">���� <?php echo $picture['sharetimes'];?></p>
<?php } else { ?><p class="ptm"><?php echo $clicks[$_GET['view']]['name'];?> <?php echo $picture['click'.$_GET['view']];?></p><?php } ?>
<span><a href="home.php?mod=space&amp;uid=<?php echo $picture['uid'];?>" target="_blank"><?php echo $picture['username'];?></a></span>
</li>
<?php } ?>
</ul>
<?php } else { ?>
<div class="emp">û���������</div>
<?php } ?>
<div class="notice">���а������ѱ����棬�ϴ��� <?php echo $lastupdate;?> �����£��´ν��� <?php echo $nextupdate;?> ���и���</div>
</div>
<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>
<div class="appl">
<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]--><div class="tbn">
<h2 class="mt bbda"><?php echo $_G['setting']['navs']['8']['navname'];?></h2>
<ul>
<li class="cl<?php if($_GET['type'] == 'index' || !$_GET['type']) { ?> a<?php } ?>"><a href="misc.php?mod=ranklist">ȫ��</a></li>
<?php if($ranklist_setting['member']['available']) { ?>
<li class="cl<?php if($_GET['type'] == 'member') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=member">�û�</a></li>
<?php } if($ranklist_setting['thread']['available']) { ?>
<li class="cl<?php if($_GET['type'] == 'thread') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=thread&amp;view=replies&amp;orderby=thisweek">����</a></li>
<?php } if(helper_access::check_module('blog') && $ranklist_setting['blog']['available']) { ?>
<li class="cl<?php if($_GET['type'] == 'blog') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=blog&amp;view=heats&amp;orderby=thisweek">��־</a></li>
<?php } if($ranklist_setting['poll']['available']) { ?>
<li class="cl<?php if($_GET['type'] == 'poll') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=poll&amp;view=heats&amp;orderby=thisweek">ͶƱ</a></li>
<?php } if($ranklist_setting['activity']['available']) { ?>
<li class="cl<?php if($_GET['type'] == 'activity') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=activity&amp;view=heats&amp;orderby=thismonth">�</a></li>
<?php } if(helper_access::check_module('album') && $ranklist_setting['picture']['available']) { ?>
<li class="cl<?php if($_GET['type'] == 'picture') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=picture&amp;view=hot&amp;orderby=thismonth">ͼƬ</a></li>
<?php } if($ranklist_setting['forum']['available']) { ?>
<li class="cl<?php if($_GET['type'] == 'forum') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=forum&amp;view=threads">���</a></li>
<?php } if($ranklist_setting['group']['available']&&$_G['setting']['groupstatus']) { ?>
<li class="cl<?php if($_GET['type'] == 'group') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=group&amp;view=credit">Ⱥ��</a></li>
<?php } ?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['ranklist_nav_extra'])) echo $_G['setting']['pluginhooks']['ranklist_nav_extra'];?>
</div><!--[diy=diysidebottom]--><div id="diysidebottom" class="area"></div><!--[/diy]-->
</div>
</div>

<!--[diy=diyranklistbottom]--><div id="diyranklistbottom" class="area"></div><!--[/diy]--><?php include template('common/footer'); ?>