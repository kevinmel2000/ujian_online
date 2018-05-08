<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-07 14:46:19
         compiled from "..\..\templates\back-end\AdminLTE-2.3.6\pengajuansertifikat\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2002757a49fb4b08f61-87383813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbcbdc8d4843662840218a200e511d062c2d982d' => 
    array (
      0 => '..\\..\\templates\\back-end\\AdminLTE-2.3.6\\pengajuansertifikat\\edit.html',
      1 => 1470555525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2002757a49fb4b08f61-87383813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a49fb4c72884_72353564',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'data_prop' => 0,
    'tanggal_pengajuan' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
    'listtaekwondo' => 0,
    'entry' => 0,
    'no' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a49fb4c72884_72353564')) {function content_57a49fb4c72884_72353564($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/pengajuansertifikat/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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

                                        <div id="form-group">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td><label for="propinsi">Propinsi:</label></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['data_prop']->value['name'];?>
</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="tanggal">Tanggal Pengajuan:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_pengajuan']->value;?>
" class="form-control tanggal" name="tanggal_pengajuan" placeholder="Tanggal Pengajuan" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label for="jadual_ujian">Jadwal Ujian:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['tanggal'];?>
 (<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_kabupaten'];?>
)<?php }?>" class="form-control" name="ujian" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>readonly<?php }?> />
                                                        <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['id_ujian'];
}?>" name="id_ujian" />
                                                    </td>
                                                </tr>                                                
                                            </table>
                                        </div>
                                        
                                    
                                        
                                        <div id="taekwondo" class="row"></div>
                                        <div class="form-group text-right">
                                            <div id='btn_tambah_peserta' class="btn btn-primary">Tambah Peserta</div>
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
            
            $('[name=ujian]').autocomplete({
                source: function( request, response ) {
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/jadwalujianDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
                            response( $.map( data, function( item ) {
                                $('[name=id_ujian]').val('');                                
                                return {
                                    label: item['display'],
                                    value: item['value'],
                                    data : item['data']
                                }
                            }));
                        },
                        error: function() {
                            $('[name=id_ujian]').val('');   
                        }
                    });
                },
                autoFocus: true,	      	
                minLength: 1,
                select: function( event, ui ) {
                    var data = ui.item.data;
                    $('[name=id_ujian]').val(data['id']);                     
                }		      	
            });
            
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listtaekwondo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<div class="form-group tr">' +                                           
                        '<div class="row">' +
                            '<div class="col-md-12">' +
                                '<div class="col-md-3 no-padding">' +
                                    '<input type="text" class="form-control taekwondo" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['taekwondo'];?>
" name="taekwondo" placeholder="Peserta Taekwondo" />' +
                                    '<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id_taekwondo'];?>
" name="id_taekwondo" />' +                                        
                                '</div>' +
                                '<div class="col-md-2 no-padding">' +
                                    '<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['no_reg'];?>
" name="no_reg" readonly placeholder="No. Registrasi" />' +
                                '</div>' +
                                '<div class="col-md-4 no-padding">' +
                                    '<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['tempat_lahir'];
if ($_smarty_tpl->tpl_vars['entry']->value['tempat_lahir']!='') {?>, <?php }
echo $_smarty_tpl->tpl_vars['entry']->value['tanggal_lahir'];?>
" name="ttl" readonly placeholder="Tempat, Tanggal Lahir" />' +
                                '</div>' +
                                '<div class="col-md-3 no-padding">' +
                                    '<div class="input-group">' +
                                        '<input type="text" class="form-control text-center" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['geup'];?>
