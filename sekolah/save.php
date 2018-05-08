<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //validasi-validasi
    if(strlen($_POST["kode_sekolah"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kode sekolah harus diisi.")));
    } else {
        $data = $db->getFieldValue("sekolah", array("COUNT(*) AS TOTAL"), array("kode_sekolah" => $_POST["kode_sekolah"]));
        if($data[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode sekolah sudah terpakai.")));
        }
    }
    
    if(strlen($_POST["nama_sekolah"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama sekolah harus diisi.")));
    }
    
    if(strlen($_POST["tanggal_berdiri"])>0 && !$db->dateValidation($_POST["tanggal_berdiri"], "d-m-Y")) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Penulisan tanggal berdiri tidak benar.")));
    }
    if(strlen($_POST["tanggal_berdiri"])>0) {
        $temp = explode("-", $_POST["tanggal_berdiri"]);
        $_POST["tanggal_berdiri"] = $temp[2]."-".$temp[1]."-".$temp[0];
    } else {
        $_POST["tanggal_berdiri"] = "NULL";
    }
    
    $_POST["id"]           = $db->getLastNumber("sekolah", "id");
    $_POST["user_create"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_create"]  = date("Y-m-d H:i:s");
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    $db->mysql_insert("sekolah", $_POST, $_POST["tanggal_berdiri"]=="NULL"?array("tanggal_berdiri"):array());
    
    $_SESSION["alert_success"] = "Tambah data sekolah berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));