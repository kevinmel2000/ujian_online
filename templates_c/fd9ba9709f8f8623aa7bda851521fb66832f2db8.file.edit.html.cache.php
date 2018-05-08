<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-04 15:26:29
         compiled from "..\..\templates\back-end\matrix\pengguna\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:13328579c230b516824-08339444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9ba9709f8f8623aa7bda851521fb66832f2db8' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pengguna\\edit.html',
      1 => 1470298466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13328579c230b516824-08339444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579c230b5f8572_49363264',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'menu' => 0,
    'entry' => 0,
    'no' => 0,
    'akses' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579c230b5f8572_49363264')) {function content_579c230b5f8572_49363264($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/category"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="userid">User ID:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['userid'];
}?>" class="form-control" name="userid" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['email'];
}?>" class="form-control" name="email" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" value="" class="form-control" name="password" placeholder="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>Biarkan jika tidak ingin diganti.<?php }?>" />
                    </div>

                    <div class="form-group">
                        <label for="konfirmasi">Konfirmasi Password</label>
                        <input type="password" value="" class="form-control" name="konfirmasi" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="menu">Menu Akses</label>
                    
                        <table id="tblMenu" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="10%"><div style="text-align: center;">No.</div></th>
                                    <th width="30%"><div style="text-align: center;">Menu</div></th>
                                    <th width="60%"><div style="text-align: center;">Akses</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                    <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_menu="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                        <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</td>                                        
                                        <td>
                                            <?php  $_smarty_tpl->tpl_vars['akses'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['akses']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['akses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['akses']->key => $_smarty_tpl->tpl_vars['akses']->value) {
$_smarty_tpl->tpl_vars['akses']->_loop = true;
?>
                                                <label class="control-label"><input name="checkbox_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['akses']->value['id'];?>
" class="check_box" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['akses']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['akses']->value['checked']==true) {?>checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['akses']->value['keterangan'];?>
</label>&nbsp;&nbsp;&nbsp;
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                <?php } ?>
                            </tbody>
                        </table>
                                
                        
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
                var menu = "";
                $("#tblMenu tr").each(function() {
                    var id_menu = this.getAttribute('id_menu');
                    var result = "";
                    $("#baris_"+id_menu+" .check_box").each(function() {
                        var value = this.getAttribute('value');
                        var name = "checkbox_"+id_menu+"_"+value;
                        if($('[name='+name+']').is(':checked')) { result+=value; }
                    });
                        
                    if(result.length>0) { menu+=(menu.length>0?'\n':'')+id_menu+'\t'+result; }
                });
                
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('nama', $('[name=nama]').val());
                data.append('userid', $('[name=userid]').val());
                data.append('email', $('[name=email]').val());
                data.append('password', $('[name=password]').val());
                data.append('konfirmasi', $('[name=konfirmasi]').val());
                data.append('menu', menu);

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
</html><?php }} ?>
