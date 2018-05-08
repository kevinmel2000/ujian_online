<?php /*%%SmartyHeaderCode:100845785b8da91df31-43990793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '918bceb9b5144fc7916ca79145e13232f5080d76' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pemesanan\\list.html',
      1 => 1470140312,
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
  'nocache_hash' => '100845785b8da91df31-43990793',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a2edb57a1d07_13294868',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2edb57a1d07_13294868')) {function content_57a2edb57a1d07_13294868($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan</title>
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
                                        <em>7 jam lalu</em>
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
                                        <em>19 jam lalu</em>
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
                                        <em>4 hari lalu</em>
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
                                            <li class="active-menu">
                            <a href="#"><i class="fa fa-folder"></i> Pesanan <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level collapse in">
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
                                            <li>
                            <a href="http://192.168.1.101/gomocart/adminweb/pengguna/"><i class="fa fa-user"></i> Managemen User </a>
                                                    </li>
                                     </ul>   

                    
                    
                <!-- ul class="nav" id="main-menu">    
                    <li>
                        <a href="http://192.168.1.101/gomocart/adminweb/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li class="active-menu">
                        <a href="#"><i class="fa fa-folder"></i> Pesanan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">
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
                            Pemesanan <small>List of Pemesanan</small>
                        </h1>
                        <!-- ol class="breadcrumb">
                          <li><a href="http://192.168.1.101/gomocart">Home</a></li>
                          <li><a href="http://192.168.1.101/gomocart/pemesanan">Pemesanan</a></li>
                          <li class="active">List of Pemesanan</li>
                        </ol -->
                    </div>
                </div>
				
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_success" class="form-group" style="display: none;">                         
                        <div class="alert alert-info">&nbsp;</div>
                    </div>
                
                    <div id="alert_error" class="form-group" style="display: none;">                         
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <table style="width: 100%;">
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Dari Tanggal:</label></td>
                                <td width="80%">
                                    <table width="100%">
                                        <tr>
                                            <td width="40%">
                                                <input type="text" value="" class="form-control tanggal" name="tanggal_dari" placeholder="Klik Untuk Memilih Tanggal" />
                                            </td>
                                            <td style="text-align: center;">
                                                <label>Sampai Tanggal:</label>
                                            </td>
                                            <td width="40%">
                                                <input type="text" value="" class="form-control tanggal" name="tanggal_sampai" placeholder="Klik Untuk Memilih Tanggal" />                                        
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Jenis Pesanan:</label></td>
                                <td width="80%">
                                    <select id="filter_jenis" class="form-control" name="jenis" placeholder="Klik Untuk Memilih Jenis Pesanan">
                                        <option value="0" selected="selected">Klik Untuk Memilih Jenis Pesanan</option>
                                        <option value="N" >Bukan Dropship</option>
                                        <option value="Y" >Dropship</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Status Pembayaran:</label></td>
                                <td width="80%">
                                    <select id="filter_status" class="form-control" name="status"  placeholder="Klik Untuk Memilih Status Pembayaran">
                                        <option value="0" selected="selected">Klik Untuk Memilih Status Pembayaran</option>
                                        <option value="N" >Belum Lunas</option>
                                        <option value="Y" >Lunas</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <!-- tr>
                                <td width="20%" style="padding: 8px;"><label>Status Pesanan:</label></td>
                                <td width="80%">
                                    <select id="filter_status" class="form-control" name="status">
                                        <option value="A" selected="selected">Semua Status Pesanan</option>
                                        <option value="0" selected="selected">Menunggu Pembayaran (Belum Lunas)</option>
                                        <option value="3" >Konfirmasi Pembayaran (Belum Lunas)</option>
                                        <option value="1" >Pembayaran Ditolak (Belum Lunas)</option>
                                        <option value="2" >Pembayaran Diterima (Lunas)</option>
                                        <option value="4" >Pesanan Dibatalkan (Belum Lunas)</option>
                                        <option value="5" >Transaksi Selesai (Lunas)</option>
                                    </select>
                                </td>
                            </tr -->
                            
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Keyword Pencarian:</label></td>
                                <td width="80%">
                                    <table>
                                        <tr>
                                            <td width="100%"><input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." /></td>
                                            <td width="5px">&nbsp;</td> 
                                            <td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
                                            <td width="5px">&nbsp;</td> 
                                            <td><a class="btn btn-default" href="list.php">Reset</a></td>  
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                    
                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <td><div id='btn_delete' class="btn btn-danger disabled">Batalkan Pemesanan</div></td>                                    <!-- td width="5px">&nbsp;</td>
                                    <td width="100%"><input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." /></td>
                                    <td width="5px">&nbsp;</td> 
                                    <td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
                                    <td width="5px">&nbsp;</td> 
                                    <td><a class="btn btn-default" href="list.php">Reset</a></td -->  
                                </tr>
                            </tbody>                                
                        </table>
                    </div>
                    <div id="detail" class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5px"><input type="checkbox" id="select_all"  class="form-control" /></th>
                                        <th width="10%"><div style="text-align: center;">No.</div></th>
                                        <th width="90%"><div style="text-align: center;">Data Pemesanan</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                                            
                                        <tr id="baris_12">
                                            <td align="center"><input type="checkbox" id_select="12" name="select_12" class="form-control select" /></td>
                                            <td align="center">1</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 12</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000012</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Kiezie Ok (kiezie08@gmail.com)</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 04-08-2016 06:50:13</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Kiezie Ok</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 35,000</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNT</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_12"></span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_12' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_12" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_12" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_12" id_histori="12" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_12" id_detail="12" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                                                                                <!-- button id="btn_finish_12" id_finish="12" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_12" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_12">
                                                                                <td align="center">1</td>
                                                                                <td align="center">04-08-2016</td>
                                                                                <td align="left">Customer melakukan checkout.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_12" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: XL<br />Warna BIRU</td>
                                                                                <td align="center">1</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="12" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                                                                                                                                
                                                        <!-- div id="edit_finish_12" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_12" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_12" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_12" id_finish="12" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_11">
                                            <td align="center"><input type="checkbox" id_select="11" name="select_11" class="form-control select" /></td>
                                            <td align="center">2</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 11</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000011</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Kiezie Ok (kiezie08@gmail.com)</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 03-08-2016 19:07:27</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Kiezie Ok</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 70,000</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> 0</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_11"></span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_11' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_11" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_11" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_11" id_histori="11" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_11" id_detail="11" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                                                                                <!-- button id="btn_finish_11" id_finish="11" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_11" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_11">
                                                                                <td align="center">1</td>
                                                                                <td align="center">03-08-2016</td>
                                                                                <td align="left">Customer melakukan checkout.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_11" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: XL<br />Warna BIRU</td>
                                                                                <td align="center">2</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 70,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="11" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                                                                                                                                
                                                        <!-- div id="edit_finish_11" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_11" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_11" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_11" id_finish="11" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_10">
                                            <td align="center"><input type="checkbox" id_select="10" name="select_10" class="form-control select" /></td>
                                            <td align="center">3</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 10</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000010</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Guest</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 30-07-2016 14:57:49</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Deltor</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek sanana tijku</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 082343</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 138,000</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> 0</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_10"></span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_10' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_10" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_10" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_10" id_histori="10" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_10" id_detail="10" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                                                                                <!-- button id="btn_finish_10" id_finish="10" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_10" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_10">
                                                                                <td align="center">1</td>
                                                                                <td align="center">30-07-2016</td>
                                                                                <td align="left">Customer melakukan checkout.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_10">
                                                                                <td align="center">2</td>
                                                                                <td align="center">30-07-2016</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_10" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: XL<br />Warna MERAH</td>
                                                                                <td align="center">1</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="10" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                                                                                                                                
                                                        <!-- div id="edit_finish_10" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_10" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_10" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_10" id_finish="10" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_9">
                                            <td align="center"><input type="checkbox" id_select="9" name="select_9" class="form-control select" /></td>
                                            <td align="center">4</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 9</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000009</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Guest</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 24-07-2016 07:50:32</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Bogel</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Jalan amburadul</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 114,000</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> POS</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_9"></span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_9' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_9" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_9" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_9" id_histori="9" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_9" id_detail="9" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                                                                                <!-- button id="btn_finish_9" id_finish="9" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_9" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_9">
                                                                                <td align="center">1</td>
                                                                                <td align="center">24-07-2016</td>
                                                                                <td align="left">Customer melakukan checkout.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_9" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: XL<br />Warna MERAH</td>
                                                                                <td align="center">2</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 70,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="9" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                                                                                                                                
                                                        <!-- div id="edit_finish_9" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_9" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_9" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_9" id_finish="9" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_8">
                                            <td align="center"><input type="checkbox" id_select="8" name="select_8" class="form-control select" /></td>
                                            <td align="center">5</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 8</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000008</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Guest</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 24-07-2016 07:33:06</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> undefined</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> undefined</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> undefined</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 70,000</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> undefined</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_8"></span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_8' style="font-weight: bold; color: orange;">Customer melakukan konfirmasi pembayaran.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_8" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_8" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_8" id_histori="8" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_8" id_detail="8" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                                                                                <!-- button id="btn_finish_8" id_finish="8" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_8" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_8">
                                                                                <td align="center">1</td>
                                                                                <td align="center">24-07-2016</td>
                                                                                <td align="left">Customer melakukan checkout.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_8">
                                                                                <td align="center">2</td>
                                                                                <td align="center">24-07-2016</td>
                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 70.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_8" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: XL<br />Warna MERAH</td>
                                                                                <td align="center">1</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_">
                                                                                <td align="center">2</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: XL<br />Warna MERAH</td>
                                                                                <td align="center">1</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="8" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                                                                                                                                
                                                        <!-- div id="edit_finish_8" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_8" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_8" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_8" id_finish="8" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_7">
                                            <td align="center"><input type="checkbox" id_select="7" name="select_7" class="form-control select" /></td>
                                            <td align="center">6</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 7</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000007</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Kiezie Ok (kiezie08@gmail.com)</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 20-07-2016 19:11:15</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Rifki Heruprasetyo</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 57,000</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> POS</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_7">A1234</span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_7' style="font-weight: bold; color: green;">Pesanan sudah diterima.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_7" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_7" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_7" id_histori="7" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_7" id_detail="7" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <button id="btn_noresi_7" id_noresi="7" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>                                                        <!-- button id="btn_finish_7" id_finish="7" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_7" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_7">
                                                                                <td align="center">1</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Admin membuat pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_7">
                                                                                <td align="center">2</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Admin menerima pembayaran customer.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_7">
                                                                                <td align="center">3</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Admin menutup pesanan. Transaksi dianggap selesai.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_7">
                                                                                <td align="center">4</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Pesanan dalam proses.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_7">
                                                                                <td align="center">5</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Pesanan dalam proses.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_7">
                                                                                <td align="center">6</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Pesanan sudah dikirim dengan no. resi pengiriman A1234.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_7">
                                                                                <td align="center">7</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Pesanan sudah diterima.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_7" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: XL<br />Warna MERAH</td>
                                                                                <td align="center">1</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="7" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                <div id="edit_no_resi_7" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">                                                                
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>
                                                                        <td colspan="2" width="70%">
                                                                            <select class="form-control" name="status_pesanan_7">
                                                                                <option value="2" >Pesanan Dalam Proses.</option>
                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>
                                                                                <option value="5"  selected="selected">Pesanan Sudah Diterima.</option>
                                                                            </select>
                                                                        </td>                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>
                                                                        <td width="60%"><input type="text" value="A1234" class="form-control" name="no_resi_7" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_noresi_7" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_7" id_noresi="7" type="button" class="btn btn-danger simpan_noresi">Update Status</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>                                                                                                                
                                                        <!-- div id="edit_finish_7" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_7" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_7" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_7" id_finish="7" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_6">
                                            <td align="center"><input type="checkbox" id_select="6" name="select_6" class="form-control select" /></td>
                                            <td align="center">7</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 6</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000006</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Guest</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 18-07-2016 12:56:45</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> b</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> acd</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 213</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 207,000</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_6">AADC123</span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_6' style="font-weight: bold; color: green;">Pesanan telah dikirim.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_6" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_6" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_6" id_histori="6" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_6" id_detail="6" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <button id="btn_noresi_6" id_noresi="6" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>                                                        <!-- button id="btn_finish_6" id_finish="6" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_6" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_6">
                                                                                <td align="center">1</td>
                                                                                <td align="center">18-07-2016</td>
                                                                                <td align="left">Customer melakukan checkout.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_6">
                                                                                <td align="center">2</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Paket telah dikirm dengan no. resi pengiriman AADC123.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_6" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/block-bearing_2169.png" width="48px" /></td>
                                                                                <td align="left">Block Bearing (BB0909)</td>
                                                                                <td align="center">6</td>
                                                                                <td align="right">Rp. 5,000</td>
                                                                                <td align="right">Rp. 30,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_">
                                                                                <td align="center">2</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: L<br />Warna BIRU</td>
                                                                                <td align="center">3</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 105,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="6" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                <div id="edit_no_resi_6" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">                                                                
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>
                                                                        <td colspan="2" width="70%">
                                                                            <select class="form-control" name="status_pesanan_6">
                                                                                <option value="2" >Pesanan Dalam Proses.</option>
                                                                                <option value="6"  selected="selected">Pesanan Sudah Dikirim.</option>
                                                                                <option value="5" >Pesanan Sudah Diterima.</option>
                                                                            </select>
                                                                        </td>                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>
                                                                        <td width="60%"><input type="text" value="AADC123" class="form-control" name="no_resi_6" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_noresi_6" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_6" id_noresi="6" type="button" class="btn btn-danger simpan_noresi">Update Status</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>                                                                                                                
                                                        <!-- div id="edit_finish_6" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_6" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_6" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_6" id_finish="6" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_2">
                                            <td align="center"><input type="checkbox" id_select="2" name="select_2" class="form-control select" /></td>
                                            <td align="center">8</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 2</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000002</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Kiezie Ok (kiezie08@gmail.com)</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 27-06-2016 21:25:09</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Kiezie OK L</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 115,105</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> POS</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_2">AC321</span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_2' style="font-weight: bold; color: green;">Pesanan sudah diterima.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_2" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_2" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_2" id_histori="2" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_2" id_detail="2" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <button id="btn_noresi_2" id_noresi="2" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>                                                        <!-- button id="btn_finish_2" id_finish="2" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_2" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_2">
                                                                                <td align="center">1</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Paket sudah diterima. Transaksi Selesai!</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_2">
                                                                                <td align="center">2</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Paket sudah diterima. Transaksi Selesai!</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_2">
                                                                                <td align="center">3</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_2">
                                                                                <td align="center">4</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Admin menerima pembayaran customer.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_2">
                                                                                <td align="center">5</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Pesanan sudah dikirim dengan no. resi pengiriman AC321.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_2">
                                                                                <td align="center">6</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Pesanan sudah diterima.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_2" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/etk-portable_3187.png" width="48px" /></td>
                                                                                <td align="left">ETK Portable (EKG1234)</td>
                                                                                <td align="center">5</td>
                                                                                <td align="right">Rp. 10,800</td>
                                                                                <td align="right">Rp. 54,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="2" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                <div id="edit_no_resi_2" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">                                                                
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>
                                                                        <td colspan="2" width="70%">
                                                                            <select class="form-control" name="status_pesanan_2">
                                                                                <option value="2" >Pesanan Dalam Proses.</option>
                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>
                                                                                <option value="5"  selected="selected">Pesanan Sudah Diterima.</option>
                                                                            </select>
                                                                        </td>                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>
                                                                        <td width="60%"><input type="text" value="AC321" class="form-control" name="no_resi_2" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_noresi_2" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_2" id_noresi="2" type="button" class="btn btn-danger simpan_noresi">Update Status</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>                                                                                                                
                                                        <!-- div id="edit_finish_2" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_2" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_2" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_2" id_finish="2" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_5">
                                            <td align="center"><input type="checkbox" id_select="5" name="select_5" class="form-control select" /></td>
                                            <td align="center">9</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 5</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000005</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Kiezie Ok (kiezie08@gmail.com)</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 27-06-2016 19:15:05</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Kiezie OK L</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 240,545</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> POS</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_5">A1244</span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_5' style="font-weight: bold; color: green;">Pesanan telah dikirim.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_5" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_5" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_5" id_histori="5" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_5" id_detail="5" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <button id="btn_noresi_5" id_noresi="5" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>                                                        <!-- button id="btn_finish_5" id_finish="5" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_5" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_5">
                                                                                <td align="center">1</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Customer melakukan checkout.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_5">
                                                                                <td align="center">2</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp. 94,000.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_5">
                                                                                <td align="center">3</td>
                                                                                <td align="center">13-07-2016</td>
                                                                                <td align="left">Admin menerima konfirmasi pembayaran customer.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_5">
                                                                                <td align="center">4</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_5">
                                                                                <td align="center">5</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_5">
                                                                                <td align="center">6</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Paket telah dikirm dengan no. resi pengiriman A1244.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_5" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/block-bearing_2169.png" width="48px" /></td>
                                                                                <td align="left">Block Bearing (BB0909)</td>
                                                                                <td align="center">6</td>
                                                                                <td align="right">Rp. 5,000</td>
                                                                                <td align="right">Rp. 30,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_">
                                                                                <td align="center">2</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: L<br />Warna BIRU</td>
                                                                                <td align="center">3</td>
                                                                                <td align="right">Rp. 35,000</td>
                                                                                <td align="right">Rp. 105,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="5" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                <div id="edit_no_resi_5" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">                                                                
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>
                                                                        <td colspan="2" width="70%">
                                                                            <select class="form-control" name="status_pesanan_5">
                                                                                <option value="2" >Pesanan Dalam Proses.</option>
                                                                                <option value="6"  selected="selected">Pesanan Sudah Dikirim.</option>
                                                                                <option value="5" >Pesanan Sudah Diterima.</option>
                                                                            </select>
                                                                        </td>                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>
                                                                        <td width="60%"><input type="text" value="A1244" class="form-control" name="no_resi_5" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_noresi_5" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_5" id_noresi="5" type="button" class="btn btn-danger simpan_noresi">Update Status</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>                                                                                                                
                                                        <!-- div id="edit_finish_5" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_5" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_5" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_5" id_finish="5" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_4">
                                            <td align="center"><input type="checkbox" id_select="4" name="select_4" class="form-control select" /></td>
                                            <td align="center">10</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 4</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000004</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Kiezie Ok (kiezie08@gmail.com)</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 27-06-2016 07:48:04</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Kiezie OK L</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 86,400</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_4">asd</span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_4' style="font-weight: bold; color: green;">Pesanan telah dikirim.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_4" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_4" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_4" id_histori="4" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_4" id_detail="4" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <button id="btn_noresi_4" id_noresi="4" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>                                                        <!-- button id="btn_finish_4" id_finish="4" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_4" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_4">
                                                                                <td align="center">1</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Pemesanan dibatalkan!</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">2</td>
                                                                                <td align="center">27-06-2016</td>
                                                                                <td align="left">Pemesanan dibatalkan!</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">3</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">4</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">5</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">6</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">7</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">8</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">9</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">10</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Admin menutup pesanan. Transaksi dianggap selesai.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">11</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Admin menutup pesanan. Transaksi dianggap selesai.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">12</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Admin menutup pesanan. Transaksi dianggap selesai.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_4">
                                                                                <td align="center">13</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Paket telah dikirm dengan no. resi pengiriman asd.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_4" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/etk-portable_3187.png" width="48px" /></td>
                                                                                <td align="left">ETK Portable (EKG1234)</td>
                                                                                <td align="center">1</td>
                                                                                <td align="right">Rp. 10,800</td>
                                                                                <td align="right">Rp. 10,800</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_">
                                                                                <td align="center">2</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_1746.png" width="48px" /></td>
                                                                                <td align="left">Lorry Wheel (LW29222)<br />Ukuran: L<br />Warna MERAH</td>
                                                                                <td align="center">2</td>
                                                                                <td align="right">Rp. 10,800</td>
                                                                                <td align="right">Rp. 21,600</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="4" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                <div id="edit_no_resi_4" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">                                                                
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>
                                                                        <td colspan="2" width="70%">
                                                                            <select class="form-control" name="status_pesanan_4">
                                                                                <option value="2" >Pesanan Dalam Proses.</option>
                                                                                <option value="6"  selected="selected">Pesanan Sudah Dikirim.</option>
                                                                                <option value="5" >Pesanan Sudah Diterima.</option>
                                                                            </select>
                                                                        </td>                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>
                                                                        <td width="60%"><input type="text" value="asd" class="form-control" name="no_resi_4" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_noresi_4" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_4" id_noresi="4" type="button" class="btn btn-danger simpan_noresi">Update Status</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>                                                                                                                
                                                        <!-- div id="edit_finish_4" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_4" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_4" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_4" id_finish="4" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_3">
                                            <td align="center"><input type="checkbox" id_select="3" name="select_3" class="form-control select" /></td>
                                            <td align="center">11</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 3</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000003</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Kiezie Ok (kiezie08@gmail.com)</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 27-06-2016 07:44:23</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Kiezie OK L</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 94,000</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_3">ASDF</span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_3' style="font-weight: bold; color: green;">Pesanan telah dikirim.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_3" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_3" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_3" id_histori="3" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_3" id_detail="3" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <button id="btn_noresi_3" id_noresi="3" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>                                                        <!-- button id="btn_finish_3" id_finish="3" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_3" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_3">
                                                                                <td align="center">1</td>
                                                                                <td align="center">20-07-2016</td>
                                                                                <td align="left">Paket telah dikirm dengan no. resi pengiriman ASDF.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_3" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/etk-portable_3187.png" width="48px" /></td>
                                                                                <td align="left">ETK Portable (EKG1234)</td>
                                                                                <td align="center">5</td>
                                                                                <td align="right">Rp. 10,800</td>
                                                                                <td align="right">Rp. 54,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="3" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                <div id="edit_no_resi_3" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">                                                                
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>
                                                                        <td colspan="2" width="70%">
                                                                            <select class="form-control" name="status_pesanan_3">
                                                                                <option value="2" >Pesanan Dalam Proses.</option>
                                                                                <option value="6"  selected="selected">Pesanan Sudah Dikirim.</option>
                                                                                <option value="5" >Pesanan Sudah Diterima.</option>
                                                                            </select>
                                                                        </td>                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>
                                                                        <td width="60%"><input type="text" value="ASDF" class="form-control" name="no_resi_3" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_noresi_3" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_3" id_noresi="3" type="button" class="btn btn-danger simpan_noresi">Update Status</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>                                                                                                                
                                                        <!-- div id="edit_finish_3" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_3" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_3" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_3" id_finish="3" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_1">
                                            <td align="center"><input type="checkbox" id_select="1" name="select_1" class="form-control select" /></td>
                                            <td align="center">12</td>
                                            <td>
                                                <table width="100%">
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 1</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#000001</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Kiezie Ok (kiezie08@gmail.com)</td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 25-06-2016 22:31:53</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> Kiezie OK L</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011823</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 156,655</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> POS</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_1"></span></td></tr>                                                    
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">LUNAS</span></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_1' style="font-weight: bold; color: green;">Pesanan sudah diterima.</span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_1" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_1" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_1" id_histori="1" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_1" id_detail="1" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <button id="btn_noresi_1" id_noresi="1" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>                                                        <!-- button id="btn_finish_1" id_finish="1" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
                                                        <div id="detail_histori_1" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_1">
                                                                                <td align="center">1</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                                    <tr id="baris_1">
                                                                                <td align="center">2</td>
                                                                                <td align="center">00-00-0000</td>
                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                        <div id="detail_detail_1" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                                                                                                                            <tr id="baris_">
                                                                                <td align="center">1</td>
                                                                                <td align="center"><img src="http://192.168.1.101/gomocart/uploads/produk/block-bearing_2169.png" width="48px" /></td>
                                                                                <td align="left">Block Bearing (BB0909)</td>
                                                                                <td align="center">10</td>
                                                                                <td align="right">Rp. 5,000</td>
                                                                                <td align="right">Rp. 50,000</td>
                                                                            </tr>
                                                                              
                                                                                                                                            </tbody>                                         
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <button id_edit="1" type="button" class="btn btn-danger edit_pesanan">Edit</button>                                                            </div>
                                                        </div>
                                                        
                                                                                                                <div id="edit_no_resi_1" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">                                                                
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>
                                                                        <td colspan="2" width="70%">
                                                                            <select class="form-control" name="status_pesanan_1">
                                                                                <option value="2" >Pesanan Dalam Proses.</option>
                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>
                                                                                <option value="5"  selected="selected">Pesanan Sudah Diterima.</option>
                                                                            </select>
                                                                        </td>                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_1" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_noresi_1" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_1" id_noresi="1" type="button" class="btn btn-danger simpan_noresi">Update Status</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>                                                                                                                
                                                        <!-- div id="edit_finish_1" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_1" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_finish_1" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_1" id_finish="1" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                </table>
                                                            </div>
                                                        </div -->
                                                    </div></td></tr>
                                                </table>
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
    
    <!-- LOAD MASKING -->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/css/loadmask.css" rel="stylesheet" />
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery.loadmask.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />
    
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/datepick/jquery.datepick.css" rel="stylesheet">
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/datepick/jquery.plugin.js"></script>
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/datepick/jquery.datepick.js"></script>

    <script type="text/javascript">
        $(function () {
            var delete_selected = "";
            
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            $( ".histori" ).click(function() {
                var id = this.getAttribute('id_histori');
                var text = $('#btn_histori_'+id).text();
                if(text=='Sembunyikan Status') {
                    $('#detail_histori_'+id).hide('slow');
                    $('#btn_histori_'+id).html('Lihat Status');
                } else                
                if(text=='Lihat Status') {
                    $('#detail_histori_'+id).show('slow');
                    $('#btn_histori_'+id).html('Sembunyikan Status');
                    
                    $("body, html").animate({ 
                        scrollTop: $('#detail_histori_'+id).offset().top 
                    }, 600);
                }
            });
            
            $( ".detail" ).click(function() {
                var id = this.getAttribute('id_detail');
                var text = $('#btn_detail_'+id).text();
                if(text=='Sembunyikan Detail') {
                    $('#detail_detail_'+id).hide('slow');
                    $('#btn_detail_'+id).html('Tampilkan Detail');
                } else                
                if(text=='Tampilkan Detail') {
                    $('#detail_detail_'+id).show('slow');
                    $('#btn_detail_'+id).html('Sembunyikan Detail');
                    
                    $("body, html").animate({ 
                        scrollTop: $('#btn_detail_'+id).offset().top 
                    }, 600);
                }
            });
            
            $( ".noresi" ).click(function() {
                var id = this.getAttribute('id_noresi');
                var is_open = this.getAttribute('is_open');
                
                if(is_open=='false') {
                    $('#edit_no_resi_'+id).show('slow');
                    $('#btn_noresi_'+id).attr('is_open', 'true');                    
                } else                
                if(is_open=='true') {
                    $('#edit_no_resi_'+id).hide('slow');
                    $('#btn_noresi_'+id).attr('is_open', 'false');
                    
                    $("body, html").animate({ 
                        scrollTop: $('#btn_noresi_'+id).offset().top 
                    }, 600);
                }
            });
            
            /*$( ".finish" ).click(function() {
                var id = this.getAttribute('id_finish');
                var is_open = this.getAttribute('is_open');
                $('[name=nama_penerima_'+id+']').val('');        
                if(is_open=='false') {
                    $('#edit_finish_'+id).show('slow');
                    $('#btn_finish_'+id).attr('is_open', 'true');                    
                } else                
                if(is_open=='true') {
                    $('#edit_finish_'+id).hide('slow');
                    $('#btn_finish_'+id).attr('is_open', 'false');
                    
                    $("body, html").animate({ 
                        scrollTop: $('#btn_finish_'+id).offset().top 
                    }, 600);
                }
            });*/
            
            $( ".edit_pesanan" ).click(function() {
                var id = this.getAttribute('id_edit');
                window.location = 'http://192.168.1.101/gomocart/adminweb/pemesanan/edit.php?id='+id;
                
            });
            
            $( ".simpan_noresi" ).click(function() {
                var id = this.getAttribute('id_noresi');
                $('#i_loading_noresi_'+id).show();
                $('#btn_simpan_noresi_'+id).hide();
                                                                                
                $.ajax({
                    url: 'http://192.168.1.101/gomocart/adminweb/pemesanan/updateResi.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { id: id, no_resi: $('[name=no_resi_'+id+']').val(), status: $('[name=status_pesanan_'+id+']').val()},
                    success: function(data, textStatus, jqXHR) {
                        $('#i_loading_noresi_'+id).hide();
                        $('#btn_simpan_noresi_'+id).show();
                        if(data['success']) {                
                            $('#text_no_resi_'+id).text($('[name=no_resi_'+id+']').val());
                            
                            var status_pesanan = $('[name=status_pesanan_'+id+']').val();
                            $('#text_status_'+id).text(status_pesanan==2?"Pesanan Dalam Proses.":(status_pesanan==5?'Pesanan sudah diterima.':(status_pesanan==6?'Pesanan sudah dikirim.':'')));
                            $('#text_status_'+id).attr('style', 'color: green; font-weight: bold;');
                            
                            $('#edit_no_resi_'+id).hide('slow');
                            $('#btn_noresi_'+id).attr('is_open', 'false');
                            
                        } else {                            
                            setRowMessage('error', data['message'], id);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#i_loading_noresi_'+id).hide();
                        $('#btn_simpan_noresi_'+id).show();
                        setRowMessage('error', 'Edit no. resi gagal.', id);
                    }
                });
            });
            
            $( ".simpan_finish" ).click(function() {
                var id = this.getAttribute('id_finish');
                $('#i_loading_finish_'+id).show();
                $('#btn_simpan_finish_'+id).hide();
                                                                                
                $.ajax({
                    url: 'http://192.168.1.101/gomocart/adminweb/pemesanan/updateTutup.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { id: id, nama_penerima: $('[name=nama_penerima_'+id+']').val()},
                    success: function(data, textStatus, jqXHR) {
                        $('#i_loading_finish_'+id).hide();
                        $('#btn_simpan_finish_'+id).show();
                        if(data['success']) {                
                            $('[name=nama_penerima_'+id+']').val('');
                            $('#edit_nama_penerima_'+id).hide('slow');
                            $('#btn_finish_'+id).attr('is_open', 'false'); 
                        } else {                            
                            setRowMessage('error', data['message'], id);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#i_loading_finish_'+id).hide();
                        $('#btn_simpan_finish_'+id).show();
                        setRowMessage('error', 'Edit no. resi gagal.', id);
                    }
                });
            });
            
            $( "#btn_delete" ).click(function() {
                prosesDelete(delete_selected);
            });
            
            $( "#btn_cari" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var jenis = $( '[name=jenis]' ).val();
                var status = $( '[name=status]' ).val();
                var query = $( "#query" ).val();
                
                window.location='list.php?_'+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'')+
                    (jenis!='0'?'&jenis='+jenis:'')+
                    (status!='0'?'&status='+status:'')+
                    (query.length>0?'&query='+query:'');
            });

            $( "#select_all" ).change(function() {
                var is_checked = $( "#select_all" ).is(':checked');

                var element = $( ".select" );
                var lengh = element.size();
                
                delete_selected = '';
                for(var i=0; i<lengh; i++) {
                    var id = element[i].getAttribute('id_select');
                    var nama = element[i].getAttribute('name');
                
                    $('[name='+nama+']').prop('checked', is_checked);                    
                    if(is_checked) delete_selected+=(delete_selected==''?'':',')+(is_checked?id:"");
                }
                
                setButton();
            });
            
            $( ".select" ).change(function() {
                var id = this.getAttribute('id_select');
                var nama = this.getAttribute('name');
                var is_checked = $( '[name='+nama+']').is(':checked');
        
                var temps = delete_selected.split(',');
                delete_selected='';
                for(var key in temps) {
                    if(temps[key]!=id) delete_selected+=(delete_selected.length>0?",":"")+temps[key];
                }
                delete_selected+=(delete_selected.length>0?",":"")+(is_checked?id:""); 
                
                setButton();
            });
            
            $( "#select_all" ).change(function() {
                var is_checked = $( "#select_all" ).is(':checked');

                var element = $( ".select" );
                var lengh = element.size();
                delete_selected = '';
                for(var i=0; i<lengh; i++) {
                    var id = element[i].getAttribute('id_select');
                    var nama = element[i].getAttribute('name');
                
                    $('[name='+nama+']').prop('checked', is_checked);                    
                    if(is_checked) delete_selected+=(delete_selected.length>0?',':'')+(is_checked?id:"");                    
                }
                
                setButton();
            });
            
            function setButton() {
                var temp = new Array();
                if(delete_selected.length>0) temp = delete_selected.split(',');                
                //$( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
                $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
            }
            
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

            function setRowMessage(type, message, id) {
                $('#alert_'+type+'_'+id+' .alert').text(message);
                $('#alert_'+type+'_'+id).show('slow');
                setTimeout(function() {
                    $('#alert_'+type+'_'+id).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }
            
            function prosesDelete(id) {
                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin membatalkan pesanan yang dipilih?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Pembatalan',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Proses...');
                            $.ajax({
                                url: 'cancelOrder.php',
                                type: 'POST',
                                dataType: 'json',
                                data: { id: id },
                                success: function(data, textStatus, jqXHR) {
                                    if(data['success']) {
                                        window.location='list.php';
                                    } else {
                                        $('#detail').unmask();
                                        setMessage('error', data['message']);
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    $('#detail').unmask();
                                    setMessage('error', 'Terjadi kesalahan system.');
                                }
                            });                                
                            $(this).dialog("close");
                        },
                        No: function () {
                            //doFunctionForNo();
                            $(this).dialog("close");
                        }
                    },
                    close: function (event, ui) {
                        $(this).remove();
                    }
                });                
            }
            
                    
             
        });
    </script>
</body>
</html><?php }} ?>
