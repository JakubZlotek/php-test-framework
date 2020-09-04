<?php
@session_start();
    $host = $_SERVER['HTTP_HOST'] . "/";


    define("APP_DIR", $_SERVER['DOCUMENT_ROOT'] . $host);
    define("hostname", "localhost");
    define("user", "user");
    define("password", "password");
    define("dbname", "something");
    $conn = new mysqli(hostname, user, password, dbname);

    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }


?>