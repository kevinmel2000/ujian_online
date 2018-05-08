<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();
    
    $id = explode(",", $_POST["id"]);    
    $db->mysql_delete("m_peserta", array("id" => $id));
    $db->mysql_close();
        
    $_SESSION["alert_success"] = "Hapus data peserta berhasil.";
    die(json_encode(array("success" => true, "message" => "Hapus data peserta berhasil.")));