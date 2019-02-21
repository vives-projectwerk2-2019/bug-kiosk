<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\User;

$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("GET '/' route");
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/register', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'register.phtml', $args);
});

$app->get('/login', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'login.phtml', $args);
});
