<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('activity');
0
|| checktplrefresh('./template/default/ranklist/activity.htm', './template/default/ranklist/side_left.htm', 1525969000, 'diy', './data/template/3_diy_ranklist_activity.tpl.php', './template/comiis_nby', 'ranklist/activity')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="misc.php?mod=ranklist">����</a> <em>&rsaquo;</em>
�����
</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--[diy=diyranklisttop]--><div id="diyranklisttop" class="area"></div><!--[/diy]-->

<div class="ct2_a wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<h1 class="mt">�����</h1>
<ul class="tb cl">
<li<?php if($_GET['view'] == 'heats') { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=activity&amp;view=heats&amp;orderby=<?php echo $orderby;?>">�ȶ�����</a></li>
<li<?php if($_GET['view'] == 'favtimes') { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=activity&amp;view=favtimes&amp;orderby=<?php echo $orderby;?>">�ղ�����</a></li>
<li<?php if($_GET['view'] == 'sharetimes') { ?> class="a"<?php } ?>><a href="misc.php?mod=ranklist&amp;type=activity&amp;view=sharetimes&amp;orderby=<?php echo $orderby;?>">��������</a></li>
</ul>
<p id="before" class="tbmu">
<a href="misc.php?mod=ranklist&amp;type=activity&amp;view=<?php echo $_GET['view'];?>&amp;orderby=thismonth" id="2592000" <?php if($orderby == 'thismonth') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=activity&amp;view=<?php echo $_GET['view'];?>&amp;orderby=thisweek" id="604800" <?php if($orderby == 'thisweek') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=activity&amp;view=<?php echo $_GET['view'];?>&amp;orderby=today" id="86400" <?php if($orderby == 'today') { ?>class="a"<?php } ?> />����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=activity&amp;view=<?php echo $_GET['view'];?>&amp;orderby=all" id="all" <?php if($orderby == 'all') { ?>class="a"<?php } ?> />ȫ��</a>
</p>
<?php if($activitylist) { ?>
<table cellpadding="0" cellspacing="0" class="acl"><?php if(is_array($activitylist)) foreach($activitylist as $activity) { ?><tr>
<td width="35" style="padding-left: 10px;"><?php if($activity['rank'] <= 3) { ?><img src="<?php echo IMGDIR;?>/rank_<?php echo $activity['rank'];?>.gif" alt="<?php echo $activity['rank'];?>" /><?php } else { ?><?php echo $activity['rank'];?><?php } ?></td>
<td class="type"><?php if($activity['aid']) { ?><img src="<?php echo $activity['attachurl'];?>" width="80" alt="" /><?php } else { ?><img src="<?php echo IMGDIR;?>/nophotosmall.gif" alt="nophoto" width="80" height="80" /><?php } ?></td>
<td>
<h4><a href="forum.php?mod=viewthread&amp;tid=<?php echo $activity['tid'];?>" target="_blank"><?php echo $activity['subject'];?></a></h4>
<p class="mbn">�ʱ��: <?php echo $activity['starttimefrom'];?><?php if($activity['starttimeto']) { ?> - <?php echo $activity['starttimeto'];?><?php } ?> <?php if($activity['has_expiration']) { ?><span class="xg1">������ֹ</span><?php } ?></p>
<p><?php echo $activity['message'];?></p>
<p class="xg1">
<?php if($_GET['view'] == 'favtimes') { ?>�ղ� <?php echo $activity['favtimes'];?>
<?php } elseif($_GET['view'] == 'sharetimes') { ?>���� <?php echo $activity['sharetimes'];?>
<?php } else { ?>�ȶ� <?php echo $activity['heats'];?><?php } ?>
</p>
</td>
<td class="addr">
<strong><?php echo $activity['class'];?></strong><br />
<?php echo $activity['place'];?><br />
<strong>���� <em class="xi1"><?php echo $activity['applynumber'];?></em> �˲μ�</strong><br />
<?php echo $activity['replies'];?> ������
</td>
<td class="orgr">
<ul class="ml mls cl">
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $activity['authorid'];?>" class="avt" target="_blank"><?php echo avatar($activity['authorid'],middle);?></a>
<p><a title="<?php echo $thread['author'];?>" href="home.php?mod=space&amp;uid=<?php echo $activity['authorid'];?>" target="_blank"><?php echo $activity['author'];?></a></p>
</li>
</ul>
</td>
</tr>
<?php } ?>
</table>
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