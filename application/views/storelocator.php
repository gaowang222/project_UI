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
						<li><a href="<?php echo site_url('IndexController')?>">Home</a></li>
						<li class="active">Store Locator</li>
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
								<h3 class="uppercase text-bold"><span class="text-xs">Usefull Pages</span></h3>
								
								<ul class="nav nav-tabs nav-stacked">
									<li><a href="<?php echo site_url('IndexController')?>">Homepage</a></li>
									<li><a href="<?php echo site_url('ContactusController')?>">About us</a></li>
									<li><a href="<?php echo site_url('ProductsController')?>">Shop</a></li>
									<li><a href="<?php echo site_url('ProductsController')?>">Single Product Details</a></li>
									<li><a href="<?php echo site_url('ContactusController')?>">Contact us</a></li>
								</ul>
							</section>
								
							<!-- PROMO -->
							<div class="promo inverse-background" style="background: url('<?php echo base_url()?>images/demo/Barn-Dress-Girl_t.jpg') no-repeat; background-size: auto 100%;">
								<div class="inner text-center np">
									<div class="ribbon">
										<h6 class="nmb">New Arrivals</h6>
										<h5 class="text-semibold uppercase nmb">Leather Fashion</h5>
										<div class="space10"></div>
										<a href="<?php echo site_url('ProductsController')?>" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span> Shop Now</span></a>
									</div>
								</div>
							</div>
							<!-- // PROMO -->
						</section>
					</aside>
					<!-- // SIDEBAR -->
			
					<section class="col-xs-12 col-sm-8 col-md-9">
						<section class="section">
									
							<form class="clearfix" role="form">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="form-group stylish-input">
											<label for="inputZIPcode">Enter Post Code or store</label>
											<input type="text" id="inputZIPcode" class="form-control" required />
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group stylish-input">
											<label for="inputLocation">Country / State / City</label>
											<select id="inputLocation" class="form-control">
												<option>-- SELECT ONE --</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group stylish-input">
											<label for="inputRadius">Radius</label>
											<select id="inputRadius" class="form-control">
												<option>1000 m</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12">
										<button type="submit" class="btn btn-primary uppercase m-r-sm">submit</button>
										<button type="reset" class="btn btn-default uppercase">reset</button>
									</div>
								</div>
							</form>
							
							<div class="m-t-lg clearfix">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<ul class="store-list unstyled">
											<li>
												<h4 class="entry-title">
													<a href="#">Support Center</a>
													<small>(0.7 km)</small>
												</h4>
												<div class="row">
													<dl class="col-xs-7 col-sm-7">
														<dt>Address</dt>
														<dd>Lower Ground Suite 7<br/>32a Oxford Street</dd>
													</dl>
													<dl class="col-xs-5 col-sm-5">
														<dt class="phone">Phone</dt>
														<dd>(01) 23 456 789</dd>
														<dd>(02) 23 456 789</dd>
													</dl>
												</div>
											</li>
											<li>
												<h4 class="entry-title">
													<a href="#">Support Center</a>
													<small>(0.7 km)</small>
												</h4>
												<div class="row">
													<dl class="col-xs-7 col-sm-7">
														<dt>Address</dt>
														<dd>Lower Ground Suite 7<br/>32a Oxford Street</dd>
													</dl>
													<dl class="col-xs-5 col-sm-5">
														<dt class="phone">Phone</dt>
														<dd>(01) 23 456 789</dd>
														<dd>(02) 23 456 789</dd>
													</dl>
												</div>
											</li>
											<li>
												<h4 class="entry-title">
													<a href="#">Support Center</a>
													<small>(0.7 km)</small>
												</h4>
												<div class="row">
													<dl class="col-xs-7 col-sm-7">
														<dt>Address</dt>
														<dd>Lower Ground Suite 7<br/>32a Oxford Street</dd>
													</dl>
													<dl class="col-xs-5 col-sm-5">
														<dt class="phone">Phone</dt>
														<dd>(01) 23 456 789</dd>
														<dd>(02) 23 456 789</dd>
													</dl>
												</div>
											</li>
											<li>
												<h4 class="entry-title">
													<a href="#">Support Center</a>
													<small>(0.7 km)</small>
												</h4>
												<div class="row">
													<dl class="col-xs-7 col-sm-7">
														<dt>Address</dt>
														<dd>Lower Ground Suite 7<br/>32a Oxford Street</dd>
													</dl>
													<dl class="col-xs-5 col-sm-5">
														<dt class="phone">Phone</dt>
														<dd>(01) 23 456 789</dd>
														<dd>(02) 23 456 789</dd>
													</dl>
												</div>
											</li>
										</ul>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div id="store-locator-gmap" class="gmap"></div>
									</div>
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
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="<?php echo base_url()?>js/gmap3.min.js"></script>
	<!-- // Particular Page Javascripts -->
	
</body>
</html>