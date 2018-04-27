<?php
return array(
    //'配置项'=>'配置值'
    'MODULE_ALLOW_LIST' => array('Home', 'Admin', 'User'),
    'DEFAULT_MODULE'    => 'Home', // 默认模块
    'URL_MODEL'         => '2', //url模式 rewrite模式
    "SHOW_PAGE_TRACE"   => true,
    'DB_TYPE'           => 'mysql', // 数据库类型
    'DB_HOST'           => '127.0.0.1', // 服务器地址
    'DB_NAME'           => 'myblog', // 数据库名
    'DB_USER'           => 'root', // 用户名
    'DB_PWD'            => 1, // 密码
    'DB_PORT'           => 3306, // 端口
    'DB_PREFIX'         => 'blog_', // 数据库表前缀
    'DB_CHARSET'        => 'utf8', // 字符集
    'DB_DEBUG'          => true, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
);
