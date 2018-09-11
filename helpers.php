<?php
if (! function_exists('dd')) {
    function dd($data)
    {
        echo "<pre>";
        var_dump($data);
        die();
    }
}

if (! function_exists('constants')) {
    function constants($str)
    {
        $data = constant($str);

        if (@unserialize($data)) {
            return unserialize($data);
        } else {
            return $data;
        }
    }
}