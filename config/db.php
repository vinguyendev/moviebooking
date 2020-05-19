<?php
    session_start();
    define('MYSQL_HOST',"localhost");
    define('MYSQL_USER',"root");
    define('MYSQL_PW',"");
    define('MYSQL_DB',"movie_booking");

    $db = mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW,MYSQL_DB);

    if($db->connect_errno) {
        $db = (new Database())->conn;
    }
