<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/', 'Home::index');

// Auth routes
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/login', 'Auth::login');
$routes->post('auth/authenticate', 'Auth::authenticate');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/register', 'Auth::registerUser');

// Routes tanpa filter (sementara untuk testing)
$routes->get('dashboard', 'Dashboard::index');
$routes->get('about', 'Home::about');

// Product routes
$routes->get('products', 'ProductController::index');
$routes->get('products/create', 'ProductController::create');
$routes->post('products/store', 'ProductController::store');
$routes->get('products/edit/(:num)', 'ProductController::edit/$1');
$routes->post('products/update/(:num)', 'ProductController::update/$1');
$routes->get('products/delete/(:num)', 'ProductController::delete/$1');

// User routes
$routes->get('users', 'UserController::index');
$routes->get('users/create', 'UserController::create');
$routes->post('users/store', 'UserController::store');
$routes->get('users/edit/(:num)', 'UserController::edit/$1');
$routes->post('users/update/(:num)', 'UserController::update/$1');
$routes->get('users/delete/(:num)', 'UserController::delete/$1');

// API Routes
$routes->group('api', function($routes) {
    // Product API Routes
    $routes->get('products', 'Api\ApiController::getProducts');
    $routes->get('products/(:num)', 'Api\ApiController::getProduct/$1');
    $routes->post('products', 'Api\ApiController::createProduct');
    $routes->put('products/(:num)', 'Api\ApiController::updateProduct/$1');
    $routes->patch('products/(:num)', 'Api\ApiController::updateProduct/$1');
    $routes->delete('products/(:num)', 'Api\ApiController::deleteProduct/$1');
});