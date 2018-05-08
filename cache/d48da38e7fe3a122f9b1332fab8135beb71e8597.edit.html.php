<?php /*%%SmartyHeaderCode:285457bbc7f6ade396-65803276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd48da38e7fe3a122f9b1332fab8135beb71e8597' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\pelaporanpelanggaran\\edit.html',
      1 => 1472112864,
      2 => 'file',
    ),
    'a4ba2197082586dcb59d10faf968e033efac5cfb' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\head.html',
      1 => 1470529822,
      2 => 'file',
    ),
    'd7bc5a80ef0714af8c3152430a4fe4b2de20c9d5' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\header.html',
      1 => 1472108949,
      2 => 'file',
    ),
    'e623c49909414e9e6690e36bbab73d6125eec24e' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\side.html',
      1 => 1470518259,
      2 => 'file',
    ),
    'e53576c2f1fad6e87400ad507a3b4127cc18a2f0' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\footer.html',
      1 => 1471900231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285457bbc7f6ade396-65803276',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57beb15640e100_45582719',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb15640e100_45582719')) {function content_57beb15640e100_45582719($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pelaporan Pelanggaran | Add new Pelaporan Pelanggaran</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
    <!-- jvectormap -->
  <link rel="stylesheet" href="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    
  <!-- Theme style -->
  <link rel="stylesheet" href="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/css/AdminLTE.min.css">
  
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/css/skins/_all-skins.min.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">

    <!-- Logo -->
    <a href="http://192.168.1.101/pelaporan_pelanggaran" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>PD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pelaporan </b>Pelanggaran</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">BKD Kota Depok</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  BKD Kota Depok 
                  <small> Jawa Barat</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                   <a href="http://192.168.1.101/pelaporan_pelanggaran/gantipassword/" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="http://192.168.1.101/pelaporan_pelanggaran/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li -->
        </ul>
      </div>

    </nav>
  </header>
        <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>BKD Kota Depok</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"> MENU </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/pelaporan_pelanggaran/dashboard/"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                            </li>
                    <li class="active treeview">
                <a href="http://192.168.1.101/pelaporan_pelanggaran/pelaporanpelanggaran/add.php"><i class="fa fa-edit"></i> <span>Input Data</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/pelaporan_pelanggaran/pelaporanpelanggaran/"><i class="fa fa-bars"></i> <span>Lihat Rekap</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/pelaporan_pelanggaran/pesanmasuk/add.php"><i class="fa fa-envelope"></i> <span>Kirim Pesan</span> </a>
                            </li>
                
        <!-- li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Pelaporan Pelanggaran <small>Add new Pelaporan Pelanggaran</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://192.168.1.101/pelaporan_pelanggaran">Home</a></li>
                    <li><a href="http://192.168.1.101/pelaporan_pelanggaran/pelaporanpelanggaran/">Pelaporan Pelanggaran</a></li>
                    <li class="active">Add new Pelaporan Pelanggaran</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">      
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div id="alert_error" class="form-group" style="display: none;">                         
                                            <div class="alert alert-danger">&nbsp;</div>
                                        </div>

                                        <div id="form-group">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td>
                                                        <label for="propinsi">BKD Propinsi / Kabupaten Kota:</label>
                                                    </td>
                                                    <td colspan="4"><label>Kota Depok</label></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="tahun_pelaporan">Tahun Pelaporan:</label></td>
                                                    <td colspan="4">
                                                        <input type="text" value="2016" class="form-control" name="tahun_pelaporan" placeholder="Tahun Pelaporan" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Jumlah Pegawai:</label></td>
                                                    <td colspan="4">
                                                        <input type="text" value="" class="form-control jumlah" name="jumlah_pegawai" placeholder="Jumlah Pegawai" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Jumlah Pelanggaran:</label></td>
                                                    <td>
                                                        <label for="jumlah_ringan">Ringan:</label>
                                                    </td>
                                                    <td>
                                                        <label for="jumlah_sedang">Sedang:</label>
                                                    </td>
                                                    <td>
                                                        <label for="jumlah_berat">Berat:</label>
                                                    </td>
                                                    <td>
                                                        <label for="jumlah_total">Total:</label>
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Pelanggaran UU ASN:</label></td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="uu_asn_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="uu_asn_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="uu_asn_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" disabled name="uu_asn_total"  placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Pelanggaran PP 53 / 2010:</label></td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_53_2010_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_53_2010_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_53_2010_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" disabled name="pp_53_2010_total" placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Pelanggaran PP 45 / 1990:</label></td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_45_1990_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_45_1990_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_45_1990_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" disabled name="pp_45_1990_total" placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Pelanggaran PP 45 / 1990:</label></td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_46_2011_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_46_2011_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="pp_46_2011_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" disabled name="pp_46_2011_total" placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Peraturan Lainnya:</label><br /><input type="text" value="" class="form-control" name="nama_peraturan_lain" placeholder="Nama Peraturan" /></td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="peraturan_lain_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="peraturan_lain_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" name="peraturan_lain_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" class="form-control jumlah" disabled name="peraturan_lain_total" placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="filename">Upload Berkas:</label>
                                            <label for="filename_keterangan"><p class="help-block"><b>- Maksimal ukuran file 5MB.<br />- Format file harus pdf.</b></p></label>
                                            <input id="fileupload" type="file" name="filename">
                                                                                        <div id="blok_hapus" style="margin-top: 5px;display: none;">
                                                <div class="btn btn btn-danger hapus_file">Hapus</div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/loading.gif" /></div>                  
                                            <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                            <a id="btn_batal"  href="list.php" class="btn btn-warning">Batal</a>                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
              
        <footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div>
     
</footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
                  
    </div>
    <!-- ./wrapper -->
        
    <!-- jQuery 2.2.3 -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    
    
    <!-- ChartJS 1.0.1 -->
    <!-- script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/chartjs/Chart.min.js"></script -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/pages/dashboard2.js"></script -->
    
    <!-- AdminLTE for demo purposes -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/demo.js"></script>
    <link rel="stylesheet" href="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
    
    <script type="text/javascript" src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/jquery.input.formatter.js"></script>
    <script type="text/javascript">
        $(function () {           
            var isEdit = false;
            $("input.jumlah").formatInput();
            
            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('body').offset().top 
                }, 600);
            }
            
            function getTotalUuAsn() {
                var ringan = $('[name=uu_asn_ringan]').val().replace(',', '');
                var sedang = $('[name=uu_asn_sedang]').val().replace(',', '');
                var berat = $('[name=uu_asn_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            function getTotalPp532010() {
                var ringan = $('[name=pp_53_2010_ringan]').val().replace(',', '');
                var sedang = $('[name=pp_53_2010_sedang]').val().replace(',', '');
                var berat = $('[name=pp_53_2010_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            function getTotalPp451990() {
                var ringan = $('[name=pp_45_1990_ringan]').val().replace(',', '');
                var sedang = $('[name=pp_45_1990_sedang]').val().replace(',', '');
                var berat = $('[name=pp_45_1990_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            function getTotalPp462011() {
                var ringan = $('[name=pp_46_2011_ringan]').val().replace(',', '');
                var sedang = $('[name=pp_46_2011_sedang]').val().replace(',', '');
                var berat = $('[name=pp_46_2011_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            function getTotalPeraturanLain() {
                var ringan = $('[name=peraturan_lain_ringan]').val().replace(',', '');
                var sedang = $('[name=peraturan_lain_sedang]').val().replace(',', '');
                var berat = $('[name=peraturan_lain_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            $('[name=uu_asn_ringan]').keyup(function () { 
                $('[name=uu_asn_total]').val(getTotalUuAsn());
            });
            
            $('[name=uu_asn_sedang]').keyup(function () { 
                $('[name=uu_asn_total]').val(getTotalUuAsn());
            });
            
            $('[name=uu_asn_berat]').keyup(function () { 
                $('[name=uu_asn_total]').val(getTotalUuAsn());
            });
            
            $('[name=pp_53_2010_ringan]').keyup(function () { 
                $('[name=pp_53_2010_total]').val(getTotalPp532010());
            });
            
            $('[name=pp_53_2010_sedang]').keyup(function () { 
                $('[name=pp_53_2010_total]').val(getTotalPp532010());
            });
            
            $('[name=pp_53_2010_berat]').keyup(function () { 
                $('[name=pp_53_2010_total]').val(getTotalPp532010());
            });
            
            $('[name=pp_45_1990_ringan]').keyup(function () { 
                $('[name=pp_45_1990_total]').val(getTotalPp451990());
            });
            
            $('[name=pp_45_1990_sedang]').keyup(function () { 
                $('[name=pp_45_1990_total]').val(getTotalPp451990());
            });
            
            $('[name=pp_45_1990_berat]').keyup(function () { 
                $('[name=pp_45_1990_total]').val(getTotalPp451990());
            });
            
            $('[name=pp_46_2011_ringan]').keyup(function () { 
                $('[name=pp_46_2011_total]').val(getTotalPp462011());
            });
            
            $('[name=pp_46_2011_sedang]').keyup(function () { 
                $('[name=pp_46_2011_total]').val(getTotalPp462011());
            });
            
            $('[name=pp_46_2011_berat]').keyup(function () { 
                $('[name=pp_46_2011_total]').val(getTotalPp462011());
            });
            
            $('[name=peraturan_lain_ringan]').keyup(function () { 
                $('[name=peraturan_lain_total]').val(getTotalPeraturanLain());
            });
            
            $('[name=peraturan_lain_sedang]').keyup(function () { 
                $('[name=peraturan_lain_total]').val(getTotalPeraturanLain());
            });
            
            $('[name=peraturan_lain_berat]').keyup(function () { 
                $('[name=peraturan_lain_total]').val(getTotalPeraturanLain());
            });
            
            var changes = false;
            var files = undefined;                    
            $("#fileupload").change(function(event){
                changes = true;
                files = event.target.files;
                $('#preview_foto').show();
                $('#blok_hapus').show();
            });
            
            $('.hapus_file').click(function() {            
                changes = true;
                files = undefined;
                $('#fileupload').val('');
                $('#blok_hapus').hide();                                
            });
            

            $('#btn_simpan').click(function() {
                var data = new FormData();
                data.append('id', isEdit?'':'');
                data.append('id_propinsi', '12');
                data.append('id_kabupaten', '76');
                data.append('tahun_pelaporan', $('[name=tahun_pelaporan]').val());
                data.append('jumlah_pegawai', $('[name=jumlah_pegawai]').val().replace(',', ''));
             
                data.append('uu_asn_ringan', $('[name=uu_asn_ringan]').val().replace(',', ''));
                data.append('uu_asn_sedang', $('[name=uu_asn_sedang]').val().replace(',', ''));
                data.append('uu_asn_berat', $('[name=uu_asn_berat]').val().replace(',', ''));
             
                data.append('pp_53_2010_ringan', $('[name=pp_53_2010_ringan]').val().replace(',', ''));
                data.append('pp_53_2010_sedang', $('[name=pp_53_2010_sedang]').val().replace(',', ''));
                data.append('pp_53_2010_berat', $('[name=pp_53_2010_berat]').val().replace(',', ''));
             
                data.append('pp_45_1990_ringan', $('[name=pp_45_1990_ringan]').val().replace(',', ''));
                data.append('pp_45_1990_sedang', $('[name=pp_45_1990_sedang]').val().replace(',', ''));
                data.append('pp_45_1990_berat', $('[name=pp_45_1990_berat]').val().replace(',', ''));
             
                data.append('pp_46_2011_ringan', $('[name=pp_46_2011_ringan]').val().replace(',', ''));
                data.append('pp_46_2011_sedang', $('[name=pp_46_2011_sedang]').val().replace(',', ''));
                data.append('pp_46_2011_berat', $('[name=pp_46_2011_berat]').val().replace(',', ''));
             
                data.append('nama_peraturan_lain', $('[name=nama_peraturan_lain]').val().replace(',', ''));
                data.append('peraturan_lain_ringan', $('[name=peraturan_lain_ringan]').val().replace(',', ''));
                data.append('peraturan_lain_sedang', $('[name=peraturan_lain_sedang]').val().replace(',', ''));
                data.append('peraturan_lain_berat', $('[name=peraturan_lain_berat]').val().replace(',', ''));
             
                data.append('changes', changes?"Y":"");
                if(files!=undefined && typeof files === 'object') {
                    $.each(files, function(keys, value) {
                        data.append('filename', value);
                    });                        
                }
             
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

</html>
<?php }} ?>
