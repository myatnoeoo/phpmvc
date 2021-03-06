<?php

// require '/path/to/vendor/autoload.php';
require_once './vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/user/index', 'homeController::index');
    $r->addRoute('GET', '/user/view/{id}', 'homeController::view');
    $r->addRoute('GET', '/user/edit/{id}', 'homeController::edit');
    $r->addRoute('POST', '/user/update/{id}', 'homeController::update');
    $r->addRoute('GET', '/user/create', 'homeController::create');
    $r->addRoute('POST', '/user/store', 'homeController::store');
    $r->addRoute('GET', '/user/delete/{id}', 'homeController::delete');

    $r->addRoute('GET', '/login', 'loginController::index');
    $r->addRoute('POST', '/login', 'loginController::login');
    $r->addRoute('GET', '/object/list', 'objectController::index');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
    print_r('404');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
    print_r('405');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = ($httpMethod == 'POST')? $_POST : $routeInfo[2];

        $controller = explode('::',$handler)[0];

        require_once "./app/controllers/$controller.php";

        $handler($vars);
        // ... call $handler with $vars
        
        break;
}