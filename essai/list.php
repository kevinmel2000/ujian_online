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
    $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
    $id_tingkat    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_tingkat"];
    $id_head       = $_GET["id"];
    
    //data head
    $data_head = $db->getFieldValue(
    "soal_head AS A LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", 
        array(
            "A.id",
            "B.nama_sekolah",
            "B.nama_jurusan",
            "B.nama_subjurusan",
            "B.nama_kelas",
            "A.kode_soal",
            "A.nama_soal",
            "B.nama AS nama_pelajaran",
            "A.keterangan"
        ), 
        array("A.id" => $id_head)
    );
    
    $pagelimit = 5;
    $limit = 20;
    $query = isset($_GET["query"])?$_GET["query"]:"";
    $currentpage = !isset($_GET["page"])?1:$_GET["page"];
    $totalrecord = $db->getFieldValue(
        "soal_detail AS C LEFT JOIN soal_head AS A ON C.id_head=A.id LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", 
        array("COUNT(*) AS TOTAL"), 
        array("C.id_head" => $id_head, "C.tipe_soal" => 2),  
        array(), 0, 0, "", " 1 " .
        ($id_sekolah>0?" AND B.id_sekolah='$id_sekolah'":"") .
        ($id_jurusan>0?" AND B.id_jurusan='$id_jurusan'":"") .
        ($id_subjurusan>0?" AND B.id_subjurusan='$id_subjurusan'":"") .
        ($id_kelas>0?" AND B.id_kelas='$id_kelas'":"") .
        ($tipe_user=="G"?" AND A.id_pelajaran IN (SELECT id_pelajaran FROM guru_to_pelajaran WHERE id_guru='$id_tipe_user') ":"")    
    );
    
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue(
            "soal_detail AS C LEFT JOIN soal_head AS A ON C.id_head=A.id LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", 
        array(
            "C.id",
            "C.pertanyaan",
            "C.jawaban_essai"
        ), 
        array("C.id_head" => $id_head, "C.tipe_soal" => 2),  
        array(), $limit, $limit*($currentpage-1), "", " 1 " .
        ($id_sekolah>0?" AND B.id_sekolah='$id_sekolah'":"") .
        ($id_jurusan>0?" AND B.id_jurusan='$id_jurusan'":"") .
        ($id_subjurusan>0?" AND B.id_subjurusan='$id_subjurusan'":"") .
        ($id_kelas>0?" AND B.id_kelas='$id_kelas'":"") .
        ($tipe_user=="G"?" AND A.id_pelajaran IN (SELECT id_pelajaran FROM guru_to_pelajaran WHERE id_guru='$id_tipe_user') ":"")    
    ); 

    $smarty->assign('id_head', $id_head);
    $smarty->assign('data_head', $data_head);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "soal");
    $smarty->assign("sub_page_selected", "soal");
    $smarty->assign("title", "Ujian");
    $smarty->assign("sub_title", "Daftar Soal Essai");
    
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
    $smarty->display(BACK_END_TEMPLATE_PATH."/essai/list.html");    