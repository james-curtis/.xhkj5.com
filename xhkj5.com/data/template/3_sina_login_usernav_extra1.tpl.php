<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$return = <<<EOF


EOF;
 if($this->isbind) { if($expired) { 
$return .= <<<EOF

<script language="javascript">
function show{$this->pluginid}() {
if(!$('{$this->pluginid}_menu')) {
menu=document.createElement('div');
menu.id='{$this->pluginid}_menu';
menu.style.display='none';
menu.className='p_pop';
menu.innerHTML = '<li><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id={$this->pluginid}:setting">�ӳ���Ȩ</a></li>';
$('append_parent').appendChild(menu);
}
showMenu({'ctrlid':'{$this->pluginid}','duration':2});
}
</script>
<span class="pipe">|</span>
<a style="background-image: url({$this->adminsettings['imgurl']}/icon_logo.png);background-repeat: no-repeat;" 
id="{$this->pluginid}" href="home.php?mod=spacecp&amp;ac=plugin&amp;id={$this->pluginid}:setting" class="new"
 onmouseover="delayShow(this, show{$this->pluginid})">΢��(<span>1</span>)</a>

EOF;
 } } else { 
$return .= <<<EOF

<span class="pipe">|</span>
<a href="{$this->adminsettings['initurl']}" style="margin-right:5px">
<img class="qq_bind" align="absmiddle" src="{$this->adminsettings['imgurl']}/weibo_bind.png"  alt="����΢����½">
</a>

EOF;
 } 
$return .= <<<EOF


EOF;
?>