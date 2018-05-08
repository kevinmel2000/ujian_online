<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-04 09:34:37
         compiled from "..\templates\front-end\accecories\produk\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:28241577db6de6a84f8-70494214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d1a7edbd4bc2a6e8c8720f22f6cabe21e35625' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\produk\\detail.html',
      1 => 1470278072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28241577db6de6a84f8-70494214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577db6de813cc4_77798759',
  'variables' => 
  array (
    'is_android' => 0,
    'homeurl' => 0,
    'gambar_produk' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
    'data' => 0,
    'alert_error' => 0,
    'no' => 0,
    'entry_ukuran' => 0,
    'entry_warna' => 0,
    'data_user' => 0,
    'produk_lain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577db6de813cc4_77798759')) {function content_577db6de813cc4_77798759($_smarty_tpl) {?><!doctype html>
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
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/produk/">Produk</a></li>
                    <li class="active">Detail </li>
               	</ul>
            </div>
        </div><!-- /.breadcrumbs -->
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
            <!-- Jssor Slider Begin -->
            <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
            <!-- ================================================== -->
            <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; top: 0px; left: 0px; width: 100%; height: 70px; overflow: hidden; background-color: #E5E4E2; ">
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0; top: 0px; width: 100%; height: 70px; overflow: hidden;">
                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gambar_produk']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                        <div>
                            <div style="position: absolute; left: 15%; top: 0px; width: 70px; height: 70px; overflow: hidden;">
                                <img u="image" src2="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_file'];?>
" filename="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_file'];?>
" class="image_click" style="width: 70px; height: 70px; padding: 3px;" />
                            </div>
                        </div>
                    <?php } ?>                  
                </div>

                <!--#region Bullet Navigator Skin Begin -->
                <!-- Help: http://www.jssor.com/tutorial/set-bullet-navigator.html -->
                <style>
                    /* jssor slider bullet navigator skin 21 css */
                    /*
                    .jssorb21 div           (normal)
                    .jssorb21 div:hover     (normal mouseover)
                    .jssorb21 .av           (active)
                    .jssorb21 .av:hover     (active mouseover)
                    .jssorb21 .dn           (mousedown)
                    */
                    .jssorb21 {
                        position: absolute;
                    }
                    .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                        position: absolute;
                        /* size of bullet elment */
                        width: 19px;
                        height: 19px;
                        text-align: center;
                        line-height: 19px;
                        color: white;
                        font-size: 12px;
                        background: url(<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/img/b21.png) no-repeat;
                        overflow: hidden;
                        cursor: pointer;
                    }
                    .jssorb21 div { background-position: -5px -5px; }
                    .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
                    .jssorb21 .av { background-position: -65px -5px; }
                    .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
                </style>
                <!-- bullet navigator container -->
                <!-- div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                    <div u="prototype"></div>
                </div -->
                <!--#endregion Bullet Navigator Skin End -->

                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: http://www.jssor.com/tutorial/set-arrow-navigator.html -->
                <style>
                    /* jssor slider arrow navigator skin 21 css */
                    /*
                    .jssora21l                  (normal)
                    .jssora21r                  (normal)
                    .jssora21l:hover            (normal mouseover)
                    .jssora21r:hover            (normal mouseover)
                    .jssora21l.jssora21ldn      (mousedown)
                    .jssora21r.jssora21rdn      (mousedown)
                    */
                    .jssora21l, .jssora21r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 55px;
                        height: 55px;
                        cursor: pointer;
                        background: url(<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/img/a21.png) center center no-repeat;
                        overflow: hidden;
                    }
                    .jssora21l { background-position: -3px -33px; }
                    .jssora21r { background-position: -63px -33px; }
                    .jssora21l:hover { background-position: -123px -33px; }
                    .jssora21r:hover { background-position: -183px -33px; }
                    .jssora21l.jssora21ldn { background-position: -243px -33px; }
                    .jssora21r.jssora21rdn { background-position: -303px -33px; }
                </style>
                <!-- Arrow Left -->
                <!-- span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"> </span -->
                <!-- Arrow Right -->
                <!-- span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"> </span -->
                <!--#endregion Arrow Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">Bootstrap Carousel</a>
            </div>
            <!-- Jssor Slider End -->
        <?php }?>

        <div class="main">
            <div class="container">
                            
                <div class="row">
                    <div class="col-sm-9">
                        <div class="product-view">                            
                            <div class="row">
                            	<?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                                <div class="col-sm-5">
                                	<div class="product-img-box">
                                        <p class="product-image">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php if ($_smarty_tpl->tpl_vars['data']->value['foto_produk']!='') {
echo $_smarty_tpl->tpl_vars['data']->value['foto_produk'];
} else { ?>default.png<?php }?>" class="cloud-zoom" id="ma-zoom1">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php if ($_smarty_tpl->tpl_vars['data']->value['foto_produk']!='') {
echo $_smarty_tpl->tpl_vars['data']->value['foto_produk'];
} else { ?>default.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" />
                                            </a>
                                        </p>
                                        <?php if (count($_smarty_tpl->tpl_vars['gambar_produk']->value)>0) {?>
                                        <div class="more-views thumbnail-container">
                                            <ul class="bxslider">
                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gambar_produk']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                                <li class="thumbnail-item">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_file'];?>
" class="cloud-zoom-gallery" title="" name="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_file'];?>
" rel="useZoom: 'ma-zoom1', smallImage: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_file'];?>
'">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_file'];?>
" alt="" />
                                                    </a>
                                                </li>
                                                <?php } ?>                                                
                                            </ul>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>                                                                
                                <?php }?>
                                
                                <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>                                    
                                    <div class="product-shop col-sm-7">
                                        <div class="alert alert-danger">
                                            <span style="font-size: 16px;">
                                                <?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>

                                            </span>                                    
                                        </div>                            
                                    </div>
                                <?php }?>
                                
                                <div class="product-shop col-sm-7">
                                    <div class="product-name">
                                        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
