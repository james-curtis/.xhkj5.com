<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$__FORMHASH = FORMHASH;$return = <<<EOF


EOF;
 if($_G['basescript'] != 'userapp') { 
$return .= <<<EOF

<style type="text/css"> 
#scrolltop {
   display: none;
}
ul#navmenu ul
{ 
display: none; 
position: absolute; 

EOF;
 if($this->jz52_gjtwz == 1) { if($this->jz52_dfk == 1) { 
$return .= <<<EOF
left: 50px;
EOF;
 } else { 
$return .= <<<EOF
left: 40px;
EOF;
 } } else { 
$return .= <<<EOF
left: -233px;
EOF;
 } 
$return .= <<<EOF

bottom: 5px;
} 
ul#navmenu li:hover ul ul, 
ul#navmenu li.iehover ul ul,  { 
display: none; 
} 
ul#navmenu li:hover ul, 
ul#navmenu ul li:hover ul, 
ul#navmenu ul ul li:hover ul, 
ul#navmenu li.iehover ul, 
ul#navmenu ul li.iehover ul, 
ul#navmenu ul ul li.iehover ul { 
display: block; 
} 

EOF;
 if($this->jz52_temp != 5 && $this->jz52_temp != 7) { 
$return .= <<<EOF

#jz52top a {margin: 6px 0;}

EOF;
 } if($this->jz52_thew == 1) { if($this->jz52_gjtwz == 1) { 
$return .= <<<EOF

#jz52top { z-index: {$this->jz52_zindex}; visibility: visible; left: {$this->jz52_right}px; }

EOF;
 } else { 
$return .= <<<EOF

#jz52top { z-index: {$this->jz52_zindex}; visibility: visible; right: {$this->jz52_right}px; }

EOF;
 } } else { if($this->jz52_gjtwz == 1) { 
$return .= <<<EOF

#jz52top { z-index: {$this->jz52_zindex}; visibility: visible; left: 50%; margin-left: -{$jz52w}px; }

EOF;
 } else { 
$return .= <<<EOF

#jz52top { z-index: {$this->jz52_zindex}; visibility: visible; right: 50%; margin-right: -{$jz52w}px; }

EOF;
 } } 
$return .= <<<EOF

#jz52topa { visibility: hidden;}
#jz52top, #jz52top a { border: none;}

