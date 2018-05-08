<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();
    
    $id = explode(",", $_POST["id"]);    
    $db->mysql_delete("admin_users", array("id" => $id));
    $db->mysql_delete("user_menu_akses", array("id_user" => $id));
    $db->mysql_close();
        
    $_SESSION["alert_success"] = "Hapus data admin user berhasil.";
    die(json_encode(array("success" => true, "message" => "Hapus data admin user berhasil.")));