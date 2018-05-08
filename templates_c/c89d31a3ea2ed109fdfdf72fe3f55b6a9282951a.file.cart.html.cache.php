<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 20:19:29
         compiled from "..\templates\front-end\accecories\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:1069657790fdd972152-21599125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c89d31a3ea2ed109fdfdf72fe3f55b6a9282951a' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\cart.html',
      1 => 1467551967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069657790fdd972152-21599125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57790fdda93804_72882826',
  'variables' => 
  array (
    'homeurl' => 0,
    'cartdetail' => 0,
    'no' => 0,
    'entry' => 0,
    'entry_ukuran' => 0,
    'entry_warna' => 0,
    'cartheader' => 0,
    'tpl_dir' => 0,
    'cart_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57790fdda93804_72882826')) {function content_57790fdda93804_72882826($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                    <li class="active">Shopping Cart</li>
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
           
                <div class="cart">
                    
                    <div class="table-responsive">
                	<table id="tblCart" class="table custom-table">
                            <thead>
                                <tr class="first last">
                                    <th width="5%"><div style="text-align: center;">Remove</div></th>
                                    <th width="10%"><div style="text-align: center;">Image</div></th>
                                    <th width="25%"><div style="text-align: center;">Product Name</div></th>
                                    <!-- th>Edit</th -->
                                    <th width="20%"><div style="text-align: center;">Quantity</div></th>
                                    <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                    <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <tr>
                                    <td class="text-center"><a class="btn-remove" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/removefromcart.php?index=<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
"><span class="fa fa-trash-o"></span></a></td>
                                    <td><a class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                	<img alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
&width=70&height=70">
                                    </a></td>
                                    <td>
                                	<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</a>
                                        <?php if (count($_smarty_tpl->tpl_vars['entry']->value['list_ukuran'])>0) {?>
                                        <div class="text-muted">Ukuran: 
                                            <select class="form-control" name="ukuran">
                                            <?php  $_smarty_tpl->tpl_vars['entry_ukuran'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_ukuran']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['list_ukuran']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_ukuran']->key => $_smarty_tpl->tpl_vars['entry_ukuran']->value) {
$_smarty_tpl->tpl_vars['entry_ukuran']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry_ukuran']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['ukuran']==$_smarty_tpl->tpl_vars['entry_ukuran']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry_ukuran']->value;?>
</option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <?php }?>
                                        <?php if (count($_smarty_tpl->tpl_vars['entry']->value['list_warna'])>0) {?>
                                        <div class="text-muted">Warna: 
                                            <select class="form-control" name="warna">
                                            <?php  $_smarty_tpl->tpl_vars['entry_warna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_warna']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['list_warna']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_warna']->key => $_smarty_tpl->tpl_vars['entry_warna']->value) {
$_smarty_tpl->tpl_vars['entry_warna']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry_warna']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['warna']==$_smarty_tpl->tpl_vars['entry_warna']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry_warna']->value;?>
</option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <?php }?>
                                    </td>
                                    <!-- td class="text-center"><a href="#">Edit</a></td -->
                                    <td class="qty">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn" type="button">-</button>
                                            </span>
                                            <input type="text" name="qty" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
">
                                            <span class="input-group-btn">
                                                <button class="btn" type="button">+</button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </td>
                        		
                                    <td align="right" class="subtotal"><?php echo $_smarty_tpl->tpl_vars['entry']->value['subtotal'];?>
</td>
                                    <td align="right" class="grandtotal"><?php echo $_smarty_tpl->tpl_vars['entry']->value['grandtotal'];?>
</td>
                                </tr>
                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                            <?php } ?>
                    	</tbody>
                    </table>
                    </div>
                    <div class="text-right">
                    	<a href="#" class="btn btn-default btn-md">LANJUTKAN BELANJA</a>
                        <button type="submit" class="btn btn-danger btn-md">PERBARUI KERANJANG</button>
                    </div>
                    <div class="line2"></div>
                    <div class="row">
                    	<div class="col-sm-4"></div>
                    	<div class="col-sm-4">
                            <form id="form_kupon" method="post" action="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/addvoucher.php">
                                <h4>KODE VOUCHER</h4>
                                <p class="text-muted">Masukan kode voucher untuk mendapatkan potongan</p>
                                <div class="form-group">
                                    <label class="control-label">&nbsp;</label>
                                    <input name="kode_kupon" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button id="btn_kupon" type="submit" class="btn btn-default btn-md">MASUKAN VOUCHER</button>
                                </div>
                            </form>
                        </div>
                    	<div class="col-sm-4">
                        	<table class="table table-cart-total">
                            	<tr>
                                    <td>Subtotal:</td>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['grandtotal'];?>
</td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['ongkir']!='') {?>
                                <tr>
                                    <td>Ongkir:</td>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['ongkir'];?>
</td>
                                </tr>
                                <?php }?>                                
                                <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['voucher']!='') {?>
                                <tr>
                                    <td>Diskon:</td>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['voucher'];?>
</td>
                                </tr>
                                <?php }?>
                            	<tr>
                                    <td>Grandtotal:</td>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['total'];?>
</td>
                                </tr>
                            </table>
                            <div class="text-right">
                                <p><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></p>                                            
                            	<p><button id="btn_checkout" type="button" class="btn btn-default btn-md fwb">CHECKOUT</button></p>                                
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
                
                function setErrorMessage(message) {
                    $('#alert_error .alert span').text(message);
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
            
                $('#btn_checkout').on('click', function (e) {                    
                    setLoading(true);
                    if($("#tblCart tr").length<=1) {
                        setLoading(false);
                        setErrorMessage('Anda belum memasukkan barang yang akan dibeli.'); 
                    } else {
                        window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/checkout.php';
                    }
                });
                
                <?php if (count($_smarty_tpl->tpl_vars['cart_error']->value)>0) {?>
                    var error_message = '';
                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                        error_message += '<?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
';
                    <?php } ?>
                    setErrorMessage(error_message);                    
                <?php }?>
                
            });
        <?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
