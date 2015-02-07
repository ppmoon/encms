<?php
namespace Admin\Model;
class Category{
	static public function unlimitedForLevel($cate,$html='--',$pid=0,$level=0){
		$arr=array();//定义一个空的数组
			foreach ($cate as $v){
				if ($v['pid']==$pid) {//判断父级ID和默认ID是否相等，相等就执行下面
					$v['level']=$level+1;//如果父级ID相等就添加一个层级
					$v['html']=str_repeat($html, $level);//添加层级数目的字符串
					$arr[]=$v;//将v数组全部保存到arr
					$arr=array_merge($arr,self::unlimitedForLevel($cate,$html,$v['id'],$level+1));
				}
			}
		return $arr;
	}
	//多维数组递归
	static public function unlimitedForLayer($cate,$name='child',$pid=0){
		$arr=array();
		foreach ($cate as $v){
			if ($v['pid']==$pid) {
				$v[$name]=self::unlimitedForLayer($cate,$name,$v['id']);
				$arr[]=$v;
			}
		}
		return $arr;
	}
	//导航链式无限极分类函数
	static  public function getParents($cate,$id){
		$arr=array();
		foreach ($cate as $v){
			if ($v['id'==$id]) {
				$arr[]=$v;
				$arr=array_merge($arr,self::getParents($cate, $v['pid']));
				$arr=array_merge(self::getParents($cate, $v['pid']),$arr);
				//传递一个子集分类返回所有父级分类
			}
		}
		return $arr;
		
	} 

	//传递一个父级ID返回所有子集分类ID
	static public function getChild($cate,$pid){
		$arr=array();
		foreach ($cate as $v){
			if($v['pid']==$pid){
				$arr[]=$v['id'];
				$arr=array_merge($arr,self::getChild($cate, $v['id'])); 
				
			}
		}
		return $arr;
	}
//传递一个父级分类返回所有子集
	static public function getChilds($cate,$pid){
		$arr=array();
		foreach ($cate as $v){
			if($v['pid']==$pid){
				$arr[]=$v;
				$arr=array_merge($arr,self::getChilds($cate, $v['id']));

			}
		}
		return $arr;
	}
}  