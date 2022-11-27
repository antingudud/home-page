<?php
require_once __DIR__ . '/vendor/autoload.php';
use Josantonius\Session\Session as Session;
$session = new Session;
$session::init(3600);
$session::set('username', 'Guest');
$router = new \Bramus\Router\Router();

$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include __DIR__ . "/app/view/404.php";
});
$router->get('/', function() {
    include __DIR__ . "/app/view/public/Home/index.php";
});
$router->get('/blog', function() {
    include __DIR__ . "/app/view/public/Blog/index.php";
});

$router->run();