<?php /*%%SmartyHeaderCode:2005857be924cb35022-34397087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2257dfe1fd6bbd9049e09f8bafb1809881a3362' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\pesanmasuk\\list.html',
      1 => 1472107205,
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
      1 => 1472097523,
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
  'nocache_hash' => '2005857be924cb35022-34397087',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57be9675311e26_94845038',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57be9675311e26_94845038')) {function content_57be9675311e26_94845038($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pesan Masuk | List of Pesan Masuk</title>
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
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Administrator 
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
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
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
          <p>Administrator</p>
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
                    <li class="treeview">
                <a href="http://192.168.1.101/pelaporan_pelanggaran/rekapitulasipelaporan/"><i class="fa fa-bars"></i> <span>Rekapitulasi</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/pelaporan_pelanggaran/pengguna/"><i class="fa fa-user"></i> <span>Managemen User</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://192.168.1.101/pelaporan_pelanggaran/pengumuman/"><i class="fa fa-bars"></i> <span>Pengumuman</span> </a>
                            </li>
                    <li class="active treeview">
                <a href="http://192.168.1.101/pelaporan_pelanggaran/pesanmasuk/"><i class="fa fa-envelope"></i> <span>Pesan Masuk</span> </a>
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
                    Pesan Masuk <small>List of Pesan Masuk</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://192.168.1.101/pelaporan_pelanggaran">Home</a></li>
                    <li><a href="http://192.168.1.101/pelaporan_pelanggaran/pesanmasuk/">Pesan Masuk</a></li>
                    <li class="active">List of Pesan Masuk</li>
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
                                            <div id='btn_delete' class="btn btn-danger disabled">Hapus</div>                                        </div>
                                                
                                                                                    <div id="detail" class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="5px"><div style="text-align: center;"><input type="checkbox" id="select_all" /></div></th>
                                                            <th width="5%"><div style="text-align: center;">No.</div></th>
                                                            <th width="15%"><div style="text-align: center;">Tanggal</div></th>
                                                            <th width="15%"><div style="text-align: center;">Pengguna</div></th>
                                                            <th width="25%"><div style="text-align: center;">BKD</div></th>
                                                            <th width="35%"><div style="text-align: center;">Pesan</div></th>
                                                            <th width="5%"><div style="text-align: center;">Lihat</div></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                                                                                                    
                                                            <tr id="baris_2">
                                                                <td align="center"><input type="checkbox" id_select="2" name="select_2" class="select" /></td>
                                                                <td align="center"><b>1</b></td>
                                                                <td align="center"><b>25-08-2016 13:55</b></td>
                                                                <td align="center"><b>kiezie</b></td>
                                                                <td align="left"><b>Kota Depok</b></td> 
                                                                <td align="left"><b>Halo Tes Kirim Pesan Ajah</b></td>
                                                                <td align="center"><a href="detail.php?id=2" class="btn btn-success">Lihat</a></td>                                                                
                                                            </tr>
                                                              
                                                                                            
                                                            <tr id="baris_1">
                                                                <td align="center"><input type="checkbox" id_select="1" name="select_1" class="select" /></td>
                                                                <td align="center">2</td>
                                                                <td align="center">25-08-2016 00:00</td>
                                                                <td align="center">tesuser</td>
                                                                <td align="left">Propinsi Jawa Barat</td> 
                                                                <td align="left">Urgent Cepat Tangkap</td>
                                                                <td align="center"><a href="detail.php?id=1" class="btn btn-success">Lihat</a></td>                                                                
                                                            </tr>
                                                              
                                                                                                            </tbody>
                                                </table>        
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
    
    <!-- jQuery Ui -->
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
    
    <!-- LOAD MASKING -->
    <link href="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/css/loadmask.css" rel="stylesheet" />
    <script src="http://192.168.1.101/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/js/jquery.loadmask.min.js"></script>
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
