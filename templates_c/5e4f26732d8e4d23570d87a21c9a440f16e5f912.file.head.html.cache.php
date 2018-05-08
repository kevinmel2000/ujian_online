<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 06:22:26
         compiled from "D:\www\gomochart\templates\front-end\accecories\includes\head.html" */ ?>
<?php /*%%SmartyHeaderCode:60075778fc88109cf6-40564421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e4f26732d8e4d23570d87a21c9a440f16e5f912' => 
    array (
      0 => 'D:\\www\\gomochart\\templates\\front-end\\accecories\\includes\\head.html',
      1 => 1467674545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60075778fc88109cf6-40564421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778fc88133ee2_88215270',
  'variables' => 
  array (
    'tpl_dir' => 0,
    'page_salected' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778fc88133ee2_88215270')) {function content_5778fc88133ee2_88215270($_smarty_tpl) {?><head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gomochart : Ecommerce Template</title>
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="HTMLCooker">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
		
		<!-- =============== Google fonts =============== -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		   
		<!-- Font Awesome CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
		
                <?php if ($_smarty_tpl->tpl_vars['page_salected']->value=='detail produk') {?>
                    <!-- BX Slider CSS -->
                    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/jquery.bxslider.css" rel="stylesheet">

                    <!-- Cloud Zoom CSS -->
                    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/cloud-zoom.css" rel="stylesheet">
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['page_salected']->value=='home') {?>
                    <!-- Nivo Slider CSS -->
                    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/nivo-slider.css" rel="stylesheet">
		<?php }?>
                
                <!-- Animate CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/animate.css" rel="stylesheet">
		<!-- Owl Carousel CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/owl.carousel.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/style.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/style-green.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/local.css" rel="stylesheet">
		<!-- Responsive CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/responsive.css" rel="stylesheet">
		<!--[if lt IE 9]>
		  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
		  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
                
                
    <?php echo '<script'; ?>
 type="text/javascript">
        var home_url = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
';
    <?php echo '</script'; ?>
>
  </head><?php }} ?>
