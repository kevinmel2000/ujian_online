<?php /*%%SmartyHeaderCode:100565782dd092bfd49-71064439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '966e81d9204adfad26567d116eeb52a0d6d25cfd' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\product\\edit.html',
      1 => 1470299016,
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
  'nocache_hash' => '100565782dd092bfd49-71064439',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a2fbb7f02f57_26361369',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2fbb7f02f57_26361369')) {function content_57a2fbb7f02f57_26361369($_smarty_tpl) {?><!DOCTYPE html>
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
                            Product <small>Edit Product</small>
                        </h1>
                        <!-- ol class="breadcrumb">
                          <li><a href="http://192.168.1.101/gomocart">Home</a></li>
                          <li><a href="http://192.168.1.101/gomocart/product/">Product</a></li>
                          <li class="active">Edit Product</li>
                        </ol -->
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="kode">Kode Produk:</label>
                        <input type="text" value="LW29222" class="form-control" name="kode" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Nama Produk:</label>
                        <input type="text" value="Lorry Wheel" class="form-control" name="nama" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="penjelasan">Penjelasan Produk:</label>
                        <div class="summernote"></div>
                        <!-- textarea class="form-control" style="height: 120px" name="penjelasan"><p>Untuk informasi lebih lanjut, silakan hubungi <strong>PT. Indodaya Cipta Karya</strong>. Terima kasih!</p><br><br></textarea -->
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Produk:</label>
                        <select multiple class="form-control" name="id_kategori" style="height: 200px;">
                                                            <option style="font-weight: bold;" value="1" >Agraris</option>                                        
                                                            <option  value="681" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pertanian</option>                                        
                                                            <option  value="682" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Pertanian</option>                                        
                                                            <option  value="683" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peternakan</option>                                        
                                                            <option  value="684"  selected="selected" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kacang</option>                                        
                                                            <option  value="685" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rokok & Tembakau</option>                                        
                                                            <option  value="686" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kakao</option>                                        
                                                            <option  value="687"  selected="selected" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kelapa</option>                                        
                                                            <option  value="688" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kopi</option>                                        
                                                            <option  value="689" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sayuran Dehidrasi</option>                                        
                                                            <option  value="690" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telur</option>                                        
                                                            <option  value="691" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat & Mesin Pertanian</option>                                        
                                                            <option  value="692" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pupuk</option>                                        
                                                            <option  value="693" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perikanan</option>                                        
                                                            <option  value="694" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makanan Ternak</option>                                        
                                                            <option  value="695" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makanan & Minuman</option>                                        
                                                            <option  value="696" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buah- Buahan</option>                                        
                                                            <option  value="697" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gandum</option>                                        
                                                            <option  value="698" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jamur </option>                                        
                                                            <option  value="699" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kacang & Biji</option>                                        
                                                            <option  value="700" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pestisida</option>                                        
                                                            <option  value="701" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minyak Hewan</option>                                        
                                                            <option  value="702" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bibit Tanaman</option>                                        
                                                            <option  value="703" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kentang</option>                                        
                                                            <option  value="704" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unggas & Ternak</option>                                        
                                                            <option  value="705" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rumput Laut</option>                                        
                                                            <option  value="706" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rempah - Rempah & Bumbu</option>                                        
                                                            <option  value="707" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teh</option>                                        
                                                            <option  value="708" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sayur - Sayuran</option>                                        
                                                            <option  value="709" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pertanian Lainnya</option>                                        
                                                            <option  value="712" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beras</option>                                        
                                                            <option  value="724" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Budidaya Laut</option>                                        
                                                            <option style="font-weight: bold;" value="2" >Pakaian</option>                                        
                                                            <option  value="515" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baju Batik</option>                                        
                                                            <option  value="517" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baju Muslim</option>                                        
                                                            <option  value="521" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jas dan Tuxedo </option>                                        
                                                            <option  value="566" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rak</option>                                        
                                                            <option  value="596" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Pakaian</option>                                        
                                                            <option  value="597" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Jahit</option>                                        
                                                            <option  value="598" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Mesin Pakaian</option>                                        
                                                            <option  value="599" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pakaian Bayi</option>                                        
                                                            <option  value="600" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jubah Mandi</option>                                        
                                                            <option  value="601" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pakaian Anak - Anak</option>                                        
                                                            <option  value="602" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mantel</option>                                        
                                                            <option  value="603" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaun</option>                                        
                                                            <option  value="604" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pakaian Etnis</option>                                        
                                                            <option  value="605" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesories Pakaian</option>                                        
                                                            <option  value="606" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jaket</option>                                        
                                                            <option  value="607" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manekin</option>                                        
                                                            <option  value="608" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baju Hamil</option>                                        
                                                            <option  value="609" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemeja Pria</option>                                        
                                                            <option  value="610" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baju Tidur</option>                                        
                                                            <option  value="611" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Celana & Jeans</option>                                        
                                                            <option  value="612" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kostum Pesta</option>                                        
                                                            <option  value="613" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pakainan Lainnya</option>                                        
                                                            <option  value="721" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Mesin Jahit</option>                                        
                                                            <option  value="722" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Mesin Jahit</option>                                        
                                                            <option style="font-weight: bold;" value="3" >Mobil & Sepeda Motor</option>                                        
                                                            <option  value="288" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATV</option>                                        
                                                            <option  value="289" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Perawatan Mobil</option>                                        
                                                            <option  value="290" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Perawatan Mobil</option>                                        
                                                            <option  value="291" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Mobil</option>                                        
                                                            <option  value="292" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksessories Motor</option>                                        
                                                            <option  value="293" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Sepeda Motor</option>                                        
                                                            <option  value="294" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Mobil</option>                                        
                                                            <option  value="295" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Mobil</option>                                        
                                                            <option  value="296" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Sepeda Motor</option>                                        
                                                            <option  value="297" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oli & Pelumas</option>                                        
                                                            <option  value="298" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ban</option>                                        
                                                            <option  value="299" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aki Mobil</option>                                        
                                                            <option  value="300" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Radiator</option>                                        
                                                            <option style="font-weight: bold;" value="4" >Kecantikan & Perawatan Diri</option>                                        
                                                            <option  value="55" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perlengkapan Mandi</option>                                        
                                                            <option  value="56" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Kecantikan</option>                                        
                                                            <option  value="57" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Kecantikan</option>                                        
                                                            <option  value="58" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan & Perlengkapan Makeup</option>                                        
                                                            <option  value="59" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Tato</option>                                        
                                                            <option  value="60" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perawatan Kulit</option>                                        
                                                            <option  value="61" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perlengkapan Manicure & Pedicure</option>                                        
                                                            <option  value="62" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spa </option>                                        
                                                            <option  value="63" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perawatan & Perlengkapan Rambut</option>                                        
                                                            <option style="font-weight: bold;" value="5" >Layanan Bisnis</option>                                        
                                                            <option  value="463" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendidikan & Pelatihan</option>                                        
                                                            <option  value="464" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Keuangan</option>                                        
                                                            <option  value="465" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Keamanan</option>                                        
                                                            <option  value="466" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Kontruksi</option>                                        
                                                            <option  value="467" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Hukum</option>                                        
                                                            <option  value="468" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Pembiayaan</option>                                        
                                                            <option  value="469" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Telekomunikasi</option>                                        
                                                            <option  value="471" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Desain Website</option>                                        
                                                            <option  value="472" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Konsultasi Investasi</option>                                        
                                                            <option  value="473" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Konsultasi Perdagangan</option>                                        
                                                            <option  value="474" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Desain Dekorasi</option>                                        
                                                            <option  value="475" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Penerjemah</option>                                        
                                                            <option  value="476" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Percetakan</option>                                        
                                                            <option  value="477" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Desain</option>                                        
                                                            <option  value="478" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karakter Desain Layanan</option>                                        
                                                            <option  value="479" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Iklan</option>                                        
                                                            <option  value="480" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Asuransi</option>                                        
                                                            <option  value="481" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produksi Audio & Video</option>                                        
                                                            <option  value="482" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Broker, Jasa Perantara</option>                                        
                                                            <option  value="483" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengembangan Perangkat Lunak</option>                                        
                                                            <option  value="484" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Transportasi</option>                                        
                                                            <option  value="485" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Event & Pameran</option>                                        
                                                            <option  value="486" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Mobil</option>                                        
                                                            <option  value="487" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Sepeda Motor</option>                                        
                                                            <option  value="488" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Paspor & Visa</option>                                        
                                                            <option  value="489" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Kimia</option>                                        
                                                            <option  value="490" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Perhiasan</option>                                        
                                                            <option  value="491" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Kesehatan</option>                                        
                                                            <option  value="492" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Kecantikan</option>                                        
                                                            <option  value="493" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Karet</option>                                        
                                                            <option  value="494" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Fashion Aksesoris</option>                                        
                                                            <option  value="495" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Internet</option>                                        
                                                            <option  value="496" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Travel</option>                                        
                                                            <option  value="497" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Iklan Radio</option>                                        
                                                            <option  value="498" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teknologi Konsultasi</option>                                        
                                                            <option  value="499" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Rental</option>                                        
                                                            <option  value="500" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Fotografi</option>                                        
                                                            <option  value="501" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Layanan Bisnis Lainnya</option>                                        
                                                            <option  value="502" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Derek</option>                                        
                                                            <option  value="711" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotel</option>                                        
                                                            <option  value="717" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Pariwisata</option>                                        
                                                            <option  value="719" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Produk Replika</option>                                        
                                                            <option  value="726" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa LED Projektor</option>                                        
                                                            <option  value="727" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Restoran / Rumah Makan</option>                                        
                                                            <option  value="728" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Periklanan</option>                                        
                                                            <option style="font-weight: bold;" value="6" >Bahan Kimia</option>                                        
                                                            <option  value="568" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agrokimia & Pestisida</option>                                        
                                                            <option  value="569" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kimia Alkohol</option>                                        
                                                            <option  value="570" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Kimia</option>                                        
                                                            <option  value="571" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagian Peralatan Kimia</option>                                        
                                                            <option  value="572" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Kimia</option>                                        
                                                            <option  value="573" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Kimia</option>                                        
                                                            <option  value="574" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karbon Hitam</option>                                        
                                                            <option  value="575" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kimia Reagen</option>                                        
                                                            <option  value="576" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pupuk</option>                                        
                                                            <option  value="577" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anorganik - Alkali</option>                                        
                                                            <option  value="578" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anorganik - Bahan Dasar</option>                                        
                                                            <option  value="579" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asam Anorganik</option>                                        
                                                            <option  value="580" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anorganik Salt</option>                                        
                                                            <option  value="581" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anorganik Lainnya</option>                                        
                                                            <option  value="582" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anorganik Oksida</option>                                        
                                                            <option  value="583" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perlengkapan Laboratorium</option>                                        
                                                            <option  value="584" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organik - Alkene</option>                                        
                                                            <option  value="585" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organik - Alkyl</option>                                        
                                                            <option  value="586" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organik - Alkyne</option>                                        
                                                            <option  value="587" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organik - Amine</option>                                        
                                                            <option  value="588" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organik - Aldehyde & Ketone</option>                                        
                                                            <option  value="589" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cat </option>                                        
                                                            <option  value="590" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pigmen</option>                                        
                                                            <option  value="591" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deterjen</option>                                        
                                                            <option  value="592" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aditif Pakan Ternak</option>                                        
                                                            <option  value="593" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aditif Makanan</option>                                        
                                                            <option  value="594" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Polimer Tinggi</option>                                        
                                                            <option  value="595" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Kimia Lainnya</option>                                        
                                                            <option  value="713" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sabun</option>                                        
                                                            <option style="font-weight: bold;" value="7" >Komputer & Software</option>                                        
                                                            <option  value="40" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner</option>                                        
                                                            <option  value="41" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printer</option>                                        
                                                            <option  value="42" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Software</option>                                        
                                                            <option  value="43" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kabel Komputer & Konektor</option>                                        
                                                            <option  value="44" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perangkat Jaringan</option>                                        
                                                            <option  value="45" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desktops & Server</option>                                        
                                                            <option  value="46" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Komputer</option>                                        
                                                            <option  value="47" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laptops & Aksesories</option>                                        
                                                            <option  value="48" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Media Penyimpanan</option>                                        
                                                            <option  value="49" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Komponen Komputer</option>                                        
                                                            <option  value="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Fotokopi</option>                                        
                                                            <option  value="51" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Fax</option>                                        
                                                            <option style="font-weight: bold;" value="8" >Konstruksi & Properti</option>                                        
                                                            <option  value="345" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panel Aluminium Komposit</option>                                        
                                                            <option  value="346" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aspal</option>                                        
                                                            <option  value="347" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semen</option>                                        
                                                            <option  value="348" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beton</option>                                        
                                                            <option  value="349" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perekat Konstruksi</option>                                        
                                                            <option  value="350" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pintu & Jendela</option>                                        
                                                            <option  value="351" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Bangunan</option>                                        
                                                            <option  value="352" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bangunan Keramik</option>                                        
                                                            <option  value="353" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Bangunan</option>                                        
                                                            <option  value="354" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kontraktor Konstruksi</option>                                        
                                                            <option  value="355" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kertas Dinding</option>                                        
                                                            <option  value="356" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batu, Marmer & Granit</option>                                        
                                                            <option  value="357" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desain Arsitektur</option>                                        
                                                            <option  value="358" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kamar Mandi & Dapur</option>                                        
                                                            <option  value="359" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kaca Bangunan</option>                                        
                                                            <option  value="360" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk CCTV</option>                                        
                                                            <option  value="361" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pipa Baja</option>                                        
                                                            <option  value="362" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pipa Aluminium</option>                                        
                                                            <option  value="363" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batu Bata & Genteng</option>                                        
                                                            <option  value="364" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pipa Komposit</option>                                        
                                                            <option  value="365" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bel Pintu</option>                                        
                                                            <option  value="366" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Konstruksi</option>                                        
                                                            <option  value="367" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Mesin Konstruksi</option>                                        
                                                            <option  value="368" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interior & Eksterior</option>                                        
                                                            <option  value="369" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lokakarya & Tanaman</option>                                        
                                                            <option  value="370" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Properti</option>                                        
                                                            <option  value="371" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Konstruksi</option>                                        
                                                            <option  value="372" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lantai</option>                                        
                                                            <option  value="373" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Konstruksi & Properti Lainnya</option>                                        
                                                            <option  value="374" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akses Control Sistem & Produk</option>                                        
                                                            <option  value="375" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Film Dekoratif</option>                                        
                                                            <option  value="376" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Bangunan Plastik</option>                                        
                                                            <option  value="377" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batu Ukir & Patung</option>                                        
                                                            <option  value="378" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pipa Stainless Steel</option>                                        
                                                            <option  value="379" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tiang Besi</option>                                        
                                                            <option  value="380" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teralis Besi</option>                                        
                                                            <option  value="714" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gipsum</option>                                        
                                                            <option  value="730" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Pintu & Jendela</option>                                        
                                                            <option style="font-weight: bold;" value="9" >Electronik Konsumen</option>                                        
                                                            <option  value="503" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengeras</option>                                        
                                                            <option  value="504" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobil Audio</option>                                        
                                                            <option  value="505" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Video Mobil</option>                                        
                                                            <option  value="506" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Komunikasi Mobil</option>                                        
                                                            <option  value="507" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elektronik Agen Konsumen</option>                                        
                                                            <option  value="508" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPS & Navigasi</option>                                        
                                                            <option  value="509" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Theater</option>                                        
                                                            <option  value="510" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VCD & Lainnya</option>                                        
                                                            <option  value="511" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kabel</option>                                        
                                                            <option  value="512" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baterai Digital</option>                                        
                                                            <option  value="513" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kamera Digital</option>                                        
                                                            <option  value="514" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Kamera Digital & Tas</option>                                        
                                                            <option  value="516" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perekam Suara Digital</option>                                        
                                                            <option  value="518" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemutar DVD, VCD</option>                                        
                                                            <option  value="519" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Radio</option>                                        
                                                            <option  value="520" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Televisi</option>                                        
                                                            <option style="font-weight: bold;" value="10" >Elektronik & Elektrik</option>                                        
                                                            <option  value="381" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dehumidifier</option>                                        
                                                            <option  value="382" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Listrik</option>                                        
                                                            <option  value="383" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Power Supply</option>                                        
                                                            <option  value="384" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemanas Ruangan</option>                                        
                                                            <option  value="385" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendingin Ruangan</option>                                        
                                                            <option  value="386" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baterai</option>                                        
                                                            <option  value="387" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stop Kontak</option>                                        
                                                            <option  value="388" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adaptor AC/DC</option>                                        
                                                            <option  value="389" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Switch</option>                                        
                                                            <option  value="390" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trafo</option>                                        
                                                            <option  value="391" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kabel</option>                                        
                                                            <option  value="392" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemutus Rangkaian</option>                                        
                                                            <option  value="393" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kontaktor Listrik</option>                                        
                                                            <option  value="394" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sekring</option>                                        
                                                            <option  value="395" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genset</option>                                        
                                                            <option  value="396" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Kabel</option>                                        
                                                            <option  value="397" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan & Perlengkapan Kerja</option>                                        
                                                            <option  value="398" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang AC & Pendingin</option>                                        
                                                            <option  value="399" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan & Perlengkapan Listrik</option>                                        
                                                            <option  value="400" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Komponen Elektronik</option>                                        
                                                            <option  value="401" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Elektronik & Elektrik Terkait</option>                                        
                                                            <option  value="402" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Elektronik & Elektrik</option>                                        
                                                            <option  value="403" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Konektor & Terminal</option>                                        
                                                            <option style="font-weight: bold;" value="11" >Energi</option>                                        
                                                            <option  value="261" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arang</option>                                        
                                                            <option  value="262" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gas Alam</option>                                        
                                                            <option  value="263" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batubara</option>                                        
                                                            <option  value="264" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Energi Lain</option>                                        
                                                            <option  value="265" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Listrik</option>                                        
                                                            <option  value="266" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Energi</option>                                        
                                                            <option  value="267" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panel Tenaga Surya</option>                                        
                                                            <option  value="268" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minyak Mentah</option>                                        
                                                            <option  value="269" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Power Supply Unit</option>                                        
                                                            <option  value="270" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Bakar Industri</option>                                        
                                                            <option  value="718" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembangkit Listrik</option>                                        
                                                            <option style="font-weight: bold;" value="12" >Lingkungan Hidup</option>                                        
                                                            <option  value="82" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daur Ulang Plastik</option>                                        
                                                            <option  value="83" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limbah Kertas</option>                                        
                                                            <option  value="84" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limbah Kimia</option>                                        
                                                            <option  value="85" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limbah Tekstil</option>                                        
                                                            <option  value="86" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limbah Metal</option>                                        
                                                            <option  value="87" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Lingkungan Lainnya</option>                                        
                                                            <option  value="88" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karet Daur Ulang</option>                                        
                                                            <option  value="89" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penanganan limbah</option>                                        
                                                            <option style="font-weight: bold;" value="13" >Fashion Aksesoris</option>                                        
                                                            <option  value="665" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sabuk & Aksesories</option>                                        
                                                            <option  value="666" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selendang & Syal</option>                                        
                                                            <option  value="667" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perhiasan & Imitasi</option>                                        
                                                            <option  value="668" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sarung Tangan</option>                                        
                                                            <option  value="669" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dompet</option>                                        
                                                            <option  value="670" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dasi</option>                                        
                                                            <option  value="671" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesories Fashion Lainnya</option>                                        
                                                            <option  value="672" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Topi & Aksesories</option>                                        
                                                            <option  value="673" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesories Rambut</option>                                        
                                                            <option  value="674" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Penutup Telinga</option>                                        
                                                            <option  value="675" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Tangan</option>                                        
                                                            <option  value="676" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas</option>                                        
                                                            <option  value="677" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kacamata & Aksesories</option>                                        
                                                            <option  value="678" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jasa Desain Fashion Aksesories</option>                                        
                                                            <option  value="679" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Aksesories Fashion</option>                                        
                                                            <option style="font-weight: bold;" value="14" >Makanan & Minuman</option>                                        
                                                            <option  value="159" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Toko Roti</option>                                        
                                                            <option  value="160" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ikan & Makanan Laut</option>                                        
                                                            <option  value="161" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Permen</option>                                        
                                                            <option  value="162" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Garam</option>                                        
                                                            <option  value="163" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makanan Kesehatan</option>                                        
                                                            <option  value="164" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makanan Bayi</option>                                        
                                                            <option  value="165" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makanan Cepat Saji</option>                                        
                                                            <option  value="166" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gula</option>                                        
                                                            <option  value="167" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saus</option>                                        
                                                            <option  value="168" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minyak Makan</option>                                        
                                                            <option  value="169" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bumbu Masak</option>                                        
                                                            <option  value="170" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cuka</option>                                        
                                                            <option  value="171" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minuman</option>                                        
                                                            <option  value="172" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minuman Ringan</option>                                        
                                                            <option  value="173" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kue & Bahan</option>                                        
                                                            <option  value="174" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makanan Ringan</option>                                        
                                                            <option  value="175" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makanan Manis</option>                                        
                                                            <option  value="176" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Susu</option>                                        
                                                            <option  value="177" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makanan Dalam Kemasan</option>                                        
                                                            <option  value="178" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kue & Makanan Kering</option>                                        
                                                            <option  value="179" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tepung</option>                                        
                                                            <option  value="180" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kecap</option>                                        
                                                            <option  value="181" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Kopi</option>                                        
                                                            <option  value="182" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cokelat</option>                                        
                                                            <option  value="183" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan-Bahan Cokelat</option>                                        
                                                            <option style="font-weight: bold;" value="15" >Mebel</option>                                        
                                                            <option  value="424" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Perabot</option>                                        
                                                            <option  value="425" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Furniture Luar Ruangan</option>                                        
                                                            <option  value="426" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Ruang Publik</option>                                        
                                                            <option  value="427" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Sekolah</option>                                        
                                                            <option  value="428" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Kamar Tidur</option>                                        
                                                            <option  value="429" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Ruang Makan</option>                                        
                                                            <option  value="430" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perangkat Perabot</option>                                        
                                                            <option  value="431" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Bar</option>                                        
                                                            <option  value="432" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Plastik</option>                                        
                                                            <option  value="433" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Bayi</option>                                        
                                                            <option  value="434" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Komersil</option>                                        
                                                            <option  value="435" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Kantor</option>                                        
                                                            <option  value="436" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Hotel</option>                                        
                                                            <option  value="437" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Rumah Sakit</option>                                        
                                                            <option  value="438" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Restoran</option>                                        
                                                            <option  value="439" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Anak</option>                                        
                                                            <option  value="440" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Keluarga</option>                                        
                                                            <option  value="441" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Antik</option>                                        
                                                            <option  value="442" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Bambu, Rotan & Anyaman</option>                                        
                                                            <option  value="443" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kaca Perabot</option>                                        
                                                            <option  value="444" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perabot Lainnya</option>                                        
                                                            <option style="font-weight: bold;" value="16" >Peralatan Industri Umun</option>                                        
                                                            <option  value="650" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penyaring</option>                                        
                                                            <option  value="651" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perlengkapan Filter & Suku Cadang</option>                                        
                                                            <option  value="652" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Laser & Suku Cadang</option>                                        
                                                            <option  value="653" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Air Kompresor & Suku Cadang</option>                                        
                                                            <option  value="654" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kipas Ventilasi & Suku Cadang</option>                                        
                                                            <option  value="655" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boiler</option>                                        
                                                            <option  value="656" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC & Suku Cadang</option>                                        
                                                            <option  value="657" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Peralatan Industri Umum</option>                                        
                                                            <option  value="658" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Tukang Bubut</option>                                        
                                                            <option  value="659" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Tukang Las</option>                                        
                                                            <option  value="660" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Mesin</option>                                        
                                                            <option  value="661" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin</option>                                        
                                                            <option  value="662" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Industri Umum Lainnya</option>                                        
                                                            <option  value="663" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Penghematan Energi & Suku Cadang</option>                                        
                                                            <option  value="664" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembersih Udara & Suku Cadang</option>                                        
                                                            <option style="font-weight: bold;" value="17" >Peralatan Mekanik & Suku Cadang</option>                                        
                                                            <option  value="90" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Belt & Converyor</option>                                        
                                                            <option  value="91" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lahar</option>                                        
                                                            <option  value="92" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Silinder</option>                                        
                                                            <option  value="93" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seals</option>                                        
                                                            <option  value="94" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gasket</option>                                        
                                                            <option  value="95" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Katup Valves</option>                                        
                                                            <option  value="96" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pompa & Alat</option>                                        
                                                            <option  value="97" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Mekanik Lainnya</option>                                        
                                                            <option  value="98" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hidrolik</option>                                        
                                                            <option  value="99" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saringan Udara</option>                                        
                                                            <option  value="100" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mur & Baut</option>                                        
                                                            <option  value="723" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Sterisasi</option>                                        
                                                            <option style="font-weight: bold;" value="18" >Hadiah & Kerajinan</option>                                        
                                                            <option  value="534" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hadiah Promosi</option>                                        
                                                            <option  value="535" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hadiah</option>                                        
                                                            <option  value="536" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bunga Plastik Tiruan</option>                                        
                                                            <option  value="537" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Bambu</option>                                        
                                                            <option  value="538" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Kayu</option>                                        
                                                            <option  value="539" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Kertas</option>                                        
                                                            <option  value="540" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Plastik</option>                                        
                                                            <option  value="541" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Batu</option>                                        
                                                            <option  value="542" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Kulit</option>                                        
                                                            <option  value="543" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dekorasi Pernikahan & Hadiah</option>                                        
                                                            <option  value="544" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Crystal</option>                                        
                                                            <option  value="545" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hadiah Laut</option>                                        
                                                            <option  value="546" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Imitasi Antik</option>                                        
                                                            <option  value="547" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Kain</option>                                        
                                                            <option  value="548" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Religius</option>                                        
                                                            <option  value="549" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barang Promosi</option>                                        
                                                            <option  value="550" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stiker</option>                                        
                                                            <option  value="551" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patung</option>                                        
                                                            <option  value="552" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Gelas</option>                                        
                                                            <option  value="553" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Tanah Liat</option>                                        
                                                            <option  value="554" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Sulaman</option>                                        
                                                            <option  value="555" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Hasil Laut</option>                                        
                                                            <option  value="556" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Ukir</option>                                        
                                                            <option  value="557" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barang Antik & Jimat</option>                                        
                                                            <option  value="558" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dekorasi Bunga</option>                                        
                                                            <option  value="559" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dekorasi Balon</option>                                        
                                                            <option  value="560" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seni Lukis & Kaligrafi</option>                                        
                                                            <option  value="561" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Ayaman</option>                                        
                                                            <option  value="562" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vas Bunga</option>                                        
                                                            <option  value="563" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hadiah & Kerajinan Lainnya</option>                                        
                                                            <option  value="564" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medali</option>                                        
                                                            <option  value="565" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Piala</option>                                        
                                                            <option  value="567" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Logam</option>                                        
                                                            <option  value="680" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerajinan Rotan</option>                                        
                                                            <option style="font-weight: bold;" value="19" >Kesehatan & Pengobatan</option>                                        
                                                            <option  value="143" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Kesehatan Gigi</option>                                        
                                                            <option  value="144" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obat - Obatan</option>                                        
                                                            <option  value="145" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Kecantikan</option>                                        
                                                            <option  value="146" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penurunan Berat Badan</option>                                        
                                                            <option  value="147" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suplemen & Vitamin</option>                                        
                                                            <option  value="148" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Sex</option>                                        
                                                            <option  value="149" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jamu & Obat Alami</option>                                        
                                                            <option  value="150" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk THT</option>                                        
                                                            <option  value="151" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Kesehatan Lainnya</option>                                        
                                                            <option  value="152" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Pijat</option>                                        
                                                            <option  value="153" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Medis</option>                                        
                                                            <option  value="154" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masker Pernafasan</option>                                        
                                                            <option  value="155" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tandu Medis</option>                                        
                                                            <option  value="156" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kantong Jenazah</option>                                        
                                                            <option  value="157" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Bantu Dengar</option>                                        
                                                            <option  value="158" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Kesehatan</option>                                        
                                                            <option style="font-weight: bold;" value="20" >Rumah & Taman</option>                                        
                                                            <option  value="413" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penangana Serangga & Hama</option>                                        
                                                            <option  value="414" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barang Pecah Belah</option>                                        
                                                            <option  value="415" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk & perawatan bayi</option>                                        
                                                            <option  value="416" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taman</option>                                        
                                                            <option  value="417" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengharum Ruangan</option>                                        
                                                            <option  value="418" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemanas Air</option>                                        
                                                            <option  value="419" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Dapur</option>                                        
                                                            <option  value="420" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembersih Ruangan</option>                                        
                                                            <option  value="421" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lemari Pendingin</option>                                        
                                                            <option  value="422" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan cucian</option>                                        
                                                            <option  value="423" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengolahan air</option>                                        
                                                            <option style="font-weight: bold;" value="21" >Peralatan Rumah Tangga</option>                                        
                                                            <option  value="445" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dispenser Air</option>                                        
                                                            <option  value="446" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lemari Es</option>                                        
                                                            <option  value="447" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembersih Udara</option>                                        
                                                            <option  value="448" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penyedot Debu</option>                                        
                                                            <option  value="449" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kipas Angin</option>                                        
                                                            <option  value="450" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pelembab</option>                                        
                                                            <option  value="451" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Cuci</option>                                        
                                                            <option  value="452" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dehumidifier</option>                                        
                                                            <option  value="453" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC</option>                                        
                                                            <option  value="454" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemanas Air Tenaga Surya</option>                                        
                                                            <option  value="455" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengering Tangan</option>                                        
                                                            <option  value="456" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penanak Nasi</option>                                        
                                                            <option  value="457" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pembuat Kopi</option>                                        
                                                            <option  value="458" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengaduk</option>                                        
                                                            <option  value="459" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembuat Jus</option>                                        
                                                            <option  value="460" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lemari Pendingin</option>                                        
                                                            <option  value="461" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Televisi</option>                                        
                                                            <option  value="462" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Dapur Lainnya</option>                                        
                                                            <option style="font-weight: bold;" value="22" >Lampu & Pencahayaan</option>                                        
                                                            <option  value="301" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Lampu</option>                                        
                                                            <option  value="302" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Lampu</option>                                        
                                                            <option  value="303" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Hemat Energi</option>                                        
                                                            <option  value="304" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Halogen</option>                                        
                                                            <option  value="305" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu LED</option>                                        
                                                            <option  value="306" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Bohlam</option>                                        
                                                            <option  value="307" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Luar Ruang</option>                                        
                                                            <option  value="308" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Darurat</option>                                        
                                                            <option  value="309" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Downlight</option>                                        
                                                            <option  value="310" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Dinding</option>                                        
                                                            <option  value="311" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Meja</option>                                        
                                                            <option  value="312" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Hias</option>                                        
                                                            <option  value="313" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senter</option>                                        
                                                            <option  value="314" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Sorot</option>                                        
                                                            <option  value="315" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Jalan</option>                                        
                                                            <option  value="316" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Industri</option>                                        
                                                            <option  value="317" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Flash</option>                                        
                                                            <option  value="318" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampu Gantung</option>                                        
                                                            <option  value="319" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Lampu Terkait</option>                                        
                                                            <option style="font-weight: bold;" value="23" >Bagasi, Tas & Dompet</option>                                        
                                                            <option  value="249" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Kamera</option>                                        
                                                            <option  value="250" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Clutch</option>                                        
                                                            <option  value="251" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Selempang</option>                                        
                                                            <option  value="252" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Card Holder</option>                                        
                                                            <option  value="253" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Ransel</option>                                        
                                                            <option  value="254" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paspor Case</option>                                        
                                                            <option  value="255" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dompet</option>                                        
                                                            <option  value="256" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Tangan</option>                                        
                                                            <option  value="257" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Laptop</option>                                        
                                                            <option  value="258" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Koper</option>                                        
                                                            <option  value="259" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Sekolah</option>                                        
                                                            <option  value="260" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tas Olahraga</option>                                        
                                                            <option style="font-weight: bold;" value="24" >Mesin & Alat Berat</option>                                        
                                                            <option  value="320" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pemotong Rumput</option>                                        
                                                            <option  value="321" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Kapal</option>                                        
                                                            <option  value="322" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Peralatan Rumah</option>                                        
                                                            <option  value="323" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Kimia & Farmasi</option>                                        
                                                            <option  value="324" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Penjual Otomatis</option>                                        
                                                            <option  value="325" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Tekstil</option>                                        
                                                            <option  value="326" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Minuman</option>                                        
                                                            <option  value="327" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Las</option>                                        
                                                            <option  value="328" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Karet & Plastik</option>                                        
                                                            <option  value="329" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Kayu</option>                                        
                                                            <option  value="330" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pertanian</option>                                        
                                                            <option  value="331" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Perkebunan</option>                                        
                                                            <option  value="332" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Bekas</option>                                        
                                                            <option  value="333" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Industri</option>                                        
                                                            <option  value="334" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Perhutanan</option>                                        
                                                            <option  value="335" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Bubut</option>                                        
                                                            <option  value="336" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Makanan</option>                                        
                                                            <option  value="337" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pembungkus</option>                                        
                                                            <option  value="338" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Cetak</option>                                        
                                                            <option  value="339" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Konstruksi</option>                                        
                                                            <option  value="340" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Besi</option>                                        
                                                            <option  value="341" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Mesin & Alat Berat</option>                                        
                                                            <option  value="342" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Mesin </option>                                        
                                                            <option  value="343" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pertambangan</option>                                        
                                                            <option  value="344" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Mesin & Alat Berat Terkait</option>                                        
                                                            <option style="font-weight: bold;" value="25" >Peralatan Pengukuran & Analisis</option>                                        
                                                            <option  value="271" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Timbangan</option>                                        
                                                            <option  value="272" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Termometer</option>                                        
                                                            <option  value="273" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Ukur Tekanan</option>                                        
                                                            <option  value="274" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Pengatur Waktu</option>                                        
                                                            <option  value="275" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Analisa</option>                                        
                                                            <option  value="276" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengukur Listrik</option>                                        
                                                            <option  value="277" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengukur Level</option>                                        
                                                            <option  value="278" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Pengukur Lainnya</option>                                        
                                                            <option  value="279" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Survey</option>                                        
                                                            <option  value="280" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Optik & Laser</option>                                        
                                                            <option  value="281" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengukur Elektronik</option>                                        
                                                            <option  value="282" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengukur Kecepatan</option>                                        
                                                            <option  value="283" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengukur Cahaya</option>                                        
                                                            <option  value="284" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengukur Aliran</option>                                        
                                                            <option  value="285" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Higrometer</option>                                        
                                                            <option  value="286" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Uji Pengamat Cuasa</option>                                        
                                                            <option  value="287" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengukur Kebisingan</option>                                        
                                                            <option style="font-weight: bold;" value="26" >Mineral & Metal</option>                                        
                                                            <option  value="64" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logam Campuran</option>                                        
                                                            <option  value="65" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aluminium</option>                                        
                                                            <option  value="66" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asbes Produk</option>                                        
                                                            <option  value="67" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kawat Berduri</option>                                        
                                                            <option  value="68" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keramik</option>                                        
                                                            <option  value="69" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tembaga</option>                                        
                                                            <option  value="70" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fiberglass Produk</option>                                        
                                                            <option  value="71" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kaca</option>                                        
                                                            <option  value="72" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Besi</option>                                        
                                                            <option  value="73" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Magnet</option>                                        
                                                            <option  value="74" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baja</option>                                        
                                                            <option  value="75" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perak</option>                                        
                                                            <option  value="76" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Stainless Steel</option>                                        
                                                            <option  value="77" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karbon</option>                                        
                                                            <option  value="78" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Titanium</option>                                        
                                                            <option  value="79" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Nikel</option>                                        
                                                            <option  value="80" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pipa Stainless</option>                                        
                                                            <option  value="81" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logam</option>                                        
                                                            <option  value="715" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metal</option>                                        
                                                            <option style="font-weight: bold;" value="27" >Perlengkapan Kantor & Sekolah</option>                                        
                                                            <option  value="242" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Printer</option>                                        
                                                            <option  value="243" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan pendidikan</option>                                        
                                                            <option  value="244" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Persentasi</option>                                        
                                                            <option  value="245" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Sekolah</option>                                        
                                                            <option  value="246" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Fotokopi</option>                                        
                                                            <option  value="247" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Perlengkapan Kantor</option>                                        
                                                            <option  value="248" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Perlengkapan Sekolah</option>                                        
                                                            <option style="font-weight: bold;" value="28" >Pembungkus & Kertas</option>                                        
                                                            <option  value="629" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Film Plastik</option>                                        
                                                            <option  value="630" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Makanan</option>                                        
                                                            <option  value="631" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Tas</option>                                        
                                                            <option  value="632" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutup Botol, Penutup</option>                                        
                                                            <option  value="633" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Hadiah</option>                                        
                                                            <option  value="634" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Produk Lainnya</option>                                        
                                                            <option  value="635" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pelapis Aluminium</option>                                        
                                                            <option  value="636" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Kotak</option>                                        
                                                            <option  value="637" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Label Kemasan</option>                                        
                                                            <option  value="638" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Plastik</option>                                        
                                                            <option  value="639" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Kertas</option>                                        
                                                            <option  value="640" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kecilkan Film</option>                                        
                                                            <option  value="641" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kaleng</option>                                        
                                                            <option  value="642" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Tabung</option>                                        
                                                            <option  value="643" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Farmasi</option>                                        
                                                            <option  value="644" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Tembakau</option>                                        
                                                            <option  value="645" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limbah Kertas</option>                                        
                                                            <option  value="646" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Botol</option>                                        
                                                            <option  value="647" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kemasan Elektronik</option>                                        
                                                            <option  value="648" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Kemasan Lainnya</option>                                        
                                                            <option  value="649" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Kertas Lainnya</option>                                        
                                                            <option style="font-weight: bold;" value="29" >Percetakan & Penerbitan</option>                                        
                                                            <option  value="232" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Percetakan Lainnya</option>                                        
                                                            <option  value="233" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tinta Percetakan</option>                                        
                                                            <option  value="234" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Percetakan</option>                                        
                                                            <option  value="235" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Penerbitan</option>                                        
                                                            <option  value="236" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Cetak & Suku Cadang</option>                                        
                                                            <option  value="237" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Majalah</option>                                        
                                                            <option  value="238" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Kabar</option>                                        
                                                            <option  value="239" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buku</option>                                        
                                                            <option  value="240" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stempel</option>                                        
                                                            <option style="font-weight: bold;" value="30" >Karet & Plastik</option>                                        
                                                            <option  value="219" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Baku Plastik</option>                                        
                                                            <option  value="220" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Baku Karet</option>                                        
                                                            <option  value="221" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Plastik</option>                                        
                                                            <option  value="222" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Karet</option>                                        
                                                            <option  value="223" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Karet</option>                                        
                                                            <option  value="224" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Plastik</option>                                        
                                                            <option  value="225" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daur Ulang Plastik</option>                                        
                                                            <option  value="226" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daur Ulang Karet</option>                                        
                                                            <option  value="227" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pengelolah Plastik</option>                                        
                                                            <option  value="228" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pembuat Produk Karet</option>                                        
                                                            <option  value="229" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pembuat Produk Plastik</option>                                        
                                                            <option  value="230" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Pengelolah Karet</option>                                        
                                                            <option  value="231" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fiber Glass</option>                                        
                                                            <option style="font-weight: bold;" value="31" >Keamanan & Perlindungan</option>                                        
                                                            <option  value="101" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keamanan Jalan Kenderaan</option>                                        
                                                            <option  value="102" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk CCTV</option>                                        
                                                            <option  value="103" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kunci Pintu Digital</option>                                        
                                                            <option  value="104" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Pertahanan Diri</option>                                        
                                                            <option  value="105" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Keamanan</option>                                        
                                                            <option  value="106" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Pemadam Kebakaran</option>                                        
                                                            <option  value="107" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kartu Akses Kontrol</option>                                        
                                                            <option  value="108" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembaca Kartu Akses Kontrol</option>                                        
                                                            <option  value="109" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistem Akses Kontrol</option>                                        
                                                            <option  value="110" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akses Kontrol Wajah</option>                                        
                                                            <option  value="111" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akses Kontrol Sidik Jari</option>                                        
                                                            <option  value="112" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telepon Pintu Video</option>                                        
                                                            <option  value="113" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alarm Anti Pencuri</option>                                        
                                                            <option  value="114" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Sekuriti & Keamanan Lainnya</option>                                        
                                                            <option  value="115" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brankas</option>                                        
                                                            <option  value="116" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Keamanan</option>                                        
                                                            <option style="font-weight: bold;" value="32" >Peralatan Jasa</option>                                        
                                                            <option  value="211" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Keuangan</option>                                        
                                                            <option  value="212" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Periklanan</option>                                        
                                                            <option  value="213" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perlengkapan Supermarket</option>                                        
                                                            <option  value="214" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perlengkapan Restoran & Hotel</option>                                        
                                                            <option  value="215" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Layanan Peralatan Lainnya</option>                                        
                                                            <option  value="216" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perlengkapan Pernikahan</option>                                        
                                                            <option  value="217" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perlengkapan Pemakaman</option>                                        
                                                            <option  value="218" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Binatu</option>                                        
                                                            <option style="font-weight: bold;" value="33" >Sepatu & Aksesoris</option>                                        
                                                            <option  value="522" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepatu Kasual</option>                                        
                                                            <option  value="523" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan & Aksesories Sepatu</option>                                        
                                                            <option  value="524" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepatu Olahraga</option>                                        
                                                            <option  value="525" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepatu Tujuan Khusus</option>                                        
                                                            <option  value="526" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sandal</option>                                        
                                                            <option  value="527" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepatu Bot</option>                                        
                                                            <option  value="528" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahan Sepatu</option>                                        
                                                            <option  value="529" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepatu Lainnya</option>                                        
                                                            <option  value="530" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepatu Bayi</option>                                        
                                                            <option  value="531" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepatu Anak</option>                                        
                                                            <option  value="532" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Perbaikan Sepatu</option>                                        
                                                            <option  value="533" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Sepatu</option>                                        
                                                            <option style="font-weight: bold;" value="34" >Olahraga & Hiburan</option>                                        
                                                            <option  value="117" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Wisata</option>                                        
                                                            <option  value="118" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Olahraga</option>                                        
                                                            <option  value="119" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Olahraga</option>                                        
                                                            <option  value="120" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Film</option>                                        
                                                            <option  value="121" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Musik</option>                                        
                                                            <option  value="122" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rumput Buatan</option>                                        
                                                            <option  value="123" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sarana Hiburan</option>                                        
                                                            <option  value="124" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kebugaran & Binaraga</option>                                        
                                                            <option  value="125" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Berkemah</option>                                        
                                                            <option  value="126" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Memancing</option>                                        
                                                            <option  value="127" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teleskop & Teropong</option>                                        
                                                            <option  value="725" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen LED Projektor</option>                                        
                                                            <option style="font-weight: bold;" value="35" >Telekomunikasi</option>                                        
                                                            <option  value="128" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modem</option>                                        
                                                            <option  value="129" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kartu Jaringan</option>                                        
                                                            <option  value="130" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menara Telekomunikasi</option>                                        
                                                            <option  value="131" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Router</option>                                        
                                                            <option  value="132" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Radio & TV Aksesories</option>                                        
                                                            <option  value="133" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Penyiaran Radio & TV</option>                                        
                                                            <option  value="134" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan Fiber Optik</option>                                        
                                                            <option  value="135" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Antena</option>                                        
                                                            <option  value="136" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Handphone</option>                                        
                                                            <option  value="137" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Radio Komunikasi</option>                                        
                                                            <option  value="138" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telepon Genggam</option>                                        
                                                            <option  value="139" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Handphone</option>                                        
                                                            <option  value="140" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telepon</option>                                        
                                                            <option  value="141" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penguat Signal Handphone</option>                                        
                                                            <option  value="142" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PABX</option>                                        
                                                            <option style="font-weight: bold;" value="36" >Tekstil & Kulit</option>                                        
                                                            <option  value="404" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Tekstil</option>                                        
                                                            <option  value="405" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Benang</option>                                        
                                                            <option  value="406" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kulit Asli</option>                                        
                                                            <option  value="407" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Kulit</option>                                        
                                                            <option  value="408" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Tekstil</option>                                        
                                                            <option  value="409" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesin Jahit</option>                                        
                                                            <option  value="410" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Mesin Jahit</option>                                        
                                                            <option  value="411" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Produk Kulit</option>                                        
                                                            <option  value="412" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk Tekstil & Kulit Terkait</option>                                        
                                                            <option style="font-weight: bold;" value="37" >Permata, Jam Tangan & Kacamata</option>                                        
                                                            <option  value="52" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perhiasan</option>                                        
                                                            <option  value="53" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kacamata</option>                                        
                                                            <option  value="54" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jam Tangan</option>                                        
                                                            <option style="font-weight: bold;" value="38" >Mainan</option>                                        
                                                            <option  value="184" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mainan Tiup</option>                                        
                                                            <option  value="185" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mainan Plastik</option>                                        
                                                            <option  value="186" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mainan Kayu</option>                                        
                                                            <option  value="187" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesoris Mainan</option>                                        
                                                            <option  value="188" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mainan Elektrik</option>                                        
                                                            <option  value="189" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mainan Pendidikan</option>                                        
                                                            <option  value="190" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teka-Teki</option>                                        
                                                            <option  value="191" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mainan Mobil</option>                                        
                                                            <option  value="192" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bola</option>                                        
                                                            <option  value="193" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mainan Lainnya</option>                                        
                                                            <option  value="194" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action Figure</option>                                        
                                                            <option  value="195" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remote Control Drone & Quadcopter</option>                                        
                                                            <option style="font-weight: bold;" value="39" >Transportasi</option>                                        
                                                            <option  value="196" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bus</option>                                        
                                                            <option  value="197" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kontainer</option>                                        
                                                            <option  value="198" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepeda Listrik</option>                                        
                                                            <option  value="199" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Truk</option>                                        
                                                            <option  value="200" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sepeda</option>                                        
                                                            <option  value="201" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksesories Sepeda</option>                                        
                                                            <option  value="202" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Sepeda</option>                                        
                                                            <option  value="203" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skuter</option>                                        
                                                            <option  value="204" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suku Cadang Truk</option>                                        
                                                            <option  value="205" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kapal & Perahu</option>                                        
                                                            <option  value="206" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobil</option>                                        
                                                            <option  value="207" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karoseri</option>                                        
                                                            <option  value="208" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agen Transportasi</option>                                        
                                                            <option  value="209" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penerbangan</option>                                        
                                                            <option  value="210" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kereta Api</option>                                        
                                                            <option  value="710" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kargo</option>                                        
                                                        
                        </select>
                        <label>Gunakan tombol Ctrl untuk pilih lebih dari 1 kategori.
                    </div>
                    
                    <div class="form-group">
                        <label for="keyword">Katakunci Pencarian:</label>
                        <textarea class="form-control" style="height: 80px" name="keyword">lorry wheel</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="berat_produk">Berat Produk:</label>
                        <input type="text" value="1,000" class="form-control harga" name="berat" placeholder="" />
                        <label for="label_berat_produk">Berat produk dalam Gram.</label>
                    </div>
                    
                    <div class="form-group">
                        <label for="harga_modal">Harga Modal:</label>
                        <input type="text" value="30,000" class="form-control harga" name="harga_modal" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="harga_jual_umum">Harga Jual Normal:</label>
                        <input type="text" value="35,000" class="form-control harga" name="harga_jual_umum" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="harga_jual_jenis_user">Harga Jual Jenis User:</label>                        
                        <div id="detail_harga_jual" class="table-responsive">
                            <table id="tblHargaUser" width="100%">
                                <thead>
                                    <tr>
                                        <th width="50%"><div style="text-align: center;">Jenis User</div></th>
                                        <th width="50%"><div style="text-align: center;">Harga</div></th>
                                    </tr>
                                </thead>
                                <tbody id="hargauser">
                                                                            <tr>
                                            <td style="padding: 5px;"><input type="hidden" name="id_jenis_user" value="2" /><input type="text" value="Silver" class="form-control" name="jenis_user" class="form-control" readonly="readOnly" /></td>
                                            <td style="padding: 5px;"><input type="text" value="0" class="form-control harga" name="harga_jual" class="form-control" placeholder="" /></td>
                                         </tr>
                                                                            <tr>
                                            <td style="padding: 5px;"><input type="hidden" name="id_jenis_user" value="3" /><input type="text" value="Gold" class="form-control" name="jenis_user" class="form-control" readonly="readOnly" /></td>
                                            <td style="padding: 5px;"><input type="text" value="0" class="form-control harga" name="harga_jual" class="form-control" placeholder="" /></td>
                                         </tr>
                                                                            <tr>
                                            <td style="padding: 5px;"><input type="hidden" name="id_jenis_user" value="4" /><input type="text" value="Premium" class="form-control" name="jenis_user" class="form-control" readonly="readOnly" /></td>
                                            <td style="padding: 5px;"><input type="text" value="0" class="form-control harga" name="harga_jual" class="form-control" placeholder="" /></td>
                                         </tr>
                                                                    </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="form-group">                        
                        <label for="harga_jual_grosir">Harga Jual Grosir:</label>
                        <div id="detail_varian" class="table-responsive">
                            <table id="tblGrosir" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30%"><div style="text-align: center;">Jumlah Min</div></th>
                                        <th width="30%"><div style="text-align: center;">Jumlah Max</div></th>
                                        <th width="30%"><div style="text-align: center;">Harga</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                    </tr>
                                </thead>
                                <tbody id="grosir"></tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="tipe_diskon">Penggunaan Diskon:</label>
                        <select class="form-control" name="tipe_diskon">
                            <option value="persentase"  selected="selected" >Menggunakan Persentase</option>
                            <option value="nominal" >Menggunakan Harga Diskon</option>
                        </select>
                    </div>
                            
                    <div class="form-group">
                        <label for="harga_diskon">Harga Diskon:</label>
                        <input type="text" value="0" class="form-control harga" name="harga_diskon" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="persen_diskon">Persentase Diskon:</label>
                        <input type="text" value="0" class="form-control" name="persen_diskon" placeholder="" />
                    </div>
                    
                    <div class="form-group">                        
                        <label for="varian">Varian Stok:</label>
                        <div id="detail_varian" class="table-responsive">
                            <table id="tblVarian" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30%"><div style="text-align: center;">Ukuran</div></th>
                                        <th width="30%"><div style="text-align: center;">Warna</div></th>
                                        <th width="30%"><div style="text-align: center;">Jumlah</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                    </tr>
                                </thead>
                                <tbody id="varian"></tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <style type="text/css">
                            .cropit-image-preview {
                                margin: 5px;
                                background-color: #a6bac4;
                                width: 312px;
                                height: 312px;
                                cursor: move;
                            }
                            .H-new-kol-post-img {
                                margin: 5px;
                                /*background-color: #a6bac4*/;
                                width: 312px;
                                height: 312px;
                            }
                        </style>
                       
                        <label for="photo">Foto Produk:</label>                        
                        <table width="100%" class="row">
                            <tr><td width="100%">
                                <div class="H-new-kol-post-img image-editor_1 col-md-1">
                                    <div id="upload_foto_1" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_1" type="file" name="fileupload_foto_1" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>

                                <div class="H-new-kol-post-img image-editor_2 col-md-1">
                                    <div id="upload_foto_2" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_2" type="file" name="fileupload_foto_2" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>

                                <div class="H-new-kol-post-img image-editor_3 col-md-1">
                                    <div id="upload_foto_3" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_3" type="file" name="fileupload_foto_3" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>

                                <div class="H-new-kol-post-img image-editor_4 col-md-1">
                                    <div id="upload_foto_4" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_4" type="file" name="fileupload_foto_4" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>

                                <div class="H-new-kol-post-img image-editor_5 col-md-1">
                                    <div id="upload_foto_5" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_5" type="file" name="fileupload_foto_5" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>                                                       
                            </td></tr>
                        </table>
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Status Produk:</label>
                        <select class="form-control" name="status">
                            <option value="1"  selected="selected" >Publish</option>
                            <option value="0" >Unpublish</option>
                        </select>
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
    <script type="text/javascript" src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery.cropit.js"></script>  
    <script type="text/javascript" src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery.input.formatter.js"></script>  
    
    <!-- include summernote -->
    <link rel="stylesheet" href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/dist/summernote.css">
    <script type="text/javascript" src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/dist/summernote.js"></script>
    <script type="text/javascript" src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/dist/summernote-ext-video.js"></script> 
        
    <script type="text/javascript">
        
        
        $(function () {           
        
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="10" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="15" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="25,000" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_grosir" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#grosir" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="16" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="20" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="22,000" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_grosir">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#grosir" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="21" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="25" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="20,000" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_grosir">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#grosir" );
                                            
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="XL" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="MERAH" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="0" name="jumlah" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_varian" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="XL" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="BIRU" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="2" name="jumlah" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_varian">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="L" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="MERAH" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="0" name="jumlah" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_varian">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="L" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="BIRU" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="-9" name="jumlah" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_varian">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                                            
            $("input.harga").formatInput();
            
            var isEdit = true;
            $('.image-editor_1').cropit({
              smallImage: 'stretch',
              imageState: {
                src: 'http://192.168.1.101/gomocart/uploads/produk/lorry-wheel_8142.png',
              }            });

            $('.image-editor_2').cropit({
              smallImage: 'stretch'            });

            $('.image-editor_3').cropit({
              smallImage: 'stretch'            });

            $('.image-editor_4').cropit({
              smallImage: 'stretch'            });

            $('.image-editor_5').cropit({
              smallImage: 'stretch'            });
            
            $('.summernote').summernote({
                height: 300,
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

            $(".summernote").code('<p>Untuk informasi lebih lanjut, silakan hubungi <strong>PT. Indodaya Cipta Karya</strong>. Terima kasih!</p><br><br>');
                
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
                
                submitProduk();
            });
            
            
            $( document ).on( 'click', '.hapus_grosir', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_grosir').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_grosir">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#grosir" );
                $("input.harga").formatInput();                         
            });
            
            
            $( document ).on( 'click', '.hapus_varian', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_varian').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah" class="form-control  harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_varian">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                $("input.harga").formatInput();                         
            });
                
                                        
            function submitProduk() {
                var grosir = ''; var row = 0;
                $("#tblGrosir tr").each(function() {
                    if(row>0) {
                        var jumlah_min = $(this).find('[name=jumlah_min]').val();
                        var jumlah_max = $(this).find('[name=jumlah_max]').val();
                        var harga = $(this).find('[name=harga]').val();

                        grosir+=(grosir==''?'':'\n')+jumlah_min.replace(',', '')+'\t'+jumlah_max.replace(',', '')+'\t'+harga.replace(',', '');
                    } 
                    row++;
                });
                //console.log(grosir);
                //return;
                
                var varian = ''; var row = 0;
                $("#tblVarian tr").each(function() {
                    if(row>0) {
                        var ukuran = $(this).find('[name=ukuran]').val();
                        var warna = $(this).find('[name=warna]').val();
                        var jumlah = $(this).find('[name=jumlah]').val();

                        varian+=(varian==''?'':'\n')+ukuran+'\t'+warna+'\t'+jumlah.replace(',', '');
                    } 
                    row++;
                });

                var harga_user = ''; var row = 0;
                $("#tblHargaUser tr").each(function() {
                    
                    if(row>0) {
                        var id_jenis_user = $(this).find('[name=id_jenis_user]').val();
                        var harga_jual = $(this).find('[name=harga_jual]').val();

                        harga_user+=(harga_user==''?'':'\n')+id_jenis_user+'\t'+harga_jual.replace(',', '');
                    } 
                    row++;
                });
                //console.log(harga_user);
                
                var data = new FormData();
                data.append('id', isEdit?'3':'');
                data.append('kode', $('[name=kode]').val());
                data.append('nama', $('[name=nama]').val());
                data.append('penjelasan', $('.summernote').summernote().code().replace(/\n/, '<br />'));
                data.append('keyword', $('[name=keyword]').val());
                data.append('berat', $('[name=berat]').val().replace(',', ''));
                
                var kategori = $('[name=id_kategori]').val();
                $id_kategori = '';
                for(var key in kategori) {
                    $id_kategori+=(key>0?',':'')+kategori[key]
                }
                data.append('id_kategori', $id_kategori);
                data.append('harga_modal', ($('[name=harga_modal]').val()).replace(',', ''));
                data.append('harga_jual', ($('[name=harga_jual_umum]').val()).replace(',', ''));
                data.append('harga_jual_user', harga_user);
                data.append('tipe_diskon', $('[name=tipe_diskon]').val());
                data.append('harga_diskon', ($('[name=harga_diskon]').val()).replace(',', ''));
                data.append('persen_diskon', $('[name=persen_diskon]').val());
                data.append('grosir', grosir);
                data.append('varian', varian);
                
                var imageData_1 = $('.image-editor_1').cropit('export');
                data.append('filename_foto_1', imageData_1==undefined?'':imageData_1);

                var imageData_2 = $('.image-editor_2').cropit('export');
                data.append('filename_foto_2', imageData_2==undefined?'':imageData_2);

                var imageData_3 = $('.image-editor_3').cropit('export');
                data.append('filename_foto_3', imageData_3==undefined?'':imageData_3);

                var imageData_4 = $('.image-editor_4').cropit('export');
                data.append('filename_foto_4', imageData_4==undefined?'':imageData_4);

                var imageData_5 = $('.image-editor_5').cropit('export');
                data.append('filename_foto_5', imageData_5==undefined?'':imageData_5);
                  
                data.append('status', $('[name=status]').val());
                
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

            $('#upload_foto_1').click(function(){
                $('#fileupload_foto_1').trigger('click'); 
                return false;
            });

            $('#upload_foto_2').click(function(){
                $('#fileupload_foto_2').trigger('click'); 
                return false;
            });

            $('#upload_foto_3').click(function(){
                $('#fileupload_foto_3').trigger('click'); 
                return false;
            });

            $('#upload_foto_4').click(function(){
                $('#fileupload_foto_4').trigger('click'); 
                return false;
            });

            $('#upload_foto_5').click(function(){
                $('#fileupload_foto_5').trigger('click'); 
                return false;
            });             
        });
    </script>
</body>
</html><?php }} ?>
