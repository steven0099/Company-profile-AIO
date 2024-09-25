<?php
// Landing page
$routes->get('/', 'Home::index');

// Admin panel
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/editCompany', 'Admin::editCompany');
$routes->post('/admin/updateCompany', 'Admin::updateCompany');
$routes->get('/admin/listTeam', 'Admin::listTeam');
$routes->get('/admin/addTeam', 'Admin::addTeam');
$routes->post('/admin/saveTeam', 'Admin::saveTeam');
$routes->get('/admin/deleteTeam/(:num)', 'Admin::deleteTeam/$1');
$routes->get('/admin/editContact', 'Admin::editContact');
$routes->post('/admin/updateContact', 'Admin::updateContact');
?>