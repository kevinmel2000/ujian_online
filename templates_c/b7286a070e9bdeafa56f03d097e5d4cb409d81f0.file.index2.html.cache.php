<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-25 15:48:50
         compiled from "..\templates\back-end\AdminLTE-2.3.6\index2.html" */ ?>
<?php /*%%SmartyHeaderCode:1201257bb73706694c8-04265462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7286a070e9bdeafa56f03d097e5d4cb409d81f0' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\index2.html',
      1 => 1472114928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201257bb73706694c8-04265462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bb7370721b96_29278974',
  'variables' => 
  array (
    'data_user' => 0,
    'pengumuman' => 0,
    'entry' => 0,
    'adminweburl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb7370721b96_29278974')) {function content_57bb7370721b96_29278974($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>&nbsp;</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php if ($_smarty_tpl->tpl_vars['data_user']->value['tipe_user']=="U"&&count($_smarty_tpl->tpl_vars['pengumuman']->value)>0) {?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pengumuman Terbaru</h3>
                        <div class="box-tools pull-right">
                            <!-- button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button -->
                        </div>
                    </div>
                    
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pengumuman']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                            <li class="item">
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title"><span style="font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
</span></a>
                                    <span class="product-description" style="font-size: 16px;">
                                        <?php echo $_smarty_tpl->tpl_vars['entry']->value['pengumuman'];?>

                                    </span>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <?php }?>
        
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_uu_asn"></div>                                                    
                    </div>
                </div>  
            </div>
          
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_pp_53_2010"></div>                                                    
                    </div>
                </div>  
            </div>
      </div> 	
      
      <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_pp_45_1990"></div>                                                    
                    </div>
                </div>  
            </div>
          
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_pp_46_2011"></div>                                                    
                    </div>
                </div>  
            </div>
      </div>
      
      <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="width:100%; height:100%;" id="layarfullscreen_peraturan_lain"></div>                                                    
                    </div>
                </div>  
            </div>
      </div>
    
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

  

</div>
<!-- ./wrapper -->

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <?php echo '<script'; ?>
 type="text/javascript" src="http://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            $.ajax({
                type: 'POST',
                url: '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/statistikpelanggaran.php',
                //data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    var uu_asn = data['uu_asn'];
                    var pp_53_2010 = data['pp_53_2010'];
                    var pp_45_1990 = data['pp_45_1990'];
                    var pp_46_2011 = data['pp_46_2011'];
                    var peraturan_lain = data['peraturan_lain'];
                    
                    loadGrafik_uu_asn(uu_asn['ringan'], uu_asn['sedang'], uu_asn['berat']);
                    loadGrafik_pp_53_2010(pp_53_2010['ringan'], pp_53_2010['sedang'], pp_53_2010['berat']);
                    loadGrafik_pp_45_1990(pp_45_1990['ringan'], pp_45_1990['sedang'], pp_45_1990['berat']);
                    loadGrafik_pp_46_2011(pp_46_2011['ringan'], pp_46_2011['sedang'], pp_46_2011['berat']);
                    loadGrafik_peraturan_lain(peraturan_lain['ringan'], peraturan_lain['sedang'], peraturan_lain['berat']);
                    

                }, 
                error: function() {

                }
            }); 
            
            function loadGrafik_uu_asn(ringan, sedang, berat) {
                $('#layarfullscreen_uu_asn').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin UU ASN<br /><?php if ($_smarty_tpl->tpl_vars['data_user']->value['tipe_user']=="A") {?>Nasional<?php } else { ?>BKD <?php if ($_smarty_tpl->tpl_vars['data_user']->value['tingkat']=="P") {?>Propinsi <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_propinsi'];
} else {
echo $_smarty_tpl->tpl_vars['data_user']->value['nama_kabupaten'];
}
}?>'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            function loadGrafik_pp_53_2010(ringan, sedang, berat) {
                $('#layarfullscreen_pp_53_2010').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin PP 53 Tahun 2010<br /><?php if ($_smarty_tpl->tpl_vars['data_user']->value['tipe_user']=="A") {?>Nasional<?php } else { ?>BKD <?php if ($_smarty_tpl->tpl_vars['data_user']->value['tingkat']=="P") {?>Propinsi <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_propinsi'];
} else {
echo $_smarty_tpl->tpl_vars['data_user']->value['nama_kabupaten'];
}
}?>'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            function loadGrafik_pp_45_1990(ringan, sedang, berat) {
                $('#layarfullscreen_pp_45_1990').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin PP 45 Tahun 1990<br /><?php if ($_smarty_tpl->tpl_vars['data_user']->value['tipe_user']=="A") {?>Nasional<?php } else { ?>BKD <?php if ($_smarty_tpl->tpl_vars['data_user']->value['tingkat']=="P") {?>Propinsi <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_propinsi'];
} else {
echo $_smarty_tpl->tpl_vars['data_user']->value['nama_kabupaten'];
}
}?>'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            function loadGrafik_pp_46_2011(ringan, sedang, berat) {
                $('#layarfullscreen_pp_46_2011').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin PP 46 Tahun 2011<br /><?php if ($_smarty_tpl->tpl_vars['data_user']->value['tipe_user']=="A") {?>Nasional<?php } else { ?>BKD <?php if ($_smarty_tpl->tpl_vars['data_user']->value['tingkat']=="P") {?>Propinsi <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_propinsi'];
} else {
echo $_smarty_tpl->tpl_vars['data_user']->value['nama_kabupaten'];
}
}?>'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            function loadGrafik_peraturan_lain(ringan, sedang, berat) {
                $('#layarfullscreen_peraturan_lain').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Pelanggaran Disiplin Peraturan Lain<br /><?php if ($_smarty_tpl->tpl_vars['data_user']->value['tipe_user']=="A") {?>Nasional<?php } else { ?>BKD <?php if ($_smarty_tpl->tpl_vars['data_user']->value['tingkat']=="P") {?>Propinsi <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_propinsi'];
} else {
echo $_smarty_tpl->tpl_vars['data_user']->value['nama_kabupaten'];
}
}?>'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pelanggaran',
                        colorByPoint: true,
                        data: [{
                            name: 'Ringan',
                            y: ringan*1,
                            color: 'green'
                        }, {
                            name: 'Sedang',
                            y: sedang*1,
                            sliced: true,
                            selected: true,
                            color: 'yellow'
                        }, {
                            name: 'Berat',
                            y: berat*1,
                            color: 'red'
                        }]
                    }]
                });
            };
            
            
            
        });
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
