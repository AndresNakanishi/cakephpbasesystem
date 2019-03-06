<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');


    Router::scope('/', function ($routes) {
        $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
        $routes->connect('blog', ['controller' => 'Pages', 'action' => 'blog']);
        $routes->connect('blog/c/*', ['controller' => 'Pages', 'action' => 'category']);
        $routes->connect('blog/*', ['controller' => 'Pages', 'action' => 'post']);
        // Auth
        $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
        $routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
        $routes->connect('/register', ['controller' => 'Users', 'action' => 'register']);
        $routes->connect('/recover-password', ['controller' => 'Users', 'action' => 'recoverPassword']);
        // Dashboard
        $routes->connect('/dashboard', ['controller' => 'Users', 'action' => 'dashboard']);
        $routes->fallbacks(DashedRoute::class);
    });
    
    $routes->fallbacks(DashedRoute::class);
});