<?php /*%%SmartyHeaderCode:14906578c6fbb231e50-56571494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be14e4a459d054911c23cfa64b9bdda4123938f9' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\konfirmasi.html',
      1 => 1469447160,
      2 => 'file',
    ),
    '58a5b28cc3d8e04dfebe2eea1998e05194edf0eb' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\head.html',
      1 => 1469594534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14906578c6fbb231e50-56571494',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579fe8ac844a70_24959624',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579fe8ac844a70_24959624')) {function content_579fe8ac844a70_24959624($_smarty_tpl) {?><!doctype html>
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
                
                    <div class="container">
                
                <div id="alert_success" class="row" style="display: none;">
                    <div class="col-sm-6">
                        <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
                                
                <div id="alert_error" class="row" style="display: none;">
                    <div class="col-sm-6">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
                
                                    
                <div class="row">
                    <form id="submit_form">
                        <div class="col-sm-6">

                            <div class="form-group">&nbsp;</div>

                            <div class="form-group">
                                <label class="control-label">Kode Pemesanan <em>*</em></label>
                                <input type="text" name="kode_pemesanan" value="" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Bank Tujuan <em>*</em></label>
                                <select id="ongkir_prop" name="bank_tujuan" class="form-control">
                                    <option value="0">-- Pilih Bank Tujuan --</option>
                                                                            <option value="1" >Bank Mandiri (1570001339200 - an. Rifkhi Heruprasetyo)</option>
                                                                            <option value="2" >BCA (1662984244 - an. Nur Azizah)</option>
                                                                    </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Jumlah Transfer <em>*</em></label>
                                <input type="text" name="jumlah_transfer" value="0" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Nama Bank Pengirim <em>*</em></label>
                                <input type="text" name="nama_bank_pengirim" value="" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Nama Pemilik Rekening <em>*</em></label>
                                <input type="text" name="nama_pemilik_rekening" value="" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Penjelasan </label>
                                <textarea name="penjelasan" class="form-control"></textarea>
                            </div>
                        </div>
                                
                        <div class="col-sm-6">
                            <div class="form-group">&nbsp;</div>
                            
                            <div class="form-group">
                                <label class="control-label">Upload Bukti Transfer </label>
                                <input id="fileupload" type="file" name="photo" />
                                <p class="help-block"><b>- Maksimal ukuran file 500kb.<br />- Format file harus jpg, png, atau gif.</b></p>
                            </div>
                            <div class="form-group">&nbsp;</div>
                            
                            <div class="buttons-set">
                                <div class="form-group text-center"><img id="i_loading" style="display: none;" src="http://192.168.1.101/gomocart/templates/front-end/accecories/images/loading_1.gif" /></div>  
                                <button id="btn_konfirmasi" type="button" class="button"><span><span>SUBMIT KONFIRMASI</span></span></button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        <!-- /.main -->
        
                
        <!-- Jquery Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/owl.carousel.min.js"></script>
        <!-- Countdown Js -->
        <script src="http://192.168.1.101/gomocart/templates/front-end/accecories/js/custom.js"></script>
        
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
                        $('#btn_konfirmasi').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_konfirmasi').show();
                    }
                }
                
                var files;
                $('#fileupload').on('change', function(event) {
                    files = event.target.files;
                });

                // Change this to the location of your server-side upload handler:
                $('#btn_konfirmasi').on('click', function (e) {
                    clickSound();                        
                    setLoading(true);
                    var $inputs = $('#submit_form :input');
                    var data = new FormData();
                    $inputs.each(function() {
                        data.append(this.name, $(this).val());
                    });
                    if(files!==undefined) {
                        $.each(files, function(key, value) {
                            data.append(key, value);
                        });
                    }
                    
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.101/gomocart/pembayaran/prosesKonfirmasi.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoading(false);
                            if(data['success']) {
                                window.location = 'http://192.168.1.101/gomocart/pembayaran/?a';
                                                                    try {
                                        window.cpjs.sendToAndroid('true|'+data['message']);
                                    } catch(err) {
                                        console.log(err.message);
                                    }
                                                            } else {
                                var error_message = data['message'];
                                var msg = '';
                                for(var key in error_message) {
                                    msg += error_message[key]+'\n';
                                }                                
                                                                    window.cpjs.sendToAndroid('false|'+msg);
                                                            }
                        }, 
                        error: function() {
                            setLoading(false);
                                                            window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                                                    }
                    });                    
                });
                
                                    
            });
        </script>
  </body>
</html>
<?php }} ?>
