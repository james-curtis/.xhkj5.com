<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('viewthread');
0
|| checktplrefresh('data/diy/./template/comiis_nby//forum/viewthread.htm', './template/comiis_nby/forum/viewthread_node.htm', 1524236933, 'diy', './data/template/3_diy_forum_viewthread.tpl.php', 'data/diy/./template/comiis_nby/', 'forum/viewthread')
|| checktplrefresh('data/diy/./template/comiis_nby//forum/viewthread.htm', './template/comiis_nby/forum/viewthread_fastpost.htm', 1524236933, 'diy', './data/template/3_diy_forum_viewthread.tpl.php', 'data/diy/./template/comiis_nby/', 'forum/viewthread')
|| checktplrefresh('data/diy/./template/comiis_nby//forum/viewthread.htm', './template/comiis_nby/common/comiis_navss.htm', 1524236933, 'diy', './data/template/3_diy_forum_viewthread.tpl.php', 'data/diy/./template/comiis_nby/', 'forum/viewthread')
|| checktplrefresh('data/diy/./template/comiis_nby//forum/viewthread.htm', './template/comiis_nby/forum/viewthread_node_body.htm', 1524236933, 'diy', './data/template/3_diy_forum_viewthread.tpl.php', 'data/diy/./template/comiis_nby/', 'forum/viewthread')
|| checktplrefresh('data/diy/./template/comiis_nby//forum/viewthread.htm', './template/default/common/seditor.htm', 1524236933, 'diy', './data/template/3_diy_forum_viewthread.tpl.php', 'data/diy/./template/comiis_nby/', 'forum/viewthread')
|| checktplrefresh('data/diy/./template/comiis_nby//forum/viewthread.htm', './template/default/forum/seccheck_post.htm', 1524236933, 'diy', './data/template/3_diy_forum_viewthread.tpl.php', 'data/diy/./template/comiis_nby/', 'forum/viewthread')
|| checktplrefresh('data/diy/./template/comiis_nby//forum/viewthread.htm', './template/default/common/upload.htm', 1524236933, 'diy', './data/template/3_diy_forum_viewthread.tpl.php', 'data/diy/./template/comiis_nby/', 'forum/viewthread')
|| checktplrefresh('data/diy/./template/comiis_nby//forum/viewthread.htm', './template/default/common/seccheck.htm', 1524236933, 'diy', './data/template/3_diy_forum_viewthread.tpl.php', 'data/diy/./template/comiis_nby/', 'forum/viewthread')
;
block_get('40,39,48,47,41,42,43,44,45,46');?><?php include template('common/header'); if($close_leftinfo == 0 && !($_GET['diy'] == 'yes' && check_diy_perm($topic))) { $comiis_view_zlb = 0;?><?php } ?>
<script type="text/javascript">var fid = parseInt('<?php echo $_G['fid'];?>'), tid = parseInt('<?php echo $_G['tid'];?>');</script>
<?php if($modmenu['thread'] || $modmenu['post']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(<?php echo $_G['setting']['zoomstatus'];?>);var imagemaxwidth = '<?php echo $_G['setting']['imagemaxwidth'];?>';var aimgcount = new Array();</script>
<style id="diy_style" type="text/css">#portal_block_43 {  margin-top:5px !important;margin-right:0px !important;margin-bottom:12px !important;margin-left:0px !important;}#portal_block_40 {  margin-top:14px !important;margin-right:0px !important;margin-bottom:0px !important;margin-left:14px !important;}</style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->
<?php if(!$close_leftinfo) { ?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?> <em>&rsaquo;</em> <a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>"><?php echo $_G['forum_thread']['short_subject'];?></a>
</div>
</div>
<?php } ?>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<?php if($close_leftinfo) { ?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?> <em>&rsaquo;</em> <a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>"><?php echo $_G['forum_thread']['short_subject'];?></a>
</div>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_top'])) echo $_G['setting']['pluginhooks']['viewthread_top'];?><?php echo adshow("text/wp a_t");?><?php } else { ?>
<div id="pgt" class="pgs mbm cl">
<div class="pgt"><?php echo $multipage;?></div>
<span class="y pgb"<?php if($_G['setting']['visitedforums']) { ?> id="visitedforums" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'34'})"<?php } ?>><a href="<?php echo $upnavlink;?>">�����б�</a></span>
<?php if($_G['forum']['threadsorts'] && $_G['forum']['threadsorts']['templatelist']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $name) { ?><button id="newspecial" class="pn pnc" onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>&extra=<?php echo $extra;?>&sortid=<?php echo $id;?>'"><strong>��Ҫ<?php echo $name;?></strong></button>
<?php } } else { if(!$_G['forum_thread']['is_archived']) { ?><a id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> href="javascript:;" title="������"><img src="<?php echo IMGDIR;?>/pn_post.png" alt="������" /></a><?php } } if($allowpostreply && !$_G['forum_thread']['archiveid']) { ?>
<a id="post_reply" onclick="showWindow('reply', 'forum.php?mod=post&action=reply&fid=<?php echo $_G['fid'];?>&tid=<?php echo $_G['tid'];?>')" href="javascript:;" title="�ظ�"><img src="<?php echo IMGDIR;?>/pn_reply.png" alt="�ظ�" /></a>
<?php } if($modmenu['thread']) { ?>
<a href="javascript:;" id="comiis_guanli" onmouseover="showMenu({'ctrlid':'comiis_guanli'});"><img src="<?php echo IMGDIR;?>/pn_guanli.png" alt="���ӹ���" /></a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postbutton_top'])) echo $_G['setting']['pluginhooks']['viewthread_postbutton_top'];?>
</div>
<?php } ?>
<div class="wp">
<!--[diy=diy1s]--><div id="diy1s" class="area"></div><!--[/diy]-->
</div>
<div class="boardnav<?php if($comiis_view_zlb==1) { ?>l<?php } elseif($comiis_view_zlb==2) { ?>r<?php } ?>">
<?php if($comiis_view_zlb>0) { $leftside=0;?><DIV class="comiis_width">
<DIV class="comiis_rk">
<DIV class="comiis_lp">
<?php } ?>
<div id="ct" class="wp cl">
<?php if($_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])) { ?>
<ul class="p_pop" id="newspecial_menu" style="display: none">
<?php if(!$_G['forum']['allowspecialonly']) { ?><li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>">��������</a></li><?php } if($_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $threadsorts) { if($_G['forum']['threadsorts']['show'][$id]) { ?>
<li class="popupmenu_option"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;sortid=<?php echo $id;?>"><?php echo $threadsorts;?></a></li>
<?php } } } if($_G['group']['allowpostpoll']) { ?><li class="poll"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1">����ͶƱ</a></li><?php } if($_G['group']['allowpostreward']) { ?><li class="reward"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3">��������</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li class="debate"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5">�������</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li class="activity"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=4">����</a></li><?php } if($_G['group']['allowposttrade']) { ?><li class="trade"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=2">������Ʒ</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li class="popupmenu_option"<?php if($_G['setting']['threadplugins'][$tpid]['icon']) { ?> style="background-image:url(source/plugin/<?php echo $tpid;?>/<?php echo $_G['setting']['threadplugins'][$tpid]['icon'];?>)"<?php } ?>><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } ?>
</ul>
<?php } if($modmenu['post']) { ?>
<div id="mdly" class="fwinmask" style="display:none;z-index:350;">
<table cellspacing="0" cellpadding="0" class="fwin">
<tr>
<td class="t_l"></td>
<td class="t_c"></td>
<td class="t_r"></td>
</tr>
<tr>
<td class="m_l">&nbsp;&nbsp;</td>
<td class="m_c">
<div class="f_c">
<div class="c">
<h3>ѡ��&nbsp;<strong id="mdct" class="xi1"></strong>&nbsp;ƪ: </h3>
<?php if($_G['forum']['ismoderator']) { if($_G['group']['allowwarnpost']) { ?><a href="javascript:;" onclick="modaction('warn')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowbanpost']) { ?><a href="javascript:;" onclick="modaction('banpost')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowdelpost'] && !$rushreply) { ?><a href="javascript:;" onclick="modaction('delpost')">ɾ��</a><span class="pipe">|</span><?php } } if($_G['forum']['ismoderator'] && $_G['group']['allowstickreply'] || $_G['forum_thread']['authorid'] == $_G['uid']) { ?><a href="javascript:;" onclick="modaction('stickreply')">�ö�</a><span class="pipe">|</span><?php } if($_G['forum_thread']['pushedaid'] && $allowpostarticle) { ?><a href="javascript:;" onclick="modaction('pushplus', '', 'aid=<?php echo $_G['forum_thread']['pushedaid'];?>', 'portal.php?mod=portalcp&ac=article&op=pushplus')">��������</a><span class="pipe">|</span><?php } ?>
</div>
</div>
</td>
<td class="m_r"></td>
</tr>
<tr>
<td class="b_l"></td>
<td class="b_c"></td>
<td class="b_r"></td>
</tr>
</table>
</div>
<?php } if($modmenu['thread']) { ?>
<div id="comiis_guanli_menu" class="p_pop kmp_pop" style="display: none;"><?php $modopt=0;?><?php if($_G['forum']['ismoderator']) { if($_G['group']['allowdelpost']) { $modopt++?><a href="javascript:;" onclick="modthreads(3, 'delete')">ɾ������</a><span class="pipe">|</span><?php } if($_G['group']['allowbumpthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(3, 'bump')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowstickthread'] && ($_G['forum_thread']['displayorder'] <= 3 || $_G['adminid'] == 1) && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(1, 'stick')">�ö�</a><span class="pipe">|</span><?php } if($_G['group']['allowlivethread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('live')">ֱ��</a><span class="pipe">|</span><?php } if($_G['group']['allowhighlightthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(1, 'highlight')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowdigestthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(1, 'digest')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowrecommendthread'] && !empty($_G['forum']['modrecommend']['open']) && $_G['forum']['modrecommend']['sort'] != 1 && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(1, 'recommend')">�Ƽ�</a><span class="pipe">|</span><?php } if($_G['group']['allowstampthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('stamp')">ͼ��</a><span class="pipe">|</span><?php } if($_G['group']['allowstamplist'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('stamplist')">ͼ��</a><span class="pipe">|</span><?php } if($_G['group']['allowclosethread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modthreads(4)"><?php if(!$_G['forum_thread']['closed']) { ?>�ر�<?php } else { ?>��<?php } ?></a><span class="pipe">|</span><?php } if($_G['group']['allowmovethread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modthreads(2, 'move')">�ƶ�</a><span class="pipe">|</span><?php } if($_G['group']['allowedittypethread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(2, 'type')">����</a><span class="pipe">|</span><?php } if(!$_G['forum_thread']['special'] && !$_G['forum_thread']['is_archived']) { if($_G['group']['allowcopythread'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modaction('copy')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowmergethread'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modaction('merge')">�ϲ�</a><span class="pipe">|</span><?php } if($_G['group']['allowrefund'] && $_G['forum_thread']['price'] > 0) { $modopt++?><a href="javascript:;" onclick="modaction('refund')">��������</a><span class="pipe">|</span><?php } } if($_G['group']['allowsplitthread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modaction('split')">�ָ�</a><span class="pipe">|</span><?php } if($_G['group']['allowrepairthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('repair')">�޸�</a><span class="pipe">|</span><?php } if($_G['forum_thread']['is_archived'] && $_G['adminid'] == 1) { $modopt++?><a href="javascript:;" onclick="modaction('restore', '', 'archiveid=<?php echo $_G['forum_thread']['archiveid'];?>')">ȡ���浵</a><span class="pipe">|</span><?php } if($_G['forum_firstpid']) { if($_G['group']['allowwarnpost']) { $modopt++?><a href="javascript:;" onclick="modaction('warn', '<?php echo $_G['forum_firstpid'];?>')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowbanpost']) { $modopt++?><a href="javascript:;" onclick="modaction('banpost', '<?php echo $_G['forum_firstpid'];?>')">����</a><span class="pipe">|</span><?php } } if($_G['group']['allowremovereward'] && $_G['forum_thread']['special'] == 3 && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('removereward')">�Ƴ�����</a><span class="pipe">|</span><?php } if($_G['forum']['status'] == 3 && in_array($_G['adminid'], array('1','2')) && $_G['forum_thread']['closed'] < 1) { ?><a href="javascript:;" onclick="modthreads(5, 'recommend_group');return false;">�Ƶ����</a><span class="pipe">|</span><?php } if($_G['group']['allowmanagetag']) { ?><a href="javascript:;" onclick="showWindow('mods', 'forum.php?mod=tag&op=manage&tid=<?php echo $_G['tid'];?>', 'get', 0)">��ǩ</a><span class="pipe">|</span><?php } if($_G['group']['alloweditusertag']) { ?><a href="javascript:;" onclick="showWindow('usertag', 'forum.php?mod=misc&action=usertag&tid=<?php echo $_G['tid'];?>', 'get', 0)">�û���ǩ</a><span class="pipe">|</span><?php } } if($allowpusharticle && $allowpostarticle) { $modopt++?><a href="portal.php?mod=portalcp&amp;ac=article&amp;from_idtype=tid&amp;from_id=<?php echo $_G['tid'];?>">��������</a><span class="pipe">|</span><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_modoption'])) echo $_G['setting']['pluginhooks']['viewthread_modoption'];?>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_beginline'])) echo $_G['setting']['pluginhooks']['viewthread_beginline'];?>
<div id="postlist" class="pl bm efia comiis_x0<?php if($close_leftinfo) { ?> comiis_dx1<?php } ?>">
<?php if($close_leftinfo) { ?>
<div class="comiis_viewbt cl">
<?php if($_G['setting']['close_leftinfo_userctrl']) { ?>
<div style="position:absolute;left:-9px;top:-8px;">
<?php if(!$close_leftinfo) { ?>
<a onclick="setcookie('close_leftinfo', 1);location.reload();" title="�������" href="javascript:;"><img src="<?php echo IMGDIR;?>/control_l.png" alt="�������" class="vm" /></a>
<?php } else { ?>
<a onclick="setcookie('close_leftinfo', 2);location.reload();" title="�������" href="javascript:;"><img src="<?php echo IMGDIR;?>/control_r.png" alt="�������" class="vm" /></a>
<?php } ?>
</div>
<?php } if($close_leftinfo && $modmenu['thread']) { ?>
<div style="position:absolute;left:8px;top:8px;">		
<a href="javascript:;" id="comiis_guanli" onmouseover="showMenu({'ctrlid':'comiis_guanli'});"><img src="<?php echo IMGDIR;?>/comiis_nbygl.gif" alt="���ӹ���" /></a>		
</div>
<?php } ?>
<div style="clear:both;"></div>
<div class="comiis_viewbt_box cl">
<?php if($comiis_view_tit_avt == 1) { ?>
<div class="comiis_avt">
<?php if($_G['forum_thread']['authorid'] && $_G['forum_thread']['author']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" title="<?php echo $_G['forum_thread']['author'];?>" target="_blank"><?php echo avatar($_G[forum_thread][authorid],middle);?></a>
<?php } else { if($_G['forum']['ismoderator']) { ?><?php echo avatar(0,middle);?><?php } else { ?><?php echo avatar(0,middle);?><?php } } ?>
</div>
<?php } ?>
<div class="comiis_v_h2<?php if($comiis_view_tit_avt==0 || $comiis_view_tit_avt==2) { ?> kmml0<?php } ?>">	
<h2 class="z">
<?php if($thread['digest'] > 0 && $filter != 'digest') { ?><a herf="javascript:;" title="����" class="km1 kmjh">��</a><?php } if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?><a herf="javascript:;" title="�ö�" class="km1 kmzd">��</a><?php } ?>	
<span id="thread_subject"><?php echo $_G['forum_thread']['subject'];?></span>
</h2>
<span class="z xg1">
<?php if($_G['forum_thread']['displayorder'] == -2) { ?>(�����)
<?php } elseif($_G['forum_thread']['displayorder'] == -3) { ?>(�Ѻ���)
<?php } elseif($_G['forum_thread']['displayorder'] == -4) { ?>(�ݸ�)
<?php if($post['first'] && $post['invisible'] == -3) { ?>
<a href="forum.php?mod=misc&amp;action=pubsave&amp;tid=<?php echo $_G['tid'];?>" class="psave">����</a>
<?php } } if($_G['setting']['threadhidethreshold'] && $_G['forum_thread']['hidden'] >= $_G['setting']['threadhidethreshold']) { ?>						
<?php if($_G['forum_thread']['authorid'] == $_G['uid']) { ?><a href="forum.php?mod=misc&amp;action=hiderecover&amp;tid=<?php echo $_G['tid'];?>&amp;formhash=<?php echo FORMHASH;?>" class="psave" id="hiderecover" title="����ָ���������״̬" onclick="showWindow(this.id, this.href, 'get', 0);">����</a><?php } else { ?>(����)<?php } ?>
&nbsp;
<?php } if($_G['forum_thread']['recommendlevel']) { ?>
&nbsp;<img src="<?php echo IMGDIR;?>/recommend_<?php echo $_G['forum_thread']['recommendlevel'];?>.gif" alt="" title="����ָ�� <?php echo $_G['forum_thread']['recommends'];?>" />
<?php } if($_G['forum_thread']['heatlevel']) { ?>
&nbsp;<img src="<?php echo IMGDIR;?>/hot_<?php echo $_G['forum_thread']['heatlevel'];?>.gif" alt="" title="�ȶ�: <?php echo $_G['forum_thread']['heats'];?>" />
<?php } if($_G['forum_thread']['closed'] == 1) { ?>
&nbsp;<img src="<?php echo IMGDIR;?>/locked.gif" alt="�ر�" title="�ر�" class="vm" />
<?php } if(!IS_ROBOT && $post['warned']) { ?>
<a href="forum.php?mod=misc&amp;action=viewwarning&amp;tid=<?php echo $_G['tid'];?>&amp;uid=<?php echo $post['authorid'];?>" title="�ܵ�����" onclick="showWindow('viewwarning', this.href)"><img src="<?php echo IMGDIR;?>/warning.gif" alt="�ܵ�����" /></a>
<?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?><?php echo $fromuid;?>" onclick="return copyThreadUrl(this, '<?php echo $_G['setting']['bbname'];?>')" <?php if($fromuid) { ?>title="�������ѷ��ʴ����Ӻ����������Ӧ�Ļ��ֽ���"<?php } ?> class="kmcopy">[��������]</a>
</span>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_title_extra'])) echo $_G['setting']['pluginhooks']['viewthread_title_extra'];?>
</div>
<div class="comiis_v_action<?php if($comiis_view_tit_avt==0 || $comiis_view_tit_avt==2) { ?> kmml0<?php } ?>">
<span class="y comiis_v_views">
<em class="views" title="�鿴"><?php echo $_G['forum_thread']['views'];?></em>
<em class="replies" title="�ظ�"><?php echo $_G['forum_thread']['replies'];?></em>			
</span>
<span class="xg1">
<span id="comiis_authi_author_div" class="z"></span>
<?php if(!IS_ROBOT) { ?>
<span class="z">
<?php if($post['invisible'] == 0) { ?><a href="forum.php?mod=viewthread&amp;action=printable&amp;tid=<?php echo $_G['tid'];?>" title="��ӡ" target="_blank"><img src="<?php echo IMGDIR;?>/print.png" alt="��ӡ" class="vm" /></a>
<?php } ?>
<a href="forum.php?mod=redirect&amp;goto=nextoldset&amp;tid=<?php echo $_G['tid'];?>" title="��һ����"><img src="<?php echo IMGDIR;?>/thread-prev.png" alt="��һ����" class="vm" /></a>
<a href="forum.php?mod=redirect&amp;goto=nextnewset&amp;tid=<?php echo $_G['tid'];?>" title="��һ����"><img src="<?php echo IMGDIR;?>/thread-next.png" alt="��һ����" class="vm" /></a>
</span>
<?php } ?>
</span>
</div>
</div>
<?php if($_G['forum_threadstamp']) { ?>
<div id="threadstamp"><img src="<?php echo STATICURL;?>image/stamp/<?php echo $_G['forum_threadstamp']['url'];?>" title="<?php echo $_G['forum_threadstamp']['text'];?>" /></div>
<?php } ?>
</div>
<?php } else { ?>
<div class="bm_h comiis_snvbt">
<?php if($_G['setting']['close_leftinfo_userctrl']) { ?>
<span class="z" style="padding:3px 5px 0 0;">
<?php if(!$close_leftinfo) { ?>
<a onclick="setcookie('close_leftinfo', 1);location.reload();" title="�������" href="javascript:;"><img src="<?php echo IMGDIR;?>/control_l.png" alt="�������" class="vm" /></a>
<?php } else { ?>
<a onclick="setcookie('close_leftinfo', 2);location.reload();" title="�������" href="javascript:;"><img src="<?php echo IMGDIR;?>/control_r.png" alt="�������" class="vm" /></a>
<?php } ?>
</span>
<?php } ?>
<span class="z">
<?php if($_G['page'] > 1) { ?>
<div class="comiis_user">
<?php if($_G['forum_thread']['authorid'] && $_G['forum_thread']['author']) { ?>
<span class="z kmvtx"><a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" title="<?php echo $_G['forum_thread']['author'];?>"><?php echo avatar($_G[forum_thread][authorid],small);?></a></span>
<span class="z">¥��: <a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" title="<?php echo $_G['forum_thread']['author'];?>"><?php echo $_G['forum_thread']['author'];?></a>&nbsp;-&nbsp;</span>
<?php } else { ?>
¥��:
<?php if($_G['forum']['ismoderator']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>">����</a>
<?php } else { ?>
����
<?php } } ?>
</div>
<?php } ?>				
</span>
<h2 class="z">
<?php if($_G['forum_thread']['typeid'] && $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]) { if(!IS_ROBOT && ($_G['forum']['threadtypes']['listable'] || $_G['forum']['status'] == 3)) { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=typeid&amp;typeid=<?php echo $_G['forum_thread']['typeid'];?>">[<?php echo $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']];?>]</a>
<?php } else { ?>
[<?php echo $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']];?>]
<?php } } if($threadsorts && $_G['forum_thread']['sortid']) { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $_G['forum_thread']['sortid'];?>">[<?php echo $_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']];?>]</a>
<?php } ?>
<span id="thread_subject"><?php echo $_G['forum_thread']['subject'];?></span>
</h2>
<span class="z kmfz">
<?php if($_G['forum_thread']['displayorder'] == -2) { ?>(�����)
<?php } elseif($_G['forum_thread']['displayorder'] == -3) { ?>(�Ѻ���)
<?php } elseif($_G['forum_thread']['displayorder'] == -4) { ?>(�ݸ�)
<?php if($post['first'] && $post['invisible'] == -3) { ?>
<a href="forum.php?mod=misc&amp;action=pubsave&amp;tid=<?php echo $_G['tid'];?>" class="psave">����</a>
<?php } } if($_G['setting']['threadhidethreshold'] && $_G['forum_thread']['hidden'] >= $_G['setting']['threadhidethreshold']) { ?>						
<?php if($_G['forum_thread']['authorid'] == $_G['uid']) { ?><a href="forum.php?mod=misc&amp;action=hiderecover&amp;tid=<?php echo $_G['tid'];?>&amp;formhash=<?php echo FORMHASH;?>" class="psave" id="hiderecover" title="����ָ���������״̬" onclick="showWindow(this.id, this.href, 'get', 0);">����</a><?php } else { ?>(����)<?php } ?>
&nbsp;
<?php } if($_G['forum_thread']['recommendlevel']) { ?>
&nbsp;<img src="<?php echo IMGDIR;?>/recommend_<?php echo $_G['forum_thread']['recommendlevel'];?>.gif" alt="" title="����ָ�� <?php echo $_G['forum_thread']['recommends'];?>" />
<?php } if($_G['forum_thread']['heatlevel']) { ?>
&nbsp;<img src="<?php echo IMGDIR;?>/hot_<?php echo $_G['forum_thread']['heatlevel'];?>.gif" alt="" title="�ȶ�: <?php echo $_G['forum_thread']['heats'];?>" />
<?php } if($_G['forum_thread']['closed'] == 1) { ?>
&nbsp;<img src="<?php echo IMGDIR;?>/locked.gif" alt="�ر�" title="�ر�" class="vm" />
<?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?><?php echo $fromuid;?>" onclick="return copyThreadUrl(this, '<?php echo $_G['setting']['bbname'];?>')" <?php if($fromuid) { ?>title="�������ѷ��ʴ����Ӻ����������Ӧ�Ļ��ֽ���"<?php } ?> class="kmcopy">[��������]</a>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_title_extra'])) echo $_G['setting']['pluginhooks']['viewthread_title_extra'];?>
</span>
<?php if(!IS_ROBOT) { ?>
<span class="y comiis_hfs"><strong><?php echo $_G['forum_thread']['allreplies'];?></strong><br>�ظ�</span>
<span class="y comiis_cks"><strong><?php echo $_G['forum_thread']['views'];?></strong><br>�鿴</span>
<span class="y comiis_sxy">
<?php if($post['invisible'] == 0) { ?><a href="forum.php?mod=viewthread&amp;action=printable&amp;tid=<?php echo $_G['tid'];?>" title="��ӡ" target="_blank"><img src="<?php echo IMGDIR;?>/print.png" alt="��ӡ" class="vm" /></a>
<?php } ?>
<a href="forum.php?mod=redirect&amp;goto=nextoldset&amp;tid=<?php echo $_G['tid'];?>" title="��һ����"><img src="<?php echo IMGDIR;?>/thread-prev.png" alt="��һ����" class="vm" /></a>
<a href="forum.php?mod=redirect&amp;goto=nextnewset&amp;tid=<?php echo $_G['tid'];?>" title="��һ����"><img src="<?php echo IMGDIR;?>/thread-next.png" alt="��һ����" class="vm" /></a>
</span>
<?php } ?>
</div>
<?php } if($_G['forum_thread']['replycredit'] > 0 || $rushreply) { ?>
<div id="pl_top"<?php if($rushreply) { ?> class="comiis_qltop"<?php } ?>>
<table cellspacing="0" cellpadding="0">
<?php if($_G['forum_thread']['replycredit'] > 0 ) { ?>
<tr>
<?php if(!$close_leftinfo) { ?>
<td class="pls vm ptm">
<?php } else { ?>
<td class="pls ptm pbm xi1" colspan="2">
<?php } ?>
<img src="<?php echo IMGDIR;?>/thread_prize_s.png" class="hm" alt="��������" />
<strong><?php echo $_G['forum_thread']['replycredit'];?> <?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['title'];?></strong>
<?php if(!$close_leftinfo) { ?>
</td>
<td class="plc ptm pbm xi1">
<?php } else { ?>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php } ?>
�ظ������ɻ�� <?php echo $_G['forum_thread']['replycredit_rule']['extcredits'];?> <?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['title'];?>����! ÿ���� <?php echo $_G['forum_thread']['replycredit_rule']['membertimes'];?> ��<?php if($_G['forum_thread']['replycredit_rule']['random'] > 0) { ?><span class="xg1">(�н����� <?php echo $_G['forum_thread']['replycredit_rule']['random'];?>%)</span><?php } ?>
</td>
</tr>
<?php } if($rushreply) { ?>
<tr>
<?php if(!$close_leftinfo) { ?>
<td class="pls vm ptm">
<img src="<?php echo IMGDIR;?>/rushreply_s.png" class="vm" alt="��¥" />
<strong>��¥</strong>
</td>
<td class="plc ptm pbm xi1">
<?php } else { ?>
<td class="plc ptm pbm xi1" colspan="2">
<img src="<?php echo IMGDIR;?>/rushreply_s.png" class="vm" alt="��¥" />
<?php } if($rushresult['rewardfloor']) { ?>
<span class="y">
<?php if($_G['uid'] == $_G['thread']['authorid'] || $_G['forum']['ismoderator']) { ?><a href="javascript:;" onclick="showWindow('membernum', 'forum.php?mod=ajax&action=get_rushreply_membernum&tid=<?php echo $_G['tid'];?>')" class="y pn xi2"><span>ͳ�Ʋ�������</span></a><?php } if(!$_GET['checkrush']) { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $post['tid'];?>&amp;checkrush=1" rel="nofollow" class="y pn xi2"><span>�鿴����¥��</span></a>
<?php } ?>
</span>
<?php } if($rushresult['creditlimit'] == '') { ?>
����Ϊ��¥������ӭ��¥!&nbsp;
<?php } else { ?>
����Ϊ��¥����<?php echo $rushresult['creditlimit_title'];?>����<?php echo $rushresult['creditlimit'];?>������¥ &nbsp;
<?php } if($rushresult['timer']) { ?>
<span id="rushtimer_<?php echo $thread['tid'];?>"> ������ <span id="rushtimer_body_<?php echo $thread['tid'];?>"></span> <script language="javascript">settimer(<?php echo $rushresult['timer'];?>, 'rushtimer_body_<?php echo $thread['tid'];?>');</script><?php if($rushresult['timertype'] == 'start') { ?> ��ʼ <?php } else { ?> ���� <?php } ?> ��</span>
<?php } if($rushresult['stopfloor']) { ?>
��ֹ¥�㣺<?php echo $rushresult['stopfloor'];?>&nbsp;
<?php } if($rushresult['rewardfloor']) { ?>
����¥��: <?php echo $rushresult['rewardfloor'];?>&nbsp;
<?php } if($rushresult['rewardfloor'] && $_GET['checkrush']) { ?>
<p class="ptn">
<?php if($countrushpost) { ?>[<strong><?php echo $countrushpost;?></strong>]��¥�����н�<?php } else { ?> ��ʱ��û��¥���н� <?php } ?>&nbsp;&nbsp;
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>" class="xi2">������¥��</a>
</p>
<?php } ?>
</td>
</tr>
<?php } ?>
</table>
</div>
<?php } ?>	
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_title_row'])) echo $_G['setting']['pluginhooks']['viewthread_title_row'];?><?php $postcount = 0;?><?php if(is_array($postlist)) foreach($postlist as $post) { if($rushreply && $_GET['checkrush'] && $post['rewardfloor'] != 1) { continue;?><?php } if($close_leftinfo) { ?><div class="comiis_viewbox"><?php } ?>
<div id="post_<?php echo $post['pid'];?>" <?php if($_G['blockedpids'] && $post['inblacklist']) { ?>style="display:none;"<?php } ?> class="comiis_vrx<?php if($close_leftinfo) { ?> comiis_viewbox_nr<?php } ?>"><?php $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);
$postshowavatars = !($_G['setting']['bannedmessages'] & 2 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)));?><?php require_once("./template/comiis_nby/comiis_config.php");?><?php
$authorverifys = <<<EOF

EOF;
 if(is_array($post['verifyicon'])) foreach($post['verifyicon'] as $vid) { 
$authorverifys .= <<<EOF
<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid={$vid}" target="_blank">
EOF;
 if($_G['setting']['verify'][$vid]['icon']) { 
$authorverifys .= <<<EOF
<img src="{$_G['setting']['verify'][$vid]['icon']}" class="vm" alt="{$_G['setting']['verify'][$vid]['title']}" title="{$_G['setting']['verify'][$vid]['title']}" />
EOF;
 } else { 
$authorverifys .= <<<EOF
{$_G['setting']['verify'][$vid]['title']}
EOF;
 } 
$authorverifys .= <<<EOF
</a>

EOF;
 } if(is_array($post['unverifyicon'])) foreach($post['unverifyicon'] as $vid) { 
$authorverifys .= <<<EOF
<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid={$vid}" target="_blank"><img src="{$_G['setting']['verify'][$vid]['unverifyicon']}" class="vm" alt="{$_G['setting']['verify'][$vid]['title']}" title="{$_G['setting']['verify'][$vid]['title']}" /></a>

EOF;
 } 
$authorverifys .= <<<EOF


EOF;
?>
<?php if(!$close_leftinfo && $post['first'] &&  $_G['forum_threadstamp']) { ?>
<div id="threadstamp"><img src="<?php echo STATICURL;?>image/stamp/<?php echo $_G['forum_threadstamp']['url'];?>" title="<?php echo $_G['forum_threadstamp']['text'];?>" /></div>
<?php } if($close_leftinfo) { if(!$post['first'] && $comiis_view_tit_tx==1) { ?>
<div class="comiis_viewbox_tx">
<?php if(!$post['anonymous'] && $postshowavatars && $showavatars) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" class="xi2 z"><?php echo avatar($post['authorid'], 'middle'); ?></a>
<?php } ?>
</div>
<?php } ?>
<div class="comiis_viewthread<?php if($comiis_view_tit_tx!=1) { ?> comiis_kmnotx<?php } if($post['first'] && $_G['forum_thread']['allreplies']!=0) { ?> kmone<?php } ?>"<?php if($post['first'] && $_G['forum_thread']['allreplies']==0) { ?> style="margin-left:0"<?php } ?>>
<?php } if(empty($post['deleted'])) { ?>
<table id="pid<?php echo $post['pid'];?>" class="plhin" summary="pid<?php echo $post['pid'];?>" cellspacing="0" cellpadding="0">
<tr>
<?php if(!$close_leftinfo) { ?>
<td class="pls" rowspan="2">
<div id="favatar<?php echo $post['pid'];?>" class="pls favatar">
<?php echo $post['newpostanchor'];?> <?php echo $post['lastpostanchor'];?>
<?php if($post['authorid'] && $post['username'] && !$post['anonymous']) { ?>
<div class="p_pop blk bui<?php if($_G['setting']['authoronleft']) { ?> comiis_vuimg<?php } ?> card_gender_<?php echo $post['gender'];?>" id="userinfo<?php echo $post['pid'];?>" style="display:none;">
<div class="m z">
<div id="userinfo<?php echo $post['pid'];?>_ma"></div>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_profileside'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_profileside'][$postcount];?>
</div>
<div class="i y">
<div>
<strong><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" class="xi2"<?php if($post['groupcolor']) { ?> style="color: <?php echo $post['groupcolor'];?>"<?php } ?>><?php echo $post['author'];?></a></strong>
<?php if($_G['setting']['vtonlinestatus'] && $post['authorid']) { if(($_G['setting']['vtonlinestatus'] == 2 && $_G['forum_onlineauthors'][$post['authorid']]) || ($_G['setting']['vtonlinestatus'] == 1 && (TIMESTAMP - $post['lastactivity'] <= 10800) && !$post['authorinvisible'])) { ?>
<em>��ǰ����</em>
<?php } else { ?>
<em>��ǰ����</em>
<?php } } ?>
</div><?php viewthread_profile_node('top', $post);?><div class="imicn">
<?php if($post['qq'] && !$post['privacy']['profile']['qq']) { ?><a href="http://wpa.qq.com/msgrd?V=3&amp;Uin=<?php echo $post['qq'];?>&amp;Site=<?php echo $_G['setting']['bbname'];?>&amp;Menu=yes&amp;from=discuz" target="_blank" title="QQ"><img src="<?php echo IMGDIR;?>/qq.gif" alt="QQ" /></a><?php } if($post['icq'] && !$post['privacy']['profile']['icq']) { ?><a href="http://wwp.icq.com/scripts/search.dll?to=<?php echo $post['icq'];?>" target="_blank" title="ICQ"><img src="<?php echo IMGDIR;?>/icq.gif" alt="ICQ" /></a><?php } if($post['yahoo'] && !$post['privacy']['profile']['yahoo']) { ?><a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $post['yahoo'];?>&amp;.src=pg" target="_blank" title="Yahoo"><img src="<?php echo IMGDIR;?>/yahoo.gif" alt="Yahoo!"  /></a><?php } if($post['taobao'] && !$post['privacy']['profile']['taobao']) { ?><a href="javascript:;" onclick="window.open('http://amos.im.alisoft.com/msg.aw?v=2&uid='+encodeURIComponent('<?php echo $post['taobaoas'];?>')+'&site=cntaobao&s=2&charset=utf-8')" title="��������"><img src="<?php echo IMGDIR;?>/taobao.gif" alt="��������" /></a><?php } if($post['site'] && !$post['privacy']['profile']['site']) { ?><a href="<?php echo $post['site'];?>" target="_blank" title="�鿴������վ"><img src="<?php echo IMGDIR;?>/forumlink.gif" alt="�鿴������վ" /></a><?php } ?>
<a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>&amp;do=profile" target="_blank" title="�鿴��ϸ����"><img src="<?php echo IMGDIR;?>/userinfo.gif" alt="�鿴��ϸ����" /></a>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_imicons'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_imicons'][$postcount];?>
<?php if($_G['setting']['magicstatus']) { if(!empty($_G['setting']['magics']['showip'])) { ?>
<a href="home.php?mod=magic&amp;mid=showip&amp;idtype=user&amp;id=<?php echo rawurlencode($post['author']); ?>" id="a_showip_li_<?php echo $post['pid'];?>" class="xi2" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>/image/magic/showip.small.gif" alt="" /> <?php echo $_G['setting']['magics']['showip'];?></a>
<?php } if(!empty($_G['setting']['magics']['checkonline']) && $post['authorid'] != $_G['uid']) { ?>
<a href="home.php?mod=magic&amp;mid=checkonline&amp;idtype=user&amp;id=<?php echo rawurlencode($post['author']); ?>" id="a_repent_<?php echo $post['pid'];?>" class="xi2" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>/image/magic/checkonline.small.gif" alt="" /> <?php echo $_G['setting']['magics']['checkonline'];?></a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_magic_user'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_magic_user'][$postcount];?>
<?php } ?>
</div>
<div id="avatarfeed"><span id="threadsortswait"></span></div>
</div>
</div>
<?php } if($post['authorid'] && $post['username'] && !$post['anonymous']) { ?>
<div>
<?php if(!$postshowavatars) { ?>
<div class="avatar">ͷ������</div>
<?php } elseif($post['avatar'] && $showavatars) { if($post['mobiletype']) { ?>
<div class="mobile-type mobile-type-<?php echo $post['mobiletype'];?>">
<a href="misc.php?mod=mobile" tip="����ͨ���ֻ��ͻ��˷���" onmouseover="showTip(this)"></a>
</div>
<?php } ?>
<div class="avatar"<?php if(!($_G['setting']['threadguestlite'] && !$_G['uid'])) { ?> onmouseover="showauthor(this, 'userinfo<?php echo $post['pid'];?>')"<?php } ?>><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" class="avtm" target="_blank"><?php echo $post['avatar'];?></a></div>
<?php } if($_G['setting']['authoronleft']) { ?>
<div class="pi">
<div class="authi"><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" <?php if($post['groupcolor']) { ?> style="color: <?php echo $post['groupcolor'];?>"<?php } ?>><?php echo $post['author'];?></a> <?php echo $authorverifys;?></div>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_avatar'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_avatar'][$postcount];?>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_sidetop'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_sidetop'][$postcount];?>
<?php if(!($_G['setting']['threadguestlite'] && !$_G['uid'])) { viewthread_profile_node('left', $post);?><?php if($post['authorid'] != $_G['uid']) { ?>
<ul class="comiis_o cl">
<?php if(helper_access::check_module('follow')) { ?>
<li><a href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $post['authorid'];?>" id="followmod_<?php echo $post['authorid'];?>" title="����TA" onclick="showWindow('followmod', this.href, 'get', 0);" class="kmstt">����TA</a></li>
<?php } ?>
<li><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $post['authorid'];?>&amp;touid=<?php echo $post['authorid'];?>&amp;pmid=0&amp;daterange=2&amp;pid=<?php echo $post['pid'];?>&amp;tid=<?php echo $post['tid'];?>" onclick="showWindow('sendpm', this.href);" title="����Ϣ" class="kmfxx">����Ϣ</a></li>
</ul>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_sidebottom'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_sidebottom'][$postcount];?>
<?php } elseif(getstatus($post['status'], 5)) { if($_G['setting']['authoronleft']) { ?>
<div class="pi">
<div class="authi"><a href="javascript:;" class="xw1"><?php echo $post['author'];?></a></div>
</div>
<?php } if($showavatars) { ?>
<div>
<div class="avatar avtm"><a href="javascript:;"><?php echo $post['avatar'];?></a></div>
</div>
<?php } } else { ?>
<div class="pi" style="padding-top:15px;">
<?php if(!$post['authorid']) { ?>
<a href="javascript:;"><?php echo $_G['setting']['anonymoustext'];?> <em><?php echo $post['useip'];?><?php if($post['port']) { ?>:<?php echo $post['port'];?><?php } ?></em></a>
<?php } elseif($post['authorid'] && $post['username'] && $post['anonymous']) { if($_G['forum']['ismoderator']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank"><?php echo $_G['setting']['anonymoustext'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } } else { ?>
<?php echo $post['author'];?> <em>���û��ѱ�ɾ��</em>
<?php } ?>
</div>
<?php } if(($_G['group']['allowedituser'] || $_G['group']['allowbanuser'] || ($_G['forum']['ismoderator'] && $_G['group']['allowviewip'])) && !getstatus($post['status'], 5)) { ?>
<p class="cp_pls cl">
<?php if($_G['forum']['ismoderator'] && $_G['group']['allowviewip']) { ?>
<a href="forum.php?mod=topicadmin&amp;action=getip&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if($_G['forum_auditstatuson']) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>" onclick="ajaxmenu(this, 0, 0, 2);doane(event)">IP</a>
<?php } if($_G['group']['allowedituser']) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?frames=yes&action=members&operation=search&uid=<?php echo $post['authorid'];?>&submit=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $post['authorid'];?><?php } ?>" target="_blank">�༭</a>
<?php } if($_G['group']['allowbanuser']) { if($_G['adminid'] == 1) { ?>
<a href="admin.php?action=members&amp;operation=ban&amp;username=<?php echo $post['usernameenc'];?>&amp;frames=yes" target="_blank">��ֹ</a>
<?php } else { ?>
<a href="forum.php?mod=modcp&amp;action=member&amp;op=ban&amp;uid=<?php echo $post['authorid'];?>" target="_blank">��ֹ</a>
<?php } } ?>
<a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;do=search&amp;searchsubmit=1&amp;users=<?php echo $post['usernameenc'];?>" target="_blank">����</a>
<?php if($_G['adminid'] == 1) { ?>
<a href="forum.php?mod=ajax&amp;action=quickclear&amp;uid=<?php echo $post['authorid'];?>" onclick="showWindow('qclear_<?php echo $post['authorid'];?>', this.href, 'get', 0)">����</a>
<?php } ?>
</p>
<?php } ?>
</div>
</td>
<?php } ?>	
<td class="plc"<?php if($close_leftinfo) { ?> style="width:100%"<?php } ?>>
<?php if($post['first']) { $comiis_first = 1;?><?php } ?>
<div class="pi"<?php if($close_leftinfo) { ?> style="<?php if(!$comiis_view_tit_lz && $post['first']) { ?>display:none;<?php } if(($postcount==0 || $post['first'] || ($comiis_first == 1 && $postcount == 1)) && !$_GET['inajax']) { ?>border-top:none;<?php } ?>"<?php } ?>>
<?php if(!IS_ROBOT && (!$close_leftinfo || $comiis_view_tit_lz || !$post['first'])) { ?>
<strong>
<a href="<?php if($post['first']) { ?>forum.php?mod=viewthread&tid=<?php echo $_G['tid'];?><?php echo $fromuid;?><?php } else { ?>forum.php?mod=redirect&goto=findpost&ptid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?><?php echo $fromuid;?><?php } ?>"  <?php if($fromuid) { ?>title="�������ѷ��ʴ����Ӻ����������Ӧ�Ļ��ֽ���"<?php } ?> id="postnum<?php echo $post['pid'];?>" onclick="setCopy(this.href, '���ӵ�ַ���Ƴɹ�');return false;"<?php if(isset($post['isstick']) && $close_leftinfo) { ?> class="km2"<?php } elseif($post['number'] == -1 && $close_leftinfo) { ?> class="km1"<?php } elseif($post['number'] == 1) { ?> class="km1"<?php } elseif($post['number'] == 2) { ?> class="km2"<?php } elseif($post['number'] == 3) { ?> class="km3"<?php } elseif($post['number'] == 4) { ?> class="km4"<?php } ?>>
<?php if(isset($post['isstick'])) { if(!$close_leftinfo) { ?><img src ="<?php echo IMGDIR;?>/settop.png" title="�ö��ظ�" class="vm" /> <?php } if($close_leftinfo) { ?>�ö��ظ� <?php } ?>���� <?php echo $post['number'];?><?php echo $postnostick;?>
<?php } elseif($post['number'] == -1) { ?>
�Ƽ�
<?php } else { if(!empty($postno[$post['number']])) { ?>
<?php echo $postno[$post['number']];?>
<?php } else { ?>
<em><?php echo $post['number'];?></em><?php echo $postno['0'];?>
<?php } } ?>
</a>
</strong>
<?php } ?>
<div class="pti"<?php if($post['first'] && $close_leftinfo) { ?> id="comiis_authi_author" style="display:none;"<?php } ?>>
<div class="pdbt">
<?php if(!$post['first'] && $post['rewardfloor']) { ?>
<label class="pdbts pdbts_1">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $post['tid'];?>&amp;checkrush=1" rel="nofollow" title="�鿴����¥��" class="v">��ϲ</a>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $post['tid'];?>&amp;checkrush=1" rel="nofollow" title="�鿴����¥��" class="b">���б�¥</a>
</label>
<?php } if(!$post['first'] && $_G['forum_thread']['special'] == 5) { ?>
<label class="pdbts pdbts_<?php echo intval($post['stand']); ?>">
<?php if($post['stand'] == 1) { ?><a class="v" href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;filter=debate&amp;stand=1" title="ֻ������">����</a>
<?php } elseif($post['stand'] == 2) { ?><a class="v" href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;filter=debate&amp;stand=2" title="ֻ������">����</a>
<?php } else { ?><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;filter=debate&amp;stand=0" title="ֻ������">����</a><?php } if($post['stand']) { ?>
<a class="b" href="forum.php?mod=misc&amp;action=debatevote&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" id="voterdebate_<?php echo $post['pid'];?>" onclick="ajaxmenu(this);doane(event);">֧�� <?php echo $post['voters'];?></a>
<?php } ?>
</label>
<?php } ?>
</div>
<div class="authi">
<?php if(!$post['first'] && $comiis_view_tit_zuico==1) { $_self = $thread['author'] && $post['author'] == $thread['author'] && $post['position'] !== '1';?><?php if($_self ) { ?>
<img class="authicn vm" id="authicon<?php echo $post['pid'];?>" src="<?php echo IMGDIR;?>/ico_lz.png" />
<?php } else { if(!$post['anonymous'] && $_G['cache']['groupicon'][$post['groupid']]) { ?>
<img class="authicn vm" id="authicon<?php echo $post['pid'];?>" src="<?php echo $_G['cache']['groupicon'][$post['groupid']];?>" />
<?php } else { ?>
<img class="authicn vm" id="authicon<?php echo $post['pid'];?>" src="<?php echo $_G['cache']['groupicon']['0'];?>" />
<?php } } } if($post['authorid'] && !$post['anonymous']) { if($_self) { ?>
&nbsp;¥��<span class="pipe">|</span>
<?php } if(!$close_leftinfo && !$_G['setting']['authoronleft']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" class="xi2"><?php echo $post['author'];?></a><?php echo $authorverifys;?><?php } if($close_leftinfo && ($comiis_view_tit_avt != 2 || !$post['first'])) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" c="1" class="kmxi2"><?php echo $post['author'];?></a> <?php echo $authorverifys;?>&nbsp;<a href="home.php?mod=spacecp&amp;ac=usergroup&amp;gid=<?php echo $post['groupid'];?>" target="_blank"><?php echo $post['authortitle'];?></a>&nbsp;
<?php } ?>
<em id="authorposton<?php echo $post['pid'];?>">
<?php if($post['first'] && $comiis_window_width !=0 && ($_G['forum_thread']['typeid'] || $_G['forum_thread']['sortid'])) { ?>
������&nbsp;
<?php } elseif($comiis_window_width !=0) { ?>
������
<?php } if($post['first'] && $comiis_window_width !=0) { if($close_leftinfo && $_G['forum_thread']['typeid'] && $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]) { if(!IS_ROBOT && ($_G['forum']['threadtypes']['listable'] || $_G['forum']['status'] == 3)) { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=typeid&amp;typeid=<?php echo $_G['forum_thread']['typeid'];?>" style="color:#333 !important;"><?php echo $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']];?></a>&nbsp;
<?php } else { ?>
<font style="color:#333 !important;"><?php echo $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']];?></font>&nbsp;
<?php } } if($close_leftinfo && $threadsorts && $_G['forum_thread']['sortid']) { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $_G['forum_thread']['sortid'];?>" style="color:#333 !important;"><?php echo $_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']];?></a>&nbsp;
<?php } } ?>					
<?php echo $post['dateline'];?>&nbsp;
</em>
<?php if($post['status'] & 8) { ?>
<span class="xg1"><?php if($_G['setting']['mobile']['mobilecomefrom']) { ?><?php echo $_G['setting']['mobile']['mobilecomefrom'];?><?php } else { ?>�����ֻ�<?php } ?></span>&nbsp;
<?php } if($post['invisible'] == 0) { ?>
<span class="pipe">|</span>
<?php if(!IS_ROBOT && !$_GET['authorid'] && !$_G['forum_thread']['archiveid']) { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $post['tid'];?>&amp;page=<?php echo $page;?>&amp;authorid=<?php echo $post['authorid'];?>" rel="nofollow"><?php if($close_leftinfo && $post['first']) { ?>ֻ��¥��<?php } else { ?>ֻ��������<?php } ?></a>
<?php } elseif(!$_G['forum_thread']['archiveid']) { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $post['tid'];?>&amp;page=<?php echo $page;?>" rel="nofollow"><?php if($close_leftinfo && $post['first']) { ?>�鿴ȫ��<?php } else { ?>��ʾȫ��¥��<?php } ?></a>
<?php } } } elseif(getstatus($post['status'], 5)) { if(!$_G['setting']['authoronleft']) { ?><a href="javascript:;" class="<?php if($close_leftinfo) { ?>km<?php } ?>xi2"><?php echo $post['author'];?></a><?php } ?>
&nbsp;<em id="authorposton<?php echo $post['pid'];?>">������ <?php echo $post['dateline'];?></em>
<?php } elseif($post['authorid'] && $post['username'] && $post['anonymous'] || !$post['authorid'] && !$post['username']) { if($close_leftinfo) { ?><a href="javascript:;" class="kmxi2"><?php } ?><?php echo $_G['setting']['anonymoustext'];?><?php if($close_leftinfo) { ?></a><?php } ?>&nbsp;
<em id="authorposton<?php echo $post['pid'];?>">������ <?php echo $post['dateline'];?></em>
<?php } if(!IS_ROBOT && !$_G['forum_thread']['archiveid'] && $post['first'] ) { if($_G['forum_thread']['attachment'] == 2 && $_G['group']['allowgetimage'] && (!$_G['setting']['guestviewthumb']['flag'] || $_G['setting']['guestviewthumb']['flag'] && $_G['uid'])) { ?>
<span class="pipe">|</span>&nbsp;<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;from=album" target="_blank">ֻ����ͼ</a>
<?php } if(!$close_leftinfo) { ?><span class="none"><img src="<?php echo IMGDIR;?>/arw_r.gif" class="vm" alt="��������" /></span>
<?php if(!$rushreply) { if($ordertype != 1) { ?>
<span class="pipe show">|</span><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=1"  class="show">�������</a>
<?php } else { ?>
<span class="pipe show">|</span><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=2"  class="show">�������</a>
<?php } } } } if($post['first'] && $comiis_window_width !=0) { ?>
<span class="pipe<?php if(!$close_leftinfo) { ?> show<?php } ?>">|</span>&nbsp;<a href="javascript:;" onclick="readmode($('thread_subject').innerHTML, <?php echo $post['pid'];?>);"<?php if(!$close_leftinfo) { ?> class="show"<?php } ?>>�Ķ�ģʽ</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postheader'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postheader'][$postcount];?>
</div>
</div>
</div><?php $ad_a_pr=adshow("thread/a_pr/3/$postcount");?><div class="pct"<?php if($close_leftinfo && $post['first']) { ?> style="padding-top:<?php if($comiis_view_tit_lz==0) { ?>13px<?php } else { ?>5px<?php } ?>;"<?php } ?>><?php echo adshow("thread/a_pt/2/$postcount");?><?php if(empty($ad_a_pr_css)) { ?>
<style type="text/css">.pcb{margin-right:0}</style><?php $ad_a_pr_css=1;?><?php } if(!$post['first'] && $post['replycredit'] > 0) { ?>
<div class="cm">
<h3 class="psth xs1"><span class="icon_ring vm"></span>
�������� <span class="xw1 xs2 xi1">+<?php echo $post['replycredit'];?></span> <?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['title'];?>
</h3>
</div>
<?php } ?><div class="pcb">
<?php if(!$_G['forum']['ismoderator'] && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($_G['thread']['digest'] == 0 && ($post['groupid'] == 4 || $post['groupid'] == 5 || $post['memberstatus'] == '-1')))) { ?>
<div class="locked">��ʾ: <em>���߱���ֹ��ɾ�� �����Զ�����</em></div>
<?php } elseif(!$_G['forum']['ismoderator'] && $post['status'] & 1) { ?>
<div class="locked">��ʾ: <em>����������Ա���������</em></div>
<?php } elseif($needhiddenreply) { ?>
<div class="locked">���������߿ɼ�</div>
<?php } elseif($post['first'] && $_G['forum_threadpay']) { include template('forum/viewthread_pay'); } elseif($_G['forum_discuzcode']['passwordlock'][$post['pid']]) { ?>
<div class="locked">����Ϊ������ ������������<input type="text" id="postpw_<?php echo $post['pid'];?>" class="vm" />&nbsp;<button class="pn vm" type="button" onclick="submitpostpw(<?php echo $post['pid'];?><?php if($_GET['from'] == 'preview') { ?>,<?php echo $post['tid'];?><?php } else { } ?>)"><strong>�ύ</strong></button></div>
<?php } else { if(!$post['first'] && !empty($post['subject'])) { ?>
<h2><?php echo $post['subject'];?></h2>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_posttop'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_posttop'][$postcount];?>
<?php if($_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($_G['thread']['digest'] == 0 && ($post['groupid'] == 4 || $post['groupid'] == 5 || $post['memberstatus'] == '-1')))) { ?>
<div class="locked">��ʾ: <em>���߱���ֹ��ɾ�� �����Զ����Σ�ֻ�й���Ա���й���Ȩ�޵ĳ�Ա�ɼ�</em></div>
<?php } elseif($post['status'] & 1) { ?>
<div class="locked">��ʾ: <em>����������Ա��������Σ�ֻ�й���Ա���й���Ȩ�޵ĳ�Ա�ɼ�</em></div>
<?php } if(!$post['first'] && $hiddenreplies && $_G['forum']['ismoderator']) { ?>
<div class="locked">���������߿ɼ�</div>
<?php } if($post['first']) { ?> 
<?php if($_G['forum_thread']['price'] > 0 && $_G['forum_thread']['special'] == 0 && empty($previewspecial)) { ?>
<div class="locked"><em class="y"><a href="forum.php?mod=misc&amp;action=viewpayments&amp;tid=<?php echo $_G['tid'];?>" onclick="showWindow('pay', this.href)">��¼</a></em>��������, �۸�: <strong><?php echo $_G['forum_thread']['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?> </strong></div>
<?php } if($threadsort && $threadsortshow) { if($threadsortshow['typetemplate']) { ?>
<?php echo $threadsortshow['typetemplate'];?>
<?php } elseif($threadsortshow['optionlist']) { ?>
<div class="typeoption">
<?php if($threadsortshow['optionlist'] == 'expire') { ?>
����Ϣ�Ѿ�����
<?php } else { ?>
<table summary="������Ϣ" cellpadding="0" cellspacing="0" class="cgtl mbm">
<caption><?php echo $_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']];?></caption>
<tbody><?php if(is_array($threadsortshow['optionlist'])) foreach($threadsortshow['optionlist'] as $option) { if($option['type'] != 'info') { ?>
<tr>
<th><?php echo $option['title'];?>:</th>
<td><?php if($option['value'] !== '') { ?><?php echo $option['value'];?> <?php echo $option['unit'];?><?php } else { ?>-<?php } ?></td>
</tr>
<?php } } ?>
</tbody>
</table>
<?php } ?>
</div>
<?php } } } if($_G['forum_discuzcode']['passwordauthor'][$post['pid']]) { ?>
<div class="locked">����Ϊ������</div>
<?php } ?>
<div class="<?php if(!$_G['forum_thread']['special']) { ?>t_fsz<?php } else { ?>pcbs<?php } ?>">
<?php echo $_G['forum_posthtml']['header'][$post['pid']];?>
<?php if($post['first']) { if(!$_G['forum_thread']['special']) { ?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>">
<?php if(!$_G['inajax']) { if($ad_a_pr) { ?>
<?php echo $ad_a_pr;?>
<?php } } if(!empty($_G['setting']['guesttipsinthread']['flag']) && empty($_G['uid']) && !$post['attachment'] && $_GET['from'] != 'preview') { ?>
<div class="attach_nopermission attach_tips">
<div>
<h3><strong>
<?php if(!empty($_G['setting']['guesttipsinthread']['text'])) { ?>
<?php echo $_G['setting']['guesttipsinthread']['text'];?>
<?php } else { ?>
����ע�ᣬ�ύ������ѣ����ø��๦�ܣ�����������ת������
<?php } ?>
</strong></h3>
<p>����Ҫ <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);return false;">��¼</a> �ſ������ػ�鿴��û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="ע���ʺ�"><?php echo $_G['setting']['reglinkname'];?></a> <?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?></p>
</div>
<span class="atips_close" onclick="this.parentNode.style.display='none'">x</span>
</div>
<?php } ?>
<?php echo $post['message'];?></td></tr></table>
<?php } elseif($_G['forum_thread']['special'] == 1) { include template('forum/viewthread_poll'); } elseif($_G['forum_thread']['special'] == 2) { include template('forum/viewthread_trade'); } elseif($_G['forum_thread']['special'] == 3) { include template('forum/viewthread_reward'); } elseif($_G['forum_thread']['special'] == 4) { include template('forum/viewthread_activity'); } elseif($_G['forum_thread']['special'] == 5) { include template('forum/viewthread_debate'); } elseif($_G['forum_thread']['special'] == 127) { ?>
<?php echo $threadplughtml;?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>"><?php echo $post['message'];?></td></tr></table>
<?php } } else { ?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>">
<?php if(!$_G['inajax']) { if($ad_a_pr) { ?>
<?php echo $ad_a_pr;?>
<?php } } if($post['invisible'] != '-2' || $_G['forum']['ismoderator']) { ?><?php echo $post['message'];?><?php } else { ?><span class="xg1">�����</span><?php } ?></td></tr></table>
<?php } ?>
<?php echo $_G['forum_posthtml']['footer'][$post['pid']];?>
<?php if($post['first'] && ($post['tags'] || $relatedkeywords) && $_GET['from'] != 'preview') { ?>
<div class="ptg mbm mtn">
<?php if($post['tags']) { $tagi = 0;?><?php if(is_array($post['tags'])) foreach($post['tags'] as $var) { if($tagi) { ?>, <?php } ?><a title="<?php echo $var['1'];?>" href="misc.php?mod=tag&amp;id=<?php echo $var['0'];?>" target="_blank"><?php echo $var['1'];?></a><?php $tagi++;?><?php } } if($relatedkeywords) { ?><span><?php echo $relatedkeywords;?></span><?php } ?>
</div>
<?php } if(!IS_ROBOT && $post['first'] && !$_G['forum_thread']['archiveid']) { if(!empty($lastmod['modaction'])) { ?><div class="modact"><a href="forum.php?mod=misc&amp;action=viewthreadmod&amp;tid=<?php echo $_G['tid'];?>" title="����ģʽ" onclick="showWindow('viewthreadmod', this.href)"><?php if($lastmod['modactiontype'] == 'REB') { ?>�������� <?php echo $lastmod['modusername'];?> �� <?php echo $lastmod['moddateline'];?> <?php echo $lastmod['modaction'];?>�� <?php echo $lastmod['reason'];?><?php } else { ?>�������� <?php echo $lastmod['modusername'];?> �� <?php echo $lastmod['moddateline'];?> <?php echo $lastmod['modaction'];?><?php } ?></a></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_modaction'])) echo $_G['setting']['pluginhooks']['viewthread_modaction'];?>
<?php } if($post['attachment'] && $_GET['from'] != 'preview') { ?>
<div class="attach_nopermission attach_tips">
<div>
<h3><strong>�������а���������Դ</strong></h3>
<p><?php if($_G['uid']) { ?>�����ڵ��û����޷����ػ�鿴����<?php } elseif($_G['connectguest']) { ?>����Ҫ <a href="member.php?mod=connect" class="xi2">�����ʺ���Ϣ</a> �� <a href="member.php?mod=connect&amp;ac=bind" class="xi2">�������ʺ�</a> ��ſ������ػ�鿴<?php } else { ?>����Ҫ <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);return false;">��¼</a> �ſ������ػ�鿴��û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="ע���ʺ�"><?php echo $_G['setting']['reglinkname'];?></a> <?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?><?php } ?></p>
</div>
<span class="atips_close" onclick="this.parentNode.style.display='none'">x</span>
</div>
<?php } elseif($post['imagelist'] || $post['attachlist']) { ?>
<div class="pattl">
<?php if($post['imagelist'] && $_G['setting']['imagelistthumb'] && $post['imagelistcount'] >= $_G['setting']['imagelistthumb']) { if(!isset($imagelistkey)) { $imagelistkey = rawurlencode(dsign($_G[tid].'|100|100'))?><script type="text/javascript" reload="1">var imagelistkey = '<?php echo $imagelistkey;?>';</script>
<?php } $post['imagelistthumb'] = true;?><div class="bbda cl mtw mbm pbm">
<strong>����ͼƬ</strong>
<a href="javascript:;" onclick="attachimglst('<?php echo $post['pid'];?>', 0)" class="xi2 attl_g">Сͼ</a>
<a href="javascript:;" onclick="attachimglst('<?php echo $post['pid'];?>', 1, <?php echo intval($_G['setting']['lazyload']); ?>)" class="xi2 attl_m">��ͼ</a>
</div>
<div id="imagelist_<?php echo $post['pid'];?>" class="cl" style="display:none"><?php echo showattach($post, 1); ?></div>
<div id="imagelistthumb_<?php echo $post['pid'];?>" class="pattl_c cl"><img src="<?php echo IMGDIR;?>/loading.gif" width="16" height="16" class="vm" /> ��ͼ���У����Ժ�......</div>
<?php } else { echo showattach($post, 1); } if($post['attachlist']) { echo showattach($post); } ?>
</div>
<?php } if($_G['setting']['allowfastreply'] && $post['first'] && $fastpost && $allowpostreply && !$_G['forum_thread']['archiveid'] && $_GET['from'] != 'preview') { ?>
<form method="post" autocomplete="off" id="vfastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;fromvf=1&amp;extra=<?php echo $_G['gp_extra'];?>&amp;replysubmit=yes<?php if($_G['gp_ordertype'] != 1) { ?>&amp;infloat=yes&amp;handlekey=vfastpost<?php } if($_G['gp_from']) { ?>&amp;from=<?php echo $_G['gp_from'];?><?php } ?>" onsubmit="this.message.value = parseurl(this.message.value);ajaxpost('vfastpostform', 'return_reply', 'return_reply', 'onerror');return false;">
<div id="vfastpost" class="fullvfastpost">				
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div id="vfastposttb" class="comiis_vfastpost cl">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo avatar($_G[uid],small);?></a>
<input type="text" name="message" id="vmessage" onKeyDown="seditor_ctlent(event, '$(\'vfastpostform\').submit()');"/>
<button type="submit" name="replysubmit" id="vreplysubmit" value="true" class="kmvfbtn" onmousemove="this.className='kmvfbtn kmon'" onmouseout="this.className='kmvfbtn'">��ݻظ�</button>			
</div>			
</div>
<div id="vfastpostseccheck"></div>				
</form>
<script type="text/javascript">vmessage();</script>
<?php } ?>		
</div>
<div id="comment_<?php echo $post['pid'];?>" class="cm">
<?php if($_GET['from'] != 'preview' && $_G['setting']['commentnumber'] && !empty($comments[$post['pid']])) { ?>
<h3 class="psth xs1"><span class="icon_ring vm"></span>����</h3>
<?php if($totalcomment[$post['pid']]) { ?><div class="pstl"><?php echo $totalcomment[$post['pid']];?></div><?php } if(is_array($comments[$post['pid']])) foreach($comments[$post['pid']] as $comment) { ?><div class="pstl xs1 cl">
<div class="psta vm">
<a href="home.php?mod=space&amp;uid=<?php echo $comment['authorid'];?>" c="1"><?php echo $comment['avatar'];?></a>
<?php if($comment['authorid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $comment['authorid'];?>" class="xi2 xw1"><?php echo $comment['author'];?>��</a>
<?php } else { ?>
�οͣ� 
<?php } ?>
</div>
<div class="psti">
<?php echo $comment['comment'];?>&nbsp;
<?php if($comment['rpid']) { ?>
<a href="forum.php?mod=redirect&amp;goto=findpost&amp;pid=<?php echo $comment['rpid'];?>&amp;ptid=<?php echo $_G['tid'];?>" class="xi2">����</a>
<a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;repquote=<?php echo $comment['rpid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" class="xi2" onclick="showWindow('reply', this.href)">�ظ�</a>
<?php } ?>
<span class="xg1">
������ <?php echo dgmdate($comment[dateline], 'u');?><?php if($comment['useip'] && $_G['group']['allowviewip']) { ?>&nbsp;IP:<?php echo $comment['useip'];?><?php if($comment['port']) { ?>:<?php echo $comment['port'];?><?php } } if($_G['forum']['ismoderator'] && $_G['group']['allowdelpost']) { ?>&nbsp;<a href="javascript:;" onclick="modaction('delcomment', <?php echo $comment['id'];?>)">ɾ��</a><?php } ?>
</span>
</div>
</div>
<?php } if($commentcount[$post['pid']] > $_G['setting']['commentnumber']) { ?><div class="pgs mbm mtn cl"><div class="pg"><a href="javascript:;" class="nxt" onclick="ajaxget('forum.php?mod=misc&action=commentmore&tid=<?php echo $post['tid'];?>&pid=<?php echo $post['pid'];?>&page=2', 'comment_<?php echo $post['pid'];?>')">��һҳ</a></div></div><?php } } ?>
</div>
<?php if($_GET['from'] != 'preview' && !empty($post['ratelog'])) { ?>
<dl id="ratelog_<?php echo $post['pid'];?>" class="rate">
<?php if($_G['setting']['ratelogon']) { ?>
<dd style="margin:0">
<?php } else { ?>
<dt>
<?php if(!empty($postlist[$post['pid']]['totalrate'])) { ?>
<strong><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="����<?php echo count($postlist[$post['pid']]['totalrate']);; ?>������, �鿴ȫ������"><?php echo count($postlist[$post['pid']]['totalrate']);; ?></a></strong>
<p><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)">�鿴ȫ������</a></p>
<?php } ?>
</dt>
<dd>
<?php } ?>
<div id="post_rate_<?php echo $post['pid'];?>"></div>
<?php if($_G['setting']['ratelogon']) { ?>
<table class="ratl">
<tr>
<th class="xw1" width="180"><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="�鿴ȫ������">����<?php echo count($postlist[$post['pid']]['totalrate']);; ?>������</a></th><?php if(is_array($post['ratelogextcredits'])) foreach($post['ratelogextcredits'] as $id => $score) { if($score > 0) { ?>
<th class="xw1" width="80"><?php echo $_G['setting']['extcredits'][$id]['title'];?></th>
<?php } else { ?>
<th class="xw1" width="80"><?php echo $_G['setting']['extcredits'][$id]['title'];?></th>
<?php } } ?>
<th class="xw1">
<i class="txt_h">����</i>
</th>
</tr>
<tbody class="ratl_l"><?php if(is_array($post['ratelog'])) foreach($post['ratelog'] as $uid => $ratelog) { ?><tr id="rate_<?php echo $post['pid'];?>_<?php echo $uid;?>">
<td>
<a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo avatar($uid, 'small');; ?></a> <a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank" class="xg1"><?php echo $ratelog['username'];?></a>
</td><?php if(is_array($post['ratelogextcredits'])) foreach($post['ratelogextcredits'] as $id => $score) { if($ratelog['score'][$id] > 0) { ?>
<td class="xg1"> + <?php echo $ratelog['score'][$id];?></td>
<?php } else { ?>
<td class="xg1"><?php echo $ratelog['score'][$id];?></td>
<?php } } ?>
<td class="xg1"><?php echo $ratelog['reason'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
<p class="ratc xg1">
<a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="�鿴ȫ������" class="xi1 y">�鿴ȫ������</a>
�����֣�<?php if(is_array($post['ratelogextcredits'])) foreach($post['ratelogextcredits'] as $id => $score) { if($score > 0) { ?>
<?php echo $_G['setting']['extcredits'][$id]['title'];?> <span class="xi1">+<?php echo $score;?></span>&nbsp;
<?php } else { ?>
<?php echo $_G['setting']['extcredits'][$id]['title'];?> <span class="xi1"><?php echo $score;?></span>&nbsp;
<?php } } ?>
</p>
<?php } else { ?>
<ul class="cl"><?php if(is_array($post['ratelog'])) foreach($post['ratelog'] as $uid => $ratelog) { ?><li>
<p id="rate_<?php echo $post['pid'];?>_<?php echo $uid;?>" onmouseover="showTip(this)" tip="<strong><?php echo $ratelog['reason'];?></strong>&nbsp;<?php if(is_array($ratelog['score'])) foreach($ratelog['score'] as $id => $score) { if($score > 0) { ?>
<em class='xi1'><?php echo $_G['setting']['extcredits'][$id]['title'];?> + <?php echo $score;?> <?php echo $_G['setting']['extcredits'][$id]['unit'];?></em>
<?php } else { ?>
<span><?php echo $_G['setting']['extcredits'][$id]['title'];?> <?php echo $score;?> <?php echo $_G['setting']['extcredits'][$id]['unit'];?></span>
<?php } } ?>" class="mtn mbn"><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank" class="avt"><?php echo avatar($uid, 'small');; ?></a></p>
<p><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo $ratelog['username'];?></a></p>
</li>
<?php } ?>
</ul>
<?php } ?>
</dd>
</dl>
<?php } else { ?>
<div id="post_rate_div_<?php echo $post['pid'];?>"></div>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postbottom'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postbottom'][$postcount];?>
</div></div>
<?php if(helper_access::check_module('collection') && !$_G['forum']['disablecollect']) { if($post['relatecollection']) { ?>
<div class="cm">
<h3 class="psth xs1"><span class="icon_ring vm"></span>������������ר���Ƽ�:</h3>
<ul class="mbw xl xl2 cl"><?php if(is_array($post['relatecollection'])) foreach($post['relatecollection'] as $var) { ?><li>&middot; <a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $var['ctid'];?>" title="<?php echo $var['name'];?>" target="_blank" class="xi2 xw1"><?php echo $var['name'];?></a><span class="pipe">|</span><span class="xg1">����: <?php echo $var['threadnum'];?>, ����: <?php echo $var['follownum'];?></span></li>
<?php } if($post['releatcollectionmore']) { ?>
<li>&middot; <a href="forum.php?mod=collection&amp;tid=<?php echo $_G['tid'];?>" target="_blank" class="xi2 xw1">����</a></li>
<?php } ?>
</ul>
</div>
<?php if($post['sourcecollection']['ctid']) { ?>
<div>
���Ǵ���ר�� <a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $post['sourcecollection']['ctid'];?>" target="_blank" class="xi2"><?php echo $post['sourcecollection']['name'];?></a> ���ʵ������ģ���ӭ��ר����֣�
<form action="forum.php?mod=collection&amp;action=comment&amp;ctid=<?php echo $ctid;?>&amp;tid=<?php echo $_G['tid'];?>" method="POST" class="ptm pbm cl">
<input type="hidden" name="ratescore" id="ratescore" />
<span class="clct_ratestar">
<span class="btn">
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',1)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',1,'ratescore')">1</a>
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',2)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',2,'ratescore')">2</a>
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',3)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',3,'ratescore')">3</a>
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',4)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',4,'ratescore')">4</a>
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',5)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',5,'ratescore')">5</a>
</span>
<span id="clct_ratestar_star" class="star star<?php echo $memberrate;?>"></span>
</span>
&nbsp;<button type="submit" value="submit" class="pn"><span>����</span></button>
</form>
</div>
<?php } } } ?>
</td></tr>
<tr><td class="plc plm">
<?php if($locations[$post['pid']]) { ?>
<div class="mobile-location"><?php echo $locations[$post['pid']]['location'];?></div>
<?php } if(!IS_ROBOT && $post['first'] && !$_G['forum_thread']['archiveid']) { if($post['invisible'] == 0) { ?>
<div id="p_btn" class="mtw mbm hm cl">
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=<?php echo $_G['tid'];?>&amp;formhash=<?php echo FORMHASH;?>" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' ���ղ�'" title="�ղر���"><i><img src="<?php echo IMGDIR;?>/fav.gif" alt="�ղ�" />�ղ�<span id="favoritenumber"<?php if(!$_G['forum_thread']['favtimes']) { ?> style="display:none"<?php } ?>><?php echo $_G['forum_thread']['favtimes'];?></span></i></a>
<?php if($_G['group']['raterange'] && $post['authorid']) { ?>
<a href="javascript:;" id="ak_rate" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?>', 'get', -1);return false;" title="���ֱ�����"><i><img src="<?php echo IMGDIR;?>/agree.gif" alt="����" />����</i></a>
<?php } if(!$post['anonymous'] && $post['first'] && helper_access::check_module('follow')) { ?>
<a class="followp" href="home.php?mod=spacecp&amp;ac=follow&amp;op=relay&amp;tid=<?php echo $_G['tid'];?>&amp;from=forum" onclick="showWindow('relaythread', this.href, 'get', 0);" title="ת������ɢ"><i><img src="<?php echo IMGDIR;?>/rt.png" alt="ת��" />ת��<?php if($_G['forum_thread']['relay']) { ?><span id="relaynumber" style="display:none"><?php echo $_G['forum_thread']['relay'];?></span><?php } ?></i></a>
<?php } if($post['first'] && helper_access::check_module('share')) { ?>
<a class="sharep" href="home.php?mod=spacecp&amp;ac=share&amp;type=thread&amp;id=<?php echo $_G['tid'];?>" onclick="showWindow('sharethread', this.href, 'get', 0);" title="�����ƾ���"><i><img src="<?php echo IMGDIR;?>/oshr.png" alt="����" />����<?php if($_G['forum_thread']['sharetimes']) { ?><span id="sharenumber"><?php echo $_G['forum_thread']['sharetimes'];?></span><?php } ?></i></a>
<?php } if(!$_G['forum']['disablecollect'] && helper_access::check_module('collection')) { ?>
<a href="forum.php?mod=collection&amp;action=edit&amp;op=addthread&amp;tid=<?php echo $_G['tid'];?>" id="k_collect" onclick="showWindow(this.id, this.href);return false;" onmouseover="this.title = $('collectionnumber').innerHTML + ' ������'" title="�Ժ�����ר��"><i><img src="<?php echo IMGDIR;?>/collection.png" alt="����" />����<span id="collectionnumber"<?php if(!$post['releatcollectionnum']) { ?> style="display:none"<?php } ?>><?php echo $post['releatcollectionnum'];?></span></i></a>
<?php } if(($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']) { if(!empty($_G['setting']['recommendthread']['addtext'])) { ?>
<a id="recommend_add" href="forum.php?mod=misc&amp;action=recommend&amp;do=add&amp;tid=<?php echo $_G['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_add').innerHTML + ' ��<?php echo $_G['setting']['recommendthread']['addtext'];?>'" title="��һ��"><i><img src="<?php echo IMGDIR;?>/rec_add.gif" alt="<?php echo $_G['setting']['recommendthread']['addtext'];?>" /><?php echo $_G['setting']['recommendthread']['addtext'];?><span id="recommendv_add"<?php if(!$_G['forum_thread']['recommend_add']) { ?> style="display:none"<?php } ?>><?php echo $_G['forum_thread']['recommend_add'];?></span></i></a>
<?php } if(!empty($_G['setting']['recommendthread']['subtracttext'])) { ?>
<a id="recommend_subtract" href="forum.php?mod=misc&amp;action=recommend&amp;do=subtract&amp;tid=<?php echo $_G['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(-<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_subtract').innerHTML + ' ��<?php echo $_G['setting']['recommendthread']['subtracttext'];?>'" title="��һ��"><i><img src="<?php echo IMGDIR;?>/rec_subtract.gif" alt="<?php echo $_G['setting']['recommendthread']['subtracttext'];?>" /><?php echo $_G['setting']['recommendthread']['subtracttext'];?><span id="recommendv_subtract"<?php if(!$_G['forum_thread']['recommend_sub']) { ?> style="display:none"<?php } ?>><?php echo $_G['forum_thread']['recommend_sub'];?></span></i></a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_useraction'])) echo $_G['setting']['pluginhooks']['viewthread_useraction'];?>
</div>
<?php } } if($post['relateitem']) { ?>
 <div class="comiis_cnxh cl">
  <h2><strong>�������</strong></h2>
  <ul class="cl">
  <?php if(is_array($post['relateitem'])) foreach($post['relateitem'] as $var) { ?><li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $var['tid'];?>" title="<?php echo $var['subject'];?>" target="_blank"><?php echo $var['subject'];?></a></li>
  <?php } ?>
  </ul>
</div>
<?php } if($post['signature'] && ($_G['setting']['bannedmessages'] & 4 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)))) { ?>
<div class="sign">ǩ��������</div>
<?php } elseif($post['signature'] && !$post['anonymous'] && $showsignatures) { ?>
<div class="sign" style="max-height:<?php echo $_G['setting']['maxsigrows'];?>px;maxHeightIE:<?php echo $_G['setting']['maxsigrows'];?>px;"><?php echo $post['signature'];?></div>
<?php } elseif(!$post['anonymous'] && $showsignatures && $_G['setting']['globalsightml']) { ?>
<div class="sign"><?php echo $_G['setting']['globalsightml'];?></div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postsightmlafter'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postsightmlafter'][$postcount];?><?php echo adshow("thread/a_pb/1/$postcount");?></td>
</tr>
<tr id="_postposition<?php echo $post['pid'];?>"></tr>
<?php if(!$_G['forum_thread']['archiveid']) { ?>
<tr>
<?php if(!$close_leftinfo) { ?>
<td class="pls"></td>
<?php } ?>
<td class="plc" style="overflow:visible;<?php if($close_leftinfo) { ?>--> width:100%<?php } ?>">
<div class="po<?php if(!$post['first']) { ?> hin<?php } ?>">
<?php if(!$post['first'] && $modmenu['post']) { ?>
<span class="y">
<label for="manage<?php echo $post['pid'];?>">
<input type="checkbox" id="manage<?php echo $post['pid'];?>" class="pc" <?php if(!empty($modclick)) { ?>checked="checked" <?php } ?>onclick="pidchecked(this);modclick(this, <?php echo $post['pid'];?>)" value="<?php echo $post['pid'];?>" autocomplete="off" />
����
</label>
</span>
<?php } ?>
<div class="pob cl"<?php if($close_leftinfo && (count($postlist) == $postcount+1)) { ?> style="padding-bottom:10px;"<?php } ?>>
<?php if($close_leftinfo) { if($comiis_view_fxd==1 && $post['first']) { ?>
<div class="bdsharebuttonbox z" style="padding-bottom:5px;"><a href="#" class="bds_more" data-cmd="more"></a><a title="����΢��" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="��������΢��" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="����QQ�ռ�" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="����QQ����" href="#" class="bds_sqq" data-cmd="sqq"></a><a title="������Ѷ΢��" href="#" class="bds_tqq" data-cmd="tqq"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php } ?>
<p>
<?php if($post['invisible'] == 0) { if($_G['forum_thread']['special'] == 3 && ($_G['forum']['ismoderator'] && (!$_G['setting']['rewardexpiration'] || $_G['setting']['rewardexpiration'] > 0 && ($_G['timestamp'] - $_G['forum_thread']['dateline']) / 86400 > $_G['setting']['rewardexpiration']) || $_G['forum_thread']['authorid'] == $_G['uid']) && $post['authorid'] != $_G['forum_thread']['authorid'] && $post['first'] == 0 && $_G['uid'] != $post['authorid'] && $_G['forum_thread']['price'] > 0) { ?>
<a href="javascript:;" onclick="setanswer(<?php echo $post['pid'];?>, '<?php echo $_GET['from'];?>')">��Ѵ�</a>
<?php } if(!$post['first'] && $_G['group']['raterange'] && $post['authorid']) { ?>
<a href="javascript:;" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?>', 'get', -1);return false;">����</a>
<?php } if(!empty($postlist[$post['pid']]['totalrate']) && $_G['forum']['ismoderator']) { ?>
<a href="forum.php?mod=misc&amp;action=removerate&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;page=<?php echo $page;?>" onclick="showWindow('rate', this.href, 'get', -1)">��������</a>
<?php } if($post['authorid'] != $_G['uid']) { ?>
<a href="javascript:;" onclick="showWindow('miscreport<?php echo $post['pid'];?>', 'misc.php?mod=report&rtype=post&rid=<?php echo $post['pid'];?>&tid=<?php echo $_G['tid'];?>&fid=<?php echo $_G['fid'];?>', 'get', -1);return false;">�ٱ�</a>
<?php } if($_G['setting']['magicstatus']) { ?>
<a href="javascript:;" id="mgc_post_<?php echo $post['pid'];?>" onmouseover="showMenu(this.id)" class="showmenu">ʹ�õ���</a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postaction'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postaction'][$postcount];?>
</p>
<?php } ?>
<em>
<?php if($post['invisible'] == 0) { if($allowpostreply && $post['allowcomment'] && (!$thread['closed'] || $_G['forum']['ismoderator'])) { ?><a class="cmmnt" href="forum.php?mod=misc&amp;action=comment&amp;tid=<?php echo $post['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_G['forum_thread']['special'] == 127) { ?>&amp;special=<?php echo $specialextra;?><?php } ?>" onclick="showWindow('comment', this.href, 'get', 0)">����</a><?php } if((!$_G['uid'] || $allowpostreply) && !$needhiddenreply) { if($post['first']) { ?>
<a class="fastre" href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;reppost=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" onclick="showWindow('reply', this.href)">�ظ�</a>
<?php } else { ?>
<a class="fastre" href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;repquote=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" onclick="showWindow('reply', this.href)">�ظ�</a>
<?php } } } if((($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))) { ?>
<a class="editp" href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?>"><?php if($_G['forum_thread']['special'] == 2 && !$post['message']) { ?>��ӹ�̨����<?php } else { ?>�༭</a><?php } } elseif($_G['uid'] && $post['authorid'] == $_G['uid'] && $_G['setting']['postappend']) { ?>
<a class="appendp" href="forum.php?mod=misc&amp;action=postappend&amp;tid=<?php echo $post['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" onClick="showWindow('postappend', this.href, 'get', 0)">����</a>
<?php } if($post['first'] && $post['invisible'] == -3) { ?>
<!--<a class="psave" href="forum.php?mod=misc&amp;action=pubsave&amp;tid=<?php echo $_G['tid'];?>">����</a>-->
<?php } if($post['invisible'] == -2 && !$post['first']) { ?>
<span class="xg1">(�����)</span>
<?php } if($post['first'] && $allowblockrecommend) { ?><a class="push" href="javascript:;" onclick="modaction('recommend', '<?php echo $_G['forum_firstpid'];?>', 'op=recommend&idtype=<?php if($_G['forum_thread']['isgroup']) { ?>gtid<?php } else { ?>tid<?php } ?>&id=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?>', 'portal.php?mod=portalcp&ac=portalblock')">����</a><?php } if(!$_G['forum_thread']['special'] && !$rushreply && !$hiddenreplies && $_G['setting']['repliesrank'] && !$post['first'] && !($post['isWater'] && $_G['setting']['filterednovote'])) { ?>
<a class="replyadd" href="forum.php?mod=misc&amp;action=postreview&amp;do=support&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', '');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = ($('review_support_<?php echo $post['pid'];?>').innerHTML ? $('review_support_<?php echo $post['pid'];?>').innerHTML : 0) + ' �� ֧��'">֧�� <span id="review_support_<?php echo $post['pid'];?>"><?php echo $post['postreview']['support'];?></span></a>
<a class="replysubtract" href="forum.php?mod=misc&amp;action=postreview&amp;do=against&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', '');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = ($('review_against_<?php echo $post['pid'];?>').innerHTML ? $('review_against_<?php echo $post['pid'];?>').innerHTML : 0) + ' �� ����'">���� <span id="review_against_<?php echo $post['pid'];?>"><?php echo $post['postreview']['against'];?></span></a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postfooter'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postfooter'][$postcount];?>
</em>
<?php if(!$close_leftinfo) { ?>
<p>
<?php if($post['invisible'] == 0) { if($_G['setting']['magicstatus']) { ?>
<a href="javascript:;" id="mgc_post_<?php echo $post['pid'];?>" onmouseover="showMenu(this.id)" class="showmenu">ʹ�õ���</a>
<?php } if($_G['forum_thread']['special'] == 3 && ($_G['forum']['ismoderator'] && (!$_G['setting']['rewardexpiration'] || $_G['setting']['rewardexpiration'] > 0 && ($_G['timestamp'] - $_G['forum_thread']['dateline']) / 86400 > $_G['setting']['rewardexpiration']) || $_G['forum_thread']['authorid'] == $_G['uid']) && $post['authorid'] != $_G['forum_thread']['authorid'] && $post['first'] == 0 && $_G['uid'] != $post['authorid'] && $_G['forum_thread']['price'] > 0) { ?>
<a href="javascript:;" onclick="setanswer(<?php echo $post['pid'];?>, '<?php echo $_GET['from'];?>')">��Ѵ�</a>
<?php } if(!$post['first'] && $_G['group']['raterange'] && $post['authorid']) { ?>
<a href="javascript:;" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?>', 'get', -1);return false;">����</a>
<?php } if(!empty($postlist[$post['pid']]['totalrate']) && $_G['forum']['ismoderator']) { ?>
<a href="forum.php?mod=misc&amp;action=removerate&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;page=<?php echo $page;?>" onclick="showWindow('rate', this.href, 'get', -1)">��������</a>
<?php } if($post['authorid'] != $_G['uid']) { ?>
<a href="javascript:;" onclick="showWindow('miscreport<?php echo $post['pid'];?>', 'misc.php?mod=report&rtype=post&rid=<?php echo $post['pid'];?>&tid=<?php echo $_G['tid'];?>&fid=<?php echo $_G['fid'];?>', 'get', -1);return false;">�ٱ�</a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postaction'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postaction'][$postcount];?>
</p>
<?php } if($_G['setting']['magicstatus']) { ?>
<ul id="mgc_post_<?php echo $post['pid'];?>_menu" class="p_pop mgcmn" style="display: none;" disautofocus="disautofocus">
<?php if($post['first']) { if(!empty($_G['setting']['magics']['bump'])) { ?>
<li><a href="home.php?mod=magic&amp;mid=bump&amp;idtype=tid&amp;id=<?php echo $_G['tid'];?>" id="a_bump" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/bump.small.gif" /><?php echo $_G['setting']['magics']['bump'];?></a></li>
<?php } if(!empty($_G['setting']['magics']['stick'])) { ?>
<li><a href="home.php?mod=magic&amp;mid=stick&amp;idtype=tid&amp;id=<?php echo $_G['tid'];?>" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/stick.small.gif" /><?php echo $_G['setting']['magics']['stick'];?></a></li>
<?php } if(!empty($_G['setting']['magics']['close'])) { ?>
<li><a href="home.php?mod=magic&amp;mid=close&amp;idtype=tid&amp;id=<?php echo $_G['tid'];?>" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/close.small.gif" /><?php echo $_G['setting']['magics']['close'];?></a></li>
<?php } if(!empty($_G['setting']['magics']['open'])) { ?>
<li><a href="home.php?mod=magic&amp;mid=open&amp;idtype=tid&amp;id=<?php echo $_G['tid'];?>" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/open.small.gif" /><?php echo $_G['setting']['magics']['open'];?></a></li>
<?php } if(!empty($_G['setting']['magics']['highlight'])) { ?>
<li><a href="home.php?mod=magic&amp;mid=highlight&amp;idtype=tid&amp;id=<?php echo $_G['tid'];?>" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/highlight.small.gif" /><?php echo $_G['setting']['magics']['highlight'];?></a></li>
<?php } if(!empty($_G['setting']['magics']['sofa'])) { ?>
<li><a href="home.php?mod=magic&amp;mid=sofa&amp;idtype=tid&amp;id=<?php echo $_G['tid'];?>" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/sofa.small.gif" /><?php echo $_G['setting']['magics']['sofa'];?></a></li>
<?php } if(!empty($_G['setting']['magics']['jack'])) { ?>
<li><a href="home.php?mod=magic&amp;mid=jack&amp;idtype=tid&amp;id=<?php echo $_G['tid'];?>" id="a_jack" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/jack.small.gif" /><?php echo $_G['setting']['magics']['jack'];?></a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_magic_thread'])) echo $_G['setting']['pluginhooks']['viewthread_magic_thread'];?>
<?php } if(!empty($_G['setting']['magics']['repent']) && $post['authorid'] == $_G['uid'] && !$rushreply) { ?>
<li><a href="home.php?mod=magic&amp;mid=repent&amp;idtype=pid&amp;id=<?php echo $post['pid'];?>:<?php echo $_G['tid'];?>" id="a_repent_<?php echo $post['pid'];?>" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/repent.small.gif" /><?php echo $_G['setting']['magics']['repent'];?></a></li>
<?php } if(!empty($_G['setting']['magics']['anonymouspost']) && $post['authorid'] == $_G['uid']) { ?>
<li><a href="home.php?mod=magic&amp;mid=anonymouspost&amp;idtype=pid&amp;id=<?php echo $post['pid'];?>:<?php echo $_G['tid'];?>" id="a_anonymouspost_<?php echo $post['pid'];?>" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/anonymouspost.small.gif" /><?php echo $_G['setting']['magics']['anonymouspost'];?></a></li>
<?php } if(!empty($_G['setting']['magics']['namepost'])) { ?>
<li><a href="home.php?mod=magic&amp;mid=namepost&amp;idtype=pid&amp;id=<?php echo $post['pid'];?>:<?php echo $_G['tid'];?>" id="a_namepost_<?php echo $post['pid'];?>" onclick="showWindow(this.id, this.href)"><img src="<?php echo STATICURL;?>image/magic/namepost.small.gif" /><?php echo $_G['setting']['magics']['namepost'];?></a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_magic_post'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_magic_post'][$postcount];?>
</ul>
<script type="text/javascript" reload="1">checkmgcmn('post_<?php echo $post['pid'];?>')</script>
<?php } ?>
</div>
</div>
<?php if($post['first'] && $_G['forum_thread']['special'] == 5 && $_G['forum_thread']['displayorder'] >= 0) { ?>
<div class="comiis_bltx">
<ul class="ttp cl" style="margin-bottom:3px;">
<li style="display:inline;margin-left:-5px;"><strong class="bw0 bg0_all">������ɸѡ: </strong></li>
<li<?php if(!isset($_GET['stand'])) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>" hidefocus="true">ȫ��</a></li>
<li<?php if($_GET['stand'] == 1) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;stand=1" hidefocus="true">����</a></li>
<li<?php if($_GET['stand'] == 2) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;stand=2" hidefocus="true">����</a></li>
<li<?php if(isset($_GET['stand']) && $_GET['stand'] == 0) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;stand=0" hidefocus="true">����</a></li>
</ul>
</div>
<?php } ?>
</td>
</tr>
<?php } ?>
</table><?php if($close_leftinfo) { ?></div><?php } if($close_leftinfo && $post['first']) { ?>
<script>
if($('comiis_authi_author_div') && $('comiis_authi_author')){
$('comiis_authi_author_div').innerHTML = $('comiis_authi_author').innerHTML;
}
</script>
<?php } if($_G['forum_thread']['replies']) { ?><?php echo adshow("interthread/a_p/$postcount");?><?php } if(!empty($aimgs[$post['pid']])) { ?>
<script type="text/javascript" reload="1">
aimgcount[<?php echo $post['pid'];?>] = [<?php echo dimplode($aimgs[$post['pid']]);; ?>];
attachimggroup(<?php echo $post['pid'];?>);
<?php if(empty($_G['setting']['lazyload'])) { if(!$post['imagelistthumb']) { ?>
attachimgshow(<?php echo $post['pid'];?>);
<?php } else { ?>
attachimgshow(<?php echo $post['pid'];?>, 1);
<?php } } ?>
var aimgfid = 0;
<?php if($_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])) { ?>
aimgfid = <?php echo $_G['fid'];?>;
<?php } if($post['imagelistthumb']) { ?>
attachimglstshow(<?php echo $post['pid'];?>, <?php echo intval($_G['setting']['lazyload']); ?>, aimgfid, '<?php echo $_G['setting']['showexif'];?>');
<?php } ?>
</script>
<?php } } else { ?>
<table id="pid<?php echo $post['pid'];?>" summary="pid<?php echo $post['pid'];?>" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<?php if(!$close_leftinfo) { ?>
<td class="pls"></td>
<?php } ?>
<td class="plc"<?php if($close_leftinfo) { ?> style="width:100%"<?php } ?>>
<div class="pi">
<strong><a><?php if(!empty($postno[$post['number']])) { ?><?php echo $postno[$post['number']];?><?php } else { ?><em><?php echo $post['number'];?></em><?php echo $postno['0'];?><?php } ?></a></strong>
</div>
<div class="pct">��Ч¥�㣬�����Ѿ���ɾ��</div>
</td>
</tr>
<tr class="ad">
<?php if(!$close_leftinfo) { ?>
<td class="pls"></td>
<?php } ?>
<td class="plc"></td>
</tr>
</tbody>
</table>
<?php } if($close_leftinfo && $post['first'] && !empty($_G['setting']['pluginhooks']['viewthread_sidebottom'][$postcount])) { ?>
<div id="comiis_viewthread_sidebottom" style="display:none;">
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_sidebottom'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_sidebottom'][$postcount];?>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_endline'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_endline'][$postcount];?></div>
<?php if($close_leftinfo) { ?></div><?php } if($close_leftinfo && $post['first'] && $_G['forum_thread']['allreplies']!=0) { ?>
<div id="comiis_allreplies" class="comiis_viewtitle cl">
<h2 class="cl">
<?php if(!IS_ROBOT && !$_G['forum_thread']['archiveid'] && !$rushreply) { ?><div class="y comiis_hfpx"><a onmouseover="showMenu(this.id)" class="showmenu" href="javascript:;" id="comiis_hfpx"><?php if($ordertype != 1) { ?>�������<?php } else { ?>�������<?php } ?></a></div><?php } if(!IS_ROBOT && !$postcount && !$_G['forum_thread']['archiveid'] && $post['first'] ) { ?>
<div id="fj" class="y">
<label class="z">����ֱ��</label>
<input type="text" class="px p_fre z" size="2" onkeyup="$('fj_btn').href='forum.php?mod=redirect&ptid=<?php echo $_G['tid'];?>&authorid=<?php echo $_GET['authorid'];?>&postno='+this.value" onkeydown="if(event.keyCode==13) {window.location=$('fj_btn').href;return false;}" title="��ת��ָ��¥��" />
<a href="javascript:;" id="fj_btn" class="z" title="��ת��ָ��¥��"><img src="<?php echo IMGDIR;?>/fj_btn.png" alt="��ת��ָ��¥��" class="vm" /></a>
</div>
<?php } ?>
<span class="z"><?php echo $_G['forum_thread']['allreplies'];?> ������</span>
</h2>
</div>
<?php if(!IS_ROBOT && !$_G['forum_thread']['archiveid'] && !$rushreply && $_G['forum_thread']['allreplies']!=0) { ?>
        <div style="display:none" class="p_pop" id="comiis_hfpx_menu">
          <ul>
<?php if($ordertype != 1) { ?>
            <li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=2#comiis_allreplies">�������</a></li>
            <li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=1#comiis_allreplies">�������</a></li>
            <?php } else { ?>
            <li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=1#comiis_allreplies">�������</a></li>
            <li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=2#comiis_allreplies">�������</a></li>
            <?php } ?>
          </ul>          
        </div>
        <?php } } $postcount++;?><?php } ?>
