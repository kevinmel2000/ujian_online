<?php
    $akses = $db->getFieldValue("user_menu_akses", array("*"), array("id_menu" => $id_menu, "id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]), array(), 0, 0, "", isset($aksi)?"akses LIKE '%$aksi%'":"");
    if(!$bypass && count($akses)==0) {
        $db->mysql_close();
        unset($_SESSION[ADMIN_SESSION_NAME]);
        header("location: ".ADMINWEB_URL);
        die();
    }
    $array_akses = array(); 
    for($i=0; $i<strlen($akses[0]["akses"]); $i++) {
        array_push($array_akses, $akses[0]["akses"][$i]);
    }
    $smarty->assign("array_akses", $array_akses);
    
    //MENU
    $listmenu = array();
    
    $sql = "SELECT * FROM ((SELECT A.* FROM menu AS A WHERE A.parent_id=0 AND A.is_menu='N') UNION ALL (SELECT B.* FROM user_menu_akses AS A LEFT JOIN menu AS B ON A.id_menu=B.id WHERE B.aktif=1 AND A.id_user=".$_SESSION[ADMIN_SESSION_NAME]["user"]["id"]." AND B.parent_id=0)) AS T ORDER BY T.no_urut";
    $db->mysql_query($sql, $rec_count, $menu);
    
    foreach ($menu as $key => $value) {
        $menu[$key]["submenu"] = $db->getFieldValue("user_menu_akses AS A LEFT JOIN menu AS B ON A.id_menu=B.id", array("B.*"), array("B.aktif" => 1, "A.id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"], "B.parent_id" => $value["id"]));
        if($value["is_menu"]=="Y" OR count($menu[$key]["submenu"])>0) {  $listmenu[count($listmenu)] = $menu[$key]; }
    }
    //print_r($listmenu);
    $smarty->assign("listmenu", $listmenu);    