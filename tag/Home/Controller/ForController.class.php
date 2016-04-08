<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * For标签
 */
class ForController extends Controller {
    public function index(){
    	// 模板渲染
    	$this->display();
    }
}