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
    $query   = isset($_GET["query"])?$_GET["query"]:"";
    $id_sekolah = isset($_GET["id_sekolah"])?$_GET["id_sekolah"]:"";
    $id_tingkat = isset($_GET["id_tingkat"])?$_GET["id_tingkat"]:"";
    $id_kelas = isset($_GET["id_kelas"])?$_GET["id_kelas"]:"";
    $currentpage = !isset($_GET["page"])?1:$_GET["page"];
    
    $totalrecord = $db->getFieldValue(
        "guru AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id", 
        array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . 
        (strlen($query)>0?" AND (A.nik LIKE '%$query%' OR A.nama LIKE '%$query%' OR A.no_hp LIKE '%$query%' OR A.email LIKE '%$query%')":"") . 
        (strlen($id_sekolah)>0?" AND A.id_sekolah='$id_sekolah' ":"") . 
        (strlen($id_tingkat)>0?" AND A.id_tingkat='$id_tingkat' ":"") . 
        (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
    );
    
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue(
        "guru AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id", 
        array("A.id", "A.id_sekolah", "B.nama_sekolah", "A.nik", "A.nama", "A.no_hp", "A.email", "A.jenis_kelamin"), array(), 
        array(), $limit, $limit*($currentpage-1), "", " 1 " . 
        (strlen($query)>0?" AND (A.nik LIKE '%$query%' OR A.nama LIKE '%$query%' OR A.no_hp LIKE '%$query%' OR A.email LIKE '%$query%')":"") . 
        (strlen($id_sekolah)>0?" AND A.id_sekolah='$id_sekolah' ":"") . 
        (strlen($id_tingkat)>0?" AND A.id_tingkat='$id_tingkat' ":"") . 
        (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
    );

    $smarty->assign('query', $query);
    
    if(strlen($id_sekolah)>0) {
        $data_sekolah = $db->getFieldValue("sekolah", array("nama_sekolah"), array("id" => $id_sekolah));
        $smarty->assign('id_sekolah', $id_sekolah);
        $smarty->assign('nama_sekolah', $data_sekolah[0]["nama_sekolah"]);
    }
     
    if(strlen($id_tingkat)>0) {
        $data_tingkat = $db->getFieldValue("tingkat", array("nama"), array("id" => $id_tingkat));
        $smarty->assign('id_tingkat', $id_tingkat);
        $smarty->assign('nama_tingkat', $data_tingkat[0]["nama"]);
    }
    
    if(strlen($id_kelas)>0) {
        $data_kelas = $db->getFieldValue("kelas", array("nama"), array("id" => $id_kelas));
        $smarty->assign('id_kelas', $id_kelas);
        $smarty->assign('nama_kelas', $data_kelas[0]["nama"]);
    }
    
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "guru");
    $smarty->assign("sub_page_selected", "guru");
    $smarty->assign("title", "guru");
    $smarty->assign("sub_title", "Daftar guru");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }    
    if(isset($_SESSION["alert_error"])) {
        $smarty->assign("alert_error", $_SESSION["alert_error"]);
        unset($_SESSION["alert_error"]);
    }
    
    $id_menu = 10;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/guru/list.html");    