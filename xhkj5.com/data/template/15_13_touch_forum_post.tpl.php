<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('post');
0
|| checktplrefresh('./template/xhkj5.com_iuni/touch/forum/post.htm', './template/default/touch/common/seccheck.htm', 1525228705, '13', './data/template/15_13_touch_forum_post.tpl.php', './template/xhkj5.com_iuni', 'touch/forum/post')
;?><?php include template('common/header'); if($special != 2 && $special != 4 && !($isfirstpost && $sortid)) { $adveditor = $isfirstpost && $special && ($_GET['action'] == 'newthread' || $_GET['action'] == 'reply' && !empty($_GET['addtrade']) || $_GET['action'] == 'edit' );?><form method="post" id="postform" 
<?php if($_GET['action'] == 'newthread') { ?>action="forum.php?mod=post&amp;action=<?php if($special != 2) { ?>newthread<?php } else { ?>newtrade<?php } ?>&amp;fid=<?php echo $_G['fid'];?>&amp;extra=<?php echo $extra;?>&amp;topicsubmit=yes&amp;mobile=2"
<?php } elseif($_GET['action'] == 'reply') { ?>action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $extra;?>&amp;replysubmit=yes&amp;mobile=2"
<?php } elseif($_GET['action'] == 'edit') { ?>action="forum.php?mod=post&amp;action=edit&amp;extra=<?php echo $extra;?>&amp;editsubmit=yes&amp;mobile=2" <?php echo $enctype;?>
<?php } ?>>
<input type="hidden" name="formhash" id="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="posttime" id="posttime" value="<?php echo TIMESTAMP;?>" />
<?php if(!empty($_GET['modthreadkey'])) { ?><input type="hidden" name="modthreadkey" id="modthreadkey" value="<?php echo $_GET['modthreadkey'];?>" /><?php } if($_GET['action'] == 'reply') { ?>
<input type="hidden" name="noticeauthor" value="<?php echo $noticeauthor;?>" />
<input type="hidden" name="noticetrimstr" value="<?php echo $noticetrimstr;?>" />
<input type="hidden" name="noticeauthormsg" value="<?php echo $noticeauthormsg;?>" />
<?php if($reppid) { ?>
<input type="hidden" name="reppid" value="<?php echo $reppid;?>" />
<?php } if($_GET['reppost']) { ?>
<input type="hidden" name="reppost" value="<?php echo $_GET['reppost'];?>" />
<?php } elseif($_GET['repquote']) { ?>
<input type="hidden" name="reppost" value="<?php echo $_GET['repquote'];?>" />
<?php } } if($_GET['action'] == 'edit') { ?>
<input type="hidden" name="fid" id="fid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="tid" value="<?php echo $_G['tid'];?>" />
<input type="hidden" name="pid" value="<?php echo $pid;?>" />
<input type="hidden" name="page" value="<?php echo $_GET['page'];?>" />
<?php } if($special) { ?>
<input type="hidden" name="special" value="<?php echo $special;?>" />
<?php } if($specialextra) { ?>
<input type="hidden" name="specialextra" value="<?php echo $specialextra;?>" />
<?php } ?>

<!-- header start -->
<header class="header">
<input type="hidden" name="<?php if($_GET['action'] == 'newthread') { ?>topicsubmit<?php } elseif($_GET['action'] == 'reply') { ?>replysubmit<?php } elseif($_GET['action'] == 'edit') { ?>editsubmit<?php } ?>" value="yes">
<a href="<?php if($_GET['action'] == 'newthread') { ?>forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&page=<?php echo $_GET['page'];?><?php } else { ?>forum.php?mod=redirect&goto=findpost&ptid=<?php echo $_G['tid'];?>&pid=<?php echo $pid;?><?php } ?>" class="goBack fl">����</a>
<h1><?php if($_GET['action'] == 'edit') { ?>�༭<?php } else { ?>����<?php } ?></h1>
</header>
<!-- header end -->

<!-- main postbox start -->

<div class="post_from">
<ul class="cl">
<li>
<?php if($_GET['action'] != 'reply') { ?>
<input type="text" tabindex="1" class="inp" id="needsubject" size="30" autocomplete="off" value="<?php echo $postinfo['subject'];?>" name="subject" placeholder="����" fwin="login">
<?php } else { ?>
RE: <?php echo $thread['subject'];?>
<?php if($quotemessage) { ?><?php echo $quotemessage;?><?php } } ?>
</li>
<?php if($isfirstpost && !empty($_G['forum']['threadtypes']['types'])) { ?>
<li>
<div class="login_select">
<span class="login-btn-inner">
<span class="login-btn-text">
<span class="span_question">ѡ���������</span>
</span>
<span class="icon-arrow">&nbsp;</span>
</span>
<select id="typeid" name="typeid" class="sel_list">
<option value="0" selected="selected">ѡ���������</option><?php if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $typeid => $name) { if(empty($_G['forum']['threadtypes']['moderators'][$typeid]) || $_G['forum']['ismoderator']) { ?>
<option value="<?php echo $typeid;?>"<?php if($thread['typeid'] == $typeid || $_GET['typeid'] == $typeid) { ?> selected="selected"<?php } ?>><?php echo strip_tags($name);; ?></option>
<?php } } ?>
</select>
</div>				
</li>
<?php } if($_GET['action'] == 'edit' && $isorigauthor && ($isfirstpost && $thread['replies'] < 1 || !$isfirstpost) && !$rushreply && $_G['setting']['editperdel']) { ?>
<li>
<input type="checkbox" name="delete" id="delete" class="inp" value="1" title="ɾ������<?php if($thread['special'] == 3) { ?>���������ͷ��ã����˻�������<?php } ?>"> ɾ?
</li>
<?php } ?>
<li class="cfix">
<textarea class="textarea" id="needmessage" tabindex="3" autocomplete="off" id="<?php echo $editorid;?>_textarea" name="<?php echo $editor['textarea'];?>" cols="80" rows="2" placeholder="����" fwin="reply"><?php echo $postinfo['message'];?></textarea>
</li>
<li class="faceBox cfix">
<ul>
<li><img src="static/image/smiley/grapeman/01.gif" width="30" height="30" onClick="addface('needmessage', '{:3_41:}')" /></li>
<li><img src="static/image/smiley/grapeman/02.gif" width="30" height="30" onClick="addface('needmessage', '{:3_42:}')" /></li>
<li><img src="static/image/smiley/grapeman/03.gif" width="30" height="30" onClick="addface('needmessage', '{:3_43:}')" /></li>
<li><img src="static/image/smiley/grapeman/04.gif" width="30" height="30" onClick="addface('needmessage', '{:3_44:}')" /></li>
<li><img src="static/image/smiley/grapeman/05.gif" width="30" height="30" onClick="addface('needmessage', '{:3_45:}')" /></li>
<li><img src="static/image/smiley/grapeman/06.gif" width="30" height="30" onClick="addface('needmessage', '{:3_46:}')" /></li>
<li><img src="static/image/smiley/grapeman/07.gif" width="30" height="30" onClick="addface('needmessage', '{:3_47:}')" /></li>
<li><img src="static/image/smiley/grapeman/08.gif" width="30" height="30" onClick="addface('needmessage', '{:3_48:}')" /></li>
<li><img src="static/image/smiley/grapeman/09.gif" width="30" height="30" onClick="addface('needmessage', '{:3_49:}')" /></li>
<li><img src="static/image/smiley/grapeman/10.gif" width="30" height="30" onClick="addface('needmessage', '{:3_50:}')" /></li>
<li><img src="static/image/smiley/grapeman/11.gif" width="30" height="30" onClick="addface('needmessage', '{:3_51:}')" /></li>
<li><img src="static/image/smiley/grapeman/12.gif" width="30" height="30" onClick="addface('needmessage', '{:3_52:}')" /></li>
<li><img src="static/image/smiley/grapeman/13.gif" width="30" height="30" onClick="addface('needmessage', '{:3_53:}')" /></li>
<li><img src="static/image/smiley/grapeman/14.gif" width="30" height="30" onClick="addface('needmessage', '{:3_54:}')" /></li>
<li><img src="static/image/smiley/grapeman/15.gif" width="30" height="30" onClick="addface('needmessage', '{:3_55:}')" /></li>
<li><img src="static/image/smiley/grapeman/16.gif" width="30" height="30" onClick="addface('needmessage', '{:3_56:}')" /></li>
<li><img src="static/image/smiley/grapeman/17.gif" width="30" height="30" onClick="addface('needmessage', '{:3_57:}')" /></li>
<li><img src="static/image/smiley/grapeman/18.gif" width="30" height="30" onClick="addface('needmessage', '{:3_58:}')" /></li>
<li><img src="static/image/smiley/grapeman/19.gif" width="30" height="30" onClick="addface('needmessage', '{:3_59:}')" /></li>
<li><img src="static/image/smiley/grapeman/20.gif" width="30" height="30" onClick="addface('needmessage', '{:3_60:}')" /></li>
<li><img src="static/image/smiley/grapeman/21.gif" width="30" height="30" onClick="addface('needmessage', '{:3_61:}')" /></li>
<li><img src="static/image/smiley/grapeman/22.gif" width="30" height="30" onClick="addface('needmessage', '{:3_62:}')" /></li>
<li><img src="static/image/smiley/grapeman/23.gif" width="30" height="30" onClick="addface('needmessage', '{:3_63:}')" /></li>
<li><img src="static/image/smiley/grapeman/24.gif" width="30" height="30" onClick="addface('needmessage', '{:3_64:}')" /></li>
</ul>
<script src="template/xhkj5.com_iuni/touch/images/js/get_face.js" type="text/javascript"></script>
</li>
<?php if($_GET['action'] != 'edit' && ($secqaacheck || $seccodecheck)) { ?>
<li><?php $sechash = 'S'.random(4);
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');	
$ran = random(5, 1);?><?php if($secqaacheck) { $message = '';
$question = make_secqaa();
$secqaa = lang('core', 'secqaa_tips').$question;?><?php } if($sectpl) { if($secqaacheck) { ?>
<p>
        ��֤�ʴ�: 
        <span class="xg2"><?php echo $secqaa;?></span>
<input name="secqaahash" type="hidden" value="<?php echo $sechash;?>" />
        <input name="secanswer" id="secqaaverify_<?php echo $sechash;?>" type="text" class="txt" />
        </p>
<?php } if($seccodecheck) { ?>
<div class="sec_code vm">
<input name="seccodehash" type="hidden" value="<?php echo $sechash;?>" />
<input type="text" class="txt px vm" style="ime-mode:disabled;width:115px;background:white;" autocomplete="off" value="" id="seccodeverify_<?php echo $sechash;?>" name="seccodeverify" placeholder="��֤��" fwin="seccode">
        <img src="misc.php?mod=seccode&amp;update=<?php echo $ran;?>&amp;idhash=<?php echo $sechash;?>&amp;mobile=2" class="seccodeimg"/>
</div>
<?php } } ?>
<script type="text/javascript">
(function() {
$('.seccodeimg').on('click', function() {
$('#seccodeverify_<?php echo $sechash;?>').attr('value', '');
var tmprandom = 'S' + Math.floor(Math.random() * 1000);
$('.sechash').attr('value', tmprandom);
$(this).attr('src', 'misc.php?mod=seccode&update=<?php echo $ran;?>&idhash='+ tmprandom +'&mobile=2');
});
})();
</script>
</li>
<?php } ?>

