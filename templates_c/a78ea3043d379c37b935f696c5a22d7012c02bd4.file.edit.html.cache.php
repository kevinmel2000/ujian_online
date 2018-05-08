<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-02 09:01:27
         compiled from "..\templates\back-end\AdminLTE-2.3.6\sekolah\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:14323587ab5c69604e5-47094083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78ea3043d379c37b935f696c5a22d7012c02bd4' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\sekolah\\edit.html',
      1 => 1514858269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14323587ab5c69604e5-47094083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_587ab5c6a43d66_31292954',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587ab5c6a43d66_31292954')) {function content_587ab5c6a43d66_31292954($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
">Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/sekolah/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
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

                                        <div class="form-group">
                                            <label for="kode_sekolah">Kode Sekolah:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kode_sekolah'];
}?>" class="form-control" name="kode_sekolah" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nama_sekolah">Nama Sekolah:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_sekolah'];
}?>" class="form-control" name="nama_sekolah" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="no_badan_hukum">No. Badan Hukum:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['no_badan_hukum'];
}?>" class="form-control" name="no_badan_hukum" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="tanggal_berdiri">Tanggal Berdiri:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['tanggal_berdiri'];
}?>" class="form-control tanggal" name="tanggal_berdiri" />
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="nss">NSS:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nss'];
}?>" class="form-control" name="nss" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="npsn">NPSN:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['npsn'];
}?>" class="form-control" name="npsn" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select name="status" class="form-control">
                                                <option value="NEGERI" <?php if ('NEGERI'==$_smarty_tpl->tpl_vars['data']->value[0]['status']) {?>selected<?php }?>>NEGERI</option>
                                                <option value="SWASTA" <?php if ('SWASTA'==$_smarty_tpl->tpl_vars['data']->value[0]['status']) {?>selected<?php }?>>SWASTA</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="tingkat">Tingkat:</label>
                                            <select name="tingkat" class="form-control">
                                                <option value="SMA" <?php if ('SMA'==$_smarty_tpl->tpl_vars['data']->value[0]['tingkat']) {?>selected<?php }?>>SMA</option>
                                                <option value="SMK" <?php if ('SMK'==$_smarty_tpl->tpl_vars['data']->value[0]['tingkat']) {?>selected<?php }?>>SMK</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mbs">MBS:</label>
                                            <select name="mbs" class="form-control">
                                                <option value="PAGI" <?php if ('PAGI'==$_smarty_tpl->tpl_vars['data']->value[0]['mbs']) {?>selected<?php }?>>PAGI</option>
                                                <option value="SIANG" <?php if ('SIANG'==$_smarty_tpl->tpl_vars['data']->value[0]['mbs']) {?>selected<?php }?>>SIANG</option>
                                                <option value="PAGI DAN SIANG" <?php if ('PAGI DAN SIANG'==$_smarty_tpl->tpl_vars['data']->value[0]['mbs']) {?>selected<?php }?>>PAGI DAN SIANG</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="alamat">Alamat:</label>
                                            <textarea class="form-control" name="alamat" height="80"><?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['alamat'];
}?>" </textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="rt">RT:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['rt'];
}?>" class="form-control" name="rt" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="rw">RW:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['rw'];
}?>" class="form-control" name="rw" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="dusun">Dusun:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['dusun'];
}?>" class="form-control" name="dusun" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kelurahan">Kelurahan:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kelurahan'];
}?>" class="form-control" name="kelurahan" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="propinsi">Propinsi:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['propinsi'];
}?>" class="form-control" name="propinsi" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kabupaten">Kabupaten:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kabupaten'];
}?>" class="form-control" name="kabupaten" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kecamatan">Kecamatan:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kecamatan'];
}?>" class="form-control" name="kecamatan" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kodepos">Kodepos:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kodepos'];
}?>" class="form-control" name="kodepos" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="lat">Latitude:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['lat'];
}?>" class="form-control" name="lat" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="lng">Longitude:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['lng'];
}?>" class="form-control" name="lng" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="telepon">Telepon:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['telepon'];
}?>" class="form-control" name="telepon" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="fax">Fax:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['fax'];
}?>" class="form-control" name="fax" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="website">Website:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['website'];
}?>" class="form-control" name="website" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['email'];
}?>" class="form-control" name="email" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kejuruan">Kejuruan:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kejuruan'];
}?>" class="form-control" name="kejuruan" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/loading.gif" /></div>                  
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
    
    <!-- ChartJS 1.0.1 -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/chartjs/Chart.min.js"><?php echo '</script'; ?>
 -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/pages/dashboard2.js"><?php echo '</script'; ?>
 -->
    
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
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.datepick.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.plugin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.datepick.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
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

            $('#btn_simpan').click(function() {
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('kode_sekolah', $('[name=kode_sekolah]').val());
                data.append('nama_sekolah', $('[name=nama_sekolah]').val());
                data.append('no_badan_hukum', $('[name=no_badan_hukum]').val());
                data.append('tanggal_berdiri', $('[name=tanggal_berdiri]').val());
                data.append('nss', $('[name=nss]').val());
                data.append('npsn', $('[name=npsn]').val());
                data.append('status', $('[name=status]').val());
                data.append('tingkat', $('[name=tingkat]').val());
                data.append('mbs', $('[name=mbs]').val());
                data.append('alamat', $('[name=alamat]').val());
                data.append('rt', $('[name=rt]').val());
                data.append('rw', $('[name=rw]').val());
                data.append('dusun', $('[name=dusun]').val());
                data.append('kelurahan', $('[name=kelurahan]').val());
                data.append('propinsi', $('[name=propinsi]').val());
                data.append('kabupaten', $('[name=kabupaten]').val());
                data.append('kecamatan', $('[name=kecamatan]').val());
                data.append('kodepos', $('[name=kodepos]').val());
                data.append('lat', $('[name=lat]').val());
                data.append('lng', $('[name=lng]').val());
                data.append('telepon', $('[name=telepon]').val());
                data.append('fax', $('[name=fax]').val());
                data.append('website', $('[name=website]').val());
                data.append('email', $('[name=email]').val());
                data.append('kejuruan', $('[name=kejuruan]').val());
                
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
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
