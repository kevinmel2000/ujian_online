<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    $id = $_POST["id"];    
    //validasi-validasi
    if(strlen($_POST["id_peserta"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "ID peserta harus diisi.")));
    } else {
        $user_count = $db->getFieldValue("m_peserta", array("COUNT(*) AS TOTAL"), array("id_peserta" => $_POST["id_peserta"]), array(), 0, 0, "", "id<>'$id'");
        if($user_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "ID peserta sudah terpakai.")));
        }
    }
    
    //UPDATE PESEERTA
    $db->mysql_update("m_peserta", $_POST, array("id" => $id));
    $db->mysql_close();
    
    $_SESSION["alert_success"] = "Edit peserta berhasil.";
    die(json_encode(array("success" => true)));