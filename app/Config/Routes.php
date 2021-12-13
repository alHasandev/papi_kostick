<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
  require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Router Aspect
$routes->get('/aspek', 'Aspect::index');
$routes->get('/aspek/create', 'Aspect::create');
$routes->post('/aspek/save', 'Aspect::save');
$routes->get('aspek/edit/(:num)', 'Aspect::edit/$1');
$routes->post('/aspek/update/(:num)', 'Aspect::update/$1');
$routes->post('/aspek/delete/(:num)', 'Aspect::delete/$1');

// Router Question
$routes->get('/soal', 'Question::index');
$routes->get('/soal/create', 'Question::create');
$routes->post('/soal/save', 'Question::save');
$routes->get('soal/edit/(:num)', 'Question::edit/$1');
$routes->post('/soal/update/(:num)', 'Question::update/$1');
$routes->post('/soal/delete/(:num)', 'Question::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
