<?php
namespace app\controller;

use app\model\User;

class Index
{
    public function index()
    {
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 返回json格式数据
        // return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }
    // 路径分隔符
    public function path(){
    	echo 'dir_separator:'.DIRECTORY_SEPARATOR;
    }
    // 定义当前目录
    public function dir(){
    	echo __DIR__;
    }

    // invoke say function
    public function hello(){

        $hello = new \my\Test();
        $hello->sayHello();
    }

    // User 
    // public function user(){

    //     $userModel = new User();

    // }

}
