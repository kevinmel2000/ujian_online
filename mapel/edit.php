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
    
    $data = $db->getFieldValue(
        "mapel AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
        array(
            "A.id",
            "A.kode",
            "A.nama",
            "A.id_kelas",
            "B.nama AS nama_kelas",
            "B.id_subjurusan",
            "C.nama AS nama_subjurusan",
            "C.id_jurusan",
            "D.nama AS nama_jurusan",
            "D.id_sekolah",
            "E.nama_sekolah"
            
        ), 
        array("A.id" => $_GET["id"])
    );
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign("menu", $menu);
    $smarty->assign("page_selected", "mapel");
    $smarty->assign("sub_page_selected", "mapel");
    $smarty->assign("title", "Pelajaran");
    $smarty->assign("sub_title", "Edit Data Pelajaran");
    
    $id_menu = 6; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/mapel/edit.html");    