<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * -------------------------------------------------------------------
 * URI ROUTING
 * -------------------------------------------------------------------
 * Here is where you can register web routes for your application.
 */

// Home page route - Redirects to login page by default
// Home page route
$router->get('/', 'Auth::login');

// Home routes
$router->get('/home', 'Home::index');
$router->get('/register_diver', 'Home::register');
$router->get('/pdf_success', 'Home::pdf_success');
$router->get('/download_pdf', 'Home::download_pdf');

// Auth routes
$router->group('/auth', function() use ($router) {
    $router->match('/register', 'Auth::register', ['POST', 'GET']);
    $router->match('/login', 'Auth::login', ['POST', 'GET']);
    $router->get('/logout', 'Auth::logout');
    $router->match('/password-reset', 'Auth::password_reset', ['POST', 'GET']);
    $router->match('/set-new-password', 'Auth::set_new_password', ['POST', 'GET']);
});

// Terms and conditions route
$router->get('/terms-and-conditions', 'Home::terms');

// Diver Registration Route (POST)
$router->match('/register_diver', 'Home::register', ['POST']); // Used when the form is submitted

// PDF Success Route
$router->get('/pdf_success', 'Home::pdf_success', ['POST', 'GET']);

// Download PDF route (to download PDF after registration)
$router->get('/download_pdf', 'Home::download_pdf');
$router->match('/updateUserRole', 'Admin:updateUserRole',  ['POST', 'GET']);
// Admin routes
$router->group('/admin', function() use ($router) {
    $router->get('/dashboard', 'Admin::dashboard');
    $router->get('/divers', 'Admin::divers');
    $router->get('/users', 'Admin::users');
    $router->post('/updateUserRole', 'Admin::updateUserRole');
});

