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
    $totalrecord = $db->getFieldValue("admin_users AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id", 
            array("COUNT(*) AS TOTAL"), array("A.tipe_user" => "A"),  array(), 0, 0, "", " 1 " . (strlen($query)>0?" AND (A.nama LIKE '%$query%' OR A.username LIKE '%$query%' OR B.nama_sekolah LIKE '%$query%')":""));
    
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue("admin_users AS A LEFT JOIN sekolah AS B ON A.id_sekolah=B.id", 
            array("A.id", "A.nama", "A.username", "B.nama_sekolah"), array("A.tipe_user" => "A"), 
            array(), $limit, $limit*($currentpage-1), "", " 1 " . (strlen($query)>0?" AND (A.nama LIKE '%$query%' OR A.username LIKE '%$query%' OR B.nama_sekolah LIKE '%$query%')":""));

    $smarty->assign('query', $query);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "managemen_user");
    $smarty->assign("sub_page_selected", "managemen_user");
    $smarty->assign("title", "Admin User");
    $smarty->assign("sub_title", "Daftar Admin User");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }    
    if(isset($_SESSION["alert_error"])) {
        $smarty->assign("alert_error", $_SESSION["alert_error"]);
        unset($_SESSION["alert_error"]);
    }
    
    $id_menu = 2;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/pengguna/list.html");    