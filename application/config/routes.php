<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$route['404_override'] 		 = 'error404'; //override by controller
$route['default_controller'] = 'front';



/*
!---------------------------------------------------
! 	Controller For Admin Profile
!---------------------------------------------------
*/
$route['admin'] 		  		= 'admin/admin/index';
$route['admin/dashboard'] 	  	= 'admin/admin/dashboard';
$route['admin/settings'] 	  	= 'admin/admin/settings';
$route['admin/profile'] 	  	= 'admin/admin/profile';
$route['admin/profile_update']  = 'admin/admin/profile_update';
$route['admin/settings']  		= 'admin/admin/settings';
$route['admin/logout'] 		  	= 'admin/logout'; //for hightlight class list

/*
!---------------------------------------------------
! 	Front 
!---------------------------------------------------
*/
$route['blog/view/(:any)/(:num)'] 		= 'front/view_blog/$1/$2';
$route['blog/category/(:any)/(:num)/page/(:num)']	= 'front/blog_category/$1/$2/$3';
$route['blog'] 							= 'front/blog';
$route['blog/(:num)'] 					= 'front/blog/$1';
$route['post/view/(:any)/(:num)'] 		= 'front/post_details/$1/$2';

/*
!---------------------------------------------------
! 	Main Pages for Front view
!---------------------------------------------------
*/
$route['(:any)'] 			    = 'web/frontpage/view_blog/$1';


$route['translate_uri_dashes'] 	= FALSE;


