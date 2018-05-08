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
    
    $pagelimit = 5;
    $limit = 20;
    $query = isset($_GET["query"])?$_GET["query"]:"";
    $currentpage = !isset($_GET["page"])?1:$_GET["page"];
    $totalrecord = $db->getFieldValue("m_peserta AS A", 
            array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . (strlen($query)>0?" AND (A.id_peserta LIKE '%$query%' OR A.nama_peserta LIKE '%$query%' OR A.alamat LIKE '%$query%' OR A.telepon LIKE '%$query%' OR A.asal_sekolah LIKE '%$query%' OR A.jurusan LIKE '%$query%' OR A.tahun_lulus LIKE '%$query%' OR A.tempat_lahir LIKE '%$query%' OR DATE_FORMAT(A.tgl_lahir, '%d-%m-%Y')='$query')":""));
    
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue("m_peserta AS A", 
            array("A.id", "A.id_peserta", "A.nama_peserta", "A.alamat", "A.telepon", "A.asal_sekolah", "A.jurusan", "A.tahun_lulus", "A.tempat_lahir", "DATE_FORMAT(A.tgl_lahir, '%d-%m-%Y') AS tanggal_lahir"), array(), 
            array(), $limit, $limit*($currentpage-1), "", " 1 " . (strlen($query)>0?" AND (A.id_peserta LIKE '%$query%' OR A.nama_peserta LIKE '%$query%' OR A.alamat LIKE '%$query%' OR A.telepon LIKE '%$query%' OR A.asal_sekolah LIKE '%$query%' OR A.jurusan LIKE '%$query%' OR A.tahun_lulus LIKE '%$query%' OR A.tempat_lahir LIKE '%$query%' OR DATE_FORMAT(A.tgl_lahir, '%d-%m-%Y')='$query')":""));

    $smarty->assign('query', $query);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "peserta");
    $smarty->assign("sub_page_selected", "peserta");
    $smarty->assign("title", "peserta");
    $smarty->assign("sub_title", "Daftar Peserta");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }    
    if(isset($_SESSION["alert_error"])) {
        $smarty->assign("alert_error", $_SESSION["alert_error"]);
        unset($_SESSION["alert_error"]);
    }
    
    $id_menu = 9;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/peserta/list.html");    