<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_blog');
0
|| checktplrefresh('./template/default/home/spacecp_blog.htm', './template/default/home/editor_image_menu.htm', 1524649988, '3', './data/template/3_3_home_spacecp_blog.tpl.php', './template/comiis_nby', 'home/spacecp_blog')
|| checktplrefresh('./template/default/home/spacecp_blog.htm', './template/default/common/seccheck.htm', 1524649988, '3', './data/template/3_3_home_spacecp_blog.tpl.php', './template/comiis_nby', 'home/spacecp_blog')
|| checktplrefresh('./template/default/home/spacecp_blog.htm', './template/default/common/upload.htm', 1524649988, '3', './data/template/3_3_home_spacecp_blog.tpl.php', './template/comiis_nby', 'home/spacecp_blog')
;?><?php include template('common/header'); if($_GET['op'] == 'delete') { ?>
<h3 class="flb">
<em>ɾ����־</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" class="flbc" title="�ر�">�ر�</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=blog&amp;op=delete&amp;blogid=<?php echo $blogid;?>">
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="deletesubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="c">ȷ��ɾ��ָ������־��?</div>
<p class="o pns">
<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>ȷ��</strong></button>
</p>
</form>
<?php } elseif($_GET['op'] == 'stick') { ?>
<h3 class="flb">
<em><?php if($stickflag) { ?>�ö���־<?php } else { ?>ȡ���ö���־<?php } ?></em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" class="flbc" title="�ر�">�ر�</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=blog&amp;op=stick&amp;blogid=<?php echo $blogid;?>">
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="sticksubmit" value="true" />
<input type="hidden" name="stickflag" value="<?php echo $stickflag;?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="c"><?php if($stickflag) { ?>ȷ���ö�ָ������־��<?php } else { ?>ȷ��Ҫȡ���ö�ָ������־��<?php } ?>?</div>
<p class="o pns">
<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>ȷ��</strong></button>
</p>
</form>

<?php } elseif($_GET['op'] == 'addoption') { ?>
<h3 class="flb">
<em>��������</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="blogCancelAddOption('<?php echo $_GET['oid'];?>');hideWindow('<?php echo $_GET['handlekey'];?>');return false;" class="flbc" title="�ر�">�ر�</a></span><?php } ?>
</h3>
<div class="c">
<p class="mtm mbm"><label for="newsort">����: <input type="text" name="newsort" id="newsort" class="px" size="30" /></label></p>
</div>
<p class="o pns">
<button type="button" name="btnsubmit" value="true" class="pn pnc" onclick="if(blogAddOption('newsort', '<?php echo $_GET['oid'];?>'))hideWindow('<?php echo $_GET['handlekey'];?>');"><strong>����</strong></button>
</p>
<script type="text/javascript">
$('newsort').focus();
</script>

