<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	 = 'front';


/*
!---------------------------------------------------
! 	Controller For Admin Profile
!---------------------------------------------------
*/
$route['admin'] 		  = 'admin/index';
$route['admin/dashboard'] 	  = 'admin/dashboard';
$route['admin/settings'] 	  = 'admin/settings';
$route['admin/profile'] 	  = 'admin/profile';
$route['admin/profile_update']  = 'admin/profile_update';

$route['admin/logout'] 		  = 'admin/logout';

/*
!---------------------------------------------------
! 	Admin Category
!---------------------------------------------------
*/
$route['admin/post_categories'] 	= 'post_categories/index';
$route['admin/post_categories/delete/(:num)'] 	= 'post_categories/delete/$1';


/*
!---------------------------------------------------
! 	Admin Post
!---------------------------------------------------
*/
$route['admin/post_list'] 	= 'post/index';
$route['admin/add_post'] 	= 'post/add_post';
$route['admin/post/delete/(:num)'] 	= 'post/delete/$1';





/*
!---------------------------------------------------
! 	Front 
!---------------------------------------------------
*/


$route['404_override'] 		   = 'error404'; //override by controller
$route['translate_uri_dashes'] = FALSE;


