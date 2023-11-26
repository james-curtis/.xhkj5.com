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
* 
*/
class table_jamesonfx_day extends discuz_table
{
	
	function __construct()
	{
		$this->_table = 'jamesonfx_day';
		$this->_pk = 'fxuid';
		parent::__construct();
	}

	// �����ѽ�����������
	function count_today_byuid($uid,$timestart){
		return (int) DB::result_first('SELECT count FROM %t WHERE fxuid=%d AND '.DB::field('addtime',$timestart,'>'),array($this->_table,$uid));
	}

	// ������ռ�¼��
	function add($uid,$kedui){
		if($old = $this->fetch(intval($uid))){
			// ���ԭ�����������
			$data = array();
			$data['fxuid'] = intval($uid);
			$data['addtime'] = time();
			if(($old['addtime']) > dmktime(date('Y-m-d',time()))){
				// �������ʱ����ڽ���0�㣬����ӣ�����ֱ���滻
				$data['count'] = intval($old['count'])+intval($kedui);
			}else{
				$data['count'] = intval($kedui);
			}
			$this->update(intval($uid),$data);
		}else{
			// �����������
			$this->insert(array(
				'addtime'=>time(),
				'fxuid'=>intval($uid),
				'count'=>intval($kedui)
				));
		}
		return;
	}

	// �������а�
	function fetch_jinri($size,$start,$end){
		return (array) DB::fetch_all('SELECT d.fxuid,d.count,c.username  FROM %t AS d INNER JOIN %t  AS c ON d.fxuid=c.uid  WHERE d.addtime<%d AND d.addtime>%d  ORDER BY d.count DESC LIMIT %d',array($this->_table,'common_member',$end,$start,$size));
	}
	// ������м�¼
	function clear(){
		$this->truncate();
	}
}