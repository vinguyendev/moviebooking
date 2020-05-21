<?php

spl_autoload_register(function($className){
    require_once 'lib/' . $className . '.php';
});

$init = new Core();