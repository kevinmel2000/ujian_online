<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //validasi-validasi
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama harus diisi.")));
    }
    
    if(strlen($_POST["password"])>0) {
         
        if(strlen($_POST["password"])<6) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Password baru minimal 6 digit.")));
        }

        if($_POST["password"]!=$_POST["konfirmasi_password"]) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Konfirmasi password tidak cocok.")));
        }
    }
    
    
    $data = $db->getFieldValue(
        "admin_users", 
        array("*"), 
        array(
            "id" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]
        )
    );
    
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();
    $new_password = strlen($_POST["password"])>0?$mcrypt->encrypt($_POST["password"]):$data[0]["password"];
    $db->mysql_update("admin_users", array("password" => $new_password, "nama" => $_POST["nama"]), array("id" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]));
    $db->mysql_close();
    
    $_SESSION[ADMIN_SESSION_NAME]["user"]["nama"] = $_POST["nama"];    
    $_SESSION["alert_success"] = "Proses edit profile berhasil.";
    die(json_encode(array("success" => true, "message" => "Proses edit profile berhasil."))); 