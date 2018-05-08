<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    $id = $_POST["id"];    
    //validasi-validasi
    if(strlen($_POST["id_grupsoal"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "ID grupsoal harus diisi.")));
    } else {
        $grupsoal_count = $db->getFieldValue("m_soal_header", array("COUNT(*) AS TOTAL"), array("id_grupsoal" => $_POST["id_grupsoal"], "id_mapel" => $_POST["id_mapel"]), array(), 0, 0, "", "id<>'$id'");
        if($grupsoal_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "ID grupsoal sudah terpakai.")));
        }
    }
    
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
    
    //UPDATE grupsoal
    $db->mysql_update("m_soal_header", $_POST, array("id" => $_POST["id"]));
    
    $_SESSION["alert_success"] = "Edit grupsoal berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));