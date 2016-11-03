<?php 

namespace app\controller;

use think\Controller;

class User extends Controller
{
	// 所有动作之前第一个调用方法
	public function _initialize(){
		
	}

	public function index(){
		// print_r($this->request->url());die;  域名之后的数据
		$this->assign('hostname',$this->request->url(true));
		return $this->fetch('index');
	}

	public function user(){
		
	}
}




 ?>