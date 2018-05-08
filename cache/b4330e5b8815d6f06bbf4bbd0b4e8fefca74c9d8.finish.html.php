<?php /*%%SmartyHeaderCode:34305885f100d18241-66612262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4330e5b8815d6f06bbf4bbd0b4e8fefca74c9d8' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\ujian\\finish.html',
      1 => 1485298294,
      2 => 'file',
    ),
    '55406f607107bc7086bc160e8c65632cc40cbbee' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\head.html',
      1 => 1515122801,
      2 => 'file',
    ),
    '01735ed7da6b981efbc50951181b6c658fe477ca' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\footer.html',
      1 => 1473032700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34305885f100d18241-66612262',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a5322492c66a1_22971970',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5322492c66a1_22971970')) {function content_5a5322492c66a1_22971970($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tes Ujian Biologi | </title>
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
      <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/AdminLTE.ujian.css">
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

<body class="skin-blue sidebar-mini wysihtml5-supported sidebar-collapse">
    <div class="wrapper">
        <div class="content-wrapper">
           
            <section class="content">
                <div id="nav_bar" class="row">
                    <div class="col-md-12">
                        <div class="row" style="background: #fff; border-bottom: 3px solid #08c;">
                            <div class="form-group">
                                <section class="col-lg-8 col-xs-8 content-header" style="padding-bottom: 20px;">
                                    <h1 style="font-size: 22px;">Tes Ujian Biologi</h1>
                                    <span style="font-size: 16px;">Tanggal: 08-01-2018 Jam: 14:30</span>
                                </section>

                                <section class="col-lg-4 col-xs-4 content-header" style="padding-bottom: 20px; text-align: right;">
                                    <!-- h1 id="jam">::</h1>
                                    <span style="font-size: 16px;">Pilihan Ganda: <label class="label label-info"><span id="isi_pilihanganda">0</span> / 0</label>&nbsp;&nbsp;&nbsp;&nbsp;Essai: <label class="label label-warning"><span id="isi_essai">0</span> / 0</label>&nbsp;&nbsp;&nbsp;<label id="btn_finish" class="label label-danger" style="cursor:pointer">SELESAI</label></span -->
                                </section>
                            </div>
                        </div> 
                    </div>    
                    
                    <!-- div class="col-md-12">
                        <div class="row" style="padding: 10px 10px 0 10px; background: #ecf0f5;">
                            <div class="form-group">
                                <ul id="myTab" class="nav nav-tabs">                                
                                    <li class="active">
                                        <a href="#penjelasan" data-toggle="tab"><b>PENDAHULUAN</b></a>
                                    </li>                                 
                                    <li>
                                        <a href="#pilihanganda" data-toggle="tab"><b>SOAL PILIHAN GANDA</b></a>
                                    </li>                                
                                    <li>
                                        <a href="#essai" data-toggle="tab"><b>SOAL ESSAI</b></a>
                                    </li> 
                                </ul>
                            </div>                        
                        </div>
                    </div -->
                </div>
                    
                <div class="row">
                    <br /><br /><br /><br /><br /><br /><br />
                </div>
                
                <div class="row">
                    <section class="col-md-12 content-header" style="padding-bottom: 20px; text-align: center;">
                        <h1 style="font-size: 22px;">Ujian Telah Selesai!</h1>
                        <a href="http://localhost/ujian_online/dashboard" class="btn button-info">Kembali ke Dashboard</a>
                    </section>
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
    
    <!-- AdminLTE for demo purposes -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/demo.js"></script>
    <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
    
    <script type="text/javascript">
        var home_url = 'http://localhost/ujian_online';
    </script>
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/notifikasi.js"></script>
</body>

</html>
<?php }} ?>
