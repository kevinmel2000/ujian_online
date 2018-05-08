<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 12:13:53
         compiled from "..\templates\front-end\accecories\page\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:132195782e2eb74dba2-56785224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6064db692be6ff90e770a19f4ca4d932621094f9' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\page\\detail.html',
      1 => 1469596430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132195782e2eb74dba2-56785224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5782e2eb802642_64533776',
  'variables' => 
  array (
    'homeurl' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'widget_kanan' => 0,
    'entry_widget' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782e2eb802642_64533776')) {function content_5782e2eb802642_64533776($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <body>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">Home</a></li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
</li>
               	</ul>
            </div>
        </div><!-- /.breadcrumbs -->
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="blog-detail blog-list">
                            <!-- div class="blog-image"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/blog/blog-09.jpg" class="img-responsive" alt=""></div -->
                            <div class="item">
                                <div class="item-inner">
                                    <h2 class="product-name"><a title="" href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
</a></h2>
                                    <!-- div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:67%" class="rating"></div>
                                        </div>
                                        <span class="amount"><a href="#">1 Review(s)</a></span>
                                        <span class="separator">|</span>
                                        <span class="comment-amount"><a href="#">4 comment</a></span>
                                    </div -->
                                    <!-- div class="blog-attr">
                                        <span>Post by <a href="#">Admin</a></span>
                                        <span class="separator">|</span>
                                        <span>On February 09, 2015</span>
                                    </div -->
                                    <div class="desc">
                                       	<?php echo $_smarty_tpl->tpl_vars['data']->value['konten'];?>
                                        
                                    </div>
                                    <!-- div class="share-post">
                                    	<span class="share-label">Share this post</span>
                                        <ul>
                                        	<li class="color-facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        	<li class="color-twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        	<li class="color-pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                        	<li class="color-gplus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        	<li class="color-linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div -->
                            	</div>
                            </div>
                            <!-- hr>
                            <div class="title-group3">
                            	<h3>Comments (3)</h3>
                            </div>
                            <div class="comment-list">
                            	<div class="comment-item">
                                    <div class="media">
                                        <div class="media-left"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/avatar/avatar-04.jpg" alt=""></a></div>
                                        <div class="media-body">
                                            <div class="comment-date">12.5/2104</div>
                                            <div class="comment-title">Section 1.10.33 of "de Finibus Bonorum et Malorum"</div>
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                                        </div>
                                    </div>
                                    <div class="comment-reply">
                                        <div class="media">
                                            <div class="media-left"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/avatar/avatar-04.jpg" alt=""></a></div>
                                            <div class="media-body">
                                                <div class="comment-date">12.5/2104</div>
                                                <div class="comment-title">1914 translation by H. Rackham</div>
                                                Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item">
                                    <div class="media">
                                        <div class="media-left"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/avatar/avatar-04.jpg" alt=""></a></div>
                                        <div class="media-body">
                                            <div class="comment-date">12.5/2104</div>
                                            <div class="comment-title">Section 1.10.33 of "de Finibus Bonorum et Malorum"</div>
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="title-group3">
                            	<h3>Leave a reply</h3>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                            <input type="text" class="form-control input-md" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                            <input type="text" class="form-control input-md" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                            <input type="text" class="form-control input-md" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                            <textarea class="form-control" placeholder="Your comment" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default btn-lg">SUBMIT COMMENT</button>
                            </form>
                            <br -->
                        </div>	
                        
                        
                    </div><!-- /.col-right -->
                    
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
                </div>
            </div>
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
        
        <?php echo '<script'; ?>
 type="text/javascript"> 
            
            $(function () {
                <?php  $_smarty_tpl->tpl_vars['entry_widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widget_kanan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_widget']->key => $_smarty_tpl->tpl_vars['entry_widget']->value) {
$_smarty_tpl->tpl_vars['entry_widget']->_loop = true;
?>
                    /* <?php echo $_smarty_tpl->tpl_vars['entry_widget']->value['id_name'];?>
 slider */
                    $("#<?php echo $_smarty_tpl->tpl_vars['entry_widget']->value['id_name'];?>
 .owl").owlCarousel({
                        autoPlay : false,
                        items : 1,
                        itemsDesktop : [1199,1],
                        itemsDesktopSmall : [991,1],
                        itemsTablet: [767,2],
                        itemsMobile : [480,1],
                        slideSpeed : 3000,
                        paginationSpeed : 3000,
                        rewindSpeed : 3000,
                        navigation : true,
                        stopOnHover : true,
                        pagination : false,
                        scrollPerPage:true,
                    });
                <?php } ?>
            });
                    
            jQuery(document).ready(function(){    
                "use strict";

                /* .thumbnail-container product image slider */
                $('.thumbnail-container .bxslider').bxSlider({
                    slideWidth: 94,
                    slideMargin: 5,
                    minSlides: 4,
                    maxSlides: 4,
                    pager: false,
                    speed: 500,
                    pause: 3000
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
                    $( "#add_to_cart" ).submit();
                });
                
                $('.btn-wishlist').on('click', function (e) {
                    window.location = "<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/wishlist/addtowishlist.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
";
                });

            });
    <?php echo '</script'; ?>
>        

  </body>
</html>
<?php }} ?>
