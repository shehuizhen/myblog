<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Bro Zhen</title>

	<link rel="shortcut icon" href="/Public/Home/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="/Public/Home/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="/Public/Home/images/guy.jpg" alt="">
			<span class="title">Start Sailing</span>
			<span class="tagline">A hunk who does not want to be named<br>
				But he has a low, sexy voice</span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">切换导航栏</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="/Home/articleIndex">首页</a></li>
					<li><a href="/Home/Category">文章分类</a></li>
					<li><a href="/Home/Article">文章列表</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

    <div class="container">

        <div class="row topspace">
            
            <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">

                <ul class="nav text-right nav-side">
                    <li class="active"><a href="#ui">UI design</a></li>
                    <li><a href="#frontend">Frontend development</a></li>
                    <li><a href="#backend">Backend development</a></li>
                    <li><a href="#projects">Side projects</a></li>
                </ul>

            </aside>
            <!-- /Sidebar -->

            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
                <p><img src="/Public/Home/images/mac.jpg" alt="" class="" width="100%" ></p>
                <h3>Necessitatibus</h3>
                <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                <h3>Fugit, laboriosam</h3>
                <p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
            </article>
            <!-- /Article -->
            

        </div>
    </div>  <!-- /container -->
    
</main>

<div class="container">
	<div class="row section clients topspace">
		<h2 class="section-title"><span>In the end</span></h2>
	</div> <!-- /section -->
</div>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">联系方式</h3>
				<div class="widget-body">
					<p>电话：13716581104<br>
						<a href="mailto:#">邮箱：987185615@qq.com</a><br>
						<br>
						北京-密云
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">我有强迫症</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<i class="fa fa-twitter fa-2"></i>>
						<i class="fa fa-dribbble fa-2"></i>
						<i class="fa fa-github fa-2"></i>
						<i class="fa fa-facebook fa-2">	</i>
					</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">我还有话要说！</h3>
				<div class="widget-body">
					<p>渣渣php程序员一只，本博客是基于thinkphp框架，wamp环境下开发的，新手作品，多多指教</p>
					<p>顺带求职，坐标——北京</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">联系方式</h3>
				<div class="widget-body">
					<p>电话：13716581104<br>
						<a href="mailto:#">邮箱：987185615@qq.com</a><br>
						<br>
						北京-密云
					</p>	
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>




<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="/Public/Home/js/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="/Public/Home/js/template.js"></script>
</body>
</html>