<?php

namespace app\controllers;
use Exception;

class PublicController
{
    /**
     * @throws Exception
     */
    public function home() {
        return view('base', ['title' => 'teste']);
    }
}