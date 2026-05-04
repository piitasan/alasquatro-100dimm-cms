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

$routes->get('/admin', 'Admin::auth');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->post('/admin/login', 'Admin::login');
$routes->get('/admin/video', 'Admin::heroVideo');
$routes->post('/admin/video', 'Admin::updateHeroVideo');

$routes->get('/media/hero-video/(:segment)', 'Media::heroVideo/$1');