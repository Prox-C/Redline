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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Home */
$route['register'] = 'Home/register';
$route['login'] = 'Home/login';
$route['logout'] = 'Home/logout';

/* Admin Panel */
$route['admin/home'] = 'Admin/dashboard';

// Car Management
$route['admin/cars'] = 'Admin/getAllCars';
$route['admin/new-car'] = 'Admin/newCar';
$route['admin/addCar'] = 'Admin/addCar';
$route['admin/update-car/(:num)'] = 'Admin/editCar/$1';
$route['admin/updateCar/(:num)'] = 'Admin/updateCar/$1';
$route['admin/view/(:num)'] = 'Admin/viewCar/$1';

// Booking Management
$route['admin/bookings'] = 'Admin/getBookings';
$route['admin/updateStatus/(:num)'] = 'Admin/updateStatus/$1';

// Client Management
$route['admin/clients'] = 'Admin/getClients';
$route['admin/registerClient'] = 'Admin/registerClient';
$route['admin/updateClient/(:num)'] = 'Admin/updateClient/$1';
$route['admin/deleteClient/(:num)'] = 'Admin/deleteClient/$1';

// Manager Management
$route['admin/managers'] = 'Admin/getManagers';
$route['admin/registerManager'] = 'Admin/registerManager';
$route['admin/updateManager/(:num)'] = 'Admin/updateManager/$1';
$route['admin/deleteManager/(:num)'] = 'Admin/deleteManager/$1';


/* User/Client */
$route['home'] = 'User/getCars';
$route['search-cars'] = 'User/searchCars';
$route['view-car/(:num)'] = 'User/viewCar/$1';
$route['checkout'] = 'Book/checkout';
$route['book'] = 'Book/index';

// Bookings
$route['bookings/(:num)'] = 'Book/getClientBookings/$1';
$route['view-booking/(:num)'] = 'Book/getBooking/$1';
$route['cancel-booking/(:num)'] = 'Book/cancelBooking/$1';
