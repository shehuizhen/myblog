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
	<style type="text/css">
		.bar1 input { 
		 	border: 2px solid #7BA7AB;
		  	border-radius: 5px;
		  	background: #F9F0DA; color: #9E9C9C;
		} 
		.bar1 button { 
			top: 0; right: 0; 
			background: #7BA7AB; 
			border-radius: 0 5px 5px 0; 
		} 
		.bar1 button:before { 
			content: "\f002"; 
			font-family: FontAwesome; 
			font-size: 16px; 
			color: #F9F0DA; 
		}
	</style>
	

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
					<li><a href="/Home/Article">文章列表</a></li>
					<li><a href="/Home/NewEnter">个人中心</a></li>
					<li class="search bar1"> 
						<form action="/Home/Article"  method="POST"> 
							<input name="list" type="text" placeholder="请输入您要搜索的内容..."> 
							<button type="submit"></button> 
						</form>
					 </li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>


    <main id="main">

    <div class="container">
        <div class="row topspace">
            <div class="col-sm-8 col-sm-offset-2">
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><article class="post">
                        <header class="entry-header">
                            <div class="entry-meta"> 
                                <span class="posted-on"><time class="entry-date published" date="2013-09-27"><?php echo (date("Y-m-d",$vo['created_at'])); ?></time></span>           
                            </div>
                            <h1 class="entry-title"><a href="/Home/articleOne/<?php echo ($vo['id']); ?>" rel="bookmark" style="font-size:25px;"><?php echo ($vo['title']); ?></a></h1>
                        </header>
                        <div class="entry-content">
                            <p><?php echo ($vo['desc']); ?></p>
                        </div>
                    </article><?php endforeach; endif; ?>
                
            </div> 
        </div>

        <center class="">
            <ul class="pagination">
              <?php echo ($page); ?>
            </ul>
        </center>
    

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