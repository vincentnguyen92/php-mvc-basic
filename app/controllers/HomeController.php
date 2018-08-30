<?php
namespace Vincent\App\Controllers;

use Vincent\Core\Controller;
use Vincent\App\Models\User;

class HomeController extends Controller
{
    public function index($name = '')
    {
    	$user = User::first();

        $this->view('home/index', array('user' => $user));
    }

    public function test($name = '')
    {
    	echo "Hello TEST" . $name;
    }
}