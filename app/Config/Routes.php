<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index',['filter'=>'session']);
//$routes->get('/teste', 'Teste::index', ['filter'=>'session']);
//$routes->get('/login', 'Login::index');

service('auth')->routes($routes);
