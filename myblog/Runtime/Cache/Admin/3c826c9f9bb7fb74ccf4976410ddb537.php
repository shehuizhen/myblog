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
  <div class="tab">
    <div class="tab-head"> <strong>分类管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加分类</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="/Admin/dealtypeedit">
          <div class="form-group">
            <div class="label">
              <label for="sitename">分类名称</label>
            </div>
            <input type="hidden" name="id" value="<?php echo ($content['id']); ?>">
            <div class="field">
              <input type="text" class="input" id="name" name="name" size="50" placeholder="分类名称" value="<?php echo ($content['name']); ?>" data-validate="required:请填写您的分类名称" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="sitename">所属类别</label>
            </div>
            <div class="field">
              <select class="select">
                  <option value="0">主类别</option>
                  <?php if(is_array($list)): foreach($list as $key=>$vo): if(($content['pid']) == $vo['id']): ?><option value="<?php echo ($vo['id']); ?>" selected="selected"><?php echo ($vo['name']); ?></option> 
                    <?php else: ?>
                        <option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endif; endforeach; endif; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">分类描述</label>
            </div>
            <div class="field">
              <textarea class="input" rows="5" cols="50" name="desc" placeholder="请填写分类描述" data-validate="required:请填写分类描述"><?php echo ($content['desc']); ?></textarea>
            </div>
          </div>
          <div class="form-button">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div style='height:20px; border-bottom:1px #DDD solid'></div>
  <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>


</div>
</body>
</html>