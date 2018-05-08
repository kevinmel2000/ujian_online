<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //validasi-validasi
    if(strlen($_POST["mapel"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Mata pelajaran harus diisi.")));
    } else {
        $data_mapel = $db->getFieldValue("m_mapel", array("*"), array("id" => $_POST["id_mapel"]));
        if(count($data_mapel)==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Mata pelajaran tidak valid.")));
        }
        unset($_POST["mapel"]);
    }
    
    if(strlen($_POST["kode_soal"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kode soal harus diisi.")));
    } else {
        $grupsoal_count = $db->getFieldValue("m_soal_header", array("COUNT(*) AS TOTAL"), array("kode_soal" => $_POST["kode_soal"]));
        if($grupsoal_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode soal sudah terpakai.")));
        }
    }
    
    $db->mysql_insert("m_soal_header", $_POST);
    
    $_SESSION["alert_success"] = "Tambah grup soal berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));