<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./source/plugin/study_nge/template/phpwind/nge.htm', './source/plugin/study_nge/template/default/pic.htm', 1524236883, 'study_nge', './data/template/3_study_nge_phpwind_nge.tpl.php', './source/plugin/study_nge/template', 'phpwind/nge')
|| checktplrefresh('./source/plugin/study_nge/template/phpwind/nge.htm', './source/plugin/study_nge/template/default/threads.htm', 1524236883, 'study_nge', './data/template/3_study_nge_phpwind_nge.tpl.php', './source/plugin/study_nge/template', 'phpwind/nge')
|| checktplrefresh('./source/plugin/study_nge/template/phpwind/nge.htm', './source/plugin/study_nge/template/default/member.htm', 1524236883, 'study_nge', './data/template/3_study_nge_phpwind_nge.tpl.php', './source/plugin/study_nge/template', 'phpwind/nge')
|| checktplrefresh('./source/plugin/study_nge/template/phpwind/nge.htm', './source/plugin/study_nge/template/default/bottom_avatar.htm', 1524236883, 'study_nge', './data/template/3_study_nge_phpwind_nge.tpl.php', './source/plugin/study_nge/template', 'phpwind/nge')
;?><?php
$__VERHASH = VERHASH;$return = <<<EOF

<script type="text/javascript">var showngethreadcard = 
EOF;
 if($nge_config['threadcard_select'] == '3' || $nge_config['threadcard_select'] == '4') { 
$return .= <<<EOF
1
EOF;
 } else { 
$return .= <<<EOF
0
EOF;
 } 
$return .= <<<EOF
,msgstr = '���ٻظ�...';</script>

EOF;
 if($splugin_cookie['extstyle'] == 'auto') { 
$return .= <<<EOF

<style>
.nge_inactive{ {$study_nge_temp_style['header_color']}; {$study_nge_temp_style['header_font']} border-right:1px solid {$study_nge_temp_style['border_color']};border-bottom:1px solid {$study_nge_temp_style['border_color']};}
.nge_active{ {$study_nge_temp_style['header_font']} border-right:1px solid {$study_nge_temp_style['border_color']};}
.nge_border_left{border-left:1px solid {$study_nge_temp_style['border_color']};}
.nge_border_right{border-right:1px solid {$study_nge_temp_style['border_color']};}
.nge_border{border-collapse: collapse;border:1px solid {$study_nge_temp_style['border_color']};}
{$study_nge['common_extstyle_zdy']}
</style>

EOF;
 } elseif($splugin_cookie['extstyle'] == 'zdy') { 
$return .= <<<EOF

<style>
{$study_nge['common_extstyle_zdy']}
</style>

EOF;
 } 
$return .= <<<EOF

<link href="source/plugin/study_nge/images/nge.css?{$__VERHASH}" rel="stylesheet" type="text/css" />
<div id="popLayer" class="floattitle" nowrap></div>
<div class="study_nge_{$splugin_cookie['extstyle']}" id="study_nge_div" style="margin-bottom: 10px;{$study_nge['common_font_css']}">
<table border=0 cellSpacing=0 cellPadding=0 width="100%" class="nge_border">
    <tr>

EOF;
 if($study_nge['pic_select'] != 1) { 
$return .= <<<EOF

<td width="{$swf_width}" class="nge_border_right">
<table border="0" cellSpacing=0 cellPadding=0 width="100%" style="height:24px">
        <tbody>
        	<tr style="text-align:center;">
        		<td class="nge_inactive" style="border-right:none;border-left:none;">{$pic_title}</td>
</tr>
       </tbody>
    </table>
</td>
    
EOF;
 } 
$return .= <<<EOF

    <td class="nge_border_right">
    <table cellSpacing=0 cellPadding=0 width="100%" style="height:24px">
        <tbody>
        <tr>

EOF;
 if($nge_data['count']['threads'] =='1') { 
$return .= <<<EOF

        
EOF;
 if(is_array($nge_data['id']['threads'])) foreach($nge_data['id']['threads'] as $key => $id) { 
$return .= <<<EOF
        			<td class="nge_inactive" align="center"  style="cursor: pointer;border-left:0px">{$nge_data['nav']['threads'][$id]}</td>

EOF;
 } 
$return .= <<<EOF

        	
EOF;
 } else { 
$return .= <<<EOF

        
EOF;
 if(is_array($nge_data['id']['threads'])) foreach($nge_data['id']['threads'] as $key => $id) { 
$return .= <<<EOF
        			<td 
EOF;
 if($key == '0') { 
$return .= <<<EOF
class="nge_active" style="border-left:0px"
EOF;
 } else { 
$return .= <<<EOF
class="nge_inactive"
EOF;
 } 
$return .= <<<EOF
 id="study_nge_t_threads_{$key}" align="center" onmouseover="study_nge_hoverLi('_threads_','{$key}','{$nge_data['count']['threads']}');" style="cursor: pointer;
EOF;
 if($nge_data['lastid']['threads']==$id) { 
$return .= <<<EOF
border-right:0px;
EOF;
 } 
$return .= <<<EOF
">{$nge_data['nav']['threads'][$id]}</td>

EOF;
 } } 
