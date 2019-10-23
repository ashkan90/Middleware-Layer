<?php


require './Request.php';
require './Middleware.php';
require './Controller.php';

$containerWithPriority = [
    Application::class,
    Middleware::class,
    Controller::class,
];


return $containerWithPriority;
