<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($bind['status']==1) { ?>
<p class="pbm bbda xi1">���ѽ���վ�ʺ� <strong><?php echo $_G['member']['username'];?></strong> ��ٶ��ʺŰ�</p>
<form action="home.php?mod=spacecp&amp;ac=plugin&amp;id=csu_baidu:csu_baidu" method="post" autocomplete="off" class="mbw bbda">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>�󶨵İٶ��ʺ�</th>
<td>
            <?php echo dhtmlspecialchars($info[username]);?>    </td>
    </tr>
<tr>
<th>��ʱ��</th>
<td>
            <?php echo dgmdate($at[3]-$at[2],'dt');?>    </td>
    </tr>
<tr>
<th>��Ч��</th>
<td>
            <?php echo dgmdate($at[3],'dt');?>&nbsp;<a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=csu_baidu:csu_baidu&amp;formhash=<?php echo FORMHASH;?>&amp;refresh=true" class="xi1" ><strong>�������</strong></a>
    </td>
    </tr>
<tr>
<th></th>
<td><img src="http://tb.himg.baidu.com/sys/portrait/item/<?php echo $info['portrait'];?>" /></td>
</tr>
<tr>
<th></th>
<td>
<button type="submit" name="unbindsubmit" value="yes" class="pn pnc" onclick="javascript:confirm('��ȷ��Ҫ�������')"><strong>�����</strong></button>
    </td>
    </tr>
    </table>
  </form>
<br />

<?php } else { ?>
<div class="mtw bm2 cl">
<div class="bm2_b bw0 hm" style="padding-top: 70px;">
<a href="csu_baidu.php?mod=login&amp;op=init"><img src="source/plugin/csu_baidu/images/login-long.png" class="vm"/></a>
<p class="mtn xg1">ʹ�ðٶ��ʺŰ󶨱�վ��������...</p>
</div>
<div class="bm2_b bm2_b_y bw0">
<dl class="xld">
<h2 class="xi1 xs2">�ðٶ��ʺ����ɵ�¼</h2>
<dt>�����ס��վ���ʺź����룬��ʱʹ�ðٶ��ʺ��������ɵ�¼</dt>
<dd class="xg1">��ǰ����<?php echo $count;?>����Ա���˰ٶ��ʺ�</dd>
</dl>
</div>
</div>
<?php } ?>