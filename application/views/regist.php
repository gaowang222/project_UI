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
                                            <input type="text" class="form-control" id="login_name" name="login_name" data-validate="^[�-�\w\s]{2,30}$" require placeholder="账号必填"/>
                                            <span></span>
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="passwd" class="required">密码</label>
                                            <input type="password" class="form-control" id="passwd" name="passwd" data-validate="^[_A-Za-z0-9-\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$" require placeholder="密码必填"/>
                                            <span></span>
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="usercode" class="required">验证码</label>
                                            <input type='text' placeholder="请输入验证码" class='form-control' name="usercode" id="usercode">
                                            <img src="<?php echo base_url() ?>code/code.php" id="mycode" alt="验证码" style="position: relative;margin-top:-54px;left:70%;cursor: pointer">
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="tel" class="required">手机号</label>
                                            <input type="tel" class="form-control" id="tel" name="tel" data-validate="^[_A-Za-z0-9-\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$" require placeholder="手机号必填"/>
                                            <span></span>
                                        </div>
                                        <div class="form-group stylish-input">
                                            <label for="loginaddress" class="required">地址</label>
                                            <input type="text" class="form-control" id="loginaddress" name="loginaddress" data-validate="^[_A-Za-z0-9-\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$" require placeholder="地址必填"/>
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