EOF;
 if($this->jz52_dfk == 1) { 
$return .= <<<EOF

#jz52top { position: fixed; bottom: {$this->jz52_bootcc}px; display: block; width: 50px; background: none repeat scroll 0% 0% transparent; border: 0px #cdcdcd solid; border-radius: 3px; border-top: 0; cursor: pointer; }
#jz52top:hover { text-decoration: none; }

EOF;
 if($this->jz52_temp == 1) { 
$return .= <<<EOF

#jz52top a { display: block; width: 50px; height: 50px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #f8f8f8 url('source/plugin/jz52_top/template/djz52top1.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 2) { 
$return .= <<<EOF

#jz52top a { display: block; width: 50px; height: 50px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #00a398 url('source/plugin/jz52_top/template/djz52top.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 3) { 
$return .= <<<EOF

#jz52top a { display: block; width: 50px; height: 50px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #7f7f7f url('source/plugin/jz52_top/template/djz52top2.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 4) { 
$return .= <<<EOF

#jz52top a { display: block; width: 50px; height: 50px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #7f7f7f url('source/plugin/jz52_top/template/djz52top3.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 5) { 
$return .= <<<EOF

#jz52top a { display: block; width: 50px; height: 50px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #fff url('source/plugin/jz52_top/template/djz52top4.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 6) { 
$return .= <<<EOF

#jz52top a { display: block; width: 50px; height: 50px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #fff url('source/plugin/jz52_top/template/djz52top5.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 7) { 
$return .= <<<EOF

#jz52top a { display: block; width: 50px; height: 50px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #fff url('source/plugin/jz52_top/template/djz52top6.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } elseif($this->jz52_temp == 8) { 
$return .= <<<EOF

#jz52top a { display: block; width: 50px; height: 50px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #fff url('source/plugin/jz52_top/template/djz52top7.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

EOF;
 } 
$return .= <<<EOF

                a.jz52topa:hover { background-position: -50px 0px !important;}
a.replyfast { background-position: 0 -50px !important; }
a.replyfast:hover { background-position: -50px -50px !important;}
a.returnlist { background-position: 0 -100px !important; }
a.returnlist:hover { background-position: -50px -100px !important;}
a.returnboard { background-position: -100px -300px !important; }
a.returnboard:hover { background-position: -150px -300px !important;}
a.jzqr { background-position: 0 -150px !important; }
a.jzqr:hover { background-position: -50px -150px !important;}	
                a.jzwx { background-position: 0 -400px !important; }
a.jzwx:hover { background-position: -50px -400px !important;}				
a.jzkf { background-position: -100px 0px !important; }
a.jzkf:hover { background-position: -150px -0px !important;}
a.jzfx { background-position: -100px -50px !important; }
a.jzfx:hover { background-position: -150px -50px !important;}
.jzfxn { background: #fff !important; width: 231px !important; height: 260px !important; }
a.jzlast { background-position: -100px -100px !important; }
a.jzlast:hover { background-position: -150px -100px !important;}
a.jznext { background-position: -100px -150px !important; }
a.jznext:hover { background-position: -150px -150px !important;}	
                a.jzxyy { background-position: -100px -150px !important; }
a.jzxyy:hover { background-position: -150px -450px !important;}					
a.jzsct { background-position: 0px -200px !important; }
a.jzsct:hover { background-position: -50px -200px !important;}				
a.jzscb { background-position: -100px -200px !important; }
a.jzscb:hover { background-position: -150px -200px !important;}				
a.jzqqq { background-position: 0px -250px !important; }
a.jzqqq:hover { background-position: -50px -250px !important;}
                a.jzsoso { background-position: -100px -400px !important; }
a.jzsoso:hover { background-position: -150px -400px !important;}					
a.jzwo { background-position: -100px -250px !important; }
a.jzwo:hover { background-position: -150px -250px !important;}
a.jzzdy { background-position: 0px -300px !important; }
a.jzzdy:hover { background-position: -50px -300px !important;}
a.jzfbzt { background-position: 0px -350px !important; }
a.jzfbzt:hover { background-position: -50px -350px !important;}
a.jzkfzx { background-position: -100px -350px !important; }
a.jzkfzx:hover { background-position: -150px -350px !important;}


EOF;
 } else { 
$return .= <<<EOF


#jz52top { position: fixed; bottom: {$this->jz52_bootcc}px; display: block; width: 40px; background: none repeat scroll 0% 0% transparent; border: 0px #cdcdcd solid; border-radius: 3px; border-top: 0; cursor: pointer; }
#jz52top:hover { text-decoration: none; }

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
 } elseif($this->jz52_temp == 8) { 
$return .= <<<EOF

#jz52top a { display: block; width: 40px; height: 40px; padding: 0; line-height: 12px; text-align: center; color: #787878; text-decoration: none; background: #fff url('source/plugin/jz52_top/template/jz52top7.png') no-repeat 0 0; border-top: 0px #cdcdcd solid; }

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
a.jzqr { background-position: 0 -120px !important; }
a.jzqr:hover { background-position: -40px -120px !important;}
                a.jzwx { background-position: 0 -320px !important; }
a.jzwx:hover { background-position: -40px -320px !important;}				
a.jzkf { background-position: -80px 0px !important; }
a.jzkf:hover { background-position: -120px -0px !important;}
a.jzfx { background-position: -80px -40px !important; }
a.jzfx:hover { background-position: -120px -40px !important;}
.jzfxn { background: #fff !important; width: 231px !important; height: 260px !important; }
a.jzlast { background-position: -80px -80px !important; }
a.jzlast:hover { background-position: -120px -80px !important;}
a.jznext { background-position: -80px -120px !important; }
a.jznext:hover { background-position: -120px -120px !important;}	
a.jzxyy { background-position: -80px -120px !important; }
a.jzxyy:hover { background-position: -120px -360px !important;}			
a.jzsct { background-position: 0px -160px !important; }
a.jzsct:hover { background-position: -40px -160px !important;}				
a.jzscb { background-position: -80px -160px !important; }
a.jzscb:hover { background-position: -120px -160px !important;}				
a.jzqqq { background-position: 0px -200px !important; }
a.jzqqq:hover { background-position: -40px -200px !important;}	
                a.jzsoso { background-position: -80px -320px !important; }
a.jzsoso:hover { background-position: -120px -320px !important;}					
a.jzwo { background-position: -80px -200px !important; }
a.jzwo:hover { background-position: -120px -200px !important;}
a.jzzdy { background-position: 0px -240px !important; }
a.jzzdy:hover { background-position: -40px -240px !important;}
a.jzfbzt { background-position: 0px -280px !important; }
a.jzfbzt:hover { background-position: -40px -280px !important;}
a.jzkfzx { background-position: -80px -280px !important; }
a.jzkfzx:hover { background-position: -120px -280px !important;}

EOF;
 } 
$return .= <<<EOF


#jzqrn { background: #fff !important; width: 231px !important; height: 260px !important; }
#jzqrn { border: 1px solid rgb(210, 210, 210); text-align: center; }
#jzqrn p {
    font-size: 15px;
    padding-bottom: 15px;
    text-align: center;
color: #999;
    font-family: Microsoft YaHei;
}
#jzwon { background: #fff !important; width: 231px !important; height: 260px !important; }
#jzwon { border: 1px solid rgb(210, 210, 210); }
#jzfxn { border: 1px solid rgb(210, 210, 210); }
#jzfxn h3 {
    height: 23px;
    background: none repeat scroll 0% 0% rgb(250, 250, 250);
    border-bottom: 1px solid rgb(236, 236, 236);
    padding: 10px 0px 0px 10px;
}
#jzfxn .bdsharebuttonbox { padding: 13px 0px 0px 20px; }
#jzfxn .bdsharebuttonbox a, #jzfxn .bdsharebuttonbox .bds_more {
    float: left;
    font-size: 12px;
    padding-left: 25px;
    line-height: 16px;
