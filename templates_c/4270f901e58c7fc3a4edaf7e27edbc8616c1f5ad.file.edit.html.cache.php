<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-04 07:47:02
         compiled from "..\templates\back-end\AdminLTE-2.3.6\setting_guru\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:5942587c0337c36c89-89770194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4270f901e58c7fc3a4edaf7e27edbc8616c1f5ad' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\setting_guru\\edit.html',
      1 => 1515026814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5942587c0337c36c89-89770194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_587c0337dfb029_86651466',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
    'listdetail' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c0337dfb029_86651466')) {function content_587c0337dfb029_86651466($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/guru/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                                            <label for="sekolah">Sekolah:</label>
                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_sekolah'];?>
" name="id_sekolah" />
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_sekolah'];?>
" class="form-control" name="nama_sekolah" readonly='readOnly' />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan:</label>
                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_jurusan'];?>
" name="id_jurusan" />
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_jurusan'];?>
" class="form-control" name="nama_jurusan" readonly='readOnly' />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="subjurusan">Sub Jurusan:</label>
                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_subjurusan'];?>
" name="id_subjurusan" />
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_subjurusan'];?>
" class="form-control" name="nama_subjurusan" readonly='readOnly' />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nik">NIK:</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nik'];?>
" class="form-control" name="nik" readonly='readOnly' />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nama">Nama Guru:</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];?>
" class="form-control" name="nama" readonly='readOnly' />
                                        </div>
                                        
                                        <div id="list_detail" class="table-responsive" style="margin-top: 10px;">
                                            <div class="form-group">
                                                <label for="detail_pelajaran">Pelajaran yang diuji:</label>
                                                <table  id="tblDetail_pelajaran" class="table table-striped table-bordered table-hover" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="5px"><span class="fa fa-trash-o"></span></th>
                                                            <th width="25%"><div style="text-align: left;">Jurusan</div></th>
                                                            <th width="25%"><div style="text-align: left;">Sub Jurusan</div></th>
                                                            <th width="25%"><div style="text-align: left;">Kelas</div></th>
                                                            <th width="25%"><div style="text-align: left;">Pelajaran</div></th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody id="detail_pelajaran">
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="form-group">
                                                <div id='btn_add' class="btn btn-primary">Tambah</div>                                                
                                            </div>                        
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/loading.gif" /></div>                  
                                            <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                            <a id="btn_batal"  href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/guru/list.php" class="btn btn-warning">Batal</a>                                            
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
    
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/iCheck/square/blue.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {           
            
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
    
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +                                            
                        '<td align="center">' +
                            '<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_jurusan'];?>
" class="form-control nama_jurusan" name="jurusan" readonly="readOnly" />' +                                                
                            '<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id_jurusan'];?>
" name="id_jurusan" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_subjurusan'];?>
" class="form-control nama_subjurusan" name="subjurusan" readonly="readOnly" />' +                                                
                            '<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id_subjurusan'];?>
" name="id_subjurusan" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_kelas'];?>
" class="form-control nama_kelas" name="kelas" />' +                                                
                            '<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id_kelas'];?>
" name="id_kelas" />' +                       
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pelajaran'];?>
" class="form-control nama_pelajaran" name="pelajaran" />' +                                                
                            '<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id_pelajaran'];?>
" name="id_pelajaran" />' +         
                        '</td>' +
                    '</tr>';
                $( record ).insertBefore( "#detail_pelajaran" );
            <?php } ?>
            setAutocomplete();
            
            $('#btn_add').click(function() {
                var record = 
                    '<tr>' +
                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +                                            
                        '<td align="center">' +
                            '<input type="text" class="form-control nama_jurusan" name="jurusan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_jurusan'];?>
" readonly="readOnly" />' +                                                
                            '<input type="hidden" name="id_jurusan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_jurusan'];?>
" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control nama_subjurusan" name="subjurusan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_subjurusan'];?>
" readonly="readOnly" />' +                                                
                            '<input type="hidden" name="id_subjurusan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_subjurusan'];?>
" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control nama_kelas" name="kelas" />' +                                                
                            '<input type="hidden" name="id_kelas" />' +                       
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control nama_pelajaran" name="pelajaran" />' +                                                
                            '<input type="hidden" name="id_pelajaran" />' +         
                        '</td>' +
                    '</tr>';
                $( record ).insertBefore( "#detail_pelajaran" );
                $('[name=kelas]').focus();
                
                setAutocomplete();
            });            


            function setAutocomplete() {
                
                $('.nama_kelas').autocomplete({                
                    source: function( request, response ) {
                        var element = this.element.closest('tr');
                        var id_subjurusan = element.find('[name=id_subjurusan]');
                        var id_kelas = element.find('[name=id_kelas]');
                        var id_pelajaran = element.find('[name=id_pelajaran]');
                        var pelajaran = element.find('[name=pelajaran]');
                        id_kelas.val('');
                        id_pelajaran.val('');
                        pelajaran.val('');
                        
                        $.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/kelasDataStore.php',
                            dataType: "json",
                            method: 'post',
                            data: {
                                query: request.term,
                                id_subjurusan: id_subjurusan.val()
                            },
                            success: function( data ) {
                                response( $.map( data, function( item ) {
                                    return {
                                        label: item['display'],
                                        value: item['value'],
                                        data : item['data']
                                    };
                                }));
                            }
                        });
                    },
                    autoFocus: true,	      	
                    minLength: 1,
                    select: function( event, ui ) {
                        var element = $(this).closest('tr');                
                        var id_kelas  = element.find('[name=id_kelas]');
                        var pelajaran = element.find('[name=pelajaran]');
                        
                        var data = ui.item.data;
                        id_kelas.val(data['id']);
                        pelajaran.focus();
                    }		      	
                });
                                
                $('.nama_pelajaran').autocomplete({                
                    source: function( request, response ) {
                        
                        var element = this.element.closest('tr');
                        var id_kelas = element.find('[name=id_kelas]');
                        var id_pelajaran = element.find('[name=id_pelajaran]');
                        id_pelajaran.val('');
                        
                        $.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/pelajaranDataStore.php',
                            dataType: "json",
                            method: 'post',
                            data: {
                                query: request.term,
                                id_kelas: id_kelas.val()
                            },
                            success: function( data ) {
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
                        var element = $(this).closest('tr');                
                        var id_pelajaran = element.find('[name=id_pelajaran]');
                        
                        var data = ui.item.data;
                        id_pelajaran.val(data['id']);
                    }		      	
                });
            }   
            
                
            $( document ).on( 'click', '.hapus_detail', function() {
               
                var element = $(this).closest('tr');
                element.remove();
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

            $('#btn_simpan').click(function() {
                
                var detail = '';
                $("#tblDetail_pelajaran tr").each(function() {
                    var id_pelajaran  = $(this).find('[name=id_pelajaran]').val();
                    if(id_pelajaran!=undefined) {
                        detail+=(detail==''?'':'\n')+id_pelajaran;
                    }
                });                
                console.log(detail);
                
                var data = new FormData();
                data.append('id_guru', '<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
');
                data.append('detail', detail);                
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
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/guru/list.php';                    
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
