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
class table_jamesonfx_fx extends discuz_table
{
	public $_time;
	public $_cache = array();
	function __construct()
	{
		$this->_table = 'jamesonfx_fx';
		$this->_pk = 'id';
		$this->_cache_ttl = 600;
		$this->_time = time();
		parent::__construct();
		// var_dump($this);
	}

	// ��ȡ��ǰ�û��ķ����¼������tid����ͳ��
	function count_byuid($uid){
		return (int)DB::result_first('SELECT count(*) FROM %t WHERE fxuid=%d GROUP BY tid',array($this->_table,$uid));
	}
	// ��ǰ�û��ķ����¼�ͽ���,��tid����
	function fetch_byuid($uid,$start,$size){
		return (array) DB::fetch_all('SELECT SUM(f.jiangli) as jianglinums,COUNT(f.fxuid) as usernums,f.id,f.fxuid,f.addtime,f.tid,f.jiangli,t.subject FROM %t as f INNER JOIN %t as t ON f.tid=t.tid WHERE f.fxuid=%d GROUP BY f.tid ORDER BY usernums DESC LIMIT %d,%d',array($this->_table,'forum_thread',$uid,$start,$size));
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


	// ��̨��tid�鿴���ϲ�uid������
	function count_all_tid(){
		return  (int) count(DB::fetch_all('SELECT COUNT(tid) FROM %t GROUP BY tid',array($this->_table)));
	}

	// ��̨��tid�鿴
	function fetch_all_tid($start,$size){
		return (array) DB::fetch_all(
			'SELECT SUM(f.jiangli) as jianglinums,COUNT(f.id) as usernums,f.tid,t.subject FROM %t as f INNER JOIN %t as t ON f.tid=t.tid  GROUP BY f.tid ORDER BY usernums DESC LIMIT %d,%d',array($this->_table,'forum_thread',$start,$size)
			);
	}
	// ������м�¼
	function clear(){
		$this->truncate();
	}
	// ��ȡ���а�����
	function fetch_paihang($num){
			$data = (array) DB::fetch_all(
				'SELECT SUM(f.jiangli) as jianglinums,COUNT(f.id) as usernums,f.fxuid,c.username FROM %t as f INNER JOIN %t as c ON f.fxuid=c.uid  GROUP BY fxuid ORDER BY jianglinums DESC LIMIT %d',array($this->_table,'common_member',$num)
				);
			$this->store_cache('jamesonfxpaihang',$data,$this->_cache_ttl,$this->_pre_cache_key);
			return $data;
	}
	// ��ȡ���������
	function fetch_new($num){
		return (array) DB::fetch_all('SELECT DISTINCT fxuid,username FROM %t as f INNER JOIN %t AS m ON f.fxuid=m.uid ORDER BY addtime DESC LIMIT %d',array($this->_table,'common_member',$num));
	}
}