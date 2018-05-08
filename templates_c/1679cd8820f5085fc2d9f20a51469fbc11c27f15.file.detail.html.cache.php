<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-28 09:00:34
         compiled from "..\templates\front-end\accecories\pemesanan\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:336557992cea5ca227-49956808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1679cd8820f5085fc2d9f20a51469fbc11c27f15' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\pemesanan\\detail.html',
      1 => 1469671225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '336557992cea5ca227-49956808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57992cea96f2b9_82563276',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'entry_barang' => 0,
    'no_detail' => 0,
    'no' => 0,
    'totalpage' => 0,
    'currentpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'widget_kanan' => 0,
    'entry_widget' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57992cea96f2b9_82563276')) {function content_57992cea96f2b9_82563276($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                    <li class="active">Histori Pemesanan</li>
               	</ul>
            </div>
        </div>
        <?php }?>
        <div class="main">
            <div class="container">
                
                <div class="row">
                    <!-- TITLE -->
                    <div class="col-sm-<?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>9<?php } else { ?>12<?php }?>">                        
                        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                        <h4>Histori Pemesanan</h4>
                        <div class="line2 mtb20"></div>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                            <div class="col-sm-12">
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_dropship']=='Y') {?><span class="label label-danger">Dropship</span>&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['entry']->value['status']=='0'||$_smarty_tpl->tpl_vars['entry']->value['status']=='1'||$_smarty_tpl->tpl_vars['entry']->value['status']=='3'||$_smarty_tpl->tpl_vars['entry']->value['status']=='4') {?><span class="label label-danger">Belum Lunas</span>&nbsp;<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']=='2'||$_smarty_tpl->tpl_vars['entry']->value['status']=='5'||$_smarty_tpl->tpl_vars['entry']->value['status']=='6') {?><span class="label label-info">Lunas</span>&nbsp;<?php }?><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>Menunggu pembayaran Customer.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>Pembayaran ditolak Admin.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>Pesanan dalam proses.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?>Customer melakukan konfirmasi pembayaran.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==4) {?>Pemesanan dibatalakan oleh Admin.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==5) {?>Pesanan sudah diterima.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==6) {?>Pesanan telah dikirim.<?php }?></span>
                            <br /><br />
                            </div>
                            
                            <div class="col-sm-6">
                                <table width="100%" class="table-borderless">
                                    <tr><td width="20%">Kode</td><td width="5px">:</td><td>#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</td></tr>
                                    <tr><td>Tanggal</td><td>:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
</td></tr>
                                    <tr><td>Pengirim</td><td>:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pengirim'];?>
</td></tr>
                                    <tr><td>Penerima</td><td>:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_penerima'];?>
</td></tr>
                                </table>
                            </div>

                            <div class="col-sm-6">
                                <table width="100%" class="table-borderless">
                                    <tr><td width="20%">Alamat</td><td width="5px">:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['alamat'];?>
</td></tr>
                                    <tr><td>No. HP</td><td>:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['no_hp'];?>
</td></tr>
                                    <tr><td>Total</td><td>:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['total'];?>
</td></tr>
                                    <tr><td>No. Resi</td><td>:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['no_resi'];?>
</td></tr>
                                </table>
                            </div>
                    
                            <!-- DETAIL -->
                            <div class="col-sm-12">      
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
                                <div class="line2 mtb20"></div>
                            </div>
                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                        <?php } ?>
                        <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                        <div class="col-sm-12 text-center">
                            <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pemesanan/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>&a<?php }?>">&larr; Prev</a>
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
                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pemesanan/?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>&a<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                <?php }?>
                                <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                            <?php }} ?>
                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/pemesanan/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>&a<?php }?>">Next &rarr;</a>
                            <?php }?>                                    
                        </div>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);
}?>                        
                </div>                
            </div>
        </div><!-- /.main -->
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);
}?>
        
        <!-- Jquery Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!-- Owl Carousel Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function () {
                <?php  $_smarty_tpl->tpl_vars['entry_widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widget_kanan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_widget']->key => $_smarty_tpl->tpl_vars['entry_widget']->value) {
$_smarty_tpl->tpl_vars['entry_widget']->_loop = true;
?>
                    /* <?php echo $_smarty_tpl->tpl_vars['entry_widget']->value['id_name'];?>
 slider */
                    $("#<?php echo $_smarty_tpl->tpl_vars['entry_widget']->value['id_name'];?>
 .owl").owlCarousel({
                        autoPlay : false,
                        items : 1,
                        itemsDesktop : [1199,1],
                        itemsDesktopSmall : [991,1],
                        itemsTablet: [767,2],
                        itemsMobile : [480,1],
                        slideSpeed : 3000,
                        paginationSpeed : 3000,
                        rewindSpeed : 3000,
                        navigation : true,
                        stopOnHover : true,
                        pagination : false,
                        scrollPerPage:true,
                    });
                <?php } ?>
                    
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
            });
        <?php echo '</script'; ?>
>
        
  </body>
</html>
<?php }} ?>
