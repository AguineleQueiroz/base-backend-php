<?php

    return [
        '/' => 'ExampleController@home',
        '/user/profile' => 'ExampleController@profile',
        '/user/create' => 'ExampleController@createUser',
        '/user/[0-9]+' => 'ExampleController@userDetail',
        //'/user/[0-9]+/name/[a-z]+' => 'ExampleController@userDetail',
        //'/user/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}+' => 'ExampleController@userDetail',
    ];