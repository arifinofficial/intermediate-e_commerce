<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/colorbox.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/settings.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
	<link rel="stylesheet" title="style" href="<?php echo e(asset('assets/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/styleswitcher.css')); ?>">
	<link rel="alternate stylesheet" type="text/css" media="screen" title="green" href="<?php echo e(asset('assets/css/green.css')); ?>"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="lightblue" href="<?php echo e(asset('assets/css/lightblue.css')); ?>"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="orange" href="<?php echo e(asset('assets/css/orange.css')); ?>"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="yellow" href="<?php echo e(asset('assets/css/yellow.css')); ?>"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="red" href="<?php echo e(asset('assets/css/red.css')); ?>"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="color-5" href="<?php echo e(asset('assets/css/color-5.css')); ?>"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="color-6" href="<?php echo e(asset('assets/css/color-6.css')); ?>"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="color-7" href="<?php echo e(asset('assets/css/color-7.css')); ?>"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="color-8" href="<?php echo e(asset('assets/css/color-8.css')); ?>"/>
</head>
<body>
    <pre>
        debug session
        <?php 
            print_r(session('cart'));
        ?>
    </pre>
    <div id="app">
        <div id="header">
            <div class="header-top">
                <div class="container">
                    <div class="pull-left auto-width-left">
                        <ul class="top-menu menu-beta l-inline">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="pull-right auto-width-right">
                        <ul class="top-details menu-beta l-inline">
                            <li class="hidden-xs">
                                <select name="languages">
                                    <option value="en">English</option>
                                    <option value="ro">Romana</option>
                                    <option value="ru">Rusa</option>
                                </select>
                            </li>
                            <li class="hidden-xs">
                                <select name="currency">
                                    <option value="usd">USD</option>
                                    <option value="eur">EUR</option>
                                    <option value="ron">RON</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- .container -->
            </div> <!-- .header-top -->
            <div class="header-body">
                <div class="container beta-relative">
                    <div class="pull-left">
                        <a href="index.html" id="logo"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt=""></a>
                        <span class="slogan">a premium HTML Template</span>
                    </div>
                    <div class="pull-right beta-components space-left ov">
                        <div class="space10">&nbsp;</div>
                        <div class="beta-comp">
                            <form role="search" method="get" id="searchform" action="http://webredox.net/">
                                <input type="text" value="" name="s" id="s" placeholder="Search entire store here..." />
                                <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                            </form>
                        </div>
        
                        <div class="beta-comp">
                            <div class="cart">
                                <div class="beta-select"><i class="fa fa-shopping-cart"></i> Cart (empty) <i class="fa fa-chevron-down"></i></div>
                                <div class="beta-dropdown cart-body">
                                    <div class="cart-item">
                                        <a class="cart-item-edit" href="#"><i class="fa fa-pencil"></i></a>
                                        <a class="cart-item-delete" href="#"><i class="fa fa-times"></i></a>
                                        <div class="media">
                                            <a class="pull-left" href="#"><img src="<?php echo e(asset('assets/images/products/cart/1.png')); ?>" alt=""></a>
                                            <div class="media-body">
                                                <span class="cart-item-title">Sample Woman Top</span>
                                                <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                                <span class="cart-item-amount">1*<span>$49.50</span></span>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="cart-item">
                                        <a class="cart-item-edit" href="#"><i class="fa fa-pencil"></i></a>
                                        <a class="cart-item-delete" href="#"><i class="fa fa-times"></i></a>
                                        <div class="media">
                                            <a class="pull-left" href="#"><img src="<?php echo e(asset('assets/images/products/cart/2.png')); ?>" alt=""></a>
                                            <div class="media-body">
                                                <span class="cart-item-title">Sample Woman Top</span>
                                                <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                                <span class="cart-item-amount">1*<span>$49.50</span></span>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="cart-item">
                                        <a class="cart-item-edit" href="#"><i class="fa fa-pencil"></i></a>
                                        <a class="cart-item-delete" href="#"><i class="fa fa-times"></i></a>
                                        <div class="media">
                                            <a class="pull-left" href="#"><img src="<?php echo e(asset('assets/images/products/cart/3.png')); ?>" alt=""></a>
                                            <div class="media-body">
                                                <span class="cart-item-title">Sample Woman Top</span>
                                                <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                                <span class="cart-item-amount">1*<span>$49.50</span></span>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="cart-caption">
                                        <div class="cart-total text-right">Subtotal: <span class="cart-total-value">$34.55</span></div>
                                        <div class="clearfix"></div>
        
                                        <div class="center">
                                            <div class="space10">&nbsp;</div>
                                            <a href="checkout.html" class="beta-btn primary text-center">Checkout <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .cart -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- .container -->
            </div> <!-- .header-body -->
            <div class="header-bottom">
                <div class="container">
                    <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                    <div class="visible-xs clearfix"></div>
                    <nav class="main-menu">
                        <ul class="l-inline ov">
                            <li><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="home_10.html">Home Portfolio</a></li>
                                    <li><a href="home_4.html">Company Intro 1</a></li>
                                    <li><a href="home_5.html">Company Intro 2</a></li>
                                    <li><a href="home_7.html">Company Intro 3</a></li>
                                    <li><a href="home_6.html">Home Classic 1</a></li>
                                    <li><a href="home_8.html">Home Classic 2</a></li>
                                    <li><a href="home_9.html">Home Classic 3</a></li>
                                    <li><a href="index.html">Home Shop 1</a></li>
                                    <li><a href="home_2.html">Home Shop 2</a></li>
                                    <li><a href="home_3.html">Home Shop 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about_1.html">About 1</a></li>
                                    <li><a href="about_2.html">About 2</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="text_page.html">Text Page</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="accordion_toggles.html">Accordion and Toggles</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="custom_callout_box.html">Custom Callout Box</a></li>
                                    <li><a href="404.html">Page 404</a></li>
                                    <li><a href="under_construction.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li><a href="features.html">Features</a></li>
                            <li><a href="#">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio_type_a.html">Portfolio type A</a></li>
                                    <li><a href="#">Portfolio type B</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio_2col.html">Portfolio B - 2 Columns</a></li>
                                            <li><a href="portfolio_3col.html">Portfolio B - 3 Columns</a></li>
                                            <li><a href="portfolio_4col.html">Portfolio B - 4 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio_single.html">Portfolio Item</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog_fullwidth_1col.html">Blog Full Width</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog_fullwidth_2col.html">Blog Full Width - 2 Columns</a></li>
                                            <li><a href="blog_fullwidth_3col.html">Blog Full Width - 3 Columns</a></li>
                                            <li><a href="blog_fullwidth_4col.html">Blog Full Width - 4 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Type A</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog_with_sidebarleft_type_a.html">Blog A - Left Sidebar</a></li>
                                            <li><a href="blog_with_sidebarright_type_a.html">Blog A - Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog_with_sidebarleft_type_b.html">Blog Type B</a></li>
                                    <li><a href="#">Blog Type C</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog_with_sidebarleft_type_c.html">Blog C - Left Sidebar</a></li>
                                            <li><a href="blog_with_sidebarleft_type_c_2cols.html">Blog C - 2 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog_with_sidebarleft_type_d.html">Blog Type D</a></li>
                                    <li><a href="#">Blog Type E</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog_with_sidebarleft_type_e.html">Blog E - Left Sidebar</a></li>
                                            <li><a href="blog_with_2sidebars_type_e.html">Blog E - 2 Sidebars</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="index.html">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home Shop 1</a></li>
                                    <li><a href="home_2.html">Home Shop 2</a></li>
                                    <li><a href="home_3.html">Home Shop 3</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="shopping_cart.html">Shopping Cart</a></li>
                                    <li><a href="product.html">Product</a></li>
                                </ul>
                            </li>
                            <li><a href="contacts.html">Contact</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                </div> <!-- .container -->
            </div> <!-- .header-bottom -->
        </div> <!-- #header -->

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')); ?>"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="<?php echo e(asset('assets/vendors/bxslider/jquery.bxslider.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/colorbox/jquery.colorbox-min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/animo/Animo.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/dug/dug.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/scripts.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/styleswitcher.js')); ?>"></script>
</body>
</html>
