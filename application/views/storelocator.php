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
	<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <!--百度地图api	-->
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7SNO5z3z6MXqnHmV4UXpyKn0kndTgKDo"></script>
	<style>
		#map {
			height: 500px;
			width: 100%;
		}

		#container_box {
			position: absolute;
			width: 450px;
			top: 40%;
			left: 80px;
		}

		#place_search_box {
			width: 400px;
		}

		#place_input {
			height: 40px;
			width: 350px;
			border: 0;
			margin: 0;
			padding-left: 30px;
			box-sizing: border-box;
		}

		.switch_btn {
			width: 50px;
			height: 40px;
			margin: 0;
			padding: 0;
			border: 0;
			box-sizing: border-box;
		}

		#route_plan_box {
			width: 400px;
			display: none;
			background: white;
		}

		#route_type_box {
			width: 350px;
			height: 40px;
		}

		#route_type_box>div {
			width: 110px;
			height: 40px;
			text-align: center;
			line-height: 40px;
		}

		.distance {
			display: block;
			width: 10px;
			height: 40px;
		}

		#start_end_input_box {
			width: 400px;
		}

		#swap_input_val {
			height: 80px;
			width: 40px;
			text-align: center;
			line-height: 80px;
		}

		#input_group {
			width: 360px;
		}

		#input_group>input {
			width: 310px;
			height: 40px;
			margin: 0;
			padding-left: 20px;
			border: 0;
			box-sizing: border-box;
		}

		#search_btn {
			height: 40px;
			width: 50px;
		}

		#display_route_result {
			width: 350px;
			height: 450px;
			display: none;
			overflow: auto;
		}

		#right {
			height: 40px;
			width: 50px;
		}

		.selected {
			background: deepskyblue;
		}
	</style>
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
						<li><a href="<?php echo site_url('IndexController')?>">首页</a></li>
						<li class="active">商店位置</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
			<div id="map"></div>
			<div id="container_box">
				<div id="left" class="float_left">
					<div id="place_search_box">
						<input type="text" id="place_input" placeholder="输入地点" class="float_left">
					</div>
				</div>
				<div id="right" class="float_left">
					<button id="search_btn">搜索</button>
				</div>
			</div>
			<script>
				var map;
				var searchType = "place";
				var routeType = "drive";
				var currentCity = "北京市";
				initMap();
				initElements();
				function initMap() {

					map = new BMap.Map("map");
					//设置地图的中点和缩放级别
					map.centerAndZoom("北京", 10);

					// 允许滚轮缩放
					map.enableScrollWheelZoom();

					//创建控件对象
					var NavigationControl = new BMap.NavigationControl();
					//将控件对象添加到地图上
					map.addControl(NavigationControl);

					var OverviewMapControl = new BMap.OverviewMapControl();
					map.addControl(OverviewMapControl);

					var PanoramaControl = new BMap.PanoramaControl();
					map.addControl(PanoramaControl);

					var geolocation = new BMap.Geolocation();
					geolocation.getCurrentPosition(function(position) {


						map.centerAndZoom(position.point, 15);

						//将当前定位到的城市设置到全局变量中
						currentCity = position.address.city;

					});
				}

				function initElements() {

					//给线路切换按钮设置点击事件
					$("#switch_to_route").click(function() {
						$("#place_search_box").slideUp();
						$("#route_plan_box").slideDown();
						$("#drive").addClass("selected");
						routeType = "drive";
						searchType = "route";
					});

					//给地点切换按钮设置点击事件
					$("#switch_to_place").click(function() {
						$("#place_search_box").slideDown();
						$("#route_plan_box").slideUp();
						searchType = "place";
					});

					//给线路类型盒子设置代理事件。
					$("#route_type_box").on("click", "div", function(event) {

						$(event.target).addClass("selected").siblings("div").removeClass("selected");

						//将点击的那个div的id设置为线路规划的类型。
						routeType = event.target.id;

					});

					//给交换按钮设置点击事件
					$("#swap_input_val").click(function() {
						var start = $("#start_input").val();
						var end = $("#end_input").val();
						$("#start_input").val(end)
						$("#end_input").val(start);

					});

					$("#search_btn").click(function() {
						//判断搜索的类型
						if (searchType === "place") {
							var place = $("#place_input").val();
							//创建地址解析器
							var geocoder = new BMap.Geocoder();
							//将地址解析为坐标
							geocoder.getPoint(place, function(point) {

								console.log(point);
								//设置地图的中点
								map.centerAndZoom(point, 15);
								//添加标注
								//创建新的图标对象和尺寸对象
								var myIcon = new BMap.Icon("<?php echo base_url()?>images/location_logo.png", new BMap.Size(100,100));
								var marker = new BMap.Marker(point,{icon:myIcon});
								map.addOverlay(marker);

							}, currentCity);
						}

					});
				}

			</script>
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

</script>
	<!-- Particular Page Javascripts -->
	<script src="<?php echo base_url()?>js/products.js"></script>
	<script src="<?php echo base_url()?>js/owl.carousel.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="<?php echo base_url()?>js/gmap3.min.js"></script>
	<!-- // Particular Page Javascripts -->
	
</body>
</html>