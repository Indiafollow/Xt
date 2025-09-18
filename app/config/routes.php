<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| Safe minimal routing for bootstrap
*/
$route['default_controller']   = 'health';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

/*
| Keep only essentials (optional). Add more later.
*/
$route['login']              = 'auth/login';
$route['admin']              = 'admin/login';
$route['tickets/(:num)']     = 'tickets/view/$1';
$route['(:any)_ipn']         = 'add_funds/$1/ipn/';
