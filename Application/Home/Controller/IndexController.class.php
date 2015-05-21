<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->cate=M('cate')->order('sort')->select();
    	$this->display();
    }
	public function info(){
		$id=$_GET['id'];
        $blog=M('blog')->where("cid='".$id."'")->select();
		dump($blog);
        $this->display();
	}
}