$return .= <<<EOF

        </tr>
        </tbody>
    </table>
    </td>
    
EOF;
 if(!empty($right_order)) { 
$return .= <<<EOF

    <td width="20%">
    <table cellSpacing=0 cellPadding=0 width="100%" style="height:24px;">
        <tbody>
        <tr>

EOF;
 if($nge_data['count']['members'] =='1') { 
$return .= <<<EOF

        
EOF;
 if(is_array($nge_data['id']['members'])) foreach($nge_data['id']['members'] as $key => $id) { 
$return .= <<<EOF
        			<td class="nge_inactive" align="center" style="border-left:0px;cursor: pointer">{$nge_data['nav']['members'][$id]}</td>

EOF;
 } 
$return .= <<<EOF

        	
EOF;
 } else { 
$return .= <<<EOF

        
EOF;
 if(is_array($nge_data['id']['members'])) foreach($nge_data['id']['members'] as $key => $id) { 
$return .= <<<EOF
        			<td 
EOF;
 if($key == '0') { 
$return .= <<<EOF
class="nge_active" style="border-left:0px"
EOF;
 } else { 
$return .= <<<EOF
class="nge_inactive"
EOF;
 } 
$return .= <<<EOF
 id="study_nge_t_members_{$key}" align="center" onmouseover="study_nge_hoverLi('_members_','{$key}','{$nge_data['count']['members']}');" style="cursor: pointer;
EOF;
 if($nge_data['lastid']['members']==$id) { 
$return .= <<<EOF
border-right:0px;
EOF;
 } 
$return .= <<<EOF
">{$nge_data['nav']['members'][$id]}</td>

EOF;
 } } 
$return .= <<<EOF

        </tr>
        </tbody>
    </table>
    </td>
    
EOF;
 } 
$return .= <<<EOF

    </tr>
    <tr>
    	
