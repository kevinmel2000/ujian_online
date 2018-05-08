<?php /*%%SmartyHeaderCode:281195782509cb13ee2-42957340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '837290be4ededec7b96a5888b9c86a766517e118' => 
    array (
      0 => 'templates\\front-end\\accecories\\register.html',
      1 => 1469331078,
      2 => 'file',
    ),
    '58a5b28cc3d8e04dfebe2eea1998e05194edf0eb' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\head.html',
      1 => 1469594534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281195782509cb13ee2-42957340',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579bf650b31609_90232017',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579bf650b31609_90232017')) {function content_579bf650b31609_90232017($_smarty_tpl) {?><!doctype html>
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
                    
                                        
                <form method="post" id="form-validate" action="http://192.168.1.102/gomocart/member/registration.php" >
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="account-create">
                                <div class="fieldset">
                                    <h2 class="legend">DATA LOGIN</h2>
                                    <ul class="form-list">
                                        <li>
                                            <label for="firstname" class="required"><em>*</em>Nama Depan</label>
                                            <div class="input-box">
                                                <input type="text" id="firstname" name="firstname" value="" title="Nama Depan" class="input-text required-entry" />
                                            </div>
                                        </li>
                                        <li>        
                                            <label for="lastname" class="required"><em>*</em>Nama Belakang</label>
                                            <div class="input-box">
                                                <input type="text" id="lastname" name="lastname" value="" title="Nama Belakang" class="input-text required-entry" />
                                            </div>
                                        </li>
                                        <li>
                                            <label for="email_address" class="required"><em>*</em>Email Address</label>
                                            <div class="input-box">
                                                <input type="text" name="email" id="email_address" value="" title="Alamat Email" class="input-text validate-email required-entry" />
                                            </div>
                                        </li>                                        
                                        <li>
                                            <label for="password" class="required"><em>*</em>Password</label>
                                            <div class="input-box">
                                                <input type="password" name="password" id="password" title="Password" class="input-text required-entry validate-password" />
                                            </div>
                                        </li>                                        
                                        <li>    
                                            <label for="confirmation" class="required"><em>*</em>Confirm Password</label>
                                            <div class="input-box">
                                                <input type="password" name="confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword" />
                                            </div>
                                        </li>
                                        <li>
                                            <p class="required">* Harus Diisi</p>
                                        </li>
                                        <li>
                                            <div class="buttons-set">
                                                <!-- p class="back-link"><a href="login.html" class="back-link"><small>&laquo; </small>Back</a></p -->
                                                                                                    <div class="form-group text-center"><img id="i_loading" style="display: none;" src="http://192.168.1.102/gomocart/templates/front-end/accecories/images/loading_1.gif" /></div>  
                                                    <button type="button" id="btn_register" class="button"><span><span>Submit</span></span></button>
                                                                                            </div>                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>    

                        <div class="col-sm-6">
                            <div class="account-create">
                                <div class="fieldset">
                                    <h2 class="legend">DAFTAR DENGAN</h2>
                                    <p>Atau bisa juga mendaftar menggunakan akun berikut ini:<br /><br /></p>
                                    <ul class="form-list">
                                        <li>
                                            <div class="H-icon-grup">
                                                
                                                <div class="H-fb-btn">
                                                    <a href="javascript: fblogin(); ">
                                                        <div>
                                                            <div id="fb-root" style="display: none;"></div>
                                                            <div class="H-icon"><i class="fa fa-facebook"></i></div>
                                                            <div class="H-icon-text">Daftar dengan Facebook</div>
                                                        </div> 
                                                    </a>
                                                </div>                          

                                                <div class="H-gp-btn">
                                                    <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2F192.168.1.102%2Fgomocart%2Fsosmed%2Fgoogle%2Faccount.php&client_id=754781974857-01cu4c4j4b0kddj163fk7dahfn2hj1me.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&approval_prompt=force">
                                                        <div>
                                                            <div class="H-icon"><i class="fa fa-google-plus"></i></div>
                                                            <div class="H-icon-text">Daftar dengan Google</div>
                                                        </div>
                                                    </a>
                                                </div>                 
                                            </div>
                                        </li>
                                    </ul>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>

                    
                
                </form>
            </div><!-- /.container -->
        </div><!-- /.main -->
        
                
        <!-- Jquery Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/owl.carousel.min.js"></script>
        <!-- Countdown Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/custom.js"></script>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '728549487275901',
                    cookie: true,
                    xfbml: true,
                    oauth: true
               });      
            };

            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());

            function fblogin(){
                FB.login(function(response){
                    if (response.authResponse) {
                        window.location='http://192.168.1.102/gomocart/sosmed/facebook/validatefb.php';
                    }
                }, {
                    scope: 'publish_stream'
                });
            }
            
            
            $(function () { 
                
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
                    
                function setLoading(isLoading) {
                    if(isLoading) {
                        $('#i_loading').show();
                        $('#btn_register').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_register').show();
                    }
                }
                
                                    $('#btn_register').on('click', function (e) {
                        clickSound();
                        
                        var data = new FormData();
                        data.append('firstname', $('[name=firstname]').val());
                        data.append('lastname', $('[name=lastname]').val());
                        data.append('email', $('[name=email]').val());
                        data.append('password', $('[name=password]').val());
                        data.append('confirmation', $('[name=confirmation]').val());
                        data.append('method', 'json');

                        setLoading(true);
                        $.ajax({
                            type: 'POST',
                            url: 'http://192.168.1.102/gomocart/member/registration.php',
                            data: data,
                            cache: false,
                            dataType: 'json',
                            processData: false, // Don't process the files
                            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                            success: function(data) {
                                setLoading(false);
                                if(data['success']) {                                    
                                    window.location = 'http://192.168.1.102/gomocart/register.php?a';
                                    try {
                                        window.cpjs.sendToAndroid('true|'+data['message']);
                                    } catch(err) {
                                        console.log(err.message);
                                    }
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
                                    
                $('#btn_daftar').on('click', function (e) {                    
                                            window.cpjs.goToRegister();
                                    });                         
            });
            
        </script>
  </body>
</html><?php }} ?>
