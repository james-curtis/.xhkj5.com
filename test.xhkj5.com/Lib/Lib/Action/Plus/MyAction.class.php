<?php
class MyAction extends BaseAction{
	// ������ˡ�BY QQ:401421567
    public function statusall(){
		if(empty($_POST['ids'])){
			$this->error('��ѡ����Ҫ��˵�ӰƬ��');
		}
		$rs = D("Vod");
		$array = $_POST['ids'];
		foreach($array as $val){
			$where['vod_id'] = $val;
			$rs->where($where)->setField('vod_status',1);
		}
		redirect('?s=Admin-Vod-Show-status-3');
    }
}
?>