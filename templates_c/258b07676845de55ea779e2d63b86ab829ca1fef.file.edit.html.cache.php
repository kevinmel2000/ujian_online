<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 19:55:41
         compiled from "..\..\templates\back-end\matrix\bank\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:13207578d76ba659e45-66411389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '258b07676845de55ea779e2d63b86ab829ca1fef' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\bank\\edit.html',
      1 => 1469843739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13207578d76ba659e45-66411389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578d76ba72f0a7_35032009',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578d76ba72f0a7_35032009')) {function content_578d76ba72f0a7_35032009($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body>
    <div id="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</small>
                        </h1>
                        <!-- ol class="breadcrumb">
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/bank/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol -->
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="nama_bank">Nama Bank:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_bank'];
}?>" class="form-control" name="nama_bank" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="cabang">Cabang:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['cabang'];
}?>" class="form-control" name="cabang" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="no_rekening">No. Rekening:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['no_rekening'];
}?>" class="form-control" name="no_rekening" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="nama_pemilik_rekening">Nama Pemilik Rekening:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_pemilik_rekening'];
}?>" class="form-control" name="nama_pemilik_rekening" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="gambar">Logo Bank:</label>                        
                        <style type="text/css">
                            .cropit-image-preview {
                                border:1px solid #a6bac4;
                                width: 75px;
                                height: 33px;
                                cursor: move;
                            }
                            .H-new-kol-post-img {
                                width: 75px;
                                height: 33px;
                            }
                        </style>
                        <div class="H-new-kol-post-img image-editor">
                            <input id="fileupload_gambar" type="file" name="fileupload_gambar" style="display:none;" class="cropit-image-input" />
                            <div class="cropit-image-preview"></div>
                        </div>
                        <label>Ukuran 75 X 33 px</label><br />   
                        <div id="upload_gambar" class="btn btn-primary">Upload</div>
                     </div>
                    
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status">
                            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="Y") {?> selected="selected" <?php }?>>Aktif</option>
                            <option value="N" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="N") {?> selected="selected" <?php }?>>Tidak Aktif</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <td width="100%">&nbsp;</td> 
                                    <td nowrap>
                                        <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                                        <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                        <a id="btn_batal"  href="list.php" class="btn btn-warning">Batal</a>                                                        
                                    </td>
                                </tr>
                            </tbody>                                
                        </table>
                    </div>
                </div>
                <!-- /. ROW  -->
                
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.cropit.js"><?php echo '</script'; ?>
>  
        
    <?php echo '<script'; ?>
 type="text/javascript">
        
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            
            $('.image-editor').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['logo_bank']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/bank/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['logo_bank'];?>
',
              }<?php }?>
            });
 
            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }

            $('#btn_simpan').click(function() {            
                submitBank();
            });
            
            
            function submitBank() {
                    
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('nama_bank', $('[name=nama_bank]').val());
                data.append('cabang', $('[name=cabang]').val());
                data.append('no_rekening', $('[name=no_rekening]').val());
                data.append('nama_pemilik_rekening', $('[name=nama_pemilik_rekening]').val());                
                var imageData = $('.image-editor').cropit('export');
                data.append('filename_gambar', imageData==undefined?'':imageData);
                data.append('is_aktif', $('[name=status]').val());

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
            }

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

            $('#upload_gambar').click(function(){
                $('#fileupload_gambar').trigger('click'); 
                return false;
            });
            
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
