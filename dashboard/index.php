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
    $smarty->assign("page_selected", "dashboard");
    $smarty->assign("sub_page_selected", "dashboard");    
    $smarty->assign("title", "Aplikasi Sekolah");
    $smarty->assign("sub_title", "Halaman Depan");
    
    $tipe_user     = $_SESSION[ADMIN_SESSION_NAME]["user"]["tipe_user"];
    $id_tipe_user  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_tipe_user"];
    $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"]==0?'':$_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
    $id_jurusan    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"]==0?'':$_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
    $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"]==0?'':$_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
    $id_kelas      = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"]==0?'':$_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"];
    include $root."includes/php/cekujianberlangsung.php";
    
    $data_jumlah_sekolah = $db->getFieldValue("sekolah", array("COUNT(*) AS TOTAL"));
    $smarty->assign("total_sekolah", $data_jumlah_sekolah);
    
    if($tipe_user=="S") {
        /*$data_jumlah_guru = $db->getFieldValue(
            "(SELECT F1.*, F2.id_kelas FROM guru_to_pelajaran AS F1 LEFT JOIN mapel AS F2 ON F2.id=F1.id_pelajaran GROUP BY F1.id_guru) AS F LEFT JOIN guru AS A ON F.id_guru=A.id LEFT JOIN subjurusan AS B ON A.id_subjurusan=B.id LEFT JOIN jurusan AS C ON B.id_jurusan=C.id LEFT JOIN sekolah AS D ON C.id_sekolah=D.id", 
            array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . 
            (strlen($id_sekolah)>0?" AND C.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND B.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND A.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND F.id_kelas='$id_kelas' ":"")
        );*/
        $sql = "SELECT COUNT(*) AS TOTAL FROM (SELECT * FROM (SELECT D.nama AS nama_kelas, E.nama AS nama_subjurusan, F.nama AS nama_jurusan, G.nama_sekolah, B.* FROM guru_to_pelajaran AS A LEFT JOIN guru AS B ON A.id_guru=B.id LEFT JOIN mapel AS C ON A.id_pelajaran=C.id LEFT JOIN kelas AS D ON C.id_kelas=D.id LEFT JOIN subjurusan AS E ON D.id_subjurusan=E.id LEFT JOIN jurusan AS F ON E.id_jurusan=F.id LEFT JOIN sekolah AS G ON F.id_sekolah=G.id WHERE 1 " .
                (strlen($query)>0?" AND (B.nik LIKE '%$query%' OR B.nama LIKE '%$query%' OR B.no_hp LIKE '%$query%' OR B.email LIKE '%$query%')":"") . 
                (strlen($id_sekolah)>0?" AND F.id_sekolah='$id_sekolah' ":"") . 
                (strlen($id_jurusan)>0?" AND E.id_jurusan='$id_jurusan' ":"") . 
                (strlen($id_kelas)>0?" AND D.id_subjurusan='$id_subjurusan' ":"") . 
                (strlen($id_kelas)>0?" AND C.id_kelas='$id_kelas' ":""). ") AS T GROUP BY id) AS TT";
        $db->mysql_query($sql, $rec_count, $data_jumlah_guru);
    } else {
        $data_jumlah_guru = $db->getFieldValue("guru AS A LEFT JOIN subjurusan AS B ON A.id_subjurusan=B.id LEFT JOIN jurusan AS C ON B.id_jurusan=C.id LEFT JOIN sekolah AS D ON C.id_sekolah=D.id", array("COUNT(*) AS TOTAL"), array(), array(), 0, 0, "", " 1 " . 
            (strlen($id_sekolah)>0?" AND C.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND B.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND A.id_subjurusan='$id_subjurusan' ":"")
        );
    }
    $smarty->assign("total_guru", $data_jumlah_guru);
    
    $data_jumlah_siswa = $db->getFieldValue("siswa AS A LEFT JOIN subkelas AS B ON A.id_subkelas=B.id LEFT JOIN kelas AS C ON B.id_kelas=C.id LEFT JOIN subjurusan AS D ON C.id_subjurusan=D.id LEFT JOIN jurusan AS E ON D.id_jurusan=E.id LEFT JOIN sekolah AS F ON E.id_sekolah=F.id", array("COUNT(*) AS TOTAL"), array(), array(), 0, 0, "", " 1 " . 
        (strlen($id_sekolah)>0?" AND E.id_sekolah='$id_sekolah' ":"") . 
        (strlen($id_jurusan)>0?" AND D.id_jurusan='$id_jurusan' ":"") . 
        (strlen($id_subjurusan)>0?" AND C.id_subjurusan='$id_subjurusan' ":"") . 
        (strlen($id_kelas)>0?" AND B.id_kelas='$id_kelas' ":"")
    );
    $smarty->assign("total_siswa", $data_jumlah_siswa);
    
    if($tipe_user=="A" || $tipe_user=="S") {
        $data_jumlah_pelajaran = $db->getFieldValue(
            "mapel AS A LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array("COUNT(*) AS TOTAL"), array(), array(), 0, 0, "", " 1 " . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    } else if($tipe_user=="G") {
        $data_jumlah_pelajaran = $db->getFieldValue(
            "guru_to_pelajaran AS F LEFT JOIN mapel AS A ON F.id_pelajaran=A.id LEFT JOIN kelas AS B ON A.id_kelas=B.id LEFT JOIN subjurusan AS C ON B.id_subjurusan=C.id LEFT JOIN jurusan AS D ON C.id_jurusan=D.id LEFT JOIN sekolah AS E ON D.id_sekolah=E.id", 
            array("COUNT(*) AS TOTAL"), array("F.id_guru" => $id_tipe_user), array(), 0, 0, "", " 1 " . 
            (strlen($id_sekolah)>0?" AND D.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND C.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND A.id_kelas='$id_kelas' ":"")
        );
    }
    
    $smarty->assign("total_pelajaran", $data_jumlah_pelajaran);
    
    $data_jumlah_soal = $db->getFieldValue("soal_detail AS A LEFT JOIN soal_head AS B ON B.id=A.id_head LEFT JOIN mapel AS C ON B.id_pelajaran=C.id LEFT JOIN kelas AS D ON C.id_kelas=D.id LEFT JOIN subjurusan AS E ON D.id_subjurusan=E.id LEFT JOIN jurusan AS F ON E.id_jurusan=F.id LEFT JOIN sekolah AS G ON F.id_sekolah=G.id", array("COUNT(*) AS TOTAL"), 
            (strlen($id_sekolah)>0?" AND F.id_sekolah='$id_sekolah' ":"") . 
            (strlen($id_jurusan)>0?" AND E.id_jurusan='$id_jurusan' ":"") . 
            (strlen($id_subjurusan)>0?" AND D.id_subjurusan='$id_subjurusan' ":"") . 
            (strlen($id_kelas)>0?" AND C.id_kelas='$id_kelas' ":"")
        );        
    $smarty->assign("total_soal", $data_jumlah_soal);
    
    //JADWAL UJIAN
    $jadwalujian = $db->getFieldValue(
            "soal_head AS A LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id LEFT JOIN (SELECT id_head, COUNT(*) AS jumlah_soal FROM soal_detail GROUP BY id_head) AS C ON C.id_head=A.id",
        array(
            "A.id",
            "B.nama_sekolah",
            "B.nama_jurusan",
            "B.nama_subjurusan",
            "B.nama_kelas",
            "B.nama AS nama_pelajaran",
            "A.kode_soal",
            "A.nama_soal",
            "A.keterangan",
            "DATE_FORMAT(A.tanggal_jam, '%d-%m-%Y') AS tanggal_ujian",
            "DATE_FORMAT(A.tanggal_jam, '%H:%i') AS jam_ujian",
            "A.lama_waktu_pengerjaan",            
            "A.publish",
            "IF(A.tanggal_jam>NOW(), 2, IF(DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE)>=NOW(), 3,  1)) AS status"
            
        ), 
        array("A.publish" => 1),  
        array(), 50, 0, " A.tanggal_jam DESC ", " 1 " .
        (strlen($id_sekolah)>0?" AND B.id_sekolah='$id_sekolah' ":"") . 
        (strlen($id_jurusan)>0?" AND B.id_jurusan='$id_jurusan' ":"") . 
        (strlen($id_subjurusan)>0?" AND B.id_subjurusan='$id_subjurusan' ":"") . 
        (strlen($id_kelas)>0?" AND B.id_kelas='$id_kelas' ":"")
    ); 
    $smarty->assign("jadwalujian", $jadwalujian);
    
    $id_menu = 1;
    include $root."includes/php/notification.php";
    
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/dashboard.html");    