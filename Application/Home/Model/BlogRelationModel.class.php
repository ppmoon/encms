<?php
namespace Home\Model;
use Think\Model\RelationModel;

class BlogRelationModel extends RelationModel{
	
	Protected $tableName='blog';
	
	Protected $_link=array(
			
			'cate'=>array(
				'mapping_type'=> self::BELONGS_TO,
				'foreign_key'   => 'cid',
				'mapping_fields'=>'name',
				'as_fields'=>'name:cate'
			)
	);
	
	public function getBlogs ($type=0){
		$field =array('del');
		$where =array('del'=>$type);
		return $this->field($field,true)->where($where)->relation(true)->select();
	}//联合查询弹出模型
}