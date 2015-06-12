<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'ProductsC/get_all_products';
$route['all_products'] = 'ProductsC/load_all_products';
$route['new'] = 'ProductsC/load_new';
$route['remove_product/(:any)'] = 'ProductsC/remove_product/$1';
$route['successful_remove'] = 'ProductsC/successful_remove';
$route['successful_add'] = 'ProductsC/successful_add';
$route['successful_update'] = 'ProductsC/successful_update';
$route['display_product/(:any)'] = 'ProductsC/display_product/$1';
$route['edit_product/(:any)'] = 'ProductsC/edit_product/$1';
$route['show'] = 'ProductsC/show';
$route['edit'] = 'ProductsC/load_edit';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;