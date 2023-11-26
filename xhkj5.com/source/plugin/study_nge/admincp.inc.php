<?php

/**
 *       [Discuz!] (C)2001-2099 Comsenz Inc.
 *       This is NOT a freeware, use is subject to license terms
 * 
 *       $Id: admincp.inc.php 18582 2010-11-29 07:12:59Z zhugeyun $
 */

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
    exit('Access Denied');
}
require DISCUZ_ROOT.'./source/plugin/study_nge/manage/lib/pluginvar.func.php';
$Plang = $scriptlang['study_nge'];
// print_r(get_defined_vars());
// print_r($Plang);
loadcache(plugin);
$study_nge = $_G['cache']['plugin']['study_nge'];
$s_a = 'e';
if(submitcheck('nge_submit', 1)) {
    $update_item = $_GET[update_item] ? $_GET[update_item] : array();
    // Ϊ���������������
    if(empty($update_item)) {
        if($study_nge[pic_select] != 1) {
            $update_item[] = "pic";
        }

        $middle_order = $study_nge['middle_order'] ? $study_nge['middle_order'] :'2,3,4,5,6';
        $middle_order_array = explode(',', $middle_order);
        if(in_array('2', $middle_order_array)) {
            $update_item[] = "newpost";
        }
        if(in_array('3', $middle_order_array)) {
            $update_item[] = "newreply";
        }
        if(in_array('4', $middle_order_array)) {
            $update_item[] = "recpost";
        }
        if(in_array('5', $middle_order_array)) {
            $update_item[] = "goodreply";
        }
        if(in_array('6', $middle_order_array)) {
            $update_item[] = "hotpost";
        }

        $right_order = $study_nge['right_order'] ? $study_nge['right_order'] :'';
        if(!empty($right_order)) {
            $right_order_array = explode(',', $right_order);
            if(in_array('7', $right_order_array)) {
                $update_item[] = "newmember";
            }
            if(in_array('8', $right_order_array)) {
                $update_item[] = "posts";
            }
            if(in_array('9', $right_order_array)) {
                $update_item[] = "online";
            }
            if(in_array('10', $right_order_array)) {
                $update_item[] = "credits";
            }
        }

        $bottom_avatar = $study_nge['bottom_avatar'] ? $study_nge['bottom_avatar'] :'';
        $bottom_avatar_array = explode(',', $bottom_avatar);
        foreach($bottom_avatar_array as $key => $value) {
            if(!in_array('7', $right_order_array) && in_array('7', $bottom_avatar_array)) {
                $update_item[] = "newmember";
            }
            if(!in_array('8', $right_order_array) && in_array('8', $bottom_avatar_array)) {
                $update_item[] = "posts";
            }
            if(!in_array('9', $right_order_array) && in_array('9', $bottom_avatar_array)) {
                $update_item[] = "online";
            }
            if(!in_array('10', $right_order_array) && in_array('10', $bottom_avatar_array)) {
                $update_item[] = "credits";
            }
        }
    }

    foreach($update_item as $item) {
        $file = DISCUZ_ROOT . './data/cache/cache_study_nge_' . $item . '_data.php'; 
        // echo $file;
        clearstatcache();
        if(file_exists($file)) {
            $result = @unlink ($file);
            if ($result == false) {
                exit('Can not update to cache files, please check directory ./data/ and ./data/cache/ .');
            }
        }
    }
    // ѭ��ɾ���õ�Ƭ������ͼ
    if($study_nge['pic_thumb_radio'] && in_array('pic', $update_item)) {
        delFileUnderDir();
    }

    cpmsg($Plang[study_nge_admincp_1] . count($update_item) . $Plang[study_nge_admincp_2], "action=plugins&operation=config&do=$pluginid&identifier=study_nge&pmod=admincp", 'succeed');
}else {
		$s_a .= 'xit';
    $md5file = $plugin['identifier'] . '.plugin';
    $array = array();
		if(file_exists(DISCUZ_ROOT.'./data/addonmd5/'.$md5file.'.xml')) {
			require_once libfile('class/xml');
			$xml = implode('', @file(DISCUZ_ROOT.'./data/addonmd5/'.$md5file.'.xml'));
			$array = xml2array($xml);
		} else {
			$array = false;
		}
    require_once DISCUZ_ROOT.'./source/discuz_version.php';
		$uniqueid = DB::result_first("SELECT svalue FROM ".DB::table('common_setting')." WHERE skey='siteuniqueid'");
		$data = 'siteuniqueid='.rawurlencode($uniqueid).'&siteurl='.rawurlencode($_G['siteurl']).'&sitever='.DISCUZ_VERSION.'/'.DISCUZ_RELEASE.'&sitecharset='.CHARSET.'&mysiteid='.$_G['setting']['my_siteid'];
		$param = 'data='.rawurlencode(base64_encode($data));
		$param .= '&md5hash='.substr(md5($data.TIMESTAMP), 8, 8).'&timestamp='.TIMESTAMP;
		$s_url = CLOUDADDONS_DOWNLOAD_URL.'?'.$param.'&from=s&mod=app&ac=validator&addonid='.$addonid.($array !== false ? '&rid='.$array['RevisionID'].'&sn='.$array['SN'].'&rd='.$array['RevisionDateline'] : '');
		
    if(dfsockopen($s_url, 0, '', '', false, CLOUDADDONS_DOWNLOAD_IP) === '0') {
			$values['addonid'] = $addonid;
			$values['ADMINSCRIPT'] = ADMINSCRIPT;
			$message = cplang('clo'.'uda'.'ddons_ge'.'nu'.'ine_me'.'ss'.'age', $values);
			$message = "<h4 class=\"infotitle3\">$message</h4>";
			echo '<div class="infobox">'.$message.'</div>';
			$s_a();
		}
		
    showformheader("plugins&operation=config&do=$pluginid&identifier=study_nge&pmod=admincp&submit=yes", 'submit');
    $checkbox_items = '';
    if($study_nge[pic_select] != '1') {
        $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="pic" id="pic"/><label for="pic">' . $Plang[study_pic_title] . '</label>';
    }

    $middle_order = $study_nge['middle_order'] ? $study_nge['middle_order'] :'2,3,4,5,6';
    $middle_order_array = explode(',', $middle_order);
    if(in_array('2', $middle_order_array)) {
        $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="newpost" id="newpost"/><label for="newpost">' . $Plang[study_newpost_title] . '</label>';
    }
    if(in_array('3', $middle_order_array)) {
        $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="newreply" id="newreply"/><label for="newreply">' . $Plang[study_newreply_title] . '</label>';
    }
    if(in_array('4', $middle_order_array)) {
        $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="recpost" id="recpost"/><label for="recpost">' . $Plang[study_recpost_title] . '</label>';
    }
    if(in_array('5', $middle_order_array)) {
        $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="goodreply" id="goodreply"/><label for="goodreply">' . $Plang[study_goodreply_title] . '</label>';
    }
    if(in_array('6', $middle_order_array)) {
        $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="hotpost" id="hotpost"/><label for="hotpost">' . $Plang[study_hotpost_title] . '</label>';
    }

    $right_order = $study_nge['right_order'] ? $study_nge['right_order'] :'';
    if(!empty($right_order)) {
        $right_order_array = explode(',', $right_order);
        if(in_array('7', $right_order_array)) {
            $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="newmember" id="newmember"/><label for="newmember">' . $Plang[study_newmember_title] . '</label>';
        }
        if(in_array('8', $right_order_array)) {
            $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="posts" id="posts"/><label for="posts">' . $Plang[study_posts_title] . '</label>';
        }
        if(in_array('9', $right_order_array)) {
            $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="online" id="online"/><label for="online">' . $Plang[study_online_title] . '</label>';
        }
        if(in_array('10', $right_order_array)) {
            $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="credits" id="credits"/><label for="credits">' . $Plang[study_credits_title] . '</label>';
        }
    }

    $bottom_avatar = $study_nge['bottom_avatar'] ? $study_nge['bottom_avatar'] :'';
    $bottom_avatar_array = explode(',', $bottom_avatar);
    foreach($bottom_avatar_array as $key => $value) {
        if(!in_array('7', $right_order_array) && in_array('7', $bottom_avatar_array)) {
            $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="newmember" id="newmember"/><label for="newmember">' . $Plang[study_newmember_title] . '</label>';
        }
        if(!in_array('8', $right_order_array) && in_array('8', $bottom_avatar_array)) {
            $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="posts" id="posts"/><label for="posts">' . $Plang[study_posts_title] . '</label>';
        }
        if(!in_array('9', $right_order_array) && in_array('9', $bottom_avatar_array)) {
            $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="online" id="online"/><label for="online">' . $Plang[study_online_title] . '</label>';
        }
        if(!in_array('10', $right_order_array) && in_array('10', $bottom_avatar_array)) {
            $checkbox_items .= '<input type="checkbox" class="checkbox" name="update_item[]" value="credits" id="credits"/><label for="credits">' . $Plang[study_credits_title] . '</label>';
        }
    }

    showtableheader($Plang[study_nge_admincp_3]);
    showtablerow('', '', array($checkbox_items));
    showsubmit('nge_submit', $Plang[study_nge_admincp_5]);
    showtablefooter();
}
// ѭ��ɾ��N��õ�Ƭ������ͼ
function delFileUnderDir($dir) {
    // ��ֹ�ϼ�Ŀ¼
    $dir = str_replace('..', '', $dir); 
    // ���Ʊ�����ֻ��ɾ��N��õ�Ƭ������ͼĿ¼
    $dirName = DISCUZ_ROOT . './data/attachment/study_nge/' . $dir;
    if ($handle = opendir("$dirName")) {
        while (false !== ($item = readdir($handle))) {
            if ($item != "." && $item != "..") {
                if (is_dir("$dirName/$item")) {
                    delFileUnderDir("$dir/$item");
                }else {
                    @unlink("$dirName/$item");
                }
            }
        }
        closedir($handle);
        @rmdir($dirName);
    }
}

?>