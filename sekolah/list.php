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
    $currentpage = mysql_escape_string(!isset($_GET["page"])?1:$_GET["page"]);
    
    $totalrecord = $db->getFieldValue("sekolah AS A", array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . (strlen($query)>0?" AND (A.kode_sekolah LIKE '%$query% OR A.nama_sekloah LIKE '%$query%' OR A.no_badan_hukum LIKE '%$query%' OR DATE_FORMAT(A.tanggal_berdiri, '%d-%m-%Y')='$query')":""));
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue(
        "sekolah AS A",  
        array(
            "A.id", "A.kode_sekolah", 
            "A.nama_sekolah", 
            "A.no_badan_hukum", 
            "DATE_FORMAT(A.tanggal_berdiri, '%d-%m-%Y') AS tanggal_berdiri"
        ), 
        array(),  
        array(), $limit, $limit*($currentpage-1), " A.id ", " 1 " . (strlen($query)>0?" AND (A.kode_sekolah LIKE '%$query% OR A.nama_sekloah LIKE '%$query%' OR A.no_badan_hukum LIKE '%$query%' OR DATE_FORMAT(A.tanggal_berdiri, '%d-%m-%Y')='$query')":"")
    ); 
    
    
    
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("limitpage", $limit);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "sekolah");
    $smarty->assign("sub_page_selected", "sekolah");    
    $smarty->assign("title", "Master Sekolah");
    $smarty->assign("sub_title", "Daftar Sekolah");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }
    
    $id_menu = 3;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/sekolah/list.html");    