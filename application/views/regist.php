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
                                <a href="<?php echo site_url('ContactusController')?>">联系我们</a>
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
    <!-- 编辑器使用的==配置文件 start -->
    <script type="text/javascript" src="<?php echo base_url()?>public/plug/ue/ueditor.config.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/plug/ue/ueditor.all.js"></script>
    <!--  编辑器使用的==配置文件 end -->
    <!-- // SITE HEADER -->

    <!-- BREADCRUMB -->

    <!-- // BREADCRUMB -->

    <!-- SITE MAIN CONTENT -->
    <main id="main-content" role="main">

        <div class="container">
            <div class="row">
                <section class="section">
                    <section class="col-xs-12 col-sm-8 col-md-9">

                        <h3 class="uppercase text-bold"><span class="text-xs">亲爱的用户，你好！欢迎来到注册页面</span></h3>
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
                                            <label for="usercode" class="required">验证码</label>
                                            <input type='text' placeholder="请输入验证码" class='form-control' name="usercode" id="usercode">
                                            <img src="<?php echo site_url('RegistController/yzm_regist')?>" id="mycode" alt="验证码" style="position: relative;margin-top:-54px;left:70%;cursor: pointer">
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="tel" class="required">手机号</label>
                                            <input type="tel" class="form-control" id="tel" name="tel" require placeholder="手机号必填"/>
                                            <span></span>
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="loginaddress" class="required">地址</label>
                                            <input type="text" class="form-control" id="loginaddress" name="loginaddress" require placeholder="地址必填"/>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <button type="button" id="j_upload_img_btn" class="btn btn-info">上传头像</button>

                                                <ul id="upload_img_wrap"  name="userImg" ></ul>
                                                <!-- 传图片地址值用的 -->
                                                <input type="hidden" id="userImg" name="userImg" >

                                                <!-- 加载编辑器的容器：用来上传图片的，必须要，不然上传的图片会追加到上面的编辑器里面 -->
                                                <ul id="uploadEditor">

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space10"></div>
                                    <div class="col-xs-4 col-sm-4">
                                        <button class="btn btn-danger btn-round pull-left" id="registBtn">点我注册</button>
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
    var registUrl ='<?php echo site_url("RegistController/getAjax")?>';
    var registCodeUrl = '<?php echo site_url('RegistController/yzm_regist')?>';
    var loginUrl = '<?php echo site_url("LoginController/index") ?>';
</script>
<script type="text/javascript">
    //var ue = UE.getEditor('detail'); //detail是需要加载编辑器的id


    //==========================================================
    // 如何单独上传图片功能
    // 监听多图上传和上传附件组件的插入动作
    // 这里需要实例化一个新的编辑器，防止和上面的编辑器的内容冲突
    var uploadEditor = UE.getEditor("uploadEditor", {
        isShow: false,
        focus: false,
        enableAutoSave: false,
        autoSyncData: false,
        autoFloatEnabled:false,
        wordCount: false,
        sourceEditor: null,
        scaleEnabled:true,
        toolbars: [["insertimage", "attachment"]]
    });
    uploadEditor.ready(function () {
        uploadEditor.addListener("beforeInsertImage", _beforeInsertImage);
    });

    // 自定义按钮绑定触发多图上传和上传附件对话框事件
    document.getElementById('j_upload_img_btn').onclick = function () {
        var dialog = uploadEditor.getDialog("insertimage");
        dialog.title = '多图上传';
        dialog.render();
        dialog.open();
    };

    // 多图上传动作
    function _beforeInsertImage(t, result) {
        var imageHtml = '';
        var imgval = '';
        for(var i in result){
            imageHtml += '<li><img src="'+result[i].src+'" alt="'+result[i].alt+'" height="150"></li>';
            imgval += result[i].src;
        }
        document.getElementById('upload_img_wrap').innerHTML = imageHtml;
        //如果需要保存图片地址到数据，还需要把所有的图片地址作为输入值
        //具体怎么设置看项目需求，我这里只是举个例子
        document.getElementById('userImg').value = imgval;
    }
</script >
<script src="<?php echo base_url()?>js/user.js"></script>