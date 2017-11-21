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
</head>
<body>

<!-- PAGE WRAPPER -->
<div id="page-wrapper">

    <!-- SITE HEADER -->
    <?php $this->load->view("header")?>
    <!-- // SITE HEADER -->

    <!-- BREADCRUMB -->

    <!-- // BREADCRUMB -->

    <!-- SITE MAIN CONTENT -->
    <main id="main-content" role="main">

        <div class="container">
            <div class="row">
                <section class="section">
                    <section class="col-xs-12 col-sm-8 col-md-9">

                        <h3 class="uppercase text-bold"><span class="text-xs">亲爱的用户，你好！欢迎来到登录页面</span></h3>
                        <div class="row">
                            <div id="frm-contact-us">
                                <div id="contact-form" class="clearfix" role="form">
                                    <div class="col-xs-12 col-sm-12 col-md-5">
                                        <div class="form-group stylish-input">
                                            <label for="login_name" class="required">账号</label>
                                            <input type="text" class="form-control" id="login_name" name="login_name"  require placeholder="账号必填"/>
                                            <span></span>
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="passwd" class="required">密码</label>
                                            <input type="password" class="form-control" id="passwd" name="passwd" require placeholder="密码必填"/>
                                            <span></span>
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="repasswd" class="required">确认密码</label>
                                            <input type="password" class="form-control" id="repasswd" name="repasswd"  require placeholder="确认密码必填"/>
                                            <span></span>
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="contactSubject" class="required">验证码</label>
                                            <input type='text' placeholder="请输入验证码" class='form-control' name="usercode" id="usercode">
                                            <img src="<?php echo site_url('LoginController/yzm_login')?>" id="mycodeLogin" alt="验证码" style="position: relative;margin-top:-54px;left:70%;cursor: pointer">
                                        </div>
                                    </div>
                                    <div class="space10"></div>
                                    <div class="col-xs-4 col-sm-4">
                                        <button class="btn btn-danger btn-round pull-left" id="loginBtn">点我登录</button>
                                        <button class="btn btn-danger btn-round pull-right"><a href="<?php echo site_url('RegistController')?>" class="btn-danger">点我注册</a></button>
                                    </div>

                                </div>

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
                                <h3 class="uppercase text-bold"><span class="text-xs">公司简介</span></h3>
                                <p class="light-color text-xs">Sed ornare cras donec litora integer curabitur orci, at nullam aliquam libero nam himenaeos, amet massa  amet ut ipsum viverra mauris rhoncus neque aenean rhoncus gravida orci facilisis quis dui consectetur.</p>
                            </section>

                            <section class="side-section">
                                <h3 class="uppercase text-bold"><span class="text-xs">联系我们</span></h3>
                                <div class="light-color text-xs">
                                    <ul class="menu iconed-list unstyled">
                                        <li>
                                            <span class="list-icon"><i class="round-icon text-sm iconfont-map-marker"></i></span>
                                            <div class="list-content">墨尔本维多利亚州3000大街121号</div>
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="round-icon text-sm iconfont-phone"></i></span>
                                            <div class="list-content">(+00)123-456-789</div>
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="round-icon text-sm iconfont-envelope-alt"></i></span>
                                            <div class="list-content">156845688@qq.com</div>
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
    <?php $this->load->view("footer")?>
    <!-- // SITE FOOTER -->

</div>
<!-- // PAGE WRAPPER -->

<!-- Essential Javascripts -->

<!-- // Essential Javascripts -->

<script>



</script>
<!-- Particular Page Javascripts -->


<!-- // Particular Page Javascripts -->

</body>
</html>
<script>
    var loginUrl ='<?php echo site_url("LoginController/getAjax")?>';
    var loginCodeUrl = '<?php echo site_url('LoginController/yzm_login')?>';
    var indexUrl = '<?php echo site_url('IndexController/index')?>'
</script>
<script src="<?php echo base_url()?>js/user.js"></script>