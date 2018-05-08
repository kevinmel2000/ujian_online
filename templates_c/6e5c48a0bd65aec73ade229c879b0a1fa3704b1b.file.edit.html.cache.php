<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-30 20:13:30
         compiled from "..\templates\back-end\AdminLTE-2.3.6\pengguna\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2267757bb74133007f8-98713338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5c48a0bd65aec73ade229c879b0a1fa3704b1b' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\pengguna\\edit.html',
      1 => 1472562808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2267757bb74133007f8-98713338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bb7413445b25_84053259',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb7413445b25_84053259')) {function content_57bb7413445b25_84053259($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
">Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pengguna/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">      
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            
                            <!-- /.box-header -->
                            <div class="box-body">
                                  <div class="row">

                                    <div class="col-md-12">
                                        <div id="alert_error" class="form-group" style="display: none;">                         
                                            <div class="alert alert-danger">&nbsp;</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="propinsi">Propinsi:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_propinsi'];
}?>" class="form-control" name="nama_propinsi" />
                                            <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['id_prop'];
}?>" name="id_propinsi" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="kabupaten">Kabupaten / Kota:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama_kabupaten'];
}?>" class="form-control" name="nama_kabupaten" />
                                            <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['id_kabupaten'];
}?>" name="id_kabupaten" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nama">Nama:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="username">Username:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['username'];
}?>" class="form-control" name="username" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['password'];
}?>" class="form-control" name="password" />
                                        </div>

                                        <div class="form-group">
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/loading.gif" /></div>                  
                                            <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                            <a id="btn_batal"  href="list.php" class="btn btn-warning">Batal</a>                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
              
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                  
    </div>
    <!-- ./wrapper -->
        
    <!-- jQuery 2.2.3 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.6 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- jvectormap -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <!-- SlimScroll 1.3.0 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    
    
    <!-- ChartJS 1.0.1 -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/chartjs/Chart.min.js"><?php echo '</script'; ?>
 -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/pages/dashboard2.js"><?php echo '</script'; ?>
 -->
    
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/demo.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.datepick.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.plugin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.datepick.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        
        function removeDuplicates(s) {
            var result = "";
            for (var i = 0; i < s.length; i++) {
		var c = s.charAt(i);
		if (result.indexOf(c) == -1) result += c;
            }
            return result;
        }
        
        function randomInt(n) {
            var x = randomIntMathRandom(n);
            x = (x + randomIntBrowserCrypto(n)) % n;
            return x;
        }
        
        function randomIntMathRandom(n) {
            var x = Math.floor(Math.random() * n);
            if (x < 0 || x >= n)
                throw "Arithmetic exception";
            return x;
        }


        function randomIntBrowserCrypto(n) {
            if (typeof Uint32Array == "function" && "crypto" in window && "getRandomValues" in window.crypto) {
                // Generate an unbiased sample
                var x = new Uint32Array(1);
                do window.crypto.getRandomValues(x);
                while (x[0] - x[0] % n > 4294967296 - n);
                return x[0] % n;
            } else
                return 0;
        }

        function generate() {
            var charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            charset = removeDuplicates(charset);
            charset = charset.replace(/ /, "\u00A0");  // Replace space with non-breaking space
        		
            var password = "";
            var length = 10;
            for (var i = 0; !(i >= length); i++) {
                password += charset.charAt(randomInt(charset.length));
            }
          
            return password;
        }
                
                
        $(function () {           
            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            
            $('[name=nama_propinsi]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_propinsi]').val('');
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/propinsiDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
                            $('[name=id_propinsi]').val('');
                            response( $.map( data, function( item ) {
                                return {
                                    label: item['display'],
                                    value: item['value'],
                                    data : item['data']
                                };
                            }));
                        }
                    });
                },
                autoFocus: true,	      	
                minLength: 1,
                select: function( event, ui ) {
                    var data = ui.item.data;
                    $('[name=id_propinsi]').val(data['id']);
                    $('[name=nama]').val("BKD Propinsi "+data['name']);
                    $('[name=username]').val("bkd_prop_"+data['name'].toLowerCase().replace(" ", "_"));
                    $('[name=password]').val(generate());
                }		      	
            });
            
            $('[name=nama_kabupaten]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_kabupaten]').val('');
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/kabupatenDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            prop: $('[name=id_propinsi]').val()
                        },
                        success: function( data ) {
                            $('[name=id_kabupaten]').val('');
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
                    $('[name=id_kabupaten]').val(data['id']);
                    $('[name=nama]').val("BKD "+data['name']);
                    $('[name=username]').val("bkd_"+data['name'].toLowerCase().replace(" ", "_"));
                    $('[name=password]').val(generate());
                }		      	
            });
            
            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('body').offset().top 
                }, 600);
            }

            $('#btn_simpan').click(function() {
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('id_propinsi', $('[name=id_propinsi]').val());
                data.append('nama_propinsi', $('[name=nama_propinsi]').val());
                data.append('id_kabupaten', $('[name=id_kabupaten]').val());
                data.append('nama_kabupaten', $('[name=nama_kabupaten]').val());
                data.append('nama', $('[name=nama]').val());
                data.append('username', $('[name=username]').val());
                data.append('password', $('[name=password]').val());
                
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
