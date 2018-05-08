<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 00:06:28
         compiled from "..\templates\front-end\accecories\member\ganti_password.html" */ ?>
<?php /*%%SmartyHeaderCode:8199577a972d9ac9c1-33351885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e67ba249d86913a05deb655b552c6cc984c3804' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\member\\ganti_password.html',
      1 => 1467651986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8199577a972d9ac9c1-33351885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577a972da74fc2_31925677',
  'variables' => 
  array (
    'homeurl' => 0,
    'tpl_dir' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577a972da74fc2_31925677')) {function content_577a972da74fc2_31925677($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
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
                
                <div class="checkout">
                    <div class="row">
                    	<div class="col-sm-12">
                            <div class="checkout-step">
                                <div class="checkout-step-item">
                                    <div id="checkout-one" class="collapse in">
                                    	<div class="step-content">
                                            <div class="row">
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
                                                    
                                                    <div class="text-right">
                                                        <p><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>                                            
                                                        <p><button id="btn_simpan" type="button" class="btn btn-default btn-md fwb">UPDATE PROFIL</button></p>
                                                    </div>
                                                </div>
                                                                                                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><!-- /.main -->
        
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/brands.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
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
                                msg+=message[key]+'<br />';
                            }
                            if(data['success']) {
                                $('[name=old_password]').val('');
                                $('[name=new_password]').val('');
                                $('[name=konfirmasi]').val('');
                            }
                            setMessage((data['success']?'success':'error'), msg);                        
                        }, 
                            
                        error: function() {
                            setLoading(false);
                            setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                        }
                    });                     
                });
                
                $('#profil_prop').on('change', function (e) {
                    loadKota(this.value, 0);
                    loadKecamatan(0, 0);
                    loadLayanan($('#profil_kurir').val(), 0, 0);
                });

                $('#profil_kota').on('change', function (e) {
                    loadKecamatan(this.value, 0);
                    loadLayanan($('#profil_kurir').val(), 0, 0);
                });
                
                $('#profil_kecamatan').on('change', function (e) {
                    loadLayanan($('#profil_kurir').val(), this.value, 0);
                });
                
                function loadKota(propinsi, kota) {
                    $("#profil_kota").empty();
                    $('<option value="0">-- Pilih Kota --</option>').appendTo('#profil_kota');
                    
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKota.php',
                        data: { 'propinsi': propinsi },
                        dataType: 'json',
                        success: function(data) {
                            var store = data['topics'];
                            var data = '<option value="0">-- Pilih Kota --</option>';
                            for(var key in store) {
                                data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';
                            }
                            $("#profil_kota").empty();
                            $(data).appendTo('#profil_kota');
                        }
                    });    
                }
                                
                function loadKecamatan(kota, kecamatan) {
                    $("#profil_kecamatan").empty();
                    $('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#profil_kecamatan');
                    
                    if(kota>0) {
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKecamatan.php',
                            data: { 'kota': kota },
                            dataType: 'json',
                            success: function(data) {
                                var store = data['topics'];
                                var data = '<option value="0">-- Pilih Kecamatan --</option>';
                                for(var key in store) {
                                    data+='<option value="'+store[key]['subdistrict_id']+'"'+(store[key]['subdistrict_id']==kecamatan?' selected="selected"':'')+'>'+store[key]['subdistrict_name']+'</option>';
                                }
                                $("#profil_kecamatan").empty();
                                $(data).appendTo('#profil_kecamatan');
                            }
                        });
                    }    
                }
                
                <?php if ($_smarty_tpl->tpl_vars['detail']->value['id_propinsi']>0) {?>loadKota('<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_propinsi'];?>
', '<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_kota'];?>
');<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['detail']->value['id_kota']>0) {?>loadKecamatan('<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_kota'];?>
', '<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_kecamatan'];?>
');<?php }?>
            });
        <?php echo '</script'; ?>
>
        
  </body>
</html>
<?php }} ?>
