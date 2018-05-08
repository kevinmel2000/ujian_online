<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-27 07:49:09
         compiled from "..\templates\front-end\galio\checkout.html" */ ?>
<?php /*%%SmartyHeaderCode:17659576e2c88ae7610-22246306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40b26e81f79e8e47f4ed53512bfb623a294acc58' => 
    array (
      0 => '..\\templates\\front-end\\galio\\checkout.html',
      1 => 1466988543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17659576e2c88ae7610-22246306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576e2c88c53d04_28712034',
  'variables' => 
  array (
    'homeurl' => 0,
    'data_user' => 0,
    'as_guest' => 0,
    'data_alamat' => 0,
    'entry' => 0,
    'cartheader' => 0,
    'listpropinsi' => 0,
    'listkurir' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576e2c88c53d04_28712034')) {function content_576e2c88c53d04_28712034($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
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
        
        <div class="main">
            <div class="container">
                
                <div class="row">
                    <div id="alert_error" class="col-sm-12" style="display: none;">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
                
                <div class="checkout">
                    <div class="row">
                    	<div class="col-sm-12">
                            <div class="checkout-step">
                                <div class="checkout-step-item">
                                    <div class="step-title clearfix" data-toggle="collapse" data-target="#checkout-one">
                                        <h2><?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true) {?>Metode Pengiriman<?php } else { ?>Checkout<?php }?></h2>
                                    </div>
                                    <div id="checkout-one" class="collapse in">
                                    	<div class="step-content">
                                            <div class="row">
                                                <?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true||$_smarty_tpl->tpl_vars['as_guest']->value==true) {?>
                                                    <div class="col-sm-4">
                                                        <h4>Alamat Pengiriman</h4>
                                                        <div class="line2 mtb20"></div>
                                                        <?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true) {?>
                                                        <div id="panel_pilih_alamat" class="form-group">
                                                            <label class="control-label">Pakai Alamat <em>*</em></label>
                                                            <select id="pilih_nama_alamat" class="form-control" name="id_alamat">
                                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_alamat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['id_alamat']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_alamat'];?>
</option>
                                                                <?php } ?>
                                                            </select>
                                                            <input type="hidden" name="kode_alamat" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kode_alamat'];?>
" />
                                                        </div>
                                                        
                                                        <div id="panel_nama_alamat" class="form-group" style="display: none;">
                                                            <label class="control-label">Simpan Alamat Sebagai <em>*</em></label>
                                                                <input type="text" name="nama_alamat" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['nama_alamat'];?>
" class="form-control" />
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label"><input type="checkbox" id="checkbox_alamat_baru" name="alamat_baru" value="1" <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['is_alamat_baru']==true) {?>checked<?php }?>> Buat alamat baru.</label>
                                                        </div>
                                                        <?php }?>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Nama <em>*</em></label>
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
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">Layanan <em>*</em></label>
                                                            <select id="ongkir_layanan" name="layanan"  class="form-control">
                                                                <option value="0">-- Pilih Layanan --</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <!-- div class="form-group">
                                                            <label class="control-label">Tarif </label>
                                                            <input type="text" id="ongkir_tarif" name="tarif" value="<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['tarif'];?>
" class="form-control" readOnly="readonly" />                                                        
                                                        </div -->
                                                        
                                                        
                                                        <div class="text-right">
                                                            <p><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>                                            
                                                            <p><button id="btn_checkout" type="button" class="btn btn-default btn-md fwb">CHECKOUT</button></p>
                                                        </div>
                                                    </div>
                                                <?php } else { ?> 
                                                    <div class="col-sm-6">
                                                        <h4>Checkout sebagai tamu atau mendaftar</h4>
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
                                                                <input type="radio" value="register" name="register-type"> Daftar
                                                              </label>
                                                            </div>
                                                        </div>
                                                        <p class="text-primary">Dengan mendaftar akan menghemat waktu!</p>
                                                        <p class="text-primary">Apabila anda mendaftar maka kedepannya dapat:</p>
                                                        <ul class="list-unstyled">
                                                            <li>+  Checkout dengan cepat dan mudah</li>
                                                            <li>+  Melihat histori dan status pemesanan</li>
                                                        </ul>
                                                        <br>
                                                        <p><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>
                                                        <p><button id="btn_checkout" type="button" class="btn btn-danger btn-md btn-continue fwb">CONTINUE</button></p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <h4>Sudah Jadi Pelanggan</h4>
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
                                                            <p><a href="#">Lupa password?</a></p>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-danger btn-md btn-login fwb">LOGIN</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                <?php }?>
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
            var alamat_before   = Array();
            var alamat_baru     = Array();
            var array_tarif     = Array();
            $(function () {                
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
                        alamat_before['nama_penerima'] = $('[name=nama_penerima]').val();
                        alamat_before['alamat'] = $('[name=alamat]').val();
                        alamat_before['no_hp'] = $('[name=no_hp]').val();
                        alamat_before['propinsi'] = $('[name=propinsi]').val();
                        alamat_before['kota'] = $('[name=kota]').val();
                        alamat_before['kecamatan'] = $('[name=kecamatan]').val();
                        alamat_before['kode_pos'] = $('[name=kode_pos]').val();
                        
                        $('[name=nama_alamat]').val(alamat_baru['nama_alamat']);
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
                        alamat_baru['nama_penerima'] = $('[name=nama_penerima]').val();
                        alamat_baru['alamat'] = $('[name=alamat]').val();
                        alamat_baru['no_hp'] = $('[name=no_hp]').val();
                        alamat_baru['propinsi'] = $('[name=propinsi]').val();
                        alamat_baru['kota'] = $('[name=kota]').val();
                        alamat_baru['kecamatan'] = $('[name=kecamatan]').val();
                        alamat_baru['kode_pos'] = $('[name=kode_pos]').val();
                        
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
                        
                        $('[name=nama_penerima]').focus();                        
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
                            $('[name=kode_alamat]').val(alamat['kode_alamat']);
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
                
                $('#btn_checkout').on('click', function (e) {                    
                    setLoading(true);
                    var is_alamat_baru   = $('[name=alamat_baru]').is(':checked');
                    var is_simpan_alamat = $('[name=simpan_alamat]').is(':checked');                    
                    var id_alamat      = $('[name=id_alamat]').val();
                    var kode_alamat    = $('[name=kode_alamat]').val();
                    var nama_alamat    = $('[name=nama_alamat]').val();
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
                    data.append('id_alamat', id_alamat);
                    data.append('kode_alamat', kode_alamat);
                    data.append('nama_alamat', nama_alamat);
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
                                window.location = 'success.php';                    
                            } else {
                                var message = data['message'];
                                var msg = '';
                                for(var key in message) {
                                    console.log(message[key]);
                                    msg+=message[key]+'<br />';
                                }
                                
                                setErrorMessage(msg);                        
                            }
                        }, 
                        error: function() {
                            setLoading(false);
                            setErrorMessage('Kesalahan server. Mohon diulang kembali!');
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
                    loadLayanan(this.value, $('#ongkir_kecamatan').val(), 0);
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
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getLayanan.php',
                            data: { 'kurir': kurir, 'kecamatan': kecamatan },
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
                <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kurir']!=''&&$_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kecamatan']>0) {?>loadLayanan('<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kurir'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['kecamatan'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cartheader']->value['data_ongkir']['layanan'];?>
');<?php }?>                
            });
        <?php echo '</script'; ?>
>
        
  </body>
</html>
<?php }} ?>
