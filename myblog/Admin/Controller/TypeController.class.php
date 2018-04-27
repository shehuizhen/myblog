<?php
namespace Admin\Controller;

use Think\Controller;

class TypeController extends CommonController
{
    //列表展示
    public function index()
    {
        //获取当前页面
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        //创建对象
        $typeModel = D('Type');
        $map       = ['is_delete' => 0];
        if (I('get.isdelete') == 1) {
            $map = ['is_delete' => 1];
            $this->assign('isdelete', 1); //用于页面去判断显示哪一按钮，
        }
        $typelist = $typeModel->getTypeList($currentPage, $map);
        foreach ($typelist as $key => $value) {
            $typelist[$key]['pname'] = $typeModel->getNameById($value['pid']);
        }
        $total = $typeModel->getTypeTotal($map);
        $page  = page($total, $p = 1, $pnum = 4, $pagenum = 5, $currenUel = '/Admin/typelist?', $pagename = 'page');
        $this->assign('list', $typelist);
        $this->assign('page', $page);
        $this->display();
    }
    //数据插入页面
    public function add()
    {
        $typeModel = D('Type');
        $typeList  = $typeModel->getAllType();
        $this->assign('list', $typeList);
        $this->display();
    }
    //添加操作
    public function insert()
    {
        $Model = D('Type');
        if (false === $data = $Model->create()) {
            $this->error($Model->getError);
        }
        if ($data['pid'] == 0) {
            $data['pid'] = 0;
        } else {
            $pidPath      = $Model->getPidPath($data['pid']);
            $data['path'] = $pidPath . '-' . $data['pid'];
        }
        if ($result = $Model->data($data)->add()) {
            $this->success('新增类别成功', '/Admin/typelist');
        } else {
            $this->error('新增类别失败', $Model->getlastSql());
        }
    }
    //展示编辑页面
    public function edit()
    {
        $model       = D('Type');
        $currentType = $model->find(I('get.id'));
        //取所有的类别数据，发送到模板上。
        $typelist = $model->getAllType();
        $this->assign('list', $typelist);
        $this->assign('content', $currentType);
        $this->display();
    }
    //执行编辑操作
    public function update()
    {
        $Model = D('Type');
        if (false === $data = $Model->create()) {
            $this->error($Model->getError);
        }
        if ($data['pid'] == 0) {
            $data['pid'] = 0;
        } else {
            $pidPath      = $Model->getPidPath($data['pid']);
            $data['path'] = $pidPath . '-' . $data['pid'];
        }
        if (false != $Model->data($data)->save()) {
            //成功提示
            $this->success('更新类别成功', '/Admin/typelist');
        } else {
            echo $Model->getLastSql();die;
            //失败提示
            $this->error('更新类别失败' . $Model->getLastSql());
        }
    }
    //执行删除操作
    public function delete()
    {
        $model = D('Type');
        $id    = I('get.id');
        if (false !== $model->where(['id' => $id])->setField('is_delete', 1)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    //批量删除操作
    public function deletes()
    {
        $model     = D('Type');
        $id        = I('post.id');
        $map['id'] = array('in', $id);
        if (false !== $model->where($map)->setField('is_delete', 1)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    //回收站恢复操作
    public function recovery()
    {
        $model = D('Type');
        $id    = I('get.id');
        if (false != $model->where(['id' => $id])->setField('is_delete', 0)) {
            $this->success('恢复成功');
        } else {
            $this->error('恢复失败');
        }
    }
    //回收站批量恢复
    public function recoverys()
    {
        $model     = D('Type');
        $id        = I('post.id');
        $map['id'] = array('in', $id);
        if (false !== $model->where($map)->setField('is_delete', 0)) {
            $this->success('恢复成功');
        } else {
            $this->error('恢复失败');
        }
    }
}
