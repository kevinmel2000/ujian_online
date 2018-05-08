<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    $id_jawaban_soal_head = $_POST["id_jawaban_soal_head"];
    $data_soal = $db->getFieldValue("jawaban_soal_head AS A LEFT JOIN soal_head AS B ON A.id_soal_head=B.id", array("B.*"), array("A.id" => $id_jawaban_soal_head));
    
    //INSERT PILIHAN GANDA
    $nilai_benar = 0;
    $nilai_salah = 0;
    if(strlen($_POST["koreksi_pilihanganda"])) {
        $rows = explode("\n", $_POST["koreksi_pilihanganda"]);
        for ($row = 0; $row < count($rows); $row++) {
            $cols = explode("\t", $rows[$row]);
            $db->mysql_update("jawaban_soal_detail", array("koreksi" => $cols[1]), array("id" => $cols[0]));
            $nilai_benar=$nilai_benar+($cols[1]==2?1:0);
            $nilai_salah=$nilai_salah+($cols[1]==1?1:0);
        }
    }
    
    //INSERT ESSAI
    if(strlen($_POST["koreksi_essai"])) {
        $rows = explode("\n", $_POST["koreksi_essai"]);
        for ($row = 0; $row < count($rows); $row++) {
            $cols = explode("\t", $rows[$row]);
            $db->mysql_update("jawaban_soal_detail", array("koreksi" => $cols[1]), array("id" => $cols[0]));
            $nilai_benar=$nilai_benar+($cols[1]==2?1:0);
            $nilai_salah=$nilai_salah+($cols[1]==1?1:0);
        }
    }
    
    //$total_score = "SELECT " . str_replace("{salah}", $nilai_salah, str_replace("{benar}", $nilai_benar, strtolower($data_soal[0]["perhitungan_score"])));
    //die(json_encode(array("success" => false, "message" => $total_score)));
    
            
    //UPDATE KOREKSI HEADER
    $db->mysql_update(
        "jawaban_soal_head", 
        array(
            "total_benar" => $nilai_benar,
            "total_salah" => $nilai_salah,
            "user_koreksi" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"],
            "date_koreksi" => date("Y-m-d H:i:s")
        ), 
        array("id" => $id_jawaban_soal_head),
        array("total_score")
    );
    
    $_SESSION["alert_success"] = "Edit koreksi berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));