<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //validasi-validasi
    if(strlen($_POST["id_peserta"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "ID peserta harus diisi.")));
    } else {
        $user_count = $db->getFieldValue("m_peserta", array("COUNT(*) AS TOTAL"), array("id_peserta" => $_POST["id_peserta"]));
        if($user_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "ID peserta sudah terpakai.")));
        }
    }
    
    //INSERT PESEERTA
    $_POST["id"] = $db->getLastNumber("m_peserta", "id");
    $db->mysql_insert("m_peserta", $_POST);
    
    $_SESSION["alert_success"] = "Tambah peserta berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));