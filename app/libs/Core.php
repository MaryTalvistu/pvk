<?php


class Core
{ // class begin
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];
    // constructor

    // get url data
    public function __construct()
    {
        $url = $this->geturl();
        $controllerName = ucwords($url[0]);
        $controllerFile = '../app/controllers/'.$controllerName.'php';
        if(file_exists($controllerFile)) {
            $this->currentController = $controllerName;
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->currentController.'.php';
       $this->currentController = new $this->currentController;
        print_r($this->currentController);
        print_r($url);
    }

    public function geturl(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = htmlentities($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            print_r($url);
            return $url;
        }
    }
} // class end