<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<title>GFashion - Responsive e-commerce HTML Template</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Favorite Icons -->
	<link rel="icon" href="<?php echo base_url()?>img/favicon/favicon.html" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>img/favicon/apple-touch-icon-144x144-precomposed.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>img/favicon/apple-touch-icon-72x72-precomposed.html">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>img/favicon/apple-touch-icon-precomposed.html">
	<!-- // Favorite Icons -->
	
	<link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	
	<!-- GENERAL CSS FILES -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/minified.css">
	<!-- // GENERAL CSS FILES -->
	
	<!--[if IE 8]>
		<script src="<?php echo base_url()?>js/respond.min.js"></script>
		<script src="<?php echo base_url()?>js/selectivizr-min.js"></script>
	<![endif]-->
	<!--
	<script src="js/jquery.min.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="<?php echo base_url()?>js/jquery.min.js"><\/script>');</script>
	<script src="<?php echo base_url()?>js/modernizr.min.js"></script>
	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/innerpage.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/owl.theme.css">
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/responsive.css">
</head>
<body>
			
	<!-- PAGE WRAPPER -->
<div id="page-wrapper">

	<!-- SITE HEADER -->
	<?php $this->load->view('header')?>
	<!-- // SITE HEADER -->
	
		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="<?php echo site_url('IndexController')?>">首页</a></li>
						<li class="active">个人中心</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
	<main id="main-content" role="main">
		<div class="container">
			<div class="row">

				<!-- SIDEBAR -->
				<aside class="col-xs-12 col-sm-4 col-md-3">
					<section class="sidebar m-t-b">
						<section class="side-section">
							<h3 class="uppercase text-bold"><span class="text-xs">欢迎来到个人中心页!</span></h3>

							<ul class="nav nav-tabs nav-stacked">
								<li><a href="<?php echo site_url('IndexController')?>">首页</a></li>
								<li><a href="<?php echo site_url('ProductsController')?>"">女装</a></li>
								<li><a href="<?php echo site_url('ProductsController')?>"">男装</a></li>
								<li><a href="<?php echo site_url('StorelocatorController')?>"">商店位置</a></li>
								<li><a href="<?php echo site_url('ContactusController')?>"">个人中心</a></li>
								<li><a href="<?php echo site_url('LoginController')?>"">登录/注册</a></li>
							</ul>
						</section>

						<!-- PROMO -->
						<?php
							$usermsgUrl = base_url();
							foreach($usermsg as $usermsgitem =>$usermsgValue){
								$lastImgs = $usermsgUrl .'/upload/image/20171117/'.$usermsgValue['userImg'];
						?>
						<div class="promo inverse-background" style="background: url('<?php echo $lastImgs?>') no-repeat; background-size: auto 100%;">
							<div class="inner text-center np">
								<div class="ribbon">
									<h6 class="nmb">用户名：<?php echo $usermsgValue['login_name']?></h6>
									<h5 class="text-semibold uppercase nmb">商城名：流连忘返商城</h5>
									<div class="space10"></div>
									<a href="<?php echo site_url('ProductsController')?>" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span>购物Let's go!</span></a>
								</div>
							</div>
						</div>
						<!-- // PROMO -->
						<?php
							}
						?>
					</section>
				</aside>
				<!-- // SIDEBAR -->

				<section class="col-xs-12 col-sm-8 col-md-9">
					<section class="section">
						<div class="m-t-lg clearfix">
							<div class="row">
								显示购买的产品
							</div>
						</div>

					</section>
				</section>

			</div>
		</div>
	</main>
		<!-- // SITE MAIN CONTENT -->
		
		<!-- SITE FOOTER -->
	<?php $this->load->view('footer')?>
	<!-- // SITE FOOTER -->
		
</div>
<!-- // PAGE WRAPPER -->

<!-- Essential Javascripts -->
<script src="<?php echo base_url()?>js/minified.js"></script>
<!-- // Essential Javascripts -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27646173-3', 'themina.net');
  ga('send', 'pageview');

</script>
	<!-- Particular Page Javascripts -->
	<script src="<?php echo base_url()?>js/products.js"></script>
	<script src="<?php echo base_url()?>js/owl.carousel.js"></script>
	<script src="<?php echo base_url()?>js/contact.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="<?php echo base_url()?>js/gmap3.min.js"></script>
	<!-- // Particular Page Javascripts -->
	
</body>
</html>