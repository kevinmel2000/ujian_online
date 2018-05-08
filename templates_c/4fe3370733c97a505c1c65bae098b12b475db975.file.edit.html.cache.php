<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-04 14:24:42
         compiled from "..\..\templates\back-end\matrix\pemesanan\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2729957873d437cefd6-57650189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe3370733c97a505c1c65bae098b12b475db975' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pemesanan\\edit.html',
      1 => 1470268738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2729957873d437cefd6-57650189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57873d43a34a37_82886348',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'isEdit' => 0,
    'header' => 0,
    'current_date' => 0,
    'data_alamat' => 0,
    'entry' => 0,
    'listpropinsi' => 0,
    'listkurir' => 0,
    'ongkir' => 0,
    'list_bank' => 0,
    'pembayaran' => 0,
    'tpl_dir' => 0,
    'from_page' => 0,
    'adminweburl' => 0,
    'listdetail' => 0,
    'entry_ukuran_warna' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57873d43a34a37_82886348')) {function content_57873d43a34a37_82886348($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/pemesanan/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol -->
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="kode">No. Pemesanan:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['kode'];
}?>" class="form-control" name="kode" readonly="readOnly" placeholder="Auto" />
                    </div>
                    
                    <div class="form-group">
                        <label for="tanggal">Tanggal Pemesanan:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['tanggal'];
} else {
echo $_smarty_tpl->tpl_vars['current_date']->value;
}?>" class="form-control tanggal" name="tanggal" />
                    </div>
                    
                    <div class="form-group">
                        <label for="customer">Jenis Customer:</label>
                        <select class="form-control" name="tipe_customer">
                            <option value="<?php echo $_smarty_tpl->tpl_vars['header']->value['id_member'];?>
" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['header']->value['id_member']!=0) {?> selected="selected" <?php }?>>Member</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['header']->value['id_member']==0) {?> selected="selected" <?php }?>>Tamu</option>
                        </select>
                    </div>
                    
                    <div id="panel_member" class="form-group" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['header']->value['id_member']==0) {?>style="display: none;"<?php }?>>
                        <label for="kode_member">Member:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['nama_member'];
}?>" class="form-control" name="nama_member" />
                        <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
