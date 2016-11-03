<?php 

namespace app\controller;

use think\Controller;

class Number extends Controller
{
	
	protected $beforeActionList = [
			'first',
			'second'=>['except'=>'hello'],
			'three'=>['only'=>'hello,data'],
	];

	protected function first(){
		echo 'first';
	}

	protected function second(){
		echo 'second';
	}

	protected function three(){
		echo 'three';
	}

	public function hello(){
		echo 'hello';
	}

	public function data(){
		echo 'data';
	}
}





 ?>