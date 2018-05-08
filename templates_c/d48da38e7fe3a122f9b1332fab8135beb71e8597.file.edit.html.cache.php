<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-25 15:14:27
         compiled from "..\templates\back-end\AdminLTE-2.3.6\pelaporanpelanggaran\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:285457bbc7f6ade396-65803276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd48da38e7fe3a122f9b1332fab8135beb71e8597' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\pelaporanpelanggaran\\edit.html',
      1 => 1472112864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285457bbc7f6ade396-65803276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bbc7f6c07d69_03277026',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'data_user' => 0,
    'data' => 0,
    'isEdit' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bbc7f6c07d69_03277026')) {function content_57bbc7f6c07d69_03277026($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/pelaporanpelanggaran/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                                                    <td>
                                                        <label for="propinsi">BKD Propinsi / Kabupaten Kota:</label>
                                                    </td>
                                                    <td colspan="4"><label><?php if ($_smarty_tpl->tpl_vars['data_user']->value['tingkat']=='P') {
echo $_smarty_tpl->tpl_vars['data_user']->value['nama_propinsi'];
} elseif ($_smarty_tpl->tpl_vars['data_user']->value['tingkat']=='K') {
echo $_smarty_tpl->tpl_vars['data_user']->value['nama_kabupaten'];
}?></label></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="tahun_pelaporan">Tahun Pelaporan:</label></td>
                                                    <td colspan="4">
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['tahun_pelaporan'];?>
" class="form-control" name="tahun_pelaporan" placeholder="Tahun Pelaporan" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Jumlah Pegawai:</label></td>
                                                    <td colspan="4">
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['jumlah_pegawai'];?>
" class="form-control jumlah" name="jumlah_pegawai" placeholder="Jumlah Pegawai" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Jumlah Pelanggaran:</label></td>
                                                    <td>
                                                        <label for="jumlah_ringan">Ringan:</label>
                                                    </td>
                                                    <td>
                                                        <label for="jumlah_sedang">Sedang:</label>
                                                    </td>
                                                    <td>
                                                        <label for="jumlah_berat">Berat:</label>
                                                    </td>
                                                    <td>
                                                        <label for="jumlah_total">Total:</label>
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Pelanggaran UU ASN:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['uu_asn_ringan'];?>
" class="form-control jumlah" name="uu_asn_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['uu_asn_sedang'];?>
" class="form-control jumlah" name="uu_asn_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['uu_asn_berat'];?>
" class="form-control jumlah" name="uu_asn_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['uu_asn_total'];?>
" class="form-control jumlah" disabled name="uu_asn_total"  placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Pelanggaran PP 53 / 2010:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_53_2010_ringan'];?>
" class="form-control jumlah" name="pp_53_2010_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_53_2010_sedang'];?>
" class="form-control jumlah" name="pp_53_2010_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_53_2010_berat'];?>
" class="form-control jumlah" name="pp_53_2010_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_53_2010_total'];?>
" class="form-control jumlah" disabled name="pp_53_2010_total" placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Pelanggaran PP 45 / 1990:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_45_1990_ringan'];?>
" class="form-control jumlah" name="pp_45_1990_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_45_1990_sedang'];?>
" class="form-control jumlah" name="pp_45_1990_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_45_1990_berat'];?>
" class="form-control jumlah" name="pp_45_1990_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_45_1990_total'];?>
" class="form-control jumlah" disabled name="pp_45_1990_total" placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Pelanggaran PP 45 / 1990:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_46_2011_ringan'];?>
" class="form-control jumlah" name="pp_46_2011_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_46_2011_sedang'];?>
" class="form-control jumlah" name="pp_46_2011_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_46_2011_berat'];?>
" class="form-control jumlah" name="pp_46_2011_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['pp_46_2011_total'];?>
" class="form-control jumlah" disabled name="pp_46_2011_total" placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jumlah_pegawai">Peraturan Lainnya:</label><br /><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_peraturan_lain'];?>
" class="form-control" name="nama_peraturan_lain" placeholder="Nama Peraturan" /></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['peraturan_lain_ringan'];?>
" class="form-control jumlah" name="peraturan_lain_ringan" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['peraturan_lain_sedang'];?>
" class="form-control jumlah" name="peraturan_lain_sedang" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['peraturan_lain_berat'];?>
" class="form-control jumlah" name="peraturan_lain_berat" placeholder="0" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['peraturan_lain_total'];?>
" class="form-control jumlah" disabled name="peraturan_lain_total" placeholder="0" />
                                                    </td>                                                    
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="filename">Upload Berkas:</label>
                                            <label for="filename_keterangan"><p class="help-block"><b>- Maksimal ukuran file 5MB.<br />- Format file harus pdf.</b></p></label>
                                            <input id="fileupload" type="file" name="filename">
                                            <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['namafile']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/pelanggaran_disiplin/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['namafile'];?>
