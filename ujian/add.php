<?php
     $root = "../";
    include $root."includes/php/initial.php";    
    if(!isset($_SESSION[ADMIN_SESSION_NAME])) {
        header("location: ".ADMINWEB_URL);
        die();
    }
    include $root."includes/php/classUtama.php";
    include SMARTY_DIR."Smarty.class.php";
        
    $smarty = new Smarty;        
    //$smarty->force_compile = true;
    //$smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;
    
    $smarty->assign("homeurl", HOME_URL); 
    $smarty->assign("adminweburl", ADMINWEB_URL); 
    $smarty->assign("data_user", $_SESSION[ADMIN_SESSION_NAME]["user"]);
    $smarty->assign("tpl_dir", HOME_URL."/templates/".BACK_END_TEMPLATE);
    $smarty->assign("include_tpl", BACK_END_TEMPLATE_INCLUDE_PATH);
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();
    
    $tipe_user     = $_SESSION[ADMIN_SESSION_NAME]["user"]["tipe_user"];
    $id_tipe_user  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_tipe_user"];
    $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
    $id_jurusan    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
    $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
    $id_kelas      = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"];
    
    if($tipe_user!="S") {
        header("location: ".ADMINWEB_URL);
        die();
    }
    
    $dataujian = $db->getFieldValue(
        "soal_head AS A LEFT JOIN mapel AS B ON A.id_pelajaran=B.id LEFT JOIN kelas AS C ON B.id_kelas=C.id LEFT JOIN subjurusan AS D ON C.id_subjurusan=D.id LEFT JOIN jurusan AS E ON D.id_jurusan=E.id LEFT JOIN sekolah AS F ON E.id_sekolah=F.id", 
        array("A.*", 
            "DATE_FORMAT(A.tanggal_jam, '%d-%m-%Y') AS tanggal_ujian",
            "DATE_FORMAT(A.tanggal_jam, '%H:%i') AS jam_ujian",            
            "FLOOR(HOUR(TIMEDIFF(NOW(), DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE))) / 24) AS hari",
            "MOD(HOUR(TIMEDIFF(NOW(), DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE))), 24) AS jam",
            "MINUTE(TIMEDIFF(NOW(), DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE))) AS menit",
            "SECOND(TIMEDIFF(NOW(), DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE))) AS detik",
            "B.nama AS nama_pelajaran", 
            "F.nama_sekolah", 
            "E.nama AS nama_jurusan", 
            "D.nama AS nama_subjurusan",
            "C.nama AS nama_kelas"), 
        array("E.id_sekolah" => $id_sekolah, "D.id_jurusan" => $id_jurusan, "C.id_subjurusan" => $id_subjurusan, "B.id_kelas" => $id_kelas, "A.publish" => 1),
        array(), 0, 0, "", "A.tanggal_jam<=NOW() AND DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE)>=NOW()");
    
    $soal_pilihanganda = $db->getFieldValue(
        "soal_detail AS A", 
        array("A.id", "A.no", "A.pertanyaan", "A.pilihan_1", "A.pilihan_2", "A.pilihan_3", "A.pilihan_4", "A.pilihan_5"), 
        array("id_head" => $dataujian[0]["id"], "tipe_soal" => 1), array(), 0, 0, " A.no ");
    
    $soal_essai = $db->getFieldValue(
        "soal_detail AS A", 
        array("A.id", "A.no", "A.pertanyaan"), 
        array("id_head" => $dataujian[0]["id"], "tipe_soal" => 2), array(), 0, 0, " A.no ");
    
    $smarty->assign("page_selected", "ujian");
    $smarty->assign("sub_page_selected", "ujian");    
    $smarty->assign("title", $dataujian[0]["nama_soal"]);
    $smarty->assign("sub_title", "");
    
    $smarty->assign('soal_pilihanganda', $soal_pilihanganda);
    $smarty->assign('soal_essai', $soal_essai);
    $smarty->assign('dataujian', $dataujian[0]);
    $smarty->assign('hari', $dataujian[0]["hari"]);
    $smarty->assign('jam', $dataujian[0]["jam"]);
    $smarty->assign('menit', $dataujian[0]["menit"]);
    $smarty->assign('detik', $dataujian[0]["detik"]);
    $smarty->assign('id_menu', 11);
    
    
    $id_menu = 11;
    include $root."includes/php/notification.php";
    
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/ujian/edit.html");    