<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-11 11:08:06
         compiled from "D:\www\gomocart\templates\front-end\accecories\includes\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:14465577db6141642b9-74709563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2070f4031deb0dca7376c86a335f0e8c0f9e6f02' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\footer.html',
      1 => 1468210083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14465577db6141642b9-74709563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577db6141b4448_93471366',
  'variables' => 
  array (
    'umum' => 0,
    'data_user' => 0,
    'homeurl' => 0,
    'menu_ps' => 0,
    'entry' => 0,
    'menu_cs' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577db6141b4448_93471366')) {function content_577db6141b4448_93471366($_smarty_tpl) {?><div class="footer">
    <!-- div class="footer-top">
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
    </div --><!-- /.footer-top -->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-title">
                        <h2>KONTAK KAMI</h2>
                    </div>
                    <div class="footer-content">
                        <div class="email add">
                            <p><?php echo $_smarty_tpl->tpl_vars['umum']->value['email'];?>
</p>
                        </div>
                        <div class="phone add">
                            <p><?php echo $_smarty_tpl->tpl_vars['umum']->value['telepon'];?>
</p>
                        </div>
                        <div class="address add">
                            <p><?php echo $_smarty_tpl->tpl_vars['umum']->value['address'];?>
</p>
                        </div>
                        <div class="contact-link"><a href="#" class="btn btn-default">Open in Google Maps</a></div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="footer-title">
                        <h2>AKUN SAYA</h2>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true) {?> 
                                <li><a title="Edit Profil" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/editprofil.php">Edit Profil</a></li>
                                <li><a title="Ganti Password" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/gantipassword.php">Ganti Password</a></li>
                                <li><a title="My Wishlist" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/wishlist/">My Wishlist</a></li>
                                <li><a title="My Cart" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/">My Cart</a></li>
                                <li><a title="Checkout" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/checkout.php">Checkout</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/logout.php" class="logout">Logout</a></li>                                                                            
                            <?php } else { ?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/login.php">Login</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/register.php">Daftar</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="footer-title">
                        <h2>Pembayaran &amp; Pengiriman</h2>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_ps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/page/?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['judul'];?>
</a></li>
                            <?php } ?>
                            <!-- li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Shipping Guide</a></li>
                            <li><a href="#">Locations We Ship To</a></li>
                            <li><a href="#">Estimated Delivery Time</a></li -->
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                        <div class="footer-title">
                        <h2>Layanan Pelanggan</h2>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_cs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/page/?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['judul'];?>
</a></li>
                            <?php } ?>
                            <!-- li><a href="#">Shipping Policy</a></li>
                            <li><a href="#">Compensation First</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">Contact Us</a></li -->
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
                    <div class="copy">Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['umum']->value['judul'];?>
. All Rights Reserved</div>
                </div>
                <div class="col-sm-6">
                    <!-- div class="payment"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/payment.png" alt="" class="img-responsive"></div -->
                </div>
            </div>
        </div>
    </div>
</div><!-- /.footer -->
    <?php }} ?>
