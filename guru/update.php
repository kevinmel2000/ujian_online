<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    $id = $_POST["id"];    
    //validasi-validasi
    if(strlen($_POST["nama_sekolah"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Sekolah harus diisi.")));
    } else {
        $sekolah = $db->getFieldValue("sekolah", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_sekolah"]));
        if($sekolah[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Nama sekolah tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["nama_jurusan"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Jurusan harus diisi.")));
    } else {
        $jurusan = $db->getFieldValue("jurusan", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_jurusan"]));
        if($jurusan[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Jurusan tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["nama_subjurusan"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Sub Jurusan harus diisi.")));
    } else {
        $subjurusan = $db->getFieldValue("subjurusan", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_subjurusan"]));
        if($subjurusan[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Sub Jurusan tidak terdaftar.")));
        }
    }
    if(strlen($_POST["nik"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "NIK harus diisi.")));
    } else {
        $user_count = $db->getFieldValue("guru", array("COUNT(*) AS TOTAL"), array("nik" => $_POST["nik"], "id_subjurusan" => $_POST["id_subjurusan"]), array(), 0, 0, "", "id<>'$id'");
        if($user_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "NIK sudah terpakai.")));
        }
    }
    
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama guru harus diisi.")));
    }
    
    $data_guru = $db->getFieldValue("guru", array("*"), array("id" => $id));
    
    if(strlen($_POST["username"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Username harus diisi.")));
    } else {
        $user_count = $db->getFieldValue("admin_users", array("COUNT(*) AS TOTAL"), array("username" => $_POST["username"]), array(), 0, 0, "", "id<>'".$data_guru[0]["id_user_login"]."'");
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
    
    //UPDATE PENGGUNA
    $db->mysql_update(
        "admin_users", 
        array(
            "username" => $_POST["username"],
            "nama" => $_POST["nama"],
            "password" => $_password,
            "id_sekolah" => $_POST["id_sekolah"],
            "tipe_user" => "G"
        ), 
        array("id" => $data_guru[0]["id_user_login"])
    );
    
    $db->mysql_delete("user_menu_akses", array("id_user" => $data_guru[0]["id_user_login"]));
    $sql = "INSERT INTO user_menu_akses(id_user, id_menu, akses) SELECT '".$data_guru[0]["id_user_login"]."', id_menu, akses FROM grup_menu_akses WHERE id_grup='G'";
    $db->mysql_execute($sql);
    unset($_POST["username"]);    
    unset($_POST["password"]);
    
    //UPDATE GURU
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    unset($_POST["id_sekolah"]);    
    unset($_POST["nama_sekolah"]);    
    unset($_POST["id_jurusan"]);
    unset($_POST["nama_jurusan"]);
    unset($_POST["nama_subjurusan"]);
    $db->mysql_update("guru", $_POST, array("id" => $id));
    $db->mysql_close();
    
    $_SESSION["alert_success"] = "Edit guru berhasil.";
    die(json_encode(array("success" => true)));