<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::ZK');
$routes->get('ZK', 'Main::ZK');
$routes->get('popisOkresu(:num)', 'Main::popisOkresu/$1');

