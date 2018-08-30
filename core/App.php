<?php
namespace Vincent\Core;

use Vincent\Core\Database;

/**
 * The Main application running MVC Basic
 * 
 * @category Application
 * @package  Vincent\Core
 * @author   Vincent Nguyen <mr.vannguyen92@gmail.com>
 * @license  MIT license
 * @link     https://github.com/vincentnguyen92/php-mvc-basic/
 **/
class App
{
    protected $url = array();
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();

     /**
      * Init the application
      *
      * @return void
      **/
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
      * Get the controller from URL Array
      *
      * @return Vincent\App\Controller
      **/
    protected function loadController()
    {
        if (file_exists('../app/controllers/' . $this->url[0] . 'Controller.php')) {
            $this->controller = $this->url[0];
            unset($this->url[0]);
        }
        $path = '\Vincent\App\Controllers' . '\\' . $this->controller . 'Controller';

        $this->controller = new $path;
    }

     /**
      * Get the method from URL Array
      *
      * @return void
      **/
    protected function loadMethod()
    {
        if (isset($this->url[1])) {
            if (method_exists($this->controller, $this->url[1])) {
                $this->method = $this->url[1];
                unset($this->url[1]);
            }
        }
    }

     /**
      * Get the params from URL Array
      *
      * @return void
      **/
    protected function loadParams()
    {
        $this->params = $this->url ? array_values($this->url) : array();
    }

     /**
      * Decode back to original
      *
      * @param array $data The params from request after detected
      *
      * @return void
      **/
    protected function decodeURLArray($data = array())
    {
        if ($data) {
            foreach ($data as &$d) {
                $d = urldecode($d);
            }
        }
        return $data;
    }

     /**
      * Encode and convert url string to array
      *
      * @return void
      **/
    protected function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = str_replace("%2F", "/", urlencode($_GET['url']));
            $this->url = explode(
                '/', 
                filter_var(trim($url, '/'), FILTER_SANITIZE_URL)
            );
        }
    }
}