<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$route['default_controller'] = 'preschool/index.html';
$route['default_controller'] = 'Home/index_home';
$route['index_home'] = 'Home/index_home';
$route['login'] = 'Login/login';
$route['about'] = 'Home/about';
$route['appointment'] = 'Home/appointment';
$route['testimonials'] = 'Home/testimonials';
$route['classes'] = 'Home/classes';
$route['contact'] = 'Home/contact';
$route['facility'] = 'Home/facility';
$route['team'] = 'Home/team';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
