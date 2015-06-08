<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'LoginC/load_login';
$route['welcome'] = 'LoginC/load_welcome';




//=================================================
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;