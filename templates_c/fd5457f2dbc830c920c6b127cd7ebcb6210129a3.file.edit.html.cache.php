<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-20 13:40:36
         compiled from "..\templates\back-end\AdminLTE-2.3.6\pilihanganda\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2422588064e7d37c55-72328024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd5457f2dbc830c920c6b127cd7ebcb6210129a3' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\pilihanganda\\edit.html',
      1 => 1485297976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2422588064e7d37c55-72328024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_588064e7e775d5_69613635',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'id_head' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588064e7e775d5_69613635')) {function content_588064e7e775d5_69613635($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/pilihanganda/list.php?id=<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
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
                                                    <td width="25%"><label for="pertanyaan">Pertanyaan:</label></td>
                                                    <td width="75%"><div class="summernote_pertanyaan"></div></td>
                                                </tr>
                                                <tr>
                                                    <td><label for="pilihan_jawaban_a">Pilihan A:</label></td>
                                                    <td><div class="summernote_pilihan_jawaban_a"></div></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="pilihan_jawaban_b">Pilihan B:</label></td>
                                                    <td><div class="summernote_pilihan_jawaban_b"></div></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="pilihan_jawaban_c">Pilihan C:</label></td>
                                                    <td><div class="summernote_pilihan_jawaban_c"></div></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="pilihan_jawaban_d">Pilihan D:</label></td>
                                                    <td><div class="summernote_pilihan_jawaban_d"></div></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="pilihan_jawaban_e">Pilihan E:</label></td>
                                                    <td><div class="summernote_pilihan_jawaban_e"></div></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td><label for="jawaban_pilihan">Kunci Jawaban:</label></td>
                                                    <td><input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['jawaban_pilihan'];
}?>" class="form-control" name="jawaban_pilihan" /></td>                                                    
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/loading.gif" /></div>                  
                                            <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                            <a id="btn_batal"  href="list.php?id_head=<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
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
    
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            
            $('.summernote_pertanyaan').summernote({
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
            $('.summernote_pilihan_jawaban_a').summernote({
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
            $('.summernote_pilihan_jawaban_b').summernote({
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
            $('.summernote_pilihan_jawaban_c').summernote({
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
            $('.summernote_pilihan_jawaban_d').summernote({
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
            $('.summernote_pilihan_jawaban_e').summernote({
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

            $(".summernote_pertanyaan").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['pertanyaan'];
}?>');
            $(".summernote_pilihan_jawaban_a").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['pilihan_1'];
}?>');
            $(".summernote_pilihan_jawaban_b").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['pilihan_2'];
}?>');
            $(".summernote_pilihan_jawaban_c").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['pilihan_3'];
}?>');
            $(".summernote_pilihan_jawaban_d").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['pilihan_4'];
}?>');
            $(".summernote_pilihan_jawaban_e").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['pilihan_5'];
}?>');

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
                data.append('id_head', '<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
');
                data.append('pertanyaan', $('.summernote_pertanyaan').summernote().code().replace(/\n/, '<br />'));
                data.append('pilihan_1', $('.summernote_pilihan_jawaban_a').summernote().code().replace(/\n/, '<br />'));
                data.append('pilihan_2', $('.summernote_pilihan_jawaban_b').summernote().code().replace(/\n/, '<br />'));
                data.append('pilihan_3', $('.summernote_pilihan_jawaban_c').summernote().code().replace(/\n/, '<br />'));
                data.append('pilihan_4', $('.summernote_pilihan_jawaban_d').summernote().code().replace(/\n/, '<br />'));
                data.append('pilihan_5', $('.summernote_pilihan_jawaban_e').summernote().code().replace(/\n/, '<br />'));
                data.append('jawaban_pilihan', $('[name=jawaban_pilihan]').val());
                
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
                            window.location = 'list.php?id=<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
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