</ul>
<ul id="imglist" class="post_imglist cfix">
<li class="faceBtn">
<a href="javascript:;"></a>
</li>
<li class="first">
<a href="javascript:;">
<input type="file" name="Filedata" id="filedata"/>
</a>
</li>
</ul>

<?php if(!empty($_G['setting']['pluginhooks']['post_bottom_mobile'])) echo $_G['setting']['pluginhooks']['post_bottom_mobile'];?>
</div>

<div class="bt_btn">
<button id="postsubmit" class="btn_pn <?php if($_GET['action'] == 'edit') { ?>btn_pn_blue" disable="false"<?php } else { ?>btn_pn_grey" disable="true"<?php } ?>>
<?php if($_GET['action'] == 'newthread') { ?>����<?php } elseif($_GET['action'] == 'reply') { ?>�ظ�<?php } elseif($_GET['action'] == 'edit') { ?>����<?php } ?>
</button>
</div>
<!-- main postbox end -->
</form>
<?php } else { ?>
<div class="box xg1">
<?php if($special == '2') { ?>
�ֻ��治֧��<strong>��Ʒ</strong>�����������Ϸ�����ѡ��������ʽ
    <?php } elseif($special == '4') { ?>
�ֻ��治֧��<strong>�</strong>�����������Ϸ�����ѡ��������ʽ
<?php } elseif($isfirstpost && $sortid) { ?>
����������Ϣ��ʹ�õ��԰�
    <?php } ?>
    </div>
<?php } ?>

