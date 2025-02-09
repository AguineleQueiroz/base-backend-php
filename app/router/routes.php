<?php

    return [

        'POST' => [
            '/login' => 'auth\LoginController@store',
        ],
        'GET' => [
            '/' => 'ExampleController@home',
            '/login' => 'auth\LoginController@login',
            '/user/profile' => 'ExampleController@profile',
            '/user/create' => 'ExampleController@create',
            '/user/[0-9]+' => 'ExampleController@show',
        ],
        'PUT' => [

        ],
        'DELETE' => [

        ],

        //'/user/[0-9]+/name/[a-z]+' => 'ExampleController@userDetail',
        //'/user/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}+' => 'ExampleController@userDetail',
    ];