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
        require_once '../app/views/' . $view . '.php';
    }
}