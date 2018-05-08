<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-19 17:55:49
         compiled from "..\..\templates\back-end\matrix\gantipassword\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:27600578e06e442ad99-44317116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909f0d296689849ea5302bf23972dd9629b29e37' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\gantipassword\\edit.html',
      1 => 1468925748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27600578e06e442ad99-44317116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578e06e449df07_38665759',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
    'adminweburl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578e06e449df07_38665759')) {function content_578e06e449df07_38665759($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/gantipassword/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol>
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_success" class="col-md-fungsi-6" style="display: none;">
                        <div class="alert alert-info">&nbsp;</div>
                    </div>
                    
                    <div id="alert_error" class="col-md-fungsi-6" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="old_password">Password Lama:</label>
                        <input type="password" class="form-control" name="old_password" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="new_password">Password Baru:</label>
                        <input type="password" class="form-control" name="new_password" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="konfirmasi_password">Konfirmasi Password:</label>
                        <input type="password" class="form-control" name="konfirmasi_password" placeholder="" />
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
                                        <a id="btn_batal"  href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/gantipassword/" class="btn btn-warning">Batal</a>                                                        
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
    
        function setMessage(tipe, message) {
                $('#alert_'+tipe+' .alert').text(message);
                $('#alert_'+tipe).show('slow');
                setTimeout(function() {
                    $('#alert_'+tipe).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }

            $('#btn_simpan').click(function() {            
                    
                var data = new FormData();
                data.append('old_password', $('[name=old_password]').val());
                data.append('new_password', $('[name=new_password]').val());
                data.append('konfirmasi_password', $('[name=konfirmasi_password]').val());
                
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
                        setLoading(false);
                        if(data['success']) {
                            setMessage('success', data['message']);
                            $('[name=old_password]').val('');
                            $('[name=new_password]').val('');
                            $('[name=konfirmasi_password]').val('');                            
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false);
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
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
