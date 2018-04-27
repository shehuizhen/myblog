<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{
    //驱动模板展示
    public function index()
    {
        $this->display();
    }
    //执行登录操作
    public function Login()
    {
        $passcode = I('post.passcode');
        $verify   = new \Think\Verify();
        $result   = $verify->check($passcode);

        $model = D('Usertable');
        if (flase == $data = $model->create()) {
            $this->error($model->getError());
        }
        $userinfo = $model->getUserInfo(['username' => $data['username']]);
        if (!$userinfo) {
            $this->error('用户名密码错误');
        }
        $userPassword = md5($data['password']);
        if ($userPassword = $userinfo['password']) {
            session('user', $userinfo);
            $this->success('登陆成功', '/Home');
        } else {
            $this->error('用户名或密码错误');
        }
    }
    //用户注册页面
    public function add()
    {
        $this->display();
    }
    //用户注册操作
    public function useradd()
    {
        $passcode = I('post.passcode');
        $verify   = new \Think\Verify();
        $result   = $verify->check($passcode);
        $model    = D('Usertable');
        $model->create();
        if ($model->add()) {
            $this->success('注册成功', '/Home/Login');
        } else {
            $this->error('未知错误，注册失败');
        }
    }
}
