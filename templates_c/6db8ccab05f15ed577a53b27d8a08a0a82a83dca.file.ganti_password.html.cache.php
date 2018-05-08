<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-30 07:40:26
         compiled from "..\templates\front-end\accecories\member\ganti_password.html" */ ?>
<?php /*%%SmartyHeaderCode:19347579a9e747725f7-26095185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db8ccab05f15ed577a53b27d8a08a0a82a83dca' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\member\\ganti_password.html',
      1 => 1469839216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19347579a9e747725f7-26095185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579a9e748c5c82_89138963',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579a9e748c5c82_89138963')) {function content_579a9e748c5c82_89138963($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                    <li class="active">Ganti Password</li>
               	</ul>
            </div>
        </div>
        <?php }?>
        
        <div class="main">
            <div class="container">
                <div class="row">                    
                    <div id="alert_error" class="col-sm-12" style="display: none;">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                    
                    <div id="alert_success" class="col-sm-12" style="display: none;">
                        <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <h4>Ganti Password</h4>
                        <div class="line2 mtb20"></div>

                        <div class="form-group">
                            <label class="control-label">Password Lama<em>*</em></label>
                            <input type="password" name="old_password" value="" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Password Baru <em>*</em></label>
                            <input type="password" name="new_password" value="" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Konfirmasi Password <em>*</em></label>
                            <input type="password" name="konfirmasi" value="" class="form-control" />
                        </div>

                        <div class="form-group text-right">
                            <p align="center"><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>
                            <p><button id="btn_simpan" type="button" class="<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>form-control <?php }?>btn btn-default btn-md fwb">UPDATE</button></p>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div><!-- /.main -->
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);
}?>
        
        <!-- Jquery Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!-- Owl Carousel Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
        <!-- Countdown Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function () {
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
                
                function setMessage(tipe, message) {
                    $('#alert_'+tipe+' .alert span').html(message);
                    $('#alert_'+tipe).show('slow');
                    setTimeout(function() {
                        $('#alert_'+tipe).hide('slow');
                    }, 5000);
                    $("body, html").animate({ 
                        scrollTop: $('.container').offset().top 
                    }, 600);
                }
                
                function setLoading(isLoading) {
                    if(isLoading) {
                        $('#i_loading').show();
                        $('#btn_simpan').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_simpan').show();
                    }
                }
                
                $('#btn_simpan').on('click', function (e) {
                    clickSound();
                
                    setLoading(true);
                    var old_password   = $('[name=old_password]').val();
                    var new_password   = $('[name=new_password]').val();
                    var konfirmasi     = $('[name=konfirmasi]').val();
                    
                    var data = new FormData();
                    data.append('old_password', old_password);
                    data.append('new_password', new_password);
                    data.append('konfirmasi', konfirmasi);
                    
                    setLoading(true);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/prosesGantiPassword.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoading(false);
                            var message = data['message'];
                            var msg = '';
                            for(var key in message) {
                                msg+=message[key]+'<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>\n<?php } else { ?><br /><?php }?>';
                            }
                            if(data['success']) {
                                $('[name=old_password]').val('');
                                $('[name=new_password]').val('');
                                $('[name=konfirmasi]').val('');
                            }
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                try {
                                    window.cpjs.sendToAndroid((data['success']?'true':'false')+'|'+msg);
                                } catch(err) {
                                    console.log(err.message);
                                }
                            <?php } else { ?>
                                setMessage((data['success']?'success':'error'), msg);                        
                            <?php }?>
                        }, 
                        error: function() {
                            setLoading(false);
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                try {
                                    window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                                } catch(err) {
                                    console.log(err.message);
                                }
                            <?php } else { ?>
                                setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                            <?php }?>
                        }
                    });                     
                });
                
                
            });
        <?php echo '</script'; ?>
>
        
  </body>
</html>
<?php }} ?>
