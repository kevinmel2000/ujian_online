<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-05 07:51:32
         compiled from "..\templates\back-end\AdminLTE-2.3.6\rekapitulasipelaporan\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1301757ccc194407478-91029736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e9e8e04ca0e540f93399887408564c63b61827d' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\rekapitulasipelaporan\\list.html',
      1 => 1473032745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1301757ccc194407478-91029736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'tahun' => 0,
    'nama_propinsi' => 0,
    'id_propinsi' => 0,
    'nama_kabupaten' => 0,
    'id_kabupaten' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'tpl_dir' => 0,
    'totalpage' => 0,
    'query' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57ccc1945f7010_84550803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ccc1945f7010_84550803')) {function content_57ccc1945f7010_84550803($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
">Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/rekapitulasipelaporan/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">      
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            
                            <!-- /.box-header -->
                            <div class="box-body">
                                  <div class="row">

                                    <div class="col-md-12">
                                        <div id="form-group">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td width="20%">
                                                        <label for="propinsi">&nbsp;&nbsp;Tahun Pelaporan:</label>
                                                    </td>
                                                    <td width="70%">
                                                        <input type="text" name="tahun" value="<?php echo $_smarty_tpl->tpl_vars['tahun']->value;?>
" class="form-control" placeholder="Tahun Pelaporan" />
                                                    </td>
                                                </tr>                                                
                                                
                                                <tr>
                                                    <td width="20%">
                                                        <label for="propinsi">&nbsp;&nbsp;Propinsi:</label>
                                                    </td>
                                                    <td width="70%">
                                                        <input type="text" name="nama_propinsi" value="<?php echo $_smarty_tpl->tpl_vars['nama_propinsi']->value;?>
" class="form-control"  placeholder="Pilih Propinsi" />
                                                        <input type="hidden" name="id_propinsi" value="<?php echo $_smarty_tpl->tpl_vars['id_propinsi']->value;?>
" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td width="20%">
                                                        <label for="kabupaten">&nbsp;&nbsp;Kabupaten:</label>
                                                    </td>
                                                    <td width="70%">
                                                        <input type="text" name="nama_kabupaten" value="<?php echo $_smarty_tpl->tpl_vars['nama_kabupaten']->value;?>
" class="form-control"  placeholder="Pilih Kabupaten" />
                                                        <input type="hidden" name="id_kabupaten" value="<?php echo $_smarty_tpl->tpl_vars['id_kabupaten']->value;?>
" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group"><div id='btn_cari' class="btn btn-success">Tampilkan</div></div>
                                        
                                        <?php if (count($_smarty_tpl->tpl_vars['listdetail']->value)>0) {?>
                                            <div id="detail" class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="5px" rowspan="2"><div style="text-align: center;">No.</div></th>
                                                            <th width="20%" rowspan="2"><div style="text-align: center;">BKD</div></th>
                                                            <!-- th width="5%" rowspan="2"><div style="text-align: right;">Tahun</div></th -->
                                                            <th width="5%" rowspan="2"><div style="text-align: right;">Jumlah Pegawai</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">UU ASN</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">PP 53 / 2010</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">PP 45 / 1990</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">PP 46 / 2011</div></th>
                                                            <th width="15%" colspan="3"><div style="text-align: center;">PP Lainnya</div></th>                                                            
                                                            <th width="10%" rowspan="2"><div style="text-align: right;">Jumlah</div></th>                                                          
                                                            <th width="5px" rowspan="2"><div style="text-align: right;"></div></th>
                                                        </tr>

                                                        <tr>
                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>

                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>

                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>

                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>

                                                            <th><div style="text-align: right;">R</div></th>
                                                            <th><div style="text-align: right;">S</div></th>
                                                            <th><div style="text-align: right;">B</div></th>
                                                        </tr>
                                                    </thead>

                                                        
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                                
                                                                <td align="left"><?php if ($_smarty_tpl->tpl_vars['entry']->value['id_kabupaten']!=0) {
echo $_smarty_tpl->tpl_vars['entry']->value['nama_kabupaten'];
} else {
echo $_smarty_tpl->tpl_vars['entry']->value['nama_propinsi'];
}?></td>
                                                                <!-- td align="center"><b><?php echo $_smarty_tpl->tpl_vars['entry']->value['tahun_pelaporan'];?>
</td -->
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah_pegawai'];?>
</td>
                                                                
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['uu_asn_ringan'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['uu_asn_sedang'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['uu_asn_berat'];?>
</td>
                                                                
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_53_2010_ringan'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_53_2010_sedang'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_53_2010_berat'];?>
</td>
                                                                
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_45_1990_ringan'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_45_1990_sedang'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_45_1990_berat'];?>
</td>
                                                                
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_46_2011_ringan'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_46_2011_sedang'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pp_46_2011_berat'];?>
</td>
                                                                
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['peraturan_lain_ringan'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['peraturan_lain_sedang'];?>
</td>
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['peraturan_lain_berat'];?>
</td>
                                                                
                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['total'];?>
</td>
                                                                <td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/uploads/pelanggaran_disiplin/<?php echo $_smarty_tpl->tpl_vars['entry']->value['namafile'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/pdf.png" alt="Download" /></a></td>
                                                                
                                                            </tr>
                                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                                        <?php } ?>
                                                    </tbody>
                                                </table>        
                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                                <div class="form-group text-center">
                                                    <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                                        <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}
if ($_smarty_tpl->tpl_vars['tahun']->value!='') {?>&tahun=<?php echo $_smarty_tpl->tpl_vars['tahun']->value;
}
if ($_smarty_tpl->tpl_vars['id_propinsi']->value!='') {?>&id_propinsi=<?php echo $_smarty_tpl->tpl_vars['id_propinsi']->value;
}
if ($_smarty_tpl->tpl_vars['id_kabupaten']->value!='') {?>&id_kabupaten=<?php echo $_smarty_tpl->tpl_vars['id_kabupaten']->value;
}?>">&larr; Prev</a>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>
                                                            <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                
                                                        <?php } else { ?>
                                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}
if ($_smarty_tpl->tpl_vars['tahun']->value!='') {?>&tahun=<?php echo $_smarty_tpl->tpl_vars['tahun']->value;
}
if ($_smarty_tpl->tpl_vars['id_propinsi']->value!='') {?>&id_propinsi=<?php echo $_smarty_tpl->tpl_vars['id_propinsi']->value;
}
if ($_smarty_tpl->tpl_vars['id_kabupaten']->value!='') {?>&id_kabupaten=<?php echo $_smarty_tpl->tpl_vars['id_kabupaten']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                    <?php }} ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                        <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}
if ($_smarty_tpl->tpl_vars['tahun']->value!='') {?>&tahun=<?php echo $_smarty_tpl->tpl_vars['tahun']->value;
}
if ($_smarty_tpl->tpl_vars['id_propinsi']->value!='') {?>&id_propinsi=<?php echo $_smarty_tpl->tpl_vars['id_propinsi']->value;
}
if ($_smarty_tpl->tpl_vars['id_kabupaten']->value!='') {?>&id_kabupaten=<?php echo $_smarty_tpl->tpl_vars['id_kabupaten']->value;
}?>">Next &rarr;</a>
                                                    <?php }?>                                
                                                </div>
                                            <?php }?>
                                            
                                            <!-- div class="form-group text-right"><div id='btn_cetak' class="btn btn-warning">Cetak</div> <div id='btn_excel' class="btn btn-success">Excel</div></div -->
                                        <?php }?>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
              
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                  
    </div>
    <!-- ./wrapper -->
        
    <!-- jQuery 2.2.3 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.6 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- jvectormap -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <!-- SlimScroll 1.3.0 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    
    
    <!-- ChartJS 1.0.1 -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/chartjs/Chart.min.js"><?php echo '</script'; ?>
 -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/pages/dashboard2.js"><?php echo '</script'; ?>
 -->
    
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/demo.js"><?php echo '</script'; ?>
>
    
    <!-- jQuery Ui -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.datepick.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.plugin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/datepick/jquery.datepick.js"><?php echo '</script'; ?>
>
    
    <!-- LOAD MASKING -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/css/loadmask.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery.loadmask.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            $('[name=nama_propinsi]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_propinsi]').val('');
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/propinsiDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
                            $('[name=id_propinsi]').val('');
                            response( $.map( data, function( item ) {
                                return {
                                    label: item['display'],
                                    value: item['value'],
                                    data : item['data']
                                }
                            }));
                        }
                    });
                },
                autoFocus: true,	      	
                minLength: 1,
                select: function( event, ui ) {
                    var data = ui.item.data;
                    $('[name=id_propinsi]').val(data['id']);
                }		      	
            });
            
            $('[name=nama_kabupaten]').autocomplete({
                source: function( request, response ) {
                    $('[name=id_kabupaten]').val('');
                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/kabupatenDataStore.php',
                        dataType: "json",
                        method: 'post',
                        data: {
                            query: request.term,
                            prop: $('[name=id_propinsi]').val()
                        },
                        success: function( data ) {
                            $('[name=id_kabupaten]').val('');
                            response( $.map( data, function( item ) {
                                return {
                                    label: item['display'],
                                    value: item['value'],
                                    data : item['data']
                                }
                            }));
                        }
                    });
                },
                autoFocus: true,	      	
                minLength: 1,
                select: function( event, ui ) {
                    var data = ui.item.data;
                    $('[name=id_kabupaten]').val(data['id']);
                }		      	
            });
            
            $( "#btn_cari" ).click(function() {
                var tahun = $( "[name=tahun]" ).val();
                var id_propinsi = $( "[name=id_propinsi]" ).val();
                var id_kabupaten = $( "[name=id_kabupaten]" ).val();
                
                window.location='list.php?'+(tahun.length>0?'&tahun='+tahun:'')+(id_propinsi.length>0?'&id_propinsi='+id_propinsi:'')+(id_kabupaten.length>0?'&id_kabupaten='+id_kabupaten:'');
            });
        });
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
