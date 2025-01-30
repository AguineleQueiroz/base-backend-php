<?php

namespace app\controllers;

use Exception;

class ExampleController
{
    /**
     * @throws Exception
     */
    public function home() {
        return view('home', [
            'title' => 'Home'
        ]);
    }
}