</h1>
                                    </div>
                                    
                                    <!-- div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:67%" class="rating"></div>
                                        </div>
                                    	<span class="amount"><a href="#">1 Review(s)</a></span>
                                    </div -->
                                    <div class="box-container2"> 
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price"><?php if ($_smarty_tpl->tpl_vars['data']->value['harga_spesial']!='') {
echo $_smarty_tpl->tpl_vars['data']->value['harga_spesial'];
} elseif ($_smarty_tpl->tpl_vars['data']->value['harga_jual']!='') {
echo $_smarty_tpl->tpl_vars['data']->value['harga_jual'];
} else { ?>Rp. &nbsp;<?php }?></span>
                                            </p>
                                            <?php if ($_smarty_tpl->tpl_vars['data']->value['harga_spesial']!='') {?>
                                            <p class="old-price">
                                                <span class="price"><?php echo $_smarty_tpl->tpl_vars['data']->value['harga_jual'];?>
</span>
                                            </p>
                                            <?php }?>
                                        </div>                                        
                                    </div>
                                    <div class="short-description">
                                        <div class="std"><?php echo $_smarty_tpl->tpl_vars['data']->value['penjelasan'];?>
</div>
                                    </div>
                                    <p class="availability in-stock">Ketersediaan:&nbsp;&nbsp;
                                    <?php if (count($_smarty_tpl->tpl_vars['data']->value['data_stok'])>0||$_smarty_tpl->tpl_vars['data']->value['data_stok_jumlah']>0) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['is_tampilkan_stok']!='Y') {?>
                                            <span style="font-weight: bold;">Stok tersedia</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['data_stok_jumlah']>0) {?>
                                            <span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['data']->value['data_stok_jumlah'];?>
</span>
                                        <?php } elseif (count($_smarty_tpl->tpl_vars['data']->value['data_stok'])>0) {?>
                                            <div id="detail_stock" class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <!-- th width="10%"><div style="text-align: center;">No.</div></th -->
                                                            <th width="35%"><div style="text-align: center;">Ukuran</div></th>
                                                            <th width="35%"><div style="text-align: center;">Warna</div></th>
                                                            <th width="30%"><div style="text-align: center;">Jumlah</div></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data_stok']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                                <!-- td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td -->
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['ukuran'];?>
</td>
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['warna'];?>
</td>
                                                                <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
</span></td>                                                                                                  
                                                            </tr>
                                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span style="font-weight: bold;">Stok tidak tersedia</span>
                                    <?php }?></p>
                                
                                    <form class="form-horizontal" id="add_to_cart" method="post" action="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/addtocart.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                                        <?php if (count($_smarty_tpl->tpl_vars['data']->value['list_ukuran'])>0) {?>
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Ukuran <em>*</em></label>
                                            <div class="col-sm-7">
                                                <select class="form-control" name="ukuran">
                                                    <!-- option value="">-- Pilih Ukuran --</option -->
                                                    <?php  $_smarty_tpl->tpl_vars['entry_ukuran'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_ukuran']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list_ukuran']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_ukuran']->key => $_smarty_tpl->tpl_vars['entry_ukuran']->value) {