" traget="_blank">Download</a><?php }?>
                                            <div id="blok_hapus" style="margin-top: 5px;<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['namafile']=='') {?>display: none;<?php }?>">
                                                <div class="btn btn btn-danger hapus_file">Hapus</div>
                                            </div>
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
    
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery.input.formatter.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            $("input.jumlah").formatInput();
            
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
            
            function getTotalUuAsn() {
                var ringan = $('[name=uu_asn_ringan]').val().replace(',', '');
                var sedang = $('[name=uu_asn_sedang]').val().replace(',', '');
                var berat = $('[name=uu_asn_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            function getTotalPp532010() {
                var ringan = $('[name=pp_53_2010_ringan]').val().replace(',', '');
                var sedang = $('[name=pp_53_2010_sedang]').val().replace(',', '');
                var berat = $('[name=pp_53_2010_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            function getTotalPp451990() {
                var ringan = $('[name=pp_45_1990_ringan]').val().replace(',', '');
                var sedang = $('[name=pp_45_1990_sedang]').val().replace(',', '');
                var berat = $('[name=pp_45_1990_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            function getTotalPp462011() {
                var ringan = $('[name=pp_46_2011_ringan]').val().replace(',', '');
                var sedang = $('[name=pp_46_2011_sedang]').val().replace(',', '');
                var berat = $('[name=pp_46_2011_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            function getTotalPeraturanLain() {
                var ringan = $('[name=peraturan_lain_ringan]').val().replace(',', '');
                var sedang = $('[name=peraturan_lain_sedang]').val().replace(',', '');
                var berat = $('[name=peraturan_lain_berat]').val().replace(',', '');
            
                var total = eval(ringan==''?0:ringan) +
                         eval(sedang==''?0:sedang) +
                         eval(berat==''?0:berat);
                 
                 return total;
            }
            
            $('[name=uu_asn_ringan]').keyup(function () { 
                $('[name=uu_asn_total]').val(getTotalUuAsn());
            });
            
            $('[name=uu_asn_sedang]').keyup(function () { 
                $('[name=uu_asn_total]').val(getTotalUuAsn());
            });
            
            $('[name=uu_asn_berat]').keyup(function () { 
                $('[name=uu_asn_total]').val(getTotalUuAsn());
            });
            
            $('[name=pp_53_2010_ringan]').keyup(function () { 
                $('[name=pp_53_2010_total]').val(getTotalPp532010());
            });
            
            $('[name=pp_53_2010_sedang]').keyup(function () { 
                $('[name=pp_53_2010_total]').val(getTotalPp532010());
            });
            
            $('[name=pp_53_2010_berat]').keyup(function () { 
                $('[name=pp_53_2010_total]').val(getTotalPp532010());
            });
            
            $('[name=pp_45_1990_ringan]').keyup(function () { 
                $('[name=pp_45_1990_total]').val(getTotalPp451990());
            });
            
            $('[name=pp_45_1990_sedang]').keyup(function () { 
                $('[name=pp_45_1990_total]').val(getTotalPp451990());
            });
            
            $('[name=pp_45_1990_berat]').keyup(function () { 
                $('[name=pp_45_1990_total]').val(getTotalPp451990());
            });
            
            $('[name=pp_46_2011_ringan]').keyup(function () { 
                $('[name=pp_46_2011_total]').val(getTotalPp462011());
            });
            
            $('[name=pp_46_2011_sedang]').keyup(function () { 
                $('[name=pp_46_2011_total]').val(getTotalPp462011());
            });
            
            $('[name=pp_46_2011_berat]').keyup(function () { 
                $('[name=pp_46_2011_total]').val(getTotalPp462011());
            });
            
            $('[name=peraturan_lain_ringan]').keyup(function () { 
                $('[name=peraturan_lain_total]').val(getTotalPeraturanLain());
            });
            
            $('[name=peraturan_lain_sedang]').keyup(function () { 
                $('[name=peraturan_lain_total]').val(getTotalPeraturanLain());
            });
            
            $('[name=peraturan_lain_berat]').keyup(function () { 
                $('[name=peraturan_lain_total]').val(getTotalPeraturanLain());
            });
            
            var changes = false;
            var files = <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['namafile']!='') {?>'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['namafile'];?>
';<?php } else { ?>undefined;<?php }?>
                    
            $("#fileupload").change(function(event){
                changes = true;
                files = event.target.files;
                $('#preview_foto').show();
                $('#blok_hapus').show();
            });
            
            $('.hapus_file').click(function() {            
                changes = true;
                files = undefined;
                $('#fileupload').val('');
                $('#blok_hapus').hide();                                
            });
            

            $('#btn_simpan').click(function() {
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('id_propinsi', '<?php echo $_smarty_tpl->tpl_vars['data_user']->value['id_propinsi'];?>
');
                data.append('id_kabupaten', '<?php echo $_smarty_tpl->tpl_vars['data_user']->value['id_kabupaten'];?>
');
                data.append('tahun_pelaporan', $('[name=tahun_pelaporan]').val());
                data.append('jumlah_pegawai', $('[name=jumlah_pegawai]').val().replace(',', ''));
             
                data.append('uu_asn_ringan', $('[name=uu_asn_ringan]').val().replace(',', ''));
                data.append('uu_asn_sedang', $('[name=uu_asn_sedang]').val().replace(',', ''));
                data.append('uu_asn_berat', $('[name=uu_asn_berat]').val().replace(',', ''));
             
                data.append('pp_53_2010_ringan', $('[name=pp_53_2010_ringan]').val().replace(',', ''));
                data.append('pp_53_2010_sedang', $('[name=pp_53_2010_sedang]').val().replace(',', ''));
                data.append('pp_53_2010_berat', $('[name=pp_53_2010_berat]').val().replace(',', ''));
             
                data.append('pp_45_1990_ringan', $('[name=pp_45_1990_ringan]').val().replace(',', ''));
                data.append('pp_45_1990_sedang', $('[name=pp_45_1990_sedang]').val().replace(',', ''));
                data.append('pp_45_1990_berat', $('[name=pp_45_1990_berat]').val().replace(',', ''));
             
                data.append('pp_46_2011_ringan', $('[name=pp_46_2011_ringan]').val().replace(',', ''));
                data.append('pp_46_2011_sedang', $('[name=pp_46_2011_sedang]').val().replace(',', ''));
                data.append('pp_46_2011_berat', $('[name=pp_46_2011_berat]').val().replace(',', ''));
             
                data.append('nama_peraturan_lain', $('[name=nama_peraturan_lain]').val().replace(',', ''));
                data.append('peraturan_lain_ringan', $('[name=peraturan_lain_ringan]').val().replace(',', ''));
                data.append('peraturan_lain_sedang', $('[name=peraturan_lain_sedang]').val().replace(',', ''));
                data.append('peraturan_lain_berat', $('[name=peraturan_lain_berat]').val().replace(',', ''));
             
                data.append('changes', changes?"Y":"");
                if(files!=undefined && typeof files === 'object') {
                    $.each(files, function(keys, value) {
                        data.append('filename', value);
                    });                        
                }
             
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
