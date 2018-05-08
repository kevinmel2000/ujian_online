<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $_limit      = 10;
    $query       = mysql_escape_string(isset($_POST["query"])?$_POST["query"]:"");
    $sekolah     = isset($_POST["sekolah"])?$_POST["sekolah"]:"";
    $tingkat     = isset($_POST["tingkat"])?$_POST["tingkat"]:"";
    $kelas       = isset($_POST["kelas"])?$_POST["kelas"]:"";
    
    $sql = "SELECT A.id, B.kode, B.nama FROM guru_to_pelajaran AS A LEFT JOIN mapel AS B ON A.id_pelajaran=B.id WHERE A.id_sekolah='$sekolah' AND A.id_tingkat='$tingkat' AND A.id_kelas='$kelas' AND A.id_guru='".$_SESSION[ADMIN_SESSION_NAME]["user"]["id_tipe_user"]."'" . (strlen($query)>0?" AND (B.kode LIKE '%$query%' OR B.nama LIKE '%$query%')":"");
    $db->mysql_query($sql, $rs_num, $rs);
    foreach($rs as $key => $value) {
        $data[$key] = array(
            "display" => $value["kode"] . " - " . $value["nama"],
            "value" => $value["nama"],
            "data" => $value
        ); 
    }
    
    $db->mysql_close();
    die(json_encode($data));