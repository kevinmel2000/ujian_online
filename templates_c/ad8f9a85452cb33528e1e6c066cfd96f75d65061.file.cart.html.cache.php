<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-30 12:12:35
         compiled from "..\templates\front-end\accecories\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:26559577efb8c47e561-38672797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad8f9a85452cb33528e1e6c066cfd96f75d65061' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\cart.html',
      1 => 1469855553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26559577efb8c47e561-38672797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577efb8c6f6e11_71847923',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'cartdetail' => 0,
    'no' => 0,
    'entry' => 0,
    'entry_ukuran' => 0,
    'entry_warna' => 0,
    'tpl_dir' => 0,
    'cartheader' => 0,
    'cart_error' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577efb8c6f6e11_71847923')) {function content_577efb8c6f6e11_71847923($_smarty_tpl) {?><!doctype html>
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
                    <li class="active">Shopping Cart</li>
               	</ul>
            </div>
        </div>
        <?php }?>
        
        <div class="main">           
            <div class="container">                
                <div class="row">
                    <div id="alert_success" class="col-sm-12" style="display: none;">
                        <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                    
                    <div id="alert_error" class="col-sm-12" style="display: none;">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
           
                
                <div id="no_item_message" <?php if (count($_smarty_tpl->tpl_vars['cartdetail']->value)>0) {?>style="display: none;"<?php }?> class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger text-center"><span style="font-size: 14px;">Keranjang belanja masih kosong.</span></div>                            
                    </div>
                </div>
                
                
                <div class="cart">                    
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
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
                                    <td class="text-center"><input type="hidden" name="no" value="<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" /><a class="btn-remove" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
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
                                                <button class="btn btn_minus" type="button">-</button>
                                            </span>
                                            <input type="text" name="jumlah" class="form-control jumlah" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
">
                                            <span class="input-group-btn">
                                                <button class="btn btn_plus" type="button">+</button>
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
                    <?php } else { ?>
                    <div class="row">                        
                        <div class="container">                                
                            <div class='sepecialoffer-item item'>
                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <div id="item_no_<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="item-inner <?php if ($_smarty_tpl->tpl_vars['no']->value==0) {?>first<?php }?> last item_produk">
                                    <input type="hidden" name="no" value="<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" />
                                    <div class="images-container" style="margin-top: 10px;">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
&width=70&height=70" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" />
                                    </div>

                                    <div class="des-container">
                                        <h2 class="product-name"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
&nbsp;<img id="i_loading_delete_<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="col-right" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /><a id="btn_delete_<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="btn-remove col-right hapus" href="#" id_delete="<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
"><span class="fa fa-trash-o"></span></a></h2>
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

                                        <div class="text-muted">Qty:
                                            <div class="input-group qty">
                                                <span class="input-group-btn">
                                                    <button class="btn btn_minus" type="button">-</button>
                                                </span>
                                                <input type="text" name="jumlah" class="form-control jumlah" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
">
                                                <span class="input-group-btn">
                                                    <button class="btn btn_plus" type="button">+</button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="text-muted">  
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price grandtotal"><?php echo $_smarty_tpl->tpl_vars['entry']->value['subtotal'];?>
</span>
                                                </p>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                <?php } ?>
                            </div>                            
                        </div>
                    </div>
                    <?php }?>
                    
                    <div class="row">
                        <div class="col-sm-8">&nbsp;</div>
                        <div class="col-sm-4">
                            <div class="row">
                                
                                <?php if (count($_smarty_tpl->tpl_vars['cartdetail']->value)>0) {?>
                                <div class="col-sm-12 form-group">
                                    <div class="form-group text-center"><img id="i_loading_update_cart" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></div>  
                                    <button id="update_cart" type="submit" class="form-control btn btn-danger btn-md">UPDATE CART</button>
                                </div>
                                <?php }?>
                                
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                                <div class="col-sm-12 form-group">
                                    <button id="lanjut_belanja" type="button" class="form-control btn btn-default btn-md">KEMBALI BELANJA</button>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>           
                    
                    <div class="line2"></div>
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <form id="form_kupon" method="post" action="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/addvoucher.php<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>?a<?php }?>">
                                <div class="form-group">
                                    <h4>KODE VOUCHER BELANJA</h4>
                                    <p class="text-muted">Masukan kode <b><i>voucher belanja</i></b> untuk mendapatkan potongan</p>
                                    <input name="kode_kupon" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button id="btn_kupon" type="submit" class="form-control btn btn-default btn-md">MASUKAN VOUCHER</button>
                                </div>
                                <div class="form-group">
                                    <table id="tblCart" class="table custom-table">
                                        <tbody>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartheader']->value['list_voucher']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                            <tr><td><h4><a class="btn-remove" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/removevoucher.php?index=<?php echo $_smarty_tpl->tpl_vars['no']->value;
