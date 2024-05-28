<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PantofiController::index');
$routes->get('/register', 'PantofiController::register');
$routes->post('/stocareuser', 'PantofiController::stocareuser');
$routes->get('/logout', 'PantofiController::logout');
$routes->get('/login', 'PantofiController::login');
$routes->post('/autentificare', 'PantofiController::autentificare');
$routes->get('/insert', 'PantofiController::insert');
$routes->post('/insertpantofi', 'PantofiController::insertpantofi');
$routes->post('/cautare', 'PantofiController::cautare');
$routes->get('/delete/(:num)', 'PantofiController::delete/$1');
$routes->get('/edit/(:num)', 'PantofiController::edit/$1');
$routes->post('/editpantofi/(:num)', 'PantofiController::editpantofi/$1');
$routes->get('/despre', 'PantofiController::despre');
