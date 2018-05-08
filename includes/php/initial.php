<?php
    $ip = $_SERVER['SERVER_NAME'];
    session_start();
    error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
    
    // SET TIMEZONE
    date_default_timezone_set("Asia/Jakarta");
    
    define ("ROOT_PATH", realpath($root));
    define ("HOME_URL", "http://".$ip."/ujian_online");
    define ("ADMINWEB_URL", "http://".$ip."/ujian_online");
    define ("SMARTY_DIR", $root."includes/Smarty-3.1.21/libs/");
        
    //BACKEND TEMPLATE
    define ("BACK_END_TEMPLATE", "back-end/AdminLTE-2.3.6");
    define ("BACK_END_TEMPLATE_PATH", $root."templates/".BACK_END_TEMPLATE);
    define ("BACK_END_TEMPLATE_INCLUDE_PATH", ROOT_PATH."/templates/".BACK_END_TEMPLATE);    
    
    //DATABASE CONFIG VARIABLE
    define("ADMIN_SESSION_NAME", "PELPEL_ADMIN");
    define("CLIENT_SESSION_NAME", "PELPEL_CLIENT");
    define("DB_HOST", "127.0.0.1:3306");
    define("DB_USER", "root");
    define("DB_PASSWORD", "qwe123");
    define("DB_DATABASE", "ujian_online");