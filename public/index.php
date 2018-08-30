<?php
//phpcs:ignore
//Error reporting
error_reporting(E_ALL);
define('ROOT_DIR', __DIR__ . '/..//');
require ROOT_DIR . '/vendor/autoload.php';

$app = new \Vincent\Core\Init();
$app->run();