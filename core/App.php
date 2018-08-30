<?php
namespace Vincent\Core;

use Vincent\Core\Database;

class App
{
    protected $url = array();
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();

    public function __construct()
    {
        (new Database);
        $this->parseUrl();
        $this->loadController();
        $this->loadMethod();
        $this->loadParams();

        // Run...
        call_user_func_array(
            array(
                $this->controller, 
                $this->method
            ), 
            $this->decodeURLArray($this->params) // return params to original
        );
    }

    /**
     *
     *
     *
     **/
    private function loadController()
    {
        if (file_exists('../app/controllers/' . $this->url[0] . '.php')) {
            $this->controller = $this->url[0];
            unset($this->url[0]);
        }
        $path = '\Vincent\App\Controllers' . '\\' . $this->controller;

        $this->controller = new $path;
    }

    /**
     *
     *
     *
     **/
    private function loadMethod()
    {
        if (isset($this->url[1])) {
            if (method_exists($this->controller, $this->url[1])) {
                $this->method = $this->url[1];
                unset($this->url[1]);
            }
        }
    }

    /**
     *
     *
     *
     **/
    private function loadParams()
    {
        $this->params = $this->url ? array_values($this->url) : array();
    }

    /**
     *
     *
     *
     **/
    private function decodeURLArray($data)
    {
        if ($data) {
            foreach ($data as &$d) {
                $d = urldecode($d);
            }
        }
        return $data;
    }

     /**
     *
     *
     *
     **/
    private function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = str_replace("%2F", "/", urlencode($_GET['url']));
            $this->url = explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
        }
    }
}