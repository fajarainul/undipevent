<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//disini route untuk guest
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//disini route untuk admin
$route['admin/index'] = 'admin/c_home/index';


$route['admin/categories'] = 'admin/c_category/index';
$route['admin/categories/create'] = 'admin/c_category/create';
$route['admin/categories/edit/(:any)'] = 'admin/c_category/edit/$1';
$route['admin/categories/delete'] = 'admin/c_category/delete';



$route['admin/slider'] = 'admin/c_slider/index';

$route['admin/user'] = 'admin/c_user/index';
$route['admin/user/create'] = 'admin/c_user/create';
$route['admin/user/edit/(:any)'] = 'admin/c_user/edit/$1';
$route['admin/user/delete'] = 'admin/c_user/delete';

//disini route untuk eo
$route['eo/index'] = 'eo/c_post/index';

$route['eo/event/create'] = 'eo/c_post/create';

$route['eo/event/edit'] = 'eo/c_post/edit';

$route['eo/profile'] = 'eo/c_profile/index';

$route['eo/profile/edit'] = 'eo/c_profile/edit';


$route['migrate'] = 'migrate';


//disini route untuk sponsor