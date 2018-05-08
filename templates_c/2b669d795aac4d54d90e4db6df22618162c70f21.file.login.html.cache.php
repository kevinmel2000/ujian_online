<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-04 23:08:22
         compiled from "templates\front-end\accecories\login.html" */ ?>
<?php /*%%SmartyHeaderCode:4633577a89f6c38338-13590232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b669d795aac4d54d90e4db6df22618162c70f21' => 
    array (
      0 => 'templates\\front-end\\accecories\\login.html',
      1 => 1467546573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4633577a89f6c38338-13590232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginusers' => 0,
    'entry' => 0,
    'homeurl' => 0,
    'google_auth_url' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577a89f7154693_16956843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577a89f7154693_16956843')) {function content_577a89f7154693_16956843($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="main">
            <div class="container">                
                <?php if ($_smarty_tpl->tpl_vars['loginusers']->value['error']) {?>
                    <div class="row">
                        <div class="page-title"></div>
                        <div class="col-sm-12">
                            <div class="alert alert-danger">
                                <span style="font-size: 16px;">
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loginusers']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
echo $_smarty_tpl->tpl_vars['entry']->value;?>
<br /><?php } ?>
                                </span>                                    
                            </div>                            
                        </div>
                    </div>
                <?php }?>
                
                <div class="row">
                    <div class="page-title">
                        <h1>Login or Create an Account</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="account-login">
                            <form  method="post" id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/login.php">
                                <div class="registered-users">
                                    <div class="content">
                                        <h2>Registered Customers</h2>
                                        <p>If you have an account with us, please log in.</p>
                                        <ul class="form-list">
                                            <li>
                                                <label for="email" class="required"><em>*</em>Email Address</label>
                                                <div class="input-box">
                                                    <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['loginusers']->value['field']['email'];?>
" id="email" class="input-text required-entry validate-email" title="Email Address" />
                                                </div>
                                            </li>
                                            <li>
                                                <label for="pass" class="required"><em>*</em>Password</label>
                                                <div class="input-box">
                                                    <input type="password" name="password" class="input-text required-entry validate-password" id="pass" title="Password" />
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="required">* Required Fields</p>
                                    </div>

                                    <div class="buttons-set">
                                        <a href="#" class="f-left">Forgot Your Password?</a>
                                        <button type="submit" class="button" title="Login" name="send" id="send2"><span><span>Login</span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                    <div class="col-sm-6">
                        <div class="account-login">
                            <div class="new-users">
                                <div class="content">
                                    <h2>New Customers</h2>
                                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>

                                    <div class="H-icon-grup">
                                        <div class="H-mail-btn">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/register.php">
                                                <div>
                                                    <div class="H-icon"><i class="fa fa-envelope-o"></i></div>
                                                    <div class="H-icon-text">Daftar dengan Email</div>
                                                </div>
                                            </a>
                                        </div>  


                                        <div class="H-fb-btn">
                                            <a href="javascript: fblogin(); ">
                                                <div>
                                                    <div id="fb-root" style="display: none;"></div>
                                                    <div class="H-icon"><i class="fa fa-facebook"></i></div>
                                                    <div class="H-icon-text">Daftar dengan Facebook</div>
                                                </div> 
                                            </a>
                                        </div>                          


                                        <div class="H-tw-btn">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/sosmed/twitter/login-twitter.php">
                                                <div>
                                                    <div class="H-icon"><i class="fa fa-twitter"></i></div>
                                                    <div class="H-icon-text">Daftar dengan Twitter</div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="H-gp-btn">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['google_auth_url']->value;?>
">
                                                <div>
                                                    <div class="H-icon"><i class="fa fa-google-plus"></i></div>
                                                    <div class="H-icon-text">Daftar dengan Google</div>
                                                </div>
                                            </a>
                                        </div>                 
                                    </div>

                                </div>

                                <div class="buttons-set">
                                    <button type="button" title="Create an Account" class="button" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/register.php';"><span><span>Create an Account</span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div><!-- /.container -->
        </div><!-- /.main -->
        
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/brands.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
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
        <!-- Owl Carousel Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
        <!-- Countdown Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
	        
  </body>
</html>
<?php }} ?>
