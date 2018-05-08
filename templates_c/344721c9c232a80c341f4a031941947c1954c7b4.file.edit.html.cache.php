<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-07 05:01:29
         compiled from "..\..\templates\back-end\matrix\product\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:20315577c7319dff2b6-81230684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '344721c9c232a80c341f4a031941947c1954c7b4' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\product\\edit.html',
      1 => 1467842486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20315577c7319dff2b6-81230684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577c731a078550_44627358',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'datacategory' => 0,
    'entry' => 0,
    'listjenisuser' => 0,
    'tpl_dir' => 0,
    'listvarian' => 0,
    'no' => 0,
    'listfoto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577c731a078550_44627358')) {function content_577c731a078550_44627358($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/product"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol>
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div id="alert_error" class="col-md-fungsi-6" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="kode">Kode Produk:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kode'];
}?>" class="form-control" name="kode" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Nama Produk:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="penjelasan">Penjelasan Produk:</label>
                        <div class="summernote"></div>
                        <!-- textarea class="form-control" style="height: 120px" name="penjelasan"><?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['penjelasan'];
}?></textarea -->
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Produk:</label>
                        <select multiple class="form-control" name="id_kategori" style="height: 200px;">
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datacategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['entry']->value['id_parent']==0) {?>style="font-weight: bold;"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['is_select']=='Y') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>                                        
                            <?php } ?>                            
                        </select>
                        <label>Gunakan tombol Ctrl untuk pilih lebih dari 1 kategori.
                    </div>
                    
                    <div class="form-group">
                        <label for="keyword">Katakunci Pencarian:</label>
                        <textarea class="form-control" style="height: 80px" name="keyword"><?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['keyword'];
}?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="harga_modal">Harga Modal:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['harga_modal'];
} else { ?>0<?php }?>" class="form-control harga" name="harga_modal" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="harga_jual_umum">Harga Jual Normal:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['harga_jual'];
} else { ?>0<?php }?>" class="form-control harga" name="harga_jual_umum" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="varian">Harga Jual Jenis User:</label>                        
                        <div id="detail_harga_jual" class="table-responsive">
                            <table id="tblHargaUser" width="100%">
                                <thead>
                                    <tr>
                                        <th width="50%"><div style="text-align: center;">Jenis User</div></th>
                                        <th width="50%"><div style="text-align: center;">Harga</div></th>
                                    </tr>
                                </thead>
                                <tbody id="hargauser">
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listjenisuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                        <tr>
                                            <td style="padding: 5px;"><input type="hidden" name="id_jenis_user" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id_jenis_user'];?>
" /><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jenis_user'];?>
" class="form-control" name="jenis_user" class="form-control" readonly="readOnly" /></td>
                                            <td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual'];?>
" class="form-control harga" name="harga_jual" class="form-control" placeholder="" /></td>
                                         </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="tipe_diskon">Penggunaan Diskon:</label>
                        <select class="form-control" name="tipe_diskon">
                            <option value="persentase" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['tipe_diskon']=="persentase") {?> selected="selected" <?php }?>>Menggunakan Persentase</option>
                            <option value="nominal" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['tipe_diskon']=="nominal") {?> selected="selected" <?php }?>>Menggunakan Harga Diskon</option>
                        </select>
                    </div>
                            
                    <div class="form-group">
                        <label for="harga_diskon">Harga Diskon:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['harga_diskon'];
} else { ?>0<?php }?>" class="form-control harga" name="harga_diskon" placeholder="" />
                    </div>
                    
                    <div class="form-group">
                        <label for="persen_diskon">Persentase Diskon:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['persen_diskon'];
} else { ?>0<?php }?>" class="form-control" name="persen_diskon" placeholder="" />
                    </div>
                    
                    <div class="form-group">                        
                        <label for="varian">Varian Stok:</label>
                        <div id="detail_varian" class="table-responsive">
                            <table id="tblVarian" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30%"><div style="text-align: center;">Ukuran</div></th>
                                        <th width="30%"><div style="text-align: center;">Warna</div></th>
                                        <th width="30%"><div style="text-align: center;">Jumlah</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                    </tr>
                                </thead>
                                <tbody id="varian"></tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <style type="text/css">
                            .cropit-image-preview {
                                margin: 5px;
                                background-color: #a6bac4;
                                width: 312px;
                                height: 312px;
                                cursor: move;
                            }
                            .H-new-kol-post-img {
                                margin: 5px;
                                /*background-color: #a6bac4*/;
                                width: 312px;
                                height: 312px;
                            }
                        </style>
                       
                        <label for="photo">Foto Produk:</label>                        
                        <table width="100%" class="row">
                            <tr><td width="100%">
                                <div class="H-new-kol-post-img image-editor_1 col-md-1">
                                    <div id="upload_foto_1" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_1" type="file" name="fileupload_foto_1" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>

                                <div class="H-new-kol-post-img image-editor_2 col-md-1">
                                    <div id="upload_foto_2" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_2" type="file" name="fileupload_foto_2" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>

                                <div class="H-new-kol-post-img image-editor_3 col-md-1">
                                    <div id="upload_foto_3" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_3" type="file" name="fileupload_foto_3" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>

                                <div class="H-new-kol-post-img image-editor_4 col-md-1">
                                    <div id="upload_foto_4" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_4" type="file" name="fileupload_foto_4" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>

                                <div class="H-new-kol-post-img image-editor_5 col-md-1">
                                    <div id="upload_foto_5" class="btn btn-primary" style=" float: right; margin-top: 143px; margin-left: 107px; position: absolute;">Upload Foto</div>
                                    <input id="fileupload_foto_5" type="file" name="fileupload_foto_5" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>                                                       
                            </td></tr>
                        </table>
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Status Produk:</label>
                        <select class="form-control" name="status">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="1") {?> selected="selected" <?php }?>>Publish</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="0") {?> selected="selected" <?php }?>>Unpublish</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label"><input type="checkbox" id="checkbox_tampilkan_stok" name="tampilkan_stok" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['is_tampilkan_stok']=='Y') {?>checked<?php }?>> Tampilkan stok pada detail produk.</label>                    
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
                                        <a id="btn_batal"  href="list.php" class="btn btn-warning">Batal</a>                                                        
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
/assets/js/jquery.cropit.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.input.formatter.js"><?php echo '</script'; ?>
>  
    
    <!-- include summernote -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote-ext-video.js"><?php echo '</script'; ?>
