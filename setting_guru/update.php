<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    $id = $_POST["id_guru"];    
    //validasi-validasi
    $data_guru = $db->getFieldValue("guru", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_guru"]));
    if($data_guru[0]["TOTAL"]==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Guru tidak valid.")));
    }
    
    if(strlen($_POST["detail"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Detail pelajaran yang diuji harus diisi.")));
    }
    
    $sql_insert = "INSERT INTO guru_to_pelajaran(id_guru, id_pelajaran) VALUES";
    $row = explode("\n", $_POST["detail"]);
    foreach($row as $i => $value) {
        $data_mapel = $db->getFieldValue("mapel", array("*"), array("id" => $value));
        if(count($data_mapel)==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Pelajaran ".$data_mapel["nama"]." tidak valid.")));
        }
        $sql_insert.="("
            . "'".$_POST["id_guru"]."',"   // id_guru
            . "'".$value."'),";            // id_pelajaran
    }
    $db->mysql_delete("guru_to_pelajaran", array("id_guru" => $_POST["id_guru"]));
    $db->mysql_execute(rtrim($sql_insert, ","));
    $db->mysql_close();
    
    $_SESSION["alert_success"] = "Proses setting guru berhasil.";
    die(json_encode(array("success" => true)));