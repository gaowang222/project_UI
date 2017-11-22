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
								<a href="<?php echo site_url('IndexController')?>">女装</a>
							<li>
								<a href="<?php echo site_url('IndexController')?>">男装</a>

								<!-- MEGA MENU -->

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
					<li><a href="<?php echo site_url('IndexController')?>">主页</a></li>
					<li class="active">结算页</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- // BREADCRUMB -->

	<!-- SITE MAIN CONTENT -->
	<main id="main-content" role="main">

		<div class="container">
			<div class="row">

				<div class="m-t-b clearfix">
					<!-- SIDEBAR -->
					<aside class="col-xs-12 col-sm-4 col-md-3">
						<section class="side-section">
							<h3 class="uppercase text-bold"><span class="text-xs">欢迎来到结算页！</span></h3>

							<ul class="nav nav-tabs nav-stacked">
								<li><a href="<?php echo site_url('IndexController')?>">主页</a></li>
								<li><a href="<?php echo site_url('ContactusController')?>">关于我们</a></li>
								<li><a href="<?php echo site_url('ProductsController')?>">商城</a></li>
								<li><a href="<?php echo site_url('ProductsController')?>">单品详情</a></li>
								<li><a href="<?php echo site_url('ContactusController')?>">联系我们</a></li>
							</ul>
						</section>

						<!-- PROMO -->

						<!-- // PROMO -->
					</aside>
					<!-- // SIDEBAR -->

					<section class="col-xs-12 col-sm-8 col-md-9">
						<div class="panel-group checkout" id="checkout-collapse">

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2">
											<span class="step">01</span>
											用户信息
										</a>
									</h4>
								</div>
								<div id="checkout-collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										<form class="form-horizontal" role="form">
											<div class="row">

												<div class="col-xs-12 col-sm-12 col-md-6">
													<div class="form-group stylish-input">
														<label for="inputAddress1" class="col-sm-4 col-lg-4 control-label required">收货地址:</label>
														<div class="col-sm-8 col-lg-8">
															<input type="text" class="form-control" id="inputAddress1" />
														</div>
													</div>
													<div class="form-group stylish-input">
														<label for="inputAddress2" class="col-sm-4 col-lg-4 control-label required">联系方式:</label>
														<div class="col-sm-8 col-lg-8">
															<input type="text" class="form-control" id="inputAddress2" />
														</div>
													</div>
												</div>
											</div>
											<div class="space20 clearfix"></div>
										</form>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse4">
											<span class="step">02</span>
											支付方式
										</a>
									</h4>
								</div>
								<div id="checkout-collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										<form class="paymethod" role="form">
											<div class="form-group stylish-input">
												<input type="radio" id="deliverymethod1" class="prettyCheckable" name="deliverymethod" data-label="支付宝" />
												<!--													<p>支付宝.</p>-->
											</div>
											<div class="form-group stylish-input">
												<input type="radio" id="deliverymethod2" class="prettyCheckable" name="deliverymethod" data-label="微信" />
												<!--													<p>微信</p>-->
											</div>
											<div class="form-group stylish-input">
												<input type="radio" id="deliverymethod3" class="prettyCheckable" name="deliverymethod" data-label="银行卡" />
												<!--													<p>银行卡</p>-->
											</div>
											<div class="space20 clearfix"></div>
										</form>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse6">
											<span class="step">03</span>
											确定支付
										</a>
									</h4>
								</div>
								<div id="checkout-collapse6" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-12 col-sm-6 pull-right center-sm">
												<table class="shop-summary">
													<tr>
														<th>总计：</th>
														<td>$1170.00</td>
													</tr>
													<tr>
														<th>折扣：</th>
														<td>$117.00</td>
													</tr>
													<!--<tr>
                                                        <th>Vat (10.0 %):</th>
                                                        <td>$117.00</td>
                                                    </tr>-->
													<tr class="total">
														<th>总金额:</th>
														<td>$1055.00</td>
													</tr>
													<tr>
														<th><a href="#" class="btn btn-primary btn-round uppercase">上一步</a></th>
														<td><a href="#" class="btn btn-primary btn-round uppercase">支付啦</a></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

				</div>

			</div>
		</div>

	</main>
	<!-- // SITE MAIN CONTENT -->

	<!-- SITE FOOTER -->
	<?php $this->load->view('footer')?>

	<!-- WIDGET AREA -->



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
<!-- // Particular Page Javascripts -->

</body>
</html>