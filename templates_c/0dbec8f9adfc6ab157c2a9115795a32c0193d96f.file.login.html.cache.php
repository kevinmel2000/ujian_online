<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-30 06:26:02
         compiled from "..\templates\back-end\matrix\login.html" */ ?>
<?php /*%%SmartyHeaderCode:32134577455ab7630d6-59199734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dbec8f9adfc6ab157c2a9115795a32c0193d96f' => 
    array (
      0 => '..\\templates\\back-end\\matrix\\login.html',
      1 => 1467242757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32134577455ab7630d6-59199734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577455ab812239_45919871',
  'variables' => 
  array (
    'loginusers' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577455ab812239_45919871')) {function content_577455ab812239_45919871($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
            <div class="alert alert-danger <?php if (count($_smarty_tpl->tpl_vars['loginusers']->value['error'])==0) {?>display-hide<?php }?>">
                <button class="close" data-close="alert"></button>
                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loginusers']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>     
                    <span><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
<br /></span>
                <?php } ?>
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
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap Js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</body>

</html><?php }} ?>
