<?php
namespace Vincent\Core;

class Controller
{
    /**
     * Return view template when func call view methods
     *
     * @param string $view
     * @param array $data
     *
     * @return view
     **/
    public function view($view, $data = array())
    {
        // if ($data) {
        //     foreach ($data as &$d) {
        //         $d = urldecode($d);
        //     }
        // }
        // echo "<pre>";
        // var_dump($data);die();
        require_once '../app/views/' . $view . '.php';
    }
}