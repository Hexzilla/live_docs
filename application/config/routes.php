<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['default_controller'] = 'dashboard/index';
$route['default_controller'] = 'home';
$route['login'] = 'session/login';
$route['logout'] = 'session/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