" name="geup" placeholder="No. Geup" />' +
                                        '<span class="input-group-btn"><div class="btn btn-danger hapus_taekwondo">Hapus</div></span>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>';

                $( record ).insertBefore( "#taekwondo" );
                $('.taekwondo').focus();
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
                
            $( document ).on( 'click', '.hapus_taekwondo', function() {
                var element = $(this).closest('.tr');
                element.remove();
                
            });

            $('#btn_tambah_peserta').click(function() {
                
                if($('[name=ujian]').val()=='') {
                    setErrorMessage('Jadwal ujian harus diisi terlebih dahulu.');
                    return;
                }
                
                if($('[name=id_ujian]').val()=='') {
                    setErrorMessage('Jadwal ujian tidak sesuai.');
                    return;
                }
            
                var record = 
                    '<div class="form-group tr">' +                                           
                        '<div class="row">' +
                            '<div class="col-md-12">' +
                                '<div class="col-md-3 no-padding">' +
                                    '<input type="text" class="form-control taekwondo" name="taekwondo" placeholder="Peserta Taekwondo" />' +
                                    '<input type="hidden" name="id_taekwondo" />' +                                        
                                '</div>' +
                                '<div class="col-md-2 no-padding">' +
                                    '<input type="text" class="form-control" name="no_reg" readonly placeholder="No. Registrasi" />' +
                                '</div>' +
                                '<div class="col-md-4 no-padding">' +
                                    '<input type="text" class="form-control" name="ttl" readonly placeholder="Tempat, Tanggal Lahir" />' +
                                '</div>' +
                                '<div class="col-md-3 no-padding">' +
                                    '<div class="input-group">' +
                                        '<input type="text" class="form-control text-center" name="geup" placeholder="No. Geup" />' +
                                        '<span class="input-group-btn"><div class="btn btn-danger hapus_taekwondo">Hapus</div></span>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>';

                $( record ).insertBefore( "#taekwondo" );
                setAutocomplete();
                $('.taekwondo').focus();
            });
            setAutocomplete();
            
                                        
            function setAutocomplete() {
                
                $('[name=taekwondo]').autocomplete({
                    source: function( request, response ) {
                        var elm = this.element;                        
                        $.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/pesertaDataStore.php',
                            dataType: "json",
                            method: 'post',
                            data: {
                                query: request.term,
                                id_ujian: $('[name=id_ujian]').val()
                            },
                            success: function( data ) {
                                response( $.map( data, function( item ) {
                                    var element = elm.closest('.tr');
                                    var id_taekwondo = element.find('[name=id_taekwondo]');
                                    var no_reg = element.find('[name=no_reg]');
                                    var ttl = element.find('[name=ttl]');
                                    var geup = element.find('[name=geup]');

                                    id_taekwondo.val('');                                
                                    no_reg.val('');
                                    ttl.val('');
                                    geup.val('');
                                    
                                    return {
                                        label: item['display'],
                                        value: item['value'],
                                        data : item['data']
                                    }
                                }));
                            },
                            error: function() {
                                var element = elm.closest('.tr');
                                var id_taekwondo = element.find('[name=id_taekwondo]');
                                var no_reg = element.find('[name=no_reg]');
                                var ttl = element.find('[name=ttl]');
                                var geup = element.find('[name=geup]');

                                id_taekwondo.val('');                                
                                no_reg.val('');
                                ttl.val('');
                                geup.val('');

                            }
                        });
                    },
                    autoFocus: true,	      	
                    minLength: 1,
                    select: function( event, ui ) {
                        var data = ui.item.data;
                        var element = $(this).closest('.tr');
                        var id_taekwondo = element.find('[name=id_taekwondo]');
                        var no_reg = element.find('[name=no_reg]');
                        var ttl = element.find('[name=ttl]');
                        var geup = element.find('[name=geup]');
                        
                        id_taekwondo.val(data['id']);
                        no_reg.val(data['no_reg']);
                        ttl.val(data['tempat_lahir']+(data['tempat_lahir'].length>0?', ':'')+data['tanggal_lahir']);
                        geup.val(data['geup']);
                    }		      	
                });
            }    
            
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
                var taekwondo = '';
                $(".tr").each(function() {
                    var nama_taekwondo = $(this).find('[name=taekwondo]').val();
                    var id_taekwondo = $(this).find('[name=id_taekwondo]').val();
                    var geup = $(this).find('[name=geup]').val();
                    taekwondo+=(taekwondo==''?'':'\n')+id_taekwondo+'\t'+nama_taekwondo+'\t'+geup;
                });
                
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('id_ujian', $('[name=id_ujian]').val());
                data.append('tanggal', $('[name=tanggal_pengajuan]').val());
                data.append('ujian', $('[name=ujian]').val());
                data.append('taekwondo', taekwondo);
                
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
