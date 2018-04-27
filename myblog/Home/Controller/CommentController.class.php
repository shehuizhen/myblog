<?php
namespace Home\Controller;

use Think\Controller;

class CommentController extends Controller
{
    //发表评论
    public function CommentAdd()
    {
        $data = [];
        //评论时判断是否登录
        if (!session('user')) {
            $this->redirect('/Home/Login');
        } else {
            $data               = $_POST;
            $data['user_id']    = session('user')['id'];
            $data['created_at'] = time();
        }
        if (empty($data['content'])) {
            $this->error('请输入评论内容');
        }
        $CommentModel = D('Comment');
        if ($CommentModel->data($data)->add()) {
            $this->success('评论成功', "/Home/articleOne/" . $data['article_id']);
        } else {
            $this->error('未知错误，评论失败');
        }
    }
}
