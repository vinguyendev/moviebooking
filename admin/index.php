<?php

session_start();
define('MYSQL_HOST',"localhost");
define('MYSQL_USER',"root");
define('MYSQL_PW',"");
define('MYSQL_DB',"movie_booking");

include_once('../lib/Database.php') ;

$request = array_merge($_GET, $_POST);










