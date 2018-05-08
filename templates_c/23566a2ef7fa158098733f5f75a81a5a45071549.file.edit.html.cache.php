<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-05 17:06:52
         compiled from "..\templates\back-end\AdminLTE-2.3.6\soal\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3054057ccca2d6d7ad3-63043539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23566a2ef7fa158098733f5f75a81a5a45071549' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\soal\\edit.html',
      1 => 1515146806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3054057ccca2d6d7ad3-63043539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57ccca2d7d1e12_47092459',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'id_sekolah' => 0,
    'nama_sekolah' => 0,
    'data_user' => 0,
    'id_jurusan' => 0,
    'nama_jurusan' => 0,
    'id_subjurusan' => 0,
    'nama_subjurusan' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ccca2d7d1e12_47092459')) {function content_57ccca2d7d1e12_47092459($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/soal/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                                            <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['id_sekolah'];
} else {
echo $_smarty_tpl->tpl_vars['id_sekolah']->value;
}?>" name="id_sekolah" />
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_sekolah'];
} else {
echo $_smarty_tpl->tpl_vars['nama_sekolah']->value;
}?>" class="form-control" name="nama_sekolah"<?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_sekolah']>0) {?> readonly="readOnly"<?php }?> />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan:</label>
                                            <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['id_jurusan'];
} else {
echo $_smarty_tpl->tpl_vars['id_jurusan']->value;
}?>" name="id_jurusan" />
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_jurusan'];
} else {
echo $_smarty_tpl->tpl_vars['nama_jurusan']->value;
}?>" class="form-control" name="nama_jurusan"<?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_jurusan']>0) {?> readonly="readOnly"<?php }?> />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="subjurusan">Sub Jurusan:</label>
                                            <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['id_subjurusan'];
} else {
echo $_smarty_tpl->tpl_vars['id_subjurusan']->value;
}?>" name="id_subjurusan" />
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_subjurusan'];
} else {
echo $_smarty_tpl->tpl_vars['nama_subjurusan']->value;
}?>" class="form-control" name="nama_subjurusan"<?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_subjurusan']>0) {?> readonly="readOnly"<?php }?> />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kelas">Kelas:</label>
                                            <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['id_kelas'];
}?>" name="id_kelas" />
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_kelas'];
}?>" class="form-control" name="nama_kelas" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="pelajaran">Pelajaran:</label>
                                            <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['id_pelajaran'];
}?>" name="id_pelajaran" />
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_pelajaran'];
}?>" class="form-control" name="nama_pelajaran" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="tanggal_ujian">Tanggal Ujian:</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['tanggal_ujian'];?>
" class="form-control tanggal" name="tanggal_ujian" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="jam_ujian">Jam Ujian:</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['jam_ujian'];?>
" class="form-control timepicker" name="jam_ujian" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kode_soal">Kode Soal:</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['kode_soal'];?>
" class="form-control" name="kode_soal" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nama_soal">Nama Soal:</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_soal'];?>
" class="form-control" name="nama_soal" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan:</label>
                                            <div class="summernote"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nilai_benar">Pengali Nilai Benar:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['nilai_benar']=='') {?>1<?php } else {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nilai_benar'];
}?>" class="form-control" name="nilai_benar" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nilai_salah">Pengali Nilai Salah:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['nilai_salah']=='') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nilai_salah'];
}?>" class="form-control" name="nilai_salah" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="perhitungan_score">Perhitungan Score:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['perhitungan_score']=='') {
} else {
echo $_smarty_tpl->tpl_vars['data']->value[0]['perhitungan_score'];
}?>" class="form-control" name="perhitungan_score" />
                                            <label for="label_perhitungan_score">Contoh: ({benar}-{salah})*100</label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="lama_waktu_pengerjaan">Waktu Pengerjaan (Menit):</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['lama_waktu_pengerjaan'];?>
" class="form-control" name="lama_waktu_pengerjaan" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="publish" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['publish']==1) {?>checked<?php }?> />
                                                <span class="label label-warning">Ujian Ditayangkan</span>    
                                            </label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="publish_score" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['publish_score']==1) {?>checked<?php }?> />
                                                <span class="label label-danger">Nilai Ditayangkan</span>    
                                            </label>
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
    
    <!-- include summernote -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/summernote.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/summernote.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/summernote-ext-video.js"><?php echo '</script'; ?>
