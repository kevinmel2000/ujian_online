<?php /*%%SmartyHeaderCode:15537578c0d46d868c9-28456001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8edfe4807dd065b66522961906c5073ebdcdd6f1' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\product\\list.html',
      1 => 1470140533,
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
  'nocache_hash' => '15537578c0d46d868c9-28456001',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a2fbaa87a543_37664094',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2fbaa87a543_37664094')) {function content_57a2fbaa87a543_37664094($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
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
                                            <li class="active-menu">
                            <a href="#"><i class="fa fa-book"></i> Katalog <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level collapse in">
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
                    
                    <li class="active-menu">
                        <a href="#"><i class="fa fa-book"></i> Katalog <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">
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
                            Product <small>List of Product</small>
                        </h1>
                        <!-- ol class="breadcrumb">
                          <li><a href="http://192.168.1.101/gomocart">Home</a></li>
                          <li><a href="http://192.168.1.101/gomocart/product">Product</a></li>
                          <li class="active">List of Product</li>
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
                        <table>
                            <tbody>
                                <tr>
                                                                        <td><div id='btn_add' class="btn btn-primary">Baru</div></td>
                                    <td width="5px">&nbsp;</td>
                                                                        
                                                                        <td><div id='btn_edit' class="btn btn-success disabled">Edit</div></td>
                                    <td width="5px">&nbsp;</td>
                                                                        
                                                                        <td><div id='btn_delete' class="btn btn-danger disabled">Hapus</div></td>
                                    <td width="5px">&nbsp;</td>
                                                                        <td width="100%"><input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." /></td>
                                    <td width="5px">&nbsp;</td> 
                                    <td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
                                    <td width="5px">&nbsp;</td> 
                                    <td><a class="btn btn-default" href="list.php">Reset</a></td>   
                                </tr>
                            </tbody>                                
                        </table>
                    </div>
                    <div id="detail" class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5px"><input type="checkbox" id="select_all"  class="form-control" /></th>
                                        <th width="5%"><div style="text-align: center;">No.</div></th>
                                        <th width="10%"><div style="text-align: center;">Tanggal</div></th>
                                        <th width="30%"><div style="text-align: center;">Nama</div></th>
                                        <th width="25%"><div style="text-align: center;">Kategori</div></th>
                                        <th width="10%"><div style="text-align: center;">Harga Jual</div></th>
                                        <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                        <th width="10%"><div style="text-align: center;">Aksi</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                                            
                                        <tr id="baris_3">
                                            <td align="center"><input type="checkbox" id_select="3" name="select_3" class="form-control select" /></td>
                                            <td align="center">1</td>
                                            <td align="center">04-08-2016 15:24:10</td>
                                            <td align="left">Lorry Wheel<br /><span style="font-weight: bold;">Kode: LW29222</span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left">Kacang, Kelapa</td>
                                            <td align="right">35,000</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_8142.png" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="3" class="btn btn-success edit">Edit</div>                                                    <div id_select="3" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_2">
                                            <td align="center"><input type="checkbox" id_select="2" name="select_2" class="form-control select" /></td>
                                            <td align="center">2</td>
                                            <td align="center">07-07-2016 05:02:14</td>
                                            <td align="left">ETK Portable<br /><span style="font-weight: bold;">Kode: EKG1234</span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left">Pakaian, Kecantikan & Perawatan Diri, Layanan Bisnis</td>
                                            <td align="right">15,000</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/etk-portable_3187.png" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="2" class="btn btn-success edit">Edit</div>                                                    <div id_select="2" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_4">
                                            <td align="center"><input type="checkbox" id_select="4" name="select_4" class="form-control select" /></td>
                                            <td align="center">3</td>
                                            <td align="center">07-07-2016 04:50:02</td>
                                            <td align="left">Block Bearing<br /><span style="font-weight: bold;">Kode: BB0909</span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">20,500</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/block-bearing_2169.png" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="4" class="btn btn-success edit">Edit</div>                                                    <div id_select="4" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_5">
                                            <td align="center"><input type="checkbox" id_select="5" name="select_5" class="form-control select" /></td>
                                            <td align="center">4</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Cone Guide<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/cone-guide_3628.gif" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="5" class="btn btn-success edit">Edit</div>                                                    <div id_select="5" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_6">
                                            <td align="center"><input type="checkbox" id_select="6" name="select_6" class="form-control select" /></td>
                                            <td align="center">5</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Adjusting Cone<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/adjusting-cone_8769.jpeg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="6" class="btn btn-success edit">Edit</div>                                                    <div id_select="6" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_7">
                                            <td align="center"><input type="checkbox" id_select="7" name="select_7" class="form-control select" /></td>
                                            <td align="center">6</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Digester Arm<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/digester-arm_3864.jpeg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="7" class="btn btn-success edit">Edit</div>                                                    <div id_select="7" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_8">
                                            <td align="center"><input type="checkbox" id_select="8" name="select_8" class="form-control select" /></td>
                                            <td align="center">7</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Expeller Arm<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/expeller-arm_4193.jpeg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="8" class="btn btn-success edit">Edit</div>                                                    <div id_select="8" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_9">
                                            <td align="center"><input type="checkbox" id_select="9" name="select_9" class="form-control select" /></td>
                                            <td align="center">8</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Hydrocyclone<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/hydrocyclone_1648.jpeg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="9" class="btn btn-success edit">Edit</div>                                                    <div id_select="9" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_10">
                                            <td align="center"><input type="checkbox" id_select="10" name="select_10" class="form-control select" /></td>
                                            <td align="center">9</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Sprocket<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/sprocket_3961.gif" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="10" class="btn btn-success edit">Edit</div>                                                    <div id_select="10" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_11">
                                            <td align="center"><input type="checkbox" id_select="11" name="select_11" class="form-control select" /></td>
                                            <td align="center">10</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Sprocket Chain Impeller<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/sprocket-chain-impeller_8146.gif" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="11" class="btn btn-success edit">Edit</div>                                                    <div id_select="11" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_12">
                                            <td align="center"><input type="checkbox" id_select="12" name="select_12" class="form-control select" /></td>
                                            <td align="center">11</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Worm Screw<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/worm-screw_6284.gif" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="12" class="btn btn-success edit">Edit</div>                                                    <div id_select="12" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_13">
                                            <td align="center"><input type="checkbox" id_select="13" name="select_13" class="form-control select" /></td>
                                            <td align="center">12</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Bollard<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/bollard_7432.gif" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="13" class="btn btn-success edit">Edit</div>                                                    <div id_select="13" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_14">
                                            <td align="center"><input type="checkbox" id_select="14" name="select_14" class="form-control select" /></td>
                                            <td align="center">13</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Copper River Mill<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/copper-river-mill_8726.gif" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="14" class="btn btn-success edit">Edit</div>                                                    <div id_select="14" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_15">
                                            <td align="center"><input type="checkbox" id_select="15" name="select_15" class="form-control select" /></td>
                                            <td align="center">14</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Solid Hollow Shaft<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/solid-hollow-shaft_9184.gif" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="15" class="btn btn-success edit">Edit</div>                                                    <div id_select="15" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_16">
                                            <td align="center"><input type="checkbox" id_select="16" name="select_16" class="form-control select" /></td>
                                            <td align="center">15</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Multicyclone & Spiral Vane<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/multicyclone-spiral-vane_4613.jpeg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="16" class="btn btn-success edit">Edit</div>                                                    <div id_select="16" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_17">
                                            <td align="center"><input type="checkbox" id_select="17" name="select_17" class="form-control select" /></td>
                                            <td align="center">16</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Engine Parts<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/engine-parts_9836.jpg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="17" class="btn btn-success edit">Edit</div>                                                    <div id_select="17" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_18">
                                            <td align="center"><input type="checkbox" id_select="18" name="select_18" class="form-control select" /></td>
                                            <td align="center">17</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Electrical Parts<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/electrical-parts_3816.jpg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="18" class="btn btn-success edit">Edit</div>                                                    <div id_select="18" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_19">
                                            <td align="center"><input type="checkbox" id_select="19" name="select_19" class="form-control select" /></td>
                                            <td align="center">18</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Fuel Injection Parts<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/fuel-injection-parts_2863.jpg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="19" class="btn btn-success edit">Edit</div>                                                    <div id_select="19" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_20">
                                            <td align="center"><input type="checkbox" id_select="20" name="select_20" class="form-control select" /></td>
                                            <td align="center">19</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Alat Pelindung Mata<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left">Jas dan Tuxedo </td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/alat-pelindung-mata_6124.gif" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="20" class="btn btn-success edit">Edit</div>                                                    <div id_select="20" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_21">
                                            <td align="center"><input type="checkbox" id_select="21" name="select_21" class="form-control select" /></td>
                                            <td align="center">20</td>
                                            <td align="center">17-06-2016 10:54:50</td>
                                            <td align="left">Brake Components<br /><span style="font-weight: bold;">Kode: </span><br /><span style="font-weight: bold;">Status: <span style="color: green;">Publish</span></span></td>
                                            <td align="left"></td>
                                            <td align="right">0</td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                    <img src="http://192.168.1.101/gomocart/uploads/produk/brake-components_7938.jpg" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="21" class="btn btn-success edit">Edit</div>                                                    <div id_select="21" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                    </tbody>
                                                                <tfoot><tr><th colspan="7">
                                    <div style="text-align: center;">
                                                                                                                                                                                                                    <span class="btn btn-info">1</span>                                
                                                                                                                        
                                                                                                                                    <a class="btn btn-default" href="list.php?page=2">2</a>
                                                                                                                        
                                                                                                                                    <a class="btn btn-default" href="list.php?page=3">3</a>
                                                                                                                        
                                                                                                                                    <a class="btn btn-default" href="list.php?page=4">4</a>
                                                                                                                        
                                                                                                                                    <a class="btn btn-default" href="list.php?page=5">5</a>
                                                                                                                        
                                                                                                                
                                            <a class="btn btn-default" href="list.php?page=2">Next &rarr;</a>
                                                                        
                                    </div>  
                            </th></tr></tfoot>
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
    <script type="text/javascript">
        $(function () {
            var delete_selected = "";
            
            $( "#btn_add" ).click(function() {
                window.location='add.php';
            });
            
            $( "#btn_edit" ).click(function() {
                window.location='edit.php?id='+delete_selected;
            });
            
            $( "#btn_delete" ).click(function() {
                prosesDelete(delete_selected);
            });
            
            $( "#btn_cari" ).click(function() {
                var query = $( "#query" ).val();
                window.location='list.php'+(query.length>0?'?query='+query:'');
            });

            $( ".hapus" ).click(function() {                
                var id = this.getAttribute('id_select');
                prosesDelete(id);                
            });

            $( ".edit" ).click(function() {
                var id = this.getAttribute('id_select');
                window.location='edit.php?id='+id;
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
            
            function setButton() {
                var temp = new Array();
                if(delete_selected.length>0) temp = delete_selected.split(',');                
                $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
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

            function prosesDelete(id) {
                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin menghapus data?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Penghapusan',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Hapus...');
                            $.ajax({
                                url: 'delete.php',
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
            
            setMessage('success', 'Edit data produk berhasil.');        
             
        });
    </script>
</body>
</html><?php }} ?>
