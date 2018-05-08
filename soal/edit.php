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
    
    $id = $db->checkIntegerRange($_GET["id"])?$_GET["id"]:0;
    if($id==0) {
        $db->mysql_close();
        header("location: ".ADMINWEB_URL."/soal/");
        die();
    }
    
    $data = $db->getFieldValue(
            "soal_head AS A LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", 
        array(
            "A.id",
            "B.id_sekolah",
            "B.nama_sekolah",
            "B.id_jurusan",
            "B.nama_jurusan",
            "B.id_subjurusan",
            "B.nama_subjurusan",
            "B.id_kelas",
            "B.nama_kelas",
            "A.id_pelajaran",
            "B.nama AS nama_pelajaran",
            
            "A.kode_soal",
            "A.nama_soal",
            "A.keterangan",
            "A.nilai_benar",
            "A.nilai_salah",
            "A.perhitungan_score",
            "A.lama_waktu_pengerjaan",
            "A.publish",
            "A.publish_score",
            "DATE_FORMAT(tanggal_jam, '%d-%m-%Y') AS tanggal_ujian",
            "DATE_FORMAT(tanggal_jam, '%H:%i') AS jam_ujian"
        ), 
        array("A.id" => $id)  
    ); 
    $data[0]["keterangan"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["keterangan"]);
    
    
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign("page_selected", "soal");
    $smarty->assign("sub_page_selected", "soal");
    $smarty->assign("title", "Ujian");
    $smarty->assign("sub_title", "Ubah Data Ujian");
    
    $id_menu = 7; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/soal/edit.html");    