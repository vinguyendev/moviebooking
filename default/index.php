<?php

spl_autoload_register(function($className){
    require_once 'lib/' . $className . '.php';
});
include("../config/config.php");
include ("../admin/lib/Session.php");
include ("../admin/lib/Database.php");

$init = new CoreDefault();