<?php /*%%SmartyHeaderCode:19347579a9e747725f7-26095185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db8ccab05f15ed577a53b27d8a08a0a82a83dca' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\member\\ganti_password.html',
      1 => 1469839216,
      2 => 'file',
    ),
    '58a5b28cc3d8e04dfebe2eea1998e05194edf0eb' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\head.html',
      1 => 1469594534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19347579a9e747725f7-26095185',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579bf77a79c5d2_15307361',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579bf77a79c5d2_15307361')) {function content_579bf77a79c5d2_15307361($_smarty_tpl) {?><!doctype html>
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
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/bootstrap.min.css" rel="stylesheet">
		
                                
                                
                <!-- Animate CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/animate.css" rel="stylesheet">
		<!-- Owl Carousel CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/owl.carousel.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/style.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/style-green.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/local.css" rel="stylesheet">
		<!-- Responsive CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/responsive.css" rel="stylesheet">
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.http://192.168.1.102/gomocart/templates/front-end/accecories/js/1.4.2/respond.min.js"></script>
		<![endif]-->
                
                
    <script type="text/javascript">
        var home_url = 'http://192.168.1.102/gomocart';
    </script>
  </head>
    <body> 
                
        <div class="main">
            <div class="container">
                <div class="row">                    
                    <div id="alert_error" class="col-sm-12" style="display: none;">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                    
                    <div id="alert_success" class="col-sm-12" style="display: none;">
                        <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <h4>Ganti Password</h4>
                        <div class="line2 mtb20"></div>

                        <div class="form-group">
                            <label class="control-label">Password Lama<em>*</em></label>
                            <input type="password" name="old_password" value="" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Password Baru <em>*</em></label>
                            <input type="password" name="new_password" value="" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Konfirmasi Password <em>*</em></label>
                            <input type="password" name="konfirmasi" value="" class="form-control" />
                        </div>

                        <div class="form-group text-right">
                            <p align="center"><img id="i_loading" style="display: none;" src="http://192.168.1.102/gomocart/templates/front-end/accecories/images/loading_1.gif" /></p>
                            <p><button id="btn_simpan" type="button" class="form-control btn btn-default btn-md fwb">UPDATE</button></p>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div><!-- /.main -->
        
                
        <!-- Jquery Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/owl.carousel.min.js"></script>
        <!-- Countdown Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/custom.js"></script>
        
        <script type="text/javascript">
            $(function () {
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
                
                function setMessage(tipe, message) {
                    $('#alert_'+tipe+' .alert span').html(message);
                    $('#alert_'+tipe).show('slow');
                    setTimeout(function() {
                        $('#alert_'+tipe).hide('slow');
                    }, 5000);
                    $("body, html").animate({ 
                        scrollTop: $('.container').offset().top 
                    }, 600);
                }
                
                function setLoading(isLoading) {
                    if(isLoading) {
                        $('#i_loading').show();
                        $('#btn_simpan').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_simpan').show();
                    }
                }
                
                $('#btn_simpan').on('click', function (e) {
                    clickSound();
                
                    setLoading(true);
                    var old_password   = $('[name=old_password]').val();
                    var new_password   = $('[name=new_password]').val();
                    var konfirmasi     = $('[name=konfirmasi]').val();
                    
                    var data = new FormData();
                    data.append('old_password', old_password);
                    data.append('new_password', new_password);
                    data.append('konfirmasi', konfirmasi);
                    
                    setLoading(true);
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.102/gomocart/member/prosesGantiPassword.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoading(false);
                            var message = data['message'];
                            var msg = '';
                            for(var key in message) {
                                msg+=message[key]+'\n';
                            }
                            if(data['success']) {
                                $('[name=old_password]').val('');
                                $('[name=new_password]').val('');
                                $('[name=konfirmasi]').val('');
                            }
                                                            try {
                                    window.cpjs.sendToAndroid((data['success']?'true':'false')+'|'+msg);
                                } catch(err) {
                                    console.log(err.message);
                                }
                                                    }, 
                        error: function() {
                            setLoading(false);
                                                            try {
                                    window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                                } catch(err) {
                                    console.log(err.message);
                                }
                                                    }
                    });                     
                });
                
                
            });
        </script>
        
  </body>
</html>
<?php }} ?>
