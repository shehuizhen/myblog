<?php
namespace Admin\Controller;

use Think\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $id             = I('get.id');
        $commentmodle   = D('Comment');
        $usertablemodle = D('Usertable');
        $comment        = $commentmodle->where('article_id=' . $id)->select();
        foreach ($comment as $key => $value) {
            $comment[$key]['name'] = $usertablemodle->where('id=' . $comment[$key]['user_id'])->getField('nickname');
        }
        $this->assign('list', $comment);
        $this->display();
    }
    public function add()
    {
        $id = I('get.id');
        $this->assign('list', $id);
        $this->display();

    }
    public function insert()
    {
        $model                 = D('Reply');
        $content               = $_POST;
        $content['boss_id']    = session('adminuser')['id'];
        $content['created_at'] = time();
        if ($model->data($content)->add()) {
            $this->success('回复成功', '/Admin/articlelist');
        } else {
            $this->error('回复失败');
        }
    }
}
