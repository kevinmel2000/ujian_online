<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    function save_image($html_text) {
        global $db, $root;
        
        //COPY FILES
        $doc = new DOMDocument();
        $doc->loadHTML($html_text);
        $tags = $doc->getElementsByTagName('img');
        $img_src = "";
        foreach ($tags as $tag) {
            $src = $tag->getAttribute('src');
            if(substr($src, 0, 10)=="data:image") {
                $ext = substr($src, 11, strpos($src, ";")-strpos($src, "/")-1);
                $img = str_replace(substr($src, 0, strpos($src, ",")), '', $src);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $upload_directory=realpath($root) . "/uploads/jawaban_ujian/";            
                $file_name = $db->create_kode_unik(11).'.'.$ext;
                file_put_contents($upload_directory.$file_name, $data);
                $html_text = str_replace($src, HOME_URL."/uploads/jawaban_ujian/".$file_name, $html_text);
                $img_src.=$file_name.",";
            }
        }

        return array(
            "text" => $html_text, 
            "img_src" => rtrim($img_src, ",")
        );
    }
    
    $tipe_user     = $_SESSION[ADMIN_SESSION_NAME]["user"]["tipe_user"];
    $id_tipe_user  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_tipe_user"];
   
    //INSERT HEADEER
    $id = $db->getLastNumber("jawaban_soal_head", "id");
    $db->mysql_insert("jawaban_soal_head", array(
        "id" => $id,
        "id_siswa" => $id_tipe_user,
        "id_soal_head" => $_POST["id_soal_head"],
        "total_score" => 0,
        "user_create" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"],
        "date_create" => date("Y-m-d H:i:s")
    ));
    
    //INSERT PILIHAN GANDA
    if(strlen($_POST["jawaban_pilihanganda"])) {
        $sql = "INSERT INTO jawaban_soal_detail(id_head, id_soal_detail, jawaban, jawaban_img_src) VALUES";
        $rows = explode("\n", $_POST["jawaban_pilihanganda"]);
        for ($row = 0; $row < count($rows); $row++) {
            $cols = explode("\t", $rows[$row]);
            $sql .= "("
               . "'" . $id . "',"       //id_head
               . "'" . $cols[0] . "',"  //id_soal_detail
               . "'" . $cols[1] . "',"  //jawaban
               . "''),";                //jawaban_img_src
        }
        $db->mysql_execute(rtrim($sql, ","));
    }
    
    //INSERT ESSAI
    if(strlen($_POST["jawaban_essai"])) {
        $sql = "INSERT INTO jawaban_soal_detail(id_head, id_soal_detail, jawaban, jawaban_img_src) VALUES";
        $rows = explode("\n", $_POST["jawaban_essai"]);
        for ($row = 0; $row < count($rows); $row++) {
            $cols = explode("\t", $rows[$row]);
            $temps = save_image($cols[1]);
            $cols[1] = $temps["text"];
            $cols[2] = $temps["img_src"];
            $sql .= "("
               . "'" . $id . "',"           //id_head
               . "'" . $cols[0] . "',"      //id_soal_detail
               . "'" . $cols[1] . "',"      //jawaban
               . "'" . $cols[2] . "'),";    //jawaban_img_src
        }
        $db->mysql_execute(rtrim($sql, ","));
    }
    
    $db->mysql_close();
    die(json_encode(array("success" => true)));