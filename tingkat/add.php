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
    
    if($_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]>0) {
        $id_sekolah = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
        $data_sekolah = $db->getFieldValue("sekolah", array("nama_sekolah"), array("id" => $id_sekolah));
        $smarty->assign('id_sekolah', $id_sekolah);
        $smarty->assign('nama_sekolah', $data_sekolah[0]["nama_sekolah"]);
    }
    
    $smarty->assign("page_selected", "tingkat");
    $smarty->assign("sub_page_selected", "tingkat");
    $smarty->assign("title", "Data tingkat");
    $smarty->assign("sub_title", "Tambah Data tingkat");
    
    $id_menu = 4; $aksi = "T";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/tingkat/edit.html");    