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
        "admin_users AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id", 
        array(
            "A.id",
            "A.nama",
            "A.username",
            "A.password",
            "A.id_sekolah",
            "B.nama_sekolah"
        ), 
        array("A.id" => $_GET["id"])
    );
    
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();
    
    $data[0]["password"] = $mcrypt->decrypt($data[0]["password"]);
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign("page_selected", "managemen_user");
    $smarty->assign("sub_page_selected", "managemen_user");
    $smarty->assign("title", "Admin User");
    $smarty->assign("sub_title", "Ubah Admin User");
    
    $id_menu = 2; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/pengguna/edit.html");    