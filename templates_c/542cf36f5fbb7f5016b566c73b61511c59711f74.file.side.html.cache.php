<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-07 03:40:11
         compiled from "D:\www\gomochart\templates\back-end\matrix\includes\side.html" */ ?>
<?php /*%%SmartyHeaderCode:6047577081b4a5f883-11740270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '542cf36f5fbb7f5016b566c73b61511c59711f74' => 
    array (
      0 => 'D:\\www\\gomochart\\templates\\back-end\\matrix\\includes\\side.html',
      1 => 1467837557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6047577081b4a5f883-11740270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577081b4a9bd32_00068238',
  'variables' => 
  array (
    'adminweburl' => 0,
    'page_selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577081b4a9bd32_00068238')) {function content_577081b4a9bd32_00068238($_smarty_tpl) {?><nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='customer') {?> class="active-menu"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/customer/"><i class="fa fa-user"></i> Pelanggan</a>
                    </li>
                    
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='transaksi') {?> class="active-menu"<?php }?>>
                        <a href="#"><i class="fa fa-asterisk"></i> Transaksi <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='transaksi') {?> collapse in<?php }?>">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/"><i class="fa fa-money"></i> Pemesanan</a>
                            </li>                            
                        </ul>
                    </li>
                    
                    <li<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='pembayaran') {?> class="active-menu"<?php }?>>
                        <a href="#"><i class="fa fa-asterisk"></i> Pembayaran <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level<?php if ($_smarty_tpl->tpl_vars['page_selected']->value=='pembayaran') {?> collapse in<?php }?>">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/konfirmasi/"><i class="fa fa-money"></i> Konfirmasi</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/bank/"><i class="fa fa-edit"></i> Bank</a>
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
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/logout.php"><i class="fa fa-fw fa-sign-out"></i> Keluar</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  --><?php }} ?>
