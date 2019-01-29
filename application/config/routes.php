<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	 = 'front';


/*
!---------------------------------------------------
! 	Controller For User
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
! 	Admin
!---------------------------------------------------
*/
$route['admin'] 	= 'admin/index';


/*
!---------------------------------------------------
! 	Front 
!---------------------------------------------------
*/


$route['404_override'] 		   = 'error404'; //override by controller
$route['translate_uri_dashes'] = FALSE;


