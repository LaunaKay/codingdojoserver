<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//DEFAULT ROUTE
$route['default_controller'] = 'C_Logins/Load_Login';

//MAIN PAGE
$route['main'] = 'C_Books/Load_Login';
$route['books'] = 'C_Books/Load_Books';
$route['book'] = 'C_Books/Load_Book';
$route['add'] = 'C_Books/Load_Add';
$route['user'] = 'C_Books/Load_User';
$route['addbook'] = 'C_Books/addBook';



//CI ROUTES
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