text-align: left;
    height: 16px;
    background: url("http://bdimg.share.baidu.com/static/api/img/share/icons_1_16.png?v=01d441d0.png") no-repeat scroll 0px 0px ;
    background-repeat: no-repeat;
    cursor: pointer;
    margin: 6px 6px 6px 0px;
text-indent: 0;
    overflow: hidden;
width: 68px;
}
#jzfxn .bdsharebuttonbox .bds_qzone {
    background-position: 0px -52px !important;
}
#jzfxn .bdsharebuttonbox .bds_tsina {
    background-position: 0px -104px !important;
}
#jzfxn .bdsharebuttonbox .bds_tqq {
    background-position: 0px -260px !important;
}
#jzfxn .bdsharebuttonbox .bds_renren {
    background-position: 0px -208px !important;
}
#jzfxn .bdsharebuttonbox .bds_tqf {
    background-position: 0px -364px !important;
}
#jzfxn .bdsharebuttonbox .bds_tieba {
    background-position: 0px -728px !important;
}
#jzfxn .bdsharebuttonbox .bds_sqq {
    background-position: 0px -2652px !important;
}
#jzfxn .bdsharebuttonbox .bds_hi {
    background-position: 0px -416px !important;
}
#jzfxn .bdsharebuttonbox .bds_isohu {
    background-position: 0px -3016px !important;
}
#jzfxn .bdsharebuttonbox .bds_weixin {
    background-position: 0px -1612px !important;
}
#jzfxn .bdsharebuttonbox .bds_t163 {
    background-position: 0px -832px !important;
}
#jzfxn .bdsharebuttonbox .bds_tsohu {
    background-position: 0px -520px !important;
}
#jzfxn .bdsharebuttonbox .bds_baidu {
    background-position: 0px -2600px !important;
}
#jzfxn .bdsharebuttonbox .bds_qq {
    background-position: 0px -624px !important;
}
#jz52top a b {
    visibility: hidden;
    font-weight: normal;
}
</style> 

