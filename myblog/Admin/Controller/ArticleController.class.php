<?php
namespace Admin\Controller;

use Think\Controller;

class ArticleController extends CommonController
{
    //列表展示
    public function index()
    {
        //获取当前页面
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        //创建对象
        $TypeModel    = D('Type');
        $ArticleModel = D('Article');
        $map          = ['deleted_at' => 0];
        if (I('get.deleted_at') == 1) {
            $map = ['deleted_at' => 1];
            $this->assign('deleted_at', 1); //用于页面去判断显示哪一按钮，
        }
        $Articlelist = $ArticleModel->getArticleList($currentPage, $map);
        foreach ($Articlelist as $key => $value) {
            $Articlelist[$key]['pname'] = $TypeModel->getNameById($value['typeid']);
        }
        $total = $ArticleModel->getTypeTotal($map);
        $page  = page($total, $p = 1, $pnum = 4, $pagenum = 5, $currenUel = '/Admin/Articlelist?', $pagename = 'page');
        $this->assign('list', $Articlelist);
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
        $Model = D('Article');
        if (false === $data = $Model->create()) {
            $this->error($Model->getError);
        }
        $file          = A('File');
        $savePath      = $file->uploadOneImage('cover');
        $data['cover'] = '/Public/uploads/' . $savePath;
        if ($result = $Model->data($data)->add()) {
            $this->success('新增文章成功', '/Admin/articlelist');
        } else {
            $this->error('新增文章失败', $Model->getlastSql());
        }
    }
    //展示编辑页面
    public function edit()
    {
        $typemodel   = D('Type');
        $model       = D('Article');
        $currentType = $model->find(I('get.id'));
        //取所有的类别数据，发送到模板上。
        $typelist = $typemodel->getAllType();
        $this->assign('list', $typelist);
        $this->assign('content', $currentType);
        $this->display();
    }
    //执行编辑操作
    public function update()
    {
        $Model = D('Article');
        if (false === $data = $Model->create()) {
            $this->error($Model->getError);
        }
        if (false != $Model->data($data)->save()) {
            //成功提示
            $this->success('更新文章成功', '/Admin/articlelist');
        } else {
            //失败提示
            $this->error('更新文章失败' . $Model->getLastSql());
        }
    }
    //执行删除操作
    public function delete()
    {
        $model = D('Article');
        $id    = I('get.id');
        if (false !== $model->where(['id' => $id])->setField('deleted_at', 1)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    //批量删除操作
    public function deletes()
    {
        $model     = D('Article');
        $id        = I('post.id');
        $map['id'] = array('in', $id);
        if (false !== $model->where($map)->setField('deleted_at', 1)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    //回收站恢复操作
    public function recovery()
    {
        $model = D('Article');
        $id    = I('get.id');
        if (false != $model->where(['id' => $id])->setField('deleted_at', 0)) {
            $this->success('恢复成功');
        } else {
            $this->error('恢复失败');
        }
    }
    //回收站批量恢复
    public function recoverys()
    {
        $model     = D('Article');
        $id        = I('post.id');
        $map['id'] = array('in', $id);
        if (false !== $model->where($map)->setField('deleted_at', 0)) {
            $this->success('恢复成功');
        } else {
            $this->error('恢复失败');
        }
    }
}
