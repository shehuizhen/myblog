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
	<div class="line-big">
    	<div class="xm3">
        	<div class="panel border-back">
            	<div class="panel-body text-center">
                	<img src="/Public/Admin/images/face.jpg" width="120" class="radius-circle" /><br />
                    admin
                </div>
                <div class="panel-foot bg-back border-back">您好，<?php echo ($adminuser['username']); ?>，欢迎您的光临。</div>
            </div>
            <br />
        	<div class="panel">
            	<div class="panel-head"><strong>站点统计</strong></div>
                <ul class="list-group">
                	<li><span class="float-right badge bg-red">88</span><span class="icon-user"></span> 会员</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-file"></span> 文章</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-shopping-cart"></span> 订单</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-database"></span> 数据库</li>
                </ul>
            </div>
            <br />
        </div>
        <div class="xm9">
            <div class="alert">
                <div class="alert alert-yellow"><span class="close"></span><strong>提示：</strong>欢迎使用ICFrame框架！</div>
                <h4>基于ICFrame框架的blog介绍</h4>
                <p class="text-gray padding-top">该播客系统基于ICFrame框架，高效、简洁……</p>
            	<a target="_blank" class="button bg-dot icon-code" href="#"> 下载示例代码</a> 
            	<a target="_blank" class="button bg-main icon-download" href="#"> 下载ICFrame框架</a> 
            	<a target="_blank" class="button border-main icon-file" href="#"> ICFrame框架使用教程</a>
            </div>
            <div class="panel">
            	<div class="panel-head"><strong>系统信息</strong></div>
                <table class="table">
                	<tr><th colspan="2">服务器信息</th><th colspan="2">系统信息</th></tr>
                    <tr><td width="110" align="right">操作系统：</td><td>Windows 2008</td><td width="90" align="right">系统开发：</td><td><a href="#" target="_blank">ICFrame框架</a></td></tr>
                    <tr><td align="right">Web服务器：</td><td>Apache/2 PHP/5</td><td align="right">主页：</td><td><a href="#" target="_blank">www.myblog.com</a></td></tr>
                    <tr><td align="right">服务器IP：</td><td>127.0.0.1</td><td align="right">演示：</td><td><a href="#" target="_blank">http://www.blog.com</a></td></tr>
                    <tr><td align="right">数据库：</td><td>MySQL</td><td align="right">QQ：</td><td><a href="#" target="_blank">987185615</a></td></tr>
                </table>
            </div>
        </div>
    </div>
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建  </p>


</div>
</body>
</html>