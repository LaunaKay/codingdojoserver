<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Logins/Load_Login';
$route['display'] = 'C_Displays/Load_Display';
$route['alreadyregistered'] = 'C_Logins/Already_Registered';
$route['invalid'] = 'C_Logins/Invalid_User';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
