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
    
    $id_kelas  = isset($_GET["id_kelas"])?$_GET["id_kelas"]:"";
    
    //data kelas
    $kelas = $db->getFieldValue("kelas AS A LEFT JOIN subjurusan AS B ON A.id_subjurusan=B.id LEFT JOIN jurusan AS C ON B.id_jurusan=C.id LEFT JOIN sekolah AS D ON C.id_sekolah=D.id", array("A.id", "A.kode", "A.nama AS nama_kelas", "B.nama AS nama_subjurusan", "C.nama AS nama_jurusan", "D.nama_sekolah"), array("A.id" => $id_kelas));
    if(count($kelas)==0) {
        $db->mysql_close();
        header("location: ".ADMINWEB_URL."/kelas/");
        die();
    }
    
    $smarty->assign('kelas', $kelas[0]);
    $smarty->assign("page_selected", "kelas");
    $smarty->assign("sub_page_selected", "subkelas");
    $smarty->assign("title", "Sub kelas");
    $smarty->assign("sub_title", "Tambah Data Sub kelas");
    
    $id_menu = 8; $aksi = "T";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/subkelas/edit.html");    