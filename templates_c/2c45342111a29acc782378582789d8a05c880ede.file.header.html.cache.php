<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-05 06:20:17
         compiled from "D:\www\sertifikat_online\templates\front-end\accecories\includes\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1844157a3cdb1ece1a2-09795033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c45342111a29acc782378582789d8a05c880ede' => 
    array (
      0 => 'D:\\www\\sertifikat_online\\templates\\front-end\\accecories\\includes\\header.html',
      1 => 1470280484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844157a3cdb1ece1a2-09795033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'umum' => 0,
    'data_user' => 0,
    'homeurl' => 0,
    'total_all_notif' => 0,
    'total_count_items' => 0,
    'total_new_pesanan' => 0,
    'total_new_message' => 0,
    'category' => 0,
    'entry' => 0,
    'cartheader' => 0,
    'cartdetail' => 0,
    'no' => 0,
    'page_salected' => 0,
    'main_row' => 0,
    'row' => 0,
    'col' => 0,
    'sub_entry' => 0,
    'menu_top' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a3cdb2117911_30859806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a3cdb2117911_30859806')) {function content_57a3cdb2117911_30859806($_smarty_tpl) {?><div class="header">
    <div class="topbar">
        <div class="container">
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
                            <a href="#" class="account dropdown-toggle" data-toggle="dropdown">Profil Saya <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['total_all_notif']->value;?>
</span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a title="Edit Profil" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/editprofil.php">Edit Profil</a></li>
                                <li><a title="Ganti Password" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/gantipassword.php">Ganti Password</a></li>
                                <li><a title="My Wishlist" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/wishlist/">Wishlist</a></li>
                                <li><a title="My Cart" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/">Keranjang Belanja <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['total_count_items']->value;?>
</span></a></li>
                                <li><a title="Checkout" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/checkout.php">Checkout</a></li>
                                <li><a title="Konfirmasi Pembayaran" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pembayaran/">Konfirmasi Pembayaran</a></li>
                                <li><a title="Histori Pesanan" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pemesanan/">Histori Pesanan <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['total_new_pesanan']->value;?>
</span></a></li>                                
                                <li><a title="Message" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/">Message <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['total_new_message']->value;?>
</span></a></li>
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
        </div><!-- /.container -->
    </div><!-- /.topbar -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/umum/<?php echo $_smarty_tpl->tpl_vars['umum']->value['logo'];?>
" alt=""></a>
                </div>
                <div class="col-md-9">
                    <div class="support-client">
                    </div><!-- /.support-client -->
                   
                        <form class="form-search" action="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/search/" method="GET">
                            <input type="text" class="input-text" name="query" id="search" placeholder="Cari Produk...">
                            <!-- div class="dropdown">
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
                            </div -->
                            <button type="submit" class="btn btn-danger" style="float: right;"><span class="fa fa-search"></span></button>
                        </form>
                    
                    <div class="mini-cart">
                        <div class="top-cart-title">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/" class="dropdown-toggle" data-toggle="dropdown">
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
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/" class="btn btn-default btn-md">CART</a>
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
                            <div class="mega-menu-title"><h3>Kategori</h3></div>
                            <div class="mega-menu-category"<?php if ($_smarty_tpl->tpl_vars['page_salected']->value!='home') {?> style="display:none;"<?php }?>>
                                <ul class="nav">
                                    <?php $_smarty_tpl->tpl_vars["main_row"] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['main_row']->value>9) {?> class="more-menu"<?php } elseif (count($_smarty_tpl->tpl_vars['entry']->value['sub_category'])==0) {?> class="nosub"<?php }?>>
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
                                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/category/?id=<?php echo $_smarty_tpl->tpl_vars['sub_entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub_entry']->value['nama'];?>
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

                                    <!-- <?php if (count($_smarty_tpl->tpl_vars['category']->value)>9) {?><li class="view-more"><a href="#">More category</a></li><?php }?> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <ul class="menu clearfix visible-lg visible-md">
                        <li<?php if ($_smarty_tpl->tpl_vars['page_salected']->value=='home') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">BERANDA</a></li>
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                        <li<?php if ($_smarty_tpl->tpl_vars['page_salected']->value=='menu_page'&&$_smarty_tpl->tpl_vars['data']->value['id']==$_smarty_tpl->tpl_vars['entry']->value['id']) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/page/?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['judul'];?>
</a></li>
                        <?php } ?>
                        <!-- li<?php if ($_smarty_tpl->tpl_vars['page_salected']->value=='konfirmasi') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pembayaran/">KONFIRMASI PEMBAYARAN</a></li -->                        
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
            <div class="container">
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
                        <li <?php if ($_smarty_tpl->tpl_vars['page_salected']->value=='home') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Beranda</a></li>
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                            <li <?php if (count($_smarty_tpl->tpl_vars['entry']->value['sub_category'])>0) {?>class="dropdown"<?php }?>>
                                <a href="#" <?php if (count($_smarty_tpl->tpl_vars['entry']->value['sub_category'])>0) {?>class="dropdown-toggle" data-toggle="dropdown"<?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
 <?php if (count($_smarty_tpl->tpl_vars['entry']->value['sub_category'])>0) {?><span class="fa fa-angle-down"></span><?php }?></a>                            
                                <?php if (count($_smarty_tpl->tpl_vars['entry']->value['sub_category'])>0) {?>
                                <ul class="dropdown-menu">
                                    <?php  $_smarty_tpl->tpl_vars['sub_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['sub_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_entry']->key => $_smarty_tpl->tpl_vars['sub_entry']->value) {
$_smarty_tpl->tpl_vars['sub_entry']->_loop = true;
?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/category/?id=<?php echo $_smarty_tpl->tpl_vars['sub_entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub_entry']->value['nama'];?>
</a></li>
                                    <?php } ?>                                                      
                                </ul>                                 
                                <?php }?>
                            </li>
                        <?php } ?>

                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                            <li<?php if ($_smarty_tpl->tpl_vars['page_salected']->value=='menu_page'&&$_smarty_tpl->tpl_vars['data']->value['id']==$_smarty_tpl->tpl_vars['entry']->value['id']) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/page/?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['judul'];?>
</a></li>
                        <?php } ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div><!-- /.header-bottom -->
</div><!-- /.header --><?php }} ?>