if ($_smarty_tpl->tpl_vars['header']->value['id_member']!='') {
echo $_smarty_tpl->tpl_vars['header']->value['id_member'];
} else { ?>0<?php }
}?>" name="id_member" />
                    </div>
                    
                    <div id="panel_alamat" class="form-group" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['header']->value['id_member']==0) {?>style="display: none;"<?php }?>>
                        <label class="control-label">Alamat yang Dipakai: </label>
                        <select id="pilih_nama_alamat" class="form-control" name="id_alamat">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['header']->value['id_alamat']==0) {?> selected="selected" <?php }?>>[ALAMAT BARU]</option>
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_alamat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['header']->value['id_alamat']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_alamat'];?>
</option>
                            <?php } ?>
                        </select>
                        <label class="control-label"><input type="checkbox" name="simpan_alamat" value="1" checked /> Simpan perubahan alamat.</label>
                    </div>
                    
                    <div id="panel_alamat_baru" class="form-group" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&($_smarty_tpl->tpl_vars['header']->value['id_member']==0||$_smarty_tpl->tpl_vars['header']->value['id_alamat']!=0)) {?>style="display: none;"<?php }?>>
                        <label class="control-label">Nama alamat baru: </label>
                        <input type="text" class="form-control" name="nama_alamat_baru" />                                                        
                    </div>
                    
                    <div class="form-group">
                        <label for="nama_pengirim">Nama Pengirim:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['nama_pengirim'];
}?>" class="form-control" name="nama_pengirim" />
                    </div>

                    <div class="form-group">
                        <label for="nama_penerima">Nama Penerima:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['nama_penerima'];
}?>" class="form-control" name="nama_penerima" />
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" name="alamat" style="height: 80px;"><?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['alamat'];
}?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No. HP:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['no_hp'];
}?>" class="form-control" name="no_hp" />
                    </div>

                    <div class="form-group">
                        <label for="propinsi">Propinsi:</label>
                        <select id="header_prop" name="propinsi" class="form-control">
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['header']->value['id_propinsi']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kota">Kota:</label>
                        <select id="header_kota" name="kota" class="form-control"></select>
                    </div>
                    
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan:</label>
                        <select id="header_kecamatan" name="kecamatan" class="form-control"></select>
                    </div>
                    
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['kode_pos'];
}?>" class="form-control" name="kode_pos" />
                    </div>
                    
                    <div class="form-group">
                        <label for="kurir">Jasa Kurir:</label>
                        <select id="header_kurir" name="kurir" class="form-control">
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listkurir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['kode']==$_smarty_tpl->tpl_vars['ongkir']->value['kurir']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>
                            <?php } ?>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['ongkir']->value['kurir']=='0') {?> selected="selected" <?php }?>>LAINNYA</option>                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="layanan">Layanan:</label>
                        <select id="header_layanan" name="layanan"  class="form-control" <?php if ($_smarty_tpl->tpl_vars['ongkir']->value['kurir']=='0') {?>disabled="disabled"<?php }?>></select>
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis">Jenis Pesanan:</label>
                        <select name="is_dropship" class="form-control">
                            <option value="N" <?php if ($_smarty_tpl->tpl_vars['header']->value['is_dropship']=='N') {?> selected="selected" <?php }?>>Bukan Dropship</option>
                            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['header']->value['is_dropship']=='Y') {?> selected="selected" <?php }?>>Dropship</option>
                        </select>                            
                    </div>
                    
                    <div id="list_detail" class="table-responsive" style="margin-top: 10px;">
                        <div class="form-group">
                            <label for="detail_produk">Detail Produk Pesanan:</label>
                            <table  id="tblDetail_produk" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th width="5px"><span class="fa fa-trash-o"></span></th>
                                        <th width="25%"><div style="text-align: center;">Nama Barang</div></th>
                                        <th width="20%"><div style="text-align: center;">Ukuran / Warna</div></th>
                                        <th width="10%"><div style="text-align: center;">Qty</div></th>
                                        <th width="10%"><div style="text-align: center;">Harga</div></th>
                                        <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                        <th width="10%"><div style="text-align: center;">Subtotal</div></th>
                                        <th width="15%"><div style="text-align: center;">Grandtotal</div></th>    
                                    </tr>
                                </thead>
                                <tbody id="detail_produk">                                    
                                    <tr>
                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: left; padding-left: 90%; width: 100%; font-weight: bold;">Voucher:</span></td>    
                                        <td style="padding: 0; margin: 0;"><input id="header_voucher" type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['voucher'];
} else { ?>0<?php }?>" class="form-control" name="voucher" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: left; padding-left: 90%; width: 100%; font-weight: bold;">Ongkir:</span></td>    
                                        <td style="padding: 0; margin: 0;"><input id="header_tarif" type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['ongkir'];
} else { ?>0<?php }?>" class="form-control harga" name="ongkir" style="text-align: right; font-weight: bold;" <?php if ($_smarty_tpl->tpl_vars['ongkir']->value['kurir']!='0') {?>disabled="disabled"<?php }?> /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: left; padding-left: 90%; width: 100%; font-weight: bold;">Total:</span></td>    
                                        <td style="padding: 0; margin: 0;"><input id="header_total" type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['total'];
} else { ?>0<?php }?>" class="form-control" name="total" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <div id='btn_add' class="btn btn-primary">Tambah</div>
                        </div>
                    </div>
                    
                    <div class="form-group">&nbsp;</div>
                    
                    <div class="form-group">
                        <label for="status">Status Pembayaran:</label>
                        <select name="status" class="form-control">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='0'||$_smarty_tpl->tpl_vars['header']->value['status']=='1'||$_smarty_tpl->tpl_vars['header']->value['status']=='3') {?> selected="selected" <?php }?>>Belum Lunas</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='2') {?> selected="selected" <?php }?>>Lunas (Menunggu Proses Pengiriman)</option>
                            <option value="6" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='6') {?> selected="selected" <?php }?>>Lunas (Dalam Proses Pengiriman)</option>
                            <option value="5" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='5') {?> selected="selected" <?php }?>>Lunas (Langsung Tutup Transaksi)</option>
                        </select>                        
                    </div>
                    
                    <div class="form-group" id="metode_pembayaran" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']!='2'&&$_smarty_tpl->tpl_vars['header']->value['status']!='6'&&$_smarty_tpl->tpl_vars['header']->value['status']!='5') {?>style="display: none;"<?php }?>>
                        <label for="metode_pembayaran">Metode Pembayaran:</label>
                        <select name="bank_tujuan" class="form-control">
                            <option value="0">-- Pilih Bank Tujuan --</option>
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_bank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['pembayaran']->value['bank_tujuan']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['no_rekening'];?>
 - an. <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pemilik_rekening'];?>
)</option>
                            <?php } ?>
                        </select>                        
                    </div>
                    
                    <div class="form-group" id="jumlah_transfer" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']!='2'&&$_smarty_tpl->tpl_vars['header']->value['status']!='6'&&$_smarty_tpl->tpl_vars['header']->value['status']!='5') {?>style="display: none;"<?php }?>>
                        <label for="jumlah_transfer">Jumlah Transfer:</label>
                        <input type="text" name="jumlah_transfer" value="<?php if ($_smarty_tpl->tpl_vars['pembayaran']->value['jumlah_transfer']!='') {
