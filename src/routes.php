<?php

use App\Models\User;
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function (Request $request, Response $response, array $args) {
    return $response->withRedirect('/index', $status = null);
});

$app->get('/index', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->post('/login', function (Request $request, Response $response, array $args) {
    $user = new User();

    if ($user->checkIfValidEmail($request->getParam('email')) ) {
        $user->email = $request->getParam('email');
    }else{
        return $this->renderer->render($response, 'register.phtml', $args);
    }

    if(!$request->getParam('password') == null && !$request->getParam('confirmpassword') == null) {
        $user->password = $user->checkIfValidPassword($request->getParam('password'), $request->getParam('confirmpassword'));
    }else{
        return $this->renderer->render($response, 'register.phtml', $args);}
  
    $user->lastname = $request->getParam('last_name');
    $user->firstname = $request->getParam('first_name');

    $user->save();

    return $this->renderer->render($response, 'login.phtml', $args);
});

$app->post('/home', function (Request $request, Response $response, array $args) {

    $loginUser = User::where('email', '=', $request->getParam('email'))->first();
    if (password_verify($request->getParam('password'), $loginUser->password)) {
        $args['email'] = $request->getParam('email');
        $args['firstname'] = $loginUser->firstname;
        return $this->renderer->render($response, 'home.phtml', $args);
    } else {
        return $this->renderer->render($response, 'index.phtml', $args);
    }  
});

$app->get('/login', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'login.phtml', $args);
});

$app->get('/register', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'register.phtml', $args);
});

$app->get('/home', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'home.phtml', $args);
});


