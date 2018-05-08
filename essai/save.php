<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    function save_image($html_text, $folder) {
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
                $upload_directory=realpath($root) . "/uploads/essai/".$folder."/";            
                $file_name = $db->create_kode_unik().'.'.$ext;
                file_put_contents($upload_directory.$file_name, $data);
                $html_text = str_replace($src, HOME_URL."/uploads/essai/".$folder."/".$file_name, $html_text);
                $img_src.=$file_name.",";
            }
        }

        return array(
            "text" => $html_text, 
            "img_src" => rtrim($img_src, ",")
        );
    }
        
    //validasi-validasi
    if(strlen($_POST["pertanyaan"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Pertanyaan harus diisi.")));
    }
    
    if(strlen($_POST["jawaban_essai"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kunci jawaban harus diisi.")));
    }
    
    $temps = save_image($_POST["pertanyaan"], "pertanyaan");
    $_POST["pertanyaan"] = $temps["text"];
    $_POST["pertanyaan_img_src"] = $temps["img_src"];    
    
    $temps = save_image($_POST["jawaban_essai"], "jawaban_essai");
    $_POST["jawaban_essai"] = $temps["text"];
    $_POST["jawaban_essai_img_src"] = $temps["img_src"];
    
    $_POST["id"] = $db->getLastNumber("soal_detail", "id");
    $_POST["tipe_soal"] = 2;
    $_POST["no"] = $db->getLastNumber("soal_detail", "no", 0, "", "", array("tipe_soal" => $_POST["tipe_soal"], "id_head" => $_POST["id_head"]));
    
     
    $_POST["user_create"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_create"]  = date("Y-m-d H:i:s");
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    $db->mysql_insert("soal_detail", $_POST);
    
    $_SESSION["alert_success"] = "Tambah soal essai berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));