<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//DEFAULT ROUTE
$route['default_controller'] = 'C_Logins/Load_Login';

//MAIN PAGE
$route['dashboard'] = 'C_Dashboards/Load_Dashboard';
$route['main'] = 'C_Logins/Load_Login';
$route['addTask'] = 'C_Dashboards/addTask';
$route['deleteTask/(:num)'] = 'C_Dashboards/deleteTask/$1';
$route['edit/(:num)'] = 'C_Dashboards/edit/$1';
$route['editTask'] = 'C_Dashboards/editTask';
$route['logout'] = 'C_Logins/logout';

//ANCILLARY PAGES
$route['wish_items/(:num)'] = 'C_Dashboards/load_item/$1';
$route['wish_items/create'] = 'C_Wishes/load_create';
$route['invalid'] = 'C_Logins/Invalid_User';

$route['remove/(:num)'] = 'C_Wishes/removewish/$1';
$route['addtolist/(:num)'] = 'C_Wishes/addtolist/$1';
$route['removefromlist/(:num)'] = 'C_Wishes/removefromlist/$1';

//CI ROUTES
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
