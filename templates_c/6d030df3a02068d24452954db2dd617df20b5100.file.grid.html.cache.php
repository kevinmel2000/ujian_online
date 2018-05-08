<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-01 11:09:00
         compiled from "templates\front-end\galio\grid.html" */ ?>
<?php /*%%SmartyHeaderCode:185185775d80a8e6d07-90542161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d030df3a02068d24452954db2dd617df20b5100' => 
    array (
      0 => 'templates\\front-end\\galio\\grid.html',
      1 => 1467346133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185185775d80a8e6d07-90542161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5775d80aad8568_70947605',
  'variables' => 
  array (
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5775d80aad8568_70947605')) {function content_5775d80aad8568_70947605($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Galio : Ecommerce Template</title>
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="HTMLCooker">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
		
		<!-- =============== Google fonts =============== -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		
		
		<!-- Font Awesome CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
		<!-- Animate CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/animate.css" rel="stylesheet">
		<!-- Owl Carousel CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/owl.carousel.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/style.css" rel="stylesheet">
		<!-- Local Style CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/local.css" rel="stylesheet">
		<!-- Responsive CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/responsive.css" rel="stylesheet">
		<!--[if lt IE 9]>
		  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
		  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
  </head>
  <body>
  <body>
  
  		<div class="header">
        	<div class="topbar">
            	<div class="container">
                	<div class="topbar-left">
                        <ul class="topbar-nav clearfix">
                            <li><span class="phone">0(123) 456 789</span></li>
                            <li><span class="email">info@plazathemes.com</span></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                    	<ul class="topbar-nav clearfix">
                        	<li><a href="#" class="login">Login</a></li>
                        	<li class="dropdown">
                            	<a href="#" class="account dropdown-toggle" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a title="My Account" href="account.html">My Account</a></li>
                                    <li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>
                                    <li><a title="My Cart" href="cart.html">My Cart</a></li>
                                    <li><a title="Checkout" href="success_order.html">Checkout</a></li>
                                    <li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>
                        		</ul>
                            </li>
                        	<li class="dropdown">
                            	<a href="#" class="currency dropdown-toggle" data-toggle="dropdown">USD</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Euro</a></li>
                                    <li><a href="#">US Dollar</a></li>
                                </ul>
                            </li>
                        	<li class="dropdown">
                            	<a href="#" class="language dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/flag-us.png" alt=""> English</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/flag-us.png" alt=""> &nbsp;English</a></li>
                                    <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/flag-spain.png" alt=""> &nbsp;Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <div class="header-bottom">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-3">
                        	<a href="#" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/logo.png" alt=""></a>
                        </div>
                        <div class="col-md-9">
                        	<div class="support-client">
                            	<div class="row">
                                	<div class="col-sm-4">
                                    	<div class="box-container time">
                                            <div class="box-inner">
                                            	<h2>working time</h2>
                                            	<p>Mon- Sun: 8.00 - 18.00</p>
                                            </div>
                                   		</div>
                                    </div>
                                    <div class="col-sm-4">
                                    	<div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>Free shipping</h2>
                                                <p>On order over $199</p>
                                            </div>
                                    	</div>
                                    </div>
                                    <div class="col-sm-4">
                                    	<div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>Money back 100%</h2>
                                                <p>Within 30 Days after delivery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->
                            <form class="form-search">
                            	<input type="text" class="input-text" name="q" id="search" placeholder="Search products...">
                                <div class="dropdown">
                                  	<button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
                                  	<ul class="dropdown-menu dropdown-menu-right">
                                    	<li><a href="#">Computer</a></li>
                                    	<li><a href="#">Camera</a></li>
                                    	<li><a href="#">Smart Phone</a></li>
                                    	<li><a href="#">Electronic</a></li>
                                  	</ul>
                                </div>
                                <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                            </form>
                            <div class="mini-cart">
                            	<div class="top-cart-title">
                                    <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown">
                                    	your cart
                                    	<span class="price">$45.00</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    	<div class="cart-listing">
                                        	<div class="media">
                                            	<div class="media-left"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/11.jpg" class="img-responsive" alt=""></a></div>
                                                <div class="media-body">
                                                	<button type="button" class="remove-cart-item" >&times;</button>
                                                	<h4>Accumsan elit</h4>
                                                    <div class="mini-cart-qty">Qty:2</div>
                                                    <div class="mini-cart-price">$ 64.00</div>
                                                </div>
                                            </div>
                                            <div class="media">
                                            	<div class="media-left"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/13.jpg" class="img-responsive" alt=""></a></div>
                                                <div class="media-body">
                                                	<button type="button" class="remove-cart-item" >&times;</button>
                                                	<h4>Accumsan elit</h4>
                                                    <div class="mini-cart-qty">Qty:2</div>
                                                    <div class="mini-cart-price">$ 64.00</div>
                                                </div>
                                            </div>
                                        </div><!-- /.cart-listing -->
                                        <div class="mini-cart-subtotal">Shipping: <span class="price">$5.00</span></div>
                                        <div class="mini-cart-subtotal">Total: <span class="price">$200.00</span></div>
                                        <div class="checkout-btn">
                                        	<a href="#" class="btn btn-default btn-md fwb">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-3">
                        	<div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3>Category</h3></div>
                                    <div class="mega-menu-category" style="display:none;">
                                    	<ul class="nav">
                                        	<li>
                                            	<a href="#">Computer</a>
                                                <div class="wrap-popup">
                                                    <div class="popup">
                                                        <div class="row">
                                                        	<div class="col-md-3">
                                                            	<h3>brand</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">canon</a></li>
                                                                    <li><a href="#">samsung</a></li>
                                                                    <li><a href="#">nikon</a></li>
                                                                    <li><a href="#">apple</a></li>
                                                                    <li><a href="#">toshiba</a></li>
                                                                    <li><a href="#">hp</a></li>
                                                                    <li><a href="#">nokia</a></li>
                                                                    <li><a href="#">Sony</a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-3 has-sep">
                                                            	<h3>accessories</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">Duis</a></li>
                                                                    <li><a href="#">autem </a></li>
                                                                    <li><a href="#">vel eum </a></li>
                                                                    <li><a href="#">iriure </a></li>
                                                                    <li><a href="#">dolor </a></li>
                                                                   	<li><a href="#">hendrerit </a></li>
                                                                    <li><a href="#">vulputate </a></li>
                                                                    <li><a href="#">velit </a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-6 has-sep">
                                                            	<div class="custom-menu-right">
                                                                    <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>bags &amp; cases</h3>
                                                                    		<div class="price-sale">40 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-01.jpg" alt=""></div>
                                                                     </div>
                                                                     <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>Lens Fulters</h3>
                                                                    		<div class="price-sale">50 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-02.jpg" alt=""></div>
                                                                     </div>
                                                                     <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>Flashes</h3>
                                                                    		<div class="price-sale">30 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-03.jpg" alt=""></div>
                                                                     </div>
                                                            	</div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <a href="#" class="ads"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/ads/ads-08.jpg" class="img-responsive"></a>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li>
                                            	<a href="#">Camera</a>
                                                <div class="wrap-popup">
                                                    <div class="popup">
                                                        <div class="row">
                                                        	<div class="col-md-3">
                                                            	<h3>brand</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">canon</a></li>
                                                                    <li><a href="#">samsung</a></li>
                                                                    <li><a href="#">nikon</a></li>
                                                                    <li><a href="#">apple</a></li>
                                                                    <li><a href="#">toshiba</a></li>
                                                                    <li><a href="#">hp</a></li>
                                                                    <li><a href="#">nokia</a></li>
                                                                    <li><a href="#">Sony</a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-3 has-sep">
                                                            	<h3>accessories</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">Duis</a></li>
                                                                    <li><a href="#">autem </a></li>
                                                                    <li><a href="#">vel eum </a></li>
                                                                    <li><a href="#">iriure </a></li>
                                                                    <li><a href="#">dolor </a></li>
                                                                   	<li><a href="#">hendrerit </a></li>
                                                                    <li><a href="#">vulputate </a></li>
                                                                    <li><a href="#">velit </a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-6 has-sep">
                                                            	<div class="custom-menu-right">
                                                                    <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>bags &amp; cases</h3>
                                                                    		<div class="price-sale">40 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-01.jpg" alt=""></div>
                                                                     </div>
                                                                     <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>Lens Fulters</h3>
                                                                    		<div class="price-sale">50 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-02.jpg" alt=""></div>
                                                                     </div>
                                                                     <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>Flashes</h3>
                                                                    		<div class="price-sale">30 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-03.jpg" alt=""></div>
                                                                     </div>
                                                            	</div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <a href="#" class="ads"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/ads/ads-08.jpg" class="img-responsive"></a>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li>
                                            	<a href="#">Smart phone</a>
                                                <div class="wrap-popup column2">
                                                    <div class="popup">
                                                        <div class="row">
                                                        	<div class="col-md-6">
                                                            	<h3>brand</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">canon</a></li>
                                                                    <li><a href="#">samsung</a></li>
                                                                    <li><a href="#">nikon</a></li>
                                                                    <li><a href="#">apple</a></li>
                                                                    <li><a href="#">toshiba</a></li>
                                                                    <li><a href="#">hp</a></li>
                                                                    <li><a href="#">nokia</a></li>
                                                                    <li><a href="#">Sony</a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-6 has-sep">
                                                            	<h3>accessories</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">Duis</a></li>
                                                                    <li><a href="#">autem </a></li>
                                                                    <li><a href="#">vel eum </a></li>
                                                                    <li><a href="#">iriure </a></li>
                                                                    <li><a href="#">dolor </a></li>
                                                                   	<li><a href="#">hendrerit </a></li>
                                                                    <li><a href="#">vulputate </a></li>
                                                                    <li><a href="#">velit </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li>
                                            	<a href="#">Destop</a>
                                                <div class="wrap-popup column2">
                                                    <div class="popup">
                                                        <div class="row">
                                                        	<div class="col-md-6">
                                                            	<h3>brand</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">canon</a></li>
                                                                    <li><a href="#">samsung</a></li>
                                                                    <li><a href="#">nikon</a></li>
                                                                    <li><a href="#">apple</a></li>
                                                                    <li><a href="#">toshiba</a></li>
                                                                    <li><a href="#">hp</a></li>
                                                                    <li><a href="#">nokia</a></li>
                                                                    <li><a href="#">Sony</a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-6 has-sep">
                                                            	<h3>accessories</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">Duis</a></li>
                                                                    <li><a href="#">autem </a></li>
                                                                    <li><a href="#">vel eum </a></li>
                                                                    <li><a href="#">iriure </a></li>
                                                                    <li><a href="#">dolor </a></li>
                                                                   	<li><a href="#">hendrerit </a></li>
                                                                    <li><a href="#">vulputate </a></li>
                                                                    <li><a href="#">velit </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li>
                                            	<a href="#">Tablet</a>
                                                <div class="wrap-popup column1">
                                                    <div class="popup">
                                                        <h3>brand</h3>
                                                        <ul class="nav">
                                                            <li><a href="#">canon</a></li>
                                                            <li><a href="#">samsung</a></li>
                                                            <li><a href="#">nikon</a></li>
                                                            <li><a href="#">apple</a></li>
                                                            <li><a href="#">toshiba</a></li>
                                                            <li><a href="#">hp</a></li>
                                                            <li><a href="#">nokia</a></li>
                                                            <li><a href="#">Sony</a></li>
                                                        </ul>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li class="nosub"><a href="#">Electtronic</a></li>    
                                            <li class="nosub"><a href="#">New arrivals</a></li>
                                            <li class="nosub"><a href="#">Bestseller</a></li>
                                            <li class="more-menu"><a href="#">Bags &amp; Cases</a></li>
                                            <li class="more-menu"><a href="#">Accessories</a></li>
                                            <li class="view-more"><a href="#">More category</a></li>
                                        </ul>
                                   	</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                        	<ul class="menu clearfix visible-lg visible-md">
                            	<li class="active"><a href="#">Home</a></li>
                            	<li><a href="#">Computer</a></li>
                            	<li><a href="#">camera</a></li>
                            	<li><a href="#">smart phone</a></li>
                            	<li><a href="#">electtronic</a></li>
                                <li><a href="#">new arrivals</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                  	<div class="container">
                    	<div class="navbar-header">
                      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                      		</button>
                            <h2 class="navbar-brand visible-xs">Menu</h2>
                    	</div>
                    	<div class="collapse navbar-collapse">
                      		<ul class="nav navbar-nav">
                            	<li class="active"><a href="#">Home</a></li>
                        		<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="#">Desktop PC</a></li>
                                    	<li><a href="#">Notebook</a></li>
                                    	<li><a href="#">Gaming</a></li>
                                    	<li><a href="#">Mouse &amp; Keyboard</a></li>
                                    </ul>
                                </li>
                            	<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="#">Walkera</a></li>
                                        <li><a href="#">Fpv System &amp; Parts</a></li>
                                        <li><a href="#">RC Cars &amp; Parts</a></li>
                                        <li><a href="#">Helicopters &amp; Part</a></li>
                                    </ul>
                                </li>
                            	<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>									<ul class="dropdown-menu">
                                        <li><a href="#">Accessories for iPhone</a></li>
                                        <li><a href="#">Accessories for iPad</a></li>
                                        <li><a href="#">Accessories for Tablet PC</a></li>
                                        <li><a href="#">Tablet PC</a></li>
                                    </ul>
                               	</li>
                            	<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Batteries &amp; Chargers</a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">New Arrivals</a></li>
                      		</ul>
                    	</div><!-- /.navbar-collapse -->
                  	</div><!-- /.container -->
                </nav>
            </div><!-- /.header-bottom -->
        </div><!-- /.header -->
        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                	<li><a href="#">Home</a></li>
                    <li class="active">Category Grid</li>
               	</ul>
            </div>
        </div>
        
        <div class="main">
        	<div class="container">
                <div class="row">
                	<div class="col-sm-3 col-left">
                    	<div class="block block-layered-nav">
                            <div class="block-title">
                                <strong><span>Sort By</span></strong>
                            </div>
                            <div class="block-content">
                                <p class="block-subtitle">Shopping Options</p>
                                <div id="narrow-by-list">
                                    <div class="layered layered-Category">
                                        <h2>Category</h2>
                                        <div class="content-shopby">
                                            <ol>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Bags</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">HandBag</a></li>
                                                <li><a href="#">Fashion</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="layered layered-price">
                                        <h2>Price</h2>
                                        <div class="content-shopby">
                                            <div id="slider-range"></div>
                                            <div id="search_pr">
                                                <input type="text" name="first_price" class="form-control">
                                                <input type="text" name="last_price" class="form-control">
                                                <button id="search_price" name="search_price" type="button" class="btn btn-default">SHOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layered layered-Manufacturer">
                                        <h2>Manufacturer</h2>
                                        <div class="content-shopby">
                                            <ol>
                                                <li><a href="#">Aliquam</a></li>
                                                <li><a href="#">Duis tempus id </a></li>
                                                <li><a href="#">Leo quis molestie. </a></li>
                                                <li><a href="#">Suspendisse </a></li>
                                                <li><a href="#">Nunc gravida </a></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="layered layered-Color">
                                        <h2>Color</h2>
                                        <div class="content-shopby">
                                        	<ol>
                                                <li><a href="#">Red</a></li>
                                                <li><a href="#">Orange</a></li>
                                                <li><a href="#">Blue</a></li>
                                                <li><a href="#">Black</a></li>
                                                <li><a href="#">Green</a></li>
                                           	</ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /sort -->
                    	<div class="block block-list">
                            <div class="block-title">
                                <strong><span>Compare</span></strong>
                            </div>
                            <div class="block-content">
                                <p class="empty">You have no items to compare.</p>
                           	</div>
                        </div><!-- /.compare -->
                    	<div class="banner-left"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/ads/ads-01.jpg" alt=""></a>
                            <div class="banner-content">
                            	<h1>sale up to</h1>
                            	<h2>20% off</h2>
                            	<p>on selected products</p>
                            	<a href="#">buy now</a>
                           	</div>
                        </div>
                        <div class="block">
                        	<div class="title-group"><h2>Special Offer</h2></div>
                            <div id="special-offer" class="owl-container">
                                <div class="owl">
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="#" title="Primis in faucibus" class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/15.jpg" alt="Primis in faucibus" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Primis in faucibus">Primis in faucibus</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:87%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Accumsan elit " class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/14.jpg" alt="Accumsan elit " />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Accumsan elit ">Accumsan elit </a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/5.jpg" alt="Nunc facilisis" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="Fusce aliquam" class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/8.jpg" alt="Fusce aliquam" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="h#" title="consequences" class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/9.jpg" alt="consequences" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="consequences">consequences</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:73%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Cras neque metus" class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/12.jpg" alt="Cras neque metus" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Cras neque metus">Cras neque metus</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title="Etiam gravida" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/4.jpg" alt="Etiam gravida" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Etiam gravida">Etiam gravida</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                    	<span class="price-label">Regular Price: </span><span class="price">$432.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$321.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="Donec non est" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/9.jpg" alt="Donec non est" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Donec non est">Donec non est</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                    	<span class="price-label">Regular Price: </span><span class="price">$721.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$631.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:73%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="#" title="pleasure rationally" class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/10.jpg" alt="pleasure rationally" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="pleasure rationally">pleasure rationally</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                    	<span class="price-label">Regular Price: </span><span class="price">$333.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$222.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title="Aliquam consequat" class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/5.jpg" alt="Aliquam consequat" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Aliquam consequat">Aliquam consequat</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title=" Donec ac tempus " class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/11.jpg" alt=" Donec ac tempus " />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title=" Donec ac tempus "> Donec ac tempus </a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="occaecati cupiditate" class="product-image">
                                                	<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/6.jpg" alt="occaecati cupiditate" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="occaecati cupiditate">occaecati cupiditate</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        	</div><!-- /.owl-container -->
                        </div><!-- /.block - Special offer -->
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                    	
                        <div class="toolbar">
                            <div class="sorter">
                                <p class="view-mode">
                                    <label>View as:</label>
                                    <strong class="grid" title="Grid">Grid</strong>&nbsp;
                                    <a class="list" title="List" href="#">List</a>&nbsp;
                                </p>
                            </div><!-- /.sorter -->
                            <div class="pager">
                                <div class="sort-by hidden-xs">
                                    <label>Sort By:</label>
                                    <select class="form-control input-sm">
                                        <option selected="selected">Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                    </select>
                                    <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                                </div>
                                <div class="limiter hidden-xs">
                                    <label>Show:</label>
                                    <div class="limiter-inner">
                                        <select class="form-control input-sm">
                                            <option>9</option>
                                            <option selected="selected">12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select> 
                                    </div>
                                </div>
                            </div><!-- /.pager -->
                        </div><!-- /.toolbar -->
                        <div class="category-products">
                        <ul class="products-grid  columns4">
    	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/138  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/138%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/138" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-black-m.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-black-m.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-black-m.html" title="Men Sports Watch-M" class="product-image">
                                            <img id="product-collection-image-138" class="defaultImage" src="16_3.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/6/16_3.jpg" alt="Men Sports Watch-M"/>
                        <img class="hoverImage" src="16_3-1.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/1/6/16_3.jpg" alt="Men Sports Watch-M"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-black-m.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-black-m.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-black-m.html" title="Men Sports Watch-M">Men Sports Watch-M</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-138">
                                            <span class="price">$320.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/138/form_key/EKJvgE5BmXvp79nt/','138');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                            <a href="javascript:void(0);" class="addtocart outofstock" title="Out of stock">Out of stock</span></a>
                                                                            <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/138/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','138');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/149  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/149%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/149" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-sony.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-sony.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-sony.html" title="Men Watch-Black-Sony" class="product-image">
                                            <img id="product-collection-image-149" class="defaultImage" src="16_10.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/6/16_10.jpg" alt="Men Watch-Black-Sony"/>
                        <img class="hoverImage" src="16_10-1.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/1/6/16_10.jpg" alt="Men Watch-Black-Sony"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-sony.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-sony.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-sony.html" title="Men Watch-Black-Sony">Men Watch-Black-Sony</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-149">
                                            <span class="price">$204.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/149/form_key/EKJvgE5BmXvp79nt/','149');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                            <a href="javascript:void(0);" class="addtocart outofstock" title="Out of stock">Out of stock</span></a>
                                                                            <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/149/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','149');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/150  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/150%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/150" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-indigo-camel.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-indigo-camel.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-indigo-camel.html" title="Men Watch-Indigo" class="product-image">
                                            <img id="product-collection-image-150" class="defaultImage" src="18_11.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/8/18_11.jpg" alt="Men Watch-Indigo"/>
                        <img class="hoverImage" src="20_4.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/0/20_4.jpg" alt="Men Watch-Indigo"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-indigo-camel.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-indigo-camel.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-indigo-camel.html" title="Men Watch-Indigo">Men Watch-Indigo</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-150">
                                            <span class="price">$200.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/150/form_key/EKJvgE5BmXvp79nt/','150');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                            <a href="javascript:void(0);" class="addtocart outofstock" title="Out of stock">Out of stock</span></a>
                                                                            <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/150/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','150');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/151  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/151%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/151" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-blue-seiko.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-blue-seiko.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-blue-seiko.html" title="Men Watch-Blue-Seiko" class="product-image">
                                            <img id="product-collection-image-151" class="defaultImage" src="21_8.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/2/1/21_8.jpg" alt="Men Watch-Blue-Seiko"/>
                        <img class="hoverImage" src="21_8-1.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/1/21_8.jpg" alt="Men Watch-Blue-Seiko"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-blue-seiko.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-blue-seiko.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-blue-seiko.html" title="Men Watch-Blue-Seiko">Men Watch-Blue-Seiko</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-151">
                                            <span class="price">$204.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/151/form_key/EKJvgE5BmXvp79nt/','151');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onClick="setLocationAjax(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/checkout/cart/add/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/product/151/form_key/EKJvgE5BmXvp79nt/','151')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                                                                        <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/151/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','151');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/152  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/152%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/152" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch.html" title="Men Watch" class="product-image">
                                            <img id="product-collection-image-152" class="defaultImage" src="15_2.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/5/15_2.jpg" alt="Men Watch"/>
                        <img class="hoverImage" src="15_2-1.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/1/5/15_2.jpg" alt="Men Watch"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch.html" title="Men Watch">Men Watch</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-152">
                                            <span class="price">$290.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/152/form_key/EKJvgE5BmXvp79nt/','152');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                                                            <a href="javascript:showOptions('152')" class="addtocart" title="Add to Cart"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/ajaxcart/index/options/product_id/152/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/ajaxcart/index/options/product_id/152/%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/ajaxcart/index/options/product_id/152/" class='fancybox' id='fancybox152' style='display:none'>Options</a>
                                                                                                        <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/152/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','152');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/153  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/153%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/153" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-black.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-black.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-black.html" title="Men Watch-Black" class="product-image">
                                            <img id="product-collection-image-153" class="defaultImage" src="15_11.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/5/15_11.jpg" alt="Men Watch-Black"/>
                        <img class="hoverImage" src="15_11-1.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/1/5/15_11.jpg" alt="Men Watch-Black"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-black.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-black.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-black.html" title="Men Watch-Black">Men Watch-Black</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-153">
                                            <span class="price">$390.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/153/form_key/EKJvgE5BmXvp79nt/','153');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onClick="setLocationAjax(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/checkout/cart/add/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/product/153/form_key/EKJvgE5BmXvp79nt/','153')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                                                                        <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/153/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','153');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/154  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/154%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/154" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-blue.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-blue.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-blue.html" title="Men Watch-Blue" class="product-image">
                                            <img id="product-collection-image-154" class="defaultImage" src="17_16.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/7/17_16.jpg" alt="Men Watch-Blue"/>
                        <img class="hoverImage" src="19_13.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/1/9/19_13.jpg" alt="Men Watch-Blue"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-blue.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-blue.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-blue.html" title="Men Watch-Blue">Men Watch-Blue</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-154">
                                            <span class="price">$850.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/154/form_key/EKJvgE5BmXvp79nt/','154');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onClick="setLocationAjax(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/checkout/cart/add/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/product/154/form_key/EKJvgE5BmXvp79nt/','154')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                                                                        <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/154/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','154');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/155  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/155%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/155" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-brown.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-brown.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-brown.html" title="Men Watch-Brown" class="product-image">
                                            <img id="product-collection-image-155" class="defaultImage" src="19_12.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/9/19_12.jpg" alt="Men Watch-Brown"/>
                        <img class="hoverImage" src="20_5.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/0/20_5.jpg" alt="Men Watch-Brown"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-brown.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-brown.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-brown.html" title="Men Watch-Brown">Men Watch-Brown</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-155">
                                            <span class="price">$90.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/155/form_key/EKJvgE5BmXvp79nt/','155');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onClick="setLocationAjax(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/checkout/cart/add/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/product/155/form_key/EKJvgE5BmXvp79nt/','155')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                                                                        <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/155/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','155');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/156  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/156%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/156" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-grey.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-grey.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-grey.html" title="Men Watch-Grey" class="product-image">
                                            <img id="product-collection-image-156" class="defaultImage" src="15_9.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/5/15_9.jpg" alt="Men Watch-Grey"/>
                        <img class="hoverImage" src="19_11.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/1/9/19_11.jpg" alt="Men Watch-Grey"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-grey.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-grey.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-watch-grey.html" title="Men Watch-Grey">Men Watch-Grey</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-156">
                                            <span class="price">$290.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/156/form_key/EKJvgE5BmXvp79nt/','156');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onClick="setLocationAjax(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/checkout/cart/add/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/product/156/form_key/EKJvgE5BmXvp79nt/','156')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                                                                        <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/156/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','156');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/148  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/148%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/148" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-camel.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-camel.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-camel.html" title="Men Watch-Black-Camel" class="product-image">
                                            <img id="product-collection-image-148" class="defaultImage" src="20_3.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/2/0/20_3.jpg" alt="Men Watch-Black-Camel"/>
                        <img class="hoverImage" src="20_3-1.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/0/20_3.jpg" alt="Men Watch-Black-Camel"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-camel.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-camel.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-black-camel.html" title="Men Watch-Black-Camel">Men Watch-Black-Camel</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-148">
                                            <span class="price">$195.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/148/form_key/EKJvgE5BmXvp79nt/','148');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onClick="setLocationAjax(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/checkout/cart/add/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/product/148/form_key/EKJvgE5BmXvp79nt/','148')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                                                                        <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/148/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','148');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/147  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/147%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/147" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-brown-camel.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-brown-camel.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-brown-camel.html" title="Men Watch-Brown-Camel" class="product-image">
                                            <img id="product-collection-image-147" class="defaultImage" src="16_8.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/6/16_8.jpg" alt="Men Watch-Brown-Camel"/>
                        <img class="hoverImage" src="19_7.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/1/9/19_7.jpg" alt="Men Watch-Brown-Camel"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-brown-camel.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-brown-camel.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-fashion-watch-brown-camel.html" title="Men Watch-Brown-Camel">Men Watch-Brown-Camel</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-147">
                                            <span class="price">$159.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/147/form_key/EKJvgE5BmXvp79nt/','147');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onClick="setLocationAjax(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/checkout/cart/add/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/product/147/form_key/EKJvgE5BmXvp79nt/','147')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                                                                        <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/147/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','147');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
        	            <li class="item"><div class="item-area">
            <div class="product-image-area">
                    <div class="loader-container">
                        <div class="loader">
                            <i class="ajax-loader medium animate-spin"></i>
                        </div>
                    </div>
                                            <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/139  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/139%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/quickview/index/view/id/139" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                        <a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-blue-l.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-blue-l.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-blue-l.html" title="Men Sports Watch-Blue-L" class="product-image">
                                            <img id="product-collection-image-139" class="defaultImage" src="17_1_1.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/1/7/17_1_1.jpg" alt="Men Sports Watch-Blue-L"/>
                        <img class="hoverImage" src="21_1_1.jpg" tppabs="http://newsmartwave.net/magento/porto/media/catalog/product/cache/7/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/1/21_1_1.jpg" alt="Men Sports Watch-Blue-L"/>
                                                                                                        </a>
                                                        </div>
                <div class="details-area">
                    <h2 class="product-name"><a href="javascript:if(confirm(%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-blue-l.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-blue-l.html%27" tppabs="http://newsmartwave.net/magento/porto/index.php/demo4_en/fashion/men/accessories/men-sports-watch-blue-l.html" title="Men Sports Watch-Blue-L">Men Sports Watch-Blue-L</a></h2>
                    					                                            <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:0"></div>
						</div>
						</div>
					                                        					                                        

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-139">
                                            <span class="price">$340.00</span>                                    </span>
                        
        </div>

                                                            <div class="actions">
                                                                        <a href="javascript:void(0)" onClick="ajaxWishlist(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/wishlist/index/add/product/139/form_key/EKJvgE5BmXvp79nt/','139');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                                            <a href="javascript:void(0);" class="addtocart outofstock" title="Out of stock">Out of stock</span></a>
                                                                            <a href="javascript:void(0)" onClick="ajaxCompare(this,'http://newsmartwave.net/magento/porto/index.php/demo4_en/catalog/product_compare/add/product/139/uenc/aHR0cDovL25ld3NtYXJ0d2F2ZS5uZXQvbWFnZW50by9wb3J0by9pbmRleC5waHAvZGVtbzRfZW4vZmFzaGlvbi9tZW4vYWNjZXNzb3JpZXMuaHRtbA,,/form_key/EKJvgE5BmXvp79nt/','139');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                <div class="clearer"></div>
                    </div>
                                    </div>
            </div></li>
                </ul>
                        </div>       
                        
                        <div class="row products">
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/8.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/3.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/21.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/6.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/10.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/14.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/20.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/1.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/2.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/3.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/4.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/5.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/6.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/7.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/1.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/2.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/4.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                                <div class="sale-icon"><span>sale</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/5.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/6.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/7.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.product -->
                        <div class="toolbar">
                            <div class="sorter">
                                <p class="view-mode">
                                    <label>View as:</label>
                                    <strong class="grid" title="Grid">Grid</strong>&nbsp;
                                    <a class="list" title="List" href="#">List</a>&nbsp;
                                </p>
                            </div><!-- /.sorter -->
                            <div class="pager">
                                <div class="sort-by hidden-xs">
                                    <label>Sort By:</label>
                                    <select class="form-control input-sm">
                                        <option selected="selected">Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                    </select>
                                    <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                                </div>
                                <div class="limiter hidden-xs">
                                    <label>Show:</label>
                                    <div class="limiter-inner">
                                        <select class="form-control input-sm">
                                            <option>9</option>
                                            <option selected="selected">12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select> 
                                    </div>
                                </div>
                            </div><!-- /.pager -->
                        </div><!-- /.toolbar -->
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->
        
        <div class="catlist">
            <div class="container">
                <div class="title-group1">
                    <h2>Top Categories</h2>
                </div> 
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="image-cat">
                                    <a href="#/"><img alt="Electronic" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-05.jpg"></a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="name-cat"><h3>Electronics</h3></div>
                                <a class="view-more" href="#">view more</a>
                            </div>
                        </div>
                        <div class="list-cat">
                            <ul>
                                <li><a href="#">Batteries &amp; Chargers</a></li>
                                <li><a href="#">Headphone, Headset</a></li>
                                <li><a href="#">Home Audio</a></li>
                                <li><a href="#">Mp3 Player Accessories</a></li>
                            </ul>
                        </div>
                   	</div>
                   	<div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="image-cat">
                                    <a href="#/"><img alt="Electronic" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-06.jpg"></a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="name-cat"><h3>jewelry &amp; watches</h3></div>
                                <a class="view-more" href="#">view more</a>
                            </div>
                        </div>
                        <div class="list-cat">
                            <ul>
                                <li><a href="#">Men Watches</a></li>
                                <li><a href="#">Wedding Rings</a></li>
                                <li><a href="#">Earring</a></li>
                                <li><a href="#">Necklaces</a></li>
                            </ul>
                        </div>
                   	</div>
                   	<div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="image-cat">
                                    <a href="#/"><img alt="Electronic" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-07.jpg"></a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="name-cat"><h3>Smartphones &amp; tablets</h3></div>
                                <a class="view-more" href="#">view more</a>
                            </div>
                        </div>
                        <div class="list-cat">
                            <ul>
                                <li><a href="#">Accessories for iPhone</a></li>
                                <li><a href="#">Accessories for iPad</a></li>
                                <li><a href="#">Accessories for Tablet PC</a></li>
                                <li><a href="#">Tablet PC</a></li>
                            </ul>
                        </div>
                   	</div>
                   	<div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="image-cat">
                                    <a href="#/"><img alt="Electronic" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/products/img-08.jpg"></a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="name-cat"><h3>camera &amp; hobbies</h3></div>
                                <a class="view-more" href="#">view more</a>
                            </div>
                        </div>
                        <div class="list-cat">
                            <ul>
                                <li><a href="#">Walkera</a></li>
                                <li><a href="#">Fpv System &amp; Parts</a></li>
                                <li><a href="#">RC Cars &amp; Parts</a></li>
                                <li><a href="#">Helicopters &amp; Part</a></li>
                            </ul>
                        </div>
                   	</div>
                </div>
            </div>
        </div><!-- /.catlist -->
        
        <div class="brands">
            <div class="container">
                <div class="title-group1">
                    <h2>popular brand</h2>
                </div>
                <div id="brands" class="owl-container">
                    <div class="owl">
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand5.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand4.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand3.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand3.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div><!-- /#brands -->
            </div>
        </div><!-- /.brands -->
        
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                	<div class="row">
                    	<div class="col-md-4 col-sm-4 hidden-sm hidden-xs">
                        	<div class="subscribe">
                                <div class="subscribe-inner">
                                    <h3>Sign up for newsletter</h3>
                                    Duis autem vel eum iriureDuis autem vel eum
                                </div>
                            </div>
                        </div>
                    	<div class="col-md-5 col-sm-8">
                        	<form method="post" class="form-inline form-subscribe">
                                <div class="form-group">
                                	<input type="text" class="form-control" id="newsletter" name="email">
                                </div>
                                <button class="btn btn-danger" title="Subscribe" type="submit">Subscribe</button>
        					</form>
                        </div>
                    	<div class="col-md-3 col-sm-4">
                        	<ul class="social">
                                <li><a href="#" class="face">face</a></li>
                                <li><a href="#" class="google">google</a></li>
                                <li><a href="#" class="twitter">twitter</a></li>
                                <li><a href="#" class="youtube">youtube</a></li>
                                <li><a href="#" class="linkedin">linkedin</a></li>
                            </ul>
                        </div>
                    </div>
           		</div>
            </div><!-- /.footer-top -->
            <div class="footer-middle">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>contact us</h2>
                            </div>
                            <div class="footer-content">
                            	<div class="email add">
                            		<p>Support@plazathemes.com</p>
                            	</div>
                            	<div class="phone add">
                            		<p>(800) 0123 456 789</p>
                            	</div>
                            	<div class="address add">Address: 
                            		<p>1234 - Bandit Tringi lAliquam Vitae. New York</p>
                            	</div>
                            	<div class="contact-link"><a href="#" class="btn btn-default">Open in Google Maps</a></div>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>MY ACCOUNT</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>Payment &amp; Shipping</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">Locations We Ship To</a></li>
                                    <li><a href="#">Estimated Delivery Time</a></li>
                                </ul>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>Customer Service</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Shipping Policy</a></li>
                                    <li><a href="#">Compensation First</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-6">
                        	<div class="copy">Copyright &copy; 2015 Plazathemes. All Rights Reserved</div>
                        </div>
                    	<div class="col-sm-6">
                        	<div class="payment"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/payment.png" alt="" class="img-responsive"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.footer -->
        
		<!-- Jquery Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<!-- Bootstrap Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<!-- Owl Carousel Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
		<!-- Jquery ui Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<!-- Custom Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
		
        <?php echo '<script'; ?>
 type="text/javascript">
			jQuery(document).ready(function(){
				/* slider price */
				var currencies = "$";
				var toolbar_status = "1";
				var rate = "1";
				var min = "99"
					min = Number(min);
				var max = "999"
					max = Number(max);
				var currentMinPrice = "99"
					currentMinPrice = Number(currentMinPrice);
				var currentMaxPrice = "999"
				//alert('min: '+min+'--max: '+ max+ 'currentMin: '+currentMinPrice);
				currentMaxPrice = Number(currentMaxPrice);
				var params = "";
				params = $.trim(params);
				//slider
				$( "#slider-range" ).slider({
					range: true,
					min: min,
					max: max,
					values: [ currentMinPrice, currentMaxPrice ],
					slide: function( event, ui ) {
						$( "#amount" ).val( currencies + ui.values[ 0 ] + " - "+ currencies + ui.values[ 1 ] );
						$('input[name="first_price"]').val(ui.values[0]);
						$('input[name="last_price"]').val(ui.values[1]);
					},
					stop: function( event, ui ) {
					}
				});
		
				$( "#amount" ).val( currencies + $( "#slider-range" ).slider( "values", 0 ) +
					" - "+currencies + $( "#slider-range" ).slider( "values", 1 ) );
				$('input[name="first_price"]').val($( "#slider-range" ).slider( "values", 0 ));
				$('input[name="last_price"]').val($( "#slider-range" ).slider( "values", 1 ));   
				 
				//search price from input box
				$('#search_price').each(function(){
					$(this).live('click',function(){
						return false;
					})
				});
				$('#slider-range a:first').addClass('first_item');
				$('#slider-range a:last').addClass('last_item');
				
			});
		<?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
