<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-05 06:20:18
         compiled from "D:\www\sertifikat_online\templates\front-end\accecories\includes\flexslider.html" */ ?>
<?php /*%%SmartyHeaderCode:667057a3cdb2131be2-42361944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '701e8ca81ebdf13464a5fec89bd2c242f3825b88' => 
    array (
      0 => 'D:\\www\\sertifikat_online\\templates\\front-end\\accecories\\includes\\flexslider.html',
      1 => 1467671369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667057a3cdb2131be2-42361944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
    'homeurl' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a3cdb216cf92_10377528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a3cdb216cf92_10377528')) {function content_57a3cdb216cf92_10377528($_smarty_tpl) {?><div class="flexslider ma-nivoslider">
    <div class="ma-loading"></div>
    <div id="ma-inivoslider-banner7" class="slides">
        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['entry']->value['filename'];?>
" class="dn" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" title="#banner7-caption<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"  />
        <?php } ?>
    </div>
    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
        <div id="banner7-caption<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="banner7-caption nivo-html-caption nivo-caption">
            <div class="timethai"></div>
            <div class="banner7-content slider-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                <div class="title-container">
                    <h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['entry']->value['judul'];?>
</h1>
                    <h2 class="title2" ><?php echo $_smarty_tpl->tpl_vars['entry']->value['detail'];?>
</h2>											
                </div>
                <div class="banner7-des">
                    <div class="des">
                        <h1><?php echo $_smarty_tpl->tpl_vars['entry']->value['sub_detail_1'];?>
</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['entry']->value['sub_detail_2'];?>
</h2>
                        <!-- div class="check-box">
                            <ul class="list-unstyled">
                                <li>With all products in shop</li>
                                <li>All combos $69.96</li>
                            </ul>
                        </div -->
                    </div>
                </div>																								
                <?php if ($_smarty_tpl->tpl_vars['entry']->value['gambar']!='') {?><img class="img1" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
" alt="" /><?php }?>																				
            </div>
        </div>
    <?php } ?>
    
    <!-- div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
        <div class="timethai"></div>
        <div class="banner7-content slider-2">
            <div class="title-container">
                <h1 class="title1">Samsung s5</h1>
                <h2 class="title2" >Typi non habent claritatem insitam; est usus legentis</h2>											
            </div>
            <div class="banner7-des">
                <div class="des">
                    <h1>sale up to!</h1>
                    <h2>50% off</h2>
                </div>
            </div>																								
            <img class="img1" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/slider/img-05.png" alt="" />																					
        </div>
    </div -->
</div><!-- /.flexslider --><?php }} ?>
