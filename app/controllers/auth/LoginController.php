<?php

namespace app\controllers\auth;
class LoginController
{
    public function login(): false|string {
        return view('auth.login',
            [ 'title' => 'Login' ]
        );
    }

    public function store(): bool {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if(empty($email) || empty($password)) {
            setFlash('message', 'Email or password is required!');
            return redirect('/login');
        }

        $user = findAllByEmail($email);

        if(!$user) {
            setFlash('message', 'Email or password is not correct!');
            return redirect('/login');
        }

        if(!password_verify($password, $user->password)) return redirect('/login');

        $_SESSION['loggedUser'] = $user;
        return redirect('/');
    }
}