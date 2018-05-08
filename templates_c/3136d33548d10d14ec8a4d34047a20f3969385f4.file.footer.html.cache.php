<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 10:55:38
         compiled from "D:\www\gomochart\templates\front-end\accecories\includes\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:246495778fc882ce504-15852156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3136d33548d10d14ec8a4d34047a20f3969385f4' => 
    array (
      0 => 'D:\\www\\gomochart\\templates\\front-end\\accecories\\includes\\footer.html',
      1 => 1467690898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246495778fc882ce504-15852156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778fc882e4351_15327323',
  'variables' => 
  array (
    'umum' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778fc882e4351_15327323')) {function content_5778fc882e4351_15327323($_smarty_tpl) {?><div class="footer">
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
                        <h2>CONTACT US</h2>
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