> 
    
    <!-- iCheck -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
    
    <!-- timepicker -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            
            

            $('.timepicker').timepicker({
                timeFormat: 'HH:mm',
                interval: 15,
                //minTime: '10',
                //maxTime: '6:00pm',
                //defaultTime: '11',
                //startTime: '10:00',
                dynamic: true,
                dropdown: true,
                scrollbar: true
            });

            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
            
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            $('.summernote').summernote({
                height: 100,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    //['fontname', ['fontname']],
                    // ['fontsize', ['fontsize']], Still buggy
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    //['view', ['fullscreen' , 'codeview' ]],
                    ['help', ['help']]
                ]
            });
            $(".summernote").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['keterangan'];
}?>');
            
            $('[name=nama_sekolah]').autocomplete({                
                source: function( request, response ) {
                    $('[name=id_sekolah]').val('');
                    
                    $('[name=id_jurusan]').val('');
                    $('[name=nama_jurusan]').val('');
                    
                    $('[name=id_subjurusan]').val('');
                    $('[name=nama_subjurusan]').val('');
                    
                    $('[name=id_kelas]').val('');
                    $('[name=nama_kelas]').val('');
                    
                    $('[name=id_pelajaran]').val('');
                    $('[name=nama_pelajaran]').val('');
                    
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/sekolahDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
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
                    var data = ui.item.data;
                    $('[name=id_sekolah]').val(data['id']);
                    
                    $('[name=id_jurusan]').val('');
                    $('[name=nama_jurusan]').val('');
                    
                    $('[name=id_subjurusan]').val('');
                    $('[name=nama_subjurusan]').val('');
                    
                    $('[name=id_kelas]').val('');
                    $('[name=nama_kelas]').val('');
                    
                    $('[name=id_pelajaran]').val('');
                    $('[name=nama_pelajaran]').val('');
                }		      	
            });
            
            $('[name=nama_jurusan]').autocomplete({                
                source: function( request, response ) {
                    $('[name=id_jurusan]').val('');
                    
                    $('[name=id_subjurusan]').val('');
                    $('[name=nama_subjurusan]').val('');
                    
                    $('[name=id_kelas]').val('');
                    $('[name=nama_kelas]').val('');
                    
                    $('[name=id_pelajaran]').val('');
                    $('[name=nama_pelajaran]').val('');
                    
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/jurusanDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            id_sekolah: $('[name=id_sekolah]').val()
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
                    var data = ui.item.data;
                    $('[name=id_jurusan]').val(data['id']);
                    
                    $('[name=id_subjurusan]').val('');
                    $('[name=nama_subjurusan]').val('');
                    
                    $('[name=id_kelas]').val('');
                    $('[name=nama_kelas]').val('');
                    
                    $('[name=id_pelajaran]').val('');
                    $('[name=nama_pelajaran]').val('');
                }		      	
            });
            
            
            $('[name=nama_subjurusan]').autocomplete({                
                source: function( request, response ) {
                    $('[name=id_subjurusan]').val('');
                    
                    $('[name=id_kelas]').val('');
                    $('[name=nama_kelas]').val('');
                    
                    $('[name=id_pelajaran]').val('');
                    $('[name=nama_pelajaran]').val('');
                    
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/subjurusanDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            id_jurusan: $('[name=id_jurusan]').val()
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
                    var data = ui.item.data;
                    $('[name=id_subjurusan]').val(data['id']);
                    
                    $('[name=id_kelas]').val('');
                    $('[name=nama_kelas]').val('');
                    
                    $('[name=id_pelajaran]').val('');
                    $('[name=nama_pelajaran]').val('');
                }		      	
            });
            
            $('[name=nama_kelas]').autocomplete({                
                source: function( request, response ) {
                    $('[name=id_kelas]').val(''); 
                    
                    $('[name=id_pelajaran]').val('');
                    $('[name=nama_pelajaran]').val('');                    
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/kelasDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            id_subjurusan: $('[name=id_subjurusan]').val()
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
                    var data = ui.item.data;
                    $('[name=id_kelas]').val(data['id']);
                    
                    $('[name=id_pelajaran]').val('');
                    $('[name=nama_pelajaran]').val('');
                }		      	
            });
            
            
            $('[name=nama_pelajaran]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_pelajaran]').val('');
                    $('[name=id_grupsoal]').val('');
                    $('[name=kode_soal]').val('');                    
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/pelajaranDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            id_kelas: $('[name=id_kelas]').val()
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
                    var data = ui.item.data;
                    $('[name=id_pelajaran]').val(data['id']);
                }		      	
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
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('id_sekolah', $('[name=id_sekolah]').val());
                data.append('nama_sekolah', $('[name=nama_sekolah]').val());
                data.append('id_jurusan', $('[name=id_jurusan]').val());
                data.append('nama_jurusan', $('[name=nama_jurusan]').val());
                data.append('id_subjurusan', $('[name=id_subjurusan]').val());
                data.append('nama_subjurusan', $('[name=nama_subjurusan]').val());
                data.append('id_kelas', $('[name=id_kelas]').val());
                data.append('nama_kelas', $('[name=nama_kelas]').val());
                data.append('id_pelajaran', $('[name=id_pelajaran]').val());
                data.append('nama_pelajaran', $('[name=nama_pelajaran]').val());
                data.append('kode_soal', $('[name=kode_soal]').val());
                data.append('nama_soal', $('[name=nama_soal]').val());
                data.append('keterangan', $('.summernote').summernote().code().replace(/\n/, '<br />'));
                data.append('nilai_benar', $('[name=nilai_benar]').val());
                data.append('nilai_salah', $('[name=nilai_salah]').val());
                data.append('perhitungan_score', $('[name=perhitungan_score]').val());
                data.append('lama_waktu_pengerjaan', $('[name=lama_waktu_pengerjaan]').val());
                data.append('tanggal_ujian', $('[name=tanggal_ujian]').val());
                data.append('jam_ujian', $('[name=jam_ujian]').val());
                data.append('publish', $('[name=publish]').is(':checked')?'1':'0');
                data.append('publish_score', $('[name=publish_score]').is(':checked')?'1':'0');
                
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
