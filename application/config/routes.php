<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Login';

$route['404_override'] = 'error';

$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'login/about';
$route['read_data'] = 'login/read_data';
$route['update_data'] = 'login/update_data';
$route['tambah_data'] = 'login/tambah_data';
$route['halaman_admin'] = 'login/halaman_admin';