<div id="postlistreply" class="pl<?php if(!$close_leftinfo) { ?> comiis_postlistreply<?php } ?>"><div id="post_new" class="viewthread_table" style="display: none"></div></div>
<?php if($_G['blockedpids']) { ?>
<div id='hiddenpoststip'><a href='javascript:display_blocked_post();'>����һЩ���ӱ�ϵͳ�Զ����أ����չ��</a></div>
<div id="hiddenposts"></div>
<?php } ?>
</div>
<form method="post" autocomplete="off" name="modactions" id="modactions">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="optgroup" />
<input type="hidden" name="operation" />
<input type="hidden" name="listextra" value="<?php echo $_GET['extra'];?>" />
<input type="hidden" name="page" value="<?php echo $page;?>" />
</form>
<?php echo $_G['forum_tagscript'];?>
<?php if($close_leftinfo) { ?>
<div class="comiis_vfy cl">
<?php if($multipage && $page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']) { $nxtpage = $page + 1;?><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?><?php if($_GET['authorid']) { ?>&amp;authorid=<?php echo $_GET['authorid'];?><?php } ?>&amp;page=<?php echo $nxtpage;?>" hidefocus="true" class="comiis_pgbtn"><i></i>�鿴��һҳ</a>
<?php } ?>
</div>
<?php } else { ?>
<div class="pgbtn"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?><?php if($_GET['authorid']) { ?>&amp;authorid=<?php echo $_GET['authorid'];?><?php } ?>&amp;page=<?php echo $nxtpage;?>" hidefocus="true" class="bm_h">��һҳ &raquo;</a></div>
<?php } if($close_leftinfo) { ?>
<div class="comiis_pgs cl">	
<span class="pgb"<?php if($_G['setting']['visitedforums']) { ?> id="visitedforumstmp" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'21'})"<?php } ?>><a href="<?php echo $upnavlink;?>">�����б�</a></span><?php echo $multipage;?>
</div>
<?php } else { ?>
<div class="pgs mtm mbm cl">
<?php echo $multipage;?>
<span class="pgb y"<?php if($_G['setting']['visitedforums']) { ?> id="visitedforumstmp" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'21'})"<?php } ?>><a href="<?php echo $upnavlink;?>">�����б�</a></span>
<?php if(!$_G['forum_thread']['is_archived']) { ?>
<a id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> href="javascript:;" title="������"><img src="<?php echo IMGDIR;?>/pn_post.png" alt="������" /></a>
<?php } if($allowpostreply && !$_G['forum_thread']['archiveid']) { ?>
<a id="post_replytmp" onclick="showWindow('reply', 'forum.php?mod=post&action=reply&fid=<?php echo $_G['fid'];?>&tid=<?php echo $_G['tid'];?>')" href="javascript:;" title="�ظ�"><img src="<?php echo IMGDIR;?>/pn_reply.png" alt="�ظ�" /></a>
<?php } ?>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_middle'])) echo $_G['setting']['pluginhooks']['viewthread_middle'];?>
<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
<?php if($fastpost) { if(!$close_leftinfo) { ?>
<div class="bm_h kmtx">
<h2>����ظ�</h2>
</div>
<?php } ?><script type="text/javascript">
var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
</script>
<div id="f_pst" class="pl<?php if(empty($_GET['from'])) { ?> bm bmw<?php } ?>"<?php if(!$close_leftinfo) { ?> style="margin-top:0;"<?php } ?>>
<form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;replysubmit=yes<?php if($_GET['ordertype'] != 1) { ?>&amp;infloat=yes&amp;handlekey=fastpost<?php } if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>"<?php if($_GET['ordertype'] != 1) { ?> onSubmit="return fastpostvalidate(this)"<?php } ?>>
<?php if(empty($_GET['from'])) { ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="pls<?php if($close_leftinfo) { ?> comiis_f_pst<?php } ?>">
<?php if($_G['uid']) { ?>
<div class="avatar avtm"><?php echo avatar($_G['uid']); ?></div>
<?php } else { ?>
<div class="avatar avtm nologin"><img src="<?php echo $_G['style']['styleimgdir'];?>/comiis_nologin.jpg"></div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_side'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_side'];?>
</td>
<td class="plc">
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_content'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_content'];?>
<span id="fastpostreturn"></span>
<?php if($_G['forum_thread']['special'] == 5 && empty($firststand)) { ?>
<div class="pbt cl">
<div class="ftid sslt">
<select id="stand" name="stand">
<option value="">ѡ��۵�</option>
<option value="0">����</option>
<option value="1">����</option>
<option value="2">����</option>
</select>
</div>
<script type="text/javascript">simulateSelect('stand');</script>
</div>
<?php } ?>
<div class="cl">
<?php if($_G['uid'] && empty($_GET['from']) && $_G['setting']['fastsmilies']) { ?><div id="fastsmiliesdiv" class="y"><div id="fastsmiliesdiv_data"><div id="fastsmilies"></div></div></div><?php } ?>
<div<?php if($_G['uid'] && empty($_GET['from']) && $_G['setting']['fastsmilies']) { ?> class="hasfsl"<?php } ?> id="fastposteditor">
<div class="tedt<?php if(!($_G['forum_thread']['special'] == 5 && empty($firststand))) { ?> mtn<?php } ?>">
<div class="bar">
<span class="y">
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_func_extra'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_func_extra'];?>
<a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="return switchAdvanceMode(this.href)">�߼�ģʽ</a>
</span><?php $seditor = array('fastpost', array('at', 'bold', 'color', 'img', 'link', 'quote', 'code', 'smilies'), !$allowfastpost ? 1 : 0, $allowpostattach && $_GET['from'] != 'preview' && $allowfastpost ? '<span class="pipe z">|</span><span id="spanButtonPlaceholder">'.lang('template', 'upload').'</span>' : '');?><?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_ctrl_extra'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_ctrl_extra'];?><script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="���ּӴ�" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="����������ɫ" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="ͼƬ" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="�������" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="����" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="����" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<?php if(empty($seditor['2'])) { ?>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@����" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@����</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div></div>
<div class="area">
<?php if($allowfastpost) { ?>
<textarea rows="5" cols="80" name="message" id="fastpostmessage" onKeyDown="seditor_ctlent(event, <?php if($_GET['ordertype'] != 1) { ?>'fastpostvalidate($(\'fastpostform\'))'<?php } else { ?>'$(\'fastpostform\').submit()'<?php } ?>);" tabindex="4" class="pt"<?php echo getreplybg($_G['forum']['replybg']);?>></textarea>
<?php } else { ?>
<div class="pt hm">
<?php if(!$_G['uid']) { if(!$_G['connectguest']) { ?>
����Ҫ��¼��ſ��Ի��� <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">��¼</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a>
<?php } else { ?>
����Ҫ <a href="member.php?mod=connect" class="xi2">�����ʺ���Ϣ</a> �� <a href="member.php?mod=connect&amp;ac=bind" class="xi2">�������ʺ�</a> ��ſ��Է���
<?php } } else { ?>
��������Ȩ������<a href="javascript:;" onclick="$('fastpostform').submit()" class="xi2">����鿴ԭ��</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
<div id="seccheck_fastpost">
<?php if($allowpostreply && ($secqaacheck || $seccodecheck)) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(
EOF;
 if(!empty($_G['gp_infloat'])) { 
$sectpl .= <<<EOF
{'ctrlid':this.id,'win':'{$_GET['handlekey']}'}
EOF;
 } else { 
$sectpl .= <<<EOF
this.id
EOF;
 } 
$sectpl .= <<<EOF
)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div><?php } ?>
</div>
<?php if($allowpostattach && $_GET['from'] != 'preview') { ?>
<script type="text/javascript">
var editorid = '';
var ATTACHNUM = {'imageused':0,'imageunused':0,'attachused':0,'attachunused':0}, ATTACHUNUSEDAID = new Array(), IMGUNUSEDAID = new Array();
</script>
<input type="hidden" name="posttime" id="posttime" value="<?php echo TIMESTAMP;?>" />
<div class="upfl<?php if(empty($_GET['from']) && $_G['setting']['fastsmilies']) { ?> hasfsl<?php } ?>">
<table cellpadding="0" cellspacing="0" border="0" id="attach_tblheader" style="display: none;">
<tr>
<td>��������ļ�����ӵ�����������</td>
<td class="atds">����</td>
<?php if($_G['group']['allowsetattachperm']) { ?>
<td class="attv">
�Ķ�Ȩ��
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="�Ķ�Ȩ�ް��ɸߵ������У����ڻ����ѡ������û��ſ����Ķ�" />
</td>
<?php } if($_G['group']['maxprice']) { ?><td class="attpr"><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></td><?php } ?>
<td class="attc"></td>
</tr>
</table>
<div class="fieldset flash" id="attachlist"></div>
<?php if(empty($_G['setting']['pluginhooks']['viewthread_fastpost_upload_extend'])) { if(empty($_G['uploadjs'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>upload.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php $_G['uploadjs'] = 1;?><?php } ?><script type="text/javascript">
var upload = new SWFUpload({
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=upload&fid=<?php echo $_G['fid'];?>",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"},
file_size_limit : "<?php echo $swfconfig['max'];?>",
file_types : "<?php echo $swfconfig['attachexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['attachexts']['depict'];?>",
file_upload_limit : <?php echo $swfconfig['limit'];?>,
file_queue_limit : 0,
swfupload_preload_handler : preLoad,
swfupload_load_failed_handler : loadFailed,
file_dialog_start_handler : fileDialogStart,
file_queued_handler : fileQueued,
file_queue_error_handler : fileQueueError,
file_dialog_complete_handler : fileDialogComplete,
upload_start_handler : uploadStart,
upload_progress_handler : uploadProgress,
upload_error_handler : uploadError,
upload_success_handler : uploadSuccess,
upload_complete_handler : uploadComplete,
button_image_url : "<?php echo IMGDIR;?>/uploadbutton_small.png",
button_placeholder_id : "spanButtonPlaceholder",
button_width: 17,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",
custom_settings : {
progressTarget : "attachlist",
uploadSource: 'forum',
uploadType: 'attach',
<?php if($swfconfig['maxsizeperday']) { ?>
maxSizePerDay: <?php echo $swfconfig['maxsizeperday'];?>,
<?php } if($swfconfig['maxattachnum']) { ?>
maxAttachNum: <?php echo $swfconfig['maxattachnum'];?>,
<?php } ?>
uploadFrom: 'fastpost'
},
debug: false
});
</script>
<?php } else { ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_upload_extend'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_upload_extend'];?>
<?php } ?>
</div>
<?php } ?>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="usesig" value="<?php echo $usesigcheck;?>" />
<input type="hidden" name="subject" value="  " />
<p class="ptm pnpost">
<a href="home.php?mod=spacecp&amp;ac=credit&amp;op=rule&amp;fid=<?php echo $_G['fid'];?>" class="y" target="_blank">������ֹ���</a>
<button <?php if($allowpostreply) { ?>type="submit" <?php } elseif(!$_G['uid']) { ?>type="button" onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes')" <?php } if(!$seccodecheck) { ?>onmouseover="checkpostrule('seccheck_fastpost', 'ac=reply');this.onmouseover=null" <?php } ?>name="replysubmit" id="fastpostsubmit" class="pn pnc vm" value="replysubmit" tabindex="5"><strong>����ظ�</strong></button>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_btn_extra'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_btn_extra'];?>
<?php if(helper_access::check_module('follow')) { ?>
<label class="lb"><input type="checkbox" name="adddynamic" class="pc" value="1" />������ת��</label>
<?php } if($_GET['ordertype'] != 1 && empty($_GET['from'])) { ?>
<label for="fastpostrefresh"><input id="fastpostrefresh" type="checkbox" class="pc" />��������ת�����һҳ</label>
<script type="text/javascript">if(getcookie('fastpostrefresh') == 1) {$('fastpostrefresh').checked=true;}</script>
<?php } ?>
</p>
<?php if(empty($_GET['from'])) { ?>
</td>
</tr>
</table>
<?php } ?>
</form>
</div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_bottom'])) echo $_G['setting']['pluginhooks']['viewthread_bottom'];?>
<?php if(($_G['setting']['visitedforums']) && $_G['forum']['status'] != 3) { ?>
<div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
<table cellspacing="0" cellpadding="0">
<tr>
<td id="v_forums">
<h3 class="mbn pbn bbda xg1">������İ��</h3>
<ul class="xl xl1">
<?php echo $_G['setting']['visitedforums'];?>
</ul>
</td>
</tr>
</table>
</div>
<?php } if($_G['medal_list']) { if(is_array($_G['medal_list'])) foreach($_G['medal_list'] as $medalid => $medal) { ?><div id="md_<?php echo $medalid;?>_menu" class="tip tip_4" style="display: none;">
<div class="tip_horn"></div>
<div class="tip_c">
<h4><?php echo $medal['name'];?></h4>
<p><?php echo $medal['description'];?></p>
</div>
</div>
<?php } } if(!IS_ROBOT && !empty($_G['setting']['lazyload'])) { ?>
<script type="text/javascript">
new lazyload();
</script>
<?php } if(!IS_ROBOT && $_G['setting']['threadmaxpages'] > 1) { ?>
<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <?php if($page > 1) { ?>1<?php } else { ?>0<?php } ?>, <?php if($page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']) { ?>1<?php } else { ?>0<?php } ?>, 'forum.php?mod=viewthread&tid=<?php echo $_G['tid'];?><?php if($_GET['authorid']) { ?>&authorid=<?php echo $_GET['authorid'];?><?php } ?>', <?php echo $page;?>);}</script>
<?php } ?>
</div></div>
<?php if($comiis_view_zlb>0) { ?>
</div></div>
<div class="comiis_lbox">
<?php if(!$close_leftinfo) { ?><div class="comiis_divtis">���ѣ�Ϊ��ֹ���ݶ�ʧ�������������DIY��ʱ�����֣�����Ӱ������ʹ�ã�лл!</div><?php } ?>
<div style="height:158px;overflow:hidden;">	
<div class="comiis_irbox comiis_irftbtn cl" id="comiis_irftbtn">
<a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="������" class="kmfbzt" title="��������"></a>
<a href="/k_misign-sign.html" target="_blank" class="kmqd" title="ǩ��"><script type="text/javascript">var dfsj = new Date();document.write('��'+'��һ����������'.charAt(new Date().getDay())+'<br>'+(dfsj.getMonth()+1)+'��'+dfsj.getDate()+'��');</script></a>
<div class="comiis_xmft cl">
<ul>
<li class="a1"><?php if($_G['uid']) { ?><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;reppost=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" onclick="showWindow('reply', this.href)">�ظ�</a><?php } else { ?><span>�ظ�</span><?php } ?></LI>
<li class="a2"><?php if(helper_access::check_module('follow') && $_G['uid']) { ?><a href="home.php?mod=spacecp&amp;ac=follow&amp;op=relay&amp;tid=<?php echo $_G['tid'];?>&amp;from=forum" onclick="showWindow('relaythread', this.href, 'get', 0);">ת��</a><?php } else { ?><span>ת��</span><?php } ?></li>
<li class="a3"><?php if($_G['group']['raterange'] && $_G['uid']) { ?><a href="javascript:;" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?>', 'get', -1);return false;">����</a><?php } else { ?><span>����</span><?php } ?></li>
<li class="a4"><?php if(helper_access::check_module('share') && $_G['uid']) { ?><a href="home.php?mod=spacecp&amp;ac=share&amp;type=thread&amp;id=<?php echo $_G['tid'];?>" onclick="showWindow('sharethread', this.href, 'get', 0);">����</a><?php } else { ?><span class="a4">����</span><?php } ?></li>
</ul>
</div>
</div>	
</div>
<!--[diy=comiis_irbox_diy01s]--><div id="comiis_irbox_diy01s" class="area"></div><!--[/diy]-->
<?php if($_G['forum_thread']['authorid'] && $comiis_view_tit_avt == 2) { ?>	
<div class="comiis_irbox comiis_lzinfo">
<div class="comiis_lzinfo_one">
<div class="lzinfo_img">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" target="_blank" title="�����ҵĿռ�"><?php echo avatar($_G[forum_thread][authorid],middle);?></a>
</div>
<div class="kmuser">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" target="_blank" title="�����ҵĿռ�" c="1"><?php echo $_G['forum_thread']['author'];?></a><?php $comiis_threadnum = '';?><?php if(is_array($postlist)) foreach($postlist as $post) { if($post['first']) { if(is_array($post['verifyicon'])) foreach($post['verifyicon'] as $vid) { ?><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid=<?php echo $vid;?>" target="_blank"><?php if($_G['setting']['verify'][$vid]['icon']) { ?><img src="<?php echo $_G['setting']['verify'][$vid]['icon'];?>" class="vm" alt="<?php echo $_G['setting']['verify'][$vid]['title'];?>" title="<?php echo $_G['setting']['verify'][$vid]['title'];?>" /><?php } else { ?><?php echo $_G['setting']['verify'][$vid]['title'];?><?php } ?></a>
<?php } if(is_array($post['unverifyicon'])) foreach($post['unverifyicon'] as $vid) { ?><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid=<?php echo $vid;?>" target="_blank"><img src="<?php echo $_G['setting']['verify'][$vid]['unverifyicon'];?>" class="vm" alt="<?php echo $_G['setting']['verify'][$vid]['title'];?>" title="<?php echo $_G['setting']['verify'][$vid]['title'];?>" /></a>
<?php } ?><br>
<a href="home.php?mod=spacecp&amp;ac=usergroup&amp;gid=<?php echo $post['groupid'];?>" target="_blank" class="kmtxt"><?php echo $post['authortitle'];?></a><?php
$comiis_threadnum = <<<EOF

<div class="tns"><table cellspacing="0" cellpadding="0">
EOF;
 if(is_array($post['numbercard'])) foreach($post['numbercard'] as $numbercardkey => $numbercard) { if($numbercardkey == 2) { 
$comiis_threadnum .= <<<EOF
<td>
EOF;
 } else { 
$comiis_threadnum .= <<<EOF
<th>
EOF;
 } 
$comiis_threadnum .= <<<EOF

<p><a href="{$numbercard['link']}" class="xi2">{$numbercard['value']}</a></p>{$numbercard['lang']}

EOF;
 if($numbercardkey == 2) { 
$comiis_threadnum .= <<<EOF
</td>
EOF;
 } else { 
$comiis_threadnum .= <<<EOF
</th>
EOF;
 } } 
$comiis_threadnum .= <<<EOF
		
</table></div>

EOF;
?>
<?php } } ?>
</div>
<?php echo $comiis_threadnum;?>
<div class="kmuser_an cl">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" target="_blank">Ta����ҳ</a><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $_G['forum_thread']['authorid'];?>&amp;touid=<?php echo $_G['forum_thread']['authorid'];?>&amp;pmid=0&amp;daterange=2&amp;tid=<?php echo $_G['forum_thread']['tid'];?>" class="kmmsn" onclick="showWindow('sendpm', this.href);">����Ϣ</a>
</div>
</div>			
</div>
<?php } ?>
<!--[diy=comiis_irbox_diy01]--><div id="comiis_irbox_diy01" class="area"></div><!--[/diy]-->
<div class="comiis_irbox comiis_irbox_ss cl">
<!--[diy=comiis_irbox_video]--><div id="comiis_irbox_video" class="area"><div id="framer0Kw1K" class="cl_frame_bm frame move-span cl frame-1"><div id="framer0Kw1K_left" class="column frame-1-c"><div id="framer0Kw1K_left_temp" class="move-span temp"></div><?php block_display('40');?></div></div></div><!--[/diy]-->
<?php if($comiis_navss==0 || $comiis_navss==2) { ?>
<div id="sckm"><?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >����</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">����</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">����</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">��־</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">���</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">�û�</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="comiis_twtsc" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>comiis_scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('comiis_twtsc_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="comiis_twtsc_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />			
<style>
#comiis_twtsc { overflow: visible; position: relative; }
#comiis_sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.comiis_scbar_narrow #comiis_sg { width: 316px; }
#comiis_sg li { padding:0 8px; line-height:30px; font-size:14px; }
#comiis_sg li span { color:#999; }
.comiis_sml { background:#FFF; cursor:default; }
.comiis_smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="comiis_sg">
                <div id="comiis_twtsc_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="comiis_twtsc_type"><a href="javascript:;" id="comiis_twtsc_type" class="showmenu xg1" onclick="showMenu(this.id)" hidefocus="true">����</a></td>
<td class="comiis_twtsc_txt"><input type="text" name="srchtxt" id="comiis_twtsc_txt" onblur="if (value ==''){value='��������������'}" onfocus="if (value =='��������������'){value =''}" value="��������������" autocomplete="off" x-webkit-speech speech /></td>	
<td class="comiis_twtsc_btn"><button type="submit" name="searchsubmit" id="comiis_twtsc_btn" sc="1" class="pn pnc" value="true">&nbsp;&nbsp;</button></td>
</tr>
</table>
</form>
</div>
<?php } ?></div>
<?php } if($comiis_navss==2 && $_G['setting']['search'] && $slist) { ?>
<ul id="comiis_twtsc_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('comiis_twtsc', '<?php echo $searchparams['url'];?>');
</script>
<?php } if($comiis_navss==2) { ?>
<div id="scbar_hot" class="cl">
<?php if($_G['setting']['srchhotkeywords']) { ?>
<span class="z">���ѣ�</span><?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($val=trim($val)) { $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['params'])) { $srchotquery='';
$srchhotkeywords[] .= <<<EOF
 
EOF;
 if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { 
$srchhotkeywords[] .= <<<EOF
 
EOF;
 $srchotquery .= '&' . $key . '=' . rawurlencode($value);
$srchhotkeywords[] .= <<<EOF
 

EOF;
 } } if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" sc="1">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" sc="1">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?>
<?php } } echo implode('', $srchhotkeywords);; } ?>
</div>
<?php } ?>
</div>
<!--[diy=comiis_irbox_diy02km]--><div id="comiis_irbox_diy02km" class="area"></div><!--[/diy]-->
<div id="comiis_viewthread_sidebottom_div"></div>
<!--[diy=comiis_irbox_diy02]--><div id="comiis_irbox_diy02" class="area"></div><!--[/diy]-->
<div class="comiis_bkbox">
<div class="comiis_bkbox_tab">
<ul>
<li class="kmon" id="comiis_bkbox_tab1_1" onMouseOver="switchTab('comiis_bkbox_tab1',1,2,'kmon');">����Ƽ�</li>
<li id="comiis_bkbox_tab1_2" onMouseOver="switchTab('comiis_bkbox_tab1',2,2,'kmon');">�ٱ���</li>
</ul>
</div>
<div id="comiis_bkbox_tab1_c_1" class="comiis_bkbox_list cl">
<!--[diy=comiis_irbox_02]--><div id="comiis_irbox_02" class="area"><div id="frameu2Lvvn" class="cl_frame_bm frame move-span cl frame-1"><div id="frameu2Lvvn_left" class="column frame-1-c"><div id="frameu2Lvvn_left_temp" class="move-span temp"></div><?php block_display('39');?></div></div></div><!--[/diy]-->
</div>
<div id="comiis_bkbox_tab1_c_2" class="comiis_bkbox_list cl" style="display:none">
<!--[diy=comiis_irbox_03]--><div id="comiis_irbox_03" class="area"><div id="framecy9Mt2" class="cl_frame_bm frame move-span cl frame-1"><div id="framecy9Mt2_left" class="column frame-1-c"><div id="framecy9Mt2_left_temp" class="move-span temp"></div><?php block_display('48');?></div></div></div><!--[/diy]-->
</div>	
</div>
<!--[diy=comiis_irbox_nby07]--><div id="comiis_irbox_nby07" class="area"></div><!--[/diy]-->
<div class="comiis_irbox cl">
<div class="comiis_irbox_tit cl" id="comiis_keys">
<h2>ͼ���ȵ�</h2>
</div>
<div class="comiis_irbox_jctj cl">
<!--[diy=comiis_irbox_nbyjctj]--><div id="comiis_irbox_nbyjctj" class="area"><div id="framew1s5yg" class="cl_frame_bm frame move-span cl frame-1"><div id="framew1s5yg_left" class="column frame-1-c"><div id="framew1s5yg_left_temp" class="move-span temp"></div><?php block_display('47');?></div></div></div><!--[/diy]-->
</div>
<!--[diy=comiis_irbox_nby00]--><div id="comiis_irbox_nby00" class="area"></div><!--[/diy]-->
</div>		
<!--[diy=comiis_irbox_diy03]--><div id="comiis_irbox_diy03" class="area"></div><!--[/diy]-->
<div class="comiis_irbox">
<div class="comiis_irbox_tit cl">
<span><a href="#" target="_blank">����</a></span><h2>�����Ƽ�</h2>
</div>
<div class="comiis_irbox_list cl">
<!--[diy=comiis_irbox_04]--><div id="comiis_irbox_04" class="area"><div id="frameG3VosF" class="cl_frame_bm frame move-span cl frame-1"><div id="frameG3VosF_left" class="column frame-1-c"><div id="frameG3VosF_left_temp" class="move-span temp"></div><?php block_display('41');?></div></div></div><!--[/diy]-->
</div>
</div>
<!--[diy=comiis_irbox_diy08]--><div id="comiis_irbox_diy08" class="area"></div><!--[/diy]-->
<div class="comiis_irbox">
<div class="comiis_irbox_tit cl">
<span><a href="misc.php?mod=ranklist&amp;type=member" target="_blank">����</a></span><h2>����ѧ��</h2>
</div>
<div class="comiis_irbox_user cl">
<!--[diy=comiis_irbox_08]--><div id="comiis_irbox_08" class="area"><div id="frameE2OVcC" class="cl_frame_bm frame move-span cl frame-1"><div id="frameE2OVcC_left" class="column frame-1-c"><div id="frameE2OVcC_left_temp" class="move-span temp"></div><?php block_display('42');?><?php block_display('43');?></div></div></div><!--[/diy]-->
</div>
</div>
<!--[diy=comiis_irbox_diy09]--><div id="comiis_irbox_diy09" class="area"></div><!--[/diy]-->
<div class="comiis_irbox" style="margin-bottom:0;">
<div class="comiis_irbox_tit cl">
<span><a href="#" target="_blank">����</a></span><h2>�ͷ�����</h2>
</div>
<div class="comiis_irbox_tel cl">
<!--[diy=comiis_irbox_tel]--><div id="comiis_irbox_tel" class="area"><div id="frameBXycfO" class="cl_frame_bm frame move-span cl frame-1"><div id="frameBXycfO_left" class="column frame-1-c"><div id="frameBXycfO_left_temp" class="move-span temp"></div><?php block_display('44');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_irbox_qqwb cl">
<!--[diy=comiis_irbox_qqwb]--><div id="comiis_irbox_qqwb" class="area"><div id="framemehE44" class="cl_frame_bm frame move-span cl frame-1"><div id="framemehE44_left" class="column frame-1-c"><div id="framemehE44_left_temp" class="move-span temp"></div><?php block_display('45');?></div></div></div><!--[/diy]-->
</div>
<!--[diy=comiis_irbox_nbyewm]--><div id="comiis_irbox_nbyewm" class="area"><div id="frameaZ6X7n" class="cl_frame_bm frame move-span cl frame-1"><div id="frameaZ6X7n_left" class="column frame-1-c"><div id="frameaZ6X7n_left_temp" class="move-span temp"></div><?php block_display('46');?></div></div></div><!--[/diy]-->
</div>
<!--[diy=comiis_irbox_diy10]--><div id="comiis_irbox_diy10" class="area"></div><!--[/diy]-->
</div>
<div style="clear:both;height:0px;overflow:hidden;font-size:0;"></div>
</div>
<?php } ?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<?php if($_G['relatedlinks'] || $_GET['highlight']) { ?>
<script type="text/javascript">
var relatedlink = [];<?php if(is_array($_G['relatedlinks'])) foreach($_G['relatedlinks'] as $key => $link) { ?>relatedlink[<?php echo $key;?>] = {'sname':'<?php echo $link['name'];?>', 'surl':'<?php echo $link['url'];?>'};
<?php } $highlights = explode(' ', str_replace(array('\'', chr(125)), array('&#039;', '&#125;'), dhtmlspecialchars($_GET['highlight'])));?><?php if(is_array($highlights)) foreach($highlights as $word) { $key++;?>relatedlink[<?php echo $key;?>] = {'sname':'<?php echo $word;?>', 'surl':''};
<?php } ?>
relatedlinks('postmessage_<?php echo $_G['forum_firstpid'];?>');
</script>
<?php } if(!empty($_G['cookie']['clearUserdata']) && $_G['cookie']['clearUserdata'] == 'forum') { ?>
<script type="text/javascript">saveUserdata('forum_'+discuz_uid, '')</script>
<?php } ?>
<script type="text/javascript">
<?php if($_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])) { ?>
function showsetcover(obj) {
if(obj.parentNode.id == 'postmessage_<?php echo $_G['forum_firstpid'];?>') {
var defheight = <?php echo $_G['setting']['forumpicstyle']['thumbheight'];?>;
var defwidth = <?php echo $_G['setting']['forumpicstyle']['thumbwidth'];?>;
var newimgid = 'showcoverimg';
var imgsrc = obj.src ? obj.src : obj.file;
if(!imgsrc) return;
var tempimg=new Image();
tempimg.src=imgsrc;
if(tempimg.complete) {
if(tempimg.width < defwidth || tempimg.height < defheight) return;
} else {
return;
}
if($(newimgid) && obj.id != newimgid) {
$(newimgid).id = 'img'+Math.random();
}
if($(newimgid+'_menu')) {
var menudiv = $(newimgid+'_menu');
} else {
var menudiv = document.createElement('div');
menudiv.className = 'tip tip_4 aimg_tip';
menudiv.id = newimgid+'_menu';
menudiv.style.position = 'absolute';
menudiv.style.display = 'none';
obj.parentNode.appendChild(menudiv);
}
menudiv.innerHTML = '<div class="tip_c xs0"><a onclick="showWindow(\'setcover_'+newimgid+'\', this.href)" href="forum.php?mod=ajax&amp;action=setthreadcover&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $_G['forum_firstpid'];?>&amp;fid=<?php echo $_G['fid'];?>&amp;imgurl='+imgsrc+'">��Ϊ����</a></div>';
obj.id = newimgid;
showMenu({'ctrlid':newimgid,'pos':'12'});
}
return;
}
<?php } ?>
function succeedhandle_followmod(url, msg, values) {
var fObj = $('followmod_'+values['fuid']);
if(values['type'] == 'add') {
fObj.innerHTML = '������';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
} else if(values['type'] == 'del') {
fObj.innerHTML = '����TA';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&fuid='+values['fuid'];
}
}
<?php if($_G['blockedpids']) { ?>
var blockedPIDs = [<?php echo implode(',', $_G['blockedpids']); ?>];
<?php } if($postlist && empty($_G['setting']['disfixedavatar'])) { ?>
fixed_avatar([<?php echo implode(',', array_keys($postlist)); ?>], <?php if(empty($_G['setting']['disfixednv_viewthread']) ) { ?>1<?php } else { ?>0<?php } ?>);
<?php } elseif(empty($_G['setting']['disfixednv_viewthread'])) { ?>
fixed_top_nv();
<?php } if($close_leftinfo) { ?>
if($('comiis_viewthread_sidebottom_div') && $('comiis_viewthread_sidebottom')){
$('comiis_viewthread_sidebottom_div').innerHTML = "<div class=\"comiis_irbox comis_kmlzrt\">" + $('comiis_viewthread_sidebottom').innerHTML + "</div>";
}
<?php } ?>
</script>
<?php if($close_leftinfo && $page > 1) { ?>
<script>
jQuery(function(){
if($('comiis_allreplies')){
jQuery("html,body").animate({scrollTop:jQuery("#comiis_allreplies").offset().top - 50}, 1000);
}
});
</script>
<?php } if($close_leftinfo) { ?>
<script src="<?php echo $_G['style']['styleimgdir'];?>/jquery.min.js" type="text/javascript" type="text/javascript"></script>
<script src="<?php echo $_G['style']['styleimgdir'];?>/responsiveslides.min.js" type="text/javascript" type="text/javascript"></script><?php $topsss = ($comiis_header_fx ? ($comiis_header ? '63' : '50') : '0');?><style>.comiis_btn{top:<?php echo $topsss;?>px;}</style>
<script>
var comiis_irftbtn = $('comiis_irftbtn');
var comiis_irftbtnoffset = parseInt(fetchOffset(comiis_irftbtn)['top']);
_attachEvent(window, 'scroll', function () {
var comiis_scrollTopk = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
if(comiis_scrollTopk >= comiis_irftbtnoffset - <?php echo $topsss;?>){
comiis_irftbtn.className = 'comiis_irbox comiis_irftbtn cl comiis_btn';
if (BROWSER.ie && BROWSER.ie < 7) {
comiis_irftbtn.style.position = 'absolute';
comiis_irftbtn.style.top = (comiis_scrollTopk + <?php echo $topsss;?>) + 'px';
}else{
comiis_irftbtn.style.position = 'fixed';
}
}else{
comiis_irftbtn.style.position = 'static';
comiis_irftbtn.className = 'comiis_irbox comiis_irftbtn cl';
}
});
</script>
<?php } include template('common/footer'); ?>