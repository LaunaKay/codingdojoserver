<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Logins/Load_Login';
$route['dashboard'] = 'C_Dashboards/Load_Dashboard';
$route['main'] = 'C_Logins/Load_Login';
$route['wish_items/(:num)'] = 'C_Dashboards/load_item/$1';
$route['wish_items/create'] = 'C_Wishes/load_create';
$route['invalid'] = 'C_Logins/Invalid_User';
$route['logout'] = 'C_Logins/logout';
$route['remove/(:num)'] = 'C_Wishes/removewish/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
