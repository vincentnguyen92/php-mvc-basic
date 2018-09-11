<?php
namespace Vincent\Core;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    public function __construct()
    {
        $capsule = new Capsule();

        $capsule->addConnection(
            include(ROOT_DIR . 'config/database.php')
        );

        $capsule->bootEloquent();
    }
}
