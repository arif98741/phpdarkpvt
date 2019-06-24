<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	 = 'front';


/*
!---------------------------------------------------
! 	Controller For Admin Profile
!---------------------------------------------------
*/
$route['admin'] 		  		= 'admin/index';
$route['admin/dashboard'] 	  	= 'admin/dashboard';
$route['admin/settings'] 	  	= 'admin/settings';
$route['admin/profile'] 	  	= 'admin/profile';
$route['admin/profile_update']  = 'admin/profile_update';
$route['admin/settings']  		= 'admin/settings';
$route['admin/logout'] 		  	= 'admin/logout'; //for hightlight class list

/*
!---------------------------------------------------
! 	Category Admin
!---------------------------------------------------
*/
$route['admin/post_categories'] 				= 'post_categories/index';
$route['admin/post_categories/delete/(:num)'] 	= 'post_categories/delete/$1';


/*
!---------------------------------------------------
! 	Post Details Admin
!---------------------------------------------------
*/
$route['admin/post_list'] 			= 'post/post_index';
$route['admin/add_post'] 			= 'post/add_post';
$route['admin/edit_post/(:num)'] 	= 'post/edit/$1';
$route['admin/post/delete/(:num)'] 	= 'post/delete/$1';

/*
!---------------------------------------------------
! 	Tag Details Admin
!---------------------------------------------------
*/
$route['admin/tag_list'] 			= 'tag/index';
$route['admin/tag/delete/(:num)'] 	= 'tag/delete/$1';


/*
!---------------------------------------------------
! 	Admin Blog List
!---------------------------------------------------
*/
$route['admin/blog_list'] 				= 'blog/index';
$route['admin/add_blog'] 				= 'blog/add_blog';
$route['admin/edit_blog/(:num)'] 		= 'blog/edit_blog/$1';
$route['admin/blog/delete/(:num)'] 		= 'blog/delete_blog/$1';
$route['admin/blog_cat_list'] 			= 'blog/blog_cat_list';
$route['admin/blog_category/edit/(:num)'] 	= 'blog/edit_blog_cat/$1';
$route['admin/blog/delete_cat/(:num)'] 	= 'blog/delete_blog_cat/$1';


/*
!---------------------------------------------------
! 	Admin Page List
!---------------------------------------------------
*/
$route['admin/page_list'] 			= 'page/index';
$route['admin/add_page'] 			= 'page/add_page';
$route['admin/edit_page/(:num)'] 	= 'page/edit_page/$1';
$route['admin/page/delete/(:num)'] 	= 'page/delete_page/$1';
$route['admin/page_cat_list'] 		= 'page/page_cat_list';
$route['admin/page_category/edit/(:num)'] 	= 'page/edit_page_cat/$1';
$route['admin/page/delete_cat/(:num)'] 	= 'page/delete_page_cat/$1';



/*
!---------------------------------------------------
! 	Front 
!---------------------------------------------------
*/
$route['blog/view/(:any)/(:num)'] 		= 'front/view_blog/$1/$2';
$route['blog/category/(:any)/(:num)']	= 'front/blog_category/$1/$2';
$route['blog'] 							= 'front/blog';
$route['post/view/(:any)/(:num)'] 		= 'front/post_details/$1/$2';
$route['404_override'] 		   			= 'error404'; //override by controller
$route['translate_uri_dashes'] 			= FALSE;


