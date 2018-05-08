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
    
    $data = $db->getFieldValue("subjurusan AS A LEFT JOIN jurusan AS B ON A.id_jurusan=B.id LEFT JOIN sekolah AS C ON B.id_sekolah=C.id", array("A.id",  "A.id_jurusan", "A.kode", "A.nama"), array("A.id" => $id));
            
    if(count($data)==0) {
        $db->mysql_close();
        header("location: ".ADMINWEB_URL."/jurusan/");
        die();
    }
    
    $id_jurusan  = $data[0]["id_jurusan"];
    
    //data jurusan
    $jurusan = $db->getFieldValue("jurusan AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id", array("A.id", "A.kode", "A.nama AS nama_jurusan", "B.nama_sekolah"), array("A.id" => $id_jurusan));
    if(count($jurusan)==0) {
        $db->mysql_close();
        header("location: ".ADMINWEB_URL."/jurusan/");
        die();
    }
    
    $smarty->assign("isEdit", true);
    $smarty->assign("data", $data);
    $smarty->assign('jurusan', $jurusan[0]);
    $smarty->assign("page_selected", "jurusan");
    $smarty->assign("sub_page_selected", "subjurusan");
    $smarty->assign("title", "Sub Jurusan");
    $smarty->assign("sub_title", "Edit Data Sub Jurusan");
    
    $id_menu = 5; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/subjurusan/edit.html");    