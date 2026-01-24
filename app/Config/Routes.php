<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('celulares', 'Home::celulares');
$routes->get('pcs', 'Home::pcs');
$routes->get('consolas', 'Home::consolas');
$routes->get('desarrollo', 'Home::desarrollo');
$routes->get('piezas', 'Home::piezas');
$routes->get('youtube', 'Home::youtube');