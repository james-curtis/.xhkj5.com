<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('showmessage');?><?php include template('common/header'); ?><p><?php echo str_replace('&amp;amp;', '&amp;', str_replace('&', '&amp;', $show_message));; ?></p>
        <?php if($_G['forcemobilemessage']) { ?>
        	<p >
                <prev>������һҳ</prev>
            </p>
        <?php } if($url_forward) { ?>
<p><a href="<?php echo $url_forward;?>">��������ӽ�����ת</a></p>
<?php } elseif($allowreturn) { ?>
<p><prev>[ ������ﷵ����һҳ ]</prev></p>
<?php } include template('common/footer'); ?>