<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('getpasswd');?><?php include template('common/header'); ?><div id="ct" class="wp w cl">
<div class="mn mw">
<div class="blr">
<h3 class="flb" style="padding-left:0">
<em>�һ�����</em>
</h3>
<form method="post" autocomplete="off" action="member.php?mod=getpasswd&amp;uid=<?php echo $uid;?>&amp;id=<?php echo $hashid;?>&amp;sign=<?php echo $_GET['sign'];?>">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="c cl">
<div class="lgfm">
<label><em>�û���:</em><?php echo $member['username'];?></label>
<label><em>������:</em><input type="password" id="newpasswd1" name="newpasswd1" size="25" class="px" /></label>
<p style="height:22px;">

<i class="d" id="chk_newpasswd1">����д����<?php if($_G['setting']['pwlength']) { ?>, ��С����Ϊ <?php echo $_G['setting']['pwlength'];?> ���ַ�<?php } ?></i>
</p>
<label><em>ȷ������:</em><input type="password" id="newpasswd2" name="newpasswd2" size="25" class="px" /></label>
<p style="height:22px;"><i class="d" id="chk_newpasswd2"></i></p>
</div><em><i id="tip_newpasswd1" class="p_tip"></i><em><em><i id="tip_newpasswd2" class="p_tip"></i><em>
<div class="lgf minf">
<h4>û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>"><?php echo $_G['setting']['reglinkname'];?></a></h4>
</div>
</div>
<p class="fsb pns cl">
<em>&nbsp;</em>
<button class="pn pnc" type="submit" name="getpwsubmit" value="true"><span>�ύ</span></button>
</p>
</form>
<script src="<?php echo $_G['setting']['jspath'];?>register.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var strongpw = new Array();
<?php if($_G['setting']['strongpw']) { if(is_array($_G['setting']['strongpw'])) foreach($_G['setting']['strongpw'] as $key => $val) { ?>strongpw[<?php echo $key;?>] = <?php echo $val;?>;
<?php } } ?>
var pwlength = <?php if($_G['setting']['pwlength']) { ?><?php echo $_G['setting']['pwlength'];?><?php } else { ?>0<?php } ?>;
checkPwdComplexity($('newpasswd1'), $('newpasswd2'));
</script>
</div>
</div>
</div><?php include template('common/footer'); ?>