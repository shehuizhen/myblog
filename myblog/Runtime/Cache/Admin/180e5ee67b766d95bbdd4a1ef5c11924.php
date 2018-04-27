<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>个人博客后台管理系统</title>
    <link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/Public/css/page.css">
    <script src="/Public/Admin/js/jquery.js"></script>
    <script src="/Public/Admin/js/pintuer.js"></script>
    <script src="/Public/Admin/js/respond.js"></script>
    <script src="/Public/Admin/js/admin.js"></script>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="/Public/Admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="/" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="/Admin/logout">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li class="active"><a href="index.html" class="icon-home"> 开始</a>
                    <ul>
    
    <li <?php if((CONTROLLER_NAME) == "Type"): ?>class="active"<?php endif; ?>
        >
        <a href="/Admin/typelist">分类管理</a>
    </li>
    <li 
        <?php if((CONTROLLER_NAME) == "Article"): ?>class="active"<?php endif; ?>
        ><a href="/Admin/articlelist">文章管理</a>
    </li>
</ul>

                </li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo ($adminuser['username']); ?>，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
    <?php if(empty($deleted_at)): ?><form method="post" action="/Admin/dealarticledeletes">
    <?php else: ?> 
        <form method="post" action="/Admin/articlerecoverys"><?php endif; ?>
    <div class="panel admin-panel">
        <div class="panel-head"><strong>文章列表</strong></div>
        <div class="padding border-bottom">
            <a href="/Admin/articleadd">
                <input type="button" id="btnAdd" class="button button-small border-green" value="添加文章" />
            </a>
            <?php if(empty($deleted_at)): ?><input type="submit" class="button button-small border-yellow" value="批量删除" />
            <?php else: ?> 
                <input type="submit" class="button button-small border-yellow" value="恢复删除" /><?php endif; ?>
            <a href="/Admin/articlelist/deleted_at/1">
                <input type="button" class="button button-small border-blue" value="回收站" />
            </a>
        </div>
        <table class="table table-hover">
            <tr>
                <th width="45">选择</th>
                <th width="120">所属类别</th>
                <th width="200">文章标题</th>
                <th width="120">点击率</th>
                <th width="180">发布时间</th>
                <th width="100">操作</th>
            </tr>
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo ($vo['id']); ?>" /></td>
                    <td><?php echo ($vo['pname']); ?></td>
                    <td><?php echo ($vo['title']); ?></td>
                    <td><?php echo ($vo['hits']); ?></td>
                    <td><?php echo (date("Y-m-d",$vo['created_at'])); ?></td>
                    <td>
                        <?php if(empty($deleted_at)): ?><a class="button border-blue button-little" href="/Admin/commentlist/<?php echo ($vo['id']); ?>">查看评论</a> 
                            <a class="button border-blue button-little" href="/Admin/articleedit/<?php echo ($vo['id']); ?>">修改</a> 
                            <a class="button border-yellow button-little" href="/Admin/dealarticledelete/<?php echo ($vo['id']); ?>" >删除</a>
                        <?php else: ?> 
                             <a class="button border-yellow button-little" href="/Admin/articlerecovery/<?php echo ($vo['id']); ?>" onclick="">恢复</a><?php endif; ?>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
        <div class="pu_page mtm" >
            <?php echo ($page); ?>
        </div>
    </div>
    </form>
    <br />
    <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html>


</div>
</body>
</html>