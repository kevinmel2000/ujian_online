<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-02 08:00:36
         compiled from "templates\back-end\AdminLTE-2.3.6\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3255857ccbbf2e3b0d7-20040924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af17b0555ad724e0f80031364f9ea28788374d50' => 
    array (
      0 => 'templates\\back-end\\AdminLTE-2.3.6\\login.html',
      1 => 1514854833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3255857ccbbf2e3b0d7-20040924',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57ccbbf2f27de9_40411010',
  'variables' => 
  array (
    'adminweburl' => 0,
    'tpl_dir' => 0,
    'loginusers' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ccbbf2f27de9_40411010')) {function content_57ccbbf2f27de9_40411010($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
"><b>Ujian </b>Online</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!-- div class="text-center">
      <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/logo.png" height="200px" /><br /><br />
    </div -->
      
    <div class="alert alert-danger <?php if (count($_smarty_tpl->tpl_vars['loginusers']->value['error'])==0) {?>hide<?php }?>">
      <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loginusers']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>     
        <span><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
<br /></span>
      <?php } ?>
    </div>
      
    <p class="login-box-msg">Isi username dan password untuk masuk.</p>

    <form class="login-form" action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <a href="#">Saya lupa password.</a>
            <!-- label>
              <input type="checkbox"> Remember Me
            </label -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div -->
    <!-- /.social-auth-links -->

    <!-- a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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
<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
