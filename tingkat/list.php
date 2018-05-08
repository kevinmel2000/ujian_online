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
    
    $tipe        = mysql_escape_string(isset($_GET["tipe"])?$_GET["tipe"]:"");
    $query       = mysql_escape_string(isset($_GET["query"])?$_GET["query"]:"");
    $id_sekolah  = isset($_GET["id_sekolah"])?$_GET["id_sekolah"]:"";
    $currentpage = mysql_escape_string(!isset($_GET["page"])?1:$_GET["page"]);
    
    if($_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]>0) {
        $id_sekolah = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
    }
    
    $totalrecord = $db->getFieldValue("tingkat AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id", array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 ".(strlen($query)>0?" AND (A.kode LIKE '%$query% OR A.nama LIKE '%$query%')":"").(strlen($id_sekolah)>0?" AND A.id_sekolah='$id_sekolah' ":""));
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue(
        "tingkat AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id",  
        array(
            "A.id", 
            "B.nama_sekolah",
            "A.kode", 
            "A.nama"
        ), 
        array(),  
        array(), $limit, $limit*($currentpage-1), " A.id ", " 1 " . (strlen($query)>0?" AND (A.kode LIKE '%$query% OR A.nama LIKE '%$query%')":"").(strlen($id_sekolah)>0?" AND A.id_sekolah='$id_sekolah' ":"")
    ); 
    
    if(strlen($id_sekolah)>0) {
        $data_sekolah = $db->getFieldValue("sekolah", array("nama_sekolah"), array("id" => $id_sekolah));
        $smarty->assign('id_sekolah', $id_sekolah);
        $smarty->assign('nama_sekolah', $data_sekolah[0]["nama_sekolah"]);
    }
    
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("limitpage", $limit);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "tingkat");
    $smarty->assign("sub_page_selected", "tingkat");    
    $smarty->assign("title", "Tingkat");
    $smarty->assign("sub_title", "Daftar Tingkat");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }
    
    $id_menu = 4;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/tingkat/list.html");    