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
    '55406f607107bc7086bc160e8c65632cc40cbbee' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\head.html',
      1 => 1515122801,
      2 => 'file',
    ),
    '01735ed7da6b981efbc50951181b6c658fe477ca' => 
    array (
      0 => 'D:\\www\\ujian_online\\templates\\back-end\\AdminLTE-2.3.6\\includes\\footer.html',
      1 => 1473032700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11039588568a2159a44-55319216',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a53223dc607a7_24022031',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a53223dc607a7_24022031')) {function content_5a53223dc607a7_24022031($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tes Ujian Biologi | </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
    <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    
  <!-- Theme style -->
      <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/AdminLTE.ujian.css">
    <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/iCheck/square/red.css">
  
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/css/skins/_all-skins.min.css">
  
  <style>
        #nav_bar {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
  </style>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="skin-blue sidebar-mini wysihtml5-supported sidebar-collapse">
    <div class="wrapper">
        <div class="content-wrapper">
           
            <section class="content">
                <div id="nav_bar" class="row">
                    <div class="col-md-12">
                        <div class="row" style="background: #fff; border-bottom: 3px solid #08c;">
                            <div class="form-group">
                                <section class="col-lg-8 col-xs-9 content-header" style="padding-bottom: 20px;">
                                    <h1 style="font-size: 22px;">Tes Ujian Biologi</h1>
                                    <span style="font-size: 16px;">Tanggal: 08-01-2018 Jam: 14:30</span>
                                </section>

                                <section class="col-lg-4 col-xs-4 content-header" style="padding-bottom: 20px; text-align: right;">
                                    <h1 id="jam">2:51:47</h1>
                                    <span style="font-size: 16px;">Pilihan Ganda: <label class="label label-info"><span id="isi_pilihanganda">0</span> / 1</label>&nbsp;&nbsp;&nbsp;&nbsp;Essai: <label class="label label-warning"><span id="isi_essai">0</span> / 0</label>&nbsp;&nbsp;&nbsp;<label id="btn_finish" class="label label-danger" style="cursor:pointer">SELESAI</label></span>
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
                                            <td>SDN Negeri 486 Jakarta</td>
                                        </tr>
                                        <tr>
                                            <td><label for="tingkat">Tingkat:</label></td>
                                            <td></td>                                                    
                                        </tr>
                                        <tr>
                                            <td><label for="kelas">Kelas:</label></td>
                                            <td>Satu</td>
                                        </tr>
                                        <tr>
                                            <td><label for="pelajaran">Pelajaran:</label></td>
                                            <td>Biologi</td>
                                        </tr>
                                        <tr>
                                            <td><label for="kode_soal">Kode Soal:</label></td>
                                            <td>AAGYM</td>
                                        </tr>
                                        <tr>
                                            <td><label for="nama_soal">Nama Soal:</label></td>
                                            <td>Tes Ujian Biologi</td>
                                        </tr>
                                        <tr>
                                            <td><label for="lama_waktu_pengerjaan">Lama Pengerjaan:</label></td>
                                            <td>190 menit</td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label for="keterangan">Keterangan:</label></td>
                                            <td>Ini adalah Tes Ujian Saua<br></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                                
                            <div class="tab-pane fade" id="pilihanganda">
                                                                    <div id="soal_pilihanganda" class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                                                    
                                                    <tr>
                                                        <td width="5%" align="center">1</td>
                                                        <td width="95%" colspan="3" align="left"><p>Pertanyaannya&nbsp;&nbsp; ?&nbsp;&nbsp; <br></p><input type="hidden" name="pilihanganda_id_1" value="58" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_1" id_pilih="58" value="A" class="pilih" /></td>
                                                        <td width="5%" align="center">A.</td>
                                                        <td width="85%" align="left">2</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_1" id_pilih="58" value="B" class="pilih" /></td>
                                                        <td width="5%" align="center">B.</td>
                                                        <td width="85%" align="left">3</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_1" id_pilih="58" value="C" class="pilih" /></td>
                                                        <td width="5%" align="center">C.</td>
                                                        <td width="85%" align="left">4</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_1" id_pilih="58" value="D" class="pilih" /></td>
                                                        <td width="5%" align="center">D.</td>
                                                        <td width="85%" align="left">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="5%" align="center"><input type="radio" name="pilihan_1" id_pilih="58" value="E" class="pilih" /></td>
                                                        <td width="5%" align="center">E.</td>
                                                        <td width="85%" align="left">2</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%" colspan="4">&nbsp;</td>
                                                    </tr>
                                                                                            </tbody>
                                        </table>        
                                    </div>
                                                            </div>

                            <div class="tab-pane fade" id="essai">
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
              
        <footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div>
     
</footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
                  
    </div>
    <!-- ./wrapper -->
        
    <!-- jQuery 2.2.3 -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/demo.js"></script>
    <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.css">
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
    
    <!-- include summernote -->
    <link rel="stylesheet" href="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/summernote.css">
    <script type="text/javascript" src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/summernote.js"></script>
    <script type="text/javascript" src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/dist/summernote-ext-video.js"></script> 
    
    <!-- iCheck -->
    <script src="http://localhost/ujian_online/templates/back-end/AdminLTE-2.3.6/plugins/iCheck/icheck.min.js"></script>
    
    <script type="text/javascript">
            
        var jawab_pilihanganda = [];
        var jawab_essai = [];
        
        $(function () {           
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
            
            var jam   = 2;
            var menit = 51;
            var detik = 51;
            
            
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
            
            
                        
            
            for(var i=0; i<1; i++) { jawab_pilihanganda[i] = ''; }       
            for(var i=0; i<0; i++) { jawab_essai[i] = ''; }       
            
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
                data.append('id_soal_head', '6');
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
                            window.location = 'finish.php?id=6';                    
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
    </script>
</body>

</html>
<?php }} ?>
