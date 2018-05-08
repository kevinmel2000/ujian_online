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
        header("location: ".ADMINWEB_URL."/sekolah/");
        die();
    }
    
    $data = $db->getFieldValue(
        "sekolah AS A", 
        array(
            "A.id", 
            "A.kode_sekolah", 
            "A.nama_sekolah", 
            "A.no_badan_hukum", 
            "DATE_FORMAT(tanggal_berdiri, '%d-%m-%Y') AS tanggal_berdiri",
            "A.nss",
            "A.npsn",
            "A.status",
            "A.tingkat",
            "A.mbs",
            "A.alamat",
            "A.rt",
            "A.rw",
            "A.dusun",
            "A.kelurahan",
            "A.propinsi",
            "A.kabupaten",
            "A.kecamatan",
            "A.kodepos",
            "A.lat",
            "A.lng",
            "A.telepon",
            "A.fax",
            "A.website",
            "A.email",
            "A.kejuruan"
        ), 
        array("A.id" => $id)
    );
            
    if(count($data)==0) {
        $db->mysql_close();
        header("location: ".ADMINWEB_URL."/sekolah/");
        die();
    }
    
    $smarty->assign("isEdit", true);
    $smarty->assign("data", $data);
    $smarty->assign("page_selected", "sekolah");
    $smarty->assign("sub_page_selected", "sekolah");
    $smarty->assign("title", "Data Sekolah");
    $smarty->assign("sub_title", "Tambah Data Sekolah");
    
    $id_menu = 3; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/sekolah/edit.html");    