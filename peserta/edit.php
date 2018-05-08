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
        "m_peserta AS A", 
        array(
            "A.id",
            "A.id_peserta",
            "A.nama_peserta",
            "A.alamat",
            "A.telepon",
            "A.asal_sekolah",
            "A.jurusan",
            "A.tahun_lulus",
            "A.tempat_lahir",
            "DATE_FORMAT(A.tgl_lahir, '%d-%m-%Y') AS tanggal_lahir"
        ), 
        array("A.id" => $_GET["id"])
    );
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign("menu", $menu);
    $smarty->assign("page_selected", "peserta");
    $smarty->assign("sub_page_selected", "peserta");
    $smarty->assign("title", "peserta");
    $smarty->assign("sub_title", "Ubah Peserta");
    
    $id_menu = 9; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/peserta/edit.html");    