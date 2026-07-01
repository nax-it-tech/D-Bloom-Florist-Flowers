<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/tentang-kami', 'Pages::about');
$routes->get('/katalog', 'Pages::shop');
$routes->get('/custom-order', 'Pages::customOrder');
$routes->post('/custom-order', 'Pages::customOrderSubmit');
$routes->get('/gallery', 'Pages::gallery');
$routes->get('/testimoni', 'Pages::testimonials');
$routes->get('/kontak', 'Pages::contact');
$routes->post('/kontak', 'Pages::contactSubmit');
$routes->get('/blog', 'Pages::blog');
$routes->get('/blog/(:segment)', 'Pages::blogPost/$1');
