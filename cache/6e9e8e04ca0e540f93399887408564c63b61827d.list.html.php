<?php /*%%SmartyHeaderCode:1301757ccc194407478-91029736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e9e8e04ca0e540f93399887408564c63b61827d' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\rekapitulasipelaporan\\list.html',
      1 => 1473032745,
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
  'nocache_hash' => '1301757ccc194407478-91029736',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57ccc8512fa863_99895814',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ccc8512fa863_99895814')) {function content_57ccc8512fa863_99895814($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekapitulasi Pelaporan | Daftar Rekapitulasi Pelaporan</title>
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
                    <li class="active treeview">
                <a href="http://192.168.1.101/ujian_online/rekapitulasipelaporan/"><i class="fa fa-bars"></i> <span>Rekapitulasi</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/ujian_online/pengguna/"><i class="fa fa-user"></i> <span>Pengguna</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/ujian_online/mapel/"><i class="fa fa-bars"></i> <span>Mata Pelajaran</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/ujian_online/soal/"><i class="fa fa-bars"></i> <span>Soal</span> </a>
                            </li>
                    <li class="treeview">
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
                    Rekapitulasi Pelaporan <small>Daftar Rekapitulasi Pelaporan</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://192.168.1.101/ujian_online">Home</a></li>
                    <li><a href="http://192.168.1.101/ujian_online/rekapitulasipelaporan/">Rekapitulasi Pelaporan</a></li>
                    <li class="active">Daftar Rekapitulasi Pelaporan</li>
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
                                        <div id="form-group">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td width="20%">
                                                        <label for="propinsi">&nbsp;&nbsp;Tahun Pelaporan:</label>
                                                    </td>
                                                    <td width="70%">
                                                        <input type="text" name="tahun" value="2016" class="form-control" placeholder="Tahun Pelaporan" />
                                                    </td>
                                                </tr>                                                
                                                
                                                <tr>
                                                    <td width="20%">
                                                        <label for="propinsi">&nbsp;&nbsp;Propinsi:</label>
                                                    </td>
                                                    <td width="70%">
                                                        <input type="text" name="nama_propinsi" value="" class="form-control"  placeholder="Pilih Propinsi" />
                                                        <input type="hidden" name="id_propinsi" value="" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td width="20%">
                                                        <label for="kabupaten">&nbsp;&nbsp;Kabupaten:</label>
                                                    </td>
                                                    <td width="70%">
                                                        <input type="text" name="nama_kabupaten" value="" class="form-control"  placeholder="Pilih Kabupaten" />
                                                        <input type="hidden" name="id_kabupaten" value="" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group"><div id='btn_cari' class="btn btn-success">Tampilkan</div></div>
                                        
                                                                                    <div id="detail" class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="5px" rowspan="2"><div style="text-align: center;">No.</div></th>
                                                            <th width="20%" rowspan="2"><div style="text-align: center;">BKD</div></th>
                                                            <!-- th width="5%" rowspan="2"><div style="text-align: right;">Tahun</div></th -->
                                                            <th width="5%" rowspan="2"><div style="text-align: right;">Jumlah Pegawai</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">UU ASN</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">PP 53 / 2010</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">PP 45 / 1990</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">PP 46 / 2011</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">PP Lainnya</div></th>                                                            
                                                            <th width="10%" rowspan="2"><div style="text-align: right;">Jumlah</div></th>                                                          
                                                            <th width="5px" rowspan="2"><div style="text-align: right;"></div></th>
                                                        </tr>

                                                        <tr>
                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>

                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>

                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>

                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>

                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>
                                                        </tr>
                                                    </thead>

                                                        
                                                    <tbody>
                                                                                                                                                                            <tr id="baris_">
                                                                <td align="center">1</td>
                                                                
                                                                <td align="left">Kota Depok</td>
                                                                <!-- td align="center"><b></td -->
                                                                <td align="right">20,000</td>
                                                                
                                                                <td align="right">10</td>
                                                                <td align="right">2</td>
                                                                <td align="right">3</td>
                                                                
                                                                <td align="right">4</td>
                                                                <td align="right">5</td>
                                                                <td align="right">6</td>
                                                                
                                                                <td align="right">7</td>
                                                                <td align="right">8</td>
                                                                <td align="right">9</td>
                                                                
                                                                <td align="right">10</td>
                                                                <td align="right">11</td>
                                                                <td align="right">12</td>
                                                                
                                                                <td align="right">13</td>
                                                                <td align="right">14</td>
                                                                <td align="right">150</td>
                                                                
                                                                <td align="right">264</td>
                                                                <td align="center"><a href="http://192.168.1.101/ujian_online/uploads/pelanggaran_disiplin/rahasia_93217864.pdf" target="_blank"><img src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/img/pdf.png" alt="Download" /></a></td>
                                                                
                                                            </tr>
                                                              
                                                                                                            </tbody>
                                                </table>        
                                            </div>

                                                                                        
                                            <!-- div class="form-group text-right"><div id='btn_cetak' class="btn btn-warning">Cetak</div> <div id='btn_excel' class="btn btn-success">Excel</div></div -->
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
    
    <link href="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.datepick.css" rel="stylesheet">
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.plugin.js"></script>
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.datepick.js"></script>
    
    <!-- LOAD MASKING -->
    <link href="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/loadmask.css" rel="stylesheet" />
    <script src="http://192.168.1.101/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery.loadmask.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />
    <script type="text/javascript">
        $(function () {
            $('[name=nama_propinsi]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_propinsi]').val('');
                    $.ajax({
                        url: 'http://192.168.1.101/ujian_online/store/propinsiDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
                            $('[name=id_propinsi]').val('');
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
                    $('[name=id_propinsi]').val(data['id']);
                }		      	
            });
            
            $('[name=nama_kabupaten]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_kabupaten]').val('');
                    $.ajax({
                        url: 'http://192.168.1.101/ujian_online/store/kabupatenDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            prop: $('[name=id_propinsi]').val()
                        },
                        success: function( data ) {
                            $('[name=id_kabupaten]').val('');
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
                    $('[name=id_kabupaten]').val(data['id']);
                }		      	
            });
            
            $( "#btn_cari" ).click(function() {
                var tahun = $( "[name=tahun]" ).val();
                var id_propinsi = $( "[name=id_propinsi]" ).val();
                var id_kabupaten = $( "[name=id_kabupaten]" ).val();
                
                window.location='list.php?'+(tahun.length>0?'&tahun='+tahun:'')+(id_propinsi.length>0?'&id_propinsi='+id_propinsi:'')+(id_kabupaten.length>0?'&id_kabupaten='+id_kabupaten:'');
            });
        });
    </script>
</body>

</html>
<?php }} ?>
