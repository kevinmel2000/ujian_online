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
    $id_jurusan    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
    $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
    $id_kelas      = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"];
    $id            = $db->checkIntegerRange($_GET["id"])?$_GET["id"]:0;
    $id_head       = $db->checkIntegerRange($_GET["id_head"])?$_GET["id_head"]:0;
    
    //DATA HEADER
    $data_head = $db->getFieldValue(
    "jawaban_soal_head AS C LEFT JOIN soal_head AS A ON C.id_soal_head=A.id LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id LEFT JOIN siswa AS D ON C.id_siswa=D.id", 
        array(
            "C.id",
            "C.id_soal_head",
            "C.id_siswa",
            "B.nama_sekolah",
            "B.nama_jurusan",
            "B.nama_subjurusan",
            "B.nama_kelas",
            "A.kode_soal",
            "A.nama_soal",
            "B.nama AS nama_pelajaran",
            "A.keterangan",
            "D.nim",
            "D.nama"
        ), 
        array("C.id" => $id)
    );
    
    if(count($data_head)==0) {
        $db->mysql_close();
        header("location: ".ADMINWEB_URL."/koreksi/");
        die();
    }
    
    $soal_pilihanganda = $db->getFieldValue(
            "soal_detail AS C LEFT JOIN (SELECT * FROM jawaban_soal_detail WHERE id_head='$id') AS E ON E.id_soal_detail=C.id LEFT JOIN soal_head AS A ON C.id_head=A.id LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", 
        array(
            "E.id",
            "C.pertanyaan",
            "C.no",
            "C.pilihan_1",
            "C.pilihan_2",
            "C.pilihan_3",
            "C.pilihan_4",
            "C.pilihan_5",            
            "TRIM(UPPER(C.jawaban_pilihan)) AS jawaban_benar",
            "TRIM(E.jawaban) AS jawaban_siswa",
            "E.koreksi"
        ), 
        array("C.id_head" => $data_head[0]["id_soal_head"], "C.tipe_soal" => 1),  
        array(), 0, 0, " C.no ", " 1 " .
        ($id_sekolah>0?" AND B.id_sekolah='$id_sekolah'":"") .
        ($id_jurusan>0?" AND B.id_jurusan='$id_jurusan'":"") .
        ($id_subjurusan>0?" AND B.id_subjurusan='$id_subjurusan'":"") .
        ($id_kelas>0?" AND B.id_kelas='$id_kelas'":"") .
        ($tipe_user=="G"?" AND A.id_pelajaran IN (SELECT id_pelajaran FROM guru_to_pelajaran WHERE id_guru='$id_tipe_user') ":"")    
    ); 
    
    $soal_essai = $db->getFieldValue(
            "soal_detail AS C LEFT JOIN (SELECT * FROM jawaban_soal_detail WHERE id_head='$id') AS E ON E.id_soal_detail=C.id LEFT JOIN soal_head AS A ON C.id_head=A.id LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", 
        array(
            "E.id",
            "C.pertanyaan",
            "C.no",
            "C.jawaban_essai AS jawaban_benar",
            "E.jawaban AS jawaban_siswa",
            "E.koreksi"
        ), 
        array("C.id_head" => $data_head[0]["id_soal_head"], "C.tipe_soal" => 2),  
        array(), 0, 0, " C.no ", " 1 " .
        ($id_sekolah>0?" AND B.id_sekolah='$id_sekolah'":"") .
        ($id_jurusan>0?" AND B.id_jurusan='$id_jurusan'":"") .
        ($id_subjurusan>0?" AND B.id_subjurusan='$id_subjurusan'":"") .
        ($id_kelas>0?" AND B.id_kelas='$id_kelas'":"") .
        ($tipe_user=="G"?" AND A.id_pelajaran IN (SELECT id_pelajaran FROM guru_to_pelajaran WHERE id_guru='$id_tipe_user') ":"")    
    ); 
    
    
    $smarty->assign('data_head', $data_head);    
    $smarty->assign('soal_pilihanganda', $soal_pilihanganda);
    $smarty->assign('soal_essai', $soal_essai);
    $smarty->assign("page_selected", "koreksi");
    $smarty->assign("sub_page_selected", "koreksi");
    $smarty->assign("title", "Koreksi");
    $smarty->assign("sub_title", "Koreksi Jawaban Siswa");
    
    $id_menu = 12; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/koreksi_siswa/edit.html");    