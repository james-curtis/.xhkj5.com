<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('collection_mycollection');
0
|| checktplrefresh('./template/default/forum/collection_mycollection.htm', './template/default/forum/collection_nav.htm', 1523044655, '2', './data/template/2_2_forum_collection_mycollection.tpl.php', './template/ymg6.com_1490552828', 'forum/collection_mycollection')
|| checktplrefresh('./template/default/forum/collection_mycollection.htm', './template/default/forum/collection_list.htm', 1523044655, '2', './data/template/2_2_forum_collection_mycollection.tpl.php', './template/ymg6.com_1490552828', 'forum/collection_mycollection')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="forum.php?mod=collection">����</a> <em>&rsaquo;</em>
<a href="forum.php?mod=collection&amp;op=my">�ҵ�ר��</a>
</div>
</div>

<div id="ct" class="wp cl">
<div class="bm">
<div class="tb tb_h cl"><ul>
<?php if(helper_access::check_module('collection')) { ?>
<li class="y o"><a href="forum.php?mod=collection&amp;action=edit">������ר��</a></li>
<?php } ?>
<li<?php if(!$op && !$tid) { ?> class="a"<?php } ?>><a href="forum.php?mod=collection">�Ƽ�ר��</a></li>
<li<?php if($op == 'all') { ?> class="a"<?php } ?>><a href="forum.php?mod=collection&amp;op=all">����ר��</a></li>
<li<?php if($op == 'my') { ?> class="a"<?php } ?>><a href="forum.php?mod=collection&amp;op=my">�ҵ�ר��</a></li>
<?php if(!$op && $tid) { ?><li class="a"><a href="forum.php?mod=collection&amp;tid=<?php echo $tid;?>">���ר��</a></li><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['collection_nav_extra'])) echo $_G['setting']['pluginhooks']['collection_nav_extra'];?>
</ul></div>
<div class="bm_c">
<?php if(!empty($_G['setting']['pluginhooks']['collection_index_top'])) echo $_G['setting']['pluginhooks']['collection_index_top'];?><?php if(count($collectiondata) > 0) { ?>
<div class="clct_list cl"><?php if(is_array($collectiondata)) foreach($collectiondata as $collectionvalues) { ?><div class="xld xlda cl">
<dl>
<dd class="m hm">
<a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $collectionvalues['ctid'];?><?php if($op) { ?>&amp;fromop=<?php echo $op;?><?php } if($tid) { ?>&amp;fromtid=<?php echo $tid;?><?php } ?>">
<strong class="xi2" <?php if($collectionvalues['displaynum'] > 999999) { ?>style="font-size: 10px;"<?php } ?>><?php echo $collectionvalues['displaynum'];?></strong>
<span style="color: #FFF"><?php if($orderby=='commentnum') { ?>����<?php } elseif($orderby=='follownum') { ?>����<?php } else { ?>����<?php } ?></span>
</a>
</dd>
<dt class="xw1">
<?php if($op == 'my') { if($collectionvalues['uid'] == $_G['uid']) { ?>
<span class="ctag ctag0">�Ҵ�����</span>
<?php } elseif(in_array($collectionvalues['ctid'], $twctid)) { ?>
<span class="ctag ctag1">�Ҳ����</span>
<?php } else { ?>
<span class="ctag ctag2">�Ҷ��ĵ�</span>
<?php } } ?>
<div>
<a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $collectionvalues['ctid'];?><?php if($op) { ?>&amp;fromop=<?php echo $op;?><?php } if($tid) { ?>&amp;fromtid=<?php echo $tid;?><?php } ?>" class="xi2" <?php if($collectionvalues['updated'] && $op == 'my') { ?>style='color:red;'<?php } ?>><?php echo $collectionvalues['name'];?></a>
<?php if($collectionvalues['arraykeyword']) { ?>
<span class="ctag_keyword"><?php $keycount=0;?><?php if(is_array($collectionvalues['arraykeyword'])) foreach($collectionvalues['arraykeyword'] as $unique_keyword) { if($keycount) { ?>,&nbsp;<?php } ?><a href="search.php?mod=<?php if($_G['setting']['search']['collection']['status']) { ?>collection<?php } else { ?>forum<?php } ?>&amp;srchtxt=<?php echo rawurlencode($unique_keyword); ?>&amp;formhash=<?php echo FORMHASH;?>&amp;searchsubmit=true&amp;source=collectionsearch" target="_blank" class="xi2"><?php echo $unique_keyword;?></a><?php $keycount++;?><?php } ?>
</span>
<?php } ?>
</div>
</dt>
<dd>
<p><?php echo $collectionvalues['shortdesc'];?></p>
<p>
<?php if($orderby=='commentnum') { ?>
���� <?php echo $collectionvalues['follownum'];?>, ���� <?php echo $collectionvalues['threadnum'];?>
<?php } elseif($orderby=='follownum') { ?>
���� <?php echo $collectionvalues['threadnum'];?>, ���� <?php echo $collectionvalues['commentnum'];?>
<?php } else { ?>
���� <?php echo $collectionvalues['follownum'];?>, ���� <?php echo $collectionvalues['commentnum'];?>
<?php } ?>
</p>
<p class="xg1"><a href="home.php?mod=space&amp;uid=<?php echo $collectionvalues['uid'];?>"><?php echo $collectionvalues['username'];?></a> ����, ������ <?php echo $collectionvalues['lastupdate'];?></p>
<p>
<?php if($collectionvalues['lastpost']) { ?>
�������� <a href="forum.php?mod=viewthread&amp;tid=<?php echo $collectionvalues['lastpost'];?>" class="xi2"><?php echo $collectionvalues['lastsubject'];?></a>
<?php } ?>
</p>
</dd>
</dl>
</div>
<?php } ?>
</div>
<?php } else { ?>
<div class="emp">��û����ר��������<a href="forum.php?mod=collection&amp;action=edit">����</a>��</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['collection_index_bottom'])) echo $_G['setting']['pluginhooks']['collection_index_bottom'];?>
</div>
</div>
</div><?php include template('common/footer'); ?>