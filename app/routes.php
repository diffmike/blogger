<?php
/**
 * Routes list
 */
return [
    'new'           => 'PostController@getNew',
    'create'        => 'PostController@postNew',
    '(\d+)\/edit'   => 'PostController@getEdit',
    '(\d+)\/update' => 'PostController@postEdit',
    '(\d+)\/delete' => 'PostController@getDelete',
    ''              => 'PostController@getIndex',
];
