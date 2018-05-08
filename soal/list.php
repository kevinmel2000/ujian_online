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
    $query      = isset($_GET["query"])?$_GET["query"]:"";
    $id_sekolah    = isset($_GET["id_sekolah"])?$_GET["id_sekolah"]:"";
    $id_jurusan    = isset($_GET["id_jurusan"])?$_GET["id_jurusan"]:"";
    $id_subjurusan = isset($_GET["id_subjurusan"])?$_GET["id_subjurusan"]:"";
    $id_kelas      = isset($_GET["id_kelas"])?$_GET["id_kelas"]:"";
    
    if($tipe_user=="A" && $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]>0) {
        $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
    }
    
    if($tipe_user=="G") {
        $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
        $id_jurusan    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
        $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
    }
    
    if($tipe_user=="S") {
        $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
        $id_jurusan    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
        $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
        $id_kelas      = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"];
    }
    
    $currentpage = !isset($_GET["page"])?1:$_GET["page"];
    $totalrecord = $db->getFieldValue(
        "soal_head AS A LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", 
        array("COUNT(*) AS TOTAL"), 
        array(),  
        array(), 0, 0, "", " 1 " .
        ($id_sekolah>0?" AND B.id_sekolah='$id_sekolah'":"") .
        ($id_jurusan>0?" AND B.id_jurusan='$id_jurusan'":"") .
        ($id_subjurusan>0?" AND B.id_subjurusan='$id_subjurusan'":"") .
        ($id_kelas>0?" AND B.id_kelas='$id_kelas'":"") .
        ($tipe_user=="G"?" AND A.id_pelajaran IN (SELECT id_pelajaran FROM guru_to_pelajaran WHERE id_guru='$id_tipe_user') ":"") .    
        (strlen($query)>0?" AND A.kode_soal LIKE '%$query%' OR A.keterangan LIKE '%$query%' OR B.nama LIKE '%$query%' OR B.nama_sekolah LIKE '%$query%' OR B.nama_jurusan LIKE '%$query%'  OR B.nama_subjurusan LIKE '%$query%' OR B.nama_kelas LIKE '%$query%'":"")
    );
    
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue(
            "soal_head AS A LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id LEFT JOIN (SELECT id_head, COUNT(*) AS jumlah_soal FROM soal_detail GROUP BY id_head) AS C ON C.id_head=A.id", 
        array(
            "A.id",
            "B.nama_kelas",
            "B.nama_subjurusan",
            "B.nama_jurusan",
            "B.nama_sekolah",
            "A.kode_soal",
            "A.nama_soal",
            "B.nama AS nama_pelajaran",
            "A.keterangan",
            "DATE_FORMAT(A.tanggal_jam, '%d-%m-%Y<br />%H:%i') AS waktu_ujian",
            "A.publish",
            "A.publish_score",
            "C.jumlah_soal"
        ), 
        array(),  
        array(), $limit, $limit*($currentpage-1), "", " 1 " .
        ($id_sekolah>0?" AND B.id_sekolah='$id_sekolah'":"") .
        ($id_jurusan>0?" AND B.id_jurusan='$id_jurusan'":"") .
        ($id_subjurusan>0?" AND B.id_subjurusan='$id_subjurusan'":"") .
        ($id_kelas>0?" AND B.id_kelas='$id_kelas'":"") .
        ($tipe_user=="G"?" AND A.id_pelajaran IN (SELECT id_pelajaran FROM guru_to_pelajaran WHERE id_guru='$id_tipe_user') ":"") .    
        (strlen($query)>0?" AND A.kode_soal LIKE '%$query%' OR A.keterangan LIKE '%$query%' OR B.nama LIKE '%$query%' OR B.nama_sekolah LIKE '%$query%' OR B.nama_jurusan LIKE '%$query%'  OR B.nama_subjurusan LIKE '%$query%' OR B.nama_kelas LIKE '%$query%'":"")
    ); 

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
    $smarty->assign("page_selected", "soal");
    $smarty->assign("sub_page_selected", "soal");
    $smarty->assign("title", "Ujian");
    $smarty->assign("sub_title", "Daftar Ujian");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }    
    if(isset($_SESSION["alert_error"])) {
        $smarty->assign("alert_error", $_SESSION["alert_error"]);
        unset($_SESSION["alert_error"]);
    }
    
    $id_menu = 7;
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/soal/list.html");    