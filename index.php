<?php

require './MockRouter.php';
require './Request.php';
require './Middleware.php';
require './Controller.php';
require './Application.php';
require './UserController.php';

$containerWithPriority = [
    Request::class,
    Middleware::class,
    Controller::class,
];

app()->queueWorker($containerWithPriority);


mock();

dd("ending");

function mock() {

    $router = new MockRouter();
    $router->get('test', UserController::class, 'mockIndex');
}


function dd(...$args) {
    echo "<pre>";
    foreach ($args as $arg) {
        print_r($arg);
        echo "<hr>";
    }

    die();
}

function app(): Application {
    return Application::getInstance();
}
