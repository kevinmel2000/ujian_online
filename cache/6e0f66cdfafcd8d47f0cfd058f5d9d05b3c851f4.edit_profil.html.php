<?php /*%%SmartyHeaderCode:10192579a9ed0e2bae2-83330091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e0f66cdfafcd8d47f0cfd058f5d9d05b3c851f4' => 
    array (
      0 => '..\\templates\\front-end\\accecories\\member\\edit_profil.html',
      1 => 1469752399,
      2 => 'file',
    ),
    '58a5b28cc3d8e04dfebe2eea1998e05194edf0eb' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\head.html',
      1 => 1469594534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10192579a9ed0e2bae2-83330091',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579bf6aa1607b6_44144782',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579bf6aa1607b6_44144782')) {function content_579bf6aa1607b6_44144782($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
    <head>
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
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/bootstrap.min.css" rel="stylesheet">
		
                                
                                
                <!-- Animate CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/animate.css" rel="stylesheet">
		<!-- Owl Carousel CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/owl.carousel.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/style.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/style-green.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/local.css" rel="stylesheet">
		<!-- Responsive CSS -->
		<link href="http://192.168.1.102/gomocart/templates/front-end/accecories/css/responsive.css" rel="stylesheet">
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.http://192.168.1.102/gomocart/templates/front-end/accecories/js/1.4.2/respond.min.js"></script>
		<![endif]-->
                
                
    <script type="text/javascript">
        var home_url = 'http://192.168.1.102/gomocart';
    </script>
  </head>
    <body> 
                
        <div class="main">
            <div class="container">                
                <div class="row">
                    <div id="alert_error" class="col-sm-12" style="display: none;">
                        <div class="alert alert-danger"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                    
                    <div id="alert_success" class="col-sm-12" style="display: none;">
                        <div class="alert alert-info"><span style="font-size: 16px;">&nbsp;</span></div>                            
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Profil Utama</h4>
                        <div class="line2 mtb20"></div>

                        <div class="form-group">
                            <label class="control-label">Nama Depan<em>*</em></label>
                            <input type="text" name="first_name" value="Rifki" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nama Belakang <em>*</em></label>
                            <input type="text" name="last_name" value="Heruprasetyo" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">No. HP <em>*</em></label>
                            <input type="text" name="no_hp" value="081373011823" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email <em>*</em></label>
                            <input type="text" name="email" value="kiezie08@gmail.com" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Photo Profil <em>*</em></label>
                            <style type="text/css">
                                #photo-editor .cropit-image-preview {
                                    background-color: #a6bac4;
                                    height: 120px;
                                    width: 120px;
                                    cursor: move;
                                }
                            </style>

                            <div id="photo-editor">
                                <div style=" float: right; margin-top: 5px; margin-left: 5px; position: absolute;"><input id="fileupload_photo" type="file" name="fileupload_photo" style="display:none;" class="cropit-image-input" /><a id="upload_photo"><img src="http://192.168.1.102/gomocart/templates/front-end/accecories/images/camera-icon.png" width="24px" height="20px" /></a></div>    
                                <div class="cropit-image-preview"></div>
                            </div>
                        </div>
                        <div class="form-group">&nbsp;</div>
                    </div>

                    <div class="col-sm-6">
                        <h4>Alamat Lengkap</h4>
                        <div class="line2 mtb20"></div>

                        <div class="form-group">
                            <label class="control-label">Alamat <em>*</em></label>
                            <textarea name="alamat" class="form-control">Komplek TNI AD Jln. Kenari VI Blok K 4 No. 5</textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Propinsi <em>*</em></label>
                            <select id="profil_prop" name="propinsi" class="form-control">
                                <option value="0">-- Pilih Propinsi --</option>
                                                                <option value="1" >Bali</option>
                                                                <option value="2" >Bangka Belitung</option>
                                                                <option value="3" >Banten</option>
                                                                <option value="4" >Bengkulu</option>
                                                                <option value="5" >DI Yogyakarta</option>
                                                                <option value="6" >DKI Jakarta</option>
                                                                <option value="7" >Gorontalo</option>
                                                                <option value="8" >Jambi</option>
                                                                <option value="9"  selected="selected" >Jawa Barat</option>
                                                                <option value="10" >Jawa Tengah</option>
                                                                <option value="11" >Jawa Timur</option>
                                                                <option value="12" >Kalimantan Barat</option>
                                                                <option value="13" >Kalimantan Selatan</option>
                                                                <option value="14" >Kalimantan Tengah</option>
                                                                <option value="15" >Kalimantan Timur</option>
                                                                <option value="16" >Kalimantan Utara</option>
                                                                <option value="17" >Kepulauan Riau</option>
                                                                <option value="18" >Lampung</option>
                                                                <option value="19" >Maluku</option>
                                                                <option value="20" >Maluku Utara</option>
                                                                <option value="21" >Nanggroe Aceh Darussalam (NAD)</option>
                                                                <option value="22" >Nusa Tenggara Barat (NTB)</option>
                                                                <option value="23" >Nusa Tenggara Timur (NTT)</option>
                                                                <option value="24" >Papua</option>
                                                                <option value="25" >Papua Barat</option>
                                                                <option value="26" >Riau</option>
                                                                <option value="27" >Sulawesi Barat</option>
                                                                <option value="28" >Sulawesi Selatan</option>
                                                                <option value="29" >Sulawesi Tengah</option>
                                                                <option value="30" >Sulawesi Tenggara</option>
                                                                <option value="31" >Sulawesi Utara</option>
                                                                <option value="32" >Sumatera Barat</option>
                                                                <option value="33" >Sumatera Selatan</option>
                                                                <option value="34" >Sumatera Utara</option>
                                                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kota <em>*</em></label>
                            <select id="profil_kota" name="kota" class="form-control">
                                <option value="0">-- Pilih Kota --</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kecamatan <em>*</em></label>
                            <select id="profil_kecamatan" name="kecamatan"  class="form-control">
                                <option value="0">-- Pilih Kecamatan --</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kode Pos <em>*</em></label>
                            <input type="text" name="kode_pos" value="30123" class="form-control" />
                        </div>

                        <div class="form-group text-right">
                            <p align="center"><img id="i_loading" style="display: none;" src="http://192.168.1.102/gomocart/templates/front-end/accecories/images/loading_1.gif" /></p>
                            <p><button id="btn_simpan" type="button" class="form-control btn btn-default btn-md fwb">UPDATE PROFIL</button></p>
                        </div>
                    </div>
                </div>                
            </div>
        </div><!-- /.main -->
        
                
        <!-- Jquery Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/owl.carousel.min.js"></script>
        <!-- Countdown Js -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/custom.js"></script>
        <!-- Crop It -->
        <script src="http://192.168.1.102/gomocart/templates/front-end/accecories/js/jquery.cropit.js"></script>
        
        <script type="text/javascript">
            $(function () {
                function clickSound() {
                    try {
                        window.cpjs.clickSound();                        
                    } catch(err) {
                        console.log(err.message);
                    }
                }
                
                $('#photo-editor').cropit({
                    smallImage: 'stretch',
                    imageState: {
                        src: 'http://192.168.1.102/gomocart/uploads/member/24983761.png'
                    }
                });
                
                $('#upload_photo').click(function(){
                    $('#fileupload_photo').trigger('click'); 
                    return false;
                });
        
                function setMessage(tipe, message) {
                    $('#alert_'+tipe+' .alert span').html(message);
                    $('#alert_'+tipe).show('slow');
                    setTimeout(function() {
                        $('#alert_'+tipe).hide('slow');
                    }, 5000);
                    $("body, html").animate({ 
                        scrollTop: $('.container').offset().top 
                    }, 600);
                }
                
                function setLoading(isLoading) {
                    if(isLoading) {
                        $('#i_loading').show();
                        $('#btn_simpan').hide();
                    } else {
                        $('#i_loading').hide();
                        $('#btn_simpan').show();
                    }
                }
                
                $('#btn_simpan').on('click', function (e) {                    
                    clickSound();
                    
                    setLoading(true);
                    var id             = '1';
                    var first_name     = $('[name=first_name]').val();
                    var last_name      = $('[name=last_name]').val();
                    var email          = $('[name=email]').val();
                    var no_hp          = $('[name=no_hp]').val();
                    var alamat         = $('[name=alamat]').val();
                    var id_propinsi    = $('[name=propinsi]').val();
                    var nama_propinsi  = $("#profil_prop option[value='"+id_propinsi+"']").text();
                    var id_kota        = $('[name=kota]').val();
                    var nama_kota      = $("#profil_kota option[value='"+id_kota+"']").text();
                    var id_kecamatan   = $('[name=kecamatan]').val();
                    var nama_kecamatan = $("#profil_kecamatan option[value='"+id_kecamatan+"']").text();
                    var kode_pos       = $('[name=kode_pos]').val();
                    var photoData      = $('#photo-editor').cropit('export');
                    
                    var data = new FormData();
                    data.append('id', id);
                    data.append('firstname', first_name);
                    data.append('lastname', last_name);
                    data.append('email', email);
                    data.append('no_hp', no_hp);
                    data.append('alamat', alamat);
                    data.append('propinsi', id_propinsi);
                    data.append('nama_propinsi', nama_propinsi);
                    data.append('kota', id_kota);
                    data.append('nama_kota', nama_kota);
                    data.append('kecamatan', id_kecamatan);
                    data.append('nama_kecamatan', nama_kecamatan);                                
                    data.append('kode_pos', kode_pos);
                    data.append('filename_photo', photoData);                
                    
                    setLoading(true);
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.102/gomocart/member/updateProfil.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {
                            setLoading(false);
                            var message = data['message'];
                            var msg = '';
                            for(var key in message) {
                                msg+=message[key]+'<br />';
                            }
                            
                                                            try {
                                    window.cpjs.sendToAndroid('true|'+msg);
                                } catch(err) {
                                    console.log(err.message);
                                }
                                                            
                        }, 
                            
                        error: function() {
                            setLoading(false);
                                                            try {
                                    window.cpjs.sendToAndroid('false|Kesalahan server. Mohon diulang kembali!');
                                } catch(err) {
                                    console.log(err.message);
                                }
                                                    }
                    });                     
                });
                
                $('#profil_prop').on('change', function (e) {
                    loadKota(this.value, 0);
                    loadKecamatan(0, 0);
                    loadLayanan($('#profil_kurir').val(), 0, 0);
                });

                $('#profil_kota').on('change', function (e) {
                    loadKecamatan(this.value, 0);
                    loadLayanan($('#profil_kurir').val(), 0, 0);
                });
                
                $('#profil_kecamatan').on('change', function (e) {
                    loadLayanan($('#profil_kurir').val(), this.value, 0);
                });
                
                function loadKota(propinsi, kota) {
                    $("#profil_kota").empty();
                    $('<option value="0">-- Pilih Kota --</option>').appendTo('#profil_kota');
                    
                    $.ajax({
                        type: 'POST',
                        url: 'http://192.168.1.102/gomocart/store/getKota.php',
                        data: { 'propinsi': propinsi },
                        dataType: 'json',
                        success: function(data) {
                            var store = data['topics'];
                            var data = '<option value="0">-- Pilih Kota --</option>';
                            for(var key in store) {
                                data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';
                            }
                            $("#profil_kota").empty();
                            $(data).appendTo('#profil_kota');
                        }
                    });    
                }
                                
                function loadKecamatan(kota, kecamatan) {
                    $("#profil_kecamatan").empty();
                    $('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#profil_kecamatan');
                    
                    if(kota>0) {
                        $.ajax({
                            type: 'POST',
                            url: 'http://192.168.1.102/gomocart/store/getKecamatan.php',
                            data: { 'kota': kota },
                            dataType: 'json',
                            success: function(data) {
                                var store = data['topics'];
                                var data = '<option value="0">-- Pilih Kecamatan --</option>';
                                for(var key in store) {
                                    data+='<option value="'+store[key]['subdistrict_id']+'"'+(store[key]['subdistrict_id']==kecamatan?' selected="selected"':'')+'>'+store[key]['subdistrict_name']+'</option>';
                                }
                                $("#profil_kecamatan").empty();
                                $(data).appendTo('#profil_kecamatan');
                            }
                        });
                    }    
                }
                
                loadKota('9', '115');                loadKecamatan('115', '1587');            });
        </script>
        
  </body>
</html>
<?php }} ?>
