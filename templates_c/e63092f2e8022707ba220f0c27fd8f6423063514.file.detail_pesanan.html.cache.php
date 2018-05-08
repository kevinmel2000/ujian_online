<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-03 18:49:52
         compiled from "..\..\templates\back-end\matrix\customer\detail_pesanan.html" */ ?>
<?php /*%%SmartyHeaderCode:2404057a1d7268d00d0-44002105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e63092f2e8022707ba220f0c27fd8f6423063514' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\customer\\detail_pesanan.html',
      1 => 1470224989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2404057a1d7268d00d0-44002105',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a1d726d9ee42_51195956',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'tanggal_dari' => 0,
    'tanggal_sampai' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'jumlah' => 0,
    'total_qty' => 0,
    'totalpage' => 0,
    'id_member' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'adminweburl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a1d726d9ee42_51195956')) {function content_57a1d726d9ee42_51195956($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/laporan_pesanan/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol -->
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    
                    <div class="form-group">
                        <div id="alert_success" class="form-group" style="display: none;">                         
                            <div class="alert alert-info">&nbsp;</div>
                        </div>

                        <div id="alert_error" class="form-group" style="display: none;">
                            <div class="alert alert-danger">&nbsp;</div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <table style="width: 100%;">
                            <tr>
                                <td width="15%" style="padding: 10px;"><label>Dari Tanggal:</label></td>
                                <td width="85%">
                                    <table width="100%">
                                        <tr>
                                            <td width="40%">
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;?>
" class="form-control tanggal" name="tanggal_dari" placeholder="Klik Untuk Memilih Tanggal" />
                                            </td>
                                            <td style="text-align: center;">
                                                <label>Sd. Tanggal:</label>
                                            </td>
                                            <td width="40%">
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;?>
" class="form-control tanggal" name="tanggal_sampai" placeholder="Klik Untuk Memilih Tanggal" />                                        
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>&nbsp;</td>
                                <td><div id="btn_cari" type="submit" class="btn btn-primary">Tampilkan</div></td>                                
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="form-group">
                        <div id="ekspor_xls" class="btn btn-info">Eksport To Xls</div>
                        <div id="ekspor_pdf" class="btn btn-info">Eksport To Pdf</div>
                    </div>
                    
                    <div id="detail" class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="10%"><div style="text-align: center;">No.</div></th>
                                        <th width="30%"><div style="text-align: center;">Tanggal</div></th>
                                        <th width="30%"><div style="text-align: center;">Total Order</div></th>
                                        <th width="30%"><div style="text-align: center;">Total Qty</div></th>
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
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
</td>                                                                                 
                                            <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
</span></td>                                                                                   
                                            <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['total_qty'];?>
</span></td>                                                                                   
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                    <?php } ?>
                                    <tr>
                                        <td colspan="2" align="right"><span style="font-weight: bold;">TOTAL:&nbsp;&nbsp;</span></td>
                                        <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['jumlah']->value;?>
</span></td>
                                        <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['total_qty']->value;?>
</span></td>
                                    </tr>
                                </tbody>
                                <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                <tfoot><tr><th colspan="4">
                                    <div style="text-align: center;">
                                        <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                            <a class="btn btn-default" href="detailpesanan.php?id=<?php echo $_smarty_tpl->tpl_vars['id_member']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
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
                                                <a class="btn btn-default" href="detailpesanan.php?id=<?php echo $_smarty_tpl->tpl_vars['id_member']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                        <?php }} ?>
                                        <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                            <a class="btn btn-default" href="detailpesanan.php?id=<?php echo $_smarty_tpl->tpl_vars['id_member']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
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
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            $( "#btn_cari" ).click(function() {                
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                
                window.location='detailpesanan.php?id=<?php echo $_smarty_tpl->tpl_vars['id_member']->value;?>
'+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'');            
            });
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

            $( "#ekspor_xls" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();

                $.ajax({
                    type: 'POST',
                    url: 'ekspor.php?id=<?php echo $_smarty_tpl->tpl_vars['id_member']->value;?>
&tanggal_dari='+tanggal_dari+'&tanggal_sampai='+tanggal_sampai,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data, textStatus, jqXHR) {
                        if(data['success']) {
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/readFile.php?name=' + data['filename'];
                        } else {
                            setMessage('error', data['message']);
                        }
                    }, 
                    error: function(jqXHR, textStatus, errorThrown) {
                        setMessage('error', 'Terjadi kesalahan system.');
                    }
                });
            });
            
            $( "#ekspor_pdf" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var url = 'cetak.php?id=<?php echo $_smarty_tpl->tpl_vars['id_member']->value;?>
&tanggal_dari='+tanggal_dari+'&tanggal_sampai='+tanggal_sampai;
                window.open(url, '_blank');
            });
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
