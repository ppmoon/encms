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
	//回收站模板显示（回收站列表）
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
	//添加音频控制器
	public function addBlog(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     0;// 设置附件上传大小
		$upload->exts      =     array('mp3');// 设置附件上传类型
		$upload->rootPath  =     './Public/'; // 设置附件上传根目录
		$upload->savePath  =     './mp3/'; // 设置附件上传（子）目录
		$upload->replace ='true';
		
		$info   =   $upload->upload();
							// 上传文件 
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			$data=array(
				'title'=>$_POST['title'],
				'content'=>$info['music']['savepath'].$info['music']['savename'],
				'time'=>time(),
				'cid'=>(int) $_POST['cid']
			);
			M('blog')->add($data);
			$this->success('保存成功','blog');
			//dump($info['music']['savepath'].$info['music']['savename']);
			//echo $info['file']['savepath'].$info['file']['savename'];
		}
		/*$data=array(
				'title'=>I('title'),
				'content'=>$upload->rootPath,
				'time'=>time(),
				'cid'=>(int) $_POST['cid']
		);
		if (M('blog')->add($data)) {
			$this->success('保存成功','blog');
		}else {
			$this->error('保存失败');
		}*/
		
	}
	//修改音频
	public function edit(){
		//获取分类列表
		$cate=M('cate')->order('sort ASC')->select();
		$this->cate=Category::unlimitedForLevel($cate);//一维数组递归
		//获取文章内容
		$id=$_GET['id'];
        $blog=M('blog')->where("id='".$id."'")->select();
		$musicurl=$blog[0]['content'];
		$musicname=$blog[0]['title'];
		$musicid=$blog[0]['id'];
		$this->assign('itemId',$musicid);
		$this->assign('itemList',$musicurl);
		$this->assign('itemName',$musicname);
        $this->display();
	}
	//保存修改
	public function doEdit(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     0;// 设置附件上传大小
		$upload->exts      =     array('mp3');// 设置附件上传类型
		$upload->rootPath  =     './Public/'; // 设置附件上传根目录
		$upload->savePath  =     './mp3/'; // 设置附件上传（子）目录
		$upload->replace ='true';
		
		$info   =   $upload->upload();
							// 上传文件 
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			$data=array(
				'id'=>(int) $_POST['id'],
				'title'=>$_POST['title'],
				'content'=>$info['music']['savepath'].$info['music']['savename'],
				'time'=>time(),
				'cid'=>(int) $_POST['cid']
			);
			M('blog')->save($data);
			$this->success('保存成功','blog');
			//dump($info['music']['savepath'].$info['music']['savename']);
			//echo $info['file']['savepath'].$info['file']['savename'];
		}
	}
}