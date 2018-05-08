<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-28 09:12:10
         compiled from "..\templates\front-end\accecories\message\inbox.html" */ ?>
<?php /*%%SmartyHeaderCode:54775796c412e3f296-59015591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb7d1746950f963c83700235c731b9a65084dfc' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\message\\inbox.html',
      1 => 1469671909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54775796c412e3f296-59015591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5796c413168e51_52025372',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'umum' => 0,
    'totalpage' => 0,
    'currentpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'query' => 0,
    'limitpage' => 0,
    'no' => 0,
    'tpl_dir' => 0,
    'widget_kanan' => 0,
    'entry_widget' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5796c413168e51_52025372')) {function content_5796c413168e51_52025372($_smarty_tpl) {?><!doctype html>
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
                    <li class="active">Message</li>
               	</ul>
            </div>
        </div>
        <?php }?>
        
        <div class="main">
            <div class="container">
                
                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><span <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>style="font-weight: bold;"<?php }?>>Dari: <?php echo $_smarty_tpl->tpl_vars['umum']->value['judul'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
)</span></label><br />
                                    <span <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>style="font-weight: bold;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['pesan'];?>
</span>
                                </div>

                                <div class="form-group">
                                    <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger delete">Hapus</div> <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger read">Baca</div><br />
                                    <div class="line2 mtb20"></div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                            <div class="col-sm-12 text-center">
                                <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;?>
&a">&larr; Prev</a>
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
/message/?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
&a"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                    <?php }?>
                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                <?php }} ?>
                                <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;?>
&a">Next &rarr;</a>
                                <?php }?>                            
                            </div>
                        <?php }?>
                        
                    <?php } else { ?>                    
                        <div class="col-sm-9">
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                            <h4>Pesan Masuk</h4>
                            <div class="line2 mtb20"></div>

                            <div id="alert_error" class="col-sm-12" style="display: none;">
                                <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                            </div>

                            <div id="alert_success" class="col-sm-12" style="display: none;">
                                <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;</span></div>                            
                            </div>

                            <div class="form-group">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><div id='btn_balas' class="btn btn-primary disabled">Balas</div></td>
                                            <td width="5px">&nbsp;</td>
                                            <td><div id='btn_delete' class="btn btn-danger disabled">Hapus</div></td>
                                            <td width="5px">&nbsp;</td>
                                            <td width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="" /></td>
                                            <td width="5px">&nbsp;</td> 
                                            <td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
                                            <td width="5px">&nbsp;</td> 
                                            <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/">Reset</a></td>   
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
                                            <th width="20%"><div style="text-align: center;">Tanggal</div></th>
                                            <th width="20%"><div style="text-align: center;">Dari</div></th>
                                            <th width="50%"><div style="text-align: center;">Pesan</div></th>
                                            <th width="5%"><div style="text-align: center;">Aksi</div></th>
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
                                                <td align="center"><span <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>style="font-weight: bold;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</span></td>
                                                <td align="center"><span <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>style="font-weight: bold;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
</span></td>
                                                <td align="left"><span <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>style="font-weight: bold;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['from_name'];?>
</span></td>
                                                <td align="left"><span <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>style="font-weight: bold;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['pesan'];?>
</span></td>
                                                <td><div style="text-align: center;  white-space: nowrap;">
                                                        <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger read">Baca</div>                                                  
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
                                                <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
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
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                            <?php }} ?>
                                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>
                                            <?php }?>                                
                                        </div>  
                                    </th></tr></tfoot>
                                    <?php }?>
                                </table>
                            </div>
                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 <?php }?>
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
        
        <!-- jQuery Ui -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    
        <!-- LOAD MASKING -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/loadmask.css" rel="stylesheet" />
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.loadmask.min.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />
    
        <!-- Owl Carousel Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function () {
                
                <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
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
                <?php }?>
                
                var delete_selected = "";

                $( "#btn_balas" ).click(function() {
                    window.location='<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/edit.php?id='+delete_selected;
                });

                $( "#btn_delete" ).click(function() {
                    prosesDelete(delete_selected);
                });

                $( "#btn_cari" ).click(function() {
                    var query = $( "#query" ).val();
                    window.location='<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/'+(query.length>0?'?query='+query:'');
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

                $( ".read" ).click(function() {
                    var id = this.getAttribute('id_select');
                    window.location='<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/edit.php?id='+id+'<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>&a<?php }?>';
                });

                function setButton() {
                    var temp = new Array();
                    if(delete_selected.length>0) temp = delete_selected.split(',');                
                    $( "#btn_balas" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
                    $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
                }

                function setMessage(type, message) {
                    $('#alert_'+type+' .alert').text(message);
                    $('#alert_'+type).show('slow');
                    setTimeout(function() {
                        $('#alert_'+type).hide('slow');
                    }, 5000);
                    $("body, html").animate({ 
                        scrollTop: $('.main').offset().top 
                    }, 600);
                }

                function prosesDelete(id) {
                    
                    
                <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
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
                                    url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/delete.php',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { id: id },
                                    success: function(data, textStatus, jqXHR) {
                                        if(data['success']) {
                                            window.location='<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>?query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
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
                    <?php } else { ?> 
                        $.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/delete.php',
                            type: 'POST',
                            dataType: 'json',
                            data: { id: id },
                            success: function(data, textStatus, jqXHR) {
                                if(data['success']) {
                                    window.location='<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/?a<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
                                    window.cpjs.sendToAndroid('true|'+data['message']);
                                } else {
                                    window.cpjs.sendToAndroid('false|'+data['message']);
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!'); 
                            }
                        });
                    <?php }?>
                }

                <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        
                <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
            });
        <?php echo '</script'; ?>
>
        
  </body>
</html>
<?php }} ?>
