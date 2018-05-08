<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-20 09:38:19
         compiled from "..\..\templates\back-end\matrix\message\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:21036578ecc55e5b3c7-89699893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86823d34f432ca6e6322209bf9c8b2a990831c44' => 
    array (
      0 => '..\\..\\templates\\back-end\\matrix\\message\\detail.html',
      1 => 1468982073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21036578ecc55e5b3c7-89699893',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578ecc55f29c06_67076189',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578ecc55f29c06_67076189')) {function content_578ecc55f29c06_67076189($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body>
    <div id="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</small>
                        </h1>
                        <ol class="breadcrumb">
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/ekspedisi/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                          <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                        </ol>
                    </div>
                </div>
				
                <!-- /. ROW  -->
                <div class="row">                    
                    <div class="form-group">
                        <label for="from">Dari:</label>
                        <div class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['to_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['data']->value['to_email'];?>
)</div>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan:</label>
                        <div id="pesan_dari" class="form-control" style="height: 200px; overflow: auto;">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['pesan'];?>

                        </div>
                    </div>
                    
                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <td width="100%">&nbsp;</td> 
                                    <td nowrap>
                                        <a id="btn_batal"  href="list.php" class="btn btn-warning">Kembali</a>                                                        
                                    </td>
                                </tr>
                            </tbody>                                
                        </table>
                    </div>
                </div>
                <!-- /. ROW  -->
                
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</body>
</html><?php }} ?>
