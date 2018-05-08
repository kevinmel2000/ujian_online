<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-27 16:01:29
         compiled from "..\..\templates\back-end\matrix\pemesanan\list.html" */ ?>
<?php /*%%SmartyHeaderCode:147365770aa7fb84367-17050183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e81734943eb4322dce47b9399affc9c221ae5b4' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pemesanan\\list.html',
      1 => 1467018084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147365770aa7fb84367-17050183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5770aa8000c907_11238583',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'no_histori' => 0,
    'entry_history' => 0,
    'no_detail' => 0,
    'entry_barang' => 0,
    'tpl_dir' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'adminweburl' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770aa8000c907_11238583')) {function content_5770aa8000c907_11238583($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
                        <ol class="breadcrumb">
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pemesanan"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol>
                    </div>
                </div>
				
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_success" class="col-md-fungsi-6" style="display: none;">                         
                        <div class="alert alert-info">&nbsp;</div>
                    </div>
                
                    <div id="alert_error" class="col-md-fungsi-6" style="display: none;">                         
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <td><div id='btn_delete' class="btn btn-danger disabled">Batalkan Pemesanan</div></td>
                                    <td width="5px">&nbsp;</td>
                                    <td width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="" /></td>
                                    <td width="5px">&nbsp;</td> 
                                    <td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
                                    <td width="5px">&nbsp;</td> 
                                    <td><a class="btn btn-default" href="list.php">Reset</a></td>  
                                </tr>
                            </tbody>                                
                        </table>
                    </div>
                    <div id="detail" class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5px"><input type="checkbox" id="select_all"  class="form-control" /></th>
                                        <th width="10%"><div style="text-align: center;">No.</div></th>
                                        <th width="90%"><div style="text-align: center;">Data Pemesanan</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                        <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                            <td align="center"><input type="checkbox" id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="select_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-control select" /></td>
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                            <td>
                                                <table width="100%">
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> <?php if ($_smarty_tpl->tpl_vars['entry']->value['email']=='Guest') {?>Guest<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['last_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['email'];?>
)<?php }?></td></tr>
                                                    <tr><td><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'>#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</a></td></tr>
                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
</td></tr>
                                                    <tr><td><b>Nama Penerima</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_penerima'];?>
</td></tr>
                                                    <tr><td><b>Alamat</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['alamat'];?>
</td></tr>
                                                    <tr><td><b>No. HP</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['no_hp'];?>
</td></tr>
                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['total'];?>
</td></tr>                                                    
                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['kurir'];?>
</td></tr>                                                    
                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['no_resi'];?>
</span></td></tr>                                                    
                                                    <tr><td><b>Status</b> </td><td><b>:</b> <span id='text_status_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
' style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>orange<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?>orange<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==4) {?>red<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>Menunggu Pembayaran!<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>Pembayaran Tidak Valid!<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>Pemesanan Sedang Diproses!<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?>Customer Melakukan Konfirmasi Pembayaran!<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==4) {?>Transaksi Dibatalakan!<?php }?></span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="col-md-fungsi-6" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="col-md-fungsi-6" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_histori="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-primary histori">Tampilkan Status</button>
                                                        <button id="btn_detail_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_detail="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <button id="btn_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_noresi="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" is_open="false" type="button" class="btn btn-info noresi">Edit Nomer Resi</button>                                                       
                                                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?><button id="btn_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_finish="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button><?php }?>
                                                        <div id="detail_histori_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        
                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $_smarty_tpl->tpl_vars["no_histori"] = new Smarty_variable(1, null, 0);?>
                                                                        <?php  $_smarty_tpl->tpl_vars['entry_history'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_history']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['histori_status_pemesanan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_history']->key => $_smarty_tpl->tpl_vars['entry_history']->value) {
$_smarty_tpl->tpl_vars['entry_history']->_loop = true;
?>
                                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no_histori']->value;?>
</td>
                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry_history']->value['tanggal'];?>
</td>
                                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry_history']->value['penjelasan'];?>
</td>
                                                                            </tr>
                                                                            <?php $_smarty_tpl->tpl_vars["no_histori"] = new Smarty_variable($_smarty_tpl->tpl_vars['no_histori']->value+1, null, 0);?>  
                                                                        <?php } ?>
                                                                    </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div id="detail_detail_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Detail Barang:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>
                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>
                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>
                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $_smarty_tpl->tpl_vars["no_detail"] = new Smarty_variable(1, null, 0);?>
                                                                        <?php  $_smarty_tpl->tpl_vars['entry_barang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_barang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['detail_pemesanan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_barang']->key => $_smarty_tpl->tpl_vars['entry_barang']->value) {
$_smarty_tpl->tpl_vars['entry_barang']->_loop = true;
?>
                                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['no_detail']->value;?>
</td>
                                                                                <td align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['gambar'];?>
" width="48px" /></td>
                                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['nama'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['kode'];?>
)<?php if ($_smarty_tpl->tpl_vars['entry_barang']->value['ukuran']!='') {?><br />Ukuran: <?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['ukuran'];
}
if ($_smarty_tpl->tpl_vars['entry_barang']->value['warna']!='') {?><br />Warna <?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['warna'];
}?></td>
                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['jumlah'];?>
</td>
                                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['sub_total'];?>
</td>
                                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['grand_total'];?>
</td>
                                                                            </tr>
                                                                            <?php $_smarty_tpl->tpl_vars["no_detail"] = new Smarty_variable($_smarty_tpl->tpl_vars['no_detail']->value+1, null, 0);?>  
                                                                        <?php } ?>
                                                                    </tbody>                                         
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div id="edit_no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                <label for="no_resi">No. Resi Pengiriman:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <tr>
                                                                        <td width="90%"><input type="text" value="" class="form-control" name="no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" placeholder="" /></td>
                                                                        <td width="10%">
                                                                            <div id="i_loading_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_noresi="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger simpan_noresi">Update</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?><div id="edit_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for="nama_penerima">Paket diterima oleh:</label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">
                                                                    <tr>
                                                                        <td width="90%"><input type="text" value="" class="form-control" name="nama_penerima_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" placeholder="" /></td>
                                                                        <td width="10%">
                                                                            <div id="i_loading_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_finish="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div><?php }?>
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                    <?php } ?>
                                </tbody>
                                <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                <tfoot><tr><th colspan="3">
                                    <div style="text-align: center;">
                                        <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&larr; Prev</a>
                                        <?php }?>
                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>
                                                <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                
                                            <?php } else { ?>
                                                <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                        <?php }} ?>
                                        <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>
                                        <?php }?>                                
                                    </div>  
                            </th></tr></tfoot>
                            <?php }?>
                        </table>
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

    
    <!-- LOAD MASKING -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/css/loadmask.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.loadmask.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            var delete_selected = "";
            
            $( ".histori" ).click(function() {
                var id = this.getAttribute('id_histori');
                var text = $('#btn_histori_'+id).text();
                if(text=='Sembunyikan Status') {
                    $('#detail_histori_'+id).hide('slow');
                    $('#btn_histori_'+id).html('Tampilkan Status');
                } else                
                if(text=='Tampilkan Status') {
                    $('#detail_histori_'+id).show('slow');
                    $('#btn_histori_'+id).html('Sembunyikan Status');
                    
                    $("body, html").animate({ 
                        scrollTop: $('#detail_histori_'+id).offset().top 
                    }, 600);
                }
            });
            
            $( ".detail" ).click(function() {
                var id = this.getAttribute('id_detail');
                var text = $('#btn_detail_'+id).text();
                if(text=='Sembunyikan Detail') {
                    $('#detail_detail_'+id).hide('slow');
                    $('#btn_detail_'+id).html('Tampilkan Detail');
                } else                
                if(text=='Tampilkan Detail') {
                    $('#detail_detail_'+id).show('slow');
                    $('#btn_detail_'+id).html('Sembunyikan Detail');
                    
                    $("body, html").animate({ 
                        scrollTop: $('#btn_detail_'+id).offset().top 
                    }, 600);
                }
            });
            
            $( ".noresi" ).click(function() {
                var id = this.getAttribute('id_noresi');
                var is_open = this.getAttribute('is_open');
                $('[name=no_resi_'+id+']').val('');        
                if(is_open=='false') {
                    $('#edit_no_resi_'+id).show('slow');
                    $('#btn_noresi_'+id).attr('is_open', 'true');                    
                } else                
                if(is_open=='true') {
                    $('#edit_no_resi_'+id).hide('slow');
                    $('#btn_noresi_'+id).attr('is_open', 'false');
                    
                    $("body, html").animate({ 
                        scrollTop: $('#btn_noresi_'+id).offset().top 
                    }, 600);
                }
            });
            
            $( ".finish" ).click(function() {
                var id = this.getAttribute('id_finish');
                var is_open = this.getAttribute('is_open');
                $('[name=nama_penerima_'+id+']').val('');        
                if(is_open=='false') {
                    $('#edit_finish_'+id).show('slow');
                    $('#btn_finish_'+id).attr('is_open', 'true');                    
                } else                
                if(is_open=='true') {
                    $('#edit_finish_'+id).hide('slow');
                    $('#btn_finish_'+id).attr('is_open', 'false');
                    
                    $("body, html").animate({ 
                        scrollTop: $('#btn_finish_'+id).offset().top 
                    }, 600);
                }
            });
            
            $( ".simpan_noresi" ).click(function() {
                var id = this.getAttribute('id_noresi');
                $('#i_loading_noresi_'+id).show();
                $('#btn_simpan_noresi_'+id).hide();
                                                                                
                $.ajax({
                    url: '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/updateResi.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { id: id, no_resi: $('[name=no_resi_'+id+']').val()},
                    success: function(data, textStatus, jqXHR) {
                        $('#i_loading_noresi_'+id).hide();
                        $('#btn_simpan_noresi_'+id).show();
                        if(data['success']) {                
                            $('#text_no_resi_'+id).text($('[name=no_resi_'+id+']').val());
                            $('[name=no_resi_'+id+']').val('');
                            $('#edit_no_resi_'+id).hide('slow');
                            $('#btn_noresi_'+id).attr('is_open', 'false'); 
                        } else {                            
                            setRowMessage('error', data['message'], id);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#i_loading_noresi_'+id).hide();
                        $('#btn_simpan_noresi_'+id).show();
                        setRowMessage('error', 'Edit no. resi gagal.', id);
                    }
                });
            });
            
            $( ".simpan_finish" ).click(function() {
                var id = this.getAttribute('id_finish');
                $('#i_loading_finish_'+id).show();
                $('#btn_simpan_finish_'+id).hide();
                                                                                
                $.ajax({
                    url: '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/updateTutup.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { id: id, nama_penerima: $('[name=nama_penerima_'+id+']').val()},
                    success: function(data, textStatus, jqXHR) {
                        $('#i_loading_finish_'+id).hide();
                        $('#btn_simpan_finish_'+id).show();
                        if(data['success']) {                
                            $('[name=nama_penerima_'+id+']').val('');
                            $('#edit_nama_penerima_'+id).hide('slow');
                            $('#btn_finish_'+id).attr('is_open', 'false'); 
                        } else {                            
                            setRowMessage('error', data['message'], id);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#i_loading_finish_'+id).hide();
                        $('#btn_simpan_finish_'+id).show();
                        setRowMessage('error', 'Edit no. resi gagal.', id);
                    }
                });
            });
            
            $( "#btn_delete" ).click(function() {
                prosesDelete(delete_selected);
            });
            
            $( "#btn_cari" ).click(function() {
                var query = $( "#query" ).val();
                window.location='list.php'+(query.length>0?'?query='+query:'');
            });

            $( "#select_all" ).change(function() {
                var is_checked = $( "#select_all" ).is(':checked');

                var element = $( ".select" );
                var lengh = element.size();
                
                delete_selected = '';
                for(var i=0; i<lengh; i++) {
                    var id = element[i].getAttribute('id_select');
                    var nama = element[i].getAttribute('name');
                
                    $('[name='+nama+']').prop('checked', is_checked);                    
                    if(is_checked) delete_selected+=(delete_selected==''?'':',')+(is_checked?id:"");
                }
                
                setButton();
            });
            
            $( ".select" ).change(function() {
                var id = this.getAttribute('id_select');
                var nama = this.getAttribute('name');
                var is_checked = $( '[name='+nama+']').is(':checked');
        
                var temps = delete_selected.split(',');
                delete_selected='';
                for(var key in temps) {
                    if(temps[key]!=id) delete_selected+=(delete_selected.length>0?",":"")+temps[key];
                }
                delete_selected+=(delete_selected.length>0?",":"")+(is_checked?id:""); 
                
                setButton();
            });
            
            $( "#select_all" ).change(function() {
                var is_checked = $( "#select_all" ).is(':checked');

                var element = $( ".select" );
                var lengh = element.size();
                delete_selected = '';
                for(var i=0; i<lengh; i++) {
                    var id = element[i].getAttribute('id_select');
                    var nama = element[i].getAttribute('name');
                
                    $('[name='+nama+']').prop('checked', is_checked);                    
                    if(is_checked) delete_selected+=(delete_selected.length>0?',':'')+(is_checked?id:"");                    
                }
                
                setButton();
            });
            
            function setButton() {
                var temp = new Array();
                if(delete_selected.length>0) temp = delete_selected.split(',');                
                $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
                $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
            }
            
            function setMessage(type, message) {
                $('#alert_'+type+' .alert').text(message);
                $('#alert_'+type).show('slow');
                setTimeout(function() {
                    $('#alert_'+type).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }

            function setRowMessage(type, message, id) {
                $('#alert_'+type+'_'+id+' .alert').text(message);
                $('#alert_'+type+'_'+id).show('slow');
                setTimeout(function() {
                    $('#alert_'+type+'_'+id).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }
            
            function prosesDelete(id) {
                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin membatalkan pesanan yang dipilih?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Pembatalan',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Proses...');
                            $.ajax({
                                url: 'cancelOrder.php',
                                type: 'POST',
                                dataType: 'json',
                                data: { id: id },
                                success: function(data, textStatus, jqXHR) {
                                    if(data['success']) {
                                        window.location='list.php<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>?query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
                                    } else {
                                        $('#detail').unmask();
                                        setMessage('error', data['message']);
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    $('#detail').unmask();
                                    setMessage('error', 'Terjadi kesalahan system.');
                                }
                            });                                
                            $(this).dialog("close");
                        },
                        No: function () {
                            //doFunctionForNo();
                            $(this).dialog("close");
                        }
                    },
                    close: function (event, ui) {
                        $(this).remove();
                    }
                });                
            }
            
            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        
            <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
