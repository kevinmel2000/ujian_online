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
        "m_soal_header AS A", 
        array(
            "A.id", 
            "A.id_mapel",
            "B.nama_mapel AS mapel",
            "A.kode_soal",
            "A.keterangan", 
            "A.nilai_benar", 
            "A.nilai_salah", 
            "perhitungan_score",
            "A.lama_waktu_pengerjaan"
        ), 
        array("A.id" => $_GET["id"])
    );
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign("menu", $menu);
    $smarty->assign("page_selected", "grupsoal");
    $smarty->assign("sub_page_selected", "grupsoal");
    $smarty->assign("title", "Grup Soal");
    $smarty->assign("sub_title", "Ubah Data Grup Soal");
    
    $id_menu = 5; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/grupsoal/edit.html");    