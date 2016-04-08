<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * Switch标签
 */
class SwitchController extends Controller {
    public function index(){
    	//定义性别
    	$sex = "女-";
    	// 输出到模板并渲染
    	$this->assign('sex',$sex);
    	$this->display();
    }
}