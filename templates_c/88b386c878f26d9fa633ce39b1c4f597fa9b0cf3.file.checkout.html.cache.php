<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-04 06:19:03
         compiled from "..\templates\front-end\accecories\checkout.html" */ ?>
<?php /*%%SmartyHeaderCode:6531578c556103af95-16031218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b386c878f26d9fa633ce39b1c4f597fa9b0cf3' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\checkout.html',
      1 => 1470266097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6531578c556103af95-16031218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578c55611a1a56_52725231',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'data_user' => 0,
    'as_guest' => 0,
    'cartheader' => 0,
    'data_alamat' => 0,
    'entry' => 0,
    'listpropinsi' => 0,
    'listkurir' => 0,
    'total_berat_kg' => 0,
    'tpl_dir' => 0,
    'total_berat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578c55611a1a56_52725231')) {function content_578c55611a1a56_52725231($_smarty_tpl) {?><!doctype html>
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
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/">Cart</a></li>
                    <li class="active">Checkout</li>
               	</ul>
            </div>
        </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?><div class="main"><?php }?>
            <div class="container">
                <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                <div class="row">
                    <div id="alert_error" class="col-sm-12" style="display: none;">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
                <?php }?>
                <div class="checkout">
                    <div class="row">
                    	<div class="col-sm-12">
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                            <div class="step-title clearfix" data-toggle="collapse" data-target="#checkout-one">
                                <h2><?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true) {?>Metode Pengiriman<?php } else { ?>Checkout<?php }?></h2>
                            </div>
                            <?php }?>
                            <div style="height: 10px;">&nbsp;</div>
                            <div class="row">
                                <?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true||$_smarty_tpl->tpl_vars['as_guest']->value==true) {?>
                                    <div class="col-sm-4">
                                        <h4>Alamat Pengiriman</h4>
                                        <div class="line2 mtb20"></div>
                                        <?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true) {?>
                                        <div id="panel_pilih_alamat" class="form-group">
                                            <label class="control-label">Pakai Alamat <em>*</em></label>
                                            
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_alamat'];?>
" class="form-control" name="nama_alamat" />
                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['id_alamat'];?>
" name="id_alamat" />
                    
                                            <!-- select id="pilih_nama_alamat" class="form-control" name="id_alamat">
                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_alamat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['id_alamat']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_alamat'];?>
</option>
                                                <?php } ?>
                                            </select -->                                                            
                                        </div>

                                        <!-- div id="panel_nama_alamat" class="form-group" style="display: none;">
                                            <label class="control-label">Simpan Alamat Sebagai <em>*</em></label>
                                            <input type="text" name="nama_alamat" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_alamat'];?>
" class="form-control" />
                                        </div -->

                                        <!-- div class="form-group">
                                            <label class="control-label"><input type="checkbox" id="checkbox_alamat_baru" name="alamat_baru" value="1" <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['is_alamat_baru']==true) {?>checked<?php }?>> Buat alamat baru.</label>
                                        </div -->
                                        <?php }?>

                                        <div class="form-group">
                                            <label class="control-label"><input type="checkbox" id="checkbox_dropship" name="is_dropship" value="1"> DROPSHIP</label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Nama Pengirim <em>*</em></label>
                                            <input type="text" name="nama_pengirim" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_pengirim'];?>
" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Nama Penerima <em>*</em></label>
                                            <input type="text" name="nama_penerima" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_penerima'];?>
" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Alamat <em>*</em></label>
                                            <textarea name="alamat" class="form-control"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['alamat'];?>
</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">No. HP <em>*</em></label>
                                            <input type="text" name="no_hp" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['no_hp'];?>
" class="form-control" />
                                        </div>

                                        <?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true) {?>
                                        <div class="form-group">
                                            <label class="control-label"><input type="checkbox" id="checkbox_simpan_alamat" name="simpan_alamat" value="1" checked> Simpan perubahan alamat.</label>
                                        </div>
                                        <?php }?>

                                    </div>
                                    <div class="col-sm-4">
                                        <h4>&nbsp;</h4>
                                        <div class="line2 mtb20"></div>

                                        <div class="form-group">
                                            <label class="control-label">Propinsi <em>*</em></label>
                                            <select id="ongkir_prop" name="propinsi" class="form-control">
                                                <option value="0">-- Pilih Propinsi --</option>
                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['propinsi']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Kota <em>*</em></label>
                                            <select id="ongkir_kota" name="kota" class="form-control">
                                                <option value="0">-- Pilih Kota --</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Kecamatan <em>*</em></label>
                                            <select id="ongkir_kecamatan" name="kecamatan"  class="form-control">
                                                <option value="0">-- Pilih Kecamatan --</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Kode Pos <em>*</em></label>
                                            <input type="text" name="kode_pos" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kode_pos'];?>
" class="form-control" />
                                        </div>

                                        <div class="form-group">&nbsp;</div>

                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Metode Pengiriman</h4>
                                        <div class="line2 mtb20"></div>

                                        <div class="form-group">
                                            <label class="control-label">Jasa Kurir <em>*</em></label>
                                            <select id="ongkir_kurir" name="kurir"  class="form-control">
                                                <option value="0">-- Pilih Kurir --</option>
                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listkurir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['kode']==$_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kurir']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>
                                                <?php } ?>
                                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kurir']=='0') {?> selected="selected" <?php }?>>LAINNYA</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Layanan <em>*</em></label>
                                            <select id="ongkir_layanan" name="layanan" <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kurir']=='0') {?>disabled="disabled"<?php }?> class="form-control">
                                                <option value="0">-- Pilih Layanan --</option>
                                            </select>
                                            <label class="control-label"><b>Total berat pengiriman <?php echo $_smarty_tpl->tpl_vars['total_berat_kg']->value;?>
.</b></label>
                                        </div>

                                        <!-- div class="form-group">
                                            <label class="control-label">Tarif </label>
                                            <input type="text" id="ongkir_tarif" name="tarif" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['tarif'];?>
" class="form-control" readOnly="readonly" />                                                        
                                        </div -->


                                        <div class="form-group text-right">
                                            <div class="form-group text-center"><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></div>                                  
                                            <p><button id="btn_checkout" type="button" class="form-control btn btn-default btn-md">CHECKOUT</button></p>
                                        </div>
                                    </div>
                                <?php } else { ?> 
                                    <div class="col-sm-6">
                                        <h4>Checkout</h4>
                                        <div class="line2 mtb20"></div>
                                        <div class="form-group">
                                            <label class="control-label">Mendaftar untuk kemudahan selanjutnya:</label>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" value="guest" name="register-type" checked> Checkout sebagai Tamu
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" value="register" name="register-type"> Daftar sebagai Pelanggan
                                              </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-primary">Dengan mendaftar akan menghemat waktu!</p>
                                            <p class="text-primary">Apabila anda mendaftar maka kedepannya dapat:</p>
                                            <ul class="list-unstyled">
                                                <li>+  Checkout dengan cepat dan mudah</li>
                                                <li>+  Melihat histori dan status pemesanan</li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <p align="center"><img id="i_loading_lanjutkan" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>
                                            <p><button id="btn_lanjutkan" type="button" class="<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>form-control <?php }?>btn btn-danger btn-md btn-continue fwb">LANJUTKAN</button></p>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <h4>Pelanggan</h4>
                                        <div class="line2 mtb20"></div>
                                        <div class="form-group">
                                            <label class="control-label">Sudah memiliki akun?</label>
                                            <p class="text-muted">Silahakan login terlebih dahulu:</p>
                                        </div>
                                        <form id="user_login" action="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/login.php?page=checkout" method="post">
                                            <div class="form-group">
                                                <label class="control-label">Email *</label>
                                                <input type="text" name="email" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Password *</label>
                                                <input type="password" name="password" class="form-control" />
                                            </div>
                                            <p><a id="lupa_password" href="#">Lupa password?</a></p>
                                            <div class="form-group">
                                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                                    <p align="center"><img id="i_loading_login" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>
                                                    <p><button id="btn_login" type="button" class="<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>form-control <?php }?>btn btn-danger btn-md btn-login fwb">LOGIN</button></p>
                                                <?php } else { ?>
                                                    <button type="submit" class="btn btn-danger btn-md btn-login fwb">LOGIN</button>
                                                <?php }?>
                                                <br>
                                            </div>
                                        </form>
                                    </div>
                                <?php }?>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?></div><?php }?><!-- /.main -->
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php }?>
        
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
        
        <!-- jQuery Ui -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>

    
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
        <?php echo '<script'; ?>
 type="text/javascript">
            var alamat_before   = Array();
            var alamat_baru     = Array();
            var array_tarif     = Array();
            $(function () {                
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
                
                /*$('[name=nama_alamat]').keyup(function () { 
                    $('[name=id_alamat]').val('');
                });*/
            
                $('[name=nama_alamat]').autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/alamatDataStore.php',
                            dataType: "json",
                            method: 'post',
                            data: {
                                query: request.term
                            },
                            success: function( data ) {
                                response( $.map( data, function( item ) {
                                    $('[name=id_alamat]').val('');
                                    return {
                                        label: item['display'],
                                        value: item['value'],
                                        data : item['data']
                                    }
                                }));
                            }
                        });
                    },
                    autoFocus: true,	      	
                    minLength: 1,
                    select: function( event, ui ) {
                        var alamat = ui.item.data;
                        
                        //var alamat = data['alamat'];
                        $('[name=id_alamat]').val(alamat['id']);
                        $('[name=nama_pengirim]').val(alamat['nama_pengirim']);
                        $('[name=nama_penerima]').val(alamat['nama_penerima']);
                        $('[name=alamat]').val(alamat['alamat']);
                        $('[name=no_hp]').val(alamat['no_hp']);
                        $('[name=kode_pos]').val(alamat['kode_pos']);

                        var propinsi = alamat['id_propinsi']==undefined?'0':alamat['id_propinsi']
                        var kota = alamat['id_kota']==undefined?'0':alamat['id_kota']
                        var kecamatan = alamat['id_kecamatan']==undefined?'0':alamat['id_kecamatan']

                        $('[name=propinsi]').val(propinsi);
                        loadKota(propinsi, kota);
                        loadKecamatan(kota, kecamatan);
                        loadLayanan($('#ongkir_kurir').val(), kecamatan, 0);

                        alamat_before['nama_pengirim'] = $('[name=nama_pengirim]').val();
                        alamat_before['nama_penerima'] = $('[name=nama_penerima]').val();
                        alamat_before['alamat'] = $('[name=alamat]').val();
                        alamat_before['no_hp'] = $('[name=no_hp]').val();
                        alamat_before['propinsi'] = $('[name=propinsi]').val();
                        alamat_before['kota'] = $('[name=kota]').val();
                        alamat_before['kecamatan'] = $('[name=kecamatan]').val();
                        alamat_before['kode_pos'] = $('[name=kode_pos]').val();
                    }		      	
                });
            
                function setErrorMessage(message) {
                    $('#alert_error .alert span').html(message);
                    $('#alert_error').show('slow');
                    setTimeout(function() {
                        $('#alert_error').hide('slow');
                    }, 5000);
                    $("body, html").animate({ 
                        scrollTop: $('.container').offset().top 
                    }, 600);
                }
                
                function setLoadingLanjutkan(isLoading) {
                    if(isLoading) {
                        $('#i_loading_lanjutkan').show();
                        $('#btn_lanjutkan').hide();
                    } else {
                        $('#i_loading_lanjutkan').hide();
                        $('#btn_lanjutkan').show();
                    }
                }
                
                function setLoadingLogin(isLoading) {
                    if(isLoading) {
                        $('#i_loading_login').show();
                        $('#btn_login').hide();
                    } else {
                        $('#i_loading_login').hide();
                        $('#btn_login').show();
                    }
                }
                
                function setLoading(isLoading) {
                    if(isLoading) {
                        $('#i_loading').show();
                        $('#btn_checkout').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_checkout').show();
                    }
                }
                
                $('#checkbox_alamat_baru').on('change', function(){
                    if($(this).is(':checked')){  //true
                        $('#panel_pilih_alamat').hide();            
                        $('#panel_nama_alamat').show();
                        
                        //simpan alamat dari pilihan
                        alamat_before['nama_pengirim'] = $('[name=nama_pengirim]').val();
                        alamat_before['nama_penerima'] = $('[name=nama_penerima]').val();
                        alamat_before['alamat'] = $('[name=alamat]').val();
                        alamat_before['no_hp'] = $('[name=no_hp]').val();
                        alamat_before['propinsi'] = $('[name=propinsi]').val();
                        alamat_before['kota'] = $('[name=kota]').val();
                        alamat_before['kecamatan'] = $('[name=kecamatan]').val();
                        alamat_before['kode_pos'] = $('[name=kode_pos]').val();
                        
                        $('[name=nama_alamat]').val(alamat_baru['nama_alamat']);
                        $('[name=nama_pengirim]').val(alamat_baru['nama_pengirim']);
                        $('[name=nama_penerima]').val(alamat_baru['nama_penerima']);
                        $('[name=alamat]').val(alamat_baru['alamat']);
                        $('[name=no_hp]').val(alamat_baru['no_hp']);
                        $('[name=kode_pos]').val(alamat_baru['kode_pos']);
                        
                        var propinsi = alamat_baru['propinsi']==undefined?'0':alamat_baru['propinsi'];
                        var kota = alamat_baru['kota']==undefined?'0':alamat_baru['kota'];
                        var kecamatan = alamat_baru['kecamatan']==undefined?'0':alamat_baru['kecamatan'];
                                
                        $('[name=propinsi]').val(propinsi);
                        loadKota(propinsi, kota);
                        loadKecamatan(kota, kecamatan);
                        loadLayanan($('#ongkir_kurir').val(), kecamatan, 0);
                        
                        $('[name=nama_alamat]').focus();
                    } else {
                        $('#panel_pilih_alamat').show();            
                        $('#panel_nama_alamat').hide();
                        
                        //simpan alamat dari tambah baru
                        alamat_baru['nama_alamat'] = $('[name=nama_alamat]').val();
                        alamat_baru['nama_pengirim'] = $('[name=nama_pengirim]').val();
                        alamat_baru['nama_penerima'] = $('[name=nama_penerima]').val();
                        alamat_baru['alamat'] = $('[name=alamat]').val();
                        alamat_baru['no_hp'] = $('[name=no_hp]').val();
                        alamat_baru['propinsi'] = $('[name=propinsi]').val();
                        alamat_baru['kota'] = $('[name=kota]').val();
                        alamat_baru['kecamatan'] = $('[name=kecamatan]').val();
                        alamat_baru['kode_pos'] = $('[name=kode_pos]').val();
                        
                        $('[name=nama_pengirim]').val(alamat_before['nama_pengirim']);
                        $('[name=nama_penerima]').val(alamat_before['nama_penerima']);
                        $('[name=alamat]').val(alamat_before['alamat']);
                        $('[name=no_hp]').val(alamat_before['no_hp']);
                        $('[name=kode_pos]').val(alamat_before['kode_pos']);                        
                        
                        var propinsi = alamat_before['propinsi']==undefined?'0':alamat_before['propinsi'];
                        var kota = alamat_before['kota']==undefined?'0':alamat_before['kota'];
                        var kecamatan = alamat_before['kecamatan']==undefined?'0':alamat_before['kecamatan'];
                                
                        $('[name=propinsi]').val(propinsi);
                        loadKota(propinsi, kota);
                        loadKecamatan(kota, kecamatan);
                        loadLayanan($('#ongkir_kurir').val(), kecamatan, 0);
                        
                        $('[name=nama_pengirim]').focus();                        
                    }
                });
            
                $('#pilih_nama_alamat').on('change', function (e) {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/getAlamat.php',
                        data: { 'id': $('[name=id_alamat]').val() },
                        dataType: 'json',
                        success: function(data) {
                            var alamat = data['alamat'];
                            $('[name=nama_pengirim]').val(alamat['nama_pengirim']);
                            $('[name=nama_penerima]').val(alamat['nama_penerima']);
                            $('[name=alamat]').val(alamat['alamat']);
                            $('[name=no_hp]').val(alamat['no_hp']);
                            $('[name=kode_pos]').val(alamat['kode_pos']);
                            
                            var propinsi = alamat['id_propinsi']==undefined?'0':alamat['id_propinsi']
                            var kota = alamat['id_kota']==undefined?'0':alamat['id_kota']
                            var kecamatan = alamat['id_kecamatan']==undefined?'0':alamat['id_kecamatan']
                            
                            $('[name=propinsi]').val(propinsi);
                            loadKota(propinsi, kota);
                            loadKecamatan(kota, kecamatan);
                            loadLayanan($('#ongkir_kurir').val(), kecamatan, 0);
                            
                            alamat_before['nama_pengirim'] = $('[name=nama_pengirim]').val();
                            alamat_before['nama_penerima'] = $('[name=nama_penerima]').val();
                            alamat_before['alamat'] = $('[name=alamat]').val();
                            alamat_before['no_hp'] = $('[name=no_hp]').val();
                            alamat_before['propinsi'] = $('[name=propinsi]').val();
                            alamat_before['kota'] = $('[name=kota]').val();
                            alamat_before['kecamatan'] = $('[name=kecamatan]').val();
                            alamat_before['kode_pos'] = $('[name=kode_pos]').val();
                        }
                    }); 
                });
                
                $('#btn_lanjutkan').on('click', function (e) {
                    clickSound();
                    
                    setLoadingLanjutkan(true);
                    var is_guest = $("[name=register-type]:checked").val()=='guest';
                    if(is_guest) {
                        window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/checkout.php?guest<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>&a<?php }?>';
                        return;
                    }
                    
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                        window.cpjs.goToRegister();
                    <?php } else { ?>
                        window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/register.php';
                    <?php }?>                    
                });
                
                $('#btn_login').on('click', function (e) {
                    clickSound();
                    
                    var data = new FormData();
                    data.append('email', $('[name=email]').val());
                    data.append('password', $('[name=password]').val());
                    data.append('method', 'json');

                    setLoadingLogin(true);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/login.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoadingLogin(false);
                            if(data['success']) {
                                try {
                                    var user = data['user'];
                                    window.cpjs.sendToAndroid('true|'+data['message']+'|'+user['id']+'|'+user['nama']+'|'+user['email']+'|'+user['jenis_user']+'|'+user['photo']);
                                } catch(err) {
                                    console.log(err.message);
                                }
                                window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/checkout.php<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>?a<?php }?>';
                            } else {
                                try {
                                    window.cpjs.sendToAndroid('false|'+data['message']);
                                } catch(err) {
                                    console.log(err.message);
                                }
                            }
                        }, 
                        error: function() {
                            setLoadingLogin(false);
                            window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                        }
                    }); 
                });
                 
                $('#btn_checkout').on('click', function (e) {
                    clickSound();
                    
                    setLoading(true);
                    var is_alamat_baru   = $('[name=id_alamat]').val()=='';
                    var is_simpan_alamat = $('[name=simpan_alamat]').is(':checked');                    
                    var is_dropship      = $('[name=is_dropship]').is(':checked');                    
                    var id_alamat      = $('[name=id_alamat]').val();
                    var nama_alamat    = $('[name=nama_alamat]').val();
                    var nama_pengirim  = $('[name=nama_pengirim]').val();
                    var nama_penerima  = $('[name=nama_penerima]').val();
                    var alamat         = $('[name=alamat]').val();
                    var no_hp          = $('[name=no_hp]').val();
                    var id_propinsi    = $('[name=propinsi]').val();
                    var nama_propinsi  = $("#ongkir_prop option[value='"+id_propinsi+"']").text();
                    var id_kota        = $('[name=kota]').val();
                    var nama_kota      = $("#ongkir_kota option[value='"+id_kota+"']").text();
                    var id_kecamatan   = $('[name=kecamatan]').val();
                    var nama_kecamatan = $("#ongkir_kecamatan option[value='"+id_kecamatan+"']").text();
                    var kode_pos       = $('[name=kode_pos]').val();
                    var kurir          = $('[name=kurir]').val();
                    var layanan        = $('[name=layanan]').val();
                    var tarif          = 0;
                    for(var key in array_tarif) {
                        if(array_tarif[key]['service']==$('[name=layanan]').val()) {
                            tarif = array_tarif[key]['cost'][0]['value'];
                            break;
                        }
                    }
                    
                    var data = new FormData();
                    data.append('is_alamat_baru', is_alamat_baru?'Y':'N');
                    data.append('is_simpan_alamat', is_simpan_alamat?'Y':'N');
                    data.append('is_dropship', is_dropship?'Y':'N');
                    data.append('id_alamat', id_alamat);
                    data.append('nama_alamat', nama_alamat);
                    data.append('nama_pengirim', nama_pengirim);
                    data.append('nama_penerima', nama_penerima);
                    data.append('alamat', alamat);
                    data.append('no_hp', no_hp);
                    data.append('id_propinsi', id_propinsi);
                    data.append('nama_propinsi', nama_propinsi);
                    data.append('id_kota', id_kota);
                    data.append('nama_kota', nama_kota);
                    data.append('id_kecamatan', id_kecamatan);
                    data.append('nama_kecamatan', nama_kecamatan);                                
                    data.append('kode_pos', kode_pos);
                    data.append('kurir', kurir);
                    data.append('layanan', layanan);
                    data.append('tarif', tarif);

                    setLoading(true);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/prosesCheckout.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoading(false);
                            if(data['success']) {
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                    try {
                                        window.cpjs.sendToAndroid('true|'+data['message']);
                                    } catch(err) {
                                        console.log(err.message);
                                    }
                                <?php }?>
                                window.location = 'success.php<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>?a<?php }?>';                    
                            } else {
                                var message = data['message'];
                                var msg = '';
                                for(var key in message) {
                                    msg+=message[key]+'<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>\n<?php } else { ?><br /><?php }?>';
                                }
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?> 
                                    window.cpjs.sendToAndroid('false|'+msg);                                
                                <?php } else { ?>                                
                                    setErrorMessage(msg);                        
                                <?php }?>
                            }
                        }, 
                        error: function() {
                            setLoading(false);
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?> 
                                window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');                                
                            <?php } else { ?>        
                                setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                            <?php }?>
                        }
                    });                     
                });
                
                $('#ongkir_prop').on('change', function (e) {
                    loadKota(this.value, 0);
                    loadKecamatan(0, 0);
                    loadLayanan($('#ongkir_kurir').val(), 0, 0);
                });

                $('#ongkir_kota').on('change', function (e) {
                    loadKecamatan(this.value, 0);
                    loadLayanan($('#ongkir_kurir').val(), 0, 0);
                });
                
                $('#ongkir_kecamatan').on('change', function (e) {
                    loadLayanan($('#ongkir_kurir').val(), this.value, 0);
                });
                
                $('#ongkir_kurir').on('change', function (e) {
                    if(this.value==0) {
                        $('#ongkir_layanan').prop('disabled', true);
                    } else {
                        $('#ongkir_layanan').prop('disabled', false);
                        loadLayanan(this.value, $('#ongkir_kecamatan').val(), 0);
                    }
                });
                
                $('#ongkir_layanan').on('change', function (e) {
                    for(var key in array_tarif) {
                        if(array_tarif[key]['service']==this.value) {
                            $('#ongkir_tarif').val(array_tarif[key]['cost'][0]['value']);
                            break;
                        }
                    }
                });
                
                function loadKota(propinsi, kota) {
                    $("#ongkir_kota").empty();
                    $('<option value="0">-- Pilih Kota --</option>').appendTo('#ongkir_kota');
                    
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
                            $("#ongkir_kota").empty();
                            $(data).appendTo('#ongkir_kota');
                        }
                    });    
                }
                                
                function loadKecamatan(kota, kecamatan) {
                    $("#ongkir_kecamatan").empty();
                    $('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#ongkir_kecamatan');
                    
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
                                $("#ongkir_kecamatan").empty();
                                $(data).appendTo('#ongkir_kecamatan');
                            }
                        });
                    }    
                }
                
                function loadLayanan(kurir, kecamatan, layanan) {
                    $('#ongkir_tarif').val(0);            
                    $("#ongkir_layanan").empty();
                    $('<option value="0">-- Pilih Layanan --</option>').appendTo('#ongkir_layanan');
                    array_tarif = Array();
                    if(kecamatan>0 && kurir!='') {
                        var id_kota   = $('[name=kota]').val();
                        var nama_kota = $("#ongkir_kota option[value='"+id_kota+"']").text();
                        
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getLayanan.php',
                            data: { 'kurir': kurir, 'kecamatan': kecamatan, 'berat': '<?php echo $_smarty_tpl->tpl_vars['total_berat']->value;?>
', 'kota': nama_kota},
                            dataType: 'json',
                            success: function(data) {
                                array_tarif = data['topics'];
                                var data = '<option value="0">-- Pilih Layanan --</option>';
                                for(var key in array_tarif) {
                                    data+='<option value="'+array_tarif[key]['service']+'"'+(array_tarif[key]['service']==layanan?' selected="selected"':'')+'>'+array_tarif[key]['description']+' '+(array_tarif[key]['service']!=array_tarif[key]['description']?('('+array_tarif[key]['service']+')'):'')+' - '+array_tarif[key]['cost'][0]['tarif']+'</option>';
                                }
                                $("#ongkir_layanan").empty();
                                $(data).appendTo('#ongkir_layanan');
                            }
                        });
                    }    
                }
                
                <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['propinsi']>0) {?>loadKota('<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['propinsi'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kota'];?>
');<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kota']>0) {?>loadKecamatan('<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kota'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kecamatan'];?>
');<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kurir']!='0'&&$_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kecamatan']>0) {?>loadLayanan('<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kurir'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kecamatan'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['layanan'];?>
');<?php }?>                
            });
        <?php echo '</script'; ?>
>
        
  </body>
</html>
<?php }} ?>
