<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 20:06:36
         compiled from "..\..\templates\back-end\matrix\pemesanan\list.html" */ ?>
<?php /*%%SmartyHeaderCode:100845785b8da91df31-43990793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '918bceb9b5144fc7916ca79145e13232f5080d76' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pemesanan\\list.html',
      1 => 1470140312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100845785b8da91df31-43990793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5785b8dabcd0b3_75940679',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'tanggal_dari' => 0,
    'tanggal_sampai' => 0,
    'jenis' => 0,
    'status' => 0,
    'query' => 0,
    'array_akses' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'no_histori' => 0,
    'entry_history' => 0,
    'entry_barang' => 0,
    'no_detail' => 0,
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
<?php if ($_valid && !is_callable('content_5785b8dabcd0b3_75940679')) {function content_5785b8dabcd0b3_75940679($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/pemesanan"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol -->
                    </div>
                </div>
				
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_success" class="form-group" style="display: none;">                         
                        <div class="alert alert-info">&nbsp;</div>
                    </div>
                
                    <div id="alert_error" class="form-group" style="display: none;">                         
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <table style="width: 100%;">
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Dari Tanggal:</label></td>
                                <td width="80%">
                                    <table width="100%">
                                        <tr>
                                            <td width="40%">
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;?>
" class="form-control tanggal" name="tanggal_dari" placeholder="Klik Untuk Memilih Tanggal" />
                                            </td>
                                            <td style="text-align: center;">
                                                <label>Sampai Tanggal:</label>
                                            </td>
                                            <td width="40%">
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;?>
" class="form-control tanggal" name="tanggal_sampai" placeholder="Klik Untuk Memilih Tanggal" />                                        
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Jenis Pesanan:</label></td>
                                <td width="80%">
                                    <select id="filter_jenis" class="form-control" name="jenis" placeholder="Klik Untuk Memilih Jenis Pesanan">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['jenis']->value=='0') {?>selected="selected"<?php }?>>Klik Untuk Memilih Jenis Pesanan</option>
                                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['jenis']->value=='N') {?>selected="selected"<?php }?>>Bukan Dropship</option>
                                        <option value="Y" <?php if ($_smarty_tpl->tpl_vars['jenis']->value=='Y') {?>selected="selected"<?php }?>>Dropship</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Status Pembayaran:</label></td>
                                <td width="80%">
                                    <select id="filter_status" class="form-control" name="status"  placeholder="Klik Untuk Memilih Status Pembayaran">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value=='0') {?>selected="selected"<?php }?>>Klik Untuk Memilih Status Pembayaran</option>
                                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['status']->value=='N') {?>selected="selected"<?php }?>>Belum Lunas</option>
                                        <option value="Y" <?php if ($_smarty_tpl->tpl_vars['status']->value=='Y') {?>selected="selected"<?php }?>>Lunas</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <!-- tr>
                                <td width="20%" style="padding: 8px;"><label>Status Pesanan:</label></td>
                                <td width="80%">
                                    <select id="filter_status" class="form-control" name="status">
                                        <option value="A" <?php if ($_smarty_tpl->tpl_vars['status']->value=='0') {?>selected="selected"<?php }?>>Semua Status Pesanan</option>
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value=='0') {?>selected="selected"<?php }?>>Menunggu Pembayaran (Belum Lunas)</option>
                                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['status']->value=='3') {?>selected="selected"<?php }?>>Konfirmasi Pembayaran (Belum Lunas)</option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value=='1') {?>selected="selected"<?php }?>>Pembayaran Ditolak (Belum Lunas)</option>
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['status']->value=='2') {?>selected="selected"<?php }?>>Pembayaran Diterima (Lunas)</option>
                                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['status']->value=='4') {?>selected="selected"<?php }?>>Pesanan Dibatalkan (Belum Lunas)</option>
                                        <option value="5" <?php if ($_smarty_tpl->tpl_vars['status']->value=='Y') {?>selected="selected"<?php }?>>Transaksi Selesai (Lunas)</option>
                                    </select>
                                </td>
                            </tr -->
                            
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Keyword Pencarian:</label></td>
                                <td width="80%">
                                    <table>
                                        <tr>
                                            <td width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." /></td>
                                            <td width="5px">&nbsp;</td> 
                                            <td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
                                            <td width="5px">&nbsp;</td> 
                                            <td><a class="btn btn-default" href="list.php">Reset</a></td>  
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                    
                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <?php if (in_array('B',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><td><div id='btn_delete' class="btn btn-danger disabled">Batalkan Pemesanan</div></td><?php }?>
                                    <!-- td width="5px">&nbsp;</td>
                                    <td width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." /></td>
                                    <td width="5px">&nbsp;</td> 
                                    <td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
                                    <td width="5px">&nbsp;</td> 
                                    <td><a class="btn btn-default" href="list.php">Reset</a></td -->  
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
                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
</td></tr -->
                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href='#'><span style="font-weight: bold;">#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</span></a></td></tr>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> <?php if ($_smarty_tpl->tpl_vars['entry']->value['email']=='Guest') {?>Guest<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['last_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['email'];?>
)<?php }?></td></tr>
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
                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_dropship']=='Y') {?><span style="color: red; font-weight: bold;">DROPSHIP</span><?php } else { ?><span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span><?php }?></td></tr>
                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']=='0'||$_smarty_tpl->tpl_vars['entry']->value['status']=='1'||$_smarty_tpl->tpl_vars['entry']->value['status']=='3'||$_smarty_tpl->tpl_vars['entry']->value['status']=='4') {?><span style="color: red; font-weight: bold;">BELUM LUNAS</span><?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']=='2'||$_smarty_tpl->tpl_vars['entry']->value['status']=='5'||$_smarty_tpl->tpl_vars['entry']->value['status']=='6') {?><span style="color: green; font-weight: bold;">LUNAS</span><?php }?></td></tr>
                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
' style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>orange<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2||$_smarty_tpl->tpl_vars['entry']->value['status']==5||$_smarty_tpl->tpl_vars['entry']->value['status']==6) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?>orange<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==4) {?>red<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>Menunggu pembayaran Customer.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>Pembayaran ditolak Admin.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>Pesanan dalam proses.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?>Customer melakukan konfirmasi pembayaran.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==4) {?>Pemesanan dibatalakan oleh Admin.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==5) {?>Pesanan sudah diterima.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==6) {?>Pesanan telah dikirim.<?php }?></span></td></tr>
                                                    <tr><td colspan="2">
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <div id="alert_error_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>                                                                
                                                    </div>
                                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                                        <button id="btn_histori_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_histori="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-primary histori">Lihat Status</button>
                                                        <button id="btn_detail_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_detail="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-warning detail">Tampilkan Detail</button>
                                                        <?php if (in_array('P',$_smarty_tpl->tpl_vars['array_akses']->value)) {
if ($_smarty_tpl->tpl_vars['entry']->value['status']==2||$_smarty_tpl->tpl_vars['entry']->value['status']==5||$_smarty_tpl->tpl_vars['entry']->value['status']==6) {?><button id="btn_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_noresi="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button><?php }
}?>
                                                        <!-- button id="btn_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_finish="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->
                                                        
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
                                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['id'];?>
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
                                                            <div class="form-group">
                                                                <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><button id_edit="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger edit_pesanan">Edit</button><?php }?>
                                                            </div>
                                                        </div>
                                                        
                                                        <?php if (in_array('P',$_smarty_tpl->tpl_vars['array_akses']->value)) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2||$_smarty_tpl->tpl_vars['entry']->value['status']==5||$_smarty_tpl->tpl_vars['entry']->value['status']==6) {?><div id="edit_no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">                                                                
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>
                                                                        <td colspan="2" width="70%">
                                                                            <select class="form-control" name="status_pesanan_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?> selected="selected"<?php }?>>Pesanan Dalam Proses.</option>
                                                                                <option value="6" <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==6) {?> selected="selected"<?php }?>>Pesanan Sudah Dikirim.</option>
                                                                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==5) {?> selected="selected"<?php }?>>Pesanan Sudah Diterima.</option>
                                                                            </select>
                                                                        </td>                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>
                                                                        <td width="60%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['no_resi'];?>
" class="form-control" name="no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" placeholder="" /></td>
                                                                        <td width="15%">
                                                                            <div id="i_loading_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>
                                                                            <button id="btn_simpan_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_noresi="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger simpan_noresi">Update Status</button>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div><?php }?>
                                                        <?php }?>
                                                        
                                                        <!-- div id="edit_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">
                                                            <div class="form-group">
                                                                
                                                                <label for=""></label>
                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    
                                                                    <tr>
                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>
                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" placeholder="" /></td>
                                                                        <td width="15%">
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
                                                        </div -->
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
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
}
if ($_smarty_tpl->tpl_vars['jenis']->value!='0') {?>&jenis=<?php echo $_smarty_tpl->tpl_vars['jenis']->value;
}
if ($_smarty_tpl->tpl_vars['status']->value!='0') {?>&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;
}
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
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
}
if ($_smarty_tpl->tpl_vars['jenis']->value!='0') {?>&jenis=<?php echo $_smarty_tpl->tpl_vars['jenis']->value;
}
if ($_smarty_tpl->tpl_vars['status']->value!='0') {?>&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;
}
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                        <?php }} ?>
                                        <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
}
if ($_smarty_tpl->tpl_vars['jenis']->value!='0') {?>&jenis=<?php echo $_smarty_tpl->tpl_vars['jenis']->value;
}
if ($_smarty_tpl->tpl_vars['status']->value!='0') {?>&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;
}
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
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.datepick.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.plugin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.datepick.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            var delete_selected = "";
            
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            $( ".histori" ).click(function() {
                var id = this.getAttribute('id_histori');
                var text = $('#btn_histori_'+id).text();
                if(text=='Sembunyikan Status') {
                    $('#detail_histori_'+id).hide('slow');
                    $('#btn_histori_'+id).html('Lihat Status');
                } else                
                if(text=='Lihat Status') {
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
            
            /*$( ".finish" ).click(function() {
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
            });*/
            
            $( ".edit_pesanan" ).click(function() {
                var id = this.getAttribute('id_edit');
                window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/edit.php?id='+id;
                
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
                    data: { id: id, no_resi: $('[name=no_resi_'+id+']').val(), status: $('[name=status_pesanan_'+id+']').val()},
                    success: function(data, textStatus, jqXHR) {
                        $('#i_loading_noresi_'+id).hide();
                        $('#btn_simpan_noresi_'+id).show();
                        if(data['success']) {                
                            $('#text_no_resi_'+id).text($('[name=no_resi_'+id+']').val());
                            
                            var status_pesanan = $('[name=status_pesanan_'+id+']').val();
                            $('#text_status_'+id).text(status_pesanan==2?"Pesanan Dalam Proses.":(status_pesanan==5?'Pesanan sudah diterima.':(status_pesanan==6?'Pesanan sudah dikirim.':'')));
                            $('#text_status_'+id).attr('style', 'color: green; font-weight: bold;');
                            
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
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var jenis = $( '[name=jenis]' ).val();
                var status = $( '[name=status]' ).val();
                var query = $( "#query" ).val();
                
                window.location='list.php?_'+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'')+
                    (jenis!='0'?'&jenis='+jenis:'')+
                    (status!='0'?'&status='+status:'')+
                    (query.length>0?'&query='+query:'');
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
                //$( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
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