$_smarty_tpl->tpl_vars['entry_ukuran']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['entry_ukuran']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['entry_ukuran']->value;?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                      	</div>
                                        <?php }?>
                                        
                                        <?php if (count($_smarty_tpl->tpl_vars['data']->value['list_warna'])>0) {?>                                        
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Warna <em>*</em></label>
                                            <div class="col-sm-7">
                                                <select class="form-control" name="warna">
                                                    <!-- option value="">-- Pilih Warna --</option -->
                                                    <?php  $_smarty_tpl->tpl_vars['entry_warna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_warna']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list_warna']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_warna']->key => $_smarty_tpl->tpl_vars['entry_warna']->value) {
$_smarty_tpl->tpl_vars['entry_warna']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['entry_warna']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['entry_warna']->value;?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                      	</div>
                                        <?php }?>
                                        
                                        <?php if (count($_smarty_tpl->tpl_vars['data']->value['data_stok'])>0||$_smarty_tpl->tpl_vars['data']->value['data_stok_jumlah']>0) {?>                                        
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Quantity:</label>
                                            <div class="col-md-3 col-sm-5">
                                                <div class="input-group qty">
                                                    <span class="input-group-btn">
                                                        <button class="btn minus" type="button">-</button>
                                                    </span>
                                                    <input type="text" class="form-control" value="1" name="jumlah">
                                                    <span class="input-group-btn">
                                                        <button class="btn plus" type="button">+</button>
                                                    </span>
                                                </div><!-- /input-group -->
                                            </div>
                                        </div>
                                        <?php }?>
                                        
                                        <div class="form-group">&nbsp;</div>                                        
                                        <div class="form-group">
                                            <?php if (count($_smarty_tpl->tpl_vars['data']->value['data_stok'])>0||$_smarty_tpl->tpl_vars['data']->value['data_stok_jumlah']>0) {?>
                                                <div class="col-sm-6">
                                                    <button type="button" class="form-control btn btn-default btn-cart">Add to cart</button>
                                                </div>
                                            <?php }?>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['data_user']->value['is_login']==true) {?>
                                                <div class="col-sm-6">
                                                    <button type="button" class="form-control btn btn-default btn-wishlist">Add to wishlist</button>
                                                </div>
                                            <?php }?>
                                            <!-- button type="button" class="btn btn-default btn-compare">Add to compare</button -->
                                	</div>
                                        <div class="form-group">&nbsp;</div>     
                                        </form>
                                </div><!-- /.product-shop -->
                            </div>
                            <!-- div class="product-tab tab-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#product-desc" data-toggle="tab">PRODUCT DESCRIPTION</a></li>
                                    <li><a href="#product-review" data-toggle="tab">CUSTOMER REVIEW</a></li>
                                    <li><a href="#product-tags" data-toggle="tab">PRODUCT TAGS</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-desc">
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['penjelasan'];?>

                                    </div>
                                    <div class="tab-pane" id="product-review">...</div>
                                    <div class="tab-pane" id="product-tags">...</div>
                                </div>
                            </div --><!-- /.product-tab -->
                        </div><!-- /.product-view -->
                    	
                    </div><!-- /.col-right -->
                    
                    <div class="col-sm-3">
                        
                        <div class="block">
                            <div class="block-title">
                                <strong><span>Produk Terkait</span></strong>
                            </div>
                            <div id="special-offer" class="block-content owl-container">
                                <div class="owl">
                                    <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produk_lain']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['no']->value==0) {?><div class='sepecialoffer-item item'><?php }?>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/produk/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];
if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>&a<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" class="product-image">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['foto1_produk'];?>
&width=300&height=300" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" />
                                                </a>
                                            </div>
                                            
                                            <div class="des-container">
                                                <strong><span class="block-title"><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/produk/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];
