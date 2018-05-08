<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-04 16:41:08
         compiled from "..\..\templates\back-end\matrix\pengaturan\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2147578cacd26da7a8-04094079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ad72054b4c70503e5c4f3d6d3534b92b90b3f0' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\pengaturan\\edit.html',
      1 => 1470303663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2147578cacd26da7a8-04094079',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578cacd2797854_92301447',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'array_akses' => 0,
    'listpropinsi' => 0,
    'entry' => 0,
    'listtelepon' => 0,
    'no' => 0,
    'listno_hp' => 0,
    'listsms' => 0,
    'listwa' => 0,
    'listbbm' => 0,
    'listline' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578cacd2797854_92301447')) {function content_578cacd2797854_92301447($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/pesanandalamproses/keepbelumlunas/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol -->
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div class="form-group">
                        <ul id="myTab" class="nav nav-tabs">                                
                            <li class="active">
                                <a href="#umum" data-toggle="tab"><b>Data Umum</b></a>
                            </li>                                 
                            <li>
                                <a href="#alamat" data-toggle="tab"><b>Alamat Toko</b></a>
                            </li>                                
                            <li>
                                <a href="#pengaturan" data-toggle="tab"><b>Pengaturan</b></a>
                            </li> 
                        </ul>
                    </div>
                    
                    <div id="alert_success" class="form-group" style="display: none;">                         
                        <div class="alert alert-info">&nbsp;</div>
                    </div>
                
                    <div id="alert_error" class="form-group" style="display: none;">                         
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                    
                    <div class="form-group tab-content">
                        <div class="tab-pane fade active in" id="umum">
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <label for="judul">Judul Webite:</label>
                                <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['judul'];
}?>" class="form-control" name="judul" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label for="tagline">Tag Line:</label>
                                <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['tagline'];
}?>" class="form-control" name="tagline" placeholder="" />
                            </div>
                            
                            <div class="form-group">
                                <label for="detail">Tentang Website:</label>
                                <div class="summernote"></div>
                            </div>
                            
                            <div class="form-group">
                                <label for="gambar">Logo:</label>                        
                                <style type="text/css">
                                    .cropit-image-preview {
                                        border:1px solid #a6bac4;
                                        width: 227px;
                                        height: 73px;
                                        cursor: move;
                                    }
                                    .H-new-kol-post-img {
                                        width: 227px;
                                        height: 73px;
                                    }
                                </style>
                                <div class="H-new-kol-post-img image-editor">
                                    <input id="fileupload_gambar" type="file" name="fileupload_gambar" style="display:none;" class="cropit-image-input" />
                                    <div class="cropit-image-preview"></div>
                                </div>
                                <label>Ukuran 227 X 73 px</label><br />   
                                <div id="upload_gambar" class="btn btn-primary">Upload</div>
                             </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['email'];
}?>" class="form-control" name="email" placeholder="" />
                            </div>
                            
                            <div class="form-group">                        
                                <label for="telepon">Telepon:</label>
                                <div id="detail_telepon" class="table-responsive">
                                    <table id="tblTelepon" width="100%">
                                        <tbody id="telepon"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="no_hp">No. HP:</label>
                                <div id="detail_no_hp" class="table-responsive">
                                    <table id="tblNo_hp" width="100%">
                                        <tbody id="no_hp"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="sms">SMS:</label>
                                <div id="detail_sms" class="table-responsive">
                                    <table id="tblSms" width="100%">
                                        <tbody id="sms"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="wa">WA:</label>
                                <div id="detail_wa" class="table-responsive">
                                    <table id="tblWa" width="100%">
                                        <tbody id="wa"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="bbm">BBM:</label>
                                <div id="detail_bbm" class="table-responsive">
                                    <table id="tblBbm" width="100%">
                                        <tbody id="bbm"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">                        
                                <label for="line">Line:</label>
                                <div id="detail_line" class="table-responsive">
                                    <table id="tblLine" width="100%">
                                        <tbody id="line"></tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <div id="i_loading_umum" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                                <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_umum" class="btn btn-primary">Update</div><?php }?>
                            </div>
                            
                        </div>
                        
                        <div class="tab-pane fade" id="alamat">
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <label for="alamat">Alamat Toko:</label>
                                <textarea class="form-control" style="height: 50px;" name="alamat"><?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['alamat'];
}?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="propinsi">Propinsi:</label>
                                <select id="propinsi" name="propinsi" class="form-control">
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['data']->value[0]['id_propinsi']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="kota">Kota:</label>
                                <select id="kota" name="kota" class="form-control"></select>
                            </div>
                            
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos:</label>
                                <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kode_pos'];
}?>" class="form-control" name="kode_pos" />
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="latitude">Latitude:</label>
                                <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['latitude'];
}?>" class="form-control" name="latitude" />
                            </div>
                            
                            <div class="form-group">
                                <label for="longitude">Longitude:</label>
                                <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['longitude'];
}?>" class="form-control" name="longitude" />
                            </div>
                            
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <div id="i_loading_alamat" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                                <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_alamat" class="btn btn-primary">Update</div><?php }?>
                            </div>
                        </div>
                            
                        
                        <div class="tab-pane fade" id="pengaturan">
                            <div class="form-group">&nbsp;</div>
                            
                            <div class="form-group">
                                <label for="jatuh_tempo">Jatuh Tempo Pemesanan:</label>
                                <select name="jatuh_tempo" class="form-control">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="1") {?> selected="selected" <?php }?>>1 Hari</option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="2") {?> selected="selected" <?php }?>>2 Hari</option>
                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="3") {?> selected="selected" <?php }?>>3 Hari</option>
                                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="4") {?> selected="selected" <?php }?>>4 Hari</option>
                                    <option value="5" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="5") {?> selected="selected" <?php }?>>5 Hari</option>
                                    <option value="6" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="6") {?> selected="selected" <?php }?>>6 Hari</option>
                                    <option value="7" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="7") {?> selected="selected" <?php }?>>7 Hari</option>                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stok_minimum">Peringatan Stok Minimum:</label>
                                <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['stok_minimum'];
}?>" class="form-control" name="stok_minimum" />
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label"><input type="checkbox" id="checkbox_tampilkan_stok" name="tampilkan_stok" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['is_tampilkan_stok']=='Y') {?>checked<?php }?>> Tampilkan stok pada detail produk.</label>                    
                            </div>
                            
                            <div class="form-group">&nbsp;</div>
                            <div class="form-group">
                                <div id="i_loading_pengaturan" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                                <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_pengaturan" class="btn btn-primary">Update</div><?php }?>
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.cropit.js"><?php echo '</script'; ?>
>  
        
    <?php echo '<script'; ?>
 type="text/javascript">        
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listtelepon']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['telepon'];?>
" name="telepon" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_telepon">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_telepon" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#telepon" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
            
            $( document ).on( 'click', '.hapus_telepon', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_telepon').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="telepon" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_telepon">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#telepon" );
            });
            //-----------------
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listno_hp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['no_hp'];?>
" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_no_hp">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_no_hp" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#no_hp" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
            
            $( document ).on( 'click', '.hapus_no_hp', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_no_hp').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_no_hp">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#no_hp" );
            });
            //---------------------
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listsms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['sms'];?>
" name="sms" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_sms">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_sms" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#sms" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
            
            $( document ).on( 'click', '.hapus_sms', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_sms').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="sms" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_sms">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#sms" );
            });
            //------
            
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listwa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['wa'];?>
" name="wa" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_wa">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_wa" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#wa" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
            
            $( document ).on( 'click', '.hapus_wa', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_wa').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="wa" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_wa">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#wa" );
            });
            //-----------------
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listbbm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['bbm'];?>
" name="bbm" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_bbm">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_bbm" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#bbm" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
            
            $( document ).on( 'click', '.hapus_bbm', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_bbm').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="bbm" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_bbm">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#bbm" );
            });
            //---------------------
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['line'];?>
" name="line" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_line">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_line" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#line" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
            
            $( document ).on( 'click', '.hapus_line', function() {
               
                var element = $(this).closest('tr');
                element.remove();
                
            });

            $('#btn_tambah_line').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="line" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_line">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#line" );
            });
            //-----------
            
            $('#propinsi').on('change', function (e) {
                loadKota(this.value, 0);
            });
            
            function loadKota(propinsi, kota) {
                $("#kota").empty();
                //$('<option value="0">-- Pilih Kota --</option>').appendTo('#kota');

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
                        $("#kota").empty();
                        $(data).appendTo('#kota');
                    }
                });    
            }
            
            <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['propinsi']>0) {?>loadKota('<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['propinsi'];?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['kota'];?>
');<?php }?>
                
            $('.summernote').summernote({
                height: 170,
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
echo $_smarty_tpl->tpl_vars['data']->value[0]['detail'];
}?>');
            
            $('.image-editor').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['logo']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/umum/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['logo'];?>
',
              }<?php }?>
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
            
            $('#btn_simpan_pengaturan').click(function() {            
                var data = new FormData();
                data.append('jatuh_tempo', $('[name=jatuh_tempo]').val());
                data.append('stok_minimum', $('[name=stok_minimum]').val());
                data.append('is_tampilkan_stok', $('[name=tampilkan_stok]').is(':checked')?'Y':'N');     
                
                setLoading(true, 'pengaturan');
                $.ajax({
                    type: 'POST',
                    url: 'updatePengaturan.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'pengaturan');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'pengaturan');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            $('#btn_simpan_alamat').click(function() {            
                var data = new FormData();
                data.append('address', $('[name=alamat]').val());
                data.append('propinsi', $('[name=propinsi]').val());
                data.append('nama_propinsi', $("#propinsi option[value='"+$('[name=propinsi]').val()+"']").text());
                data.append('kota', $('[name=kota]').val());
                data.append('nama_kota', $("#kota option[value='"+$('[name=kota]').val()+"']").text());
                data.append('kode_pos', $('[name=kode_pos]').val());                
                data.append('latitude', $('[name=latitude]').val());                
                data.append('longitude', $('[name=longitude]').val());
                
                setLoading(true, 'alamat');
                $.ajax({
                    type: 'POST',
                    url: 'updateAlamat.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'alamat');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'alamat');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            $('#btn_simpan_umum').click(function() {            
                
                var telepon = '';
                $("#tblTelepon tr").each(function() {
                    var data = $(this).find('[name=telepon]').val();
                    telepon+=(telepon==''?'':'\t')+data;
                });
                
                var no_hp = '';
                $("#tblNo_hp tr").each(function() {
                    var data = $(this).find('[name=no_hp]').val();
                    no_hp+=(no_hp==''?'':'\t')+data;
                });
                
                var sms = '';
                $("#tblSms tr").each(function() {
                    var data = $(this).find('[name=sms]').val();
                    sms+=(sms==''?'':'\t')+data;
                });
                
                var wa = '';
                $("#tblWa tr").each(function() {
                    var data = $(this).find('[name=wa]').val();
                    wa+=(wa==''?'':'\t')+data;
                });
                
                var bbm = '';
                $("#tblBbm tr").each(function() {
                    var data = $(this).find('[name=bbm]').val();
                    bbm+=(bbm==''?'':'\t')+data;
                });
                
                var line = '';
                $("#tblLine tr").each(function() {
                    var data = $(this).find('[name=line]').val();
                    line+=(line==''?'':'\t')+data;
                });
        
                var data = new FormData();
                data.append('judul', $('[name=judul]').val());
                data.append('tagline', $('[name=tagline]').val());
                data.append('detail', $('.summernote').summernote().code().replace(/\n/, '<br />'));
                var imageData = $('.image-editor').cropit('export');
                data.append('filename_gambar', imageData==undefined?'':imageData);
                
                data.append('email', $('[name=email]').val());                
                data.append('telepon', telepon);                
                data.append('no_hp', no_hp);
                data.append('sms', sms);                
                data.append('wa', wa);
                data.append('bbm', bbm);                
                data.append('line', line);

                setLoading(true, 'umum');
                $.ajax({
                    type: 'POST',
                    url: 'updateUmum.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'umum');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'umum');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });
            
            function setLoading(isLoading, tab) {
                if(isLoading) {
                    $('#i_loading_'+tab).show();
                    $('#btn_simpan_'+tab).hide();
                } else {
                    $('#i_loading_'+tab).hide();
                    $('#btn_simpan_'+tab).show();                    
                }
            }

            $('#upload_gambar').click(function(){
                $('#fileupload_gambar').trigger('click'); 
                return false;
            });
            
            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        
            <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
