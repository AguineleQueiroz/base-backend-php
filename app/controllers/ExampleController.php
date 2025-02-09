<?php

namespace app\controllers;

use Exception;

class ExampleController
{
    /**
     * @throws Exception
     */
    public function home() {
        $users = all('users');

        return view('home', [
            'title' => 'Home',
            'users' => $users
        ]);
    }

    public function show($params) {
        if(!isset($params['user'])) {
            redirect('/');
        }

        $user = findBy('users', 'id', $params['user']);

        if(!$user) {
            redirect('/');
        }

        return view('show', [
            'title' => 'User Data',
            'user' => $user
        ]);
    }
}