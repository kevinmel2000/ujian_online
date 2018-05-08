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
    $id_kelas  = isset($_GET["id_kelas"])?$_GET["id_kelas"]:"";
    $currentpage = mysql_escape_string(!isset($_GET["page"])?1:$_GET["page"]);
    
    //data kelas
    $kelas = $db->getFieldValue("kelas AS A LEFT JOIN subjurusan AS B ON A.id_subjurusan=B.id LEFT JOIN jurusan AS C ON B.id_jurusan=C.id LEFT JOIN sekolah AS D ON C.id_sekolah=D.id", array("A.id", "A.kode", "A.nama AS nama_kelas", "B.nama AS nama_subjurusan", "C.nama AS nama_jurusan", "D.nama_sekolah"), array("A.id" => $id_kelas));
    if(count($kelas)==0) {
        $db->mysql_close();
        header("location: ".ADMINWEB_URL."/kelas/");
        die();
    }
    
    $totalrecord = $db->getFieldValue("subkelas AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", array("COUNT(*) AS TOTAL"), array("A.id_kelas" => $id_kelas),  array(), 0, 0, "", " 1 " . (strlen($query)>0?" AND (A.kode LIKE '%$query% OR A.nama LIKE '%$query%')":""));
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue(
        "subkelas AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id",  
        array(
            "A.id", 
            "A.kode", 
            "A.nama"
        ), 
        array("A.id_kelas" => $id_kelas),  
        array(), $limit, $limit*($currentpage-1), " A.id ", " 1 " . (strlen($query)>0?" AND (A.kode LIKE '%$query% OR A.nama LIKE '%$query%')":"")
    ); 
    
    $smarty->assign('kelas', $kelas[0]);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("limitpage", $limit);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "kelas");
    $smarty->assign("sub_page_selected", "subkelas");    
    $smarty->assign("title", "Sub Kelas");
    $smarty->assign("sub_title", "Daftar Sub Kelas");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }
    
    $id_menu = 8;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/subkelas/list.html");    