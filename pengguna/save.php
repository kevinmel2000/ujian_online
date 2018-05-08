<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //validasi-validasi
    if(strlen($_POST["nama_sekolah"])>0) {
        $data_sekolah = $db->getFieldValue("sekolah", array("*"), array("id" => $_POST["id_sekolah"]));
        if(count($data_sekolah)==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Sekolah tidak valid.")));
        }
        unset($_POST["nama_sekolah"]);
    }
    
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama admin harus diisi.")));
    }
    
    if(strlen($_POST["username"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Username harus diisi.")));
    } else {
        $user_count = $db->getFieldValue("admin_users", array("COUNT(*) AS TOTAL"), array("username" => $_POST["username"]));
        if($user_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Username sudah terpakai.")));
        }
    }
    
    if(strlen($_POST["password"])<6) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Password minimal 6 karakter atau lebih.")));
    }
    
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();
    $_password = $mcrypt->encrypt($_POST["password"]);
    
    //INSERT PENGGUNA
    $id = $db->getLastNumber("admin_users", "id");
    $db->mysql_insert(
        "admin_users", 
        array(
            "id" => $id,
            "username" => $_POST["username"],
            "nama" => $_POST["nama"],
            "password" => $_password,
            "id_sekolah" => $_POST["id_sekolah"],
            "tipe_user" => $_POST["tipe_user"]
        )
    );
    
    $sql = "INSERT INTO user_menu_akses(id_user, id_menu, akses) SELECT '$id', id_menu, akses FROM grup_menu_akses WHERE id_grup='".(strlen($_POST["id_sekolah"])==0?"A1":"A2")."'";
    $db->mysql_execute($sql);
    
    $_SESSION["alert_success"] = "Tambah pengguna admin berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));