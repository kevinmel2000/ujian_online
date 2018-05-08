<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-11 09:40:09
         compiled from "..\..\templates\back-end\matrix\contentleft\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:64365781f1d40ea010-50217303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09d7506879185e1bf0c57196e7d6b7f529c2e6be' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\contentleft\\edit.html',
      1 => 1468204805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64365781f1d40ea010-50217303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5781f1d41c0d63_64635605',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'listtipe' => 0,
    'entry' => 0,
    'datacategory' => 0,
    'listwidget' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5781f1d41c0d63_64635605')) {function content_5781f1d41c0d63_64635605($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/contentleft/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                        <label for="judul">Judul Widget:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['judul'];
}?>" class="form-control" name="judul" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="tipe">Tipe Widget:</label>
                        <select class="form-control" name="tipe">
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listtipe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['tipe']==$_smarty_tpl->tpl_vars['data']->value[0]['tipe']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['tipe'];?>
</option>                                        
                            <?php } ?>                            
                        </select>
                    </div>
                    
                    <div id="kategori" class="form-group">
                        <label for="kategori">Kategori Produk:</label>
                        <select class="form-control" name="id_kategori">
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datacategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['entry']->value['id_parent']==0) {?>style="font-weight: bold;"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['data']->value[0]['id_kategori']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>                                        
                            <?php } ?>                            
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="url">Posisi</label>
                        <select class="form-control" name="id_widget_posisi" placeholder="">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['id']==0) {?>selected="selected"<?php }?>>Atas</option>
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listwidget']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['data']->value[0]['id_widget_posisi']) {?>selected="selected"<?php }?>>Setelah <?php echo $_smarty_tpl->tpl_vars['entry']->value['judul'];?>
</option>
                            <?php } ?>
                        </select>
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
 type="text/javascript">
        
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            
            $('[name=tipe]').on('change', function (e) {                
                var tipe = $('[name=tipe]').val();
                $('[name=id_kategori]').prop('disabled', tipe!='Kategori');
                
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
                submitWidget();
            });
            
            
            function submitWidget() {
                 
                var tipe = $('[name=tipe]').val();
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('judul', $('[name=judul]').val());
                data.append('tipe', $('[name=tipe]').val());
                data.append('id_kategori', (tipe=='Kategori'?$('[name=id_kategori]').val():''));
                data.append('id_widget_posisi', $('[name=id_widget_posisi]').val());
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
            
            <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['tipe']!='Kategori') {?>
            $('[name=id_kategori]').prop('disabled', true);
            <?php }?>
            
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
