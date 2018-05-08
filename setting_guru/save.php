<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    
    $_POST["id"] = $db->getLastNumber("guru", "id");
    $_POST["user_create"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_create"]  = date("Y-m-d H:i:s");
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    unset($_POST["nama_sekolah"]);    
    $db->mysql_insert("guru", $_POST);
    
    $_SESSION["alert_success"] = "Tambah guru berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));