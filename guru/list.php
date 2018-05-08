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
    
    if($_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]>0) {
        $id_sekolah = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
    }
    
    if($_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"]>0) {
        $id_jurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
    }
    
    if($_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"]>0) {
        $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
    }
    
    if($_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"]>0) {
        $id_kelas = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"];
    }
    
    if($tipe_user=="S") {
        $sql = "SELECT COUNT(*) AS TOTAL FROM (SELECT * FROM (SELECT D.nama AS nama_kelas, E.nama AS nama_subjurusan, F.nama AS nama_jurusan, G.nama_sekolah, B.* FROM guru_to_pelajaran AS A LEFT JOIN guru AS B ON A.id_guru=B.id LEFT JOIN mapel AS C ON A.id_pelajaran=C.id LEFT JOIN kelas AS D ON C.id_kelas=D.id LEFT JOIN subjurusan AS E ON D.id_subjurusan=E.id LEFT JOIN jurusan AS F ON E.id_jurusan=F.id LEFT JOIN sekolah AS G ON F.id_sekolah=G.id WHERE 1 " .
                (strlen($query)>0?" AND (B.nik LIKE '%$query%' OR B.nama LIKE '%$query%' OR B.no_hp LIKE '%$query%' OR B.email LIKE '%$query%')":"") . 
                (strlen($id_sekolah)>0?" AND F.id_sekolah='$id_sekolah' ":"") . 
                (strlen($id_jurusan)>0?" AND E.id_jurusan='$id_jurusan' ":"") . 
                (strlen($id_kelas)>0?" AND D.id_subjurusan='$id_subjurusan' ":"") . 
                (strlen($id_kelas)>0?" AND C.id_kelas='$id_kelas' ":""). ") AS T GROUP BY id) AS TT";
        $db->mysql_query($sql, $rec_count, $totalrecord);        
    } else {
        $totalrecord = $db->getFieldValue(
            "guru AS A LEFT JOIN subjurusan AS B ON A.id_subjurusan=B.id LEFT JOIN jurusan AS C ON B.id_jurusan=C.id LEFT JOIN sekolah AS D ON C.id_sekolah=D.id", 
            array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . 
            (strlen($query)>0?" AND (A.nik LIKE '%$query%' OR A.nama LIKE '%$query%' OR A.no_hp LIKE '%$query%' OR A.email LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND C.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND B.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND A.id_subjurusan='$id_subjurusan' ":"")
        );
    }
    
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    
    if($tipe_user=="S") {
        $sql = "SELECT 
                id, 
                nama_sekolah,
                nama_jurusan, 
                nama_subjurusan, 
                nama_kelas, 
                nik, 
                nama, 
                no_hp, 
                email, 
                jenis_kelamin, 
                jumlah_mp
            FROM (SELECT * FROM (SELECT D.nama AS nama_kelas, E.nama AS nama_subjurusan, F.nama AS nama_jurusan, G.nama_sekolah, B.*, H.jumlah_mp  FROM guru_to_pelajaran AS A LEFT JOIN guru AS B ON A.id_guru=B.id LEFT JOIN mapel AS C ON A.id_pelajaran=C.id LEFT JOIN kelas AS D ON C.id_kelas=D.id LEFT JOIN subjurusan AS E ON D.id_subjurusan=E.id LEFT JOIN jurusan AS F ON E.id_jurusan=F.id LEFT JOIN sekolah AS G ON F.id_sekolah=G.id LEFT JOIN (SELECT COUNT(*) AS jumlah_mp, id_guru FROM guru_to_pelajaran GROUP BY id_guru) AS H ON H.id_guru=B.id WHERE 1 " .
                (strlen($query)>0?" AND (B.nik LIKE '%$query%' OR B.nama LIKE '%$query%' OR B.no_hp LIKE '%$query%' OR B.email LIKE '%$query%')":"") . 
                (strlen($id_sekolah)>0?" AND F.id_sekolah='$id_sekolah' ":"") . 
                (strlen($id_jurusan)>0?" AND E.id_jurusan='$id_jurusan' ":"") . 
                (strlen($id_kelas)>0?" AND D.id_subjurusan='$id_subjurusan' ":"") . 
                (strlen($id_kelas)>0?" AND C.id_kelas='$id_kelas' ":""). ") AS T GROUP BY id) AS TT LIMIT ".$limit*($currentpage-1).", ".$limit;
        $db->mysql_query($sql, $rec_count, $listdetail);
         
    } else {
        $listdetail = $db->getFieldValue(
            "guru AS A LEFT JOIN subjurusan AS B ON A.id_subjurusan=B.id LEFT JOIN jurusan AS C ON B.id_jurusan=C.id LEFT JOIN sekolah AS D ON C.id_sekolah=D.id LEFT JOIN (SELECT COUNT(*) AS jumlah_mp, id_guru FROM guru_to_pelajaran GROUP BY id_guru) AS E ON E.id_guru=A.id", 
            array(
                "A.id", 
                "D.nama_sekolah", 
                "C.nama AS nama_jurusan", 
                "B.nama AS nama_subjurusan", 
                "A.nik", 
                "A.nama", 
                "A.no_hp", 
                "A.email", 
                "A.jenis_kelamin", 
                "E.jumlah_mp"), array(),                 
            array(), $limit, $limit*($currentpage-1), "", " 1 " . 
            (strlen($query)>0?" AND (A.nik LIKE '%$query%' OR A.nama LIKE '%$query%' OR A.no_hp LIKE '%$query%' OR A.email LIKE '%$query%')":"") . 
            (strlen($id_sekolah)>0?" AND C.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND B.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND A.id_subjurusan='$id_subjurusan' ":"")
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
    $smarty->assign("page_selected", "guru");
    $smarty->assign("sub_page_selected", "guru");
    $smarty->assign("title", "Guru");
    $smarty->assign("sub_title", "Daftar Guru");
    
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