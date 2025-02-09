<?php

namespace app\controllers\auth;
class LoginController
{
    public function login(): false|string {
        return view('auth.login',
            [ 'title' => 'Login' ]
        );
    }

    public function store(): false|string {
        var_dump($_POST);
        die();
    }
}