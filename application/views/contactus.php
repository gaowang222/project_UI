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
	<header id="site-header" role="banner">
		<!-- HEADER TOP -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7">
						<!-- CONTACT INFO -->

						<!-- // CONTACT INFO -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5">
						<ul class="actions unstyled clearfix">
							<li>
								<!-- SEARCH BOX -->
								<div class="search-box">
									<form action="#" method="post">
										<div class="input-iconed prepend">
											<button class="input-icon"><i class="iconfont-search"></i></button>
											<label for="input-search" class="placeholder">搜索</label>
											<input type="text" name="q" id="input-search" class="round-input full-width" required />
										</div>
									</form>
								</div>
								<!-- // SEARCH BOX -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-social">
								<!-- SOCIAL ICONS -->
								<a href="javascript:void(0);" id="social-icons">
									<i class="iconfont-share round-icon"></i>
								</a>

								<div id="sub-social" class="sub-header">
									<ul class="social-list unstyled text-center">
										<li><a href="#"><i class="iconfont-facebook round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-twitter round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-google-plus round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-pinterest round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-rss round-icon"></i></a></li>
									</ul>
								</div>
								<!-- // SOCIAL ICONS -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-cart">
								<!-- SHOPPING CART -->
								<a href="javascript:void(0);" id="total-cart">
									<i class="iconfont-shopping-cart round-icon"></i>
								</a>

								<div id="sub-cart" class="sub-header">
									<div class="cart-header">
										<span>您的购物车当前是空的.</span>
										<small><a href="<?php echo site_url('CartController')?>">(See All)</a></small>
									</div>
									<ul class="cart-items product-medialist unstyled clearfix"></ul>
									<div class="cart-footer">
										<div class="cart-total clearfix">
											<span class="pull-left uppercase">总数</span>
											<span class="pull-right total">$ 0</span>
										</div>
										<div class="text-right">
											<a href="<?php echo site_url('CartController')?>" class="btn btn-default btn-round view-cart">View Cart</a>
										</div>
									</div>
								</div>
								<!-- // SHOPPING CART -->
							</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- ADD TO CART MESSAGE -->
			<div class="cart-notification">
				<ul class="unstyled"></ul>
			</div>
			<!-- // ADD TO CART MESSAGE -->
		</div>
		<!-- // ADD TO CART MESSAGE -->

		<!-- // HEADER TOP -->
		<!-- MAIN HEADER -->
		<div class="main-header-wrapper">
			<div class="container">
				<div class="main-header">
					<!-- CURRENCY / LANGUAGE / USER MENU -->

					<!-- // CURRENCY / LANGUAGE / USER MENU -->
					<!-- SITE LOGO -->
					<div class="logo-wrapper">
						<a href="<?php echo site_url('IndexController')?>" class="logo" title="GFashion - Responsive e-commerce HTML Template">
							<img src="<?php echo base_url()?>img/logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
						</a>
					</div>
					<!-- // SITE LOGO -->
					<!-- SITE NAVIGATION MENU -->
					<nav id="site-menu" role="navigation">
						<ul class="main-menu hidden-sm hidden-xs">
							<li class="active"value>
								<a href="<?php echo site_url('IndexController')?>">首页</a>
							</li>
							<li>
								<a href="<?php echo site_url('ProductsController')?>">女装</a>
								<div class="mega-menu" data-col-lg="9" data-col-md="12">
									<div class="row">
										<?php
										foreach ($catename as $key => $value) {
											?>
											<div class="col-md-3">
												<h4 class="menu-title"><?=$value['cate_name']?></h4>
												<ul class="mega-sub">
													<?php
													foreach ($catename2 as $key1 => $value1) {
														//var_dump($catename2)  ;
														if($value['parent_cate_id']==$value1['status']){
															?>
															<li><a href="<?php echo site_url('ProductsController?cate_id='.$value1['cate_id'])?>"><?=$value1['cate_name']?></a></li>

															<?php
														}
													}
													?>
												</ul>
											</div>
											<?php
										}
										?>
										<div class="col-md-3">
											<div class="carousel slide m-b" data-ride="carousel">
												<div class="carousel-inner">
													<div class="item active">
														<img src="<?php echo base_url()?>images/men/slide1.jpg" alt="" />
													</div>
													<div class="item">
														<img src="<?php echo base_url()?>images/men/slide2.jpg" alt="" />
													</div>
												</div>
											</div>
											<h5 class="text-semibold uppercase m-b-sm">主打产品</h5>
											<p>Lorem ipsum,dolor sit，奉献给了elit。阿提姆·涅克，布兰迪特·斯克伦斯克.</p>
											<a href="<?php echo site_url('ProductsController')?>" class="btn btn-default btn-round">去商店 →</a>
										</div>
									</div>
								</div>
							<li>
								<a href="<?php echo site_url('ProductsController')?>">男装</a>

								<!-- MEGA MENU -->
								<div class="mega-menu" data-col-lg="9" data-col-md="12">
									<div class="row">
										<?php
										foreach ($catename as $key => $value) {
											?>
											<div class="col-md-3">
												<h4 class="menu-title"><?=$value['cate_name']?></h4>
												<ul class="mega-sub">
													<?php
													foreach ($catename2 as $key1 => $value1) {
														//var_dump($catename2)  ;
														if($value['parent_cate_id']==$value1['status']){
															?>
															<li><a href="<?php echo site_url('ProductsController?cate_id='.$value1['cate_id'])?>"><?=$value1['cate_name']?></a></li>

															<?php
														}
													}
													?>
												</ul>
											</div>
											<?php
										}
										?>
										<div class="col-md-3">
											<div class="carousel slide m-b" data-ride="carousel">
												<div class="carousel-inner">
													<div class="item active">
														<img src="<?php echo base_url()?>images/men/slide1.jpg" alt="" />
													</div>
													<div class="item">
														<img src="<?php echo base_url()?>images/men/slide2.jpg" alt="" />
													</div>
												</div>
											</div>
											<h5 class="text-semibold uppercase m-b-sm">主打产品</h5>
											<p>Lorem ipsum,dolor sit，奉献给了elit。阿提姆·涅克，布兰迪特·斯克伦斯克.</p>
											<a href="<?php echo site_url('ProductsController')?>" class="btn btn-default btn-round">去商店 →</a>
										</div>
									</div>
								</div>

								<!-- // MEGA MENU -->

							</li>


							<!-- MEGA MENU -->



							<li>
								<a href="<?php echo site_url('StorelocatorController')?>">商店位置</a>
							</li>
							<li>
								<a href="<?php echo site_url('ContactusController')?>">个人中心</a>
							</li>
							<li>
								<a href="<?php echo site_url('LoginController')?>">登录/注册</a>
							</li>
						</ul>

						<!-- MOBILE MENU -->
						<div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm">
							<button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
							<ul class="dl-menu">

								<li class="active">
									<a href="javsacript:void(0);">首页</a>
								</li>

								<li>
									<a href="javsacript:void(0);">女装</a>
									<ul class="dl-submenu">
										<?php
										foreach($catename as $key2 => $value2){
											?>

											<li>
												<a href="<?php echo site_url('ProductsController')?>"><?=$value2['cate_name']?></a>

												<ul class="dl-submenu">
													<?php
													foreach($catename2  as $key3 => $value3){
														if($value2['parent_cate_id']==$value3['status']){
															?>
															<li><a href="<?php echo site_url('ProductsController?cate_id='.$value3['cate_id'])?>"><?=$value3['cate_name']?></a></li>
															<?php
														}
													}
													?>

												</ul>
											</li>
											<?php
										}

										?>

									</ul>
								</li>
								<li>
									<a href="javsacript:void(0);">男装</a>

									<ul class="dl-submenu">
										<?php
										foreach($catename as $key2 => $value2){
											?>

											<li>
												<a href="<?php echo site_url('ProductsController')?>"><?=$value2['cate_name']?></a>

												<ul class="dl-submenu">
													<?php
													foreach($catename2  as $key3 => $value3){
														if($value2['parent_cate_id']==$value3['status']){
															?>
															<li><a href="<?php echo site_url('ProductsController?cate_id='.$value3['cate_id'])?>"><?=$value3['cate_name']?></a></li>
															<?php
														}
													}
													?>

												</ul>
											</li>
											<?php
										}

										?>

									</ul>
								</li>
							</ul>
						</div>
						<!-- // MOBILE MENU -->

					</nav>
					<!-- // SITE NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- // MAIN HEADER -->
	</header>
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