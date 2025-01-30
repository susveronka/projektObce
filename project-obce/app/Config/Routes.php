<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('popisOkresu(:num)', 'Main::popisOkresu/$1');

