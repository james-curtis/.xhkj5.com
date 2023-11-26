<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('showmessage');?>
<?php if($param['login']) { if($_G['inajax']) { dheader('Location:member.php?mod=logging&action=login&inajax=1&infloat=1');exit;?><?php } else { dheader('Location:member.php?mod=logging&action=login');exit;?><?php } } include template('common/header'); if(!function_exists('init_n5app'))include DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/common.php'; if(!function_exists('init_n5app')) exit('Authorization error!');?><?php include_once DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/nvbing5.php'?><?php if($_G['inajax']) { ?>
<div class="tip" style="height:150px;">
<dt id="messagetext">
<p><?php echo $show_message;?></p>
        <?php if($_G['forcemobilemessage']) { ?>
        	<p >
            	<a href="<?php echo $_G['setting']['mobile']['pageurl'];?>" class="mtn">继续访问</a><br />
                <a href="javascript:history.back();">返回上一页</a>
            </p>
        <?php } if($url_forward && !$_GET['loc']) { ?>
<!--<p><a class="grey" href="<?php echo $url_forward;?>">点击此链接进行跳转</a></p>-->
<script type="text/javascript">
setTimeout(function() {
window.location.href = '<?php echo $url_forward;?>';
}, '3000');
</script>
<?php } elseif($allowreturn) { ?>
<div class="tip_qx"><input type="button" class="button" onclick="window.location.reload();" value="关闭"></div>
<?php } ?>
</dt>
</div>
<?php } else { if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'micromessenger')) { ?>
<style type="text/css">.bg {padding-top: 0;}</style>
<div class="n5qj_wxgdan cl">
<a href="javascript:history.back();" class="wxmsf"></a>
<a href="search.php?mod=forum" class="wxmss"></a>
</div>
<?php } else { ?>
<div class="n5qj_tbys nbg cl">
<a href="javascript:history.back();" class="n5qj_zcan"><div class="zcanfh">&#36820;&#22238;</div></a>
<a href="search.php?mod=forum" class="n5qj_ycan sousuo"></a>
<span>&#25552;&#31034;</span>
</div>
<?php } ?>
<style type="text/css">
</style>
<div class="jump_c">
<div class="n5qj_tstp cl"></div>
<p class="tsnrs"><?php echo $show_message;?></p>
    <?php if($_G['forcemobilemessage']) { ?>
        <a href="javascript:history.back();" class="mtn">继续访问</a>
        <a href="javascript:history.back();">返回上一页</a>
    <?php } if($url_forward) { ?>
<a href="<?php echo $url_forward;?>">点击此链接进行跳转</a>
<?php } elseif($allowreturn) { if($_G['forcemobilemessage']) { } else { } } ?>
</div>

<?php } include template('common/footer'); ?>