<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forum');
0
|| checktplrefresh('./template/xhkj5.com_iuni/touch/search/forum.htm', './template/xhkj5.com_iuni/touch/search/pubsearch.htm', 1524238287, '13', './data/template/15_13_touch_search_forum.tpl.php', './template/xhkj5.com_iuni', 'touch/search/forum')
|| checktplrefresh('./template/xhkj5.com_iuni/touch/search/forum.htm', './template/xhkj5.com_iuni/touch/search/thread_list.htm', 1524238287, '13', './data/template/15_13_touch_search_forum.tpl.php', './template/xhkj5.com_iuni', 'touch/search/forum')
;?><?php include template('common/header'); ?><!-- header start -->
<header class="header">
<?php if($_G['setting']['domain']['app']['mobile']) { $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<a class="goBack fl" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $nav;?>">����</a>
<h1>����</h1>
</header>
<!-- header end -->

<form id="searchform" class="searchform" method="post" autocomplete="off" action="search.php?mod=forum&amp;mobile=2">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" /><?php if(!empty($srchtype)) { ?><input type="hidden" name="srchtype" value="<?php echo $srchtype;?>" /><?php } ?>
<div class="search">
<input value="<?php echo $keyword;?>" autocomplete="off" class="inp" name="srchtxt" id="scform_srchtxt" value="" placeholder="��������">
<div class="scbar_btn_td"><input type="hidden" name="searchsubmit" value="yes"><input type="submit" value="����" class="btn1" id="scform_submit"></div>
</div><?php $policymsgs = $p = '';?><?php if(is_array($_G['setting']['creditspolicy']['search'])) foreach($_G['setting']['creditspolicy']['search'] as $id => $policy) { ?><?php
$policymsg = <<<EOF

EOF;
 if($_G['setting']['extcredits'][$id]['img']) { 
$policymsg .= <<<EOF
{$_G['setting']['extcredits'][$id]['img']} 
EOF;
 } 
$policymsg .= <<<EOF
{$_G['setting']['extcredits'][$id]['title']} {$policy} {$_G['setting']['extcredits'][$id]['unit']}
EOF;
?><?php $policymsgs .= $p.$policymsg;$p = ', ';?><?php } if($policymsgs) { ?><p>ÿ����һ���������۳� <?php echo $policymsgs;?></p><?php } ?>
</form>

<?php if(!empty($searchid) && submitcheck('searchsubmit', 1)) { ?><div class="searchList">
<h2 class="thread_tit"><?php if($keyword) { ?>���: <em>�ҵ� ��<span class="emfont"><?php echo $keyword;?></span>�� ������� <?php echo $index['num'];?> ��</em> <?php if($modfid) { ?><a href="forum.php?mod=modcp&amp;action=thread&amp;fid=<?php echo $modfid;?>&amp;keywords=<?php echo $modkeyword;?>&amp;submit=true&amp;do=search&amp;page=<?php echo $page;?>" target="_blank">����������</a><?php } } else { ?>���: <em>�ҵ�������� <?php echo $index['num'];?> ��</em><?php } ?></h2>
<?php if(empty($threadlist)) { ?>
<ul>
<li class="noData">�Բ���û���ҵ�ƥ������</li>
</ul>
<?php } else { ?>
<ul class="pb"><?php if(is_array($threadlist)) foreach($threadlist as $thread) { ?><li>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['realtid'];?>&amp;highlight=<?php echo $index['keywords'];?>" target="_blank" <?php echo $thread['highlight'];?>><?php echo $thread['subject'];?></a>
</li>
<?php } ?>
</ul>
<?php } ?>
<?php echo $multipage;?>
</div>


<?php } ?>

<div class="btFixed">
<ul>
<li><a class="btHome <?php if(CURSCRIPT == 'portal' && CURMODULE == 'index') { ?>cur<?php } ?>" href="portal.php"><span></span>��ҳ</a></li>
<li><a class="btForum <?php if(CURSCRIPT == 'forum' && CURMODULE == 'index') { ?>cur<?php } ?>" href="forum.php?forumlist=1&amp;mobile=2"><span></span>��̳</a></li>
<li><a class="btPost" href="forum.php?mod=misc&amp;action=nav">����</a></li>
<li><a class="btSearch <?php if(CURSCRIPT == 'search') { ?>cur<?php } ?>" href="search.php?mod=forum"><span></span>����</a></li>
<li><a class="btPerson <?php if(CURSCRIPT == 'home') { ?>cur<?php } ?>" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1"><span></span>�ҵ�</a></li>
</ul>
</div><?php include template('common/footer'); ?>