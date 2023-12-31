﻿<?php
class XmlfeifeizyModel extends Model {
    private $ffdb;
    public function __construct(){
		$this->ffdb = M('Vod');
    }			
	//采集入库
    public function xml_insert($vod, $mustup){
	    if(empty($vod['vod_name']) || empty($vod['vod_url'])){
			return '影片名称或播放地址为空，不做处理!';
		}
		if(!$vod['vod_cid']){
			return '未匹配到对应栏目分类，不做处理!';
		}
		// 格式化常规字符
		$vod['vod_name'] = ff_xml_vodname($vod['vod_name']);
		$vod['vod_actor'] = ff_xml_vodactor($vod['vod_actor']);
		$vod['vod_director'] = ff_xml_vodactor($vod['vod_director']);	
		// 检测来源是否完全相同
		$array = $this->ffdb->field('vod_id,vod_name,vod_inputer,vod_play,vod_url')->where('vod_reurl="'.$vod['vod_reurl'].'"')->find();
		if($array){
			return $this->xml_update($vod, $array, $mustup);
		}
		// 检测影片名称是否相等(需防止同名的电影与电视冲突)
		$array = $this->ffdb->field('vod_id,vod_name,vod_actor,vod_title,vod_inputer,vod_play,vod_url')->where('vod_name="'.$vod['vod_name'].'" ')->find();
		if($array){
			//无主演 或 演员完全相等时 更新该影片
			if(empty($vod['vod_actor']) || ($array['vod_actor'] == $vod['vod_actor'])){
				return $this->xml_update($vod,$array,$mustup);
			}
			//有相同演员时更新该影片
			$arr_actor_1 = explode(',', ff_xml_vodactor($vod['vod_actor']));
			$arr_actor_2 = explode(',', ff_xml_vodactor($array['vod_actor']));
			$buf1 = array();
			$buf2 = array();
			foreach($arr_actor_1 as $i => $actor){
				$actors = explode(" ", $actor);
				if(count($actors) > 1) {
					unset($arr_actor_1[$i]);
					$buf1 = array_merge($buf1, $actors);
				} else {
					$arr_actor_1[$i] = trim($actor);
				}
			}
			foreach($arr_actor_2 as $i => $actor){
				$actors = explode(" ", $actor);
				if(count($actors) > 1) {
					unset($arr_actor_2[$i]);
					$buf2 = array_merge($buf2, $actors);
				} else {
					$arr_actor_2[$i] = trim($actor);
				}
			}

			foreach($buf1 as $i => $b) $buf1[$i] = trim($b);
			foreach($buf2 as $i => $b) $buf2[$i] = trim($b);

			$arr_actor_1 = array_merge($arr_actor_1, $buf1);
			$arr_actor_2 = array_merge($arr_actor_2, $buf2);

			if(count(array_intersect($arr_actor_1,$arr_actor_2)) > 0){
				return $this->xml_update($vod,$array,$mustup);
			}
		}
		//  相似条件判断
		if(C('play_collect_name')){
			$length = ceil(strlen($vod['vod_name'])/3) - intval(C('play_collect_name'));
			if($length > 1){
				$where = array();
				$where['vod_name'] = array('like',msubstr($vod['vod_name'],0,$length).'%');
				$array = $this->ffdb->field('vod_id,vod_name,vod_actor,vod_title,vod_inputer,vod_play,vod_url')->where($where)->order('vod_id desc')->find();
				if($array){
					// 主演完全相同 则检查是否需要更新
					if(!empty($array['vod_actor']) && !empty($vod['vod_actor']) ){
						$arr_actor_1 = explode(',', ff_xml_vodactor($vod['vod_actor']));
						$arr_actor_2 = explode(',', ff_xml_vodactor($array['vod_actor']));
						if(!array_diff($arr_actor_1,$arr_actor_2) && !array_diff($arr_actor_2,$arr_actor_1)){//若差集为空
							return $this->xml_update($vod,$array,$mustup);
						}
					}
					// 不是同一资源库 则标识为相似待审核
					if(!in_array($vod['vod_inputer'],$array)){
						$vod['vod_status'] = -1;
					}
				}
			}
		}
		// 添加影片开始
		unset($vod['vod_id']);
		$img = D('Img');
		$vod['vod_pic'] = $img->down_load($vod['vod_pic']);
		//$vod['vod_gold']    = mt_rand(1,C('rand_gold'));
		//$vod['vod_golder']  = mt_rand(1,C('rand_golder'));
		$vod['vod_up']      = mt_rand(1,C('rand_updown'));
		$vod['vod_down']    = mt_rand(1,C('rand_updown'));
		$vod['vod_hits']    = mt_rand(0,C('rand_hits'));
		$vod['vod_letter'] = ff_letter_first($vod['vod_name']);
		// 随机伪原创
		if(C('play_collect')){
			$vod['vod_content'] = ff_rand_str($vod['vod_content']);
		}		
		$vod['vod_stars'] = 1;
		$vod['vod_addtime'] = time();
		$id = $this->ffdb->data($vod)->add();
		// 增加关联tag
		if( $vod['vod_keywords'] ){
			$data = array();
			$data['tag_id'] = $id;
			$data['tag_sid'] = 1;
			$rstag = M("Tag");
			$rstag->where($data)->delete();
			$tags = array_unique(explode(',',trim($vod['vod_keywords'])));
			foreach($tags as $key=>$val){
				$data['tag_name'] = $val;
				$rstag->data($data)->add();
			}
		}
		if($id){
			return '添加成功('.$id.')。';
		}
		return '添加失败。';
    }	
	// 更新数据
	public function xml_update($vod, $vod_old, $mustup=false){	
		// 检测是否站长手动锁定更新
		if('ppvod' == $vod_old['vod_inputer']){
			return '站长手动设置，不更新。';
		}
		// 是否为强制更新资料图片等参数
		$edit = array();
		if( $mustup ){
			$img = D('Img');
			$edit['vod_pic'] = $img->down_load($vod['vod_pic']);
			$edit['vod_actor'] = $vod['vod_actor'];
			$edit['vod_director'] = $vod['vod_director'];
			$edit['vod_area'] = $vod['vod_area'];
			$edit['vod_language'] = $vod['vod_language'];
			$edit['vod_total'] = $vod['vod_total'];
			$edit['vod_isend'] = $vod['vod_isend'];
			$edit['vod_isfilm'] = $vod['vod_isfilm'];
			$edit['vod_filmtime'] = $vod['vod_filmtime'];
		}else{
			//if($vod['vod_title']){ $edit['vod_title'] = $vod['vod_title']; }
			if($vod['vod_area']){ $edit['vod_area'] = $vod['vod_area']; }
			if($vod['vod_year']){ $edit['vod_year'] = $vod['vod_year']; }
			if($vod['vod_language']){ $edit['vod_language'] = $vod['vod_language']; }
			if($vod['vod_total']){ $edit['vod_total'] = $vod['vod_total']; }
			if($vod['vod_isend']){ $edit['vod_isend'] = $vod['vod_isend']; }
			if($vod['vod_isfilm']){ $edit['vod_isfilm'] = $vod['vod_isfilm']; }
			if($vod['vod_filmtime']){ $edit['vod_filmtime'] = $vod['vod_filmtime']; }			
		}
		// 分解原服务器组
		$play_array_old = explode('$$$',$array['vod_play']);
		// 判断是否已存在相同播放器组的播放地址
		if($vod_old['vod_url'] != $vod['vod_url']){
				$edit['vod_play'] = $vod['vod_play'];
		    	$edit['vod_url'] = trim($vod['vod_url']);
				$edit['vod_update_info'] = strtoupper($vod['vod_play']).' 对应的播放地址发生了变化，已同步更新完成。';
			
		}else{
			$edit['vod_update_info'] = strtoupper($vod['vod_play']).' 对应的播放地址没有变化，无需更新，'.$array['vod_id'];			
		}
		// 组合更新条件及内容(以最后一次更新的库为检测依据)
		$edit['vod_id'] = $vod_old['vod_id'];
		$edit['vod_name'] = $vod['vod_name'];
		$edit['vod_continu'] = $vod['vod_continu'];	
		$edit['vod_inputer'] = $vod['vod_inputer'];
		$edit['vod_reurl'] = $vod['vod_reurl'];
		$edit['vod_addtime'] = time();
		$this->ffdb->data($edit)->save();
		//删除数据缓存
		if(C('data_cache_vod')){
			S('data_cache_vod_'.$vod_old['vod_id'],NULL);
		}			
		return $edit['vod_update_info'];
	}	
	// 重生成某一组的播放地址 返回新的地址(string)
	public function xml_update_urlone($vodurlold, $vodurlnew){
		$arrayold = explode(chr(13),trim($vodurlold));
		$arraynew = explode(chr(13),trim($vodurlnew));
		foreach($arraynew as $key=>$value){
			unset($arrayold[$key]);
		}
		if($arrayold){
			return implode(chr(13),array_merge($arraynew,$arrayold));
		}else{
			return implode(chr(13),$arraynew);
		}
	}					
}
?>
