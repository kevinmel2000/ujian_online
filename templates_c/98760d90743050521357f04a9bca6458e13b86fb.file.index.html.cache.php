<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 07:04:46
         compiled from "..\..\templates\back-end\matrix\index.html" */ ?>
<?php /*%%SmartyHeaderCode:120115797f3b8ee41d9-81556280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98760d90743050521357f04a9bca6458e13b86fb' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\index.html',
      1 => 1469843739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120115797f3b8ee41d9-81556280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5797f3b90a4729_39502676',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'stok_totalrecord' => 0,
    'stok_listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'stok_currentpage' => 0,
    'no' => 0,
    'adminweburl' => 0,
    'stok_totalpage' => 0,
    'pemesanan_currentpage' => 0,
    'konfirmasi_currentpage' => 0,
    'stok_frompage' => 0,
    'stok_untilpage' => 0,
    'item' => 0,
    'pemesanan_totalrecord' => 0,
    'pemesanan_listdetail' => 0,
    'pemesanan_totalpage' => 0,
    'pemesanan_frompage' => 0,
    'pemesanan_untilpage' => 0,
    'konfirmasi_totalrecord' => 0,
    'konfirmasi_listdetail' => 0,
    'konfirmasi_totalpage' => 0,
    'konfirmasi_frompage' => 0,
    'konfirmasi_untilpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797f3b90a4729_39502676')) {function content_5797f3b90a4729_39502676($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body>
    <div id="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</small>
                        </h1>
                        <!-- ol class="breadcrumb">
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/dashboard/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol -->
                    </div>
                </div>
				
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Statistik Penjualan</div>
                            <div class="panel-body">
                                <div style="width:100%; height:100%;" id="layarfullscreen">123</div>                                                    
                            </div>
                        </div>  
                    </div>		
                </div> 	
		
		<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Peringatan Stok &nbsp;&nbsp;<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['stok_totalrecord']->value;
if ($_smarty_tpl->tpl_vars['stok_totalrecord']->value>0) {?> items<?php }?></span></div>
                            <div class="panel-body">
                                <div id="detail_stok" class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"><div style="text-align: center;">No.</div></th>
                                                <th width="40%"><div style="text-align: center;">Produk</div></th>
                                                <th width="15%"><div style="text-align: center;">Ukuran</div></th>
                                                <th width="15%"><div style="text-align: center;">Warna</div></th>
                                                <th width="20%"><div style="text-align: center;">Sisa Stok</div></th>    
                                                <th width="5%"><div style="text-align: center;">Aksi</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stok_listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['stok_currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
)</td>
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['ukuran'];?>
</td>
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['warna'];?>
</td>
                                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
 Pcs</td>
                                                    <td><div style="text-align: center;  white-space: nowrap;">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/product/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-success update">Edit Stok</a>
                                                        </div>
                                                    </td>                                          
                                                </tr>
                                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                            <?php } ?>
                                        </tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['stok_totalpage']->value>1) {?>
                                        <tfoot><tr><th colspan="7">
                                            <div style="text-align: center;">
                                                <?php if ($_smarty_tpl->tpl_vars['stok_currentpage']->value>1) {?>                                
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value-1;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
">&larr; Prev</a>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['stok_frompage']->value, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['stok_untilpage']->value+1 - ($_smarty_tpl->tpl_vars['stok_frompage']->value) : $_smarty_tpl->tpl_vars['stok_frompage']->value-($_smarty_tpl->tpl_vars['stok_untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['stok_frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['stok_currentpage']->value) {?>
                                                        <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                
                                                    <?php } else { ?>
                                                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_stok=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                <?php }} ?>
                                                <?php if ($_smarty_tpl->tpl_vars['stok_totalpage']->value>$_smarty_tpl->tpl_vars['stok_currentpage']->value) {?>                                
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value+1;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
">Next &rarr;</a>
                                                <?php }?>                                
                                            </div>  
                                        </th></tr></tfoot><?php }?>
                                    </table>
                                </div>
                            </div>  
                        </div>		
                    </div> 	
		</div><!--/.row-->
				
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Pesanan Baru &nbsp;&nbsp;<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['pemesanan_totalrecord']->value;
if ($_smarty_tpl->tpl_vars['pemesanan_totalrecord']->value>0) {?> items<?php }?></span></div>
                            <div class="panel-body">
                                <div id="detail_pemesanan" class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"><div style="text-align: center;">No.</div></th>
                                                <th width="15%"><div style="text-align: center;">Tanggal</div></th>
                                                <th width="20%"><div style="text-align: center;">Kode</div></th>
                                                <th width="25%"><div style="text-align: center;">Pelanggan</div></th>                                    
                                                <th width="15%"><div style="text-align: center;">Jumlah</div></th>
                                                <th width="15%"><div style="text-align: center;">Total</div></th>    
                                                <th width="5%"><div style="text-align: center;">Aksi</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pemesanan_listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['pemesanan_currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['waktu'];?>
</td>
                                                    <td align="left">#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
 <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_dropship']=='Y') {?><span class="label label-danger">DROPSHIP</span><?php }?></td>
                                                    <td align="left"><?php if ($_smarty_tpl->tpl_vars['entry']->value['id_member']==0) {?>Tamu<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['nama'];
}?></td>
                                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
 Pcs</td>
                                                    <td align="right">Rp. <?php echo $_smarty_tpl->tpl_vars['entry']->value['total'];?>
</td>
                                                    <td><div style="text-align: center;  white-space: nowrap;">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/list.php?query=<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
" class="btn btn-success update">Detail</a>
                                                        </div>
                                                    </td>                                          
                                                </tr>
                                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                            <?php } ?>
                                        </tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['pemesanan_totalpage']->value>1) {?>
                                        <tfoot><tr><th colspan="8">
                                            <div style="text-align: center;">
                                                <?php if ($_smarty_tpl->tpl_vars['pemesanan_currentpage']->value>1) {?>                                
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value-1;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
">&larr; Prev</a>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['pemesanan_frompage']->value, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pemesanan_untilpage']->value+1 - ($_smarty_tpl->tpl_vars['pemesanan_frompage']->value) : $_smarty_tpl->tpl_vars['pemesanan_frompage']->value-($_smarty_tpl->tpl_vars['pemesanan_untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['pemesanan_frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['pemesanan_currentpage']->value) {?>
                                                        <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                
                                                    <?php } else { ?>
                                                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                <?php }} ?>
                                                <?php if ($_smarty_tpl->tpl_vars['pemesanan_totalpage']->value>$_smarty_tpl->tpl_vars['pemesanan_currentpage']->value) {?>                                
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value+1;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
">Next &rarr;</a>
                                                <?php }?>                                
                                            </div>  
                                        </th></tr></tfoot><?php }?>
                                    </table>
                                </div>
                            </div>  
                        </div>		
                    </div> 	
		</div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Konfirmasi Pembayaran &nbsp;&nbsp;<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['konfirmasi_totalrecord']->value;
if ($_smarty_tpl->tpl_vars['konfirmasi_totalrecord']->value>0) {?> items<?php }?></span></div>
                            <div class="panel-body">
                                <div id="detail_konfirmasi" class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"><div style="text-align: center;">No.</div></th>
                                                <th width="15%"><div style="text-align: center;">Tanggal</div></th>
                                                <th width="15%"><div style="text-align: center;">Kode</div></th>
                                                <th width="25%"><div style="text-align: center;">Pelanggan</div></th>                                    
                                                <th width="20%"><div style="text-align: center;">Bank Tujuan</div></th>    
                                                <th width="15%"><div style="text-align: center;">Jumlah</div></th>
                                                <th width="5%"><div style="text-align: center;">Aksi</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['konfirmasi_listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['waktu'];?>
</td>
                                                    <td align="center">#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</td>
                                                    <td align="left"><?php if ($_smarty_tpl->tpl_vars['entry']->value['id_member']==0) {?>Tamu<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['nama'];
}?></td>
                                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank'];?>
</td>
                                                    <td align="right">Rp. <?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah_transfer'];?>
</td>
                                                    <td><div style="text-align: center;  white-space: nowrap;">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/konfirmasi/list.php?query=<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
" class="btn btn-success update">Detail</a>
                                                        </div>
                                                    </td>                                          
                                                </tr>
                                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                            <?php } ?>
                                        </tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['konfirmasi_totalpage']->value>1) {?>
                                        <tfoot><tr><th colspan="8">
                                            <div style="text-align: center;">
                                                <?php if ($_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value>1) {?>                                
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value-1;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
">&larr; Prev</a>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['konfirmasi_frompage']->value, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['konfirmasi_untilpage']->value+1 - ($_smarty_tpl->tpl_vars['konfirmasi_frompage']->value) : $_smarty_tpl->tpl_vars['konfirmasi_frompage']->value-($_smarty_tpl->tpl_vars['konfirmasi_untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['konfirmasi_frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value) {?>
                                                        <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                
                                                    <?php } else { ?>
                                                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                <?php }} ?>
                                                <?php if ($_smarty_tpl->tpl_vars['konfirmasi_totalpage']->value>$_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value) {?>                                
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value+1;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
">Next &rarr;</a>
                                                <?php }?>                                
                                            </div>  
                                        </th></tr></tfoot><?php }?>
                                    </table>
                                </div>
                            </div>  
                        </div>		
                    </div> 	
		</div>
                <!-- /. ROW  -->
		
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <?php echo '<script'; ?>
 type="text/javascript" src="http://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            $.ajax({
                type: 'POST',
                url: '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/statistikpenjualan.php',
                //data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    
                    
                    var tanggal = [];
                    var jumlah = [];
                    var topics = data['topics'];
                    for(var key=topics.length-1; key>=0; key--) {
                        tanggal[tanggal.length] = topics[key]['tanggal'];
                        jumlah[jumlah.length] = 1*topics[key]['jumlah'];
                        //console.log(topics[key]['jumlah']);
                    }

                    loadGrafik(tanggal, jumlah);
                }, 
                error: function() {

                }
            }); 
            
            
            function loadGrafik(tanggal, jumlah) {
                $('#layarfullscreen').highcharts({
                    chart: {
                        type: 'spline'
                    },
                    title: {
                        text: ''
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: [{
                        categories: tanggal,
                        reversed: false,
                        title: {
                            text: 'Tanggal'
                        },
                        labels: {
                            step: 1
                        }
                    }],
                    yAxis: {
                        title: {
                            text: 'Penjualan'
                        },
                        labels: {
                            formatter: function () {
                                var val = this.value/1000000;
                                val = val<0?(-1*val):val;
                                return (Math.round(val*100)/100) +' JT';
                            }
                        }
                    },

                    plotOptions: {
                        series: {
                            stacking: 'normal'
                        }
                    },

                    tooltip: {
                        formatter: function () {
                            var val = this.point.y/1000000;
                            val = val<0?(-1*val):val;
                            return '<b>' + this.series.name + ', Tanggal ' + this.point.category + '</b><br/>' +
                                'Jumlah: ' + (Math.round(val*100)/100) +' JT';
                        //Highcharts.numberFormat(Math.abs(this.point.y), 0);
                        }
                    },

                    series: [{
                        name: 'Penjualan',
                        data: jumlah
                    }]
                });

            };
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
