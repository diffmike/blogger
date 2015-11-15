<?php

/**
 * Routes list
 */
return [
	'blog\/(\d+)' 			=> 'PostController@getPost',
	'blog\/new' 			=> 'PostController@getNew',
	'blog\/create' 			=> 'PostController@postNew',
	'blog\/(\d+)\/edit' 	=> 'PostController@getEdit',
	'blog\/(\d+)\/udate' 	=> 'PostController@postEdit',
	'blog' 					=> 'PostController@getList',
	'' 						=> 'PostController@getIndex',
];