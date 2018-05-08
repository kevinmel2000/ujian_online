<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    $id = $_POST["id"];
    //validasi-validasi
    if(strlen($_POST["nama_sekolah"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Sekolah harus diisi.")));
    } else {
        $sekolah = $db->getFieldValue("sekolah", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_sekolah"]));
        if($sekolah[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Nama sekolah tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["nama_tingkat"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Tingkat harus diisi.")));
    } else {
        $tingkat = $db->getFieldValue("tingkat", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_tingkat"]));
        if($tingkat[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Tingkat tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["nama_kelas"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kelas harus diisi.")));
    } else {
        $kelas = $db->getFieldValue("kelas", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_kelas"]));
        if($kelas[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kelas tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["nama_pelajaran"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Pelajaran harus diisi.")));
    } else {
        $data_pelajaran = $db->getFieldValue("mapel", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_pelajaran"]));
        if($data_pelajaran[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Pelajaran tidak valid.")));
        }
        unset($_POST["mapel"]);
    }
    
    if(strlen($_POST["tanggal_ujian"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Tanggal ujian harus diisi.")));
    } else {
        if(!$db->dateValidation($_POST["tanggal_ujian"], "d-m-Y")) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Penulisan tanggal ujian tidak benar.")));
        }
    }
    
    if(strlen($_POST["jam_ujian"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Jam ujian harus diisi.")));
    } else {
        if(!$db->dateValidation($_POST["jam_ujian"], "H:i")) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Penulisan jam ujian tidak benar. Contoh: 10:30")));
        }
    }
    
    if(strlen($_POST["kode_koreksi"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kode koreksi harus diisi.")));
    } else {
        $data_koreksi = $db->getFieldValue("koreksi_head AS A LEFT JOIN mapel AS B ON A.id_pelajaran=B.id", array("COUNT(*) AS TOTAL"), array("B.id_sekolah" => $_POST["id_sekolah"], "B.id_tingkat" => $_POST["id_tingkat"], "B.id_kelas" => $_POST["id_kelas"], "A.kode_koreksi" => $_POST["kode_koreksi"]), array(), 0, 0, "", "A.id<>'$id'");
        if($data_koreksi[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode koreksi sudah ada.")));
        }
    }
    
    if(strlen($_POST["nama_koreksi"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama koreksi harus diisi.")));
    }
    
    $temp = explode("-", $_POST["tanggal_ujian"]);
    $_POST["tanggal_jam"] = $temp[2]."-".$temp[1]."-".$temp[0]." ".$_POST["jam_ujian"].":00";
    
    $data_waktu = $db->getFieldValue("koreksi_head AS A LEFT JOIN mapel AS B ON A.id_pelajaran=B.id", array("COUNT(*) AS TOTAL"), array("B.id_sekolah" => $_POST["id_sekolah"], "B.id_tingkat" => $_POST["id_tingkat"], "B.id_kelas" => $_POST["id_kelas"]), array(), 0, 0, "", " A.tanggal_jam BETWEEN '".$_POST["tanggal_jam"]."' AND DATE_ADD('".$_POST["tanggal_jam"]."', INTERVAL ".$_POST["lama_waktu_pengerjaan"]." MINUTE) AND A.id<>'$id'");
    if($data_waktu[0]["TOTAL"]>0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Waktu pengerjaan koreksi tidak cocok / bentrok dengan ujian lain.")));
    }
    
    $data_waktu = $db->getFieldValue("koreksi_head A LEFT JOIN mapel AS B ON A.id_pelajaran=B.id", array("COUNT(*) AS TOTAL"), array("B.id_sekolah" => $_POST["id_sekolah"], "B.id_tingkat" => $_POST["id_tingkat"], "B.id_kelas" => $_POST["id_kelas"]), array(), 0, 0, "", " A.tanggal_jam<='".$_POST["tanggal_jam"]."' AND DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE)>='".$_POST["tanggal_jam"]."'  AND A.id<>'$id'");
    if($data_waktu[0]["TOTAL"]>0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Waktu pengerjaan koreksi tidak cocok / bentrok dengan ujian lain.")));
    }
    
    unset($_POST["tanggal_ujian"]);
    unset($_POST["jam_ujian"]);
    
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    unset($_POST["id_sekolah"]);
    unset($_POST["nama_sekolah"]);
    unset($_POST["id_tingkat"]);
    unset($_POST["nama_tingkat"]);
    unset($_POST["id_kelas"]);    
    unset($_POST["nama_kelas"]);
    unset($_POST["nama_pelajaran"]);
        
    //UPDATE koreksi
    $db->mysql_update("koreksi_head", $_POST, array("id" => $_POST["id"]));
    
    $_SESSION["alert_success"] = "Edit koreksi berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));