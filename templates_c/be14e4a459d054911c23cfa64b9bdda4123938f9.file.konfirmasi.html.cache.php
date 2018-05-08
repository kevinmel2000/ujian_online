<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-25 18:46:06
         compiled from "..\templates\front-end\accecories\konfirmasi.html" */ ?>
<?php /*%%SmartyHeaderCode:14906578c6fbb231e50-56571494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be14e4a459d054911c23cfa64b9bdda4123938f9' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\konfirmasi.html',
      1 => 1469447160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14906578c6fbb231e50-56571494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578c6fbb3c1a63_88176510',
  'variables' => 
  array (
    'is_android' => 0,
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
<?php if ($_valid && !is_callable('content_578c6fbb3c1a63_88176510')) {function content_578c6fbb3c1a63_88176510($_smarty_tpl) {?><!doctype html>
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
/pembayaran/">Pembayaran</a></li>
                    <li class="active">Konfirmasi Pembayaran</li>
               	</ul>
            </div>
        </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?><div class="main"><?php }?>
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
                
                <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="step-title clearfix" data-toggle="collapse" data-target="#checkout-one">
                            <h2>KONFIRMASI PEMBAYARAN</h2>
                        </div>
                    </div>
                </div>
                <?php }?>
                    
                <div class="row">
                    <form id="submit_form">
                        <div class="col-sm-6">

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
                        </div>
                                
                        <div class="col-sm-6">
                            <div class="form-group">&nbsp;</div>
                            
                            <div class="form-group">
                                <label class="control-label">Upload Bukti Transfer </label>
                                <input id="fileupload" type="file" name="photo" />
                                <p class="help-block"><b>- Maksimal ukuran file 500kb.<br />- Format file harus jpg, png, atau gif.</b></p>
                            </div>
                            <div class="form-group">&nbsp;</div>
                            
                            <div class="buttons-set">
                                <div class="form-group text-center"><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></div>  
                                <button id="btn_konfirmasi" type="button" class="button"><span><span>SUBMIT KONFIRMASI</span></span></button>
                            </div>
                            
                        </div>
                    </form>
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
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>clickSound();<?php }?>
                        
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
/pembayaran/<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>?a<?php }?>';
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                    try {
                                        window.cpjs.sendToAndroid('true|'+data['message']);
                                    } catch(err) {
                                        console.log(err.message);
                                    }
                                <?php }?>
                            } else {
                                var error_message = data['message'];
                                var msg = '';
                                for(var key in error_message) {
                                    msg += error_message[key]+'<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>\n<?php } else { ?><br /><?php }?>';
                                }                                
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                    window.cpjs.sendToAndroid('false|'+msg);
                                <?php } else { ?>
                                    setMessage('error', msg);
                                <?php }?>
                            }
                        }, 
                        error: function() {
                            setLoading(false);
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                            <?php } else { ?>
                                setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                            <?php }?>
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
