<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>个人中心</title>
    <link rel="stylesheet" href="/Public/Home/css/new_entee.css">
    <link rel="stylesheet" href="/Public/Home/css/new_enter.css">
</head>
<body>
    <!-- 内容 -->
    <div class="container">
        <div class="warp_1180 wpn cl">
            <!--左侧菜单-->
            
            <!-- 右侧内容 账户安全-->
            <div class="main more z">
                <div class="main_warp">
                    <div class="title cl">
                        <div class="h1 z" data-target="#modal-setphone">个人信息</div>
                        <div class="h3 z mln" data-target="#modal-changepwd">
                            － 修改信息后从新登陆即可生效
                        </div>
                    </div>
                        <a href="/Home/logout">
                            <button class="btn post_btn">注销当前用户</button>
                        </a>
                    <form action="/Home/updata" enctype="multipart/form-data" method="POST">
                        <div class="account_warp ptv">
                            <div class="cont mtv cl">
                                <em class="h2 lin54 z">昵称：</em>
                                <span class="z">
                                    <input class="nav_in" type="text" name="nickname" value="<?php echo ($list['nickname']); ?>" placeholder="">
                                </span>
                            </div>
                            <div class="cont mtv cl" >
                                <em class="h2 lin54 z">修改密码：</em>
                                <span class="z">
                                    <input   class="nav_in" type="password" name="password" value="" placeholder="请输入密码" id="one">
                                </span>
                            </div>
                          <div class="cont mtv cl" >
                                <em class="h2 lin54 z">确认密码：</em>
                                <span class="z">
                                    <input   class="nav_in" type="password" name="repassword" value="" placeholder="请再次输密码" onblur="verification();" id="two">
                                </span>
                            </div>
                            <div class="cont mtv cl">
                                <em class="h2 z">上传头像：</em>
                                <div class="up_img pos z">
                                    <input type="file" accept=".jpg,.gif,.png" name="cover" style="font-size:80px;" multiple="multiple" class="upload-icon-file" title="上传" onchange="previewaaa(this);">
                                    <div class="icon-add-round" id="preview" >
                                        <img src="<?php echo ($list['cover']); ?>" style="height:210px;">
                                    </img>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="post ptv_">
                            <input type="submit" class="btn post_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
        function previewaaa(file) {
            var prevDiv = document.getElementById('preview');
            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(evt) {
                    prevDiv.innerHTML = '<img style="width:150px;height:150px;" src="' + evt.target.result + '" />';
                }
                reader.readAsDataURL(file.files[0]);
            } else {
                prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
            }
        }
        function verification(){
            var password = document.getElementById('one').value;
            var passwordtwo = document.getElementById('two').value;
            if(passwordtwo!==password){
                alert("两次输入密码不一致");
            }
        }
</script>

</html>