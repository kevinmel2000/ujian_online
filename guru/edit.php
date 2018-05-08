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
        "guru AS A LEFT JOIN subjurusan AS B ON A.id_subjurusan=B.id LEFT JOIN jurusan AS C ON B.id_jurusan=C.id LEFT JOIN sekolah AS D ON C.id_sekolah=D.id LEFT JOIN admin_users AS E ON A.id_user_login=E.id", 
        array(
            "A.id",
            "A.nik",
            "A.nama",
            "A.jenis_kelamin",
            "A.no_hp",
            "A.email",
            "A.id_subjurusan",
            "B.nama AS nama_subjurusan",
            "B.id_jurusan",
            "C.nama AS nama_jurusan",
            "C.id_sekolah",
            "D.nama_sekolah",
            "E.username",
            "E.password"
        ), 
        array("A.id" => $_GET["id"])
    );
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();
    
    $data[0]["password"] = $mcrypt->decrypt($data[0]["password"]);
    
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign("page_selected", "guru");
    $smarty->assign("sub_page_selected", "guru");
    $smarty->assign("title", "Guru");
    $smarty->assign("sub_title", "Edit Data Guru");
    
    $id_menu = 10; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/guru/edit.html");    