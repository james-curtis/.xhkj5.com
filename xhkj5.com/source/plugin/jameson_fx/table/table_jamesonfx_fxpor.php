<?php
/*
Author:��.��.��
Website:www.fx8.cc
Qq:154-6069-14
*/
if(!defined('IN_DISCUZ')){
	exit('Access Denid');
}
/**
* fxuid ��� tid��� jiangliΪÿ�εĽ�����
*/
class table_jamesonfx_fxpor extends discuz_table
{
	
	function __construct()
	{
		$this->_table = 'jamesonfx_fxpor';
		$this->_pk = 'id';
		parent::__construct();
	}

	// ��ȡ���������
	function fetch_new($num){
		return (array) DB::fetch_all('SELECT DISTINCT fxuid,username FROM %t as f INNER JOIN %t AS m ON f.fxuid=m.uid ORDER BY addtime DESC LIMIT %d',array($this->_table,'common_member',$num));
	}
	// ��̨�Ի�Ա�鿴���ϲ�tid������
	function count_all_uid(){
		return  (int) count(DB::fetch_all('SELECT COUNT(fxuid) FROM %t GROUP BY fxuid',array($this->_table)));
	}

	// ��̨�Ի�Ա��Ա�鿴
	function fetch_all_uid($start,$size){
		return (array) DB::fetch_all(
			'SELECT SUM(f.jiangli) as jianglinums,COUNT(f.id) as usernums,f.fxuid,c.username FROM %t as f INNER JOIN %t as c ON f.fxuid=c.uid  GROUP BY fxuid ORDER BY usernums DESC LIMIT %d,%d',array($this->_table,'common_member',$start,$size)
			);
	}

	// ��̨��aid�鿴������
	function count_all_aid(){
		return  (int) count(DB::fetch_all('SELECT COUNT(aid) FROM %t GROUP BY aid',array($this->_table)));
	}

	// ��̨��tid�鿴
	function fetch_all_aid($start,$size){
		return (array) DB::fetch_all(
			'SELECT SUM(f.jiangli) as jianglinums,COUNT(f.id) as usernums,f.aid,a.title FROM %t as f INNER JOIN %t as a ON f.aid=a.aid  GROUP BY f.aid ORDER BY usernums DESC LIMIT %d,%d',array($this->_table,'portal_article_title',$start,$size)
			);
	}

	// ��ȡ��ǰ�û��ķ����¼������tid����ͳ��
	function count_byuid($uid){
		return (int)DB::result_first('SELECT count(*) FROM %t WHERE fxuid=%d GROUP BY aid',array($this->_table,$uid));
	}

	// ��ǰ�û��ķ����¼�ͽ���,��tid����
	function fetch_byuid($uid,$start,$size){
		return (array) DB::fetch_all('SELECT SUM(f.jiangli) as jianglinums,COUNT(f.fxuid) as usernums,f.id,f.fxuid,f.addtime,f.aid,f.jiangli,a.title FROM %t as f INNER JOIN %t as a ON f.aid=a.tid WHERE f.fxuid=%d GROUP BY f.aid ORDER BY usernums DESC LIMIT %d,%d',array($this->_table,'portal_article_title',$uid,$start,$size));
	}
	// ������м�¼
	function clear(){
		$this->truncate();
	}
}