<script type="text/javascript"> 
// JavaScript Document
function goTopEx(){
        var obj=document.getElementById("goTopBtn");
        function getScrollTop(){
                return document.documentElement.scrollTop || document.body.scrollTop;
            }
        function setScrollTop(value){
            if(document.documentElement.scrollTop){
                    document.documentElement.scrollTop=value;
                }else{
                    document.body.scrollTop=value;
                }
                
            }    
        window.onscroll=function(){getScrollTop()>0?obj.style.display="":obj.style.display="none";
                    var h=document.body.scrollHeight - getScrollTop() - obj.offsetTop - obj.offsetHeight;
                    obj.style.bottom=0+"px";
                    if(h<350){
                        obj.style.bottom=340+"px";
                        obj.style.top="auto";
                    }

        
        }
        obj.onclick=function(){

            var goTop=setInterval(scrollMove,10);
            function scrollMove(){
                    setScrollTop(getScrollTop()/1.1);
                    if(getScrollTop()<1)clearInterval(goTop);

                }
        }
    }

</script> 

<div id="jz52top" >
    
EOF;
 if($this->jz52_topwz != 1) { 
$return .= <<<EOF

<span>
<DIV style="DISPLAY: none" id="goTopBtn" ><a title="���ض���" class="jz52topa" ><b>���ض���</b></a></DIV>
</span>
    <SCRIPT type=text/javascript>goTopEx();</SCRIPT>

EOF;
 } if($this->jz52_fbztkg == 1) { 
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
 } if($this->jz52_kshf == 1) { 
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
 } if($this->jz52_sctz == 1) { 
$return .= <<<EOF

<span><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id={$_G['tid']}&amp;formhash={$__FORMHASH}" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' �����ղ�'" title="!fav_thread!" class="jzsct" ><b>�ղ�����</b></a></span>

EOF;
 } } 
$return .= <<<EOF
	

