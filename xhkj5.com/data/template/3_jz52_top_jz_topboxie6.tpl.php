<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$__FORMHASH = FORMHASH;$return = <<<EOF


EOF;
 if($_G['basescript'] != 'userapp') { 
$return .= <<<EOF

<script type="text/javascript"> 
function showTopLink() {
var ft = $('ft');
if(ft){
var scrolltop = $('jz52top');
var viewPortHeight = parseInt(document.documentElement.clientHeight);
var scrollHeight = parseInt(document.body.getBoundingClientRect().top);
var basew = parseInt(ft.clientWidth);
var sw = scrolltop.clientWidth;
if (basew < 1000) {
var left = parseInt(fetchOffset(ft)['left']);
left = left < sw ? left * 2 - sw : left;
scrolltop.style.left = ( basew + left ) + 'px';
} else {
scrolltop.style.left = 'auto';
scrolltop.style.right = 0;
}

if (BROWSER.ie && BROWSER.ie < 7) {
scrolltop.style.top = viewPortHeight - scrollHeight - 300 + 'px';
}
if (scrollHeight < 0) {
scrolltop.style.visibility = 'visible';
} else {
scrolltop.style.visibility = 'hidden';
}
}
}
</script> 

<style type="text/css"> 

#scrolltop {
   display: none;
}


EOF;
 if($this->jz52_temp != 5 && $this->jz52_temp != 7) { 
$return .= <<<EOF

#jz52top a {margin: 6px 0;}

EOF;
 } 
$return .= <<<EOF


#jz52top { visibility: hidden; position: fixed; bottom: 40px; display: block; margin: -30px 0 0 10px; width: 40px; background: none repeat scroll 0% 0% transparent; border: 0px #cdcdcd solid; border-radius: 3px; border-top: 0; cursor: pointer; }
#jz52top:hover { text-decoration: none; }
.ie6 #jz52top { position: absolute; bottom: auto; }


EOF;
 if($this->jz52_temp == 1) { 
$return .= <<<EOF

#jz52top a { display: block; width: 40px; height: 40px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #f8f8f8 url('source/plugin/jz52_top/template/jz52top1.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 2) { 
$return .= <<<EOF

#jz52top a { display: block; width: 40px; height: 40px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #00a398 url('source/plugin/jz52_top/template/jz52top.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 3) { 
$return .= <<<EOF

#jz52top a { display: block; width: 40px; height: 40px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #7f7f7f url('source/plugin/jz52_top/template/jz52top2.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 4) { 
$return .= <<<EOF

#jz52top a { display: block; width: 40px; height: 40px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #7f7f7f url('source/plugin/jz52_top/template/jz52top3.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 5) { 
$return .= <<<EOF

#jz52top a { display: block; width: 40px; height: 40px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #fff url('source/plugin/jz52_top/template/jz52top4.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 6) { 
$return .= <<<EOF

#jz52top a { display: block; width: 40px; height: 40px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #fff url('source/plugin/jz52_top/template/jz52top5.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 7) { 
$return .= <<<EOF

#jz52top a { display: block; width: 40px; height: 40px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #fff url('source/plugin/jz52_top/template/jz52top6.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } 
$return .= <<<EOF

                a.jz52topa:hover { background-position: -40px 0px !important;}
a.replyfast { background-position: 0 -40px !important; }
a.replyfast:hover { background-position: -40px -40px !important;}
a.returnlist { background-position: 0 -80px !important; }
a.returnlist:hover { background-position: -40px -80px !important;}
a.returnboard { background-position: -80px -240px !important; }
a.returnboard:hover { background-position: -120px -240px !important;}

a.jzkf { background-position: -80px 0px !important; }
a.jzkf:hover { background-position: -120px -0px !important;}


a.jzlast { background-position: -80px -80px !important; }
a.jzlast:hover { background-position: -120px -80px !important;}
a.jznext { background-position: -80px -120px !important; }
a.jznext:hover { background-position: -120px -120px !important;}				
a.jzsct { background-position: 0px -160px !important; }
a.jzsct:hover { background-position: -40px -160px !important;}				
a.jzscb { background-position: -80px -160px !important; }
a.jzscb:hover { background-position: -120px -160px !important;}				
a.jzqqq { background-position: 0px -200px !important; }
a.jzqqq:hover { background-position: -40px -200px !important;}				

a.jzzdy { background-position: 0px -240px !important; }
a.jzzdy:hover { background-position: -40px -240px !important;}
a.jzfbzt { background-position: 0px -280px !important; }
a.jzfbzt:hover { background-position: -40px -280px !important;}
a.jzkfzx { background-position: -80px -280px !important; }
a.jzkfzx:hover { background-position: -120px -280px !important;}




#jz52top a b {
    visibility: hidden;
    font-weight: normal;
}
</style> 




