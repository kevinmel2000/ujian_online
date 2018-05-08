<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-27 09:34:59
         compiled from "..\..\templates\back-end\matrix\bank\list.html" */ ?>
<?php /*%%SmartyHeaderCode:3160657708c8fa81070-96784730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e92908f3c76a6b3f5004d07636983fa4ccf016fa' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\bank\\list.html',
      1 => 1466994896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3160657708c8fa81070-96784730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57708c8fbdd841_66281570',
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
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57708c8fbdd841_66281570')) {function content_57708c8fbdd841_66281570($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/transferbank"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                                    <td><div id='btn_add' class="btn btn-primary">Baru</div></td>
                                    <td width="5px">&nbsp;</td>
                                    <td><div id='btn_edit' class="btn btn-success disabled">Edit</div></td>
                                    <td width="5px">&nbsp;</td>
                                    <td><div id='btn_delete' class="btn btn-danger disabled">Hapus</div></td>
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
                                        <th width="5%"><div style="text-align: center;">No.</div></th>
                                        <th width="20%"><div style="text-align: center;">Nama Bank</div></th>
                                        <th width="20%"><div style="text-align: center;">No. Rekening</div></th>
                                        <th width="25%"><div style="text-align: center;">Atas Nama</div></th>
                                        <th width="10%"><div style="text-align: center;">Status</div></th>
                                        <th width="10%"><div style="text-align: center;">Logo</div></th>
                                        <th width="10%"><div style="text-align: center;">Aksi</div></th>
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
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank'];?>
</td>
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['no_rekening'];?>
</td>
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pemilik_rekening'];?>
</td>
                                            <td align="center"><span style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_aktif']=="Y") {?>green<?php } else { ?>red<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['is_aktif']=="Y") {?>Aktif<?php } else { ?>Tidak Aktif<?php }?></span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/bank/<?php if ($_smarty_tpl->tpl_vars['entry']->value['gambar']!='') {
echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];
} else { ?>default.png<?php }?>" width="75" />
                                            </div></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-success edit">Edit</div>
                                                    <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger hapus">Hapus</div>                                                        
                                                </div>
                                            </td>                                          
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                    <?php } ?>
                                </tbody>
                                <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                <tfoot><tr><th colspan="8">
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
            
            $( "#btn_add" ).click(function() {
                window.location='add.php';
            });
            
            $( "#btn_edit" ).click(function() {
                window.location='edit.php?id='+delete_selected;
            });
            
            $( "#btn_delete" ).click(function() {
                prosesDelete(delete_selected);
            });
            
            $( "#btn_cari" ).click(function() {
                var query = $( "#query" ).val();
                window.location='list.php'+(query.length>0?'?query='+query:'');
            });

            $( ".hapus" ).click(function() {                
                var id = this.getAttribute('id_select');
                prosesDelete(id);                
            });

            $( ".edit" ).click(function() {
                var id = this.getAttribute('id_select');
                window.location='edit.php?id='+id;
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

            function prosesDelete(id) {
                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin menghapus data?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Penghapusan',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Hapus...');
                            $.ajax({
                                url: 'delete.php',
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
