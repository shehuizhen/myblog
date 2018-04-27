<?php
namespace Home\Controller;

use Think\Controller;

class NewEnterController extends Controller
{
    //展示个人中心
    public function index()
    {
        if (!session('user')) {
            $this->redirect('/Home/Login');
        } else {
            $user = session('user');
        }
        $this->assign('list', $user);
        $this->display();
    }
    //用户信息修改
    public function updata()
    {
        $id            = session('user')['id'];
        $user          = $_POST;
        $model         = D('Usertable');
        $file          = A('File');
        $data          = $model->create();
        $data['cover'] = "/Public/avatal/" . $file->avatal('cover');
        if (false != $user = $model->where('id=' . $id)->data($data)->save()) {
            //成功提示
            $this->success('修改信息成功', '/Home/articleIndex');
        } else {
            //失败提示
            $this->error('更新文章失败' . $model->getLastSql());
        }
    }
    //用户注销
    public function logout()
    {
        session('user', null);
        $this->redirect('/Home', 2);
    }
}
