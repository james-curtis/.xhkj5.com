<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="<?php if($_G['setting']['mobile']['mobilecachetime'] > 0) { ?><?php echo $_G['setting']['mobile']['mobilecachetime'];?><?php } else { ?>no-cache<?php } ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimal-ui, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no">
<base href="<?php echo $_G['setting']['siteurl'];?>" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> ÊÖ»ú°æ</title>
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } ?>,<?php echo $_G['setting']['bbname'];?>" />
<link rel="stylesheet" href="template/zhikai_n5app/common/mbstyle.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="template/zhikai_n5app/common/style.css">
<link rel="stylesheet" id="pageloader-css"  href="template/zhikai_n5app/common/pageloader.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="template/zhikai_n5app/font/iconfont.css">
<link rel="stylesheet" type="text/css" href="template/zhikai_n5app/style/t1/style.css" class="modal-style">
<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="template/zhikai_n5app/js/jquery-1.8.3.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="template/zhikai_n5app/js/mbcommon.js?<?php echo VERHASH;?>" type="text/javascript" charset="<?php echo CHARSET;?>"></script>
<script src="template/zhikai_n5app/js/jquery.min.js" type="text/javascript"></script>
</head>
<body class="bg">
<div id="upfile"></div>
<script type="text/javascript">
var jq = jQuery.noConflict(); 
function ywksfb(){
jq(".n5sq_ksfb").addClass("am-modal-active");	
if(jq(".n5sq_ksfbbg").length>0){
jq(".n5sq_ksfbbg").addClass("sharebg-active");
}else{
jq("body").append('<div class="n5sq_ksfbbg"></div>');
jq(".n5sq_ksfbbg").addClass("sharebg-active");//Fro m www.xhkj 5.com
}
jq(".sharebg-active,.ksfb_qxan,.n5sq_ksfbbg").click(function(){
jq(".n5sq_ksfb").removeClass("am-modal-active");	
setTimeout(function(){
jq(".sharebg-active").removeClass("sharebg-active");	
jq(".n5sq_ksfbbg").remove();	
},300);
})
}	
</script>
<?php if(!empty($_G['setting']['pluginhooks']['global_header_mobile'])) echo $_G['setting']['pluginhooks']['global_header_mobile'];?>