<?php } elseif($_GET['op'] == 'edithot') { ?>
<h3 class="flb">
<em>�����ȶ�</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" class="flbc" title="�ر�">�ر�</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=blog&amp;op=edithot&amp;blogid=<?php echo $blogid;?>">
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="hotsubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="c">
�µ��ȶ�:<input type="text" name="hot" value="<?php echo $blog['hot'];?>" size="10" class="px" />
</div>
<p class="o pns">
<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>ȷ��</strong></button>
</p>
</form>
<?php } else { ?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<?php if($space['self']) { ?>
<a href="home.php?mod=space&amp;do=blog">��־</a>
<?php } else { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?> �ĸ��˿ռ�</a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=we">��־</a>
<?php } ?>
<em>&rsaquo;</em>
<?php if($blog['blogid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=blog&amp;id=<?php echo $blog['blogid'];?>"><?php echo $blog['subject'];?></a> <em>&rsaquo;</em> �༭��־
<?php } else { ?>
������־
<?php } ?>
</div>
</div>

<div id="ct" class="wp cl">
<div class="mn">
<div class="bm cl">
<div class="bm_h">
<h1>
<span class="y xs1 xw0"><a href="javascript:history.go(-1);">������һҳ</a></span>
<?php if($blog['blogid']) { ?>�༭��־<?php } else { ?>������־<?php } ?>
</h1>
</div>
<div class="bm_c">
<script src="<?php echo STATICURL;?>image/editor/editor_function.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>home_blog.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<form id="ttHtmlEditor" method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?><?php if($_GET['modblogkey']) { ?>&amp;modblogkey=<?php echo $_GET['modblogkey'];?><?php } ?>" onsubmit="validate(this);" enctype="multipart/form-data">

<?php if(!empty($_G['setting']['pluginhooks']['spacecp_blog_top'])) echo $_G['setting']['pluginhooks']['spacecp_blog_top'];?>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<td><input type="text" id="subject" name="subject" value="<?php echo $blog['subject'];?>" size="60" <?php if($_GET['op'] != 'edit') { ?>onblur="relatekw();"<?php } ?> class="px" style="width: 63%;" /></td>
</tr>
<tr>
<td><div id="icoImg_image_menu" style="display: none" unselectable="on">
<table width="100%" cellpadding="0" cellspacing="0" class="fwin"><tr><td class="t_l"></td><td class="t_c"></td><td class="t_r"></td></tr><tr><td class="m_l">&nbsp;&nbsp;</td><td class="m_c"><div class="mtm mbm">
<ul class="tb tb_s cl" id="icoImg_image_ctrl" style="margin-top:0;margin-bottom:0;">
<li class="y"><span class="flbc" onclick="hideAttachMenu('icoImg_image_menu')">�ر�</span></li>
<?php if($_G['basescript'] == 'home' && $_G['group']['allowupload'] || $_G['basescript'] == 'portal') { ?>
<li class="current" id="icoImg_btn_imgattachlist"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('imgattachlist');">�ϴ�ͼƬ</a></li>
<?php } if(helper_access::check_module('album')) { ?>
<li id="icoImg_btn_albumlist" <?php if($_G['basescript'] == 'home' && !$_G['group']['allowupload']) { ?> class="current"<?php } ?>><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('albumlist');">���ͼƬ</a></li>
<?php } ?>
<li id="icoImg_btn_www" <?php if($_G['basescript'] == 'home' && !$_G['group']['allowupload'] && !helper_access::check_module('album')) { ?> class="current"<?php } ?>><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('www');">����ͼƬ</a></li>
</ul>
<div class="p_opt popupfix" unselectable="on" id="icoImg_www" <?php if($_G['basescript'] == 'home' && ($_G['group']['allowupload'] || helper_access::check_module('album')) || $_G['basescript'] == 'portal') { ?> style="display: none"<?php } ?>>
<table cellpadding="0" cellspacing="0" width="100%">
<tr class="xg1">
<th>������ͼƬ��ַ</th>
<th>��(��ѡ)</th>
<th>��(��ѡ)</th>
</tr>
<tr>
<td width="74%"><input type="text" id="icoImg_image_param_1" onchange="loadimgsize(this.value)" style="width: 95%;" value="" class="px" autocomplete="off" /></td>
<td width="13%"><input id="icoImg_image_param_2" size="3" value="" class="px p_fre" autocomplete="off" /></td>
<td width="13%"><input id="icoImg_image_param_3" size="3" value="" class="px p_fre" autocomplete="off" /></td>
</tr>
<tr>
<td colspan="3" class="pns ptn">
<button type="button" class="pn pnc" onclick="insertWWWImg();"><strong>�ύ</strong></button>
</td>
</tr>
</table>
</div>
<div class="p_opt" unselectable="on" id="icoImg_imgattachlist"<?php if($_G['basescript'] == 'home' && !$_G['group']['allowupload']) { ?> style="display: none;"<?php } ?>>
<div class="pbm bbda cl">
<div id="uploadPanel" class="y">
<?php if($_G['basescript'] != 'portal') { ?>
�ϴ���:
<select name="savealbumid" id="savealbumid" class="ps vm" onchange="if(this.value == '-1') {selectCreateTab(0);}">
<option value="0">Ĭ�����</option><?php if(is_array($albums)) foreach($albums as $value) { ?><option value="<?php echo $value['albumid'];?>"><?php echo $value['albumname'];?></option>
<?php } ?>
<option value="-1" style="color:red;">+���������</option>
</select>
<?php } ?>
</div>
<div id="createalbum" class="y" style="display:none">
<input type="text" name="newalbum" id="newalbum" class="px vm" value="�������������"  onfocus="if(this.value == '�������������') {this.value = '';}" onblur="if(this.value == '') {this.value = '�������������';}" />
<button type="button" class="pn pnc" onclick="createNewAlbum();"><span>����</span></button>
<button type="button" class="pn" onclick="selectCreateTab(1);"><span>ȡ��</span></button>
</div>
<span id="imgSpanButtonPlaceholder"></span>
</div>
<div class="upfilelist upfl bbda">
<div id="imgattachlist">
<?php if($_G['basescript'] == 'portal') { ?><?php echo $article['attachs'];?><?php } ?>
</div>
<div class="fieldset flash" id="imgUploadProgress"></div>
</div>
<p class="notice">���ͼƬ��ӵ��༭��������</p>
</div>
<?php if(helper_access::check_module('album')) { ?>
<div class="p_opt" unselectable="on" id="icoImg_albumlist" <?php if($_G['basescript'] == 'home' && $_G['group']['allowupload'] || $_G['basescript'] == 'portal') { ?> style="display: none;"<?php } ?>>
<div class="upfilelist pbm bbda">
ѡ�����:
<select name="view_albumid" onchange="picView(this.value, 'albumphoto')" class="ps">
<option value="none">ѡ�����</option>
<option value="0">Ĭ�����</option><?php if(is_array($albums)) foreach($albums as $value) { ?><option value="<?php echo $value['albumid'];?>"><?php echo $value['albumname'];?></option>
<?php } ?>
</select>
<div id="albumphoto"></div>
</div>
<p class="notice">���ͼƬ��ӵ��༭��������</p>
</div>
<?php } ?>
</div></td><td class="m_r"></td></tr><tr><td class="b_l"></td><td class="b_c"></td><td class="b_r"></td></tr></table>
</div>


<div id="icoAttach_attach_menu" style="display: none" unselectable="on">
<table width="100%" cellpadding="0" cellspacing="0" class="fwin">
<tr>
<td class="t_l"></td>
<td class="t_c"></td>
<td class="t_r"></td>
</tr>
<tr>
<td class="m_l">&nbsp;&nbsp;</td>
<td class="m_c">
<div class="mtm mbm">
<ul class="tb tb_s cl" id="icoAttach_attach_ctrl" style="margin-top:0;margin-bottom:0;">
<li class="y"><span class="flbc" onclick="hideAttachMenu('icoAttach_attach_menu')">�ر�</span></li>
<li class="current" id="icoAttach_btn_attachlist"><a href="javascript:;" hidefocus="true" onclick="switchAttachbutton('attachlist');">�ϴ�����</a></li>
</ul>
<div class="p_opt post_tablelist" unselectable="on" id="icoAttach_attachlist">
<div class="pbm bbda">
<span id="spanButtonPlaceholder"></span>
</div>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="attach_tblheader" class="mtn bbs" style="display: none;">
<tr>
<td class="atnu"></td>
<td class="atna pbn">�ļ���</td>
<td class="atds pbn">�ļ���С</td>
<td class="attc"></td>
</tr>
</table>
<div class="upfl">
<div id="attachlist"></div>
<div class="fieldset flash" id="fsUploadProgress"></div>
</div>
<div class="notice upnf">
<p id="attach_notice">����ļ�����������ӵ�������</p>
</div>
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

<iframe name="attachframe" id="attachframe" style="display: none;"></iframe>

<?php if($_G['basescript'] == 'home' && empty($_G['setting']['pluginhooks']['spacecp_blog_upload_extend']) || $_G['basescript'] == 'portal' && empty($_G['setting']['pluginhooks']['portalcp_top_upload_extend'])) { if(empty($_G['uploadjs'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>upload.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php $_G['uploadjs'] = 1;?><?php } ?><script type="text/javascript">
var attachUpload = new SWFUpload({
// Backend Settings
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=<?php if($_G['basescript'] == 'portal') { ?>portal<?php } else { ?>album<?php } ?>",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"<?php if($_G['basescript'] == 'portal') { ?>,"aid":<?php echo $aid;?>,"catid":<?php echo $catid;?><?php } ?>},

// File Upload Settings
file_size_limit : "<?php echo $swfconfig['max'];?>",	// 100MB
<?php if($_G['basescript'] == 'portal') { ?>
file_types : "<?php echo $swfconfig['attachexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['attachexts']['depict'];?>",
<?php } else { ?>
file_types : "<?php echo $swfconfig['imageexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['imageexts']['depict'];?>",
<?php } ?>
file_upload_limit : 0,
file_queue_limit : 0,

// Event Handler Settings (all my handlers are in the Handler.js file)
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

// Button Settings
button_image_url : "<?php echo IMGDIR;?>/uploadbutton.png",
button_placeholder_id : "spanButtonPlaceholder",
button_width: 100,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",

custom_settings : {
progressTarget : "fsUploadProgress",
uploadSource: 'portal',
uploadType: 'attach',
imgBoxObj: $('attachlist')
//thumbnail_height: 400,
//thumbnail_width: 400,
//thumbnail_quality: 100
},

// Debug Settings
debug: false
});
var upload = new SWFUpload({
// Backend Settings
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=<?php if($_G['basescript'] == 'portal') { ?>portal<?php } else { ?>album<?php } ?>",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"<?php if($_G['basescript'] == 'portal') { ?>,"aid":<?php echo $aid;?>,"catid":<?php echo $catid;?><?php } ?>},

// File Upload Settings
file_size_limit : "<?php echo $swfconfig['max'];?>",	// 100MB
file_types : "<?php echo $swfconfig['imageexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['imageexts']['depict'];?>",
file_upload_limit : 0,
file_queue_limit : 0,

// Event Handler Settings (all my handlers are in the Handler.js file)
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

// Button Settings
button_image_url : "<?php echo IMGDIR;?>/uploadbutton.png",
button_placeholder_id : "imgSpanButtonPlaceholder",
button_width: 100,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",

custom_settings : {
progressTarget : "imgUploadProgress",
uploadSource: 'portal',
uploadType: <?php if($_G['basescript'] == 'portal') { ?>'portal'<?php } else { ?>'blog'<?php } ?>,
imgBoxObj: $('imgattachlist')
//thumbnail_height: 400,
//thumbnail_width: 400,
//thumbnail_quality: 100
},

// Debug Settings
debug: false
});
</script>
<?php } else { if($_G['basescript'] == 'home') { ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_blog_upload_extend'])) echo $_G['setting']['pluginhooks']['spacecp_blog_upload_extend'];?>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<?php if(!empty($_G['setting']['pluginhooks']['portalcp_top_upload_extend'])) echo $_G['setting']['pluginhooks']['portalcp_top_upload_extend'];?>
<?php } } ?>
<script type="text/javascript">
function switchImagebutton(btn) {
switchButton(btn, 'image');
$('icoImg_image_menu').style.height = '';
doane();
}
function hideAttachMenu(id) {
if($(id)) {
$(id).style.visibility = 'hidden';
}
}

function insertWWWImg() {
var urlObj = $('icoImg_image_param_1');
if(urlObj.value != '') {
var widthObj = $('icoImg_image_param_2');
var heightObj = $('icoImg_image_param_3');
insertImage(urlObj.value, null, widthObj.value, heightObj.value);
urlObj.value = widthObj.value = heightObj.value = '';
}
}
//note ѡ��ͼƬ
function picView(albumid, listid) {
if(albumid == 'none') {
$(listid).innerHTML = '';
} else {
ajaxget('home.php?mod=misc&ac=ajax&op=album&id='+albumid+'&ajaxdiv=albumpic_body', listid);
}
}
function createNewAlbum() {
var inputObj = $('newalbum');
if(inputObj.value == '' || inputObj.value == '�������������') {
inputObj.value = '�������������';
} else {
var x = new Ajax();
x.get('home.php?mod=misc&ac=ajax&op=createalbum&inajax=1&name=' + inputObj.value, function(s){
var aid = parseInt(s);
var albumList = $('savealbumid');
var haveoption = false;
for(var i = 0; i < albumList.options.length; i++) {
if(albumList.options[i].value == aid) {
albumList.selectedIndex = i;
haveoption = true;
break;
}
}
if(!haveoption) {
var oOption = document.createElement("OPTION");
oOption.text = trim(inputObj.value);
oOption.value = aid;
albumList.options.add(oOption);
albumList.selectedIndex = albumList.options.length-1;
}
inputObj.value = ''
});
selectCreateTab(1)
}
}
function selectCreateTab(flag) {
var vwObj = $('uploadPanel');
var opObj = $('createalbum');
var selObj = $('savealbumid');
if(flag) {
vwObj.style.display = '';
opObj.style.display = 'none';
selObj.value = selObj.options[0].value;
} else {
vwObj.style.display = 'none';
opObj.style.display = '';
}
}
</script>
<textarea class="pt" name="message" id="uchome-ttHtmlEditor" style="height:100%;width:100%;display:none;border:0"><?php echo $blog['message'];?></textarea>
<div style="border:1px solid #C5C5C5;height:400px;"><iframe src='home.php?mod=editor&charset=<?php echo CHARSET;?>&allowhtml=<?php echo $allowhtml;?>&doodle=<?php if($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])) { ?>1<?php } ?>' name="uchome-ifrHtmlEditor" id="uchome-ifrHtmlEditor" scrolling="no" border="0" frameborder="0" style="width:100%;height:100%;position:relative;"></iframe></div>
</td>
</tr>
</table>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_blog_middle'])) echo $_G['setting']['pluginhooks']['spacecp_blog_middle'];?>
<table cellspacing="0" cellpadding="0" width="100%" class="tfm">

<?php if($_G['setting']['blogcategorystat'] && $categoryselect) { ?>
<tr>
<th>վ�����</th>
<td>
<?php echo $categoryselect;?>
(ѡ��һ��վ����࣬������������־��������������)
</td>
</tr>
<?php } ?>

<tr>
<th>���˷���</th>
<td>
<select name="classid" id="classid" onchange="addSort(this)" >
<option value="0">------</option><?php if(is_array($classarr)) foreach($classarr as $value) { if($value['classid'] == $blog['classid']) { ?>
<option value="<?php echo $value['classid'];?>" selected><?php echo $value['classname'];?></option>
<?php } else { ?>
<option value="<?php echo $value['classid'];?>"><?php echo $value['classname'];?></option>
<?php } } if(!$blog['uid'] || $blog['uid']==$_G['uid']) { ?><option value="addoption" style="color:red;">+�½�����</option><?php } ?>
</select>
</td>
</tr>
<tr>
<th>��ǩ</th>
<td class="pns"><input type="text" class="px vm" size="40" id="tag" name="tag" value="<?php echo $blog['tag'];?>" /> <button type="button" name="clickbutton[]" onclick="relatekw();" class="pn vm"><em>�Զ���ȡ</em></button></td>
</tr>

<?php if($blog['uid'] && $blog['uid']!=$_G['uid']) { $selectgroupstyle='display:none';?></table>
<table style="display:none;">
<?php } ?>

<tr>
<th>��˽����</th>
<td>
<select name="friend" onchange="passwordShow(this.value);" class="ps">
<option value="0"<?php echo $friendarr['0'];?>>ȫվ�û��ɼ�</option>
<option value="1"<?php echo $friendarr['1'];?>>�����ѿɼ�</option>
<option value="2"<?php echo $friendarr['2'];?>>ָ�����ѿɼ�</option>
<option value="3"<?php echo $friendarr['3'];?>>���Լ��ɼ�</option>
<option value="4"<?php echo $friendarr['4'];?>>ƾ����ɼ�</option>
</select>
<label><input type="checkbox" name="noreply" value="1" class="pc"<?php if($blog['noreply']) { ?> checked="checked"<?php } ?>> ����������</label>
</td>
</tr>
<tbody id="span_password" style="<?php echo $passwordstyle;?>">
<tr>
<th>����</th>
<td class="pns"><input type="text" name="password" value="<?php echo $blog['password'];?>" size="10" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" class="px" /></td>
</tr>
</tbody>

<?php if($blog['uid'] && $blog['uid']!=$_G['uid']) { ?>
</table>
<table cellspacing="0" cellpadding="0" width="100%" class="tfm">
<?php } ?>

<tbody id="tb_selectgroup" style="<?php echo $selectgroupstyle;?>">
<tr>
<th>ָ������</th>
<td>
<select name="selectgroup" onchange="getgroup(this.value);" class="ps">
<option value="">�Ӻ�����ѡ�����</option><?php if(is_array($groups)) foreach($groups as $key => $value) { ?><option value="<?php echo $key;?>"><?php echo $value;?></option>
<?php } ?>
</select>
<p class="d">���ѡ����ۼӵ�����ĺ�������</p>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td>
<textarea name="target_names" id="target_names" rows="3" class="pt"><?php echo $blog['target_names'];?></textarea>
<p class="d">������д��������������ÿո���зָ�</p>
</td>
</tr>
</tbody>

<?php if(checkperm('manageblog')) { ?>
<tr>
<th>�ȶ�</th>
<td>
<input type="text" class="px" name="hot" id="hot" value="<?php echo $blog['hot'];?>" size="5" />
</td>
</tr>
<?php } if(helper_access::check_module('feed')) { ?>
<tr>
<th>��̬ѡ��</th>
<td>
<label for="makefeed"><input type="checkbox" name="makefeed" id="makefeed" value="1" class="pc"<?php if(ckprivacy('blog', 'feed')) { ?> checked="checked"<?php } ?>>���Ͷ�̬ (<a href="home.php?mod=spacecp&amp;ac=privacy&amp;op=feed" target="_blank">����Ĭ������</a>)</label>
</td>
</tr>
<?php } if($secqaacheck || $seccodecheck) { ?>
</table><?php $sectpl = '<table cellspacing="0" cellpadding="0" width="100%" class="tfm"><tr><th><sec></th><td class="pns"><sec><div class="d"><sec></div></td></tr></table>';?><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?><table cellspacing="0" cellpadding="0" width="100%" class="tfm">
<?php } ?>
<tr>
<th>&nbsp;</th>
<td>
<button type="submit" id="issuance" class="pn pnc"><strong>���淢��</strong></button>
</td>
</tr>
</table>
<input type="hidden" name="blogsubmit" value="true" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
<script type="text/javascript">
function validate(obj) {
<?php if($_G['setting']['blogcategorystat'] && $_G['setting']['blogcategoryrequired']) { ?>
var catObj = $("catid");
if(catObj) {
if (catObj.value < 1) {
alert("��ѡ��ϵͳ����");
catObj.focus();
return false;
}
}
<?php } ?>
var makefeed = $('makefeed');
if(makefeed) {
if(makefeed.checked == false) {
if(!confirm("�������ѣ���ȷ���˴η��������Ͷ�̬��\n���˶�̬�����Ѳ��ܼ�ʱ�������ĸ��� ")) {
return false;
}
}
}

if($('seccode')) {
var code = $('seccode').value;
var x = new Ajax();
x.get('home.php?mod=spacecp&ac=common&op=seccode&inajax=1&code=' + code, function(s){
s = trim(s);
if(s.indexOf('succeed') == -1) {
alert(s);
$('seccode').focus();
   		return false;
} else {
edit_save();
return true;
}
});
} else {
edit_save();
return true;
}
}
</script>


<?php if(!empty($_G['setting']['pluginhooks']['spacecp_blog_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_blog_bottom'];?>
</div>
</div>
</div>
</div>
<script type="text/javascript">
if($('subject')) {
$('subject').focus();
}
</script>
<?php } include template('common/footer'); ?>