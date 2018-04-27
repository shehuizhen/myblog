<?php
namespace Home\Model;

use Think\Model;

class ArticleModel extends Model
{
    //获取所有文章信息
    public function ArticleAll()
    {
        return $this->where(['deleted_at' => 0])->select();
    }
    //查询最新的六条数据
    public function getArticleSix()
    {
        return $this->where(['deleted_at' => 0])->limit(6)->select();
    }
    //获取所有分类
    public function getAllType()
    {
        $list = $this->where(['is_delete' => 0])
            ->order('concat(path,"-",id) asc')
            ->select();
        return $list;
    }
    //获取单篇文章数据
    public function getArticleOne($id)
    {
        return $this->where(['id' => $id])->find();
    }
}
