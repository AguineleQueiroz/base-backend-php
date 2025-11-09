<?php

    return [

        'POST' => [
            '/login' => 'auth\AuthController@store',
        ],
        'GET' => [
            '/' => 'ExampleController@home',
            '/login' => 'auth\AuthController@login',
            '/logout' => 'auth\AuthController@logout',

            '/user/profile' => 'ExampleController@profile',

            '/user/[0-9]+' => 'ExampleController@show',
            '/user/create' => 'ExampleController@create',
            '/user/[0-9]+/edit' => 'ExampleController@edit',
            '/user/[0-9]+/delete' => 'ExampleController@destroy',

        ],
        'PUT' => [

        ],
        'DELETE' => [

        ],

        //'/user/[0-9]+/name/[a-z]+' => 'ExampleController@userDetail',
        //'/user/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}+' => 'ExampleController@userDetail',
    ];