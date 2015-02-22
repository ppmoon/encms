<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\Category;
use Admin\Model\BlogRelationModel;

class BlogController extends CommonController {
	//博文列表
	public function index(){
		$this->blog=D('BlogRelation')->getBlogs();
		$this->display();
	}
	//删除到回收站
	public function toTrach(){
		$update=array(
				'id'=>(int) $_GET['id'],
				'del'=>1 
		);
		if (M('blog')->save($update)) {
			$this->success('删除到回收站',U('Admin/Blog/index'));
		}else{
			$this->error('删除失败');
		}
	}
	//回收站恢复文章
	public function reTrach(){
		$update=array(
				'id'=>(int) $_GET['id'],
				'del'=>0 
		);
		if (M('blog')->save($update)) {
			$this->success('恢复文章到文章列表',U('Admin/Blog/trach'));
		}else{
			$this->error('恢复失败');
		}
	}
	//回收站彻底删除
	public function delTrach(){
		$db=M('blog');
		$id=I('id',0,'intval');
		if($db->delete($id)){
			$this->success('文章彻底删除成功',U('Admin/Blog/trach'));
		}else{
			$this->error('文章彻底删除失败',U('Admin/Blog/trach'));
		}
	}
	//回收站模板显示
	public function trach(){
		$this->blog=D('BlogRelation')->getBlogs(1);
		$this->display();  
	}
	//添加博文页面
	public function blog(){
		$cate=M('cate')->order('sort ASC')->select();
		$this->cate=Category::unlimitedForLevel($cate);//一维数组递归
		$this->display();
	}
	//添加博文控制器
	public function addBlog(){
		$data=array(
				'title'=>I('title'),
				'content'=>I('content'),
				'time'=>time(),
				'cid'=>(int) $_POST['cid']
		);
		if (M('blog')->add($data)) {
			$this->success('保存成功','blog');
		}else {
			$this->error('保存失败');
		}
		
	}
}