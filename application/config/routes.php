<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['posts/add'] = 'posts/add';
$route['posts/(:any)'] = 'posts/index/$1';
$route['posts'] = 'posts';
$route['default_controller'] = 'welcome';