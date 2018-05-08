<?php /*%%SmartyHeaderCode:178115887c573b999a8-19978005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '107381ea4ea0e31b2a5a59d5e855121d7776e455' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\hasil\\detail.html',
      1 => 1515145063,
      2 => 'file',
    ),
    '55406f607107bc7086bc160e8c65632cc40cbbee' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\head.html',
      1 => 1515122801,
      2 => 'file',
    ),
    'aa81eb021153c8c6ea4e228ddf14e60f67a25843' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\header.html',
      1 => 1485261945,
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
  'nocache_hash' => '178115887c573b999a8-19978005',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a4f4b7dcc7a86_89573131',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'data_head' => 0,
    'soal_pilihanganda' => 0,
    'entry' => 0,
    'soal_essai' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f4b7dcc7a86_89573131')) {function content_5a4f4b7dcc7a86_89573131($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hasil Ujian | Detail Jawaban Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
    <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    
  <!-- Theme style -->
      <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/iCheck/square/red.css">
  
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/skins/_all-skins.min.css">
  
  <style>
        #nav_bar {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
  </style>
  
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
    <a href="http://localhost/ujian_online" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>U</b>OL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ujian </b>Online</span>
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
              <img src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Rifki Heru B</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Rifki Heru B 
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
                   <a href="http://localhost/ujian_online/gantipassword/" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="http://localhost/ujian_online/logout.php" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Rifki Heru B</p>
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
                <a href="http://localhost/ujian_online/dashboard/"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://localhost/ujian_online/siswa/"><i class="fa fa-user"></i> <span>Siswa</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://localhost/ujian_online/mapel/"><i class="fa fa-bars"></i> <span>Pelajaran</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://localhost/ujian_online/guru/"><i class="fa fa-user"></i> <span>Guru</span> </a>
                            </li>
                    <li class="treeview">
                <a href="http://localhost/ujian_online/ujian/"><i class="fa fa-bars"></i> <span>Ujian</span> </a>
                            </li>
                    <li class="active treeview">
                <a href="http://localhost/ujian_online/hasil/"><i class="fa fa-book"></i> <span>Hasil Ujian</span> </a>
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
                    Hasil Ujian <small>Detail Jawaban Siswa</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/ujian_online">Home</a></li>
                    <li><a href="http://localhost/ujian_online/koreksi_siswa/list.php?id=4">Hasil Ujian</a></li>
                    <li class="active">Detail Jawaban Siswa</li>
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
                                                    <td><label for="sekolah">Sekolah:</label></td>
                                                    <td>SDN Negeri 486 Jakarta</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="jurusan">Jurusan / Sub Jurusan:</label></td>
                                                    <td>Pendidikan Dasar / Kelas Satu</td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="kelas">Kelas:</label></td>
                                                    <td>Satu</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="pelajaran">Pelajaran:</label></td>
                                                    <td>Matematika</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="kode_soal">Kode Soal:</label></td>
                                                    <td>U001</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="nama_soal">Nama Soal:</label></td>
                                                    <td>Ujian Kenikan Kelas 2</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="total_benar">Jumlah Benar / Salah:</label></td>
                                                    <td>2 / 0</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="total_score">Nilai:</label></td>
                                                    <td>200</td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group">
                                            <ul id="myTab" class="nav nav-tabs">                                
                                                <li class="active">
                                                    <a href="#pilihanganda" data-toggle="tab"><b>SOAL PILIHAN GANDA</b></a>
                                                </li>                                
                                                <li>
                                                    <a href="#essai" data-toggle="tab"><b>SOAL ESSAI</b></a>
                                                </li> 
                                            </ul>
                                        </div>
                                        
                                        <div class="form-group tab-content">
                                            <div class="tab-pane fade active in" id="pilihanganda">
                                                <div class="form-group">
                                                    &nbsp;&nbsp;&nbsp;<input type="radio" name="jawaban_benar_0" checked readonly="readOnly" class="koreksi" /> &nbsp;&nbsp;<label class="label label-info">Kunci Jawaban</label>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="jawaban_siswa_0" checked readonly="readOnly" /> &nbsp;&nbsp;<label class="label label-danger">Jawaban Siswa</label>
                                                </div>
                                                
                                                                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th width="10%"><div style="text-align: center;">Koreksi</div></th>
                                                                    <th width="90%" colspan="4"><div style="text-align: center;">Pertanyaan</div></th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                                                    
                                                                    <tr>
                                                                        <td width="5%" align="center"><label class="label label-info">BENAR</label></td>
                                                                        <td width="5%" align="center">1</td>
                                                                        <td width="95%" colspan="3" align="left">Pertanyaan?<input type="hidden" name="pilihanganda_id_1" value="36" /></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center">A.</td>
                                                                        <td width="85%" align="left">A</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center">B.</td>
                                                                        <td width="85%" align="left">B</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center">C.</td>
                                                                        <td width="85%" align="left">C</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"><input type="radio" name="jawaban_benar_1" id_pilih="36" value="D" checked readonly="readOnly" class="koreksi" /></td>
                                                                        <td width="5%" align="center"><input type="radio" name="jawaban_siswa_1" id_pilih="36" value="D" checked readonly="readOnly"  /></td>
                                                                        <td width="5%" align="center">D.</td>
                                                                        <td width="85%" align="left">D</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center">E.</td>
                                                                        <td width="85%" align="left">E</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%" colspan="5">&nbsp;</td>
                                                                    </tr>
                                                                                                    
                                                                    <tr>
                                                                        <td width="5%" align="center"><label class="label label-danger">SALAH</label></td>
                                                                        <td width="5%" align="center">2</td>
                                                                        <td width="95%" colspan="3" align="left"><p>Pertanyaan 2?<br></p><input type="hidden" name="pilihanganda_id_2" value="37" /></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center">A.</td>
                                                                        <td width="85%" align="left">A1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"><input type="radio" name="jawaban_benar_2" id_pilih="37" value="B" checked readonly="readOnly" class="koreksi" /></td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center">B.</td>
                                                                        <td width="85%" align="left">A2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center">C.</td>
                                                                        <td width="85%" align="left">3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center"><input type="radio" name="jawaban_siswa_2" id_pilih="37" value="D" checked readonly="readOnly"  /></td>
                                                                        <td width="5%" align="center">D.</td>
                                                                        <td width="85%" align="left">4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center"></td>
                                                                        <td width="5%" align="center">E.</td>
                                                                        <td width="85%" align="left">5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%" colspan="5">&nbsp;</td>
                                                                    </tr>
                                                                                                                            </tbody>
                                                        </table>        
                                                    </div>
                                                                                            </div>

                                            <div class="tab-pane fade" id="essai">
                                                                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th width="10%"><div style="text-align: center;">Koreksi</div></th>
                                                                    <th width="90%" colspan="2"><div style="text-align: center;">Pertanyaan</div></th>
                                                                </tr>
                                                            </thead>
                                                            
                                                            <tbody>
                                                                                                    
                                                                    <tr>
                                                                        <td width="5%" align="center"><label class="label label-info">BENAR</label></td>
                                                                        <td width="5%" align="center">1</td>
                                                                        <td width="95%" align="left">
                                                                            <p><img style="width: 215px;" src="http://192.168.1.100/ujian_online/uploads/essai/pertanyaan/76928143.png" data-filename="avatar04.png"><br></p><p>Essai 1?<br></p><br /><br />
                                                                            Jawaban Siswa:<br />
                                                                            <input type="hidden" name="essai_id_1" value="38" />
                                                                            aaaa<br /><br />
                                                                            Kunci Jawab:<br />
                                                                            Glasses.<br>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3">&nbsp;</td>
                                                                    </tr>
                                                                                                                            </tbody>
                                                        </table>        
                                                    </div>
                                                                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <a id="btn_batal"  href="list.php" class="btn btn-warning">Kembali</a>                                            
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
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    
    
    <!-- ChartJS 1.0.1 -->
    <!-- script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/chartjs/Chart.min.js"></script -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/pages/dashboard2.js"></script -->
    
    <!-- AdminLTE for demo purposes -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/demo.js"></script>
    <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
    
    <link href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.datepick.css" rel="stylesheet">
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.plugin.js"></script>
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/datepick/jquery.datepick.js"></script>
    
    <!-- include summernote -->
    <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/summernote.css">
    <script type="text/javascript" src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/summernote.js"></script>
    <script type="text/javascript" src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/summernote-ext-video.js"></script> 
    
    <!-- iCheck -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/iCheck/icheck.min.js"></script>
    
    <script type="text/javascript">
        var home_url = 'http://localhost/ujian_online';
    </script>
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/notifikasi.js"></script>
    
    <script type="text/javascript">
        var koreksi_pilihanganda = [];
        var koreksi_essai = [];
        
        $(function () {           
            
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-red',
                increaseArea: '20%' // optional
            });
            
            $('.koreksi').iCheck({
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
            
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

            for(var i=0; i<2; i++) { koreksi_pilihanganda[i] = ''; }       
            for(var i=0; i<1; i++) { koreksi_essai[i] = ''; }
            
            var hasil_koreksi_pilihanganda = '';
            var get_hasil_koreksi_pilihanganda = function() {
                hasil_koreksi_pilihanganda = '';
                for(var key in koreksi_pilihanganda) {
                    var no = eval(key)+1;
                    var id = $('[name=pilihanganda_id_'+no+']').val();
                    var koreksi = $('[name=koreksi_pilihanganda_'+no+']').is(':checked')?2:1;
                    hasil_koreksi_pilihanganda+=(key>0?'\n':'')+id+'\t'+koreksi+'\t';
                }
                //console.log(jawaban_pilihanganda);
            }
            
            var hasil_koreksi_essai = '';
            var get_hasil_koreksi_essai = function() {
                hasil_koreksi_essai = '';
                for(var key in koreksi_essai) {
                    var no = eval(key)+1;
                    var id = $('[name=essai_id_'+no+']').val();
                    var koreksi = $('[name=koreksi_essai_'+no+']').is(':checked')?2:1;
                    hasil_koreksi_essai+=(key>0?'\n':'')+id+'\t'+koreksi+'\t';
                }
                //console.log(jawaban_essai);
            }
            
            $('#btn_simpan').click(function() {
                var data = new FormData();
                get_hasil_koreksi_pilihanganda();
                get_hasil_koreksi_essai();
                
                data.append('id_jawaban_soal_head', '2');
                data.append('koreksi_pilihanganda', hasil_koreksi_pilihanganda);
                data.append('koreksi_essai', hasil_koreksi_essai);
                
                setLoading(true);
                $.ajax({
                    type: 'POST',
                    url: 'update.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        if(data['success']) {
                            window.location = 'list.php?id=4';                    
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
