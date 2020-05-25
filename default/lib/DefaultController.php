<?php

class DefaultController {
    public function model($model)
    {
        require_once '../admin/lib/Database.php';
        require_once '../admin/models/'.$model.'.php';

        //Instantiate model
        return new $model();
    }

    public function view($view, $data = [])
    {
        if (file_exists('views/' . $view . '.php')) {
            require_once ('views/'.$view.'.php');
        }
        else {
            die('View does not exists');
        }
    }
}