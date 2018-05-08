<?php /*%%SmartyHeaderCode:1290457ccbc35d778f7-92089426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbf2e12792663830976fa1d990f59f98e3c08199' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\peserta\\list.html',
      1 => 1473033970,
      2 => 'file',
    ),
    '55406f607107bc7086bc160e8c65632cc40cbbee' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\head.html',
      1 => 1473032700,
      2 => 'file',
    ),
    'aa81eb021153c8c6ea4e228ddf14e60f67a25843' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\header.html',
      1 => 1473032700,
      2 => 'file',
    ),
    'ca71e97f7d595e2040c0f485b8c7bb82f6cfe01d' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\side.html',
      1 => 1473032700,
      2 => 'file',
    ),
    '01735ed7da6b981efbc50951181b6c658fe477ca' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\footer.html',
      1 => 1473032700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1290457ccbc35d778f7-92089426',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57ccc0cdb020b3_54225504',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ccc0cdb020b3_54225504')) {function content_57ccc0cdb020b3_54225504($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>peserta | Daftar Peserta</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
    <!-- jvectormap -->
  <link rel="stylesheet" href="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    
  <!-- Theme style -->
  <link rel="stylesheet" href="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/AdminLTE.min.css">
  
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/skins/_all-skins.min.css">
  
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
    <a href="http://192.168.1.101/ujian_online" class="logo">
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
              <img src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Admin 
                  <small> </small>
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
                   <a href="http://192.168.1.101/ujian_online/gantipassword/" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="http://192.168.1.101/ujian_online/logout.php" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
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
                <a href="http://192.168.1.101/ujian_online/dashboard/"><i class="fa fa-dashboard"></i> <span>Halaman Depan</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/ujian_online/rekapitulasipelaporan/"><i class="fa fa-bars"></i> <span>Rekapitulasi</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/ujian_online/pengguna/"><i class="fa fa-user"></i> <span>Pengaturan Pengguna</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/ujian_online/mapel/"><i class="fa fa-bars"></i> <span>Mata Pelajaran</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/ujian_online/pesanmasuk/"><i class="fa fa-envelope"></i> <span>Pesan Masuk</span> </a>
                            </li>
                    <li class="active treeview">
                <a href="http://192.168.1.101/ujian_online/peserta/"><i class="fa fa-user"></i> <span>Peserta</span> </a>
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
                    peserta <small>Daftar Peserta</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://192.168.1.101/ujian_online">Home</a></li>
                    <li><a href="http://192.168.1.101/ujian_online/peserta/">peserta</a></li>
                    <li class="active">Daftar Peserta</li>
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
                                        <div id="alert_success" class="form-group" style="display: none;">                         
                                            <div class="alert alert-info">&nbsp;</div>
                                        </div>

                                        <div id="alert_error" class="form-group" style="display: none;">                         
                                            <div class="alert alert-danger">&nbsp;</div>
                                        </div>

                                        <div class="input-group">
                                            <input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                            <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                            <a class="btn btn-default" href="list.php">Reset</a></span>                                                  
                                        </div>
                                        
                                        <div class="form-group"></div>
                                        
                                        <div class="form-group">
                                            <div id='btn_add' class="btn btn-primary">Baru</div>                                            <div id='btn_edit' class="btn btn-success disabled">Edit</div>                                            <div id='btn_delete' class="btn btn-danger disabled">Hapus</div>                                        </div>
                                                
                                                                                    <div id="detail" class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="5px"><div style="text-align: center;"><input type="checkbox" id="select_all" /></div></th>
                                                            <th width="5%"><div style="text-align: center;">No.</div></th>
                                                            <th width="10%"><div style="text-align: center;">ID Peserta</div></th>
                                                            <th width="15%"><div style="text-align: center;">Nama Peserta</div></th>
                                                            <th width="20%"><div style="text-align: center;">Alamat</div></th>
                                                            <th width="10%"><div style="text-align: center;">Telepon</div></th>
                                                            <th width="10%"><div style="text-align: center;">Sekolah</div></th>
                                                            <th width="5%"><div style="text-align: center;">Jurusan</div></th>
                                                            <th width="5%"><div style="text-align: center;">Tahun Lulus</div></th>
                                                            <th width="10%"><div style="text-align: center;">Tempat Lahir</div></th>
                                                            <th width="10%"><div style="text-align: center;">Tanggal Lahir</div></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                                                                                                    
                                                            <tr id="baris_1">
                                                                <td align="center"><input type="checkbox" id_select="1" name="select_1" class="select" /></td>
                                                                <td align="center">1</td>
                                                                <td align="center">001</td>
                                                                <td align="left">Ella Ayuni Pradita</td>
                                                                <td align="left">Kp. Kebun Kelapa Gg.Poncol No.31 Rt.07/02, Kel.Segaramakmur</td>
                                                                <td align="center">089515418367</td>
                                                                <td align="left"></td>
                                                                <td align="center">ANALIS KESEHATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">02-06-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_2">
                                                                <td align="center"><input type="checkbox" id_select="2" name="select_2" class="select" /></td>
                                                                <td align="center">2</td>
                                                                <td align="center">002</td>
                                                                <td align="left">Iftita Auliyani</td>
                                                                <td align="left">Kp. Muara Bahari No.163 Rt.009/013,Kel.Tanjung Priok</td>
                                                                <td align="center">089665214957</td>
                                                                <td align="left"></td>
                                                                <td align="center">ANALIS KESEHATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">07-07-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_3">
                                                                <td align="center"><input type="checkbox" id_select="3" name="select_3" class="select" /></td>
                                                                <td align="center">3</td>
                                                                <td align="center">003</td>
                                                                <td align="left">Indah Permata Sari</td>
                                                                <td align="left">Jl. Taruna Rt.08/02 Sukapura, Kel.Cilincing</td>
                                                                <td align="center">089531380031</td>
                                                                <td align="left"></td>
                                                                <td align="center">ANALIS KESEHATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">04-04-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_4">
                                                                <td align="center"><input type="checkbox" id_select="4" name="select_4" class="select" /></td>
                                                                <td align="center">4</td>
                                                                <td align="center">004</td>
                                                                <td align="left">Jayantrie Melyna Sari</td>
                                                                <td align="left">Jl. Warakas VI No.57 Rt.001/003 Kel. Papanggo</td>
                                                                <td align="center">089502473242</td>
                                                                <td align="left"></td>
                                                                <td align="center">ANALIS KESEHATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">30-01-2000</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_5">
                                                                <td align="center"><input type="checkbox" id_select="5" name="select_5" class="select" /></td>
                                                                <td align="center">5</td>
                                                                <td align="center">005</td>
                                                                <td align="left">Ranti Dewi</td>
                                                                <td align="left">Jl. Taruna II No. 28 Rt.008/002</td>
                                                                <td align="center">089676196764</td>
                                                                <td align="left"></td>
                                                                <td align="center">ANALIS KESEHATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">23-09-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_6">
                                                                <td align="center"><input type="checkbox" id_select="6" name="select_6" class="select" /></td>
                                                                <td align="center">6</td>
                                                                <td align="center">006</td>
                                                                <td align="left">Risky Hadi Putra</td>
                                                                <td align="left">Jl. Warakas VI Gg. 15 No.77 C Rt.010/012, Kel. Warakas</td>
                                                                <td align="center">088211254060</td>
                                                                <td align="left"></td>
                                                                <td align="center">ANALIS KESEHATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">18-05-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_7">
                                                                <td align="center"><input type="checkbox" id_select="7" name="select_7" class="select" /></td>
                                                                <td align="center">7</td>
                                                                <td align="center">007</td>
                                                                <td align="left">Sri Wahyuni</td>
                                                                <td align="left">Jl. Warakas 03 Rt.015/004</td>
                                                                <td align="center">08990297739</td>
                                                                <td align="left"></td>
                                                                <td align="center">ANALIS KESEHATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Lamongan</td>
                                                                <td align="center">26-06-1998</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_8">
                                                                <td align="center"><input type="checkbox" id_select="8" name="select_8" class="select" /></td>
                                                                <td align="center">8</td>
                                                                <td align="center">008</td>
                                                                <td align="left">Winasari</td>
                                                                <td align="left">Jl. Warakas IV Gg.XI No.39 Rt.002/011 Kel. Waraks</td>
                                                                <td align="center">089673796390</td>
                                                                <td align="left"></td>
                                                                <td align="center">ANALIS KESEHATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">23-07-1998</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_9">
                                                                <td align="center"><input type="checkbox" id_select="9" name="select_9" class="select" /></td>
                                                                <td align="center">9</td>
                                                                <td align="center">009</td>
                                                                <td align="left">Alvionita Febriana</td>
                                                                <td align="left">Jl. Kalibaru III Rt.006/02, Kel. Kalibaru</td>
                                                                <td align="center">081380303210</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Bandar Lampung</td>
                                                                <td align="center">11-02-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_10">
                                                                <td align="center"><input type="checkbox" id_select="10" name="select_10" class="select" /></td>
                                                                <td align="center">10</td>
                                                                <td align="center">010</td>
                                                                <td align="left">Anisa Sella Safitri</td>
                                                                <td align="left">Jl. Duren No.1 Rt.011/013, Kel. Semper Barat</td>
                                                                <td align="center">0812185403254</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">24-01-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_11">
                                                                <td align="center"><input type="checkbox" id_select="11" name="select_11" class="select" /></td>
                                                                <td align="center">11</td>
                                                                <td align="center">011</td>
                                                                <td align="left">Carolina Octavia Kudamass</td>
                                                                <td align="left">Jl. Bandar No.38 Rt. 004/06, Kel. Rawa Badak Selatan</td>
                                                                <td align="center">089636697833</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">03-09-1998</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_12">
                                                                <td align="center"><input type="checkbox" id_select="12" name="select_12" class="select" /></td>
                                                                <td align="center">12</td>
                                                                <td align="center">012</td>
                                                                <td align="left">Novi Monika</td>
                                                                <td align="left">-</td>
                                                                <td align="center">085891782264</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">09-04-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_13">
                                                                <td align="center"><input type="checkbox" id_select="13" name="select_13" class="select" /></td>
                                                                <td align="center">13</td>
                                                                <td align="center">013</td>
                                                                <td align="left">Nurhasanah</td>
                                                                <td align="left">Jl. Kalibari Timur III C Rt.006/02, Kel. Kalibaru</td>
                                                                <td align="center">08979904578</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">03-11-1998</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_14">
                                                                <td align="center"><input type="checkbox" id_select="14" name="select_14" class="select" /></td>
                                                                <td align="center">14</td>
                                                                <td align="center">014</td>
                                                                <td align="left">Riska Salfadillah</td>
                                                                <td align="left">Jl. Sungai Bambu Rt. 003/006</td>
                                                                <td align="center">081296763725</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">25-07-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_15">
                                                                <td align="center"><input type="checkbox" id_select="15" name="select_15" class="select" /></td>
                                                                <td align="center">15</td>
                                                                <td align="center">015</td>
                                                                <td align="left">Rusmalia Widaningsih</td>
                                                                <td align="left">Jl. Warakas V Gg. IX No. 143 Rt. 008/008, Kel. Warakas</td>
                                                                <td align="center">0895352043586</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">13-03-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_16">
                                                                <td align="center"><input type="checkbox" id_select="16" name="select_16" class="select" /></td>
                                                                <td align="center">16</td>
                                                                <td align="center">016</td>
                                                                <td align="left">Wulan</td>
                                                                <td align="left">Jl. Taruna II Rt.008/02, Kel.Sikapura</td>
                                                                <td align="center">0895343606780</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Kuningan</td>
                                                                <td align="center">04-05-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_17">
                                                                <td align="center"><input type="checkbox" id_select="17" name="select_17" class="select" /></td>
                                                                <td align="center">17</td>
                                                                <td align="center">017</td>
                                                                <td align="left">Yunita Heryanti</td>
                                                                <td align="left">Jl. Warakas IV Gg.15 No.45 Rt.008/013, Kel.Warakas</td>
                                                                <td align="center">089691821481</td>
                                                                <td align="left"></td>
                                                                <td align="center">FARMASI</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Pemalang</td>
                                                                <td align="center">14-04-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_18">
                                                                <td align="center"><input type="checkbox" id_select="18" name="select_18" class="select" /></td>
                                                                <td align="center">18</td>
                                                                <td align="center">018</td>
                                                                <td align="left">Felanda Octavian</td>
                                                                <td align="left">Jl.Bhakti III Rt.009 Rt.09/06 No.19</td>
                                                                <td align="center">089622988651</td>
                                                                <td align="left"></td>
                                                                <td align="center">KEPERAWATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">29-10-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_19">
                                                                <td align="center"><input type="checkbox" id_select="19" name="select_19" class="select" /></td>
                                                                <td align="center">19</td>
                                                                <td align="center">019</td>
                                                                <td align="left">Gracia Rebecca</td>
                                                                <td align="left">Jl. Martadinata Gg.Pelita 6 No.26</td>
                                                                <td align="center">081311626368</td>
                                                                <td align="left"></td>
                                                                <td align="center">KEPERAWATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">25-11-1997</td>                                                            
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_20">
                                                                <td align="center"><input type="checkbox" id_select="20" name="select_20" class="select" /></td>
                                                                <td align="center">20</td>
                                                                <td align="center">020</td>
                                                                <td align="left">Maria Yuvita Saputri</td>
                                                                <td align="left">Jl.Warakas VI Gg.18 No.62</td>
                                                                <td align="center">-</td>
                                                                <td align="left"></td>
                                                                <td align="center">KEPERAWATAN</td>
                                                                <td align="center">-</td>
                                                                <td align="left">Jakarta</td>
                                                                <td align="center">09-06-1999</td>                                                            
                                                            </tr>
                                                              
                                                                                                            </tbody>
                                                </table>        
                                            </div>

                                                                                            <div class="form-group text-center">
                                                                                                                                                                                                                                                                                <span class="btn btn-info">1</span>                                
                                                                                                                                                
                                                                                                                                                                        <a class="btn btn-default" href="list.php?page=2">2</a>
                                                                                                                                                
                                                                                                                                        
                                                        <a class="btn btn-default" href="list.php?page=2">Next &rarr;</a>
                                                                                    
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
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    
    
    <!-- ChartJS 1.0.1 -->
    <!-- script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/chartjs/Chart.min.js"></script -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/pages/dashboard2.js"></script -->
    
    <!-- AdminLTE for demo purposes -->
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/demo.js"></script>
    
    <!-- jQuery Ui -->
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
    
    <!-- LOAD MASKING -->
    <link href="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/loadmask.css" rel="stylesheet" />
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery.loadmask.min.js"></script>
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
                window.location='list.php?'+(query.length>0?'&query='+query:'');
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
                    scrollTop: $('body').offset().top 
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
            
                    
             
        });
    </script>
</body>

</html>
<?php }} ?>