if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>&a<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</a></span></strong>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price"><?php if ($_smarty_tpl->tpl_vars['entry']->value['harga_spesial']!='') {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_spesial'];
} elseif ($_smarty_tpl->tpl_vars['entry']->value['harga_jual']!='') {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual'];
} else { ?>Rp. &nbsp;<?php }?></span>
                                                    </p>
                                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['harga_spesial']!='') {?>
                                                    <p class="old-price">
                                                        <span class="price"><?php echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual'];?>
</span>
                                                    </p>
                                                    <?php }?>
                                                </div>                                                    
                                            </div>
                                        </div>
                                    <?php if ($_smarty_tpl->tpl_vars['no']->value==4) {?>
                                        </div>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(0, null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                    <?php }?>
                                    <?php } ?>
                                    <?php if ($_smarty_tpl->tpl_vars['no']->value>0) {?></div><?php }?>                
                                </div>
                            </div><!-- /.owl-container -->
                        </div>                        
                    </div><!-- /.col-left -->
                </div>
            </div>
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
        <!-- Jquery ui Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <!-- BX Slider Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
        <!-- Cloud Zoom Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/cloud-zoom.js"><?php echo '</script'; ?>
>
        <!-- Custom Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
        
        <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/docs.min.js"><?php echo '</script'; ?>
>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>

        <!-- jssor slider scripts-->
        <!-- use jssor.slider.debug.js for debug -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jssor.slider.mini.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            jQuery(document).ready(function ($) {

                var options = {
                    $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                    $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                    $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                    $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                    $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                    $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                    $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                    $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                    $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                    $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                    $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                    $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                        $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                        $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                        $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                        $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                        $Scale: false                                   //Scales bullets navigator or not while slider scale
                    },

                    $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                        $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 1,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };

                var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var bodyWidth = document.body.clientWidth;
                    if (bodyWidth)
                        jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                    else
                        window.setTimeout(ScaleSlider, 30);
                }
                ScaleSlider();

                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        <?php echo '</script'; ?>
>
        <?php }?>
        
        <?php echo '<script'; ?>
 type="text/javascript">            
            jQuery(document).ready(function(){    
                "use strict";

                <?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
                /* .thumbnail-container product image slider */
                $('.thumbnail-container .bxslider').bxSlider({
                    slideWidth: 94,
                    slideMargin: 5,
                    minSlides: 1,
                    maxSlides: 6,
                    pager: false,
                    speed: 500,
                    pause: 3000
                });    
                <?php }?>
                    
                $('.image_click').on('click', function (e) {                    
                    var filename = this.getAttribute('filename');
                    console.log(filename);
                    window.cpjs.downloadImage(filename);
                }); 
                
                $('.minus').on('click', function (e) {                    
                    var qty = eval($('[name=jumlah]').val())-1;
                    $('[name=jumlah]').val(qty>0?qty:1);
                });
                
                $('.plus').on('click', function (e) {                    
                    var qty = eval($('[name=jumlah]').val())+1;
                    $('[name=jumlah]').val(qty);
                });
                
                $('.btn-cart').on('click', function (e) {
                    
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                        var ukuran = $('[name=ukuran]').val();
                        var warna = $('[name=warna]').val();
                        var jumlah = $('[name=jumlah]').val();

                        var data = new FormData();
                        data.append('ukuran', ukuran);
                        data.append('warna', warna);
                        data.append('jumlah', jumlah);
                        data.append('method', 'json');

                        $.ajax({
                            type: 'POST',
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/addtocart.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
',
                            data: data,
                            cache: false,
                            dataType: 'json',
                            processData: false, // Don't process the files
                            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                            success: function(data) {
                                if(data['success']) {
                                    window.cpjs.sendToAndroid('true|'+data['message']);
                                } else {
                                    window.cpjs.sendToAndroid('false|'+data['message']);
                                }
                            }, 
                            error: function() {
                                window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                            }
                        });
                    <?php } else { ?>
                        $( "#add_to_cart" ).submit();
                    <?php }?>
                });
                
                $('.btn-wishlist').on('click', function (e) {
                    <?php if ($_smarty_tpl->tpl_vars['is_android']->value==true) {?>
                        var data = new FormData();
                        data.append('method', 'json');
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/wishlist/addtowishlist.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
',
                            data: data,
                            cache: false,
                            dataType: 'json',
                            processData: false, // Don't process the files
                            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                            success: function(data) {
                                if(data['success']) {
                                    window.cpjs.sendToAndroid('true|'+data['message']);
                                } else {
                                    window.cpjs.sendToAndroid('false|'+data['message']);
                                }
                            }, 
                            error: function() {
                                window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                            }
                        });
                        
                        
                        
                    <?php } else { ?>
                        window.location = "<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/wishlist/addtowishlist.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
";
                    <?php }?>
                });

            });
    <?php echo '</script'; ?>
>        

  </body>
</html>
<?php }} ?>
