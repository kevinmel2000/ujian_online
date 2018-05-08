<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

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
    
    if(strlen($_POST["nama_jurusan"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Jurusan harus diisi.")));
    } else {
        $jurusan = $db->getFieldValue("jurusan", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_jurusan"]));
        if($jurusan[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Jurusan tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["nama_subjurusan"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Sub Jurusan harus diisi.")));
    } else {
        $subjurusan = $db->getFieldValue("subjurusan", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_subjurusan"]));
        if($subjurusan[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Sub Jurusan tidak terdaftar.")));
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
    
    if(strlen($_POST["kode"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kode pelajaran harus diisi.")));
    } else {
        $user_count = $db->getFieldValue("mapel", array("COUNT(*) AS TOTAL"), array("kode" => $_POST["kode"], "id_kelas" => $_POST["id_kelas"]));
        if($user_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode pelajaran sudah terpakai.")));
        }
    }
    
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama pelajaran harus diisi.")));
    }
    
    
    $_POST["id"] = $db->getLastNumber("mapel", "id");
    $_POST["user_create"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_create"]  = date("Y-m-d H:i:s");
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    unset($_POST["id_sekolah"]);
    unset($_POST["nama_sekolah"]);
    unset($_POST["id_jurusan"]);
    unset($_POST["nama_jurusan"]);
    unset($_POST["id_subjurusan"]);
    unset($_POST["nama_subjurusan"]);
    unset($_POST["nama_kelas"]);    
    $db->mysql_insert("mapel", $_POST);
    
    $_SESSION["alert_success"] = "Tambah mata pelajaran berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));