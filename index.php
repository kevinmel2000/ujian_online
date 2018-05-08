<?php
    $root = "";
    include $root."includes/php/initial.php";
    if(isset($_SESSION[ADMIN_SESSION_NAME])) {
        header("location: ".ADMINWEB_URL."/dashboard/");
        die();
    } 
    
    include $root."includes/php/classUtama.php";
    include SMARTY_DIR."Smarty.class.php";   
    
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    $db->mysql_close();
    
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
    
    $smarty->assign("title", "Aplikasi Sekolah");
    $smarty->assign("sub_title", "Login Pengguna");
    $smarty->assign("page_selected", "login");
    $smarty->assign("loginusers", $_SESSION["loginusers"]);
    unset($_SESSION["loginusers"]);
    $smarty->display(BACK_END_TEMPLATE_PATH."/login.html");