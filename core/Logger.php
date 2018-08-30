<?php
namespace Vincent\Core; // phpcs:ignore

/**
 * Enable debug when running
 *
 * @category Application
 * @package  Vincent\Core
 * @author   Vincent Nguyen <mr.vannguyen92@gmail.com>
 * @license  MIT license
 * @link     https://github.com/vincentnguyen92/php-mvc-basic/
 **/
class Logger
{
     /**
      * Init the application, call function core PHP for enable debug
      *
      * @return void
      **/
    public function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('log_errors', 1);
    }
}