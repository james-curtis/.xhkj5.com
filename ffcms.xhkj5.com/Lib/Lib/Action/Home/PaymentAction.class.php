<?php
class PaymentAction extends HomeAction{
	
	// 付款首页
	public function index(){
		$this->display('Payment:index');
	}
	
	//影币充值 生成订单 并跳转支付
	public function post(){
		$user_id = $this->islogin();
		if($_POST['pay_type']=='alipay'){
			exit( D('Alipay')->submit($user_id, $_POST) );
		}elseif($_POST['pay_type']=='paypal'){
			exit( D('Paypal')->submit($user_id, $_POST) );
		}elseif($_POST['pay_type']=='rj'){
			exit( D('PayRj')->submit($user_id, $_POST) );
		}elseif($_POST['pay_type']=='wxpay'){
			$order = D('Wxpay')->submit($user_id, $_POST);
			if($order){
				$this->assign($order);
				$this->display('Payment:wxpay');
			}else{
				$this->assign("jumpUrl", ff_url('user/center'));
				$this->error('请检查参数是否设置正确!');
			}
		}else{
			$this->error('支付平台出错!');
		}
	}
	
	//订单查询
	public function query(){
		$type = $_GET['type'];
		$order = $_GET['order'];
		if($type == 'wxpay'){
			if(D('Wxpay')->query($order)){
				exit('SUCCESS');
			}
		}
		echo('FAIL');
	}
	
	//获取用户ID
	private function islogin(){
		$user_id = D('User')->ff_islogin();
		if($user_id){
			return $user_id;
		}
		$this->assign("jumpUrl", ff_url('user/login'));
		$this->error('请先登录!');
		exit();
	}
}
?>