<script type="text/javascript">
(function() {
var needsubject = needmessage = false;

<?php if($_GET['action'] == 'reply') { ?>
needsubject = true;
<?php } elseif($_GET['action'] == 'edit') { ?>
needsubject = needmessage = true;
<?php } if($_GET['action'] == 'newthread' || ($_GET['action'] == 'edit' && $isfirstpost)) { ?>
$('#needsubject').on('keyup input', function() {
var obj = $(this);
if(obj.val()) {
needsubject = true;
if(needmessage == true) {
$('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
$('.btn_pn').attr('disable', 'false');
}
} else {
needsubject = false;
$('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
$('.btn_pn').attr('disable', 'true');
}
});
<?php } ?>
$('#needmessage').on('keyup input', function() {
var obj = $(this);
if(obj.val()) {
needmessage = true;
if(needsubject == true) {
$('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
$('.btn_pn').attr('disable', 'false');
}
} else {
needmessage = false;
$('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
$('.btn_pn').attr('disable', 'true');
}
});

$('#needmessage').on('scroll', function() {
var obj = $(this);
if(obj.scrollTop() > 0) {
obj.attr('rows', parseInt(obj.attr('rows'))+2);
}
}).scrollTop($(document).height());
 })();
</script>
<script src="<?php echo STATICURL;?>js/mobile/ajaxfileupload.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo STATICURL;?>js/mobile/buildfileupload.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var imgexts = typeof imgexts == 'undefined' ? 'jpg, jpeg, gif, png' : imgexts;
var STATUSMSG = {
'-1' : '�ڲ�����������',
'0' : '�ϴ��ɹ�',
'1' : '��֧�ִ�����չ��',
'2' : '�����������޷��ϴ���ô��ĸ���',
'3' : '�û��������޷��ϴ���ô��ĸ���',
'4' : '��֧�ִ�����չ��',
'5' : '�ļ����������޷��ϴ���ô��ĸ���',
'6' : '���������޷��ϴ�����ĸ���',
'7' : '��ѡ��ͼƬ�ļ�(' + imgexts + ')',
'8' : '�����ļ��޷�����',
'9' : 'û�кϷ����ļ����ϴ�',
'10' : '�Ƿ�����',
'11' : '���������޷��ϴ���ô��ĸ���'
};
var form = $('#postform');
$(document).on('change', '#filedata', function() {
popup.open('<img src="' + IMGDIR + '/imageloading.gif">');

uploadsuccess = function(data) {
if(data == '') {
popup.open('�ϴ�ʧ�ܣ����Ժ�����', 'alert');
}
var dataarr = data.split('|');
if(dataarr[0] == 'DISCUZUPLOAD' && dataarr[2] == 0) {
popup.close();
$('#imglist').append('<li><span aid="'+dataarr[3]+'" class="del"><a href="javascript:;"><img src="<?php echo STATICURL;?>image/mobile/images/icon_del.png"></a></span><span class="p_img"><a href="javascript:;"><img style="height:54px;width:54px;" id="aimg_'+dataarr[3]+'" title="'+dataarr[6]+'" src="<?php echo $_G['setting']['attachurl'];?>forum/'+dataarr[5]+'" /></a></span><input type="hidden" name="attachnew['+dataarr[3]+'][description]" /></li>');
} else {
var sizelimit = '';
if(dataarr[7] == 'ban') {
sizelimit = '(�������ͱ���ֹ)';
} else if(dataarr[7] == 'perday') {
sizelimit = '(���ܳ���'+Math.ceil(dataarr[8]/1024)+'K)';
} else if(dataarr[7] > 0) {
sizelimit = '(���ܳ���'+Math.ceil(dataarr[7]/1024)+'K)';
}
popup.open(STATUSMSG[dataarr[2]] + sizelimit, 'alert');
}
};

if(typeof FileReader != 'undefined' && this.files[0]) {//note ֧��html5�ϴ�������

$.buildfileupload({
uploadurl:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
files:this.files,
uploadformdata:{uid:"<?php echo $_G['uid'];?>", hash:"<?php echo md5(substr(md5($_G[config][security][authkey]), 8).$_G[uid])?>"},
uploadinputname:'Filedata',
maxfilesize:"<?php echo $swfconfig['max'];?>",
success:uploadsuccess,
error:function() {
popup.open('�ϴ�ʧ�ܣ����Ժ�����', 'alert');
}
});

} else {

$.ajaxfileupload({
url:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
data:{uid:"<?php echo $_G['uid'];?>", hash:"<?php echo md5(substr(md5($_G[config][security][authkey]), 8).$_G[uid])?>"},
dataType:'text',
fileElementId:'filedata',
success:uploadsuccess,
error: function() {
popup.open('�ϴ�ʧ�ܣ����Ժ�����', 'alert');
}
});

}
});

<?php if(0 && $_G['setting']['mobile']['geoposition']) { ?>
geo.getcurrentposition();
<?php } ?>
$('#postsubmit').on('click', function() {
var obj = $(this);
if(obj.attr('disable') == 'true') {
return false;
}

obj.attr('disable', 'true').removeClass('btn_pn_blue').addClass('btn_pn_grey');
popup.open('<img src="' + IMGDIR + '/imageloading.gif">');

var postlocation = '';
if(geo.errmsg === '' && geo.loc) {
postlocation = geo.longitude + '|' + geo.latitude + '|' + geo.loc;
}

$.ajax({
type:'POST',
url:form.attr('action') + '&geoloc=' + postlocation + '&handlekey='+form.attr('id')+'&inajax=1',
data:form.serialize(),
dataType:'xml'
})
.success(function(s) {
popup.open(s.lastChild.firstChild.nodeValue);
})
.error(function() {
popup.open('����������⣬���Ժ�����', 'alert');
});
return false;
});

$(document).on('click', '.del', function() {
var obj = $(this);
$.ajax({
type:'GET',
url:'forum.php?mod=ajax&action=deleteattach&inajax=yes&aids[]=' + obj.attr('aid'),
})
.success(function(s) {
obj.parent().remove();
})
.error(function() {
popup.open('����������⣬���Ժ�����', 'alert');
});
return false;
});

</script>

<script type="text/javascript">
(function() {
$(document).on('change', '.sel_list', function() {
var obj = $(this);
$('.span_question').text(obj.find('option:selected').text());
});
 })();
</script>

<script type="text/javascript">
$(".faceBtn").toggle(function(){
$(".faceBox").show();
$(".textarea")[0].focus();},
function(){
$(".faceBox").hide();
$(".textarea")[0].focus();
});
</script><?php $nofooter = true;?><?php include template('common/footer'); ?>