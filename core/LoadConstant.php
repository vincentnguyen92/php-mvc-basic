<?php
namespace Vincent\Core;

class LoadConstant
{
    public static function load()
    {
        $constantsArr = include_once "../config/constants.php";

        foreach ($constantsArr as $key => $constant) {
            if (is_array($constant)) {
                define($key, serialize($constant));
            } else {
                define($key, $constant);
            }
        }
    }
}