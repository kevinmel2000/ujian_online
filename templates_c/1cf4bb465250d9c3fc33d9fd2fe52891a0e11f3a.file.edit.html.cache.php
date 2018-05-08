<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-20 13:46:08
         compiled from "..\templates\back-end\AdminLTE-2.3.6\ujian\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:11039588568a2159a44-55319216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cf4bb465250d9c3fc33d9fd2fe52891a0e11f3a' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\ujian\\edit.html',
      1 => 1485298420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11039588568a2159a44-55319216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_588568a2a9d259_59273199',
  'variables' => 
  array (
    'dataujian' => 0,
    'jam' => 0,
    'menit' => 0,
    'detik' => 0,
    'soal_pilihanganda' => 0,
    'soal_essai' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588568a2a9d259_59273199')) {function content_588568a2a9d259_59273199($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="skin-blue sidebar-mini wysihtml5-supported sidebar-collapse">
    <div class="wrapper">
        <div class="content-wrapper">
           
            <section class="content">
                <div id="nav_bar" class="row">
                    <div class="col-md-12">
                        <div class="row" style="background: #fff; border-bottom: 3px solid #08c;">
                            <div class="form-group">
                                <section class="col-lg-8 col-xs-9 content-header" style="padding-bottom: 20px;">
                                    <h1 style="font-size: 22px;"><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['nama_soal'];?>
</h1>
                                    <span style="font-size: 16px;">Tanggal: <?php echo $_smarty_tpl->tpl_vars['dataujian']->value['tanggal_ujian'];?>
 Jam: <?php echo $_smarty_tpl->tpl_vars['dataujian']->value['jam_ujian'];?>
</span>
                                </section>

                                <section class="col-lg-4 col-xs-4 content-header" style="padding-bottom: 20px; text-align: right;">
                                    <h1 id="jam"><?php echo $_smarty_tpl->tpl_vars['jam']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['menit']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['detik']->value;?>
</h1>
                                    <span style="font-size: 16px;">Pilihan Ganda: <label class="label label-info"><span id="isi_pilihanganda">0</span> / <?php echo count($_smarty_tpl->tpl_vars['soal_pilihanganda']->value);?>
</label>&nbsp;&nbsp;&nbsp;&nbsp;Essai: <label class="label label-warning"><span id="isi_essai">0</span> / <?php echo count($_smarty_tpl->tpl_vars['soal_essai']->value);?>
</label>&nbsp;&nbsp;&nbsp;<label id="btn_finish" class="label label-danger" style="cursor:pointer">SELESAI</label></span>
                                </section>
                            </div>
                        </div> 
                    </div>    
                    
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 10px 0 10px; background: #ecf0f5;">
                            <div class="form-group">
                                <ul id="myTab" class="nav nav-tabs">                                
                                    <li class="active">
                                        <a href="#penjelasan" data-toggle="tab"><b>PENDAHULUAN</b></a>
                                    </li>                                 
                                    <li>
                                        <a href="#pilihanganda" data-toggle="tab"><b>SOAL PILIHAN GANDA</b></a>
                                    </li>                                
                                    <li>
                                        <a href="#essai" data-toggle="tab"><b>SOAL ESSAI</b></a>
                                    </li> 
                                </ul>
                            </div>                        
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <br /><br /><br /><br /><br /><br /><br />
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                    
                        
                        
                        <div class="form-group tab-content">
                            <div class="tab-pane fade active in" id="penjelasan">
                                <div id="form-group">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <td><label for="sekolah">Sekolah:</label></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['nama_sekolah'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td><label for="tingkat">Tingkat:</label></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['nama_tingkat'];?>
</td>                                                    
                                        </tr>
                                        <tr>
                                            <td><label for="kelas">Kelas:</label></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['nama_kelas'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td><label for="pelajaran">Pelajaran:</label></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['nama_pelajaran'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td><label for="kode_soal">Kode Soal:</label></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['kode_soal'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td><label for="nama_soal">Nama Soal:</label></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['nama_soal'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td><label for="lama_waktu_pengerjaan">Lama Pengerjaan:</label></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['lama_waktu_pengerjaan'];?>
 menit</td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label for="keterangan">Keterangan:</label></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dataujian']->value['keterangan'];?>
</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                                
                            <div class="tab-pane fade" id="pilihanganda">
                                <?php if (count($_smarty_tpl->tpl_vars['soal_pilihanganda']->value)>0) {?>
                                    <div id="soal_pilihanganda" class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['soal_pilihanganda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                    <tr>
                                                        <td width="5%" align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
</td>
                                                        <td width="95%" colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pertanyaan'];?>
<input type="hidden" name="pilihanganda_id_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="A" class="pilih" /></td>
                                                        <td width="5%" align="center">A.</td>
                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_1'];?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="B" class="pilih" /></td>
                                                        <td width="5%" align="center">B.</td>
                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_2'];?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="C" class="pilih" /></td>
                                                        <td width="5%" align="center">C.</td>
                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_3'];?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="D" class="pilih" /></td>
                                                        <td width="5%" align="center">D.</td>
                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_4'];?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" id_pilih="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="E" class="pilih" /></td>
                                                        <td width="5%" align="center">E.</td>
                                                        <td width="85%" align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pilihan_5'];?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%" colspan="4">&nbsp;</td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>        
                                    </div>
                                <?php }?>
                            </div>

                            <div class="tab-pane fade" id="essai">
                                <?php if (count($_smarty_tpl->tpl_vars['soal_essai']->value)>0) {?>
                                    <div id="soal_essai" class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['soal_essai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                    <tr>
                                                        <td width="5%" align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
</td>
                                                        <td width="95%" align="left">
                                                            <?php echo $_smarty_tpl->tpl_vars['entry']->value['pertanyaan'];?>
<br /><br />
                                                            Jawab:<br />
                                                            <input type="hidden" name="essai_id_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" />
                                                            <div class="summernote_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">&nbsp;</td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>        
                                    </div>
                                <?php }?>
                            </div>
                        </div>

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
    
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/demo.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    
    <!-- include summernote -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/summernote.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/summernote.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/summernote-ext-video.js"><?php echo '</script'; ?>
> 
    
    <!-- iCheck -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
            
        var jawab_pilihanganda = [];
        var jawab_essai = [];
        
        $(function () {           
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
            
            var jam   = <?php echo $_smarty_tpl->tpl_vars['jam']->value;?>
;
            var menit = <?php echo $_smarty_tpl->tpl_vars['menit']->value;?>
;
            var detik = <?php echo $_smarty_tpl->tpl_vars['menit']->value;?>
;
            
            
            var countdown = function() {
                setTimeout(function() {
                    detik--;
                    if(detik<0) {
                        detik=59;
                        menit--;
                        if(menit<0) {
                            menit=59;
                            jam--;
                            if(jam<=0) {
                                get_jawaban_pilihanganda();
                                get_jawaban_essai();
                                proses_simpan();
                            
                                return;
                            }
                        }
                    }
                    $('#jam').text((jam<10?'0':'')+jam+':'+(menit<10?'0':'')+menit+':'+(detik<10?'0':'')+detik);
                    
                    countdown();
                }, 1000);
            };

            countdown();
            
            
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['soal_essai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?> 
                $('.summernote_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
').summernote({
                    height: 100,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        //['fontname', ['fontname']],
                        // ['fontsize', ['fontsize']], Still buggy
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        // ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        //['view', ['fullscreen' , 'codeview' ]],
                        ['help', ['help']]
                    ]
                });
                $('.summernote_<?php echo $_smarty_tpl->tpl_vars['entry']->value['no'];?>
').code('');
            <?php } ?>
            
            
            for(var i=0; i<<?php echo count($_smarty_tpl->tpl_vars['soal_pilihanganda']->value);?>
; i++) { jawab_pilihanganda[i] = ''; }       
            for(var i=0; i<<?php echo count($_smarty_tpl->tpl_vars['soal_essai']->value);?>
; i++) { jawab_essai[i] = ''; }       
            
            var send_jawaban = function() {
                setTimeout(function() {
                        
                    var total_isi_pilihanganda = 0; 
                    for(var key in jawab_pilihanganda) {
                        var no = eval(key)+1;
                        var pilihanganda = $('[name=pilihan_'+no+']:checked').val()!=undefined?$('[name=pilihan_'+no+']:checked').val():'';
                        total_isi_pilihanganda=total_isi_pilihanganda+(pilihanganda.length>0?1:0);
                    }
                    $('#isi_pilihanganda').text(total_isi_pilihanganda);
                    
                    var total_isi_essai = 0; 
                    for(var key in jawab_essai) {
                        var no = eval(key)+1;
                        var essai = $('.summernote_'+no).summernote().code()!=undefined?$('.summernote_'+no).summernote().code().replace(/\n/, '<br />'):'';
                        total_isi_essai=total_isi_essai+(essai.length>0?1:0);
                    }
                    $('#isi_essai').text(total_isi_essai);
                    
                    send_jawaban();
                }, 1000);
            };
        
            //send_jawaban();
        
            
            var jawaban_pilihanganda = '';
            var get_jawaban_pilihanganda = function() {
                jawaban_pilihanganda = '';
                for(var key in jawab_pilihanganda) {
                    var no = eval(key)+1;
                    var element = $('[name=pilihan_'+no+']');
                    var id = $('[name=pilihanganda_id_'+no+']').val();
                    var jawaban = $('[name=pilihan_'+no+']:checked').val()!=undefined?$('[name=pilihan_'+no+']:checked').val():'';
                    jawaban_pilihanganda+=(key>0?'\n':'')+id+'\t'+jawaban+'\t';
                }
                console.log(jawaban_pilihanganda);
            }
            
            var jawaban_essai = ''; 
            var get_jawaban_essai = function() {
                jawaban_essai = ''
                for(var key in jawab_essai) {
                    var no = eval(key)+1;
                    var id = $('[name=essai_id_'+no+']').val();
                    var jawaban = $('.summernote_'+no).summernote().code()!=undefined?$('.summernote_'+no).summernote().code().replace(/\n/, '<br />'):'';
                    jawaban_essai+=(key>0?'\n':'')+id+'\t'+jawaban+'\t';
                }
                console.log(jawaban_essai);
            }
            
            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('body').offset().top 
                }, 600);
            }
            
            var proses_simpan = function() {
                var data = new FormData();
                data.append('id_soal_head', '<?php echo $_smarty_tpl->tpl_vars['dataujian']->value['id'];?>
');
                data.append('jawaban_pilihanganda', jawaban_pilihanganda);
                data.append('jawaban_essai', jawaban_essai);
                
                $.ajax({
                    type: 'POST',
                    url: 'save.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        if(data['success']) {
                            window.location = 'finish.php?id=<?php echo $_smarty_tpl->tpl_vars['dataujian']->value['id'];?>
';                    
                        } else {
                            proses_simpan();
                            setErrorMessage(data['message']);
                        }
                    }, 
                    error: function() {
                        proses_simpan();
                        setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                    }
                });
            }
            

            $('#btn_finish').click(function() {
                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin menyudahi ujian?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Selesai',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            get_jawaban_pilihanganda();
                            get_jawaban_essai();
                            proses_simpan();
                            $(this).dialog("close");
                        },
                        No: function () {
                            //doFunctionForNo();
                            $(this).dialog("close");
                        }
                    },
                    close: function (event, ui) {
                        $(this).remove();
                    }
                });
                
                
            });
        });
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
