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
        header("location: ".ADMINWEB_URL."/koreksi/");
        die();
    }
    
    $data = $db->getFieldValue(
            "koreksi_head AS A LEFT JOIN (SELECT B1.*,B2.nama_sekolah,B3.nama AS nama_tingkat, B4.nama AS nama_kelas FROM mapel AS B1 LEFT JOIN sekolah AS B2 ON B1.id_sekolah=B2.id LEFT JOIN tingkat AS B3 ON B1.id_tingkat=B3.id LEFT JOIN kelas AS B4 ON B1.id_kelas=B4.id) AS B ON A.id_pelajaran=B.id", 
        array(
            "A.id",
            "B.id_sekolah",
            "B.nama_sekolah",
            "B.id_tingkat",
            "B.nama_tingkat",
            "B.id_kelas",
            "B.nama_kelas",
            "A.id_pelajaran",
            "B.nama AS nama_pelajaran",
            "A.kode_koreksi",
            "A.nama_koreksi",
            "A.keterangan",
            "A.nilai_benar",
            "A.nilai_salah",
            "A.perhitungan_score",
            "A.lama_waktu_pengerjaan",
            "A.publish",
            "DATE_FORMAT(tanggal_jam, '%d-%m-%Y') AS tanggal_ujian",
            "DATE_FORMAT(tanggal_jam, '%H:%i') AS jam_ujian"
        ), 
        array("A.id" => $id)  
    ); 
    
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign("page_selected", "koreksi");
    $smarty->assign("sub_page_selected", "koreksi");
    $smarty->assign("title", "koreksi");
    $smarty->assign("sub_title", "Ubah Data koreksi");
    
    $id_menu = 12; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/koreksi/edit.html");    