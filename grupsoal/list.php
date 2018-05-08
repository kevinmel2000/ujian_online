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
    
    $tipe_user = $_SESSION[ADMIN_SESSION_NAME]["user"]["tipe_user"];
    $id_mapel = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_mapel"];
    
    
    $pagelimit = 5;
    $limit = 20;
    $query = isset($_GET["query"])?$_GET["query"]:"";
    $currentpage = !isset($_GET["page"])?1:$_GET["page"];
    $totalrecord = $db->getFieldValue(
        "m_soal_header AS A LEFT JOIN m_mapel AS B ON A.id_mapel=B.id LEFT JOIN (SELECT id_soal_header, COUNT(*) AS jumlah_soal FROM m_soal_detail GROUP BY id_soal_header) AS C ON A.id=C.id_soal_header", 
        array("COUNT(*) AS TOTAL"), 
        ($tipe_user=="U"?array("A.id_mapel" => $id_mapel):array()),  
        array(), 0, 0, "", " 1 " .
        (strlen($query)>0?" AND (A.kode_soal LIKE '%$query%' OR A.pejelasan LIKE '%$query%' OR A.lama_waktu_pengerjaan LIKE '%$query%' OR B.nama_maple LIKE '%$query%' OR C.jumlah_soal LIKE '%$query%')":"")
    );
    
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue(
            "m_soal_header AS A LEFT JOIN m_mapel AS B ON A.id_mapel=B.id LEFT JOIN (SELECT id_soal_header, COUNT(*) AS jumlah_soal FROM m_soal_detail GROUP BY id_soal_header) AS C ON A.id=C.id_soal_header",
            array(
                "A.id", 
                "A.id_mapel",
                "B.nama_mapel AS mapel",
                "A.kode_soal",
                "A.keterangan", 
                "A.lama_waktu_pengerjaan", 
                "C.jumlah_soal" 
            ), 
            ($tipe_user=="U"?array("A.id_mapel" => $id_mapel):array()),
            array(), $limit, $limit*($currentpage-1), "", " 1 " .
            (strlen($query)>0?" AND A.id_grupsoal LIKE '%$query%' OR A.grupsoal LIKE '%$query%' OR A.opt_1 LIKE '%$query%' OR A.opt_2 LIKE '%$query%' OR A.opt_3 LIKE '%$query%' OR A.opt_4 LIKE '%$query%' OR B.nama_mapel LIKE '%$query%'":"")
        ); 

    $smarty->assign('query', $query);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "grupsoal");
    $smarty->assign("sub_page_selected", "grupsoal");
    $smarty->assign("title", "Grup Soal");
    $smarty->assign("sub_title", "Daftar grupsoal");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }    
    if(isset($_SESSION["alert_error"])) {
        $smarty->assign("alert_error", $_SESSION["alert_error"]);
        unset($_SESSION["alert_error"]);
    }
    
    $id_menu = 5;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/grupsoal/list.html");    