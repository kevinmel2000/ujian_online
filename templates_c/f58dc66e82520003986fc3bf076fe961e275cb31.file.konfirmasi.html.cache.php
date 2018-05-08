<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-27 08:18:13
         compiled from "..\templates\front-end\galio\konfirmasi.html" */ ?>
<?php /*%%SmartyHeaderCode:7066576f2f58c0c5d2-59905179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58dc66e82520003986fc3bf076fe961e275cb31' => 
    array (
      0 => '..\\templates\\front-end\\galio\\konfirmasi.html',
      1 => 1466990219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7066576f2f58c0c5d2-59905179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576f2f58cb5438_39982811',
  'variables' => 
  array (
    'homeurl' => 0,
    'data' => 0,
    'konfirmasi' => 0,
    'list_bank' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576f2f58cb5438_39982811')) {function content_576f2f58cb5438_39982811($_smarty_tpl) {?><!doctype html>
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
/pembayaran/">Pembayaran</a></li>
                    <li class="active">Konfirmasi Pembayaran</li>
               	</ul>
            </div>
        </div>
        
        <div class="main">
            <div class="container">
                
                <div id="alert_success" class="row" style="display: none;">
                    <div class="col-sm-6">
                        <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
                                
                <div id="alert_error" class="row" style="display: none;">
                    <div class="col-sm-6">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <form id="submit_form">
                            <div class="step-title clearfix" data-toggle="collapse" data-target="#checkout-one">
                                <h2>KONFIRMASI PEMBAYARAN</h2>
                            </div>

                            <div class="form-group">&nbsp;</div>

                            <div class="form-group">
                                <label class="control-label">Kode Pemesanan <em>*</em></label>
                                <input type="text" name="kode_pemesanan" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['kode_pemesanan']!='') {
echo $_smarty_tpl->tpl_vars['data']->value['kode_pemesanan'];
} else {
echo $_smarty_tpl->tpl_vars['konfirmasi']->value['kode_pemesanan'];
}?>" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Bank Tujuan <em>*</em></label>
                                <select id="ongkir_prop" name="bank_tujuan" class="form-control">
                                    <option value="0">-- Pilih Bank Tujuan --</option>
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_bank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['data']->value['id_bank_tujuan']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['no_rekening'];?>
 - an. <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pemilik_rekening'];?>
)</option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Jumlah Transfer <em>*</em></label>
                                <input type="text" name="jumlah_transfer" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['jumlah_transfer']!='') {
echo $_smarty_tpl->tpl_vars['data']->value['jumlah_transfer'];
} else {
echo $_smarty_tpl->tpl_vars['konfirmasi']->value['total'];
}?>" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Nama Bank Pengirim <em>*</em></label>
                                <input type="text" name="nama_bank_pengirim" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_bank_pengirim'];?>
" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Nama Pemilik Rekening <em>*</em></label>
                                <input type="text" name="nama_pemilik_rekening" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_pemilik_rekening'];?>
" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Penjelasan </label>
                                <textarea name="penjelasan" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['penjelasan'];?>
</textarea>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Upload Bukti Transfer </label>
                                <input id="fileupload" type="file" name="photo" />
                                <p class="help-block"><b>- Maksimal ukuran file 500kb.<br />- Format file harus jpg, png, atau gif.</b></p>
                            </div>

                            <div class="text-right">
                                <p><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>                                            
                                <p><button id="btn_konfirmasi" type="button" class="btn btn-default btn-md fwb">SUBMIT KONFIRMASI</button></p>
                            </div>
                        </form>
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
                        $('#btn_konfirmasi').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_konfirmasi').show();
                    }
                }
                
                var files;
                $('#fileupload').on('change', function(event) {
                    files = event.target.files;
                });

                // Change this to the location of your server-side upload handler:
                $('#btn_konfirmasi').on('click', function (e) {
                
                    setLoading(true);
                    var $inputs = $('#submit_form :input');
                    var data = new FormData();
                    $inputs.each(function() {
                        data.append(this.name, $(this).val());
                    });
                    if(files!==undefined) {
                        $.each(files, function(key, value) {
                            data.append(key, value);
                        });
                    }
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pembayaran/prosesKonfirmasi.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoading(false);
                            if(data['success']) {
                                window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pembayaran/';
                            } else {
                                var error_message = data['message'];
                                var msg = '';
                                for(var key in error_message) {
                                    msg += error_message[key]+'<br />';
                                }                                
                                setMessage('error', msg);
                            }
                        }
                    });                    
                });
                
                <?php if ($_smarty_tpl->tpl_vars['success_message']->value!='') {?> setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>
'); <?php }?>                    
            });
        <?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
