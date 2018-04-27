<?php
return array(
    //'配置项'=>'配置值'
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES' => array(
        'Code'           => 'Code/showCode', //验证码输出
        'articleIndex'   => 'Index/index', //展示博客首页
        'articleOne/:id' => 'Index/articleOne', //单篇文章展示
        'Login'          => 'Login/index', //登录页面
        'userLogin'      => 'Login/login', //进行登录
        'LoginAdd'       => 'Login/add', //注册页面
        'useradd'        => 'Login/useradd', //进行注册
        'CommentAdd'     => 'Comment/CommentAdd', //用户评论操作

        'Article'        => 'Article/index', //文章展示
        'NewEnter'       => 'NewEnter/index', //展示个人中心
        'updata'         => 'NewEnter/updata', //进行更新用户信息操作
        'logout'         => 'NewEnter/logout', //用户注销操作
    ),
);
