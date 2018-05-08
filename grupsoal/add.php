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
    
    $data = array(
        array(
            "nilai_benar" => 1,
            "nilai_salah" => 0,
            "perhitungan_score" => "({nilai_benar}-{nilai_salah})*100"
        )
    );
    
    $smarty->assign('data', $data);
    $smarty->assign("menu", $menu);    
    $smarty->assign("page_selected", "grupsoal");
    $smarty->assign("sub_page_selected", "grupsoal");
    $smarty->assign("title", "Grup Soal");
    $smarty->assign("sub_title", "Tambah Grup Soal Baru");
    
    $id_menu = 5; $aksi = "T";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/grupsoal/edit.html");    