<?php
    $root = "";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    unset($_SESSION[ADMIN_SESSION_NAME]);
    header("location: ".ADMINWEB_URL);