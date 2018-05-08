<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 10:56:47
         compiled from "templates\front-end\accecories\index.html" */ ?>
<?php /*%%SmartyHeaderCode:95905778fc87e6d8b9-06370303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b635287b0cf9efa4e4228be257a2bd29087a886e' => 
    array (
      0 => 'templates\\front-end\\accecories\\index.html',
      1 => 1467691004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95905778fc87e6d8b9-06370303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778fc880f5e62_69740056',
  'variables' => 
  array (
    'produk' => 0,
    'currentpage' => 0,
    'homeurl' => 0,
    'query' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'totalpage' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778fc880f5e62_69740056')) {function content_5778fc880f5e62_69740056($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <body> 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-3">
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/flexslider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
                        
                    </div>
                </div>
                
                <div class="row">
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
                    
                    <div class="col-sm-9 col-right">
                    	
                        
                        <?php if (count($_smarty_tpl->tpl_vars['produk']->value)>0) {?>
                        <div class="category-products">
                                
                            <div class="toolbar">
                                <div class="pager">
                                    <div class="pages">
                                        <ol>
                                            <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&larr;</a></li>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>
                                                    <li class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>                                
                                                <?php } else { ?>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                            <?php }} ?>
                                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&rarr;</a></li>
                                            <?php }?>
                                        </ol>
                                    </div>
                                </div>
                                
                                <div class="pager f-left">                            
                                    <div class="sort-by hidden-xs">
                                        <label>Sort By:</label>
                                        <select class="form-control input-sm">
                                            <option selected="selected">Position</option>
                                            <option>Name</option>
                                            <option>Price</option>
                                        </select>
                                        <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                                    </div>
                                    <div class="limiter hidden-xs">
                                        <label>Show:</label>
                                        <div class="limiter-inner">
                                            <select class="form-control input-sm">
                                                <option>10</option>
                                                <option selected="selected">15</option>
                                                <option>25</option>
                                                <option>40</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div><!-- /.pager -->
                            </div><!-- /.toolbar -->
    
                            <ul class="products-grid  columns4">
                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produk']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <li class="item">
                                    <div class="item-area">
                                        <div class="product-image-area">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" class="product-image">
                                                <img id="product-collection-image-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="defaultImage" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['foto1_produk'];?>
&width=300&height=300" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
"/>
                                                <img class="hoverImage" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/centercrop.php?url=<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry']->value['foto1_produk'];?>
&width=300&height=300" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
"/>
                                            </a>
                                        </div>
                                        <div class="details-area">
                                            <h2 class="product-name"><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</a></h2>
                                            <!-- div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:0"></div>
						</div>
                                            </div -->
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
                                            <div class="actions">                                                
                                                <div style="padding-bottom: 5px;"><button id_produk="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-default btn-cart" style="width: 100%;">Add to cart</button></div>
                                                <div style="padding-bottom: 5px;"><button id_produk="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-default btn-wishlist" style="width: 100%;">Add to wishlist</button></div>                                        
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                            
                            <div class="toolbar">
                                <div class="pager">
                                    <div class="pages">
                                        <ol>
                                            <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&larr;</a></li>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>
                                                    <li class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>                                
                                                <?php } else { ?>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                            <?php }} ?>
                                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&rarr;</a></li>
                                            <?php }?>
                                        </ol>
                                    </div>
                                </div>
                                
                                <div class="pager f-left">                            
                                    <div class="sort-by hidden-xs">
                                        <label>Sort By:</label>
                                        <select class="form-control input-sm">
                                            <option selected="selected">Position</option>
                                            <option>Name</option>
                                            <option>Price</option>
                                        </select>
                                        <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                                    </div>
                                    <div class="limiter hidden-xs">
                                        <label>Show:</label>
                                        <div class="limiter-inner">
                                            <select class="form-control input-sm">
                                                <option>10</option>
                                                <option selected="selected">15</option>
                                                <option>25</option>
                                                <option>40</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div><!-- /.pager -->
                            </div><!-- /.toolbar -->
                        </div>
                        <?php }?>
                    </div><!-- /.col-right -->
                </div>
                
            </div><!-- /.container -->
        </div><!-- /.main -->
        
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
		<!-- Nivo Slider Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.nivo.slider.pack.js"><?php echo '</script'; ?>
>
		<!-- Owl Carousel Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
		<!-- Countdown Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/countdown.js"><?php echo '</script'; ?>
>
		<!-- Custom Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
		
        <?php echo '<script'; ?>
 type="text/javascript">
            
            $(function () {
                
                $('.btn-cart').on('click', function (e) {                    
                    var id = this.getAttribute('id_produk');
                    window.location = "<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/cart/addtocart.php?id="+id;
                });
                
                $('.btn-wishlist').on('click', function (e) {                    
                    var id = this.getAttribute('id_produk');
                    window.location = "<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/wishlist/addtowishlist.php?id="+id;
                });
            });
            
            /* Main Slideshow */
            jQuery(window).load(function() {
                jQuery(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').addClass('pos_hover');
                });
                jQuery(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').removeClass('pos_hover');
                });
            });
            jQuery(window).load(function() {
                $('#ma-inivoslider-banner7').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: 1000,
                    pauseTime: 6000,
                    startSlide: 0,
                    controlNav: false,
                    controlNavThumbs: false,
                    pauseOnHover: true,
                    manualAdvance: false,
                    prevText: 'Prev',
                    nextText: 'Next',
                    afterLoad: function(){
                    },     
                    beforeChange: function(){ 
                    }, 
                    afterChange: function(){ 
                    }
                });
            });
        <?php echo '</script'; ?>
>        
  </body>
</html>
<?php }} ?>
