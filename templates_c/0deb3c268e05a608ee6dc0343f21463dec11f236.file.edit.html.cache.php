<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-10 12:10:35
         compiled from "..\..\templates\back-end\matrix\banner\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:148425781d63bd13748-84954591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0deb3c268e05a608ee6dc0343f21463dec11f236' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\banner\\edit.html',
      1 => 1468127432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148425781d63bd13748-84954591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5781d63be00b00_99276360',
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
<?php if ($_valid && !is_callable('content_5781d63be00b00_99276360')) {function content_5781d63be00b00_99276360($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
                        <ol class="breadcrumb">
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/bank/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol>
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_error" class="col-md-fungsi-6" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['judul'];
}?>" class="form-control" name="judul" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="detail">Detail:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['detail'];
}?>" class="form-control" name="detail" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="sub_detail">Sub Detail:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['sub_detail_1'];
}?>" class="form-control" name="sub_detail_1" placeholder="" />
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['sub_detail_2'];
}?>" class="form-control" name="sub_detail_2" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="banner">Banner:</label>                        
                        <style type="text/css">
                            #div-banner .cropit-image-preview {
                                margin-bottom: 5px;
                                background-color: #a6bac4;
                                width: 870px;
                                height: 473px;
                                cursor: move;
                            }
                            #div-banner .H-new-kol-post-img {
                                margin-bottom: 5px;
                                width: 870px;
                                height: 473px;                                
                            }
                        </style>
                        <div id="div-banner" class="H-new-kol-post-img image-editor-banner">
                            <input id="fileupload_banner" type="file" name="fileupload_banner" style="display:none;" class="cropit-image-input" />
                            <div class="cropit-image-preview"></div>
                        </div>
                        <div id="upload_banner" class="btn btn-primary">Upload</div>
                     </div>
                    
                    
                    <div class="form-group">
                        <label for="gambar">Gambar:</label>                        
                        <style type="text/css">
                            #div-gambar .cropit-image-preview {
                                margin-bottom: 5px;
                                background-color: #a6bac4;
                                width: 388px;
                                height: 247px;
                                cursor: move;
                            }
                            #div-gambar .H-new-kol-post-img {
                                margin-bottom: 5px;
                                width: 388px;
                                height: 247px;                                
                            }
                        </style>
                        <div id="div-gambar" class="H-new-kol-post-img image-editor-gambar">
                            <input id="fileupload_gambar" type="file" name="fileupload_gambar" style="display:none;" class="cropit-image-input" />
                            <div class="cropit-image-preview"></div>
                        </div>
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
            
            $('.image-editor-gambar').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['gambar']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['gambar'];?>
',
              }<?php }?>
            });
 
 
             $('.image-editor-banner').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['filename']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['filename'];?>
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
                data.append('nama', $('[name=nama]').val());
                data.append('judul', $('[name=judul]').val());
                data.append('detail', $('[name=detail]').val());
                data.append('sub_detail_1', $('[name=sub_detail_1]').val());
                data.append('sub_detail_2', $('[name=sub_detail_2]').val());
                
                var imageDataGambar = $('.image-editor-gambar').cropit('export');
                data.append('filename_gambar', imageDataGambar==undefined?'':imageDataGambar);
                
                var imageDataBanner = $('.image-editor-banner').cropit('export');
                data.append('filename_banner', imageDataBanner==undefined?'':imageDataBanner);
                
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
            
            $('#upload_banner').click(function(){
                $('#fileupload_banner').trigger('click'); 
                return false;
            });
            
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
