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
    
    $dataujian = $db->getFieldValue(
        "soal_head AS A LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", 
        array("A.*", 
            "DATE_FORMAT(A.tanggal_jam, '%d-%m-%Y') AS tanggal_ujian",
            "DATE_FORMAT(A.tanggal_jam, '%H:%i') AS jam_ujian",
            "B.nama AS nama_pelajaran", 
            "B.nama_sekolah", 
            "B.nama_jurusan", 
            "B.nama_subjurusan", 
            "B.nama_kelas"), 
        array("A.id" => $_GET["id"])
    );
    
    $smarty->assign("page_selected", "ujian");
    $smarty->assign("sub_page_selected", "ujian");    
    $smarty->assign("title", $dataujian[0]["nama_soal"]);
    $smarty->assign("sub_title", "");
    
    $smarty->assign('dataujian', $dataujian[0]);
    $smarty->assign('id_menu', 11);
    
    $id_menu = 11;
    include $root."includes/php/notification.php";
    
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/ujian/finish.html");    