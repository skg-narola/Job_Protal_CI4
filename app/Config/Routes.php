<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/job', 'Job::index');
$routes->post('/addJob', 'Job::addJob');
$routes->get('/list', 'Job::listjob');

