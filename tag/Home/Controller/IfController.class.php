<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * If标签
 */
class IfController extends Controller {
    public function index(){
    	$name = "test";
    	$id   = 5;
    	$this -> assign('name',$name);
    	$this -> assign('id',$id);
    	// 模板渲染
    	$this -> display();
    }
}