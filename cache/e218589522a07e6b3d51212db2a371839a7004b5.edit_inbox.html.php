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
    '58a5b28cc3d8e04dfebe2eea1998e05194edf0eb' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\head.html',
      1 => 1469594534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184765796cf07535ce1-66808063',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579fe990066884_53246795',
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
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579fe990066884_53246795')) {function content_579fe990066884_53246795($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gomochart : Ecommerce Template</title>
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="HTMLCooker">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
		
		<!-- =============== Google fonts =============== -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		   
		<!-- Font Awesome CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/bootstrap.min.css" rel="stylesheet">
		
                                
                                
                <!-- Animate CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/animate.css" rel="stylesheet">
		<!-- Owl Carousel CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/owl.carousel.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/style.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/style-green.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/local.css" rel="stylesheet">
		<!-- Responsive CSS -->
		<link href="http://192.168.1.101/gomocart/templates/front-end/accecories/css/responsive.css" rel="stylesheet">
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.http://192.168.1.101/gomocart/templates/front-end/accecories/js/1.4.2/respond.min.js"></script>
		<![endif]-->
                
                
    <script type="text/javascript">
        var home_url = 'http://192.168.1.101/gomocart';
    </script>
  </head>
    <body> 
                
        <div class="main">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Balas Pesan</h4>
                        <div class="line2 mtb20"></div>
                        <div id="alert_error" class="form-group" style="display: none;">
                            <div class="alert alert-danger">&nbsp;Error!</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="from">Dari:</label>
                            <div class="form-control">Admin</div>
                        </div>

                        <div class="form-group">
                            <label for="pesan">Isi Pesan:</label>
                            <div id="pesan_dari" class="form-control" style="height: 200px; overflow: auto;">
                                <p>aaaa<br></p>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pesan">Balas Pesan:</label>
                                                            <textarea name="pesan" class="form-control" height="200px"></textarea>
                                                    </div>

                        <div class="form-group">
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="100%">&nbsp;</td> 
                                        <td nowrap>
                                            <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://192.168.1.101/gomocart/templates/front-end/accecories/images/loading.gif" /></div>                  
                                            <div id="btn_simpan" type="submit" class="btn btn-primary">Kirim</div>
                                            <a id="btn_batal"  href="http://192.168.1.101/gomocart/message/?a" class="btn btn-warning">Batal</a>                                                        
                                        </td>
                                    </tr>
                                </tbody>                                
                            </table>
                        </div>                     
                    </div>
                                    </div>
                
            </div>
        </div><!-- /.main -->
                
        <!-- Jquery Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/bootstrap.min.js"></script>
        
                
        <script type="text/javascript">
            $(function () {
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
            
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
                    data.append('from', '1');
                    data.append('pesan', $('[name=pesan]').val());
                    
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
                                window.location = 'http://192.168.1.101/gomocart/message/?a';                    
                                window.cpjs.sendToAndroid('true|'+data['message']);
                            } else {
                                                                    window.cpjs.sendToAndroid('false|'+data['message']);                                
                                                            }
                        }, 
                        error: function() {
                            setLoading(false);
                                                            window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');                                
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
        </script>
        
  </body>
</html>
<?php }} ?>