EOF;
 if($_G['fid']) { if($_G['mod'] == 'viewthread') { if($this->jz52_fhlb == 1) { 
$return .= <<<EOF

<span>		
<a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}" hidefocus="true" class="returnlist" title="�����б�"><b>�����б�</b></a>
</span>

EOF;
 } } else { 
$return .= <<<EOF
	
    
EOF;
 if($this->jz52_xyy == 1) { 
$return .= <<<EOF

<span id="jz_next_t" >
          <a id="jz_next_N" href="#" title="��һҳ"  class="jzxyy"><b>��һҳ</b></a>
    </span>	
        <script type="text/javascript">
function jz_c(n){
var d = document.getElementsByTagName('a');
for(i = 0;i<d.length;i++){
if(d[i].className==n)
return d[i];
}
return false;
}
var nxt = jz_c('nxt');
if(nxt)
$('jz_next_N').href = nxt.href;
else
$('jz_next_t').style.display = 'none';
    </script>	

EOF;
 } if($this->jz52_fhzy == 1) { 
$return .= <<<EOF

<span>	
<a  href="index.php" hidefocus="true" class="returnboard" title="������ҳ"><b>������ҳ</b></a>
</span>
    
EOF;
 } 
$return .= <<<EOF

    
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
 } if($this->jz52_sokg == 1) { 
$return .= <<<EOF

<span><a rel="nofollow" title="����" class="jzsoso" href="javascript:;" onclick="showWindow('jzso','plugin.php?id=jz52_top:jz52_so')"><b>����</b></a></span>	

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

    <span>
{$this->jz52_zdybt}
</span>	

EOF;
 } if($this->jz52_fenxiang == 1) { 
$return .= <<<EOF

<span><ul id="navmenu"> <li><a title="����"  class="jzfx" ><b>����</b></a> <ul> <div class="jzfxn" id="jzfxn">
{$this->jz52_fenxidm}
</div> </ul></li></ul> </span>
    
EOF;
 } if($this->jz52_gzwx == 1) { 
$return .= <<<EOF

<span><ul id="navmenu"> <li><a title="��ע΢��"  class="jzwx" href="javascript:void(0)"><b>��ע΢��</b></a> <ul> <div id="jzqrn">
{$this->jz52_gzwxdm}
</div> </ul></li></ul> </span>	

EOF;
 } if($this->jz52_qr == 1) { 
$return .= <<<EOF

<span><ul id="navmenu"> <li><a title="QR Code"  class="jzqr" href="forum.php?mobile=yes"><b>QR Code</b></a> <ul> <div id="jzqrn">


EOF;
 if($_G['fid'] && $_G['mod'] == 'viewthread' && $this->jz52_tzqr == 1 ) { if($this->jz52_qrsc == 1) { 
$return .= <<<EOF

<style type="text/css">
#jzqrn .ltqr { margin: 24px 0 10px 0; }
</style>
<img  class="ltqr" src="http://qr.liantu.com/api.php?w=183&amp;m=0&amp;text={$jz52_url}" />
<img style="{$this->jz52_qrcss}" src="{$this->jz52_tzqrlo}" />

EOF;
 } elseif($this->jz52_qrsc == 2) { 
$return .= <<<EOF

<style type="text/css">
#jzqrn .googqr { margin: 16px 0 10px 0; }
</style>
<img class="googqr" src="http://chart.apis.google.com/chart?chs=200x200&amp;cht=qr&amp;chld=H|0&amp;chl={$jz52_url}" />
<img style="{$this->jz52_qrcss}" src="{$this->jz52_tzqrlo}" />

EOF;
 } elseif($this->jz52_qrsc == 3) { 
$return .= <<<EOF

<style type="text/css">
#jzqrn .ydqr { margin: 24px 0 10px 0; }
</style>
<img class="ydqr" src="http://qr.udee.cn/index.php?m=Qrcode&amp;a=aip&amp;t={$jz52_url}&amp;f=%23000000&amp;b=%23FFFFFF&amp;pt=%23000000&amp;inpt=%23000000&amp;st=1&amp;level=H&amp;wh=183" />
<img style="{$this->jz52_qrcss}" src="{$this->jz52_tzqrlo}" />

EOF;
 } 
$return .= <<<EOF


<p>{$this->jz52_tzqrsm}</p>

EOF;
 } else { 
$return .= <<<EOF

{$this->jz52_qrimg}

EOF;
 } 
$return .= <<<EOF



</div> </ul></li></ul> </span>	

EOF;
 } if($this->jz52_grzx == 1) { 
$return .= <<<EOF

<span>
<ul id="navmenu"> 
<li><a title="��������" class="jzwo" >

EOF;
 if($this->jz52_grzfktxkg == 1) { if($_G['member']['newprompt']) { 
$return .= <<<EOF

<div id="jzmms" >
<span class="navbar-unread">
{$_G['member']['newprompt']}
</span>
</div>

EOF;
 } else { if(empty($_G['member']['newpm'])) { } else { 
$return .= <<<EOF

<div id="jzmms" >
<span class="navbar-unreadn">
<b>n</b>
</span>
</div>

EOF;
 } } } 
$return .= <<<EOF

<b>��������</b></a> 
<ul> <div id="jzwon">

<style type="text/css">

#jzmms{padding: 2px; text-align: right; }
.navbar-unread {
    
EOF;
 if($this->jz52_temp == 8) { 
$return .= <<<EOF
background-color: #00A597;
EOF;
 } else { 
$return .= <<<EOF
background-color: #E74C3C;
EOF;
 } 
$return .= <<<EOF

    border-radius: 30px;
    color: #FFF;
    font-size: 11px;
    font-weight: 500;
    line-height: 17px;
    min-width: 8px;
    padding: 0px 4px;
    right: 0px;
    text-align: center;
    text-shadow: none;
    z-index: 10;
align: right;
}

.navbar-unreadn {
    background: url("
EOF;
 if($this->jz52_temp == 8) { 
$return .= <<<EOF
source/plugin/jz52_top/template/mmsn1.png
EOF;
 } else { 
$return .= <<<EOF
source/plugin/jz52_top/template/mmsn.png
EOF;
 } 
$return .= <<<EOF
") no-repeat scroll 0px 0px ;
    border-radius: 30px;
    color: #FFF;
    font-size: 11px;
    font-weight: 500;
    line-height: 17px;
    min-width: 8px;
    padding: 0px 4px;
    right: 0px;
    text-align: center;
    text-shadow: none;
    z-index: 10;
align: right;
}	

#jzgrzxkp {
height: 260px;
width: 231px;
background:#f2f6f8;
font-family: Microsoft YaHei;
}

#jzgrzxkp .jzgrzxkptop {
height: 140px;
background:  
EOF;
 if($this->jz52_grzxbjthe == 1) { } elseif($this->jz52_grzxbjthe == 2) { 
$return .= <<<EOF
url("source/plugin/jz52_top/template/1.jpg") no-repeat 0 0
EOF;
 } elseif($this->jz52_grzxbjthe == 3) { 
$return .= <<<EOF
url("source/plugin/jz52_top/template/2.jpg") no-repeat 0 0
EOF;
 } elseif($this->jz52_grzxbjthe == 4) { 
$return .= <<<EOF
url("source/plugin/jz52_top/template/3.jpg") no-repeat 0 0
EOF;
 } elseif($this->jz52_grzxbjthe == 5) { 
$return .= <<<EOF
url("source/plugin/jz52_top/template/4.jpg") no-repeat 0 0
EOF;
 } 
$return .= <<<EOF
 {$this->jz52_grzxbjs} ;
color: #fff;
}
#jzgrzxkp .jzgrzxkptop a{