if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>&a<?php }?>"><span class="fa fa-trash-o"></span></a>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
 (<?php if ($_smarty_tpl->tpl_vars['entry']->value['tipe_voucher']=='nominal') {?>Rp. <?php }
echo $_smarty_tpl->tpl_vars['entry']->value['nominal'];
if ($_smarty_tpl->tpl_vars['entry']->value['tipe_voucher']=='persentase') {?>%<?php }?>)</h4></td></tr>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                
                                </div>
                            </form>                            
                        </div>
                        <div class="col-sm-4">&nbsp;</div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <table class="table table-cart-total">
                                    <tr>
                                        <td>Subtotal:</td>
                                        <td class="text-right"><span id="grandtotal"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['grandtotal'];?>
</span></td>
                                    </tr>
                                    <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['ongkir']!='') {?>
                                    <tr>
                                        <td>Ongkir:</td>
                                        <td class="text-right"><span id="ongkir"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['ongkir'];?>
</span></td>
                                    </tr>
                                    <?php }?>                                
                                    <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['voucher']!='') {?>
                                    <tr>
                                        <td>Diskon:</td>
                                        <td class="text-right"><span id="voucher"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['voucher'];?>
</span></td>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                        <td>Grandtotal:</td>
                                        <td class="text-right"><span id="total"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['total'];?>
</span></td>
                                    </tr>
                                </table>
                            </div>
                            <?php if (count($_smarty_tpl->tpl_vars['cartdetail']->value)>0) {?>
                            <div class="form-group">
                                <div class="form-group text-center"><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></div>  
                                <button id="btn_checkout" type="submit" class="btn btn-default btn-md form-control">CHECKOUT</button>
                            </div>
                            <?php }?>
                        </div>                        
                    </div>
                </div>                
            </div>
        </div><!-- /.main -->
        
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
            var total_item = <?php echo count($_smarty_tpl->tpl_vars['cartdetail']->value);?>
;
            
            $(function () {
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
                
                function setSuccessMessage(message) {
                    $('#alert_success .alert span').html(message);
                    $('#alert_success').show('slow');
                    setTimeout(function() {
                        $('#alert_success').hide('slow');
                    }, 5000);
                    $("body, html").animate({ 
                        scrollTop: $('.container').offset().top 
                    }, 600);
                }
                
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
                
                function setLoadingUpdateCart(isLoading) {
                    if(isLoading) {
                        $('#i_loading_update_cart').show();
                        $('#update_cart').hide();
                        $('#lanjut_belanja').hide();                        
                    } else {
                        $('#i_loading_update_cart').hide();
                        $('#update_cart').show();                    
                        $('#lanjut_belanja').show();                        
                    }
                }
            
                $('#lanjut_belanja').on('click', function (e) {                    
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
';                    
                });
        
                $('#update_cart').on('click', function (e) {
                    clickSound();                    
                    
                    var detail = ''; 
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                        $(".item_produk").each(function() {
                            console.log('adad');
                            var no     = $(this).find('[name=no]').val();
                            var ukuran = $(this).find('[name=ukuran]').val();                        
                            var warna  = $(this).find('[name=warna]').val();                        
                            var jumlah = $(this).find('[name=jumlah]').val();

                            if(no!=undefined) {
                                detail+=(detail==''?'':'\n')+no+'\t'+(ukuran!=undefined?ukuran:'')+'\t'+(warna!=undefined?warna:'')+'\t'+jumlah.replace(",", "");
                            }
                        });
                    <?php } else { ?>
                        var row = 0;
                        $("#tblCart tr").each(function() {
                            if(row>0) {
                                var no     = $(this).find('[name=no]').val();
                                var ukuran = $(this).find('[name=ukuran]').val();                        
                                var warna  = $(this).find('[name=warna]').val();                        
                                var jumlah = $(this).find('[name=jumlah]').val();

                                if(no!=undefined) {
                                    detail+=(detail==''?'':'\n')+no+'\t'+(ukuran!=undefined?ukuran:'')+'\t'+(warna!=undefined?warna:'')+'\t'+jumlah.replace(",", "");
                                }
                            } 
                            row++;
                        });
                    <?php }?>
                        
                    //console.log(detail);
                    var data = new FormData();
                    data.append('detail', detail);
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                        data.append('method', 'json');
                    <?php }?>
                    setLoadingUpdateCart(true);
                    $.ajax({
                        type: 'POST',
                        url: 'updatecart.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoadingUpdateCart(false);
                            if(data['success']) {
                                window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>?a<?php }?>';
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                    window.cpjs.sendToAndroid('true|'+data['message']);                                
                                <?php }?>
                            } else {
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                    window.cpjs.sendToAndroid('false|'+data['message']);                                
                                <?php } else { ?>
                                    setErrorMessage(data['message']); 
                                <?php }?>
                            }
                        }, 
                        error: function() {
                            setLoadingUpdateCart(false);
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');                                
                            <?php } else { ?>
                                setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                            <?php }?>
                        }
                    }); 
                });
            
                $('#btn_checkout').on('click', function (e) {                    
                    clickSound();
                    
                    setLoading(true);
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                        if($("#tblCart tr").length<=1) {
                            setLoading(false);
                            setErrorMessage('Anda belum memasukkan barang yang akan dibeli.'); 
                        } else {
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/checkout.php';
                        }
                    <?php } else { ?>
                        window.cpjs.goToCheckout();
                    <?php }?>
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
                
                
                $('.hapus').on('click', function (e) {   
                    clickSound();
                    
                    var index = this.getAttribute('id_delete');
                    
                    $('#btn_delete_'+index).hide();
                    $('#i_loading_delete_'+index).show();
                    
                    var data = new FormData();
                    data.append('method', '<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>json<?php }?>');
                    
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/removefromcart.php?index='+index,
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            
                            if(data['success']) {
                                window.cpjs.sendToAndroid('true|'+data['message']);
                                $('#item_no_'+index).remove();
                                $('#grandtotal').html(data['grandtotal']);
                                $('#voucher').html(data['voucher']);
                                $('#ongkir').html(data['ongkir']);
                                $('#total').html(data['total']);
                                
                                total_item = data['total_item'];
                                if(data['total_item']==0) {
                                    $('#no_item_message').show();                                
                                    $('#btn_checkout').hide();
                                    $('#update_cart').hide();
                                }
                                
                            } else {
                                window.cpjs.sendToAndroid('false|'+data['message']);
                                $('#btn_delete_'+index).show();
                                $('#i_loading_delete_'+index).hide();
                            }
                        }, 
                        error: function() {
                            window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                            $('#btn_delete_'+index).show();
                            $('#i_loading_delete_'+index).hide();
                        }
                    });
                });
                    
                $('.btn_minus').on('click', function (e) {   
                    clickSound();
                    var element = $(this).closest('.input-group');
                    var jumlah = element.find('[name=jumlah]');
                    var qty = eval(jumlah.val())-1;
                    
                    jumlah.val(qty>0?qty:1);
                });
                
                $('.btn_plus').on('click', function (e) {                    
                    clickSound();
                    var element = $(this).closest('.input-group');
                    var jumlah = element.find('[name=jumlah]');
                    var qty = eval(jumlah.val())+1;
                    
                    jumlah.val(qty);
                });
                
                <?php if ($_smarty_tpl->tpl_vars['success_message']->value!='') {?>setSuccessMessage('<?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>
');<?php }?>
            });
        <?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
