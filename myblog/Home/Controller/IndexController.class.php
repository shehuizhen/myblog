<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    //主页面展示
    public function index()
    {
        $typeModel    = D('Type');
        $articleModel = D('Article');
        $typelist     = $typeModel->getAllType();
        $articlenine  = $articleModel->getArticleSix();
        $this->assign('list', $typelist);
        $this->assign('nine', $articlenine);
        $this->display();
    }
    //单篇文章展示
    public function articleOne()
    {
        $id             = I('get.id');
        $articleModel   = D('Article');
        $commentModel   = D('Comment');
        $usertableModel = D('Usertable');
        $replyModel     = D('Reply');
        $UserModel      = D('User');
        $articleOne     = $articleModel->getArticleOne($id);
        //获取文章信息
        $articleModel->where('id=' . $id)->setInc('hits');
        //获取文章评论信息
        $usercomment = $commentModel->where('article_id=' . $id)->select();
        //获取用户信息
        foreach ($usercomment as $key => $value) {
            $usercomment[$key]['cover']    = $usertableModel->where('id=' . $usercomment[$key]['user_id'])->getField('cover');
            $usercomment[$key]['nickname'] = $usertableModel->where('id=' . $usercomment[$key]['user_id'])->getField('nickname');
            //判断是否有回复并获取回复内容
            if ($reply = $replyModel->where('comment_id=' . $usercomment[$key]['id'])->find()) {
                $usercomment[$key]['reply']          = $reply;
                $usercomment[$key]['reply']['cover'] = $UserModel->where('id=' . $usercomment[$key]['reply']['boss_id'])->getField('avatar');
                $usercomment[$key]['reply']['name']  = $UserModel->where('id=' . $usercomment[$key]['reply']['boss_id'])->getField('username');
            }
        }
        $this->assign('comment', $usercomment);
        $this->assign('list', $articleOne);
        $this->display();
    }
}
