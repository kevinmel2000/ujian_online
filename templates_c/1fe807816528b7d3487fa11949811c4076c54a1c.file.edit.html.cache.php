<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-05 14:49:17
         compiled from "..\templates\back-end\AdminLTE-2.3.6\koreksi_siswa\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3002658868b478017d3-37619244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe807816528b7d3487fa11949811c4076c54a1c' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\koreksi_siswa\\edit.html',
      1 => 1515138555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3002658868b478017d3-37619244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58868b480ad282_44104747',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58868b480ad282_44104747')) {function content_58868b480ad282_44104747($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/koreksi_siswa/list.php?id=<?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['id_soal_head'];?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                                                    <td><label for="sekolah">Sekolah:</label></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['nama_sekolah'];?>
</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="jurusan">Jurusan / Sub Jurusan:</label></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['nama_jurusan'];?>
 / <?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['nama_subjurusan'];?>
</td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="kelas">Kelas:</label></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['nama_kelas'];?>
</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="pelajaran">Pelajaran:</label></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['nama_pelajaran'];?>
</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="kode_soal">Kode Soal:</label></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['kode_soal'];?>
</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="nama_soal">Nama Soal:</label></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['nama_soal'];?>
</td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;<input type="radio" name="jawaban_benar_0" checked readonly="readOnly" class="koreksi" /> &nbsp;&nbsp;<label class="label label-info">Kunci Jawaban</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="jawaban_siswa_0" checked readonly="readOnly" /> &nbsp;&nbsp;<label class="label label-danger">Jawaban Siswa</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="koreksi_salah" readonly="readOnly" /> &nbsp;&nbsp;<label class="label label-default">Koreksi Salah</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="koreksi_benar" checked readonly="readOnly" /> &nbsp;&nbsp;<label class="label label-info">Koreksi Benar</label>
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
                                                <?php if (count($_smarty_tpl->tpl_vars['soal_pilihanganda']->value)>0) {?>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th width="10%"><div style="text-align: center;">Koreksi</div></th>
                                                                    <th width="90%" colspan="4"><div style="text-align: center;">Pertanyaan</div></th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['soal_pilihanganda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                                    <tr>
                                                                        <td width="5%" align="center"><input type="checkbox" id_soal="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="koreksi_pilihanganda_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['koreksi']==0&&$_smarty_tpl->tpl_vars['entry']->value['jawaban_siswa']==$_smarty_tpl->tpl_vars['entry']->value['jawaban_benar']) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['koreksi']==2) {?>checked<?php }?> /></td>
                                                                        <td width="5%" align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
</td>
                                                                        <td width="95%" colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pertanyaan'];?>
<input type="hidden" name="pilihanganda_id_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" /></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_benar']=="A") {?><input type="radio" name="jawaban_benar_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="A" checked readonly="readOnly" class="koreksi" /><?php }?></td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_siswa']=="A") {?><input type="radio" name="jawaban_siswa_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="A" checked readonly="readOnly" /><?php }?></td>
                                                                        <td width="5%" align="center">A.</td>
                                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_1'];?>
</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_benar']=="B") {?><input type="radio" name="jawaban_benar_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="B" checked readonly="readOnly" class="koreksi" /><?php }?></td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_siswa']=="B") {?><input type="radio" name="jawaban_siswa_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="B" checked readonly="readOnly"  /><?php }?></td>
                                                                        <td width="5%" align="center">B.</td>
                                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_2'];?>
</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_benar']=="C") {?><input type="radio" name="jawaban_benar_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="C" checked readonly="readOnly" class="koreksi" /><?php }?></td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_siswa']=="C") {?><input type="radio" name="jawaban_siswa_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="C" checked readonly="readOnly"  /><?php }?></td>
                                                                        <td width="5%" align="center">C.</td>
                                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_3'];?>
</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_benar']=="D") {?><input type="radio" name="jawaban_benar_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="D" checked readonly="readOnly" class="koreksi" /><?php }?></td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_siswa']=="D") {?><input type="radio" name="jawaban_siswa_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="D" checked readonly="readOnly"  /><?php }?></td>
                                                                        <td width="5%" align="center">D.</td>
                                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_4'];?>
</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%">&nbsp;</td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_benar']=="E") {?><input type="radio" name="jawaban_benar_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="E" checked readonly="readOnly" class="koreksi" /><?php }?></td>
                                                                        <td width="5%" align="center"><?php if ($_smarty_tpl->tpl_vars['entry']->value['jawaban_siswa']=="E") {?><input type="radio" name="jawaban_siswa_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="E" checked readonly="readOnly"  /><?php }?></td>
                                                                        <td width="5%" align="center">E.</td>
                                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_5'];?>
</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="5%" colspan="5">&nbsp;</td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>        
                                                    </div>
                                                <?php }?>
                                            </div>

                                            <div class="tab-pane fade" id="essai">
                                                <?php if (count($_smarty_tpl->tpl_vars['soal_essai']->value)>0) {?>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th width="10%"><div style="text-align: center;">Koreksi</div></th>
                                                                    <th width="90%" colspan="2"><div style="text-align: center;">Pertanyaan</div></th>
                                                                </tr>
                                                            </thead>
                                                            
                                                            <tbody>
                                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['soal_essai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                                    <tr>
                                                                        <td width="5%" align="center"><input type="checkbox" id_soal="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="koreksi_essai_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['koreksi']==0&&$_smarty_tpl->tpl_vars['entry']->value['jawaban_siswa']==$_smarty_tpl->tpl_vars['entry']->value['jawaban_benar']) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['koreksi']==2) {?>checked<?php }?> /></td>
                                                                        <td width="5%" align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
</td>
                                                                        <td width="95%" align="left">
                                                                            <?php echo $_smarty_tpl->tpl_vars['entry']->value['pertanyaan'];?>
<br /><br />
                                                                            Jawaban Siswa:<br />
                                                                            <input type="hidden" name="essai_id_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" />
                                                                            <?php echo $_smarty_tpl->tpl_vars['entry']->value['jawaban_siswa'];?>
<br /><br />
                                                                            Kunci Jawab:<br />
                                                                            <?php echo $_smarty_tpl->tpl_vars['entry']->value['jawaban_benar'];?>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3">&nbsp;</td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>        
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/loading.gif" /></div>                  
                                            <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                            <a id="btn_batal"  href="list.php?id=<?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['id_soal_head'];?>
" class="btn btn-warning">Batal</a>                                            
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
    
    <?php echo '<script'; ?>
 type="text/javascript">
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

            for(var i=0; i<<?php echo count($_smarty_tpl->tpl_vars['soal_pilihanganda']->value);?>
; i++) { koreksi_pilihanganda[i] = ''; }       
            for(var i=0; i<<?php echo count($_smarty_tpl->tpl_vars['soal_essai']->value);?>
; i++) { koreksi_essai[i] = ''; }
            
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
                
                data.append('id_jawaban_soal_head', '<?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['id'];?>
');
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
                            window.location = 'list.php?id=<?php echo $_smarty_tpl->tpl_vars['data_head']->value[0]['id_soal_head'];?>
';                    
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
