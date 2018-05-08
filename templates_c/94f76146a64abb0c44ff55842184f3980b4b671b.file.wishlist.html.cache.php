<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 08:16:07
         compiled from "..\templates\front-end\accecories\wishlist.html" */ ?>
<?php /*%%SmartyHeaderCode:17145577aeea1aed002-62485284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94f76146a64abb0c44ff55842184f3980b4b671b' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\wishlist.html',
      1 => 1467681366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17145577aeea1aed002-62485284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577aeea1bfd685_16080735',
  'variables' => 
  array (
    'homeurl' => 0,
    'wishlistdetail' => 0,
    'entry' => 0,
    'entry_ukuran' => 0,
    'entry_warna' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577aeea1bfd685_16080735')) {function content_577aeea1bfd685_16080735($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                    <li class="active">My Wishlist</li>
               	</ul>
            </div>
        </div>
        
        <div class="main mt30">
        	<div class="container">
                <div class="row">
                	<div class="col-sm-3">
                    	<div class="block block-layered-nav">
                            <div class="block-content">
                                <h2>My Account</h2>
                                <ol>
                                    <li><a href="#">Account Dashboard</a></li>
                                    <li><a href="#">Account Information</a></li>
                                    <li><a href="#">Address Book</a></li>
                                    <li><a href="#">My Orders</a></li>
                                    <li><a href="#">Billing Agreements</a></li>
                                    <li><a href="#">Recurring Profiles</a></li>
                                    <li><a href="#">My Product Reviews</a></li>
                                    <li><a href="#">My Tags</a></li>
                                    <li class="active"><a href="#">My Wishlist</a></li>
                                    <li><a href="#">My Applications</a></li>
                                    <li><a href="#">Newsletter Subscriptions</a></li>
                                    <li><a href="#">My Downloadable Products</a></li>
                                </ol>
                            </div>
                        </div><!-- /.block - Comments -->
                    </div>
                    <div class="col-sm-9">
                    	<div class="page-title">
                            <h1>My Wistlist</h1>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['wishlistdetail']->value)>0) {?>
                        <div class="table-responsive">
                            <table class="table custom-table">
                                <thead>
                                    <tr class="first last">
                                        <th>Gambar</th>
                                        <th>Detail Produk</th>
                                        <th>Tambah ke Keranjang</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlistdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                                    <tr>
                                        <td><a class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                            <img alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['foto1_produk'];?>
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
                                            
                                            <div class="description std">
                                            	<p><?php echo $_smarty_tpl->tpl_vars['entry']->value['penjelasan'];?>
</p>
                                            </div>
                                        </td>
                                               
                                        <td class="text-center">
                                            <p class="grandtotal"><?php if ($_smarty_tpl->tpl_vars['entry']->value['harga_spesial']!='') {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_spesial'];
} elseif ($_smarty_tpl->tpl_vars['entry']->value['harga_jual']!='') {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual'];
}?></p>
                                            <div class="form-group">
                                            	<div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn" type="button">-</button>
                                                    </span>
                                                    <input type="text" name="qty" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
">
                                                    <span class="input-group-btn">
                                                        <button class="btn" type="button">+</button>
                                                    </span>
                                                </div>                                                
                                            </div>
                                            <div class="form-group">
                                            	<div style="padding-bottom: 5px;"><button id_produk="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-default btn-cart" style="width: 100%;">Add to cart</button></div>
                                                <div style="padding-bottom: 5px;"><button id_produk="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger btn-md" style="width: 100%;">Update Wishlist</button></div>
                                            </div>                                            
                                        </td>
                                        <td class="text-center"><a class="btn-remove" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/wishlist/removefromwishlist.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><span class="fa fa-trash-o"></span></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php } else { ?>
                        <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;Tidak ada data wishlist!</span></div>                            
                        
                        <?php }?>
                        <!-- div class="text-right">
                            <button type="button" class="btn btn-default btn-md">Tambah Semua ke Keranjang</button>
                            <button type="submit" class="btn btn-danger btn-md">Update Wishlist</button>
                        </div -->
                    </div>
                </div>
            </div>
        </div><!-- /.main -->
        
        <div class="brands">
            <div class="container">
                <div class="title-group1">
                    <h2>popular brand</h2>
                </div>
                <div id="brands" class="owl-container">
                    <div class="owl">
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand5.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand4.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand3.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/brand/logo_brand3.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div><!-- /#brands -->
            </div>
        </div><!-- /.brands -->
        
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                	<div class="row">
                    	<div class="col-md-4 col-sm-4 hidden-sm hidden-xs">
                        	<div class="subscribe">
                                <div class="subscribe-inner">
                                    <h3>Sign up for newsletter</h3>
                                    Duis autem vel eum iriureDuis autem vel eum
                                </div>
                            </div>
                        </div>
                    	<div class="col-md-5 col-sm-8">
                        	<form method="post" class="form-inline form-subscribe">
                                <div class="form-group">
                                	<input type="text" class="form-control" id="newsletter" name="email">
                                </div>
                                <button class="btn btn-danger" title="Subscribe" type="submit">Subscribe</button>
        					</form>
                        </div>
                    	<div class="col-md-3 col-sm-4">
                        	<ul class="social">
                                <li><a href="#" class="face">face</a></li>
                                <li><a href="#" class="google">google</a></li>
                                <li><a href="#" class="twitter">twitter</a></li>
                                <li><a href="#" class="youtube">youtube</a></li>
                                <li><a href="#" class="linkedin">linkedin</a></li>
                            </ul>
                        </div>
                    </div>
           		</div>
            </div><!-- /.footer-top -->
            <div class="footer-middle">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>contact us</h2>
                            </div>
                            <div class="footer-content">
                            	<div class="email add">
                            		<p>Support@plazathemes.com</p>
                            	</div>
                            	<div class="phone add">
                            		<p>(800) 0123 456 789</p>
                            	</div>
                            	<div class="address add">Address: 
                            		<p>1234 - Bandit Tringi lAliquam Vitae. New York</p>
                            	</div>
                            	<div class="contact-link"><a href="#" class="btn btn-default">Open in Google Maps</a></div>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>MY ACCOUNT</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>Payment &amp; Shipping</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">Locations We Ship To</a></li>
                                    <li><a href="#">Estimated Delivery Time</a></li>
                                </ul>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>Customer Service</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Shipping Policy</a></li>
                                    <li><a href="#">Compensation First</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-6">
                        	<div class="copy">Copyright &copy; 2015 Plazathemes. All Rights Reserved</div>
                        </div>
                    	<div class="col-sm-6">
                        	<div class="payment"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/payment.png" alt="" class="img-responsive"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.footer -->
        
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
		<!-- Custom Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
