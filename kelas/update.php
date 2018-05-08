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
    if(strlen($_POST["kode"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kode kelas harus diisi.")));
    } else {
        $data = $db->getFieldValue("kelas", array("COUNT(*) AS TOTAL"), array("kode" => $_POST["kode"]), array(), 0, 0, "", "id<>'$id'");
        if($data[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode kelas sudah terpakai.")));
        }
    }
    
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama kelas harus diisi.")));
    }
    
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    
    unset($_POST["id_sekolah"]);
    unset($_POST["nama_sekolah"]);
    unset($_POST["id_jurusan"]);
    unset($_POST["nama_jurusan"]);
    unset($_POST["nama_subjurusan"]);
    
    $db->mysql_update("kelas", $_POST, array("id" => $id));
    $_SESSION["alert_success"] = "Edit data kelas berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));