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
    $data = $db->getFieldValue(
        "soal_detail AS A", 
        array(
            "A.id",
            "A.pertanyaan",
            "A.pilihan_1",
            "A.pilihan_2",
            "A.pilihan_3",
            "A.pilihan_4",
            "A.pilihan_5",
            "A.jawaban_pilihan"
        ), 
        array("A.id" => $id)
    );
    $data[0]["pertanyaan"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["pertanyaan"]);
    $data[0]["pilihan_1"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["pilihan_1"]);
    $data[0]["pilihan_2"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["pilihan_2"]);
    $data[0]["pilihan_3"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["pilihan_3"]);
    $data[0]["pilihan_4"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["pilihan_4"]);
    $data[0]["pilihan_5"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["pilihan_5"]);
    
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign('id_head', $_GET["id_head"]);
    $smarty->assign("page_selected", "soal");
    $smarty->assign("sub_page_selected", "soal");
    $smarty->assign("title", "Ujian");
    $smarty->assign("sub_title", "Ubah Data Soal Pilihan Ganda");
    
    $id_menu = 7; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/pilihanganda/edit.html");    