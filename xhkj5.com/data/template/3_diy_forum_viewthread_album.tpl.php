<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('viewthread_album');
0
|| checktplrefresh('./template/comiis_nby/forum/viewthread_album.htm', './template/comiis_nby/forum/viewthread_fastpost.htm', 1524365395, 'diy', './data/template/3_diy_forum_viewthread_album.tpl.php', './template/comiis_nby', 'forum/viewthread_album')
|| checktplrefresh('./template/comiis_nby/forum/viewthread_album.htm', './template/default/forum/viewthread_from_node.htm', 1524365395, 'diy', './data/template/3_diy_forum_viewthread_album.tpl.php', './template/comiis_nby', 'forum/viewthread_album')
|| checktplrefresh('./template/comiis_nby/forum/viewthread_album.htm', './template/default/common/seditor.htm', 1524365395, 'diy', './data/template/3_diy_forum_viewthread_album.tpl.php', './template/comiis_nby', 'forum/viewthread_album')
|| checktplrefresh('./template/comiis_nby/forum/viewthread_album.htm', './template/default/forum/seccheck_post.htm', 1524365395, 'diy', './data/template/3_diy_forum_viewthread_album.tpl.php', './template/comiis_nby', 'forum/viewthread_album')
|| checktplrefresh('./template/comiis_nby/forum/viewthread_album.htm', './template/default/common/upload.htm', 1524365395, 'diy', './data/template/3_diy_forum_viewthread_album.tpl.php', './template/comiis_nby', 'forum/viewthread_album')
|| checktplrefresh('./template/comiis_nby/forum/viewthread_album.htm', './template/comiis_nby/forum/viewthread_node_body.htm', 1524365395, 'diy', './data/template/3_diy_forum_viewthread_album.tpl.php', './template/comiis_nby', 'forum/viewthread_album')
|| checktplrefresh('./template/comiis_nby/forum/viewthread_album.htm', './template/default/common/seccheck.htm', 1524365395, 'diy', './data/template/3_diy_forum_viewthread_album.tpl.php', './template/comiis_nby', 'forum/viewthread_album')
;?><?php include template('common/header'); ?><style>
#hd, #comment, #scrolltop { display:none;}
</style>
<script type="text/javascript">
var albumback = 0;
function changealbumback() {
if(albumback == 0){
$('nv_forum').style.background='#444';
$('nv_forum').className = 'albumback<?php if($comiis_window_width==1) { ?> comiis_wide<?php } ?>';
$('albumback_sw').innerHTML = '����';
albumback = 1;
}else{
$('nv_forum').style.background='#f3f3f3';
$('nv_forum').className = 'albumback_on<?php if($comiis_window_width==1) { ?> comiis_wide<?php } ?>';
$('albumback_sw').innerHTML = '�ص�';
albumback = 0;
}
}
</script>
<script type="text/javascript">var fid = parseInt('<?php echo $_G['fid'];?>'), tid = parseInt('<?php echo $_G['tid'];?>');</script>
<?php if($_G['forum']['ismoderator']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>

<script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(<?php echo $_G['setting']['zoomstatus'];?>);var imagemaxwidth = '<?php echo $_G['setting']['imagemaxwidth'];?>';var aimgcount = new Array();</script>

<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?> <em>&rsaquo;</em> <a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>"><?php echo $_G['forum_thread']['short_subject'];?></a>
</div>
</div>

<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_beginline'])) echo $_G['setting']['pluginhooks']['viewthread_beginline'];?>

<div id="ct" class="ct2 wp cl">
<div class="pic_h bm vw pl">
<div class="h hm cl">
<div class="img_tit_t cl">				
<h1 class="ph z"><?php echo $_G['forum_thread']['subject'];?></h1>
<div class="ph_r_con xg1 y vm">�鿴��:<span class="xi1"> <?php echo $_G['forum_thread']['views'];?></span> <span class="pipe">|</span> ������: <span class="xi1"><?php echo $_G['forum_thread']['replies'];?></span> <span class="pipe">|</span> <a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=<?php echo $_G['tid'];?>" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' ���ղ�'">�ղ� <span id="favoritenumber" class="xi1"><?php echo $_G['forum_thread']['favtimes'];?></span></a><?php if((($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))) { ?>
<span class="pipe">|</span><a href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>"><?php if($_G['forum_thread']['special'] == 2 && !$post['message']) { ?>��ӹ�̨����<?php } else { ?><span class="xi2">�༭</span></a><?php } } ?></div>
</div>
<div class="xg1 z">
<a id="albumback_sw" href="javascript:void(0);" onclick="changealbumback();">�ص�</a>
<span class="pipe">|</span>
<span class="keyboard-tip">��ʾ��֧�ּ��̷�ҳ&lt;-�� ��-&gt;</span>
</div>
<div class="xg1 y"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>" class="thread_mod xg1"><span>����ģʽ</span></a></div>
</div>
<div class="d">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="780">
<div class="photo_pic">
<div id="photo_pic" style="position: relative; text-align: center;">
<img alt="" id="pic" style="max-width: 780px;_width: 780px;" src="<?php echo $imglist['url']['0'];?>">
</div>
<div id="imagelist_nav">
<div class="imagelist_album">
<a id="goleft" class="left" onclick="imagelist_go('prev');" href="javascript:void(0);"></a>
<div id="imagelistwarp" class="left">
<ul id="imagelistthumb" style="width: <?php echo count($imglist['aid']) * 110;; ?>px; left: 0px;"><img src="static/image/common/loading.gif" width="16" height="16" class="vm" /> ��ͼ���У����Ժ�......</ul>
<a id="currentpic" class="mask" href="javascript:void(0)" style="left: 0px;"></a>
</div>
<a id="goright" class="right" onclick="imagelist_go('next');" href="javascript:void(0);"></a>
</div>
</div>
</div>
<?php if(!empty($imglist)) { ?>
<script type="text/javascript" reload="1">
var imagewidth = 110;
var curnum = 0;
var imagecount = '<?php echo count($imglist['aid']);; ?>';
function imagelist_go(type) {
var width = '<?php echo count($imglist['aid']) * 110;; ?>';
var left = parseInt($('imagelistthumb').style.left.substr(0, ($('imagelistthumb').style.left.length - 2)));
var curleft = parseInt($('currentpic').style.left.substr(0, ($('imagelistthumb').style.left.length - 2)));
if(type == 'next') {
if(left > -(width - 730)) {
newleft = imagewidth * 4;
if(left - newleft < -(width - 730)) {
newleft = width - 730 - left;
}
imagelist_scrolleft('imagelistthumb', left, newleft);
imagelist_scrolleft('currentpic', curleft, newleft);
}
} else {
if(left < 0) {
newleft = imagewidth * 4;
if(left + newleft > 0) {
newleft = -left;
}
imagelist_scrolleft('imagelistthumb', left, newleft, 'add');
imagelist_scrolleft('currentpic', curleft, newleft, 'add');
}
}
}
function imagelist_scrolleft(id, left, num, type) {
if(type == 'add') {
left += num;
} else {
left -= num;
}
$(id).style.left = left +'px';
}
function current_pic(n) {
curnum = n;
var left = parseInt($('imagelistthumb').style.left.substr(0, ($('imagelistthumb').style.left.length - 2)));
$('pic').src=imglist['url'][n];
var curleft = imagewidth * n;
if(imagecount > 7 && n >= 4) {
if(n < (imagecount - 4)) {
curleft = imagewidth * 3;
imagelist_scrolleft('imagelistthumb', 0, imagewidth * (n-3));
} else {
curleft = imagewidth * (7 - (imagecount - n));
imagelist_scrolleft('imagelistthumb', 0, imagewidth * (imagecount-7));
}
} else {
imagelist_scrolleft('imagelistthumb', 0, 0);
}
$('currentpic').style.left = curleft+'px';
}<?php $imagelistkey = dsign($_G[tid].'|100|100')?>var imagelistkey = '<?php echo $imagelistkey;?>';
var imglist = new Array();
var imagelist_html = '';
imglist['aid'] = [<?php echo dimplode($imglist['aid']);; ?>];
imglist['url'] = [<?php echo dimplode($imglist['url']);; ?>];
var count = imglist['aid'].length;
for(i = 0; i < count; i++) {
imagelist_html += '<li><div class="">' +'<img src="forum.php?mod=image&amp;aid=' + imglist['aid'][i] + '&amp;size=100x100&amp;key=' + imagelistkey + '&amp;atid=<?php echo $post['tid'];?>" width="100" height="100" onclick="current_pic('+i+');"/><span>'+(i+1)+'/'+count+'</span></div></li>';
}
$('imagelistthumb').innerHTML = imagelist_html;

function createElem(e){
var obj = document.createElement(e);
obj.style.position = 'absolute';
obj.style.zIndex = '1';
obj.style.cursor = 'pointer';
obj.onmouseout = function(){ this.style.background = 'none';}
return obj;
}
function viewPhoto(){
var divappend = 0;
if(!$('pic-prev')) {
var pager = createElem('div');
var pre = createElem('div');
var next = createElem('div');
pager.id='pager';
pre.id='pic-prev';
next.id='pic-next';
divappend = 1;
} else {
var pager = $('pager');
var pre = $('pic-prev');
var next = $('pic-next');
}
var cont = $('photo_pic');
var tar = $('pic');
var w = 390;
var objpos = fetchOffset(tar);
pager.style.position = 'absolute';
pager.style.left = '0px';
pager.style.top = '0px';
pager.style.width = '780px';
pager.style.height = tar.height + 'px';
pre.style.left = 0;
next.style.right = 0;
pre.style.width = next.style.width = w + 'px';
pre.style.height = next.style.height = tar.height + 'px';
pre.innerHTML = next.innerHTML = '<img src="<?php echo IMGDIR;?>/emp.gif" width="' + w + '" height="' + tar.height + '" />';

pre.onmouseover = function(){ this.style.background = 'url(<?php echo IMGDIR;?>/pic-prev.png) no-repeat 0 50%'; }
pre.onclick = function(){if(curnum>=1) {$('pic').src=imglist['url'][curnum-1];current_pic(curnum-1);}}
pre.title = '';

next.onmouseover = function(){ this.style.background = 'url(<?php echo IMGDIR;?>/pic-next.png) no-repeat 100% 50%'; }
next.onclick = function(){if(curnum < imagecount - 1) {$('pic').src=imglist['url'][curnum+1];current_pic(curnum+1);}}
next.title = '';

//cont.style.position = 'relative';
if(divappend == 1) {
cont.appendChild(pager);
pager.appendChild(pre);
pager.appendChild(next);
}

}
var onopen = 0;
$('pic').onload = function(){
viewPhoto();
if(onopen == 0) {
onopen = 1;
} else {
var imagepos = fetchOffset($('photo_pic'));
document.documentElement.scrollTop = imagepos['top'];
}
}
document.onkeyup = function(e){
e = e ? e : window.event;
var tagname = BROWSER.ie ? e.srcElement.tagName : e.target.tagName;
if(tagname == 'INPUT' || tagname == 'TEXTAREA') return;
actualCode = e.keyCode ? e.keyCode : e.charCode;
if(actualCode == 39) {
$('pic-next').click();
}
if(actualCode == 37) {
$('pic-prev').click();
}
}
</script>
<?php } if(!IS_ROBOT && $post['first'] && !$_G['forum_thread']['archiveid']) { if(!empty($lastmod['modaction'])) { ?><div class="modact xs1"><a href="forum.php?mod=misc&amp;action=viewthreadmod&amp;tid=<?php echo $_G['tid'];?>" title="����ģʽ" onclick="showWindow('viewthreadmod', this.href)">�������� <?php echo $lastmod['modusername'];?> �� <?php echo $lastmod['moddateline'];?> <?php echo $lastmod['modaction'];?></a></div><?php } if($post['invisible'] == 0) { ?>
<div id="p_btn" class="mtw mbm cl xs1" style="display:none;">
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_useraction_prefix'])) echo $_G['setting']['pluginhooks']['viewthread_useraction_prefix'];?>
<?php if(helper_access::check_module('share')) { ?>
<a href="home.php?mod=spacecp&amp;ac=share&amp;type=thread&amp;id=<?php echo $_G['tid'];?>" id="k_share" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('sharenumber').innerHTML + ' �˷���'"><i><img src="<?php echo IMGDIR;?>/oshr.png" alt="����" />����<span id="sharenumber"><?php echo $_G['forum_thread']['sharetimes'];?></span></i></a>
<?php } ?>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=<?php echo $_G['tid'];?>" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' ���ղ�'"><i><img src="<?php echo IMGDIR;?>/fav.gif" alt="�ղ�" />�ղ�<span id="favoritenumber"><?php echo $_G['forum_thread']['favtimes'];?></span></i></a>
<?php if(($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']) { if(!empty($_G['setting']['recommendthread']['addtext'])) { ?>
<a id="recommend_add" href="forum.php?mod=misc&amp;action=recommend&amp;do=add&amp;tid=<?php echo $_G['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_add').innerHTML + ' ��<?php echo $_G['setting']['recommendthread']['addtext'];?>'"><i><img src="<?php echo IMGDIR;?>/rec_add.gif" alt="<?php echo $_G['setting']['recommendthread']['addtext'];?>" /><?php echo $_G['setting']['recommendthread']['addtext'];?><span id="recommendv_add"><?php echo $_G['forum_thread']['recommend_add'];?></span></i></a>
<?php } if(!empty($_G['setting']['recommendthread']['subtracttext'])) { ?>
<a id="recommend_subtract" href="forum.php?mod=misc&amp;action=recommend&amp;do=subtract&amp;tid=<?php echo $_G['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(-<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_subtract').innerHTML + ' ��<?php echo $_G['setting']['recommendthread']['subtracttext'];?>'"><i><img src="<?php echo IMGDIR;?>/rec_subtract.gif" alt="<?php echo $_G['setting']['recommendthread']['subtracttext'];?>" /><?php echo $_G['setting']['recommendthread']['subtracttext'];?><span id="recommendv_subtract"><?php echo $_G['forum_thread']['recommend_sub'];?></span></i></a>
<?php } } if($_G['group']['raterange'] && $post['authorid']) { ?>
<a href="javascript:;" id="ak_rate" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?><?php if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } ?>');return false;" title="<?php echo count($postlist[$post['pid']]['totalrate']);; ?> ������"><i><img src="<?php echo IMGDIR;?>/agree.gif" alt="����" />����</i></a>
<?php } if($post['first'] && $_G['uid'] && $_G['uid'] == $post['authorid']) { ?>
<a href="misc.php?mod=invite&amp;action=thread&amp;id=<?php echo $_G['tid'];?>" onclick="showWindow('invite', this.href, 'get', 0);"><i><img src="<?php echo IMGDIR;?>/activitysmall.gif" alt="����" />����</i></a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_useraction'])) echo $_G['setting']['pluginhooks']['viewthread_useraction'];?>
</div>
<?php } } ?>
</td>
<td valign="top" class="album_side_r">
<div class="album_side">
<div class="hm mtn mbn">
<a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" class="xi2"><img src="<?php echo $_G['setting']['ucenterurl'];?>/avatar.php?uid=<?php echo $post['authorid'];?>&size=small" /></a>
<span class="tit_author">
<?php if($_G['forum_thread']['author'] && $_G['forum_thread']['authorid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>"><?php echo $_G['forum_thread']['author'];?></a>
<?php } else { if($_G['forum']['ismoderator']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>">����</a>
<?php } else { ?>
����
<?php } } ?>
</span>
</div>
<div class="date"><span>����ʱ��:</span> <?php echo dgmdate($_G[forum_thread][dateline]);?></div>
<div class="album_info">
<h3>����ժҪ: </h3>
<p><?php echo $post['message'];?></p>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>

<div class="bm vw pl" id="comment">
<div class="bm_h cl">
<h2>�ظ�</h2>
</div>
<?php if($_G['setting']['fastpost'] && $allowpostreply && !$_G['forum_thread']['archiveid']) { ?>
<div class="bm_c"><script type="text/javascript">
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
</div></div>
<?php } ?>
<div class="bm_c">
<div id="postlistreply" class="xld xlda mbm"><div id="post_new" class="viewthread_table" style="display: none"></div></div><?php $postcount = 0;?><?php if(is_array($postlist)) foreach($postlist as $postid => $post) { if($postid && !$post['first']) { ?>
<div id="post_<?php echo $post['pid'];?>" class="xld xlda mbm"><?php $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);?><dl class="bbda cl">
<?php if(empty($post['deleted'])) { if($post['author'] && !$post['anonymous']) { ?>
<dd class="m avt"><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>"><?php echo avatar($post[authorid], small);?></a></dd>
<?php } else { ?>
<dd class="m avt"><img src="<?php echo STATICURL;?>image/magic/hidden.gif" alt="hidden" /></dd>
<?php } ?>
<dt>
<span class="y xw0">
<?php if(!$post['first'] && $_G['forum_thread']['special'] == 5) { ?>
<label class="pdbts pdbts_<?php echo intval($post['stand']); ?>">
<?php if($post['stand'] == 1) { ?><a class="v" href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;filter=debate&amp;stand=1<?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" title="ֻ������">����</a>
<?php } elseif($post['stand'] == 2) { ?><a class="v" href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;filter=debate&amp;stand=2<?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" title="ֻ������">����</a>
<?php } else { ?><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;filter=debate&amp;stand=0<?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" title="ֻ������">����</a><?php } if($post['stand']) { ?>
<a class="b" href="forum.php?mod=misc&amp;action=debatevote&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" id="voterdebate_<?php echo $post['pid'];?>" onclick="ajaxmenu(this);doane(event);">֧�� <?php echo $post['voters'];?></a>
<?php } ?>
</label>
<?php } if($_G['forum_thread']['special'] == 3 && ($_G['forum']['ismoderator'] && (!$_G['setting']['rewardexpiration'] || $_G['setting']['rewardexpiration'] > 0 && ($_G['timestamp'] - $_G['forum_thread']['dateline']) / 86400 > $_G['setting']['rewardexpiration']) || $_G['forum_thread']['authorid'] == $_G['uid']) && $post['authorid'] != $_G['forum_thread']['authorid'] && $post['first'] == 0 && $_G['uid'] != $post['authorid'] && $_G['forum_thread']['price'] > 0) { ?>
<a href="javascript:;" onclick="setanswer(<?php echo $post['pid'];?>, '<?php echo $_GET['from'];?>')">��Ѵ�</a>
<?php } if($_G['group']['raterange'] && $post['authorid']) { ?>
<a href="javascript:;" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?><?php if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } ?>', 'get', -1);return false;">����</a>
<?php } if($allowpostreply && $post['invisible'] == 0) { if($post['allowcomment']) { ?>
<a href="javascript:;" onclick="showWindow('comment', 'forum.php?mod=misc&action=comment&tid=<?php echo $post['tid'];?>&pid=<?php echo $post['pid'];?>&extra=<?php echo $_GET['extra'];?>&page=<?php echo $page;?><?php if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } if($_G['forum_thread']['special'] == 127) { ?>&special=<?php echo $specialextra;?><?php } ?>', 'get', 0)">����</a>
<?php } if(!$needhiddenreply) { if($post['first']) { ?>
<a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;reppost=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)">�ظ�</a>
<?php } else { ?>
<a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;repquote=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)">�ظ�</a>
<?php } } } if((($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))) { ?>
<a href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>"><?php if($_G['forum_thread']['special'] == 2 && !$post['message']) { ?>��ӹ�̨����<?php } else { ?>�༭</a><?php } } ?>

</span>
<?php if($post['authorid'] && !$post['anonymous']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" class="xi2"><?php echo $post['author'];?></a><?php echo $authorverifys;?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postheader'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postheader'][$postcount];?>
<em id="author_<?php echo $post['pid'];?>"> ������</em>
<?php } elseif($post['authorid'] && $post['username'] && $post['anonymous']) { ?>
����
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postheader'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postheader'][$postcount];?>
<em id="author_<?php echo $post['pid'];?>"> ������</em>
<?php } elseif(!$post['authorid'] && !$post['username']) { ?>
�ο�
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postheader'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postheader'][$postcount];?>
<em id="author_<?php echo $post['pid'];?>"> ������</em>
<?php } ?>
<span class="xg1 xw0"><?php echo $post['dateline'];?></span>
</dt>
<dd class="z"><div class="pcb">
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
</div></dd>
<?php } else { ?>
<dd>��Ч¥�㣬�����Ѿ���ɾ��</dd>
<?php } ?>
</dl>


<?php if(!empty($aimgs[$post['pid']])) { ?>
<script type="text/javascript" reload="1">
aimgcount[<?php echo $post['pid'];?>] = [<?php echo dimplode($aimgs[$post['pid']]);; ?>];
attachimggroup(<?php echo $post['pid'];?>);
<?php if(empty($_G['setting']['lazyload'])) { if(!$post['imagelistthumb']) { ?>
attachimgshow(<?php echo $post['pid'];?>);
<?php } else { ?>
attachimgshow(<?php echo $post['pid'];?>, 1);
<?php } } if($post['imagelistthumb']) { ?>
attachimglstshow(<?php echo $post['pid'];?>, <?php echo intval($_G['setting']['lazyload']); ?>, 0, '<?php echo $_G['setting']['showexif'];?>');
<?php } ?>
</script>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_endline'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_endline'][$postcount];?>

</div>
<?php } $postcount++;?><?php } ?>
</div>
</div>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_bottom'])) echo $_G['setting']['pluginhooks']['viewthread_bottom'];?>

<?php if(!IS_ROBOT && !empty($_G['setting']['lazyload'])) { ?>
<script type="text/javascript">
new lazyload();
</script>
<?php } ?>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>