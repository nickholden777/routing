<?php 

use vendor\Router;

require_once('../vendor/core/Loader.php');

$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);

$router = new Router;
$router->start();