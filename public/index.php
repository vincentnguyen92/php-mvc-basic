<?php
//Error reporting
session_start();
error_reporting(E_ALL);
define('ROOT_DIR', __DIR__ . '/..//');
require ROOT_DIR . '/vendor/autoload.php';

$app = new \Vincent\Core\Init();
$app->run();