<?php
//��ӭ����Լ����±�д����� . �и��õ�˼·������,Ҳ�����������վ��.�Ա����������ʹ��..
//��������ѿ�Դ,  �벻Ҫ�޸Ĵ˴���Ȩ лл
// ������   http://bbs.zuuu.com
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$long = $_G['cache']['plugin']['ecode']['codewidth'] ? $_G['cache']['plugin']['ecode']['codewidth'] : 1000;
if($_G['cache']['plugin']['ecode']['font']){
	foreach(explode("\n", trim($_G['cache']['plugin']['ecode']['font'])) as $item){
		list($index, $choice) = explode('=', $item);
		$font[$index] = $choice;
	}
	
	if($_G['cache']['plugin']['ecode']['banquan']){
	$banquan=$_G['cache']['plugin']['ecode']['banquan'];
	}else{
	$banquan = '�뽫�����Դ��븴��ճ�����·��༭����';
	}
}else{
	$font = array(
	0=>'�����ɫ',
	1=>'Ĭ����ɫ',
	2=>'��ͳ��ɫ',
	3=>'��ͳ��ɫ',
	4=>'��ɫ����',
	5=>'������ɫ',
	6=>'��������',
	7=>'��ɫ���',
	8=>'�ۺ���',
	9=>'��ɫ���',
	10=>'��ɫ���');

		if($_G['cache']['plugin']['ecode']['banquan']){
	$banquan=$_G['cache']['plugin']['ecode']['banquan'];
	}else{
	$banquan = '�뽫�����Դ��븴��ճ�����·��༭����';
	}
}
$tmp = array_keys($font);
$current = $tmp[0];
$max = max($tmp);
$currentleft = ($max-5)*110;
$autopost = $_G['cache']['plugin']['ecode']['autopost'] ? 1 : 0;
$codemod = $_G['cache']['plugin']['ecode']['codemod'] == '' ? 'ecode' : $_G['cache']['plugin']['ecode']['codemod'];
$fast = $_GET['fast'] ? intval($_GET['fast']) : 0;
include template('ecode:index');

?>