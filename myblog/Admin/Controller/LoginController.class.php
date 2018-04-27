<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function dealLogin()
    {
        $passcode = I('post.passcode');
        $verify   = new \Think\Verify();
        $result   = $verify->check($passcode);
        if (!$result) {
            $this->error('验证码错误');
        }
        $model = D('User');
        if (flase == $data = $model->create()) {
            $this->error($model->getError());
        }
        $userinfo = $model->getUserInfo(['username' => $data['username']]);
        if (!$userinfo) {
            $this->error('用户名密码错误');
        }
        $userPassword = md5(md5($data['password']) . $userinfo['salt']);
        if ($userPassword = $userinfo['password']) {
            session('adminuser', $userinfo);
            $this->success('登陆成功', '/Admin');
        } else {
            $this->error('用户名或密码错误');
        }
    }
    public function dealLogout()
    {
        session('adminuser', null);
        $this->redirect('/Admin/Login');
    }
}