echo $_smarty_tpl->tpl_vars['pembayaran']->value['jumlah_transfer'];
} else {
echo $_smarty_tpl->tpl_vars['header']->value['total'];
}?>" class="form-control harga" />
                    </div>
                    
                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <td width="100%">&nbsp;</td> 
                                    <td nowrap>
                                        <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                                        <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                        <a id="btn_batal"  href="<?php if ($_smarty_tpl->tpl_vars['from_page']->value=='keepbelumlunas') {
echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepbelumlunas/list.php<?php } elseif ($_smarty_tpl->tpl_vars['from_page']->value=='keepperproduk') {
echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepperproduk/list.php<?php } elseif ($_smarty_tpl->tpl_vars['from_page']->value=='pesananbelumlunas') {
echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/pesananbelumlunas/list.php<?php } else { ?>list.php<?php }?>" class="btn btn-warning">Batal</a>                                                        
                                    </td>
                                </tr>
                            </tbody>                                
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

    
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.input.formatter.js"><?php echo '</script'; ?>
>  
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">

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
        var array_tarif = Array();
        var delete_selected = "";
        $(function () {
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            $('[name=nama_member]').autocomplete({
                source: function( request, response ) {
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/memberDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
                            response( $.map( data, function( item ) {

                                return {
                                    label: item['display'],
                                    value: item['value'],
                                    data : item['data']
                                }
                            }));
                        }
                    });
                },
                autoFocus: true,	      	
                minLength: 1,
                select: function( event, ui ) {
                    var data = ui.item.data;
                    $('[name=id_member]').val(data['id']);
                    loadAlamat(data['id']);
                }		      	
            });
            
            function loadAlamat(id_member) {
                $("#pilih_nama_alamat").empty();
                var data = '<option value="0">[ALAMAT BARU]</option>';
                $(data).appendTo('#pilih_nama_alamat');
                $.ajax({
                    type: 'POST',
                    url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getAlamatMember.php',
                    data: { 'id': id_member },
                    dataType: 'json',
                    success: function(data) {
                        var store = data['alamat'];
                        data = '<option value="0">[ALAMAT BARU]</option>'; 
                        for(var key in store) {
                            data+='<option value="'+store[key]['id']+'">'+store[key]['nama_alamat']+'</option>';
                        }
                        
                        $("#pilih_nama_alamat").empty();
                        $(data).appendTo('#pilih_nama_alamat');
                        
                        if(store.length>0) {
                            $('#pilih_nama_alamat').val(store[0]['id']).change();
                        } else {
                            $('[name=nama_pengirim]').val('');
                            $('[name=nama_penerima]').val('');
                            $('[name=alamat]').val('');
                            $('[name=no_hp]').val('');
                            $('[name=kode_pos]').val('');

                            var propinsi = '0';
                            var kota = '0';
                            var kecamatan = '0';

                            $('[name=propinsi]').val(propinsi);
                            loadKota(propinsi, kota);
                            loadKecamatan(kota, kecamatan);
                            loadLayanan($('#header_kurir').val(), kecamatan, 0);
                            
                            $('#panel_alamat_baru').show();
                        }
                            
                    }
                });    
            }
            
            $('#header_tarif').keyup(function () { 
                getTotal();
            });
            
            $('[name=status]').on('change', function (e) {
                if($('[name=status]').val()=='0') {                    
                    $('#metode_pembayaran').hide();
                    $('#jumlah_transfer').hide();
                } else {
                    $('#metode_pembayaran').show();
                    $('#jumlah_transfer').show();
                }
            });
            
            $('[name=tipe_customer]').on('change', function (e) {
                $('[name=nama_member]').val($('[name=tipe_customer]').val()=='0'?'Tamu':'');
                $('[name=id_member]').val($('[name=tipe_customer]').val()=='0'?'0':'');
                
                $('[name=nama_member]').prop('disabled', $('[name=tipe_customer]').val()=='0');
                if($('[name=tipe_customer]').val()=='0') {
                    $('#panel_member').hide();
                    $('#panel_alamat').hide();
                    $('#panel_alamat_baru').hide();
                    $('[name=nama_pengirim]').val('');
                    $('[name=nama_penerima]').val('');
                    $('[name=alamat]').val('');
                    $('[name=no_hp]').val('');
                    $('[name=kode_pos]').val('');

                    var propinsi = '0';
                    var kota = '0';
                    var kecamatan = '0';

                    $('[name=propinsi]').val(propinsi);
                    loadKota(propinsi, kota);
                    loadKecamatan(kota, kecamatan);
                    loadLayanan($('#header_kurir').val(), kecamatan, 0);
                } else {
                    $('#panel_member').show();
                    $('#panel_alamat').show();
                    $('#panel_alamat_baru').show();
                }
            });
            
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +                                            
                        '<td align="center">' +
                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['nama'];
}?>" class="form-control nama_produk" name="nama" />' +                                                
                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['id_produk'];
}?>" name="id_produk" />' +
                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['kode'];
}?>" name="kode" />' +
                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['berat'];
}?>" name="berat" />' +
                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_beli'];
}?>" name="harga_beli" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<select class="form-control" name="ukuran_warna">' +                            
                                <?php  $_smarty_tpl->tpl_vars['entry_ukuran_warna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_ukuran_warna']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['list_ukuran_warna']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_ukuran_warna']->key => $_smarty_tpl->tpl_vars['entry_ukuran_warna']->value) {
