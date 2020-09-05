<?php
@session_start();
    $host = $_SERVER['HTTP_HOST'] . "/";
    $inc = "/Includes/";
    $serverside = "/Serverside/";
    //$_SERVER['DOCUMENT_ROOT']

    define("hostname", "localhost");
    define("user", "root");
    define("password","");
    define("dbname", "testportal");
    $conn = new mysqli(hostname, user, password, dbname);

    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }


?>
