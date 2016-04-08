<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * 范围判断标签
 */
class RangeController extends Controller {
    public function index(){
    	$num=16;
    	$this->assign('num',$num);
    	// 模板渲染
    	$this->display();
    }
}