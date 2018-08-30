<?php
namespace Vincent\App\Controllers; //phpcs:ignore

use Vincent\Core\Controller;
use Vincent\App\Models\User;

/**
 * Home Controller
 * 
 * @category Application
 * @package  Vincent\App
 * @author   Vincent Nguyen <mr.vannguyen92@gmail.com>
 * @license  MIT license
 * @link     https://github.com/vincentnguyen92/php-mvc-basic/
 **/
class HomeController extends Controller
{
     /**
      * Index function catch URL default or home/index
      *
      * @param string $name dummy parameter
      *
      * @return void
      **/
    public function index($name = '')
    {
        $user = User::first();

        $this->view('home/index', array('user' => $user));
    }
}