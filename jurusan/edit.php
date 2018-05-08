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
        header("location: ".ADMINWEB_URL."/jurusan/");
        die();
    }
    
    $data = $db->getFieldValue("jurusan AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id LEFT JOIN tingkat AS C ON A.id_tingkat=C.id", array("A.id", "A.id_sekolah", "B.nama_sekolah", "A.id_tingkat", "C.nama AS nama_tingkat", "A.kode", "A.nama"), array("A.id" => $id));
            
    if(count($data)==0) {
        $db->mysql_close();
        header("location: ".ADMINWEB_URL."/jurusan/");
        die();
    }
    
    $smarty->assign("isEdit", true);
    $smarty->assign("data", $data);
    $smarty->assign("page_selected", "jurusan");
    $smarty->assign("sub_page_selected", "jurusan");
    $smarty->assign("title", "Data Jurusan");
    $smarty->assign("sub_title", "Tambah Data Jurusan");
    
    $id_menu = 5; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/jurusan/edit.html");    