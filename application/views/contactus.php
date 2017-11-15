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
						<li><a href="#">Home</a></li>
						<li class="active">Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
				
			<div class="container">
				<div class="row">
				
					<section class="section">
						<section class="col-xs-12 col-sm-12">
							<!-- GOOGLE MAP: You can config map to your cordination in `js/scripts.js` -->
							<div id="gmap" class="gmap"></div>
						</section>
					</section>
					
					<section class="section">
						<section class="col-xs-12 col-sm-8 col-md-9">
						
							<h3 class="uppercase text-bold"><span class="text-xs">What about sending us a message</span></h3>
							<div class="row">
								<div id="frm-contact-us">
									<form id="contact-form" class="clearfix" role="form">
										<div class="col-xs-12 col-sm-12 col-md-5">
											<div class="form-group stylish-input">
												<label for="contactName" class="required">Name</label>
												<input type="text" class="form-control" id="contactName" name="name" data-validate="^[�-�\w\s]{2,30}$" require />
											</div>
											<div class="form-group stylish-input">
												<label for="contactEmail" class="required">Email</label>
												<input type="email" class="form-control" id="contactEmail" name="email" data-validate="^[_A-Za-z0-9-\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$" require />
											</div>
											<div class="form-group stylish-input">
												<label for="contactSubject">Subject</label>
												<input type="text" class="form-control" name="subject" id="contactSubject" />
											</div>
										</div>
										<div class="space10 visible-xs visible-sm"></div>
										<div class="col-xs-12 col-sm-12 col-md-7">
											<div class="form-group stylish-input">
												<label for="contactMSG" class="required">Message</label>
												<textarea id="contactMSG" class="form-control" name="message" style="height: 178px;" data-validate=".{2,400}$" required></textarea>
											</div>
										</div>
										<div class="space10"></div>
										<div class="col-xs-12 col-sm-12">
											<button class="btn btn-default btn-round pull-right">Send Message</button>
										</div>
									</form>
									
									<div class="space40"></div>
									<div class="clearfix"></div>
									<!-- CONTACT FORM ALERTS -->
									<div class="alert alert-success" id="contact_success" style="display: none;">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<div class="alert-inner">
											<strong>Thanks,</strong> your message recieved successfully. We'll get back to you as soon as possible.
										</div>
									</div>
									<!-- /success msg -->
									
									<div class="alert alert-danger" id="contact_fail" style="display: none;">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<div class="alert-inner"></div>
									</div>
									<!-- /error msg -->
									<!-- /CONTACT FORM ALERTS -->

								</div>
							</div>
						
						</section>
				
						<!-- SIDEBAR -->
						<aside class="col-xs-12 col-sm-4 col-md-3">
						
							<section class="sidebar">
								<section class="side-section">
									<h3 class="uppercase text-bold"><span class="text-xs">place for nice title</span></h3>
									<p class="light-color text-xs">Sed ornare cras donec litora integer curabitur orci, at nullam aliquam libero nam himenaeos, amet massa  amet ut ipsum viverra mauris rhoncus neque aenean rhoncus gravida orci facilisis quis dui consectetur.</p>
								</section>
								
								<section class="side-section">
									<h3 class="uppercase text-bold"><span class="text-xs">Contact infomation</span></h3>
									<div class="light-color text-xs">
										<p>Lorem ipsum maecenas dapibus luctus</p>
										<ul class="menu iconed-list unstyled">
											<li>
												<span class="list-icon"><i class="round-icon text-sm iconfont-map-marker"></i></span>
												<div class="list-content">121 King Street, Melbourne Victoria 3000 Australia</div>
											</li>
											<li>
												<span class="list-icon"><i class="round-icon text-sm iconfont-phone"></i></span>
												<div class="list-content">(+00)1344356-675</div>
											</li>
											<li>
												<span class="list-icon"><i class="round-icon text-sm iconfont-envelope-alt"></i></span>
												<div class="list-content">support@themina.net</div>
											</li>
										</ul>
									</div>
								</section>
							</section>
							
						</aside>
						<!-- // SIDEBAR -->
						
						<div class="clearfix"></div>
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