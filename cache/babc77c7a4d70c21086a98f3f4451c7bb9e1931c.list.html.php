<?php /*%%SmartyHeaderCode:17576578daa1895c222-40234107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'babc77c7a4d70c21086a98f3f4451c7bb9e1931c' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\laporan_pesanan\\list.html',
      1 => 1468912376,
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
      1 => 1468200863,
      2 => 'file',
    ),
    'bc639c2829ccdaa5983df9e916d06563953997c0' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\side.html',
      1 => 1468902304,
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
      1 => 1466117955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17576578daa1895c222-40234107',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578dd62d6b7a70_21054913',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578dd62d6b7a70_21054913')) {function content_578dd62d6b7a70_21054913($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan Pesanan</title>
    <!-- Bootstrap Styles-->
    <link href="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/css/custom-styles.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="http://192.168.1.102/gomocart">GOMOCART</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a href="http://192.168.1.102/gomocart/adminweb/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-folder"></i> Pesanan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/pesanandalamproses/keepbelumlunas/"><i class="fa fa-bars"></i> Keep / Belum Lunas</a>
                            </li>                            
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/pemesanan/"><i class="fa fa-briefcase"></i> Data Pesanan</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="http://192.168.1.102/gomocart/adminweb/konfirmasi/"><i class="fa fa-foursquare"></i> Konfirmasi Pembayaran</a>
                    </li>
                    
                    <li>
                        <a href="http://192.168.1.102/gomocart/adminweb/customer/"><i class="fa fa-user"></i> Data Pelanggan</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-bookmark"></i> Konten Website <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/banner/"><i class="fa fa-foursquare"></i> Banner</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/contentleft/"><i class="fa fa-edit"></i> Widget</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/menupage/"><i class="fa fa-book"></i> Halaman</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-book"></i> Katalog <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/category/"><i class="fa fa-folder"></i> Kategori</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/stok/"><i class="fa fa-dropbox"></i> Stok</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="active-menu">
                        <a href="#"><i class="fa fa-bars"></i> Laporan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/laporan_pembayaran/"><i class="fa fa-money"></i> Pembayaran</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/laporan_pesanan/"><i class="fa fa-foursquare"></i> Pesanan</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-asterisk"></i> Pengaturan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/pengaturan/"><i class="fa fa-edit"></i> Umum</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/bank/"><i class="fa fa-money"></i> Metode Pembayaran</a>
                            </li>
                            <li>
                                <a href="http://192.168.1.102/gomocart/adminweb/ekspedisi/"><i class="fa fa-truck"></i> Ekspedisi</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="http://192.168.1.102/gomocart/adminweb/logout.php"><i class="fa fa-fw fa-sign-out"></i> Keluar</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Laporan Pesanan <small>List of Laporan Pesanan</small>
                        </h1>
                        <ol class="breadcrumb">
                          <li><a href="http://192.168.1.102/gomocart">Home</a></li>
                          <li><a href="http://192.168.1.102/gomocart/laporan_pesanan/">Laporan Pesanan</a></li>
                          <li class="active">List of Laporan Pesanan</li>
                        </ol>
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    
                    <div class="form-group">
                        <div id="alert_success" class="col-md-fungsi-6" style="display: none;">                         
                            <div class="alert alert-info">&nbsp;</div>
                        </div>

                        <div id="alert_error" class="col-md-fungsi-6" style="display: none;">
                            <div class="alert alert-danger">&nbsp;</div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <table style="width: 100%;">
                            <tr>
                                <td width="15%" style="padding: 10px;"><label>Dari Tanggal:</label></td>
                                <td width="85%">
                                    <table width="100%">
                                        <tr>
                                            <td width="40%">
                                                <input type="text" value="" class="form-control tanggal" name="tanggal_dari" placeholder="" />
                                            </td>
                                            <td style="text-align: center;">
                                                <label>Sd. Tanggal:</label>
                                            </td>
                                            <td width="40%">
                                                <input type="text" value="" class="form-control tanggal" name="tanggal_sampai" placeholder="" />                                        
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>&nbsp;</td>
                                <td><div id="btn_cari" type="submit" class="btn btn-primary">Tampilkan</div></td>                                
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="form-group">
                        <div id="ekspor_xls" class="btn btn-info">Eksport To Xls</div>
                        <div id="ekspor_pdf" class="btn btn-info">Eksport To Pdf</div>
                    </div>
                    
                    <div id="detail" class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%"><div style="text-align: center;">No.</div></th>
                                        <th width="10%"><div style="text-align: center;">No. Pesan</div></th>
                                        <th width="10%"><div style="text-align: center;">Tanggal</div></th>
                                        <th width="25%"><div style="text-align: center;">Member</div></th>
                                        <th width="10%"><div style="text-align: center;">Modal</div></th>
                                        <th width="10%"><div style="text-align: center;">Sub Total</div></th>
                                        <th width="10%"><div style="text-align: center;">Voucher</div></th>
                                        <th width="10%"><div style="text-align: center;">Ongkir</div></th>
                                        <th width="10%"><div style="text-align: center;">Total</div></th>    
                                    </tr>
                                </thead>
                                <tbody>
                                                                                                            
                                        <tr id="baris_">
                                            <td align="center">1</td>
                                            <td align="center">000005</td>
                                            <td align="center">27-06-2016</td>
                                            <td align="left">Rifki Heruprasetyo</td>
                                            <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">54,000</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">40,000</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">94,000</span></td>                                                                                   
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_">
                                            <td align="center">2</td>
                                            <td align="center">000004</td>
                                            <td align="center">27-06-2016</td>
                                            <td align="left">Rifki Heruprasetyo</td>
                                            <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">32,400</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">54,000</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">86,400</span></td>                                                                                   
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_">
                                            <td align="center">3</td>
                                            <td align="center">000001</td>
                                            <td align="center">25-06-2016</td>
                                            <td align="left">Rifki Heruprasetyo</td>
                                            <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">50,000</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">10,000</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">80,000</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;">120,000</span></td>                                                                                   
                                        </tr>
                                          
                                                                        <tr>
                                        <td colspan="4" align="right"><span style="font-weight: bold;">TOTAL:&nbsp;&nbsp;</span></td>
                                        <td align="right"><span style="font-weight: bold;">0</span></td>
                                        <td align="right"><span style="font-weight: bold;">136,400</span></td>
                                        <td align="right"><span style="font-weight: bold;">10,000</span></td>
                                        <td align="right"><span style="font-weight: bold;">174,000</span></td>
                                        <td align="right"><span style="font-weight: bold;">300,400</span></td>
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
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/jquery-1.11.0.min.js"></script>
    
    <!-- jQuery Ui -->
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>

    <!-- Bootstrap Js -->
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/jquery.metisMenu.js"></script>
    
    <!-- Morris Chart Js -->
    <!-- script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/morris/morris.js"></script>
	
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/easypiechart.js"></script>
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/easypiechart-data.js"></script -->
	
    <!-- Custom Js -->
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/js/custom-scripts.js"></script>
    
    <link href="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/datepick/jquery.datepick.css" rel="stylesheet">
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/datepick/jquery.plugin.js"></script>
    <script src="http://192.168.1.102/gomocart/templates/back-end/matrix/assets/datepick/jquery.datepick.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            $( "#btn_cari" ).click(function() {                
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                
                window.location='list.php?_'+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'');            
            });
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

            $( "#ekspor_xls" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();

                $.ajax({
                    type: 'POST',
                    url: 'ekspor.php?tanggal_dari='+tanggal_dari+'&tanggal_sampai='+tanggal_sampai,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data, textStatus, jqXHR) {
                        if(data['success']) {
                            window.location = 'http://192.168.1.102/gomocart/adminweb/readFile.php?name=' + data['filename'];
                        } else {
                            setMessage('error', data['message']);
                        }
                    }, 
                    error: function(jqXHR, textStatus, errorThrown) {
                        setMessage('error', 'Terjadi kesalahan system.');
                    }
                });
            });
            
            $( "#ekspor_pdf" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var url = 'cetak.php?tanggal_dari='+tanggal_dari+'&tanggal_sampai='+tanggal_sampai;
                window.open(url, '_blank');
            });
        });
    </script>
</body>
</html><?php }} ?>
