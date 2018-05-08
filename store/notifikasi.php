<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();
    
    $tipe_user     = $_SESSION[ADMIN_SESSION_NAME]["user"]["tipe_user"];
    $id_tipe_user  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_tipe_user"];
    $id_sekolah    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_sekolah"];
    $id_jurusan    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_jurusan"];
    $id_subjurusan = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_subjurusan"];
    $id_kelas      = $_SESSION[ADMIN_SESSION_NAME]["user"]["id_kelas"];
    
    $is_ujian = false;
    if($tipe_user=="S") {
        
        //UJIAN YANG SEDANG BERLANGSUNG!
        $dataujian = $db->getFieldValue("soal_head AS A LEFT JOIN (SELECT B1.*, B2.nama AS nama_kelas, B2.id_subjurusan, B3.nama AS nama_subjurusan, B3.id_jurusan, B4.nama AS nama_jurusan, B4.id_sekolah, B5.nama_sekolah FROM mapel AS B1 LEFT JOIN kelas AS B2 ON B1.id_kelas=B2.id LEFT JOIN subjurusan AS B3 ON B2.id_subjurusan=B3.id LEFT JOIN jurusan AS B4 ON B3.id_jurusan=B4.id LEFT JOIN sekolah AS B5 ON B4.id_sekolah=B5.id) AS B ON A.id_pelajaran=B.id", array("A.*"), array(
            "B.id_sekolah" => $id_sekolah, 
            "B.id_jurusan" => $id_jurusan, 
            "B.id_subjurusan" => $id_subjurusan, 
            "B.id_kelas" => $id_kelas, 
            "A.publish" => 1
        ),
        array(), 0, 0, "", "A.tanggal_jam<=NOW() AND DATE_ADD(A.tanggal_jam, INTERVAL A.lama_waktu_pengerjaan MINUTE)>=NOW()");
        
        $is_ujian = count($dataujian)>0;
        if($is_ujian) {
            $sql = "SELECT COUNT(*) AS TOTAL FROM jawaban_soal_head WHERE id_soal_head='".$dataujian[0]["id"]."' AND id_siswa='".$_SESSION[ADMIN_SESSION_NAME]["user"]["id_tipe_user"]."'";
            //die($sql);
            $db->mysql_query($sql, $rec_count, $data);
            $is_ujian = $data[0]["TOTAL"]==0;        
        }
    }
        
    $db->mysql_close();
    $result = array(
        "success" => true,
        "is_ujian" => $is_ujian
    );
    
    die(json_encode($result));