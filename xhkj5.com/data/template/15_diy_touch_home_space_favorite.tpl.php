<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_favorite');?><?php include template('common/header'); ?><!-- header start -->
<header class="header">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1" class="goBack z"></a>
<h1><?php if($_GET['type'] == 'forum') { ?>�ղذ��<?php } else { ?>�ղ�����<?php } ?></h1>
</div>
</header>

<div class="forumListTab cfix">
<ul>
<li style="width:50%;"><a <?php if($_GET['type'] == 'thread') { ?>class="cur"<?php } ?> href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=favorite&amp;view=me&amp;type=thread">�ղ�����</a></li>
<li style="width:50%;"><a <?php if($_GET['type'] == 'forum') { ?>class="cur"<?php } ?> href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=favorite&amp;view=me&amp;type=forum">�ղذ��</a></li>
</ul>
</div>

<!-- main collectlist start -->
<div class="fav_list mt20">
<?php if($_GET['type'] == 'forum') { ?>
<ul>
<?php if($list) { if(is_array($list)) foreach($list as $k => $value) { ?><li>
<a class="favTit" href="<?php echo $value['url'];?>"><?php echo $value['title'];?></a>
<p><a class="y" id="a_delete_<?php echo $k;?>" href="home.php?mod=spacecp&amp;ac=favorite&amp;op=delete&amp;favid=<?php echo $k;?>" onclick="showWindow(this.id, this.href, 'get', 0);">ɾ��</a> �ղ�ʱ�䣺<?php echo dgmdate($value[dateline], 'u');?></p>
</li>
<?php } } else { ?>
<li class="noData">����û������κ��ղ�</li>
<?php } ?>

</ul>
<?php } else { ?>
<ul>
<?php if($list) { if(is_array($list)) foreach($list as $k => $value) { ?><li>
<a class="favTit" href="<?php echo $value['url'];?>"><?php echo $value['title'];?></a>
<p><a class="y" id="a_delete_<?php echo $k;?>" href="home.php?mod=spacecp&amp;ac=favorite&amp;op=delete&amp;favid=<?php echo $k;?>" onclick="showWindow(this.id, this.href, 'get', 0);">ɾ��</a> �ղ�ʱ�䣺<?php echo dgmdate($value[dateline], 'u');?></p>
</li>
<?php } } else { ?>
<li class="noData">����û������κ��ղ�</li>
<?php } ?>
</ul>
<?php } ?>
</div>
<!-- main collectlist end -->
<?php echo $multi;?><?php $nofooter = true;?><?php include template('common/btfixed'); include template('common/footer'); ?>