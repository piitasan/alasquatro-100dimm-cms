<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/collection', 'Home::collection');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/privacy', 'Home::privacy');
$routes->get('/signup', 'Home::signup');
$routes->get('/signin', 'Home::signin');