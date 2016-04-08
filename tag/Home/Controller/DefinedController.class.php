<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * Defined标签
 */
class DefinedController extends Controller {
    public function index(){
    	define('name', 'test');
    	$this -> assign('Name',$name);
    	$this -> display();
    }
}