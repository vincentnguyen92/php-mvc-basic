<?php
namespace Vincent\Core;

use Vincent\Core\App;
use Vincent\Core\Logger;

class Init
{
    public function run()
    {
        (new Logger);
        (new App);
    }
}