color: #fff;
}

#jzgrzxkp .jzgrzxkptop h3 {
 height: 16px;
font-weight:normal;
    padding: 8px 0px 0px 10px;
font-size: 16px;
}

#jzgrzxkp .jzgrzxkptop .jzgrzxkpthtle {
height: 35px;
}
#jzgrzxkp .jzgrzxkptop .jzgrzxkpimg {
height: 65px;
text-align:center;
}

#jzgrzxkp .jzgrzxkptop .jzgrzxkpimg img {
width: 54px;
width: 54px;
border-radius: 100px;
margin-top: 2px;


}

#jzgrzxkp .jzgrzxkptop .jzgrzxkpimg .jzgrzxkpimgn {
width: 58px;
height: 58px;
border-radius: 100px;
background: none repeat scroll 0% 0% #fff;
margin-top: 5px;
margin-right: auto;
    margin-left: auto;
}

#jzgrzxkp .jzyhm {
    font-size: 15px;
    line-height: 22px;
text-align: center;
padding-bottom: 10px;
text-align:center;
}

#jzgrzxkp .jzyhm a {
    width: 231px;
    height: 15px;
text-align:center;
background: none ;
}

#jzgrzxkp .jzgrzxkpbox  { height: 120px; background:#f1f1f1;}

#jzgrzxkp .jzgrzxkpbox a { 
EOF;
 if($this->jz52_grzxxtb == 1) { 
$return .= <<<EOF
background:url("source/plugin/jz52_top/template/gr.png") no-repeat 0 0  ; 
EOF;
 } elseif($this->jz52_grzxxtb == 2) { 
$return .= <<<EOF
background:url("source/plugin/jz52_top/template/gr1.png") no-repeat 0 0  ; 
EOF;
 } elseif($this->jz52_grzxxtb == 3) { 
$return .= <<<EOF
background:url("source/plugin/jz52_top/template/gr2.png") no-repeat 0 0  ; 
EOF;
 } 
$return .= <<<EOF
 width:57px;height:60px;float:left; margin: 0px;}

.box01{background-position: 0px 0px !important;}
.box02{background-position: -57px 0px !important;}
.box03{background-position: -114px 0px !important;}
.box04{background-position: -171px 0px !important;}

.box05{background-position: 0px -60px !important;}
.box06{background-position: -57px -60px !important;}
.box07{background-position: -114px -60px !important;}
.box08{background-position: -171px -60px !important;}
.box09{background-position: 0px -120px !important;}


#jz52-grzx-skin a{
margin: 0px;
top: 0px;
height: 20px;
width: 20px;
overflow: hidden;
background-image: url('source/plugin/jz52_top/template/wei.png');
background-position: 0px 0px;
background-repeat: no-repeat;
position: absolute;
display: block;
right: 0px;
}

