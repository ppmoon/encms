<?php
namespace Admin\Controller;
use Think\Controller;
class PasswordController extends CommonController {
    public function index(){
		//dump($_SESSION['uid']);
		$this->display();
    }
	public function changePassword(){
		$db=M('user');
        $user=$db->where("id='".$_SESSION['uid']."'")->find();
		if(!$user || $user['password'] != I('password','','md5')){
            	$this->error('旧填写密码错误');
          }else{
			  $data=array(
				'id'=>(int) $_SESSION['uid'],
				'password'=>I('newpassword','','md5')
				);
				M('user')->save($data);
				$this->success('修改密码成功');
				//e10adc3949ba59abbe56e057f20f883e
		  }
	}
}