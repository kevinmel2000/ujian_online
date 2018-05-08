<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 07:04:56
         compiled from "..\..\templates\back-end\matrix\message\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1837578edcc24b8271-79259991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6b67b257edf6398d69d6d2016212b4cc0afd80' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\message\\edit.html',
      1 => 1469843739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1837578edcc24b8271-79259991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578edcc256ad74_16378688',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578edcc256ad74_16378688')) {function content_578edcc256ad74_16378688($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/message_out/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                    <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>
                        <div class="form-group">
                            <label for="from">Dari:</label>
                            <div class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['from_name'];?>
</div>
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
" name="to" />
                        </div>

                        <div class="form-group">
                            <label for="pesan">Pesan:</label>
                            <div id="pesan_dari" class="form-control" style="height: 200px; overflow: auto;">
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['pesan'];?>

                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="form-group">
                            <label for="to">Kepada:</label>
                            <input id="to" type="text" class="form-control" />
                            <input type="hidden" name="to" />
                            <label class="control-label"><input type="checkbox" id="checkbox_semua" name="semua" value="1"> Semua Customer</label>
                        </div>
                    <?php }?>
                    
                    <div class="form-group">
                        <label for="pesan"><?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>Balas<?php } else { ?>Isi<?php }?> Pesan:</label>
                        <div class="summernote"></div>
                    </div>
                    
                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <td width="100%">&nbsp;</td> 
                                    <td nowrap>
                                        <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                                        <div id="btn_simpan" type="submit" class="btn btn-primary">Kirim</div>
                                        <a id="btn_batal"  href="list.php" class="btn btn-warning">Kembali</a>                                                        
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

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
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
        
        $(function () {           
            
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
            
            $('#checkbox_semua').on('change', function(){
                if($(this).is(':checked')) {  //true
                    $('#to').prop('disabled', true);
                } else {
                    $('#to').prop('disabled', false);
                }    
            });
                    
            $('#to').autocomplete({
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
                    $('[name=to]').val(data['id']);                    
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
                    
                var data = new FormData();
                data.append('to', $('[name=to]').val());
                data.append('pesan', $('.summernote').summernote().code().replace(/\n/, '<br />'));
                data.append('semua', $('[name=semua]').is(':checked')?"Y":"N");
                
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
</html><?php }} ?>
