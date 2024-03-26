<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/post' => 'controllers/post.php',
    '/delete' => 'controllers/destroy.php',
    '/update' => 'controllers/update.php',
    '/show' => 'controllers/show.php',
    '/edit' => 'controllers/edit.php',
    '/register' => 'controllers/registration.php',
    '/signin' => 'controllers/signin.php',
    '/login' => 'login.php',
    '/logout' => 'logout.php',
    '/verify' => 'verify.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);