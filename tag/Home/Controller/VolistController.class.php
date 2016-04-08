<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * Volist标签
 */
class VolistController extends Controller {
    public function index(){
    	$data = array(
    		array('id'=>'1','name'=>'jack'),
    		array('id'=>'2','name'=>'tom'),
    		array('id'=>'3','name'=>'ali'),
    		array('id'=>'4','name'=>'joke')
    		);
    	$dataempty = array();
    	$this->assign('data',$dataempty);
    	$this->display();
    }
}