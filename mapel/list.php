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
    
    $tipe_user     = $_SESSION[ADMIN_SESSION_NAME]["user"]["tipe_user"];
    $id_tipe_user  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_tipe_user"];
    
    $pagelimit = 5;
    $limit = 20;
    $query         = isset($_GET["query"])?$_GET["query"]:"";
    $id_sekolah    = isset($_GET["id_sekolah"])?$_GET["id_sekolah"]:"";
    $id_jurusan    = isset($_GET["id_jurusan"])?$_GET["id_jurusan"]:"";
    $id_subjurusan = isset($_GET["id_subjurusan"])?$_GET["id_subjurusan"]:"";
    $id_kelas      = isset($_GET["id_kelas"])?$_GET["id_kelas"]:"";
    $currentpage   = !isset($_GET["page"])?1:$_GET["page"];
    
    if($tipe_user=="A" && $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]==0) {
        $totalrecord = $db->getFieldValue(
            "mapel AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . 
            (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    }
    
    if($tipe_user=="A" && $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]>0) {
        $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
        $totalrecord = $db->getFieldValue(
            "mapel AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . 
            (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    }
    
    if($tipe_user=="G") {
        $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
        $id_jurusan    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
        $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
        
        $totalrecord = $db->getFieldValue(
            "guru_to_pelajaran AS F LEFT JOIN mapel AS A ON F.id_pelajaran=A.id LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array("COUNT(*) AS TOTAL"), array("F.id_guru" => $id_tipe_user),  array(), 0, 0, "", " 1 " . 
            (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    }
    
    if($tipe_user=="S") {
        $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
        $id_jurusan    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
        $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
        $id_kelas      = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"];
        
        $totalrecord = $db->getFieldValue(
            "mapel AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . 
            (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    }
    
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    
    if($tipe_user=="A" && $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]==0) {
        $listdetail = $db->getFieldValue(
            "mapel AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array(
                "A.id", 
                "B.nama AS nama_kelas", 
                "C.nama AS nama_subjurusan", 
                "D.nama AS nama_jurusan", 
                "E.nama_sekolah",
                "A.kode", 
                "A.nama"
            ), array(), 
            array(), $limit, $limit*($currentpage-1), "", " 1 " . 
            (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    }
    if($tipe_user=="A" && $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]>0) {
        $listdetail = $db->getFieldValue(
            "mapel AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array(
                "A.id", 
                "B.nama AS nama_kelas", 
                "C.nama AS nama_subjurusan", 
                "D.nama AS nama_jurusan",
                "E.nama_sekolah",
                "A.kode", 
                "A.nama"
            ), array(), 
            array(), $limit, $limit*($currentpage-1), "", " 1 " . 
            (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    }
    if($tipe_user=="G") {        
        $listdetail = $db->getFieldValue(
            "guru_to_pelajaran AS F LEFT JOIN mapel AS A ON F.id_pelajaran=A.id LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array(
                "A.id", 
                "B.nama AS nama_kelas", 
                "C.nama AS nama_subjurusan", 
                "D.nama AS nama_jurusan", 
                "E.nama_sekolah",
                "A.kode", 
                "A.nama"
            ), array(), 
            array(), $limit, $limit*($currentpage-1), "", " 1 " . 
            (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );        
    }
    if($tipe_user=="S") {
        $listdetail = $db->getFieldValue(
            "mapel AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array(
                "A.id", 
                "B.nama AS nama_kelas", 
                "C.nama AS nama_subjurusan", 
                "D.nama AS nama_jurusan",
                "E.nama_sekolah",
                "A.kode", 
                "A.nama"
            ), array(), 
            array(), $limit, $limit*($currentpage-1), "", " 1 " . 
            (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    }
    
    $smarty->assign('query', $query);
    
    if(strlen($id_sekolah)>0) {
        $data_sekolah = $db->getFieldValue("sekolah", array("nama_sekolah"), array("id" => $id_sekolah));
        $smarty->assign('id_sekolah', $id_sekolah);
        $smarty->assign('nama_sekolah', $data_sekolah[0]["nama_sekolah"]);
    }
     
    if(strlen($id_jurusan)>0) {
        $data_jurusan = $db->getFieldValue("jurusan", array("nama"), array("id" => $id_jurusan));
        $smarty->assign('id_jurusan', $id_jurusan);
        $smarty->assign('nama_jurusan', $data_jurusan[0]["nama"]);
    }
    
    if(strlen($id_subjurusan)>0) {
        $data_subjurusan = $db->getFieldValue("subjurusan", array("nama"), array("id" => $id_subjurusan));
        $smarty->assign('id_subjurusan', $id_subjurusan);
        $smarty->assign('nama_subjurusan', $data_subjurusan[0]["nama"]);
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
    $smarty->assign("page_selected", "mapel");
    $smarty->assign("sub_page_selected", "mapel");
    $smarty->assign("title", "Pelajaran");
    $smarty->assign("sub_title", "Daftar Pelajaran");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }    
    if(isset($_SESSION["alert_error"])) {
        $smarty->assign("alert_error", $_SESSION["alert_error"]);
        unset($_SESSION["alert_error"]);
    }
    
    $id_menu = 6;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/mapel/list.html");    