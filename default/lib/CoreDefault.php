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

            if($url[1]!='login'){
                $session = new Session();
                $session->isLoginCustomer();
            }

            if($url[0]=='movies') $url[0] = 'MovieController';
            if($url[0]=='customer') $url[0] = 'CustomerController';

            if (file_exists('controllers/' . ucwords($url[0]) . '.php')) {
                $this->controller = ucwords($url[0]);
                unset($url[0]);
            }

            require_once 'controllers/'.$this->controller.'.php';
            $this->controller = new $this->controller;

            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->controller, $this->method], $this->params);
        }
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