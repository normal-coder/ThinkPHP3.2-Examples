<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * Empty标签
 */
class EmptyController extends Controller {
    public function index(){
    	$name = "test";
    	$this -> assign('name',$name);
    	$this -> display();
    }
}