<?php
class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();

        if (!isset($_SESSION['user'])) {
            $url[0] = "Login";
            
        }else {
            if (!empty($url)) {
                if ($url[0] == "Login" && (empty($url[1]) || $url[1] != "logout")) {
                    $url[0] = "Home";
                }
                
            }
        }
        if (isset($url) && file_exists('../App/controllers/' . $url[0] . '.php')) {

            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../App/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        // var_dump($this->controller);
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // memanggil method didalam class atau diluar class

        // format dalam class 
        // call_user_func_array([nama_class, nama_method], parameter)

        // format luar class
        // call_user_func_array(function/method, parameter);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
