<?php /*%%SmartyHeaderCode:84705781c839659fd6-25006347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70a1b3dd5ac125153ae2c113972e8f9ea23125f' => 
    array (
      0 => '..\\templates\\back-end\\matrix\\login.html',
      1 => 1467242757,
      2 => 'file',
    ),
    'a0c9e5af119b75a91b619543a40bd0156862381c' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\back-end\\matrix\\includes\\head.html',
      1 => 1467242447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84705781c839659fd6-25006347',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a2eda2340420_74253414',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2eda2340420_74253414')) {function content_57a2eda2340420_74253414($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>..:: GOMOCART | Login User ::..</title>
    <!-- Bootstrap Styles-->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
            <link href="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/css/login.css" rel="stylesheet" type="text/css"/>
    </head>


<!-- BEGIN BODY -->
<body class="login">
    
    <!-- BEGIN LOGO -->
    <div class="logo">
        &nbsp;
    </div>
    <!-- END LOGO -->
    
    <!-- BEGIN LOGIN -->
    <div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="login.php" method="post">
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                            </div>
            <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <!-- label class="control-label visible-ie8 visible-ie9">Username: </label -->
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                    </div>
            </div>
            <div class="form-group">
                    <!-- label class="control-label visible-ie8 visible-ie9">Password: </label -->
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                    </div>
            </div>
            <div class="form-actions">
                    <label class="checkbox"><input type="checkbox" name="remember" value="1"/> Remember me </label>
                    <button type="submit" class="btn btn-info pull-right"> Login </button>
            </div>
            <!-- div class="forget-password" -->
                    <!-- h4>Forgot your password ?</h4 -->
                    <!-- p>
                             no worries, click <a href="javascript:;" id="forget-password">here</a>
                            to reset your password.
                    </p -->
            <!-- /div -->
            <!-- div class="create-account">
                    <p>
                             Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">Create an account</a>
                    </p>
            </div -->
	</form>
	<!-- END LOGIN FORM -->        
    </div>
    <!-- END LOGIN -->

    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
         2016 &copy; GOMOCHART
    </div>
    
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="http://192.168.1.101/gomocart/templates/back-end/matrix/assets/js/bootstrap.min.js"></script>

</body>

</html><?php }} ?>
