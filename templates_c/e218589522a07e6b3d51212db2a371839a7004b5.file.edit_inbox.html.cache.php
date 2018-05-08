<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 07:30:07
         compiled from "..\templates\front-end\accecories\message\edit_inbox.html" */ ?>
<?php /*%%SmartyHeaderCode:184765796cf07535ce1-66808063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e218589522a07e6b3d51212db2a371839a7004b5' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\message\\edit_inbox.html',
      1 => 1469671803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184765796cf07535ce1-66808063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5796cf075d9a45_93263667',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'widget_kanan' => 0,
    'entry_widget' => 0,
    'data_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5796cf075d9a45_93263667')) {function content_5796cf075d9a45_93263667($_smarty_tpl) {?><!doctype html>
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
                    <div class="col-sm-<?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>9<?php } else { ?>12<?php }?>">
                        <h4>Balas Pesan</h4>
                        <div class="line2 mtb20"></div>
                        <div id="alert_error" class="form-group" style="display: none;">
                            <div class="alert alert-danger">&nbsp;Error!</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="from">Dari:</label>
                            <div class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['from_name'];?>
</div>
                        </div>

                        <div class="form-group">
                            <label for="pesan">Isi Pesan:</label>
                            <div id="pesan_dari" class="form-control" style="height: 200px; overflow: auto;">
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['pesan'];?>

                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pesan">Balas Pesan:</label>
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                <textarea name="pesan" class="form-control" height="200px"></textarea>
                            <?php } else { ?>
                                <div class="summernote"></div>
                            <?php }?>
                        </div>

                        <div class="form-group">
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="100%">&nbsp;</td> 
                                        <td nowrap>
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading.gif" /></div>                  
                                            <div id="btn_simpan" type="submit" class="btn btn-primary">Kirim</div>
                                            <a id="btn_batal"  href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>?a<?php }?>" class="btn btn-warning">Batal</a>                                                        
                                        </td>
                                    </tr>
                                </tbody>                                
                            </table>
                        </div>                     
                    </div>
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
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">

            <!-- include summernote -->
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/dist/summernote.css">
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/dist/summernote.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/dist/summernote-ext-video.js"><?php echo '</script'; ?>
> 

            <!-- Owl Carousel Js -->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
        <?php }?>
        
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function () {
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
            
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
                <?php }?>
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
                    clickSound();
                    
                    var data = new FormData();
                    data.append('from', '<?php echo $_smarty_tpl->tpl_vars['data_user']->value['user']['id'];?>
');
                    data.append('pesan', <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>$('.summernote').summernote().code().replace(/\n/, '<br />')<?php } else { ?>$('[name=pesan]').val()<?php }?>);
                    
                    setLoading(true);
                    $.ajax({
                        type: 'POST',
                        url: 'kirim.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoading(false);
                            
                            if(data['success']) {
                                window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/message/<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>?a<?php }?>';                    
                                window.cpjs.sendToAndroid('true|'+data['message']);
                            } else {
                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                    window.cpjs.sendToAndroid('false|'+data['message']);                                
                                <?php } else { ?>
                                    setErrorMessage(data['message']); 
                                <?php }?>
                            }
                        }, 
                        error: function() {
                            setLoading(false);
                            <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');                                
                            <?php } else { ?>
                                setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                            <?php }?>
                        }
                    }); 
                });

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

            });
        <?php echo '</script'; ?>
>
        
  </body>
</html>
<?php }} ?>
