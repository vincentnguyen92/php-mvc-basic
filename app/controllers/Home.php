<?php

class Home extends Controller
{
    public function index($name = '')
    {
        var_dump(urldecode($name));die();
       $this->view('home/index', array('name' => $name));

        $user = User::find(1);

        $user->username = $name;
        $user->save();

    }

    public function create($username = '', $email = '')
    {
        $user = User::create([
            'username' => $username,
            'email' => $email
        ]);

        var_dump($user->id);
    }

}