<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<title>聚尚网</title>
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
	<link rel="stylesheet" href="<?php echo base_url()?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/owl.theme.css">
	<link href="<?php echo base_url()?>css/flexslider.css" rel="stylesheet" />
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/responsive.css">
</head>
<body class="home">

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
															<li><a href="<?php

																//$id= $value1['cate_id'];
																//?cate_id='.$value1['cate_id']


																echo site_url('ProductsController?cate_id=').$value1['cate_id']  ?>"><?=$value1['cate_name']?></a></li>

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
								<a href="<?php echo site_url('IndexController')?>">男装</a>

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
									<a href="<?php echo site_url('IndexController')?>">首页</a>
								</li>

								<li>
									<a href="<?php echo site_url('ProductsController')?>">女装</a>
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
									<a href="<?php echo site_url('IndexController')?>">男装</a>

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



	<!-- HOMEPAGE SLIDER -->
	<div id="home-slider">
		<div class="flexslider">
			<ul class="slides">
				<?php
					$slideUrl = base_url();
					foreach($indexslide as $indexslideitem=>$indexslideImg){
						$imgs= strstr($indexslideImg['imgs'],'__');
						$lastImgs = $slideUrl .'/img_1/'.substr($imgs,2);
				?>
				<!-- THE FIRST SLIDE -->
				<li>
					<!-- THE MAIN IMAGE IN THE SLIDE -->
					<img src="<?php echo $lastImgs?>" alt="" />

					<!-- THE CAPTIONS OF THE FIRST SLIDE -->
					<div class="flex-caption h6 text-bold gfc uppercase animated"
						 data-animation="fadeInLeftBig"
						 data-x="800"
						 data-y="110"
						 data-speed="600"
						 data-start="1200">新款</div>

					<div class="flex-caption herotext text-bold gfc animated"
						 data-animation="fadeInRightBig"
						 data-x="580"
						 data-y="140"
						 data-speed="900"
						 data-start="2000"><?php echo $indexslideImg['item_name']?></div>

					<div class="flex-caption h6 text-bold gfc text-center animated"
						 data-animation="fadeInDown"
						 data-x="639"
						 data-y="260"
						 data-speed="1600"
						 data-start="2900">
						在秋霜的秋天，舒适温暖的外套<br/>
						<a href="<?php echo site_url('ProductsController')?>" class="btn btn-primary uppercase">立即购买</a>
					</div>

				</li>
				<?php
					}
				?>

			</ul>
		</div>

		<script>
			jQuery(function($) {
				var $slider = $('#home-slider > .flexslider');
				$slider.find('.flex-caption').each(function() {
					var $this = $(this);
					var configs = {
						left: $this.data('x'),
						top: $this.data('y'),
						speed: $this.data('speed') + 'ms',
						delay: $this.data('start') + 'ms'
					};
					if ( configs.left == 'center' && $this.width() !== 0 )
					{
						configs.left = ( $slider.width() - $this.width() ) / 2;
					}
					if ( configs.top == 'center' && $this.height() !== 0 )
					{
						configs.top = ( $slider.height() - $this.height() ) / 2;
					}

					$this.data('positions', configs);

					$this.css({
						'left': configs.left + 'px',
						'top': configs.top + 'px',
						'animation-duration': configs.speed,
						'animation-delay': configs.delay
					});
				});

				$(window).on('resize', function() {
					var wW = $(window).width(),
						zoom = ( wW >= 1170 ) ? 1 : wW / 1349;
					$('.flex-caption.gfc').css('zoom', zoom);
				});
				$(window).trigger('resize');



				$slider.imagesLoaded(function() {
					$slider.flexslider({
						animation: 'slide',
						easing: 'easeInQuad',
						slideshow: false,
						nextText: '<i class="iconfont-angle-right"></i>',
						prevText: '<i class="iconfont-angle-left"></i>',
						start: function() {
							flex_fix_pos(1);
						},
						before: function(slider) {
							// initial caption animation for next show
							$slider.find('.slides li .animation-done').each(function() {
								$(this).removeClass('animation-done');
								var animation = $(this).attr('data-animation');
								$(this).removeClass(animation);
							});

							flex_fix_pos(slider.animatingTo + 1);
						},
						after: function() {
							// run caption animation
							$slider.find('.flex-active-slide .animated').each(function() {
								var animation = $(this).attr('data-animation');
								$(this).addClass('animation-done').addClass(animation);
							});
						}
					});
				});


				function flex_fix_pos(i) {
					$slider.find('.slides > li:eq(' + i + ') .gfc').each(function() {
						var $this = $(this),
							pos = $(this).data('positions');

						if ( pos.left == 'center' )
						{
							pos.left = ( $slider.width() - $this.width() ) / 2;
							$this.css('left', pos.left + 'px');
							$this.data('positions', pos);
						}
						if ( pos.top == 'center' )
						{
							pos.top = ( $slider.height() - $this.height() ) / 2;
							$this.css('left', pos.top + 'px');
							$this.data('positions', pos);
						}
					});
				}
			});
		</script>		</div>
	<!-- // HOMEPAGE SLIDER -->

	<!-- SITE MAIN CONTENT -->
	<main id="main-content" role="main">



		<!-- FEATURED PRODUCTS -->
		<section class="section featured visible-items-4">
			<div class="container">
				<div class="row">
					<header class="section-header clearfix col-sm-offset-3 col-sm-6">
						<h3 class="section-title">女装</h3>
						<p class="section-teaser">本店推出一些优惠商品</p>
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
								$baseurl = base_url();
								foreach ($slideLeft as $key => $value) {
									$itemid=$value['item_id'];
									$imgs= strstr($value['imgs'],'__');
									$lastImgs = $baseurl .'/img_1/'.substr($imgs,2);
									$itemid = $value['item_id'];
								?>
								<div class="product" data-product-id="1">
									<div class="entry-media">
										<img data-src="<?php echo $lastImgs?>" alt="" class="lazyOwl thumb" style="height: 300px;"/>
										<div class="hover">
											<a href='<?php echo site_url("SingleController?item_id=$itemid")?>' class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">销售</div>
												</li>
												<li>
													<a href="<?php echo $lastImgs?>" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="" class="circle addCartBtn"
													   itemid="<?php echo $itemid ?>"><i
															class="iconfont-shopping-cart"></i></a>
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
											<a href="#"><?=$value['item_name'];?></a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount"><?=$value['price'];?></s>
											<strong class="accent-color price"><?=$value['price'] - 10;?></strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ 添加到列表</a>
											<a href="#" class="pull-right">+加入比较</a>
										</div>
									</div>
								</div>
								<?php
						         	}
							?>
						</div>
					</div>
				</div>
					<!-- // END CAROUSEL -->
			</div>
		</section>
		<!-- // FEATURED PRODUCTS -->

		<!-- NEW ARRIVAL PRODUCTS -->
		<section class="section new-arrivals visible-items-5">
			<div class="container">
				<div class="row">
					<header class="section-header clearfix col-sm-offset-3 col-sm-6">
						<h3 class="section-title">男装</h3>
						<p class="section-teaser">本店推出一些优惠商品</p>
					</header>

					<div class="clearfix"></div>

					<!-- BEGIN CAROUSEL -->
					<div id="new-arrivals-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">

						<div class="owl-controls clickable outside">
							<div class="owl-buttons">
								<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
								<div class="owl-next"><i class="iconfont-angle-right"></i></div>
							</div>
						</div>

						<div class="owl-carousel owl-theme" data-visible-items="5" data-navigation="true" data-lazyload="true" >
							<?php
								$slideurl = base_url();
								foreach($slideRight as $slideitem=>$slideValue) {
									$item_id=$slideValue['item_id'];
									$imgs= strstr($slideValue['imgs'],'__');
									$lastImgs = $slideurl .'/img_1/'.substr($imgs,2);
									$itemid = $value['item_id'];
									?>
									<div class="product" data-product-id="9">
										<div class="entry-media">
											<img
												data-src="<?php echo $lastImgs?>"
												alt="" class="lazyOwl thumb" style="height: 300px;"/>
											<div class="hover">
												<a href='<?php echo site_url("SingleController?item_id=$item_id") ?>'
												   class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<div class="circle ribbon ribbon-sale">Sale</div>
													</li>
													<li>
														<a href="<?php echo base_url() ?>images/men/jacket/271865-0286_1.jpg"
														   class="circle" data-toggle="lightbox"><i
																class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="" class="circle addCartBtn" itemid="<?php echo $itemid ?>"><i
																class="iconfont-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="rate-bar">
													<input type="range" value="4.5" step="0.5" id="backing9"/>
													<div class="rateit" data-rateit-backingfld="#backing9"
														 data-rateit-starwidth="12" data-rateit-starheight="12"
														 data-rateit-resetable="false" data-rateit-ispreset="true"
														 data-rateit-min="0" data-rateit-max="5"></div>
												</div>
											</div>
										</div>

										<div class="entry-main">
											<h5 class="entry-title">
												<a href="#"><?php echo $slideValue['item_name']?></a>
											</h5>
											<div class="entry-price">
												<s class="entry-discount">$ <?php echo $slideValue['price']?></s>
												<strong class="accent-color price">$ <?php echo $slideValue['price'] - 10?></strong>
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
		<!-- // NEW ARRIVAL PRODUCTS

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
<script src="<?php echo base_url()?>js/jquery.flexslider-min.js"></script>
<!-- // Particular Page Javascripts -->
</body>
</html>
<script>
	var addcartUrl = "<?php echo site_url('CartController/insertProduct')?>";
</script>
<script src="<?php echo base_url()?>js/user.js"></script>