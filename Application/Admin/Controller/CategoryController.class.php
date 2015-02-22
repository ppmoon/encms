<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\Category;
class CategoryController extends CommonController {
	//分类列表
	public function index(){
		$cate=M('cate')->order('sort ASC')->select();
//		$this->cate=Category::unlimitedForLayer($cate,cate);//多维数组递归
 		$this->cate=Category::unlimitedForLevel($cate);//一维数组递归
 		$this->display();
	}
	//添加分类视图
	public function addCate(){
		$this->pid=I('pid',0,'intval');
		$this->display();
	}
	//分类表单处理
	public function runAddCate(){
		if(M('cate')->add($_POST)){
			$this->success('添加成功',U('Admin/Category/index'));
		}else{
			$this->error('添加失败');
		}
	}
	//排序
	public  function sortCate(){
		$db=M('cate');
		foreach ($_POST as $id=>$sort){
			$db->where(array('id'=>$id))->setField('sort',$sort);//用setField字段更新
		}
		$this->redirect('Admin/Category/index');
	}
	//分类删除
	public function delCate(){
		$db=M('cate');
		$id=I('id',0,'intval');
		if($db->delete($id)){
			$this->success('分类删除成功',U('Admin/Category/index'));
		}else{
			$this->error('删除失败',U('Admin/Category/index'));
		}
	}
}