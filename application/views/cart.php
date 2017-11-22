<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<title>购物车页</title>
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
												<input type="text" name="q" id="input-search"
													   class="round-input full-width" required/>
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
											<small><a href="<?php echo site_url('CartController') ?>"></a>
											</small>
										</div>
										<ul class="product-medialist unstyled clearfix"></ul>
										<div class="cart-footer">
											<div class="clearfix">
												<span class="pull-left uppercase">总数</span>
												<span class="pull-right total">你猜啊，点我试试！</span>
											</div>
											<div class="text-right">
												<a href="<?php echo site_url('CartController') ?>"
												   class="btn btn-default btn-round view-cart">加入购物车</a>
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
							<a href="<?php echo site_url('IndexController') ?>" class="logo"
							   title="GFashion - Responsive e-commerce HTML Template">
								<img src="<?php echo base_url() ?>img/logo.png"
									 alt="GFashion - Responsive e-commerce HTML Template"/>
							</a>
						</div>
						<!-- // SITE LOGO -->
						<!-- SITE NAVIGATION MENU -->
						<nav id="site-menu" role="navigation">
							<ul class="main-menu hidden-sm hidden-xs">
								<li class="active" value>
									<a href="<?php echo site_url('IndexController') ?>">首页</a>
								</li>
								<li>
									<a href="<?php echo site_url('IndexController') ?>">女装</a>
								<li>
									<a href="<?php echo site_url('IndexController') ?>">男装</a>

									<!-- MEGA MENU -->

								</li>


								<!-- MEGA MENU -->


								<li>
									<a href="<?php echo site_url('StorelocatorController') ?>">商店位置</a>
								</li>
								<li>
									<a href="<?php echo site_url('ContactusController') ?>">个人中心</a>
								</li>
								<li>
									<a href="<?php echo site_url('LoginController') ?>">登录/注册</a>
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
									</li>
									<li>
										<a href="javsacript:void(0);">男装</a>

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
						<li><a href="#">主页</a></li>
						<li class="active">购物车</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->

		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">

			<section class="section">
				<div class="container">

					<table class="tbl-cart">
						<thead>
							<tr>
								<th>产品名称</th>
								<th style="width: 15%;">价格</th>
								<th style="width: 15%;">数量</th>
								<th class="hidden-xs" style="width: 15%;">总价</th>
								<th class="hidden-xs" style="width: 10%;"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hide empty-cart">
								<td colspan="5">
									亲，您的购物车空空如也<a href="<?php echo site_url('ProductsController')?>" style="font-size: 18px;color:#f00">点击我--流连忘返商场--</a>购物吧。
								</td>
							</tr>
							<?php
								$itemUrl = base_url();
							  //购物车数量
							    $cartNum = count($cartID);
								//商品总价
							   global $totalPrice;
								foreach($cartID as $cartItem =>$cartValue){
									$cartID = $cartValue['item_id'];
									foreach($itemMsg as $items =>$itemValue){
										if($cartID == $itemValue['item_id']){
											$cartid=$cartValue['cart_id'];
											$imgs= strstr($itemValue['imgs'],'__');
											$lastImgs = $itemUrl .'img_1/'.substr($imgs,2);
											$itemId = $itemValue['item_id'];
											$price = $itemValue['price'];
											$totalPrice = $totalPrice + $price;

							?>
							<tr itemid="<?php echo $itemId;?>" class="mytr">
								<td>
									<a class="entry-thumbnail" href="<?php echo $lastImgs?>" data-toggle="lightbox">
										<img src="<?php echo $lastImgs?>" alt="" />
									</a>
									<a class="entry-title" href='<?php echo site_url("SingleController?item_id=$itemId")?>'><?php echo $itemValue['item_name']?></a>
								</td>
								<td><span class="unit-price">$<?php echo $itemValue['price'] ?></span></td>
								<td>
									<div class="qty-btn-group">
										<button type="button" class="down"><i class="iconfont-caret-down inline-middle"></i></button>
										<input type="text" value="1" />
										<button type="button" class="up"><i class="iconfont-caret-up inline-middle"></i></button>
									</div>
								</td>
								<td class="hidden-xs"><strong class="text-bold row-total">$<?php echo $itemValue['price']?></strong></td>
								<td class="hidden-xs"><button type="button"  id="cartBtn" cartid="<?php echo $cartid?>">×</button></td>
							</tr>
							</tr>
						<?php

										}
									}
								}
						?>
						</tbody>
					</table>


					<div class="shopcart-total pull-right clearfix">
						<div class="cart-subtotal text-xs m-b-sm clearfix">
							<span class="pull-left">数量:</span>
							<span class="pull-right"><?php echo $cartNum ?></span>
						</div>
						<div class="cart-total text-bold m-b-lg clearfix">
							<span class="pull-left">总价:</span>
							<span class="pull-right">$<?php echo $totalPrice?></span>
						</div>
						<div class="text-center">
							<a class="btn btn-round btn-success uppercase" href="<?php echo site_url('IndexController')?>">继续购物</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a class="btn btn-round btn-danger uppercase" href="<?php echo site_url('CheckoutController')?>"">立即结算</a>
						</div>
					</div>

				</div>
			</section>


			<!-- RELATED PRODUCTS -->
			<section class="section visible-items-4">
				<div class="container">
					<div class="row">
						<header class="section-header clearfix col-sm-offset-3 col-sm-6">
							<h3 class="section-title">为您推荐</h3>
							<p class="section-teaser">推荐男装、女装、童装各系列产品</p>
						</header>

						<div class="clearfix"></div>

						<!-- BEGIN CAROUSEL -->
						<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">

							<div class="owl-controls clickable top">
								<div class="owl-buttons">
									<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
									<div class="owl-next"><i class="iconfont-angle-right"></i></div>
								</div>
							</div>

							<div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
								<?php
									$cartUrl = base_url();
									foreach($singlerecommend as $singlerecommenditem=>$cartValue){
									$imgs= strstr($cartValue['imgs'],'__');
									$lastImgs = $cartUrl .'/img_1/'.substr($imgs,2);
									$itemid=$cartValue['item_id'];

								?>
								<div class="product" data-product-id="1">
									<div class="entry-media">
										<img src="<?php echo $lastImgs?>" alt="" class="lazyOwl thumb" style="height: 300px;"/>
										<div class="hover">
											<a href='<?php echo site_url("SingleController?item_id=$itemid")?>' class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">Sale</div>
												</li>
												<li>
													<a href="<?php echo $lastImgs?>" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4.5" step="0.5" id="backing1" />
												<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#"><?php echo $cartValue['item_name']?></a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount">$ <?php echo $cartValue['price']?></s>
											<strong class="accent-color price">$ <?php echo $cartValue['price']-10 ?></strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">添加到愿望列表</a>
											<a href="#" class="pull-right">加入比较</a>
										</div>
									</div>
								</div>
							<?php
									}
							?>
							</div>

						</div>
						<!-- // END CAROUSEL -->

					</div>
				</div>
			</section>
			<!-- // RELATED PRODUCTS -->

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

	<script src="<?php echo base_url()?>js/owl.carousel.js"></script>
	<!-- // Particular Page Javascripts -->
	
</body>
</html>
<script>
	var cartUrl = '<?php echo site_url("CartController/deleteCar")?>';
	var checkUrl = '<?php echo site_url("CheckoutController/check")?>';
</script>
<script src="<?php echo base_url()?>js/cart.js"></script>