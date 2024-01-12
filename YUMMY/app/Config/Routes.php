<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'login', 'Home::login');
$routes->get('logout', 'Home::logout');
$routes->get('incele/(:segment)', 'Home::incele/$1');


$routes->get('panel', 'Panel::index');
$routes->match(['get', 'post'], 'kayit_ekle', 'Panel::kayit_ekle');
$routes->get('kayit_listele', 'Panel::kayit_listele');
$routes->get('kayit_sil/(:num)', 'Panel::kayit_sil/$1');
$routes->match(['get', 'post'], 'kayit_duzenle/(:num)', 'Panel::kayit_duzenle/$1');
