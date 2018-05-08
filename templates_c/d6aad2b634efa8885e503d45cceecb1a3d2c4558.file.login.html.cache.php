<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-24 03:48:38
         compiled from "templates\front-end\accecories\login.html" */ ?>
<?php /*%%SmartyHeaderCode:32149577f04fe70e606-34296743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6aad2b634efa8885e503d45cceecb1a3d2c4558' => 
    array (
      0 => 'templates\\front-end\\accecories\\login.html',
      1 => 1469332092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32149577f04fe70e606-34296743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577f04fe82b137_14472189',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'loginusers' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
    'google_auth_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577f04fe82b137_14472189')) {function content_577f04fe82b137_14472189($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                    <li class="active">Login</li>
               	</ul>
            </div>
        </div><!-- /.breadcrumbs -->
        <?php }?>
        
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
                    <div class="col-sm-6">
                        <div class="account-create">
                            <div class="fieldset">
                                <h2 class="legend">LOGIN PENGGUNA</h2>
                                <form  method="post" id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/login.php">
                                    <p>Jika Anda sudah memiliki akun, silahkan login.</p>                                    
                                    <ul class="form-list">
                                        <li>
                                            <label for="email" class="required"><em>*</em>Email</label>
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
                                    
                                    <div class="buttons-set">
                                        <p class="required">* Harus Diisi</p>
                                        <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                            <div class="form-group text-center"><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></div>  
                                            <button type="button" id="btn_login" class="button"><span><span>Submit</span></span></button>
                                        <?php } else { ?>
                                            <button type="submit" title="Submit" class="button"><span><span>Submit</span></span></button>
                                        <?php }?>
                                    </div>                                            
                                        
                                </form>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="col-sm-6">
                        <div class="account-create">
                            <div class="fieldset">
                                <h2 class="legend">PENGGUNA BARU</h2>
                                <p>Jika belum memiliki akun, Anda bisa daftar dahulu sebagai pengguna melalui:<br /><br /></p>
                                <ul class="form-list">
                                    <li>
                                        <div class="H-icon-grup">
                                            <div class="H-mail-btn">
                                                <a id="btn_daftar" href="#">
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
                                    </li>
                                </ul>
                                <br />
                            </div>
                        </div>
                    </div>        
                </div>
            </div><!-- /.container -->
        </div><!-- /.main -->
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php }?>
        
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
        
        <?php echo '<script'; ?>
>
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
                        window.location='<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/sosmed/facebook/validatefb.php';
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
                        $('#btn_login').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_login').show();
                    }
                }
                
                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                    $('#btn_login').on('click', function (e) {
                        clickSound();
                        
                        var data = new FormData();
                        data.append('email', $('[name=email]').val());
                        data.append('password', $('[name=password]').val());
                        data.append('method', 'json');

                        setLoading(true);
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/login.php',
                            data: data,
                            cache: false,
                            dataType: 'json',
                            processData: false, // Don't process the files
                            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                            success: function(data) {
                                setLoading(false);
                                if(data['success']) {
                                    var user = data['user'];
                                    window.cpjs.sendToAndroid('true|'+data['message']+'|'+user['id']+'|'+user['nama']+'|'+user['email']+'|'+user['jenis_user']+'|'+user['photo']);
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
                <?php }?>
                    
                $('#btn_daftar').on('click', function (e) {                    
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                        window.cpjs.goToRegister();
                    <?php } else { ?>
                        window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/register.php';
                    <?php }?>
                });                         
            });
        <?php echo '</script'; ?>
>
	        
  </body>
</html>
<?php }} ?>