EOF;
 if($study_nge['pic_select'] != 1) { 
$return .= <<<EOF

    <td width="{$study_slide['width']}px" align=center class="nge_border_right" style="border-top:none;">
    <table border="0" cellSpacing=0 cellPadding=0 width="{$study_slide['width']}">
      <tbody>
        <tr>
        	<td align="center" style="position: relative;">

EOF;
 if($study_nge['pic_way'] == 'js') { 
$return .= <<<EOF

<div>
<div class="module cl slidebox">
<ul class="slideshow">

EOF;
 if($study_nge['pic_ad_first']) { 
$return .= <<<EOF

<li style="width: {$study_slide['width']}px; height: {$study_slide['height']}px;">
{$study_nge['pic_ad_first']}
</li>

EOF;
 } if($study_slide['title_radio']) { if(is_array($nge_data['content']['image']['new']['pic'])) foreach($nge_data['content']['image']['new']['pic'] as $key => $value) { 
$return .= <<<EOF
<li style="width: {$study_slide['width']}px; height: {$study_slide['height']}px;">
<a href="{$nge_data['content']['image']['new']['url'][$key]}" title="{$nge_data['content']['image']['new']['text'][$key]}" target="_blank">
<img src="{$value}" width="{$study_slide['width']}" height="{$study_slide['height']}" alt="newpic"/></a>										
<span class="nge_title" style="color:{$study_slide['title_color']};background-color:{$study_slide['title_bgcolor']};filter: Alpha(Opacity={$study_slide['title_bgtransparent']});-moz-opacity:{$study_slide['title_bgtransparent_noie']};opacity:{$study_slide['title_bgtransparent_noie']};">{$nge_data['content']['image']['new']['text'][$key]}</span>
</li>

EOF;
 } } else { if(is_array($nge_data['content']['image']['new']['pic'])) foreach($nge_data['content']['image']['new']['pic'] as $key => $value) { 
$return .= <<<EOF
<li style="width: {$study_slide['width']}px; height: {$study_slide['height']}px;">
<a href="{$nge_data['content']['image']['new']['url'][$key]}" title="{$nge_data['content']['image']['new']['text'][$key]}" target="_blank">
<img src="{$value}" width="{$study_slide['width']}" height="{$study_slide['height']}" alt="newpic"/></a>										
</li>

EOF;
 } } if($study_nge['pic_ad_last']) { 
$return .= <<<EOF

<li style="width: {$study_slide['width']}px; height: {$study_slide['height']}px;">
{$study_nge['pic_ad_last']}
</li>

EOF;
 } 
$return .= <<<EOF

</ul>
</div>
<script type="text/javascript">
runslideshow();
</script>
</div>

EOF;
 } else { 
$return .= <<<EOF

<script type="text/javascript">
<!--
    var swf_width={$study_slide['width']}
    var swf_height={$study_slide['height']}
    var config="{$study_slide['pic_cut']}|{$study_slide['title_0xcolor']}|{$study_slide['title_0xbgcolor']}|{$study_slide['title_bgtransparent']}|0xffffff|0x0099ff|0x000000"
    var files="{$flash_pic['pic']}"
    var links="{$flash_pic['url']}"
    var texts="{$flash_pic['text']}"
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="source/plugin/study_nge/images/focus.swf" />');
document.write('<param name="quality" value="high" />');
document.write('<param name="menu" value="false" />');
document.write('<param name=wmode value="opaque" />');
document.write('<param name="FlashVars" value="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'" />');
document.write('<embed src="source/plugin/study_nge/images/focus.swf" wmode="opaque" FlashVars="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
document.write('</object>');
//-->
</script>

EOF;
 } 
$return .= <<<EOF

</td>
</tr>
</tbody>
</table>
</td>    
EOF;
 } 
$return .= <<<EOF

    
    <td class="nge_border_right">
    <table border="0" cellSpacing=0 cellPadding=0 width="100%" style="table-layout:auto;">
        <tbody>
        <tr valign="top">
        <td>
        	<img src="source/plugin/study_nge/images/list{$thread_num}.gif" alt="�б�"/>
        </td>
        <td class="nge_list_td">
        
EOF;
 if($nge_config['threadcard_select'] == 2) { 
$return .= <<<EOF

        
EOF;
 if(is_array($nge_data['id']['threads'])) foreach($nge_data['id']['threads'] as $key => $id) { 
$return .= <<<EOF
        	<div id="study_nge_m_threads_{$key}" class="
EOF;
 if($key == '0') { 
$return .= <<<EOF
nge_dis
EOF;
 } else { 
$return .= <<<EOF
nge_undis
EOF;
 } 
$return .= <<<EOF
">
        
EOF;
 if(is_array($nge_data['content']['threads'][$id])) foreach($nge_data['content']['threads'][$id] as $tid => $thread) { 
$return .= <<<EOF
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

EOF;
 if($nge_config['common_icon_radio']) { if($thread['attachment'] == 2) { 
$return .= <<<EOF

<img src="static/image/filetype/image_s.gif" alt="attach_img" title="��ͼƬ" align="absmiddle" />

EOF;
 } elseif($thread['attachment'] == 1) { 
$return .= <<<EOF

<img src="static/image/filetype/common.gif" alt="attachment" title="�и���" align="absmiddle" />

EOF;
 } if($thread['digest'] > 0) { 
$return .= <<<EOF

<img src="static/image/common/digest_{$thread['digest']}.gif" align="absmiddle" alt="digest" title="���� {$thread['digest']}" />

EOF;
 } if($thread['rate'] > 0) { 
$return .= <<<EOF

<img src="static/image/common/agree.gif" align="absmiddle" alt="agree" title="���ӱ��ӷ�" />

EOF;
 } elseif($thread['rate'] < 0) { 
$return .= <<<EOF

<img src="static/image/common/disagree.gif" align="absmiddle" alt="disagree" title="���ӱ�����" />

EOF;
 } } 
$return .= <<<EOF

        				
        			
EOF;
 if($study_nge['common_tiezi_right']==3) { 
$return .= <<<EOF

        			
EOF;
 if($nge_data['config']['threads'][$id]['right_reply']) { 
$return .= <<<EOF

        			
EOF;
 if($thread['lastposter']) { 
$return .= <<<EOF

        				<a href="home.php?mod=space&amp;username={$thread['url_lastposter']}" style="color:{$nge_config['tiezi_right_color']}" {$target_blank_radio} c="1" >[{$thread['lastposter']}]</a>
        			
EOF;
 } else { 
$return .= <<<EOF

        				<font color="{$nge_config['tiezi_right_color']}">[{$_G['setting']['anonymoustext']}]</font>
        				
EOF;
 } 
$return .= <<<EOF

        			
EOF;
 } else { 
$return .= <<<EOF

        			
EOF;
 if($thread['author']) { 
$return .= <<<EOF

        				<a href="home.php?mod=space&amp;uid={$thread['authorid']}" style="color:{$nge_config['tiezi_right_color']}" {$target_blank_radio} c="1" >[{$thread['author']}]</a>	
        				
EOF;
 } else { 
$return .= <<<EOF

        				<font color="{$nge_config['tiezi_right_color']}">[{$_G['setting']['anonymoustext']}]</font>
        				
EOF;
 } 
$return .= <<<EOF

        			
EOF;
 } 
$return .= <<<EOF

      			
EOF;
 } elseif($study_nge['common_tiezi_right']==2) { 
$return .= <<<EOF

        				
EOF;
 if($nge_data['config']['threads'][$id]['right_reply']) { 
$return .= <<<EOF

        				{$thread['lastpost']}	
        			
EOF;
 } else { 
$return .= <<<EOF

        				{$thread['dateline']}
        			
EOF;
 } 
$return .= <<<EOF

      			
EOF;
 } 
$return .= <<<EOF

        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
EOF;
 if($study_nge['common_fid_radio']) { 
$return .= <<<EOF

<a href="forum.php?mod=forumdisplay&amp;fid={$thread['fid']}" title="{$study_nge_forums[$thread['fid']]['name']}" {$thread['highlight']} {$target_blank_radio} >[{$study_nge_forums[$thread['fid']]['name']}]</a>

EOF;
 } if($id =='newreply' && $_G['uid']) { 
$return .= <<<EOF

        	 			<a href="forum.php?mod=redirect&amp;tid={$thread['tid']}&amp;goto=lastpost#lastpost" title="���: {$study_nge_forums[$thread['fid']]['name']}\n����: {$thread['subject']}\n����: 
EOF;
 if($thread['author']) { 
$return .= <<<EOF
{$thread['author']}
EOF;
 } else { 
$return .= <<<EOF
{$_G['setting']['anonymoustext']}
EOF;
 } 
$return .= <<<EOF
 ({$thread['dateline']})\n���:  {$thread['views']} �� �ظ�: {$thread['replies']} ��\n�ظ�: 
EOF;
 if($thread['lastposter']) { 
$return .= <<<EOF
{$thread['lastposter']}
EOF;
 } else { 
$return .= <<<EOF
{$_G['setting']['anonymoustext']}
EOF;
 } 
$return .= <<<EOF
 ({$thread['lastpost']})" {$thread['highlight']} {$target_blank_radio} name="xxx">{$thread['subject']}</a>

EOF;
 } else { 
$return .= <<<EOF

<a href="forum.php?mod=viewthread&amp;tid={$thread['tid']}" title="���: {$study_nge_forums[$thread['fid']]['name']}\n����: {$thread['subject']}\n����: 
EOF;
 if($thread['author']) { 
$return .= <<<EOF
{$thread['author']}
EOF;
 } else { 
$return .= <<<EOF
{$_G['setting']['anonymoustext']}
EOF;
 } 
$return .= <<<EOF
 ({$thread['dateline']})\n���:  {$thread['views']} �� �ظ�: {$thread['replies']} ��\n�ظ�: 
EOF;
 if($thread['lastposter']) { 
$return .= <<<EOF
{$thread['lastposter']}
EOF;
 } else { 
$return .= <<<EOF
{$_G['setting']['anonymoustext']}
EOF;
 } 
$return .= <<<EOF
 ({$thread['lastpost']})" {$thread['highlight']} {$target_blank_radio} name="xxx">{$thread['subject']}</a>

EOF;
 } 
$return .= <<<EOF

</div>
</div>

EOF;
 } 
$return .= <<<EOF

        	</div>

EOF;
 } 
$return .= <<<EOF

        
EOF;
 } else { 
$return .= <<<EOF

        
EOF;
 if(is_array($nge_data['id']['threads'])) foreach($nge_data['id']['threads'] as $key => $id) { 
$return .= <<<EOF
        	<div id="study_nge_m_threads_{$key}" class="
EOF;
 if($key == '0') { 
$return .= <<<EOF
nge_dis
EOF;
 } else { 
$return .= <<<EOF
nge_undis
EOF;
 } 
$return .= <<<EOF
">
        
EOF;
 if(is_array($nge_data['content']['threads'][$id])) foreach($nge_data['content']['threads'][$id] as $tid => $thread) { 
$return .= <<<EOF
        		<div class="nge_list_div">
        			<div style='float:right;margin-right:5px' style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
EOF;
 if($study_nge['common_tiezi_right']==3) { 
$return .= <<<EOF

        			
EOF;
 if($nge_data['config']['threads'][$id]['right_reply']) { 
$return .= <<<EOF

        			
EOF;
 if($thread['lastposter']) { 
$return .= <<<EOF

        				<a href="home.php?mod=space&amp;username={$thread['url_lastposter']}" style="color:{$nge_config['tiezi_right_color']}" {$target_blank_radio} c="1" >[{$thread['lastposter']}]</a>
        			
EOF;
 } else { 
$return .= <<<EOF

        				<font color="{$nge_config['tiezi_right_color']}">[{$_G['setting']['anonymoustext']}]</font>
        				
EOF;
 } 
$return .= <<<EOF

        			
EOF;
 } else { 
$return .= <<<EOF

        			
EOF;
 if($thread['author']) { 
$return .= <<<EOF

        				<a href="home.php?mod=space&amp;uid={$thread['authorid']}" style="color:{$nge_config['tiezi_right_color']}" {$target_blank_radio} c="1" >[{$thread['author']}]</a>	
        				
EOF;
 } else { 
$return .= <<<EOF

        				<font color="{$nge_config['tiezi_right_color']}">[{$_G['setting']['anonymoustext']}]</font>
        				
EOF;
 } 
$return .= <<<EOF

        			
EOF;
 } 
$return .= <<<EOF

      			
EOF;
 } elseif($study_nge['common_tiezi_right']==2) { 
$return .= <<<EOF

        				
EOF;
 if($nge_data['config']['threads'][$id]['right_reply']) { 
$return .= <<<EOF

        				{$thread['lastpost']}	
        			
EOF;
 } else { 
$return .= <<<EOF

        				{$thread['dateline']}
        			
EOF;
 } 
$return .= <<<EOF

      			
EOF;
 } 
$return .= <<<EOF

        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
EOF;
 if($study_nge['common_fid_radio']) { 
$return .= <<<EOF

<a href="forum.php?mod=forumdisplay&amp;fid={$thread['fid']}" title="{$study_nge_forums[$thread['fid']]['name']}" {$thread['highlight']} {$target_blank_radio} >[{$study_nge_forums[$thread['fid']]['name']}]</a>

EOF;
 } if($id =='newreply' && $_G['uid']) { 
$return .= <<<EOF

        	 			<a href="forum.php?mod=redirect&amp;tid={$thread['tid']}&amp;goto=lastpost#lastpost" nge_c="1" nge_t="{$thread['tid']}" {$thread['highlight']} {$target_blank_radio}>{$thread['subject']}</a>

EOF;
 } else { 
$return .= <<<EOF

<a href="forum.php?mod=viewthread&amp;tid={$thread['tid']}" nge_c="1" nge_t="{$thread['tid']}" {$thread['highlight']} {$target_blank_radio}>{$thread['subject']}</a>

EOF;
 } 
$return .= <<<EOF

</div>
</div>

EOF;
 } 
$return .= <<<EOF

        	</div>

EOF;
 } } 
$return .= <<<EOF

<!-- Powered by 1314study.com -->
        </td>
        </tr>
        </tbody>
    </table>
</td>
EOF;
 if(!empty($right_order)) { 
$return .= <<<EOF
<td valign="top" width="20%">
  <table border="0" cellSpacing=0 cellPadding=0 width="100%" style="table-layout:auto;">
    <tbody>
    
EOF;
 if(is_array($nge_data['id']['members'])) foreach($nge_data['id']['members'] as $key => $id) { 
$return .= <<<EOF
    <tr valign="top" id="study_nge_m_members_{$key}" class="
EOF;
 if($key == '0') { 
$return .= <<<EOF
nge_dis
EOF;
 } else { 
$return .= <<<EOF
nge_undis
EOF;
 } 
$return .= <<<EOF
">
     	
EOF;
 if($id=='posts' && $nge_config['posts_way']=='2') { 
$return .= <<<EOF

<td>
<table width="100%">
<tbody>
      	<tr  width="100%">
    <td colspan="2" height="24" style="background-color:{$nge_config['posts_titlecolor']['0']};"><img src="source/plugin/study_nge/images/poststar/0.gif" align="absmiddle" alt="{$nge_config['posts_show_name']['0']}"/> <strong>{$nge_config['posts_show_name']['0']}</strong></td>
  </tr>
      	<tr width="100%" style="background-color:{$nge_config['posts_infocolor']['0']};">
        
EOF;
 if($nge_data['content']['members']['posts']['0']) { 
$return .= <<<EOF

        <td class="poststar" style="width:48px;padding:0 4px;height:57px">
        	<a href="home.php?mod=space&amp;uid={$nge_data['content']['members']['posts']['0']['uid']}" target="_blank" c="1">
        		{$nge_data['content']['members']['posts']['0']['avatar']}
        	</a>
        </td>
        <td>
        <div class="nge_posts_info_div">�û�����<a href="home.php?mod=space&amp;uid={$nge_data['content']['members']['posts']['0']['uid']}" target="_blank" c="1">{$nge_data['content']['members']['posts']['0']['username']}</a></div>
        <div class="nge_posts_info_div" style="color:{$study_nge_temp_style['common_hy_right_color']}">
��������{$nge_data['content']['members']['posts']['0']['num']} ƪ
        </div>
        
EOF;
 if($nge_data['content']['members']['posts']['0']['credits']) { 
$return .= <<<EOF

        <div class="nge_posts_info_div">�ܻ��֣�{$nge_data['content']['members']['posts']['0']['credits']}</div>
        
EOF;
 } 
$return .= <<<EOF

      </td>
      
EOF;
 } else { 
$return .= <<<EOF

      	<td class="poststar" style="width:48px;padding:0 4px;height:57px">
        	<img src="source/plugin/study_nge/images/avatar0.jpg" width="48px" height="48px" alt="avatar"/>
        </td>
        <td>
        <div><a onclick=showWindow("nav","forum.php?mod=misc&amp;action=nav") style="cursor:pointer;color:{$study_nge_temp_style['common_hy_right_color']}">���˵ǰ���Ҫ�ϰ�</a></div>
      </td>
      
EOF;
 } 
$return .= <<<EOF

    </tr>
    
    <tr  width="100%">
    <td colspan="2" height="24" style="background-color:{$nge_config['posts_titlecolor']['1']};"><img src="source/plugin/study_nge/images/poststar/1.gif" align="absmiddle" alt="{$nge_config['posts_show_name']['1']}"/> <strong>{$nge_config['posts_show_name']['1']}</strong></td>
  </tr>
      	<tr width="100%" style="background-color:{$nge_config['posts_infocolor']['1']};">
        
EOF;
 if($nge_data['content']['members']['posts']['1']) { 
$return .= <<<EOF

        <td class="poststar" style="padding:0 4px;height:57px">
        	<a href="home.php?mod=space&amp;uid={$nge_data['content']['members']['posts']['1']['uid']}" target="_blank" c="1">
        		{$nge_data['content']['members']['posts']['1']['avatar']}
        	</a>
        </td>
        <td>
        <div class="nge_posts_info_div">�û�����<a href="home.php?mod=space&amp;uid={$nge_data['content']['members']['posts']['1']['uid']}" target="_blank" c="1">{$nge_data['content']['members']['posts']['1']['username']}</a></div>
        <div class="nge_posts_info_div" style="color:{$study_nge_temp_style['common_hy_right_color']}">
��������{$nge_data['content']['members']['posts']['1']['num']} ƪ
        </div>
        
EOF;
 if($nge_data['content']['members']['posts']['1']['credits']) { 
$return .= <<<EOF

        <div class="nge_posts_info_div">�ܻ��֣�{$nge_data['content']['members']['posts']['1']['credits']}</div>
        
EOF;
 } 
$return .= <<<EOF

      </td>
      
EOF;
 } else { 
$return .= <<<EOF

      	<td class="poststar" style="padding:0 4px;height:57px">
        	<img src="source/plugin/study_nge/images/avatar1.jpg" width="48px" height="48px" alt="avatar"/>
        </td>
        <td>
        <div><a onclick=showWindow("nav","forum.php?mod=misc&amp;action=nav") style="cursor:pointer;color:{$study_nge_temp_style['common_hy_right_color']}">���˵ǰ���Ҫ�ϰ�</a></div>
      </td>
      
EOF;
 } 
$return .= <<<EOF

    </tr>
    
    <tr  width="100%">
    <td colspan="2" height="24" style="background-color:{$nge_config['posts_titlecolor']['2']};"><img src="source/plugin/study_nge/images/poststar/2.gif" align="absmiddle" alt="{$nge_config['posts_show_name']['2']}"/> <strong>{$nge_config['posts_show_name']['2']}</strong></td>
  </tr>
      	<tr width="100%" style="background-color:{$nge_config['posts_infocolor']['2']};">
        
EOF;
 if($nge_data['content']['members']['posts']['2']) { 
$return .= <<<EOF

        <td class="poststar" style="padding:0 4px;height:58px">
        	<a href="home.php?mod=space&amp;uid={$nge_data['content']['members']['posts']['2']['uid']}" target="_blank" c="1">
        		{$nge_data['content']['members']['posts']['2']['avatar']}
        	</a>
        </td>
        <td>
        <div class="nge_posts_info_div">�û�����<a href="home.php?mod=space&amp;uid={$nge_data['content']['members']['posts']['2']['uid']}" target="_blank" c="1">{$nge_data['content']['members']['posts']['2']['username']}</a></div>
        <div class="nge_posts_info_div" style="color:{$study_nge_temp_style['common_hy_right_color']}">
��������{$nge_data['content']['members']['posts']['2']['num']} ƪ
        </div>
        
EOF;
 if($nge_data['content']['members']['posts']['2']['credits']) { 
$return .= <<<EOF

        <div class="nge_posts_info_div">�ܻ��֣�{$nge_data['content']['members']['posts']['2']['credits']}</div>
        
EOF;
 } 
$return .= <<<EOF

      </td>
      
EOF;
 } else { 
$return .= <<<EOF

      	<td class="poststar" style="padding:0 4px;height:58px">
        	<img src="source/plugin/study_nge/images/avatar2.jpg" width="48px" height="48px" alt="avatar"/>
        </td>
        <td>
        <div><a onclick=showWindow("nav","forum.php?mod=misc&amp;action=nav") style="cursor:pointer;color:{$study_nge_temp_style['common_hy_right_color']}">���˵ǰ���Ҫ�ϰ�</a></div>
      </td>
      
EOF;
 } 
$return .= <<<EOF

    </tr>
</tbody>
</table>
</td>        	

EOF;
 } else { 
$return .= <<<EOF

        <td><img src="./source/plugin/study_nge/images/list{$thread_num}.gif" alt="�б�"></td>
        <td class="nge_list_td">
      
EOF;
 if(is_array($nge_data['content']['members'][$id])) foreach($nge_data['content']['members'][$id] as $uid => $member) { 
$return .= <<<EOF
      		<div class="nge_list_div">
<div style='float:right;margin-left:5px;margin-right:5px;display:inline;'>
<font color="{$study_nge_temp_style['common_hy_right_color']}">

EOF;
 if($id=='newmember') { 
$return .= <<<EOF

{$member['regdate']}

EOF;
 } elseif($id=='posts') { 
$return .= <<<EOF

{$member['num']} ��

EOF;
 } elseif($id=='online') { 
$return .= <<<EOF

{$member['oltime']} Сʱ

EOF;
 } elseif($id=='credits') { 
$return .= <<<EOF

{$member['credits']} 
EOF;
 if($study_nge['credits_extcredit']) { 
$return .= <<<EOF
{$_G['setting']['extcredits'][$study_nge['credits_extcredit']]['title']}
EOF;
 } else { 
$return .= <<<EOF
����
EOF;
 } } 
$return .= <<<EOF

</font>
</div>
<div style="word-break:keep-all;overflow:hidden;text-overflow:ellipsis;">
<a href="home.php?mod=space&amp;uid={$member['uid']}" c="1"{$target_blank_radio} >{$member['username']}</a>
</div>
</div>

EOF;
 } 
$return .= <<<EOF

        </td>

EOF;
 } 
$return .= <<<EOF

    </tr>
    
EOF;
 } 
$return .= <<<EOF

  	</tbody>
  </table>
</td>
EOF;
 } 
$return .= <<<EOF

</tr>
</table>
<table border=0 cellSpacing=0 cellPadding=0 width="100%" style="border-collapse: collapse;">
    
EOF;
 if(is_array($nge_data['id']['bottom_avatar'])) foreach($nge_data['id']['bottom_avatar'] as $key => $id) { if($id=='newmember') { 
$return .= <<<EOF

<tr width="960px">
  <td colspan="3" class="bottom_avatar">
    <div class="bottom_avatar_avatar">{$nge_data['nav']['bottom_avatar'][$id]}</div>
EOF;
 if(is_array($nge_data['content']['bottom_avatar'][$id])) foreach($nge_data['content']['bottom_avatar'][$id] as $member) { 
$return .= <<<EOF
<div class="bottom_avatar_a">
<ul class="avt y" style="float:left;">
<a href="home.php?mod=space&amp;uid={$member['uid']}"{$target_blank_radio} title="{$member['regdate']}" target="_blank">{$member['avatar']}</a>
</ul>
<ul style="text-align:center;">
<a href="home.php?mod=space&amp;uid={$member['uid']}"{$target_blank_radio} title="{$member['regdate']}" target="_blank">{$member['username']}</a>
</ul>
</div>

EOF;
 } 
$return .= <<<EOF

</td>
</tr>

EOF;
 } elseif($id=='posts') { 
$return .= <<<EOF

<tr width="960px">
  <td colspan="3" class="bottom_avatar">
    <div class="bottom_avatar_avatar">{$nge_data['nav']['bottom_avatar'][$id]}</div>
EOF;
 if(is_array($nge_data['content']['bottom_avatar'][$id])) foreach($nge_data['content']['bottom_avatar'][$id] as $member) { 
$return .= <<<EOF
<div class="bottom_avatar_a">
<ul class="avt y" style="float:left;">
<a href="home.php?mod=space&amp;uid={$member['uid']}"{$target_blank_radio} title="{$member['num']} ��" target="_blank">{$member['avatar']}</a>
</ul>
<ul style="text-align:center;">
<a href="home.php?mod=space&amp;uid={$member['uid']}"{$target_blank_radio} title="{$member['num']} ��" target="_blank">{$member['username']}</a>
</ul>
</div>

EOF;
 } 
$return .= <<<EOF

</td>
</tr>				

EOF;
 } elseif($id=='online') { 
$return .= <<<EOF

<tr width="960px">
  <td colspan="3" class="bottom_avatar">
    <div class="bottom_avatar_avatar">{$nge_data['nav']['bottom_avatar'][$id]}</div>
EOF;
 if(is_array($nge_data['content']['bottom_avatar'][$id])) foreach($nge_data['content']['bottom_avatar'][$id] as $member) { 
$return .= <<<EOF
<div class="bottom_avatar_a">
<ul class="avt y" style="float:left;">
<a href="home.php?mod=space&amp;uid={$member['uid']}"{$target_blank_radio} title="{$member['oltime']} Сʱ" target="_blank">{$member['avatar']}</a>
</ul>
<ul style="text-align:center;">
<a href="home.php?mod=space&amp;uid={$member['uid']}"{$target_blank_radio} title="{$member['oltime']} Сʱ" target="_blank">{$member['username']}</a>
</ul>
</div>

EOF;
 } 
$return .= <<<EOF

</td>
</tr>

EOF;
 } elseif($id=='credits') { 
$return .= <<<EOF

<tr width="960px">
  <td colspan="3" class="bottom_avatar">
    <div class="bottom_avatar_avatar">{$nge_data['nav']['bottom_avatar'][$id]}</div>
EOF;
 if(is_array($nge_data['content']['bottom_avatar'][$id])) foreach($nge_data['content']['bottom_avatar'][$id] as $member) { 
$return .= <<<EOF
<div class="bottom_avatar_a">
<ul class="avt y" style="float:left;">
<a href="home.php?mod=space&amp;uid={$member['uid']}"{$target_blank_radio} title="{$member['credits']} 
EOF;
 if($study_nge['credits_extcredit']) { 
$return .= <<<EOF
{$_G['setting']['extcredits'][$study_nge['credits_extcredit']]['title']}
EOF;
 } else { 
$return .= <<<EOF
����
EOF;
 } 
$return .= <<<EOF
" target="_blank">{$member['avatar']}</a>
</ul>
<ul style="text-align:center;">
<a href="home.php?mod=space&amp;uid={$member['uid']}"{$target_blank_radio} title="{$member['credits']} 
EOF;
 if($study_nge['credits_extcredit']) { 
$return .= <<<EOF
{$_G['setting']['extcredits'][$study_nge['credits_extcredit']]['title']}
EOF;
 } else { 
$return .= <<<EOF
����
EOF;
 } 
$return .= <<<EOF
" target="_blank">{$member['username']}</a>
</ul>
</div>

EOF;
 } 
$return .= <<<EOF

</td>
</tr>

EOF;
 } } 
$return .= <<<EOF
</table>
</div>
<script src="source/plugin/study_nge/images/common.js?{$__VERHASH}" type="text/javascript" ></script>

EOF;
?>