</style>

<div id="jzgrzxkp" class="jzgrzxkp">

EOF;
 if($this->jz52_grzxbjsckg == 1) { 
$return .= <<<EOF

<div id="jz52-grzx-skin">
<a href="#" target="_blank" id="jz52-grzx-skin" title="zdybj"></a>
</div>

EOF;
 } 
$return .= <<<EOF

<div class="jzgrzxkptop">
<div class="jzgrzxkpthtle">
<h3>��������</h3>
</div>  
<div class="jzgrzxkpimg">
<div class="jzgrzxkpimgn">
<img src="{$this->jz52_uc}/avatar.php?uid={$_G['uid']}&size=big" width="54" height="54">
</div>
</div>

EOF;
 if($_G['uid']) { 
$return .= <<<EOF
    
<div class="jzyhm"><a href="home.php?mod=space&amp;uid={$_G['uid']}" target="_blank" title="�����ҵĿռ�" >{$_G['member']['username']}</a></div>

EOF;
 } else { 
$return .= <<<EOF
   
<div class="jzyhm"><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">��¼��ע��</a></div>

EOF;
 } 
$return .= <<<EOF
 
</div>
<div class="jzgrzxkpbox">

EOF;
 if($sc == 1) { 
$return .= <<<EOF

<a href="home.php?mod=space&amp;do=favorite&amp;view=me" class="box01" target="_blank"  title="�ղ�" ></a>

EOF;
 } if($tz == 2) { 
$return .= <<<EOF

<a href="forum.php?mod=guide&amp;view=my" class="box02" target="_blank"  title="����" ></a>

EOF;
 } if($hy == 3) { 
$return .= <<<EOF

<a href="home.php?mod=space&amp;do=friend" class="box03" class="box04" target="_blank"  title="����" ></a>

EOF;
 } if($tx == 8) { 
$return .= <<<EOF

<a href="home.php?mod=space&amp;do=notice" class="box09" target="_blank"  title="����" >

EOF;
 if($this->jz52_grzxtxkg == 1) { if($_G['member']['newprompt']) { 
$return .= <<<EOF

<div id="jzmms" >
<span class="navbar-unread">
{$_G['member']['newprompt']}
</span>
</div>

EOF;
 } } 
$return .= <<<EOF

</a>

EOF;
 } if($xx == 4) { 
$return .= <<<EOF

<a href="home.php?mod=space&amp;do=pm" class="box04" target="_blank"  title="��Ϣ" >

EOF;
 if($this->jz52_grzxxxxkg == 1) { if(empty($_G['member']['newpm'])) { } else { 
$return .= <<<EOF

<div id="jzmms" >
<span class="navbar-unreadn">
<b>n</b>
</span>
</div>

EOF;
 } } 
$return .= <<<EOF

</a>

EOF;
 } if($sz == 5) { 
$return .= <<<EOF

<a href="home.php?mod=spacecp" class="box05" target="_blank" title="����" ></a>

EOF;
 } if($xz == 6) { 
$return .= <<<EOF

<a href="home.php?mod=medal" class="box06" target="_blank" title="ѫ��" ></a>

EOF;
 } if($rw == 7) { 
$return .= <<<EOF

<a href="home.php?mod=task" class="box07" target="_blank" title="����" ></a>

EOF;
 } if($tc == 9) { if($_G['uid']) { 
$return .= <<<EOF

<a href="member.php?mod=logging&amp;action=logout&amp;formhash={$__FORMHASH}" class="box08" title="�˳�" ></a>

EOF;
 } } 
$return .= <<<EOF

</div>
</div>
</div>
</ul>
</li>
</ul>
</span>	

EOF;
 } if($this->jz52_topwz == 1) { 
$return .= <<<EOF

<span>
<DIV style="DISPLAY: none" id="goTopBtn" ><a title="���ض���" class="jz52topa" ><b>���ض���</b></a></DIV>
</span>
    <SCRIPT type=text/javascript>goTopEx();</SCRIPT>

EOF;
 } 
$return .= <<<EOF

</div>

EOF;
 } 
$return .= <<<EOF


EOF;
?>