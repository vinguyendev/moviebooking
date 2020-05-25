<?php

spl_autoload_register(function($className){
    require_once 'lib/' . $className . '.php';
});
include("../config/config.php");

$init = new CoreDefault();