<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('poll');
0
|| checktplrefresh('./template/default/ranklist/poll.htm', './template/default/ranklist/side_left.htm', 1526397468, 'diy', './data/template/3_diy_ranklist_poll.tpl.php', './template/comiis_nby', 'ranklist/poll')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="misc.php?mod=ranklist">����</a> <em>&rsaquo;</em>
ͶƱ����
</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--[diy=diyranklisttop]--><div id="diyranklisttop" class="area"></div><!--[/diy]-->

<div class="ct2_a wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<h1 class="mt">ͶƱ����</h1>
<ul class="tb cl">
<li<?php if($_GET['view'] == 'heats') { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=poll&amp;view=heats&amp;orderby=<?php echo $orderby;?>">�ȶ�����</a></li>
<li<?php if($_GET['view'] == 'favtimes') { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=poll&amp;view=favtimes&amp;orderby=<?php echo $orderby;?>">�ղ�����</a></li>
<li<?php if($_GET['view'] == 'sharetimes') { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=poll&amp;view=sharetimes&amp;orderby=<?php echo $orderby;?>">��������</a></li>
</ul>
<p id="before" class="tbmu">
<a href="misc.php?mod=ranklist&amp;type=poll&amp;view=<?php echo $_GET['view'];?>&amp;orderby=thisweek" id="604800" <?php if($orderby == 'thisweek') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=poll&amp;view=<?php echo $_GET['view'];?>&amp;orderby=thismonth" id="2592000" <?php if($orderby == 'thismonth') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=poll&amp;view=<?php echo $_GET['view'];?>&amp;orderby=today" id="86400" <?php if($orderby == 'today') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=poll&amp;view=<?php echo $_GET['view'];?>&amp;orderby=all" id="all" <?php if($orderby == 'all') { ?>class="a"<?php } ?> />ȫ��</a>
</p>
<?php if($polllist) { ?>
<ul class="el pll"><?php if(is_array($polllist)) foreach($polllist as $poll) { ?><li>
<div class="t"><?php if($poll['rank'] <= 3) { ?><img src="<?php echo IMGDIR;?>/rank_<?php echo $poll['rank'];?>.gif" alt="<?php echo $poll['rank'];?>" /><?php } else { ?><?php echo $poll['rank'];?><?php } ?></div>
<div class="cl">
<div class="u z">
<a href="home.php?mod=space&amp;uid=<?php echo $poll['authorid'];?>" class="avt" target="_blank"><?php echo $poll['avatar'];?></a>
<p class="mtn"><a href="home.php?mod=space&amp;uid=<?php echo $poll['authorid'];?>" target="_blank"><?php echo $poll['author'];?></a></p>
</div>
<div class="s y">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $poll['tid'];?>" class="joins" target="_blank">
<span><?php echo $poll['voters'];?></span>�˲���
</a>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $poll['tid'];?>" class="go" target="_blank">ȥͶƱ</a>
</div>
<div class="c">
<h4 class="h"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $poll['tid'];?>" target="_blank"><?php echo $poll['subject'];?></a></h4>
<ol><?php if(is_array($poll['pollpreview'])) foreach($poll['pollpreview'] as $item) { ?><li><?php echo $item;?></li>
<?php } ?>
<li style="list-style-type: none;">...</li>
</ol>
<div class="mtn xg1">
<?php if($_GET['view'] == 'favtimes') { ?>�ղ� <?php echo $poll['favtimes'];?>
<?php } elseif($_GET['view'] == 'sharetimes') { ?>���� <?php echo $poll['sharetimes'];?>
<?php } else { ?>�ȶ� <?php echo $poll['heats'];?><?php } ?>
<span class="pipe">|</span>
<?php echo $poll['dateline'];?>
</div>
</div>
</div>
</li>
<?php } ?>
</ul>
<div class="pgs cl mtm"><?php echo $multi;?></div>
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