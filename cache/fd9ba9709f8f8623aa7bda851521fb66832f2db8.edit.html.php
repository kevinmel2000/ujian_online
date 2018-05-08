<?php /*%%SmartyHeaderCode:13328579c230b516824-08339444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9ba9709f8f8623aa7bda851521fb66832f2db8' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pengguna\\edit.html',
      1 => 1470298466,
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
  'nocache_hash' => '13328579c230b516824-08339444',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a2fc72136165_46434582',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2fc72136165_46434582')) {function content_57a2fc72136165_46434582($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User</title>
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
                                        <em>8 jam lalu</em>
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
                                        <em>20 jam lalu</em>
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
                            <a href="#"><i class="fa fa-asterisk"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level">
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/bank/"><i class="fa fa-money"></i> Metode Pembayaran</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.1.101/gomocart/adminweb/ekspedisi/"><i class="fa fa-truck"></i> Ekspedisi</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li class="active-menu">
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
                    
                    <li>
                        <a href="#"><i class="fa fa-asterisk"></i> Pengaturan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
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
                    <li class="active-menu">
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
                            User <small>Edit User</small>
                        </h1>
                        <!-- ol class="breadcrumb">
                          <li><a href="http://192.168.1.101/gomocart">Home</a></li>
                          <li><a href="http://192.168.1.101/gomocart/category">User</a></li>
                          <li class="active">Edit User</li>
                        </ol -->
                    </div>
                </div>
				
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" value="Administrator Gomocart" class="form-control" name="nama" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="userid">User ID:</label>
                        <input type="text" value="admin" class="form-control" name="userid" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" value="inagrosir@gmail.com" class="form-control" name="email" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" value="" class="form-control" name="password" placeholder="Biarkan jika tidak ingin diganti." />
                    </div>

                    <div class="form-group">
                        <label for="konfirmasi">Konfirmasi Password</label>
                        <input type="password" value="" class="form-control" name="konfirmasi" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="menu">Menu Akses</label>
                    
                        <table id="tblMenu" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="10%"><div style="text-align: center;">No.</div></th>
                                    <th width="30%"><div style="text-align: center;">Menu</div></th>
                                    <th width="60%"><div style="text-align: center;">Akses</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                                                                                    
                                    <tr id="baris_1" id_menu="1">
                                        <td align="center">1</td>
                                        <td align="left">Dashboard</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_1_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_3" id_menu="3">
                                        <td align="center">2</td>
                                        <td align="left"><b>Pesanan</b> - Keep / Belum Lunas</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_3_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_3_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_4" id_menu="4">
                                        <td align="center">3</td>
                                        <td align="left"><b>Pesanan</b> - Data Pesanan</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_4_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_4_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_4_P" class="check_box" type="checkbox" value="P" checked /> Edit Pengiriman</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_4_B" class="check_box" type="checkbox" value="B" checked /> Batalkan Pesanan</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_5" id_menu="5">
                                        <td align="center">4</td>
                                        <td align="left"><b>Pesanan</b> - Buat Pesanan</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_5_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_6" id_menu="6">
                                        <td align="center">5</td>
                                        <td align="left">Konfirmasi Pembayaran</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_6_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_6_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_7" id_menu="7">
                                        <td align="center">6</td>
                                        <td align="left">Data Pelanggan</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_7_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_7_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_7_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_7_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_9" id_menu="9">
                                        <td align="center">7</td>
                                        <td align="left"><b>Konten Website</b> - Banner</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_9_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_9_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_9_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_9_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_10" id_menu="10">
                                        <td align="center">8</td>
                                        <td align="left"><b>Konten Website</b> - Widget</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_10_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_10_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_10_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_10_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_11" id_menu="11">
                                        <td align="center">9</td>
                                        <td align="left"><b>Konten Website</b> - Halaman</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_11_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_11_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_11_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_11_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_13" id_menu="13">
                                        <td align="center">10</td>
                                        <td align="left"><b>Katalog</b> - Kategori</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_13_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_13_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_13_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_13_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_14" id_menu="14">
                                        <td align="center">11</td>
                                        <td align="left"><b>Katalog</b> - Produk</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_14_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_14_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_14_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_14_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_15" id_menu="15">
                                        <td align="center">12</td>
                                        <td align="left"><b>Katalog</b> - Stok</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_15_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_15_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_16" id_menu="16">
                                        <td align="center">13</td>
                                        <td align="left">Voucher</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_16_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_16_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_16_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_16_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_17" id_menu="17">
                                        <td align="center">14</td>
                                        <td align="left">Message</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_17_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_17_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_17_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_17_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_19" id_menu="19">
                                        <td align="center">15</td>
                                        <td align="left"><b>Laporan</b> - Pembayaran</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_19_L" class="check_box" type="checkbox" value="L"  /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_20" id_menu="20">
                                        <td align="center">16</td>
                                        <td align="left"><b>Laporan</b> - Pesanan</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_20_L" class="check_box" type="checkbox" value="L"  /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_22" id_menu="22">
                                        <td align="center">17</td>
                                        <td align="left"><b>Pengaturan</b> - Umum</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_22_E" class="check_box" type="checkbox" value="E"  /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_23" id_menu="23">
                                        <td align="center">18</td>
                                        <td align="left"><b>Pengaturan</b> - Metode Pembayaran</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_23_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_23_T" class="check_box" type="checkbox" value="T"  /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_23_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_23_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_24" id_menu="24">
                                        <td align="center">19</td>
                                        <td align="left"><b>Pengaturan</b> - Ekspedisi</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_24_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_24_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_24_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_24_H" class="check_box" type="checkbox" value="H"  /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                                    
                                    <tr id="baris_25" id_menu="25">
                                        <td align="center">20</td>
                                        <td align="left">Managemen User</td>                                        
                                        <td>
                                                                                            <label class="control-label"><input name="checkbox_25_L" class="check_box" type="checkbox" value="L" checked /> Lihat</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_25_T" class="check_box" type="checkbox" value="T" checked /> Tambah</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_25_E" class="check_box" type="checkbox" value="E" checked /> Edit</label>&nbsp;&nbsp;&nbsp;
                                                                                            <label class="control-label"><input name="checkbox_25_H" class="check_box" type="checkbox" value="H" checked /> Hapus</label>&nbsp;&nbsp;&nbsp;
                                                                                    </td>
                                    </tr>
                                      
                                                            </tbody>
                        </table>
                                
                        
                    </div>
                    
                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <td width="100%">&nbsp;</td> 
                                    <td nowrap>
                                        <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>                  
                                        <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                        <a id="btn_batal"  href="list.php" class="btn btn-warning">Batal</a>                                                        
                                    </td>
                                </tr>
                            </tbody>                                
                        </table>
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
    <script type="text/javascript">
        $(function () {           
            var isEdit = true;
            
            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }

            $('#btn_simpan').click(function() {
                var menu = "";
                $("#tblMenu tr").each(function() {
                    var id_menu = this.getAttribute('id_menu');
                    var result = "";
                    $("#baris_"+id_menu+" .check_box").each(function() {
                        var value = this.getAttribute('value');
                        var name = "checkbox_"+id_menu+"_"+value;
                        if($('[name='+name+']').is(':checked')) { result+=value; }
                    });
                        
                    if(result.length>0) { menu+=(menu.length>0?'\n':'')+id_menu+'\t'+result; }
                });
                
                var data = new FormData();
                data.append('id', isEdit?'1':'');
                data.append('nama', $('[name=nama]').val());
                data.append('userid', $('[name=userid]').val());
                data.append('email', $('[name=email]').val());
                data.append('password', $('[name=password]').val());
                data.append('konfirmasi', $('[name=konfirmasi]').val());
                data.append('menu', menu);

                setLoading(true);
                $.ajax({
                    type: 'POST',
                    url: isEdit?'update.php':'save.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        if(data['success']) {
                            window.location = 'list.php';                    
                        } else {
                            setLoading(false);
                            setErrorMessage(data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false);
                        setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            function setLoading(isLoading) {
                if(isLoading) {
                    $('#i_loading').show();
                    $('#btn_simpan').hide();
                    $('#btn_batal').hide();
                } else {
                    $('#i_loading').hide();
                    $('#btn_simpan').show(); 
                    $('#btn_batal').show();                    
                }
            }                
        });
    </script>
</body>
</html><?php }} ?>
