<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 12:52:35
         compiled from "D:\www\gomocart\templates\back-end\matrix\includes\side.html" */ ?>
<?php /*%%SmartyHeaderCode:144985781c840181732-69571986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc639c2829ccdaa5983df9e916d06563953997c0' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\side.html',
      1 => 1470117030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144985781c840181732-69571986',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5781c84020e0e5_48597047',
  'variables' => 
  array (
    'listmenu' => 0,
    'page_selected' => 0,
    'entry' => 0,
    'adminweburl' => 0,
    'submenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5781c84020e0e5_48597047')) {function content_5781c84020e0e5_48597047($_smarty_tpl) {?><nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                        <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value==$_smarty_tpl->tpl_vars['entry']->value['page_name']) {?> class="active-menu"<?php }?>>
                            <a href="<?php if ($_smarty_tpl->tpl_vars['entry']->value['is_menu']=='Y') {
echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/<?php }
echo $_smarty_tpl->tpl_vars['entry']->value['url'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['entry']->value['icon'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
 <?php if (count($_smarty_tpl->tpl_vars['entry']->value['submenu'])>0) {?><span class="fa arrow"></span><?php }?></a>
                            <?php if (count($_smarty_tpl->tpl_vars['entry']->value['submenu'])>0) {?>
                                <ul class="nav nav-second-level<?php if ($_smarty_tpl->tpl_vars['page_selected']->value==$_smarty_tpl->tpl_vars['entry']->value['page_name']) {?> collapse in<?php }?>">
                                <?php  $_smarty_tpl->tpl_vars['submenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['submenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->key => $_smarty_tpl->tpl_vars['submenu']->value) {
$_smarty_tpl->tpl_vars['submenu']->_loop = true;
?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['submenu']->value['url'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['submenu']->value['icon'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['submenu']->value['nama'];?>
</a>
                                    </li>
                                <?php } ?>
                                </ul>
                            <?php }?>
                        </li>
                    <?php } ?>
                 </ul>   

                    
                    
                <!-- ul class="nav" id="main-menu">    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='dashboard') {?> class="active-menu"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='pesanan') {?> class="active-menu"<?php }?>>
                        <a href="#"><i class="fa fa-folder"></i> Pesanan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='pesanan') {?> collapse in<?php }?>">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepbelumlunas/"><i class="fa fa-bars"></i> Keep / Belum Lunas</a>
                            </li>                            
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/"><i class="fa fa-briefcase"></i> Data Pesanan</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/add.php"><i class="fa fa-desktop"></i> Buat Pesanan</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='konfirmasi') {?> class="active-menu"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/konfirmasi/"><i class="fa fa-foursquare"></i> Konfirmasi Pembayaran</a>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='customer') {?> class="active-menu"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/customer/"><i class="fa fa-user"></i> Data Pelanggan</a>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='widget') {?> class="active-menu"<?php }?>>
                        <a href="#"><i class="fa fa-bookmark"></i> Konten Website <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='widget') {?> collapse in<?php }?>">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/banner/"><i class="fa fa-foursquare"></i> Banner</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/contentleft/"><i class="fa fa-edit"></i> Widget</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/menupage/"><i class="fa fa-book"></i> Halaman</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='katalog') {?> class="active-menu"<?php }?>>
                        <a href="#"><i class="fa fa-book"></i> Katalog <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='katalog') {?> collapse in<?php }?>">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/category/"><i class="fa fa-folder"></i> Kategori</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/product/"><i class="fa fa-archive"></i> Produk</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/stok/"><i class="fa fa-dropbox"></i> Stok</a>
                            </li>
                        </ul>
                    </li>

                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='voucher') {?> class="active-menu"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/voucher/"><i class="fa fa-money"></i> Voucher</a>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='message') {?> class="active-menu"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/message_in/"><i class="fa fa-mail-forward"></i> Message</a>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='laporan') {?> class="active-menu"<?php }?>>
                        <a href="#"><i class="fa fa-bars"></i> Laporan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='laporan') {?> collapse in<?php }?>">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/laporan_pembayaran/"><i class="fa fa-money"></i> Pembayaran</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/laporan_pesanan/"><i class="fa fa-foursquare"></i> Pesanan</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='pengaturan') {?> class="active-menu"<?php }?>>
                        <a href="#"><i class="fa fa-asterisk"></i> Pengaturan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='pengaturan') {?> collapse in<?php }?>">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pengaturan/"><i class="fa fa-edit"></i> Umum</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/bank/"><i class="fa fa-money"></i> Metode Pembayaran</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/ekspedisi/"><i class="fa fa-truck"></i> Ekspedisi</a>
                            </li>                            
                        </ul>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='managemen_user') {?> class="active-menu"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pengguna/"><i class="fa fa-user"></i> Managemen User</a>
                    </li>
                <ul -->

            </div>

        </nav>
        <!-- /. NAV SIDE  --><?php }} ?>
