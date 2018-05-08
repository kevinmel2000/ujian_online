<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-20 13:53:21
         compiled from "..\templates\back-end\AdminLTE-2.3.6\ujian\finish.html" */ ?>
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
  ),
  'nocache_hash' => '34305885f100d18241-66612262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5885f100dff0e9_02830840',
  'variables' => 
  array (
    'dataujian' => 0,
    'jam' => 0,
    'menit' => 0,
    'detik' => 0,
    'soal_pilihanganda' => 0,
    'soal_essai' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885f100dff0e9_02830840')) {function content_5885f100dff0e9_02830840($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="skin-blue sidebar-mini wysihtml5-supported sidebar-collapse">
    <div class="wrapper">
        <div class="content-wrapper">
           
            <section class="content">
                <div id="nav_bar" class="row">
                    <div class="col-md-12">
                        <div class="row" style="background: #fff; border-bottom: 3px solid #08c;">
                            <div class="form-group">
                                <section class="col-lg-8 col-xs-8 content-header" style="padding-bottom: 20px;">
                                    <h1 style="font-size: 22px;"><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['nama_soal'];?>
</h1>
                                    <span style="font-size: 16px;">Tanggal: <?php echo $_smarty_tpl->tpl_vars['dataujian']->value['tanggal_ujian'];?>
 Jam: <?php echo $_smarty_tpl->tpl_vars['dataujian']->value['jam_ujian'];?>
</span>
                                </section>

                                <section class="col-lg-4 col-xs-4 content-header" style="padding-bottom: 20px; text-align: right;">
                                    <!-- h1 id="jam"><?php echo $_smarty_tpl->tpl_vars['jam']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['menit']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['detik']->value;?>
</h1>
                                    <span style="font-size: 16px;">Pilihan Ganda: <label class="label label-info"><span id="isi_pilihanganda">0</span> / <?php echo count($_smarty_tpl->tpl_vars['soal_pilihanganda']->value);?>
</label>&nbsp;&nbsp;&nbsp;&nbsp;Essai: <label class="label label-warning"><span id="isi_essai">0</span> / <?php echo count($_smarty_tpl->tpl_vars['soal_essai']->value);?>
</label>&nbsp;&nbsp;&nbsp;<label id="btn_finish" class="label label-danger" style="cursor:pointer">SELESAI</label></span -->
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
                        <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/dashboard" class="btn button-info">Kembali ke Dashboard</a>
                    </section>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
              
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                  
    </div>
    <!-- ./wrapper -->
        
    <!-- jQuery 2.2.3 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.6 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- jvectormap -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <!-- SlimScroll 1.3.0 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/demo.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        var home_url = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
';
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/notifikasi.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