<div id="jz52top" >
    <span hidefocus="true"><a title="���ض���" onclick="window.scrollTo('0','0')" class="jz52topa" id="jz52topa" ><b>���ض���</b></a></span>

EOF;
 if($this->jz52_fbztkg == 1) { 
$return .= <<<EOF

    
EOF;
 if($_G['fid'] && $_G['mod'] == 'viewthread' || $_G['mod'] == 'forumdisplay' ) { if(!$_GET['archiveid']) { 
$return .= <<<EOF

<span>
<a href="forum.php?mod=post&amp;action=newthread&amp;fid={$_G['fid']}" class="jzfbzt" title="������Դ"><b>������Դ</b></a>
</span>

EOF;
 } } else { 
$return .= <<<EOF

<span><a class="jzfbzt" href="forum.php?mod=misc&amp;action=nav" title="������Դ" onclick="showWindow('nav', this.href, 'get', 0)" ><b>������Դ</b></a></span>	

EOF;
 } } if($_G['fid'] && $_G['mod'] == 'viewthread') { if($this->jz52_ln == 1) { 
$return .= <<<EOF

<span><a class="jzlast" href="forum.php?mod=redirect&amp;goto=nextoldset&amp;tid={$_G['tid']}" title="�ϸ�����" ><b>�ϸ�����</b></a></span>	
<span><a class="jznext" href="forum.php?mod=redirect&amp;goto=nextnewset&amp;tid={$_G['tid']}" title="�¸�����" ><b>�¸�����</b></a></span>

EOF;
 } 
$return .= <<<EOF

<span><a href="forum.php?mod=post&amp;action=reply&amp;fid={$_G['fid']}&amp;tid={$_G['tid']}&amp;extra={$_GET['extra']}&amp;page={$page}
EOF;
 if($_GET['from']) { 
$return .= <<<EOF
&amp;from={$_GET['from']}
EOF;
 } 
$return .= <<<EOF
" onclick="showWindow('reply', this.href)" class="replyfast" title="���ٻظ�"><b>���ٻظ�</b></a></span>	

EOF;
 if($this->jz52_sctz == 1) { 
$return .= <<<EOF

<span><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id={$_G['tid']}&amp;formhash={$__FORMHASH}" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' �����ղ�'" title="!fav_thread!" class="jzsct" ><b>�ղ�����</b></a></span>

EOF;
 } } 
$return .= <<<EOF
	

EOF;
 if($_G['fid']) { if($_G['mod'] == 'viewthread') { 
$return .= <<<EOF

<span>		
<a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}" hidefocus="true" class="returnlist" title="�����б�"><b>�����б�</b></a>
</span>	

EOF;
 } else { 
$return .= <<<EOF

<span>	
<a  href="forum.php" hidefocus="true" class="returnboard" title="���ذ��"><b>���ذ��</b></a>
</span>
    
EOF;
 if($this->jz52_scbk == 1 && CURMODULE!='group') { 
$return .= <<<EOF

<span><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=forum&amp;id={$_G['fid']}&amp;handlekey=favoriteforum&amp;formhash={$__FORMHASH}" id="a_favorite" title="�ղذ��"  class="jzscb" onclick="showWindow(this.id, this.href, 'get', 0);"><b>�ղذ��</b></a></span>
    
EOF;
 } } } if($this->jz52_kfzx == 1) { 
$return .= <<<EOF

<link rel="stylesheet" rev="stylesheet" href="source/plugin/jz52_top/template/imc_access_pop.css" type="text/css" media="screen"/>
<span><a href="javascript:;" onclick="showWindow('jz52_kf','plugin.php?id=jz52_top:jz52_kfzx')" title="�ͷ�����" class="jzkfzx" target="_blank" ><b>�ͷ�����</b></a></span>

EOF;
 } if($this->jz52_kf == 1) { 
$return .= <<<EOF

    <span><a href="{$this->jz52_kfurl}" title="��ϵ����" class="jzkf" target="_blank" ><b>��ϵ����</b></a></span>
    
EOF;
 } if($this->jz52_qqqan == 1) { 
$return .= <<<EOF

    <span><a rel="nofollow" title="�ٷ�QQȺ" class="jzqqq" href="javascript:;" onclick="showWindow('qqgroup','plugin.php?id=jz52_top:qqgroup')"><b>�ٷ�QQȺ</b></a></span>	
    
EOF;
 } 
$return .= <<<EOF

    
EOF;
 if($this->jz52_zdy == 1) { 
$return .= <<<EOF

    <span>{$this->jz52_zdybtdz}</span>	

EOF;
 } 
$return .= <<<EOF






</div>

EOF;
 } 
$return .= <<<EOF


EOF;
?>