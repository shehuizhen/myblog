<?php
namespace Admin\Model;

use Admin\Model\TypeModel;
use Think\Model;

class ArticleModel extends Model
{
    protected $_auto = array(
        array('created_at', 'time', 1, 'function'), // 对update_time字段在插入的时候写入当前时间戳
        array('updated_at', 'time', 2, 'function'), // 对update_time字段在更新的时候写入当前时间戳
    );
    public function getArticleList($currentPage, $map = [])
    {
        $typeModel = new TypeModel;
        $list      = $this->where($map)->page($currentPage, 5)->order('id desc')->select();

        foreach ($list as $k => &$v) {
            $list[$k]['typename'] = $typeModel->getNameById($v['typeid']);
        }
        return $list;
    }
    //获取分页总数
    public function getTypeTotal($map = [])
    {
        return $this->where($map)->count();
    }
    //获取所有分类
    public function getAllType()
    {
        $list = $this->where(['is_delete' => 0])
            ->order('concat(path,"-",id) asc')
            ->select();
        foreach ($list as $k => &$v) {
            //计算下-的个数
            $countG    = substr_count($v['path'], '-') + 1;
            $v['name'] = str_repeat('&nbsp', ($countG - 1) * 4) . '|--' . $v['name'];
        }
        return $list;
    }
    public function getPidPath($pid)
    {
        return $this->where(['id' => $pid])->getField('path');
    }
}
