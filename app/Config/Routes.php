<?php
// Landing page
$routes->get('/', 'Home::index');

$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/loginSubmit', 'Auth::loginSubmit');
$routes->get('/auth/logout', 'Auth::logout');

// Admin panel
$routes->get('/admin', 'Admin::index', ['filter' => 'auth']);
$routes->get('/admin/editCompany', 'Admin::editCompany');
$routes->post('/admin/updateCompany', 'Admin::updateCompany');
$routes->get('/admin/listTeam', 'Admin::listTeam');
$routes->get('/admin/addTeam', 'Admin::addTeam');
$routes->post('/admin/saveTeam', 'Admin::saveTeam');
$routes->get('/admin/editTeam/(:num)', 'Admin::editTeam/$1');
$routes->post('/admin/updateTeam/(:num)', 'Admin::updateTeam/$1');
$routes->get('/admin/deleteTeam/(:num)', 'Admin::deleteTeam/$1');
$routes->get('/admin/editContact', 'Admin::editContact');
$routes->post('/admin/updateContact', 'Admin::updateContact');
$routes->get('/admin/addHeroSlide', 'Admin::addHeroSlide');
$routes->post('/admin/saveHeroSlide', 'Admin::saveHeroSlide');
$routes->get('/admin/listHeroSlides', 'Admin::listHeroSlides');
$routes->get('/admin/deleteHeroSlide/(:num)', 'Admin::deleteHeroSlide/$1');
?>