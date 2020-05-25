<?php

class CoreDefault {

    protected $controller = 'MovieController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if ($url[0] != 'movies' && $url[0] != 'customer') {

            require_once 'controllers/MovieController.php';

            $this->controller = new $this->controller;

            $this->method = 'detail';

            $this->params = [
                'slug'=>$url[0]
            ];

            call_user_func_array([$this->controller, $this->method], $this->params);
        }
        else {
            var_dump('not oke');
        }
        die();
    }

    public function  getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }

}