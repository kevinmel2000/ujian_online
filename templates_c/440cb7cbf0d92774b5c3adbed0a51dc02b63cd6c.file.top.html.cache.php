<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 20:12:39
         compiled from "D:\www\gomocart\templates\back-end\matrix\includes\top.html" */ ?>
<?php /*%%SmartyHeaderCode:134215781c8400d3208-08818649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '440cb7cbf0d92774b5c3adbed0a51dc02b63cd6c' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\top.html',
      1 => 1470143555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134215781c8400d3208-08818649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5781c8401345d4_90149309',
  'variables' => 
  array (
    'homeurl' => 0,
    'tampil_notif_message' => 0,
    'total_new_message' => 0,
    'notif_message' => 0,
    'adminweburl' => 0,
    'entry' => 0,
    'last_id_message' => 0,
    'total_new_order' => 0,
    'notif_order' => 0,
    'last_id_order' => 0,
    'total_new_konfirmasi' => 0,
    'notif_konfirmasi' => 0,
    'last_id_konfirmasi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5781c8401345d4_90149309')) {function content_5781c8401345d4_90149309($_smarty_tpl) {?><nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">GOMOCART</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <?php if ($_smarty_tpl->tpl_vars['tampil_notif_message']->value==true) {?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <span>Pesan Belum Dibaca </span> <span id="total_new_message" class="label label-danger" <?php if ($_smarty_tpl->tpl_vars['total_new_message']->value==0) {?>style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['total_new_message']->value;?>
</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul id="list_new_message" class="dropdown-menu dropdown-messages">
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notif_message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/message_in/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                <div style="white-space: nowrap;">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
 </strong><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?> <span class="pull-right label label-danger">new</span><?php }?>
                                </div>
                                <div>
                                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['text'];?>
 
                                    <span class="pull-right text-muted">
                                        <em><?php echo $_smarty_tpl->tpl_vars['entry']->value['waktu'];?>
</em>
                                    </span> <br /><br />                                       
                                </div>                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } ?>
                        <li>
                            <a class="text-center" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/message_in/">
                                <strong>Baca Semua Pesan</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <input type="hidden" name="last_id_message" value="<?php echo $_smarty_tpl->tpl_vars['last_id_message']->value;?>
" />
                    <!-- /.dropdown-messages -->
                </li>
                <?php }?>
                
                <?php if ('tampil_notif_pesanan'==true) {?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <span>Pesanan Baru </span> <span id="total_new_order" class="label label-danger" <?php if ($_smarty_tpl->tpl_vars['total_new_order']->value==0) {?>style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['total_new_order']->value;?>
</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul id="list_new_order" class="dropdown-menu dropdown-messages">
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notif_order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/list.php?query=<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
">
                                <div>
                                    <strong>Customer: <?php if ($_smarty_tpl->tpl_vars['entry']->value['id_member']==0) {?>Tamu<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['nama'];
}?> </strong> <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?> <span class="pull-right label label-danger">wait</span><?php }?>
                                </div>
                                <div>
                                    ID Pesanan: #<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
 <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_dropship']=='Y') {?><span class="label label-danger">DROPSHIP</span><?php }?><br />
                                    <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
 Pcs</span> <span class="label label-danger">Rp. <?php echo $_smarty_tpl->tpl_vars['entry']->value['total'];?>
</span>
                                    <span class="pull-right text-muted">
                                        <em><?php echo $_smarty_tpl->tpl_vars['entry']->value['waktu'];?>
</em>
                                    </span> <br /><br />                                       
                                </div>
                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } ?>
                        <li>
                            <a class="text-center" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/">
                                <strong>Lihat Semua Pesanan</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <input type="hidden" name="last_id_order" value="<?php echo $_smarty_tpl->tpl_vars['last_id_order']->value;?>
" />
                    <!-- /.dropdown-tasks -->
                </li>
                <?php }?>
                
                <?php if ('tampil_notif_konfirmasi'==true) {?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-foursquare fa-fw"></i> <span>Konfirmasi Pembayaran </span> <span id="total_new_konfirmasi" class="label label-danger" <?php if ($_smarty_tpl->tpl_vars['total_new_konfirmasi']->value==0) {?>style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['total_new_konfirmasi']->value;?>
</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul id="list_new_konfirmasi" class="dropdown-menu dropdown-messages">
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notif_konfirmasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/konfirmasi/list.php?query=<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
">
                                <div>
                                    <strong>Customer: <?php if ($_smarty_tpl->tpl_vars['entry']->value['id_member']==0) {?>Tamu<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['nama'];
}?> </strong> <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?> <span class="pull-right label label-danger">wait</span><?php }?>
                                </div>
                                <div>
                                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['text'];?>
 
                                    <span class="pull-right text-muted">
                                        <em><?php echo $_smarty_tpl->tpl_vars['entry']->value['waktu'];?>
</em>
                                    </span> <br /><br />                                       
                                </div>
                                    
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } ?>
                        <li>
                            <a class="text-center" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/konfirmasi/list.php">
                                <strong>Lihat Semua Konfirmasi</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <input type="hidden" name="last_id_konfirmasi" value="<?php echo $_smarty_tpl->tpl_vars['last_id_konfirmasi']->value;?>
" />
                    <!-- /.dropdown-alerts -->
                </li>
                <?php }?>
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/editprofile/"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/gantipassword/"><i class="fa fa-gear fa-fw"></i> Ganti Password</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <?php }} ?>
