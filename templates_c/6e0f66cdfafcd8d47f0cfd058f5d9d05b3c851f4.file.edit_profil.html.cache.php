<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-29 07:33:22
         compiled from "..\templates\front-end\accecories\member\edit_profil.html" */ ?>
<?php /*%%SmartyHeaderCode:10192579a9ed0e2bae2-83330091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e0f66cdfafcd8d47f0cfd058f5d9d05b3c851f4' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\member\\edit_profil.html',
      1 => 1469752399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10192579a9ed0e2bae2-83330091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579a9ed0f0aba2_97621450',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'detail' => 0,
    'tpl_dir' => 0,
    'listpropinsi' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579a9ed0f0aba2_97621450')) {function content_579a9ed0f0aba2_97621450($_smarty_tpl) {?><!doctype html>
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
                    <li class="active">Edit Profil</li>
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
                    <div class="col-sm-6">
                        <h4>Profil Utama</h4>
                        <div class="line2 mtb20"></div>

                        <div class="form-group">
                            <label class="control-label">Nama Depan<em>*</em></label>
                            <input type="text" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['first_name'];?>
" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nama Belakang <em>*</em></label>
                            <input type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['last_name'];?>
" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">No. HP <em>*</em></label>
                            <input type="text" name="no_hp" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['no_hp'];?>
" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email <em>*</em></label>
                            <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['email'];?>
" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Photo Profil <em>*</em></label>
                            <style type="text/css">
                                #photo-editor .cropit-image-preview {
                                    background-color: #a6bac4;
                                    height: 120px;
                                    width: 120px;
                                    cursor: move;
                                }
                            </style>

                            <div id="photo-editor">
                                <div style=" float: right; margin-top: 5px; margin-left: 5px; position: absolute;"><input id="fileupload_photo" type="file" name="fileupload_photo" style="display:none;" class="cropit-image-input" /><a id="upload_photo"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/camera-icon.png" width="24px" height="20px" /></a></div>    
                                <div class="cropit-image-preview"></div>
                            </div>
                        </div>
                        <div class="form-group">&nbsp;</div>
                    </div>

                    <div class="col-sm-6">
                        <h4>Alamat Lengkap</h4>
                        <div class="line2 mtb20"></div>

                        <div class="form-group">
                            <label class="control-label">Alamat <em>*</em></label>
                            <textarea name="alamat" class="form-control"><?php echo $_smarty_tpl->tpl_vars['detail']->value['alamat'];?>
</textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Propinsi <em>*</em></label>
                            <select id="profil_prop" name="propinsi" class="form-control">
                                <option value="0">-- Pilih Propinsi --</option>
                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['detail']->value['id_propinsi']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kota <em>*</em></label>
                            <select id="profil_kota" name="kota" class="form-control">
                                <option value="0">-- Pilih Kota --</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kecamatan <em>*</em></label>
                            <select id="profil_kecamatan" name="kecamatan"  class="form-control">
                                <option value="0">-- Pilih Kecamatan --</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kode Pos <em>*</em></label>
                            <input type="text" name="kode_pos" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['kode_pos'];?>
" class="form-control" />
                        </div>

                        <div class="form-group text-right">
                            <p align="center"><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>
                            <p><button id="btn_simpan" type="button" class="<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>form-control <?php }?>btn btn-default btn-md fwb">UPDATE PROFIL</button></p>
                        </div>
                    </div>
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
        <!-- Crop It -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.cropit.js"><?php echo '</script'; ?>
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
                
                $('#photo-editor').cropit({
                    smallImage: 'stretch',
                    imageState: {
                        src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/member/<?php echo $_smarty_tpl->tpl_vars['detail']->value['photo'];?>
'
                    }
                });
                
                $('#upload_photo').click(function(){
                    $('#fileupload_photo').trigger('click'); 
                    return false;
                });
        
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
                    var id             = '<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
';
                    var first_name     = $('[name=first_name]').val();
                    var last_name      = $('[name=last_name]').val();
                    var email          = $('[name=email]').val();
                    var no_hp          = $('[name=no_hp]').val();
                    var alamat         = $('[name=alamat]').val();
                    var id_propinsi    = $('[name=propinsi]').val();
                    var nama_propinsi  = $("#profil_prop option[value='"+id_propinsi+"']").text();
                    var id_kota        = $('[name=kota]').val();
                    var nama_kota      = $("#profil_kota option[value='"+id_kota+"']").text();
                    var id_kecamatan   = $('[name=kecamatan]').val();
                    var nama_kecamatan = $("#profil_kecamatan option[value='"+id_kecamatan+"']").text();
                    var kode_pos       = $('[name=kode_pos]').val();
                    var photoData      = $('#photo-editor').cropit('export');
                    
                    var data = new FormData();
                    data.append('id', id);
                    data.append('firstname', first_name);
                    data.append('lastname', last_name);
                    data.append('email', email);
                    data.append('no_hp', no_hp);
                    data.append('alamat', alamat);
                    data.append('propinsi', id_propinsi);
                    data.append('nama_propinsi', nama_propinsi);
                    data.append('kota', id_kota);
                    data.append('nama_kota', nama_kota);
                    data.append('kecamatan', id_kecamatan);
                    data.append('nama_kecamatan', nama_kecamatan);                                
                    data.append('kode_pos', kode_pos);
                    data.append('filename_photo', photoData);                
                    
                    setLoading(true);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/updateProfil.php',
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
                            
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                try {
                                    window.cpjs.sendToAndroid('true|'+msg);
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