> 
        
    <?php echo '<script'; ?>
 type="text/javascript">
        
        $(document).ready(function () {
            
            $("input.harga").formatInput();
            
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listvarian']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['ukuran'];?>
" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['warna'];?>
" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
" name="jumlah" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_varian">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_varian" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
        });
        
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            
            $('.image-editor_1').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[0]['nama_file']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[0]['nama_file'];?>
',
              }<?php }?>
            });

            $('.image-editor_2').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[1]['nama_file']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[1]['nama_file'];?>
',
              }<?php }?>
            });

            $('.image-editor_3').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[2]['nama_file']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[2]['nama_file'];?>
',
              }<?php }?>
            });

            $('.image-editor_4').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[3]['nama_file']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[3]['nama_file'];?>
',
              }<?php }?>
            });

            $('.image-editor_5').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[4]['nama_file']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[4]['nama_file'];?>
',
              }<?php }?>
            });
            
            $('.summernote').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    //['fontname', ['fontname']],
                    // ['fontsize', ['fontsize']], Still buggy
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    //['view', ['fullscreen' , 'codeview' ]],
                    ['help', ['help']]
                ]
            });

            $(".summernote").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['penjelasan'];
}?>');
                
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
                
                submitProduk();
            });
            
            
            $( document ).on( 'click', '.hapus_varian', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_varian').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah" class="form-control  harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_varian">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                //console.log(record);
                //alert(length);                
            });
                
                                        
            function submitProduk() {
                
                var varian = ''; var row = 0;
                $("#tblVarian tr").each(function() {
                    if(row>0) {
                        var ukuran = $(this).find('[name=ukuran]').val();
                        var warna = $(this).find('[name=warna]').val();
                        var jumlah = $(this).find('[name=jumlah]').val();

                        varian+=(varian==''?'':'\n')+ukuran+'\t'+warna+'\t'+jumlah.replace(',', '');
                    } 
                    row++;
                });

                var harga_user = ''; var row = 0;
                $("#tblHargaUser tr").each(function() {
                    
                    if(row>0) {
                        var id_jenis_user = $(this).find('[name=id_jenis_user]').val();
                        var harga_jual = $(this).find('[name=harga_jual]').val();

                        harga_user+=(harga_user==''?'':'\n')+id_jenis_user+'\t'+harga_jual.replace(',', '');
                    } 
                    row++;
                });
                //console.log(harga_user);
                
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('kode', $('[name=kode]').val());
                data.append('nama', $('[name=nama]').val());
                data.append('penjelasan', $('.summernote').summernote().code().replace(/\n/, '<br />'));
                data.append('keyword', $('[name=keyword]').val());
                
                var kategori = $('[name=id_kategori]').val();
                $id_kategori = '';
                for(var key in kategori) {
                    $id_kategori+=(key>0?',':'')+kategori[key]
                }
                data.append('id_kategori', $id_kategori);
                data.append('harga_modal', ($('[name=harga_modal]').val()).replace(',', ''));
                data.append('harga_jual', ($('[name=harga_jual_umum]').val()).replace(',', ''));
                data.append('harga_jual_user', harga_user);
                data.append('tipe_diskon', $('[name=tipe_diskon]').val());
                data.append('harga_diskon', ($('[name=harga_diskon]').val()).replace(',', ''));
                data.append('persen_diskon', $('[name=persen_diskon]').val());
                data.append('varian', varian);
                data.append('is_tampilkan_stok', $('[name=tampilkan_stok]').is(':checked')?'Y':'N');     
                
                var imageData_1 = $('.image-editor_1').cropit('export');
                data.append('filename_foto_1', imageData_1==undefined?'':imageData_1);

                var imageData_2 = $('.image-editor_2').cropit('export');
                data.append('filename_foto_2', imageData_2==undefined?'':imageData_2);

                var imageData_3 = $('.image-editor_3').cropit('export');
                data.append('filename_foto_3', imageData_3==undefined?'':imageData_3);

                var imageData_4 = $('.image-editor_4').cropit('export');
                data.append('filename_foto_4', imageData_4==undefined?'':imageData_4);

                var imageData_5 = $('.image-editor_5').cropit('export');
                data.append('filename_foto_5', imageData_5==undefined?'':imageData_5);
                  
                data.append('status', $('[name=status]').val());
                
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
                            window.location = 'list.php';                    
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

            $('#upload_foto_1').click(function(){
                $('#fileupload_foto_1').trigger('click'); 
                return false;
            });

            $('#upload_foto_2').click(function(){
                $('#fileupload_foto_2').trigger('click'); 
                return false;
            });

            $('#upload_foto_3').click(function(){
                $('#fileupload_foto_3').trigger('click'); 
                return false;
            });

            $('#upload_foto_4').click(function(){
                $('#fileupload_foto_4').trigger('click'); 
                return false;
            });

            $('#upload_foto_5').click(function(){
                $('#fileupload_foto_5').trigger('click'); 
                return false;
            });             
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
