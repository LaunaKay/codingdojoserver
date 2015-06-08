<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Products/get_products';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['add'] = 'Courses/add';
$route['addfailed'] = 'Courses/form_validation';
$route['getCourse/(:any)'] = 'Courses/get_course/$1';
$route['verifyDelete'] = 'Courses/destroyCourse';
$route['deleteCourse'] = 'Courses/deleteCourse';
$route['destroy'] = 'Courses/destroyCourse';