<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 08:46:30
         compiled from "..\..\templates\back-end\matrix\contentleft\list.html" */ ?>
<?php /*%%SmartyHeaderCode:158025781e8db1aff19-91754352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b13760f6599ee06edc1df18b0943b0628fc816f9' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\contentleft\\list.html',
      1 => 1469843739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158025781e8db1aff19-91754352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5781e8db2aa800_86478038',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'listwidget' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
    'no' => 0,
    'query' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5781e8db2aa800_86478038')) {function content_5781e8db2aa800_86478038($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/contentleft/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                        <table>
                            <tbody>
                                <tr>
                                    <td width="10px">&nbsp;</td>
                                    <td><div id='btn_add' class="btn btn-primary">Baru</div></td>
                                </tr>
                            </tbody>                                
                        </table>
                    </div>
                    <style>
                        #widget {
                            display:inline-block;
                        }
                        
                        #widget ul {
                            padding: 10px;
                            margin: 0px;
                            border-radius: 10px;
                            /*border: 1px solid #c5c5c5;*/
                            min-width:100%; /* at least the size of the header */
                            width:auto; /* size the block automatically */
                        }
                        #widget li {
                            color:#fff;
                            list-style: none;
                            white-space:nowrap;
                            /*padding-bottom: 20px;*/
                            margin-bottom: 3px;
                            padding: 5px;
                            border: 1px solid #c5c5c5;
                            
                            cursor: move;
                        }
                        
                        .image_widget { 
                           position: relative; 
                           width: 100%; /* for IE 6 */
                        }
                                          
                        .title_widget {
                            position: absolute;
                            top: 15px;
                            left: 8px;
                        }
                        .aksi_widget {
                            position: absolute;
                            top: 0px;
                            left: 445px;                            
                            cursor: pointer;
                        }
                        
                        .kolom_widget {
                            position: absolute;
                            top: 3px;
                            left: 125px;
                            font-size: smaller;
                            text-align: right;
                            width: 75px;
                        }
                    </style>
                    <div id="widget">
                        <ul>
                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listwidget']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                            <li id="arrayorder_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                <div class="image_widget">
                                    <!-- img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/adminweb/images/widget/<?php if ($_smarty_tpl->tpl_vars['entry']->value['jumlah_kolom']==1) {?>single<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['jumlah_kolom']==2) {?>double<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['jumlah_kolom']==3) {?>triple<?php } else { ?>more<?php }?>.png" width="450px" / -->
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/category.png" width="570px" />
                                    <div class="title_widget"><?php echo $_smarty_tpl->tpl_vars['entry']->value['judul'];?>
</div>
                                    <div class="kolom_widget"><?php echo $_smarty_tpl->tpl_vars['entry']->value['tipe'];?>
</div>
                                    <div class="aksi_widget">
                                        <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-success edit">Edit</div>
                                        <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger hapus">Hapus</div>
                                    </div>
                                </div>                                
                            </li>
                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                        <?php } ?>
                        </ul>
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
            
            $( "#btn_add" ).click(function() {
                window.location='add.php';
            });
            
            $( ".hapus" ).click(function() {                
                var id = this.getAttribute('id_select');
                prosesDelete(id);                
            });

            $( ".edit" ).click(function() {
                var id = this.getAttribute('id_select');
                window.location='edit.php?id='+id;
            });
            
            $("#widget ul").sortable({ 
                opacity: 0.8, 
                cursor: 'move', 
                update: function() {
                    var order = $(this).sortable("serialize") + '&update=update'; 
                    $.post("updateList.php", order, function(theResponse){

                        //$("#response").html(theResponse);
                        //$("#response").slideDown('slow');
                        //slideout();
                    }); 															 
                }								  
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
