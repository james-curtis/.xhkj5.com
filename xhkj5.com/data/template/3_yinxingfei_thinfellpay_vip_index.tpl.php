<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');?><?php include template('common/header'); ?><link rel="stylesheet" type="text/css"
      href="source/plugin/yinxingfei_thinfellpay_vip/css/style.css"/>
<div id="pt" class="bm cl">
    <div class="z">
        <a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a>
        <em>&rsaquo;</em><a href="./plugin.php?id=yinxingfei_thinfellpay_vip">����VIP�û���</a>
    </div>
</div>
<div class="yinxingfei_thinfellpay_bank">
    <div>
        <div class="left">
            <div class="tabcont" id="finance_cont">
                <div class="product_hd_wp">
                    <h2>
                        ��ͨVIP��Ա
                    </h2>
                </div>
                <section class="carousel_sec">

                    <!--carousel-->
                    <div class="carousel_wpper">
                        <!--�й̶��ʱ�����.fixedItem����-->
                        <div class="carousel_wp fixedItem ani">
                            <div class="item_wp">
                                <ul class="item_list carousel_list" id="ban_carousel">
                                    <?php if(is_array($yinxingfei_thinfellpay_rule)) foreach($yinxingfei_thinfellpay_rule as $key => $value) { ?>                                    <li class="item  runInRight">
                                        <div style="border: 1px solid red;border-radius:5px;">


                                            <?php if($value['6']!='') { ?>
                                            <mark class="mark <?php echo $value['6'];?>"></mark>
                                            <?php } ?>

                                            <div class="tit"><span class="act_name">   <?php echo $value['0'];?></span></div>
                                            <div class="subtxt"><img src="/source/plugin/yinxingfei_thinfellpay_vip/images/line.png" style="width: 178px;margin-bottom: 10px;"></div>
                                            <div class="subtxt act_detail">
                                                �������
                                            </div>
                                            <div class="subtxt act_detail">
                                                <font><?php echo $value['4'];?></font>
                                            </div>
                                            <div class="subtxt act_detail">
                                                ��Ч����:<font>
                                                <?php if($value['3']>0) { ?>
                                                <?php echo $value['3'];?>��<?php } else { ?>����<?php } ?></font>
                                            </div>
                                            <div class="subtxt act_detail">
                                                �Żݼ۸�:<font><?php echo $value['2'];?>Ԫ</font>
                                            </div>
                                            <div class="buy_wp">
                                                <?php if($_G['uid']) { ?>
                                                <a href="plugin.php?id=yinxingfei_thinfellpay_vip&amp;action=buytrue&amp;buyId=<?php echo $key;?>"
                                                   class="btn_buy act_wx_buy" target="_blank">��������</a>
                                                <?php } else { ?>
                                                <a href="javascript:;"
                                                   onclick="showWindow('login','member.php?mod=logging&amp;action=login');"
                                                   class="btn_buy act_wx_buy" target="_blank">��������</a>

                                                <?php } ?>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--casousel end-->
                </section>
                <div class="modwp" id="j_huoqi_div">
                    <div class="product_list_wp" id="j_dingqi_div">
                        <div class="product_hd_wp">
                            <h2>ע������!</h2>
                        </div>
<!--��ʼλ��  -->
<div class="bm_h cl">
<h2> <font color="red">VIP��Ȩ����</font> </h2>
</div>
<style>


.shangyemain tr td.w11em {
text-align: right;
padding-right: 15px;
width: 183px;
border: 1px solid #eee;
}
.shangyemain tr td {
border: 1px solid #eee;
padding: 6px 0px;
text-align: center;
font-size: 13px;
}

</style>
<div class="shangyemain">
<style>


.baojia-table td.w11em3{ background:#F0FFF7}
.baojia-table td.w11em4{ background:#F0FFF7}
</style>
<table border="1" class="baojia-table" width="100%" cellpadding="0" cellspacing="1">
<tbody>
<tr class="hsd">
<td class="w11em h24s" style="color:#555;font-size:14px;width: 20%"><strong>��Ȩ�Ա�</strong></td>
<td class="h24s" style="color:#888;font-size:14px;width: 20%"><strong>��ͨ�û�</strong></td>
<td class="h24s" style="color:#555;font-size:14px;width: 20%"><strong>����VIP</strong></td>
<td class="h24s" style="color:red;font-size:14px;width: 20%"><strong>���VIP</strong></td>
<td class="h24s" style="color:blue;font-size:14px;width: 20%"><strong>����VIP</strong></td>

</tr>

<tr>
<td class="w11em">�������</td>
<td class="w11em1">/</td>
<td class="w11em2"><img src="data/attachment/common/37/common_23_usergroup_icon.gif?IJ3j1j"></td>
<td><img src="data/attachment/common/1f/common_24_usergroup_icon.gif?VK52p6"></td>
<td class="w11em4"><img src="data/attachment/common/8e/common_25_usergroup_icon.gif?tbZi8a"></td>

</tr>
<tr>
<td class="w11em">������֤ͼ��(����)</td>
<td class="w11em1">/</td>
<td class="w11em2"><img src="tpwj/common_4_verify_icon.png" alt="��������վ" title="��������վ"></td>
<td><img src="tpwj/common_2_verify_icon.png" alt="��������վ" title="��������վ"></td>
<td class="w11em4"><img src="tpwj/common_2_verify_icon.png" alt="��������վ" title="��������վ"></td>

</tr>
<tr>
<td class="w11em">��Դ���ش���</td>
<td class="w11em3"><a style="color:red"><b></b></a>���û�������</td>
<td class="w11em3"><a style="color:red"><b>7</b></a>��/��</td>
<td class="w11em3"><a style="color:red"><b>11</b></a>��/��</td>
<td class="w11em4"><a style="color:red"><b>15</b></a>��/��</td>

</tr>

<tr>
<td class="w11em">�û�������Դ�⹺������</td>
<td class="w11em1"><img src="tpwj/c.png"></td>
<td class="w11em3"><img src="tpwj/c.png"></td>
<td class="w11em3"><a style="color:red"><b>1</b></a>��/��</td>
<td class="w11em4"><a style="color:red"><b>3</b></a>��/��</td>
</tr>

<tr>
<td class="w11em">�����Դ����</td>
<td><img src="tpwj/sure.png"></td>
<td><img src="tpwj/sure.png"></td>
<td><img src="tpwj/sure.png"></td>
<td class="w11em4"><img src="tpwj/sure.png"></td>
</tr>
<tr>
<td class="w11em">������Դ����</td>
<td><img src="tpwj/c.png"></td>
<td><img src="tpwj/sure.png"></td>
<td><img src="tpwj/sure.png"></td>
<td class="w11em4"><img src="tpwj/sure.png"></td>
</tr>
<tr>
<td class="w11em">�����Դ����</td>
<td><img src="tpwj/c.png"></td>
<td><img src="tpwj/c.png"></td>
<td><img src="tpwj/sure.png"></td>
<td class="w11em4"><img src="tpwj/sure.png"></td>
</tr>
<tr>
<td class="w11em">H����Դ����</td>
<td><img src="tpwj/c.png"></td>
<td><img src="tpwj/c.png"></td>
<td><img src="tpwj/c.png"></td>
<td class="w11em4"><img src="tpwj/sure.png"></td>
</tr>

                   <tr>
<td class="w11em">��������</td>
<td class="w11em1">/</td>
<td class="w11em3"><a style="color:red"><b>30</b></a>��</td>
<td class="w11em3"><a style="color:red"><b>365</b></a>��</td>
<td class="w11em4"><a style="color:red"><b>����</b></a></td>
  </tr>	
<tr>
<td class="w11em">�������ԭ��</td>
<td class="w11em1">/</td>
<td class="w11em3"><a style="color:#999;font-size:14px"><del><b>30Ԫ</b></del></a>/����</td>
<td class="w11em3"><a style="color:#999;font-size:14px"><del><b>128Ԫ</b></del></a>/����</td>
<td class="w11em4"><a style="color:#999;font-size:14px"><del><b>388Ԫ</b></del></a>/����</td>
</tr>
<tr>				
<td class="w11em">�������</td>
<td class="w11em1">/</td>
<td class="w11em3"><a style="color:red;font-size:16px"><b>15Ԫ</b></a>/����</td>
<td class="w11em3"><a style="color:red;font-size:16px"><b>64Ԫ</b></a>/����</td>
<td class="w11em4"><a style="color:red;font-size:16px"><b>194Ԫ/����</b></a></td>
  </tr>			
<tr>
<td class="w11em"><a style="color:red">�ǳƺ�����ʾ</a></td>
<td><img src="tpwj/c.png"></td>
<td><img src="tpwj/sure.png"></td>
<td><img src="tpwj/sure.png"></td>
<td class="w11em4"><img src="tpwj/sure.png"></td>
</tr>
<tr>
<td class="w11em4">�޹��<a style="color:blue;font-size:9px">(�����̹�����)</a></td>
<td><img src="tpwj/c.png"></td>
<td><img src="tpwj/c.png"></td>
<td><img src="tpwj/sure.png"></td>
<td class="w11em4"><img src="tpwj/sure.png"></td>
</tr>
<tr>
<td class="w11em">����Դ</td>
<td><img src="tpwj/sure.png"></td>
<td><img src="tpwj/sure.png"></td>
<td><img src="tpwj/sure.png"></td>
<td class="w11em4"><img src="tpwj/sure.png"></td>
</tr>		
<tr>
<td class="w11em">����˵��:</td>
<td colspan="4">δ�����������<img src="tpwj/sure.png">��ʾ��Ȩ�ޣ�<img src="tpwj/c.png">��ʾ��Ȩ��</td>
</tr>
</tbody>
</table>
</div>
<!--����λ��  -->
                        
                    </div>
                </div>

            </div>

        </div>
        <div class="right">
            <div>
                <div class="product_hd_wp">
                    <h2>
                        �û���Ϣ
                    </h2>
                </div>
                <!-- <?php if(!$_G['uid']) { ?> -->
                <div class='bm_c txtstyle'>
                    <br/>
                    <br/>
                    <center>
                        ����Ҫ��¼��ſ��Թ����û���Ӵ��<br/> <a
                            href="member.php?mod=logging&amp;action=login"
                            onclick="showWindow('login', this.href)" class="xi2"> ��¼</a> | <a
                            href="member.php?mod=register" class="xi2"> ע��</a>
                    </center>
                    <br/>
                    <br/>
                </div>
                <!-- <?php } else { ?> -->
                <div class='bm_c txtstyle'>
                    <div class="dashed">�û���: <?php echo $myname;?></div>
                    <div class="dashed">��ǰ�û���: <?php echo $grouptitle;?></div>
                    <div class="dashed"><?php echo $moneyname;?>: <?php echo $mymoey;?></div>
                </div>
                <?php } ?>
            </div>

            <!-- <?php if($yinxingfei_thinfellpay_isshow==1) { ?> -->
            <div>
                <div class="product_hd_wp">
                    <h2>
                        ����VIP��Ա
                    </h2>
                </div>
                <div class='bm_c txtstyle'>
                    <?php $i=0;?>                    <?php if(is_array($order_completed_data)) foreach($order_completed_data as $ordervalue) { ?>                    <div class="dashed">
                        <?php echo $ordervalue['submitdate'];?> <?php echo $ordervalue['username'];?>, ��ͨ��
                        <?php echo $ordervalue['group_name'];?>
                        <?php if($i<3) { ?>

                        <img src='source/plugin/yinxingfei_thinfellpay_vip/images/new.gif'>
                        <?php } ?>
                    </div>
                    <?php ++$i;?>                    <?php } ?>

                </div>
            </div>

            <!-- <?php } ?> -->
        </div>

    </div>
    <div class="yinxingfei_thinfellpay_bank_clear"></div>
</div><?php include template('common/footer'); ?>