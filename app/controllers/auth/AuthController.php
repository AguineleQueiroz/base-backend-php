<?php

namespace app\controllers\auth;
class AuthController
{
    public function login(): false|string {
        return view('auth.login',
            [ 'title' => 'Login' ]
        );
    }

    public function store(): bool {
        $email = filter_var($_POST['password'] ?? '', FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars($_POST['password'] ?? '', ENT_QUOTES, 'UTF-8');

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