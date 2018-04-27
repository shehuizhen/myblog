<?php
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        if (!session('adminuser')) {
            $this->redirect('/Admin/Login');
        } else {
            $this->assign('adminuser', session('adminuser'));
        }
    }
}
