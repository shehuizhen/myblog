<?php
return array(
    //'配置项'=>'配置值'
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES' => array(
        'login'                 => 'Login/index', //展示登录页面
        'dealLogin'             => 'Login/dealLogin', //执行登录
        'logout'                => 'Login/dealLogout', //执行注销

        'typelist'              => 'Type/index', //显示类别列表
        'typeadd'               => 'Type/add', //展示添加页面
        'dealtypeadd'           => 'Type/insert', // 执行添加操作
        'typeedit/:id'          => 'Type/edit', //展示编辑页面//需要知道编辑的哪一类别
        'dealtypeedit'          => 'Type/update', //执行编辑操作update
        'dealtypedelete/:id'    => 'Type/delete', //删除单个类别
        'dealtypedeletes'       => 'Type/deletes', //批量删除类别
        'typerecovery/:id'      => 'Type/recovery', //恢复单个类别
        'typerecoverys'         => 'Type/recoverys', //批量恢复类别

        'articlelist'           => 'Article/index', //显示文章列表
        'articleadd'            => 'Article/add', //展示添加页面
        'dealarticleadd'        => 'Article/insert', //执行添加操作
        'articleedit/:id'       => 'Article/edit', //展示编辑页面//需要知道编辑的哪一文章
        'dealarticleedit'       => 'Article/update', //执行编辑操作update
        'dealarticledelete/:id' => 'Article/delete', //删除单个文章
        'dealarticledeletes'    => 'Article/deletes', //批量删除文章
        'articlerecovery/:id'   => 'Article/recovery', //恢复单个文章
        'articlerecoverys'      => 'Article/recoverys', //批量恢复文章
        'addeditorimg'          => 'File/uploadEditorImage', //编辑器单张图片上传

        'commentlist/:id'       => 'Comment/index', //展示评论页面
        'commentadd/:id'        => 'Comment/add', //展示回复页面
        'commentcleadd'         => 'Comment/insert', //执行回复操作
        'commentup/:id'         => 'Comment/update', //展示修改回复页面
    ),
);
