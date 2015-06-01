<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//首页获取分类列表
    public function index(){
		$this->cate=M('cate')->order('sort')->select();
    	$this->display();
    }
	//通过分类ID获取文章列表
	public function info(){
		$id=$_GET['id'];
		$db=M('cate')->where("id='".$id."'")->select();
		$cname=$db[0]['name'];
		$this->assign('cname',$cname);
        $this->blog=M('blog')->where("cid='".$id."'&&del=0")->select();
        $this->display();
	}
	//通过文章列表获取文章内容
	public function music(){
		$id=$_GET['id'];
        $blog=M('blog')->where("id='".$id."'")->select();
		$musicurl=$blog[0]['content'];
		$musicname=$blog[0]['title'];
		$this->assign('itemList',$musicurl);
		$this->assign('itemName',$musicname);
        $this->display();
	}
}