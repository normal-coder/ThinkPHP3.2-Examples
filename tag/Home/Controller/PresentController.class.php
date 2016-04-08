<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * Present标签
 */
class PresentController extends Controller {
    public function index(){
    	$name = "test";
    	$this -> assign('name',$name);
    	$this -> display();
    }
}