<?php

use Bramus\Router\Router;
use EzCode\Controllers\Admin\UserController;
use EzCode\Controllers\Admin\CourseController;
use EzCode\Controllers\Admin\CategoryController;
use EzCode\Controllers\Admin\LectureController;
use EzCode\Controllers\Admin\DashboardController;
use EzCode\Controllers\Client\HomeController;
use EzCode\Controllers\Client\AuthController;
use EzCode\Controllers\Client\DetailController;
use EzCode\Controllers\Client\LearningController;
use EzCode\Controllers\Client\ProfileController;
use EzCode\Controllers\Client\OrderController;

$router = new Router();
$router->get('/', HomeController::class . '@home');
$router->get('/detail/{course_code}', DetailController::class . '@detail');

$router->mount('/client', function () use ($router) {
    $router->get('/{course_code}/learning/{id}', LearningController::class . '@learning');
    $router->get('/profile', ProfileController::class . '@profile');
    $router->get('/logout', AuthController::class . '@logout');
    $router->get('{course_code}/payment', OrderController::class . '@payment');
    $router->get('/order', OrderController::class . '@order');
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

    $router->mount('/lectures', function () use ($router) {
        $router->get('/{id}/delete/{course_code}', LectureController::class . '@delete');
        $router->match('GET|POST', '/{id}/update/{course_code}', LectureController::class . '@update');
        $router->match('GET|POST', '/create/{course_code}', LectureController::class . '@create');
        $router->get('/{code_course}', LectureController::class . '@index');
    });

    $router->get('/dashboard', DashboardController::class . '@index');
});
$router->mount('/auth', function () use ($router) {
    $router->match('GET|POST', '/login', AuthController::class . '@login');
    $router->match('GET|POST', '/register', AuthController::class . '@register');

});

$router->before('GET|POST', '/client/*', function () {
    if (!isset($_SESSION['user'])) {
        header("Location:" . route('/auth/login'));
    }
});

$router->before('GET|POST', '/client/.*', function () {
    if (!isset($_SESSION['user'])) {
        header("Location:" . route('/auth/login'));
    }
});

$router->before('GET|POST', '/admin/*', function () {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 2) {
        die("404");
    }
});

$router->before('GET|POST', '/admin/.*', function () {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 2) {
        die("404");
    }
});
$router->run();

