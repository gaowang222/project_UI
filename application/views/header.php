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