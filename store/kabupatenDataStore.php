<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $_limit      = 10;
    $query       = mysql_escape_string(isset($_POST["query"])?$_POST["query"]:"");
    $id_prop     = $_POST["prop"];
    
    $sql = "SELECT A.id, A.name FROM m_kabupaten AS A WHERE 1 " . (strlen($id_prop)>0?" AND A.propinsi_id='$id_prop'":"") . (strlen($query)>0?" AND (A.name LIKE '%$query%')":"");
    $db->mysql_query($sql, $rs_num, $rs);
    foreach($rs as $key => $value) {
        $data[$key] = array(
            "display" => $value["name"],
            "value" => $value["name"],
            "data" => $value
        ); 
    }
    
    $db->mysql_close();
    die(json_encode($data));