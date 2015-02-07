<?php
/*登录控制器*/
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class LoginController extends Controller {
    public function index(){
		$this->display();
    }
    public function login(){
    		//防止直接访问
    		if( !IS_POST ) {
    			E('页面不存在！');
    		}
    		//检查验证码
    		$verify = I('param.verify','');
    		if(!check_verify($verify)){
                $this->error('验证码输入错误！');
            }
            
            $db=M('user');
            $user=$db->where(array('username'=>I('username')))->find();
            
            if(!$user || $user['password'] != I('password','','md5')){
            	$this->error('账号或密码错误');
            }
            //更新最后一次登录时间IP
            $data=array(
            	'id'=>$user['id'],
            	'logintime'=>time(),
            	'loginip'=>get_client_ip()
            );
            $db->save($data);
            //保存到session
            session('uid',$user['id']);
            session('username',$user['username']);
            session('logintime',date('Y-m-d H:i:s',$user['logintime']));
            session('loginip',$user['loginip']);
            
            $this->redirect('Admin/Index/index');
    }
    public function verify(){
        $verify = new \Think\Verify();
        $verify->entry(1);
    }
}