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
    
    $data = $db->getFieldValue(
        "siswa AS A LEFT JOIN subkelas AS B ON A.id_subkelas=B.id LEFT JOIN kelas AS C ON B.id_kelas=C.id LEFT JOIN subjurusan AS D ON C.id_subjurusan=D.id LEFT JOIN jurusan AS E ON D.id_jurusan=E.id LEFT JOIN sekolah AS F ON E.id_sekolah=F.id LEFT JOIN admin_users AS G ON A.id_user_login=G.id", 
        array(
            "A.id",
            "A.nim",
            "A.nama",
            "A.jenis_kelamin",
            "DATE_FORMAT(A.tanggal_lahir, '%d-%m-%Y') AS tanggal_lahir",
            "A.no_hp",
            "A.email",
            "A.id_subkelas",
            "B.nama AS nama_subkelas",
            "B.id_kelas",
            "C.nama AS nama_kelas",
            "C.id_subjurusan",
            "D.nama AS nama_subjurusan",
            "D.id_jurusan",
            "E.nama AS nama_jurusan",
            "E.id_sekolah",
            "F.nama_sekolah",
            "G.username",
            "G.password"
            
        ), 
        array("A.id" => $_GET["id"])
    );
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();
    
    $data[0]["password"] = $mcrypt->decrypt($data[0]["password"]);
    $smarty->assign('isEdit', true);
    $smarty->assign('data', $data);
    $smarty->assign("menu", $menu);
    $smarty->assign("page_selected", "siswa");
    $smarty->assign("sub_page_selected", "siswa");
    $smarty->assign("title", "Siswa");
    $smarty->assign("sub_title", "Ubah Data Siswa");
    
    $id_menu = 9; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/siswa/edit.html");    