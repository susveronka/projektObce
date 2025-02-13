<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::kraj');
$routes->get('kraj', 'Main::kraj');
$routes->get('popisOkresu/(:num)', 'Main::popisOkresu/$1');

