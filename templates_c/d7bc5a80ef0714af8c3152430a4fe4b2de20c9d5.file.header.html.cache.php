<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-25 14:09:12
         compiled from "D:\www\pelaporan_pelanggaran\templates\back-end\AdminLTE-2.3.6\includes\header.html" */ ?>
<?php /*%%SmartyHeaderCode:478957bb737072f2a6-26160371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7bc5a80ef0714af8c3152430a4fe4b2de20c9d5' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\header.html',
      1 => 1472108949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '478957bb737072f2a6-26160371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bb737075fe23_19834364',
  'variables' => 
  array (
    'adminweburl' => 0,
    'tpl_dir' => 0,
    'data_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb737075fe23_19834364')) {function content_57bb737075fe23_19834364($_smarty_tpl) {?><header class="main-header">

    <!-- Logo -->
    <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>PD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pelaporan </b>Pelanggaran</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama'];?>
</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama'];?>
 
                  <small><?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_tipe_user'];?>
 <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_propinsi'];?>
</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                   <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/gantipassword/" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li -->
        </ul>
      </div>

    </nav>
  </header><?php }} ?>
