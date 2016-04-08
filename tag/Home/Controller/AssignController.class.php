<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * Assign标签
 */
class DefinedController extends Controller {
    public function index(){
    	$this -> display();
    }
}