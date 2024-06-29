<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('/', 'Berita::index');
$routes->get('/berita/preview/(:any)', 'Berita::preview/$1');

$routes->resource('api');
