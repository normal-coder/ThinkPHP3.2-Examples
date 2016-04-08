<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	// 生成验证码
    public function index(){
        $verify = new \Think\Verify();
        $verify->fontSize = 30;
		$verify->length   = 3;
		$verify->useNoise = false;
        $verify -> entry();
    }


    // 校验验证码
    public function checkverify()
    {
    	$code = $_GET['code'];
    	$verify = new \Think\Verify();
    	$result = $verify -> check($code);
    	dump($result);
    }
}