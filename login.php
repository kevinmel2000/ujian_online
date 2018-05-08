<?php
    $root = "";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $_message = array();
    
    if(strlen($_POST["username"])==0) {
        $_message[count($_message)] = "Email diperlukan!";
    }
    
    if(strlen($_POST["password"])==0) {
        $_message[count($_message)] = "Password diperlukan!";
    }
    
    if(strlen($_POST["username"])>0 && strlen($_POST["password"])>0) {
        include $root."includes/php/MCrypt.php";
        $mcrypt = new MCrypt();
    
        $data_login = $db->getFieldValue("admin_users AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id LEFT JOIN (SELECT C1.*, C2.nama AS nama_subjurusan, C2.id_jurusan, C3.nama AS nama_jurusan, C3.id_sekolah, C4.nama_sekolah FROM guru AS C1 LEFT JOIN subjurusan AS C2 ON C1.id_subjurusan=C2.id LEFT JOIN jurusan AS C3 ON C2.id_jurusan=C3.id LEFT JOIN sekolah AS C4 ON C3.id_sekolah=C4.id) AS C ON C.id_user_login=A.id LEFT JOIN (SELECT D1.*, D2.nama AS nama_subkelas, D2.id_kelas, D3.nama AS nama_kelas, D3.id_subjurusan, D4.nama AS nama_subjurusan, D4.id_jurusan, D5.nama AS nama_jurusan, D5.id_sekolah, D6.nama_sekolah FROM siswa AS D1 LEFT JOIN subkelas AS D2 ON D1.id_subkelas=D2.id LEFT JOIN kelas AS D3 ON D2.id_kelas=D3.id LEFT JOIN subjurusan AS D4 ON D3.id_subjurusan=D4.id LEFT JOIN jurusan AS D5 ON D4.id_jurusan=D5.id LEFT JOIN sekolah AS D6 ON D5.id_sekolah=D6.id) AS D ON D.id_user_login=A.id ", 
            array(
                "A.id", 
                "IF(A.tipe_user='G', C.nama, IF(A.tipe_user='S', D.nama, A.nama)) AS nama", 
                "A.username", 
                "A.password", 
                "A.tipe_user",
                "IF(A.tipe_user='G', C.id, IF(A.tipe_user='S', D.id, 0)) AS id_tipe_user", 
                "IF(A.tipe_user='G', C.id_sekolah, IF(A.tipe_user='S', D.id_sekolah, A.id_sekolah)) AS id_sekolah", 
                "IF(A.tipe_user='G', C.nama_sekolah, IF(A.tipe_user='S', D.nama_sekolah, B.nama_sekolah)) AS nama_sekolah", 
                "IF(A.tipe_user='G', C.id_jurusan, IF(A.tipe_user='S', D.id_jurusan, 0)) AS id_jurusan", 
                "IF(A.tipe_user='G', C.nama_jurusan, IF(A.tipe_user='S', D.nama_jurusan, '')) AS nama_jurusan", 
                "IF(A.tipe_user='G', C.id_subjurusan, IF(A.tipe_user='S', D.id_subjurusan, 0)) AS id_subjurusan", 
                "IF(A.tipe_user='G', C.nama_subjurusan, IF(A.tipe_user='S', D.nama_subjurusan, '')) AS nama_subjurusan", 
                "IF(A.tipe_user='S', D.id_kelas, 0) AS id_kelas", 
                "IF(A.tipe_user='S', D.nama_kelas, '') AS nama_kelas"
            ), 
            array("A.username" => $_POST["username"], "A.password" => $mcrypt->encrypt($_POST["password"])));
        //die();
        if(count($data_login)==0) {
            $_message[count($_message)] = "Login tidak valid!";            
        } else if($data_login[0]["username"]==$_POST["username"] && $data_login[0]["password"]==$mcrypt->encrypt($_POST["password"])) {
//            $data_login[0]["id_sekolah"] = $data_login[0]["id_sekolah"]==0?'':$data_login[0]["id_sekolah"];
//            $data_login[0]["id_jurusan"] = $data_login[0]["id_jurusan"]==0?'':$data_login[0]["id_jurusan"];
//            $data_login[0]["id_subjurusan"] = $data_login[0]["id_subjurusan"]==0?'':$data_login[0]["id_subjurusan"];
//            $data_login[0]["id_kelas"] = $data_login[0]["id_kelas"]==0?'':$data_login[0]["id_kelas"];
            
            unset($data_login[0]["password"]);
        }
    }
    
    if(count($_message)==0) {
        $_SESSION[ADMIN_SESSION_NAME] = array("is_login" => true, "user" => $data_login[0]);
    } else {
        unset($_SESSION[ADMIN_SESSION_NAME]);
        $_SESSION['loginusers'] = array("error" => $_message, "field" => $_POST);
    }
    $db->mysql_close();
    
    header("location: ".ADMINWEB_URL."/index.php");