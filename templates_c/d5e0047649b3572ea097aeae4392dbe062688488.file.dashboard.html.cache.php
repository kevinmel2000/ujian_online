<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-25 05:36:15
         compiled from "..\templates\back-end\AdminLTE-2.3.6\dashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:985058813d37cc23d9-70666862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e0047649b3572ea097aeae4392dbe062688488' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\dashboard.html',
      1 => 1485297364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '985058813d37cc23d9-70666862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58813d37e6dfd2_40452813',
  'variables' => 
  array (
    'data_user' => 0,
    'total_sekolah' => 0,
    'adminweburl' => 0,
    'total_guru' => 0,
    'total_siswa' => 0,
    'total_pelajaran' => 0,
    'total_soal' => 0,
    'jadwalujian' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58813d37e6dfd2_40452813')) {function content_58813d37e6dfd2_40452813($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['data_user']->value['tipe_user']=="A"&&$_smarty_tpl->tpl_vars['data_user']->value['id_sekolah']==0) {?>
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3><?php echo $_smarty_tpl->tpl_vars['total_sekolah']->value[0]['TOTAL'];?>
</h3>

                      <p>Sekolah</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/sekolah/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
            <?php }?>
            <!-- ./col -->
        
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $_smarty_tpl->tpl_vars['total_guru']->value[0]['TOTAL'];?>
</h3>

                  <p>Guru</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-stalker"></i>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/guru/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $_smarty_tpl->tpl_vars['total_siswa']->value[0]['TOTAL'];?>
</h3>

                  <p>Siswa</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/siswa/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $_smarty_tpl->tpl_vars['total_pelajaran']->value[0]['TOTAL'];?>
</h3>

                  <p>Pelajaran</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/mapel/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
            <?php if ($_smarty_tpl->tpl_vars['data_user']->value['id_sekolah']!=0) {?>
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3><?php echo $_smarty_tpl->tpl_vars['total_soal']->value[0]['TOTAL'];?>
</h3>

                      <p>Soal Ujian</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/soal/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
            <?php }?>
            <!-- ./col -->
        </div>
        
        <?php if (count($_smarty_tpl->tpl_vars['jadwalujian']->value)>0) {?>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Jadwal Ujian</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="jadwalujian" class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"><div style="text-align: center;">No.</div></th>
                                                <th width="25%"><div style="text-align: center;">Sekolah / Tingkat / Kelas</div></th>
                                                <th width="20%"><div style="text-align: center;">Pelajaran</div></th>
                                                <th width="20%"><div style="text-align: center;">Kode / Nama Soal</div></th>
                                                <th width="15%"><div style="text-align: center;">Tanggal Jam</div></th>
                                                <th width="10%"><div style="text-align: center;">Status</div></th>                                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jadwalujian']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_sekolah'];?>
<br /><small>Tingkat <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_tingkat'];?>
, Kelas <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_kelas'];?>
</small></td>                                                                
                                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pelajaran'];?>
</td>
                                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_soal'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_soal'];?>
</td>
                                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal_ujian'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['entry']->value['jam_ujian'];?>
</td>
                                                    <td align="center">
                                                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?><label class="label bg-green">Sudah Berlalu</label><?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?><label class="label bg-blue">Akan Datang</label><?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?><label class="label bg-red">Sedang Berlangsung</label><?php }?>
                                                    </td>                                                                                                       
                                                </tr>
                                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                            <?php } ?>
                                        </tbody>
                                    </table>        
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </div>
        <?php }?>            
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
        var home_url = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
';
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/notifikasi.js"><?php echo '</script'; ?>
>
    
</body>
</html><?php }} ?>
