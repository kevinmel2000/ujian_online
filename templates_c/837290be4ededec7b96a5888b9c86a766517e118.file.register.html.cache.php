<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-24 03:36:02
         compiled from "templates\front-end\accecories\register.html" */ ?>
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
  ),
  'nocache_hash' => '281195782509cb13ee2-42957340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5782509cc562e8_44910229',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'registrations' => 0,
    'tpl_dir' => 0,
    'google_auth_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782509cc562e8_44910229')) {function content_5782509cc562e8_44910229($_smarty_tpl) {?><!doctype html>
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
                    <li class="active">Pendaftaran</li>
               	</ul>
            </div>
        </div><!-- /.breadcrumbs -->
        <?php }?>
        
        <div class="main">
            <div class="container">
                    
                <?php if ($_smarty_tpl->tpl_vars['registrations']->value['error']||$_smarty_tpl->tpl_vars['registrations']->value['success']) {?>
                    <div class="row">
                        <div class="page-title"></div>
                        <div class="col-sm-12">
                            <?php if ($_smarty_tpl->tpl_vars['registrations']->value['error']) {?>
                            <div class="alert alert-danger">
                                <span style="font-size: 16px;">
                                    <?php if ($_smarty_tpl->tpl_vars['registrations']->value['error']['firstname']!='') {
echo $_smarty_tpl->tpl_vars['registrations']->value['error']['firstname'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['registrations']->value['error']['lastname']!='') {
echo $_smarty_tpl->tpl_vars['registrations']->value['error']['lastname'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['registrations']->value['error']['email']!='') {
echo $_smarty_tpl->tpl_vars['registrations']->value['error']['email'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['registrations']->value['error']['password']!='') {
echo $_smarty_tpl->tpl_vars['registrations']->value['error']['password'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['registrations']->value['error']['confirmation']!='') {
echo $_smarty_tpl->tpl_vars['registrations']->value['error']['confirmation'];?>
<br /><?php }?>
                                </span>
                            </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['registrations']->value['success']) {?>
                            <div class="alert alert-info">
                                <span style="font-size: 16px;">Registrasi member berhasil!</span>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
                        
                <form method="post" id="form-validate" action="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/registration.php" >
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="account-create">
                                <div class="fieldset">
                                    <h2 class="legend">DATA LOGIN</h2>
                                    <ul class="form-list">
                                        <li>
                                            <label for="firstname" class="required"><em>*</em>Nama Depan</label>
                                            <div class="input-box">
                                                <input type="text" id="firstname" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['registrations']->value['field']['firstname'];?>
" title="Nama Depan" class="input-text required-entry" />
                                            </div>
                                        </li>
                                        <li>        
                                            <label for="lastname" class="required"><em>*</em>Nama Belakang</label>
                                            <div class="input-box">
                                                <input type="text" id="lastname" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['registrations']->value['field']['lastname'];?>
" title="Nama Belakang" class="input-text required-entry" />
                                            </div>
                                        </li>
                                        <li>
                                            <label for="email_address" class="required"><em>*</em>Email Address</label>
                                            <div class="input-box">
                                                <input type="text" name="email" id="email_address" value="<?php echo $_smarty_tpl->tpl_vars['registrations']->value['field']['email'];?>
" title="Alamat Email" class="input-text validate-email required-entry" />
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
                                                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                                                    <div class="form-group text-center"><img id="i_loading" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/loading_1.gif" /></div>  
                                                    <button type="button" id="btn_register" class="button"><span><span>Submit</span></span></button>
                                                <?php } else { ?>
                                                    <button type="submit" title="Submit" class="button"><span><span>Submit</span></span></button>
                                                <?php }?>
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

                    
                
                </form>
            </div><!-- /.container -->
        </div><!-- /.main -->
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);
}?>
        
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
                        $('#btn_register').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_register').show();
                    }
                }
                
                <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
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
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/member/registration.php',
                            data: data,
                            cache: false,
                            dataType: 'json',
                            processData: false, // Don't process the files
                            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                            success: function(data) {
                                setLoading(false);
                                if(data['success']) {                                    
                                    window.location = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/register.php<?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>?a<?php }?>';
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
</html><?php }} ?>
