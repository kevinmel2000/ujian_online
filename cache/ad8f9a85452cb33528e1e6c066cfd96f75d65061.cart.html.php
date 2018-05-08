<?php /*%%SmartyHeaderCode:26559577efb8c47e561-38672797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad8f9a85452cb33528e1e6c066cfd96f75d65061' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\cart.html',
      1 => 1469855553,
      2 => 'file',
    ),
    '58a5b28cc3d8e04dfebe2eea1998e05194edf0eb' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\head.html',
      1 => 1469594534,
      2 => 'file',
    ),
    '4a370cb10cfc06bc1ff3589ca0ef7c820797eec6' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\header.html',
      1 => 1470280484,
      2 => 'file',
    ),
    '2070f4031deb0dca7376c86a335f0e8c0f9e6f02' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\footer.html',
      1 => 1468210083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26559577efb8c47e561-38672797',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a2b96f6230b0_72832713',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2b96f6230b0_72832713')) {function content_57a2b96f6230b0_72832713($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gomochart : Ecommerce Template</title>
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
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/bootstrap.min.css" rel="stylesheet">
		
                                
                                
                <!-- Animate CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/animate.css" rel="stylesheet">
		<!-- Owl Carousel CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/owl.carousel.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/style.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/style-green.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/local.css" rel="stylesheet">
		<!-- Responsive CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/responsive.css" rel="stylesheet">
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.http://192.168.1.101/gomocart/templates/front-end/accecories/js/1.4.2/respond.min.js"></script>
		<![endif]-->
                
                
    <script type="text/javascript">
        var home_url = 'http://192.168.1.101/gomocart';
    </script>
  </head>
    <body> 
                <div class="header">
    <div class="topbar">
        <div class="container">
            <div class="topbar-left">
                <ul class="topbar-nav clearfix">
                    <li><span class="phone">0822 4442 5880&nbsp;</span></li>
                    <li><span class="email">inagrosir@gmail.com&nbsp;</span></li>
                </ul>
            </div>
            <div class="topbar-right">
                <ul class="topbar-nav clearfix">
                     
                        <li><a href="http://192.168.1.101/gomocart/member/logout.php" class="logout">Logout</a></li>
                        <li class="dropdown">
                            <a href="#" class="account dropdown-toggle" data-toggle="dropdown">Profil Saya <span class="label label-danger">6</span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a title="Edit Profil" href="http://192.168.1.101/gomocart/member/editprofil.php">Edit Profil</a></li>
                                <li><a title="Ganti Password" href="http://192.168.1.101/gomocart/member/gantipassword.php">Ganti Password</a></li>
                                <li><a title="My Wishlist" href="http://192.168.1.101/gomocart/wishlist/">Wishlist</a></li>
                                <li><a title="My Cart" href="http://192.168.1.101/gomocart/cart/">Keranjang Belanja <span class="label label-danger"></span></a></li>
                                <li><a title="Checkout" href="http://192.168.1.101/gomocart/cart/checkout.php">Checkout</a></li>
                                <li><a title="Konfirmasi Pembayaran" href="http://192.168.1.101/gomocart/pembayaran/">Konfirmasi Pembayaran</a></li>
                                <li><a title="Histori Pesanan" href="http://192.168.1.101/gomocart/pemesanan/">Histori Pesanan <span class="label label-danger">2</span></a></li>                                
                                <li><a title="Message" href="http://192.168.1.101/gomocart/message/">Message <span class="label label-danger">4</span></a></li>
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
                    <a href="http://192.168.1.101/gomocart" class="logo"><img src="http://192.168.1.101/gomocart/uploads/umum/2379.png" alt=""></a>
                </div>
                <div class="col-md-9">
                    <div class="support-client">
                    </div><!-- /.support-client -->
                   
                        <form class="form-search" action="http://192.168.1.101/gomocart/search/" method="GET">
                            <input type="text" class="input-text" name="query" id="search" placeholder="Cari Produk...">
                            <!-- div class="dropdown">
                                    <button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                                                                <li><a href="#">Agraris</a></li>
                                                                                <li><a href="#">Pakaian</a></li>
                                                                                <li><a href="#">Mobil & Sepeda Motor</a></li>
                                                                                <li><a href="#">Kecantikan & Perawatan Diri</a></li>
                                                                                <li><a href="#">Layanan Bisnis</a></li>
                                                                                <li><a href="#">Bahan Kimia</a></li>
                                                                                <li><a href="#">Komputer & Software</a></li>
                                                                                <li><a href="#">Konstruksi & Properti</a></li>
                                                                                <li><a href="#">Electronik Konsumen</a></li>
                                                                            
                                    </ul>
                            </div -->
                            <button type="submit" class="btn btn-danger" style="float: right;"><span class="fa fa-search"></span></button>
                        </form>
                    
                    <div class="mini-cart">
                        <div class="top-cart-title">
                            <a href="http://192.168.1.101/gomocart/cart/" class="dropdown-toggle" data-toggle="dropdown">
                                your cart
                                <span class="price">Rp 35,000</span>
                            </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                <div class="cart-listing">
                                                                                                            <div class="media">
                                        <div class="media-left"><a href="http://192.168.1.101/gomocart/detail.php?id=3"><img src="http://192.168.1.101/gomocart/store/centercrop.php?url=http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png&width=70&height=70" alt="Lorry Wheel" class="img-responsive"></a></div>
                                        <div class="media-body">
                                                <button id_item_cart="0" type="button" class="remove-cart-item hapus_item_cart" >&times;</button>
                                                <h4>Lorry Wheel</h4>
                                            <div class="mini-cart-qty">Qty: 1</div>
                                            <div class="mini-cart-price">Rp. 35,000</div>
                                        </div>
                                    </div>
                                                                                                            
                                </div><!-- /.cart-listing -->
                                                                                                <div class="mini-cart-subtotal">Total: <span class="price">Rp 35,000</span></div>
                                <div class="checkout-btn">
                                        <a href="http://192.168.1.101/gomocart/cart/" class="btn btn-default btn-md">CART</a>
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
                            <div class="mega-menu-title"><h3>Kategori</h3></div>
                            <div class="mega-menu-category" style="display:none;">
                                <ul class="nav">
                                                                                                            <li>
                                                                                <a href="#">Agraris</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=681">Pertanian</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=682">Agen Produk Pertanian</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=683">Peternakan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=684">Kacang</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=685">Rokok & Tembakau</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=686">Kakao</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=687">Kelapa</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=688">Kopi</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=689">Sayuran Dehidrasi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=690">Telur</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=691">Alat & Mesin Pertanian</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=692">Pupuk</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=693">Perikanan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=694">Makanan Ternak</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=695">Makanan & Minuman</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=696">Buah- Buahan</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=697">Gandum</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=698">Jamur </a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=699">Kacang & Biji</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=700">Pestisida</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=701">Minyak Hewan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=702">Bibit Tanaman</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=703">Kentang</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=704">Unggas & Ternak</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=705">Rumput Laut</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=706">Rempah - Rempah & Bumbu</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=707">Teh</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=708">Sayur - Sayuran</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=709">Pertanian Lainnya</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=712">Beras</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=724">Budidaya Laut</a></li>
                                                                                                                                                                                                                                            
                                                    </ul>
                                                    </div>                                                            
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                                                        <li>
                                                                                <a href="#">Pakaian</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=515">Baju Batik</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=517">Baju Muslim</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=521">Jas dan Tuxedo </a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=566">Rak</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=596">Agen Pakaian</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=597">Mesin Jahit</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=598">Suku Cadang Mesin Pakaian</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=599">Pakaian Bayi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=600">Jubah Mandi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=601">Pakaian Anak - Anak</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=602">Mantel</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=603">Gaun</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=604">Pakaian Etnis</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=605">Aksesories Pakaian</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=606">Jaket</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=607">Manekin</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=608">Baju Hamil</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=609">Kemeja Pria</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=610">Baju Tidur</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=611">Celana & Jeans</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=612">Kostum Pesta</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=613">Pakainan Lainnya</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=721">Suku Cadang Mesin Jahit</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=722">Peralatan Mesin Jahit</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                                
                                                                                                                
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                                                        <li>
                                                                                <a href="#">Mobil & Sepeda Motor</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=288">ATV</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=289">Peralatan Perawatan Mobil</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=290">Produk Perawatan Mobil</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=291">Aksesoris Mobil</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=292">Aksessories Motor</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=293">Suku Cadang Sepeda Motor</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=294">Suku Cadang Mobil</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=295">Agen Mobil</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=296">Agen Sepeda Motor</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=297">Oli & Pelumas</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=298">Ban</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=299">Aki Mobil</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=300">Radiator</a></li>
                                                                                                                                                                                                                                            
                                                    </ul>
                                                    </div>                                                            
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                                                        <li>
                                                                                <a href="#">Kecantikan & Perawatan Diri</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=55">Perlengkapan Mandi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=56">Peralatan Kecantikan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=57">Agen Produk Kecantikan</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=58">Peralatan & Perlengkapan Makeup</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=59">Produk Tato</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=60">Perawatan Kulit</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=61">Perlengkapan Manicure & Pedicure</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=62">Spa </a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=63">Perawatan & Perlengkapan Rambut</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                                
                                                                                                                
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                                                        <li>
                                                                                <a href="#">Layanan Bisnis</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=463">Pendidikan & Pelatihan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=464">Jasa Keuangan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=465">Jasa Keamanan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=466">Jasa Kontruksi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=467">Jasa Hukum</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=468">Jasa Pembiayaan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=469">Jasa Telekomunikasi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=471">Jasa Desain Website</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=472">Konsultasi Investasi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=473">Konsultasi Perdagangan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=474">Jasa Desain Dekorasi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=475">Jasa Penerjemah</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=476">Jasa Percetakan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=477">Jasa Desain</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=478">Karakter Desain Layanan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=479">Agen Iklan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=480">Agen Asuransi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=481">Produksi Audio & Video</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=482">Broker, Jasa Perantara</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=483">Pengembangan Perangkat Lunak</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=484">Jasa Transportasi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=485">Agen Event & Pameran</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=486">Agen Mobil</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=487">Agen Sepeda Motor</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=488">Jasa Paspor & Visa</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=489">Agen Produk Kimia</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=490">Agen Perhiasan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=491">Agen Produk Kesehatan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=492">Agen Produk Kecantikan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=493">Agen Karet</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=494">Agen Fashion Aksesoris</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=495">Jasa Internet</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=496">Agen Travel</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=497">Iklan Radio</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=498">Teknologi Konsultasi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=499">Jasa Rental</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=500">Jasa Fotografi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=501">Layanan Bisnis Lainnya</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=502">Jasa Derek</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=711">Hotel</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=717">Agen Pariwisata</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=719">Jasa Produk Replika</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=726">Jasa LED Projektor</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=727">Restoran / Rumah Makan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=728">Periklanan</a></li>
                                                                                                                                                                                                                                            
                                                    </ul>
                                                    </div>                                                            
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                                                        <li>
                                                                                <a href="#">Bahan Kimia</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=568">Agrokimia & Pestisida</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=569">Kimia Alkohol</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=570">Peralatan Kimia</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=571">Bagian Peralatan Kimia</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=572">Mesin Kimia</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=573">Agen Produk Kimia</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=574">Karbon Hitam</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=575">Kimia Reagen</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=576">Pupuk</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=577">Anorganik - Alkali</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=578">Anorganik - Bahan Dasar</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=579">Asam Anorganik</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=580">Anorganik Salt</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=581">Anorganik Lainnya</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=582">Anorganik Oksida</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=583">Perlengkapan Laboratorium</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=584">Organik - Alkene</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=585">Organik - Alkyl</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=586">Organik - Alkyne</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=587">Organik - Amine</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=588">Organik - Aldehyde & Ketone</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=589">Cat </a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=590">Pigmen</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=591">Deterjen</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=592">Aditif Pakan Ternak</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=593">Aditif Makanan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=594">Polimer Tinggi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=595">Bahan Kimia Lainnya</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=713">Sabun</a></li>
                                                                                                                                                                                                                                            
                                                    </ul>
                                                    </div>                                                            
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                                                        <li>
                                                                                <a href="#">Komputer & Software</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=40">Scanner</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=41">Printer</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=42">Software</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=43">Kabel Komputer & Konektor</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=44">Perangkat Jaringan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=45">Desktops & Server</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=46">Aksesoris Komputer</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=47">Laptops & Aksesories</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=48">Media Penyimpanan</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=49">Komponen Komputer</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=50">Mesin Fotokopi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=51">Mesin Fax</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                                
                                                                                                                
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                                                        <li>
                                                                                <a href="#">Konstruksi & Properti</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=345">Panel Aluminium Komposit</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=346">Aspal</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=347">Semen</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=348">Beton</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=349">Perekat Konstruksi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=350">Pintu & Jendela</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=351">Agen Bangunan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=352">Bangunan Keramik</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=353">Bahan Bangunan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=354">Kontraktor Konstruksi</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=355">Kertas Dinding</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=356">Batu, Marmer & Granit</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=357">Desain Arsitektur</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=358">Kamar Mandi & Dapur</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=359">Kaca Bangunan</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=360">Produk CCTV</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=361">Pipa Baja</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=362">Pipa Aluminium</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=363">Batu Bata & Genteng</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=364">Pipa Komposit</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=365">Bel Pintu</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=366">Mesin Konstruksi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=367">Suku Cadang Mesin Konstruksi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=368">Interior & Eksterior</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=369">Lokakarya & Tanaman</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=370">Agen Properti</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=371">Agen Konstruksi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=372">Lantai</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=373">Konstruksi & Properti Lainnya</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=374">Akses Control Sistem & Produk</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=375">Film Dekoratif</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=376">Bahan Bangunan Plastik</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=377">Batu Ukir & Patung</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=378">Pipa Stainless Steel</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=379">Tiang Besi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=380">Teralis Besi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=714">Gipsum</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=730">Agen Pintu & Jendela</a></li>
                                                                                                                                                                                                                                            
                                                    </ul>
                                                    </div>                                                            
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                                                        <li>
                                                                                <a href="#">Electronik Konsumen</a>
                                                                                <div class="wrap-popup column4">
                                            <div class="popup">
                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-3">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=503">Pengeras</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=504">Mobil Audio</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=505">Video Mobil</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=506">Komunikasi Mobil</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=507">Elektronik Agen Konsumen</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=508">GPS & Navigasi</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=509">Home Theater</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=510">VCD & Lainnya</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=511">Kabel</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=512">Baterai Digital</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=513">Kamera Digital</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=514">Aksesoris Kamera Digital & Tas</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                            <div class="col-md-3 has-sep">
                                                            <ul class="nav">                                                                <li><a href="http://192.168.1.101/gomocart/category/?id=516">Perekam Suara Digital</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=518">Pemutar DVD, VCD</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=519">Radio</a></li>
                                                                                                                                                                                                                                                                                                        <li><a href="http://192.168.1.101/gomocart/category/?id=520">Televisi</a></li>
                                                                                                                            </ul>
                                                        </div>                                                                                                                
                                                                                                                
                                                </div>                                                        
                                            </div>
                                        </div>
                                                                            </li>
                                    
                                    <!--  -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <ul class="menu clearfix visible-lg visible-md">
                        <li><a href="http://192.168.1.101/gomocart">BERANDA</a></li>
                                                <li><a href="http://192.168.1.101/gomocart/page/?id=1">RESELLER</a></li>
                                                <li><a href="http://192.168.1.101/gomocart/page/?id=2">TANYA JAWAB</a></li>
                                                <li><a href="http://192.168.1.101/gomocart/page/?id=3">CARA ORDER</a></li>
                                                <!-- li><a href="http://192.168.1.101/gomocart/pembayaran/">KONFIRMASI PEMBAYARAN</a></li -->                        
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
                        <li ><a href="http://192.168.1.101/gomocart">Beranda</a></li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agraris <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=681">Pertanian</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=682">Agen Produk Pertanian</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=683">Peternakan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=684">Kacang</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=685">Rokok & Tembakau</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=686">Kakao</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=687">Kelapa</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=688">Kopi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=689">Sayuran Dehidrasi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=690">Telur</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=691">Alat & Mesin Pertanian</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=692">Pupuk</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=693">Perikanan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=694">Makanan Ternak</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=695">Makanan & Minuman</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=696">Buah- Buahan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=697">Gandum</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=698">Jamur </a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=699">Kacang & Biji</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=700">Pestisida</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=701">Minyak Hewan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=702">Bibit Tanaman</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=703">Kentang</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=704">Unggas & Ternak</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=705">Rumput Laut</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=706">Rempah - Rempah & Bumbu</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=707">Teh</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=708">Sayur - Sayuran</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=709">Pertanian Lainnya</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=712">Beras</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=724">Budidaya Laut</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pakaian <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=515">Baju Batik</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=517">Baju Muslim</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=521">Jas dan Tuxedo </a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=566">Rak</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=596">Agen Pakaian</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=597">Mesin Jahit</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=598">Suku Cadang Mesin Pakaian</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=599">Pakaian Bayi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=600">Jubah Mandi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=601">Pakaian Anak - Anak</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=602">Mantel</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=603">Gaun</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=604">Pakaian Etnis</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=605">Aksesories Pakaian</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=606">Jaket</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=607">Manekin</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=608">Baju Hamil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=609">Kemeja Pria</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=610">Baju Tidur</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=611">Celana & Jeans</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=612">Kostum Pesta</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=613">Pakainan Lainnya</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=721">Suku Cadang Mesin Jahit</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=722">Peralatan Mesin Jahit</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mobil & Sepeda Motor <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=288">ATV</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=289">Peralatan Perawatan Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=290">Produk Perawatan Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=291">Aksesoris Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=292">Aksessories Motor</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=293">Suku Cadang Sepeda Motor</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=294">Suku Cadang Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=295">Agen Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=296">Agen Sepeda Motor</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=297">Oli & Pelumas</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=298">Ban</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=299">Aki Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=300">Radiator</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kecantikan & Perawatan Diri <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=55">Perlengkapan Mandi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=56">Peralatan Kecantikan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=57">Agen Produk Kecantikan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=58">Peralatan & Perlengkapan Makeup</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=59">Produk Tato</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=60">Perawatan Kulit</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=61">Perlengkapan Manicure & Pedicure</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=62">Spa </a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=63">Perawatan & Perlengkapan Rambut</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan Bisnis <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=463">Pendidikan & Pelatihan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=464">Jasa Keuangan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=465">Jasa Keamanan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=466">Jasa Kontruksi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=467">Jasa Hukum</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=468">Jasa Pembiayaan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=469">Jasa Telekomunikasi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=471">Jasa Desain Website</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=472">Konsultasi Investasi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=473">Konsultasi Perdagangan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=474">Jasa Desain Dekorasi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=475">Jasa Penerjemah</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=476">Jasa Percetakan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=477">Jasa Desain</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=478">Karakter Desain Layanan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=479">Agen Iklan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=480">Agen Asuransi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=481">Produksi Audio & Video</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=482">Broker, Jasa Perantara</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=483">Pengembangan Perangkat Lunak</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=484">Jasa Transportasi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=485">Agen Event & Pameran</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=486">Agen Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=487">Agen Sepeda Motor</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=488">Jasa Paspor & Visa</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=489">Agen Produk Kimia</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=490">Agen Perhiasan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=491">Agen Produk Kesehatan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=492">Agen Produk Kecantikan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=493">Agen Karet</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=494">Agen Fashion Aksesoris</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=495">Jasa Internet</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=496">Agen Travel</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=497">Iklan Radio</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=498">Teknologi Konsultasi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=499">Jasa Rental</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=500">Jasa Fotografi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=501">Layanan Bisnis Lainnya</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=502">Jasa Derek</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=711">Hotel</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=717">Agen Pariwisata</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=719">Jasa Produk Replika</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=726">Jasa LED Projektor</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=727">Restoran / Rumah Makan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=728">Periklanan</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bahan Kimia <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=568">Agrokimia & Pestisida</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=569">Kimia Alkohol</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=570">Peralatan Kimia</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=571">Bagian Peralatan Kimia</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=572">Mesin Kimia</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=573">Agen Produk Kimia</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=574">Karbon Hitam</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=575">Kimia Reagen</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=576">Pupuk</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=577">Anorganik - Alkali</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=578">Anorganik - Bahan Dasar</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=579">Asam Anorganik</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=580">Anorganik Salt</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=581">Anorganik Lainnya</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=582">Anorganik Oksida</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=583">Perlengkapan Laboratorium</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=584">Organik - Alkene</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=585">Organik - Alkyl</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=586">Organik - Alkyne</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=587">Organik - Amine</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=588">Organik - Aldehyde & Ketone</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=589">Cat </a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=590">Pigmen</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=591">Deterjen</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=592">Aditif Pakan Ternak</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=593">Aditif Makanan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=594">Polimer Tinggi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=595">Bahan Kimia Lainnya</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=713">Sabun</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Komputer & Software <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=40">Scanner</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=41">Printer</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=42">Software</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=43">Kabel Komputer & Konektor</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=44">Perangkat Jaringan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=45">Desktops & Server</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=46">Aksesoris Komputer</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=47">Laptops & Aksesories</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=48">Media Penyimpanan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=49">Komponen Komputer</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=50">Mesin Fotokopi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=51">Mesin Fax</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Konstruksi & Properti <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=345">Panel Aluminium Komposit</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=346">Aspal</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=347">Semen</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=348">Beton</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=349">Perekat Konstruksi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=350">Pintu & Jendela</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=351">Agen Bangunan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=352">Bangunan Keramik</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=353">Bahan Bangunan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=354">Kontraktor Konstruksi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=355">Kertas Dinding</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=356">Batu, Marmer & Granit</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=357">Desain Arsitektur</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=358">Kamar Mandi & Dapur</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=359">Kaca Bangunan</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=360">Produk CCTV</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=361">Pipa Baja</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=362">Pipa Aluminium</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=363">Batu Bata & Genteng</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=364">Pipa Komposit</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=365">Bel Pintu</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=366">Mesin Konstruksi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=367">Suku Cadang Mesin Konstruksi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=368">Interior & Eksterior</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=369">Lokakarya & Tanaman</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=370">Agen Properti</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=371">Agen Konstruksi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=372">Lantai</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=373">Konstruksi & Properti Lainnya</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=374">Akses Control Sistem & Produk</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=375">Film Dekoratif</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=376">Bahan Bangunan Plastik</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=377">Batu Ukir & Patung</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=378">Pipa Stainless Steel</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=379">Tiang Besi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=380">Teralis Besi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=714">Gipsum</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=730">Agen Pintu & Jendela</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electronik Konsumen <span class="fa fa-angle-down"></span></a>                            
                                                                <ul class="dropdown-menu">
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=503">Pengeras</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=504">Mobil Audio</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=505">Video Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=506">Komunikasi Mobil</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=507">Elektronik Agen Konsumen</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=508">GPS & Navigasi</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=509">Home Theater</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=510">VCD & Lainnya</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=511">Kabel</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=512">Baterai Digital</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=513">Kamera Digital</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=514">Aksesoris Kamera Digital & Tas</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=516">Perekam Suara Digital</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=518">Pemutar DVD, VCD</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=519">Radio</a></li>
                                                                            <li><a href="http://192.168.1.101/gomocart/category/?id=520">Televisi</a></li>
                                                                                          
                                </ul>                                 
                                                            </li>
                        
                                                    <li><a href="http://192.168.1.101/gomocart/page/?id=1">RESELLER</a></li>
                                                    <li><a href="http://192.168.1.101/gomocart/page/?id=2">TANYA JAWAB</a></li>
                                                    <li><a href="http://192.168.1.101/gomocart/page/?id=3">CARA ORDER</a></li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div><!-- /.header-bottom -->
</div><!-- /.header -->
        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="http://192.168.1.101/gomocart">Home</a></li>
                    <li class="active">Shopping Cart</li>
               	</ul>
            </div>
        </div>
                
        <div class="main">           
            <div class="container">                
                <div class="row">
                    <div id="alert_success" class="col-sm-12" style="display: none;">
                        <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                    
                    <div id="alert_error" class="col-sm-12" style="display: none;">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
           
                
                <div id="no_item_message" style="display: none;" class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger text-center"><span style="font-size: 14px;">Keranjang belanja masih kosong.</span></div>                            
                    </div>
                </div>
                
                
                <div class="cart">                    
                                        <div class="table-responsive">
                	<table id="tblCart" class="table custom-table">
                            <thead>
                                <tr class="first last">
                                    <th width="5%"><div style="text-align: center;">Remove</div></th>
                                    <th width="10%"><div style="text-align: center;">Image</div></th>
                                    <th width="25%"><div style="text-align: center;">Product Name</div></th>
                                    <!-- th>Edit</th -->
                                    <th width="20%"><div style="text-align: center;">Quantity</div></th>
                                    <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                    <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                                                                        <tr>
                                    <td class="text-center"><input type="hidden" name="no" value="0" /><a class="btn-remove" href="http://192.168.1.101/gomocart/cart/removefromcart.php?index=0"><span class="fa fa-trash-o"></span></a></td>
                                    <td><a class="product-image" title="Lorry Wheel" href="http://192.168.1.101/gomocart/detail.php?id=3">
                                	<img alt="Lorry Wheel" src="http://192.168.1.101/gomocart/store/centercrop.php?url=http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png&width=70&height=70">
                                    </a></td>
                                    <td>
                                	<a href="Lorry Wheel">Lorry Wheel</a>
                                                                                <div class="text-muted">Ukuran: 
                                            <select class="form-control" name="ukuran">
                                                                                            <option value="XL"  selected="selected" >XL</option>
                                                                                            <option value="L" >L</option>
                                                                                        </select>
                                        </div>
                                                                                                                        <div class="text-muted">Warna: 
                                            <select class="form-control" name="warna">
                                                                                            <option value="MERAH" >MERAH</option>
                                                                                            <option value="BIRU"  selected="selected" >BIRU</option>
                                                                                        </select>
                                        </div>
                                                                            </td>
                                    <!-- td class="text-center"><a href="#">Edit</a></td -->
                                    <td class="qty">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn btn_minus" type="button">-</button>
                                            </span>
                                            <input type="text" name="jumlah" class="form-control jumlah" value="1">
                                            <span class="input-group-btn">
                                                <button class="btn btn_plus" type="button">+</button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </td>
                        		
                                    <td align="right" class="subtotal">Rp. 35,000</td>
                                    <td align="right" class="grandtotal">Rp. 35,000</td>
                                </tr>
                                                                                        </tbody>
                        </table>
                    </div>
                                        
                    <div class="row">
                        <div class="col-sm-8">&nbsp;</div>
                        <div class="col-sm-4">
                            <div class="row">
                                
                                                                <div class="col-sm-12 form-group">
                                    <div class="form-group text-center"><img id="i_loading_update_cart" style="display: none;" src="http://192.168.1.101/gomocart/templates/front-end/accecories/images/loading_1.gif" /></div>  
                                    <button id="update_cart" type="submit" class="form-control btn btn-danger btn-md">UPDATE CART</button>
                                </div>
                                                                
                                                                <div class="col-sm-12 form-group">
                                    <button id="lanjut_belanja" type="button" class="form-control btn btn-default btn-md">KEMBALI BELANJA</button>
                                </div>
                                                            </div>
                        </div>
                    </div>           
                    
                    <div class="line2"></div>
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <form id="form_kupon" method="post" action="http://192.168.1.101/gomocart/cart/addvoucher.php">
                                <div class="form-group">
                                    <h4>KODE VOUCHER BELANJA</h4>
                                    <p class="text-muted">Masukan kode <b><i>voucher belanja</i></b> untuk mendapatkan potongan</p>
                                    <input name="kode_kupon" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button id="btn_kupon" type="submit" class="form-control btn btn-default btn-md">MASUKAN VOUCHER</button>
                                </div>
                                <div class="form-group">
                                    <table id="tblCart" class="table custom-table">
                                        <tbody>
                                                                                                                                </tbody>
                                    </table>
                                
                                </div>
                            </form>                            
                        </div>
                        <div class="col-sm-4">&nbsp;</div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <table class="table table-cart-total">
                                    <tr>
                                        <td>Subtotal:</td>
                                        <td class="text-right"><span id="grandtotal">Rp 35,000</span></td>
                                    </tr>
                                                                    
                                                                        <tr>
                                        <td>Grandtotal:</td>
                                        <td class="text-right"><span id="total">Rp 35,000</span></td>
                                    </tr>
                                </table>
                            </div>
                                                        <div class="form-group">
                                <div class="form-group text-center"><img id="i_loading" style="display: none;" src="http://192.168.1.101/gomocart/templates/front-end/accecories/images/loading_1.gif" /></div>  
                                <button id="btn_checkout" type="submit" class="btn btn-default btn-md form-control">CHECKOUT</button>
                            </div>
                                                    </div>                        
                    </div>
                </div>                
            </div>
        </div><!-- /.main -->
        
                <div class="footer">
    <!-- div class="footer-top">
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
    </div --><!-- /.footer-top -->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-title">
                        <h2>KONTAK KAMI</h2>
                    </div>
                    <div class="footer-content">
                        <div class="email add">
                            <p>inagrosir@gmail.com</p>
                        </div>
                        <div class="phone add">
                            <p>0822 4442 5880</p>
                        </div>
                        <div class="address add">
                            <p>Jalan Keputra panjunan 3/30 surabaya</p>
                        </div>
                        <div class="contact-link"><a href="#" class="btn btn-default">Open in Google Maps</a></div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="footer-title">
                        <h2>AKUN SAYA</h2>
                    </div>
                    <div class="footer-content">
                        <ul>
                             
                                <li><a title="Edit Profil" href="http://192.168.1.101/gomocart/member/editprofil.php">Edit Profil</a></li>
                                <li><a title="Ganti Password" href="http://192.168.1.101/gomocart/member/gantipassword.php">Ganti Password</a></li>
                                <li><a title="My Wishlist" href="http://192.168.1.101/gomocart/wishlist/">My Wishlist</a></li>
                                <li><a title="My Cart" href="http://192.168.1.101/gomocart/cart/">My Cart</a></li>
                                <li><a title="Checkout" href="http://192.168.1.101/gomocart/cart/checkout.php">Checkout</a></li>
                                <li><a href="http://192.168.1.101/gomocart/member/logout.php" class="logout">Logout</a></li>                                                                            
                                                    </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="footer-title">
                        <h2>Pembayaran &amp; Pengiriman</h2>
                    </div>
                    <div class="footer-content">
                        <ul>
                                                        <li><a href="http://192.168.1.101/gomocart/page/?id=5">Metode Pembayaran</a></li>
                                                        <!-- li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Shipping Guide</a></li>
                            <li><a href="#">Locations We Ship To</a></li>
                            <li><a href="#">Estimated Delivery Time</a></li -->
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                        <div class="footer-title">
                        <h2>Layanan Pelanggan</h2>
                    </div>
                    <div class="footer-content">
                        <ul>
                                                        <li><a href="http://192.168.1.101/gomocart/page/?id=6">Kontak Kami</a></li>
                                                        <!-- li><a href="#">Shipping Policy</a></li>
                            <li><a href="#">Compensation First</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">Contact Us</a></li -->
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
                    <div class="copy">Copyright &copy; Gomochart. All Rights Reserved</div>
                </div>
                <div class="col-sm-6">
                    <!-- div class="payment"><img src="http://192.168.1.101/gomocart/templates/front-end/accecories/images/payment.png" alt="" class="img-responsive"></div -->
                </div>
            </div>
        </div>
    </div>
</div><!-- /.footer -->
    
                
        <!-- Jquery Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/owl.carousel.min.js"></script>
        <!-- Countdown Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/custom.js"></script>
        
        <script type="text/javascript">
            var total_item = 1;
            
            $(function () {
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
                
                function setSuccessMessage(message) {
                    $('#alert_success .alert span').html(message);
                    $('#alert_success').show('slow');
                    setTimeout(function() {
                        $('#alert_success').hide('slow');
                    }, 5000);
                    $("body, html").animate({ 
                        scrollTop: $('.container').offset().top 
                    }, 600);
                }
                
                function setErrorMessage(message) {
                    $('#alert_error .alert span').html(message);
                    $('#alert_error').show('slow');
                    setTimeout(function() {
                        $('#alert_error').hide('slow');
                    }, 5000);
                    $("body, html").animate({ 
                        scrollTop: $('.container').offset().top 
                    }, 600);
                }                
                   
                function setLoading(isLoading) {
                    if(isLoading) {
                        $('#i_loading').show();
                        $('#btn_checkout').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_checkout').show();
                    }
                }
                
                function setLoadingUpdateCart(isLoading) {
                    if(isLoading) {
                        $('#i_loading_update_cart').show();
                        $('#update_cart').hide();
                        $('#lanjut_belanja').hide();                        
                    } else {
                        $('#i_loading_update_cart').hide();
                        $('#update_cart').show();                    
                        $('#lanjut_belanja').show();                        
                    }
                }
            
                $('#lanjut_belanja').on('click', function (e) {                    
                    window.location = 'http://192.168.1.101/gomocart';                    
                });
        
                $('#update_cart').on('click', function (e) {
                    clickSound();                    
                    
                    var detail = ''; 
                                            var row = 0;
                        $("#tblCart tr").each(function() {
                            if(row>0) {
                                var no     = $(this).find('[name=no]').val();
                                var ukuran = $(this).find('[name=ukuran]').val();                        
                                var warna  = $(this).find('[name=warna]').val();                        
                                var jumlah = $(this).find('[name=jumlah]').val();

                                if(no!=undefined) {
                                    detail+=(detail==''?'':'\n')+no+'\t'+(ukuran!=undefined?ukuran:'')+'\t'+(warna!=undefined?warna:'')+'\t'+jumlah.replace(",", "");
                                }
                            } 
                            row++;
                        });
                                            
                    //console.log(detail);
                    var data = new FormData();
                    data.append('detail', detail);
                                        setLoadingUpdateCart(true);
                    $.ajax({
                        type: 'POST',
                        url: 'updatecart.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoadingUpdateCart(false);
                            if(data['success']) {
                                window.location = 'http://192.168.1.101/gomocart/cart/';
                                                            } else {
                                                                    setErrorMessage(data['message']); 
                                                            }
                        }, 
                        error: function() {
                            setLoadingUpdateCart(false);
                                                            setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                                                    }
                    }); 
                });
            
                $('#btn_checkout').on('click', function (e) {                    
                    clickSound();
                    
                    setLoading(true);
                                            if($("#tblCart tr").length<=1) {
                            setLoading(false);
                            setErrorMessage('Anda belum memasukkan barang yang akan dibeli.'); 
                        } else {
                            window.location = 'http://192.168.1.101/gomocart/cart/checkout.php';
                        }
                                    });
                
                                
                
                $('.hapus').on('click', function (e) {   
                    clickSound();
                    
                    var index = this.getAttribute('id_delete');
                    
                    $('#btn_delete_'+index).hide();
                    $('#i_loading_delete_'+index).show();
                    
                    var data = new FormData();
                    data.append('method', '');
                    
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.101/gomocart/cart/removefromcart.php?index='+index,
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            
                            if(data['success']) {
                                window.cpjs.sendToAndroid('true|'+data['message']);
                                $('#item_no_'+index).remove();
                                $('#grandtotal').html(data['grandtotal']);
                                $('#voucher').html(data['voucher']);
                                $('#ongkir').html(data['ongkir']);
                                $('#total').html(data['total']);
                                
                                total_item = data['total_item'];
                                if(data['total_item']==0) {
                                    $('#no_item_message').show();                                
                                    $('#btn_checkout').hide();
                                    $('#update_cart').hide();
                                }
                                
                            } else {
                                window.cpjs.sendToAndroid('false|'+data['message']);
                                $('#btn_delete_'+index).show();
                                $('#i_loading_delete_'+index).hide();
                            }
                        }, 
                        error: function() {
                            window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                            $('#btn_delete_'+index).show();
                            $('#i_loading_delete_'+index).hide();
                        }
                    });
                });
                    
                $('.btn_minus').on('click', function (e) {   
                    clickSound();
                    var element = $(this).closest('.input-group');
                    var jumlah = element.find('[name=jumlah]');
                    var qty = eval(jumlah.val())-1;
                    
                    jumlah.val(qty>0?qty:1);
                });
                
                $('.btn_plus').on('click', function (e) {                    
                    clickSound();
                    var element = $(this).closest('.input-group');
                    var jumlah = element.find('[name=jumlah]');
                    var qty = eval(jumlah.val())+1;
                    
                    jumlah.val(qty);
                });
                
                            });
        </script>
  </body>
</html>
<?php }} ?>
