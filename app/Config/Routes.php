<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');
$routes->post('/api/submit-feedback', 'LandingController::submitFeedback');

//login page routes
$routes->get('/login', 'LoginController::index');
$routes->get('/register', 'LoginController::register');
$routes->get('/forget-password', 'LoginController::forgetPassword');
$routes->post('api/login-user','LoginController::validateUser');

$routes->get('/dashboard', 'LoginController::dashboard');


$routes->get('/sendMail', 'SendEmail::index');


//dashboard
$routes->get('/apis', 'DashboardController::index');

// Chat APIT

$routes->post('/api/getResponse', 'ChatController::sendResponse');




//user API ROUTES

$routes->post('/user-api/verify', 'ApiController::verifyApi');

$routes->post('/user-api/getResponse', 'ApiController::getResponse');