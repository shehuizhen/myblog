<?php
namespace Home\Model;

use Think\Model;

class TypeModel extends Model
{

    public function getTypelist($currentPage, $map = [])
    {
        $list = $this->where($map)->page($currentPage, 5)
            ->order('concat(path,"-",id) asc')
            ->select();
        return $list;
    }
    //根据id获取name
    public function getNameById($id)
    {
        return $this->where(['id' => $id])->getField('name');
    }
    //获取所有主分类
    public function getAllType()
    {
        $list = $this->where(['path' => '0'])
            ->select();
        return $list;
    }
    public function getPidPath($pid)
    {
        return $this->where(['id' => $pid])->getField('path');
    }
}
