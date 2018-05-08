<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 20:07:48
         compiled from "..\..\templates\back-end\matrix\konfirmasi_pembayaran\list.html" */ ?>
<?php /*%%SmartyHeaderCode:319915785b8d4522225-82390701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1280d84c6064368587326925aab1cd41377ec94' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\konfirmasi_pembayaran\\list.html',
      1 => 1470139973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319915785b8d4522225-82390701',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5785b8d46c2220_33068609',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'tanggal_dari' => 0,
    'tanggal_sampai' => 0,
    'filter_status' => 0,
    'status' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'tpl_dir' => 0,
    'array_akses' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'alert_success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5785b8d46c2220_33068609')) {function content_5785b8d46c2220_33068609($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/konfirmasi"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                                <td width="20%" style="padding: 8px;"><label>Status Pembayaran:</label></td>
                                <td width="80%">
                                    <select id="filter_status" class="form-control" name="status">
                                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==3) {?>selected="selected"<?php }?>>Semua Status</option>
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==0) {?>selected="selected"<?php }?>>Status Menunggu</option>              
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==1) {?>selected="selected"<?php }?>>Status Tidak Valid</option>              
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==2) {?>selected="selected"<?php }?>>Status Valid</option>              
                                    </select>
                                </td>
                            </tr>
                            
                            <!-- tr>
                                <td width="20%" style="padding: 8px;"><label>Status Pembayaran:</label></td>
                                <td width="80%">
                                    <select id="filter_status" class="form-control" name="status">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value=='0') {?>selected="selected"<?php }?>></option>
                                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['status']->value=='N') {?>selected="selected"<?php }?>>Belum Lunas</option>
                                        <option value="Y" <?php if ($_smarty_tpl->tpl_vars['status']->value=='Y') {?>selected="selected"<?php }?>>Lunas</option>
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
                                
                            </tbody>                                
                        </table>
                    </div>
                    <div id="detail" class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="10%"><div style="text-align: center;">No.</div></th>
                                        <th width="65%"><div style="text-align: center;">Data Transfer</div></th>
                                        <th width="30%"><div style="text-align: center;">Foto Bukti Transfer</div></th>
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
                                            <td>
                                                <table>
                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> <?php if ($_smarty_tpl->tpl_vars['entry']->value['email']=='Guest') {?>Guest<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['last_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['email'];?>
)<?php }?></td></tr>
                                                    <tr><td><b>Tanggal Konfirmasi</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['tgl_jam'];?>
</td></tr>
                                                    <tr><td><b>Kode Pemesanan</b> </td><td><b>:</b> <a href='#'>#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</a></td></tr>
                                                    <tr><td><b>Bank Pengirim</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank_pengirim'];?>
  An. <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pemilik_rekening'];?>
</td></tr>
                                                    <tr><td><b>Bank Tujuan</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['bank_tujuan'];?>
</td></tr>
                                                    <tr><td><b>Jumlah Transfer</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah_transfer'];?>
</td></tr>
                                                    <tr><td><b>Status</b> </td><td><b>:</b> <span id='text_status_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
' style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>green<?php } else { ?>orange<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>Tidak Valid<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>Valid<?php } else { ?>Menunggu<?php }?></span></td></tr>
                                                    <tr><td colspan="2"><div style="margin-top: 10px;">
                                                        <div id="alert_error_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-group" style="display: none;">
                                                            <div class="alert alert-danger">&nbsp;</div>
                                                        </div>
                                                        <div id="alert_success_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-group" style="display: none;">                         
                                                            <div class="alert alert-info">&nbsp;</div>
                                                        </div>
                                                        
                                                        <div id="i_loading_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                                                
                                                        <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div name="btn_valid_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="submit" class="btn btn-primary valid">VALID</div>
                                                        <div name="btn_invalid_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="submit" class="btn btn-warning invalid">INVALID</div><?php }?>
                                                        
                                                    </div></td></tr>
                                                </table>
                                            </td>
                                            <td align="center">
                                                <div class="post-cover">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/konfirmasi/<?php echo $_smarty_tpl->tpl_vars['entry']->value['photo'];?>
" class="thickbox" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['tgl_jam'];?>
" rel="academia-gallery"><img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/konfirmasi/<?php echo $_smarty_tpl->tpl_vars['entry']->value['photo'];?>
" class="academia-loop-img" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['tgl_jam'];?>
" height="125" width="207"></a>
                                                </div><!-- end .post-cover -->
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

    <link rel="stylesheet" id="thickbox.css-css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/css/thickbox.css" type="text/css" media="all">
        
    
    <?php echo '<script'; ?>
 type="text/javascript">
    /* <![CDATA[ */
    //var tb_pathToImage = "<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/thickbox/loadingAnimation.gif";
    //var tb_closeImage = "<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/thickbox/tb-close.png";

    var thickboxL10n = {"next":"","prev":"","image":"","of":"","close": "", "loadingAnimation": "<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/thickbox/loadingAnimation.gif"};
    /* ]]> */
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/thickbox.js"><?php echo '</script'; ?>
>
    
    
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
            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            
            $('#filter_status').on('change', function (e) {
                var filter = $('#filter_status').val();
                window.location='list.php?_'+(filter.length>0?'&status='+filter:'');
            });

            $( "#btn_cari" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var query = $( "#query" ).val();
                var filter = $('#filter_status').val();
                window.location='list.php?_'+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'')+
                    (filter.length>0?'&status='+filter:'')+(query.length>0?'&query='+query:'');
            });

            function setMessage(message, tipe, i) {
                $('#alert_'+tipe+'_'+i+' .alert').text(message);
                $('#alert_'+tipe+'_'+i).show('slow');
                setTimeout(function() {
                    $('#alert_'+tipe+'_'+i).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#baris_'+i).offset().top-100 
                }, 600);
            }

            function setLoading(isLoading, i) {
                if(isLoading) {
                    $('#i_loading_'+i).show();
                    $('[name=btn_valid_'+i+']').hide();
                    $('[name=btn_invalid_'+i+']').hide();
                } else {
                    $('#i_loading_'+i).hide();
                    $('[name=btn_valid_'+i+']').show(); 
                    $('[name=btn_invalid_'+i+']').show();                   
                }
            }

            $( ".valid" ).click(function() {                
                var id = this.getAttribute('id');
                $('<div></div>').appendTo('body')
                    .html('<div>Yakin untuk merubah menjadi valid?</div>')
                    .dialog({
                    modal: true,
                    title: 'Konfirmasi Validasi',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $(this).dialog("close");
                            setLoading(true, id);
                            var data = new FormData();
                            data.append('id', id);  
                            data.append('status', '2');
                            $.ajax({
                                type: 'POST',
                                url: 'update.php',
                                data: data,
                                cache: false,
                                dataType: 'json',
                                processData: false, // Don't process the files
                                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                                success: function(data) {
                                    setLoading(false, id);
                                    if(data['success']) {
                                        setMessage('Proses validasi menjadi valid berhasil.', 'success', id);                            
                                        var element = $("#text_status_"+id);
                                        element.attr("style", 'font-weight: bold; color: green;"');
                                        element.text('Valid');
                                    } else {
                                        setMessage(data['message'], 'error', id);                        
                                    }
                                }, 
                                error: function() {
                                    setLoading(false, id);
                                    setMessage('Kesalahan server. Mohon diulang kembali!', 'error', id);
                                }
                            }); 
                        },
                        No: function () {

                            $(this).dialog("close");
                        }
                    },
                    close: function (event, ui) {
                        $(this).remove();
                    }
                });
            });  


            $( ".invalid" ).click(function() {                
                var id = this.getAttribute('id');
                $('<div></div>').appendTo('body')
                    .html('<div>Yakin untuk merubah menjadi invalid?</div>')
                    .dialog({
                    modal: true,
                    title: 'Konfirmasi Validasi',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $(this).dialog("close");
                            setLoading(true, id);
                            var data = new FormData();
                            data.append('id', id);  
                            data.append('status', '1');
                            $.ajax({
                                type: 'POST',
                                url: 'update.php',
                                data: data,
                                cache: false,
                                dataType: 'json',
                                processData: false, // Don't process the files
                                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                                success: function(data) {
                                    setLoading(false, id);
                                    if(data['success']) {
                                        setMessage('Proses validasi menjadi invalid berhasil.', 'success', id);
                                        var element = $("#text_status_"+id);
                                        element.attr("style", 'font-weight: bold; color: red;"');
                                        element.text('Tidak Valid');
                                    } else {
                                        setMessage(data['message'], 'error', id);                        
                                    }
                                }, 
                                error: function() {
                                    setLoading(false, id);
                                    setMessage('Kesalahan server. Mohon diulang kembali!', 'error', id);
                                }
                            }); 
                        },
                        No: function () {

                            $(this).dialog("close");
                        }
                    },
                    close: function (event, ui) {
                        $(this).remove();
                    }
                });
            });

            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
