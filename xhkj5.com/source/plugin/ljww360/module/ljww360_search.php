<?php
	if (! defined ( 'IN_DISCUZ' )) {
		exit ( 'Access Denied' );
	}
require_once libfile('function/discuzcode');
function is_utf8($word) 
{ 
	if (preg_match("/^([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){1}/",$word) == true || preg_match("/([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){1}$/",$word) == true || preg_match("/([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){2,}/",$word) == true) 
	{ 
		return true; 
	} 
	else
	{ 
		return false; 
	} 
}
$settingfile = DISCUZ_ROOT . './data/sysdata/cache_wenwen_setting.php';
if(file_exists($settingfile)){
	include $settingfile;
}
if(file_exists(DISCUZ_ROOT . './data/cache/cache_wenwen_setting.php')){
	$settingfile = DISCUZ_ROOT . './data/cache/cache_wenwen_setting.php';
	include DISCUZ_ROOT . './data/cache/cache_wenwen_setting.php';
}
	
$config = $_G ['cache'] ['plugin'] ['ljww360'];
$dingbu = $config ['dingbu'];


$conn=" where 1   ";
$subject=addcslashes($_GET['keyword'], '%_');
if($_G['charset']=='gbk'){			
	if(is_utf8($subject)){
		
		if(function_exists('mb_convert_encoding')) {
			
			$subject=mb_convert_encoding($subject, 'gbk', 'UTF-8');
			//
		} else {
			$subject=iconv('utf-8','gbk',$subject);
		}
		//$title=iconv('utf-8','gbk',$plaintext);
	}
	
}

//
//����COOKIE ���治Ϊ�գ�������������һ����ƷID
if (!empty($_G['cookie']['keyword']))
{

//ȡ��COOKIE�����ֵ�����ö��Ű����и��һ������
$history = explode(',', $_G['cookie']['keyword']);
//���������Ŀ�ͷ���뵱ǰ�����������ƷID
array_unshift($history, $subject);
//ȥ���������ظ���ֵ
$history = array_unique($history);
// $arr = array (1,2,3,1,3);
// $arr = array (1,1,2,3,3);
// $arr = array (1,2,3);
//������ĳ��ȴ���5��ѭ��ִ������Ĵ���
while (count($history) > 5)
{
//���������һ����Ԫ������ֱ�����ĳ���С�ڵ���5Ϊֹ
array_pop($history);
}

//����������ö�������һ���ַ���д��COOKIE�������������ʱ��Ϊ30��
dsetcookie('keyword', implode(',', $history), $_G[timestamp] + 3600 * 24 * 30);
}
else
{
//���COOKIE����Ϊ�գ���ѵ�ǰ�������ƷIDд��COOKIE �����ֻ�ڵ�һ���������վʱ����
dsetcookie('keyword', $subject, $_G[timestamp] + 3600 * 24 * 30);

}
//
if($_GET['do']=='del'){
	dsetcookie('keyword', $subject, $_G[timestamp] - 3600 * 24 * 30);
}
$cookiearr = explode(',', trim($_G['cookie']['keyword'],','));
	$typearr=C::t('#ljww360#plugin_ljwenwentype')->range();//����
	$zjanswer=C::t('#ljww360#plugin_lj_post')->fetch_post_all_bestnum();//�ѽ��
	$djanswer=C::t('#ljww360#plugin_lj_post')->range();//�����
	foreach($djanswer as $k=>$v){
		$arrdai[$v[threadid]]=cutstr(htmlspecialchars_decode(discuzcode(strip_tags(trim(preg_replace('/\[hide\].*?\[\/hide\]/is', '', stripslashes(preg_replace('/\[attach\].*?\[\/attach\]/is', '',$v[message]))))))),'100');
	}
	foreach($zjanswer as $k=>$v){
		$arrbest[$v[threadid]]=cutstr(htmlspecialchars_decode(discuzcode(strip_tags(trim(preg_replace('/\[hide\].*?\[\/hide\]/is', '', stripslashes(preg_replace('/\[attach\].*?\[\/attach\]/is', '',$v[message]))))))),'100');
	}
	if($arrbest){
		$q=2;
	}else{
		$q=1;
	}
	if($subject){
		$conn.=" and subject like '%$subject%' "; 		 
	}
	
	if($_GET['do']=='dai'){
		$conn.=" and  sign!='1'";
		$daohang='<a href="plugin.php?id=ljww360&mod=search&do=dai&keyword='.$subject.'">'.lang('plugin/ljww360','wtw10').'</a>';
		$dai="plugin.php?id=ljww360&mod=search&do=dai&keyword=".$subject;
	}else{
		if(!$_G['mobile']){
			$conn.=" and  sign='1'";
		}
		$daohang='<a href="plugin.php?id=ljww360&mod=search&do=yi&keyword='.$subject.'">'.lang('plugin/ljww360','wtw9').'</a>';
		$dai="plugin.php?id=ljww360&mod=search&do=yi&keyword=".$subject;
	}
	$perpage=10;
	$conn.=" and  authorid>'0' and  displayorder>='0'";
	$conn.=" order by id desc";
	 $curpage=intval($_GET['page']);
	 
	 if(!$curpage){
		$curpage=1;
	 }
	 $curnum=($curpage-1)*$perpage;
	 $sign=1;
	
	$num = C::t('#ljww360#plugin_lj_thread')->fetch_thread_by_conn($conn);
	$djarr=C::t('#ljww360#plugin_lj_thread')->fetch_thread_all_conn($conn,$curnum,$perpage);//δ���
	//debug($djarr);
	$paging = helper_page :: multi($num, $perpage, $curpage, "plugin.php?id=ljww360&mod=search&do=".$_GET['do']."&keyword=".$subject, 0, 11, false, false);
	foreach($djarr as $k=>$v){
		$djarr[$k]['dateline']=date('Y-m-d H:i:s',$v['dateline']);
		
	}
	$title = $config ['title'];
	$keywords = $config ['keywords'];
	$description = $config ['description'];
	$navtitle = $subject.'-'.$title;
	$metakeywords = $keywords;
	$metadescription = $description;
	include template ( 'ljww360:search' );

?>