$_smarty_tpl->tpl_vars['entry_ukuran_warna']->_loop = true;
?>
                                    '<option value="<?php echo $_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['kode'];?>
"<?php if ($_smarty_tpl->tpl_vars['entry']->value['ukuran_warna']==$_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['kode']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['ukuran'];
if ($_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['ukuran']!=''&&$_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['warna']!='') {?> / <?php }
echo $_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['warna'];?>
</option>' +
                                <?php } ?>
                            '</select>' +                            
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];
}?>" class="form-control harga jumlah" name="jumlah" style="text-align: right;" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual'];
}?>" class="form-control harga" name="harga_jual" style="text-align: right;"  disabled="disabled" />' +
                        '</td>' +                                            
                        '<td align="center">' +
                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
if ($_smarty_tpl->tpl_vars['entry']->value['tipe_diskon']=="persentase") {
echo $_smarty_tpl->tpl_vars['entry']->value['persen_diskon'];
}
}?>" class="form-control" name="diskon" style="text-align: right;"  disabled="disabled" />' +
                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['tipe_diskon'];
}?>" name="tipe_diskon" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['sub_total'];
}?>" class="form-control harga" name="sub_total" style="text-align: right;" disabled="disabled" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['grand_total'];
}?>" class="form-control harga" name="grand_total" style="text-align: right;"  disabled="disabled" />' +
                        '</td>' +
                    '</tr>';
            
                $( record ).insertBefore( "#detail_produk" );
            <?php } ?>
             
            setAutocomplete();
            setQtyChangeListeners();
            
            function setAutocomplete() {
                
                $('.nama_produk').autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/produkDataStore.php',
                            dataType: "json",
                            method: 'post',
                            data: {
                                query: request.term,
                                id_member: '<?php echo $_smarty_tpl->tpl_vars['header']->value['id_member'];?>
'
                            },
                            success: function( data ) {
                                response( $.map( data, function( item ) {

                                    return {
                                        label: item['display'],
                                        value: item['value'],
                                        data : item['data']
                                    }
                                }));
                            }
                        });
                    },
                    autoFocus: true,	      	
                    minLength: 1,
                    select: function( event, ui ) {
                        //console.log(ui.item.data);

                        var data = ui.item.data;
                        /*for(var key in data) {
                            console.log(key+' --- '+data[key]);
                        }*/
                        var element = $(this).closest('tr');
                        var id_produk = element.find('[name=id_produk]');
                        var kode = element.find('[name=kode]');
                        var berat = element.find('[name=berat]');
                        var ukuran_warna = element.find('[name=ukuran_warna]');
                        var jumlah = element.find('[name=jumlah]');
                        var harga_beli = element.find('[name=harga_beli]');
                        var harga_jual = element.find('[name=harga_jual]');
                        var diskon = element.find('[name=diskon]');
                        var tipe_diskon = element.find('[name=tipe_diskon]');
                        var sub_total = element.find('[name=sub_total]');
                        var grand_total = element.find('[name=grand_total]');

                        id_produk.val(data['id']);
                        kode.val(data['kode']);
                        berat.val(data['berat']);
                        if(jumlah.val().length==0) jumlah.val(1);
                        var datas = '';
                        var store = data['list_ukuran_warna'];
                        for(var key in store) {
                            datas+='<option value="'+store[key]['kode']+'">'+store[key]['ukuran']+((store[key]['ukuran']!="" && store[key]['warna']!="")?" / ":"")+store[key]['warna']+'</option>';
                        }
                        ukuran_warna.empty();
                        $(datas).appendTo(ukuran_warna);

                        harga_beli.val(data['harga_beli']);
                        harga_jual.val(data['harga_jual']);
                        diskon.val(data['tipe_diskon']=='persentase'?data['persen_diskon']:'');
                        tipe_diskon.val(data['tipe_diskon']);
                        sub_total.val(data['sub_total']);

                        var grand_tot = eval(jumlah.val().replace(',', ''))*eval(sub_total.val().replace(',', ''));
                        grand_total.val(currency(grand_tot));
                    
                        loadLayanan($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());
                    }		      	
                });
            }    
            
            function setQtyChangeListeners() {
                $('.jumlah').on('input', function() { 
                    var element = $(this).closest('tr');
                    var jumlah = element.find('[name=jumlah]');
                    var sub_total = element.find('[name=sub_total]');
                    var grand_total = element.find('[name=grand_total]');

                    var grand_tot = eval(jumlah.val().replace(',', ''))*eval(sub_total.val().replace(',', ''));
                    grand_total.val(currency(grand_tot));
                    
                    loadLayanan($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());
                });
            };
            
            function currency(nums) {

                if(!nums) return '0';
                if(nums=='') return '0';

                nums = String(nums).replace(/[\,%]/g, '');
                nums = nums.split('.').length<2?
                            nums:
                            (nums.split('.')[1].length>2?
                                String(eval(nums).toFixed(2)):
                                nums);

                if(nums=='' || nums=='0') return '0';

                while (nums.substring(0,1)=='0' && nums.substring(1,2)!='.') {
                    nums = nums.substring(1,nums.length);
                    if(nums=='0') return '0';
                }

                nums = nums.replace('.','. ');

                var num = nums.split('.')[0];
                var numArr=new String(num).split('').reverse();
                for (var i=3;i<numArr.length;i+=3)
                    numArr[i]+=',';

                var decimal = (nums.split('.')[1]?('.'+(nums.split('.')[1]).trim()):'');

                return (numArr.reverse().join('') + decimal.replace('.00',''));

            };

            $('#btn_add').click(function() {
                var record = 
                    '<tr>' +                        
                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +  
                        '<td align="center">' +
                            '<input type="text" class="form-control nama_produk" name="nama" />' +
                            '<input type="hidden" name="id_produk" />' +
                            '<input type="hidden" name="kode" />' +
                            '<input type="hidden" name="berat" />' +                            
                            '<input type="hidden" name="harga_beli" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<select class="form-control" name="ukuran_warna"></select>' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control harga jumlah" name="jumlah" style="text-align: right;" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control harga" name="harga_jual" style="text-align: right;" disabled="disabled" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control" name="diskon" style="text-align: right;" disabled="disabled" />' +
                            '<input type="hidden" name="tipe_diskon" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control harga" name="sub_total" style="text-align: right;" disabled="disabled" />' +
                        '</td>' +
                        '<td align="center">' +
                            '<input type="text" class="form-control harga" name="grand_total" style="text-align: right;" disabled="disabled" />' +
                        '</td>' + 
                    '</tr>';

                $( record ).insertBefore( "#detail_produk" );
                setAutocomplete();
                setQtyChangeListeners();
            });
            
            $( document ).on( 'click', '.hapus_detail', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
                loadLayanan($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());
                
            });
            
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            $("input.harga").formatInput();
            
            $('#pilih_nama_alamat').on('change', function (e) {
                if($('[name=id_alamat]').val()==0) {
                    $('[name=nama_pengirim]').val('');
                    $('[name=nama_penerima]').val('');
                    $('[name=alamat]').val('');
                    $('[name=no_hp]').val('');
                    $('[name=kode_pos]').val('');

                    var propinsi = '0';
                    var kota = '0';
                    var kecamatan = '0';

                    $('[name=propinsi]').val(propinsi);
                    loadKota(propinsi, kota);
                    loadKecamatan(kota, kecamatan);
                    loadLayanan($('#header_kurir').val(), kecamatan, 0);
                    $('#panel_alamat_baru').show();
                } else {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getAlamat.php',
                        data: { 'id': $('[name=id_alamat]').val() },
                        dataType: 'json',
                        success: function(data) {
                            var alamat = data['alamat'];
                            $('[name=nama_pengirim]').val(alamat['nama_pengirim']);
                            $('[name=nama_penerima]').val(alamat['nama_penerima']);
                            $('[name=alamat]').val(alamat['alamat']);
                            $('[name=no_hp]').val(alamat['no_hp']);
                            $('[name=kode_pos]').val(alamat['kode_pos']);

                            var propinsi = alamat['id_propinsi']==undefined?'0':alamat['id_propinsi'];
                            var kota = alamat['id_kota']==undefined?'0':alamat['id_kota'];
                            var kecamatan = alamat['id_kecamatan']==undefined?'0':alamat['id_kecamatan'];

                            $('[name=propinsi]').val(propinsi);
                            loadKota(propinsi, kota);
                            loadKecamatan(kota, kecamatan);
                            loadLayanan($('#header_kurir').val(), kecamatan, 0);
                            $('#panel_alamat_baru').hide();
                        }
                    });
                }
            });
                
            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }

            $('#btn_simpan').click(function() {
                submitPemesanan();
            });

            function submitPemesanan() {
                
                //data header
                var id             = isEdit?'<?php echo $_smarty_tpl->tpl_vars['header']->value['id'];?>
':'';
                var tanggal        = $('[name=tanggal]').val();
                var tipe_customer  = $('[name=tipe_customer]').val();
                var id_member      = $('[name=id_member]').val();
                var id_alamat      = $('[name=id_alamat]').val();
                var nama_alamat_baru = $('[name=nama_alamat_baru]').val();
                var is_simpan_alamat = $('[name=simpan_alamat]').is(':checked');
                
                var nama_pengirim  = $('[name=nama_pengirim]').val();
                var nama_penerima  = $('[name=nama_penerima]').val();
                var alamat         = $('[name=alamat]').val();
                var no_hp          = $('[name=no_hp]').val();
                var id_propinsi    = $('[name=propinsi]').val();
                var nama_propinsi  = $("#header_prop option[value='"+id_propinsi+"']").text();
                var id_kota        = $('[name=kota]').val();
                var nama_kota      = $("#header_kota option[value='"+id_kota+"']").text();
                var id_kecamatan   = $('[name=kecamatan]').val();
                var nama_kecamatan = $("#header_kecamatan option[value='"+id_kecamatan+"']").text();
                var kode_pos       = $('[name=kode_pos]').val();
                var kurir          = $('[name=kurir]').val();
                var layanan        = $('[name=layanan]').val();
                var voucher        = $('[name=voucher]').val();
                var tarif          = $('[name=ongkir]').val();
                var total          = $('[name=total]').val();
                var is_dropship    = $('[name=is_dropship]').val();
                
                var status          = ($('[name=status]').val()=='0')?'<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['status'];
} else { ?>0<?php }?>':($('[name=status]').val());
                var bank_tujuan     = $('[name=bank_tujuan]').val();
                var jumlah_transfer = $('[name=jumlah_transfer]').val();
                
                //data detail
                var detail = ''; var row = 0;
                grandtotal = 0;
                $("#tblDetail_produk tr").each(function() {
                    if(row>0) {
                        var id_produk    = $(this).find('[name=id_produk]').val();
                        var kode         = $(this).find('[name=kode]').val();
                        var nama         = $(this).find('[name=nama]').val();
                        var berat        = $(this).find('[name=berat]').val();
                        var ukuran_warna = $(this).find('[name=ukuran_warna]').val();                        
                        var jumlah       = $(this).find('[name=jumlah]').val();
                        var harga_beli   = $(this).find('[name=harga_beli]').val();
                        var harga_jual   = $(this).find('[name=harga_jual]').val();
                        var diskon       = $(this).find('[name=diskon]').val();
                        var tipe_diskon  = $(this).find('[name=tipe_diskon]').val();
                        var sub_total    = $(this).find('[name=sub_total]').val();
                        var grand_total  = $(this).find('[name=grand_total]').val();

                        if(id_produk!=undefined) {
                            grandtotal+=eval(grand_total.replace(",", ""));                                                    
                            detail+=(detail==''?'':'\n')+id_produk+'\t'+kode+'\t'+nama+'\t'+berat+'\t'+ukuran_warna+'\t'+jumlah.replace(",", "")+'\t'+harga_jual.replace(",", "")+'\t'+diskon.replace(",", "")+'\t'+tipe_diskon+'\t'+sub_total.replace(",", "")+'\t'+grand_total.replace(",", "")+'\t'+harga_beli.replace(",", "");
                        }
                    } 
                    row++;
                });                
                //console.log(detail);
                
                var data = new FormData();
                data.append('id', id);
                data.append('tanggal', tanggal);
                data.append('tipe_customer', tipe_customer);
                data.append('id_member', id_member);
                data.append('id_alamat', id_alamat);
                data.append('nama_alamat', nama_alamat_baru);
                data.append('is_simpan_alamat', is_simpan_alamat?'Y':'N');
                
                data.append('nama_pengirim', nama_pengirim);
                data.append('nama_penerima', nama_penerima);
                data.append('alamat', alamat);
                data.append('no_hp', no_hp);
                data.append('id_propinsi', id_propinsi);
                data.append('nama_propinsi', nama_propinsi);
                data.append('id_kota', id_kota);
                data.append('nama_kota', nama_kota);
                data.append('id_kecamatan', id_kecamatan);
                data.append('nama_kecamatan', nama_kecamatan);                                
                data.append('kode_pos', kode_pos);
                data.append('kurir', kurir);
                data.append('layanan', layanan);
                data.append('grandtotal', grandtotal);
                data.append('voucher', voucher.replace(",", ""));
                data.append('ongkir', tarif.replace(",", ""));
                data.append('total', total.replace(",", ""));
                data.append('detail', detail);
                data.append('is_dropship', is_dropship);
                
                data.append('status', status);
                data.append('bank_tujuan', bank_tujuan);
                data.append('jumlah_transfer', jumlah_transfer.replace(",", ""));
                

                setLoading(true);
                $.ajax({
                    type: 'POST',
                    url: isEdit?'update.php':'save.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        if(data['success']) {
                            <?php if ($_smarty_tpl->tpl_vars['from_page']->value=='keepbelumlunas') {?>
                                window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepbelumlunas/list.php';
                            <?php } elseif ($_smarty_tpl->tpl_vars['from_page']->value=='keepperproduk') {?>
                                window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepperproduk/list.php';
                            <?php } elseif ($_smarty_tpl->tpl_vars['from_page']->value=='pesananbelumlunas') {?>
                                window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/pesananbelumlunas/list.php';
                            <?php } else { ?>
                                window.location = 'list.php';                    
                            <?php }?>
                        } else {
                            setLoading(false);
                            setErrorMessage(data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false);
                        setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            }

            function setLoading(isLoading) {
                if(isLoading) {
                    $('#i_loading').show();
                    $('#btn_simpan').hide();
                    $('#btn_batal').hide();
                } else {
                    $('#i_loading').hide();
                    $('#btn_simpan').show(); 
                    $('#btn_batal').show();                    
                }
            }
            
            $('#header_prop').on('change', function (e) {
                loadKota(this.value, 0);
                loadKecamatan(0, 0);
                loadLayanan($('#header_kurir').val(), 0, 0);
            });

            $('#header_kota').on('change', function (e) {
                loadKecamatan(this.value, 0);
                loadLayanan($('#header_kurir').val(), 0, 0);
            });

            $('#header_kecamatan').on('change', function (e) {
                loadLayanan($('#header_kurir').val(), this.value, 0);
            });

            $('#header_kurir').on('change', function (e) {
                if(this.value==0) {
                    $('#header_layanan').prop('disabled', true);
                    $('#header_tarif').prop('disabled', false);
                } else {
                    $('#header_layanan').prop('disabled', false);
                    $('#header_tarif').prop('disabled', true);
                    loadLayanan(this.value, $('#header_kecamatan').val(), 0);
                }
            });

            $('#header_layanan').on('change', function (e) {
                for(var key in array_tarif) {
                    if(array_tarif[key]['service']==this.value) {
                        $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));
                        break;
                    }
                }
                getTotal();
            });

            function loadKota(propinsi, kota) {
                $("#header_kota").empty();
                //$('<option value="0">-- Pilih Kota --</option>').appendTo('#header_kota');

                $.ajax({
                    type: 'POST',
                    url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKota.php',
                    data: { 'propinsi': propinsi },
                    dataType: 'json',
                    success: function(data) {
                        var store = data['topics'];
                        var data = ''; //'<option value="0">-- Pilih Kota --</option>';
                        for(var key in store) {
                            data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';
                        }
                        $("#header_kota").empty();
                        $(data).appendTo('#header_kota');
                    }
                });    
            }

            function loadKecamatan(kota, kecamatan) {
                $("#header_kecamatan").empty();
                //$('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#header_kecamatan');

                if(kota>0) {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKecamatan.php',
                        data: { 'kota': kota },
                        dataType: 'json',
                        success: function(data) {
                            var store = data['topics'];
                            var data = '<option value="0">-- Pilih Kecamatan --</option>';
                            for(var key in store) {
                                data+='<option value="'+store[key]['subdistrict_id']+'"'+(store[key]['subdistrict_id']==kecamatan?' selected="selected"':'')+'>'+store[key]['subdistrict_name']+'</option>';
                            }
                            $("#header_kecamatan").empty();
                            $(data).appendTo('#header_kecamatan');
                        }
                    });
                }    
            }

            function loadLayanan(kurir, kecamatan, layanan) {
                $('#header_tarif').val(0);            
                $("#header_layanan").empty();
                $('<option value="0">-- Pilih Layanan --</option>').appendTo('#header_layanan');
                array_tarif = Array();
                if(kecamatan>0 && kurir!='') {
                    var id_kota   = $('[name=kota]').val();
                    var nama_kota = $("#header_kota option[value='"+id_kota+"']").text();
                    
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getLayanan.php',
                        data: { 'kurir': kurir, 'kecamatan': kecamatan, 'berat': getTotalBerat(), 'kota': nama_kota},
                        dataType: 'json',
                        success: function(data) {
                            array_tarif = data['topics'];
                            var data = '<option value="0">-- Pilih Layanan --</option>';
                            for(var key in array_tarif) {
                                data+='<option value="'+array_tarif[key]['service']+'"'+(array_tarif[key]['service']==layanan?' selected="selected"':'')+'>'+array_tarif[key]['description']+' '+(array_tarif[key]['service']!=array_tarif[key]['description']?('('+array_tarif[key]['service']+')'):'')+' - '+array_tarif[key]['cost'][0]['tarif']+'</option>';
                                if(array_tarif[key]['service']==layanan) {
                                    $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));
                                }
                            }
                            $("#header_layanan").empty();
                            $(data).appendTo('#header_layanan');
                            getTotal();
                        }
                    });
                }    
            }
            
            function getTotalBerat() {
                var total_berat = 0;
                $("#tblDetail_produk tr").each(function() {
                    var berat = $(this).find('[name=berat]').val();
                    var jumlah = $(this).find('[name=jumlah]').val();
                    if(berat!=undefined && jumlah!=undefined) {                        
                        total_berat+=(eval(jumlah.replace(",", ""))*eval(berat));
                    }
                });
                
                //console.log('Total Berat: '+total_berat);
                return total_berat;
            }
            
            function getTotal() {
                var grand_tot = 0;
                $("#tblDetail_produk tr").each(function() {
                    var grand_total = $(this).find('[name=grand_total]').val();
                    if(grand_total!=undefined) {                        
                        grand_tot+=eval(grand_total.replace(",", ""));
                    }
                });
                
                var voucher = eval($('#header_voucher').val().replace(",", ""));
                var ongkir  = eval($('#header_tarif').val().replace(",", ""));
                //console.log(ongkir);
                
                ongkir = (ongkir==undefined?0:ongkir);
                var total   = grand_tot+ongkir-voucher;
                $('#header_total').val(currency(total));
            }
            
            <?php if ($_smarty_tpl->tpl_vars['header']->value['id_propinsi']>0) {?>loadKota('<?php echo $_smarty_tpl->tpl_vars['header']->value['id_propinsi'];?>
', '<?php echo $_smarty_tpl->tpl_vars['header']->value['id_kota'];?>
');<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['header']->value['id_kota']>0) {?>loadKecamatan('<?php echo $_smarty_tpl->tpl_vars['header']->value['id_kota'];?>
', '<?php echo $_smarty_tpl->tpl_vars['header']->value['id_kecamatan'];?>
');<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ongkir']->value['kurir']!=0&&$_smarty_tpl->tpl_vars['header']->value['id_kecamatan']>0) {?>loadLayanan('<?php echo $_smarty_tpl->tpl_vars['ongkir']->value['kurir'];?>
', '<?php echo $_smarty_tpl->tpl_vars['header']->value['id_kecamatan'];?>
', '<?php echo $_smarty_tpl->tpl_vars['ongkir']->value['layanan'];?>
');<?php }?>   
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
