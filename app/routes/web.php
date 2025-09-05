<?php

use App\Controllers\TestController;
use Nucleus\Http\Response;

// Closure simple
$router->get('/', function () {
    return 'Hello world from Nucleus 🚀';
});

// Controller@method
$router->get('/home', [TestController::class, 'index']);
$router->get('/api', [TestController::class, 'api']);

$router->get('/json', function () {
    return Response::json(['message' => 'Hello JSON 🚀']);
});

$router->get('/text', function () {
    return 'Simple texte';
});