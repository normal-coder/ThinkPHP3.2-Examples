<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * 比较标签
 */
class CompareController extends Controller {
    public function index(){
    	$num=5;
    	$this->assign('num',$num);
    	// 模板渲染
    	$this->display();
    }
}