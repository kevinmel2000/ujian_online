<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-05 16:09:13
         compiled from "..\templates\back-end\AdminLTE-2.3.6\ujian\list.html" */ ?>
<?php /*%%SmartyHeaderCode:212245887ce17e91357-69231987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaac7b3db7a5275fb5203d2dfc2268d15c7d18a8' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\ujian\\list.html',
      1 => 1515143348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212245887ce17e91357-69231987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5887ce18184b70_73057635',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'id_sekolah' => 0,
    'nama_sekolah' => 0,
    'data_user' => 0,
    'id_jurusan' => 0,
    'nama_jurusan' => 0,
    'id_subjurusan' => 0,
    'nama_subjurusan' => 0,
    'id_kelas' => 0,
    'nama_kelas' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'totalpage' => 0,
    'id_head' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5887ce18184b70_73057635')) {function content_5887ce18184b70_73057635($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/ujian/list.php"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                                        <div id="alert_success" class="form-group" style="display: none;">                         
                                            <div class="alert alert-info">&nbsp;</div>
                                        </div>

                                        <div id="alert_error" class="form-group" style="display: none;">                         
                                            <div class="alert alert-danger">&nbsp;</div>
                                        </div>

                                        <div id="form-group">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td><label for="sekolah">Sekolah:</label></td>
                                                    <td>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_sekolah']->value;?>
" name="id_sekolah" id="sekolah" />
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nama_sekolah']->value;?>
" class="form-control" name="nama_sekolah" placeHolder="Ketik untuk memilih sekolah..."<?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_sekolah']>0) {?> readonly="readOnly"<?php }?> />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label for="jurusan">Jurusan:</label></td>
                                                    <td>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_jurusan']->value;?>
" name="id_jurusan" id="jurusan" />
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nama_jurusan']->value;?>
" class="form-control" name="nama_jurusan" placeHolder="Ketik untuk memilih jurusan..."<?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_jurusan']>0) {?> readonly="readOnly"<?php }?> />
                                                    </td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="subjurusan">Sub Jurusan:</label></td>
                                                    <td>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_subjurusan']->value;?>
" name="id_subjurusan" id="subjurusan" />
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nama_subjurusan']->value;?>
" class="form-control" name="nama_subjurusan" placeHolder="Ketik untuk memilih subjurusan..."<?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_subjurusan']>0) {?> readonly="readOnly"<?php }?> />
                                                    </td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="kelas">Kelas:</label></td>
                                                    <td>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_kelas']->value;?>
" name="id_kelas" id="kelas" />
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nama_kelas']->value;?>
" class="form-control" name="nama_kelas" placeHolder="Ketik untuk memilih kelas..."  <?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_kelas']>0) {?> readonly="readOnly"<?php }?> />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="keyword">Pencarian:</label></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                                            <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                                            <a class="btn btn-default" href="list.php">Reset</a></span>                                                  
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group"></div>
                                                
                                        <?php if (count($_smarty_tpl->tpl_vars['listdetail']->value)>0) {?>
                                            <div id="detail" class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%"><div style="text-align: center;">No.</div></th>
                                                            <th width="25%"><div style="text-align: center;">Pelajaran</div></th>
                                                            <th width="25%"><div style="text-align: center;">Kode / Nama Soal</div></th>
                                                            <th width="15%"><div style="text-align: center;">Tanggal</div></th>
                                                            <th width="15%"><div style="text-align: center;">Jam</div></th>
                                                            <th width="15%"><div style="text-align: center;">Status</div></th>                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pelajaran'];?>
</td>
                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_soal'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_soal'];?>
</td>
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal_ujian'];?>
</td>
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jam_ujian'];?>
</td>
                                                                <td align="center">
                                                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?><label class="label bg-green">Sudah Berlalu</label><?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?><label class="label bg-blue">Akan Datang</label><?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?><label class="label bg-red">Sedang Berlangsung</label><?php }?>
                                                                </td>                                                                                                       
                                                            </tr>
                                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                                        <?php } ?>
                                                    </tbody>
                                                </table>        
                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                                <div class="form-group text-center">
                                                    <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                                        <a class="btn btn-default" href="list.php?id=<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&larr; Prev</a>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>
                                                            <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                
                                                        <?php } else { ?>
                                                            <a class="btn btn-default" href="list.php?id=<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                    <?php }} ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                        <a class="btn btn-default" href="list.php?id=<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>
                                                    <?php }?>                                
                                                </div>
                                            <?php }?>
                                        <?php }?>
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
    
    <!-- jQuery Ui -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    
    <!-- LOAD MASKING -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/css/loadmask.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery.loadmask.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            
            $( "#btn_cari" ).click(function() {
                var query = $( "#query" ).val();
                window.location='list.php?id=<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
&'+(query.length>0?'&query='+query:'');
            });

            $( ".detail" ).click(function() {
                var id = this.getAttribute('id_select');
                window.location='<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/ujian/detail.php?id='+id;
            });
            
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

            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        
            <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
        });
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
