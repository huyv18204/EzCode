<?php
use Bramus\Router\Router;
use EzCode\Controllers\Admin\UserController;
use EzCode\Controllers\Admin\CourseController;
use EzCode\Controllers\Admin\CategoryController;
use EzCode\Controllers\Client\HomeController;
use EzCode\Controllers\Client\AuthController;

$router = new Router();
$router->mount('/client', function () use ($router) {
    $router->get('/', HomeController::class . '@home');
});
$router->mount('/admin', function () use ($router) {
    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/{id}/update/{status}', UserController::class . '@update');
    });

    $router->mount('/categories', function () use ($router) {
        $router->get('/', CategoryController::class . '@index');
        $router->get('/{id}/delete', CategoryController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', CategoryController::class . '@update');
        $router->match('GET|POST', '/create', CategoryController::class . '@create');
    });

    $router->mount('/courses', function () use ($router) {
        $router->get('/', CourseController::class . '@index');
        $router->get('/{id}/delete', CourseController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', CourseController::class . '@update');
        $router->match('GET|POST', '/create', CourseController::class . '@create');
    });
});
$router->mount('/auth',function () use ($router){
    $router->match('GET|POST', '/login', AuthController::class . '@login');
    $router->match('GET|POST', '/register', AuthController::class . '@register');
});



$router->run();

