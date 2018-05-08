<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 14:13:38
         compiled from "D:\www\gomochart\templates\front-end\boxed\includes\header.html" */ ?>
<?php /*%%SmartyHeaderCode:282825776156041f063-49325866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f85a2f0d259047642a71d5763a396a80ab290a' => 
    array (
      0 => 'D:\\www\\gomochart\\templates\\front-end\\boxed\\includes\\header.html',
      1 => 1467530015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282825776156041f063-49325866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5776156049e298_03973185',
  'variables' => 
  array (
    'umum' => 0,
    'data_user' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
    'category' => 0,
    'entry' => 0,
    'cartheader' => 0,
    'cartdetail' => 0,
    'no' => 0,
    'main_row' => 0,
    'row' => 0,
    'col' => 0,
    'sub_entry' => 0,
    'menu_top' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5776156049e298_03973185')) {function content_5776156049e298_03973185($_smarty_tpl) {?><div class="header">
            <div class="container">
                <div class="topbar">
                    <div class="topbar-left">
                        <ul class="topbar-nav clearfix">
                            <li><span class="phone"><?php echo $_smarty_tpl->tpl_vars['umum']->value['telepon'];?>
&nbsp;</span></li>
                            <li><span class="email"><?php echo $_smarty_tpl->tpl_vars['umum']->value['email'];?>
&nbsp;</span></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                    	<ul class="topbar-nav clearfix">
                            <?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true) {?> 
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/logout.php" class="logout">Logout</a></li>
                                <li class="dropdown">
                                    <a href="#" class="account dropdown-toggle" data-toggle="dropdown">My Account</a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a title="My Account" href="account.html">My Account</a></li>
                                        <li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>
                                        <li><a title="My Cart" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/">My Cart</a></li>
                                        <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                                        <li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/login.php" class="login">Login</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/register.php" class="register">Daftar</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div><!-- /.topbar -->
                <div class="header-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/logo.png" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <div class="support-client">
                                <!-- div class="row">
                                    <div class="col-sm-4">
                                        <div class="box-container time">
                                            <div class="box-inner">
                                                <h2>working time</h2>
                                                <p>Mon- Sun: 8.00 - 18.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>Free shipping</h2>
                                                <p>On order over $199</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>Money back 100%</h2>
                                                <p>Within 30 Days after delivery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div -->
                            </div><!-- /.support-client -->
                            <form class="form-search">
                                <input type="text" class="input-text" name="q" id="search" placeholder="Search products...">
                                <div class="dropdown">
                                    <button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                            </form>
                            <div class="mini-cart">
                                <div class="top-cart-title">
                                    <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown">
                                        your cart
                                        <span class="price"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['grandtotal'];?>
</span>
                                    </a>
                                    <?php if (count($_smarty_tpl->tpl_vars['data_user']->value['cart'])>0) {?>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="cart-listing">
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                            <div class="media">
                                                <div class="media-left"><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
&width=70&height=70" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" class="img-responsive"></a></div>
                                                <div class="media-body">
                                                        <button id_item_cart="<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" type="button" class="remove-cart-item hapus_item_cart" >&times;</button>
                                                        <h4><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</h4>
                                                    <div class="mini-cart-qty">Qty: <?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
</div>
                                                    <div class="mini-cart-price"><?php echo $_smarty_tpl->tpl_vars['entry']->value['grandtotal'];?>
</div>
                                                </div>
                                            </div>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                            <?php } ?>

                                        </div><!-- /.cart-listing -->
                                        <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['ongkir']!='') {?><div class="mini-cart-subtotal">Ongkir: <span class="price"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['ongkir'];?>
</span></div><?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['cartheader']->value['voucher']!='') {?><div class="mini-cart-subtotal">Voucher: <span class="price"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['voucher'];?>
</span></div><?php }?>
                                        <div class="mini-cart-subtotal">Total: <span class="price"><?php echo $_smarty_tpl->tpl_vars['cartheader']->value['total'];?>
</span></div>
                                        <div class="checkout-btn">
                                                <a href="#" class="btn btn-default btn-md fwb">CHECK OUT</a>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3>Category</h3></div>
                                    <div class="mega-menu-category">
                                        <ul class="nav">
                                            <?php $_smarty_tpl->tpl_vars["main_row"] = new Smarty_variable(1, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                            <li<?php if ($_smarty_tpl->tpl_vars['main_row']->value>8) {?> class="more-menu"<?php } elseif (count($_smarty_tpl->tpl_vars['entry']->value['sub_category'])==0) {?> class="nosub"<?php }?>>
                                                <?php $_smarty_tpl->tpl_vars["main_row"] = new Smarty_variable($_smarty_tpl->tpl_vars['main_row']->value+1, null, 0);?>
                                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</a>
                                                <?php if (count($_smarty_tpl->tpl_vars['entry']->value['sub_category'])>0) {?>
                                                <div class="wrap-popup column<?php echo $_smarty_tpl->tpl_vars['entry']->value['column_sub_category'];?>
">
                                                    <div class="popup">
                                                        <div class="row">
                                                            <?php $_smarty_tpl->tpl_vars["row"] = new Smarty_variable(1, null, 0);?>
                                                            <?php $_smarty_tpl->tpl_vars["col"] = new Smarty_variable(1, null, 0);?>
                                                            <?php  $_smarty_tpl->tpl_vars['sub_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['sub_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_entry']->key => $_smarty_tpl->tpl_vars['sub_entry']->value) {
$_smarty_tpl->tpl_vars['sub_entry']->_loop = true;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['row']->value==1) {?><div class="col-md-3<?php if ($_smarty_tpl->tpl_vars['col']->value>1) {?> has-sep<?php }?>">
                                                                    <ul class="nav"><?php }?>
                                                                        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['sub_entry']->value['nama'];?>
</a></li>
                                                                        <?php $_smarty_tpl->tpl_vars["row"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value+1, null, 0);?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value==$_smarty_tpl->tpl_vars['entry']->value['row_per_column_sub_category']+1) {
$_smarty_tpl->tpl_vars["col"] = new Smarty_variable($_smarty_tpl->tpl_vars['col']->value+1, null, 0);
$_smarty_tpl->tpl_vars["row"] = new Smarty_variable(1, null, 0);?></ul>
                                                                </div><?php }?>
                                                            <?php } ?>                                                            
                                                            <?php if ($_smarty_tpl->tpl_vars['row']->value>1) {?></ul>
                                                            </div><?php }?>                                                            
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                                <?php }?>
                                            </li>
                                            <?php } ?>

                                            <?php if (count($_smarty_tpl->tpl_vars['category']->value)>8) {?><li class="view-more"><a href="#">More category</a></li><?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul class="menu clearfix visible-lg visible-md">
                                <li class="active"><a href="#">Home</a></li>
                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h2 class="navbar-brand visible-xs">Menu</h2>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Desktop PC</a></li>
                                        <li><a href="#">Notebook</a></li>
                                        <li><a href="#">Gaming</a></li>
                                        <li><a href="#">Mouse &amp; Keyboard</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Walkera</a></li>
                                        <li><a href="#">Fpv System &amp; Parts</a></li>
                                        <li><a href="#">RC Cars &amp; Parts</a></li>
                                        <li><a href="#">Helicopters &amp; Part</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>									<ul class="dropdown-menu">
                                        <li><a href="#">Accessories for iPhone</a></li>
                                        <li><a href="#">Accessories for iPad</a></li>
                                        <li><a href="#">Accessories for Tablet PC</a></li>
                                        <li><a href="#">Tablet PC</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Batteries &amp; Chargers</a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div><!-- /.header-bottom -->
            </div><!-- /.container -->
        </div><!-- /.header --><?php }} ?>
