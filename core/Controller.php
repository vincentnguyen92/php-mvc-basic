<?php
namespace Vincent\Core; //phpcs:ignore

/**
 * The Controller Basic -  application running MVC Basic
 * 
 * @category Application
 * @package  Vincent\Core
 * @author   Vincent Nguyen <mr.vannguyen92@gmail.com>
 * @license  MIT license
 * @link     https://github.com/vincentnguyen92/php-mvc-basic/
 **/
class Controller
{
    /**
     * Return view template when func call view methods
     *
     * @param string $view view name
     * @param array  $data parameter passed from App
     *
     * @return view
     **/
    public function view($view, $data = array())
    {
        include_once '../app/views/' . $view . '.php';
    }
}