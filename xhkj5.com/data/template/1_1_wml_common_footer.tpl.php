<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
		<?php if(!empty($_G['setting']['pluginhooks']['global_footer_mobile'])) echo $_G['setting']['pluginhooks']['global_footer_mobile'];?>
<p>
<?php if(CURMODULE !== 'index') { ?>
<anchor title="confirm"><prev/>����</anchor> <a href="forum.php">��ҳ</a><br />
<?php } if($_G['uid']) { ?>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>"><?php echo $_G['username'];?>:�˳�</a>
<?php } else { ?>
<a href="member.php?mod=logging&amp;action=login">��¼</a> <a href="member.php?mod=register">ע��</a><br /><br />
<?php } ?>
<br/><br/>
<em>�����</em>|<a href="forum.php?mobile=1">��׼��</a><br/>
<small>Powered by Discuz!</small>
</p>
</card>
</wml><?php updatesession();?><?php output();?>