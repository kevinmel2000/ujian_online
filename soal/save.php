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
                $upload_directory=realpath($root) . "/uploads/soal/";            
                $file_name = $db->create_kode_unik().'.'.$ext;
                file_put_contents($upload_directory.$file_name, $data);
                $html_text = str_replace($src, HOME_URL."/uploads/soal/".$file_name, $html_text);
                $img_src.=$file_name.",";
            }
        }

        return array(
            "text" => $html_text, 
            "img_src" => rtrim($img_src, ",")
        );
    }
    
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
        die(json_encode(array("success" => false, "message" => "Sub jurusan harus diisi.")));
    } else {
        $subjurusan = $db->getFieldValue("subjurusan", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_subjurusan"]));
        if($subjurusan[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Sub jurusan tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["nama_kelas"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kelas harus diisi.")));
    } else {
        $kelas = $db->getFieldValue("kelas", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_kelas"]));
        if($kelas[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kelas tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["nama_pelajaran"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Pelajaran harus diisi.")));
    } else {
        $data_pelajaran = $db->getFieldValue("mapel", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_pelajaran"]));
        if($data_pelajaran[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Pelajaran tidak valid.")));
        }
        unset($_POST["mapel"]);
    }
    
    if(strlen($_POST["tanggal_ujian"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Tanggal ujian harus diisi.")));
    } else {
        if(!$db->dateValidation($_POST["tanggal_ujian"], "d-m-Y")) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Penulisan tanggal ujian tidak benar.")));
        }
    }
    
    if(strlen($_POST["jam_ujian"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Jam ujian harus diisi.")));
    } else {
        if(!$db->dateValidation($_POST["jam_ujian"], "H:i")) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Penulisan jam ujian tidak benar. Contoh: 10:30")));
        }
    }
    
    if(strlen($_POST["kode_soal"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kode soal harus diisi.")));
    } else {
        $data_soal = $db->getFieldValue("soal_head AS A LEFT JOIN mapel AS B ON A.id_pelajaran=B.id", array("COUNT(*) AS TOTAL"), array("A.id_kelas" => $_POST["id_kelas"], "A.id_pelajaran" => $_POST["id_pelajaran"], "A.kode_soal" => $_POST["kode_soal"]));
        if($data_soal[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode soal sudah ada.")));
        }
    }
    
    if(strlen($_POST["nama_soal"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama soal harus diisi.")));
    }
    
    if($_POST["lama_waktu_pengerjaan"]<=0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Lama waktu pengerjaan soal harus diisi.")));
    }
    
    $temp = explode("-", $_POST["tanggal_ujian"]);
    $_POST["tanggal_jam"] = $temp[2]."-".$temp[1]."-".$temp[0]." ".$_POST["jam_ujian"].":00";
    
    $data_waktu = $db->getFieldValue("soal_head AS A LEFT JOIN mapel AS B ON A.id_pelajaran=B.id", array("COUNT(*) AS TOTAL"), array("B.id_kelas" => $_POST["id_kelas"]), array(), 0, 0, "", " A.tanggal_jam BETWEEN '".$_POST["tanggal_jam"]."' AND DATE_ADD('".$_POST["tanggal_jam"]."', INTERVAL ".$_POST["lama_waktu_pengerjaan"]." MINUTE)");
    if($data_waktu[0]["TOTAL"]>0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Waktu pengerjaan soal tidak cocok / bentrok dengan ujian lain.")));
    }
    
    $data_waktu = $db->getFieldValue("soal_head A LEFT JOIN mapel AS B ON A.id_pelajaran=B.id", array("COUNT(*) AS TOTAL"), array("B.id_kelas" => $_POST["id_kelas"]), array(), 0, 0, "", " A.tanggal_jam<='".$_POST["tanggal_jam"]."' AND DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE)>='".$_POST["tanggal_jam"]."'");
    if($data_waktu[0]["TOTAL"]>0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Waktu pengerjaan soal tidak cocok / bentrok dengan ujian lain.")));
    }
    
    unset($_POST["tanggal_ujian"]);
    unset($_POST["jam_ujian"]);
    $temps = save_image($_POST["keterangan"]);
    $_POST["keterangan"] = $temps["text"];
    $_POST["keterangan_img_src"] = $temps["img_src"];
    
    $_POST["id"] = $db->getLastNumber("soal_head", "id");
    $_POST["user_create"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_create"]  = date("Y-m-d H:i:s");
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    unset($_POST["id_sekolah"]);
    unset($_POST["nama_sekolah"]);
    unset($_POST["id_jurusan"]);
    unset($_POST["nama_jurusan"]);
    unset($_POST["id_subjurusan"]);    
    unset($_POST["nama_subjurusan"]);    
    unset($_POST["nama_kelas"]);
    unset($_POST["nama_pelajaran"]);
    $db->mysql_insert("soal_head", $_POST);
    
    $_SESSION["alert_success"] = "Tambah grup soal berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));