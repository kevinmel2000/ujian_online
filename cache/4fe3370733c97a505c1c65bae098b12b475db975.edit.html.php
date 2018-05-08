<?php /*%%SmartyHeaderCode:2729957873d437cefd6-57650189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe3370733c97a505c1c65bae098b12b475db975' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pemesanan\\edit.html',
      1 => 1470268738,
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
  'nocache_hash' => '2729957873d437cefd6-57650189',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a2edbaccb410_70144990',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'isEdit' => 0,
    'header' => 0,
    'current_date' => 0,
    'data_alamat' => 0,
    'entry' => 0,
    'listpropinsi' => 0,
    'listkurir' => 0,
    'ongkir' => 0,
    'list_bank' => 0,
    'pembayaran' => 0,
    'tpl_dir' => 0,
    'from_page' => 0,
    'adminweburl' => 0,
    'listdetail' => 0,
    'entry_ukuran_warna' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2edbaccb410_70144990')) {function content_57a2edbaccb410_70144990($_smarty_tpl) {?><!DOCTYPE html>
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
                            Pemesanan <small>Edit Pemesanan</small>
                        </h1>
                        <!-- ol class="breadcrumb">
                          <li><a href="http://192.168.1.101/gomocart">Home</a></li>
                          <li><a href="http://192.168.1.101/gomocart/pemesanan/">Pemesanan</a></li>
                          <li class="active">Edit Pemesanan</li>
                        </ol -->
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="kode">No. Pemesanan:</label>
                        <input type="text" value="000012" class="form-control" name="kode" readonly="readOnly" placeholder="Auto" />
                    </div>
                    
                    <div class="form-group">
                        <label for="tanggal">Tanggal Pemesanan:</label>
                        <input type="text" value="04-08-2016" class="form-control tanggal" name="tanggal" />
                    </div>
                    
                    <div class="form-group">
                        <label for="customer">Jenis Customer:</label>
                        <select class="form-control" name="tipe_customer">
                            <option value="1"  selected="selected" >Member</option>
                            <option value="0" >Tamu</option>
                        </select>
                    </div>
                    
                    <div id="panel_member" class="form-group" >
                        <label for="kode_member">Member:</label>
                        <input type="text" value="Kiezie Ok" class="form-control" name="nama_member" />
                        <input type="hidden" value="1" name="id_member" />
                    </div>
                    
                    <div id="panel_alamat" class="form-group" >
                        <label class="control-label">Alamat yang Dipakai: </label>
                        <select id="pilih_nama_alamat" class="form-control" name="id_alamat">
                            <option value="0"  selected="selected" >[ALAMAT BARU]</option>
                                                            <option value="1" >Pribadi</option>
                                                            <option value="2" >Kantor</option>
                                                    </select>
                        <label class="control-label"><input type="checkbox" name="simpan_alamat" value="1" checked /> Simpan perubahan alamat.</label>
                    </div>
                    
                    <div id="panel_alamat_baru" class="form-group" >
                        <label class="control-label">Nama alamat baru: </label>
                        <input type="text" class="form-control" name="nama_alamat_baru" />                                                        
                    </div>
                    
                    <div class="form-group">
                        <label for="nama_pengirim">Nama Pengirim:</label>
                        <input type="text" value="Rifki" class="form-control" name="nama_pengirim" />
                    </div>

                    <div class="form-group">
                        <label for="nama_penerima">Nama Penerima:</label>
                        <input type="text" value="Kiezie Ok" class="form-control" name="nama_penerima" />
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" name="alamat" style="height: 80px;">Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</textarea>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No. HP:</label>
                        <input type="text" value="081373011823" class="form-control" name="no_hp" />
                    </div>

                    <div class="form-group">
                        <label for="propinsi">Propinsi:</label>
                        <select id="header_prop" name="propinsi" class="form-control">
                                                            <option value="1" >Bali</option>
                                                            <option value="2" >Bangka Belitung</option>
                                                            <option value="3" >Banten</option>
                                                            <option value="4" >Bengkulu</option>
                                                            <option value="5" >DI Yogyakarta</option>
                                                            <option value="6" >DKI Jakarta</option>
                                                            <option value="7" >Gorontalo</option>
                                                            <option value="8" >Jambi</option>
                                                            <option value="9"  selected="selected" >Jawa Barat</option>
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
                        <select id="header_kota" name="kota" class="form-control"></select>
                    </div>
                    
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan:</label>
                        <select id="header_kecamatan" name="kecamatan" class="form-control"></select>
                    </div>
                    
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos:</label>
                        <input type="text" value="30123" class="form-control" name="kode_pos" />
                    </div>
                    
                    <div class="form-group">
                        <label for="kurir">Jasa Kurir:</label>
                        <select id="header_kurir" name="kurir" class="form-control">
                                                            <option value="JNE" >JNE</option>
                                                            <option value="TIKI" >TIKI</option>
                                                            <option value="POS" >POS</option>
                                                            <option value="WAHANA" >WAHANA</option>
                                                            <option value="JNT"  selected="selected" >JNT</option>
                                                        <option value="0" >LAINNYA</option>                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="layanan">Layanan:</label>
                        <select id="header_layanan" name="layanan"  class="form-control" ></select>
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis">Jenis Pesanan:</label>
                        <select name="is_dropship" class="form-control">
                            <option value="N"  selected="selected" >Bukan Dropship</option>
                            <option value="Y" >Dropship</option>
                        </select>                            
                    </div>
                    
                    <div id="list_detail" class="table-responsive" style="margin-top: 10px;">
                        <div class="form-group">
                            <label for="detail_produk">Detail Produk Pesanan:</label>
                            <table  id="tblDetail_produk" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th width="5px"><span class="fa fa-trash-o"></span></th>
                                        <th width="25%"><div style="text-align: center;">Nama Barang</div></th>
                                        <th width="20%"><div style="text-align: center;">Ukuran / Warna</div></th>
                                        <th width="10%"><div style="text-align: center;">Qty</div></th>
                                        <th width="10%"><div style="text-align: center;">Harga</div></th>
                                        <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                        <th width="10%"><div style="text-align: center;">Subtotal</div></th>
                                        <th width="15%"><div style="text-align: center;">Grandtotal</div></th>    
                                    </tr>
                                </thead>
                                <tbody id="detail_produk">                                    
                                    <tr>
                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: left; padding-left: 90%; width: 100%; font-weight: bold;">Voucher:</span></td>    
                                        <td style="padding: 0; margin: 0;"><input id="header_voucher" type="text" value="0" class="form-control" name="voucher" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: left; padding-left: 90%; width: 100%; font-weight: bold;">Ongkir:</span></td>    
                                        <td style="padding: 0; margin: 0;"><input id="header_tarif" type="text" value="0" class="form-control harga" name="ongkir" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: left; padding-left: 90%; width: 100%; font-weight: bold;">Total:</span></td>    
                                        <td style="padding: 0; margin: 0;"><input id="header_total" type="text" value="35,000" class="form-control" name="total" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <div id='btn_add' class="btn btn-primary">Tambah</div>
                        </div>
                    </div>
                    
                    <div class="form-group">&nbsp;</div>
                    
                    <div class="form-group">
                        <label for="status">Status Pembayaran:</label>
                        <select name="status" class="form-control">
                            <option value="0"  selected="selected" >Belum Lunas</option>
                            <option value="2" >Lunas (Menunggu Proses Pengiriman)</option>
                            <option value="6" >Lunas (Dalam Proses Pengiriman)</option>
                            <option value="5" >Lunas (Langsung Tutup Transaksi)</option>
                        </select>                        
                    </div>
                    
                    <div class="form-group" id="metode_pembayaran" style="display: none;">
                        <label for="metode_pembayaran">Metode Pembayaran:</label>
                        <select name="bank_tujuan" class="form-control">
                            <option value="0">-- Pilih Bank Tujuan --</option>
                                                            <option value="1" >Bank Mandiri (1570001339200 - an. Rifkhi Heruprasetyo)</option>
                                                            <option value="2" >BCA (1662984244 - an. Nur Azizah)</option>
                                                    </select>                        
                    </div>
                    
                    <div class="form-group" id="jumlah_transfer" style="display: none;">
                        <label for="jumlah_transfer">Jumlah Transfer:</label>
                        <input type="text" name="jumlah_transfer" value="35,000" class="form-control harga" />
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
    
    <script type="text/javascript" src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery.input.formatter.js"></script>  
    <link rel="stylesheet" href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">

    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/datepick/jquery.datepick.css" rel="stylesheet">
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/datepick/jquery.plugin.js"></script>
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/datepick/jquery.datepick.js"></script>
    
    <script type="text/javascript">
        var array_tarif = Array();
        var delete_selected = "";
        $(function () {
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            $('[name=nama_member]').autocomplete({
                source: function( request, response ) {
                    $.ajax({
                        url: 'http://192.168.1.101/gomocart/store/memberDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
                            response( $.map( data, function( item ) {

                                return {
                                    label: item['display'],
                                    value: item['value'],
                                    data : item['data']
                                }
                            }));
                        }
                    });
                },
                autoFocus: true,	      	
                minLength: 1,
                select: function( event, ui ) {
                    var data = ui.item.data;
                    $('[name=id_member]').val(data['id']);
                    loadAlamat(data['id']);
                }		      	
            });
            
            function loadAlamat(id_member) {
                $("#pilih_nama_alamat").empty();
                var data = '<option value="0">[ALAMAT BARU]</option>';
                $(data).appendTo('#pilih_nama_alamat');
                $.ajax({
                    type: 'POST',
                    url: 'http://192.168.1.101/gomocart/store/getAlamatMember.php',
                    data: { 'id': id_member },
                    dataType: 'json',
                    success: function(data) {
                        var store = data['alamat'];
                        data = '<option value="0">[ALAMAT BARU]</option>'; 
                        for(var key in store) {
                            data+='<option value="'+store[key]['id']+'">'+store[key]['nama_alamat']+'</option>';
                        }
                        
                        $("#pilih_nama_alamat").empty();
                        $(data).appendTo('#pilih_nama_alamat');
                        
                        if(store.length>0) {
                            $('#pilih_nama_alamat').val(store[0]['id']).change();
                        } else {
                            $('[name=nama_pengirim]').val('');
                            $('[name=nama_penerima]').val('');
                            $('[name=alamat]').val('');
                            $('[name=no_hp]').val('');
                            $('[name=kode_pos]').val('');

                            var propinsi = '0';
                            var kota = '0';
                            var kecamatan = '0';

                            $('[name=propinsi]').val(propinsi);
                            loadKota(propinsi, kota);
                            loadKecamatan(kota, kecamatan);
                            loadLayanan($('#header_kurir').val(), kecamatan, 0);
                            
                            $('#panel_alamat_baru').show();
                        }
                            
                    }
                });    
            }
            
            $('#header_tarif').keyup(function () { 
                getTotal();
            });
            
            $('[name=status]').on('change', function (e) {
                if($('[name=status]').val()=='0') {                    
                    $('#metode_pembayaran').hide();
                    $('#jumlah_transfer').hide();
                } else {
                    $('#metode_pembayaran').show();
                    $('#jumlah_transfer').show();
                }
            });
            
            $('[name=tipe_customer]').on('change', function (e) {
                $('[name=nama_member]').val($('[name=tipe_customer]').val()=='0'?'Tamu':'');
                $('[name=id_member]').val($('[name=tipe_customer]').val()=='0'?'0':'');
                
                $('[name=nama_member]').prop('disabled', $('[name=tipe_customer]').val()=='0');
                if($('[name=tipe_customer]').val()=='0') {
                    $('#panel_member').hide();
                    $('#panel_alamat').hide();
                    $('#panel_alamat_baru').hide();
                    $('[name=nama_pengirim]').val('');
                    $('[name=nama_penerima]').val('');
                    $('[name=alamat]').val('');
                    $('[name=no_hp]').val('');
                    $('[name=kode_pos]').val('');

                    var propinsi = '0';
                    var kota = '0';
                    var kecamatan = '0';

                    $('[name=propinsi]').val(propinsi);
                    loadKota(propinsi, kota);
                    loadKecamatan(kota, kecamatan);
                    loadLayanan($('#header_kurir').val(), kecamatan, 0);
                } else {
                    $('#panel_member').show();
                    $('#panel_alamat').show();
                    $('#panel_alamat_baru').show();
                }
            });
            
                            var record = 
                    '<tr>' +
                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +                                            
                        '<td align="center">' +
                            '<input type="text" value="Lorry Wheel" class="form-control nama_produk" name="nama" />' +                                                
                            '<input type="hidden" value="3" name="id_produk" />' +
                            '<input type="hidden" value="LW29222" name="kode" />' +
                            '<input type="hidden" value="1000" name="berat" />' +
                            '<input type="hidden" value="30000" name="harga_beli" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<select class="form-control" name="ukuran_warna">' +                            
                                                                    '<option value="XL|MERAH">XL / MERAH</option>' +
                                                                    '<option value="XL|BIRU" selected="selected" >XL / BIRU</option>' +
                                                                    '<option value="L|MERAH">L / MERAH</option>' +
                                                                    '<option value="L|BIRU">L / BIRU</option>' +
                                                            '</select>' +                            
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="1" class="form-control harga jumlah" name="jumlah" style="text-align: right;" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="35,000" class="form-control harga" name="harga_jual" style="text-align: right;"  disabled="disabled" />' +
                        '</td>' +                                            
                        '<td align="center">' +
                            '<input type="text" value="0" class="form-control" name="diskon" style="text-align: right;"  disabled="disabled" />' +
                            '<input type="hidden" value="persentase" name="tipe_diskon" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="35,000" class="form-control harga" name="sub_total" style="text-align: right;" disabled="disabled" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="35,000" class="form-control harga" name="grand_total" style="text-align: right;"  disabled="disabled" />' +
                        '</td>' +
                    '</tr>';
            
                $( record ).insertBefore( "#detail_produk" );
                         
            setAutocomplete();
            setQtyChangeListeners();
            
            function setAutocomplete() {
                
                $('.nama_produk').autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: 'http://192.168.1.101/gomocart/store/produkDataStore.php',
                            dataType: "json",
                            method: 'post',
                            data: {
                                query: request.term,
                                id_member: '1'
                            },
                            success: function( data ) {
                                response( $.map( data, function( item ) {

                                    return {
                                        label: item['display'],
                                        value: item['value'],
                                        data : item['data']
                                    }
                                }));
                            }
                        });
                    },
                    autoFocus: true,	      	
                    minLength: 1,
                    select: function( event, ui ) {
                        //console.log(ui.item.data);

                        var data = ui.item.data;
                        /*for(var key in data) {
                            console.log(key+' --- '+data[key]);
                        }*/
                        var element = $(this).closest('tr');
                        var id_produk = element.find('[name=id_produk]');
                        var kode = element.find('[name=kode]');
                        var berat = element.find('[name=berat]');
                        var ukuran_warna = element.find('[name=ukuran_warna]');
                        var jumlah = element.find('[name=jumlah]');
                        var harga_beli = element.find('[name=harga_beli]');
                        var harga_jual = element.find('[name=harga_jual]');
                        var diskon = element.find('[name=diskon]');
                        var tipe_diskon = element.find('[name=tipe_diskon]');
                        var sub_total = element.find('[name=sub_total]');
                        var grand_total = element.find('[name=grand_total]');

                        id_produk.val(data['id']);
                        kode.val(data['kode']);
                        berat.val(data['berat']);
                        if(jumlah.val().length==0) jumlah.val(1);
                        var datas = '';
                        var store = data['list_ukuran_warna'];
                        for(var key in store) {
                            datas+='<option value="'+store[key]['kode']+'">'+store[key]['ukuran']+((store[key]['ukuran']!="" && store[key]['warna']!="")?" / ":"")+store[key]['warna']+'</option>';
                        }
                        ukuran_warna.empty();
                        $(datas).appendTo(ukuran_warna);

                        harga_beli.val(data['harga_beli']);
                        harga_jual.val(data['harga_jual']);
                        diskon.val(data['tipe_diskon']=='persentase'?data['persen_diskon']:'');
                        tipe_diskon.val(data['tipe_diskon']);
                        sub_total.val(data['sub_total']);

                        var grand_tot = eval(jumlah.val().replace(',', ''))*eval(sub_total.val().replace(',', ''));
                        grand_total.val(currency(grand_tot));
                    
                        loadLayanan($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());
                    }		      	
                });
            }    
            
            function setQtyChangeListeners() {
                $('.jumlah').on('input', function() { 
                    var element = $(this).closest('tr');
                    var jumlah = element.find('[name=jumlah]');
                    var sub_total = element.find('[name=sub_total]');
                    var grand_total = element.find('[name=grand_total]');

                    var grand_tot = eval(jumlah.val().replace(',', ''))*eval(sub_total.val().replace(',', ''));
                    grand_total.val(currency(grand_tot));
                    
                    loadLayanan($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());
                });
            };
            
            function currency(nums) {

                if(!nums) return '0';
                if(nums=='') return '0';

                nums = String(nums).replace(/[\,%]/g, '');
                nums = nums.split('.').length<2?
                            nums:
                            (nums.split('.')[1].length>2?
                                String(eval(nums).toFixed(2)):
                                nums);

                if(nums=='' || nums=='0') return '0';

                while (nums.substring(0,1)=='0' && nums.substring(1,2)!='.') {
                    nums = nums.substring(1,nums.length);
                    if(nums=='0') return '0';
                }

                nums = nums.replace('.','. ');

                var num = nums.split('.')[0];
                var numArr=new String(num).split('').reverse();
                for (var i=3;i<numArr.length;i+=3)
                    numArr[i]+=',';

                var decimal = (nums.split('.')[1]?('.'+(nums.split('.')[1]).trim()):'');

                return (numArr.reverse().join('') + decimal.replace('.00',''));

            };

            $('#btn_add').click(function() {
                var record = 
                    '<tr>' +                        
                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +  
                        '<td align="center">' +
                            '<input type="text" class="form-control nama_produk" name="nama" />' +
                            '<input type="hidden" name="id_produk" />' +
                            '<input type="hidden" name="kode" />' +
                            '<input type="hidden" name="berat" />' +                            
                            '<input type="hidden" name="harga_beli" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<select class="form-control" name="ukuran_warna"></select>' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control harga jumlah" name="jumlah" style="text-align: right;" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control harga" name="harga_jual" style="text-align: right;" disabled="disabled" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control" name="diskon" style="text-align: right;" disabled="disabled" />' +
                            '<input type="hidden" name="tipe_diskon" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control harga" name="sub_total" style="text-align: right;" disabled="disabled" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control harga" name="grand_total" style="text-align: right;" disabled="disabled" />' +
                        '</td>' + 
                    '</tr>';

                $( record ).insertBefore( "#detail_produk" );
                setAutocomplete();
                setQtyChangeListeners();
            });
            
            $( document ).on( 'click', '.hapus_detail', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
                loadLayanan($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());
                
            });
            
            var isEdit = true;
            $("input.harga").formatInput();
            
            $('#pilih_nama_alamat').on('change', function (e) {
                if($('[name=id_alamat]').val()==0) {
                    $('[name=nama_pengirim]').val('');
                    $('[name=nama_penerima]').val('');
                    $('[name=alamat]').val('');
                    $('[name=no_hp]').val('');
                    $('[name=kode_pos]').val('');

                    var propinsi = '0';
                    var kota = '0';
                    var kecamatan = '0';

                    $('[name=propinsi]').val(propinsi);
                    loadKota(propinsi, kota);
                    loadKecamatan(kota, kecamatan);
                    loadLayanan($('#header_kurir').val(), kecamatan, 0);
                    $('#panel_alamat_baru').show();
                } else {
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.101/gomocart/store/getAlamat.php',
                        data: { 'id': $('[name=id_alamat]').val() },
                        dataType: 'json',
                        success: function(data) {
                            var alamat = data['alamat'];
                            $('[name=nama_pengirim]').val(alamat['nama_pengirim']);
                            $('[name=nama_penerima]').val(alamat['nama_penerima']);
                            $('[name=alamat]').val(alamat['alamat']);
                            $('[name=no_hp]').val(alamat['no_hp']);
                            $('[name=kode_pos]').val(alamat['kode_pos']);

                            var propinsi = alamat['id_propinsi']==undefined?'0':alamat['id_propinsi'];
                            var kota = alamat['id_kota']==undefined?'0':alamat['id_kota'];
                            var kecamatan = alamat['id_kecamatan']==undefined?'0':alamat['id_kecamatan'];

                            $('[name=propinsi]').val(propinsi);
                            loadKota(propinsi, kota);
                            loadKecamatan(kota, kecamatan);
                            loadLayanan($('#header_kurir').val(), kecamatan, 0);
                            $('#panel_alamat_baru').hide();
                        }
                    });
                }
            });
                
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
                submitPemesanan();
            });

            function submitPemesanan() {
                
                //data header
                var id             = isEdit?'12':'';
                var tanggal        = $('[name=tanggal]').val();
                var tipe_customer  = $('[name=tipe_customer]').val();
                var id_member      = $('[name=id_member]').val();
                var id_alamat      = $('[name=id_alamat]').val();
                var nama_alamat_baru = $('[name=nama_alamat_baru]').val();
                var is_simpan_alamat = $('[name=simpan_alamat]').is(':checked');
                
                var nama_pengirim  = $('[name=nama_pengirim]').val();
                var nama_penerima  = $('[name=nama_penerima]').val();
                var alamat         = $('[name=alamat]').val();
                var no_hp          = $('[name=no_hp]').val();
                var id_propinsi    = $('[name=propinsi]').val();
                var nama_propinsi  = $("#header_prop option[value='"+id_propinsi+"']").text();
                var id_kota        = $('[name=kota]').val();
                var nama_kota      = $("#header_kota option[value='"+id_kota+"']").text();
                var id_kecamatan   = $('[name=kecamatan]').val();
                var nama_kecamatan = $("#header_kecamatan option[value='"+id_kecamatan+"']").text();
                var kode_pos       = $('[name=kode_pos]').val();
                var kurir          = $('[name=kurir]').val();
                var layanan        = $('[name=layanan]').val();
                var voucher        = $('[name=voucher]').val();
                var tarif          = $('[name=ongkir]').val();
                var total          = $('[name=total]').val();
                var is_dropship    = $('[name=is_dropship]').val();
                
                var status          = ($('[name=status]').val()=='0')?'0':($('[name=status]').val());
                var bank_tujuan     = $('[name=bank_tujuan]').val();
                var jumlah_transfer = $('[name=jumlah_transfer]').val();
                
                //data detail
                var detail = ''; var row = 0;
                grandtotal = 0;
                $("#tblDetail_produk tr").each(function() {
                    if(row>0) {
                        var id_produk    = $(this).find('[name=id_produk]').val();
                        var kode         = $(this).find('[name=kode]').val();
                        var nama         = $(this).find('[name=nama]').val();
                        var berat        = $(this).find('[name=berat]').val();
                        var ukuran_warna = $(this).find('[name=ukuran_warna]').val();                        
                        var jumlah       = $(this).find('[name=jumlah]').val();
                        var harga_beli   = $(this).find('[name=harga_beli]').val();
                        var harga_jual   = $(this).find('[name=harga_jual]').val();
                        var diskon       = $(this).find('[name=diskon]').val();
                        var tipe_diskon  = $(this).find('[name=tipe_diskon]').val();
                        var sub_total    = $(this).find('[name=sub_total]').val();
                        var grand_total  = $(this).find('[name=grand_total]').val();

                        if(id_produk!=undefined) {
                            grandtotal+=eval(grand_total.replace(",", ""));                                                    
                            detail+=(detail==''?'':'\n')+id_produk+'\t'+kode+'\t'+nama+'\t'+berat+'\t'+ukuran_warna+'\t'+jumlah.replace(",", "")+'\t'+harga_jual.replace(",", "")+'\t'+diskon.replace(",", "")+'\t'+tipe_diskon+'\t'+sub_total.replace(",", "")+'\t'+grand_total.replace(",", "")+'\t'+harga_beli.replace(",", "");
                        }
                    } 
                    row++;
                });                
                //console.log(detail);
                
                var data = new FormData();
                data.append('id', id);
                data.append('tanggal', tanggal);
                data.append('tipe_customer', tipe_customer);
                data.append('id_member', id_member);
                data.append('id_alamat', id_alamat);
                data.append('nama_alamat', nama_alamat_baru);
                data.append('is_simpan_alamat', is_simpan_alamat?'Y':'N');
                
                data.append('nama_pengirim', nama_pengirim);
                data.append('nama_penerima', nama_penerima);
                data.append('alamat', alamat);
                data.append('no_hp', no_hp);
                data.append('id_propinsi', id_propinsi);
                data.append('nama_propinsi', nama_propinsi);
                data.append('id_kota', id_kota);
                data.append('nama_kota', nama_kota);
                data.append('id_kecamatan', id_kecamatan);
                data.append('nama_kecamatan', nama_kecamatan);                                
                data.append('kode_pos', kode_pos);
                data.append('kurir', kurir);
                data.append('layanan', layanan);
                data.append('grandtotal', grandtotal);
                data.append('voucher', voucher.replace(",", ""));
                data.append('ongkir', tarif.replace(",", ""));
                data.append('total', total.replace(",", ""));
                data.append('detail', detail);
                data.append('is_dropship', is_dropship);
                
                data.append('status', status);
                data.append('bank_tujuan', bank_tujuan);
                data.append('jumlah_transfer', jumlah_transfer.replace(",", ""));
                

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
            }

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
            
            $('#header_prop').on('change', function (e) {
                loadKota(this.value, 0);
                loadKecamatan(0, 0);
                loadLayanan($('#header_kurir').val(), 0, 0);
            });

            $('#header_kota').on('change', function (e) {
                loadKecamatan(this.value, 0);
                loadLayanan($('#header_kurir').val(), 0, 0);
            });

            $('#header_kecamatan').on('change', function (e) {
                loadLayanan($('#header_kurir').val(), this.value, 0);
            });

            $('#header_kurir').on('change', function (e) {
                if(this.value==0) {
                    $('#header_layanan').prop('disabled', true);
                    $('#header_tarif').prop('disabled', false);
                } else {
                    $('#header_layanan').prop('disabled', false);
                    $('#header_tarif').prop('disabled', true);
                    loadLayanan(this.value, $('#header_kecamatan').val(), 0);
                }
            });

            $('#header_layanan').on('change', function (e) {
                for(var key in array_tarif) {
                    if(array_tarif[key]['service']==this.value) {
                        $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));
                        break;
                    }
                }
                getTotal();
            });

            function loadKota(propinsi, kota) {
                $("#header_kota").empty();
                //$('<option value="0">-- Pilih Kota --</option>').appendTo('#header_kota');

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
                        $("#header_kota").empty();
                        $(data).appendTo('#header_kota');
                    }
                });    
            }

            function loadKecamatan(kota, kecamatan) {
                $("#header_kecamatan").empty();
                //$('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#header_kecamatan');

                if(kota>0) {
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.101/gomocart/store/getKecamatan.php',
                        data: { 'kota': kota },
                        dataType: 'json',
                        success: function(data) {
                            var store = data['topics'];
                            var data = '<option value="0">-- Pilih Kecamatan --</option>';
                            for(var key in store) {
                                data+='<option value="'+store[key]['subdistrict_id']+'"'+(store[key]['subdistrict_id']==kecamatan?' selected="selected"':'')+'>'+store[key]['subdistrict_name']+'</option>';
                            }
                            $("#header_kecamatan").empty();
                            $(data).appendTo('#header_kecamatan');
                        }
                    });
                }    
            }

            function loadLayanan(kurir, kecamatan, layanan) {
                $('#header_tarif').val(0);            
                $("#header_layanan").empty();
                $('<option value="0">-- Pilih Layanan --</option>').appendTo('#header_layanan');
                array_tarif = Array();
                if(kecamatan>0 && kurir!='') {
                    var id_kota   = $('[name=kota]').val();
                    var nama_kota = $("#header_kota option[value='"+id_kota+"']").text();
                    
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.101/gomocart/store/getLayanan.php',
                        data: { 'kurir': kurir, 'kecamatan': kecamatan, 'berat': getTotalBerat(), 'kota': nama_kota},
                        dataType: 'json',
                        success: function(data) {
                            array_tarif = data['topics'];
                            var data = '<option value="0">-- Pilih Layanan --</option>';
                            for(var key in array_tarif) {
                                data+='<option value="'+array_tarif[key]['service']+'"'+(array_tarif[key]['service']==layanan?' selected="selected"':'')+'>'+array_tarif[key]['description']+' '+(array_tarif[key]['service']!=array_tarif[key]['description']?('('+array_tarif[key]['service']+')'):'')+' - '+array_tarif[key]['cost'][0]['tarif']+'</option>';
                                if(array_tarif[key]['service']==layanan) {
                                    $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));
                                }
                            }
                            $("#header_layanan").empty();
                            $(data).appendTo('#header_layanan');
                            getTotal();
                        }
                    });
                }    
            }
            
            function getTotalBerat() {
                var total_berat = 0;
                $("#tblDetail_produk tr").each(function() {
                    var berat = $(this).find('[name=berat]').val();
                    var jumlah = $(this).find('[name=jumlah]').val();
                    if(berat!=undefined && jumlah!=undefined) {                        
                        total_berat+=(eval(jumlah.replace(",", ""))*eval(berat));
                    }
                });
                
                //console.log('Total Berat: '+total_berat);
                return total_berat;
            }
            
            function getTotal() {
                var grand_tot = 0;
                $("#tblDetail_produk tr").each(function() {
                    var grand_total = $(this).find('[name=grand_total]').val();
                    if(grand_total!=undefined) {                        
                        grand_tot+=eval(grand_total.replace(",", ""));
                    }
                });
                
                var voucher = eval($('#header_voucher').val().replace(",", ""));
                var ongkir  = eval($('#header_tarif').val().replace(",", ""));
                //console.log(ongkir);
                
                ongkir = (ongkir==undefined?0:ongkir);
                var total   = grand_tot+ongkir-voucher;
                $('#header_total').val(currency(total));
            }
            
            loadKota('9', '115');            loadKecamatan('115', '1587');               
        });
    </script>
</body>
</html><?php }} ?>
