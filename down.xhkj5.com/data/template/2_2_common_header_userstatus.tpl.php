<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<style type="text/css">
.deanlogin .pipe{ display:none;} 
.deanlogin dl a{ padding:0;}
</style>
<div class="deanlogin">                 
        <?php if($_G['uid']) { ?>
        <div class="allmember" style="float:right; position:relative;">
        	<?php if(check_diy_perm($topic)) { ?><?php echo $diynav;?><?php } ?>
          <div class="deanmemberinfo">
                <a class="deanvwmy" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="�����ҵĿռ�"><?php echo avatar($_G[uid],small);?></a>
                <a class="deanadmin" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="�����ҵĿռ�"><?php echo $_G['member']['username'];?><i></i></a>
                <a class="deanquit_top" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
                <div class="clear"></div>
                <div class="deanmembercontent">
            	<i></i>
                <div class="deanmc_top">
                	<div class="deanmc_tavator"><a class="deanvwmy1" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="�����ҵĿռ�"><?php echo avatar($_G[uid],small);?></a></div>
                    <div class="deanmc_username">
                    	<div class="deanmc_welcome">welcome����ӭ������վ</div>
                        <div class="deanmc_un"><span>��Ա��</span><a class="deanhyname" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="�����ҵĿռ�"><?php echo $_G['member']['username'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php?mod=spacecp&amp;ac=avatar" target="_blank">��������</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="deanmc_middle">
                	<ul>
                    	<li>
                        	<a class="deanmypost" href="forum.php?mod=guide&amp;view=my" target="_blank">�ҵ�����</a>								
                        </li>
                        <li style="border-left: #F5F5F5 1px dashed; padding-left:5px;">
                        	<a class="deanmycollection" href="home.php?mod=space&amp;do=favorite&amp;view=me" target="_blank">�ҵ��ղ�</a>
                        </li>
                        <li style="border-left: #F5F5F5 1px dashed; padding-left:5px;">
                        	<a class="deanfriend" href="home.php?mod=space&amp;do=friend" target="_blank">�ҵĺ���</a>
                        </li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="deanmc_bottom">
                	<div class="deanmc_bottom_c">
                    	<a class="deannewinfo" href="home.php?mod=space&amp;do=pm&amp;filter=newpm" target="_blank">
                        	<span class="dean_icon1"></span>
                            <p>��Ϣ<?php if($_G['member']['newpm']) { ?>(<?php echo $_G['member']['newpm'];?>)<?php } elseif($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></p>
                        </a>
                        <a class="deanatme" href="home.php?mod=space&amp;do=notice" target="_blank">
                        	<span class="dean_icon2"></span>
                        	<p>֪ͨ<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></p>
                        </a>
                        <a class="deanhuifume" href="home.php?mod=space&amp;do=notice&amp;type=post&amp;isread=<?php echo $_G['uid'];?>" target="_blank">
                        	<span class="dean_icon3"></span>
                        	<p>�ظ�</p>
                        </a>
                        <?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
                        <a class="deanguanli" href="admin.php" target="_blank">
                        	<span class="dean_icon4"></span>
                        	<p>����</p>
                        </a>
                        <?php } ?>
                        <a class="deanquit" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">
                        	<span class="dean_icon5"></span>
                        	<p>�˳�</p>
                        </a>
                    </div>
                </div>
                
            </div>
            </div>
            
            
        </div>
   <ul>
     <?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
        <li><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></li>
        <li><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">����</a></li>
        <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a></li>
    <?php } elseif(!$_G['connectguest']) { ?>
    <style tpye="text/css">
    	
    </style>
    	 
        <div class="deandl_before">
        	<a class="deanqqs" href="connect.php?mod=login&amp;op=init&amp;referer=index.php&amp;statfrom=login_simple" title="QQ��¼"></a>
            <a class="deandengluanniu" href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">��½</a>
            <a class="deanzhuceanniu" href="member.php?mod=<?php echo $_G['setting']['regname'];?>">ע��</a>
            <div class="clear"></div>
        </div>
        
                    
     <?php } else { ?>
        <div id="um">
        	<dl>
                <dd class="vwmy qq"><?php echo $_G['member']['username'];?></dd>
                <dd><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?></dd>
                <dd><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a></dd>
                <dd><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">����: 0</a></dd>
                <dd>�û���: <?php echo $_G['group']['grouptitle'];?></li>
            </dl>
        </div>
        <?php } ?>
    </ul>
</div>