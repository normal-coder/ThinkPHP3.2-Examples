<?php
namespace Home\Controller;
use Think\Controller;
/**
 * ThinkPHP模板标签案例
 * Foreach标签
 */
class ForeachController extends Controller {
    public function index(){
    	//定义二维数组
    	$data = array(
    		array('id'=>'1','name'=>'jack'),
    		array('id'=>'2','name'=>'tom'),
    		array('id'=>'3','name'=>'ali'),
    		array('id'=>'4','name'=>'joke')
    		);
    	// 输出到模板并渲染
    	$this->assign('data',$data);
    	$this->display();
    }
}