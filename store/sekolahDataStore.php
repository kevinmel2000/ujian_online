<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $_limit      = 10;
    $query       = mysql_escape_string(isset($_POST["query"])?$_POST["query"]:"");
    
    $sql = "SELECT A.id, A.kode_sekolah, A.nama_sekolah FROM sekolah AS A WHERE 1 " . (strlen($query)>0?" AND (A.kode_sekolah LIKE '%$query%' OR A.nama_sekolah LIKE '%$query%')":"");
    $db->mysql_query($sql, $rs_num, $rs);
    foreach($rs as $key => $value) {
        $data[$key] = array(
            "display" => $value["nama_sekolah"],
            "value" => $value["nama_sekolah"],
            "data" => $value
        ); 
    }
    
    $db->mysql_close();
    die(json_encode($data));