<?php
@session_start();
    
    $host = "http://" . $_SERVER['HTTP_HOST'] . "/";
    $inc = "/Includes/";
    $img = "/Img/";
    $css = "/Styles/";
    $admin = "/Admin/";
    $serverside = "/ServerSide/";
    //$_SERVER['DOCUMENT_ROOT']

    define("hostname", "localhost");
    define("user", "root");
    define("password","");
    define("dbname", "testportal");
    define("APP_DIR", $host);
    define("APP_DIR_IMG", $host . $img);
    define("APP_DIR_INC", $host . $inc);
    define("APP_DIR_CSS", $host . $css);
    define("APP_DIR_ADM", $host . $admin);

    $conn = new mysqli(hostname, user, password, dbname);

    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }


?>
