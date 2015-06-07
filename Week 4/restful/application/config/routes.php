<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//PAGE LOADS
$route['default_controller'] = 'products/load_products_view';
$route['show'] = 'products/load_show_view';
$route['edit'] = 'products/load_edit_view';
$route['new'] = 'products/load_new_view';
//=============================
//SUCCESS MESSAGES AND REDIRECTS
$route['products_success'] = 'products/products_success';
//==========================
//METHODS FOR QUERIES
$route['get_all_products'] = 'products/get_all_products';
//==================================
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;