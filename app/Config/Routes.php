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
// $routes->get('/', 'Home::index');
// $routes->get('/login', 'Login::index');
// $routes->post('/operator/auth', 'Operator::auth');
// $routes->post('/operator/register', 'Operator::register');
// $routes->get('/logout', 'Login::logout');

// Route Home
$routes->get('/home', 'Home::index');
$routes->add('/logoAppEdit/(:num)/edit', 'Home::logoAppEdit/$1');
$routes->add('/logoRuangdengarEdit/(:num)/edit', 'Home::logoRuangdengarEdit/$1');
$routes->add('/logoHomescreenEdit/(:num)/edit', 'Home::logoHomescreenEdit/$1');
$routes->add('/flayerDefaultsiaranEdit/(:num)/edit', 'Home::flayerDefaultsiaranEdit/$1');
$routes->add('/streamEdit/(:num)/edit', 'Home::streamEdit/$1');
$routes->add('/livechatEdit/(:num)/edit', 'Home::livechatEdit/$1');
$routes->add('/whatsappEdit/(:num)/edit', 'Home::whatsappEdit/$1');

// Route Penyiar
$routes->get('/penyiar', 'Penyiar::index');
$routes->delete('/penyiar/(:num)', 'Penyiar::delete/$1');
$routes->add('/penyiar/(:num)/edit', 'Penyiar::edit/$1');

// Route Acara
$routes->get('/acara', 'Acara::index');
$routes->post('/acara', 'Acara::add');
$routes->add('/acara/(:num)/edit', 'Acara::edit/$1');

// Rpute Endorsement
$routes->get('/endorsement', 'Endorsement::index');
$routes->post('/endorsement', 'Endorsement::add');
$routes->add('/endorsement/(:num)/edit', 'Endorsement::edit/$1');






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
