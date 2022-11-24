<?php
require_once __DIR__ . '/vendor/autoload.php';
$router = new \Bramus\Router\Router();

$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include __DIR__ . "/app/view/404.php";
});
$router->get('/', function() {
    include __DIR__ . "/app/view/public/Home/index.php";
});

$router->run();