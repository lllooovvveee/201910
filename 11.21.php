<html>
<meta charset="utf-8">
<head>
	<title>11-18</title>
	<link rel="stylesheet" type="text/css"
	href="css/reset.css">
	<style type="text/css">
		body{
			background: url(bd-bg.png) repeat-x;		
		}
		.nav{
			float: right;
			margin-top: 15px;
		}
		.nav li{
			float: left;
			padding: 0 10px 8px;
			border-left: 1px #d6d6d6 dotted;
		}
		.nav a{
			font:bold 14px Georgia;
			color: #666;
			text-decoration: none;
		}
		.nav p{
			color: #b7b7b7;
			font:11px tahome;
		}	
		}
		.header{
			width: 940px;
			margin: 0 auto;
			padding-top:37px;/*上内边距*/
			padding-bottom:46px;/*下内边距*/
		}
		.logo{
			margin-left: 15px;
		}
		.nav a:hover{
			color: #00ffff;
		}
		.banner{
			height: 355px;
			width: 940px;
			margin: 0 auto;
			background: url(too.png) no-repeat bottom center;;
		}
		.pointerDiv{
			position: absolute;
			top:425px;
			left: 300px;
		}
		.pointerDiv a{
			display: block;
			float: left;
			margin-left: 4px;
			width: 17px;
			height: 17px;
			background: url(tot.png) no-repeat;
		}
		.pointerDiv .active,
		.pointerDiv a:hover{
			background: url(top.png) no-repeat;
		}
		.content{
			width: 940px;
			margin: 0 auto;
		}
		.content h1{
			text-align: center;
			font: bold 24px Georgia;
			padding: 6px 0 20px 0;
			margin-bottom: 38px;
			background: url() no-repeat bottom center;
		}
		.content .pl,.content .cs,.content .uc{
			float: left;
			width: 300px;
		}
		.content .cs{
			margin: 0 20px;
		}
		.content h2{
			color: #11719e;
			font:21px Georgia;
		}
		.content .p1{
			color: #949494;
			font: 12px Helvetica;
		}
		.content .imgDiv{
			width: 300px;
			height: 190px;
			margin: 16px 0px 10px 0px;
			padding-top: 12px; 
		}
		.content .p2{
			height: 92px;
			color: #3e3e3e;
			font:13px Helvetica;
			word-spacing: 2px; 
		}
		.content .lm{
			display: block;
			width: 163px;
			height: 40px;
			text-decoration: none;
			color: yellow;
			font: 12px Helvetica;
			line-height: 40px;
			text-indent: 1em;
			margin-bottom: 35px;
			background: url() none-repeat;
		}
	</style>
</head>
<body>
	<div>
		<div class="header">
			
			<ul class="nav">
				<li>
					<a href="#">HOME</a>
					<p>back to home</p>
				</li>
				<li>
					<a href="#">HOME</a>
					<p>back to home</p>
				</li>
				<li>
					<a href="#">HOME</a>
					<p>back to home</p>
				</li>
				<li>
					<a href="#">HOME</a>
					<p>back to home</p>
				</li>
				<li>
					<a href="#">HOME</a>
					<p>back to home</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="logo">
				<a href="#" title="这是logo">
					<img src="logo.png" alt="网站logo">
				</a>
			</div>
	</div>
	<div class="banner">
	<img src="Layer 5.png" alt="这是轮播图">
	<div class="pointerDiv">
	<a href="#"></a>
	<a class="active" href="#"></a>
	<a href="#"></a>
	<a href="#"></a>
	<a href="#"></a>
	</div>	
	</div>
	<div class="content">
	<hi>Lorem ipsum dolor sit amet, consectetur adipisicing elit</hi>
	<div class="pl">
		<h2>Perfect Logic</h2>
		<p class="pl">All you want your website to do.</p>
		<div class="imgDiv">
			<img src="pic1.jpg" alt="小女孩">
		</div>
		<p class="p2">
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		</p>
		<a class="lm" href="#">Learn more</a>
	</div>
		<div class="cs">
		<h2>Perfect Logic</h2>
		<p class="pl">All you want your website to do.</p>
		<div class="imgDiv">
			<img src="pic2.jpg" alt="小女孩">
		</div>
		<p class="p2">
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		</p>
		<a class="lm" href="#">Learn more</a>
	</div>
		<div class="uc">
		<h2>Perfect Logic</h2>
		<p class="pl">All you want your website to do.</p>
		<div class="imgDiv">
			<img src="pic3.jpg" alt="小女孩">
		</div>
		<p class="p2">
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		</p>
		<a class="lm" href="#">Learn more</a>
	</div>
	</div>
</body>
</html>
