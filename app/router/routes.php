<?php

    return [
        '/' => 'PublicController@home',
        '/user/profile' => 'UserController@profile',
        '/user/create' => 'UserController@createUser',
        '/user/[0-9]+' => 'UserController@userDetail',
        '/user/[0-9]+/name/[a-z]+' => 'UserController@userDetail',
        //'/user/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}+' => 'UserController@userDetail',
    ];