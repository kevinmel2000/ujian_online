<?php /*%%SmartyHeaderCode:2147578cacd26da7a8-04094079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ad72054b4c70503e5c4f3d6d3534b92b90b3f0' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pengaturan\\edit.html',
      1 => 1470303663,
      2 => 'file',
    ),
    'a0c9e5af119b75a91b619543a40bd0156862381c' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\head.html',
      1 => 1467242447,
      2 => 'file',
    ),
    '440cb7cbf0d92774b5c3adbed0a51dc02b63cd6c' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\top.html',
      1 => 1470143555,
      2 => 'file',
    ),
    'bc639c2829ccdaa5983df9e916d06563953997c0' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\side.html',
      1 => 1470117030,
      2 => 'file',
    ),
    'bc1b2832cd6482f60ebf267d39412dd082d53208' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\footer.html',
      1 => 1468383822,
      2 => 'file',
    ),
    '4f5d7ee3c6b0087bec36f09503ebe43e3034e5d5' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\footer_js.html',
      1 => 1469574375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2147578cacd26da7a8-04094079',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a30dceaa1671_60106423',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a30dceaa1671_60106423')) {function content_57a30dceaa1671_60106423($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Umum</title>
    <!-- Bootstrap Styles-->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
    </head>


<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://192.168.1.101/gomocart">GOMOCART</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <span>Pesan Belum Dibaca </span> <span id="total_new_message" class="label label-danger" >4</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul id="list_new_message" class="dropdown-menu dropdown-messages">
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/message_in/edit.php?id=52">
                                <div style="white-space: nowrap;">
                                    <strong>Kiezie Ok </strong>                                </div>
                                <div>
                                    Tes Kirim Balasan 
                                    <span class="pull-right text-muted">
                                        <em>7 hari lalu</em>
                                    </span> <br /><br />                                       
                                </div>                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/message_in/edit.php?id=51">
                                <div style="white-space: nowrap;">
                                    <strong>Kiezie Ok </strong>                                </div>
                                <div>
                                    Tes Kirim Balasan 
                                    <span class="pull-right text-muted">
                                        <em>7 hari lalu</em>
                                    </span> <br /><br />                                       
                                </div>                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/message_in/edit.php?id=50">
                                <div style="white-space: nowrap;">
                                    <strong>Kiezie Ok </strong>                                </div>
                                <div>
                                    asdasaasd aaaaa 
                                    <span class="pull-right text-muted">
                                        <em>9 hari lalu</em>
                                    </span> <br /><br />                                       
                                </div>                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a class="text-center" href="http://192.168.1.101/gomocart/adminweb/message_in/">
                                <strong>Baca Semua Pesan</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <input type="hidden" name="last_id_message" value="49" />
                    <!-- /.dropdown-messages -->
                </li>
                                
                                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <span>Pesanan Baru </span> <span id="total_new_order" class="label label-danger" >4</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul id="list_new_order" class="dropdown-menu dropdown-messages">
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/pemesanan/list.php?query=000012">
                                <div>
                                    <strong>Customer: Kiezie Ok </strong>  <span class="pull-right label label-danger">wait</span>                                </div>
                                <div>
                                    ID Pesanan: #000012 <br />
                                    <span class="label label-info">1 Pcs</span> <span class="label label-danger">Rp. 35,000</span>
                                    <span class="pull-right text-muted">
                                        <em>9 jam lalu</em>
                                    </span> <br /><br />                                       
                                </div>
                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/pemesanan/list.php?query=000011">
                                <div>
                                    <strong>Customer: Kiezie Ok </strong>  <span class="pull-right label label-danger">wait</span>                                </div>
                                <div>
                                    ID Pesanan: #000011 <br />
                                    <span class="label label-info">1 Pcs</span> <span class="label label-danger">Rp. 70,000</span>
                                    <span class="pull-right text-muted">
                                        <em>21 jam lalu</em>
                                    </span> <br /><br />                                       
                                </div>
                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/pemesanan/list.php?query=000010">
                                <div>
                                    <strong>Customer: Tamu </strong>  <span class="pull-right label label-danger">wait</span>                                </div>
                                <div>
                                    ID Pesanan: #000010 <br />
                                    <span class="label label-info">1 Pcs</span> <span class="label label-danger">Rp. 138,000</span>
                                    <span class="pull-right text-muted">
                                        <em>5 hari lalu</em>
                                    </span> <br /><br />                                       
                                </div>
                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a class="text-center" href="http://192.168.1.101/gomocart/adminweb/pemesanan/">
                                <strong>Lihat Semua Pesanan</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <input type="hidden" name="last_id_order" value="12" />
                    <!-- /.dropdown-tasks -->
                </li>
                                
                                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-foursquare fa-fw"></i> <span>Konfirmasi Pembayaran </span> <span id="total_new_konfirmasi" class="label label-danger" >1</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul id="list_new_konfirmasi" class="dropdown-menu dropdown-messages">
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/konfirmasi/list.php?query=000008">
                                <div>
                                    <strong>Customer: Tamu </strong>  <span class="pull-right label label-danger">wait</span>                                </div>
                                <div>
                                    No. <b>#000008</b> sebesar <b><i>Rp. 70,-</b></i>&nbsp;&nbsp;ke <b>Bank Mandiri</b>. 
                                    <span class="pull-right text-muted">
                                        <em>11 hari lalu</em>
                                    </span> <br /><br />                                       
                                </div>
                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/konfirmasi/list.php?query=000002">
                                <div>
                                    <strong>Customer: Tamu </strong>                                 </div>
                                <div>
                                    No. <b>#000002</b> sebesar <b><i>Rp. 115,105,-</b></i>&nbsp;&nbsp;ke <b>Bank Mandiri</b>. 
                                    <span class="pull-right text-muted">
                                        <em>1 bulan lalu</em>
                                    </span> <br /><br />                                       
                                </div>
                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/konfirmasi/list.php?query=000007">
                                <div>
                                    <strong>Customer: Tamu </strong>                                 </div>
                                <div>
                                    No. <b>#000007</b> sebesar <b><i>Rp. 57,000,-</b></i>&nbsp;&nbsp;ke <b>BCA</b>. 
                                    <span class="pull-right text-muted">
                                        <em>14 hari lalu</em>
                                    </span> <br /><br />                                       
                                </div>
                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                                                <li>
                            <a class="text-center" href="http://192.168.1.101/gomocart/adminweb/konfirmasi/list.php">
                                <strong>Lihat Semua Konfirmasi</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <input type="hidden" name="last_id_konfirmasi" value="6" />
                    <!-- /.dropdown-alerts -->
                </li>
                                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="http://192.168.1.101/gomocart/adminweb/editprofile/"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="http://192.168.1.101/gomocart/adminweb/gantipassword/"><i class="fa fa-gear fa-fw"></i> Ganti Password</a></li>
                        <li class="divider"></li>
                        <li><a href="http://192.168.1.101/gomocart/adminweb/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                                            <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/dashboard/"><i class="fa fa-dashboard"></i> Dashboard </a>
                                                    </li>
                                            <li>
                            <a href="#"><i class="fa fa-folder"></i> Pesanan <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level">
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/pesanandalamproses/keepbelumlunas/"><i class="fa fa-bars"></i> Keep / Belum Lunas</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/pemesanan/"><i class="fa fa-briefcase"></i> Data Pesanan</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/pemesanan/add.php"><i class="fa fa-desktop"></i> Buat Pesanan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/konfirmasi/"><i class="fa fa-foursquare"></i> Konfirmasi Pembayaran </a>
                                                    </li>
                                            <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/customer/"><i class="fa fa-user"></i> Data Pelanggan </a>
                                                    </li>
                                            <li>
                            <a href="#"><i class="fa fa-bookmark"></i> Konten Website <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level">
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/banner/"><i class="fa fa-foursquare"></i> Banner</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/contentleft/"><i class="fa fa-edit"></i> Widget</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/menupage/"><i class="fa fa-book"></i> Halaman</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a href="#"><i class="fa fa-book"></i> Katalog <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level">
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/category/"><i class="fa fa-folder"></i> Kategori</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/stok/"><i class="fa fa-dropbox"></i> Stok</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/voucher/"><i class="fa fa-money"></i> Voucher </a>
                                                    </li>
                                            <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/message_in/"><i class="fa fa-mail-forward"></i> Message </a>
                                                    </li>
                                            <li>
                            <a href="#"><i class="fa fa-bars"></i> Laporan <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level">
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/laporan_pembayaran/"><i class="fa fa-money"></i> Pembayaran</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/laporan_pesanan/"><i class="fa fa-foursquare"></i> Pesanan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li class="active-menu">
                            <a href="#"><i class="fa fa-asterisk"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level collapse in">
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/pengaturan/"><i class="fa fa-edit"></i> Umum</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/bank/"><i class="fa fa-money"></i> Metode Pembayaran</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/ekspedisi/"><i class="fa fa-truck"></i> Ekspedisi</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/pengguna/"><i class="fa fa-user"></i> Managemen User </a>
                                                    </li>
                                     </ul>   

                    
                    
                <!-- ul class="nav" id="main-menu">    
                    <li>
                        <a href="http://192.168.1.101/gomocart/adminweb/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-folder"></i> Pesanan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/pesanandalamproses/keepbelumlunas/"><i class="fa fa-bars"></i> Keep / Belum Lunas</a>
                            </li>                            
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/pemesanan/"><i class="fa fa-briefcase"></i> Data Pesanan</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/pemesanan/add.php"><i class="fa fa-desktop"></i> Buat Pesanan</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="http://192.168.1.101/gomocart/adminweb/konfirmasi/"><i class="fa fa-foursquare"></i> Konfirmasi Pembayaran</a>
                    </li>
                    
                    <li>
                        <a href="http://192.168.1.101/gomocart/adminweb/customer/"><i class="fa fa-user"></i> Data Pelanggan</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-bookmark"></i> Konten Website <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/banner/"><i class="fa fa-foursquare"></i> Banner</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/contentleft/"><i class="fa fa-edit"></i> Widget</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/menupage/"><i class="fa fa-book"></i> Halaman</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-book"></i> Katalog <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/category/"><i class="fa fa-folder"></i> Kategori</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/stok/"><i class="fa fa-dropbox"></i> Stok</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="http://192.168.1.101/gomocart/adminweb/voucher/"><i class="fa fa-money"></i> Voucher</a>
                    </li>
                    
                    <li>
                        <a href="http://192.168.1.101/gomocart/adminweb/message_in/"><i class="fa fa-mail-forward"></i> Message</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-bars"></i> Laporan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/laporan_pembayaran/"><i class="fa fa-money"></i> Pembayaran</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/laporan_pesanan/"><i class="fa fa-foursquare"></i> Pesanan</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="active-menu">
                        <a href="#"><i class="fa fa-asterisk"></i> Pengaturan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/pengaturan/"><i class="fa fa-edit"></i> Umum</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/bank/"><i class="fa fa-money"></i> Metode Pembayaran</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.101/gomocart/adminweb/ekspedisi/"><i class="fa fa-truck"></i> Ekspedisi</a>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="http://192.168.1.101/gomocart/adminweb/pengguna/"><i class="fa fa-user"></i> Managemen User</a>
                    </li>
                <ul -->

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Umum <small>Edit Umum</small>
                        </h1>
                        <!-- ol class="breadcrumb">
                          <li><a href="http://192.168.1.101/gomocart">Home</a></li>
                          <li><a href="http://192.168.1.101/gomocart/pesanandalamproses/keepbelumlunas/">Umum</a></li>
                          <li class="active">Edit Umum</li>
                        </ol -->
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div class="form-group">
                        <ul id="myTab" class="nav nav-tabs">                                
                            <li class="active">
                                <a href="#umum" data-toggle="tab"><b>Data Umum</b></a>
                            </li>                                 
                            <li>
                                <a href="#alamat" data-toggle="tab"><b>Alamat Toko</b></a>
                            </li>                                
                            <li>
                                <a href="#pengaturan" data-toggle="tab"><b>Pengaturan</b></a>
                            </li> 
                        </ul>
                    </div>
                    
                    <div id="alert_success" class="form-group" style="display: none;">                         
                        <div class="alert alert-info">&nbsp;</div>
                    </div>
                
                    <div id="alert_error" class="form-group" style="display: none;">                         
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                    
                    <div class="form-group tab-content">
                        <div class="tab-pane fade active in" id="umum">
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <label for="judul">Judul Webite:</label>
                                <input type="text" value="Gomochart" class="form-control" name="judul" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label for="tagline">Tag Line:</label>
                                <input type="text" value="Web and Mobile Online Store Application" class="form-control" name="tagline" placeholder="" />
                            </div>
                            
                            <div class="form-group">
                                <label for="detail">Tentang Website:</label>
                                <div class="summernote"></div>
                            </div>
                            
                            <div class="form-group">
                                <label for="gambar">Logo:</label>                        
                                <style type="text/css">
                                    .cropit-image-preview {
                                        border:1px solid #a6bac4;
                                        width: 227px;
                                        height: 73px;
                                        cursor: move;
                                    }
                                    .H-new-kol-post-img {
                                        width: 227px;
                                        height: 73px;
                                    }
                                </style>
                                <div class="H-new-kol-post-img image-editor">
                                    <input id="fileupload_gambar" type="file" name="fileupload_gambar" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>
                                <label>Ukuran 227 X 73 px</label><br />   
                                <div id="upload_gambar" class="btn btn-primary">Upload</div>
                             </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" value="inagrosir@gmail.com" class="form-control" name="email" placeholder="" />
                            </div>
                            
                            <div class="form-group">                        
                                <label for="telepon">Telepon:</label>
                                <div id="detail_telepon" class="table-responsive">
                                    <table id="tblTelepon" width="100%">
                                        <tbody id="telepon"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="no_hp">No. HP:</label>
                                <div id="detail_no_hp" class="table-responsive">
                                    <table id="tblNo_hp" width="100%">
                                        <tbody id="no_hp"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="sms">SMS:</label>
                                <div id="detail_sms" class="table-responsive">
                                    <table id="tblSms" width="100%">
                                        <tbody id="sms"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="wa">WA:</label>
                                <div id="detail_wa" class="table-responsive">
                                    <table id="tblWa" width="100%">
                                        <tbody id="wa"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="bbm">BBM:</label>
                                <div id="detail_bbm" class="table-responsive">
                                    <table id="tblBbm" width="100%">
                                        <tbody id="bbm"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="line">Line:</label>
                                <div id="detail_line" class="table-responsive">
                                    <table id="tblLine" width="100%">
                                        <tbody id="line"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <div id="i_loading_umum" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>                  
                                <div id="btn_simpan_umum" class="btn btn-primary">Update</div>                            </div>
                            
                        </div>
                        
                        <div class="tab-pane fade" id="alamat">
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <label for="alamat">Alamat Toko:</label>
                                <textarea class="form-control" style="height: 50px;" name="alamat">Jalan Keputra panjunan 3/30 surabaya</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="propinsi">Propinsi:</label>
                                <select id="propinsi" name="propinsi" class="form-control">
                                                                            <option value="1" >Bali</option>
                                                                            <option value="2" >Bangka Belitung</option>
                                                                            <option value="3" >Banten</option>
                                                                            <option value="4" >Bengkulu</option>
                                                                            <option value="5" >DI Yogyakarta</option>
                                                                            <option value="6" >DKI Jakarta</option>
                                                                            <option value="7" >Gorontalo</option>
                                                                            <option value="8" >Jambi</option>
                                                                            <option value="9" >Jawa Barat</option>
                                                                            <option value="10" >Jawa Tengah</option>
                                                                            <option value="11" >Jawa Timur</option>
                                                                            <option value="12" >Kalimantan Barat</option>
                                                                            <option value="13" >Kalimantan Selatan</option>
                                                                            <option value="14" >Kalimantan Tengah</option>
                                                                            <option value="15" >Kalimantan Timur</option>
                                                                            <option value="16" >Kalimantan Utara</option>
                                                                            <option value="17" >Kepulauan Riau</option>
                                                                            <option value="18" >Lampung</option>
                                                                            <option value="19" >Maluku</option>
                                                                            <option value="20" >Maluku Utara</option>
                                                                            <option value="21" >Nanggroe Aceh Darussalam (NAD)</option>
                                                                            <option value="22" >Nusa Tenggara Barat (NTB)</option>
                                                                            <option value="23" >Nusa Tenggara Timur (NTT)</option>
                                                                            <option value="24" >Papua</option>
                                                                            <option value="25" >Papua Barat</option>
                                                                            <option value="26" >Riau</option>
                                                                            <option value="27" >Sulawesi Barat</option>
                                                                            <option value="28" >Sulawesi Selatan</option>
                                                                            <option value="29" >Sulawesi Tengah</option>
                                                                            <option value="30" >Sulawesi Tenggara</option>
                                                                            <option value="31" >Sulawesi Utara</option>
                                                                            <option value="32" >Sumatera Barat</option>
                                                                            <option value="33" >Sumatera Selatan</option>
                                                                            <option value="34" >Sumatera Utara</option>
                                                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="kota">Kota:</label>
                                <select id="kota" name="kota" class="form-control"></select>
                            </div>
                            
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos:</label>
                                <input type="text" value="30164" class="form-control" name="kode_pos" />
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="latitude">Latitude:</label>
                                <input type="text" value="1" class="form-control" name="latitude" />
                            </div>
                            
                            <div class="form-group">
                                <label for="longitude">Longitude:</label>
                                <input type="text" value="2" class="form-control" name="longitude" />
                            </div>
                            
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <div id="i_loading_alamat" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>                  
                                <div id="btn_simpan_alamat" class="btn btn-primary">Update</div>                            </div>
                        </div>
                            
                        
                        <div class="tab-pane fade" id="pengaturan">
                            <div class="form-group">&nbsp;</div>
                            
                            <div class="form-group">
                                <label for="jatuh_tempo">Jatuh Tempo Pemesanan:</label>
                                <select name="jatuh_tempo" class="form-control">
                                    <option value="1"  selected="selected" >1 Hari</option>
                                    <option value="2" >2 Hari</option>
                                    <option value="3" >3 Hari</option>
                                    <option value="4" >4 Hari</option>
                                    <option value="5" >5 Hari</option>
                                    <option value="6" >6 Hari</option>
                                    <option value="7" >7 Hari</option>                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stok_minimum">Peringatan Stok Minimum:</label>
                                <input type="text" value="5" class="form-control" name="stok_minimum" />
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label"><input type="checkbox" id="checkbox_tampilkan_stok" name="tampilkan_stok" value="1" checked> Tampilkan stok pada detail produk.</label>                    
                            </div>
                            
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <div id="i_loading_pengaturan" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>                  
                                <div id="btn_simpan_pengaturan" class="btn btn-primary">Update</div>                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                
                <footer><p>All right reserved. <a href="http://gomochart.com">Gomocart</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery-1.11.0.min.js"></script>
    
    <!-- jQuery Ui -->
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>

    <!-- Bootstrap Js -->
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery.metisMenu.js"></script>
    
    <!-- Morris Chart Js -->
    <!-- script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/morris/morris.js"></script>
	
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/easypiechart.js"></script>
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/easypiechart-data.js"></script -->
	
    <!-- Custom Js -->
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/custom-scripts.js"></script>
    
    <script type="text/javascript">
        $( document ).ready(function() {
            var load_data_dashboard = function() {
                setTimeout(function() {
                    var data = new FormData();
                    data.append('last_id_message', $('[name=last_id_message]').val());
                    data.append('last_id_order', $('[name=last_id_order]').val());
                    data.append('last_id_konfirmasi', $('[name=last_id_konfirmasi]').val());
                
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.101/gomocart/store/notifDataStore.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {

                            if(data['success']) {
                                //console.log('sebelum: '+data['data_message']);
                                if(data['data_message']!='') {
                                    //console.log('sesudah: '+data['data_message']);
                                    var data_message = data['data_message'];
                                    var last_total_new_message = eval($('#total_new_message').text());
                                    last_total_new_message = last_total_new_message==undefined?0:last_total_new_message;
                                    var total_new_message = eval(data_message['total_new_message'])+last_total_new_message;
                                    $('#total_new_message').html(total_new_message);
                                    if(total_new_message>0) { $('#total_new_message').show(); } else { $('#total_new_message').hide(); }
                                    
                                    var last_id_message = data_message['last_id_message'];
                                    $('[name=last_id_message]').val(last_id_message);
                                    
                                    while($('#list_new_message').children()>0) {
                                        var lis = $('#list_new_message').children();
                                        $(lis.get(0)).remove();
                                    }
                                        
                                    var html_replace = '<ul id="list_new_message" class="dropdown-menu dropdown-messages">';
                                    var list_new_message = data_message['list_new_message'];
                                    for(var key in list_new_message) {
                                        html_replace+='<li>' +
                                            '<a href="http://192.168.1.101/gomocart/adminweb/message_in/edit.php?id='+list_new_message[key]["id"]+'">' +
                                                '<div style="white-space: nowrap;">' +
                                                    '<strong>'+list_new_message[key]["nama"]+' </strong>'+(list_new_message[key]["status"]==0?' <span class="pull-right label label-danger">new</span>':'') +
                                                '</div>' +
                                                '<div>' +
                                                    list_new_message[key]["text"] + ' ' +
                                                    '<span class="pull-right text-muted">' +
                                                        '<em>'+list_new_message[key]["waktu"]+'</em>' +
                                                    '</span> <br /><br />' +
                                                '</div>' +
                                            '</a>' +
                                        '</li>' +
                                        '<li class="divider"></li>';                                        
                                    }                           
                                    html_replace+='<li>' +
                                            '<a class="text-center" href="http://192.168.1.101/gomocart/adminweb/message_in/">' +
                                                '<strong>Baca Semua Pesan</strong>' +
                                                '<i class="fa fa-angle-right"></i>' +
                                            '</a>' +
                                        '</li>' +
                                    '</ul>';
                                    $( '#list_new_message').replaceWith( html_replace ); 
                                }
                                
                                
                                //console.log('sebelum: '+data['data_order']);
                                if(data['data_order']!='') {
                                    //console.log('sesudah: '+data['data_order']);
                                    var data_order = data['data_order'];
                                    var last_total_new_order = eval($('#total_new_order').text());
                                    last_total_new_order = last_total_new_order==undefined?0:last_total_new_order;
                                    var total_new_order = eval(data_order['total_new_order'])+last_total_new_order;
                                    $('#total_new_order').html(total_new_order);
                                    if(total_new_order>0) { $('#total_new_order').show(); } else { $('#total_new_order').hide(); }
                                    
                                    var last_id_order = data_order['last_id_order'];
                                    $('[name=last_id_order]').val(last_id_order);
                                    
                                    while($('#list_new_order').children()>0) {
                                        var lis = $('#list_new_order').children();
                                        $(lis.get(0)).remove();
                                    }
                                        
                                    var html_replace = '<ul id="list_new_order" class="dropdown-menu dropdown-messages">';
                                    var list_new_order = data_order['list_new_order'];
                                    for(var key in list_new_order) {
                                        html_replace+='<li>' +
                                            '<a href="http://192.168.1.101/gomocart/adminweb/pemesanan/list.php?query=?id='+list_new_order[key]["kode"]+'">' +
                                                '<div style="white-space: nowrap;">' +
                                                    '<strong>Customer: '+(list_new_order[key]['id_member']==0?'Tamu':list_new_order[key]['nama'])+' </strong>'+(list_new_order[key]["status"]==0?' <span class="pull-right label label-danger">wait</span>':'') +
                                                '</div>' +
                                                
                                                '<div>' +
                                                    'ID Pesanan: #'+list_new_order[key]['kode']+' '+(list_new_order[key]['is_dropship']=='Y'?'<span class="label label-danger">DROPSHIP</span>':'')+'<br />' +
                                                    '<span class="label label-info">'+list_new_order[key]['jumlah']+' Pcs</span> <span class="label label-danger">Rp. '+list_new_order[key]['total']+'</span> ' +
                                                    '<span class="pull-right text-muted">' +
                                                        '<em>'+list_new_order[key]["waktu"]+'</em>' +
                                                    '</span> <br /><br />' +
                                                '</div>' +
                                            '</a>' +
                                        '</li>' +
                                        '<li class="divider"></li>';                                        
                                    }                           
                                    html_replace+='<li>' +
                                            '<a class="text-center" href="http://192.168.1.101/gomocart/adminweb/pemesanan/">' +
                                                '<strong>Lihat Semua Pesanan</strong>' +
                                                '<i class="fa fa-angle-right"></i>' +
                                            '</a>' +
                                        '</li>' +
                                    '</ul>';
                                    $( '#list_new_order').replaceWith( html_replace ); 
                                }
                                
                                //console.log('sebelum: '+data['data_konfirmasi']);
                                if(data['data_konfirmasi']!='') {
                                    //console.log('sesudah: '+data['data_konfirmasi']);
                                    var data_konfirmasi = data['data_konfirmasi'];
                                    var last_total_new_konfirmasi = eval($('#total_new_konfirmasi').text());
                                    last_total_new_konfirmasi = last_total_new_konfirmasi==undefined?0:last_total_new_konfirmasi;
                                    var total_new_konfirmasi = eval(data_konfirmasi['total_new_konfirmasi'])+last_total_new_konfirmasi;
                                    $('#total_new_konfirmasi').html(total_new_konfirmasi);
                                    if(total_new_konfirmasi>0) { $('#total_new_konfirmasi').show(); } else { $('#total_new_konfirmasi').hide(); }
                                    
                                    var last_id_konfirmasi = data_konfirmasi['last_id_konfirmasi'];
                                    $('[name=last_id_konfirmasi]').val(last_id_konfirmasi);
                                    
                                    while($('#list_new_konfirmasi').children()>0) {
                                        var lis = $('#list_new_konfirmasi').children();
                                        $(lis.get(0)).remove();
                                    }
                                        
                                    var html_replace = '<ul id="list_new_konfirmasi" class="dropdown-menu dropdown-messages">';
                                    var list_new_konfirmasi = data_konfirmasi['list_new_konfirmasi'];
                                    for(var key in list_new_konfirmasi) {
                                        html_replace+='<li>' +
                                            '<a href="http://192.168.1.101/gomocart/adminweb/konfirmasi/list.php?query='+list_new_konfirmasi[key]["kode_pemesanan"]+'">' +
                                                '<div style="white-space: nowrap;">' +
                                                    '<strong>Customer: '+(list_new_konfirmasi[key]['id_member']==0?'Tamu':list_new_konfirmasi[key]['nama'])+' </strong>'+(list_new_konfirmasi[key]["status"]==0?' <span class="pull-right label label-danger">wait</span>':'') +
                                                '</div>' +                                                
                                                '<div>' +
                                                    list_new_message[key]["text"] + ' ' +
                                                    '<span class="pull-right text-muted">' +
                                                        '<em>'+list_new_konfirmasi[key]["waktu"]+'</em>' +
                                                    '</span> <br /><br />' +
                                                '</div>' +
                                            '</a>' +
                                        '</li>' +
                                        '<li class="divider"></li>';                                        
                                    }                           
                                    html_replace+='<li>' +
                                            '<a class="text-center" href="konfirmasi/list.php">' +
                                                '<strong>Lihat Semua Konfirmasi</strong>' +
                                                '<i class="fa fa-angle-right"></i>' +
                                            '</a>' +
                                        '</li>' +
                                    '</ul>';
                                    $( '#list_new_konfirmasi').replaceWith( html_replace ); 
                                }
                            }        
                            load_data_dashboard();
                        }, 
                        error: function() {
                            load_data_dashboard();
                        }
                    }); 
                }, 5000);
            };

            load_data_dashboard();
        });
    </script>
    <!-- include summernote -->
    <link rel="stylesheet" href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/dist/summernote.css">
    <script type="text/javascript" src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/dist/summernote.js"></script>
    <script type="text/javascript" src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/dist/summernote-ext-video.js"></script> 
        
    <script type="text/javascript" src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery.cropit.js"></script>  
        
    <script type="text/javascript">        
        $(function () {           
            var isEdit = true;
            
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="1" name="telepon" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_telepon" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#telepon" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="2" name="telepon" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_telepon">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#telepon" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="3" name="telepon" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_telepon">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#telepon" );
                                        
            $( document ).on( 'click', '.hapus_telepon', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_telepon').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="telepon" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_telepon">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#telepon" );
            });
            //-----------------
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="4" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_no_hp" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#no_hp" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="5" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_no_hp">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#no_hp" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="6" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_no_hp">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#no_hp" );
                                        
            $( document ).on( 'click', '.hapus_no_hp', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_no_hp').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_no_hp">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#no_hp" );
            });
            //---------------------
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="sms" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_sms" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#sms" );
                                        
            $( document ).on( 'click', '.hapus_sms', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_sms').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="sms" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_sms">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#sms" );
            });
            //------
            
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="wa" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_wa" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#wa" );
                                        
            $( document ).on( 'click', '.hapus_wa', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_wa').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="wa" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_wa">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#wa" );
            });
            //-----------------
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="bbm" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_bbm" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#bbm" );
                                        
            $( document ).on( 'click', '.hapus_bbm', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_bbm').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="bbm" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_bbm">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#bbm" );
            });
            //---------------------
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="line" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_line" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#line" );
                                        
            $( document ).on( 'click', '.hapus_line', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_line').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="line" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_line">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#line" );
            });
            //-----------
            
            $('#propinsi').on('change', function (e) {
                loadKota(this.value, 0);
            });
            
            function loadKota(propinsi, kota) {
                $("#kota").empty();
                //$('<option value="0">-- Pilih Kota --</option>').appendTo('#kota');

                $.ajax({
                    type: 'POST',
                    url: 'http://192.168.1.101/gomocart/store/getKota.php',
                    data: { 'propinsi': propinsi },
                    dataType: 'json',
                    success: function(data) {
                        var store = data['topics'];
                        var data = ''; //'<option value="0">-- Pilih Kota --</option>';
                        for(var key in store) {
                            data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';
                        }
                        $("#kota").empty();
                        $(data).appendTo('#kota');
                    }
                });    
            }
            
            loadKota('11', '255');                
            $('.summernote').summernote({
                height: 170,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    //['fontname', ['fontname']],
                    // ['fontsize', ['fontsize']], Still buggy
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    //['view', ['fullscreen' , 'codeview' ]],
                    ['help', ['help']]
                ]
            });

            $(".summernote").code('detail');
            
            $('.image-editor').cropit({
              smallImage: 'stretch',
              imageState: {
                src: 'http://192.168.1.101/gomocart/uploads/umum/8619.png',
              }            });
            
            function setMessage(type, message) {
                $('#alert_'+type+' .alert').text(message);
                $('#alert_'+type).show('slow');
                setTimeout(function() {
                    $('#alert_'+type).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }
            
            $('#btn_simpan_pengaturan').click(function() {            
                var data = new FormData();
                data.append('jatuh_tempo', $('[name=jatuh_tempo]').val());
                data.append('stok_minimum', $('[name=stok_minimum]').val());
                data.append('is_tampilkan_stok', $('[name=tampilkan_stok]').is(':checked')?'Y':'N');     
                
                setLoading(true, 'pengaturan');
                $.ajax({
                    type: 'POST',
                    url: 'updatePengaturan.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'pengaturan');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'pengaturan');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            $('#btn_simpan_alamat').click(function() {            
                var data = new FormData();
                data.append('address', $('[name=alamat]').val());
                data.append('propinsi', $('[name=propinsi]').val());
                data.append('nama_propinsi', $("#propinsi option[value='"+$('[name=propinsi]').val()+"']").text());
                data.append('kota', $('[name=kota]').val());
                data.append('nama_kota', $("#kota option[value='"+$('[name=kota]').val()+"']").text());
                data.append('kode_pos', $('[name=kode_pos]').val());                
                data.append('latitude', $('[name=latitude]').val());                
                data.append('longitude', $('[name=longitude]').val());
                
                setLoading(true, 'alamat');
                $.ajax({
                    type: 'POST',
                    url: 'updateAlamat.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'alamat');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'alamat');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            $('#btn_simpan_umum').click(function() {            
                
                var telepon = '';
                $("#tblTelepon tr").each(function() {
                    var data = $(this).find('[name=telepon]').val();
                    telepon+=(telepon==''?'':'\t')+data;
                });
                
                var no_hp = '';
                $("#tblNo_hp tr").each(function() {
                    var data = $(this).find('[name=no_hp]').val();
                    no_hp+=(no_hp==''?'':'\t')+data;
                });
                
                var sms = '';
                $("#tblSms tr").each(function() {
                    var data = $(this).find('[name=sms]').val();
                    sms+=(sms==''?'':'\t')+data;
                });
                
                var wa = '';
                $("#tblWa tr").each(function() {
                    var data = $(this).find('[name=wa]').val();
                    wa+=(wa==''?'':'\t')+data;
                });
                
                var bbm = '';
                $("#tblBbm tr").each(function() {
                    var data = $(this).find('[name=bbm]').val();
                    bbm+=(bbm==''?'':'\t')+data;
                });
                
                var line = '';
                $("#tblLine tr").each(function() {
                    var data = $(this).find('[name=line]').val();
                    line+=(line==''?'':'\t')+data;
                });
        
                var data = new FormData();
                data.append('judul', $('[name=judul]').val());
                data.append('tagline', $('[name=tagline]').val());
                data.append('detail', $('.summernote').summernote().code().replace(/\n/, '<br />'));
                var imageData = $('.image-editor').cropit('export');
                data.append('filename_gambar', imageData==undefined?'':imageData);
                
                data.append('email', $('[name=email]').val());                
                data.append('telepon', telepon);                
                data.append('no_hp', no_hp);
                data.append('sms', sms);                
                data.append('wa', wa);
                data.append('bbm', bbm);                
                data.append('line', line);

                setLoading(true, 'umum');
                $.ajax({
                    type: 'POST',
                    url: 'updateUmum.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'umum');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'umum');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });
            
            function setLoading(isLoading, tab) {
                if(isLoading) {
                    $('#i_loading_'+tab).show();
                    $('#btn_simpan_'+tab).hide();
                } else {
                    $('#i_loading_'+tab).hide();
                    $('#btn_simpan_'+tab).show();                    
                }
            }

            $('#upload_gambar').click(function(){
                $('#fileupload_gambar').trigger('click'); 
                return false;
            });
            
                    
             
        });
    </script>
</body>
</html><?php }} ?>
